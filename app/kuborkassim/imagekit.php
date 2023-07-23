<?php

require_once __DIR__ . '/vendor/autoload.php';

use ImageKit\ImageKit;

if (php_sapi_name() !== 'cli') {
    exit;
}

$public_key = 'public_d6lzAMk67a4H5/wC1PpEuZnoOX4=';
$your_private_key = '';
$url_end_point = 'https://ik.imagekit.io/kuborkassim/';


$imageKit = new ImageKit(
    $public_key,
    $your_private_key,
    $url_end_point
);

include_once('app/backend/imagekit/images.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
