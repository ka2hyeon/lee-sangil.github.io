---
title: "The Manhattan Frame Model-Manhattan World Inference in the Space of Surface Normals"
header:
  teaser: tumbnails/teaserMwMf.png
conference: TPAMI
links: 
 - paper: 
   link: http://ieeexplore.ieee.org/stamp/stamp.jsp?arnumber=7839295
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
---

Objects and structures within man-made environments typically exhibit a
high degree of organization in the form of orthogonal and parallel
planes. Traditional approaches utilize these regularities via the
restrictive, and rather local, Manhattan World (MW) assumption which
posits that every plane is perpendicular to one of the axes of a single
coordinate system. The aforementioned regularities are especially
evident in the surface normal distribution of a scene where they
manifest as orthogonally-coupled clusters.  This motivates the
introduction of the Manhattan-Frame (MF) model which captures the
notion of a MW in the surface normals space, the unit sphere, and two
probabilistic MF models over this space.  First, for a single MF we
propose novel real-time MAP inference algorithms, evaluate their
performance and their use in drift-free rotation estimation. Second, to
capture the complexity of real-world scenes at a global scale, we
extend the MF model to a probabilistic mixture of Manhattan Frames
(MMF). For MMF inference we propose a simple MAP inference algorithm
and an adaptive Markov-Chain Monte-Carlo sampling algorithm with
Metropolis-Hastings split/merge moves that let us infer the unknown
number of mixture components. We demonstrate the versatility of the MMF
model and inference algorithm across several scales of man-made
environments.

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

