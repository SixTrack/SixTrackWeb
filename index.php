<?php
   /**
    *  SixTrack Web – Index File
    * ===========================
    *  Veronica Berglyd Olsen, CERN BE/ABP/HSS 2018
    *  Created 2018-02-19
    */

    $bMain = true;
    require_once("includes/header.php");
?>

<article>
    <h1>Overview</h1>
    <img src="images/top.jpg" width="906">
    <p>SixTrack is a single particle 6D symplectic tracking code optimized for long term tracking in high energy rings. 
        It is mainly used for the LHC for dynamic aperture studies, tune optimization, and collimation studies.</p>
    <p>The core of SixTrack is a single executable built from Fortran pre-processed sources. Links to the source
        code can be found on the <a href="source.php">source</a> page.
        The code is licensed under <a href="https://www.gnu.org/licenses/old-licenses/lgpl-2.1.en.html">LGPLv2.1</a> under the CERN
        copyright.</p>
    <p>Manual and reference papers are available on the <a href="docs.php">documentation</a> pages.</p>
    <p>A developer manual is also available on the <a href="https://twiki.cern.ch/twiki/bin/view/LHCAtHome/SixTrack">Wiki</a>
        pages.</p>
    <p>For Linux environments, <a href="/SixTrack/doc/sixdesk/sixdesk_env.html">SixDesk</a>, is available in the
        <a href="source.php">source</a> page for preparing, running, and analysing dynamic aperture studies for the LHC.
        It can be used with the CERN LSF and <a href="http://lhcathome.web.cern.ch/LHCathome/">LHC@Home</a> computer resources.</p>

    <h2>Development</h2>
    <ul class="no-bullet-list">
        <li><b>Coordinator:</b> Riccardo De Maria</li>
        <li><b>Former Coordinator and Original Author:</b> Frank Schmidt</li>
        <li><b>Release Manager:</b> Riccardo De Maria, Veronica Berglyd Olsen, Kyrre Sjobak</li>
        <li><b>Collimation Routines:</b> Alessio Mereghetti, Roderik Bruce, Stefano Redaelli, Guillaume Robert-Demolaize, Pascal Hermes</li>
        <li><b>SixDesk:</b> Alessio Mereghetti, Eric Mcintosh</li>
        <li><b>Boinc:</b> Alessio Mereghetti, Eric Mcintosh, Igor Zacharov, Nils Hoimyr</li>
        <li><b>Dynamic Effects:</b> Kyrre Sjobak, Veronica Berglyd Olsen</li>
        <li><b>Scattering:</b> Veronica Berglyd Olsen</li>
        <li><b>Numerical Reproducibility:</b> Eric Mcintosh, Harry Renshall</li>
        <li><b>Build System:</b> Eric Mcintosh, Kyrre Sjobak, James Molson, Riccardo De Maria, Veronica Berglyd Olsen</li>
        <!-- <li><b>BNL Link Person:</b> Guillaume Robert-Demolaize</li> -->
        <li><b>Fluka SixTrack Interoperation:</b> Alession Mereghetti, Vasilis Vlachoudis</li>
        <li><b>Fringe Fields, Generic Polynomial Maps:</b> Barbara Dalena, Dave Brett</li>
        <li><b>Beam-Beam:</b> Javier Barranco, Giovanni Iadarola</li>
        <li><b>Exact Hamiltonian:</b> Mattias Fjellstrom</li>
        <li><b>Crab cavities:</b> Rogelio Tomas, Javier Barranco, Rama Calaga, Ewen Maclean</li>
        <li><b>Electron Lens:</b> Miriam Fitter, Valentina Previtali</li>
        <li><b>Wire:</b> Andrei Patapenka</li>
        <li><b>Crystal Collimators:</b> Daniele Mirarchi</li>
        <li><b>Multiple Ion Species:</b> Pascal Hermes</li>
        <li><b>Beam-Gas Interactions:</b> Yngve Levinsen</li>
        <li><b>Frequency Map Analysis:</b> Miriam Fitterer</li>
    </ul>
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
