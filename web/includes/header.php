<?php
   /**
    *  SixTrack Web – Header File
    * ============================
    *  Created 2018-02-19
    */

    if(!isset($bMain)) exit();
?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/normalize.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" href="https://home.cern/sites/home.web.cern.ch/themes/cern_public/favicon.ico" />
    <title>SixTrack</title>
</head>

<body>
    <div id="cernbar"><div><a href="http://cern.ch/">CERN <em>Accelerating science</em></a></div></div>
    <div id="wrapper">
    
    <!-- Begin Header -->
    <header id="header">
        <div class="logo">
            <img src="images/logo.jpg" width="116px">
        </div><div class="title">
            <h1>SixTrack - 6D Tracking Code</h1>
            <h3><a href="https://espace.cern.ch/be-dep/ABP/default.aspx">CERN - BE/ABP Accelerator Beam Physics Group</a></h3>
        </div>
    </header>
    <!-- End Header -->
    
    <!-- Begin Content -->
    <nav id="main-menu">
        <ul>
            <?php
                echo "<li><a href='index.php'>Home</a></li>";
                echo "<li><a href='docs.php'>Docs</a></li>";
                echo "<li><a href='source.php'>Source</a></li>";
                echo "<li><a href='references.php'>References</a></li>";
                echo "<li><a href='/wiki'>Developers' Wiki</a></li>";
            ?>
        </ul>
    </nav><div id="content">
