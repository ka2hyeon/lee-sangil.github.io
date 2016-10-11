---
title: Fast Relocalization for Visual Odometry using Binary Features
header:
  teaser: /tumbnails/FastRelocalization_tn.png
conference: ICIP
links: 
 - paper: 
   link: http://www.jstraub.de/download/straub2013fastRelocalization.pdf
   name: "Paper"
 - bibtex: 
   name: "Bibtex"
 - code: 
   link: https://github.com/jstraub/ptamRosBinaryFeatureRelocalization
   name: "Code"
---

State-of-the-art visual odometry algorithms achieve remarkable efficiency and
accuracy. Under realistic conditions, however, tracking failures are inevitable
and to continue tracking, a recovery strategy is required. In this paper, we
propose a relocalization system that enables realtime, 6D pose recovery for
wide baselines. Our approach targets specifically resource-constrained hardware
such as mobile phones. By exploiting the properties of low-complexity binary
feature descriptors, nearest-neighbor search is performed efficiently using
Locality Sensitive Hashing.

## Bibtex <a id="bibtex"></a>
```
@INPROCEEDINGS{straub2013fastRelocalization,
  author = {Julian Straub AND Sebastian Hilsenbeck AND Georg Schroth AND Robert Huitl AND Andreas M{"o}ller AND Eckehard Steinbach},
  title = {Fast Relocalization For Visual Odometry Using Binary Features},
  booktitle = {{IEEE} International Conference on Image Processing ({ICIP})},
  month = {Sep},
  year = {2013},
  address = {Melbourne, Australia},
  url = {http://www.jstraub.de/download/straub2013fastRelocalization.pdf}
}
```

