<?php
  /**
  *  SixTrack Web – Builds File
  * ============================
  *  Veronica Berglyd Olsen, CERN BE/ABP/HSS 2018
  *  Created: 2018-08-29
  *  Updated: 2019-04-02
  */

  $bMain = true;
  require_once("includes/header.php");
  require_once("includes/badges.php");

  function secToTime($tSec) {
    $tH = floor($tSec/3600);
    $tM = floor(($tSec-$tH*3600)/60);
    $tS = floor($tSec-$tH*3600-$tM*60);
    return sprintf("%02d:%02d:%02d",$tH,$tM,$tS);
  }
?>

<article>
  <h1>Build Status</h1>
  See also: <a href="http://abp-cdash.web.cern.ch/abp-cdash/index.php?project=SixTrack">SixTrack CDash Page</a>.<br>
  <?php
    // Read coverage file
    $bCov = file_get_contents("coverage/githash.txt");
    $bCov = explode("\n",$bCov);
    if(count($bCov) > 1) {
      echo "See also: <a href='coverage/'>Coverage</a> for ";
      echo "<a href='https://github.com/SixTrack/SixTrack/commit/".$bCov[0]."'>".substr($bCov[0],0,7)."</a>";
      echo " [ ".$bCov[1]." ]<br>";
    }
  ?>
  <br>
  <?php
    $bStatus = array();
    $tStatus = array();

    // Read build files
    $bFiles = scandir("build_status");
    foreach($bFiles as $bFile) {
      if(!is_file("build_status/".$bFile)) continue;
      $bExt = pathinfo("build_status/".$bFile, PATHINFO_EXTENSION);
      if($bExt != "json") continue;
      $bData = file_get_contents("build_status/".$bFile);
      $bData = json_decode($bData,true);
      if($bData["action"] == "meta") {
        $bMeta = $bData;
      }
      if($bData["action"] == "build") {
        $eNo = intval($bData["buildno"]);
        if(array_key_exists($eNo,$bStatus)) {
          if(intval($bData["timestamp"]) > intval($bStatus[$eNo]["timestamp"])) {
            $bStatus[$eNo] = $bData;
          }
        } else {
          $bStatus[$eNo] = $bData;
        }
      }
      if($bData["action"] == "test") {
        $eNo = intval($bData["buildno"]);
        if(array_key_exists($eNo,$tStatus)) {
          if(intval($bData["timestamp"]) > intval($tStatus[$eNo]["timestamp"])) {
            $tStatus[$eNo] = $bData;
          }
        } else {
          $tStatus[$eNo] = $bData;
        }
      }
    }

    ksort($bStatus);
    ksort($tStatus);

    $startTime = intval($bMeta["runtime"]);
    $lblStyle  = "style='display: inline-block; width: 90px; font-weight: bold;'";

    echo "<ul class='no-bullet-list'>\n";
    echo "<li><span ".$lblStyle.">Started:</span> ".date("Y-m-d H:i:s",intval($bMeta["runtime"]))."</li>\n";
    if($bMeta["endtime"] == "-1") {
      echo "<li><span ".$lblStyle.">Finished:</span> Running ...</li>\n";
    } else {
      $runT = intval($bMeta["endtime"])-intval($bMeta["runtime"]);
      echo "<li><span ".$lblStyle.">Finished:</span> ".date("Y-m-d H:i:s",intval($bMeta["endtime"]))."</li>\n";
      echo "<li><span ".$lblStyle.">Run Time:</span> ".secToTime($runT)."</li>\n";
    }
    echo "<li><span ".$lblStyle.">Git Hash:</span> ";
      echo "<a href='https://github.com/SixTrack/SixTrack/commit/".$bMeta["hash"]."'>".$bMeta["hash"]."</a> ";
    echo "</li>\n";
    echo "<li><span ".$lblStyle.">Git Time:</span> ".$bMeta["ctime"]."</li>\n";
    if($bMeta["coverage"]) {
      $cLoc = intval($bMeta["covloc"]);
      $cTot = intval($bMeta["totloc"]);
      $cRat = $cTot > 0 ? 100*$cLoc/$cTot : 0;
      $cDif = "";
      if($bMeta["prevcov"] != "") {
        $pCov = explode(";",$bMeta["prevcov"]);
        if(count($pCov) == 4) {
          $pGit = $pCov[0];
          $pTot = $pCov[1];
          $pLoc = $pCov[2];
          $pRat = $pTot > 0 ? 100*$pLoc/$pTot : 0;
          $xRat = $cRat-$pRat;
          $cCol = $xRat <= -0.001 ? "#aa0000" : "#000000";
          $cCol = $xRat >=  0.001 ? "#00aa00" : $cCol;
          $cDif = "&nbsp;&nbsp;[ <span style='color: ".$cCol.";'>".number_format($xRat,3)." %</span> change from ";
          $cDif.= "<a href='https://github.com/SixTrack/SixTrack/commit/".$pGit."'>".substr($pGit,0,7)."</a> ]";
        }
      }
      echo "<li><span ".$lblStyle.">Coverage:</span> ".number_format($cRat,2)." %".$cDif."</li>\n";
    } else {
      echo "<li><span ".$lblStyle.">Coverage:</span> Running ...</li>\n";
    }
    echo "<li><span ".$lblStyle.">Host OS:</span> ".$bMeta["os"]."</li>\n";
    if($bMeta["stvers"] != "") {
      echo "<li><span ".$lblStyle.">SixTrack:</span> Version ".$bMeta["stvers"]."</li>\n";
    }
    echo "</ul><br>\n";

    echo "<h2>SixTrack Builds</h2>\n";
    // Generate map of builds from the last build session
    $bMap = array();
    foreach($bStatus as $bNo=>$bEntry) {
      $theCompiler = $bEntry["compiler"];
      $theType     = $bEntry["type"];
      $theBuild    = $bEntry["flag"];
      $buildTime   = intval($bEntry["timestamp"]);
      if($buildTime >= $startTime) {
        $bMap[$theCompiler."/".$theType."/".$theBuild] = $bNo;
      }
    }
    $bTypes     = array("Release","Debug");
    $bCompilers = explode(",",$bMeta["complist"]);
    $bBuilds    = explode(",",$bMeta["buildlist"]);

    echo "<table>\n";
    echo "<tr>\n";
    echo "<td style='border-right: 2px solid #999999; width: 180px;'>&nbsp;</td>\n";
    foreach($bCompilers as $compNm) {
      echo "<td colspan=2 align=center><b>".$compNm."</b></td>\n";
    }
    echo "</tr>\n";
    echo "<tr style='border-bottom: 2px solid #999999;'>\n";
    echo "<td style='border-right: 2px solid #999999; width: 180px;'>&nbsp;</td>\n";
    foreach($bCompilers as $compNm) {
      foreach($bTypes as $typNm) {
        echo "<td align=center>".$typNm."</td>\n";
      }
    }
    echo "</tr>\n";
    foreach($bBuilds as $bldNm) {
      echo "<tr>\n";
      echo "<td style='border-right: 2px solid #999999; width: 180px;'><b>".$bldNm."</b></td>\n";
      foreach($bCompilers as $compNm) {
        foreach($bTypes as $typNm) {
          $bData = $bStatus[$bMap[$compNm."/".$typNm."/".$bldNm]];
          if(array_key_exists("action",$bData)) {
            $bInfo = "Time Stamp: ".date("Y-m-d H:i:s",intval($bData["timestamp"]))."\n";
            if($bData["build"]) {
              $bInfo .= "Build Time: ".secToTime($bData["buildtime"])."\n";
              $bInfo .= "Command: ".$bData["command"];
            }
            echo "<td title=\"".$bInfo."\">";
            if($bData["build"]) {
              if($bData["success"]) {
                svgBadge("build","passed","green");
              } elseif(!$bData["success"]) {
                svgBadge("build","failed","red");
              } else {
                svgBadge("build","unknown","grey");
              }
            } else {
              svgBadge("build","skipped","blue");
            }
            echo "</td>\n";
          } else {
            echo "<td>";
              svgBadge("build","queued","yellow");
            echo "</td>\n";
          }
        }
      }
      echo "</tr>\n";
    }
    echo "</table>\n";

    echo "<br><br>\n";
    echo "<h2>SixTrack Tests</h2>\n";
    // Generate map of tests from the last build session
    $tMap = array();
    foreach($tStatus as $tNo=>$tEntry) {
      $theCompiler = $tEntry["compiler"];
      $theType     = $tEntry["type"];
      $theBuild    = $tEntry["flag"];
      $testTime    = intval($tEntry["timestamp"]);
      if($testTime >= $startTime) {
        $tMap[$theCompiler."/".$theType."/".$theBuild] = $tNo;
      }
    }
    $tTypes     = array("Release","Debug");
    $tCompilers = explode(",",$bMeta["complist"]);
    $tBuilds    = explode(",",$bMeta["testlist"]);

    echo "<table>\n";
    echo "<tr>\n";
    echo "<td style='border-right: 2px solid #999999; width: 180px;'>&nbsp;</td>\n";
    foreach($tCompilers as $compNm) {
      echo "<td colspan=2 align=center><b>".$compNm."</b></td>\n";
    }
    echo "</tr>\n";
    echo "<tr style='border-bottom: 2px solid #999999;'>\n";
    echo "<td style='border-right: 2px solid #999999; width: 180px;'>&nbsp;</td>\n";
    foreach($tCompilers as $compNm) {
      foreach($tTypes as $typNm) {
        echo "<td align=center>".$typNm."</td>\n";
      }
    }
    echo "</tr>\n";
    foreach($tBuilds as $bldNm) {
      echo "<tr>\n";
      echo "<td style='border-right: 2px solid #999999; width: 180px;'><b>".$bldNm."</b></td>\n";
      foreach($tCompilers as $compNm) {
        foreach($tTypes as $typNm) {
          $tData = $tStatus[$tMap[$compNm."/".$typNm."/".$bldNm]];
          if(array_key_exists("action",$tData)) {
            $tInfo  = "Time Stamp: ".date("Y-m-d H:i:s",intval($tData["timestamp"]))."\n";
            $tInfo .= "Test Time: ".secToTime($tData["testtime"])."\n";
            $tInfo .= "Result: ".$tData["ntotal"]." Run, ".$tData["npass"]." Passed, ".$tData["nfail"]." Failed\n";
            $tInfo .= "Command: ".$tData["testcmd"];
            if($tData["failed"] != "") {
              $tInfo .= "\nFailed: ".$tData["failed"];
            }
            echo "<td title=\"".$tInfo."\">";
            $nTotal = intval($tData["ntotal"]);
            $nPass  = intval($tData["npass"]);
            $nFail  = intval($tData["nfail"]);
            $tRate  = $nPass/$nTotal;
            $tMsg   = number_format(100*$tRate,1)." %";
            if($tData["passtests"]) {
              svgBadge("tests", $tMsg,"green");
            } elseif(!$tData["passtests"] && $tRate >= 0.98) {
              svgBadge("tests", $tMsg,"orange");
            } elseif(!$tData["passtests"]) {
              svgBadge("tests", $tMsg,"red");
            } else {
              svgBadge("tests","unknown","grey");
            }
            echo "</td>\n";
          } else {
            echo "<td>";
              if($bMeta["endtime"] == "-1") {
                svgBadge("tests","queued","yellow");
              } else {
                svgBadge("tests","skipped","blue");
              }
            echo "</td>\n";
          }
        }
      }
      echo "</tr>\n";
    }
    echo "</table>\n";
  ?>
</article>
<aside>
  <?php include_once($incPath."/aside_quick.php"); ?>
  <?php include_once($incPath."/aside_footer.php"); ?>
</aside>

<?php require_once($incPath."/footer.php"); ?>
