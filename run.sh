#!/bin/bash

rconHost='localhost'
rconPort='25576'
rconPass='jWchrmwDUMx8AVpV2F2L69JhGNMV5VRX'

/var/minecraft/mcrcon/mcrcon -H $rconHost -P $rconPort -p $rconPass "$1"
