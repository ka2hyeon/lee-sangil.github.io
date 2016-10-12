---
title: "Real-time Manhattan World Rotation Estimation in 3D"
header:
  teaser: /tumbnails/rtmf_tn.png
conference: IROS
links: 
 - paper: 
   link: http://www.jstraub.de/download/straub2015rtmf_web.pdf
   name: "Paper"
 - bibtex: 
   name: "Bibtex"
 - video: 
   link: https://youtu.be/5pFEEquUYd8
   name: "Video"
 - slides: 
   link: http://www.jstraub.de/download/straub2015rtmf_slides.pdf
   name: "Slides"
 - code: 
   link: https://github.com/jstraub/rtmf
   name: "Code"
 - dataset: 
   link: http://people.csail.mit.edu/jstraub/index.php?site=nyu_depth_v2_mmf
   name: "Dataset"
---
We propose three novel algorithms to estimate the full 3D rotation to
the surrounding Manhattan World (MW) in as short as 20ms using
surface-normals derived from the depth channel of a RGB-D camera.
Importantly, this rotation estimate acts as a structure compass which
can be used to estimate the bias of an odometry system, such as an
inertial measurement unit (IMU), and thus remove its angular drift.

{% include youtubePlayer.html id="5pFEEquUYd8" %}

## Bibtex <a id="bibtex"></a>
```
@inproceedings{ straub2015rtmf,
  author = {Straub, Julian and Bhandari, Nishchal and Leonard, John J.  and Fisher III, John W.},
  title = {Real-time Manhattan World Rotation Estimation in 3D},
  year = {2015},
  booktitle = {IROS},
  url =
  {http://www.jstraub.de/download/straub2015rtmf.pdf}
}
```

