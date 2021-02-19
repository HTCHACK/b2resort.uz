<?php
session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "kril";
}
else if(isset($_GET['lang']) && $_SESSION['lang']!=$_GET['lang'] && !empty($_GET['lang'])){
    if($_GET['lang']=="uz"){
        $_SESSION['lang']="uz";
    }
    elseif($_GET['lang']=="en"){
        $_SESSION['lang']="en";
    }
    elseif($_GET['lang']=="ru"){
        $_SESSION['lang']="ru";
    }
    elseif($_GET['lang']=="kril"){
        $_SESSION['lang']="kril";
    }
    else{
        $_SESSION['lang']="kril";
    }
}
require 'lang/set.php';
require 'lang/languageClass.php';
$language=new language();