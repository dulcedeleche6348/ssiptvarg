<?php
$m3u8_url = "http://181.10.181.101:15001/play/a06x/index.m3u8";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reproductor Video.js</title>
    <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet" />
</head>
<body>

<video id="my-video" class="video-js vjs-default-skin" controls width="640" height="360">
    <source src="<?php echo $m3u8_url; ?>" type="application/x-mpegURL" />
</video>

<script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>

</body>
</html>
