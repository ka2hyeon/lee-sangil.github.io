---
title: "A Mixture of Manhattan Frames: Beyond the Manhattan World"
header:
  teaser: tumbnails/tn_MMF.png
conference: CVPR
links: 
 - paper: 
   link: http://www.jstraub.de/download/straub2014mmf.pdf
   name: "Paper"
 - supplement: 
   link: http://www.jstraub.de/download/straub2014mmf_supplemental.pdf
   name: "Supplement"
 - bibtex: 
   name: "Bibtex"
 - video: 
   link: https://www.youtube.com/watch?v=D9dz7YY7K4E
   name: "Video"
 - talk: 
   link: http://techtalks.tv/talks/a-mixture-of-manhattan-frames-beyond-the-manhattan-world/60355/
   name: "Talk"
 - slides: 
   link: http://www.jstraub.de/download/jstraub_2014_CVPR_slides.pdf
   name: "Slides"
 - code: 
   link: http://people.csail.mit.edu/jstraub/index.php?site=mmf_code
   name: "Code"
 - dataset: 
   link: http://people.csail.mit.edu/jstraub/index.php?site=nyu_depth_v2_mmf
   name: "Dataset"
excerpt: "Man-made objects and buildings exhibit a clear structure in the form of orthogonal and parallel planes. This observation, commonly referred to as the Manhattan-world (MW) model, has been widely exploited in computer vision and robotics. At both larger and smaller scales, the scale of a city, indoor scenes or smaller objects, a more flexible model is merited. Here, we propose a novel probabilistic model that describes scenes as mixtures of Manhattan Frames (MF) - sets of orthogonal and parallel planes."
---

{% include youtubePlayer.html id="D9dz7YY7K4E" %}

Man-made objects and buildings exhibit a clear structure in the form of
orthogonal and parallel planes. This observation, commonly referred to
as the Manhattan-world (MW) model, has been widely exploited in
computer vision and robotics. At both larger and smaller scales, the
scale of a city, indoor scenes or smaller objects, a more flexible
model is merited. Here, we propose a novel probabilistic model that
describes scenes as mixtures of Manhattan Frames (MF) – sets of
orthogonal and parallel planes. By exploiting the geometry of both
orthogonality constraints and the unit sphere, our approach allows us
to describe man-made structures in a flexible way, We propose an
inference that is a hybrid of Gibbs sampling and gradient-based
optimization of a robust cost function over the SO(3) manifold. A MF
merging mechanism allows us to infer the model order. We show the
versatility of our Mixture-of-Manhattan-Frames (MMF) model by
describing complex scenes from ASUS Xtion PRO depth images and
aerial-LiDAR measurements of an urban center. Additionally, we
demonstrate that the model lends itself to depth focal-length
calibration of RGB-D cameras as well as to plane segmentation.

##  Mixture of Manhattan Frames extracted from RGB-D scenes

Inference results of the MMF model over different kinds of indoor
scenes. We show the RGB images of the scene (1st row), the assignment
to MFs in the 2nd row (MF 1 red, MF 2 green, MF 3 blue). We depict a
plane segmentation for each scene in the 3rd row. The last row shows
the negative log likelihood of each normal under the inferred model –
decreasing probability from black over red to yellow. Black areas in
the images designate pixels with no depth information.

## Mixture of Manhattan Frames extracted from Cambridge LiDAR data

MMF extraction from the LiDAR scanned urban scene. There is a clear
separation into three MFs colored red, green and blue with the
orientations indicated by the axes in the top-left corner. Normals
associated with the upward pointing axes of the MFs were colored in
gray to reveal the composition of the scene more clearly.

## Mixture of Manhattan Frames Code

We are releasing the MMF inference code under an academic license. You
can download it from
[here](http://people.csail.mit.edu/jstraub/index.php?site=mmf_code).

## Mixture of Manhattan Frames extracted from NYU depth dataset V2

We ran the MMF inference on the full NYU depth dataset V2 [[Silberman
2012](http://cs.nyu.edu/~silberman/datasets/nyu_depth_v2.html)]
consisting of 1449 RGB-D frames and provide the results as a dataset
which can be found
[here](http://people.csail.mit.edu/jstraub/index.php?site=nyu_depth_v2_mmf).

## Bibtex <a id="bibtex"></a>
```
@inproceedings{straub2014mmf,
  author = {Straub, Julian and Rosman, Guy and Freifeld, Oren and Leonard, John J. and Fisher III, John W.},
  title = {A Mixture of Manhattan Frames: Beyond the Manhattan World},
  year = {2014},
  booktitle ={CVPR},
  url ={http://www.jstraub.de/download/straub2014mmf.pdf}
}
```
