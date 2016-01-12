<?php
//The exec/fswebcam log will be in error.log.
exec('fswebcam -r 1280x720 --timestamp "%Y-%m-%d %H:%M:%S" /tmp/image.jpg');

$image = file_get_contents('/tmp/image.jpg');
header('content-type: image/jpeg');
echo $image;
