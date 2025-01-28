<?php

if(!empty($client) && !empty($initiative) && !empty($email))
{
    $file_email = '../emails/'.$client."/".$initiative."/".$email;
    $modification_time = date("F d, Y @ H:i:s", filemtime($file_email));
}

?>
<div class="container-fluid">
    <a class="navbar-brand btn-back" href="#" onclick="location.reload();">
        <img src="assets/images/email_templet.svg" width="110" height="32" alt="media.templet." class="navbar-brand-image" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <?php
        if(!empty($modification_time)){
    ?>
        <div class="float-right container-status">
            <!-- <i class="fas fa-info-circle"></i> -->
            <span class="title-status">Status:</span>
            <span class="status-email mr-3"></span>
            <!-- <i class="far fa-calendar-alt"></i> -->
            <span class="title-status">Last Modification:</span>
            <span class="modification-email"><?=$modification_time?></span>
        </div>
    <?php 
        }
    ?>
</div>