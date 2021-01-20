#!/bin/bash

ROOT_PATH="${1:-$LANDO_MOUNT}"
cd $ROOT_PATH

# Install dependencies for root directory
composer install

for p in $ROOT_PATH/wp-content/plugins/*
do
   	if [ -d "$p" ]
	then
		echo "Building PHP in $p/..."
		cd $p

		if [ -f "composer.json" ]
		then
		# Install php dependencies
		composer install
		composer dumpautoload -o
		fi
		# or do whatever with individual element of the array
	fi
done
