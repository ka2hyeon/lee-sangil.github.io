---
title:  Visual Localization based on Binary Features
header:
  teaser: /tumbnails/TUMLogo_tn.png
conference: Diploma Thesis
links: 
 - paper: 
   link: http://www.jstraub.de/download/Straub12VisualLocalizationBasedOnBinaryFeatures.pdf
   name: "Thesis"
 - bibtex: 
   name: "Bibtex"
 - code: 
   link: https://github.com/jstraub/ptamRosBinaryFeatureRelocalization
   name: "Code"
---
I wrote my thesis in the [NAVVIS](http://navvis.de/) group of the [Institute for Media
 Technology](http://www.lmt.ei.tum.de/en/home.html) at the [Technische Universität München](http://www.tum.de/en/homepage/).

## Abstract

Recently, Google, Microsoft and several start-ups have started to
launch services for indoor maps. Due to its potentially high
localization accuracy and its independence from hardware installations,
visual indoor localization and navigation for hand-held devices is
becoming a hot topic. A visual localization system consists of a visual
odometry system with an integrated relocalization algorithm and a
global localization mechanism for initialization. The deployment of
feature based pose recovery algorithms on hand-held devices has mostly
been avoided, due to computational complexity of the feature
descriptors. Binary features like Binary Robust Features (BRIEF)
[CLSF10] promise to overcome this problem as they are about 40 times
faster to extract than the quasi standard descriptor SURF [BTVG06]. At
the same time they offer comparable matching precision under small
rotations and scale changes. This thesis investigates in the deployment
of binary features for global pose recovery as well as relocalization
within the visual odometry system. Integrated in the Parallel Tracking
and Mapping (PTAM) algorithm [KM07], the developed BRIEF based
relocalization algorithm was found to yield accurate, fast and robust
pose recovery even in sparsely textured and repetitive indoor
environments. For global localization, a novel quantizer for binary
features was developed to enable Content Based Image Retrieval (CBIR)
[SZ03]. In combination with a Virtual Views database [HSH+12b] the high
distinctiveness of BRIEF features can thus be leveraged to perform
accurate global visual localization. This large scale visual
localization system matches the precision of state of the art SURF
based system, while reducing the computational burden of feature
extraction significantly. To conclude, deploying binary features for
pose recovery leads to significant speedups in the feature extraction
without loss in localization performance. This makes binary features
ideal for mobile-device visual localization systems.

## Bibtex <a id="bibtex"></a>
```
@mastersthesis{straub2012diplomathesis,
  author = {Straub, Julian},
  title = {Visual Localization based on Binary Features},
  school = {Technische Universi{"a}t M{"u}nchen},
  month = {Aug},
  year = {2012},
  address = {M{"u}nchen},
  url =
  {http://www.jstraub.de/download/straub2012diplomathesis.pdf}
}
```

