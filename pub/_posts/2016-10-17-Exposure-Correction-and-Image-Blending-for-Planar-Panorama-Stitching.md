---
title: "Exposure Correction and Image Blending for Planar Panorama Stitching"
header:
  teaser: tumbnails/res_261.jpg
conference: ICCAS
links: 
 - paper: 
   link: http://ieeexplore.ieee.org/abstract/document/7832309/
   name: "Paper"
 - bibtex: 
   name: "Bibtex"
---

In this paper, we propose a planar panorama stitching method to blend consecutive images captured by a multirotor equipped with a fish-eye camera. In addition, we suggest an exposure correction method to reduce the brightness difference between contiguous images, and a drift error correction method to compensate the estimated position of multirotor. In experiments, the multi-rotor flies at 35 meters above the ground, and the fish-eye camera attached in gimbals system takes pictures. Then we validate the performance of the algorithm with processing video frames. In order to supervise and observe a specific region, it is more efficient to blend multiple captured images, because it is possible to construct a planar map with higher resolution at low cost. In detail, first, geographic relation between consecutive images is estimated by using Euclidean homography. At the same time, the proposed algorithm estimates the position of multi-rotor on the planar map, so that it is possible to blend images with minimizing the variance of drift error. Then, the proposed algorithm uses histogram matching to compensate the different brightness of images. For this, we divide an image into three layers: background, foreground, and overexposure. Finally, we use multi-band blending to create a seamless panorama.

{% include base_path %}

## Bibtex <a id="bibtex"></a>
```
@inproceedings{-,
	title={-},
	author={-},
	booktitle={-},
	pages={-},
	year={-},
	organization={-}
}
```



