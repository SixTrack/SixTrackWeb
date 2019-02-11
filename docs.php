<?php
   /**
    *  SixTrack Web – Documentation File
    * ===================================
    *  Veronica Berglyd Olsen, CERN BE/ABP/HSS 2018
    *  Created 2018-02-20
    */

    $bMain = true;
    require_once("includes/header.php");
?>

<article>
    <h1>Documentation</h1>
    <h2>Manuals</h2>

    <p>The SixTrack manuals consists of a user manual for setting up and running simulations,
        a build manual for compiling SixTrack from source, and a physics manual. The manuals are
        provided in both PDF and HTML format. The HTML version of the manuals are generated from
        LaTeX source, and may therefore contain formatting errors.</p>

    <h3>SixTrack User Manual</h3>
    <ul>
        <li><a href="/SixTrack/docs/user_full/manual.php">HTML Version</a> [Version 5.x]</li>
        <li><a href="/SixTrack/docs/user_manual.pdf">PDF Version</a> [Version 5.x]</li>
        <li><a href="/SixTrack/files/user_manual_v40716.pdf">PDF Version</a> [Version 4.7.16]</li>
    </ul>

    <h3>SixDesk User Manual</h3>
    <ul>
        <li><a href="/SixTrack/doc/sixdesk/sixdesk_env.html">HTML Version</a></li>
        <li><a href="/SixTrack/doc/sixdesk/sixdesk_env.pdf">PDF Version</a></li>
    </ul>

    <h3>Physics Manual</h3>
    <ul>
        <li><a href="/SixTrack/docs/physics_manual.pdf">PDF Version</a></li>
    </ul>

    <h3>Build Manual for Version 4.x and 5.x</h3>
    <ul>
        <li><a href="/SixTrack/docs/building_sixtrack.pdf">PDF Version</a></li>
    </ul>

    <h2>Physics References</h2>
    <ul>
        <li>1985,
            <!--a href="../doc/sixth1.pdf"-->
            <a href="http://cds.cern.ch/record/162762/files/desy%2085-084_001.pdf">
            Non-Linear canonical equations of coupled synchro-betatron motion...</a>,
            G. Ripken, DESY 85-084; assuming v=c.
        </li>
        <li>1987,
            <!--a href="../doc/sixth2.pdf"-->
            <a href="http://cds.cern.ch/record/178715/files/DESY-87-036.pdf">
            A non-linear canonical formalism for the coupled synchro-betatron motion</a>,
            D.P. Barber, G. Ripken and F. Schmidt, Desy 87-036; thin/thick maps assuming v=beta*c.
        </li>
        <li>1995,
            <a href="http://cds.cern.ch/record/281283/files/sl-95-012.pdf">
            A Symplectic Six-Dimensional Thin-Lens Formalism for Tracking</a>,
            G. Ripken,F. Schmidt; CERN SL-95-012; Thin element maps.
        </li>
        <li>1995,
            <!--a HREF="../doc/ripken2.pdf"-->
            <a href="http://arxiv.org/pdf/acc-phys/9510005.pdf">
            Construction of Nonlinear symplectic Six-Dimensional Thin-Lens Formalism by Exponentiation.</a>,
            K. Heinemann, G. Ripken, F. Schmidt; Exact drift.
        </li>
        <li>1996,
            <!--a HREF="../doc/ripken3.pdf"-->
            <a href="http://cds.cern.ch/record/311281/files/SCAN-9609164.pdf">
            Symplectic Thin-Lens Transfer Maps for SIXTRACK...</a>;
            D.P. Barber, K. Heinemann, G. Ripken, F. Schmidt; Exact thin bend.
        </li>
        <li>2001,
            <!--a href="../doc/ripken_new.pdf"-->
            <a href="https://cds.cern.ch/record/425950/files/lhc-project-report-369.pdf">
            6D Beam-Beam Kick including Coupled Motion</a>,
            L.H.A. Leunissen, F. Schmidt,G. Ripken.
        </li>
        <li>2013,
            <a href="http://cds.cern.ch/record/1642385/files/CERN-THESIS-2013-248.pdf">
            Particle Tracking in Circular Accelerators Using the Exact Hamiltonian in SixTrack</a>,
            M. Fjellstrom.
        </li>
        <li>2016,
            <a href="http://cds.cern.ch/record/2207368/files/tupmw015.pdf">
            Symplectic Tracking of Multi-Isotopic Heavy-Ion Beams in SixTrack</a>,
            P. Hermes, R. Bruce, R. De Maria.
        </li>
        <li>2017,
            <a href="https://indico.cern.ch/event/684338/contributions/2805473/attachments/1568753/2687512/note_6d_beam_beam.pdf">
            6D beam-beam interaction step-by-step</a>,
            G. Iadarola, R. De Maria, Y. Papaphilippou.
        </li>
    </ul>

    <h2>Useful References</h2>
    <ul>
        <li>2006,
            <!--a href="../doc/forest06.pdf"-->
            <a href="https://lib-extopc.kek.jp/preprints/PDF/2005/0527/0527107.pdf">
            Geometric Integration for Particle Accelerators</a>,
            E. Forest, KEK Preprint 2005-107. Historical overview of single particle tracking.
        </li>
        <li>2002,
            <!--a href="../doc/forest02.pdf"-->
            <a href="http://cds.cern.ch/record/573082/files/sl-2002-044.pdf">
            Introduction to the polymorphic tracking code</a>
            E. Forest, KEK Report 2002-3. Physics of PTC and references to SixTrack methods.
        </li>
        <li>1997,
            <!--a href="../doc/forest97.pdf"-->
            <a href="http://www.osti.gov/scitech/servlets/purl/883343">
            Symplectic Integration</a>,
            Z. Parsa, E. Forest. Inclusion of radiation.
        </li>
        <li>1990,
            <!--<a href="../doc/yoshida00.pdf">-->
            <a href="http://www.sciencedirect.com/science/article/pii/0375960190900923">
            Construction of higher order symplectic integrators</a>,
            H. Yoshida, Phys. Lett. A 150 (5–7): 262. Arbitrary order integrators from solvable maps.
        </li>
        <li>1992,
            <a href="http://www.slac.stanford.edu/cgi-wrap/getdoc/slac-pub-10055.pdf">
            A Symplectic Beam-Beam Interaction with Energy Change</a>,
            SLAC-PUB-10055, KEK Preprint 92-117. Synchro betatron mapping for head-on beam beam effects.
        </li>
        <li>1988,
            <!--a href="../doc/ripken88.pdf"-->
            <a href="https://cds.cern.ch/record/194174/files/cer-000105773.pdf">
            Methods of Beam Optics</a>,
            F. Willeke, G. Ripken, DESY 88-114. Fully coupled formalism.
        </li>
        <li>1980,
            <a href="http://cds.cern.ch/record/122227/files/198005132.pdf">
            Closed expression for the electrical field of a two-dimensional Gaussian charge</a>,
            M. Bassetti, A. Erskine, CERN-ISR-TH-80-06. 4D beam beam kick.
        </li>
    </ul>

    <h2>Theses</h2>
    <ul>
        <li>2014,
            <a href="http://cds.cern.ch/record/1642385/files/CERN-THESIS-2013-248.pdf">
            Particle Tracking in Circular Accelerators Using the Exact Hamiltonian in SixTrack</a>,
            M. Fjellstrom.
        </li>
    </ul>
</article>
<aside>
    <?php include_once($incPath."/aside_manual.php"); ?>
</aside>

<?php require_once($incPath."/footer.php"); ?>
