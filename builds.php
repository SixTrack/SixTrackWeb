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
?>

<article>
  <h1>Build Status</h1>
  See also the <a href="http://abp-cdash.web.cern.ch/abp-cdash/index.php?project=SixTrack">SixTrack CDash</a> page.<br>
  <br>
  <?php
    $bStatus = array();
    $tStatus = array();

    // Read build files
    $bFiles = scandir("build_status");
    foreach($bFiles as $bFile) {
      if(!is_file("build_status/".$bFile)) continue;
      $bData = file_get_contents("build_status/".$bFile);
      $bData = unserialize($bData);
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
      $runH = floor($runT/3600);
      $runM = round(($runT-$runH*3600)/60);
      echo "<li><span ".$lblStyle.">Finished:</span> ".date("Y-m-d H:i:s",intval($bMeta["endtime"]))."</li>\n";
      echo "<li><span ".$lblStyle.">Run Time:</span> ".$runH." h ".$runM." min</li>\n";
    }
    echo "<li><span ".$lblStyle.">Git Hash:</span> ";
      echo "<a href='https://github.com/SixTrack/SixTrack/commit/".$bMeta["hash"]."'>".$bMeta["hash"]."</a> ";
    echo "</li>\n";
    echo "<li><span ".$lblStyle.">Git Time:</span> ".$bMeta["ctime"]."</li>\n";
    echo "<li><span ".$lblStyle.">Host OS:</span> ".$bMeta["os"]."</li>\n";
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
            if($bData["build"] == "True") {
              $bInfo .= "Build Time: ".number_format($bData["buildtime"],3)." seconds\n";
              $bInfo .= "Command: ".$bData["command"];
            }
            echo "<td title='".str_replace("\'","",$bInfo)."'>";
            if($bData["build"] == "True") {
              if($bData["success"] == "True") {
                svgBadge("build","passed","green");
              } elseif($bData["success"] == "False") {
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
            $tInfo .= "Test Time: ".number_format($tData["testtime"],3)." seconds\n";
            $tInfo .= "Command: ".str_replace('\"','"',$tData["testcmd"]);
            if($tData["failed"] != "") {
              $tInfo .= "\nFailed: ".$tData["failed"];
            }
            echo "<td title='".str_replace("\'","",$tInfo)."'>";
            $nTotal = intval($tData["ntotal"]);
            $nPass  = intval($tData["npass"]);
            $nFail  = intval($tData["nfail"]);
            $fRate  = $nFail/$nTotal;
            $tMsg   = $tData["npass"]."/".$tData["ntotal"];
            if($tData["passtests"] == "True") {
              svgBadge("tests", $tMsg,"green");
            } elseif($tData["passtests"] == "False") {
              if($fRate > 0.1) {
                svgBadge("tests", $tMsg,"red");
              } else {
                svgBadge("tests", $tMsg,"orange");
              }
            } else {
              svgBadge("tests","unknown","grey");
            }
            echo "</td>\n";
          } else {
            echo "<td>";
              if($bMeta["endtime"] == "-1") {
                svgBadge("tests","queued","yellow");
              } else {
                svgBadge("tests","skipped","orange");
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
  <h2>Quick Links</h2>
  <ul class="square-bullet-list">
    <li><a href="https://github.com/SixTrack/SixTrack/">SixTrack Source</a></li>
    <li><a href="https://github.com/SixTrack/SixTrack/releases">SixTrack Releases</a></li>
  </ul>
  <br>
  <?php include_once($incPath."/aside_footer.php"); ?>
</aside>

<?php require_once($incPath."/footer.php"); ?>
