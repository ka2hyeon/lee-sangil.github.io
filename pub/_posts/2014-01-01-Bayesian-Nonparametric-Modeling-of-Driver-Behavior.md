---
title: Bayesian Nonparametric Modeling of Driver Behavior
header:
  teaser: /tumbnails/bnpDriver_tn.png
conference: IVS
links: 
 - paper: 
   link: http://www.jstraub.de/download/straub2014driver.pdf
   name: "Paper"
 - bibtex: 
   name: "Bibtex"
---

Modern vehicles are equipped with increasingly complex sensors. These
sensors generate large volumes of data that provide opportunities for
modeling and analysis. Here, we are interested in exploiting this data
to learn aspects of behaviors and the road network associated with
individual drivers. Our dataset is collected on a standard vehicle used
to commute to work and for personal trips. A Hidden Markov Model (HMM)
trained on the GPS position and orientation data is utilized to
compress the large amount of position information into a small amount
of road segment states. Each state has a set of observations, i.e. car
signals, associated with it that are quantized and modeled as draws
from a Hierarchical Dirichlet Process (HDP). The inference for the
topic distributions is carried out using an online variational
inference algorithm. The topic distributions over joint quantized car
signals characterize the driving situation in the respective road
state. In a novel manner, we demonstrate how the sparsity of the
personal road network of a driver in conjunction with a hierarchical
topic model allows data driven predictions about destinations as well
as likely road conditions.

## Bibtex <a id="bibtex"></a>
```
@inproceedings{straub2014driver,
  author = {Straub, Julian and Zheng, Sue and Fisher III, John W.},
  title = {Bayesian Nonparametric Modeling of Driver Behavior},
  year = {2014},
  booktitle ={IEEE Intelligent Vehicles Symposium},
  url ={http://www.jstraub.de/download/straub2014driver.pdf}
}
```

