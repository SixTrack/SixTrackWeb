<?php
   /**
    *  SixTrack Web – Builds File
    * ============================
    *  Veronica Berglyd Olsen, CERN BE/ABP/HSS 2018
    *  Created 2018-08-29
    */

    $bMain = true;
    require_once("includes/header.php");
?>

<article>
    <h1>Build Status</h1>
    See also the <a href="http://abp-cdash.web.cern.ch/abp-cdash/index.php?project=SixTrack">SixTrack CDash</a> page.<br>
    <br>
    <?php
        $bStatus    = array();
        $tStatus    = array();

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

        sort($bStatus);
        sort($tStatus);

        $startTime = intval($bMeta["runtime"]);

        echo "<ul class='no-bullet-list'>\n";
        echo "<li><b>Last Run Time:</b> ".date("Y-m-d H:i:s",intval($bMeta["runtime"]))."</li>\n";
        echo "<li><b>Git HASH:</b> <a href='https://github.com/SixTrack/SixTrack/commit/".$bMeta["hash"]."'>".$bMeta["hash"]."</a></li>\n";
        echo "<li><b>Operating System:</b> ".$bMeta["os"]."</li>\n";
        echo "</ul><br>\n";

        echo "<h2>SixTrack Builds</h2>\n";
        // Generate map of builds from the last build session
        $bCompilers = array();
        $bTypes     = array();
        $bBuilds    = array();
        $bMap       = array();
        foreach($bStatus as $bNo=>$bEntry) {
            $theCompiler = $bEntry["compiler"];
            $theType     = $bEntry["type"];
            $theBuild    = $bEntry["flag"]." [".$bEntry["build"]."]";
            $bCompilers[$theCompiler] += 1;
            $bTypes[$theType]         += 1;
            $buildTime = intval($bEntry["timestamp"]);
            if($buildTime >= $startTime) {
                $bCompilers[$theCompiler] += 1;
                $bTypes[$theType]         += 1;
                $bBuilds[$theBuild]       += 1;
                $bMap[$theCompiler."/".$theType."/".$theBuild] = $bNo;
            }
        }

        echo "<table>\n";
        echo "<tr>\n";
        echo "<td style='border-right: 2px solid #999999; width: 230px;'>&nbsp;</td>\n";
        foreach($bCompilers as $compNm=>$compN) {
            echo "<td colspan=2 align=center><b>".$compNm."</b></td>\n";
        }
        echo "</tr>\n";
        echo "<tr style='border-bottom: 2px solid #999999;'>\n";
        echo "<td style='border-right: 2px solid #999999; width: 230px;'>&nbsp;</td>\n";
        foreach($bCompilers as $compNm=>$compN) {
            foreach($bTypes as $typNm=>$typN) {
                echo "<td align=center>".$typNm."</td>\n";
            }
        }
        echo "</tr>\n";
        foreach($bBuilds as $bldNm=>$bldN) {
            echo "<tr>\n";
            echo "<td style='border-right: 2px solid #999999; width: 230px;'><b>".$bldNm."</b></td>\n";
            foreach($bCompilers as $compNm=>$compN) {
                foreach($bTypes as $typNm=>$typN) {
                    $bData  = $bStatus[$bMap[$compNm."/".$typNm."/".$bldNm]];
                    $bInfo  = "Time Stamp: ".date("Y-m-d H:i:s",intval($bData["timestamp"]))."\n";
                    $bInfo .= "Build Time: ".number_format($bData["buildtime"],3)." seconds";
                    echo "<td>";
                    $bPass = -1;
                    if($bData["success"] == "False") $bPass = 0;
                    if($bData["success"] == "True")  $bPass = 1;
                    $bAge = time() - intval($bData["timestamp"]);
                    if($bAge > 86400*5) $bPass = -1;
                    if(intval($bMeta["runtime"]) > intval($bData["timestamp"])) $bPass = 2;
                    switch($bPass) {
                    case 0:
                        echo "<img title='".$bInfo."' src='images/build_failing.svg'>";
                        break;
                    case 1:
                        echo "<img title='".$bInfo."' src='images/build_passing.svg'>";
                        break;
                    case 2:
                        echo "<img src='images/build_queued.svg'>";
                        break;
                    default:
                        echo "<img src='images/build_unknown.svg'>";
                        break;
                    }
                    echo "</td>\n";
                }
            }
            echo "</tr>\n";
        }
        echo "</table>\n";
        
        echo "<br><br>\n";
        echo "<h2>SixTrack Tests</h2>\n";
        // Generate map of tests from the last build session
        $tCompilers = array();
        $tTypes     = array();
        $tBuilds    = array();
        $tMap       = array();
        foreach($tStatus as $tNo=>$tEntry) {
            $theCompiler = $tEntry["compiler"];
            $theType     = $tEntry["type"];
            $theBuild    = $tEntry["flag"]." [".$tEntry["build"]."]";
            $tCompilers[$theCompiler] += 1;
            $tTypes[$theType]         += 1;
            $testTime = intval($tEntry["timestamp"]);
            if($testTime >= $startTime) {
                $tCompilers[$theCompiler] += 1;
                $tTypes[$theType]         += 1;
                $tBuilds[$theBuild]       += 1;
                $tMap[$theCompiler."/".$theType."/".$theBuild] = $tNo;
            }
        }

        echo "<table>\n";
        echo "<tr>\n";
        echo "<td style='border-right: 2px solid #999999; width: 230px;'>&nbsp;</td>\n";
        foreach($tCompilers as $compNm=>$compN) {
            echo "<td colspan=2 align=center><b>".$compNm."</b></td>\n";
        }
        echo "</tr>\n";
        echo "<tr style='border-bottom: 2px solid #999999;'>\n";
        echo "<td style='border-right: 2px solid #999999; width: 230px;'>&nbsp;</td>\n";
        foreach($tCompilers as $compNm=>$compN) {
            foreach($tTypes as $typNm=>$typN) {
                echo "<td align=center>".$typNm."</td>\n";
            }
        }
        echo "</tr>\n";
        foreach($tBuilds as $bldNm=>$bldN) {
            echo "<tr>\n";
            echo "<td style='border-right: 2px solid #999999; width: 230px;'><b>".$bldNm."</b></td>\n";
            foreach($tCompilers as $compNm=>$compN) {
                foreach($tTypes as $typNm=>$typN) {
                    $tData  = $tStatus[$tMap[$compNm."/".$typNm."/".$bldNm]];
                    $tInfo  = "Time Stamp: ".date("Y-m-d H:i:s",intval($tData["timestamp"]))."\n";
                    $tInfo .= "Test Time: ".number_format($tData["testtime"],3)." seconds";
                    if($tData["failed"] != "") {
                        $tInfo .= "Failed: ".$tData["failed"];
                    }
                    echo "<td>";
                    $tPass = -1;
                    if($tData["passtests"] == "False") $tPass = 0;
                    if($tData["passtests"] == "True")  $tPass = 1;
                    $tAge = time() - intval($tData["timestamp"]);
                    if($tAge > 86400*5) $tPass = -1;
                    if(intval($tMeta["testtime"]) > intval($tData["timestamp"])) $tPass = 2;
                    switch($tPass) {
                    case 0:
                        echo "<img title='".$tInfo."' src='images/test_failing.svg'>";
                        break;
                    case 1:
                        echo "<img title='".$tInfo."' src='images/test_passing.svg'>";
                        break;
                    case 2:
                        echo "<img src='images/test_queued.svg'>";
                        break;
                    default:
                        echo "<img src='images/test_unknown.svg'>";
                        break;
                    }
                    echo "</td>\n";
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
