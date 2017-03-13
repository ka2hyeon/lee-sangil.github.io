---
title: "The Manhattan Frame Model-Manhattan World Inference in the Space of Surface Normals"
header:
  teaser: tumbnails/tn_MMF.png
conference: TPAMI
links: 
 - paper: 
   link: http://www.jstraub.de/download/straub2017mmf.pdf
   name: "Paper"
 - bibtex: 
   name: "Bibtex"
 - video: 
   link: https://www.youtube.com/watch?v=D9dz7YY7K4E
   name: "Video"
 - code: 
   link: /mmf-code/index.php
   name: "Code"
 - dataset: 
   link: /_pages/nyu-mmf-dataset/
   name: "Dataset"
excerpt: "Man-made objects and buildings exhibit a clear structure in the form of orthogonal and parallel planes. This observation, commonly referred to as the Manhattan-world (MW) model, has been widely exploited in computer vision and robotics. At both larger and smaller scales, the scale of a city, indoor scenes or smaller objects, a more flexible model is merited. Here, we propose a novel probabilistic model that describes scenes as mixtures of Manhattan Frames (MF) - sets of orthogonal and parallel planes."
---

{% include base_path %}

## Mixture of Manhattan Frames Code

We are releasing the MMF inference code under an academic license. You
can download it from
[here]({{ base_path }}/mmf-code/).

## Mixture of Manhattan Frames extracted from NYU depth dataset v2

We ran the MMF inference on the full NYU depth dataset v2 [[Silberman
2012](http://cs.nyu.edu/~silberman/datasets/nyu_depth_v2.html)]
consisting of 1449 RGB-D frames and provide the results as a dataset
which can be found
[here]({{ base_path }}/_pages/nyu-mmf-dataset/).

## Bibtex <a id="bibtex"></a>
```
@inproceedings{straub2017manhattan,
  author = {Straub, Julian and Freifeld, Oren and Rosman, Guy and Leonard, John J. and Fisher III, John W.},
  title = {The Manhattan Frame Model---Manhattan World Inference in the Space of Surface Normals},
  year = {2017},
  booktitle ={IEEE Transactions on Pattern Analysis and Machine Intelligence (TPAMI)},
  url ={http://www.jstraub.de/download/straub2017manhattan.pdf}
}
```

