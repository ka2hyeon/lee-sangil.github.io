#!/usr/bin/env bash

jekyll build
rsync -ruv _site/* lebkuchen.csail.mit.edu:~/public_html/

