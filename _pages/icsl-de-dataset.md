---
layout: single
author_profile: true

---

{% include base_path %}

## ICSL Dynamic Environments Dataset

### File Formats
We provide the RGB-D datasets from the ASUS Xtion Pro live in the following format.

#### Color Images and Depth Maps

We provide the time-stamped color and depth images as a tar.gz file (TGZ). 

* The **color** images are stored as 640x480 8-bit RGB images in PNG format.
* The **depth** images are stored as 640x480 16-bit monochrome images in PNG format.
* The color and depth images are already rectified using OpenNI driver from PrimeSense.
* The depth images are scaled by a factor of 1000, i.e., a pixel value of 1000 in the depth image denotes a distance of 1 meter from the camera. A pixel value of 0 means missing data.

#### Ground-truth Trajectories

We provide the ground-truth trajectories as a text file containing the translation and orientation of the camera in a fixed coordinate (Vicon). 

* Each line in the text file contains a single pose.
* The format of each line is 'time tx ty tz qx qy qz qw' as denoted in the text file.
* **time** (float) gives the UNIX system time.
* **tx ty tz** (3 floats) give the position of the color camera with respect to the fixed coordinates as defined by motion capture system.
* **qx qy qz qw** (4 floats) give the orientation of the color camera in form of a unit quaternion with respect to the fixed coordinates as defined by the motion capture system.

#### Image Lists

We provide the list of the color and depth images as a text file.
	
* Each line in the text file contains synchronized timestamp and image (color or depth).
* The file may contain comments which begin with "#".
* We also provide **associations.txt** to make easy to evaluate ORB-SLAM algorithm.

#### Intrinsic Parameter

Although we provide the intrinsic parameter of the camera in each dataset, values are shown below:

```
fx = 537.5999075271789 # focal length x
fy = 539.0333244312846 # focal length y
cx = 316.1486739642859 # optical center x
cy = 245.5186676348365 # optical center y

# depth scale for the 16-bit image
factor = 1000

# radial distortion coefficient
k1 = 0.035426591276682
k2 = -0.047648000294533
k3 = -0.207042022821082

# tangential distortion coefficient
p1 = 0.001070852971683
p2 = 0.001266157687369
```

The above values are calculated by MATLAB calibration toolbox, and the color and depth images are rectified in order to the pixels in the color and depth images correspond one-to-one.

### Downloads

We provide the following .tgz files containing RGB-D sequences and supplementary material (i.e. ground-truth, camera intrinsic, etc). 

| sequence name | duration | length | invalid depth ratio | description |
|---------------|:--------:|:------:|:-------------------:|-------------|
| Fixed Camera 1 <br> [TGZ](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_fixed1.tgz) (0.26GB), [bag](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_fixed1.bag) (0.39GB), [rawlog](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_fixed1.rawlog) (8KB) | 23.15s | 0.00m  | 11.38% | One moving object |
| Fixed Camera 2 <br> [TGZ](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_fixed2.tgz) (0.29GB), [bag](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_fixed2.bag) (0.42GB), [rawlog](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_fixed2.rawlog) (8KB) | 24.70s | 0.00m  | 14.26% | Two moving object |
|  Vicon Space 1 <br> [TGZ](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_vicon1.tgz) (0.55GB), [bag](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_vicon1.bag) (0.85GB), [rawlog](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_vicon1.rawlog) (18KB) | 32.99s | 10.84m | 10.86% | Fast movement     |
|  Vicon Space 2 <br> [TGZ](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_vicon2.tgz) (1.11GB), [bag](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_vicon2.bag) (1.71GB), [rawlog](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_vicon2.rawlog) (36KB) | 66.60s | 10.03m | 11.69% | Slow movement     |
|  Vicon Space 3 <br> [TGZ](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_vicon3.tgz) (0.75GB), [bag](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_vicon3.bag) (1.22GB), [rawlog](http://icsl.snu.ac.kr/sangillee/rgbd_dataset_vicon3.rawlog) (26KB) | 47.57s | 5.441m | 23.11% | Close approach    |

We describe datasets in terms of duration, length, and invalid depth ratio. The duration and length literally mean the total time and the distance it moved, respectively. The invalid depth ratio is a percentage of the invalid depth pixels among all pixels of the entire depth frame. In the foregoing table, datasets belonging to the **Fixed Camera** were recorded by the situation where the camera is fixed on a certain point and one or two objects are moving around in front of the camera. On the other hand, datasets belonging to the **Vicon Space** were recorded by the non-stationary camera.

For questions, comments or suggestions please feel free to send me an email.
