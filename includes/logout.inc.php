<?php

$_SESSION['login'] = false;
session_destroy();

echo "<script>window.location.replace('http://localhost/phpfolder/AliboboCor/index.php?page=accueil')</script>";