<?php
   /**
    *  SixTrack Web – Builds Data File
    * =================================
    *  Veronica Berglyd Olsen, CERN BE/ABP/HSS 2018
    *  Created 2018-08-29
    */

    array_key_exists("action",$_POST) ? $sAction = $_POST["action"] : $sAction = "";
    array_key_exists("apikey",$_POST) ? $sAPIKey = $_POST["apikey"] : $sAPIKey = "";

    $refKey = md5(utf8_encode(date("Ymd")."-zqc5XpLUGvsEMFMxKKVS"));

    if($sAPIKey != $refKey) {
        echo "Invalid API key";
        exit();
    }

    $_POST["apikey"] = "Accepted";

    if($sAction == "build") {
        echo "build data accepted";
        if(array_key_exists("command",$_POST)) {
            $fileName = "build_".md5($_POST["command"]).".dat";
            file_put_contents("build_status/".$fileName,serialize($_POST));
        }
    }

    if($sAction == "test") {
        echo "test data accepted";
        if(array_key_exists("command",$_POST)) {
            $fileName = "test_".md5($_POST["command"]).".dat";
            file_put_contents("build_status/".$fileName,serialize($_POST));
        }
    }

    if($sAction == "meta") {
        echo "meta data accepted";
        file_put_contents("build_status/meta.dat",serialize($_POST));
    }
?>
