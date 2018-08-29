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
    <?php
        $bStatus    = array();
        $bCompilers = array();
        $bTypes     = array();
        $bBuilds    = array();
        $bMap       = array();
        // Read build files
        $bFiles = scandir("build_status");
        sort($bFiles);
        foreach($bFiles as $bFile) {
            if(!is_file("build_status/".$bFile)) continue;
            if($bFile == "meta.dat") {
                $bMeta = file_get_contents("build_status/".$bFile);
                $bMeta = unserialize($bMeta);
                continue;
            }
            $bData = file_get_contents("build_status/".$bFile);
            $bData = unserialize($bData);
            $bStatus[$bData["buildno"]] = $bData;

            $theCompiler = $bData["compiler"];
            $theType     = $bData["type"];
            $theBuild    = $bData["flag"]." ".$bData["build"];

            $bCompilers[$theCompiler] += 1;
            $bTypes[$theType]         += 1;
            $bBuilds[$theBuild]       += 1;
            $bMap[$theCompiler][$theType][$theBuild] = $bData["buildno"];
        }

        echo "<ul class='no-bullet-list'>\n";
        echo "<li><b>Last Run Time:</b> ".date("Y-m-d H:i:s",intval($bMeta["runtime"]))."</li>\n";
        echo "<li><b>Git HASH:</b> ".$bMeta["hash"]."</li>\n";
        echo "<li><b>Operating System:</b> ".$bMeta["os"]."</li>\n";
        echo "</ul><br>\n";

        echo "<table>\n";
        echo "<tr>\n";
        echo "<td style='border-right: 2px solid #999999;'>&nbsp;</td>\n";
        foreach($bCompilers as $compNm=>$compN) {
            echo "<td colspan=2 align=center><b>".$compNm."</b></td>\n";
        }
        echo "</tr>\n";
        echo "<tr style='border-bottom: 2px solid #999999;'>\n";
        echo "<td style='border-right: 2px solid #999999;'>&nbsp;</td>\n";
        foreach($bCompilers as $compNm=>$compN) {
            foreach($bTypes as $typNm=>$typN) {
                echo "<td align=center>".$typNm."</td>\n";
            }
        }
        echo "</tr>\n";
        foreach($bBuilds as $bldNm=>$bldpN) {
            echo "<tr>\n";
            echo "<td style='border-right: 2px solid #999999;'><b>".$bldNm."</b></td>\n";
            foreach($bCompilers as $compNm=>$compN) {
                foreach($bTypes as $typNm=>$typN) {
                    $bData  = $bStatus[$bMap[$compNm][$typNm][$bldNm]];
                    $bInfo  = "Time Stamp: ".date("Y-m-d H:i:s",intval($bData["timestamp"]))."\n";
                    $bInfo .= "Build Time: ".number_format($bData["buildtime"],3)." seconds";
                    echo "<td>";
                    $bPass = -1;
                    if($bData["success"] == "False") $bPass = 0;
                    if($bData["success"] == "True")  $bPass = 1;
                    $bAge = time() - intval($bData["timestamp"]);
                    if($bAge > 86400*5) $bPass = -1;
                    switch($bPass) {
                    case 0:
                        echo "<img title='".$bInfo."' src='images/build_failing.svg'>";
                        break;
                    case 1:
                        echo "<img title='".$bInfo."' src='images/build_passing.svg'>";
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
