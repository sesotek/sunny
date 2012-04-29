#!/bin/sh
# sundial-script.sh - By Ian Smith

# Camera config settings
#ZOOM="20"
#MANUAL_FOCUS="6"

# Intervalometer settings
INTERVAL="60"
MAX_FRAMES="0"

# Script settings
HOOK_SCRIPT="/home/ian/sundial/sundial-hook-script.sh"

# Set capture=off first, because setting off when already off doesnt' error, but setting on when already on does error.
gphoto2 --set-config capture=off
sleep 7

gphoto2 --set-config capture=on
sleep 7

#gphoto2 --set-config zoom="${ZOOM}"
#sleep 7

#gphoto2 --set-config manualfocusdrive=${MANUAL_FOCUS}
#sleep 7

gphoto2 -I ${INTERVAL} -F ${MAX_FRAMES} --capture-image-and-download --hook-script ${HOOK_SCRIPT} 

exit 0
