#!/usr/bin/env bash

# Change www-data's uid & guid to be the same as directory in host
usermod -u `stat -c %u /app` application || true
groupmod -g `stat -c %g /app` application || true