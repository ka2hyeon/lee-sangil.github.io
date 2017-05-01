---
layout: single
title: Pacific Crest Trail GPS Tracks for Garmin inReach 
header:
  image: blog/fullPctInReachTrack.png
---
 
For my upcoming PCT through hike attempt, I bought a Garmin inReach
Explorer GPS and satellite messenger. I intend to use the device mainly
as safety precaution: my family and friends can see my progress and I
can trigger a SOS from the device if something would go wrong.

The second use of the Garmin inReach is as a GPS navigation device. The
popular [Halfmile PCT maps](https://www.pctmap.net/gps/) can be
downloaded in the `.gpx` format suitable for uploading to the inReach.
The only issue is that for some reason there is a 500 tracking point
limit per track when uploading to the Garmin webpage to sync to the
device. By default the Halfmile maps contain few long tracks with
significantly more than 500 tracking points per track. The webpage only
offers down sampling the tracks to 500 points. That does however lead
to very low resolution tracks that might not be very useful. To get
around this issue I modified a script from
[tinuzz](https://github.com/tinuzz/gpx-tools) that originally only
allows simpler operations on `.gpx` files to allow splitting up tracks
with more than 500 points into multiple tracks of 500 tracking points
each. The script can be found on my [github in a fork of the original
script.](https://github.com/jstraub/gpx-tools)

For convenience you can also directly download the processed Halfmile
tracks for the whole PCT from
[here](http://people.csail.mit.edu/jstraub/download/pct.zip).
Those `.gpx` files can then just be uploaded to the Garmin inReach
webpage and synced via the desktop or the smart phone application.
