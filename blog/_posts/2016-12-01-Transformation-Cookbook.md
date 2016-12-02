---
title: Transformation Cookbook
header:
  image: blog/simpleResearchJournal.png
---

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
Hessian for a cost function with respect to a rigid body
transformation.

To help clarify and hopefully
prevent some mistakes as well as to organize my own thoughts, I wrote
the [Transformation
Cookbook](/download/straubTransformationCookbookV1.pdf). The naming
follows the famous [Matrix
Cookbook](https://www.math.uwaterloo.ca/~hwolkowi/matrixcookbook.pdf)
which has helped me figure out some pretty hairy matrix derivatives.


