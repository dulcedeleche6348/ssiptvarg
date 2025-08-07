
<?php
// archivo: player.php

$m3u8_url = "http://181.10.181.101:15001/play/a06x/index.m3u8"; // tu enlace m3u8
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reproductor M3U8</title>
</head>
<body>

<video id="video" width="640" height="360" controls></video>

<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script>
    var video = document.getElementById('video');
    var videoSrc = "<?php echo $m3u8_url; ?>";

    if (Hls.isSupported()) {
        var hls = new Hls();
        hls.loadSource(videoSrc);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED, function () {
            video.play();
        });
    } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = videoSrc;
        video.addEventListener('loadedmetadata', function () {
            video.play();
        });
    } else {
        alert("Tu navegador no soporta video HLS.");
    }
</script>

</body>
</html>
