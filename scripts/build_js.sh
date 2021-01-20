#!/bin/bash

ROOT_PATH="${1:-$LANDO_MOUNT}"
cd $ROOT_PATH

# Remove unwanted package.json
# rm -rf $ROOT_PATH/wp-content/plugins/oasis-workflow-pro/package.json

# shellcheck disable=SC2231
for p in $ROOT_PATH/wp-content/plugins/*
do
  if [ -d "$p" ]
  then
    echo "Building JS in $p/..."
    # shellcheck disable=SC2164
    cd $p

    if [ -f "package.json" ]
    then
      # Install node dependencies
      # npm audit fix --force
      yarn
      yarn build
    fi
  fi
done
