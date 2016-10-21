---
layout: single
author_profile: true
header:
  overlay_image: robots/knoobot_rightBehind_S.jpg
excerpt: "developing artificial 3D perception"
feature_row_pub:
  - url: /pub/A-Mixture-Of-Manhattan-Frames-Beyond-the-Manhattan-World/
    image_path: tumbnails/tn_MMF.png
    alt: "MMF"
    title: "MMF"
    excerpt: "The Mixture of Manhattan Frames (MMF) is a versatile model to capture man-made environments."
  - url: /pub/Small-Variance-Nonparametric-Clustering-on-the-Hypersphere/
    image_path: /tumbnails/ddpvmf_tn.png
    alt: "DPvMF-means"
    title: "DPvMF-means"
    excerpt: "Nonparametric clustering algorithms for batch and streaming directional data. GPU-enabled fast inference."
  - url: /pub/A-Dirichlet-Process-Mixture-Model-for-Spherical-Data/
    image_path: /tumbnails/dptgmm_tn.png
    alt: "DP-TGMM"
    title: "DP-TGMM"
    excerpt: "Dirichlet process tangent space Gaussian mixture for Bayesian nonparametric inference on directional data."
feature_row_robots:
  - url: /blog/Kno0Bot-for-Roboking-2006/index.html
    image_path: robots/knoobot_rightBehind_S.jpg
    alt: "Kno0Bot"
    title: "Kno0Bot"
    #excerpt: "Kno0Bot is able to collect tea-lights and bring them into its home base as well as to follow lines."
  - url:  /blog/Plicro
    image_path: robots/plicro_topDown_S.jpg
    alt: "Plicro"
    title: "Plicro"
    #excerpt: "Plicro can detect and avoid obstacles using ultrasound. This was my second robot."
  - url:  /blog/Holomove
    image_path: robots/holomove_topOpened_S.jpg
    alt: "Holonmove"
    title: "Holomove"
    #excerpt: "Holomove has a holonomic drive, designed to allow movement in any direction without having to rotate."
---
In fall 2012, I joined [MIT](http://www.mit.edu/) to pursue a **PhD in
Computer Science**. Within the [CS and AI Laboratory (CSAIL)](http://www.csail.mit.edu/), I am
working with [John W. Fisher III](http://people.csail.mit.edu/fisher/)
and [John Leonard](http://groups.csail.mit.edu/marine/wiki/index.php?title=Main_Page#Prof_John_J_Leonard).
On my way to MIT, I graduated from the [Technische Universität München (TUM)](http://www.tum.de) with a Diplom and the [Georgia Institute of Technology](http://www.gatech.edu/) with a
M.Sc. 

[comment]: <> (I am very grateful for the many friends, advisors and my family which support me on this journey.)
[comment]: <> (### developing artificial 3D perception)

My research interests in AI and robotics are in **3D perception** [[1], [3], [4], [8], [9], [10]], 
**modeling** (directional data [[1], [2]] and Bayesian nonparametrics [[5], [7]]), 
and **inference** (sampling [[1], [2], [4]], optimization [[6], [7]] 
and low-variance asymptotics [[3]]).

{% include feature_row id="feature_row_pub" caption="Featured Publications" %}

My interest in robotics and 3D perception originates from age 15, when
I got my first micro-processor from my father as a present. Since then
I have built seven robots ([Plexa], [Plicro], [Roboking2005], [Ca3505],
[Kno0Bot], [Kno2Bot], [Holomove]) from scratch and worked in multiple teams on
robotics related projects ([KUKAyouBot], [rEIzor]). 

{% include feature_row id="feature_row_robots" caption="Featured Robots" %}


[1]: {{ base_path }}/pub/A-Mixture-Of-Manhattan-Frames-Beyond-the-Manhattan-World/ "MMF"
[2]: {{ base_path }}/pub/A-Dirichlet-Process-Mixture-Model-for-Spherical-Data/ "DP-TGMM"
[3]: {{ base_path }}/pub/Small-Variance-Nonparametric-Clustering-on-the-Hypersphere/ "(D)DP-vMF-means"
[4]: {{ base_path }}/pub/Semantically-Aware-Aerial-Reconstruction-from-Multi-Modal-Data/ "SAAR"
[5]: {{ base_path }}/pub/Streaming-Distributed-Variational-Inference-for-Bayesian-Nonparametrics/ "Streaming BNP"
[6]: {{ base_path }}/pub/Real-time-Manhattan-World-Rotation-Estimation-in-3D/ "RTMF"
[7]: {{ base_path }}/pub/Bayesian-Nonparametric-Modeling-of-Driver-Behavior/ "BNP Driving Behaivor"
[8]: {{ base_path }}/pub/Fast-Relocalization-for-Visual-Odometry-using-Binary-Features/ "Relocalization"
[9]: {{ base_path }}/pub/Saliency-detection-and-model-based-tracking/ "Saliency"
[10]: {{ base_path }}/pub/Visual-Localization-based-on-Binary-Features/ "Diplom Thesis"


[Plexa]: {{ base_path }}/blog/Plexa-my-first-robot/ "Plexa"
[Plicro]: {{ base_path }}/blog/Plicro/ "Plicro"
[Roboking2005]: {{ base_path }}/blog/Roboking-2005-Robot/ "Roboking 2005"
[Ca3505]: {{ base_path }}/blog/Ca3505-for-Robochallenge-2005/ "Ca3505"
[Kno0Bot]: {{ base_path }}/blog/Kno0Bot-for-Roboking-2006/ "Kn-0Bot"
[Kno2Bot]: {{ base_path }}/blog/Kno2Bot-for-Roboking-2007/ "Kno2Bot"
[Holomove]: {{ base_path }}/blog/Holomove/ "Holomove"
[rEIzor]: {{ base_path }}/blog/rEIzor/ "rEIzor"
[KUKAyouBot]: http://www.youbot-store.com/ "KUKA youBot"

