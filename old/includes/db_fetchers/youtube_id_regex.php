<?php
if (isset($video_link)){
// It also works on the youtube-nocookie.com URL with the same above options.
// It will also pull the ID from the URL in an embed code (both iframe and object tags)
preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_link, $match);
$youtube_id = $match[1];
}
?>