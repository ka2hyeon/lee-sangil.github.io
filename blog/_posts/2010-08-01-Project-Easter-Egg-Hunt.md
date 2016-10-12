---
title: Project "Easter Egg Hunt"
---
Final project with Edward Macdonalds, Daniel Pickem and Kunal Muchhala
in Ayanna Howard's class 'Autonomous Control of Robotic Systems' at
Georgia Tech. In a simulated environment (Player & Gazebo), we enabled
a pioneer robot to autonomously explore its environment and collect and
retrieve colorful easter eggs to a base location. We deployed a SLAM
system, A* for path planning, a motion controller and computer vision
algorithms.

The simulated pioneer robots mission is to collect and retrieve easter eggs
that are randomly distributed in a unknown maze-like environment. To accomplish
this task the robot utilizes a laser scanner to perform Simultaneous
Localization and Map building (SLAM). A path planner (A*) works on the grid
based map to find paths to unexplored areas, where eggs could be hidden. A
motion controller for this kind of mechanical setup controls the wheels such
that the robot follows the desired trajectory. During the whole time a
color-blob extractor works on the frames grabbed by a camera attached to the
robot gripper. Once a green and a pink blob are detected in close proximity, a
sequence of actions is executed to bring the robot in pick-up position, grab
the Egg at its ribbon and lift it up into a save position over the robot. Then
the path planner finds the shortest trajectory back to base of the robot, where
the Egg is dropped, before the hunt for more Eggs goes on.

## Results

The original run of the robot was 2h and 12 minutes long, so we speeded it up
by a factor of 25. In this run the robot was able to map almost the whole
environment while retrieving around 16 Easter Eggs!

{% include youtubePlayer.html id="Z-GzuWan4II" %}
