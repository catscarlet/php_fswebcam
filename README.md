# php_fswebcam
Using **fswebcam** to capture picture, and return it using PHP.

Try it on your **Raspberry Pi**.

You need **fswebcam** installed first, and a **webcam**.

```
--- Opening /dev/video0...
Trying source module v4l2...
Error opening device: /dev/video0
open: Permission denied
Trying source module v4l1...
Error opening device: /dev/video0
open: Permission denied
Unable to find a source module that can read /dev/video0.
```

You need give the permission of /dev/video0 and /tmp/image.jpg to take.php. You can easily use command like `chmod o+rw /dev/video0` but it may cause some security risks. For high security usage, please use setuid/gid.