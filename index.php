<?php 

session_start();
date_default_timezone_set('Europe/Paris');
require_once ('./inc/function.php');
require __DIR__ . '/vendor/autoload.php';
include ('./inc/header.php');
include ('./inc/content.php');
include ('./inc/footer.php');

