---
layout: single
title: Stop Retyping Commands
header:
  image: blog/fzf.png
---
 
Stop retyping the same commands over and over again! Make your
computer do some work for you and put some of those GBs of storage and
compute power to good use. If, like me, you use the shell a lot this will
literally save a chunk of your life. The setup I describe in the
following also serves as a kind of long term memory for how to use a
certain command or program. You can just search back through all 
previous commands and quickly refresh your memory on how you have used
a command previously.

You might already know the `Ctrl-R` command to search backward through
the history of commands you have typed. If not try it. It is magical.
The problem is that those searches have to exactly match parts of the command
you are looking for and you can only see the latest command matching
your search. In short the default `Ctrl-R` can be pretty frustrating.

There are way better tools for searching through large text files such
as your bash command history. The one I personally use is
[fzf](https://github.com/junegunn/fzf) since it is light weight and fast
and integrates well with vim and tmux (more about that some other time).
If you only ever use a single terminal at a time just install fzf and
start using the new and amazing `Ctrl-R`: fzf performs [fuzzy
matching](https://en.wikipedia.org/wiki/Approximate_string_matching) of
the string you enter against your history or text file and it displays
a sorted list of the best matching strings which is updated in real-time
as you type your search. That means you can enter any substring of the
command you are looking for and fzf will find it.

It gets more interesting if you have multiple terminals open at the
same time (maybe via tmux). In that case the command history fragments
and you cannot search a command you typed into one shell in another
one. Additionally, commands are lost whenever you close a shell while
another one still exists.
To circumvent this you can make bash log every command you enter. Simply
add the following line to your `.bashrc`:

```
export PROMPT_COMMAND='if [ "$(id -u)" -ne 0 ]; then echo "$(date "+%Y-%m-%d.%H:%M:%S") $(pwd) $(history 1)" >> ~/.logs/bash-history-$(date "+%Y-%m-%d").log; fi;' 
```

Bash executes the command in its `PROMPT_COMMAND` variable right after you hit
enter to execute. The if statement makes sure
you are not root, and then logs the time, folder and the command into a log
file in your home directory `~/.logs/`.  Make sure to create that directory.
An additional advantage of using this command-logging system is that
you could easily share the commands between computers.

Next you need to configure fzf to search through all files in the
`~/.logs` folder to find previously entered commands.
To do this replace all occurrences of the command `history` in your fzf config file
`~/.fzf.bash` with:

```
cat ~/.logs/* | cut -f 1,6- --delimiter=\" \"
```

Now you should be able to use `Ctrl-R` with fzf across terminals and
bash sessions. Enjoy!

