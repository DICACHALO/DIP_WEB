<?php
// archivo: functions.php para que las nuevas imagenes subidas se actualicen y de esta manera no se mantiene en caché del navegador la antigua imagen. Este archivo es llamado en home.php

function noCache() {
header('Expires: Tue, 01 Jul 2001 06:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
}
?>