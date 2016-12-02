#!/usr/bin/env bash

jekyll build
rsync -ruv _site/* froyo.csail.mit.edu:~/public_html/

