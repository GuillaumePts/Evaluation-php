<?php 

session_start();
date_default_timezone_set('Europe/Paris');
require_once ('./inc/function.php');
require __DIR__ . '/vendor/autoload.php';


if(verifierAdmin()){

include ('./admin/inc-back/headerback.php');

}else{
include ('./inc/header.php');

}

include ('./inc/content.php');
include ('./inc/footer.php');
