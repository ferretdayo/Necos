#! /bin/sh
echo "Starting motion-mmal"
sudo /opt/motion-mmal/motion -n -c /opt/motion-mmal/motion-mmalcam2.conf >/dev/null 2>& 1 &
