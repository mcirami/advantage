<?php

/*error_reporting(E_ALL);
ini_set('display_errors', 1);*/

    include 'lib/config.php';
    //include 'lib/email.php';

    if($_SERVER['REMOTE_ADDR'] !== '127.0.0.1') {
        $protocol = $_SERVER['HTTPS'] == '' ? 'http://' : 'https://';
        $webroot = $protocol . $_SERVER['HTTP_HOST'] . '/submit/';
    } else {
        //$protocol = $_SERVER['HTTPS'] == '' ? 'http://' : 'https://';
        $webroot = '';
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Advantage Plus MD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
        <link rel="stylesheet" href="<?php echo $webroot; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $webroot; ?>css/main.min.css">
        <script type="text/javascript" src="<?php echo $webroot; ?>js/jquery-2.2.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo $webroot; ?>js/bootstrap/bootstrap.min.js"></script>
        <link rel="icon" type="image/x-icon" href="<?php echo $webroot; ?>favicon.ico" />

    </head>

<body>

