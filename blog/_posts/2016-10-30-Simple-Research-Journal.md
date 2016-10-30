---
title: Simple Research Journal
header:
  image: blog/simpleResearchJournal.png
---

Writing down insights and conclusions from things I read is my way of
processing them more deeply. In the past I have been struggling with
just how and where to write them down so I can later refer back to
them quickly and easily.  

I have tried categorizing thoughts and
putting them into separate files depending on the category, and having a
single big file of things. The first failed because of the effort it
takes to categorize and potentially start a new category file and the
second approach meant a super large file that was hard to parse
quickly.

I think really what I was looking for is just a simple journaling
system in which it takes virtually no effort to write a thought down.
In the spirit of keeping things simple, I added a single alias to my
`.bashrc` -- namely "j" that will simply open a file in a
dropbox-synced folder named after the current date:

```
alias j="vim $HOME/Dropbox/journal/$(date +%F)-entry.txt"
```

This means all thoughts of a single day naturally end up in a single
file which makes sense since they are usually related anyways.

So far I really like the simplicity of this approach since I can access those
text files on all my machines easily if I want to refer back to
anything I wrote down. Additionally, I can simply run `grep` on all
files in the folder to search for keywords.
I also really like that each file is not that huge and that I
can skim a file quickly. 

How do you organize your thoughts and by what means can refer back to
them?
