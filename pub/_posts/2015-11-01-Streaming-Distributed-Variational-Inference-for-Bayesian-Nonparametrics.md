---
title: Streaming, Distributed Variational Inference for Bayesian Nonparametrics
header:
  teaser:
conference: NIPS
links: 
 - paper: 
   link: http://arxiv.org/abs/1510.09161
   name: "Paper"
 - supplement: 
   link: http://arxiv.org/abs/1510.09161 
   name: "Supplement"
 - bibtex: 
   name: "Bibtex"
 - code: 
   link: https://github.com/trevorcampbell/sda-bnp
   name: "Code"
---
This paper presents a methodology for creating streaming, distributed
inference algorithms for Bayesian nonparametric (BNP) models. In the
proposed framework, processing nodes receive a sequence of data
minibatches, compute a variational posterior for each, and make
asynchronous streaming updates to a central model.

## Bibtex <a id="bibtex"></a>
```
@inproceedings{campbell2015streaming,
  author = {Campbell, Trevor and Straub, Julian and Fisher III, John W. and How, Jonathan},
  title = {Streaming, Distributed Variational Inference for {Bayesian} Nonparametrics},
  year = {2015},
  booktitle = {NIPS}
}
```

