<?php
if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'kril') {
    require 'kril.php';
} elseif (isset($_SESSION['lang']) && $_SESSION['lang'] == 'uz') {
    require 'uz.php';
} elseif (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru') {
    require 'ru.php';
} elseif (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
    require 'en.php';
}
