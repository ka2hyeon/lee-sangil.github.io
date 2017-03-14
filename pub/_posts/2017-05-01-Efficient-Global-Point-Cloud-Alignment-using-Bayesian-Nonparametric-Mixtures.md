---
title:  Efficient Global Point Cloud Alignment using Bayesian Nonparametric Mixtures
header:
  teaser: https://upload.wikimedia.org/wikipedia/commons/c/c3/Schlegel_wireframe_600-cell_vertex-centered.png
conference: CVPR
links: 
 - paper: 
   link: http://www.jstraub.de/download/straub2017globTrans.pdf
   name: "Paper"
 - bibtex: 
   name: "Bibtex"
 - code: 
   link: https://github.com/jstraub/
   name: "Code"
---

Point cloud alignment is a common problem in computer vision and robotics, with applications ranging from 3D object recognition to reconstruction.  We propose a novel approach to the alignment problem that utilizes Bayesian nonparametrics to describe the point cloud and surface normal densities, and branch and bound (BB) optimization to recover the relative transformation.  BB uses a novel, refinable, near-uniform tessellation of  rotation space using 4D tetrahedra, leading to more efficient optimization compared to the common axis-angle tessellation.  We provide objective function bounds for pruning given the proposed tessellation, and prove that BB converges to the optimum of the cost function along with providing its computational complexity.  Finally, we empirically demonstrate the efficiency of the proposed approach as well as its robustness to real-world conditions such as missing data and partial overlap.

## Bibtex <a id="bibtex"></a>
```
@INPROCEEDINGS{straub2017globTrans,
  author = {Straub, Julian and Campbell, Trevor and How, Jonathan P. and Fisher III, John W.},
  title = {Efficient Global Point Cloud Alignment using Bayesian Nonparametric Mixtures},
  booktitle = {CVPR},
  year = {2017},
  url = {http://www.jstraub.de/download/straub2017globTrans.pdf}
}
```


