---
title: Transformation Cookbook
---

{% include base_path %}

Rigid body transformations can be a source for confusion and mistakes
in theoretical and practical settings. 
Rotations alone can be represented in a variety of ways. Three
fundamentally different ways that I found most useful to understand in
research and application are: rotation matrices, unit quaternions and
axis-angles. There are connections between all three representations
that can be exploited if properly used.
Another common problem is notation: mistakes are preprogrammed if one
is not careful to explicitly denote from which coordinate system into
which other coordinate system a transformation transforms.
And finally it is not straight forward to derive the gradient or
Hessian for a cost function with respect to a rotation or full rigid
body transformation.

Since such transformations are fundamental to
robotics, computer vision and 3D perception and hence to my research, I
took the time to write up what I call the 
[Transformation
Cookbook]({{ base_path }}/download/straubTransformationCookbook.pdf). The naming
follows the famous [Matrix
Cookbook](https://www.math.uwaterloo.ca/~hwolkowi/matrixcookbook.pdf)
which has helped me figure out some pretty hairy matrix derivatives.
I hope it will help clarify aforementioned issues,
prevent some mistakes, and condense all necessary information into one
document.

This is work in progress. Please alert me to any problems you find,
things you would like to have added or things that are unclear.
