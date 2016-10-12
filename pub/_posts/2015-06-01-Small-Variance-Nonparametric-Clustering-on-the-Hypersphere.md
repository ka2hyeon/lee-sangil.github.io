---
title: Small-Variance Nonparametric Clustering on the Hypersphere
header:
  teaser: /tumbnails/ddpvmf_tn.png
conference: ICCV
links: 
 - paper: 
   link: http://www.jstraub.de/download/straub2015ddpvmf_web.pdf
   name: "Paper"
 - supplement: 
   link: http://www.jstraub.de/download/straub2015ddpvmf_supp.pdf
   name: "Supplement"
 - abstract: 
   link: http://www.jstraub.de/download/straub2015ddpvmf_extAbst.pdf
   name: "Ext. Abstract"
 - bibtex: 
   name: "Bibtex"
 - video: 
   link: https://youtu.be/wLP18q80oAE
   name: "Video"
 - talk: 
   link: http://www.jstraub.de/download/straub2015ddpvmf_poster.pdf
   name: "Poster"
 - slides: 
   link: http://www.jstraub.de/download/straub2015ddpvmf_slides.pdf
   name: "Slides"
 - code: 
   link: https://github.com/jstraub/dpMMlowVar
   name: "Code"
 - dataset: 
   link: 
   name: "Dataset"
excerpt: "Based on the small-variance limit of Bayesian nonparametric von-Mises-Fisher (vMF) mixture distributions, we propose two new flexible and efficient k-means-like clustering algorithms for directional data such as surface normals. The first, DP-vMF-means, is a batch clustering algorithm derived from the Dirichlet process (DP) vMF mixture. Recognizing the sequential nature of data collection in many applications, we extend this algorithm to DDP-vMF-means, which infers temporally evolving cluster structure from streaming data."
---

Structural regularities in man-made environments reflect in the
distribution of their surface normals. Describing these surface normal
distributions is important in many computer vision applications, such
as scene understanding, plane segmentation, and regularization of 3D
reconstructions. Based on the small-variance limit of Bayesian
nonparametric von-Mises-Fisher (vMF) mixture distributions, we propose
two new flexible and efficient k-means-like clustering algorithms for
directional data such as surface normals. The first, DP-vMF-means, is a
batch clustering algorithm derived from the Dirichlet process (DP) vMF
mixture. Recognizing the sequential nature of data collection in many
applications, we extend this algorithm to DDP-vMF-means, which infers
temporally evolving cluster structure from streaming data. Both
algorithms naturally respect the geometry of directional data, which
lies on the unit sphere. We demonstrate their performance on synthetic
directional data and real 3D surface normals from RGB-D sensors. While
our experiments focus on 3D data, both algorithms generalize to high
dimensional directional data such as protein backbone configurations
and semantic word vectors.

{% include youtubePlayer.html id="wLP18q80oAE" %}

Man-made environments and objects exhibit clear structural regularities
such as planar or rounded surfaces. These properties are evident on all
scales from small objects such as books, to medium-sized scenes like
tables, rooms and buildings and even to the organization of whole
cities. Such regularities can be captured in the statistics of surface
normals that describe the local differential structure of a shape.
These statistics contain valuable information that can be used for
scene understanding, plane segmentation, or to regularize a 3D
reconstruction.

Inference algorithms in fields such as robotics or augmented reality,
which would benefit from the use of surface normal statistics, are not
generally provided a single batch of data a priori. Instead, they are
often provided a stream of data batches from depth cameras. Thus,
capturing the surface normal statistics of man-made structures often
necessitates the temporal integration of observations from a vast data
stream of varying cluster mixtures. Additionally, such applications
pose hard constraints on the amount of computational power available,
as well as tight timing constraints.

We address these challenges by focusing on flexible Bayesian
nonparametric (BNP) Dirichlet process mixture models (DP-MM) which
describe the distribution of surface normals in their natural space,
the unit sphere in 3D. Taking the small variance asymptotic limit of
the DP-MM of von-Mises-Fisher (vMF) distributions, we obtain a fast
k-means-like algorithm, which we call DP-vMF-means, to perform
nonparametric clustering of data on the unit hypersphere. DP-vMF-means
is not much more complicated than spherical k-means as you can see in
this [basic python-based
implementation](https://github.com/jstraub/dpMMlowVar/blob/master/python/dpvMFmeans.py).
Furthermore, we propose a novel dependent DP mixture of vMF
distributions to achieve integration of directional data into a
temporally consistent streaming model. Small variance asymptotic
analysis yields the k-means-like DDP-vMF-means algorithm.

## Nonparametric directional clustering of scenes from the NYU dataset
with DP-vMF-means

![clustering examples]({{ base_path }}/images/pub/dpvmfmeans/figureNYU_S_cropped.png "clustering examples")

Directional segmentation of scenes from the [NYU v2 RGB-D dataset](http://cs.nyu.edu/~silberman/datasets/nyu_depth_v2.html) as
implied by surface normal clusters. The complexity of the scenes
increases from left to right as can be seen from the RGB images. The
second row shows the clustering inferred by DP-vMF-Means while the
third and fourth show the spherical k-means results. Black denotes
missing data due to sensor limitations. Note that DP-vMF-means adapts
the number of clusters to the complexity of the scene.

## Temporally consistent directional clustering with DDP-vMF-means

![temporal clustering examples]({{ base_path }}/images/pub/dpvmfmeans/figureDDP_S_cropped.png "temporal clustering example")

Clustering of a surface normal stream recorded when walking a 90 degree
turn in an office environment (see [video](https://youtu.be/wLP18q80oAE) above as well). We depict
key-frames color-coded with the implied surface-normal clustering for
three clustering algorithms. The plots in the second and third row
depict the percentage of normals associated to the respective cluster
for DDP-vMF-means and sequential DP-vMF-means. Note that only the
clustering obtained via the DDP-vMF-means algorithm is consistent
across the whole run.

## Bibtex <a id="bibtex"></a>
```
@inproceedings{ straub2015ddpvmf,
   author = {Straub, Julian and Campbell, Trevor and How, Jonathan P. and Fisher III, John W.},
   title = {Small-Variance Nonparametric Clustering on the Hypersphere},
   year = {2015},
   booktitle = {CVPR},
   url = {http://www.jstraub.de/download/straub2015ddpvmf.pdf}
}
```

