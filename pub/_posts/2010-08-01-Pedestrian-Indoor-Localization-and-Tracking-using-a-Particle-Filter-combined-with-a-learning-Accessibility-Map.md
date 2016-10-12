---
title: 
header:
  teaser: /tumbnails/trainedAM_tn.png
conference: Bachelor Thesis
links: 
 - paper: 
   link: http://www.jstraub.de/bachelor-thesis-pedestrian-indoor-localization-tracking-particle-filter-combined-learning-accessibility-map/
   name: "Thesis"
 - bibtex: 
   name: "Bibtex"
 - video1: 
   link: http://youtu.be/dcmU1IVWU-s
   name: "Video 1"
 - video2: 
   link: http://youtu.be/OT1KjUI4IkM
   name: "Video 2"
---

As mobile phones are starting to get equipped with inertial sensors,
indoor navigation for pedestrians becomes an increasingly interesting
topic in research. This work aims to develop and evaluate the use of a
Particle Filter to deal with noisy sensor measurements of an Inertial
Measurement Unit (IMU) providing localization and tracking of a
pedestrian in indoor environments. Designed by Martin Schäfer at the
[Institute for Real-Time Computer Systems
(RCS)](http://www.rcs.ei.tum.de/en/home/), the so called
[PiNav-System](http://www.rcs.ei.tum.de/research/pinav-pedestrian-indoor-navigation/) was used, which can extract the motion of a person from
inertial sensor measurements. On this basis a Particle Filter was
implemented, which uses Dead Reckoning in combination with a geometric
floor plan to localize and track a person wearing the PiNav-System in a
building. In addition the concept of the Accessibility Map (AM) is
proposed which reflects human walking preferences in the degree of
accessibility of space in a floor and which makes it possible to
exploit this information in the Particle Filter. Reinterpreting the AM
as a Radial Basis Function Network, a special type of Neural Network, a
method for learning accessibility of space in a floor is derived.
Measurements show that the additional use of the AM in the Particle
Filter yields an improvement in the localization accuracy of up to 32%,
resulting in an average accuracy of 1.1m. Deploying the AM and the
learning AM, also a more robust tracking is observed. Hence, besides
the ability to monitor the walking patterns of a pedestrian in a
building with a Particle Filter, the localization accuracy and the
tracing robustness could be enhanced by the proposed AM.

## Results

The first video shows how a person can be localized and tracked within
a known indoor environment using a particle filter.

{% include youtubePlayer.html id="dcmU1IVWU-s" %}

In the second video, it can be observed how the Accessibility Map (AM)
learns higher accessibility in areas where the standard deviation of
the particle cloud is low and hence the tracking is good.

{% include youtubePlayer.html id="OT1KjUI4IkM" %}

## Comments

At the end of the Thesis it became more and more obvious, that what I
was trying to do with the AM, was basically Self Localization and
Mapping (SLAM). From the prior knowledge of the outline of the floor, I
was trying to refine this world model by learning more detailed
information about the occupancy of the space in the building while
localizing the person at the same time. This is the exactly the aim of
SLAM.

## Bibtex <a id="bibtex"></a>
```
```

