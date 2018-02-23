<?php
   /**
    *  SixTrack Web – Header File
    * ============================
    *  Veronica Berglyd Olsen, CERN BE/ABP/HSS 2018
    *  Created 2018-02-19
    */

    if(!isset($bMain)) exit();
    $incPath = realpath(__DIR__);
    
?><!DOCTYPE html>
<html>

<head>
    <?php
        if (isset($sTitle)) {
            echo "<title>".$sTitle." | SixTrack</title>\n";
        } else {
            echo "<title>SixTrack</title>\n";
        }
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/SixTrack/web/css/normalize.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/SixTrack/web/css/styles.css" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" href="https://home.cern/sites/home.web.cern.ch/themes/cern_public/favicon.ico" />
    <?php
        if (isset($sHead)) {
            echo $sHead;
        }
    ?>
</head>

<body>
    <div id="cernbar"><div><a href="http://cern.ch/">CERN <em>Accelerating science</em></a></div></div>
    <div id="wrapper">
    
    <!-- Begin Header -->
    <header id="header">
        <div class="logo">
            <a href="http://cern.ch/"><img src="/SixTrack/web/images/logo.jpg" height="116px"></a>
        </div><div class="title">
            <h1>SixTrack &ndash; 6D Tracking Code</h1>
            <h3><a href="https://be-dep-abp.web.cern.ch/">CERN &ndash; BE/ABP Accelerator Beam Physics Group</a></h3>
        </div><div class="illustration">
            <img src="/SixTrack/web/images/plot.png" height="116px">
        </div>
    </header>
    <!-- End Header -->
    
    <!-- Begin Content -->
    <nav id="main-menu">
        <ul>
            <li><a href="/SixTrack/web/index.php">Home</a></li><!--
         --><li><a href="/SixTrack/web/source.php">Source Code</a></li><!--
         --><li><a href="/SixTrack/web/docs.php">Documentation</a></li><!--
         --><li><a href="https://twiki.cern.ch/twiki/bin/view/LHCAtHome/SixTrack">Developers' Wiki</a></li>
        </ul>
    </nav>
    
    <div id="content">
