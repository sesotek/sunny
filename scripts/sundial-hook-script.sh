#!/bin/sh
# sundial-hook-script.sh - By Ian Smith
#
# Variation of test-hook.sh - test script for gphoto2's --hook-script option
# Copyright © 2006 Hans Ulrich Niedermann <gp@n-dimensional.de>
#
# This library is free software; you can redistribute it and/or
# modify it under the terms of the GNU Lesser General Public
# License as published by the Free Software Foundation; either
# version 2 of the License, or (at your option) any later version.
#
# This library is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
# Lesser General Public License for more details.
#
# You should have received a copy of the GNU Lesser General Public
# License along with this library; if not, write to the
# along with this library; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA


self=`basename $0`

# Path to nice binary
NICE_BIN="/usr/bin/nice"

# Date format example: 2011-05-19_23:10:01 (11:10:01 PM on May 19, 2011)
# Used only to name the file, not to annotate the image
DATE_FORMAT="%Y-%m-%d_%H.%M.%S"

# File names
LAST_FRAME_NAME="last_frame.jpg"
CROPPED_SUNDIAL_NAME="last_dial.jpg"
FULLRES_NAME="last_fullres.jpg"

# Convert settings
# resize to 800px wide, and keep aspect ratio
RESIZE_SETTING="800x"
# crop to sundial
DIAL_CROP_SETTING="580x447+1428+603"
ANNOTATE_SETTING="-fill \'#0008\' -draw \'rectangle 340, 410, 580 425\' -fill white -annotate +350+422 ${ANNOTATE_STRING}"

doSundial () {
	PHOTO_NAME="`date +${DATE_FORMAT}`.jpg"

	mv "${ARGUMENT}" "${PHOTO_NAME}"
	# Resize for web
	${NICE_BIN} -n 3 convert -resize ${RESIZE_SETTING} ${PHOTO_NAME} ${LAST_FRAME_NAME}
	
	# Crop and add annotation for web
    # Make lowercase am/pm from AM/PM
    AMPM=""
    if [ "`date +%p`" = "AM" ]; then
        AMPM="am"
    else
        AMPM="pm"
    fi
    ANNOTATE_STRING="Live: `date +%l:%M:%S`"${AMPM}"`date +\ %Z\ \ \ %_d\ %b\ %Y`"

    
#	ANNOTATE_STRING=${ANNOTATE_STRING}"`date +%l:%M:%S\ %p\ %Z\ \ \ \ %_d\ %b\ %Y`"

    ${NICE_BIN} -n 3 convert -crop ${DIAL_CROP_SETTING} ${PHOTO_NAME} ${CROPPED_SUNDIAL_NAME}
	
	${NICE_BIN} -n 3 convert ${CROPPED_SUNDIAL_NAME} -fill '#0008' -draw 'rectangle 360, 410, 580 425' -fill white -annotate +370+422 "${ANNOTATE_STRING}" ${CROPPED_SUNDIAL_NAME}
	
	# make link to full res version
	ln -sf "${PHOTO_NAME}" "${FULLRES_NAME}"
	chmod a+r ${LAST_FRAME_NAME} ${CROPPED_SUNDIAL_NAME} ${PHOTO_NAME}
	echo "* $self: DOWNLOADED to ${PHOTO_NAME}"
}

case "$ACTION" in
    init)
	echo "$self: INIT"
	# exit 1 # non-null exit to make gphoto2 call fail
	;;
    start)
	echo "$self: START"
	;;
    download)
	doSundial
	;;
    stop)
    echo 'Sending email to ian...'
    echo 'SundialCam is STOPPED!' | mail -s 'Sunny' sesotek@gmail.com
	echo "$self: STOP"
	;;
    *)
	echo "$self: Unknown action: $ACTION"
	;;
esac



exit 0
