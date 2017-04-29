---
title: Nonparametric Directional Perception
header:
  teaser: 
conference: PhD Thesis
links: 
 - paper: 
   link: http://www.jstraub.de/download/straub2017phdthesis.pdf
   name: "PhD Thesis (high res.)"
 - slides: 
   link: http://www.jstraub.de/download/straub2017phdthesis_lowRes.pdf
   name: "PhD Thesis (low res.)"
 - bibtex: 
   name: "Bibtex"
---

Artificial perception systems, like autonomous cars and augmented
reality headsets, rely on dense 3D sensing technology such as RGB-D
cameras and LiDAR scanners.  Due to the structural simplicity of
man-made environments, understanding and leveraging not only the 3D
data but also the local orientations of the constituent surfaces, has
huge potential.  From an indoor scene to large-scale urban
environments, a large fraction of the surfaces can be described by just
a few planes with even fewer different normal directions.  This
sparsity is evident in the surface normal distributions, which exhibit
a small number of concentrated clusters.  In this work, I draw a
rigorous connection between surface normal distributions and 3D
structure, and explore this connection in light of different
environmental assumptions to further 3D perception.  Specifically, I
propose the concepts of the Manhattan Frame and the unconstrained
directional segmentation. These capture, in the space of surface
normals, scenes composed of multiple Manhattan Worlds and more general
Stata Center Worlds, in which the orthogonality assumption of the
Manhattan World is not applicable.  This exploration is theoretically
founded in Bayesian nonparametric models, which capture two key
properties of the 3D sensing process of an artificial perception
system: (1) the inherent sequential nature of data acquisition and (2)
that the required model complexity grows with the amount of observed
data.  Herein, I derive inference algorithms for directional clustering
and segmentation which inherently exploit and respect these properties.
The fundamental insights gleaned from the connection between surface
normal distributions and 3D structure lead to practical advances in
scene segmentation, drift-free rotation estimation, global point cloud
registration and real-time direction-aware 3D reconstruction to aid
artificial perception systems.

## Bibtex <a id="bibtex"></a>
```
@phdthesis{straub2017phdthesis,
  author       = {Straub, Julian}, 
  title        = {Nonparametric Directional Perception},
  school       = {Massachusetts Institute of Technology},
  year         = 2017,
  address      = {77 Massachusetts Avenue, Cambridge, MA 02139},
  month        = 5,
}
```


