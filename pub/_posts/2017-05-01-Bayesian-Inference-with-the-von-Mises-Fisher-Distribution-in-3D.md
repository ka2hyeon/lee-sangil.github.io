---
layout: single
title: Bayesian Inference with the von-Mises-Fisher Distribution in 3D
header:
  teaser: pub/vMF3D_teaser.png
conference: Writeup
links: 
 - paper: 
   link: http://www.jstraub.de/download/straub2017vonMisesFisherInference.pdf
   name: "Writeup"
---

{% include base_path %}
 
In [this
writeup]({{ base_path }}/download/straub2017vonMisesFisherInference.pdf),
I give an introduction to the von-Mises-Fisher (vMF) distribution which
is a commonly used isotropic distribution for directional data. The
writeup is an excerpt of my [PhD thesis]({{ base_path }}/pub/Nonparametric-Directional-Perception/index.html) with a focus on Bayesian
inference and computational considerations when working with the vMF
distribution.  While the initial discussion is general, some of the
results and derivations for efficient inference are specialized to 3D
directional data. Specifically, after the introduction of the vMF
distribution and two different conjugate prior distributions, I outline
general sampling from the posterior vMF distribution before deriving
the normalization of the prior and the marginal data distribution for
3D. The last two sections show the cumulative density function and the
entropy for the 3D vMF distribution.

