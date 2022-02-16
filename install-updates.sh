#!/bin/bash

rsync --remove-source-files --ignore-times -a /var/minecraft/pending-updates/* /var/minecraft/server/plugins/

exit 0
