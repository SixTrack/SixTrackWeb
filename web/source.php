<?php
   /**
    *  SixTrack Web – Source File
    * ============================
    *  Created 2018-02-20
    */

    $bMain = true;
    require_once("includes/header.php");
?>

<article>
    <h1>Source Code</h1>
    
    <h2>SixTrack</h2>
    
    <p>The SixTrack source code is available in the <a href="https://github.com/SixTrack/SixTrack">SixTrack GitHub repository</a>.</p>
    <p>Files can be checked out with:
        <pre class="code">git clone https://github.com/SixTrack/SixTrack.git</pre>
    </p>
    
    <h2>SixDesk LHC Tracking Environment</h2>
    
    <p>The SixDesk source code is available in the <a href="https://github.com/SixTrack/SixDesk">SixDesk GitHub repository</a>.</p>
    <p>Files can be checked out with:
        <pre class="code">git clone https://github.com:SixTrack/SixDesk.git</pre>
    </p>
    
    <h2>Other Developements</h2>
    <p>
        <a href="http://github.com/SixTrack/SixDesk">SixDeskDB</a>: SixDesk environment implemented in Python/SQLite <br>
        <a href="http://github.com/SixTrack/SixTrackLib">SixTrackLib</a>: C library implementing SixTrack models.
    </p>
    
    <h2> Contributing to the Code</h2>
    <p>Developers are encouraged to create a GitHub fork and create pull requests.</p>
    <p>Specific on going developements are hosted on the <a href="http://github.com/SixTrack">GitHub SixTrack page</a> and they will
        normally be merged with the official repository as soon as the code is stable.</p>
    <p>Please use the git merge functionality to keep your master branch in synch with the official repository.</p>
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
