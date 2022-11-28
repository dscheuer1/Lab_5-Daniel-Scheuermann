<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Daniel Scheuermann">
        <meta name="decription"
            content="Lab 5">

        <title>Dan's Site</title>

        <link rel = "stylesheet"
             href = "css/custom.css?version=<?php print time(); ?>"
             type = "text/css">
    </head>

    <?php

    print '<body class="display">';
    print '<!-- ***** START OF BODY ***** -->';

    include 'lib/constants.php';
    print PHP_EOL;

    require_once(LIB_PATH . 'DataBase.php');
    $thisDataBaseReader = new DataBase('dscheuer_reader', DATABASE_NAME);
    $thisDataBaseWriter = new DataBase('dscheuer_writer', DATABASE_NAME);
    print PHP_EOL;

    $netId = htmlentities($_SERVER["REMOTE_USER"], ENT_QUOTES, "UTF-8");

    $managers = array('dscheuer', 'rerickso', 'jcmcgowa', 'tallembe', 'idavis1');
    $managerAccess = false;
    ?>