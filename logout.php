<?php

session_start();

session_unset();
session_destroy();
header("Location: http://localhost:8888/php-login/index.php");
die();