---
title: "Robust Visual Odometry via Rigid Motion Segmentation for Dynamic Environments"
header:
  teaser: /tumbnails/MasterThesis.png
conference: MS Thesis
links: 
 - paper: 
   link: http://s-space.snu.ac.kr/bitstream/10371/137350/1/000000146330.pdf
   name: "Paper"
 - dataset: 
   link: 
   name: "Dataset"
 - bibtex: 
   name: "Bibtex"
---

In the paper, we propose a robust visual odometry algorithm for dynamic environments via rigid motion segmentation using a grid-based optical flow. The algorithm first divides image frame by a fixed-size grid, then calculates the three-dimensional motion of grids for light computational load and uniformly distributed optical flow vectors. Next, it selects several adjacent points among grid-based optical flow vectors based on a so-called entropy and generates motion hypotheses formed by three-dimensional rigid transformation. These processes for a spatial motion segmentation utilizes the principle of randomized hypothesis generation and the existing clustering algorithm, thus separating objects that move independently of each other. Moreover, we use a dual-mode simple Gaussian model in order to differentiate static and dynamic parts persistently. The model measures the output of the spatial motion segmentation algorithm and updates a probability vector consisting of the likelihood of representing specific label. For the evaluation of the proposed algorithm, we use a self-made dataset captured by ASUS Xtion Pro live RGB-D camera and Vicon motion capture system. We compare our algorithm with the existing motion segmentation algorithm and the current state-of-the-art visual odometry algorithm respectively, and the proposed algorithm estimates the ego-motion robustly and accurately in dynamic environments while showing the competitive performance of the motion segmentation. \\[2pc]

## Bibtex <a id="bibtex"></a>
```
@phdthesis{이상일2017robust,
	title={Robust Visual Odometry via Rigid Motion Segmentation for Dynamic Environments},
	author={이상일},
	year={2017},
	school={서울대학교 대학원}
}
```
