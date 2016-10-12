---
title: A Dirichlet Process Mixture Model for Spherical Data 
header:
  teaser: /tumbnails/dptgmm_tn.png
conference: AISTAS
links: 
 - paper: 
   link: http://www.jstraub.de/download/straub2015dptgmm.pdf
   name: "Paper"
 - supplement: 
   link: http://www.jstraub.de/download/straub2015dptgmm-supp.pdf
   name: "Supplement"
 - bibtex: 
   name: "Bibtex"
 - slides: 
   link: http://www.jstraub.de/download/jstraub2015aistatsDPTGMM_slides.pdf
   name: "Slides"
 - code: 
   link: https://github.com/jstraub/dpMM
   name: "Code"
excerpt: "Directional data, naturally represented as points on the unit sphere, appear in many applications. We propose a Dirichlet process mixture model of Gaussian distributions in distinct tangent spaces (DP-TGMM) to the sphere and develop an efficient inference algorithm. We demonstrate that, unlike related work, the proposed probabilistic model can represent anisotropic distributions on the sphere while still respecting the underlying geometry and readily extends to high-dimensional data."
---

Directional data, naturally represented as points on the unit sphere,
appear in many applications. However, unlike the case of Euclidean
data, flexible mixture models on the sphere that can capture
correlations, handle an unknown number of components and extend readily
to high-dimensional data have yet to be suggested. For this purpose we
propose a Dirichlet process mixture model of Gaussian distributions in
distinct tangent spaces (DP-TGMM) to the sphere. Importantly, the
formulation of the proposed model allows the extension of recent
advances in efficient inference for Bayesian nonparametric models to
the spherical domain. Experiments on synthetic data as well as
real-world 3D surface normal and 20-dimensional semantic word vector
data confirm the expressiveness and applicability of the DP-TGMM.

![Graphical Model]({{ base_path }}/images/pub/dptgmm/figureGraphicalModel.png "Graphical Model")

Many applications of interest involve measurements of directional data.
In 3D scenes, unit-length surface normals extracted from point clouds
reside in a 2D manifold (i.e., the unit sphere in 3D). In biology,
protein backbone measurements are described and classified based on
their angular configurations in the so-called Ramachandran plots.
Directional data also exists outside of the 3D world. E.g., the words
counts in a corpus of documents can be viewed as directional data once
normalized to have unit 2 norm. Word-frequency vectors are often
clustered using the cosine similarity, which measures the cosine of the
angle formed by two vectors. This measure essentially treats the
word-frequency vectors as directional data, and has been shown to be
superior to Euclidean distance for document clustering. Another example
of directional data is semantic word vectors, which associate a
high-dimensional vector with each word in a given corpus. The semantic
word vectors capture the semantic context of the associated words, and
should not to be confused with the word-frequency vectors of documents.
Again, cosine similarity is used as the distance measure to find words
with similar meaning.

One common task in many of these applications is to group the data into
similar clusters. Due to the non- linearity of the hyper-sphere,
clustering on the spherical manifold is often treated in an ad-hoc
manner by either ignoring the geometry of the sphere or using
overly-restricted models. In this work, we present a flexible Bayesian
nonparametric (BNP) model for data residing on a hyper-sphere that
respects the inherent geometry of the manifold. As shown above, our
approach draws on the Dirichlet process Gaussian mixture model
(DP-GMM), and models full covariance matrices on (linear) tangent
spaces to the sphere. Importantly, the covariances of the Gaussians,
capturing intra-cluster correlations, have analytical conjugate priors
that enable efficient inference. Additionally, the approach
transparently scales to high-dimensional data. We extend the efficient
inference method of, a parallelized restricted Gibbs sampler with
sub-cluster split/merge moves, to account for the geometry of the
sphere. Moreover, we show how to combine sufficient statistics from
tangent spaces around different points of tangency to propose merges
efficiently.

## Comparison of different clustering algorithms on synthetic isotropic and anisotropic data

![Synthetic]({{ base_path }}/images/pub/dptgmm/figureSynthetic.png "algorithm comparison on synthetic data")

Mean and standard deviation over ten sampler runs of normalized mutual
information (NMI) and cluster-count for synthetic datasets of 30
isotropic (top) and anisotropic (bottom) clusters on the unit sphere in
3D. The colors for the different algorithms are consistent across all
plots. In the sphere-plots to the right it can be observed that, in
contrast to the DP-TGMM, the DP Gaussian mixture model (DP-GMM) fails
to separate (top) or incorrectly splits (bottom) clusters. This is a
result of the DP-GMM clustering the data in the ambient Euclidean space
and not on the spherical manifold. While the spherical k-means (spkm)
and the k-means algorithm were both set to the true number of clusters,
their clustering performance lacks behind the sampling based methods.
The finite symmetric Dirichlet approximation to the DP-TGMM (referred
to as FSD-TGMM) gives an incorrect and noisy estimate for the number of
clusters and hence motivest the use of the proposed sub-cluster
split/merge inference algorithm.

## Comparison of different clustering algorithms and models on real-world surface normal data

![Real]({{ base_path }}/images/pub/dptgmm/figureNYU_S.png "algorithm comparison on real data")

In the top row we show RGB images of the scene (only) for reference. We
visualize the segmentation implied solely by the clustering of normals
using the spherical k-means (spkm) algorithm with k = 7 (2nd row),
using the DP-GMM (3rd row) and the proposed DP-TGMM (bottom row). Note
how spkm and DP-GMM fail to properly segment the scenes. The colors
encode the association to inferred clusters and black denotes missing
depth data.

## Bibtex <a id="bibtex"></a>
```
@inproceedings{straub2015dptgmm,
  author = {Straub, Julian and Chang, Jason and Freifeld, Oren and Fisher III, John W.},
  title = {A Dirichlet Process Mixture Model for Spherical Data},
  year = {2015},
  booktitle = {AISTATS},
  url = {http://www.jstraub.de/download/straub2015dptgmm.pdf}
}
```

