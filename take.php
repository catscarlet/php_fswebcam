<?php
//The exec/fswebcam log will be in error.log.
exec('fswebcam /tmp/image.jpg -r 1270x720');

$image = file_get_contents('/tmp/image.jpg');
header('content-type: image/jpeg');
echo $image;
