<?php

function base_url($path = ""){

$protocal = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://';

$base_url = trim($_SERVER['HTTP_HOST']);

$url = $protocal.$base_url."/esmac/".ltrim($path, '/');

return $url;
}
?>
