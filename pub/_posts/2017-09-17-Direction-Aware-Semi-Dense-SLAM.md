---
title: "Direction-Aware Semi-Dense SLAM"
header:
  teaser: tumbnails/teaserDirSLAM.png
conference: arxiv
links: 
 - paper: 
   link: 
   name: "Paper"
 - bibtex: 
   name: "Bibtex"
 - video: 
   link: https://youtu.be/1cSLE7D3YsQ
   name: "Video Staircase"
 - video: 
   link: https://youtu.be/viX-5EykS5c
   name: "Video Office"
 - code: 
   link: https://github.com/jstraub/tdp
   name: "Code"
---

To aide simultaneous localization and mapping (SLAM), future perception
systems will incorporate forms of scene understanding.  In a step
towards fully integrated probabilistic geometric scene understanding,
localization and mapping we propose the first direction-aware
semi-dense SLAM system.  It jointly infers the directional Stata Center
World (SCW) segmentation and a surfel-based semi-dense map while
performing real-time camera tracking.  The joint SCW map model connects
a scene-wide Bayesian nonparametric Dirichlet Process von-Mises-Fisher
mixture model (DP-vMF) prior on surfel orientations with the local
surfel locations via a conditional random field (CRF).  Camera tracking
leverages the SCW segmentation to improve efficiency via guided
observation selection.  Results demonstrate improved SLAM accuracy and
tracking efficiency at state of the art performance.

{% include base_path %}

## Bibtex <a id="bibtex"></a>
```
@inproceedings{straub2017dirAware,
  author = {Straub, Julian and Cabezas, Randi and Leonard, John and Fisher III, John W.},
  title = {Direction-Aware Semi-Dense SLAM},
  year = {2017},
  booktitle ={arxiv}
}
```



