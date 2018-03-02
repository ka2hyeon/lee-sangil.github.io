---
title: "Deep Reinforcement Learning from Visually Demonstrated Pick-and-Place of Unclassified Objects"
header:
  teaser: tumbnails/iros2018.jpg
conference: IROS2018
links: 
 - paper: 
   link: http://ieeexplore.ieee.org/abstract/document/7832309/
   name: "Paper"
 - bibtex: 
   name: "Bibtex"
---

Learning from expert's demonstration is a good way of teaching complex policies to a robot, but it usually requires a tedious teaching process during which the demonstrator should manipulate the target robot. In this research, we investigate a robot learning over a human's shoulder, which means a demonstration is given as a form of image data, not kinesthetic data. The human provides the set of images with a comment of whether a task terminates or not, and the robot learns what the human performed. For the purpose, the robot is trained to extract features which represent the most discriminable task by optimizing the objective function aiming to reduce the variation of the features of terminated states. Then the robot uses these features as a state and finds an optimal policy by reinforcement learning. We set a problem of learning a pick-and-place task assuming that the robot does not know 1) the interactive dynamics, and 2) any classification label of the objects in the task. We show that our learning agent finds the features to specify a task goal and improves its policy to attain the self-set goal. 


## Bibtex <a id="bibtex"></a>
```
@article{article,
	author = {Lee, S and Kim, P and Kim, C and Lee, H and Kim, H.J.},
	year = {2017},
	month = {01},
	pages = {424-431},
	title = {Survey on visual odometry technology for unmanned systems},
	volume = {23},
	booktitle = {Journal of Institute of Control, Robotics and Systems}
}
```



