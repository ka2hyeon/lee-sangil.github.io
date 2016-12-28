#!/usr/bin/env bash

jekyll build
rsync -ruv _site/* flan.csail.mit.edu:~/public_html/

