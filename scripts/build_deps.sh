#!/bin/bash

ROOT_PATH="${1:-$LANDO_MOUNT}"
cd $ROOT_PATH

# Install dependencies
./scripts/build_js.sh $ROOT_PATH
./scripts/build_php.sh $ROOT_PATH
