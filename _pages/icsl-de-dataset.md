---
layout: single
author_profile: true
---

We ran the [Mixture of Manhattan Frames]({{ base_path }}/pub/A-Mixture-Of-Manhattan-Frames-Beyond-the-Manhattan-World/) (MMF) inference on the full NYU depth dataset V2 [[Silberman 2012](http://cs.nyu.edu/~silberman/datasets/nyu_depth_v2.html)] consisting of
N=1449 RGB-D frames and provide the results as a dataset. Visit our
project homepage for an abstract as well as a brief MMF introductory
video.

We provide the following two .mat files as well as a simple
visualization script. Note that the ordering of our dataset is the same
as in the NYU V2 dataset. Additionally, note that the provided MMF for
each scene is the last sample in the Markov chain with the most likely
number of MFs (after some burn in period). This dataset was created
from a re-run of the inference over the NYU depth dataset and hence may
have slightly different MMFs than in the original paper and slides,
since the inference is sampling based. We describe the variables
contained in each of the .mat files for reference:

* MMF labels, axis labels, rotations and mask [[download](http://people.csail.mit.edu/jstraub/download/nyu_depth_v2_mmf_v1.1.mat)] (~1.2 GB) [updated 03/27/2015]
	* **mmfs**: HxWxN labels assigning each normal to one of the MFs. MF labels start with id 1, 0s indicate missing data.
	* **mfss**: HxWxN labels assigning each normal to one of the 6 directions implied by its associated MF. MF axis labels start with id 1, 0s indicate missing data.
	* **mfRs**: Nx1 cell array of 3x(3K) matrices, where K rotation matrices - one for each MF - are stacked column wise.
	* **logLikeNormals**: HxWxN log likelihood of the normals under MMF.
	* **masks**: HxWxN mask indicating valid data.
	* **scenes**: Nx1 cell array of the name of the scene from which each image was taken (direct copy from NYU V2 .mat file)
* total variation regularized normals for the entire dataset [[download](http://people.csail.mit.edu/jstraub/download/nyu_depth_v2_normals.mat)] (~3.2 GB) [updated 03/27/2015]
	* **normals**: HxWx3xN total variation regularized normals estimated from raw depth data.
	* **mask**: HxWxN mask indicating valid data.
	* **scenes**: Nx1 cell array of the name of the scene from which each image was taken (direct copy from NYU V2 .mat file).
* basic script to visualize the MMF results [[download](http://people.csail.mit.edu/jstraub/download/showMMF.m)]
* groundtruth number of MFs for all scenes in the NYU depth dataset in a .csv file [[download](http://people.csail.mit.edu/jstraub/download/mmfGT_pub.csv)]

**If you are using this dataset please cite our [paper about the MMF]({{ base_path }}/pub/A-Mixture-Of-Manhattan-Frames-Beyond-the-Manhattan-World/)
as well as [[Silberman 2012](http://cs.nyu.edu/~silberman/datasets/nyu_depth_v2.html)].**

For questions, comments or suggestions please feel free to send me an email.
