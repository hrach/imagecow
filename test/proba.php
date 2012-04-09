<?php
include('loader.php');

use Fol\Loader;

Loader::setLibrariesPath(dirname(__DIR__));
Loader::register();

$Image = Imagecow\Image::create();

$Image->load('img.jpg');

$transform = $Image->getResponsiveOperations($_COOKIE['imageCow_detection'], $_GET['transform']);
$Image->transform($transform);
$Image->show();
?>