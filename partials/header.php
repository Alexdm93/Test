<?php
date_default_timezone_set('America/Bogota');
$path = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1);
$current_url = strstr($path , ".", true);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <title>email.templet. | Admin</title>
        <link rel="icon" href="assets/images/favicon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <link rel="stylesheet" href="assets/css/preload.css" type="text/css" media="all" />
        <link rel="stylesheet" href="assets/mediamanager/css/mediaManager.css" type="text/css" media="all" />

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <?php if($current_url == 'builder'): ?>
            <link rel="stylesheet" href="assets/feedback/css/feedback.css">
            <link rel="stylesheet" href="assets/recommendation/css/recommendation.css">
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="assets/shared/css/shared.css">
        <?php endif; ?>

        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/prism.css">
    </head>