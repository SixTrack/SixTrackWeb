<?php
    $bMain  = true;
    $sHead  = '<!--Generated on Wed Mar 14 15:10:47 2018 by LaTeXML (version 0.8.1) http://dlmf.nist.gov/LaTeXML/.-->
<link rel="stylesheet" href="LaTeXML.css" type="text/css">
<link rel="stylesheet" href="ltx-report.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML" type="text/javascript"></script>
';
    $sHead .= '<link rel="stylesheet" href="/SixTrack/css/latexml-fix.css" type="text/css">
';
    require_once('../../includes/header.php');
?>
<article id='manual' class='ltx_document'>
<div id='generator'>Generated on Wed Mar 14 15:10:47 2018 by <a href='http://dlmf.nist.gov/LaTeXML/'>LaTeXML</a> (version 0.8.1)</div>
<div class="ltx_titlepage">
<p class="ltx_p ltx_align_center">
      <span class="ltx_text ltx_font_smallcaps">European Organization for Nuclear Research</span>
    </p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text ltx_font_smallcaps">CERN BE/ABP</span>
    </p>
<p class="ltx_p ltx_align_right">CERN/xx/xx</p>
<p class="ltx_p ltx_align_right">Updated March 2018</p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text ltx_font_bold" style="font-size:298%;">SixTrack<span class="ltx_text ltx_font_medium"></span></span>
    </p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text" style="font-size:172%;">Version 5.0</span>
    </p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text" style="font-size:172%;">Single Particle Tracking Code Treating Transverse Motion with Synchrotron Oscillations in a Symplectic Manner</span>
    </p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text ltx_font_bold" style="font-size:172%;">User’s Reference Manual<span class="ltx_text ltx_font_medium"></span></span>
    </p>
<p class="ltx_p ltx_align_center">F. Schmidt</p>
<p class="ltx_p ltx_align_center">Updated by:
A. Alekou,
V.K. Berglyd Olsen,
R. De Maria,
M. Fitterer,
S. Kostoglou,
T. Persson,
K. Sjobak,
J.F. Wagner,
and
S.J. Wretborn,</p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text ltx_font_bold" style="font-size:120%;">Abstract<span class="ltx_text ltx_font_medium"></span></span>
    </p>
<p class="ltx_p">The aim of SixTrack is to track two nearby particles taking into account the full six–dimensional phase space including synchrotron oscillations in a symplectic manner.
It allows to predict the long–term dynamic aperture which is defined as the border between regular and chaotic motion.
This border can be found by studying the evolution of the distance in phase space of two initially nearby particles.
Parameters of interest like nonlinear detuning and smear are determined via a post processing of the tracking data.
An analysis of the first order resonances can be done and correction schemes for several of those resonances can be calculated.
Moreover, there is the feature to calculate a one–turn map to very high order and the full six–dimensional case, using LBL differential algebra.
This map allows a subsequent theoretical analysis like normal form procedures which are provided by É. Forest <cite class="ltx_cite">[<a href="#bib.bib1" title="" class="ltx_ref">1</a>]</cite>.</p>
<p class="ltx_p">The linear elements are usually treated as thick elements in SixTrack.
In that case there is at least one non–zero length element in the structure file which is not a drift element.
If the accelerator, however, is modelled exclusively with drifts and kicks, SixTrack automatically uses the thin lens formalism according to G. Ripken <cite class="ltx_cite">[<a href="#bib.bib2" title="" class="ltx_ref">2</a>]</cite>.
A common header of output data and the format of these data has been found for MAD and SixTrack tracking data.</p>
<p class="ltx_p ltx_align_center">Geneva, Switzerland</p>
<p class="ltx_p ltx_align_center">March 14, 2018</p>
</div>
<div class="ltx_pagination ltx_role_newpage"></div>
<h6>Contents:</h6>
<ul class="ltx_toclist">
<li class="ltx_tocentry"><a href="#Chx1" title="Acknowledgement" class="ltx_ref"><span class="ltx_text ltx_ref_title">Acknowledgement</span></a></li>
<li class="ltx_tocentry">
<a href="#Ch1" title="Chapter 1 Introduction" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">1 </span>Introduction</span></a>
<ul class="ltx_toclist ltx_toc_chapter">
<li class="ltx_tocentry"><a href="#Ch1.S1" title="1.1 Versions and Service ‣ Chapter 1 Introduction" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">1.1 </span>Versions and Service</span></a></li>
<li class="ltx_tocentry"><a href="#Ch1.S2" title="1.2 Evolution of SixTrack ‣ Chapter 1 Introduction" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">1.2 </span>Evolution of SixTrack</span></a></li>
<li class="ltx_tocentry">
<a href="#Ch1.S3" title="1.3 SixTrack Input Structure ‣ Chapter 1 Introduction" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">1.3 </span>SixTrack Input Structure</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch1.S3.SS1" title="1.3.1 Input Format ‣ 1.3 SixTrack Input Structure ‣ Chapter 1 Introduction" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">1.3.1 </span>Input Format</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch2" title="Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2 </span>General Input</span></a>
<ul class="ltx_toclist ltx_toc_chapter">
<li class="ltx_tocentry"><a href="#Ch2.S1" title="2.1 Program Version ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2.1 </span>Program Version</span></a></li>
<li class="ltx_tocentry"><a href="#Ch2.S2" title="2.2 Print Selection ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2.2 </span>Print Selection</span></a></li>
<li class="ltx_tocentry"><a href="#Ch2.S3" title="2.3 Comment Line ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2.3 </span>Comment Line</span></a></li>
<li class="ltx_tocentry"><a href="#Ch2.S4" title="2.4 Iteration Errors ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2.4 </span>Iteration Errors</span></a></li>
<li class="ltx_tocentry"><a href="#Ch2.S5" title="2.5 MAD-X to SixTrack Conversion ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2.5 </span>MAD-X to SixTrack Conversion</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch3" title="Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3 </span>Machine Geometry</span></a>
<ul class="ltx_toclist ltx_toc_chapter">
<li class="ltx_tocentry">
<a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1 </span>Single Elements</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch3.S1.SS1" title="3.1.1 Linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.1 </span>Linear Elements</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.2 </span>Non-linear Elements</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS3" title="3.1.3 Multipole Blocks ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.3 </span>Multipole Blocks</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS4" title="3.1.4 Cavities ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.4 </span>Cavities</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS5" title="3.1.5 Beam–Beam Lens ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.5 </span>Beam–Beam Lens</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS6" title="3.1.6 Wire ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.6 </span>Wire</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS7" title="3.1.7 “Phase–trombone” or Matrix Element ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.7 </span>“Phase–trombone” or Matrix Element</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS8" title="3.1.8 AC Dipole ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.8 </span>AC Dipole</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS9" title="3.1.9 Dipole Edge ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.9 </span>Dipole Edge</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS10" title="3.1.10 Crab Cavity ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.10 </span>Crab Cavity</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS11" title="3.1.11 RF Multipole ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.11 </span>RF Multipole</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS12" title="3.1.12 Electron Lens ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.12 </span>Electron Lens</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS13" title="3.1.13 Scattering point ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.13 </span>Scattering point</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS14" title="3.1.14 Beam Position Monitor ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.14 </span>Beam Position Monitor</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS15" title="3.1.15 Other Element Types ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.15 </span>Other Element Types</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch3.S2" title="3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2 </span>Block Definitions</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.1 </span>Structure Input</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS2" title="3.2.2 Displacement of Elements ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.2 </span>Displacement of Elements</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch4" title="Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4 </span>Special Elements</span></a>
<ul class="ltx_toclist ltx_toc_chapter">
<li class="ltx_tocentry"><a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.1 </span>Multipole Coefficients</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.S2" title="4.2 Aperture Limitations ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.2 </span>Aperture Limitations</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.S3" title="4.3 Power Supply Ripple ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.3 </span>Power Supply Ripple</span></a></li>
<li class="ltx_tocentry">
<a href="#Ch4.S4" title="4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.4 </span>Dynamic Kicks</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch4.S4.SS1" title="4.4.1 FUN Statements ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.4.1 </span>FUN Statements</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.S4.SS2" title="4.4.2 SET Statement ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.4.2 </span>SET Statement</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.S4.SS3" title="4.4.3 Additional Flags ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.4.3 </span>Additional Flags</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.S4.SS4" title="4.4.4 Output File dynksets.dat ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.4.4 </span>Output File <span class="ltx_text ltx_font_typewriter">dynksets.dat</span></span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.S4.SS5" title="4.4.5 Examples ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.4.5 </span>Examples</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#Ch4.S5" title="4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.5 </span>Beam–Beam Element</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.S6" title="4.6 Wire ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.6 </span>Wire</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.S7" title="4.7 “Phase Trombone” Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.7 </span>“Phase Trombone” Element</span></a></li>
<li class="ltx_tocentry">
<a href="#Ch4.S8" title="4.8 Beam Distribution EXchange (BDEX) ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.8 </span>Beam Distribution EXchange (BDEX)</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch4.S8.SS1" title="4.8.1 Communication protocols ‣ 4.8 Beam Distribution EXchange (BDEX) ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.8.1 </span>Communication protocols</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#Ch4.S9" title="4.9 Electron lens ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.9 </span>Electron lens</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.S10" title="4.10 Scattering ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.10 </span>Scattering</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch5" title="Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5 </span>Organising Tasks</span></a>
<ul class="ltx_toclist ltx_toc_chapter">
<li class="ltx_tocentry"><a href="#Ch5.S1" title="5.1 Random Fluctuation Starting Number ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5.1 </span>Random Fluctuation Starting Number</span></a></li>
<li class="ltx_tocentry"><a href="#Ch5.S2" title="5.2 Organisation of Random Numbers ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5.2 </span>Organisation of Random Numbers</span></a></li>
<li class="ltx_tocentry"><a href="#Ch5.S3" title="5.3 Combination of Elements ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5.3 </span>Combination of Elements</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch6" title="Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6 </span>Processing</span></a>
<ul class="ltx_toclist ltx_toc_chapter">
<li class="ltx_tocentry"><a href="#Ch6.S1" title="6.1 Linear Optics Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.1 </span>Linear Optics Calculation</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S2" title="6.2 Tune Variation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.2 </span>Tune Variation</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S3" title="6.3 Chromaticity Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.3 </span>Chromaticity Correction</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.4 </span>Orbit Correction</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S5" title="6.5 Decoupling of Motion in the Transverse Planes ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.5 </span>Decoupling of Motion in the Transverse Planes</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S6" title="6.6 Sub–resonance Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.6 </span>Sub–resonance Calculation</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S7" title="6.7 Search for Optimum Places to Compensate Resonances ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.7 </span>Search for Optimum Places to Compensate Resonances</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S8" title="6.8 Resonance Compensation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.8 </span>Resonance Compensation</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S9" title="6.9 Differential Algebra ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.9 </span>Differential Algebra</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S10" title="6.10 Normal Forms ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.10 </span>Normal Forms</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S11" title="6.11 Corrections ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.11 </span>Corrections</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.S12" title="6.12 Post–processing ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.12 </span>Post–processing</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch7" title="Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">7 </span>Initial Conditions for Tracking</span></a>
<ul class="ltx_toclist ltx_toc_chapter">
<li class="ltx_tocentry"><a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">7.1 </span>Tracking Parameters</span></a></li>
<li class="ltx_tocentry"><a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">7.2 </span>Initial Coordinates</span></a></li>
<li class="ltx_tocentry"><a href="#Ch7.S3" title="7.3 Synchrotron Oscillation ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">7.3 </span>Synchrotron Oscillation</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch8" title="Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">8 </span>Extra Output Files</span></a>
<ul class="ltx_toclist ltx_toc_chapter">
<li class="ltx_tocentry"><a href="#Ch8.S1" title="8.1 Dumping of Beam Population ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">8.1 </span>Dumping of Beam Population</span></a></li>
<li class="ltx_tocentry"><a href="#Ch8.S2" title="8.2 FMA Analysis ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">8.2 </span>FMA Analysis</span></a></li>
<li class="ltx_tocentry"><a href="#Ch8.S3" title="8.3 ZIPFile Combined and Compressed Output ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">8.3 </span>ZIPFile Combined and Compressed Output</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#A1" title="Appendix A List of Keywords" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">A </span>List of Keywords</span></a></li>
<li class="ltx_tocentry">
<a href="#A2" title="Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">B </span>List of Default Values</span></a>
<ul class="ltx_toclist ltx_toc_appendix">
<li class="ltx_tocentry"><a href="#A2.S1" title="B.1 Default Tracking Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">B.1 </span>Default Tracking Parameters</span></a></li>
<li class="ltx_tocentry"><a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">B.2 </span>Default Size Parameters</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#A3" title="Appendix C Input and Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">C </span>Input and Output Files</span></a></li>
<li class="ltx_tocentry"><a href="#A4" title="Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D </span>Data Structure of the Data–Files</span></a></li>
<li class="ltx_tocentry"><a href="#bib" title="Bibliography" class="ltx_ref"><span class="ltx_text ltx_ref_title">Bibliography</span></a></li>
</ul>
<div class="ltx_pagination ltx_role_newpage"></div>
<section id="Chx1" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">Acknowledgement</h2>
<div id="Chx1.p1" class="ltx_para">
<p class="ltx_p">I would like to thank my colleagues at DESY and CERN to help to find nasty bugs and for a thorough check of the program.
I would like to thank Mikko Vaenttinen who helped to vectorise the program.
He also did most of the typing of the manuscript.
Moreover, I want to express my gratitude to F. Zimmermann who helped to finish the differential–algebra part in endless night sessions.
Additions concerning Normal Forms have been contributed by M. Giovannozzi.
J. Miles helped with the calculation of the 6D Courant–Snyder matrix and its use to transform the tracking data in the post–processing.
W. Herr is thanked for providing a software package used for the orbit correction. L.H.A. Leunissen extracted and adapted the 6D beam–beam code of Hirata <cite class="ltx_cite">[<a href="#bib.bib19" title="" class="ltx_ref">19</a>]</cite>.</p>
</div>
<div id="Chx1.p2" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p ltx_align_right">– <span class="ltx_text ltx_font_italic">F. Schmidt, for the version 3.x and 4.x manual</span></p>
<div class="ltx_pagination ltx_role_newpage"></div>
</div>
</section>
<section id="Ch1" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 1 </span>Introduction</h2>
<div id="Ch1.p1" class="ltx_para">
<p class="ltx_p">The Single Particle Tracking Code SixTrack is optimised to carry two particles <span class="ltx_note ltx_role_footnote"><sup class="ltx_note_mark">1</sup><span class="ltx_note_outer"><span class="ltx_note_content"><sup class="ltx_note_mark">1</sup>Two particles are needed for the detection of chaotic behaviour.</span></span></span> through an accelerator structure over a large number of turns.
It is an offspring of RACETRACK <cite class="ltx_cite">[<a href="#bib.bib3" title="" class="ltx_ref">3</a>]</cite> written by Albin Wrulich.
The input structure has been changed as little as possible so that slightly modified RACETRACK input files, or those of other offsprings like FASTRAC <cite class="ltx_cite">[<a href="#bib.bib4" title="" class="ltx_ref">4</a>]</cite> can be read.</p>
</div>
<section id="Ch1.S0.SS0.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">The main features of SixTrack are:</h5>
<div id="Ch1.S0.SS0.SSS0.Px1.p1" class="ltx_para">
<ol id="Ch1.I1" class="ltx_enumerate">
<li id="Ch1.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch1.I1.i1.p1" class="ltx_para">
<p class="ltx_p">Treatment of the full six–dimensional motion including synchrotron motion in a symplectic manner <cite class="ltx_cite">[<a href="#bib.bib5" title="" class="ltx_ref">5</a>]</cite>. The energy can be ramped at the same time considering the relativistic change of the velocity <cite class="ltx_cite">[<a href="#bib.bib6" title="" class="ltx_ref">6</a>]</cite>.</p>
</div>
</li>
<li id="Ch1.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch1.I1.i2.p1" class="ltx_para">
<p class="ltx_p">Detection of the onset of chaotic motion and thereby the long term dynamic aperture by evaluating the Lyapunov exponent.</p>
</div>
</li>
<li id="Ch1.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch1.I1.i3.p1" class="ltx_para">
<p class="ltx_p">Post processing procedure allowing:</p>
<ul id="Ch1.I1.I1" class="ltx_itemize">
<li id="Ch1.I1.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I1.i1.p1" class="ltx_para">
<p class="ltx_p">calculation of the Lyapunov exponent,</p>
</div>
</li>
<li id="Ch1.I1.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I1.i2.p1" class="ltx_para">
<p class="ltx_p">calculation of the average phase advance per turn,</p>
</div>
</li>
<li id="Ch1.I1.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I1.i3.p1" class="ltx_para">
<p class="ltx_p">FFT analysis,</p>
</div>
</li>
<li id="Ch1.I1.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I1.i4.p1" class="ltx_para">
<p class="ltx_p">resonance analysis,</p>
</div>
</li>
<li id="Ch1.I1.I1.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I1.i5.p1" class="ltx_para">
<p class="ltx_p">calculation of the average, maximum and minimum values of the Courant–Snyder emittance and the invariants of linearly coupled motion,</p>
</div>
</li>
<li id="Ch1.I1.I1.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I1.i6.p1" class="ltx_para">
<p class="ltx_p">calculation of smear, and</p>
</div>
</li>
<li id="Ch1.I1.I1.i7" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I1.i7.p1" class="ltx_para">
<p class="ltx_p">plotting using the CERN packages HBOOK, HPLOT and HIGZ <cite class="ltx_cite">[<a href="#bib.bib7" title="" class="ltx_ref">7</a>, <a href="#bib.bib8" title="" class="ltx_ref">8</a>, <a href="#bib.bib9" title="" class="ltx_ref">9</a>]</cite></p>
</div>
</li>
</ul>
</div>
</li>
<li id="Ch1.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch1.I1.i4.p1" class="ltx_para">
<p class="ltx_p">Calculation of first–order resonances and of correction schemes for the resonances <cite class="ltx_cite">[<a href="#bib.bib10" title="" class="ltx_ref">10</a>]</cite>.</p>
</div>
</li>
<li id="Ch1.I1.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5.</span>
<div id="Ch1.I1.i5.p1" class="ltx_para">
<p class="ltx_p">Calculation of the one–turn map using the differential algebra techniques. The original DA package by M.Berz <cite class="ltx_cite">[<a href="#bib.bib11" title="" class="ltx_ref">11</a>]</cite> has been replaced by the package of LBL <cite class="ltx_cite">[<a href="#bib.bib1" title="" class="ltx_ref">1</a>]</cite>. The Fortran code is transferred into a Map producing via the (slightly modified) “DAFOR” code <cite class="ltx_cite">[<a href="#bib.bib12" title="" class="ltx_ref">12</a>]</cite>.</p>
</div>
</li>
<li id="Ch1.I1.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">6.</span>
<div id="Ch1.I1.i6.p1" class="ltx_para">
<p class="ltx_p">The code is vectorised, with two particles, the number of amplitudes, the different relative momentum deviations <math id="Ch1.I1.i6.p1.m1" class="ltx_Math" alttext="\Delta p/p_{0}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow></math> in parallel <cite class="ltx_cite">[<a href="#bib.bib13" title="" class="ltx_ref">13</a>]</cite>.
</p>
</div>
</li>
<li id="Ch1.I1.i7" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">7.</span>
<div id="Ch1.I1.i7.p1" class="ltx_para">
<p class="ltx_p">Operational improvements:</p>
<ul id="Ch1.I1.I2" class="ltx_itemize">
<li id="Ch1.I1.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I2.i1.p1" class="ltx_para">
<p class="ltx_p">free format input,</p>
</div>
</li>
<li id="Ch1.I1.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I2.i2.p1" class="ltx_para">
<p class="ltx_p">optimisation of the calculation of multipole kicks,</p>
</div>
</li>
<li id="Ch1.I1.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I2.i3.p1" class="ltx_para">
<p class="ltx_p">improved treatment of random errors,</p>
</div>
</li>
<li id="Ch1.I1.I2.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                    <span class="ltx_text ltx_font_bold">–</span>
                  </span>
<div id="Ch1.I1.I2.i4.p1" class="ltx_para">
<p class="ltx_p">each binary data file has a header describing the history of the run (Appendix <a href="#A4" title="Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">D</span></a>)</p>
</div>
</li>
</ul>
</div>
</li>
</ol>
</div>
</section>
<section id="Ch1.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">1.1 </span>Versions and Service</h3>
<div id="Ch1.S1.p1" class="ltx_para">
<p class="ltx_p">There are two versions: for element by element tracking there is a vector version, and there is a version to produce a one turn map using the LBL Differential Algebra package.
In both cases the input structure file <span class="ltx_text ltx_font_typewriter">fort.2</span> is used to determine if the thick or thin linear element mode has to be used.</p>
</div>
<div id="Ch1.S1.p2" class="ltx_para">
<p class="ltx_p">To use the power of the Differential Algebra, for instance to calculate the 6D closed orbit in an elegant fashion, the tracking versions may also be equipped with a low order map facility to avoid the otherwise huge demand on memory.</p>
</div>
<div id="Ch1.S1.p3" class="ltx_para">
<p class="ltx_p">It must be mentioned that in the linear thin lens version dipoles have to be treated in a special way.
See section <a href="#Ch3.S1.SS3" title="3.1.3 Multipole Blocks ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.3</span></a> for details.</p>
</div>
<div id="Ch1.S1.p4" class="ltx_para">
<p class="ltx_p">To convert MAD-X files into SixTrack input, a special conversion program <math id="Ch1.S1.p4.m1" class="ltx_Math" alttext="mad\_6t" display="inline"><mrow><mi>m</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><mn>6</mn><mo>⁢</mo><mi>t</mi></mrow></math> <cite class="ltx_cite">[<a href="#bib.bib15" title="" class="ltx_ref">15</a>]</cite> has been developed (see also <a href="#Ch2.S5" title="2.5 MAD-X to SixTrack Conversion ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.5</span></a>).</p>
</div>
<div id="Ch1.S1.p5" class="ltx_para">
<p class="ltx_p">The following subroutines are taken from various packages:</p>
</div>
<figure id="Ch1.T1" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 1.1: </span>External Routines</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Package</span></span>
              </th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Routine</span>
              </th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Purpose</span>
              </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">NAGLIB</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">E04UCF, E04UDM, E04UEF, X04ABF</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Using internally Normal Forms</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">HBOOK</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">HBOOK2, HDELET, HLIMIT, HTITLE</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Graphic basics</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">HPLOT</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">HPLAX, HPLCAP, HPLEND, HPLINT</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Graphic options</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">HPLOPT, HPLSET, HPLSIZ, HPLSOF</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">HIGZ</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">IGMETA, ISELNT, IPM, IPL</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">Graphic output</td>
</tr>
</tbody>
</table>
</figure>
<div id="Ch1.S1.p6" class="ltx_para">
<p class="ltx_p">All versions can be downloaded from the web.
The project webpage is found at <a href="http://sixtrack.web.cern.ch/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://sixtrack.web.cern.ch/</span></a>,
and primary source repository is located at <a href="https://github.com/SixTrack/SixTrack" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://github.com/SixTrack/SixTrack</span></a>.
Older versions can be found at <a href="http://cern.ch/Frank.Schmidt/Source" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://cern.ch/Frank.Schmidt/Source</span></a>.</p>
</div>
<div id="Ch1.S1.p7" class="ltx_para">
<p class="ltx_p">In case of problems, please see the CERN SixTrack egroups “sixtrack-users” and “sixtrack-developers”.
If these are not accessible to you, you are welcome to contact the coordinators: Riccardo De Maria and Kyrre Sjobak, as well as the original developer Frank Schmidt.
Our contact details are available from the CERN phonebook.</p>
</div>
<div id="Ch1.S1.p8" class="ltx_para">
<p class="ltx_p">If you think you have found a defect in the program, please create a report on the issue tracker at <a href="https://github.com/SixTrack/SixTrack/issues" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://github.com/SixTrack/SixTrack/issues</span></a>.
Note that for this to be usefull, you need to describe what the program is doing, what you expected it to do, and an example which demonstrates the unwanted behaviour.
Plase also look through the issues that are already listed, and see if it has already been reported.
If so, you are welcome to add a comment to the issue, which may influence its priority and give additional and useful information to the developers.</p>
</div>
<div id="Ch1.S1.p9" class="ltx_para">
<p class="ltx_p">The most up to date version of the documentation can always be found on the GitHub repository mentioned above.
Additionally, various older documentation can be found at <a href="http://cern.ch/Frank.Schmidt/Documentation/doc.html" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://cern.ch/Frank.Schmidt/Documentation/doc.html</span></a>.</p>
</div>
</section>
<section id="Ch1.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">1.2 </span>Evolution of SixTrack</h3>
<div id="Ch1.S2.p1" class="ltx_para">
<p class="ltx_p">Following, is a short historical overview of how the versions of SixTrack have evolved.</p>
<ul id="Ch1.I2" class="ltx_itemize">
<li id="Ch1.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch1.I2.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Version 1</span>
The first version has been an upgrade of RACETRACK <cite class="ltx_cite">[<a href="#bib.bib3" title="" class="ltx_ref">3</a>]</cite> to include the full 6D formalism for long linear elements by G. Ripken <cite class="ltx_cite">[<a href="#bib.bib5" title="" class="ltx_ref">5</a>]</cite>.</p>
</div>
</li>
<li id="Ch1.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch1.I2.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Version 2</span>
The DA package and the Normal Form techniques <cite class="ltx_cite">[<a href="#bib.bib11" title="" class="ltx_ref">11</a>, <a href="#bib.bib17" title="" class="ltx_ref">17</a>]</cite> have been added to allow the production of high order one turn Taylor maps and their analysis.
The 6D thin lens formalism <cite class="ltx_cite">[<a href="#bib.bib2" title="" class="ltx_ref">2</a>]</cite> has also been included to speed up the tracking without appreciable deterioration of the accelerator model for very large Hadron colliders like the LHC.</p>
</div>
</li>
<li id="Ch1.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch1.I2.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Version 3</span>
The beam–beam kick à la Bassetti and Erskine <cite class="ltx_cite">[<a href="#bib.bib18" title="" class="ltx_ref">18</a>]</cite> has been included together with the 6D part by Hirata et al. <cite class="ltx_cite">[<a href="#bib.bib19" title="" class="ltx_ref">19</a>]</cite>.
Moreover, this 6D part has been upgraded to include the full 6D linear coupling <cite class="ltx_cite">[<a href="#bib.bib20" title="" class="ltx_ref">20</a>]</cite>.
Lastly, the LBL DA package has replaced the original one by Berz, and all operations needed to set up the accelerator structure are now performed with the help of Forest’s LieLib package <cite class="ltx_cite">[<a href="#bib.bib1" title="" class="ltx_ref">1</a>]</cite>.</p>
</div>
</li>
<li id="Ch1.I2.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch1.I2.i4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Version 4</span></p>
</div>
</li>
<li id="Ch1.I2.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch1.I2.i5.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Version 5</span></p>
</div>
</li>
</ul>
</div>
<div id="Ch1.S2.p2" class="ltx_para">
<p class="ltx_p">Programs with large input structures like SixTrack tend to be far from perfect, even though a cumbersome chase for program bugs and a lot of polishing on the input structure has been performed.
Plenty of comments and suggestions are therefore needed to further improve the program.</p>
</div>
</section>
<section id="Ch1.S3" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">1.3 </span>SixTrack Input Structure</h3>
<div id="Ch1.S3.p1" class="ltx_para">
<p class="ltx_p">The SixTrack input is line oriented.
Each line of 80 characters is treated as one string of input, in which a certain sequence of numbers and character strings is expected to be found.
The numbers and character strings must be separated by at least one blank space.
Floating point numbers can be given in any format, but must be distinguishable from integer numbers.
Omitted values at the end of an input line will keep their default values (<a href="#A2.S1" title="B.1 Default Tracking Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.1</span></a>).
Lines with a slash “/” in the first column will be ignored by the program.</p>
</div>
<div id="Ch1.S3.p2" class="ltx_para">
<p class="ltx_p">For detailed questions concerning rounding errors, calculation of the Lyapunov exponent and determination of the long term dynamic aperture, see <cite class="ltx_cite">[<a href="#bib.bib14" title="" class="ltx_ref">14</a>]</cite>.</p>
</div>
<section id="Ch1.S3.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">1.3.1 </span>Input Format</h4>
<div id="Ch1.S3.SS1.p1" class="ltx_para">
<p class="ltx_p">The input format used in SixTrack has been inherited from RACETRACK.
This system makes it easy to read input and allows easy change and addition of input blocks.</p>
</div>
<div id="Ch1.S3.SS1.p2" class="ltx_para">
<p class="ltx_p">The idea of the input format is to use a sequence of input blocks, each block with a specific keyword in the first line.
The block is terminated by the keyword <span class="ltx_text ltx_font_typewriter">NEXT</span> in the last line.
The input data goes in the lines in between.
The keyword <span class="ltx_text ltx_font_typewriter">ENDE</span> ends the input sequence, and anything after this keyword is ignored.
This system makes it easy to read input and allows easy change and addition of input blocks.</p>
</div>
<div id="Ch1.S3.SS1.p3" class="ltx_para">
<p class="ltx_p">In the following chapters, the input structure of SixTrack is discussed in detail.
To facilitate the use of the program, a set of appendices are added, giving a list of keywords in Appendix <a href="#A1" title="Appendix A List of Keywords" class="ltx_ref"><span class="ltx_text ltx_ref_tag">A</span></a>, a list of default values in Appendix <a href="#A2" title="Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B</span></a>, the input and output files are described in Appendix <a href="#A3" title="Appendix C Input and Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">C</span></a>, and a description of the data structure of the binary data files in Appendix <a href="#A4" title="Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">D</span></a>.
</p>
<div class="ltx_pagination ltx_role_newpage"></div>
</div>
</section>
</section>
</section>
<section id="Ch2" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 2 </span>General Input</h2>
<section id="Ch2.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">2.1 </span>Program Version</h3>
<div id="Ch2.S1.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_italic">Program Version</span> input block determines if all of the input will be in the input file <span class="ltx_text ltx_font_typewriter">fort.3</span>, or if the geometry part of the machine (see <a href="#Ch3" title="Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a>) will be in a separate file: <span class="ltx_text ltx_font_typewriter">fort.2</span>.
The latter option is useful if tracking parameters are changed, but the geometry part of the input is left as it is.
The geometry part can be produced directly from a MAD-X input file (see <a href="#Ch2.S5" title="2.5 MAD-X to SixTrack Conversion ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.5</span></a>).</p>
</div>
<div id="Ch2.S1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">FREE</span> or <span class="ltx_text ltx_font_typewriter">GEOM</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">None</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">keyword comment title</span>
              </td>
</tr>
</tbody>
</table>
</div>
<section id="Ch2.S1.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch2.S1.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">keyword</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The first four characters of the first line of the <span class="ltx_text ltx_font_typewriter">fort.3</span> input file are reserved for the keyword. <span class="ltx_text ltx_font_typewriter">FREE</span> for free format input with all input in <span class="ltx_text ltx_font_typewriter">fort.3</span>, and <span class="ltx_text ltx_font_typewriter">GEOM</span> if the geometry part is in file <span class="ltx_text ltx_font_typewriter">fort.2</span>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">comment</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Following the first four characters, 8 characters are reserved for comments</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">title</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The next 60 characters are interpreted as the title of the output file <span class="ltx_text ltx_font_typewriter">fort.6</span>.</td>
</tr>
</tbody>
</table>
</div>
</section>
</section>
<section id="Ch2.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">2.2 </span>Print Selection</h3>
<div id="Ch2.S2.p1" class="ltx_para">
<p class="ltx_p">Use of the <span class="ltx_text ltx_font_italic">Print Selection</span> input block causes the printing of the input data to the output file <span class="ltx_text ltx_font_typewriter">fort.6</span>.
It is advisable to always use this input block to have a complete protocol of the tracking run.</p>
</div>
<div id="Ch2.S2.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">PRIN</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">None</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch2.S3" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">2.3 </span>Comment Line</h3>
<div id="Ch2.S3.p1" class="ltx_para">
<p class="ltx_p">An additional comment can be specified with the <span class="ltx_text ltx_font_italic">Comment</span> block.
The comment will be written to the binary data files (Appendix <a href="#A4" title="Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">D</span></a>), and will appear in the post processing output as well.</p>
</div>
<div id="Ch2.S3.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">COMM</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">A string of up to 80 characters.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch2.S4" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">2.4 </span>Iteration Errors</h3>
<div id="Ch2.S4.p1" class="ltx_para">
<p class="ltx_p">For the processing procedures, the number of iterations and the precision to which the processing is to be performed are chosen with the <span class="ltx_text ltx_font_italic">Iteration Errors</span> input block.
If the input block is left out, default values will be used.</p>
</div>
<div id="Ch2.S4.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">ITER</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">1 to 4</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Each data line holds three values as in table <a href="#Ch2.T1" title="Table 2.1 ‣ 2.4 Iteration Errors ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.1</span></a>, except for the fourth line where the horizontal and vertical aperture limits can be additionally specified. This has been added to avoid artificial crashes for special machines.</td>
</tr>
</tbody>
</table>
</div>
<figure id="Ch2.T1" class="ltx_table">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table 2.1: </span>Iteration Errors</figcaption>
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Variable</span></span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Type</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Default</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">
                <span class="ltx_text ltx_align_left ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
              </td>
</tr>
<tr class="ltx_tr" style="background-color:#ECECEC;">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r" colspan="4">Data Line 1</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">ITCO</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">int</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">50</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Number of Iterations for closed orbit calculation.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">DMA</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1e-12</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Demanded Precision of closed orbit displacements.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">DMAP</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1e-15</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Demanded Precision of derivative of closed orbit displacements.</td>
</tr>
<tr class="ltx_tr" style="background-color:#ECECEC;">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t" colspan="4">Data Line 2</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">ITQV</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">int</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">10</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Number of Iterations for Q Adjustment.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">DKQ</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1e-10</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Variations of quadrupole strengths.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">DQQ</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1e-10</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Demanded Precision of tunes.</td>
</tr>
<tr class="ltx_tr" style="background-color:#ECECEC;">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t" colspan="4">Data Line 3</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">ITCRO</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">int</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">10</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Number of Iterations for chromaticity correction.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">DSM0</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1e-10</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Variations of sextupole strengths.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">DECH</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1e-10</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Demanded Precision of chromaticity correction.</td>
</tr>
<tr class="ltx_tr" style="background-color:#ECECEC;">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t" colspan="4">Data Line 4</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">DE0</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1e-9</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Variations of momentum spread for chromaticity calculation.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">DED</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1e-9</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Variations of momentum spread for evaluation of dispersion.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">DSI</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1e-9</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Demanded Precision of desired orbit r.m.s. value; compensation of resonance width.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">APER(1)</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1000 [mm]</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:290.2pt;">Demanded Precision of horizontal aperture limit.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">APER(2)</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">dbl</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter">1000 [mm]</span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:290.2pt;">Demanded Precision of vertical aperture limit.</td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch2.S5" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">2.5 </span>MAD-X to SixTrack Conversion</h3>
<div id="Ch2.S5.p1" class="ltx_para">
<p class="ltx_p">A converter has been developed <cite class="ltx_cite">[<a href="#bib.bib15" title="" class="ltx_ref">15</a>]</cite>, which is directly linked to MAD-X.
It produces the geometry file <span class="ltx_text ltx_font_typewriter">fort.2</span>; an appendix to the parameter file <span class="ltx_text ltx_font_typewriter">fort.3</span>, which defines which of the multipole errors are switched on; the error file <span class="ltx_text ltx_font_typewriter">fort.16</span>, and the file <span class="ltx_text ltx_font_typewriter">fort.8</span> which holds the transverse misalignments and the tilt of the non-linear kick elements.
It also produce a file <span class="ltx_text ltx_font_typewriter">fort.34</span> with linear lattice functions, phase advances and multipole strengths needed for resonance calculations for the program <span class="ltx_text ltx_font_italic">SODD</span> <cite class="ltx_cite">[<a href="#bib.bib21" title="" class="ltx_ref">21</a>]</cite>.
</p>
</div>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
</section>
<section id="Ch3" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 3 </span>Machine Geometry</h2>
<section id="Ch3.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3.1 </span>Single Elements</h3>
<div id="Ch3.S1.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_italic">Single Elements</span> input block defines the name and type of linear and non-linear elements, the inverse bending radius or multipole strength respectively, and the strength and length of the elements.
Linear and non-linear elements are distinguished by length – linear elements have a non-zero length and non-linear elements have zero length.
Both kinds of elements can appear in the input block in arbitrary order.
The input line has a different format for linear and non-linear elements.
Moreover, the multipoles, being a set of non-linear elements, are treated in a special way.
The maximum number of elements is set as a parameter (see Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>).</p>
</div>
<div id="Ch3.S1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">SING</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Described in the following sections.</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch3.S1.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.1 </span>Linear Elements</h4>
<div id="Ch3.S1.SS1.p1" class="ltx_para">
<p class="ltx_p">Each linear single element has a name, type, inverse bending radius, focusing and a non-zero length.
</p>
</div>
<section id="Ch3.S1.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS1.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type <math id="Ch3.S1.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="\varrho^{-1}" display="inline"><msup><mi>ϱ</mi><mrow><mo mathvariant="normal">-</mo><mn mathvariant="normal">1</mn></mrow></msup></math> K length</span></p>
</div>
<div id="Ch3.S1.SS1.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">As shown in the table <a href="#Ch3.T1" title="Table 3.1 ‣ Format ‣ 3.1.1 Linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a> .</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <math id="Ch3.S1.SS1.SSS0.Px1.p2.m1" class="ltx_Math" alttext="\varrho^{-1}" display="inline"><msup><mi>ϱ</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></math>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Inverse bending radius in <math id="Ch3.S1.SS1.SSS0.Px1.p2.m2" class="ltx_Math" alttext="\mathrm{m}^{-1}" display="inline"><msup><mi mathvariant="normal">m</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></math>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">K</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Focusing strength in <math id="Ch3.S1.SS1.SSS0.Px1.p2.m3" class="ltx_Math" alttext="\mathrm{m}^{-2}" display="inline"><msup><mi mathvariant="normal">m</mi><mrow><mo>-</mo><mn>2</mn></mrow></msup></math>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">length</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Magnet length in meters.</td>
</tr>
</tbody>
</table>
</div>
<figure id="Ch3.T1" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.1: </span>Different Types of Linear Elements</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Type</span></span>
                  </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                    <math id="Ch3.T1.m1" class="ltx_Math" alttext="\mathbf{\varrho^{-1}}" display="inline"><msup><mi mathbackground="#B3B3FF">ϱ</mi><mrow><mo mathbackground="#B3B3FF">-</mo><mn mathbackground="#B3B3FF">𝟏</mn></mrow></msup></math>
                  </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                    <math id="Ch3.T1.m2" class="ltx_Math" alttext="\mathbf{K}" display="inline"><mi mathbackground="#B3B3FF">𝐊</mi></math>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">0</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">0</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">0</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Drift length magnet</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">1</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">0</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Norizontal (rectangular) bending</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">2</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">0</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Quadrupole (– focusing, + defocusing)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">3</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">0</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Norizontal (sector) bending</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">0</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Vertical (rectangular) bending</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">5</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">0</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Vertical (sector) bending</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">6</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Horizontal combined function magnet</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">7</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Vertical combined function magnet</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">0</td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">Edge focusing</td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch3.S1.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS1.SSS0.Px2.p1" class="ltx_para">
<ol id="Ch3.I1" class="ltx_enumerate">
<li id="Ch3.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I1.i1.p1" class="ltx_para">
<p class="ltx_p">For the horizontal plane the bending radius is defined to be negative (<math id="Ch3.I1.i1.p1.m1" class="ltx_Math" alttext="\varrho&lt;0" display="inline"><mrow><mi>ϱ</mi><mo>&lt;</mo><mn>0</mn></mrow></math>). This is different from other programs like MAD-X <cite class="ltx_cite">[<a href="#bib.bib22" title="" class="ltx_ref">22</a>]</cite>.</p>
</div>
</li>
<li id="Ch3.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I1.i2.p1" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I1.i2.p1.m1" class="ltx_Math" alttext="K&lt;0" display="inline"><mrow><mi>K</mi><mo>&lt;</mo><mn>0</mn></mrow></math> corresponds to a horizontal focusing quadrupole.</p>
</div>
</li>
<li id="Ch3.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I1.i3.p1" class="ltx_para">
<p class="ltx_p">For the length of an edge focusing element (type=8) the same value must be used as for the corresponding bending magnet. A sector bending magnet is transformed into a rectangular magnet with an edge focusing element of positive length on either side, while for the opposite transformation a negative length is required.</p>
</div>
</li>
<li id="Ch3.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch3.I1.i4.p1" class="ltx_para">
<p class="ltx_p">It is important to note that the splitting of a rectangular magnet, which is sometimes necessary if multipole errors are to be introduced, does change the linear optics. It is therefore advisable to replace the rectangular magnet with a sector magnet, which can be split without affecting the linear optics, and make an overall transformation into a rectangular magnet via edge focusing elements. Do not forget to use the total length of dipole as the length of the edge focusing element.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S1.SS2" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.2 </span>Non-linear Elements</h4>
<section id="Ch3.S1.SS2.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS2.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type <math id="Ch3.S1.SS2.SSS0.Px1.p1.m1" class="ltx_Math" alttext="K_{n}" display="inline"><msub><mi>K</mi><mi>n</mi></msub></math>-strength rms-strength length</span></p>
</div>
<div id="Ch3.S1.SS2.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">As shown in table <a href="#Ch3.T2" title="Table 3.2 ‣ Format ‣ 3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <math id="Ch3.S1.SS2.SSS0.Px1.p2.m1" class="ltx_Math" alttext="K_{n}" display="inline"><msub><mi>K</mi><mi>n</mi></msub></math>
                    <span class="ltx_text ltx_font_typewriter">-strength</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Average multipole strength.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">rms-strength</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Random multipole strength.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">length</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Must be 0.</td>
</tr>
</tbody>
</table>
</div>
<figure id="Ch3.T2" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.2: </span>Different Types of Non-linear Elements</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Type</span></span>
                  </th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Strength</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
                  </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_typewriter"> 0</span>
                  </th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">–</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Observation point (for instance for aperture limitations).</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_typewriter"> 1</span>
                  </th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <math id="Ch3.T2.m1" class="ltx_Math" alttext="b_{1}[\mathrm{rad}\cdot\mathrm{m}^{0}]" display="inline"><mrow><msub><mi>b</mi><mn>1</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM1"><mi>rad</mi><mo>⋅</mo><msup><mi mathvariant="normal">m</mi><mn>0</mn></msup></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Horizontal bending kick.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
                    <span class="ltx_text ltx_font_typewriter">-1</span>
                  </th>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <math id="Ch3.T2.m2" class="ltx_Math" alttext="a_{1}" display="inline"><msub><mi>a</mi><mn>1</mn></msub></math>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r">Vertical bending kick.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_typewriter"> 2</span>
                  </th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <math id="Ch3.T2.m3" class="ltx_Math" alttext="b_{2}[\mathrm{rad}\cdot\mathrm{m}^{-1}]" display="inline"><mrow><msub><mi>b</mi><mn>2</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM2"><mi>rad</mi><mo>⋅</mo><msup><mi mathvariant="normal">m</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Normal quadrupole kick.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
                    <span class="ltx_text ltx_font_typewriter">-2</span>
                  </th>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <math id="Ch3.T2.m4" class="ltx_Math" alttext="a_{2}" display="inline"><msub><mi>a</mi><mn>2</mn></msub></math>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r">Skew quadrupole kick.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">⋮</th>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_typewriter"> 10</span>
                  </th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <math id="Ch3.T2.m5" class="ltx_Math" alttext="b_{10}[\mathrm{rad}\cdot\mathrm{m}^{-9}]" display="inline"><mrow><msub><mi>b</mi><mn>10</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM3"><mi>rad</mi><mo>⋅</mo><msup><mi mathvariant="normal">m</mi><mrow><mo>-</mo><mn>9</mn></mrow></msup></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">Normal <math id="Ch3.T2.m6" class="ltx_Math" alttext="20^{th}" display="inline"><msup><mn>20</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math> pole.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r">
                    <span class="ltx_text ltx_font_typewriter">-10</span>
                  </th>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r">
                    <math id="Ch3.T2.m7" class="ltx_Math" alttext="a_{10}" display="inline"><msub><mi>a</mi><mn>10</mn></msub></math>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r">Skew <math id="Ch3.T2.m8" class="ltx_Math" alttext="20^{th}" display="inline"><msup><mn>20</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math> pole.</td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch3.S1.SS2.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS2.SSS0.Px2.p1" class="ltx_para">
<ol id="Ch3.I2" class="ltx_enumerate">
<li id="Ch3.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I2.i1.p1" class="ltx_para">
<p class="ltx_p">Because the horizontal bending magnet is defined to have a negative bending radius, the sign for normal elements is different from other programs like MAD-X, while skew elements have the same sign.</p>
</div>
</li>
<li id="Ch3.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I2.i2.p1" class="ltx_para">
<p class="ltx_p">Again contrary to other programs the factor <math id="Ch3.I2.i2.p1.m1" class="ltx_Math" alttext="(n-1)" display="inline"><mrow><mo stretchy="false">(</mo><mrow id="XM4"><mi>n</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow></math>! is already included in the multipole strength, which is defined as follows:</p>
<ul id="Ch3.I2.I1" class="ltx_itemize">
<li id="Ch3.I2.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I2.I1.i1.p1" class="ltx_para">
<p class="ltx_p">for normal elements:</p>
<table id="Ch3.Ex1" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch3.Ex1.m1" class="ltx_Math" alttext="b_{n}(\mathrm{SixTrack})=\frac{-1}{(n-1)!}\,L_{\mathrm{element}}\,b_{n}(%
\mathrm{MAD})" display="block"><mrow><mrow><msub><mi>b</mi><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM6">SixTrack</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mpadded width="+1.7pt"><mfrac><mrow><mo>-</mo><mn>1</mn></mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM5"><mi>n</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><msub><mi>L</mi><mi>element</mi></msub></mpadded><mo>⁢</mo><msub><mi>b</mi><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM7">MAD</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
<li id="Ch3.I2.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I2.I1.i2.p1" class="ltx_para">
<p class="ltx_p">for skew elements:</p>
<table id="Ch3.Ex2" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch3.Ex2.m1" class="ltx_Math" alttext="a_{n}(\mathrm{SixTrack})=\frac{1}{(n-1)!}\,L_{\mathrm{element}}\,a_{n}(\mathrm%
{MAD})" display="block"><mrow><mrow><msub><mi>a</mi><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM9">SixTrack</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mpadded width="+1.7pt"><mfrac><mn>1</mn><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM8"><mi>n</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><msub><mi>L</mi><mi>element</mi></msub></mpadded><mo>⁢</mo><msub><mi>a</mi><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM10">MAD</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
</ul>
</div>
</li>
<li id="Ch3.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I2.i3.p1" class="ltx_para">
<p class="ltx_p">Unlike in RACETRACK, the horizontal and vertical displacements do not fit into the 80 character input lines of SixTrack. They have to be introduced in a separate <span class="ltx_text ltx_font_italic">Displacements of Elements</span> input block (<a href="#Ch3.S2.SS2" title="3.2.2 Displacement of Elements ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>).</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S1.SS3" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.3 </span>Multipole Blocks</h4>
<div id="Ch3.S1.SS3.p1" class="ltx_para">
<p class="ltx_p">A set of normal, normal–r.m.s., skew, and skew–r.m.s. errors can be combined effectively.
The actual values for the strengths have to be given in a separate <span class="ltx_text ltx_font_italic">Multipole Coefficient</span> input block (<a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>) which must have the same name.
To consider the curvature of dipoles which are replaced by drifts and dipole kicks this block is used in two different ways.</p>
</div>
<section id="Ch3.S1.SS3.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS3.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type cstr cref length</span></p>
</div>
<div id="Ch3.S1.SS3.SSS0.Px1.p2" class="ltx_para">
<dl id="Ch3.I3" class="ltx_description">
<dt id="Ch3.I3.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">Marker for high order kick (default)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I3.ix1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                          <span class="ltx_text ltx_font_typewriter">name</span>
                        </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                          <span class="ltx_text ltx_font_typewriter">type</span>
                        </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Must be 11.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                          <span class="ltx_text ltx_font_typewriter">cstr</span>
                        </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The bending strength given in the <span class="ltx_text ltx_font_italic">Multipole Coefficient</span> input block (<a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>) is multiplied with this factor.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                          <span class="ltx_text ltx_font_typewriter">cref</span>
                        </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The reference radius given in the <span class="ltx_text ltx_font_italic">Multipole Coefficient</span> input block (<a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>) will be multiplied by this factor. If it is zero the multipole block will be ignored.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                          <span class="ltx_text ltx_font_typewriter">length</span>
                        </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Must be 0.</td>
</tr>
</tbody>
</table>
</div>
</dd>
<dt id="Ch3.I3.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">Default + dipole curvature</span></dt>
<dd class="ltx_item">
<div id="Ch3.I3.ix2.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                          <span class="ltx_text ltx_font_typewriter">name</span>
                        </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                          <span class="ltx_text ltx_font_typewriter">type</span>
                        </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Must be 11.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                          <span class="ltx_text ltx_font_typewriter">cstr</span>
                        </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The bending strength [rad] of horizontal or vertical dipole. Internally the value is set to one to allow the processing of a multipole block (<a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>).</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                          <span class="ltx_text ltx_font_typewriter">cref</span>
                        </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The length [m] of the dipole that is approximated by a kick. Internally this value is set to one to allow the processing of a multipole block (<a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>).</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                          <span class="ltx_text ltx_font_typewriter">length</span>
                        </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">length = -1: horizontal dipole.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">length = -2: vertical dipole.</td>
</tr>
</tbody>
</table>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S1.SS3.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS3.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">The definition of the multipole strength in a block will be given in (<a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>).</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS4" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.4 </span>Cavities</h4>
<section id="Ch3.S1.SS4.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS4.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type u0 harm lag</span></p>
</div>
<div id="Ch3.S1.SS4.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Type identifier is <math id="Ch3.S1.SS4.SSS0.Px1.p2.m1" class="ltx_Math" alttext="+12" display="inline"><mrow><mo>+</mo><mn>12</mn></mrow></math> and <math id="Ch3.S1.SS4.SSS0.Px1.p2.m2" class="ltx_Math" alttext="-12" display="inline"><mrow><mo>-</mo><mn>12</mn></mrow></math> for above and below transition energy respectively.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">u0</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Circumference voltage in [MV].</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">harm</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Harmonic number.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">lag</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Lag angle [degrees] in the cavity (zero is default).</td>
</tr>
</tbody>
</table>
</div>
</section>
</section>
<section id="Ch3.S1.SS5" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.5 </span>Beam–Beam Lens</h4>
<div id="Ch3.S1.SS5.p1" class="ltx_para">
<p class="ltx_p">Depending on the setting in the <span class="ltx_text ltx_font_typewriter">BEAM</span> block of <span class="ltx_text ltx_font_typewriter">fort.3</span> (Section <a href="#Ch4.S5" title="4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.5</span></a>), there are two ways to define a beam beam lens in the SINGLE ELEMENTS list.</p>
</div>
<div id="Ch3.S1.SS5.p2" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">When the <span class="ltx_text ltx_font_typewriter">EXPERT</span> flag is set in the <span class="ltx_text ltx_font_typewriter">BEAM</span> block:</span>
The parameters of the beam–beam lens is defined there.
In this case, only the element name and type and the location within the lattice remain in the <span class="ltx_text ltx_font_typewriter">fort.2</span> element definition.</p>
</div>
<section id="Ch3.S1.SS5.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS5.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type 0 0 0 0 0 0</span></p>
</div>
<div id="Ch3.S1.SS5.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">20</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The rest of the parameters are ignored and should be set to zero.</td>
</tr>
</tbody>
</table>
</div>
<div id="Ch3.S1.SS5.SSS0.Px1.p3" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">When the <span class="ltx_text ltx_font_typewriter">EXPERT</span> flag is not set:</span>
The “traditional” format is used.</p>
</div>
</section>
<section id="Ch3.S1.SS5.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS5.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type h-sep v-sep strength-ratio <math id="Ch3.S1.SS5.SSS0.Px2.p1.m1" class="ltx_Math" alttext="{\sigma\_\rm{hor}}^{2}" display="inline"><mrow><mi>σ</mi><mo mathvariant="monospace">⁢</mo><mi mathvariant="normal">_</mi><mo mathvariant="monospace">⁢</mo><msup><mi mathvariant="normal">hor</mi><mn mathvariant="normal">2</mn></msup></mrow></math> <math id="Ch3.S1.SS5.SSS0.Px2.p1.m2" class="ltx_Math" alttext="{\sigma\_\rm{ver}}^{2}" display="inline"><mrow><mi>σ</mi><mo mathvariant="monospace">⁢</mo><mi mathvariant="normal">_</mi><mo mathvariant="monospace">⁢</mo><msup><mi mathvariant="normal">ver</mi><mn mathvariant="normal">2</mn></msup></mrow></math> <math id="Ch3.S1.SS5.SSS0.Px2.p1.m3" class="ltx_Math" alttext="{\sigma\_\rm{lon}}^{2}" display="inline"><mrow><mi>σ</mi><mo mathvariant="monospace">⁢</mo><mi mathvariant="normal">_</mi><mo mathvariant="monospace">⁢</mo><msup><mi mathvariant="normal">lon</mi><mn mathvariant="normal">2</mn></msup></mrow></math></span></p>
</div>
<div id="Ch3.S1.SS5.SSS0.Px2.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">20</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">h-sep</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Horizontal beam–beam separation [mm].</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">v-sep</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Vertical beam–beam separation [mm].</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">strength-ratio</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Strength ratio with respect to the nominal beam–beam kick strength. This is useful, in particular for 4D, to allow for splitting one beam–beam kick into several (longitudinally close by) kicks.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <math id="Ch3.S1.SS5.SSS0.Px2.p2.m1" class="ltx_Math" alttext="{\sigma\_\rm{hor}}^{2}" display="inline"><mrow><mi>σ</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><msup><mi>hor</mi><mn>2</mn></msup></mrow></math>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">When the flag <math id="Ch3.S1.SS5.SSS0.Px2.p2.m2" class="ltx_Math" alttext="lhc=2" display="inline"><mrow><mrow><mi>l</mi><mo>⁢</mo><mi>h</mi><mo>⁢</mo><mi>c</mi></mrow><mo>=</mo><mn>2</mn></mrow></math> is set in the <span class="ltx_text ltx_font_typewriter">BEAM</span> block of the <span class="ltx_text ltx_font_typewriter">fort.3</span> file, this column represent the horizontal <math id="Ch3.S1.SS5.SSS0.Px2.p2.m3" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math> for the strong beam <math id="Ch3.S1.SS5.SSS0.Px2.p2.m4" class="ltx_Math" alttext="\rm{[mm^{2}]}" display="inline"><mrow><mo stretchy="false">[</mo><msup id="XM11"><mi>mm</mi><mn>2</mn></msup><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <math id="Ch3.S1.SS5.SSS0.Px2.p2.m5" class="ltx_Math" alttext="{\sigma\_\rm{ver}}^{2}" display="inline"><mrow><mi>σ</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><msup><mi>ver</mi><mn>2</mn></msup></mrow></math>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">When the flag <math id="Ch3.S1.SS5.SSS0.Px2.p2.m6" class="ltx_Math" alttext="lhc=2" display="inline"><mrow><mrow><mi>l</mi><mo>⁢</mo><mi>h</mi><mo>⁢</mo><mi>c</mi></mrow><mo>=</mo><mn>2</mn></mrow></math> is set in the <span class="ltx_text ltx_font_typewriter">BEAM</span> block of the <span class="ltx_text ltx_font_typewriter">fort.3</span> file, this column represent the vertical <math id="Ch3.S1.SS5.SSS0.Px2.p2.m7" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math> for the strong beam <math id="Ch3.S1.SS5.SSS0.Px2.p2.m8" class="ltx_Math" alttext="\rm{[mm^{2}]}" display="inline"><mrow><mo stretchy="false">[</mo><msup id="XM12"><mi>mm</mi><mn>2</mn></msup><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <math id="Ch3.S1.SS5.SSS0.Px2.p2.m9" class="ltx_Math" alttext="{\sigma\_\rm{lon}}^{2}" display="inline"><mrow><mi>σ</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><msup><mi>lon</mi><mn>2</mn></msup></mrow></math>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">This variable is for future purposes, at the present it is always equal to zero.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S1.SS5.SSS0.Px3" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS5.SSS0.Px3.p1" class="ltx_para">
<p class="ltx_p">These beam–beam elements become active when the “Beam–Beam” input block <a href="#Ch4.S5" title="4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.5</span></a> is used.</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS6" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.6 </span>Wire</h4>
<section id="Ch3.S1.SS6.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS6.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type</span></p>
</div>
<div id="Ch3.S1.SS6.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">15</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S1.SS6.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS6.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">The “wire” elements become active when the <span class="ltx_text ltx_font_typewriter">WIRE</span> input block <a href="#Ch4.S6" title="4.6 Wire ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.6</span></a> is used.
All parameters except name and type have to be set to zero, otherwise SixTrack aborts.
The parameters for the wire are defined in the <span class="ltx_text ltx_font_typewriter">WIRE</span> input block.</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS7" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.7 </span>“Phase–trombone” or Matrix Element</h4>
<section id="Ch3.S1.SS7.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS7.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type</span></p>
</div>
<div id="Ch3.S1.SS7.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">22</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S1.SS7.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS7.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">These “trombone” elements become active when the “Phase Trombone Element” input block <a href="#Ch4.S7" title="4.7 “Phase Trombone” Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.7</span></a> is used.</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS8" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.8 </span>AC Dipole</h4>
<section id="Ch3.S1.SS8.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS8.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type ACdipAmp Qd ACdipPhase</span></p>
</div>
<div id="Ch3.S1.SS8.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Type identifier is <math id="Ch3.S1.SS8.SSS0.Px1.p2.m1" class="ltx_Math" alttext="+16" display="inline"><mrow><mo>+</mo><mn>16</mn></mrow></math> and <math id="Ch3.S1.SS8.SSS0.Px1.p2.m2" class="ltx_Math" alttext="-16" display="inline"><mrow><mo>-</mo><mn>16</mn></mrow></math> for horizontal and vertical AC dipoles respectively.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">ACdipAmp</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Maximum excitation amplitude [Tm].</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">Qd</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Excitation frequency in units of [<math id="Ch3.S1.SS8.SSS0.Px1.p2.m3" class="ltx_Math" alttext="2\times\pi" display="inline"><mrow><mn>2</mn><mo>×</mo><mi>π</mi></mrow></math>].</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">ACdipPhase</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Phase of the harmonic excitation in radians.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S1.SS8.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS8.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">The length of the ramps and the flat top are specified in the “Displacement” block <a href="#Ch3.S2.SS2" title="3.2.2 Displacement of Elements ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>. The energy introduced in the “Initial coordinates” block <a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a> is used to compute the deflection angle.</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS9" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.9 </span>Dipole Edge</h4>
<section id="Ch3.S1.SS9.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS9.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type <math id="Ch3.S1.SS9.SSS0.Px1.p1.m1" class="ltx_Math" alttext="r_{21}" display="inline"><msub><mi>r</mi><mn mathvariant="normal">21</mn></msub></math> <math id="Ch3.S1.SS9.SSS0.Px1.p1.m2" class="ltx_Math" alttext="r_{43}" display="inline"><msub><mi>r</mi><mn mathvariant="normal">43</mn></msub></math></span></p>
</div>
<div id="Ch3.S1.SS9.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<th class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<th class="ltx_td ltx_align_justify" style="width:346.9pt;">24</th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <math id="Ch3.S1.SS9.SSS0.Px1.p2.m1" class="ltx_Math" alttext="r_{21}" display="inline"><msub><mi>r</mi><mn>21</mn></msub></math>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Horizontal edge focusing.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <math id="Ch3.S1.SS9.SSS0.Px1.p2.m2" class="ltx_Math" alttext="r_{43}" display="inline"><msub><mi>r</mi><mn>43</mn></msub></math>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Vertical edge focusing.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S1.SS9.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS9.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">MAD-X is outputting the correct format when using the dipedge element. An example of the hard edge model is described in the physics guide <cite class="ltx_cite">[<a href="#bib.bib16" title="" class="ltx_ref">16</a>]</cite>, which gives <math id="Ch3.S1.SS9.SSS0.Px2.p1.m1" class="ltx_Math" alttext="r_{21}=-r_{43}" display="inline"><mrow><msub><mi>r</mi><mn>21</mn></msub><mo>=</mo><mrow><mo>-</mo><msub><mi>r</mi><mn>43</mn></msub></mrow></mrow></math>.
Note that the values of the vertical edge focusing is dependent on the modeling of the fringe fields <cite class="ltx_cite">[<a href="#bib.bib23" title="" class="ltx_ref">23</a>]</cite>.
A particle with position <math id="Ch3.S1.SS9.SSS0.Px2.p1.m2" class="ltx_Math" alttext="x_{1},y_{1}" display="inline"><mrow><msub id="XM13"><mi>x</mi><mn>1</mn></msub><mo>,</mo><msub id="XM14"><mi>y</mi><mn>1</mn></msub></mrow></math> and angle <math id="Ch3.S1.SS9.SSS0.Px2.p1.m3" class="ltx_Math" alttext="x^{\prime}_{1},y^{\prime}_{1}" display="inline"><mrow><msubsup id="XM15"><mi>x</mi><mn>1</mn><mo>′</mo></msubsup><mo>,</mo><msubsup id="XM16"><mi>y</mi><mn>1</mn><mo>′</mo></msubsup></mrow></math> will have the angle <math id="Ch3.S1.SS9.SSS0.Px2.p1.m4" class="ltx_Math" alttext="x^{\prime}_{2},y^{\prime}_{2}" display="inline"><mrow><msubsup id="XM17"><mi>x</mi><mn>2</mn><mo>′</mo></msubsup><mo>,</mo><msubsup id="XM18"><mi>y</mi><mn>2</mn><mo>′</mo></msubsup></mrow></math> after passing through the dipedge element.
The following equations describe their relation:</p>
<table id="A4.S2.EGx1" class="ltx_equationgroup ltx_eqn_eqnarray">
<tr id="Ch3.E1" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                      <math id="Ch3.E1.m1" class="ltx_Math" alttext="\displaystyle x^{\prime}_{2}=x^{\prime}_{1}+x_{1}\frac{r_{21}}{1+\delta}" display="inline"><mrow><msubsup><mi>x</mi><mn>2</mn><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>x</mi><mn>1</mn><mo>′</mo></msubsup><mo>+</mo><mrow><msub><mi>x</mi><mn>1</mn></msub><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>r</mi><mn>21</mn></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow></math>
                    </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.1)</span></td>
</tr>
<tr id="Ch3.E2" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                      <math id="Ch3.E2.m1" class="ltx_Math" alttext="\displaystyle y^{\prime}_{2}=y^{\prime}_{1}+y_{1}\frac{r_{43}}{1+\delta}" display="inline"><mrow><msubsup><mi>y</mi><mn>2</mn><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>y</mi><mn>1</mn><mo>′</mo></msubsup><mo>+</mo><mrow><msub><mi>y</mi><mn>1</mn></msub><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>r</mi><mn>43</mn></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow></math>
                    </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.2)</span></td>
</tr>
</table>
</div>
</section>
</section>
<section id="Ch3.S1.SS10" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.10 </span>Crab Cavity</h4>
<section id="Ch3.S1.SS10.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS10.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type voltage frequency phase</span></p>
</div>
<div id="Ch3.S1.SS10.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Type identifier is <math id="Ch3.S1.SS10.SSS0.Px1.p2.m1" class="ltx_Math" alttext="+23" display="inline"><mrow><mo>+</mo><mn>23</mn></mrow></math> and <math id="Ch3.S1.SS10.SSS0.Px1.p2.m2" class="ltx_Math" alttext="-23" display="inline"><mrow><mo>-</mo><mn>23</mn></mrow></math> for horizontal and vertical crab cavities respectively.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">voltage</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Crab Cavity voltage [MV].</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">frequency</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Crab Cavity frequency [MHz].</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">phase</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Phase of the excitation in radians.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S1.SS10.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS10.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch3.S1.SS10.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">How to use the crab cavity from MAD-X (using rfmultipole) to SixTrack:
<br class="ltx_break"></p>
</div>
<div id="Ch3.S1.SS10.SSS0.Px2.p3" class="ltx_para ltx_noindent">
<p class="ltx_p">In the MAD-X script write:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
MULT.1, FREQ=&lt;freq in MHz&gt;., KNL=\{V [MV]/E0[MeV]\}, PNL=\{phase\}, TILT=&lt;H: 0; V:PI/2.&gt;;
</pre>
<p class="ltx_p">where phase is <math id="Ch3.S1.SS10.SSS0.Px2.p3.m1" class="ltx_Math" alttext="0.25" display="inline"><mn>0.25</mn></math> (phase for multipoles in SixTrack).
As an example, to have the effect of a vertical Crab Cavity of <math id="Ch3.S1.SS10.SSS0.Px2.p3.m2" class="ltx_Math" alttext="f=400~{}\mathrm{MHz}" display="inline"><mrow><mi>f</mi><mo>=</mo><mrow><mpadded width="+3.3pt"><mn>400</mn></mpadded><mo>⁢</mo><mi>MHz</mi></mrow></mrow></math>, <math id="Ch3.S1.SS10.SSS0.Px2.p3.m3" class="ltx_Math" alttext="V=6~{}\mathrm{MV}" display="inline"><mrow><mi>V</mi><mo>=</mo><mrow><mpadded width="+3.3pt"><mn>6</mn></mpadded><mo>⁢</mo><mi>MV</mi></mrow></mrow></math>, beam energy [MeV]: <span class="ltx_text ltx_font_typewriter">BEAM -&gt; PC/1e3</span>, use the following line:
<br class="ltx_break"></p>
<pre class="ltx_verbatim ltx_font_typewriter">
MULT.1, FREQ=400., KNL={6./BEAM -&gt; PC/1e3}, PNL={0.25}, TILT=PI/2.;
</pre>
<p class="ltx_p">This creates the following line in <span class="ltx_text ltx_font_typewriter">fort.2</span>:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
mult.1d  -23  6.00000000e+00  4.00000000e+02  0.00000000e+00  0.00000000e+00  0.00000000e+00  0.00000000e+00
</pre>
<p class="ltx_p">If you donât want to have a vertical Crab Cavity then just remove the <span class="ltx_text ltx_font_typewriter">TILT</span>.
If you donât want to have CC but a simple dipole field then remove the <span class="ltx_text ltx_font_typewriter">FREQ</span> parameter.</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS11" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.11 </span>RF Multipole</h4>
<div id="Ch3.S1.SS11.p1" class="ltx_para">
<p class="ltx_p">Provides a kick in the form of</p>
<table id="A4.S2.EGx2" class="ltx_equationgroup ltx_eqn_align">
<tr id="Ch3.E3" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="Ch3.E3.m1" class="ltx_Math" alttext="\displaystyle\Delta x^{\prime}+i\Delta y^{\prime}=" display="inline"><mrow><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>y</mi><mo>′</mo></msup></mrow></mrow><mo>=</mo><mi></mi></mrow></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="Ch3.E3.m2" class="ltx_Math" alttext="\displaystyle\frac{k}{1+\delta}(x+iy)^{n}\cos(\phi-2\pi ft)" display="inline"><mrow><mstyle displaystyle="true"><mfrac><mi>k</mi><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM22"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mi>n</mi></msup><mo>⁢</mo><mrow><mi id="XM23">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM24"><mi>ϕ</mi><mo>-</mo><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><mi>f</mi><mo>⁢</mo><mi>t</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.3)</span></td>
</tr>
<tr id="Ch3.E4" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="Ch3.E4.m1" class="ltx_Math" alttext="\displaystyle\Delta\delta=" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>δ</mi></mrow><mo>=</mo><mi></mi></mrow></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="Ch3.E4.m2" class="ltx_Math" alttext="\displaystyle P_{0}\frac{k}{1+\delta}\frac{(x+iy)^{n+1}}{(n+1)!}\cos(\phi-2\pi
ft)" display="inline"><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>k</mi><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msup><mrow><mo stretchy="false">(</mo><mrow id="XM29"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mrow><mi>n</mi><mo>+</mo><mn>1</mn></mrow></msup><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM30"><mi>n</mi><mo>+</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mi id="XM31">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM32"><mi>ϕ</mi><mo>-</mo><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><mi>f</mi><mo>⁢</mo><mi>t</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.4)</span></td>
</tr>
</table>
</div>
<section id="Ch3.S1.SS11.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS11.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type name kick frequency phase</span></p>
</div>
<div id="Ch3.S1.SS11.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">26: normal quadrupole, -26 skew quadrupole,</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">27: normal sextupole, -27 skew sextupole,</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">28: normal octupole, -28 skew octupole.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">kick</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">maximum normalized kick <math id="Ch3.S1.SS11.SSS0.Px1.p2.m1" class="ltx_Math" alttext="k" display="inline"><mi>k</mi></math>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">frequency</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">frequency <math id="Ch3.S1.SS11.SSS0.Px1.p2.m2" class="ltx_Math" alttext="f" display="inline"><mi>f</mi></math> in [MHz].</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S1.SS11.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS11.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">How to use the RF multipoles (from MAD-X to SixTrack):
<br class="ltx_break"></p>
</div>
<div id="Ch3.S1.SS11.SSS0.Px2.p2" class="ltx_para ltx_noindent">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">2<sup class="ltx_sup">nd</sup> order multipole (quadrupole):
<br class="ltx_break"></span>In the MAD-X script write:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
MULT.1, KNL=\{0,-0.06*1e-3\}, PNL=\{0, 0.25\};
</pre>
<p class="ltx_p">where <span class="ltx_text ltx_font_typewriter">-0.06*1e-3</span> is the <math id="Ch3.S1.SS11.SSS0.Px2.p2.m1" class="ltx_Math" alttext="b_{2}" display="inline"><msub><mi>b</mi><mn>2</mn></msub></math> value in units of <math id="Ch3.S1.SS11.SSS0.Px2.p2.m2" class="ltx_Math" alttext="\mathrm{Tm/m}^{n-1}" display="inline"><mrow><mi>Tm</mi><mo>/</mo><msup><mi mathvariant="normal">m</mi><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msup></mrow></math>.
<br class="ltx_break">This gives the following single element in <span class="ltx_text ltx_font_typewriter">fort.2</span>:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
mult.1q  26  6.00000000e-05  400.00000000e+00  -1.570796327e+00  0.00000000e+00  0.00000000e+00  0.00000000e+00
</pre>
</div>
<div id="Ch3.S1.SS11.SSS0.Px2.p3" class="ltx_para ltx_noindent">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">3<sup class="ltx_sup">rd</sup> order multipole (sextupole):
<br class="ltx_break"></span>In the MAD-X script write:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
MULT.1, FREQ=400., KNL=\{0,0,1159.*1e-3\}, PNL=\{0,0,0.25\};
</pre>
<p class="ltx_p">where <span class="ltx_text ltx_font_typewriter">1159.*1e-3</span> is the <math id="Ch3.S1.SS11.SSS0.Px2.p3.m1" class="ltx_Math" alttext="b_{3}" display="inline"><msub><mi>b</mi><mn>3</mn></msub></math> value in units of <math id="Ch3.S1.SS11.SSS0.Px2.p3.m2" class="ltx_Math" alttext="\mathrm{Tm/m}^{n-1}" display="inline"><mrow><mi>Tm</mi><mo>/</mo><msup><mi mathvariant="normal">m</mi><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msup></mrow></math>.
<br class="ltx_break">This gives the following single element in <span class="ltx_text ltx_font_typewriter">fort.2</span>:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
mult.1s  27 -5.79500000e-01  4.00000000e+02  -1.570796327e+00  0.00000000e+00  0.00000000e+00  0.00000000e+00
</pre>
</div>
<div id="Ch3.S1.SS11.SSS0.Px2.p4" class="ltx_para ltx_noindent">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">4<sup class="ltx_sup">th</sup> order multipole (octupole):
<br class="ltx_break"></span>In the MAD-X script write:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
MULT.1, FREQ=400., KNL=\{0,0,0,-4.*1e-3\}, PNL=\{0,0,0,0.25\};
</pre>
<p class="ltx_p">where <span class="ltx_text ltx_font_typewriter">-4.*1e-3</span> is the <math id="Ch3.S1.SS11.SSS0.Px2.p4.m1" class="ltx_Math" alttext="b_{4}" display="inline"><msub><mi>b</mi><mn>4</mn></msub></math> value in units of <math id="Ch3.S1.SS11.SSS0.Px2.p4.m2" class="ltx_Math" alttext="\mathrm{Tm/m}^{n-1}" display="inline"><mrow><mi>Tm</mi><mo>/</mo><msup><mi mathvariant="normal">m</mi><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msup></mrow></math>.
<br class="ltx_break">This gives the following single element in <span class="ltx_text ltx_font_typewriter">fort.2</span>:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
mult.1o  28  6.666666667e-04  4.00000000e+02  -1.570796327e+00  0.00000000e+00  0.00000000e+00  0.00000000e+00
</pre>
</div>
<div id="Ch3.S1.SS11.SSS0.Px2.p5" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p">The values of <math id="Ch3.S1.SS11.SSS0.Px2.p5.m1" class="ltx_Math" alttext="b_{2}" display="inline"><msub><mi>b</mi><mn>2</mn></msub></math>, <math id="Ch3.S1.SS11.SSS0.Px2.p5.m2" class="ltx_Math" alttext="b_{3}" display="inline"><msub><mi>b</mi><mn>3</mn></msub></math>, and <math id="Ch3.S1.SS11.SSS0.Px2.p5.m3" class="ltx_Math" alttext="b_{4}" display="inline"><msub><mi>b</mi><mn>4</mn></msub></math> used in the above examples were taken from Table II of paper <cite class="ltx_cite">[<a href="#bib.bib36" title="" class="ltx_ref">36</a>]</cite>.</p>
</div>
<div id="Ch3.S1.SS11.SSS0.Px2.p6" class="ltx_para">
<p class="ltx_p">The effect of these multipoles was checked on a beam of particles with <math id="Ch3.S1.SS11.SSS0.Px2.p6.m1" class="ltx_Math" alttext="x=x^{\prime}=y^{\prime}=0" display="inline"><mrow><mi>x</mi><mo>=</mo><msup><mi>x</mi><mo>′</mo></msup><mo>=</mo><msup><mi>y</mi><mo>′</mo></msup><mo>=</mo><mn>0</mn></mrow></math>, and <math id="Ch3.S1.SS11.SSS0.Px2.p6.m2" class="ltx_Math" alttext="y=1,2,\text{ and }3~{}\mathrm{mm}" display="inline"><mrow><mi>y</mi><mo>=</mo><mrow><mn id="XM33">1</mn><mo>,</mo><mn id="XM34">2</mn><mo>,</mo><mrow id="XM35"><mtext> and </mtext><mo>⁢</mo><mpadded width="+3.3pt"><mn>3</mn></mpadded><mo>⁢</mo><mi>mm</mi></mrow></mrow></mrow></math>, with different <math id="Ch3.S1.SS11.SSS0.Px2.p6.m3" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math> positions.
The effect on <math id="Ch3.S1.SS11.SSS0.Px2.p6.m4" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math> was linear, quadratic and cubic with <math id="Ch3.S1.SS11.SSS0.Px2.p6.m5" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math> when using <math id="Ch3.S1.SS11.SSS0.Px2.p6.m6" class="ltx_Math" alttext="b_{2}" display="inline"><msub><mi>b</mi><mn>2</mn></msub></math>, <math id="Ch3.S1.SS11.SSS0.Px2.p6.m7" class="ltx_Math" alttext="b_{3}" display="inline"><msub><mi>b</mi><mn>3</mn></msub></math>, or <math id="Ch3.S1.SS11.SSS0.Px2.p6.m8" class="ltx_Math" alttext="b_{4}" display="inline"><msub><mi>b</mi><mn>4</mn></msub></math>, respectively, as expected.
Furthermore, the amplitude of the <math id="Ch3.S1.SS11.SSS0.Px2.p6.m9" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math> agrees with the analytical formulas found in the appendix of this paper <cite class="ltx_cite">[<a href="#bib.bib36" title="" class="ltx_ref">36</a>]</cite> under “Normal quadrupole/sextupole/octupole”.</p>
</div>
<div id="Ch3.S1.SS11.SSS0.Px2.p7" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">Important note:</span> <math id="Ch3.S1.SS11.SSS0.Px2.p7.m1" class="ltx_Math" alttext="B\rho" display="inline"><mrow><mi>B</mi><mo>⁢</mo><mi>ρ</mi></mrow></math> and the factorial <math id="Ch3.S1.SS11.SSS0.Px2.p7.m2" class="ltx_Math" alttext="(n-1)!" display="inline"><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM36"><mi>n</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></math> are already included in K2, K3 etc of MAD-X, i.e. <math id="Ch3.S1.SS11.SSS0.Px2.p7.m3" class="ltx_Math" alttext="b_{3}=1159\cdot 10^{-3}" display="inline"><mrow><msub><mi>b</mi><mn>3</mn></msub><mo>=</mo><mrow><mn>1159</mn><mo>⋅</mo><msup><mn>10</mn><mrow><mo>-</mo><mn>3</mn></mrow></msup></mrow></mrow></math> in MAD-X results in a kick as if <math id="Ch3.S1.SS11.SSS0.Px2.p7.m4" class="ltx_Math" alttext="b_{3}" display="inline"><msub><mi>b</mi><mn>3</mn></msub></math> is <math id="Ch3.S1.SS11.SSS0.Px2.p7.m5" class="ltx_Math" alttext="1159\cdot 10^{-3}/(n-1)!" display="inline"><mrow><mrow><mn>1159</mn><mo>⋅</mo><msup><mn>10</mn><mrow><mo>-</mo><mn>3</mn></mrow></msup></mrow><mo>/</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM37"><mi>n</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mrow></math>.
So in order for this paper’s <cite class="ltx_cite">[<a href="#bib.bib36" title="" class="ltx_ref">36</a>]</cite> analytical equations to be compatible with MAD-X, the equations for normal quadrupole should read as</p>
<table id="Ch3.Ex3" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch3.Ex3.m1" class="ltx_Math" alttext="\Delta x^{\prime}=-\frac{b_{2}}{(2-1)!~{}B\rho}\ldots~{}." display="block"><mrow><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow><mo>=</mo><mrow><mo>-</mo><mrow><mfrac><msub><mi>b</mi><mn>2</mn></msub><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM38"><mn>2</mn><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow><mo>⁢</mo><mi>B</mi><mo>⁢</mo><mi>ρ</mi></mrow></mfrac><mo>⁢</mo><mpadded width="+3.3pt"><mi mathvariant="normal">…</mi></mpadded></mrow></mrow></mrow><mo>.</mo></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</section>
</section>
<section id="Ch3.S1.SS12" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.12 </span>Electron Lens</h4>
<section id="Ch3.S1.SS12.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS12.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type</span></p>
</div>
<div id="Ch3.S1.SS12.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">29</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S1.SS12.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS12.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">The “e-lens” elements become active when the <span class="ltx_text ltx_font_typewriter">ELEN</span> input block <a href="#Ch4.S9" title="4.9 Electron lens ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.9</span></a> is used.
All parameters except name and type have to be set to zero in the list of single elements, otherwise SixTrack aborts.
The parameters for the e-lens are defined in the <span class="ltx_text ltx_font_typewriter">ELEN</span> input block.</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS13" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.13 </span>Scattering point</h4>
<section id="Ch3.S1.SS13.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS13.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name type</span></p>
</div>
<div id="Ch3.S1.SS13.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">type</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">40</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S1.SS13.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS13.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">The “scattering” elements become active when the <span class="ltx_text ltx_font_typewriter">SCAT</span>ter input block <a href="#Ch4.S10" title="4.10 Scattering ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.10</span></a> is used.
All parameters except name and type have to be set to zero in the list of single elements, otherwise SixTrack aborts.
The parameters of the scattering are defined in the <span class="ltx_text ltx_font_typewriter">SCAT</span>ter input block.</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS14" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.14 </span>Beam Position Monitor</h4>
<section id="Ch3.S1.SS14.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S1.SS14.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">BPMname 0 0 0 0</span></p>
</div>
<div id="Ch3.S1.SS14.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">BPMname</span>
                  </td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Must start with “BP” and maybe followed by 46 characters.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S1.SS14.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S1.SS14.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">This element dumps the coordinates of the 1st particle to the file with name “BPMname”.
The file contains 7 columns: <math id="Ch3.S1.SS14.SSS0.Px2.p1.m1" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch3.S1.SS14.SSS0.Px2.p1.m2" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>, <math id="Ch3.S1.SS14.SSS0.Px2.p1.m3" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch3.S1.SS14.SSS0.Px2.p1.m4" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>, <math id="Ch3.S1.SS14.SSS0.Px2.p1.m5" class="ltx_Math" alttext="ct" display="inline"><mrow><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></math>,<math id="Ch3.S1.SS14.SSS0.Px2.p1.m6" class="ltx_Math" alttext="\delta p/p" display="inline"><mrow><mrow><mi>δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math> and <math id="Ch3.S1.SS14.SSS0.Px2.p1.m7" class="ltx_Math" alttext="E" display="inline"><mi>E</mi></math>.
Usual SixTrack units are used.
Any number of <span class="ltx_text ltx_font_typewriter">BPM</span> elements can be used but the names must differ.</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS15" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.15 </span>Other Element Types</h4>
<div id="Ch3.S1.SS15.p1" class="ltx_para">
<p class="ltx_p">Some other elements, such as dipole edge (24), solenoid (25), multipole RF kicks (<math id="Ch3.S1.SS15.p1.m1" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>26, <math id="Ch3.S1.SS15.p1.m2" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>27, <math id="Ch3.S1.SS15.p1.m3" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>28) are accepted by SixTrack, but they are not currently supported by the development team or tested for correctness.
It is therefore advised to not use these elements.</p>
</div>
</section>
</section>
<section id="Ch3.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3.2 </span>Block Definitions</h3>
<div id="Ch3.S2.p1" class="ltx_para">
<p class="ltx_p">In four–dimensional transverse tracking, the linear elements between non-linear elements can be combined to a single linear block to save computing time.</p>
</div>
<div id="Ch3.S2.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">BLOC</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <math id="Ch3.S2.p2.m1" class="ltx_Math" alttext="&gt;1" display="inline"><mrow><mi></mi><mo>&gt;</mo><mn>1</mn></mrow></math>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">First line: <span class="ltx_text ltx_font_typewriter">mper msym(1) … msym(mper)</span> (integers)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">From second line: <span class="ltx_text ltx_font_typewriter">block-name </span>{<span class="ltx_text ltx_font_typewriter">element-name</span>}</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch3.S2.SS15.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch3.S2.SS15.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">mper</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Number of super periods. The following set of blocks is considered a <span class="ltx_text ltx_font_typewriter">super-period</span>. The accelerator consists of <span class="ltx_text ltx_font_typewriter">mper</span> super–periods.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">msym(i)</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">
<math id="Ch3.S2.SS15.SSS0.Px1.p1.m1" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math> 1 for each super–period. If <math id="Ch3.S2.SS15.SSS0.Px1.p1.m2" class="ltx_Math" alttext="\mathrm{msym}(i)=1" display="inline"><mrow><mrow><mi>msym</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM39">i</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mn>1</mn></mrow></math>, the <math id="Ch3.S2.SS15.SSS0.Px1.p1.m3" class="ltx_Math" alttext="i" display="inline"><mi>i</mi></math>’th super–period will be built up in the order in which linear elements appear in the blocks below. If <math id="Ch3.S2.SS15.SSS0.Px1.p1.m4" class="ltx_Math" alttext="\mathrm{msym}(i)=-1" display="inline"><mrow><mrow><mi>msym</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM40">i</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mo>-</mo><mn>1</mn></mrow></mrow></math>, the super–period will be built up in reverse order.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">block-name</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">The name of the block with up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">element-name</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">The element names have to appear as a linear element in the list of “single elements” (<a href="#Ch3.S1.SS1" title="3.1.1 Linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.1</span></a>). If one line is too short to contain all the elements of a block, a line with additional elements to the same block can be added. At least 5 (five) blanks must appear at the beginning of the extra line so that names of blocks and names of linear elements in a block can be distinguished.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S2.SS15.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S2.SS15.SSS0.Px2.p1" class="ltx_para">
<ol id="Ch3.I4" class="ltx_enumerate">
<li id="Ch3.I4.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I4.i1.p1" class="ltx_para">
<p class="ltx_p">When synchrotron oscillation is introduced, the linear elements can no longer be lumped into one block, because in that case even a drift length magnet is a non-linear element with respect to the longitudinal plane. However, the block structure is still kept to make use of the speed–up in case one can restrict the studies to the four–dimensional case.</p>
</div>
</li>
<li id="Ch3.I4.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I4.i2.p1" class="ltx_para">
<p class="ltx_p">The maximum number of blocks and the maximum number of entries in each block are defined as parameters (Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>).</p>
</div>
</li>
<li id="Ch3.I4.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I4.i3.p1" class="ltx_para">
<p class="ltx_p">The inversion of a super–period (<math id="Ch3.I4.i3.p1.m1" class="ltx_Math" alttext="\mathrm{msym(i)}=-1" display="inline"><mrow><mrow><mi>msym</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi mathvariant="normal" id="XM41">i</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mo>-</mo><mn>1</mn></mrow></mrow></math>) is presently no longer allowed.</p>
</div>
</li>
</ol>
</div>
</section>
<section id="Ch3.S2.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.2.1 </span>Structure Input</h4>
<div id="Ch3.S2.SS1.p1" class="ltx_para">
<p class="ltx_p">The model of the accelerator is put together by constructing a sequence of blocks of linear elements, non-linear elements, observation points, and possibly a cavity with the keyword <span class="ltx_text ltx_font_typewriter">CAV</span> used if this name does not appear in the list of single elements (<a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>) with type <math id="Ch3.S2.SS1.p1.m1" class="ltx_Math" alttext="\pm 12" display="inline"><mrow><mo>±</mo><mn>12</mn></mrow></math>.
In that case, its parameters are given in the <span class="ltx_text ltx_font_italic">Synchrotron Oscillations</span> input block (<a href="#Ch7.S3" title="7.3 Synchrotron Oscillation ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.3</span></a>).</p>
</div>
<section id="Ch3.S2.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S2.SS1.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p">{<span class="ltx_text ltx_font_typewriter"> structure-element <math id="Ch3.S2.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="|" display="inline"><mo mathvariant="normal" stretchy="false">|</mo></math> CAV <math id="Ch3.S2.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="|" display="inline"><mo mathvariant="normal" stretchy="false">|</mo></math> GO </span>}</p>
</div>
<div id="Ch3.S2.SS1.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">structure-element</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Structure elements must appear as non-linear and observation elements in the single element list or in the list of blocks of the <span class="ltx_text ltx_font_italic">Block Definition</span> input block (<a href="#Ch3.S2" title="3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>).</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">CAV</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">A cavity can be introduced by a keyword <span class="ltx_text ltx_font_typewriter">CAV</span>. This element does not appear in the single element list (<a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>).</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">GO</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Starting point: the keyword <span class="ltx_text ltx_font_typewriter">GO</span> denotes where the tracking is started and where the tracked coordinates are recorded at each turn.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S2.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S2.SS1.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">Repetition of parts of the structure is indicated by parentheses with a multiplying factor N in front of them.
If the left parenthesis “(” occurs in a line of input, the factor <span class="ltx_text ltx_font_typewriter">N</span> is expected to be found in the preceding characters.
If the characters are blank, <span class="ltx_text ltx_font_typewriter">N</span> is set to 1.
The right parenthesis “)” signals the end of the sequence to be repeated.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS2" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.2.2 </span>Displacement of Elements</h4>
<div id="Ch3.S2.SS2.p1" class="ltx_para">
<p class="ltx_p">This block allows to displace nonlinear elements in horizontal and vertical positions.
With the r.m.s. values of the horizontal and vertical displacements it is possible to achieve a displacement that is different from element to element.</p>
</div>
<div id="Ch3.S2.SS2.p2" class="ltx_para">
<p class="ltx_p">To simulate a measured closed orbit at the position of non-linear elements, it is convenient to use the <span class="ltx_text ltx_font_italic">Displacement of Elements</span> input block instead of trying to produce a closed orbit by dipole kicks.</p>
</div>
<div id="Ch3.S2.SS2.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_bold">Keyword</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                  <span class="ltx_text ltx_font_typewriter">DISP</span>
                </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_bold">Data lines</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch3.S2.SS2.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S2.SS2.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name xd xdrms yd ydrms</span></p>
</div>
<div id="Ch3.S2.SS2.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Name of the element which is displaced.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">xd</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Horizontal displacement [mm].</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">xdrms</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">r.m.s. of horizontal displacement [mm].</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">yd</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Vertical displacement [mm].</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">ydrms</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">r.m.s. of vertical displacement [mm].</td>
</tr>
</tbody>
</table>
</div>
<div id="Ch3.S2.SS2.SSS0.Px1.p3" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p">In the case of an AC dipole these variables are not meant for displacing this element but are used for the following AC dipole parameters:</p>
</div>
</section>
<section id="Ch3.S2.SS2.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format</h5>
<div id="Ch3.S2.SS2.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">name nfree nramp1 nplato nramp2</span></p>
</div>
<div id="Ch3.S2.SS2.SSS0.Px2.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">name</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">nfree</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Number of turns free of excitation at the beginning of the run.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">nramp1</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Number of turns to ramp up the excitation amplitude from 0 to <span class="ltx_text ltx_font_typewriter">ACdipAmp</span>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">nplato</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Number of turns of constant excitation amplitude.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_typewriter">nramp2</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Number of turns to ramp down the excitation amplitude.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch3.S2.SS2.SSS0.Px3" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch3.S2.SS2.SSS0.Px3.p1" class="ltx_para">
<p class="ltx_p">In RACETRACK the displacements had been included in the <span class="ltx_text ltx_font_italic">Single Element</span> input block (<a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>).
In SixTrack they must be given in the separate <span class="ltx_text ltx_font_italic">Displacement of Elements</span> input block because of the limited length of one line of input.</p>
</div>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
</section>
</section>
</section>
<section id="Ch4" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 4 </span>Special Elements</h2>
<div id="Ch4.p1" class="ltx_para">
<p class="ltx_p">One advantage of SixTrack, that has been adopted from RACETRACK, is that it easily allows to define elements for a specific purpose.
The special elements implemented util now are found in this section.
All Special Elements should be written in the <span class="ltx_text ltx_font_typewriter">fort.3</span> file.</p>
</div>
<section id="Ch4.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4.1 </span>Multipole Coefficients</h3>
<div id="Ch4.S1.p1" class="ltx_para">
<p class="ltx_p">Sets of normal and skew multipoles of up to tenth order, each with an r.m.s. value, can be combined with this block.
The multipole kick is calculated using a Horner scheme, which saves considerably in computation time.
Moreover, using the multipole block reduces the number of elements in the single element list (<a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>).</p>
</div>
<div id="Ch4.S1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">MULT</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">2 to 12</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">First line: <span class="ltx_text ltx_font_typewriter">name <math id="Ch4.S1.p2.m1" class="ltx_Math" alttext="R_{0}" display="inline"><msub><mi>R</mi><mn mathvariant="normal">0</mn></msub></math> <math id="Ch4.S1.p2.m2" class="ltx_Math" alttext="\delta_{0}" display="inline"><msub><mi>δ</mi><mn mathvariant="normal">0</mn></msub></math></span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Lines 2 to 12: <math id="Ch4.S1.p2.m3" class="ltx_Math" alttext="B_{n}" display="inline"><msub><mi>B</mi><mi>n</mi></msub></math><span class="ltx_text ltx_font_typewriter"> rms-<math id="Ch4.S1.p2.m4" class="ltx_Math" alttext="B_{n}" display="inline"><msub><mi>B</mi><mi>n</mi></msub></math> <math id="Ch4.S1.p2.m5" class="ltx_Math" alttext="A_{n}" display="inline"><msub><mi>A</mi><mi>n</mi></msub></math> rms-<math id="Ch4.S1.p2.m6" class="ltx_Math" alttext="A_{n}" display="inline"><msub><mi>A</mi><mi>n</mi></msub></math></span>.</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch4.S1.SS2.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch4.S1.SS2.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name</span>
                </th>
<th class="ltx_td ltx_align_justify" style="width:346.9pt;">Name of the multipole block which must appear in the list of single elements (<a href="#Ch3.S1.SS3" title="3.1.3 Multipole Blocks ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.3</span></a>).</th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <math id="Ch4.S1.SS2.SSS0.Px1.p1.m1" class="ltx_Math" alttext="R_{0}" display="inline"><msub><mi>R</mi><mn>0</mn></msub></math>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Reference radius (in mm) at which the magnet errors are calculated. This makes it convenient to use values from field measurements.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <math id="Ch4.S1.SS2.SSS0.Px1.p1.m2" class="ltx_Math" alttext="\delta_{0}" display="inline"><msub><mi>δ</mi><mn>0</mn></msub></math>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Bending strength of the dipole (in mrad). Field errors of line 2–11 are taken to be relative to the bending strength.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch4.S1.SS2.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch4.S1.SS2.SSS0.Px2.p1" class="ltx_para">
<ol id="Ch4.I1" class="ltx_enumerate">
<li id="Ch4.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch4.I1.i1.p1" class="ltx_para">
<p class="ltx_p">The <math id="Ch4.I1.i1.p1.m1" class="ltx_Math" alttext="B_{n}" display="inline"><msub><mi>B</mi><mi>n</mi></msub></math> and <math id="Ch4.I1.i1.p1.m2" class="ltx_Math" alttext="A_{n}" display="inline"><msub><mi>A</mi><mi>n</mi></msub></math> are related to the <math id="Ch4.I1.i1.p1.m3" class="ltx_Math" alttext="b_{n},a_{n}" display="inline"><mrow><msub id="XM42"><mi>b</mi><mi>n</mi></msub><mo>,</mo><msub id="XM43"><mi>a</mi><mi>n</mi></msub></mrow></math> of the single nonlinear element (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>) in the following way:</p>
<table id="A4.S2.EGx3" class="ltx_equationgroup ltx_eqn_align">
<tr id="Ch4.Ex1" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                          <math id="Ch4.Ex1.m1" class="ltx_Math" alttext="\displaystyle b_{n}" display="inline"><msub><mi>b</mi><mi>n</mi></msub></math>
                        </td>
<td class="ltx_td ltx_align_left">
                          <math id="Ch4.Ex1.m2" class="ltx_Math" alttext="\displaystyle=\delta_{0}B_{n}R_{0}^{1-n}10^{3n-6}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>δ</mi><mn>0</mn></msub><mo>⁢</mo><msub><mi>B</mi><mi>n</mi></msub><mo>⁢</mo><msubsup><mi>R</mi><mn>0</mn><mrow><mn>1</mn><mo>-</mo><mi>n</mi></mrow></msubsup><mo>⁢</mo><msup><mn>10</mn><mrow><mrow><mn>3</mn><mo>⁢</mo><mi>n</mi></mrow><mo>-</mo><mn>6</mn></mrow></msup></mrow></mrow></math>
                        </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="Ch4.Ex2" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                          <math id="Ch4.Ex2.m1" class="ltx_Math" alttext="\displaystyle a_{n}" display="inline"><msub><mi>a</mi><mi>n</mi></msub></math>
                        </td>
<td class="ltx_td ltx_align_left">
                          <math id="Ch4.Ex2.m2" class="ltx_Math" alttext="\displaystyle=\delta_{0}A_{n}R_{0}^{1-n}10^{3n-6}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>δ</mi><mn>0</mn></msub><mo>⁢</mo><msub><mi>A</mi><mi>n</mi></msub><mo>⁢</mo><msubsup><mi>R</mi><mn>0</mn><mrow><mn>1</mn><mo>-</mo><mi>n</mi></mrow></msubsup><mo>⁢</mo><msup><mn>10</mn><mrow><mrow><mn>3</mn><mo>⁢</mo><mi>n</mi></mrow><mo>-</mo><mn>6</mn></mrow></msup></mrow></mrow></math>
                        </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
<li id="Ch4.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch4.I1.i2.p1" class="ltx_para">
<p class="ltx_p">The sign convention and the factorial (<math id="Ch4.I1.i2.p1.m1" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math>!) are treated as for the single non-linear elements in (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>).</p>
</div>
</li>
<li id="Ch4.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch4.I1.i3.p1" class="ltx_para">
<p class="ltx_p">Multipoles of different names can be set to be equal using the <span class="ltx_text ltx_font_typewriter">ORG</span> input block.</p>
</div>
</li>
<li id="Ch4.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch4.I1.i4.p1" class="ltx_para">
<p class="ltx_p">22–poles are included (<math id="Ch4.I1.i4.p1.m1" class="ltx_Math" alttext="n=11" display="inline"><mrow><mi>n</mi><mo>=</mo><mn>11</mn></mrow></math>). By enlarging the parameter <span class="ltx_text ltx_font_typewriter">MMUL</span> (Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>) up to 40–poles (<span class="ltx_text ltx_font_typewriter">MMUL=20</span>) can be treated. To make the change of <span class="ltx_text ltx_font_typewriter">MMUL</span> effective, it is of course necessary to recompile the program.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch4.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4.2 </span>Aperture Limitations</h3>
<div id="Ch4.S2.p1" class="ltx_para">
<p class="ltx_p">This input data block is used to introduce additional collimators or aperture limitations in the machine.
Each non-linear element can be used for this purpose.
Rectangular or elliptical shapes of the aperture limitations are allowed.
On top of that, there is a general (rectangular) aperture check at each non-zero length element.
The general aperture values are chosen to be large enough (<a href="#A2.T1" title="Table B.1 ‣ B.1 Default Tracking Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.1</span></a>) to define the short term dynamic aperture.</p>
</div>
<div id="Ch4.S2.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">LIMI</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">name type xaper yaper</span>
              </td>
</tr>
</tbody>
</table>
</div>
<section id="Ch4.S2.SS2.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch4.S2.SS2.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The name of any non-linear (zero length) element in the <span class="ltx_text ltx_font_italic">Single Element</span> input block (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>) except multipole blocks (<a href="#Ch3.S1.SS3" title="3.1.3 Multipole Blocks ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.3</span></a>).</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">type</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Two types of aperture limitations are allowed:</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">RE</span> for a rectangular aperture shape, i.e.
<table id="Ch4.Ex3" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch4.Ex3.m1" class="ltx_Math" alttext="x_{i}&lt;\mathrm{xaper},\;y_{i}&lt;\mathrm{yaper}" display="block"><mrow><mrow id="XM46"><msub><mi>x</mi><mi>i</mi></msub><mo>&lt;</mo><mi id="XM44">xaper</mi></mrow><mo rspace="5.3pt">,</mo><mrow id="XM47"><msub><mi>y</mi><mi>i</mi></msub><mo>&lt;</mo><mi>yaper</mi></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">EL</span> for an elliptical aperture shape, i.e.
<table id="Ch4.Ex4" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch4.Ex4.m1" class="ltx_Math" alttext="\frac{x_{i}^{2}}{\mathrm{xaper}^{2}}+\frac{y_{i}^{2}}{\mathrm{yaper}^{2}}&lt;1" display="block"><mrow><mrow><mfrac><msubsup><mi>x</mi><mi>i</mi><mn>2</mn></msubsup><msup><mi>xaper</mi><mn>2</mn></msup></mfrac><mo>+</mo><mfrac><msubsup><mi>y</mi><mi>i</mi><mn>2</mn></msubsup><msup><mi>yaper</mi><mn>2</mn></msup></mfrac></mrow><mo>&lt;</mo><mn>1</mn></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">xaper</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Aperture in the horizontal plane in mm.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">yaper</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Aperture in the vertical plane in mm.</td>
</tr>
</tbody>
</table>
</div>
</section>
</section>
<section id="Ch4.S3" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4.3 </span>Power Supply Ripple</h3>
<div id="Ch4.S3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold" style="color:#B30000;">Note:<span class="ltx_text ltx_font_medium">
The <span class="ltx_text ltx_font_typewriter">RIPP</span> block is been deprecated since release 4.5.20, and the functionality is now provided by the <span class="ltx_text ltx_font_typewriter">DYNK</span> block (<a href="#Ch4.S4" title="4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.4</span></a>).
A <span class="ltx_text ltx_font_typewriter">fort.3</span> file containing a <span class="ltx_text ltx_font_typewriter">RIPP</span> block is therefore no longer valid, and will result in an error message.
The description below is therefore only provided as a reference for those who need to convert old input files.</span></span></p>
</div>
<div id="Ch4.S3.p2" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p">If power supply ripple is to be considered this input data block can be used. A non-linear quadrupole is expected as a ripple element (<span class="ltx_text ltx_font_typewriter">type=2</span> and zero length in the single element list (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>)), but in principle other non-linear elements are also allowed.
Ripple depth, ripple frequency and starting phase of the ripple frequency are the input parameters.</p>
</div>
<div id="Ch4.S3.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">RIPP</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">name depth frequency start-phase nrturn</span>
              </td>
</tr>
</tbody>
</table>
</div>
<section id="Ch4.S3.SS2.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch4.S3.SS2.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Name of the non-linear element in the <span class="ltx_text ltx_font_italic">single element</span> block (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>).</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">depth</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Maximum kick strength of the ripple element. A quadrupole kick is usually expected.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">frequency</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Given in number of turns (a real value is allowed) of one ripple period.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">start-phase</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Initial phase of the ripple element.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nrturn</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Initial number of turns, for prolongation runs the number of turn already done.</td>
</tr>
</tbody>
</table>
</div>
</section>
</section>
<section id="Ch4.S4" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4.4 </span>Dynamic Kicks</h3>
<div id="Ch4.S4.p1" class="ltx_para">
<p class="ltx_p">The DYNamic Kicks module <cite class="ltx_cite">[<a href="#bib.bib37" title="" class="ltx_ref">37</a>]</cite> allows time-dependent modification of the settings of single elements.
The supported elements and attributes are listed in Table <a href="#Ch4.T2" title="Table 4.2 ‣ Format: ‣ 4.4.2 SET Statement ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>.
The settings can be computed on-the fly using several functions, loaded from input files or a combination, as described in Table <span class="ltx_ref ltx_ref_self">LABEL:tab:DYNK_FUN</span>.</p>
</div>
<div id="Ch4.S4.p2" class="ltx_para">
<p class="ltx_p">Further, unless explicitly switched off using a <span class="ltx_text ltx_font_typewriter">NOFILE</span> statement, <span class="ltx_text ltx_font_typewriter">DYNK</span> produces an output file <span class="ltx_text ltx_font_typewriter">dynksets.dat</span>.
This file contains the setting of all elements and attributes for which <span class="ltx_text ltx_font_typewriter">DYNK</span> is active.
It is written in all turns of the simulation, even if <span class="ltx_text ltx_font_typewriter">DYNK</span> is not active in that exact turn.</p>
</div>
<div id="Ch4.S4.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">DYNK</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">There are four types of statements possible in a <span class="ltx_text ltx_font_typewriter">DYNK</span> block, listed in the following subsections.</td>
</tr>
</tbody>
</table>
</div>
<div id="Ch4.S4.p4" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p">Lines starting with “/” are treated as comments, and are ignored.</p>
</div>
<section id="Ch4.S4.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.4.1 </span>FUN Statements</h4>
<section id="Ch4.S4.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format:</h5>
<div id="Ch4.S4.SS1.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">FUN function-name function-type arg1 arg2 arg3 …</span></p>
</div>
<div id="Ch4.S4.SS1.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">This statement defines a function, i.e. something which when evaluated, produces a numerical value, which can be used to set the value of an element attribute.
The functions in <span class="ltx_text ltx_font_typewriter">DYNK</span> all have a unique name, and they may take up to 7 arguments (a limitation imposed by the internal parameter <span class="ltx_text ltx_font_typewriter">getfields_n_max_fields</span>).
The function type must be one of those listed in Table <span class="ltx_ref ltx_ref_self">LABEL:tab:DYNK_FUN</span>.</p>
</div>
<div id="Ch4.S4.SS1.SSS0.Px1.p3" class="ltx_para">
<p class="ltx_p">A function may be defined so that it uses the result of another function, which must be defined above it in the <span class="ltx_text ltx_font_typewriter">DYNK</span> block.
This requirement avoids any possibility for infinite recursion.
The functions are only evaluated when needed, i.e. when used by a <span class="ltx_text ltx_font_typewriter">SET</span> statement in that turn (<a href="#Ch4.S4.SS2" title="4.4.2 SET Statement ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.4.2</span></a>).
The functions may thus be evaluated multiple times in one turn (if used by multiple <span class="ltx_text ltx_font_typewriter">SET</span> statements which are active in that turn, or referenced by multiple other <span class="ltx_text ltx_font_typewriter">FUN</span> statements which are themselves used more than once in that turn), or it may not be evaluated at all.
The functions are always evaluated as a function of the current turn number <math id="Ch4.S4.SS1.SSS0.Px1.p3.m1" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math>, which may be shifted by a turn-shift specified in a <span class="ltx_text ltx_font_typewriter">SET</span> statement (<a href="#Ch4.S4.SS2" title="4.4.2 SET Statement ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.4.2</span></a>).</p>
</div>
<div id="Ch4.S4.SS1.SSS0.Px1.p4" class="ltx_para">
<p class="ltx_p">Function names have a maximum length of 20 characters.</p>
</div>
<figure id="Ch4.T1" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption" style="font-size:90%;"><span class="ltx_tag ltx_tag_table">Table 4.1: </span>Available function types in DYNK.</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text" style="font-size:90%;background-color:#B3B3FF;">
Type name</span>
                </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text" style="font-size:90%;background-color:#B3B3FF;">Arguments</span>
                </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;background-color:#B3B3FF;">Description</span>
                </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:116.7pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:270.3pt;"></th>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;" colspan="3">
                  <span class="ltx_text" style="font-size:90%;">“System” functions</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">GET</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">element-name[string] attribute-name[string]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Extracts the original value of a setting, i.e. as specified in the SINGLE ELEMENT section (Sec. </span>
                  <a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>
                  <span class="ltx_text" style="font-size:90%;">). Attributes as used for </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">SET</span>
                  <span class="ltx_text" style="font-size:90%;">, see Table </span>
                  <a href="#Ch4.T2" title="Table 4.2 ‣ Format: ‣ 4.4.2 SET Statement ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>
                  <span class="ltx_text" style="font-size:90%;">.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">FILE</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">filename[string]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Loads the settings from file; the file is expected to be an ascii file with two columns where the first column is the turn number (should start at 1 and include all turns up to as long as is wanted), and the second column is the value for that turn number.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">FILELIN</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">filename[string]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Similar to </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">FILE</span>
                  <span class="ltx_text" style="font-size:90%;">, but any double can be used as the turn number as long as they are monotonically rising.
When evaluated, the function interpolates from the line-segments specified in the file.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">PIPE</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">inPipeName[string] outPipeName[string] ID[string] fileUnit[int]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Uses a pair of UNIX FIFOs, through which it can communicate with an external program.
When evaluated, it sends a message through the outpipe, and then waits for a message on the inpipe which should contain the value the FUN should returned.
The ID is used in case several DYNK PIPE FUNs are using the same outPipe and inPipe, so that the controlling external program can choose what to calculate.
Note that it will use both </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">fileUnit</span>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">fileUnit+1</span>
                  <span class="ltx_text" style="font-size:90%;">, and if several PIPE FUNs are using the same file, they must also use the same </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">fileUnit</span>
                  <span class="ltx_text" style="font-size:90%;">.
</span>
                  <span class="ltx_text" style="font-size:90%;">For more details, see the example below.
Also note that </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">PIPE</span>
                  <span class="ltx_text" style="font-size:90%;"> is not available in the checkpoint/restart version of SixTrack.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">RANDG</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">seed1[int] seed2[int] mu[real] sigma[real] mcut[int]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Returns a pseudorandom number generated from a Gaussian distribution.
The mean value and width is controlled by </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">mu</span>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">sigma</span>
                  <span class="ltx_text" style="font-size:90%;">, while </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">mcut</span>
                  <span class="ltx_text" style="font-size:90%;"> is the maximum number of sigmas to generate numbers up to; set to 0 to disable this cut.
The integers </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">seed1</span>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">seed2</span>
                  <span class="ltx_text" style="font-size:90%;"> are the seed used to initialize the </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">RANECU</span>
                  <span class="ltx_text" style="font-size:90%;"> generator.
Note that every </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">RANDG</span>
                  <span class="ltx_text" style="font-size:90%;"> function defined in </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">DYNK</span>
                  <span class="ltx_text" style="font-size:90%;"> uses its own separate random number stream.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">RANDU</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">seed1[int] seed2[int]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Returns a pseudorandom number generated from a uniform distribution.
The integers </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">seed1</span>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">seed2</span>
                  <span class="ltx_text" style="font-size:90%;"> are the seed used to initialize the </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">RANECU</span>
                  <span class="ltx_text" style="font-size:90%;"> generator.
Note that every </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">RANDU</span>
                  <span class="ltx_text" style="font-size:90%;"> function defined in </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">DYNK</span>
                  <span class="ltx_text" style="font-size:90%;"> uses its own separate random number stream.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">RANDON</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">seed1[int] seed2[int] P[float]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Returns the value of 1.0 or 0.0 resulting of the weighting with the probability </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">P</span>
                  <span class="ltx_text" style="font-size:90%;"> of a pseudorandom number generated from a uniform distribution .
The integers </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">seed1</span>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">seed2</span>
                  <span class="ltx_text" style="font-size:90%;"> are the seed used to initialize the </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">RANECU</span>
                  <span class="ltx_text" style="font-size:90%;"> generator.
Note that every </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">RANDON</span>
                  <span class="ltx_text" style="font-size:90%;"> function defined in </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">DYNK</span>
                  <span class="ltx_text" style="font-size:90%;"> uses its own separate random number stream.</span>
                </td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;" colspan="3">
                  <span class="ltx_text" style="font-size:90%;">Filters</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">FIR</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">N[int] filename[string] baseFun[string]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Applies a Finite Impulse Response (FIR) filter of order vN to the function </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">baseFun</span>
                  <span class="ltx_text" style="font-size:90%;">.
The output is given as </span>
                  <math id="Ch4.T1.m1" class="ltx_Math" alttext="y[t]=\sum_{i=0}^{N}b_{i}*x[t-i]" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mi id="XM48">t</mi><mo stretchy="false">]</mo></mrow></mrow><mo>=</mo><mrow><msubsup><mo largeop="true" symmetric="true">∑</mo><mrow><mi>i</mi><mo>=</mo><mn>0</mn></mrow><mi>N</mi></msubsup><mrow><mrow><msub><mi>b</mi><mi>i</mi></msub><mo>*</mo><mi>x</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM49"><mi>t</mi><mo>-</mo><mi>i</mi></mrow><mo stretchy="false">]</mo></mrow></mrow></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">, where </span>
                  <math id="Ch4.T1.m2" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math>
                  <span class="ltx_text" style="font-size:90%;"> is the current turn and </span>
                  <math id="Ch4.T1.m3" class="ltx_Math" alttext="x[t-0]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM50"><mi>t</mi><mo>-</mo><mn>0</mn></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> is the result of the most recent call to </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">baseFun</span>
                  <span class="ltx_text" style="font-size:90%;">.
The coefficients </span>
                  <math id="Ch4.T1.m4" class="ltx_Math" alttext="b_{0}\ldots b_{N}" display="inline"><mrow><msub><mi>b</mi><mn>0</mn></msub><mo>⁢</mo><mi mathvariant="normal">…</mi><mo>⁢</mo><msub><mi>b</mi><mi>N</mi></msub></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> and initial values of </span>
                  <math id="Ch4.T1.m5" class="ltx_Math" alttext="x[t-0]\ldots x[t-N]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM51"><mi>t</mi><mo>-</mo><mn>0</mn></mrow><mo stretchy="false">]</mo></mrow><mo>⁢</mo><mi mathvariant="normal">…</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM52"><mi>t</mi><mo>-</mo><mi>N</mi></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> are loaded from the given file </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">filename</span>
                  <span class="ltx_text" style="font-size:90%;">, which is a space-separated ascii file with three columns.
These columns are (1) row index </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">[int]</span>
                  <span class="ltx_text" style="font-size:90%;">, (2) coefficients </span>
                  <math id="Ch4.T1.m6" class="ltx_Math" alttext="b_{i}" display="inline"><msub><mi>b</mi><mi>i</mi></msub></math>
                  <span class="ltx_text" style="font-size:90%;"> </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">[float]</span>
                  <span class="ltx_text" style="font-size:90%;"> and (3) initial values of the </span>
                  <math id="Ch4.T1.m7" class="ltx_Math" alttext="x[]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> array </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">[float]</span>
                  <span class="ltx_text" style="font-size:90%;">.
The row indices are expected to go from </span>
                  <math id="Ch4.T1.m8" class="ltx_Math" alttext="0" display="inline"><mn>0</mn></math>
                  <span class="ltx_text" style="font-size:90%;"> to at least </span>
                  <math id="Ch4.T1.m9" class="ltx_Math" alttext="N" display="inline"><mi>N</mi></math>
                  <span class="ltx_text" style="font-size:90%;"> in steps of </span>
                  <math id="Ch4.T1.m10" class="ltx_Math" alttext="1" display="inline"><mn>1</mn></math>
                  <span class="ltx_text" style="font-size:90%;">.
Note that the filter is stepped once per call, i.e. the array </span>
                  <math id="Ch4.T1.m11" class="ltx_Math" alttext="x[]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> is shifted once every time the FUN is called.
Also note that when called, the filter is first stepped, then the new value is filled into the first position in </span>
                  <math id="Ch4.T1.m12" class="ltx_Math" alttext="x[]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">, and finally the sum is evaluated.
This means that the last value in the </span>
                  <math id="Ch4.T1.m13" class="ltx_Math" alttext="x[]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> array is never used, while the first value (</span>
                  <math id="Ch4.T1.m14" class="ltx_Math" alttext="x[t-0]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM53"><mi>t</mi><mo>-</mo><mn>0</mn></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">) is immediately pushed into </span>
                  <math id="Ch4.T1.m15" class="ltx_Math" alttext="x[t-1]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM54"><mi>t</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> before the first evaluation.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">IIR</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">N[int] filename[string] baseFun[string]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Applies an Infinite Impulse Response (IIR) filter of order </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">N</span>
                  <span class="ltx_text" style="font-size:90%;"> to the function </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">baseFun</span>
                  <span class="ltx_text" style="font-size:90%;">.
This is very similar to </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">FIR</span>
                  <span class="ltx_text" style="font-size:90%;">, except that it also uses its own previous outputs.
The sum is thus written as </span>
                  <math id="Ch4.T1.m16" class="ltx_Math" alttext="y[t]=\sum_{i=0}^{N}b_{i}*x[t-i]+\sum_{i=1}^{N}a_{i}*y[t-i]" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mi id="XM55">t</mi><mo stretchy="false">]</mo></mrow></mrow><mo>=</mo><mrow><mrow><msubsup><mo largeop="true" symmetric="true">∑</mo><mrow><mi>i</mi><mo>=</mo><mn>0</mn></mrow><mi>N</mi></msubsup><mrow><mrow><msub><mi>b</mi><mi>i</mi></msub><mo>*</mo><mi>x</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM56"><mi>t</mi><mo>-</mo><mi>i</mi></mrow><mo stretchy="false">]</mo></mrow></mrow></mrow><mo>+</mo><mrow><msubsup><mo largeop="true" symmetric="true">∑</mo><mrow><mi>i</mi><mo>=</mo><mn>1</mn></mrow><mi>N</mi></msubsup><mrow><mrow><msub><mi>a</mi><mi>i</mi></msub><mo>*</mo><mi>y</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM57"><mi>t</mi><mo>-</mo><mi>i</mi></mrow><mo stretchy="false">]</mo></mrow></mrow></mrow></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.
The file </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">filename</span>
                  <span class="ltx_text" style="font-size:90%;"> is identical to that which is used for </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">FIR</span>
                  <span class="ltx_text" style="font-size:90%;">, except for adding two more columns.
These columns are (4) </span>
                  <math id="Ch4.T1.m17" class="ltx_Math" alttext="a_{0}\ldots a_{N}" display="inline"><mrow><msub><mi>a</mi><mn>0</mn></msub><mo>⁢</mo><mi mathvariant="normal">…</mi><mo>⁢</mo><msub><mi>a</mi><mi>N</mi></msub></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">[float]</span>
                  <span class="ltx_text" style="font-size:90%;"> and (5) initial values for the </span>
                  <math id="Ch4.T1.m18" class="ltx_Math" alttext="y[]" display="inline"><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> array </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">[float]</span>
                  <span class="ltx_text" style="font-size:90%;">.
Note that </span>
                  <math id="Ch4.T1.m19" class="ltx_Math" alttext="a_{0}" display="inline"><msub><mi>a</mi><mn>0</mn></msub></math>
                  <span class="ltx_text" style="font-size:90%;"> is never used, and the value of </span>
                  <math id="Ch4.T1.m20" class="ltx_Math" alttext="y[t-0]" display="inline"><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM58"><mi>t</mi><mo>-</mo><mn>0</mn></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> is pushed back to </span>
                  <math id="Ch4.T1.m21" class="ltx_Math" alttext="y[t-1]" display="inline"><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM59"><mi>t</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> before the first evaluation of the sum, such that </span>
                  <math id="Ch4.T1.m22" class="ltx_Math" alttext="y[t-N]" display="inline"><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM60"><mi>t</mi><mo>-</mo><mi>N</mi></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> is never used.</span>
                </td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;" colspan="3">
                  <span class="ltx_text" style="font-size:90%;">2-operand operators</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">ADD</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name-1[string] function-name-2[string]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Evaluate the functions referenced by </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name-1</span>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name-2</span>
                  <span class="ltx_text" style="font-size:90%;">, and return the sum of the results.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">SUB</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name-1[string] function-name-2[string]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Similar to </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">ADD</span>
                  <span class="ltx_text" style="font-size:90%;">, but return the result of function1 minus function2.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">MUL</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name-1[string] function-name-2[string]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Similar to </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">ADD</span>
                  <span class="ltx_text" style="font-size:90%;">, but return the product of the results.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">DIV</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name-1[string] function-name-2[string]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Similar to </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">ADD</span>
                  <span class="ltx_text" style="font-size:90%;">, but return the result of function1 divided by function2</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">POW</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name-1[string] function-name-2[string]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Similar to </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">ADD</span>
                  <span class="ltx_text" style="font-size:90%;">, but return the result of function1 raised to the power of function2.</span>
                </td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;" colspan="3">
                  <span class="ltx_text" style="font-size:90%;">1-operand operators</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">MINUS</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Returns the value of the named function, with the opposite sign.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">SQRT</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Returns the square root of the value generated by the named function.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">SIN</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Returns the sine of the value generated by the named function.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">COS</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Returns the cosine of the value generated by the named function.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">LOG</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Returns the natural logarithm of the value generated by the named function.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">LOG10</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Returns the common logarithm of the value generated by the named function.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">EXP</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">function-name</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Returns the natural exponential function </span>
                  <math id="Ch4.T1.m23" class="ltx_Math" alttext="e^{x}" display="inline"><msup><mi>e</mi><mi>x</mi></msup></math>
                  <span class="ltx_text" style="font-size:90%;">, where </span>
                  <math id="Ch4.T1.m24" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>
                  <span class="ltx_text" style="font-size:90%;"> is the value generated by the named function.</span>
                </td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;" colspan="3">
                  <span class="ltx_text" style="font-size:90%;">Polynomial and elliptical functions</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">CONST</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">value[real]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Always returns the value specified.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">TURN</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text" style="font-size:90%;">(none)</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Return the turn number, i.e. </span>
                  <math id="Ch4.T1.m25" class="ltx_Math" alttext="y(t)=t" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM61">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mi>t</mi></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">LIN</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">a[real] b[real]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Computed value from the linear function </span>
                  <math id="Ch4.T1.m26" class="ltx_Math" alttext="y(t)=a\cdot t+b" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM62">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mi>a</mi><mo>⋅</mo><mi>t</mi></mrow><mo>+</mo><mi>b</mi></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">LINSEG</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">x1[real] x2[real] y1[real] y2[real]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">The function is defined by a line segment between the points </span>
                  <math id="Ch4.T1.m27" class="ltx_Math" alttext="(x_{1},y_{1})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM63"><mi>x</mi><mn>1</mn></msub><mo>,</mo><msub id="XM64"><mi>y</mi><mn>1</mn></msub><mo stretchy="false">)</mo></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <math id="Ch4.T1.m28" class="ltx_Math" alttext="(x_{2},y_{2})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM65"><mi>x</mi><mn>2</mn></msub><mo>,</mo><msub id="XM66"><mi>y</mi><mn>2</mn></msub><mo stretchy="false">)</mo></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">, and undefined for </span>
                  <math id="Ch4.T1.m29" class="ltx_Math" alttext="x&lt;x_{1}" display="inline"><mrow><mi>x</mi><mo>&lt;</mo><msub><mi>x</mi><mn>1</mn></msub></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <math id="Ch4.T1.m30" class="ltx_Math" alttext="x&gt;x_{2}" display="inline"><mrow><mi>x</mi><mo>&gt;</mo><msub><mi>x</mi><mn>2</mn></msub></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.
It is required that </span>
                  <math id="Ch4.T1.m31" class="ltx_Math" alttext="x_{1}&lt;x_{2}" display="inline"><mrow><msub><mi>x</mi><mn>1</mn></msub><mo>&lt;</mo><msub><mi>x</mi><mn>2</mn></msub></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">QUAD</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">a[real] b[real] c[real]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Computed value from the quadratic function </span>
                  <math id="Ch4.T1.m32" class="ltx_Math" alttext="y(t)=a\cdot t^{2}+b\cdot t+c" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM67">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mi>a</mi><mo>⋅</mo><msup><mi>t</mi><mn>2</mn></msup></mrow><mo>+</mo><mrow><mi>b</mi><mo>⋅</mo><mi>t</mi></mrow><mo>+</mo><mi>c</mi></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">QUADSEG</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">x1[real] x2[real] y1[real] y2[real] deriv1[real]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">The quadratic function is defined by overlapping the quadratic curve segment which passes through the points </span>
                  <math id="Ch4.T1.m33" class="ltx_Math" alttext="(x_{1},y_{1})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM68"><mi>x</mi><mn>1</mn></msub><mo>,</mo><msub id="XM69"><mi>y</mi><mn>1</mn></msub><mo stretchy="false">)</mo></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <math id="Ch4.T1.m34" class="ltx_Math" alttext="(x_{2},y_{2})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM70"><mi>x</mi><mn>2</mn></msub><mo>,</mo><msub id="XM71"><mi>y</mi><mn>2</mn></msub><mo stretchy="false">)</mo></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">, and </span>
                  <math id="Ch4.T1.m35" class="ltx_Math" alttext="\mathrm{d}y/\mathrm{d}x" display="inline"><mrow><mrow><mrow><mi mathvariant="normal">d</mi><mo>⁢</mo><mi>y</mi></mrow><mo>/</mo><mi mathvariant="normal">d</mi></mrow><mo>⁢</mo><mi>x</mi></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> at </span>
                  <math id="Ch4.T1.m36" class="ltx_Math" alttext="x_{1}" display="inline"><msub><mi>x</mi><mn>1</mn></msub></math>
                  <span class="ltx_text" style="font-size:90%;"> is </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">deriv1</span>
                  <span class="ltx_text" style="font-size:90%;">.
The quadratic coefficients </span>
                  <math id="Ch4.T1.m37" class="ltx_Math" alttext="a,b,c" display="inline"><mrow><mi id="XM72">a</mi><mo>,</mo><mi id="XM73">b</mi><mo>,</mo><mi id="XM74">c</mi></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> are calculated as </span>
                  <math id="Ch4.T1.m38" class="ltx_Math" alttext="a=\frac{\texttt{deriv1}}{x_{1}-x_{2}}+\frac{y_{2}-y_{1}}{(x_{1}-x_{2})^{2}}" display="inline"><mrow><mi>a</mi><mo>=</mo><mrow><mfrac><mtext mathsize="90%" stretchy="false">𝚍𝚎𝚛𝚒𝚟𝟷</mtext><mrow><msub><mi>x</mi><mn>1</mn></msub><mo>-</mo><msub><mi>x</mi><mn>2</mn></msub></mrow></mfrac><mo>+</mo><mfrac><mrow><msub><mi>y</mi><mn>2</mn></msub><mo>-</mo><msub><mi>y</mi><mn>1</mn></msub></mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM75"><msub><mi>x</mi><mn>1</mn></msub><mo>-</mo><msub><mi>x</mi><mn>2</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mfrac></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">, </span>
                  <math id="Ch4.T1.m39" class="ltx_Math" alttext="b=\frac{y_{2}-y_{1}}{x_{2}-x_{1}}-(x_{1}+x_{2})\cdot a" display="inline"><mrow><mi>b</mi><mo>=</mo><mrow><mfrac><mrow><msub><mi>y</mi><mn>2</mn></msub><mo>-</mo><msub><mi>y</mi><mn>1</mn></msub></mrow><mrow><msub><mi>x</mi><mn>2</mn></msub><mo>-</mo><msub><mi>x</mi><mn>1</mn></msub></mrow></mfrac><mo>-</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM76"><msub><mi>x</mi><mn>1</mn></msub><mo>+</mo><msub><mi>x</mi><mn>2</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mo>⋅</mo><mi>a</mi></mrow></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <math id="Ch4.T1.m40" class="ltx_Math" alttext="c=y_{1}+\left(-x_{1}^{2}\cdot a-x_{1}\cdot b\right)" display="inline"><mrow><mi>c</mi><mo>=</mo><mrow><msub><mi>y</mi><mn>1</mn></msub><mo>+</mo><mrow><mo>(</mo><mrow id="XM77"><mrow><mo>-</mo><mrow><msubsup><mi>x</mi><mn>1</mn><mn>2</mn></msubsup><mo>⋅</mo><mi>a</mi></mrow></mrow><mo>-</mo><mrow><msub><mi>x</mi><mn>1</mn></msub><mo>⋅</mo><mi>b</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.</span>
                </td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;" colspan="3">
                  <span class="ltx_text" style="font-size:90%;">Trancendental functions</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">SINF</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">A[real] omega[real] phi[real]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Computes </span>
                  <math id="Ch4.T1.m41" class="ltx_Math" alttext="y(t)=A\sin\left(\omega t+\phi\right)" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM78">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi>A</mi><mo>⁢</mo><mrow><mi id="XM79">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM80"><mrow><mi>ω</mi><mo>⁢</mo><mi>t</mi></mrow><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">COSF</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">A[real] omega[real] phi[real]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Computes </span>
                  <math id="Ch4.T1.m42" class="ltx_Math" alttext="y(t)=A\cos\left(\omega t+\phi\right)" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM81">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi>A</mi><mo>⁢</mo><mrow><mi id="XM82">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM83"><mrow><mi>ω</mi><mo>⁢</mo><mi>t</mi></mrow><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">COSF_RIPP</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">A[real] period[real] phi[real]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">Computes </span>
                  <math id="Ch4.T1.m43" class="ltx_Math" alttext="y(t)=A\cos\left(\frac{2\pi(t-1)}{\mathrm{period}}+\phi\right)" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM85">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi>A</mi><mo>⁢</mo><mrow><mi id="XM86">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM87"><mfrac><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM84"><mi>t</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow></mrow><mi>period</mi></mfrac><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.
This specialized cosine is provided for compatibility, to be used when replacing old </span>
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">RIPP</span>
                  <span class="ltx_text" style="font-size:90%;"> blocks.</span>
                </td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;" colspan="3">
                  <span class="ltx_text" style="font-size:90%;">Specialized functions</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">PELP</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">tinj[real] Iinj[real] Inom[real] A[real] D[real] R[real] te[real]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">This function describes a patched “Parabolic-Exponential-Linear-Parabolic” function, as used for ramping the LHC dipoles and described in </span>
                  <cite class="ltx_cite">
                    <span class="ltx_text" style="font-size:90%;">[</span>
                    <a href="#bib.bib38" title="" class="ltx_ref">38</a>
                    <span class="ltx_text" style="font-size:90%;">, Appendix C]</span>
                  </cite>
                  <span class="ltx_text" style="font-size:90%;"> and </span>
                  <cite class="ltx_cite">
                    <span class="ltx_text" style="font-size:90%;">[</span>
                    <a href="#bib.bib39" title="" class="ltx_ref">39</a>
                    <span class="ltx_text" style="font-size:90%;">]</span>
                  </cite>
                  <span class="ltx_text" style="font-size:90%;">.
The parameters are:
</span>
<ul id="Ch4.I2" class="ltx_itemize">
<li id="Ch4.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text" style="font-size:90%;">•</span>
                      </span>
<div id="Ch4.I2.i1.p1" class="ltx_para">
<p class="ltx_p">
                          <span class="ltx_text" style="font-size:90%;">The injection time </span>
                          <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">tinj</span>
                          <span class="ltx_text" style="font-size:90%;">, which is the time (in turn numbers) when the ramp starts.</span>
                        </p>
</div>
</li>
<li id="Ch4.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text" style="font-size:90%;">•</span>
                      </span>
<div id="Ch4.I2.i2.p1" class="ltx_para">
<p class="ltx_p">
                          <span class="ltx_text" style="font-size:90%;">The injection value </span>
                          <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">Iinj</span>
                          <span class="ltx_text" style="font-size:90%;">, which is the value when </span>
                          <math id="Ch4.I2.i2.p1.m1" class="ltx_Math" alttext="t\leq t_{inj}" display="inline"><mrow><mi>t</mi><mo>≤</mo><msub><mi>t</mi><mrow><mi>i</mi><mo>⁢</mo><mi>n</mi><mo>⁢</mo><mi>j</mi></mrow></msub></mrow></math>
                          <span class="ltx_text" style="font-size:90%;"></span>
                        </p>
</div>
</li>
<li id="Ch4.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text" style="font-size:90%;">•</span>
                      </span>
<div id="Ch4.I2.i3.p1" class="ltx_para">
<p class="ltx_p">
                          <span class="ltx_text" style="font-size:90%;">The final value </span>
                          <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">Inom</span>
                          <span class="ltx_text" style="font-size:90%;">, which is the value after the end of the ramp.</span>
                        </p>
</div>
</li>
<li id="Ch4.I2.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text" style="font-size:90%;">•</span>
                      </span>
<div id="Ch4.I2.i4.p1" class="ltx_para">
<p class="ltx_p">
                          <span class="ltx_text" style="font-size:90%;">The acceleration parameter </span>
                          <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">A</span>
                          <span class="ltx_text" style="font-size:90%;">, which describes how fast the current is growing in the first (parabolic) segment.</span>
                        </p>
</div>
</li>
<li id="Ch4.I2.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text" style="font-size:90%;">•</span>
                      </span>
<div id="Ch4.I2.i5.p1" class="ltx_para">
<p class="ltx_p">
                          <span class="ltx_text" style="font-size:90%;">The decelertation parameter </span>
                          <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">D</span>
                          <span class="ltx_text" style="font-size:90%;">, which describes how fast the current growths flattens out in the forth (parabolic) segment.</span>
                        </p>
</div>
</li>
<li id="Ch4.I2.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text" style="font-size:90%;">•</span>
                      </span>
<div id="Ch4.I2.i6.p1" class="ltx_para">
<p class="ltx_p">
                          <span class="ltx_text" style="font-size:90%;">The ramp rate </span>
                          <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">R</span>
                          <span class="ltx_text" style="font-size:90%;">, which describes the maximum ramp rate, seen in the third (linear) segment.</span>
                        </p>
</div>
</li>
<li id="Ch4.I2.i7" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text" style="font-size:90%;">•</span>
                      </span>
<div id="Ch4.I2.i7.p1" class="ltx_para">
<p class="ltx_p">
                          <span class="ltx_text" style="font-size:90%;">The start time of the ramp </span>
                          <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">te</span>
                          <span class="ltx_text" style="font-size:90%;">, which describes at what time it switches from the parabolic (first) to the exponential (second) segment.</span>
                        </p>
</div>
</li>
</ul>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">ONOFF</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:116.7pt;">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:90%;">p1[int] p2[int]</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                  <span class="ltx_text" style="font-size:90%;">This function is a periodic “pulse width modulation” with period p2 and pulse length p1.
It may be described as
</span>
                  <math id="Ch4.T1.m44" class="ltx_Math" alttext="y(t)=\left\{1.0\;\mathrm{if}\;\mathrm{mod}(t-1,p2)&lt;p1\right\};\;\left\{0.0\;%
\mathrm{otherwise}\right\}" display="inline"><mrow><mi>y</mi><mrow><mo stretchy="false">(</mo><mi id="XM88">t</mi><mo stretchy="false">)</mo></mrow><mo>=</mo><mrow><mo>{</mo><mpadded width="+2.8pt"><mn>1.0</mn></mpadded><mpadded width="+2.8pt"><mi>if</mi></mpadded><mi>mod</mi><mrow><mo stretchy="false">(</mo><mi>t</mi><mo>-</mo><mn>1</mn><mo>,</mo><mi>p</mi><mn>2</mn><mo stretchy="false">)</mo></mrow><mo>&lt;</mo><mi>p</mi><mn>1</mn><mo>}</mo></mrow><mo rspace="5.3pt">;</mo><mrow><mo>{</mo><mpadded width="+2.8pt"><mn>0.0</mn></mpadded><mi>otherwise</mi><mo>}</mo></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.
The reason for using </span>
                  <math id="Ch4.T1.m45" class="ltx_Math" alttext="t-1" display="inline"><mrow><mi>t</mi><mo>-</mo><mn>1</mn></mrow></math>
                  <span class="ltx_text" style="font-size:90%;"> is that the modulus is naturally zero-based, while SixTrack counts turns starting from 1.
</span>
                  <span class="ltx_text" style="font-size:90%;">Note that it is expected that </span>
                  <math id="Ch4.T1.m46" class="ltx_Math" alttext="p1&gt;=0" display="inline"><mrow><mrow><mi>p</mi><mo>⁢</mo><mn>1</mn></mrow><mo>≥</mo><mn>0</mn></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">, </span>
                  <math id="Ch4.T1.m47" class="ltx_Math" alttext="p2&gt;1" display="inline"><mrow><mrow><mi>p</mi><mo>⁢</mo><mn>2</mn></mrow><mo>&gt;</mo><mn>1</mn></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">, and </span>
                  <math id="Ch4.T1.m48" class="ltx_Math" alttext="p1&lt;=p2" display="inline"><mrow><mrow><mi>p</mi><mo>⁢</mo><mn>1</mn></mrow><mo>≤</mo><mrow><mi>p</mi><mo>⁢</mo><mn>2</mn></mrow></mrow></math>
                  <span class="ltx_text" style="font-size:90%;">.
Also note that for negative </span>
                  <math id="Ch4.T1.m49" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math>
                  <span class="ltx_text" style="font-size:90%;">, the function will always return 1.0.</span>
                </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:116.7pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:270.3pt;"></th>
</tr>
</table>
</figure>
</section>
</section>
<section id="Ch4.S4.SS2" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.4.2 </span>SET Statement</h4>
<section id="Ch4.S4.SS2.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format:</h5>
<div id="Ch4.S4.SS2.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">SET element-name attr-name func-name first-turn last-turn turn-shift</span></p>
</div>
<div id="Ch4.S4.SS2.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">This statement defines an element setpoint, which changes an element/attribute, <span class="ltx_text ltx_font_typewriter">attr-name</span>, to the value computed by the given function, <span class="ltx_text ltx_font_typewriter">func-name</span>.
The <span class="ltx_text ltx_font_typewriter">SET</span> statement becomes active when the turn number reaches <span class="ltx_text ltx_font_typewriter">first-turn</span>, and switches off once <span class="ltx_text ltx_font_typewriter">last-turn</span> has been passed.
When switched off, the value applied in <span class="ltx_text ltx_font_typewriter">last-turn</span> stays for the rest of the simulation, or until overwritten by another <span class="ltx_text ltx_font_typewriter">SET</span>.
If <span class="ltx_text ltx_font_typewriter">last-turn</span> equals <math id="Ch4.S4.SS2.SSS0.Px1.p2.m1" class="ltx_Math" alttext="-1" display="inline"><mrow><mo>-</mo><mn>1</mn></mrow></math>, the <span class="ltx_text ltx_font_typewriter">SET</span> is active until the end of the simulation.</p>
</div>
<div id="Ch4.S4.SS2.SSS0.Px1.p3" class="ltx_para">
<p class="ltx_p">The element type and attribute combinations that can be used in <span class="ltx_text ltx_font_typewriter">DYNK</span> are shown in Table <a href="#Ch4.T2" title="Table 4.2 ‣ Format: ‣ 4.4.2 SET Statement ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>.</p>
</div>
<div id="Ch4.S4.SS2.SSS0.Px1.p4" class="ltx_para">
<p class="ltx_p">The argument <span class="ltx_text ltx_font_typewriter">turn-shift</span> is an integer (positive, negative, or zero) number which is added to the current turn number before computing the function.
Thus, in order to (as an example) apply an exponential decay from the value <math id="Ch4.S4.SS2.SSS0.Px1.p4.m1" class="ltx_Math" alttext="v_{0}" display="inline"><msub><mi>v</mi><mn>0</mn></msub></math> starting in turn <math id="Ch4.S4.SS2.SSS0.Px1.p4.m2" class="ltx_Math" alttext="t_{0}" display="inline"><msub><mi>t</mi><mn>0</mn></msub></math> using the function defined as <math id="Ch4.S4.SS2.SSS0.Px1.p4.m3" class="ltx_Math" alttext="f(t)=V_{0}\exp(-t/\tau)" display="inline"><mrow><mrow><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM95">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><msub><mi>V</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mi id="XM96">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM97"><mo>-</mo><mrow><mi>t</mi><mo>/</mo><mi>τ</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>, a <span class="ltx_text ltx_font_typewriter">turn-shift</span> <math id="Ch4.S4.SS2.SSS0.Px1.p4.m4" class="ltx_Math" alttext="-t_{0}" display="inline"><mrow><mo>-</mo><msub><mi>t</mi><mn>0</mn></msub></mrow></math> should be applied.</p>
</div>
<div id="Ch4.S4.SS2.SSS0.Px1.p5" class="ltx_para">
<p class="ltx_p">In addition to changing single element attributes, it is also possible to use <span class="ltx_text ltx_font_typewriter">DYNK</span> to change certain global attributes such as the reference energy.
This is done through the “element” <span class="ltx_text ltx_font_typewriter">GLOBAL VARS</span>; for example one may want to simulate an energy ramp following the function <span class="ltx_text ltx_font_typewriter">eramp</span> throughout the whole simulation.
For this, one would use the <span class="ltx_text ltx_font_typewriter">SET</span> command
</p>
<pre class="ltx_verbatim ltx_font_typewriter">
SET GLOBAL-VARS E0 eramp 1 -1 0
</pre>
<p class="ltx_p">Because of this, SixTrack does not accept a real single element in <span class="ltx_text ltx_font_typewriter">fort.2</span> named <span class="ltx_text ltx_font_typewriter">GLOBAL-VARS</span> if <span class="ltx_text ltx_font_typewriter">DYNK</span> is active.</p>
</div>
<figure id="Ch4.T2" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 4.2: </span>Element types and attributes available in <span class="ltx_text ltx_font_typewriter">DYNK</span>.</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="background-color:#B3B3FF;">
Element type (idx)</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="background-color:#B3B3FF;">Attribute</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="background-color:#B3B3FF;">Units</span>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">
                    <span class="ltx_text" style="background-color:#B3B3FF;">Description</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p">[-1mm] Standard thin elements</span>
<span class="ltx_p">(<math id="Ch4.T2.m1" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>1 – <math id="Ch4.T2.m2" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>10),</span>
<span class="ltx_p">Section <a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a></span>
<span class="ltx_p">[-3mm]</span>
</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_typewriter">average_ms</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">radians * m<sup class="ltx_sup">-n</sup>
</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">See Table <a href="#Ch3.T2" title="Table 3.2 ‣ Format ‣ 3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" rowspan="3">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p">RF cavities (<math id="Ch4.T2.m3" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>12),</span>
<span class="ltx_p">Section <a href="#Ch3.S1.SS4" title="3.1.4 Cavities ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.4</span></a></span>
</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_typewriter">voltage</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">MV</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">One-turn accelerating voltage</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text ltx_font_typewriter">harmonic</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r">–</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;">Harmonic number of the cavity</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text ltx_font_typewriter">lag_angle</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r">degrees</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;">Lag angle of the cavity</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" rowspan="3">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p">RF multipoles</span>
<span class="ltx_p">(<math id="Ch4.T2.m4" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>23, <math id="Ch4.T2.m5" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>26 – <math id="Ch4.T2.m6" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>28),</span>
<span class="ltx_p">Section <a href="#Ch3.S1.SS10" title="3.1.10 Crab Cavity ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.10</span></a></span>
</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_typewriter">voltage</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">MV</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">Kick voltage</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text ltx_font_typewriter">frequency</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r">MHz</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;">Frequency</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text ltx_font_typewriter">phase</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r">radians</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;">Offset between zero-crossing and ideal bunch center</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" rowspan="3">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p">Electron lens</span>
<span class="ltx_p">(29),</span>
<span class="ltx_p">Section <a href="#Ch4.S9" title="4.9 Electron lens ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.9</span></a></span>
</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_typewriter">thetamax</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">mrad</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">Maximum angular kick</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" rowspan="3">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p">Scattering</span>
<span class="ltx_p">(40),</span>
<span class="ltx_p">Section <a href="#Ch4.S10" title="4.10 Scattering ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.10</span></a></span>
</span>
</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_typewriter">scaling</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">–</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">Scaling of probability, see Section <a href="#Ch4.S10" title="4.10 Scattering ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.10</span></a>, paragraph about ELEM command.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_typewriter">E0</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">MeV</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">Reference energy of synchronous particle</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_t"></td>
<td class="ltx_td ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:170.7pt;"></td>
</tr>
</tbody>
</table>
</figure>
</section>
</section>
<section id="Ch4.S4.SS3" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.4.3 </span>Additional Flags</h4>
<section id="Ch4.S4.SS3.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Flag:</h5>
<div id="Ch4.S4.SS3.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p">
              <span class="ltx_text ltx_font_typewriter">NOFILE
<br class="ltx_break"></span>
            </p>
</div>
<div id="Ch4.S4.SS3.SSS0.Px1.p2" class="ltx_para">
<p class="ltx_p">The presence of this statement in a <span class="ltx_text ltx_font_typewriter">DYNK</span> block switches off the normal writing of the output file <span class="ltx_text ltx_font_typewriter">dynksets.dat</span> in every line, instead producing a file only containing the message</p>
<pre class="ltx_verbatim ltx_font_typewriter">
### DYNK file output was disabled with flag NOFILE in fort.3 ###
</pre>
<p class="ltx_p">This can be useful to save disk space in very long simulations.</p>
</div>
</section>
<section id="Ch4.S4.SS3.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Flag:</h5>
<div id="Ch4.S4.SS3.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">DEBU</span></p>
</div>
<div id="Ch4.S4.SS3.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">This statement switches on extra “debugging” output from <span class="ltx_text ltx_font_typewriter">DYNK</span>.
This can be useful if debugging the code or if debugging the input.</p>
</div>
</section>
</section>
<section id="Ch4.S4.SS4" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.4.4 </span>Output File <span class="ltx_text ltx_font_typewriter">dynksets.dat</span>
</h4>
<div id="Ch4.S4.SS4.p1" class="ltx_para">
<p class="ltx_p">When a <span class="ltx_text ltx_font_typewriter">DYNK</span> block is present in the input file, a file <span class="ltx_text ltx_font_typewriter">dynksets.dat</span> is created and in the current working directory.
Unless a <span class="ltx_text ltx_font_typewriter">NOFILE</span> statement is present, this file contains first a header</p>
<pre class="ltx_verbatim ltx_font_typewriter">
# turn element attribute SETidx funname value
</pre>
<p class="ltx_p">followed by rows of data in the format specified in the header.
This data is written for all element/attribute combinations and in all turns, wether a <span class="ltx_text ltx_font_typewriter">SET</span> is active for this element/attribute in this turn or not.
If no <span class="ltx_text ltx_font_typewriter">SET</span> is active when the line is written out, the <span class="ltx_text ltx_font_typewriter">SETidx</span> is written as <math id="Ch4.S4.SS4.p1.m1" class="ltx_Math" alttext="-1" display="inline"><mrow><mo>-</mo><mn>1</mn></mrow></math>, and the <span class="ltx_text ltx_font_typewriter">funname</span> is “N/A”.
If a <span class="ltx_text ltx_font_typewriter">SET</span> is active when the line is written out, the <span class="ltx_text ltx_font_typewriter">SETidx</span> is the index of the currently active <span class="ltx_text ltx_font_typewriter">SET</span> statement, where the first statement occurring in <span class="ltx_text ltx_font_typewriter">fort.3</span> has index 1, etc.
Similarly, the <span class="ltx_text ltx_font_typewriter">funname</span> is the name referencing the currently active <span class="ltx_text ltx_font_typewriter">FUN</span> statement.</p>
</div>
</section>
<section id="Ch4.S4.SS5" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.4.5 </span>Examples</h4>
<section id="Ch4.S4.SS5.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Replacement of <span class="ltx_text ltx_font_typewriter">RIPP</span> block</h5>
<div id="Ch4.S4.SS5.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">One use of the <span class="ltx_text ltx_font_typewriter">DYNK</span> block is to replace the functionality of the <span class="ltx_text ltx_font_typewriter">RIPP</span> block (Section <a href="#Ch4.S3" title="4.3 Power Supply Ripple ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.3</span></a>).
The <span class="ltx_text ltx_font_typewriter">FUN</span> type <span class="ltx_text ltx_font_typewriter">COSF_RIPP</span> is provided for exactly this purpose, and provides an exact replacement.
As an example, the <span class="ltx_text ltx_font_typewriter">RIPP</span> block in the SixTest test-case prob1 looks like (slightly reduced in size):</p>
<pre class="ltx_verbatim ltx_font_typewriter">
RIPPLE OF POWER SUPPLIES------------------------------------------------
         dmqx1f50l5+2      3.2315D-10    224.9
         dmqx2af50l5+2    -3.2315D-10    224.9
         dmqx1f10mel5+2    2.5246D-16    0.0011245
NEXT
</pre>
<p class="ltx_p">This can be replaced by the following:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
DYNK
NOFILE
FUN RIPP-dmqx1f50l5+2 COSF_RIPP 3.2315D-10 224.9 0.0
SET dmqx1f50l5+2 average_ms RIPP-dmqx1f50l5+2 1 -1 0
FUN RIPP-dmqx2af50l5+2 COSF_RIPP -3.2315D-10 224.9 0.0
SET dmqx2af50l5+2 average_ms RIPP-dmqx2af50l5+2 1 -1 0
FUN RIPP-dmqx1f20kl5+2 COSF_RIPP 2.5246D-12 0.56225 0.0
SET dmqx1f20kl5+2 average_ms RIPP-dmqx1f20kl5+2 1 -1 0
NEXT
</pre>
<p class="ltx_p">Here, each <span class="ltx_text ltx_font_typewriter">RIPP</span> data line is replaced with two lines, one FUN statement for generating the function, and one <span class="ltx_text ltx_font_typewriter">SET</span> statement for applying the value.
Note that the <span class="ltx_text ltx_font_typewriter">SET</span> statements have an end-time <span class="ltx_text ltx_font_typewriter">-1</span>, meaning it is used until the end of the simulation.
Also note the presence of the <span class="ltx_text ltx_font_typewriter">NOFILE</span> flag, which is used to not generate a potentially very large (for very long simulations) <span class="ltx_text ltx_font_typewriter">dynkfile.dat</span> output file.
</p>
</div>
</section>
<section id="Ch4.S4.SS5.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Starting tracking inside a bump</h5>
<div id="Ch4.S4.SS5.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S4.SS5.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">This example was taken from the paper <cite class="ltx_cite">[<a href="#bib.bib37" title="" class="ltx_ref">37</a>]</cite>, and demonstrates how a bump can be temporarily disabled if the starting point of the tracking is inside of it.
The reason for doing this is removing the necessity of generating a starting distribution with the bump already applied.
Here, the HL-LHC v1.1 lattice is used, with vertical crab cavities around the first interaction point (IP1, ATLAS), which is also the point where the tracking is started.
The crab cavities opening the bump are called <span class="ltx_text ltx_font_typewriter">CRAB_IP1_L1<math id="Ch4.S4.SS5.SSS0.Px2.p2.m1" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>4</span>, while the closing cavities are <span class="ltx_text ltx_font_typewriter">CRAB_IP1_R1<math id="Ch4.S4.SS5.SSS0.Px2.p2.m2" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>4</span>.
The <span class="ltx_text ltx_font_typewriter">DYNK</span> block for this looks like:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
DYNK
FUN zero CONST 0.0
FUN CV_1R1 Get CRAB_IP1_R1 voltage
FUN CV_1R2 GET CRAB_IP1_R2 voltage
FUN CV_1R3 GET CRAB_IP1_R3 voltage
FUN CV_1R4 GET CRAB_IP1_R4 voltage
SET CRAB_IP1_R1 voltage zero 1 1 0
SET CRAB_IP1_R2 voltage zero 1 1 0
SET CRAB_IP1_R3 voltage zero 1 1 0
SET CRAB_IP1_R4 voltage zero 1 1 0
SET CRAB_IP1_R1 voltage CV_1R1 2 2 0
SET CRAB_IP1_R2 voltage CV_1R2 2 2 0
SET CRAB_IP1_R3 voltage CV_1R3 2 2 0
SET CRAB_IP1_R4 voltage CV_1R4 2 2 0
NEXT
</pre>
</div>
<div id="Ch4.S4.SS5.SSS0.Px2.p3" class="ltx_para">
<p class="ltx_p">Here, the function <span class="ltx_text ltx_font_typewriter">zero</span> is defined such that it always returns <math id="Ch4.S4.SS5.SSS0.Px2.p3.m1" class="ltx_Math" alttext="0.0" display="inline"><mn>0.0</mn></math>, and is used to switch off the closing cavities in the first turn, i.e. when the beam exits the bump.
Further, the functions <span class="ltx_text ltx_font_typewriter">CV_1R1<math id="Ch4.S4.SS5.SSS0.Px2.p3.m2" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>1R4</span> and <span class="ltx_text ltx_font_typewriter">CV_1L</span> are used to store the original value of the voltages, without having to explicitly enter them into the DYNK block.</p>
</div>
<div id="Ch4.S4.SS5.SSS0.Px2.p4" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_typewriter">SET</span> statements then first sets the voltage of all the cavities to zero in turn 1, and then in turn 2 sets it to their respective “switched on” voltages.
The <span class="ltx_text ltx_font_typewriter">SET</span> statements end after turn 2, but the last values are retained.</p>
</div>
<div id="Ch4.S4.SS5.SSS0.Px2.p5" class="ltx_para">
<p class="ltx_p">This means that when the simulation starts with the bunch in <span class="ltx_text ltx_font_typewriter">IP1</span>, it exits the bump without any kicks from the closing crab cavities.
It then comes around (still in turn 1), and encountered the switched-on opening cavities <span class="ltx_text ltx_font_typewriter">CRAB_IP1_L1<math id="Ch4.S4.SS5.SSS0.Px2.p5.m1" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>4</span>, which crabs the beam.
After passing through IP1, the turn counter is increased from 1 to 2, triggering the SET statements to switch on the closing cavities <span class="ltx_text ltx_font_typewriter">CRAB_IP1_R1<math id="Ch4.S4.SS5.SSS0.Px2.p5.m2" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>4</span> as well.</p>
</div>
</section>
<section id="Ch4.S4.SS5.SSS0.Px3" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Ramp and exponential decay of crab voltage, combined with a linear drift of crab phase</h5>
<div id="Ch4.S4.SS5.SSS0.Px3.p1" class="ltx_para">
<br class="ltx_break">
</div>
<figure id="Ch4.F1" class="ltx_figure"><img src="x1.png" id="Ch4.F1.g1" class="ltx_graphics ltx_centering" width="601" height="306" alt="">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure 4.1: </span>Singals generate by <span class="ltx_text ltx_font_typewriter">DYNK</span> example for ramp + exponential decay of crab voltage, and also linear drift of crab phase. Only the signals for CRAB_IP1_L1 are shown. The plot is made from the data in <span class="ltx_text ltx_font_typewriter">dynksets.dat</span>.</figcaption>
</figure>
<div id="Ch4.S4.SS5.SSS0.Px3.p2" class="ltx_para">
<p class="ltx_p">This slightly more complicated example builds on the example given above.
It shows how to change two parameters (voltage and phase) of several objects.
It also demonstrates how functions can be chained together, making more complicated functions.
Some of the resulting functions are shown in Figure <a href="#Ch4.F1" title="Figure 4.1 ‣ Ramp and exponential decay of crab voltage, combined with a linear drift of crab phase ‣ 4.4.5 Examples ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>, and the <span class="ltx_text ltx_font_typewriter">DYNK</span> block here looks like:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
DYNK
/DEBUG
FUN zero CONST 0.0
FUN CV_R1 GET CRAB_IP1_R1 voltage
FUN CV_R2 GET CRAB_IP1_R2 voltage
FUN CV_R3 GET CRAB_IP1_R3 voltage
FUN CV_R4 GET CRAB_IP1_R4 voltage
FUN CV_L  GET CRAB_IP1_L1 voltage
FUN ramp LIN 0.02 0
FUN ramp_R1 MUL CV_R1 ramp
FUN ramp_R2 MUL CV_R2 ramp
FUN ramp_R3 MUL CV_R3 ramp
FUN ramp_R4 MUL CV_R4 ramp
FUN ramp_L  MUL CV_L  ramp
SET CRAB_IP1_R1 voltage zero 1 10 0
SET CRAB_IP1_R2 voltage zero 1 10 0
SET CRAB_IP1_R3 voltage zero 1 10 0
SET CRAB_IP1_R4 voltage zero 1 10 0
SET CRAB_IP1_L1 voltage zero 1 9 0
SET CRAB_IP1_L2 voltage zero 1 9 0
SET CRAB_IP1_L3 voltage zero 1 9 0
SET CRAB_IP1_L4 voltage zero 1 9 0
/
SET CRAB_IP1_R1 voltage ramp_R1 11 61 -11
SET CRAB_IP1_R2 voltage ramp_R2 11 61 -11
SET CRAB_IP1_R3 voltage ramp_R3 11 61 -11
SET CRAB_IP1_R4 voltage ramp_R4 11 61 -11
SET CRAB_IP1_L1 voltage ramp_L 10 60 -10
SET CRAB_IP1_L2 voltage ramp_L 10 60 -10
SET CRAB_IP1_L3 voltage ramp_L 10 60 -10
SET CRAB_IP1_L4 voltage ramp_L 10 60 -10
/
/Voltage decay and detuning
FUN expCore LIN -0.05 0.0
FUN decay EXP expCore
FUN decayScaled MUL decay CV_L
SET CRAB_IP1_L1 voltage decayScaled 70 100 -70
SET CRAB_IP1_L2 voltage decayScaled 70 100 -70
SET CRAB_IP1_L3 voltage decayScaled 70 100 -70
SET CRAB_IP1_L4 voltage decayScaled 70 100 -70
FUN phasedrift LIN 0.3141592654 0.0
SET CRAB_IP1_L1 phase phasedrift 70 100 -70
SET CRAB_IP1_L2 phase phasedrift 70 100 -70
SET CRAB_IP1_L3 phase phasedrift 70 100 -70
SET CRAB_IP1_L4 phase phasedrift 70 100 -70
NEXT
</pre>
<p class="ltx_p">The first functions defined here are the same as above, storing the default values (as defined in the single element list) for the relevant elements and also zero.
Then follows a normalized linear ramp function <span class="ltx_text ltx_font_typewriter">ramp</span>, with gradient <math id="Ch4.S4.SS5.SSS0.Px3.p2.m1" class="ltx_Math" alttext="0.02=1/50" display="inline"><mrow><mn>0.02</mn><mo>=</mo><mrow><mn>1</mn><mo>/</mo><mn>50</mn></mrow></mrow></math>.
This is then used by the “specialized” ramp functions <span class="ltx_text ltx_font_typewriter">ramp_R1<math id="Ch4.S4.SS5.SSS0.Px3.p2.m2" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>R4</span>, which scales <span class="ltx_text ltx_font_typewriter">ramp</span> so that the end point is the standard voltages for <math id="Ch4.S4.SS5.SSS0.Px3.p2.m3" class="ltx_Math" alttext="t\in 0\ldots 50" display="inline"><mrow><mi>t</mi><mo>∈</mo><mrow><mn>0</mn><mo>⁢</mo><mi mathvariant="normal">…</mi><mo>⁢</mo><mn>50</mn></mrow></mrow></math>.</p>
</div>
<div id="Ch4.S4.SS5.SSS0.Px3.p3" class="ltx_para">
<p class="ltx_p">These functions are used to first set the crabs to <math id="Ch4.S4.SS5.SSS0.Px3.p3.m1" class="ltx_Math" alttext="0.0" display="inline"><mn>0.0</mn></math> for the first <math id="Ch4.S4.SS5.SSS0.Px3.p3.m2" class="ltx_Math" alttext="9" display="inline"><mn>9</mn></math> revolutions, and in the 10th revolution the ramp starts.
As the <span class="ltx_text ltx_font_typewriter">ramp</span> function is defined starting at turn <math id="Ch4.S4.SS5.SSS0.Px3.p3.m3" class="ltx_Math" alttext="0" display="inline"><mn>0</mn></math>, a shift <math id="Ch4.S4.SS5.SSS0.Px3.p3.m4" class="ltx_Math" alttext="-10" display="inline"><mrow><mo>-</mo><mn>10</mn></mrow></math> or <math id="Ch4.S4.SS5.SSS0.Px3.p3.m5" class="ltx_Math" alttext="-11" display="inline"><mrow><mo>-</mo><mn>11</mn></mrow></math> is applied to the ramps.
The ramp is switched off after turn 60/61, leaving the crabs to be operating at the last <span class="ltx_text ltx_font_typewriter">SET</span> value.</p>
</div>
<div id="Ch4.S4.SS5.SSS0.Px3.p4" class="ltx_para">
<p class="ltx_p">Further, we want to demonstrate a failure in the crab voltage.
This is done using an exponential decaying function <math id="Ch4.S4.SS5.SSS0.Px3.p4.m1" class="ltx_Math" alttext="V(t)=V_{0}\exp\left(-0.05t\right)" display="inline"><mrow><mrow><mi>V</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM98">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><msub><mi>V</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mi id="XM99">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM100"><mo>-</mo><mrow><mn>0.05</mn><mo>⁢</mo><mi>t</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>, which is implemented as three chained functions:</p>
</div>
<div id="Ch4.S4.SS5.SSS0.Px3.p5" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_bold">expCore</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                    <math id="Ch4.S4.SS5.SSS0.Px3.p5.m1" class="ltx_Math" alttext="f(t)=-0.05t+0.0" display="inline"><mrow><mrow><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM101">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mo>-</mo><mrow><mn>0.05</mn><mo>⁢</mo><mi>t</mi></mrow></mrow><mo>+</mo><mn>0.0</mn></mrow></mrow></math>
                  </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_bold">decay</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                    <math id="Ch4.S4.SS5.SSS0.Px3.p5.m2" class="ltx_Math" alttext="g(t)=\exp(f(t))=\exp(-0.05t+0.0)" display="inline"><mrow><mrow><mi>g</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM102">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi id="XM104">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM105"><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM103">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi id="XM106">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM107"><mrow><mo>-</mo><mrow><mn>0.05</mn><mo>⁢</mo><mi>t</mi></mrow></mrow><mo>+</mo><mn>0.0</mn></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                  </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                    <span class="ltx_text ltx_font_bold">decayScaled</span>
                  </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                    <math id="Ch4.S4.SS5.SSS0.Px3.p5.m3" class="ltx_Math" alttext="h(t)=V_{0}\cdot g(f(t))=V_{0}\cdot\exp(f(t))=\exp(-0.05t+0.0)" display="inline"><mrow><mrow><mi>h</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM108">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><msub><mi>V</mi><mn>0</mn></msub><mo>⋅</mo><mi>g</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM110"><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM109">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><msub><mi>V</mi><mn>0</mn></msub><mo>⋅</mo><mrow><mi id="XM112">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM113"><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM111">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>=</mo><mrow><mi id="XM114">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM115"><mrow><mo>-</mo><mrow><mn>0.05</mn><mo>⁢</mo><mi>t</mi></mrow></mrow><mo>+</mo><mn>0.0</mn></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                  </td>
</tr>
</tbody>
</table>
</div>
<div id="Ch4.S4.SS5.SSS0.Px3.p6" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">For the <span class="ltx_text ltx_font_typewriter">SET</span>, the time <math id="Ch4.S4.SS5.SSS0.Px3.p6.m1" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math> is then shifted by <math id="Ch4.S4.SS5.SSS0.Px3.p6.m2" class="ltx_Math" alttext="-70" display="inline"><mrow><mo>-</mo><mn>70</mn></mrow></math> turns, so that the functions are evaluated starting at <math id="Ch4.S4.SS5.SSS0.Px3.p6.m3" class="ltx_Math" alttext="t=0" display="inline"><mrow><mi>t</mi><mo>=</mo><mn>0</mn></mrow></math>.</p>
</div>
</section>
<section id="Ch4.S4.SS5.SSS0.Px4" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Detuning a cavity (accelerating or crab)</h5>
<div id="Ch4.S4.SS5.SSS0.Px4.p1" class="ltx_para">
<br class="ltx_break">
</div>
</section>
<section id="Ch4.S4.SS5.SSS0.Px5" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Using the PIPE function</h5>
<div id="Ch4.S4.SS5.SSS0.Px5.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S4.SS5.SSS0.Px5.p2" class="ltx_para">
<p class="ltx_p">To use the <span class="ltx_text ltx_font_typewriter">PIPE</span> functionality, add a <span class="ltx_text ltx_font_typewriter">FUN</span> and <span class="ltx_text ltx_font_typewriter">SET</span> to the <span class="ltx_text ltx_font_typewriter">DYNK</span> block such as:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
FUN pipe1 PIPE /tmp/pip1 /tmp/pip2 myID1 4242
SET  ACFCA.AR1.B1 voltage pipe1 10 -1 -9
</pre>
<p class="ltx_p">Then create the two pipes using the <span class="ltx_text ltx_font_typewriter">mkfifo</span> UNIX command, e.g. <span class="ltx_text ltx_font_typewriter">mkfifo pip1</span> and <span class="ltx_text ltx_font_typewriter">mkfifo pip2</span> in the chosen directory.
When starting SixTrack, it will first open the input pipe (while reading the <span class="ltx_text ltx_font_typewriter">DYNK</span> block), and wait for the external program to do the same.
This can be simulated by running <span class="ltx_text ltx_font_typewriter">cat &gt; pip1</span>; it is also possible to open the input pipe before starting SixTrack.
After opening the input pipe, SixTrack will open the output pipe, again this can be simulated by running <span class="ltx_text ltx_font_typewriter">cat pip2</span>, and again this pipe may be opened before starting SixTrack.
Note that when SixTrack ends, the output pipe will be closed, so the receiving <span class="ltx_text ltx_font_typewriter">cat</span> process is terminated.</p>
</div>
<div id="Ch4.S4.SS5.SSS0.Px5.p3" class="ltx_para">
<p class="ltx_p">After opening the output pipe, SixTrack writes the line <span class="ltx_text ltx_font_typewriter">DYNKPIPE !******************!</span> to this file.
It then writes a line similar to <span class="ltx_text ltx_font_typewriter">INIT ID=myID1 for FUN=pipe1</span> for each <span class="ltx_text ltx_font_typewriter">FUN</span> using this output pipe.</p>
</div>
<div id="Ch4.S4.SS5.SSS0.Px5.p4" class="ltx_para">
<p class="ltx_p">During tracking, when one of the <span class="ltx_text ltx_font_typewriter">PIPE</span> <span class="ltx_text ltx_font_typewriter">FUN</span>s are called SixTrack writes a line similar to <span class="ltx_text ltx_font_typewriter">GET ID=myID1 TURN= 1</span> to the output pipe.
Note that the turn number is the one passed to the <span class="ltx_text ltx_font_typewriter">FUN</span> from <span class="ltx_text ltx_font_typewriter">SET</span>, i.e. including any turn-shift.
It then waits for a single floating point number to be written (in ascii) to the input pipe, which is then read and returned from the <span class="ltx_text ltx_font_typewriter">FUN</span>.</p>
</div>
</section>
</section>
</section>
<section id="Ch4.S5" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4.5 </span>Beam–Beam Element</h3>
<div id="Ch4.S5.p1" class="ltx_para">
<p class="ltx_p">The beam–beam kick, including a separation of the beams, is treated à la Basetti and Erskine <cite class="ltx_cite">[<a href="#bib.bib18" title="" class="ltx_ref">18</a>]</cite> and implemented as in MAD-X <cite class="ltx_cite">[<a href="#bib.bib22" title="" class="ltx_ref">22</a>]</cite>.
However, a much faster but nevertheless precise calculation using interpolation can be used <cite class="ltx_cite">[<a href="#bib.bib24" title="" class="ltx_ref">24</a>]</cite>.
Since SixTrack version 3, the beam–beam is also available in the 6D form à la Hirata <cite class="ltx_cite">[<a href="#bib.bib19" title="" class="ltx_ref">19</a>]</cite>.
Lastly, the linear coupling has been considered in 4 and 6 dimensional phase space <cite class="ltx_cite">[<a href="#bib.bib20" title="" class="ltx_ref">20</a>]</cite>.</p>
</div>
<div id="Ch4.S5.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">BEAM</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <math id="Ch4.S5.p2.m1" class="ltx_Math" alttext="&gt;1" display="inline"><mrow><mi></mi><mo>&gt;</mo><mn>1</mn></mrow></math>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Two different input formats are available, “traditional” and “EXPERT”. If “EXPERT” mode is wanted, this is triggered by adding the flag <span class="ltx_text ltx_font_typewriter">EXPERT</span> on the first line of the block.</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch4.S5.SS5.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Traditional format</h5>
<div id="Ch4.S5.SS5.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S5.SS5.SSS0.Px1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">First line:</th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                  <span class="ltx_text ltx_font_typewriter">partnum emitnx emitny sigz sige ibeco ibtyp lhc ibbc</span>
                </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">Further lines:</th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                  <span class="ltx_text ltx_font_typewriter">name ibsix xang xplane xstr</span>
                </td>
</tr>
</tbody>
</table>
</div>
<div id="Ch4.S5.SS5.SSS0.Px1.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">partnum</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Number of particles in bunch</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">emitnx,emitny</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Horizontal and vertical normalized emittance respectively [<math id="Ch4.S5.SS5.SSS0.Px1.p3.m1" class="ltx_Math" alttext="\mu\mbox{m}\cdot\mbox{rad}" display="inline"><mrow><mrow><mi>μ</mi><mo>⁢</mo><mtext>m</mtext></mrow><mo>⋅</mo><mtext>rad</mtext></mrow></math>]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">sigz,sige</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">r.m.s. bunch length [m] and r.m.s. energy spread</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ibeco</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Switch (0 = off; 1 = on) to subtract the closed orbit introduced by the separation of the beams. It is recommended to always subtract it as it is not yet calculated in a selfconsistent manner. The <span class="ltx_text ltx_font_typewriter">ibeco</span> switch also acts on the “wire” elements <a href="#Ch4.S6" title="4.6 Wire ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.6</span></a> in the same way as on the beam-beam elements. It subtracts the closed orbit introduced by the wire if <span class="ltx_text ltx_font_typewriter">ibeco</span>=1 and applies it if <span class="ltx_text ltx_font_typewriter">ibeco</span>=0.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ibtyp</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Switch (0 = off; 1 = on) to use the fast beam–beam algorithms developed in collaboration with G.A. Erskine and E. McIntosh. The linear optics are calculated with “exact” beam–beam kicks.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">lhc</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">For the LHC with its anti–symmetric IR the separation of the beams in one plane can be calculated by the <math id="Ch4.S5.SS5.SSS0.Px1.p3.m2" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>–function of the other plane. For flat beams (not anti-symmetric optics) the separation can be loaded from the <span class="ltx_text ltx_font_typewriter">fort.2</span> file. (0 = off; 1 = anti-symmetric; 2 = load from file).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ibbc</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Linear coupling considered in 4D and 6D (0 = off; 1 = on).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name</span>
                </td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Name of 6D beam–beam element. Beam–beam elements that do not appear will be treated as 4D kicks.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ibsix</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Number of slices of the 6D beam–beam element. If <span class="ltx_text ltx_font_typewriter">ibsix</span> is set to 0 this element is treated as a 4D element.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">xang</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Half crossing angle (angle the between the trajectories of the two beams) at this particular element [rad].</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">xplane</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Crossing plane angle [rad].</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">xstr</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Angle of the position of the slices in the boosted frame [rad] (i.e. <math id="Ch4.S5.SS5.SSS0.Px1.p3.m3" class="ltx_Math" alttext="X=Z\sin(\mathit{xstr})\cos(\mathit{xplane})" display="inline"><mrow><mi>X</mi><mo>=</mo><mrow><mi>Z</mi><mo>⁢</mo><mrow><mi id="XM116">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM117">𝑥𝑠𝑡𝑟</mi><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mi id="XM118">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM119">𝑥𝑝𝑙𝑎𝑛𝑒</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>, <math id="Ch4.S5.SS5.SSS0.Px1.p3.m4" class="ltx_Math" alttext="Y=Z\sin(\mathit{xstr})\cos(\mathit{xplane})" display="inline"><mrow><mi>Y</mi><mo>=</mo><mrow><mi>Z</mi><mo>⁢</mo><mrow><mi id="XM120">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM121">𝑥𝑠𝑡𝑟</mi><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mi id="XM122">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM123">𝑥𝑝𝑙𝑎𝑛𝑒</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math> ). In absence of crabbing user should make sure <span class="ltx_text ltx_font_typewriter">xstr=xang</span>; in case the <span class="ltx_text ltx_font_typewriter">xstr</span> flag is not set then <span class="ltx_text ltx_font_typewriter">xstr=xang</span> is assumed and a warning is printed (since version 4.5.45).</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch4.S5.SS5.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">EXPERT format</h5>
<div id="Ch4.S5.SS5.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S5.SS5.SSS0.Px2.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">First line:</th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                  <span class="ltx_text ltx_font_typewriter">EXPERT</span>
                </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">Second line:</th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                  <span class="ltx_text ltx_font_typewriter">partnum emitnx emitny sigz sige ibeco ibtyp lhc ibbc</span>
                </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">Further lines</th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">4D BB lens (1 line per element):</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">    <span class="ltx_text ltx_font_typewriter">name ibsix <math id="Ch4.S5.SS5.SSS0.Px2.p2.m1" class="ltx_Math" alttext="\Sigma_{x,x}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM124">x</mi><mo mathvariant="normal">,</mo><mi id="XM125">x</mi></mrow></msub></math> <math id="Ch4.S5.SS5.SSS0.Px2.p2.m2" class="ltx_Math" alttext="\Sigma_{y,y}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM126">y</mi><mo mathvariant="normal">,</mo><mi id="XM127">y</mi></mrow></msub></math> h-sep v-sep strength-ratio</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">6D BB lens (3 lines per element):</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">    <span class="ltx_text ltx_font_typewriter">name ibsix xang xplane h-sep v-sep</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">    <math id="Ch4.S5.SS5.SSS0.Px2.p2.m3" class="ltx_Math" alttext="\Sigma_{x,x}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM128">x</mi><mo>,</mo><mi id="XM129">x</mi></mrow></msub></math><span class="ltx_text ltx_font_typewriter"> <math id="Ch4.S5.SS5.SSS0.Px2.p2.m4" class="ltx_Math" alttext="\Sigma_{x,xp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM130">x</mi><mo mathvariant="normal">,</mo><mrow id="XM131"><mi>x</mi><mo mathvariant="monospace">⁢</mo><mi>p</mi></mrow></mrow></msub></math> <math id="Ch4.S5.SS5.SSS0.Px2.p2.m5" class="ltx_Math" alttext="\Sigma_{xp,xp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mrow id="XM132"><mi>x</mi><mo mathvariant="monospace">⁢</mo><mi>p</mi></mrow><mo mathvariant="normal">,</mo><mrow id="XM133"><mi>x</mi><mo mathvariant="monospace">⁢</mo><mi>p</mi></mrow></mrow></msub></math> <math id="Ch4.S5.SS5.SSS0.Px2.p2.m6" class="ltx_Math" alttext="\Sigma_{y,y}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM134">y</mi><mo mathvariant="normal">,</mo><mi id="XM135">y</mi></mrow></msub></math> <math id="Ch4.S5.SS5.SSS0.Px2.p2.m7" class="ltx_Math" alttext="\Sigma_{y,yp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM136">y</mi><mo mathvariant="normal">,</mo><mrow id="XM137"><mi>y</mi><mo mathvariant="monospace">⁢</mo><mi>p</mi></mrow></mrow></msub></math></span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">    <math id="Ch4.S5.SS5.SSS0.Px2.p2.m8" class="ltx_Math" alttext="\Sigma_{yp,yp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mrow id="XM138"><mi>y</mi><mo>⁢</mo><mi>p</mi></mrow><mo>,</mo><mrow id="XM139"><mi>y</mi><mo>⁢</mo><mi>p</mi></mrow></mrow></msub></math><span class="ltx_text ltx_font_typewriter"> <math id="Ch4.S5.SS5.SSS0.Px2.p2.m9" class="ltx_Math" alttext="\Sigma_{x,y}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM140">x</mi><mo mathvariant="normal">,</mo><mi id="XM141">y</mi></mrow></msub></math> <math id="Ch4.S5.SS5.SSS0.Px2.p2.m10" class="ltx_Math" alttext="\Sigma_{x,py}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM142">x</mi><mo mathvariant="normal">,</mo><mrow id="XM143"><mi>p</mi><mo mathvariant="monospace">⁢</mo><mi>y</mi></mrow></mrow></msub></math> <math id="Ch4.S5.SS5.SSS0.Px2.p2.m11" class="ltx_Math" alttext="\Sigma_{xp,y}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mrow id="XM144"><mi>x</mi><mo mathvariant="monospace">⁢</mo><mi>p</mi></mrow><mo mathvariant="normal">,</mo><mi id="XM145">y</mi></mrow></msub></math> <math id="Ch4.S5.SS5.SSS0.Px2.p2.m12" class="ltx_Math" alttext="\Sigma_{xp,yp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mrow id="XM146"><mi>x</mi><mo mathvariant="monospace">⁢</mo><mi>p</mi></mrow><mo mathvariant="normal">,</mo><mrow id="XM147"><mi>y</mi><mo mathvariant="monospace">⁢</mo><mi>p</mi></mrow></mrow></msub></math> strength-ratio</span>
</td>
</tr>
</tbody>
</table>
</div>
<div id="Ch4.S5.SS5.SSS0.Px2.p3" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">Some parameters are new or defined in a different way:</p>
</div>
<div id="Ch4.S5.SS5.SSS0.Px2.p4" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">lhc</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">This parameter is kept for now only for RHIC studies when equal to 9.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name</span>
                </td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Name of the beam–beam element.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ibsix</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Number of slices of the 6D beam–beam element.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">If <span class="ltx_text ltx_font_typewriter">ibsix</span> is set to 0, this element is treated as a 4D element.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">If <span class="ltx_text ltx_font_typewriter">ibsix</span> is larger or equal 1, this element is treated as a 6D element.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <math id="Ch4.S5.SS5.SSS0.Px2.p4.m1" class="ltx_Math" alttext="\Sigma_{xx}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi>x</mi><mo>⁢</mo><mi>x</mi></mrow></msub></math>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Horizontal <math id="Ch4.S5.SS5.SSS0.Px2.p4.m2" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math> for the strong beam <math id="Ch4.S5.SS5.SSS0.Px2.p4.m3" class="ltx_Math" alttext="\rm{[mm^{2}]}" display="inline"><mrow><mo stretchy="false">[</mo><msup id="XM148"><mi>mm</mi><mn>2</mn></msup><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <math id="Ch4.S5.SS5.SSS0.Px2.p4.m4" class="ltx_Math" alttext="\Sigma_{yy}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi>y</mi><mo>⁢</mo><mi>y</mi></mrow></msub></math>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Vorizontal <math id="Ch4.S5.SS5.SSS0.Px2.p4.m5" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math> for the strong beam <math id="Ch4.S5.SS5.SSS0.Px2.p4.m6" class="ltx_Math" alttext="\rm{[mm^{2}]}" display="inline"><mrow><mo stretchy="false">[</mo><msup id="XM149"><mi>mm</mi><mn>2</mn></msup><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">h-sep</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Horizontal beam–beam separation [mm]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">v-sep</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Vertical beam–beam separation [mm]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">strength-ratio</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Strength ratio with respect to the nominal beam–beam kick strength. This is useful to allow for splitting one beam–beam kick into several (longitudinally close by) kicks.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <math id="Ch4.S5.SS5.SSS0.Px2.p4.m7" class="ltx_Math" alttext="\Sigma_{i,j}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM150">i</mi><mo>,</mo><mi id="XM151">j</mi></mrow></msub></math>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Second order momenta matrix for the strong beam, in units of mm and mrad. For example <math id="Ch4.S5.SS5.SSS0.Px2.p4.m8" class="ltx_Math" alttext="\Sigma_{xxp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi>x</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>p</mi></mrow></msub></math> in [mm mrad]</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch4.S5.SS5.SSS0.Px3" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Conversion from traditional to EXPERT format</h5>
<div id="Ch4.S5.SS5.SSS0.Px3.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S5.SS5.SSS0.Px3.p2" class="ltx_para">
<p class="ltx_p">An automatic converter from the “traditional” input block to the new “expert” format is built into SixTrack; every time a non-<span class="ltx_text ltx_font_typewriter">EXPERT</span> input block is encountered, a conversion is printed to the standard output.
Therefore, all the user needs to do is to run SixTrack (number of turns does not matter) on an input file that should be converted, and follow the instructions which are printed at the beginning of the program output.</p>
</div>
</section>
<section id="Ch4.S5.SS5.SSS0.Px4" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch4.S5.SS5.SSS0.Px4.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S5.SS5.SSS0.Px4.p2" class="ltx_para">
<p class="ltx_p">These beam–beam elements have to appear in the single element list (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>) (type 20).
If the “traditional” option is used in the <span class="ltx_text ltx_font_typewriter">BEAM</span> block, the listing in the single element list must contain their horizontal and vertical beam–beam separations (see <a href="#Ch3.S1.SS5" title="3.1.5 Beam–Beam Lens ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.5</span></a>).</p>
</div>
</section>
<section id="Ch4.S5.SS5.SSS0.Px5" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Sign Convention</h5>
<div id="Ch4.S5.SS5.SSS0.Px5.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S5.SS5.SSS0.Px5.p2" class="ltx_para">
<p class="ltx_p">Some clarifications regarding the sign convention used for the separation and crossing angle variables.</p>
</div>
</section>
<section id="Ch4.S5.SS5.SSS0.Px6" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Separations:</h5>
<div id="Ch4.S5.SS5.SSS0.Px6.p1" class="ltx_para">
<br class="ltx_break">
<ol id="Ch4.I3" class="ltx_enumerate">
<li id="Ch4.I3.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch4.I3.i1.p1" class="ltx_para">
<p class="ltx_p">The separation is added to the transverse coordinates of each particles just before the beam-beam subroutines (see Fig. <a href="#Ch4.F2" title="Figure 4.2 ‣ Separations: ‣ 4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>).</p>
<table id="A4.S2.EGx4" class="ltx_equationgroup ltx_eqn_eqnarray">
<tr id="Ch4.Ex5" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                          <math id="Ch4.Ex5.m1" class="ltx_Math" alttext="\displaystyle\tilde{x}_{i}=x_{i}+\mathrm{sep}_{x}-\mathrm{CO}_{x}" display="inline"><mrow><msub><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover><mi>i</mi></msub><mo>=</mo><mrow><mrow><msub><mi>x</mi><mi>i</mi></msub><mo>+</mo><msub><mi>sep</mi><mi>x</mi></msub></mrow><mo>-</mo><msub><mi>CO</mi><mi>x</mi></msub></mrow></mrow></math>
                        </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="Ch4.Ex6" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                          <math id="Ch4.Ex6.m1" class="ltx_Math" alttext="\displaystyle\tilde{y}_{i}=y_{i}+\mathrm{sep}_{y}-\mathrm{CO}_{y}" display="inline"><mrow><msub><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover><mi>i</mi></msub><mo>=</mo><mrow><mrow><msub><mi>y</mi><mi>i</mi></msub><mo>+</mo><msub><mi>sep</mi><mi>y</mi></msub></mrow><mo>-</mo><msub><mi>CO</mi><mi>y</mi></msub></mrow></mrow></math>
                        </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
<li id="Ch4.I3.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch4.I3.i2.p1" class="ltx_para">
<p class="ltx_p">Lorentz boost applied to the updated coordinates.</p>
</div>
</li>
<li id="Ch4.I3.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch4.I3.i3.p1" class="ltx_para">
<p class="ltx_p">The separation used for the actual beam-beam kick (sep<math id="Ch4.I3.i3.p1.m1" class="ltx_Math" alttext="{}_{x,y,kick}" display="inline"><msub><mi></mi><mrow><mi id="XM152">x</mi><mo>,</mo><mi id="XM153">y</mi><mo>,</mo><mrow id="XM154"><mi>k</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>k</mi></mrow></mrow></msub></math>) is the difference between the centroid of the strong slice (X<math id="Ch4.I3.i3.p1.m2" class="ltx_Math" alttext="{}^{{\dagger}}" display="inline"><msup><mi></mi><mo>†</mo></msup></math>,Y<math id="Ch4.I3.i3.p1.m3" class="ltx_Math" alttext="{}^{{\dagger}}" display="inline"><msup><mi></mi><mo>†</mo></msup></math>) and the each particle (x<math id="Ch4.I3.i3.p1.m4" class="ltx_Math" alttext="{}_{i}" display="inline"><msub><mi></mi><mi>i</mi></msub></math>,y<math id="Ch4.I3.i3.p1.m5" class="ltx_Math" alttext="{}_{i}" display="inline"><msub><mi></mi><mi>i</mi></msub></math>).</p>
</div>
</li>
<li id="Ch4.I3.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch4.I3.i4.p1" class="ltx_para">
<p class="ltx_p">Antiboost to return to accelerator frame.</p>
</div>
</li>
<li id="Ch4.I3.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5.</span>
<div id="Ch4.I3.i5.p1" class="ltx_para">
<p class="ltx_p">The separation is removed and the closed orbit is added back. Tracking continues.</p>
<table id="A4.S2.EGx5" class="ltx_equationgroup ltx_eqn_eqnarray">
<tr id="Ch4.Ex7" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                          <math id="Ch4.Ex7.m1" class="ltx_Math" alttext="\displaystyle\tilde{x}_{i}=x_{i}-\mathrm{sep}_{x}+\mathrm{CO}_{x}" display="inline"><mrow><msub><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover><mi>i</mi></msub><mo>=</mo><mrow><mrow><msub><mi>x</mi><mi>i</mi></msub><mo>-</mo><msub><mi>sep</mi><mi>x</mi></msub></mrow><mo>+</mo><msub><mi>CO</mi><mi>x</mi></msub></mrow></mrow></math>
                        </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="Ch4.Ex8" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                          <math id="Ch4.Ex8.m1" class="ltx_Math" alttext="\displaystyle\tilde{y}_{i}=y_{i}-\mathrm{sep}_{y}+\mathrm{CO}_{y}" display="inline"><mrow><msub><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover><mi>i</mi></msub><mo>=</mo><mrow><mrow><msub><mi>y</mi><mi>i</mi></msub><mo>-</mo><msub><mi>sep</mi><mi>y</mi></msub></mrow><mo>+</mo><msub><mi>CO</mi><mi>y</mi></msub></mrow></mrow></math>
                        </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
</ol>
</div>
<figure id="Ch4.F2" class="ltx_figure"><img src="x2.png" id="Ch4.F2.g1" class="ltx_graphics ltx_centering" width="538" height="168" alt="">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure 4.2: </span>Coordinate manipulation taking into consideration the beam-beam lens separation as stated in point 1 of the separation sign convention.</figcaption>
</figure>
</section>
<section id="Ch4.S5.SS5.SSS0.Px7" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Crossing angles:</h5>
<div id="Ch4.S5.SS5.SSS0.Px7.p1" class="ltx_para">
<br class="ltx_break">
<ol id="Ch4.I4" class="ltx_enumerate">
<li id="Ch4.I4.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch4.I4.i1.p1" class="ltx_para">
<p class="ltx_p">The closed orbit is removed just before the beam-beam subroutines.</p>
<table id="A4.S2.EGx6" class="ltx_equationgroup ltx_eqn_eqnarray">
<tr id="Ch4.Ex9" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                          <math id="Ch4.Ex9.m1" class="ltx_Math" alttext="\displaystyle\tilde{x}^{\prime}_{i}=x^{\prime}_{i}-\mathrm{CO}_{x^{\prime}}" display="inline"><mrow><msubsup><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover><mi>i</mi><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>x</mi><mi>i</mi><mo>′</mo></msubsup><mo>-</mo><msub><mi>CO</mi><msup><mi>x</mi><mo>′</mo></msup></msub></mrow></mrow></math>
                        </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="Ch4.Ex10" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                          <math id="Ch4.Ex10.m1" class="ltx_Math" alttext="\displaystyle\tilde{y}^{\prime}_{i}=y^{\prime}_{i}-\mathrm{CO}_{y^{\prime}}" display="inline"><mrow><msubsup><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover><mi>i</mi><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>y</mi><mi>i</mi><mo>′</mo></msubsup><mo>-</mo><msub><mi>CO</mi><msup><mi>y</mi><mo>′</mo></msup></msub></mrow></mrow></math>
                        </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
<li id="Ch4.I4.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch4.I4.i2.p1" class="ltx_para">
<p class="ltx_p">Lorentz boost applied to the updated coordinates.</p>
</div>
</li>
<li id="Ch4.I4.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch4.I4.i3.p1" class="ltx_para">
<p class="ltx_p">Apply Synchro-Betatron Mapping.</p>
</div>
</li>
<li id="Ch4.I4.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch4.I4.i4.p1" class="ltx_para">
<p class="ltx_p">Antiboost to return to accelerator frame.</p>
</div>
</li>
<li id="Ch4.I4.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5.</span>
<div id="Ch4.I4.i5.p1" class="ltx_para">
<p class="ltx_p">The closed orbit is added back. Tracking continues.</p>
<table id="A4.S2.EGx7" class="ltx_equationgroup ltx_eqn_eqnarray">
<tr id="Ch4.Ex11" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                          <math id="Ch4.Ex11.m1" class="ltx_Math" alttext="\displaystyle\tilde{x}^{\prime}_{i}=x^{\prime}_{i}+\mathrm{CO}_{x^{\prime}}" display="inline"><mrow><msubsup><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover><mi>i</mi><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>x</mi><mi>i</mi><mo>′</mo></msubsup><mo>+</mo><msub><mi>CO</mi><msup><mi>x</mi><mo>′</mo></msup></msub></mrow></mrow></math>
                        </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="Ch4.Ex12" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                          <math id="Ch4.Ex12.m1" class="ltx_Math" alttext="\displaystyle\tilde{y}^{\prime}_{i}=y^{\prime}_{i}+\mathrm{CO}_{y^{\prime}}" display="inline"><mrow><msubsup><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover><mi>i</mi><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>y</mi><mi>i</mi><mo>′</mo></msubsup><mo>+</mo><msub><mi>CO</mi><msup><mi>y</mi><mo>′</mo></msup></msub></mrow></mrow></math>
                        </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
</ol>
</div>
<figure id="Ch4.F3" class="ltx_figure"><img src="x3.png" id="Ch4.F3.g1" class="ltx_graphics ltx_centering" width="537" height="136" alt="">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure 4.3: </span>Coordinate manipulation to move from the accelerator frame to a head-on collision frame (Figures left and center). A positive crossing angle is considered as shown in the left figure. Then Lorentz boost and Synchro-Betatron Mapping are applied (right).</figcaption>
</figure>
</section>
</section>
<section id="Ch4.S6" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4.6 </span>Wire</h3>
<div id="Ch4.S6.p1" class="ltx_para">
<p class="ltx_p">The wire block serves for reading in the input parameters for the wire.
Each wire also needs to be added as single element in the list of single elements.</p>
</div>
<div id="Ch4.S6.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">WIRE</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">name flag_co current int_length phys_length disp_x disp_y tilt_x tilt_y</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">A description of the input parameters for the wire is given in Table <span class="ltx_ref ltx_ref_self">LABEL:tab:wire</span>.</td>
</tr>
</tbody>
</table>
</div>
<figure id="Ch4.T3" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table 4.3: </span>Input parameters for the <span class="ltx_text ltx_font_typewriter">WIRE</span> block.</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text" style="background-color:#B3B3FF;">
Arguments</span>
            </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:28.5pt;">
              <span class="ltx_text" style="background-color:#B3B3FF;">Unit</span>
            </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">
              <span class="ltx_text" style="background-color:#B3B3FF;">Description</span>
            </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:261.8pt;"></th>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text ltx_font_typewriter">name</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:28.5pt;">-</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">Name of wire. Must be the same as in list of single elements.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text ltx_font_typewriter">flag_co</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:28.5pt;">-</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">flag to define the displacement of the wire in respect to the closed orbit or x=y=0. For <span class="ltx_text ltx_font_typewriter">flag_co</span>=+1 <span class="ltx_text ltx_font_typewriter">disp_*</span> is the distance between x=y=0 and the wire. For <span class="ltx_text ltx_font_typewriter">flag_co</span>=-1 <span class="ltx_text ltx_font_typewriter">disp_*</span> is the distance between the closed orbit and the wire.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text ltx_font_typewriter">current</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:28.5pt;">A</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">wire current</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text ltx_font_typewriter">int_length</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:28.5pt;">m</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">integrated length of the wire</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text ltx_font_typewriter">phys_length</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:28.5pt;">m</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">physical length of the wire</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text ltx_font_typewriter">disp_x</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">hor. displacement of the wire</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text ltx_font_typewriter">disp_y</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">vert. displacement of the wire</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text ltx_font_typewriter">tilt_x</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:28.5pt;">degrees</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">hor. tilt of the wire <math id="Ch4.T3.m1" class="ltx_Math" alttext="-90&lt;tilt\_x&lt;90" display="inline"><mrow><mrow><mo>-</mo><mn>90</mn></mrow><mo>&lt;</mo><mrow><mi>t</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>l</mi><mo>⁢</mo><mi>t</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><mi>x</mi></mrow><mo>&lt;</mo><mn>90</mn></mrow></math> (uses same defintion as DISP block)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text ltx_font_typewriter">tilt_y</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:28.5pt;">degrees</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">vert. tilt of the wire <math id="Ch4.T3.m2" class="ltx_Math" alttext="-90&lt;tilt\_y&lt;90" display="inline"><mrow><mrow><mo>-</mo><mn>90</mn></mrow><mo>&lt;</mo><mrow><mi>t</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>l</mi><mo>⁢</mo><mi>t</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><mi>y</mi></mrow><mo>&lt;</mo><mn>90</mn></mrow></math> (uses same defintion as DISP block)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:261.8pt;"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:261.8pt;"></th>
</tr>
</table>
</figure>
<section id="Ch4.S6.SS5.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch4.S6.SS5.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S6.SS5.SSS0.Px1.p2" class="ltx_para">
<p class="ltx_p">The user has to check that the wires defined in the WIRE block are also defined in the list of single elements and vice versa.
All parameters, except for the type (type 15), are ignored in the single element definition and the execution is aborted if the parameters are non-zero.
In addition to the parameters defined in the <span class="ltx_text ltx_font_typewriter">WIRE</span> block, the <span class="ltx_text ltx_font_typewriter">ibeco</span> parameter in the <span class="ltx_text ltx_font_typewriter">BEAM</span> block (see Section <a href="#Ch4.S5" title="4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.5</span></a>) imposes the same behavior on the wire as for beam-beam.
Explicitly, the closed orbit introduced by the wire is subtracted if <span class="ltx_text ltx_font_typewriter">ibeco</span>=1 and not subtracted if <span class="ltx_text ltx_font_typewriter">ibeco</span>=0.</p>
</div>
</section>
<section id="Ch4.S6.SS5.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Example:</h5>
<div id="Ch4.S6.SS5.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S6.SS5.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">In the following we give some examples for wire definitions.
This example defines two wires <span class="ltx_text ltx_font_typewriter">wire_1</span> and <span class="ltx_text ltx_font_typewriter">wire_2</span>.</p>
</div>
<div id="Ch4.S6.SS5.SSS0.Px2.p3" class="ltx_para">
<p class="ltx_p">The input block in <span class="ltx_text ltx_font_typewriter">fort.3</span> is given by:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
WIRE
wire_1   -1  +98.9   2.0  1.0   10.0   10.0     1.1     1.1
wire_2   -1  +98.9   2.0  1.0   10.0   10.0     0.0     0.0
NEXT
</pre>
<p class="ltx_p">The single and structure element definition in <span class="ltx_text ltx_font_typewriter">fort.2</span> is given by:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
SINGLE ELEMENTS---------------------------------------------------------
...
wire_1           15   0.000000000e+00   0.000000000e+00
0.000000000e+00    0.000000000e+00    0.000000000e+00    0.000000000e+00
wire_2           15   0.000000000e+00   0.000000000e+00
0.000000000e+00    0.000000000e+00    0.000000000e+00    0.000000000e+00
...
STRUCTURE INPUT---------------------------------------------------------
...
BLOC56            wire_1              wire_2
...
</pre>
<p class="ltx_p">Note that all parameters except for the type have to be set to 0 in the single element definition.</p>
</div>
</section>
</section>
<section id="Ch4.S7" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4.7 </span>“Phase Trombone” Element</h3>
<div id="Ch4.S7.p1" class="ltx_para">
<p class="ltx_p">The linear “phase trombone” allows the introduction of a change in the transverse phases without spoiling the linear optics of the rest of the machine, i.e. the Twiss parameters are the same at entrance and exit of the element.</p>
</div>
<div id="Ch4.S7.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">TROM</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">1 line with name and then in blocks of 14 lines with 3 entries each.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">First line: <span class="ltx_text ltx_font_typewriter">name</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Second line: <span class="ltx_text ltx_font_typewriter">cx, cx', cy</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Third line: <span class="ltx_text ltx_font_typewriter">cy', cz, cz'</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Fourth util <math id="Ch4.S7.p2.m1" class="ltx_Math" alttext="15^{th}" display="inline"><msup><mn>15</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math>: <span class="ltx_text ltx_font_typewriter">M(<math id="Ch4.S7.p2.m2" class="ltx_Math" alttext="6\times 6" display="inline"><mrow><mn mathvariant="normal">6</mn><mo mathvariant="normal">×</mo><mn mathvariant="normal">6</mn></mrow></math>)</span> matrix</td>
</tr>
</tbody>
</table>
</div>
<div id="Ch4.S7.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">name</span>
              </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:260.2pt;">May contain up to 47 characters.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">cx, cx', cy, cy', cz, cz'</span>
              </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:260.2pt;">6D closed orbit to be added to the coordinates.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">M(<math id="Ch4.S7.p3.m1" class="ltx_Math" alttext="6\times 6" display="inline"><mrow><mn mathvariant="normal">6</mn><mo mathvariant="normal">×</mo><mn mathvariant="normal">6</mn></mrow></math>)</span>
              </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:260.2pt;">
<math id="Ch4.S7.p3.m2" class="ltx_Math" alttext="6\times 6" display="inline"><mrow><mn>6</mn><mo>×</mo><mn>6</mn></mrow></math> matrix elements.</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch4.S7.SS5.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch4.S7.SS5.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S7.SS5.SSS0.Px1.p2" class="ltx_para">
<p class="ltx_p">The user has to make sure that the above stated conditions are fulfilled.
When using the <math id="Ch4.S7.SS5.SSS0.Px1.p2.m1" class="ltx_Math" alttext="mad\_6t" display="inline"><mrow><mi>m</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><mn>6</mn><mo>⁢</mo><mi>t</mi></mrow></math> <cite class="ltx_cite">[<a href="#bib.bib15" title="" class="ltx_ref">15</a>]</cite> converter from MAD-X to SixTrack, this is guaranteed to be the case.
Note also that the crossterms between the transverse plains are not considered for the time being.</p>
</div>
</section>
</section>
<section id="Ch4.S8" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4.8 </span>Beam Distribution EXchange (BDEX)</h3>
<div id="Ch4.S8.p1" class="ltx_para">
<p class="ltx_p">The Beam Distribution EXchange allows an external program to read and modify the beam distribution in SixTrack.
This can be used for tracking part of the machine in an external program, for example for including physics processes that are normally not available in SixTrack.
Another possible use is for multi-bunch tracking, i.e. with an external program “swapping” the bunch at a some point in the ring.
This would be useful for studying (for example) beam loading, where the external program would read the position of a bunch in the cavity, use that to compute an update of the cavity voltage (which can be sent to SixTrack using DYNK FUN PIPE), swap the bunch with another one and track that to the cavity (still at “physics turn” 1, but “SixTrack turn” 2) etc.</p>
</div>
<div id="Ch4.S8.p2" class="ltx_para">
<p class="ltx_p">Please note that <span class="ltx_text ltx_font_typewriter">BDEX</span> is currently not supported in the checkpoint/restart version or in the collimation version.
Including <span class="ltx_text ltx_font_typewriter">BDEX</span> in one of these versions results in a run-time error.
</p>
</div>
<div id="Ch4.S8.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">BDEX</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">There are three types of statements possible in a <span class="ltx_text ltx_font_typewriter">BDEX</span> block, listed below.</td>
</tr>
</tbody>
</table>
</div>
<div id="Ch4.S8.p4" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">Additionally, lines starting with “/” are treated as comments and are ignored.</p>
</div>
<section id="Ch4.S8.SS5.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">ELEM</h5>
<div id="Ch4.S8.SS5.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p">
            <span class="ltx_text ltx_font_typewriter">ELEM chanName elemName action
<br class="ltx_break"></span>
          </p>
</div>
<div id="Ch4.S8.SS5.SSS0.Px1.p2" class="ltx_para">
<p class="ltx_p">This associates a given element with an already existing channel and an action.
The element must appear in the SINGLE ELEMENT block, and be of type 0 (marker).
The action indicates what should be done with the particle distribution when it reaches this element.
Currently, the only allowed action is “1”, which means “particle exchange”, i.e. output the beam distribution and read back another one at the same point.</p>
</div>
</section>
<section id="Ch4.S8.SS5.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">CHAN</h5>
<div id="Ch4.S8.SS5.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">
            <span class="ltx_text ltx_font_typewriter">CHAN chanName chanType …
<br class="ltx_break"></span>
          </p>
</div>
<div id="Ch4.S8.SS5.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">This creates a new channel through which the <span class="ltx_text ltx_font_typewriter">BDEX</span> can communicate.
Currently, the only implemented <span class="ltx_text ltx_font_typewriter">chanType</span> is <span class="ltx_text ltx_font_typewriter">PIPE</span>, however <span class="ltx_text ltx_font_typewriter">TCPIP</span> is also foreseen.</p>
</div>
<div id="Ch4.S8.SS5.SSS0.Px2.p3" class="ltx_para">
<p class="ltx_p">For the <span class="ltx_text ltx_font_typewriter">PIPE</span> type, the statement including arguments is <span class="ltx_text ltx_font_typewriter">CHAN PIPE inPipeName outPipeName format fileUnit</span>.
This uses a pair of UNIX FIFOs, through which SixTrack can communicate with an external program.
When the channel is used, it sends a message on the outpipe, then waits for a reply with the new distribution over the inPipe.
The <span class="ltx_text ltx_font_typewriter">format</span> is an integer used to indicate the output/input format, and is currently unused.
The <span class="ltx_text ltx_font_typewriter">fileUnit</span> is the Fortran unit number that should be used to open the inPipe.
The <span class="ltx_text ltx_font_typewriter">outPipe</span> is opened on the next unit, so both units fileUnit and fileUnit+1 must be free.</p>
</div>
</section>
<section id="Ch4.S8.SS5.SSS0.Px3" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">DEBU</h5>
<div id="Ch4.S8.SS5.SSS0.Px3.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S8.SS5.SSS0.Px3.p2" class="ltx_para">
<p class="ltx_p">This statement switches on extra “debugging” output from <span class="ltx_text ltx_font_typewriter">BDEX</span>.
This can be useful if debugging the code or if debugging the input.</p>
</div>
</section>
<section id="Ch4.S8.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.8.1 </span>Communication protocols</h4>
<div id="Ch4.S8.SS1.p1" class="ltx_para">
<p class="ltx_p">The communication protocols used by the different channel types are listed below:</p>
</div>
<section id="Ch4.S8.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">PIPE communication protocol</h5>
<div id="Ch4.S8.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S8.SS1.SSS0.Px1.p2" class="ltx_para">
<p class="ltx_p">When a pair of pipes are first initialized, a header “<span class="ltx_text ltx_font_typewriter">BDEX-PIPE !******************!</span>” is written to the output pipe.
Then, when the tracking reaches an element which is marked as active for this channel, it writes another header like “<span class="ltx_text ltx_font_typewriter">BDEX TURN= 1 BEZ=ip1 I= 1 NAPX= 64</span>”, where <span class="ltx_text ltx_font_typewriter">TURN</span> is the number of the current SixTrack turn, <span class="ltx_text ltx_font_typewriter">BEZ</span> the name of the SINGLE ELEMENT, <span class="ltx_text ltx_font_typewriter">I</span> the index of the STRUCTURE ELEMENT, and <span class="ltx_text ltx_font_typewriter">NAPX</span> the number of particles to be written out.
After this follows <span class="ltx_text ltx_font_typewriter">NAPX</span> lines with the particle information (one per particle), each line of the format <span class="ltx_text ltx_font_typewriter">xv(1,j) yv(1,j) xv(2,j) yv(2,j) sigmv(j) ejv(j) ejfv(j) rvv(j) dpsv(j) oidpsv(j) dpsv1(j),nlostp(j)</span> where all but the last floating point numbers, the last being an integer.
Finally, it writes “<span class="ltx_text ltx_font_typewriter">BDEX WAITING...</span>” to the output pipe, and waits for data on the input pipe.</p>
</div>
<div id="Ch4.S8.SS1.SSS0.Px1.p3" class="ltx_para">
<p class="ltx_p">The first line expected on the input pipe should be an integer containing the number of particles to write back.
If this integer is -1, the current particle distribution is kept.
Otherwise, a number of lines of the same format as with the output is expected.
After reading in the expected number of particles, the string “<span class="ltx_text ltx_font_typewriter">BDEX TRACKING...</span>” is written to the output pipe and tracking is resumed.
</p>
</div>
</section>
<section id="Ch4.S8.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">TCPIP communication protocol</h5>
<div id="Ch4.S8.SS1.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S8.SS1.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">TCPIP is not yet implemented, as it would require an external library.
The FLUKA version implements this, we should make sure that we are compatible with their requirements and ideally their protocol.</p>
</div>
</section>
<section id="Ch4.S8.SS1.SSS0.Px3" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Example</h5>
<div id="Ch4.S8.SS1.SSS0.Px3.p1" class="ltx_para">
<br class="ltx_break">
</div>
</section>
</section>
</section>
<section id="Ch4.S9" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4.9 </span>Electron lens</h3>
<div id="Ch4.S9.p1" class="ltx_para">
<p class="ltx_p">The electron lens module serves for reading in the input parameters for different types of electron lenses.
Each e-lens also needs to be added as single element in the list of single elements.
Currently the ideal electron lens is implemented, i.e. with no errors in the e-beam distribution.</p>
</div>
<div id="Ch4.S9.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">ELEN</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">name type theta_r2 r2 r1 offset_x offset_y flag_entrance flag_exit <math id="Ch4.S9.p2.m1" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math></span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">A description of the input parameters for the different e-lens types is given in Table <span class="ltx_ref ltx_ref_self">LABEL:tab:elen</span>. Currently the ideal electron lens is implemented in SixTrack, i.e. with no errors in the e-beam distribution.</td>
</tr>
</tbody>
</table>
</div>
<figure id="Ch4.T4" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table 4.4: </span>Input parameters for <span class="ltx_text ltx_font_typewriter">ELEN</span> block.</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;">
              <span class="ltx_text" style="background-color:#B3B3FF;">
Type Name</span>
            </th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;">
              <span class="ltx_text" style="background-color:#B3B3FF;">Arguments</span>
            </th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">
              <span class="ltx_text" style="background-color:#B3B3FF;">Unit</span>
            </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:256.1pt;">
              <span class="ltx_text" style="background-color:#B3B3FF;">Description</span>
            </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:256.1pt;"></th>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;" colspan="4">Valid for all types</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:68.3pt;">
              <span class="ltx_text ltx_font_typewriter">name</span>
            </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">–</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">Name of e-lens. Must be the same as in list of single elements.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;">
              <span class="ltx_text ltx_font_typewriter">type</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">–</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:256.1pt;">Type of e-lens. Available types are <span class="ltx_text ltx_font_typewriter">UNIFORM</span> and <span class="ltx_text ltx_font_typewriter">GAUSSIAN</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;">
              <span class="ltx_text ltx_font_typewriter">theta_r2</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">mrad</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:256.1pt;">Kick received at <math id="Ch4.T4.m1" class="ltx_Math" alttext="r=r_{2}" display="inline"><mrow><mi>r</mi><mo>=</mo><msub><mi>r</mi><mn>2</mn></msub></mrow></math> where <math id="Ch4.T4.m2" class="ltx_Math" alttext="r_{2}" display="inline"><msub><mi>r</mi><mn>2</mn></msub></math> is the outer radius of the electron lens.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;">
              <span class="ltx_text ltx_font_typewriter">r2</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:256.1pt;">Outer radius of e-lens.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;">
              <span class="ltx_text ltx_font_typewriter">r1</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:256.1pt;">Inner radius of the e-lens. Can be 0 but not negative.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;">
              <span class="ltx_text ltx_font_typewriter">offset_x</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:256.1pt;">Horizontal offset of e-lens.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;">
              <span class="ltx_text ltx_font_typewriter">offset_y</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:256.1pt;">Vertical offset of e-lens.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;">
              <span class="ltx_text ltx_font_typewriter">flag_entrance</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">–</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:256.1pt;">Enable bends at entrance of e-lens (not yet implemented).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;">
              <span class="ltx_text ltx_font_typewriter">flag_exit</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">–</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:256.1pt;">Wnable bends at exit of e-lens (not yet implemented).</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;" colspan="4">Type specific parameters</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:56.9pt;">
              <span class="ltx_text ltx_font_typewriter">GAUSSIAN</span>
            </td>
<td class="ltx_td ltx_align_justify" style="width:68.3pt;">
              <math id="Ch4.T4.m3" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math>
            </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">Sigma of the e-beam.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:68.3pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:256.1pt;"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:56.9pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:68.3pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:256.1pt;"></th>
</tr>
</table>
</figure>
<div id="Ch4.S9.p4" class="ltx_para ltx_noindent">
<p class="ltx_p">Currently, two types of electron beam profiles are supported:</p>
</div>
<div id="Ch4.S9.p5" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">UNIFORM</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">e-beam with constant density of electrons.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">GAUSSIAN</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">e-beam with a radial Gaussian profile.</td>
</tr>
</tbody>
</table>
</div>
<div id="Ch4.S9.p6" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p">The spacial charge density of all profiles is defined between <span class="ltx_text ltx_font_typewriter">r1</span> and <span class="ltx_text ltx_font_typewriter">r2</span>:</p>
<table id="Ch4.E1" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch4.E1.m1" class="ltx_Math" alttext="\rho(r)=\left\{\begin{array}[]{ll}0&amp;\mbox{if $r\leq r_{1}$}\\
f(r)&amp;\mbox{if $r_{1}&lt;r&lt;r_{2}$}\\
0&amp;\mbox{if $r_{2}\leq r$}\\
\end{array}\right.\\
" display="block"><mrow><mrow><mi>ρ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM156">r</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mo>{</mo><mtable displaystyle="true" id="XM157"><mtr id="XM157a"><mtd columnalign="left" id="XM157b"><mn>0</mn></mtd><mtd columnalign="left" id="XM157c"><mrow><mtext>if </mtext><mrow><mi>r</mi><mo>≤</mo><msub><mi>r</mi><mn>1</mn></msub></mrow></mrow></mtd></mtr><mtr id="XM157d"><mtd columnalign="left" id="XM157e"><mrow><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM155">r</mi><mo stretchy="false">)</mo></mrow></mrow></mtd><mtd columnalign="left" id="XM157f"><mrow><mtext>if </mtext><mrow><msub><mi>r</mi><mn>1</mn></msub><mo>&lt;</mo><mi>r</mi><mo>&lt;</mo><msub><mi>r</mi><mn>2</mn></msub></mrow></mrow></mtd></mtr><mtr id="XM157g"><mtd columnalign="left" id="XM157h"><mn>0</mn></mtd><mtd columnalign="left" id="XM157i"><mrow><mtext>if </mtext><mrow><msub><mi>r</mi><mn>2</mn></msub><mo>≤</mo><mi>r</mi></mrow></mrow></mtd></mtr></mtable><mi></mi></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(4.1)</span></td>
</tr>
</table>
<p class="ltx_p">Moreover, if <math id="Ch4.S9.p6.m1" class="ltx_Math" alttext="r_{1}=0" display="inline"><mrow><msub><mi>r</mi><mn>1</mn></msub><mo>=</mo><mn>0</mn></mrow></math>, then the lens is full; otherwise, it is hollow.</p>
</div>
<section id="Ch4.S9.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch4.S9.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S9.SS1.SSS0.Px1.p2" class="ltx_para">
<p class="ltx_p">The user has to check that the e-lens defined in the <span class="ltx_text ltx_font_typewriter">ELEN</span> block is also defined in the list of single elements and vice versa.
All parameters except for the type (type 29) are ignored in the single element definition.
The implementation of the <span class="ltx_text ltx_font_typewriter">UNIFORM</span> and <span class="ltx_text ltx_font_typewriter">GAUSSIAN</span> types (ideal e-lenses) has no explicit energy-dependency, except for the user defined parameter <span class="ltx_text ltx_font_typewriter">theta_r2</span> (see <cite class="ltx_cite">[<a href="#bib.bib16" title="" class="ltx_ref">16</a>]</cite>).</p>
</div>
</section>
<section id="Ch4.S9.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Examples</h5>
<div id="Ch4.S9.SS1.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch4.S9.SS1.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">In the following we give some examples for e-lens definitions.
The example defines two electron lenses hel1 and hel2.
The former is a hollow e-lens, with a uniform electron density for cleaning purposes; the latter has a Gaussian electron beam profile.
The input block in <span class="ltx_text ltx_font_typewriter">fort.3</span> is then given by:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
ELEN
hel1 UNIFORM 4.920e-03 6.928 4.619 1.1547 2.3093 0 0
hel2 GAUSSIAN 4.920e-03 6.928 4.619 1.1547 2.3093 0 0 0.3
NEXT
</pre>
<p class="ltx_p">The single and structure element definition in <span class="ltx_text ltx_font_typewriter">fort.2</span> is given by:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
SINGLE ELEMENTS---------------------------------------------------------
...
hel1            29   0.000000000e+00   0.000000000e+00
   0.000000000e+00    0.000000000e+00    0.000000000e+00    0.000000000e+00
hel2            29   0.000000000e+00   0.000000000e+00
   0.000000000e+00    0.000000000e+00    0.000000000e+00    0.000000000e+00
...
STRUCTURE INPUT---------------------------------------------------------
...
BLOC56            hel1              hel2
...
</pre>
</div>
<div id="Ch4.S9.SS1.SSS0.Px2.p3" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Note:</span> All parameters except for the type are set to 0 in the single element definition.</p>
</div>
</section>
</section>
<section id="Ch4.S10" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4.10 </span>Scattering</h3>
<div id="Ch4.S10.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold" style="color:#B30000;">Note:<span class="ltx_text ltx_font_medium"> This module is experimental! Use at your own risk; both the input format and physics implementation may change.</span></span></p>
</div>
<div id="Ch4.S10.p2" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">The <span class="ltx_text ltx_font_typewriter">SCATTER</span> module is a framework for scattering particles through Monte Carlo processes at various points in the machine.</p>
</div>
<div id="Ch4.S10.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">SCAT(TER)</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">There are several different main statement classes possible in a <span class="ltx_text ltx_font_typewriter">SCATTER</span> block, listed below.</td>
</tr>
</tbody>
</table>
</div>
<div id="Ch4.S10.p4" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p">Lines starting with “/” are treated as a comment and ignored</p>
</div>
<section id="Ch4.S10.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">DEBUG</h5>
<div id="Ch4.S10.SS1.SSS0.Px1.p1" class="ltx_para">
<p class="ltx_p">
            <span class="ltx_text ltx_font_typewriter">DEBUG
<br class="ltx_break"></span>
          </p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px1.p2" class="ltx_para">
<p class="ltx_p">This statement switches on extra “debugging” output from <span class="ltx_text ltx_font_typewriter">SCATTER</span>.
This can be useful if debugging the code or if debugging the input.</p>
</div>
</section>
<section id="Ch4.S10.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">ELEMent</h5>
<div id="Ch4.S10.SS1.SSS0.Px2.p1" class="ltx_para">
<p class="ltx_p">
            <span class="ltx_text ltx_font_typewriter">ELEM elemname profile scaling gen1 (gen2, (gen3))
<br class="ltx_break"></span>
          </p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">This statements associates a <span class="ltx_text ltx_font_typewriter">PRO</span>file and between one and 3<span class="ltx_note ltx_role_footnote"><sup class="ltx_note_mark">2</sup><span class="ltx_note_outer"><span class="ltx_note_content"><sup class="ltx_note_mark">2</sup>Controlled by the parameter <span class="ltx_text ltx_font_typewriter">scatter_maxGenELEM</span>.</span></span></span> <span class="ltx_text ltx_font_typewriter">GEN</span>erators with a SINGLE ELEMENT which must be of type 40, as described in Section <a href="#Ch3.S1.SS13" title="3.1.13 Scattering point ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.13</span></a>.
The <span class="ltx_text ltx_font_typewriter">scaling</span> argument, which is a floating point number, is used to scale the probability of an interaction.
This can be controlled through DYNK, for example in order to scale only at one specified turn.
The <span class="ltx_text ltx_font_typewriter">PRO</span>file, <span class="ltx_text ltx_font_typewriter">GEN</span>erator(s), and single elements are referenced through their names, and for the <span class="ltx_text ltx_font_typewriter">GEN</span>erators and <span class="ltx_text ltx_font_typewriter">PRO</span>file they must be defined above the <span class="ltx_text ltx_font_typewriter">ELEM</span>ent in the <span class="ltx_text ltx_font_typewriter">SCATTER</span> block.</p>
</div>
</section>
<section id="Ch4.S10.SS1.SSS0.Px3" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">PROfile</h5>
<div id="Ch4.S10.SS1.SSS0.Px3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">PRO name type (arguments)</span>
<br class="ltx_break"></p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px3.p2" class="ltx_para">
<p class="ltx_p">This statement defines a profile, that is a density profile and general properties of the targets which with the tracked particles are colliding.
Several different types are available:</p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px3.p3" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p">
            <span class="ltx_text ltx_font_typewriter">PRO name FLAT density[targets/cm<math id="Ch4.S10.SS1.SSS0.Px3.p3.m1" class="ltx_Math" alttext="{}^{2}" display="inline"><msup><mi></mi><mn mathvariant="normal">2</mn></msup></math>] mass[MeV/c<math id="Ch4.S10.SS1.SSS0.Px3.p3.m2" class="ltx_Math" alttext="{}^{2}" display="inline"><msup><mi></mi><mn mathvariant="normal">2</mn></msup></math>] momentum[MeV/c]
<br class="ltx_break"></span>
          </p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px3.p4" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">PRO name GAUSS1 beamtot[particles] sigmaX[mm] sigmaY[mm] offsetX[mm] offsetY[mm]</span>
<br class="ltx_break"></p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px3.p5" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_typewriter">GAUSS1</span> profile type us given by</p>
<table id="A4.S2.EGx8" class="ltx_equationgroup ltx_eqn_align">
<tr id="Ch4.E2" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="Ch4.E2.m1" class="ltx_Math" alttext="\displaystyle\rho(x,y)=\frac{N_{\mathrm{tot}}}{2\pi\sigma_{x}\sigma_{y}}\exp%
\left(-\frac{(x-\mu_{x})^{2}}{2\sigma_{x}^{2}}\right)\exp\left(-\frac{(y-\mu_{%
y})^{2}}{2\sigma_{y}^{2}}\right)." display="inline"><mrow><mrow><mrow><mi>ρ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM168">x</mi><mo>,</mo><mi id="XM169">y</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>N</mi><mi>tot</mi></msub><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><msub><mi>σ</mi><mi>x</mi></msub><mo>⁢</mo><msub><mi>σ</mi><mi>y</mi></msub></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mi id="XM170">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM171"><mo>-</mo><mstyle displaystyle="true"><mfrac><msup><mrow><mo stretchy="false">(</mo><mrow id="XM166"><mi>x</mi><mo>-</mo><msub><mi>μ</mi><mi>x</mi></msub></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mrow><mn>2</mn><mo>⁢</mo><msubsup><mi>σ</mi><mi>x</mi><mn>2</mn></msubsup></mrow></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow><mo>⁢</mo><mrow><mi id="XM172">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM173"><mo>-</mo><mstyle displaystyle="true"><mfrac><msup><mrow><mo stretchy="false">(</mo><mrow id="XM167"><mi>y</mi><mo>-</mo><msub><mi>μ</mi><mi>y</mi></msub></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mrow><mn>2</mn><mo>⁢</mo><msubsup><mi>σ</mi><mi>y</mi><mn>2</mn></msubsup></mrow></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(4.2)</span></td>
</tr>
</table>
</div>
</section>
<section id="Ch4.S10.SS1.SSS0.Px4" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">GENerator</h5>
<div id="Ch4.S10.SS1.SSS0.Px4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">GEN name type (arguments)</span>
<br class="ltx_break"></p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px4.p2" class="ltx_para">
<p class="ltx_p">The generator block takes a name and a generator type input, followed by the parameters for the
generator type.</p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px4.p3" class="ltx_para ltx_noindent">
<br class="ltx_break">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">GEN name PPBEAMELASTIC a b1 b2 phi tmin (crossSection)</span>
<br class="ltx_break"></p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px4.p4" class="ltx_para">
<p class="ltx_p">Takes five or six input arguments, and generates the probability distribution given by</p>
<table id="A4.S2.EGx9" class="ltx_equationgroup ltx_eqn_align">
<tr id="Ch4.E3" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="Ch4.E3.m1" class="ltx_Math" alttext="\displaystyle g(t)=\frac{1}{a_{1}^{2}}\frac{d\sigma}{dt}=e^{-b_{1}t}+2ae^{-(b_%
{1}+b_{2})t/2}\cos{\phi}+a^{2}e^{-b_{2}t}," display="inline"><mrow><mrow><mrow><mi>g</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM177">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><msubsup><mi>a</mi><mn>1</mn><mn>2</mn></msubsup></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mi>d</mi><mo>⁢</mo><mi>σ</mi></mrow><mrow><mi>d</mi><mo>⁢</mo><mi>t</mi></mrow></mfrac></mstyle></mrow><mo>=</mo><mrow><msup><mi>e</mi><mrow><mo>-</mo><mrow><msub><mi>b</mi><mn>1</mn></msub><mo>⁢</mo><mi>t</mi></mrow></mrow></msup><mo>+</mo><mrow><mn>2</mn><mo>⁢</mo><mi>a</mi><mo>⁢</mo><msup><mi>e</mi><mrow><mo>-</mo><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM176"><msub><mi>b</mi><mn>1</mn></msub><mo>+</mo><msub><mi>b</mi><mn>2</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi>t</mi></mrow><mo>/</mo><mn>2</mn></mrow></mrow></msup><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow><mo>+</mo><mrow><msup><mi>a</mi><mn>2</mn></msup><mo>⁢</mo><msup><mi>e</mi><mrow><mo>-</mo><mrow><msub><mi>b</mi><mn>2</mn></msub><mo>⁢</mo><mi>t</mi></mrow></mrow></msup></mrow></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(4.3)</span></td>
</tr>
</table>
<p class="ltx_p">where the first expression is a soft scatter data fit, the third expression a hard scatter fit, and the second expression is the interference. <math id="Ch4.S10.SS1.SSS0.Px4.p4.m1" class="ltx_Math" alttext="a=a_{2}/a_{1}" display="inline"><mrow><mi>a</mi><mo>=</mo><mrow><msub><mi>a</mi><mn>2</mn></msub><mo>/</mo><msub><mi>a</mi><mn>1</mn></msub></mrow></mrow></math> is the amplitudes of the expressions. These are combined into the first four input arguments <math id="Ch4.S10.SS1.SSS0.Px4.p4.m2" class="ltx_Math" alttext="a" display="inline"><mi>a</mi></math>, <math id="Ch4.S10.SS1.SSS0.Px4.p4.m3" class="ltx_Math" alttext="b_{1}" display="inline"><msub><mi>b</mi><mn>1</mn></msub></math>, <math id="Ch4.S10.SS1.SSS0.Px4.p4.m4" class="ltx_Math" alttext="b_{2}" display="inline"><msub><mi>b</mi><mn>2</mn></msub></math>, and <math id="Ch4.S10.SS1.SSS0.Px4.p4.m5" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math>, as well as <math id="Ch4.S10.SS1.SSS0.Px4.p4.m6" class="ltx_Math" alttext="t_{min}" display="inline"><msub><mi>t</mi><mrow><mi>m</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>n</mi></mrow></msub></math> which provides a cut-off limit.
The optional sixth argument defines a fixed cross section for the scattering probability.</p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px4.p5" class="ltx_para">
<p class="ltx_p">Input example with values for a fit to 13 TeV LHC.</p>
<pre class="ltx_verbatim ltx_font_typewriter">
GEN  sc_thin     PPBEAMELASTIC 0.046 18.52 4.601 2.647 0.0 30e-27
</pre>
</div>
</section>
<section id="Ch4.S10.SS1.SSS0.Px5" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">SEED</h5>
<div id="Ch4.S10.SS1.SSS0.Px5.p1" class="ltx_para">
<p class="ltx_p">
            <span class="ltx_text ltx_font_typewriter">SEED seed1 seed2
<br class="ltx_break"></span>
          </p>
</div>
<div id="Ch4.S10.SS1.SSS0.Px5.p2" class="ltx_para">
<p class="ltx_p">This sets the seed of the internal RNG used by the <span class="ltx_text ltx_font_typewriter">SCATTER</span> block <cite class="ltx_cite">[<a href="#bib.bib25" title="" class="ltx_ref">25</a>]</cite>.
Two integer seeds are required, for this block.
The <span class="ltx_text ltx_font_typewriter">SEED</span> block is mandatory for the <span class="ltx_text ltx_font_typewriter">SCATTER</span> block to work.
Note that when running several simulations, the seed settings must be varied between each run in order to get uncorrelated results.</p>
<div class="ltx_pagination ltx_role_newpage"></div>
</div>
</section>
</section>
</section>
<section id="Ch5" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 5 </span>Organising Tasks</h2>
<div id="Ch5.p1" class="ltx_para">
<p class="ltx_p">In this chapter, the input data blocks used to organise the input structure are described.</p>
</div>
<section id="Ch5.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">5.1 </span>Random Fluctuation Starting Number</h3>
<div id="Ch5.S1.p1" class="ltx_para">
<p class="ltx_p">If besides mean values for the multipole errors (Gaussian) random errors should be considered, this input data structure is used to set the start value for the random generator.</p>
</div>
<div id="Ch5.S1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">FLUC</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">izu0 mmac mout mcut</span> (integers)</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch5.S1.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch5.S1.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">izu0</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Start value for the random number generator</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">mmac</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                  <span class="ltx_text" style="color:#B30000;">Disabled for the time being, i.e. <span class="ltx_text ltx_font_typewriter">mmac</span> is fixed to be 1</span>
                </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">In the vectorised version the number of different starting seeds can be varied. Each seed is calculated as <math id="Ch5.S1.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="k\times izu0" display="inline"><mrow><mrow><mi>k</mi><mo>×</mo><mi>i</mi></mrow><mo>⁢</mo><mi>z</mi><mo>⁢</mo><mi>u</mi><mo>⁢</mo><mn>0</mn></mrow></math> where <math id="Ch5.S1.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="k" display="inline"><mi>k</mi></math> runs from 1 to <span class="ltx_text ltx_font_typewriter">mmac</span> which can not exceed 5 to save storage space (see list of parameters in Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>).)</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">mout</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">A binary switch for various purposes, so all options, as described below, can be combined.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">mout</span> = 0 : multipole errors internally created</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">mout</span> = 1 : multipole errors read–in from external file</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">External multipole errors are read–in from file 16 into the array of random values. To activate these values one has to set to a value of 1 the relevant r.m.s.–positions of the corresponding multipole blocks (<a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>). The systematic components are added as usual and multipoles not found in the <span class="ltx_text ltx_font_typewriter">fort.16</span> are treated as for (<span class="ltx_text ltx_font_typewriter">mout</span> = 0). An error is only detected if there are too few sets of multipoles in <span class="ltx_text ltx_font_typewriter">fort.16</span>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">mout</span> = 2: the geometry and strength file is written to file <span class="ltx_text ltx_font_typewriter">fort.4</span> in the same format as the input file <span class="ltx_text ltx_font_typewriter">fort.2</span>; the multipole coefficients are written to file <span class="ltx_text ltx_font_typewriter">fort.9</span>; name, misalignments and tilt is written to file <span class="ltx_text ltx_font_typewriter">fort.27</span> and finally name, random single multipole strength and both random transverse misalignments are written to file <span class="ltx_text ltx_font_typewriter">fort.31</span>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">mout</span> = 4: Name, horizontal and vertical misalignment and also the element tilt are read–in from file <span class="ltx_text ltx_font_typewriter">fort.8</span>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">mout</span> = 8: Name and 3 Random numbers for single kick strength and both random transverse misalignments and also the value of the tilt are read–in from file <span class="ltx_text ltx_font_typewriter">fort.30</span>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">mcut</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The random distribution can be cut by <span class="ltx_text ltx_font_typewriter">mcut</span> sigma of the distribution. No cuts are applied for <span class="ltx_text ltx_font_typewriter">mcut = 0</span>.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch5.S1.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch5.S1.SS1.SSS0.Px2.p1" class="ltx_para">
<ol id="Ch5.I1" class="ltx_enumerate">
<li id="Ch5.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch5.I1.i1.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_typewriter">RANECU</span> random generator <cite class="ltx_cite">[<a href="#bib.bib25" title="" class="ltx_ref">25</a>]</cite> is used as it produces machine independent sequences of random numbers.</p>
</div>
</li>
<li id="Ch5.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch5.I1.i2.p1" class="ltx_para">
<p class="ltx_p">If the starting point has to be changed or another non-linear element is to be inserted, this can be done without changing the once chosen random distribution of errors by using the <span class="ltx_text ltx_font_italic">Organisation of Random Numbers</span> input block.</p>
</div>
</li>
<li id="Ch5.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch5.I1.i3.p1" class="ltx_para">
<p class="ltx_p">The description of an accelerator is fully contained in 4 files: <span class="ltx_text ltx_font_typewriter">fort.2</span> (geometry), <span class="ltx_text ltx_font_typewriter">fort.3</span> (tracking parameters and definition of multipole blocks), <span class="ltx_text ltx_font_typewriter">fort.16</span> (multipole errors) and <span class="ltx_text ltx_font_typewriter">fort.30</span> (random numbers of the single multipole kick, the horizontal and vertical misalignment and the value of the tilt). This block allows to write out the files <span class="ltx_text ltx_font_typewriter">fort.4</span>, <span class="ltx_text ltx_font_typewriter">fort.9</span>, <span class="ltx_text ltx_font_typewriter">fort.27</span>, <span class="ltx_text ltx_font_typewriter">fort.31</span> which may serve as the input files <span class="ltx_text ltx_font_typewriter">fort.2</span>, <span class="ltx_text ltx_font_typewriter">fort.16</span>, <span class="ltx_text ltx_font_typewriter">fort.8</span> and <span class="ltx_text ltx_font_typewriter">fort.30</span> respectively. The file <span class="ltx_text ltx_font_typewriter">fort.30</span> supersedes <span class="ltx_text ltx_font_typewriter">fort.8</span> if both files are read in.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch5.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">5.2 </span>Organisation of Random Numbers</h3>
<div id="Ch5.S2.p1" class="ltx_para">
<p class="ltx_p">Working on a lattice for an accelerator often requires to introduce new non-linear elements.
In those cases simply introducing this new element means that the previously chosen random distribution of the errors will be changed and with it often the linear parameters.
This input data block is mainly used to avoid this problem by reserving extra random numbers for the new elements.
It also allows to change the observation point without affecting the machine.
The random values of different nonlinear elements including blocks of multipoles can be set to be equal to allow to vary the number of nonlinear kicks in one magnet which clearly should have the same random distribution for each multipolar kick.
Finally, multipole sets with different name can be made equal with this input data block.</p>
</div>
<div id="Ch5.S2.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">ORGA</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">ele1 ele2 ele3</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The data lines can be set in three different ways described below.</td>
</tr>
</tbody>
</table>
</div>
<div id="Ch5.S2.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">Method 1</th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">Ele1</span> = “name” where name <math id="Ch5.S2.p3.m1" class="ltx_Math" alttext="\neq" display="inline"><mo>≠</mo></math> <span class="ltx_text ltx_font_typewriter">MULT</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">Ele2</span> = ignored</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">Ele3</span> = ignored</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The nonlinear element or multipole set will have its own set of random numbers.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">Method 2</th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">Ele1</span> = “name1” where name1 <math id="Ch5.S2.p3.m2" class="ltx_Math" alttext="\neq" display="inline"><mo>≠</mo></math> <span class="ltx_text ltx_font_typewriter">MULT</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">Ele2</span> = “name2”</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">Ele3</span> = ignored</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The nonlinear element or multipole block <span class="ltx_text ltx_font_typewriter">Ele1</span> has the same random number set as those of <span class="ltx_text ltx_font_typewriter">Ele2</span>, if it follows <span class="ltx_text ltx_font_typewriter">Ele2</span> as the first non-linear element in the structure list ( <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>).</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">Method 3</th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">Ele1</span> = <span class="ltx_text ltx_font_typewriter">MULT</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">Ele2</span> = “name2”</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
<span class="ltx_text ltx_font_typewriter">Ele3</span> = “name3”</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">The multipole set “name3” is set to the values of the set “name2”. random errors are not influenced in this case.</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch5.S2.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch5.S2.SS1.SSS0.Px1.p1" class="ltx_para">
<ol id="Ch5.I2" class="ltx_enumerate">
<li id="Ch5.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch5.I2.i1.p1" class="ltx_para">
<p class="ltx_p">A simple change of the starting point, by placing a <span class="ltx_text ltx_font_typewriter">GO</span> somewhere in structure, used to change the machine optics as the random numbers were shifted, too. Simply calling this block even without a data line, will always fix the sequence of random numbers to start at the first multipole in the structure.</p>
</div>
</li>
<li id="Ch5.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch5.I2.i2.p1" class="ltx_para">
<p class="ltx_p">This input data block must follow the definition of the multipole block, otherwise multipoles cannot be set equal (option 3).</p>
</div>
</li>
<li id="Ch5.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch5.I2.i3.p1" class="ltx_para">
<p class="ltx_p">Do not use the keyword <span class="ltx_text ltx_font_typewriter">MULT</span> in the single element list (<a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>).</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch5.S3" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">5.3 </span>Combination of Elements</h3>
<div id="Ch5.S3.p1" class="ltx_para">
<p class="ltx_p">It is often necessary to use several families of magnetic elements with a certain ratio <math id="Ch5.S3.p1.m1" class="ltx_Math" alttext="R" display="inline"><mi>R</mi></math> of magnetic strength to perform corrections like tune adjustment (<a href="#Ch6.S2" title="6.2 Tune Variation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.2</span></a>), chromaticity correction (<a href="#Ch6.S3" title="6.3 Chromaticity Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.3</span></a>) or resonance compensation (<a href="#Ch6.S8" title="6.8 Resonance Compensation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.8</span></a>).
The <span class="ltx_text ltx_font_italic">Combination of Elements</span> input block allows such a combination of elements.
The maximum number of elements is defined by the parameter <span class="ltx_text ltx_font_typewriter">NCOM</span> (see Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>).</p>
</div>
<div id="Ch5.S3.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">COMB</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Variable</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">e0 R1 e1 … Rn en</span>
              </td>
</tr>
</tbody>
</table>
</div>
<section id="Ch5.S3.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch5.S3.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">e0</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Reference element which appears in the input of the processing procedure</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">e1, …, en</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Elements to be combined with <span class="ltx_text ltx_font_typewriter">e0</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Rj</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Ratio of the magnetic strength of element <span class="ltx_text ltx_font_typewriter">ej</span> to that of element <span class="ltx_text ltx_font_typewriter">e0</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
</section>
</section>
<section id="Ch6" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 6 </span>Processing</h2>
<div id="Ch6.p1" class="ltx_para">
<p class="ltx_p">This chapter comprises all the input blocks that do some kind of pre– or post–processing.</p>
</div>
<section id="Ch6.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.1 </span>Linear Optics Calculation</h3>
<div id="Ch6.S1.p1" class="ltx_para">
<p class="ltx_p">The linear optics calculation input block is used to make a print-out of all linear parameters (magnet lengths, <math id="Ch6.S1.p1.m1" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math> and <math id="Ch6.S1.p1.m2" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math> functions, tunes, dispersion and closed orbit) in the horizontal and vertical planes at the end of each element or linear block.
The number of elements or blocks can be chosen.</p>
</div>
<div id="Ch6.S1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">LINE</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <math id="Ch6.S1.p2.m1" class="ltx_Math" alttext="\geq 1" display="inline"><mrow><mi></mi><mo>≥</mo><mn>1</mn></mrow></math>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">First line: <span class="ltx_text ltx_font_typewriter">mode num_blocks ilin ntco E_I E_II</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Other lines: <span class="ltx_text ltx_font_typewriter">name(1), …, name(nlin)</span>
</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S1.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S1.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">mode</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">ELEMENT</span> for a printout after each single element (<a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">BLOCK</span> for a printout after each structure block (<a href="#Ch3.S2" title="3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">num_blocks</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">The number of the blocks in the structure to which the linear parameter will be printed. If this number is set to zero or is larger than the number of blocks, the complete structure will be calculated.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ilin</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Logical switch to calculate the traditional linear optics calculation in 4D (<span class="ltx_text ltx_font_typewriter">1 = ilin</span>) and with the DA approach 6D (<span class="ltx_text ltx_font_typewriter">2 = ilin</span>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ntco</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">A switch to write out linear coupling parameters.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">ntco = 0</span>: no write-out.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">ntco <math id="Ch6.S1.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="\neq" display="inline"><mo mathvariant="normal">≠</mo></math> 0</span>: write-out of all linear coupled (4D) parameters including the coupling angle. These parameters (name, longitudinal position, the phase advances at that location, 4 <math id="Ch6.S1.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>–, <math id="Ch6.S1.SS1.SSS0.Px1.p1.m3" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math>– and <math id="Ch6.S1.SS1.SSS0.Px1.p1.m4" class="ltx_Math" alttext="\gamma" display="inline"><mi>γ</mi></math>–functions, 4 angles for coordinates and momenta respectively, plus the coupling angle [rad]) are written in ascii format on file <span class="ltx_text ltx_font_typewriter">fort.11</span>. This write-out happens every <span class="ltx_text ltx_font_typewriter">ntco</span> turns.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">E_I, E_II</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">The two eigen-emittances to be chosen to determine the coupling angle. They are typically set to be equal.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">names</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">For <span class="ltx_text ltx_font_typewriter">nlin <math id="Ch6.S1.SS1.SSS0.Px1.p1.m5" class="ltx_Math" alttext="\leq" display="inline"><mo mathvariant="normal">≤</mo></math> nele</span> element and block names the linear parameters are printed whenever they appear in the accelerator structure.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch6.S1.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch6.S1.SS1.SSS0.Px2.p1" class="ltx_para">
<ul id="Ch6.I1" class="ltx_itemize">
<li id="Ch6.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I1.i1.p1" class="ltx_para">
<p class="ltx_p">To make this block work the Tracking Parameter block ( <a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>) has to used as well.</p>
</div>
</li>
<li id="Ch6.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I1.i2.p1" class="ltx_para">
<p class="ltx_p">When the <span class="ltx_text ltx_font_typewriter">ELEMENT 0</span> option is used, a file <span class="ltx_text ltx_font_typewriter">fort.34</span> is written with the longitudinal position, name, element type, multipole strength, <math id="Ch6.I1.i2.p1.m1" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math> functions and phase advances in the horizontal and vertical phase space respectively. This file is used as input for the <span class="ltx_text ltx_font_typewriter">SODD</span> program <cite class="ltx_cite">[<a href="#bib.bib21" title="" class="ltx_ref">21</a>]</cite> to calculate de-tuning and distortion terms in first and second order. A full program suite can be found at: /afs/cern.ch/group/si/slap/share/sodd</p>
</div>
</li>
<li id="Ch6.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I1.i3.p1" class="ltx_para">
<p class="ltx_p">If the <span class="ltx_text ltx_font_typewriter">BLOCK</span> option has been used, the tunes may be wrong by a multiple of 1/2. This option is not active in the DA part (<span class="ltx_text ltx_font_typewriter">2 = ilin</span>), which also ignores the (<span class="ltx_text ltx_font_typewriter">NTCO</span>) option.</p>
</div>
</li>
</ul>
</div>
</section>
</section>
<section id="Ch6.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.2 </span>Tune Variation</h3>
<div id="Ch6.S2.p1" class="ltx_para">
<p class="ltx_p">This input block initializes a tune adjustment with zero length quadrupoles.
This is normally done with two families of focusing and defocusing quadrupoles.
It may be necessary, however, to have a fixed phase advance between certain positions in the machine.
This can be done with this block by splitting the corresponding family into two sub–families which then are adjusted to give the desired phase advance.</p>
</div>
<div id="Ch6.S2.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">TUNE</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">2 or 4</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 1: <span class="ltx_text ltx_font_typewriter">name1 Qx iqmod6</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 2: <span class="ltx_text ltx_font_typewriter">name2 Qy</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 3 (optional): <span class="ltx_text ltx_font_typewriter">name3 <math id="Ch6.S2.p2.m1" class="ltx_Math" alttext="\Delta Q" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo mathvariant="monospace">⁢</mo><mi>Q</mi></mrow></math></span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 4 (optional): <span class="ltx_text ltx_font_typewriter">name4 name5</span>
</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S2.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S2.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name1, name2</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Names of focusing and defocusing quadrupole families respectively (in the single element list ( <a href="#Ch3.S1.SS1" title="3.1.1 Linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.1</span></a>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Qx, Qy</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Horizontal and vertical tune <em class="ltx_emph">including</em> the integer part.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">iqmod6</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Logical switch to calculate the tunes in the traditional manner (<span class="ltx_text ltx_font_typewriter">1 = iqmod6</span>) and with the DA approach including the beam-beam kick (<span class="ltx_text ltx_font_typewriter">2 = iqmod6</span>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name3</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Name of the second sub–family, where the first sub–family is one of the above (<span class="ltx_text ltx_font_typewriter">name1</span> or <span class="ltx_text ltx_font_typewriter">name2</span>). This second sub–family replaces the elements of the first sub–family between the positions marked by <span class="ltx_text ltx_font_typewriter">name4</span> and <span class="ltx_text ltx_font_typewriter">name5</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <math id="Ch6.S2.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="\Delta Q" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>Q</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Extra phase advance <em class="ltx_emph">including</em> the integer part (horizontal or vertical depending on the first sub–family) between the positions in the machine marked by <span class="ltx_text ltx_font_typewriter">name4</span> and <span class="ltx_text ltx_font_typewriter">name5</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name4, name5</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Two markers in the machine for the phase advance <math id="Ch6.S2.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="\Delta Q" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>Q</mi></mrow></math> with the elements of the second sub–family between them</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch6.S2.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch6.S2.SS1.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch6.S2.SS1.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">The integer has to be included as the full phase advance around the machine is calculated by the program.
</p>
</div>
</section>
</section>
<section id="Ch6.S3" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.3 </span>Chromaticity Correction</h3>
<div id="Ch6.S3.p1" class="ltx_para">
<p class="ltx_p">The chromaticity can be adjusted to desired values with two sextupole family using this input block.</p>
</div>
<div id="Ch6.S3.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">CHRO</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 1: <span class="ltx_text ltx_font_typewriter">name1 <math id="Ch6.S3.p2.m1" class="ltx_Math" alttext="Q^{\prime}_{x}" display="inline"><msubsup><mi>Q</mi><mi>x</mi><mo mathvariant="normal">′</mo></msubsup></math> ichrom</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 2: <span class="ltx_text ltx_font_typewriter">name2 <math id="Ch6.S3.p2.m2" class="ltx_Math" alttext="Q^{\prime}_{y}" display="inline"><msubsup><mi>Q</mi><mi>y</mi><mo mathvariant="normal">′</mo></msubsup></math></span>
</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S3.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S3.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name1, name2</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Names (in the single element list (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>) of the two sextupole families.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <math id="Ch6.S3.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="Q^{\prime}" display="inline"><msup><mi>Q</mi><mo>′</mo></msup></math>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Desired values of the chromaticity: <math id="Ch6.S3.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="Q^{\prime}=\frac{\delta Q}{\delta(\frac{\Delta p}{p_{o}})}" display="inline"><mrow><msup><mi>Q</mi><mo>′</mo></msup><mo>=</mo><mfrac><mrow><mi>δ</mi><mo>⁢</mo><mi>Q</mi></mrow><mrow><mi>δ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mfrac id="XM178"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac><mo stretchy="false">)</mo></mrow></mrow></mfrac></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ichrom</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Logical switch to calculate the traditional chromaticity calculation (<span class="ltx_text ltx_font_typewriter">1 = ichrom</span>) and with the DA approach including the beam-beam kick (<span class="ltx_text ltx_font_typewriter">2 = ichrom</span>).</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch6.S3.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch6.S3.SS1.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch6.S3.SS1.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">To make the chromaticity correction work well a small momentum spread is required (<span class="ltx_text ltx_font_typewriter">DE0</span> in table (<a href="#Ch2.T1" title="Table 2.1 ‣ 2.4 Iteration Errors ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.1</span></a>)).
It sometimes is required to optimize this spread.</p>
</div>
</section>
</section>
<section id="Ch6.S4" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.4 </span>Orbit Correction</h3>
<div id="Ch6.S4.p1" class="ltx_para">
<p class="ltx_p">Due to dipole errors in a real accelerator, a closed orbit different from the beam axis is unavoidable.
Even after careful adjustment, one always will be left over with some random deviation of the closed orbit around the zero position.
A closed orbit is introduced by non-zero strengths of <math id="Ch6.S4.p1.m1" class="ltx_Math" alttext="b_{1}" display="inline"><msub><mi>b</mi><mn>1</mn></msub></math> and <math id="Ch6.S4.p1.m2" class="ltx_Math" alttext="a_{1}" display="inline"><msub><mi>a</mi><mn>1</mn></msub></math> components of the multipole block (<a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>), horizontal and vertical dipole kicks (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>), or displacements of non-linear elements (<a href="#Ch3.S2.SS2" title="3.2.2 Displacement of Elements ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>).
This input data block allows the correction of a such a random distributed closed orbit using he first two types in a “most effective corrector strategy” <cite class="ltx_cite">[<a href="#bib.bib26" title="" class="ltx_ref">26</a>]</cite>.
For that purpose, correctors have to be denoted by <span class="ltx_text ltx_font_typewriter">HCOR=</span> and <span class="ltx_text ltx_font_typewriter">VCOR=</span>, and monitors by <span class="ltx_text ltx_font_typewriter">HMON=</span> and <span class="ltx_text ltx_font_typewriter">VMON=</span> for the horizontal and vertical plane respectively.
After correction, the orbit is scaled to the desired r.m.s. values, unless they are zero.</p>
</div>
<div id="Ch6.S4.p2" class="ltx_para">
<p class="ltx_p">The horizontal orbit displacement, measured at the horizontal monitors, will be written to <span class="ltx_text ltx_font_typewriter">fort.28</span> – together with the monitor number, in <span class="ltx_text ltx_font_typewriter">fort.29</span>. The same is done for the vertical closed orbit displacement.</p>
</div>
<div id="Ch6.S4.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">ORBI</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <math id="Ch6.S4.p3.m1" class="ltx_Math" alttext="\geq 1" display="inline"><mrow><mi></mi><mo>≥</mo><mn>1</mn></mrow></math>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">First line: <span class="ltx_text ltx_font_typewriter">sigmax sigmay ncorru ncorrep</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Other lines: <span class="ltx_text ltx_font_typewriter">HCOR=namec</span>, <span class="ltx_text ltx_font_typewriter">HMON=namem</span>, <span class="ltx_text ltx_font_typewriter">VCOR=namec</span> or <span class="ltx_text ltx_font_typewriter">VMON=namem</span>.</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S4.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S4.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">sigmax, sigmay</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Desired r.m.s.–values of the randomly distributed closed orbit.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ncorru</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Number of correctors to be used.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ncorrep</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Number of corrections.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">If <span class="ltx_text ltx_font_typewriter">ncorrep=0</span>, the correction is iterated until <span class="ltx_text ltx_font_typewriter">ITCO</span> iterations or after the both desired r.m.s.–values have been reached (see table <a href="#Ch2.T1" title="Table 2.1 ‣ 2.4 Iteration Errors ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.1</span></a>).</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">HCOR=namec</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Horizontal correction element of name <span class="ltx_text ltx_font_typewriter">namec</span>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">HMON=namem</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Horizontal monitor for the closed orbit of name <span class="ltx_text ltx_font_typewriter">namem</span>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">VCOR=namec</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Vertical correction element of name <span class="ltx_text ltx_font_typewriter">namec</span>.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">VMON=namem</span>
                </th>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Vertical monitor for the closed orbit of name <span class="ltx_text ltx_font_typewriter">namem</span>.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch6.S4.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch6.S4.SS1.SSS0.Px2.p1" class="ltx_para">
<ul id="Ch6.I2" class="ltx_itemize">
<li id="Ch6.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I2.i1.p1" class="ltx_para">
<p class="ltx_p">Elements can have only one extra functionality: either horizontal corrector, horizontal monitor, vertical corrector or vertical monitor. If the number of monitors in a plane is smaller than the number of correctors it is likely to encounter numerical problems.</p>
</div>
</li>
<li id="Ch6.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I2.i2.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_typewriter">HCOR=</span>, <span class="ltx_text ltx_font_typewriter">HMON=</span>, <span class="ltx_text ltx_font_typewriter">VCOR=</span>, and <span class="ltx_text ltx_font_typewriter">VMON=</span> must be separated from the following name by at least one space.</p>
</div>
</li>
</ul>
</div>
</section>
</section>
<section id="Ch6.S5" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.5 </span>Decoupling of Motion in the Transverse Planes</h3>
<div id="Ch6.S5.p1" class="ltx_para">
<p class="ltx_p">Skew–quadrupole components in the lattice create a linear coupling between the transverse planes of motion.
A decoupling can be achieved with this block using four independent families of skew–quadrupoles, which cancel the off–diagonal parts of the transfer map.
As these skew–quadrupoles also influence the tunes an adjustment of the tunes is performed at the same time.
</p>
</div>
<div id="Ch6.S5.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">DECO</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">3</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 1: <span class="ltx_text ltx_font_typewriter">name1,name2,name3,name4</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 2: <span class="ltx_text ltx_font_typewriter">name5 Qx</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 3: <span class="ltx_text ltx_font_typewriter">name6 Qy</span>
</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S5.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S5.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name1,2,3,4</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Names of the four skew–quadrupole families.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name5,6</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Names of focusing and defocusing quadrupole families respectively (in the single element list (<a href="#Ch3.S1.SS1" title="3.1.1 Linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.1</span></a>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Qx, Qy</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Horizontal and vertical tune <em class="ltx_emph">including</em> the integer part.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch6.S5.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch6.S5.SS1.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch6.S5.SS1.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">A decoupling can also be achieved by compensating skew–resonances (<a href="#Ch6.S8" title="6.8 Resonance Compensation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.8</span></a>).
The two approaches, however, are not always equivalent.
In the resonance approach the zeroth harmonic is compensated, whilst a decoupling also takes into account the higher–order terms.</p>
</div>
</section>
</section>
<section id="Ch6.S6" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.6 </span>Sub–resonance Calculation</h3>
<div id="Ch6.S6.p1" class="ltx_para">
<p class="ltx_p">First order resonance widths of multipoles from second to ninth order are calculated following the approach of Guignard <cite class="ltx_cite">[<a href="#bib.bib10" title="" class="ltx_ref">10</a>]</cite>.
This includes resonances, which are a multiple of two lower than the order of the multipole.
The first order detuning including feed–down from closed orbit is calculated from all multipoles up to to tenth order.</p>
</div>
<div id="Ch6.S6.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">SUBR</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">n1 n2 Qx Qy Ax Ay Ip length</span>
              </td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S6.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S6.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">n1, n2</span>
                </td>
<td class="ltx_td ltx_align_left">integers</td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Lowest and highest order of the resonance.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Qx, Qy</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Horizontal and vertical tune including the integer part.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Ax, Ay</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Horizontal and vertical amplitudes in mm.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Ip</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Is a switch to change the nearest distance to the resonance <math id="Ch6.S6.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="e=nxQx+nyQy" display="inline"><mrow><mi>e</mi><mo>=</mo><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow></mrow></math>. In cases of structure resonances a change of <math id="Ch6.S6.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="p" display="inline"><mi>p</mi></math> by one unit may be useful.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">
<span class="ltx_text ltx_font_typewriter">ip = 0</span>: <math id="Ch6.S6.SS1.SSS0.Px1.p1.m3" class="ltx_Math" alttext="e" display="inline"><mi>e</mi></math> is unchanged.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">
<span class="ltx_text ltx_font_typewriter">ip = 1</span>: <math id="Ch6.S6.SS1.SSS0.Px1.p1.m4" class="ltx_Math" alttext="(e\pm 1)=nxQx+nyQy-(p\pm 1)" display="inline"><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM179"><mi>e</mi><mo>±</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo>=</mo><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>-</mo><mrow><mo stretchy="false">(</mo><mrow id="XM180"><mi>p</mi><mo>±</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">length</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Length of the accelerator in meters</td>
</tr>
</tbody>
</table>
</div>
</section>
</section>
<section id="Ch6.S7" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.7 </span>Search for Optimum Places to Compensate Resonances</h3>
<div id="Ch6.S7.p1" class="ltx_para">
<p class="ltx_p">To be able to compensate a specific resonance, one has to know how a correcting multipole affects the cosine and sine like terms of the resonance width at a given position in the ring.
This input data block can be used to find best places for the compensation of up to three different resonances, by calculating the contribution to the resonance width for a variable number of positions.
For each position, the effect of a fixed and small change of magnetic strength on those resonance widths is tested.</p>
</div>
<div id="Ch6.S7.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">SEAR</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <math id="Ch6.S7.p2.m1" class="ltx_Math" alttext="\geq 2" display="inline"><mrow><mi></mi><mo>≥</mo><mn>2</mn></mrow></math>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 1: <span class="ltx_text ltx_font_typewriter">Qx Qy Ax Ay length</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 2: <span class="ltx_text ltx_font_typewriter">npos n ny1 ny2 ny3 ip1 ip2 ip3</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Other lines: <span class="ltx_text ltx_font_typewriter">name1, …, namen</span>
</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S7.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S7.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Qx, Qy</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Horizontal and vertical tune including the integer part.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Ax, Ay</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Horizontal and vertical amplitudes in mm.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">length</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Length of the accelerator in m.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">npos</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Number of positions to be checked.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">n</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Order of the resonance.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ny1,ny2,ny3</span>
                </td>
<td class="ltx_td ltx_align_left">integers</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Define three resonances of order <math id="Ch6.S7.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math> via:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<math id="Ch6.S7.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="nxQx+nyQy=p" display="inline"><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>=</mo><mi>p</mi></mrow></math> with <math id="Ch6.S7.SS1.SSS0.Px1.p1.m3" class="ltx_Math" alttext="|nx|+|ny|=n" display="inline"><mrow><mrow><mrow><mo stretchy="false">|</mo><mrow id="XM181"><mi>n</mi><mo>⁢</mo><mi>x</mi></mrow><mo stretchy="false">|</mo></mrow><mo>+</mo><mrow><mo stretchy="false">|</mo><mrow id="XM182"><mi>n</mi><mo>⁢</mo><mi>y</mi></mrow><mo stretchy="false">|</mo></mrow></mrow><mo>=</mo><mi>n</mi></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ip1,ip2,ip3</span>
                </td>
<td class="ltx_td ltx_align_left">integers</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">The distance to a resonance is changed by an integer <math id="Ch6.S7.SS1.SSS0.Px1.p1.m4" class="ltx_Math" alttext="ip" display="inline"><mrow><mi>i</mi><mo>⁢</mo><mi>p</mi></mrow></math> for each of the three resonances:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<math id="Ch6.S7.SS1.SSS0.Px1.p1.m5" class="ltx_Math" alttext="e=nxQx+nyQy-(p+ip)" display="inline"><mrow><mi>e</mi><mo>=</mo><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>-</mo><mrow><mo stretchy="false">(</mo><mrow id="XM183"><mi>p</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>p</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">namei</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">The i-th name of a multipole of order <math id="Ch6.S7.SS1.SSS0.Px1.p1.m6" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math>, which has to appear in the single element list (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>).</td>
</tr>
</tbody>
</table>
</div>
</section>
</section>
<section id="Ch6.S8" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.8 </span>Resonance Compensation</h3>
<div id="Ch6.S8.p1" class="ltx_para">
<p class="ltx_p">The input block allows the compensation of up to three different resonances of order <math id="Ch6.S8.p1.m1" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math> simultaneously.
The chromaticity and the tunes can be adjusted.
For mostly academic interest, there is also the possibility to consider sub–resonances, which come from multipoles, which are a multiple of 2 larger than the resonance order <math id="Ch6.S8.p1.m2" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math>.
However, it must be stated that the sub–resonances depend differently on the amplitude compared to resonances where the order of the resonances is the same as that of the multipoles.</p>
</div>
<div id="Ch6.S8.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">RESO</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">6</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 1: <span class="ltx_text ltx_font_typewriter">nr n ny1 ny2 ny3 ip1 ip2 ip3</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 2: <span class="ltx_text ltx_font_typewriter">nrs ns1 ns2 ns3</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 3: <span class="ltx_text ltx_font_typewriter">length Qx Qy Ax Ay</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 4: <span class="ltx_text ltx_font_typewriter">name1, …, name6</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 5: <span class="ltx_text ltx_font_typewriter">nch name7 name8</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 6: <span class="ltx_text ltx_font_typewriter">nq name9 name10 Qx0 Qy0</span>
</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S8.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S8.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nr</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Number of resonances (0 to 3).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">n</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Order of the resonance, which is limited to <span class="ltx_text ltx_font_typewriter">nrco= 5</span> (see list of parameters in Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>). normal: <math id="Ch6.S8.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="3\leq n\leq nrco" display="inline"><mrow><mn>3</mn><mo>≤</mo><mi>n</mi><mo>≤</mo><mrow><mi>n</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow></mrow></math>; skew: <math id="Ch6.S8.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="2\leq n\leq nrco" display="inline"><mrow><mn>2</mn><mo>≤</mo><mi>n</mi><mo>≤</mo><mrow><mi>n</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ny1,ny2,ny3</span>
                </td>
<td class="ltx_td ltx_align_left">integers</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Define three resonances of order <math id="Ch6.S8.SS1.SSS0.Px1.p1.m3" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math> via: <math id="Ch6.S8.SS1.SSS0.Px1.p1.m4" class="ltx_Math" alttext="nxQx+nyQy=p" display="inline"><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>=</mo><mi>p</mi></mrow></math> with <math id="Ch6.S8.SS1.SSS0.Px1.p1.m5" class="ltx_Math" alttext="|nx|+|ny|=n" display="inline"><mrow><mrow><mrow><mo stretchy="false">|</mo><mrow id="XM184"><mi>n</mi><mo>⁢</mo><mi>x</mi></mrow><mo stretchy="false">|</mo></mrow><mo>+</mo><mrow><mo stretchy="false">|</mo><mrow id="XM185"><mi>n</mi><mo>⁢</mo><mi>y</mi></mrow><mo stretchy="false">|</mo></mrow></mrow><mo>=</mo><mi>n</mi></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ip1,ip2,ip3</span>
                </td>
<td class="ltx_td ltx_align_left">integers</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">The distance to the resonance <math id="Ch6.S8.SS1.SSS0.Px1.p1.m6" class="ltx_Math" alttext="e" display="inline"><mi>e</mi></math> can be changed by an integer value: <math id="Ch6.S8.SS1.SSS0.Px1.p1.m7" class="ltx_Math" alttext="e=nxQx+nyQy-(p+ip)" display="inline"><mrow><mi>e</mi><mo>=</mo><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>-</mo><mrow><mo stretchy="false">(</mo><mrow id="XM186"><mi>p</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>p</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nrs</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Number of sub–resonances (0 to 3).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ns1,ns2,ns3</span>
                </td>
<td class="ltx_td ltx_align_left">integers</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Order of the multipole with <math id="Ch6.S8.SS1.SSS0.Px1.p1.m8" class="ltx_Math" alttext="ns\leq 9" display="inline"><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>s</mi></mrow><mo>≤</mo><mn>9</mn></mrow></math> and <math id="Ch6.S8.SS1.SSS0.Px1.p1.m9" class="ltx_Math" alttext="(ns-n)/2\in{\mathbf{N}}" display="inline"><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM187"><mrow><mi>n</mi><mo>⁢</mo><mi>s</mi></mrow><mo>-</mo><mi>n</mi></mrow><mo stretchy="false">)</mo></mrow><mo>/</mo><mn>2</mn></mrow><mo>∈</mo><mi>𝐍</mi></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">length</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Length of the machine in meters.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Qx, Qy</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Horizontal and vertical tune including the integer part.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Ax, Ay</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Horizontal and vertical amplitudes in mm.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name1-6</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Names (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>) of the correction multipoles for the first, second and third resonance.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nch</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Switch for the chromaticity correction (0 = off, 1 = on).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name7,8</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Names (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>) of the families of sextupoles to correct the chromaticity.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nq</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Switch for the tune adjustment (0 = off, 1 = on).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name9,10</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Names (<a href="#Ch3.S1.SS1" title="3.1.1 Linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.1</span></a>) of the families of quadrupoles to adjust the tune.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Qx0, Qy0</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Desired tune values including the integer part.</td>
</tr>
</tbody>
</table>
</div>
</section>
</section>
<section id="Ch6.S9" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.9 </span>Differential Algebra</h3>
<div id="Ch6.S9.p1" class="ltx_para">
<p class="ltx_p">This input block initiates the calculation of a one turn map using the LBL Differential Algebra package <cite class="ltx_cite">[<a href="#bib.bib1" title="" class="ltx_ref">1</a>]</cite>.
The use of this block inhibits post–processing.
The same differential algebra tools allow a subsequent normal form analysis (see <cite class="ltx_cite">[<a href="#bib.bib17" title="" class="ltx_ref">17</a>]</cite>).
A four–dimensional version integrated in SixTrack is available as described in sections <a href="#Ch6.S10" title="6.10 Normal Forms ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.10</span></a> and <a href="#Ch6.S11" title="6.11 Corrections ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.11</span></a>.</p>
</div>
<div id="Ch6.S9.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">DIFF</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">1 or 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 1: <span class="ltx_text ltx_font_typewriter">nord nvar preda nsix ncor</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 2: <span class="ltx_text ltx_font_typewriter">name(1),…,name(ncor)</span>
</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S9.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S9.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nord</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Order of the map.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nvar</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of the variables (2 to 6).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">nvar = 2,4,6</span>: two– and four–dimensional transverse motion and full six–dimensional phase space respectively.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">nvar = 5</span>: four–dimensional transverse motion plus the relative momentum deviation <math id="Ch6.S9.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac></math> as a parameter.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">preda</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Precision needed by the DA package, usually set to <span class="ltx_text ltx_font_typewriter">preda= 1e-38</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nsix</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Switch to calculate a <math id="Ch6.S9.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="5\times 6" display="inline"><mrow><mn>5</mn><mo>×</mo><mn>6</mn></mrow></math> instead of a <math id="Ch6.S9.SS1.SSS0.Px1.p1.m3" class="ltx_Math" alttext="6\times 6" display="inline"><mrow><mn>6</mn><mo>×</mo><mn>6</mn></mrow></math> map. This saves computational time and memory space, as the machine can be treated up to the cavity as five–dimensional (constant momentum ).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">nsix = 0</span>: <math id="Ch6.S9.SS1.SSS0.Px1.p1.m4" class="ltx_Math" alttext="6\times 6" display="inline"><mrow><mn>6</mn><mo>×</mo><mn>6</mn></mrow></math> map.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">nsix = 1</span>: <math id="Ch6.S9.SS1.SSS0.Px1.p1.m5" class="ltx_Math" alttext="5\times 6" display="inline"><mrow><mn>5</mn><mo>×</mo><mn>6</mn></mrow></math> map.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">(<span class="ltx_text ltx_font_typewriter ltx_font_italic">nvar</span> must be set to 6; 6D closed orbit must not be calculated, i.e. <span class="ltx_text ltx_font_typewriter">iclo6 = 0</span> (<a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>) and the map calculation is stopped once a cavity has been reached and being evaluated.)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ncor</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of zero–length elements to be additional parameters besides the transverse and/or longitudinal coordinates (i.e. two–, four–, five– or six–dimensional phase space).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name(i)</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">Ncor</span> names (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>) of zero–length elements (e.g dipole kicks, quadrupole kicks, sextupoles kicks etc.)</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch6.S9.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch6.S9.SS1.SSS0.Px2.p1" class="ltx_para">
<ul id="Ch6.I3" class="ltx_itemize">
<li id="Ch6.I3.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I3.i1.p1" class="ltx_para">
<p class="ltx_p">For <span class="ltx_text ltx_font_typewriter">nsix = 1</span>, the map can only be calculated till a cavity is reached.</p>
</div>
</li>
<li id="Ch6.I3.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I3.i2.p1" class="ltx_para">
<p class="ltx_p">If the 6D closed orbit is calculated, the <math id="Ch6.I3.i2.p1.m1" class="ltx_Math" alttext="5\times 6" display="inline"><mrow><mn>5</mn><mo>×</mo><mn>6</mn></mrow></math> map cannot be done. <span class="ltx_text ltx_font_typewriter">nsix</span> is therefore forced to 0.</p>
</div>
</li>
<li id="Ch6.I3.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I3.i3.p1" class="ltx_para">
<p class="ltx_p">If <span class="ltx_text ltx_font_typewriter">nvar</span> is set to 5, the momentum dependence is determined without the need for including a fake cavity. With other words: the linear blocks are automatically broken up into single linear elements so that the momentum dependence can be calculated.</p>
</div>
</li>
<li id="Ch6.I3.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I3.i4.p1" class="ltx_para">
<p class="ltx_p">If a DA map is needed at some longitudinal location, one just has to introduce an element denoted <span class="ltx_text ltx_font_typewriter">DAMAP</span> at that place in the structure, <span class="ltx_text ltx_font_typewriter">DAMAP</span> has also to appear as a marker (zero length, element type = 0) in the single element list (<a href="#Ch3.S1.SS2" title="3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>). This extra map is written to file <span class="ltx_text ltx_font_typewriter">fort.17</span>.</p>
</div>
</li>
</ul>
</div>
</section>
</section>
<section id="Ch6.S10" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.10 </span>Normal Forms</h3>
<div id="Ch6.S10.p1" class="ltx_para">
<p class="ltx_p">All the parameters to compute the Normal Form of a truncated one turn map are given in the <span class="ltx_text ltx_font_italic">Normal Form</span> input block.
Details on these procedures including the next block <a href="#Ch6.S11" title="6.11 Corrections ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.11</span></a> can be found in reference <cite class="ltx_cite">[<a href="#bib.bib27" title="" class="ltx_ref">27</a>]</cite>.</p>
</div>
<div id="Ch6.S10.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">NORM</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">nord nvar</span>
              </td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S10.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S10.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nord</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Order of the Normal Form.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nvar</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of variables.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch6.S10.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch6.S10.SS1.SSS0.Px2.p1" class="ltx_para">
<ul id="Ch6.I4" class="ltx_itemize">
<li id="Ch6.I4.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I4.i1.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_italic">Normal Form</span> input block has to be used in conjunction with the <span class="ltx_text ltx_font_italic">Differential Algebra</span> input block that computes the one–turn map of the accelerator.</p>
</div>
</li>
<li id="Ch6.I4.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I4.i2.p1" class="ltx_para">
<p class="ltx_p">The value of the parameter <span class="ltx_text ltx_font_typewriter">nord</span> should not exceed the order specified for the transfer map plus one.</p>
</div>
</li>
<li id="Ch6.I4.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I4.i3.p1" class="ltx_para">
<p class="ltx_p">The value of the parameter <span class="ltx_text ltx_font_typewriter">nvar</span> should be equal to the number of coordinates used to compute the map plus eventually the number of correctors specified in the <span class="ltx_text ltx_font_italic">Differential Algebra</span> input block.</p>
</div>
</li>
<li id="Ch6.I4.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I4.i4.p1" class="ltx_para">
<p class="ltx_p">the value <math id="Ch6.I4.i4.p1.m1" class="ltx_Math" alttext="1" display="inline"><mn>1</mn></math> for the off–momentum order is forbidden. This case corresponds to the linear chromaticity correction. It is in fact corrected by default when <math id="Ch6.I4.i4.p1.m2" class="ltx_Math" alttext="par1=1" display="inline"><mrow><mrow><mi>p</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mn>1</mn></mrow><mo>=</mo><mn>1</mn></mrow></math> or <math id="Ch6.I4.i4.p1.m3" class="ltx_Math" alttext="par2=2" display="inline"><mrow><mrow><mi>p</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mn>2</mn></mrow><mo>=</mo><mn>2</mn></mrow></math>.</p>
</div>
</li>
</ul>
</div>
</section>
</section>
<section id="Ch6.S11" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.11 </span>Corrections</h3>
<div id="Ch6.S11.p1" class="ltx_para">
<p class="ltx_p">All the parameters to optimise the tune–shift using a set of correctors are given in the <span class="ltx_text ltx_font_italic">Correction</span> input block.
For details see reference <cite class="ltx_cite">[<a href="#bib.bib27" title="" class="ltx_ref">27</a>]</cite>.
</p>
</div>
<div id="Ch6.S11.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">CORR</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">3</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 1: <span class="ltx_text ltx_font_typewriter">ctype ncor</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 2: <span class="ltx_text ltx_font_typewriter">name(1),…,name(ncor)</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 3: <span class="ltx_text ltx_font_typewriter">par1,…,par5</span>
</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S11.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S11.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ctype</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Correction type:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">ctype = 0</span>: order–by–order correction.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">ctype = 1</span>: global correction.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ncor</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of zero–length elements to be used as correctors in the optimisation of the tune–shift.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">name(i)</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">Ncor</span> names of zero–length elements (e.g sextupoles kicks, octupoles kicks etc.).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">par1-5</span>
                </td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Parameters for the correction. Their meaning depend on the value of <span class="ltx_text ltx_font_typewriter">ctype</span> and is explained in Table <a href="#Ch6.T1" title="Table 6.1 ‣ Format Description ‣ 6.11 Corrections ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.1</span></a>.</td>
</tr>
</tbody>
</table>
</div>
<figure id="Ch6.T1" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 6.1: </span>Tune-shift correction parameters</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                  <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Variable</span></span>
                </th>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:56.9pt;">
                  <span class="ltx_text ltx_font_typewriter" style="background-color:#B3B3FF;">par1</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:74.0pt;">
                  <span class="ltx_text ltx_font_typewriter" style="background-color:#B3B3FF;">par2</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="background-color:#B3B3FF;">par3</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="background-color:#B3B3FF;">par4</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text ltx_font_typewriter" style="background-color:#B3B3FF;">par5</span>
                </td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                  <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_bold">Type</span></span>
                </th>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:56.9pt;">
                  <span class="ltx_text" style="background-color:#D9D9FF;">integer</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:74.0pt;">
                  <span class="ltx_text" style="background-color:#D9D9FF;">integer</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text" style="background-color:#D9D9FF;">real</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text" style="background-color:#D9D9FF;">real</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <span class="ltx_text" style="background-color:#D9D9FF;">real</span>
                </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">ctype = 0</span>
                </th>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:56.9pt;">tune–shift order <math id="Ch6.T1.m1" class="ltx_Math" alttext="\leq 2" display="inline"><mrow><mi></mi><mo>≤</mo><mn>2</mn></mrow></math>
</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:74.0pt;">off–momentum order <math id="Ch6.T1.m2" class="ltx_Math" alttext="\leq 3" display="inline"><mrow><mi></mi><mo>≤</mo><mn>3</mn></mrow></math>
</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:51.2pt;">0.0</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:51.2pt;">0.0</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:51.2pt;">0.0</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">ctype = 1</span>
                </th>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:56.9pt;">
                  <math id="Ch6.T1.m3" class="ltx_Math" alttext="N_{min}\geq 2" display="inline"><mrow><msub><mi>N</mi><mrow><mi>m</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>n</mi></mrow></msub><mo>≥</mo><mn>2</mn></mrow></math>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:74.0pt;">
                  <math id="Ch6.T1.m4" class="ltx_Math" alttext="N_{max}\leq 3" display="inline"><mrow><msub><mi>N</mi><mrow><mi>m</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>x</mi></mrow></msub><mo>≤</mo><mn>3</mn></mrow></math>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <math id="Ch6.T1.m5" class="ltx_Math" alttext="\alpha_{H}" display="inline"><msub><mi>α</mi><mi>H</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <math id="Ch6.T1.m6" class="ltx_Math" alttext="\alpha_{V}" display="inline"><msub><mi>α</mi><mi>V</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:51.2pt;">
                  <math id="Ch6.T1.m7" class="ltx_Math" alttext="\delta_{0}" display="inline"><msub><mi>δ</mi><mn>0</mn></msub></math>
                </td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch6.S11.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch6.S11.SS1.SSS0.Px2.p1" class="ltx_para">
<ul id="Ch6.I5" class="ltx_itemize">
<li id="Ch6.I5.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I5.i1.p1" class="ltx_para">
<p class="ltx_p">The names of the elements specified in the <span class="ltx_text ltx_font_italic">Correction</span> input block should be grouped according to the multipole type: first sextupoles, then octupoles <math id="Ch6.I5.i1.p1.m1" class="ltx_Math" alttext="\ldots" display="inline"><mi mathvariant="normal">…</mi></math> etc.</p>
</div>
</li>
<li id="Ch6.I5.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch6.I5.i2.p1" class="ltx_para">
<p class="ltx_p">In case of order–by–order corrections, at least one of the quantities <span class="ltx_text ltx_font_typewriter">par1</span>, <span class="ltx_text ltx_font_typewriter">par2</span> has to be zero, i.e. the correction of tune–shift terms depending on both amplitude and momentum is not allowed (as stated in the previous section).</p>
</div>
</li>
</ul>
</div>
</section>
</section>
<section id="Ch6.S12" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">6.12 </span>Post–processing</h3>
<div id="Ch6.S12.p1" class="ltx_para">
<p class="ltx_p">It has been seen in the past that the tracking data hold a large amount of information which should be extracted for a thorough understanding of the nonlinear motion.
It is therefore necessary to store the tracking data turn by turn and post–process it after the tracking has been finished.
The following quantities are calculated:</p>
</div>
<div id="Ch6.S12.p2" class="ltx_para">
<ol id="Ch6.I6" class="ltx_enumerate">
<li id="Ch6.I6.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch6.I6.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Lyapunov exponent analysis:</span> This allows to decide if the motion is of regular or chaotic nature, and, in the latter case, that the particle will ultimately be lost. This is done with the following procedure:</p>
<ol id="Ch6.I6.I1" class="ltx_enumerate">
<li id="Ch6.I6.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(a)</span>
<div id="Ch6.I6.I1.i1.p1" class="ltx_para">
<p class="ltx_p">Start the analysis where the distance in phase space of the two particles reaches its minimum.</p>
</div>
</li>
<li id="Ch6.I6.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(b)</span>
<div id="Ch6.I6.I1.i2.p1" class="ltx_para">
<p class="ltx_p">Study the increase in a double logarithmic scale so that the slope in a regular case is always one, while a exponential increase stays exponential when we have chaos.</p>
</div>
</li>
<li id="Ch6.I6.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(c)</span>
<div id="Ch6.I6.I1.i3.p1" class="ltx_para">
<p class="ltx_p">Average the distance in phase space to reduce local fluctuations, as we are interested in a long range effect.</p>
</div>
</li>
<li id="Ch6.I6.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(d)</span>
<div id="Ch6.I6.I1.i4.p1" class="ltx_para">
<p class="ltx_p">Make a weighted linear fit with an increasing number of averaged values of distance in phase space, so that an exponential increase results in a slope that is larger than one and is increasing. (The weighting stresses the importance of values at large turn numbers).</p>
</div>
</li>
</ol>
</div>
</li>
<li id="Ch6.I6.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch6.I6.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Analysis of the tunes:</span> This is done either by the averaged phase advance method leading to very precise values of the horizontal and vertical tunes. An FFT analysis is also done. With the second method, one can evaluate the relative strength of resonances rather than achieve a precise tune measurement. In both cases, the nearby resonances are determined.</p>
</div>
</li>
<li id="Ch6.I6.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch6.I6.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Smear:</span> The smear of the horizontal and vertical emittances, and the sum of the emittances, are calculated in case of linearly coupled and un–coupled motion.</p>
</div>
</li>
<li id="Ch6.I6.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch6.I6.i4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Nonlinear Invariants:</span> A rough estimate of the nonlinear invariants are given.</p>
</div>
</li>
<li id="Ch6.I6.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5.</span>
<div id="Ch6.I6.i5.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Plotting:</span> The processed tracking data can be plotted in different ways:</p>
<ol id="Ch6.I6.I2" class="ltx_enumerate">
<li id="Ch6.I6.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(a)</span>
<div id="Ch6.I6.I2.i1.p1" class="ltx_para">
<p class="ltx_p">The distance of phase space as a function of amplitude.</p>
</div>
</li>
<li id="Ch6.I6.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(b)</span>
<div id="Ch6.I6.I2.i2.p1" class="ltx_para">
<p class="ltx_p">Phase space plots.</p>
</div>
</li>
<li id="Ch6.I6.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(c)</span>
<div id="Ch6.I6.I2.i3.p1" class="ltx_para">
<p class="ltx_p">Stroboscoped phase space.</p>
</div>
</li>
<li id="Ch6.I6.I2.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(d)</span>
<div id="Ch6.I6.I2.i4.p1" class="ltx_para">
<p class="ltx_p">FFT amplitudes.
</p>
</div>
</li>
</ol>
</div>
</li>
<li id="Ch6.I6.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">6.</span>
<div id="Ch6.I6.i6.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Summary:</span> The post–processing results for a complete tracking session with varying initial parameters are summarised in a table at the end of the run.</p>
</div>
</li>
</ol>
</div>
<div id="Ch6.S12.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">
                <span class="ltx_text ltx_font_typewriter">POST</span>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">4</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 1: <span class="ltx_text ltx_font_typewriter">comment title</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 2: <span class="ltx_text ltx_font_typewriter">iav nstart nstop iwg dphix dphiy iskip iconv imad cma1 cma2</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">(general parameters)</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 3: <span class="ltx_text ltx_font_typewriter">Qx0 Qy0 ivox ivoy ires dres ifh dfft</span>
</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">(parameters for the tune calculation)</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td"></th>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">Line 4: <span class="ltx_text ltx_font_typewriter">kwtype itf icr idis icow istw iffw nprint ndafi</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:346.9pt;">(integer parameters for the plotting)</td>
</tr>
</tbody>
</table>
</div>
<section id="Ch6.S12.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch6.S12.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">iav</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Averaging interval of the values of the distance in phase space. Typically a tenth of the total turn number should be used as this interval.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nstart,nstop</span>
                </td>
<td class="ltx_td ltx_align_left">integers</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Start and stop turn number for the analysis of the post–processing (0 0 = all data used).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">iwg</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Switch for the weighting of the slope calculation of the distance in phase space (0 = off, 1 = on).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">dphix,dphiy</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Horizontal and vertical angle interval in radians that is used to stroboscope phase space. This stroboscoping of one of the two phase space projections is done by restricting the angle in the other phase space respectively to lie inside <math id="Ch6.S12.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math> <span class="ltx_text ltx_font_typewriter">dphix</span> or <math id="Ch6.S12.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math> <span class="ltx_text ltx_font_typewriter">dphiy</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">iskip</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">This parameter allows to reduce the number of data to be processed: only each <span class="ltx_text ltx_font_typewriter">iskip</span> sample of data will be used.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">iconv</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">If <span class="ltx_text ltx_font_typewriter">iconv</span> is set to 1, the tracking data are not normalised linearly. Sometimes it is necessary to compare normalised to unnormalised data as the later will be found in the real machine.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">imad</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">This parameters is useful when Mad-X data shall be analysed (<span class="ltx_text ltx_font_typewriter">imad</span> set to one).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">cma1,cma2</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">To improve the Lyapunov analysis for Mad-X data, and in the case that the motion is 6D but the 6D closed orbit is not calculated the off–momentum and the path–length difference (<math id="Ch6.S12.SS1.SSS0.Px1.p1.m3" class="ltx_Math" alttext="\sigma=s-v_{o}\times t" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mi>o</mi></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>) can be scaled with <span class="ltx_text ltx_font_typewriter">cma1</span> and <span class="ltx_text ltx_font_typewriter">cma2</span> respectively (see also <a href="#Ch7.S3" title="7.3 Synchrotron Oscillation ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.3</span></a>). Please set both to 1. when the 6D closed orbit is calculated.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">Qx0, Qy0</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Values of the horizontal and vertical tune respectively (integer part) to be added to the averaged phase advance and to the <math id="Ch6.S12.SS1.SSS0.Px1.p1.m4" class="ltx_Math" alttext="Q" display="inline"><mi>Q</mi></math> values of the FFT analysis.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ivox, ivoy</span>
                </td>
<td class="ltx_td ltx_align_left">integers</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">The tunes from the average phase advance are difficult to be calculated when this phase advance is strongly changing from turn to turn and when the tune is close to 0.5, as then the phase may become negative leading to a deviation of one unit. This problem can partly be overcome by setting these switches in the following way:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">tune close to an integer: <span class="ltx_text ltx_font_typewriter">ivox, ivoy = 1</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">tune close to half an integer: <span class="ltx_text ltx_font_typewriter">ivox, ivoy = 0</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ires, dres</span>
                </td>
<td class="ltx_td ltx_align_left">int,float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">For the calculated tune values from the average phase advance method and the FFT–routine the closest resonances are searched up to <span class="ltx_text ltx_font_typewriter">ires</span>’th order and inside a maximum distance to the resonance <span class="ltx_text ltx_font_typewriter">dres</span>, so that <math id="Ch6.S12.SS1.SSS0.Px1.p1.m5" class="ltx_Math" alttext="nxQx+nyQy&lt;dres" display="inline"><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>&lt;</mo><mrow><mi>d</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mi>s</mi></mrow></mrow></math> and <math id="Ch6.S12.SS1.SSS0.Px1.p1.m6" class="ltx_Math" alttext="nx+ny\leq ires" display="inline"><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>≤</mo><mrow><mi>i</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mi>s</mi></mrow></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ifh, dfft</span>
                </td>
<td class="ltx_td ltx_align_left">int,float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">For the FFT analysis, the tune interval can be chosen with <span class="ltx_text ltx_font_typewriter">ifh</span>. To find resonances with the FFT spectrum, all peaks below a fraction <span class="ltx_text ltx_font_typewriter">dfft</span> of the maximum peak are accepted.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">ifh = 0</span>: <math id="Ch6.S12.SS1.SSS0.Px1.p1.m7" class="ltx_Math" alttext="0\leq Q\leq 1" display="inline"><mrow><mn>0</mn><mo>≤</mo><mi>Q</mi><mo>≤</mo><mn>1</mn></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">ifh = 1</span>: <math id="Ch6.S12.SS1.SSS0.Px1.p1.m8" class="ltx_Math" alttext="0\leq Q\leq 0.5" display="inline"><mrow><mn>0</mn><mo>≤</mo><mi>Q</mi><mo>≤</mo><mn>0.5</mn></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">ifh = 2</span>: <math id="Ch6.S12.SS1.SSS0.Px1.p1.m9" class="ltx_Math" alttext="0.5\leq Q\leq 1" display="inline"><mrow><mn>0.5</mn><mo>≤</mo><mi>Q</mi><mo>≤</mo><mn>1</mn></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">kwtype</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
                  <span class="ltx_text" style="color:#B30000;">Disabled, set to 0.</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Terminal type, e.g. 7878 for the Pericom graphic terminals. For details, consult the HPLOT manual <cite class="ltx_cite">[<a href="#bib.bib8" title="" class="ltx_ref">8</a>]</cite>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">itf</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Switch to get PS–file of plots:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">itf = 0</span>: off</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">itf = 1</span>: on</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">icr</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
                  <span class="ltx_text" style="color:#B30000;">Disabled, set to 0</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Switch to stop after each plot (0 = no stop, 1 = stop after each plot).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">idis, icow</span>
                </td>
<td class="ltx_td ltx_align_left">integers</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Switches (0 = off) to select the different plots. If all values are set</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">istw, iffw</span>
                </td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">to zero, the HBOOK/HPLOT routine will not be called.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">idis = 1</span>: plot of distance in phase space.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">icow = 1</span>: a set of plots of projections of the six–dimensional phase space and the energy E versus the turn number.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">istw = 1</span>: plot of the stroboscoped phase space projection by restricting the phase in the other phase space projection.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">iffw = 1</span>: plots of the horizontal and vertical FFT spectrum with linear amplitude scale.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">iffw = 2</span>: plots of the horizontal and vertical FFT spectrum with logarithmic amplitude scale.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nprint</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Switch to stop the printing of the post–processing output to unit 6 (0 = printing off, 1 = printing on).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ndafi</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Number of data–files to be processed. Units from <math id="Ch6.S12.SS1.SSS0.Px1.p1.m10" class="ltx_Math" alttext="90" display="inline"><mn>90</mn></math> to <math id="Ch6.S12.SS1.SSS0.Px1.p1.m11" class="ltx_Math" alttext="90-\mbox{ndafi}+1" display="inline"><mrow><mrow><mn>90</mn><mo>-</mo><mtext>ndafi</mtext></mrow><mo>+</mo><mn>1</mn></mrow></math>.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch6.S12.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch6.S12.SS1.SSS0.Px2.p1" class="ltx_para">
<ol id="Ch6.I7" class="ltx_enumerate">
<li id="Ch6.I7.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch6.I7.i1.p1" class="ltx_para">
<p class="ltx_p">The post–processing can be done in two ways:</p>
<ol id="Ch6.I7.I1" class="ltx_enumerate">
<li id="Ch6.I7.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(a)</span>
<div id="Ch6.I7.I1.i1.p1" class="ltx_para">
<p class="ltx_p">directly following a tracking run by adding this input block to the input blocks of the tracking,</p>
</div>
</li>
<li id="Ch6.I7.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(b)</span>
<div id="Ch6.I7.I1.i2.p1" class="ltx_para">
<p class="ltx_p">as a later run where the tracking parameter file <span class="ltx_text ltx_font_typewriter">fort.3</span> consists of only the <span class="ltx_text ltx_font_italic">Program Version</span> input block <a href="#Ch2.S1" title="2.1 Program Version ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.1</span></a> (using the <span class="ltx_text ltx_font_typewriter">FREE</span> option) and of this input block specifying the post–processing parameters followed by <span class="ltx_text ltx_font_typewriter">ENDE</span> as usual.</p>
</div>
</li>
</ol>
</div>
</li>
<li id="Ch6.I7.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch6.I7.i2.p1" class="ltx_para">
<p class="ltx_p">The HBOOK/HPLOT routines are only used at the start of the main program for initialisation and termination. The actual plots are done in the post–processing subroutine. The routines are activated only if at least one of the plotting parameters (<span class="ltx_text ltx_font_typewriter">idis, icow, istw, iffw</span>) is set to one.</p>
</div>
</li>
</ol>
</div>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
</section>
</section>
<section id="Ch7" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 7 </span>Initial Conditions for Tracking</h2>
<div id="Ch7.p1" class="ltx_para">
<p class="ltx_p">For the study of non-linear system, the choice of initial conditions is of crucial importance.
The input structure for the initial conditions was therefore organised in such a way as to allow for maximum flexibility.
SixTrack is optimised to reach the largest possible number of turns.
In order to derive the Lyapunov exponent, and thereby to distinguish between regular and chaotic motion, the particle has a close by companion particle.
Moreover, experience has shown that varying only the amplitude while keeping the phases constant is sufficient to understand the non-linear dynamics, as a subsequent detailed post–processing allows to find the dependence of the parameter of interest on these phases.</p>
</div>
<section id="Ch7.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">7.1 </span>Tracking Parameters</h3>
<div id="Ch7.S1.p1" class="ltx_para">
<p class="ltx_p">All tracking parameters are defined with this input block.
The initial coordinates are generally also set here.
A fine tuning of the initial condition is done with <span class="ltx_text ltx_font_italic">Initial Coordinates</span> block (<a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>), and the parameters for the synchrotron oscillation are given in block (<a href="#Ch7.S3" title="7.3 Synchrotron Oscillation ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.3</span></a>).</p>
</div>
<div id="Ch7.S1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">TRAC</span>
              </th>
<th class="ltx_td ltx_align_justify" style="width:303.5pt;"></th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<th class="ltx_td ltx_align_left">3</th>
<th class="ltx_td ltx_align_justify" style="width:303.5pt;"></th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </td>
<td class="ltx_td ltx_align_left">Line 1:</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
                <span class="ltx_text ltx_font_typewriter">numl numlr napx amp(1) amp0 ird imc</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
                <span class="ltx_text ltx_font_typewriter">niu(1) niu(2) numlcp numlmax</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_left">Line 2:</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
                <span class="ltx_text ltx_font_typewriter">idy(1) idy(2) idfor irew iclo6</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_left">Line 3:</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
                <span class="ltx_text ltx_font_typewriter">nde(1) nde(2) nwr(1) nwr(2) nwr(3) nwr(4)</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
                <span class="ltx_text ltx_font_typewriter">ntwin ibidu iexact</span>
              </td>
</tr>
</tbody>
</table>
</div>
<section id="Ch7.S1.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch7.S1.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">numl</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of turns in the forward direction.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">numlr</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of turns in the backward direction.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">napx</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of amplitude variations (i.e. particle pairs).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">amp(1),amp0</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Start and end amplitude (any sign) in the horizontal phase space plane for the amplitude variations. The vertical amplitude is calculated using the ratio between the horizontal and vertical emittance set in the <span class="ltx_text ltx_font_italic">Initial Coordinates</span> block (<a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>), where the initial phase in phase space are also set. Additional information can be found in the <span class="ltx_text ltx_font_italic">Remarks</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ird</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Ignored.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">imc</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of variations of the relative momentum deviation <math id="Ch7.S1.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="\Delta p/p_{0}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow></math>. The maximum value of the relative momentum deviation <math id="Ch7.S1.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="\Delta p/p_{0}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow></math> is taken from that of the first particle in the <span class="ltx_text ltx_font_italic">Initial Coordinates</span> block (<a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>). The variation will be between <math id="Ch7.S1.SS1.SSS0.Px1.p1.m3" class="ltx_Math" alttext="\pm\left[\Delta p/p_{0}\right](\mathrm{max})" display="inline"><mrow><mo>±</mo><mrow><mrow><mo>[</mo><mrow id="XM188"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow><mo>]</mo></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM189">max</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math> in steps of <math id="Ch7.S1.SS1.SSS0.Px1.p1.m4" class="ltx_Math" alttext="\left[\Delta p/p_{0}\right](\mathrm{max})" display="inline"><mrow><mrow><mo>[</mo><mrow id="XM190"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow><mo>]</mo></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM191">max</mi><mo stretchy="false">)</mo></mrow></mrow></math> / (<span class="ltx_text ltx_font_typewriter">imc-1</span>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">niu(1),niu(2)</span>
                </td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Unknown; default values are 0.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">numlcp</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Checkpoint/restart version: How often to write checkpointing files.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">numlmax</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Checkpoint/restart version: Maximum amount of turns; default is <math id="Ch7.S1.SS1.SSS0.Px1.p1.m5" class="ltx_Math" alttext="10^{6}" display="inline"><msup><mn>10</mn><mn>6</mn></msup></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">idy(1),idy(2)</span>
                </td>
<td class="ltx_td ltx_align_left">integers</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">A tracking where one of the transversal motion planes shall be ignored is only possible when all coupling terms are switched off. The part of the coupling that is due to closed orbit and other effects can be turned off with these switches.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">idy(1), idy(2) = 1</span>: coupling on.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">idy(1), idy(2) = 0</span>: coupling to the horizontal and vertical motion plane respectively switched off.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">idfor</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Usually the closed orbit is added to the initial coordinates. This can be turned off using <span class="ltx_text ltx_font_typewriter">idfor</span>, for instance when a run is to be prolonged.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">idfor = 0</span>: closed orbit added.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">idfor = 1</span>: initial coordinates unchanged.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">idfor = 2</span>: prolongation of a run, taken the initial coordinates from <span class="ltx_text ltx_font_typewriter">fort.13</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">irew</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">To reduce the amount of tracking data after each amplitude and relative momentum deviation iteration <math id="Ch7.S1.SS1.SSS0.Px1.p1.m6" class="ltx_Math" alttext="\Delta p/p_{0}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow></math> the binary output units 90 and lower (see Appendix <a href="#A3" title="Appendix C Input and Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">C</span></a>) are rewound. This is always done when the post–processing is activated (<a href="#Ch6.S12" title="6.12 Post–processing ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.12</span></a>). For certain applications it may be useful to store all data. The switch <span class="ltx_text ltx_font_typewriter">irew</span> allows for that.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">irew = 0</span>: unit 90 (and lower) rewound.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">irew = 1</span>: all data on unit 90 (and lower).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">iclo6</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">This switch allows to calculate the 6D closed orbit and optical functions at the starting point, using the differential algebra package. It is active in all versions that link to the Differential Algebra package. Note that <span class="ltx_text ltx_font_typewriter">iclo6 &gt; 0</span> is mandatory for 6D simulations, and that <span class="ltx_text ltx_font_typewriter">iclo6 = 0</span> is mandatory for 4D simulations.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">iclo6 = 0</span>: switched off.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">iclo6 = 1</span>: calculated.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">iclo6 = 2</span>: calculated and added to the initial coordinates (<a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">iclo6 = 5 or 6</span>: like for 1 and 2, but in addition a guess closed orbit is read (in free format) from file <span class="ltx_text ltx_font_typewriter">fort.33</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nde(1)</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of turns at flat bottom, useful for energy ramping.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nde(2)</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of turns for the energy ramping. <span class="ltx_text ltx_font_typewriter">numl</span>–<span class="ltx_text ltx_font_typewriter">nde(2)</span> gives the number of turns on the flat top. For constant energy with <math id="Ch7.S1.SS1.SSS0.Px1.p1.m7" class="ltx_Math" alttext="nde(1)=nde(2)=0" display="inline"><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM192">1</mn><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM193">2</mn><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mn>0</mn></mrow></math> the particles are considered to be on the flat top.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nwr(1)</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Every <span class="ltx_text ltx_font_typewriter">nwr(1)</span>’th turn the coordinates will be written on unit 90 (and lower) in the flat bottom part of the tracking.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nwr(2)</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Every <span class="ltx_text ltx_font_typewriter">nwr(2)</span>’th turn the coordinates in the ramping region will be written on unit 90 (and lower).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nwr(3)</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Every <span class="ltx_text ltx_font_typewriter">nwr(3)</span>’th turn at the flat top a write out of the coordinates on unit 90 (and lower) will occur. For constant energy this number controls the amount of data on unit 90 (and lower), as the particles are considered on the flat top.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">nwr(4)</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">In cases of very long runs it is sometimes useful to save all coordinates for a prolongation of a run after a possible crash of the computer. Every <span class="ltx_text ltx_font_typewriter">nwr(4)</span>’th turn the coordinates are written to unit 6.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ntwin</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">For the analysis of the Lyapunov exponent it is usually sufficient to store the calculated distance of phase space together with the coordinate of the first particle (<span class="ltx_text ltx_font_typewriter">ntwin</span> set to one). You may want to improve the 6D calculation of the distance in phase space with <span class="ltx_text ltx_font_typewriter">sigcor, dpscor</span> (see <a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>) when the 6D closed orbit is not calculated with <span class="ltx_text ltx_font_typewriter">iclo6</span> <math id="Ch7.S1.SS1.SSS0.Px1.p1.m8" class="ltx_Math" alttext="\neq 2" display="inline"><mrow><mi></mi><mo>≠</mo><mn>2</mn></mrow></math>. If storage space is no problem, one can store the coordinates of both particles (<span class="ltx_text ltx_font_typewriter">ntwin</span> set to two). The distance in phase space is then calculated in the post–processing procedure (see <a href="#Ch6.S12" title="6.12 Post–processing ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.12</span></a>). This also allows a subsequent refined Lyapunov analysis using differential–algebra and Lie–algebra techniques (<cite class="ltx_cite">[<a href="#bib.bib28" title="" class="ltx_ref">28</a>]</cite>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ibidu</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Switch to create or read binary dump of the full accelerator description on file <span class="ltx_text ltx_font_typewriter">fort.32</span>. The parameters relevant to tracking, i.e. <span class="ltx_text ltx_font_typewriter">numl, amp0, amp(1), amp(2), damp, chi0, chid, rat, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m9" class="ltx_Math" alttext="x_{1}" display="inline"><msub><mi>x</mi><mn mathvariant="normal">1</mn></msub></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m10" class="ltx_Math" alttext="x^{\prime}_{1}" display="inline"><msubsup><mi>x</mi><mn mathvariant="normal">1</mn><mo mathvariant="normal">′</mo></msubsup></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m11" class="ltx_Math" alttext="y_{1}" display="inline"><msub><mi>y</mi><mn mathvariant="normal">1</mn></msub></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m12" class="ltx_Math" alttext="y^{\prime}_{1}" display="inline"><msubsup><mi>y</mi><mn mathvariant="normal">1</mn><mo mathvariant="normal">′</mo></msubsup></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m13" class="ltx_Math" alttext="\sigma_{1}" display="inline"><msub><mi>σ</mi><mn mathvariant="normal">1</mn></msub></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m14" class="ltx_Math" alttext="\Delta p/p_{0,1}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo mathvariant="monospace">⁢</mo><mi>p</mi></mrow><mo mathvariant="normal">/</mo><msub><mi>p</mi><mrow><mn mathvariant="normal" id="XM194">0</mn><mo mathvariant="normal">,</mo><mn mathvariant="normal" id="XM195">1</mn></mrow></msub></mrow></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m15" class="ltx_Math" alttext="x_{2}" display="inline"><msub><mi>x</mi><mn mathvariant="normal">2</mn></msub></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m16" class="ltx_Math" alttext="x^{\prime}_{2}" display="inline"><msubsup><mi>x</mi><mn mathvariant="normal">2</mn><mo mathvariant="normal">′</mo></msubsup></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m17" class="ltx_Math" alttext="y_{2}" display="inline"><msub><mi>y</mi><mn mathvariant="normal">2</mn></msub></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m18" class="ltx_Math" alttext="y^{\prime}_{2}" display="inline"><msubsup><mi>y</mi><mn mathvariant="normal">2</mn><mo mathvariant="normal">′</mo></msubsup></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m19" class="ltx_Math" alttext="\sigma_{2}" display="inline"><msub><mi>σ</mi><mn mathvariant="normal">2</mn></msub></math>, <math id="Ch7.S1.SS1.SSS0.Px1.p1.m20" class="ltx_Math" alttext="\Delta p/p_{0,2}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo mathvariant="monospace">⁢</mo><mi>p</mi></mrow><mo mathvariant="normal">/</mo><msub><mi>p</mi><mrow><mn mathvariant="normal" id="XM196">0</mn><mo mathvariant="normal">,</mo><mn mathvariant="normal" id="XM197">2</mn></mrow></msub></mrow></math>, time0, time1</span>, are to be given via the tracking parameter file <span class="ltx_text ltx_font_typewriter">fort.3</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">ibidu = 1</span>: write dump.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">ibidu = 2</span>: read dump.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">iexact</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Switch to enable exact solution of the equation of motion into tracking and 6D (no 4D) optics calculations.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">iexact = 0</span>: approximated equation
<table id="Ch7.Ex1" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch7.Ex1.m1" class="ltx_Math" alttext="\mbox{e.g.}\quad x^{\prime}\simeq\frac{P_{x}}{P_{0}(1+\delta)},\quad y^{\prime%
}\simeq\frac{P_{y}}{P_{0}(1+\delta)};" display="block"><mrow><mrow><mrow id="XM202"><mrow><mtext id="XM200">e.g.</mtext><mo mathvariant="italic" separator="true"> </mo><msup id="XM201"><mi>x</mi><mo>′</mo></msup></mrow><mo>≃</mo><mfrac><msub><mi>P</mi><mi>x</mi></msub><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM198"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mfrac></mrow><mo rspace="12.5pt">,</mo><mrow id="XM203"><msup><mi>y</mi><mo>′</mo></msup><mo>≃</mo><mfrac><msub><mi>P</mi><mi>y</mi></msub><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM199"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mfrac></mrow></mrow><mo>;</mo></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">iexact = 1</span>: exact equation
<table id="Ch7.Ex2" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch7.Ex2.m1" class="ltx_Math" alttext="\mbox{e.g.}\quad x^{\prime}\simeq\frac{P_{x}}{P_{0}\sqrt{(1+\delta)^{2}-P_{x}^%
{2}-P_{y}^{2}}},\quad y^{\prime}\simeq\frac{P_{y}}{P_{0}\sqrt{(1+\delta)^{2}-P%
_{x}^{2}-P_{y}^{2}}}." display="block"><mrow><mrow><mrow id="XM208"><mrow><mtext id="XM206">e.g.</mtext><mo mathvariant="italic" separator="true"> </mo><msup id="XM207"><mi>x</mi><mo>′</mo></msup></mrow><mo>≃</mo><mfrac><msub><mi>P</mi><mi>x</mi></msub><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM204"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msubsup><mi>P</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>P</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow></mfrac></mrow><mo rspace="12.5pt">,</mo><mrow id="XM209"><msup><mi>y</mi><mo>′</mo></msup><mo>≃</mo><mfrac><msub><mi>P</mi><mi>y</mi></msub><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM205"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msubsup><mi>P</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>P</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow></mfrac></mrow></mrow><mo>.</mo></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch7.S1.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch7.S1.SS1.SSS0.Px2.p1" class="ltx_para">
<ol id="Ch7.I1" class="ltx_enumerate">
<li id="Ch7.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch7.I1.i1.p1" class="ltx_para">
<p class="ltx_p">This input data block is usually combined with the <span class="ltx_text ltx_font_italic">Initial Coordinates</span> input block (<a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>) to allow a flexible choice of the initial coordinates for the tracking.</p>
</div>
</li>
<li id="Ch7.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch7.I1.i2.p1" class="ltx_para">
<p class="ltx_p">For a prolongation of a run the following parameters have to be set:</p>
<ol id="Ch7.I1.I1" class="ltx_enumerate">
<li id="Ch7.I1.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(a)</span>
<div id="Ch7.I1.I1.i1.p1" class="ltx_para">
<p class="ltx_p">in this input block: <span class="ltx_text ltx_font_typewriter">idfor = 1</span></p>
</div>
</li>
<li id="Ch7.I1.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(b)</span>
<div id="Ch7.I1.I1.i2.p1" class="ltx_para">
<p class="ltx_p">in the <span class="ltx_text ltx_font_italic">Initial coordinates</span> input block:</p>
<ul id="Ch7.I1.I1.I1" class="ltx_itemize">
<li id="Ch7.I1.I1.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">*</span>
<div id="Ch7.I1.I1.I1.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">itra = 0</span></p>
</div>
</li>
<li id="Ch7.I1.I1.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">*</span>
<div id="Ch7.I1.I1.I1.i2.p1" class="ltx_para">
<p class="ltx_p">take the end coordinates of the previous run as the initial coordinates (including all digits) for the new run.</p>
</div>
</li>
</ul>
</div>
</li>
</ol>
</div>
</li>
<li id="Ch7.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch7.I1.i3.p1" class="ltx_para">
<p class="ltx_p">A feature is installed for a prolongation of a run by using <span class="ltx_text ltx_font_typewriter">idfor = 2</span> and reading the initial data from file <span class="ltx_text ltx_font_typewriter">fort.13</span>. The end coordinates are now written to <span class="ltx_text ltx_font_typewriter">fort.12</span> after each run. Intermediate coordinates are also written to <span class="ltx_text ltx_font_typewriter">fort.12</span> in case the turn number <span class="ltx_text ltx_font_typewriter">nwr(4)</span> is exceeded in the run. The user takes responsibility to transfer the required data from <span class="ltx_text ltx_font_typewriter">fort.12</span> to <span class="ltx_text ltx_font_typewriter">fort.13</span> if a prolongation is requested.</p>
</div>
</li>
<li id="Ch7.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch7.I1.i4.p1" class="ltx_para">
<p class="ltx_p">Some illogical combinations of parameters have been suppressed.</p>
</div>
</li>
<li id="Ch7.I1.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5.</span>
<div id="Ch7.I1.i5.p1" class="ltx_para">
<p class="ltx_p">The initial coordinates are calculated using a proper linear 6D transformation: <span class="ltx_text ltx_font_typewriter">amp(1)</span> is still the maximum horizontal starting amplitude (excluding the dispersion contribution) from which the emittance of mode 1 <math id="Ch7.I1.i5.p1.m1" class="ltx_Math" alttext="e_{I}" display="inline"><msub><mi>e</mi><mi>I</mi></msub></math> is derived, <span class="ltx_text ltx_font_typewriter">rat</span> (see <a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>) is the ratio of <math id="Ch7.I1.i5.p1.m2" class="ltx_Math" alttext="e_{II}/e_{I}" display="inline"><mrow><msub><mi>e</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub><mo>/</mo><msub><mi>e</mi><mi>I</mi></msub></mrow></math> of the emittances of the two modes. The momentum deviation <math id="Ch7.I1.i5.p1.m3" class="ltx_Math" alttext="\frac{\Delta p}{p_{0,1}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mrow><mn id="XM210">0</mn><mo>,</mo><mn id="XM211">1</mn></mrow></msub></mfrac></math> is used to define a longitudinal amplitude. The 6 normalized coordinates read:</p>
<ol id="Ch7.I1.I2" class="ltx_enumerate">
<li id="Ch7.I1.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(a)</span>
<div id="Ch7.I1.I2.i1.p1" class="ltx_para">
<p class="ltx_p">horizontal:
<br class="ltx_break"></p>
<table id="Ch7.Ex3" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch7.Ex3.m1" class="ltx_Math" alttext="\left[\sqrt{e_{I}}=\frac{\mbox{amp(1)}}{\sqrt{\beta_{xI}}+\sqrt{\left|\mbox{%
rat}\right|\times\beta_{xII}}},\quad 0.0\right]" display="block"><mrow><mo>[</mo><mrow id="XM215"><msqrt><msub><mi>e</mi><mi>I</mi></msub></msqrt><mo>=</mo><mrow><mfrac id="XM213"><mtext>amp(1)</mtext><mrow><msqrt><msub><mi>β</mi><mrow><mi>x</mi><mo>⁢</mo><mi>I</mi></mrow></msub></msqrt><mo>+</mo><msqrt><mrow><mrow><mo>|</mo><mtext id="XM212">rat</mtext><mo>|</mo></mrow><mo>×</mo><msub><mi>β</mi><mrow><mi>x</mi><mo>⁢</mo><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub></mrow></msqrt></mrow></mfrac><mo rspace="12.5pt">,</mo><mn id="XM214">0.0</mn></mrow></mrow><mo>]</mo></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
<li id="Ch7.I1.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(b)</span>
<div id="Ch7.I1.I2.i2.p1" class="ltx_para">
<p class="ltx_p">vertical:
<br class="ltx_break"></p>
<table id="Ch7.Ex4" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch7.Ex4.m1" class="ltx_Math" alttext="\left[sign(\mbox{rat})\times\sqrt{e_{II}}\mbox{ with }e_{II}=\left|\mbox{rat}%
\right|\times e_{I},\quad 0.0\right]" display="block"><mrow><mo>[</mo><mrow id="XM220"><mrow><mrow><mrow><mi>s</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>g</mi><mo>⁢</mo><mi>n</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mtext id="XM216">rat</mtext><mo stretchy="false">)</mo></mrow></mrow><mo>×</mo><msqrt><msub><mi>e</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub></msqrt></mrow><mo>⁢</mo><mtext> with </mtext><mo>⁢</mo><msub><mi>e</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub></mrow><mo>=</mo><mrow><mrow id="XM218"><mrow><mo>|</mo><mtext id="XM217">rat</mtext><mo>|</mo></mrow><mo>×</mo><msub><mi>e</mi><mi>I</mi></msub></mrow><mo rspace="12.5pt">,</mo><mn id="XM219">0.0</mn></mrow></mrow><mo>]</mo></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
<li id="Ch7.I1.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(c)</span>
<div id="Ch7.I1.I2.i3.p1" class="ltx_para">
<p class="ltx_p">longitudinal:
<br class="ltx_break"></p>
<table id="Ch7.Ex5" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch7.Ex5.m1" class="ltx_Math" alttext="\left[0.0,\quad\frac{\Delta p}{p_{0,1}}\times\sqrt{\beta_{sIII}}\right]" display="block"><mrow><mo>[</mo><mn id="XM223">0.0</mn><mo rspace="12.5pt">,</mo><mrow id="XM224"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mrow><mn id="XM221">0</mn><mo>,</mo><mn id="XM222">1</mn></mrow></msub></mfrac><mo>×</mo><msqrt><msub><mi>β</mi><mrow><mi>s</mi><mo>⁢</mo><mi>I</mi><mo>⁢</mo><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub></msqrt></mrow><mo>]</mo></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
</ol>
<p class="ltx_p">and are then transformed with the 6D linear transformation into real space. Note that results may differ from those of older versions.</p>
</div>
</li>
<li id="Ch7.I1.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">6.</span>
<div id="Ch7.I1.i6.p1" class="ltx_para">
<p class="ltx_p">The amplitude scan is performed from <span class="ltx_text ltx_font_typewriter">amp(1)</span> to <span class="ltx_text ltx_font_typewriter">amp0</span> in steps of <math id="Ch7.I1.i6.p1.m1" class="ltx_Math" alttext="\mbox{delta}=(\mbox{amp0}-\mbox{amp(1)})/(napx-1)" display="inline"><mrow><mtext>delta</mtext><mo>=</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM225"><mtext>amp0</mtext><mo>-</mo><mtext>amp(1)</mtext></mrow><mo stretchy="false">)</mo></mrow><mo>/</mo><mrow><mo stretchy="false">(</mo><mrow id="XM226"><mrow><mi>n</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>p</mi><mo>⁢</mo><mi>x</mi></mrow><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>. For the intermediate amplitudes, <span class="ltx_text ltx_font_typewriter">delta</span> is added up for each step, however the last amplitude is guaranteed to be fixed to the given value. This enables “control calculations” by setting the first amplitude of one simulation equal to the last amplitude of another simulation, and unless there are calculation errors, they shall produce exactly the same results.</p>
</div>
</li>
<li id="Ch7.I1.i7" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">7.</span>
<div id="Ch7.I1.i7.p1" class="ltx_para">
<p class="ltx_p">Note that if <span class="ltx_text ltx_font_typewriter">iclo6 = 2</span> and <span class="ltx_text ltx_font_typewriter">idfor = 0</span> in the input file, then <span class="ltx_text ltx_font_typewriter">idfor</span> is internally set to 1, as is seen in some outputs. This does not mean that the closed orbit is not added; the setting of <span class="ltx_text ltx_font_typewriter">iclo6 = 2</span> simply takes precedence.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch7.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">7.2 </span>Initial Coordinates</h3>
<div id="Ch7.S2.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_italic">Initial Coordinates</span> input block is meant to manipulate how the initial coordinates are organise, which are generally set in the tracking parameter block (<a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>).
Number of particles, initial phase, ratio of the horizontal and vertical emittances and increments of 2 <math id="Ch7.S2.p1.m1" class="ltx_Math" alttext="\times" display="inline"><mo>×</mo></math> 6 coordinates of the two particles, the reference energy and the starting energy for the two particles.</p>
</div>
<div id="Ch7.S2.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">INIT</span>
              </th>
<th class="ltx_td ltx_align_justify" style="width:303.5pt;"></th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<th class="ltx_td ltx_align_left">16</th>
<th class="ltx_td ltx_align_justify" style="width:303.5pt;"></th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </td>
<td class="ltx_td ltx_align_left">Line 1: <span class="ltx_text ltx_font_typewriter">itra chi0 chid rat iver</span>
</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_left">Lines 2 to 16: 15 initial coordinates as listed in Table <a href="#Ch7.T1" title="Table 7.1 ‣ Format Description ‣ 7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>
</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
</tbody>
</table>
</div>
<section id="Ch7.S2.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch7.S2.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">itra</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Number of particles:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">itra = 0</span>: Amplitude values of tracking parameter block (<a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>) are ignored and coordinates of data line 2–16 are taken. <span class="ltx_text ltx_font_typewriter">itra</span> is set internally to 2 for tracking with two particles. This is necessary in case a run is to be prolonged.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">itra = 1</span>: Tracking of one particle, twin particle ignored.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">itra = 2</span>: Tracking the two twin particles.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">chi0</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Starting phase of the initial coordinate in the horizontal and vertical phase space projections.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">chid</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Phase difference between first and second particles.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">rat</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">Denotes the emittance ratio (<math id="Ch7.S2.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="e_{II}/e_{I}" display="inline"><mrow><msub><mi>e</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub><mo>/</mo><msub><mi>e</mi><mi>I</mi></msub></mrow></math>) of horizontal and vertical motion. For further information see the <em class="ltx_emph">Remarks</em> of the <span class="ltx_text ltx_font_typewriter">TRAC</span> input block in Section <a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">iver</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">In tracking with coupling it is sometimes desired to start with zero vertical amplitude which can be painful if the emittance ratio <span class="ltx_text ltx_font_typewriter">rat</span> is used to achieve it. For this purpose the switch <span class="ltx_text ltx_font_typewriter">iver</span> has been introduced:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">iver = 0</span>: Vertical coordinates unchanged.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;">
<span class="ltx_text ltx_font_typewriter">iver = 1</span>: Vertical coordinates set to zero.</td>
</tr>
</tbody>
</table>
</div>
<figure id="Ch7.T1" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 7.1: </span>Initial Coordinates of the 2 Particles</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                  <span class="ltx_text" style="background-color:#B3B3FF;">
Line</span>
                </th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text" style="background-color:#B3B3FF;">Contents</span>
                </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">2</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch7.T1.m1" class="ltx_Math" alttext="x_{1}" display="inline"><msub><mi>x</mi><mn>1</mn></msub></math> [mm] coordinate of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">3</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch7.T1.m2" class="ltx_Math" alttext="x^{\prime}_{1}" display="inline"><msubsup><mi>x</mi><mn>1</mn><mo>′</mo></msubsup></math> [mrad] coordinate of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">4</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch7.T1.m3" class="ltx_Math" alttext="y_{1}" display="inline"><msub><mi>y</mi><mn>1</mn></msub></math> [mm] coordinate of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">5</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch7.T1.m4" class="ltx_Math" alttext="y^{\prime}_{1}" display="inline"><msubsup><mi>y</mi><mn>1</mn><mo>′</mo></msubsup></math> [mrad] coordinate of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">6</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">path length difference 1 (<math id="Ch7.T1.m5" class="ltx_Math" alttext="\sigma_{1}=s-v_{0}\times t" display="inline"><mrow><msub><mi>σ</mi><mn>1</mn></msub><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mn>0</mn></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>) [mm] of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">7</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch7.T1.m6" class="ltx_Math" alttext="\Delta p/p_{0,1}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mrow><mn id="XM227">0</mn><mo>,</mo><mn id="XM228">1</mn></mrow></msub></mrow></math> of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">8</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch7.T1.m7" class="ltx_Math" alttext="x_{2}" display="inline"><msub><mi>x</mi><mn>2</mn></msub></math> [mm] coordinate of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">9</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch7.T1.m8" class="ltx_Math" alttext="x^{\prime}_{2}" display="inline"><msubsup><mi>x</mi><mn>2</mn><mo>′</mo></msubsup></math> [mrad] coordinate of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">10</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch7.T1.m9" class="ltx_Math" alttext="y_{2}" display="inline"><msub><mi>y</mi><mn>2</mn></msub></math> [mm] coordinate of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">11</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch7.T1.m10" class="ltx_Math" alttext="y^{\prime}_{2}" display="inline"><msubsup><mi>y</mi><mn>2</mn><mo>′</mo></msubsup></math> [mrad] coordinate of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">12</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">path length difference (<math id="Ch7.T1.m11" class="ltx_Math" alttext="\sigma_{2}=s-v_{0}\times t" display="inline"><mrow><msub><mi>σ</mi><mn>2</mn></msub><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mn>0</mn></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>) [mm] of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">13</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch7.T1.m12" class="ltx_Math" alttext="\Delta p/p_{0,2}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mrow><mn id="XM229">0</mn><mo>,</mo><mn id="XM230">2</mn></mrow></msub></mrow></math> of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">14</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">energy [MeV] of the reference particle</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">15</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">energy [MeV] of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r ltx_border_t">16</th>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">energy [MeV] of particle 2</td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch7.S2.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Remarks</h5>
<div id="Ch7.S2.SS1.SSS0.Px2.p1" class="ltx_para">
<ul id="Ch7.I2" class="ltx_itemize">
<li id="Ch7.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch7.I2.i1.p1" class="ltx_para">
<p class="ltx_p">These 15 coordinates are taken as the initial coordinates if <span class="ltx_text ltx_font_typewriter">itra</span> is set to zero (see above). If <span class="ltx_text ltx_font_typewriter">itra</span> is 1 or 2 these coordinates are added to the initial coordinates generally defined in the tracking parameter block (<a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>). This procedure seems complicated but it allows freely to define the initial difference between the two twin particles. It also allows in case a tracking run should be prolonged to continue with precisely the same coordinates. This is important as small difference may lead to largely different results.</p>
</div>
</li>
<li id="Ch7.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch7.I2.i2.p1" class="ltx_para">
<p class="ltx_p">The reference particle is the particle in the centre of the bucket which performs no synchrotron oscillations.</p>
</div>
</li>
<li id="Ch7.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch7.I2.i3.p1" class="ltx_para">
<p class="ltx_p">The energy of the first and second particles is given explicitly, again to make possible a continuation that leads precisely to the same results as if the run would not have been interrupted.</p>
</div>
</li>
<li id="Ch7.I2.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch7.I2.i4.p1" class="ltx_para">
<p class="ltx_p">There is a refined way of prolonging a run, see the <span class="ltx_text ltx_font_italic">Tracking Parameters</span> input block (<a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>).</p>
</div>
</li>
</ul>
</div>
</section>
</section>
<section id="Ch7.S3" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">7.3 </span>Synchrotron Oscillation</h3>
<div id="Ch7.S3.p1" class="ltx_para">
<p class="ltx_p">The parameters needed for treating the synchrotron oscillation in a symplectic manner are given in the <span class="ltx_text ltx_font_italic">Synchrotron Oscillation</span> input block.</p>
</div>
<div id="Ch7.S3.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </th>
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">SYNC</span>
              </th>
<th class="ltx_td ltx_align_justify" style="width:303.5pt;"></th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </th>
<th class="ltx_td ltx_align_left">2</th>
<th class="ltx_td ltx_align_justify" style="width:303.5pt;"></th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </td>
<td class="ltx_td ltx_align_left">Line 1: <span class="ltx_text ltx_font_typewriter">harm alc u0 phag tlen pma ition dppoff</span>
</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_left">Line 2: <span class="ltx_text ltx_font_typewriter">dpscor sigcor</span>
</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
</tbody>
</table>
</div>
<section id="Ch7.S3.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch7.S3.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">harm</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Harmonic number.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">alc</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Momentum compaction factor, used here only to calculate the linear synchrotron tune <math id="Ch7.S3.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="Q_{S}" display="inline"><msub><mi>Q</mi><mi>S</mi></msub></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">u0</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Circumference voltage in [MV].</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">phag</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Acceleration phase in degrees.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">tlen</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Length of the accelerator in meters.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">pma</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Rest mass of the particle in <math id="Ch7.S3.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="\mathrm{MeV}/\mathrm{c}^{2}" display="inline"><mrow><mi>MeV</mi><mo>/</mo><msup><mi mathvariant="normal">c</mi><mn>2</mn></msup></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">ition</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Transition energy switch:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">ition = 0</span>: for no synchrotron oscillation (energy ramping still possible).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">ition = 1</span>: for above transition energy.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">
<span class="ltx_text ltx_font_typewriter">ition = -1</span>: for below transition energy.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">dppoff</span>
                </td>
<td class="ltx_td ltx_align_left">float</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Offset Relative Momentum Deviation <math id="Ch7.S3.SS1.SSS0.Px1.p1.m3" class="ltx_Math" alttext="\Delta p/p_{0}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow></math>: a fixpoint with respect to synchrotron oscillations. It becomes active when the 6D closed orbit is calculated (see item <span class="ltx_text ltx_font_typewriter">iclo6</span> in section <a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">dpscor,sigcor</span>
                </td>
<td class="ltx_td ltx_align_left">floats</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Scaling factor for relative momentum deviation <math id="Ch7.S3.SS1.SSS0.Px1.p1.m4" class="ltx_Math" alttext="\Delta p/p_{0}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow></math> and the path length difference (<math id="Ch7.S3.SS1.SSS0.Px1.p1.m5" class="ltx_Math" alttext="\sigma=s-v_{0}\times t" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mn>0</mn></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>) respectively. They can be used to improve the calculation of the 6D distance in phase space, but is only used when <span class="ltx_text ltx_font_typewriter">ntwin = 1</span> in the tracking parameter input block (<a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>). Please set to 1 when the 6D closed is calculated.</td>
</tr>
</tbody>
</table>
</div>
<div id="Ch7.S3.SS1.SSS0.Px1.p2" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Note:</span> The value of <span class="ltx_text ltx_font_typewriter">tlen</span> is also calculated internally by SixTrack (in <span class="ltx_text ltx_font_typewriter">dcum</span>), and a warning is issued if the given value is different from the calculated value.</p>
<div class="ltx_pagination ltx_role_newpage"></div>
</div>
</section>
</section>
</section>
<section id="Ch8" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 8 </span>Extra Output Files</h2>
<div id="Ch8.p1" class="ltx_para">
<p class="ltx_p">For some studies, extra output from the simulation is desired.
How to do this is described below.</p>
</div>
<section id="Ch8.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">8.1 </span>Dumping of Beam Population</h3>
<div id="Ch8.S1.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_typewriter">DUMP</span> block allows the beam population (i.e. the position in phase-space for all the particles) to be written to file.
This can be done in any <span class="ltx_text ltx_font_typewriter">SINGLE ELEMENTS</span> which are directly mentioned in the <span class="ltx_text ltx_font_typewriter">STRUCTURE INPUT</span> part of <span class="ltx_text ltx_font_typewriter">fort.2</span> (<span class="ltx_text ltx_font_typewriter">BLOC</span>s cannot be used).
The particles are dumped just after the kick is applied, and how often to dump (every turn, every second turn, etc.) is user-selectable.
Please note that each single element can only be selected once; however it is possible to overcome this limitation by placing multiple markers with different names in the same position in the sequence (by editing <span class="ltx_text ltx_font_typewriter">fort.2</span>).</p>
</div>
<div id="Ch8.S1.p2" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </td>
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">DUMP</span>
              </td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </td>
<td class="ltx_td ltx_align_left">Variable, one for each element for which dump is active.</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </td>
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">element_name frequency unit format (filename) (first last)</span>
              </td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_left">or <span class="ltx_text ltx_font_typewriter">HIGH</span>
</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_left">or <span class="ltx_text ltx_font_typewriter">FRONT</span>
</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
</tbody>
</table>
</div>
<section id="Ch8.S1.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch8.S1.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">element_name</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">One of the <span class="ltx_text ltx_font_italic">single elements</span>, or <span class="ltx_text ltx_font_typewriter">ALL</span> to dump at the exit of all single elements, or <span class="ltx_text ltx_font_typewriter">StartDUMP</span> to dump at the injection point. Note that if <span class="ltx_text ltx_font_typewriter">ALL</span> or <span class="ltx_text ltx_font_typewriter">StartDUMP</span> is in use, these cannot be used as single element names.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">frequency</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">How often the beam population should be dumped in number of turns.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">unit</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">Fortran unit number to use, should not be used in other parts of SixTrack. The unit number and filename may be shared between different <span class="ltx_text ltx_font_typewriter">DUMP</span> outputs, as long as they have the same format and <span class="ltx_text ltx_font_typewriter">element_name</span> is not <span class="ltx_text ltx_font_typewriter">ALL</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">format</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">A switch specifying the output format. See table (<span class="ltx_ref ltx_ref_self">LABEL:tab:dumpformat</span>).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">filename</span>
                </td>
<td class="ltx_td ltx_align_left">char</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">The name of the file to write to. This argument may be omitted (unless <span class="ltx_text ltx_font_typewriter">first</span> and <span class="ltx_text ltx_font_typewriter">last</span> are present, if so, then <span class="ltx_text ltx_font_typewriter">filename</span> must also be present), and if so the output file is named fort.<span class="ltx_text ltx_font_typewriter">unit</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">first</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">The first turn where this dump should be active. This argument may be omitted if <span class="ltx_text ltx_font_typewriter">last</span> is also omitted, and if so it defaults to turn 1.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">last</span>
                </td>
<td class="ltx_td ltx_align_left">integer</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">The last turn where this dump should be active, –1 meaning “untill the end of the simulation”. This argument may be omitted if <span class="ltx_text ltx_font_typewriter">first</span> is also omitted, and if so it defaults to -1.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">HIGH</span>
                </td>
<td class="ltx_td ltx_align_left">keyword</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">If present anywhere in the <span class="ltx_text ltx_font_typewriter">DUMP</span> block, this triggers high-precission output, meaning more digits in the output files.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                  <span class="ltx_text ltx_font_typewriter">FRONT</span>
                </td>
<td class="ltx_td ltx_align_left">keyword</td>
<td class="ltx_td ltx_align_justify" style="width:281.9pt;">If present anywhere in the <span class="ltx_text ltx_font_typewriter">DUMP</span> block, this keyword triggers the DUMPed particles to be dumped in front of the element, i.e. before the kick. This works for all elements, including <span class="ltx_text ltx_font_typewriter">BLOC</span>s, when combined with the <span class="ltx_text ltx_font_typewriter">ALL</span> as <span class="ltx_text ltx_font_typewriter">element name</span>. Note that <span class="ltx_text ltx_font_typewriter">FRONT</span> is not yet supported for thick tracking, and trying to use this combination will produce a run-time error.</td>
</tr>
</tbody>
</table>
</div>
<figure id="Ch8.T1" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table 8.1: </span>The following formats, set by the <span class="ltx_text ltx_font_typewriter">format</span> option, are accepted:</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#B3B3FF;">
#/Pos</span>
              </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#B3B3FF;">Description</span>
              </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></th>
<th class="ltx_td ltx_align_justify" style="width:392.6pt;"></th>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_typewriter">0</span></span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">General format</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">No header.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter">turn structure_element_idx single_element_idx single_element_name s x1[m] x1'[rad] y1[m] y2'[rad] momentum[GeV/c] dE/E[GeV]</span>
              </td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_typewriter">1</span></span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">Format for aperture check</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter"># ID turn s[m] x[mm] xp[mrad] y[mm] yp[mrad] dE/E ktrack</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter">particleID turn s[m] x[mm] xp[mrad] y[mm] yp[mrad] dE/E ktrack</span>
              </td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_typewriter">2</span></span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">Modified format for aperture check</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">(single element)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter"># DUMP format #2, bez=<span class="ltx_text" style="color:#1A1AFF;">bez(i)</span>, number of particles=<span class="ltx_text" style="color:#1A1AFF;">napx</span>, dump period=<span class="ltx_text" style="color:#1A1AFF;">ndumpt(i)</span>, first turn=<span class="ltx_text" style="color:#1A1AFF;">dumpfirst(i)</span>, last turn=<span class="ltx_text" style="color:#1A1AFF;">dumplast(i)</span>, HIGH=<span class="ltx_text" style="color:#1A1AFF;">T/F</span>, FRONT=<span class="ltx_text" style="color:#1A1AFF;">T/F</span></span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">(all elements)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter"># DUMP format #2, ALL ELEMENTS, number of particles=<span class="ltx_text" style="color:#1A1AFF;">napx</span>, dump period=<span class="ltx_text" style="color:#1A1AFF;">ndumpt(i)</span>, first turn=<span class="ltx_text" style="color:#1A1AFF;">dumpfirst(i)</span>, last turn=<span class="ltx_text" style="color:#1A1AFF;">dumplast(i)</span>, HIGH=<span class="ltx_text" style="color:#1A1AFF;">T/F</span>, FRONT=<span class="ltx_text" style="color:#1A1AFF;">T/F</span></span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">Here <span class="ltx_text" style="color:#1A1AFF;">bez</span> is the name of the SINGLE ELEMENT, and <span class="ltx_text" style="color:#1A1AFF;">napx</span> the number of particles being tracked (per pack in case of collimation), <span class="ltx_text" style="color:#1A1AFF;">ndumpt(i)</span> the dump frequency as described above, and <span class="ltx_text" style="color:#1A1AFF;">dumpfirst(i)</span> and <span class="ltx_text" style="color:#1A1AFF;">dumplast(i)</span> the first and last turn as descirbed below.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">
<span class="ltx_text ltx_font_typewriter">HIGH</span> and <span class="ltx_text ltx_font_typewriter">FRONT</span> is normally false, unless this (global) option is active, as described below.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter"># ID turn s[m] x[mm] xp[mrad] y[mm] yp[mrad] z[mm] dE/E ktrack</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">If there are multiple single elements attached to the file, the headers are repeated.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">As described in the header, one per particle and per turn.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_typewriter">3</span></span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">Modified format for aperture check (Binary)</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">No header.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">A number of Fortran records describing which elements are used and the current dump period is added one per relevant line in the <span class="ltx_text ltx_font_typewriter">DUMP</span> block.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter">particleID turn s[m] x[mm] xp[mrad] y[mm] yp[mrad] z[mm] dE/E ktrack</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">The Fortran code <span class="ltx_text ltx_font_typewriter">SixTest/readDump3/readDump3.f90</span> can be used to convert these files into the format 2 (sans headers).</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_typewriter">3</span></span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">Beam means</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">Same as for format 2.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter"># napx turn s[m] &lt;x&gt;[mm] &lt;xp&gt;[mrad] &lt;y&gt;[mm] &lt;yp&gt;[mrad] &lt;z&gt;[mm] &lt;dE/E&gt;[1]</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">If there are multiple single elements attached to the file, the headers are repeated.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">As described in the header; one per turn (and for collimation, one per pack of particles).</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_typewriter">5</span></span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">Beam mean and sigma</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">The same as for format 2.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter"># napx turn s[m] &lt;x&gt;[mm] &lt;xp&gt;[mrad] &lt;y&gt;[mm] &lt;yp&gt;[mrad] &lt;z&gt;[mm] &lt;dE/E&gt;[1] &lt;x^2&gt; &lt;x*xp&gt; &lt;x*y&gt; &lt;x*yp&gt; &lt;x*z&gt; &lt;x*(dE/E)&gt; &lt;xp^2&gt; &lt;xp*y&gt; &lt;xp*yp&gt; &lt;xp*z&gt; &lt;xp*(dE/E)&gt; &lt;y^2&gt; &lt;y*yp&gt; &lt;y*z&gt; &lt;y*(dE/E)&gt; &lt;yp^2&gt; &lt;yp*z&gt; &lt;yp*(dE/E)&gt; &lt;z^2&gt; &lt;z*(dE/E)&gt; &lt;(dE/E)^2&gt;</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">If there are multiple single elements attached to the file, the headers are repeated. A number of lines describing which elements are used and the current dump period is added one per relevant line in DUMP block.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">As described in the header; one per turn (and for collimation, one per pack of particles). For the “product” quantities, the units are the product of the units of the “normal” ones.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_typewriter">6</span></span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">Beam mean and sigma (canonical)</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">The same as for format 2.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter"># napx turn s[m] &lt;x&gt;[m] &lt;px&gt;[1] &lt;y&gt;[m] &lt;py&gt;[m] &lt;sigma&gt;[m] &lt;psigma&gt;[1] &lt;x^2&gt; &lt;x*px&gt; &lt;x*y&gt; &lt;x*py&gt; &lt;x*sigma&gt; &lt;x*psigma&gt; &lt;px^2&gt; &lt;px*y&gt; &lt;px*py&gt; &lt;px*sigma&gt; &lt;px*psigma&gt; &lt;y^2&gt; &lt;y*py&gt; &lt;y*sigma&gt; &lt;y*psigma&gt; &lt;py^2&gt; &lt;py*sigma&gt; &lt;py*psigma&gt; &lt;sigma^2&gt; &lt;sigma*psigma&gt; &lt;psigma^2&gt;</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">If there are multiple single elements attached to the file, the headers are repeated. A number of lines describing which elements are used and the current dump period is added one per relevant line in <span class="ltx_text ltx_font_typewriter">DUMP</span> block.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">As described in the header; one per turn (and for collimation, one per pack of particles). For the “product” quantities, the units are the product of the units of the “normal” ones. Note that the <math id="Ch8.T1.m1" class="ltx_Math" alttext="\sigma=s-\beta_{0}ct" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></mrow></mrow></math> is the same as the <math id="Ch8.T1.m2" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math> used in the formats above, except for the unit of m instead of mm; and that <math id="Ch8.T1.m3" class="ltx_Math" alttext="p_{\sigma}=\Delta E/\left(\beta_{0}P_{0}c\right)" display="inline"><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>=</mo><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>E</mi></mrow><mo>/</mo><mrow><mo>(</mo><mrow id="XM231"><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi></mrow><mo>)</mo></mrow></mrow></mrow></math>. For more details, see the physics manual <cite class="ltx_cite">[<a href="#bib.bib16" title="" class="ltx_ref">16</a>]</cite>.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_typewriter">7</span></span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">Modified format for aperture check (normalized coordinates)</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">Dumps the particle trajectories in normalized coordinates. If the coordinates are dumped at the start of the sequence (<span class="ltx_text ltx_font_typewriter">StartDUMP</span>), the normalization matrix as used for the initialization of the particle amplitudes is used. This means, that if 4D optics are chosen, the 4D matrix is used, if 6D optics is chosen, the matrix obtained from the 6D optics calculation is chosen. For every other element except <span class="ltx_text ltx_font_typewriter">StartDUMP</span>, the 6D optics are used independent of the tracking method chosen. In this case the 6D optics needs to be run and the following lines have to be inserted in <span class="ltx_text ltx_font_typewriter">fort.3</span>:
<br class="ltx_break"><pre class="ltx_verbatim ltx_font_typewriter">
DUMP
element_name_1 1 unit_1 7 filename_1 first_turn_1 last_turn_1
...
NEXT
LINE
ELEMENT  0 2 1 emit_1 emit_2
NEXT
</pre>
<br class="ltx_break">If there are multiple single elements attached to the file, the headers are repeated.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">The same as for format 2.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">Closed orbit <math id="Ch8.T1.m4" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch8.T1.m5" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>,<math id="Ch8.T1.m6" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch8.T1.m7" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>,<math id="Ch8.T1.m8" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch8.T1.m9" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>, units are <math id="Ch8.T1.m10" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM232">mm</mi><mo>,</mo><mi id="XM233">mrad</mi><mo>,</mo><mi id="XM234">mm</mi><mo>,</mo><mi id="XM235">mrad</mi><mo>,</mo><mn id="XM236">1</mn><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #3</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">Matrix of eigenvectors (<span class="ltx_text ltx_font_typewriter">tamatrix</span>). Eigenvectors are normalized, rotated and ordered as in the Ripken formalism and described in the SixTrack physics manual, Chapter “Optics Calculation”. The matrix <span class="ltx_text ltx_font_typewriter">tamatrix</span> is in canonical variables <math id="Ch8.T1.m11" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch8.T1.m12" class="ltx_Math" alttext="p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>,<math id="Ch8.T1.m13" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch8.T1.m14" class="ltx_Math" alttext="p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>,<math id="Ch8.T1.m15" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch8.T1.m16" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>, units are <math id="Ch8.T1.m17" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM237">mm</mi><mo>,</mo><mi id="XM238">mrad</mi><mo>,</mo><mi id="XM239">mm</mi><mo>,</mo><mi id="XM240">mrad</mi><mo>,</mo><mn id="XM241">1</mn><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">Inverse of ta-matrix <span class="ltx_text ltx_font_typewriter">inv(tamatrix)</span> used for normalization where
<table id="Ch8.E1" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch8.E1.m1" class="ltx_Math" alttext="z_{\rm norm}=\texttt{inv(tamatrix)}\cdot z" display="block"><mrow><msub><mi>z</mi><mi>norm</mi></msub><mo>=</mo><mrow><mtext mathvariant="monospace">inv(tamatrix)</mtext><mo>⋅</mo><mi>z</mi></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(8.1)</span></td>
</tr>
</table>
Matrix <span class="ltx_text ltx_font_typewriter">inv(tamatrix)</span> and <math id="Ch8.T1.m18" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math> is given in canonical variables <math id="Ch8.T1.m19" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch8.T1.m20" class="ltx_Math" alttext="p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>,<math id="Ch8.T1.m21" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch8.T1.m22" class="ltx_Math" alttext="p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>,<math id="Ch8.T1.m23" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch8.T1.m24" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>, units are <math id="Ch8.T1.m25" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM242">mm</mi><mo>,</mo><mi id="XM243">mrad</mi><mo>,</mo><mi id="XM244">mm</mi><mo>,</mo><mi id="XM245">mrad</mi><mo>,</mo><mn id="XM246">1</mn><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #5</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">Header with units of normalized particle coordinates:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter"># ID turn s[m] nx[1.e-3 sqrt(m)] npx[1.e-3 sqrt(m)] ny[1.e-3 sqrt(m)] npy[1.e-3 sqrt(m)] nz[1.e-3 sqrt(m)] ndp/p[1.e-3 sqrt(m)] ktrack</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">As described in the header, one per particle and per turn.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_typewriter">8</span></span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">Modified format for aperture check (normalized coordinates, binary)</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">No header.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">A number of Fortran records describing which elements are used and the current dump period is added one per relevant line in DUMP block. Format 8 is format 7 without header and in binary format.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter"># ID turn s[m] nx[1.e-3 sqrt(m)] npx[1.e-3 sqrt(m)] ny[1.e-3 sqrt(m)] npy[1.e-3 sqrt(m)] nz[1.e-3 sqrt(m)] ndp/p[1.e-3 sqrt(m)] ktrack</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">The Fortran code <span class="ltx_text ltx_font_typewriter">SixTest/readDump3/readDump3.f90</span> can be used to convert these files into the format 2 (sans headers).</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">
<span class="ltx_text ltx_font_typewriter">9</span></span>
              </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text" style="background-color:#D9D9FF;">Beam mean and sigma (normalized coordinates)</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">The same as for format 2.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Header #2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">
                <span class="ltx_text ltx_font_typewriter"># napx turn s[m] &lt;nx&gt;[1.e-3 sqrt(m)] &lt;npx&gt;[1.e-3 sqrt(m)] &lt;ny&gt;[1.e-3 sqrt(m)] &lt;npy&gt;[1.e-3 sqrt(m)] &lt;nsigma&gt;[1.e-3 sqrt(m)] &lt;npsigma&gt;[1.e-3 sqrt(m)] &lt;nx^2&gt; &lt;nx*npx&gt; &lt;nx*ny&gt; &lt;nx*npy&gt; &lt;nx*nsigma&gt; &lt;nx*npsigma&gt; &lt;npx^2&gt; &lt;npx*ny&gt; &lt;npx*npy&gt; &lt;npx*nsigma&gt; &lt;npx*npsigma&gt; &lt;ny^2&gt; &lt;ny*npy&gt; &lt;ny*nsigma&gt; &lt;ny*npsigma&gt; &lt;npy^2&gt; &lt;npy*nsigma&gt; &lt;npy*npsigma&gt; &lt;nsigma^2&gt; &lt;nsigma*npsigma&gt; &lt;npsigma^2&gt;</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:392.6pt;">If there are multiple single elements attached to the file, the headers are repeated. A number of lines describing which elements are used and the current dump period is added one per relevant line in <span class="ltx_text ltx_font_typewriter">DUMP</span> block.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:392.6pt;">As described in the header; one per turn (and for collimation, one per pack of particles). For the “product” quantities, the units are the product of the units of the “normal” ones.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:392.6pt;"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:51.2pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:392.6pt;"></th>
</tr>
</table>
</figure>
</section>
<section id="Ch8.S1.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Examples</h5>
<div id="Ch8.S1.SS1.SSS0.Px2.p1" class="ltx_para">
<pre class="ltx_verbatim ltx_font_typewriter">
DUMP
/ALL 1 663 2
/CRAB5 1 659 0
ip1 1 660 2 IP1_DUMP.dat
ip5 1 662 2
mqml.10l4.b1..1 1 661 2 MQ_DUMP.dat
NEXT
</pre>
</div>
</section>
</section>
<section id="Ch8.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">8.2 </span>FMA Analysis</h3>
<div id="Ch8.S2.p1" class="ltx_para">
<p class="ltx_p">The FMA block generates the basic files needed for frequency map analysis (FMA).
Explicitly, it returns one output file with calculated tunes and amplitudes for the files specified in the <span class="ltx_text ltx_font_typewriter">DUMP</span> block, see Sec. <a href="#Ch8.S1" title="8.1 Dumping of Beam Population ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">8.1</span></a>.
For the calculation of the tunes (<math id="Ch8.S2.p1.m1" class="ltx_Math" alttext="Q_{1}" display="inline"><msub><mi>Q</mi><mn>1</mn></msub></math>, <math id="Ch8.S2.p1.m2" class="ltx_Math" alttext="Q_{2}" display="inline"><msub><mi>Q</mi><mn>2</mn></msub></math> and <math id="Ch8.S2.p1.m3" class="ltx_Math" alttext="Q_{3}" display="inline"><msub><mi>Q</mi><mn>3</mn></msub></math>) in normalized phase space, the normalization matrix is extracted from the <span class="ltx_text ltx_font_typewriter">LINE</span> block (linear optics calculation in 6D, <a href="#Ch6.S1" title="6.1 Linear Optics Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.1</span></a>).
In case the particles are dumped at the beginning of the sequence (<span class="ltx_text ltx_font_typewriter">StartDUMP</span>), the closed orbit and normalization matrix used also for the initialization of the particles is used.
In this case, the <span class="ltx_text ltx_font_typewriter">LINE</span> block is not needed.
The tunes <math id="Ch8.S2.p1.m4" class="ltx_Math" alttext="Q_{1}" display="inline"><msub><mi>Q</mi><mn>1</mn></msub></math>, <math id="Ch8.S2.p1.m5" class="ltx_Math" alttext="Q_{2}" display="inline"><msub><mi>Q</mi><mn>2</mn></msub></math> and <math id="Ch8.S2.p1.m6" class="ltx_Math" alttext="Q_{3}" display="inline"><msub><mi>Q</mi><mn>3</mn></msub></math> are then calculated with the routine specified in the <span class="ltx_text ltx_font_typewriter">FMA</span> block either in physical coordinates (<math id="Ch8.S2.p1.m7" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch8.S2.p1.m8" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>,<math id="Ch8.S2.p1.m9" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch8.S2.p1.m10" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>,<math id="Ch8.S2.p1.m11" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch8.S2.p1.m12" class="ltx_Math" alttext="dE/E" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>E</mi></mrow><mo>/</mo><mi>E</mi></mrow></math>) or normalized phase space coordinates and dumped to the file <span class="ltx_text ltx_font_typewriter">fma_sixtrack</span> together with the minimum, maximum and average normalized particle amplitudes and phases.</p>
</div>
<div id="Ch8.S2.p2" class="ltx_para">
<p class="ltx_p">To use normalized coordinates for the FMA analysis is always possible in case of 6D tracking (remember to put the <span class="ltx_text ltx_font_typewriter">LINE</span> block for other elements than the start of the sequence). In case of 4D tracking, the following limitations apply:</p>
<ul id="Ch8.I1" class="ltx_itemize">
<li id="Ch8.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch8.I1.i1.p1" class="ltx_para">
<p class="ltx_p">The FMA analysis is only implemented for the start of the sequence (<span class="ltx_text ltx_font_typewriter">StartDUMP</span>). For other elements the normalization matrix would need to be obtained from the <span class="ltx_text ltx_font_typewriter">LINE</span> block, which has not been checked in case of 4D optics.</p>
</div>
</li>
<li id="Ch8.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch8.I1.i2.p1" class="ltx_para">
<p class="ltx_p">4D tracking with scan in energy is disabled as in this case the normalization matrix would need to be saved for each element and particle, which requires a huge amount of memory breaking other parts of the code.</p>
</div>
</li>
</ul>
<p class="ltx_p">In general it is also recommended to already normalize the coordinates in DUMP as this is faster than in FMA.</p>
</div>
<div id="Ch8.S2.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </td>
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">FMA</span>
              </td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </td>
<td class="ltx_td ltx_align_left">Variable, one for each file with particle amplitudes and tune calculation method, and one for each flag given.</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Format</span>
              </td>
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">filename_1 method_1 (fma_flag_norm_1 (fma_first_turn fma_last_turn))</span>
              </td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_left">OR <span class="ltx_text ltx_font_typewriter">NoNormDUMP</span>
</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
</tbody>
</table>
</div>
<div id="Ch8.S2.p4" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">The <span class="ltx_text ltx_font_typewriter">FMA</span> block has to be proceeded by the <span class="ltx_text ltx_font_typewriter">LINE</span> block (calculation of the normalization matrix) and the <span class="ltx_text ltx_font_typewriter">DUMP</span> block (dump particle coordinates).</p>
<pre class="ltx_verbatim ltx_font_typewriter">
DUMP
element_name_1 1 unit_1 2 filename_1 first_turn_1 last_turn_1
element_name_2 1 unit_2 2 filename_2 first_turn_2 last_turn_2
NEXT
LINE
ELEMENT  0 2 1 emit_1 emit_2
NEXT
FMA
filename_1 method_1 fma_flag_norm_1 fma_first_turn_1 fma_last_turn_1
filename_2 method_2 fma_flag_norm_2 fma_first_turn_2 fma_last_turn_2
NEXT
</pre>
<p class="ltx_p">For the <span class="ltx_text ltx_font_typewriter">DUMP</span> block (Sec. <a href="#Ch8.S1" title="8.1 Dumping of Beam Population ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">8.1</span></a>) the frequency has to be 1 (dump every turn) and the file format has to be 2 or 3.
For the linear optics calculation <a href="#Ch6.S1" title="6.1 Linear Optics Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.1</span></a>, the optics needs to be calculated at each element (mode ELEMENT), the number-of-blocks is then 0 and 6D linear optics calculation is required (<span class="ltx_text ltx_font_typewriter">ilin = 2</span>) in order to decouple the 6D motion.</p>
</div>
<section id="Ch8.S2.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Format Description</h5>
<div id="Ch8.S2.SS1.SSS0.Px1.p1" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify" style="width:79.7pt;">
                  <span class="ltx_text ltx_font_typewriter">filename</span>
                </td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">One of the output files specified in the <span class="ltx_text ltx_font_typewriter">FMA</span> block preceding <span class="ltx_text ltx_font_typewriter">DUMP</span> block.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify" style="width:79.7pt;">
                  <span class="ltx_text ltx_font_typewriter">method</span>
                </td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Method used to calculate the tune. Available methods are: <span class="ltx_text ltx_font_typewriter">TUNELASK, TUNEFIT, TUNENEWT1, TUNEABT, TUNEABT2, TUNEFFT, TUNEFFTI, TUNENEWT, TUNEAPA, NAFF</span>. A short description of the different methods is given in Table <a href="#Ch8.T2" title="Table 8.2 ‣ Output file format ‣ 8.2 FMA Analysis ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">8.2</span></a>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify" style="width:79.7pt;">
                  <span class="ltx_text ltx_font_typewriter">fma_flag_norm</span>
                </td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Optional flag for calculating the tunes with physical (<math id="Ch8.S2.SS1.SSS0.Px1.p1.m1" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch8.S2.SS1.SSS0.Px1.p1.m2" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>,<math id="Ch8.S2.SS1.SSS0.Px1.p1.m3" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch8.S2.SS1.SSS0.Px1.p1.m4" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>,<math id="Ch8.S2.SS1.SSS0.Px1.p1.m5" class="ltx_Math" alttext="s" display="inline"><mi>s</mi></math>,<math id="Ch8.S2.SS1.SSS0.Px1.p1.m6" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>) or normalized coordinates in case physical coordinates are used in DUMP. The default is using normalized coordinates (<span class="ltx_text ltx_font_typewriter">fma_flag_norm = 1</span>). For using physical coordinates explicitly set (<span class="ltx_text ltx_font_typewriter">fma_flag_norm = 0</span>). See <span class="ltx_text ltx_font_bold">Description</span> for the conditions under which normalization is available.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify" style="width:79.7pt;">
                  <span class="ltx_text ltx_font_typewriter">fma_first_turn, fma_last_turn</span>
                </td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">Turns used for FMA analysis. As the <span class="ltx_text ltx_font_typewriter">DUMP</span> files are used as input for the FMA analysis <span class="ltx_text ltx_font_typewriter">fma_first_turn</span> must be larger <span class="ltx_text ltx_font_typewriter">first_turn</span> in the <span class="ltx_text ltx_font_typewriter">DUMP</span> block and <span class="ltx_text ltx_font_typewriter">fma_last_turn</span> must be smaller than <span class="ltx_text ltx_font_typewriter">last_turn</span> in the <span class="ltx_text ltx_font_typewriter">DUMP</span> block. If <span class="ltx_text ltx_font_typewriter">fma_last_turn = -1</span> the last turn number in the dump file is taken as the last turn number, including the last turn tracked if the <span class="ltx_text ltx_font_typewriter">last</span> setting of the dump equals -1. By default, <span class="ltx_text ltx_font_typewriter">FMA</span> will use the same turns as for the <span class="ltx_text ltx_font_typewriter">DUMP</span>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify" style="width:79.7pt;">
                  <span class="ltx_text ltx_font_typewriter">NoNormDUMP</span>
                </td>
<td class="ltx_td ltx_align_justify" style="width:325.2pt;">A flag for disabling the <span class="ltx_text ltx_font_typewriter">NORM_filename*</span> output files. This saves disk space and speeds up the calculation of the FMA. If used, the flag should be alone on a one line of the FMA input block in <span class="ltx_text ltx_font_typewriter">fort.3</span>. Note that the capitalization must be correct for the flag to be recognized.</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="Ch8.S2.SS1.SSS0.Px2" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Output file format</h5>
<div id="Ch8.S2.SS1.SSS0.Px2.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch8.S2.SS1.SSS0.Px2.p2" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_typewriter">FMA</span> block returns the output files <span class="ltx_text ltx_font_typewriter">NORM_filename*</span> containing the normalized phase space coordinates, where <span class="ltx_text ltx_font_typewriter">filename</span> are the filenames specified in the <span class="ltx_text ltx_font_typewriter">DUMP</span> block, and the file <span class="ltx_text ltx_font_typewriter">fma_sixtrack</span> containing the initial, average, minimum and maximum amplitudes and the calculated tunes for each specified filename and method.
The structure of the <span class="ltx_text ltx_font_typewriter">NORM_filename*</span> is described in Table <a href="#Ch8.T3" title="Table 8.3 ‣ Output file format ‣ 8.2 FMA Analysis ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">8.3</span></a> and of the <span class="ltx_text ltx_font_typewriter">fma_sixtrack</span> in Table <a href="#Ch8.T4" title="Table 8.4 ‣ Output file format ‣ 8.2 FMA Analysis ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">8.4</span></a>.</p>
</div>
<figure id="Ch8.T2" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 8.2: </span>Available tune calculation methods in SixTrack.</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle" style="width:433.6pt;">
<thead class="ltx_thead">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                  <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Library</span></span>
                </th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Method</span>
                </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
                </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_text ltx_font_typewriter">PLATO</span> <cite class="ltx_cite">[<a href="#bib.bib29" title="" class="ltx_ref">29</a>, <a href="#bib.bib30" title="" class="ltx_ref">30</a>]</cite>
</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">TUNELASK</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Compute the tune of a 2d map by means of laskar method. A first indication of the position of the tune is obtained by means of a FFT. Refinement is obtained through a newton procedure.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">TUNEFIT</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune using a modified apa algorithm. The first step consists of taking the average of the tune computed with the APA method, then a best fit is performed.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">TUNENEWT1</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune using a discrete version of laskar method. It includes a newton method for the search of the frequency.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">TUNENEWT</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune using a discrete version of laskar method. It includes a newton method for the search of the frequency.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">TUNEABT</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune using FFT interpolated method.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">TUNEABT2</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune using the interpolated FFT method with hanning filter.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">TUNEFFT</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune as the FFT on a two dimensional plane, given n iterates of a map. The FFT is performed over the maximum mft which satifies <math id="Ch8.T2.m1" class="ltx_Math" alttext="2^{\rm mft}&lt;=n" display="inline"><mrow><msup><mn>2</mn><mi>mft</mi></msup><mo>≤</mo><mi>n</mi></mrow></math>, where the maximum number of iterates is fixed in the parameter n.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">TUNEFFTI</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune as the FFT on a two dimensional plane, given n iterates of a map. The FFT is performed over the maximum mft which satifies <math id="Ch8.T2.m2" class="ltx_Math" alttext="2^{\rm mft}&lt;=n" display="inline"><mrow><msup><mn>2</mn><mi>mft</mi></msup><mo>≤</mo><mi>n</mi></mrow></math>. Then, the FFT is interpolated fitting the three points around the maximum using a Gaussian. The tune is computed as the maximum of the Gaussian.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">TUNEAPA</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune as the average phase advance on a two dimensional plane, given n iterates of a map.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_text ltx_font_typewriter">NAFF</span> <cite class="ltx_cite">[<a href="#bib.bib31" title="" class="ltx_ref">31</a>, <a href="#bib.bib32" title="" class="ltx_ref">32</a>]</cite>
</td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_typewriter">NAFF</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t">Computes the tune using the laskar method. The first estimation of the tune is obtained with an FFT and the precise value is determined by maximizing the Fourier integral. A Hann window of first and second order for the transverse and longitudinal motion are used respectively. The <span class="ltx_text ltx_font_typewriter">NAFF</span> flag must be enabled at build time <cite class="ltx_cite">[<a href="#bib.bib33" title="" class="ltx_ref">33</a>]</cite>.</td>
</tr>
</tbody>
</table>
</figure>
<figure id="Ch8.T3" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 8.3: </span>Format of the <span class="ltx_text ltx_font_typewriter">NORM</span> files</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle" style="width:433.6pt;">
<tbody class="ltx_tbody">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                  <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Line Number</span></span>
                </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Type</span>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">1</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Closed orbit <math id="Ch8.T3.m1" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch8.T3.m2" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>,<math id="Ch8.T3.m3" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch8.T3.m4" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>,<math id="Ch8.T3.m5" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch8.T3.m6" class="ltx_Math" alttext="dE/E" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>E</mi></mrow><mo>/</mo><mi>E</mi></mrow></math>, units are <math id="Ch8.T3.m7" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM247">mm</mi><mo>,</mo><mi id="XM248">mrad</mi><mo>,</mo><mi id="XM249">mm</mi><mo>,</mo><mi id="XM250">mrad</mi><mo>,</mo><mn id="XM251">1</mn><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">2–38</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Matrix of eigenvectors (<span class="ltx_text ltx_font_typewriter">tamatrix</span>). Eigenvectors are normalized, rotated and ordered as in the Ripken formalism. The matrix <span class="ltx_text ltx_font_typewriter">tamatrix</span> is in canonical variables <math id="Ch8.T3.m8" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch8.T3.m9" class="ltx_Math" alttext="p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>,<math id="Ch8.T3.m10" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch8.T3.m11" class="ltx_Math" alttext="p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>,<math id="Ch8.T3.m12" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch8.T3.m13" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>, units are <math id="Ch8.T3.m14" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM252">mm</mi><mo>,</mo><mi id="XM253">mrad</mi><mo>,</mo><mi id="XM254">mm</mi><mo>,</mo><mi id="XM255">mrad</mi><mo>,</mo><mn id="XM256">1</mn><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">39–75</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Inverse of ta-matrix <span class="ltx_text ltx_font_typewriter">inv(tamatrix)</span> used for normalization where <math id="Ch8.T3.m15" class="ltx_Math" alttext="z_{\rm norm}=\rm{ta}\cdot z" display="inline"><mrow><msub><mi>z</mi><mi>norm</mi></msub><mo>=</mo><mrow><mi>ta</mi><mo>⋅</mo><mi mathvariant="normal">z</mi></mrow></mrow></math>. Matrix <span class="ltx_text ltx_font_typewriter">inv(tamatrix)</span> is given in canonical variables <math id="Ch8.T3.m16" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch8.T3.m17" class="ltx_Math" alttext="p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>,<math id="Ch8.T3.m18" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch8.T3.m19" class="ltx_Math" alttext="p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>,<math id="Ch8.T3.m20" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch8.T3.m21" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>, units are <math id="Ch8.T3.m22" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM257">mm</mi><mo>,</mo><mi id="XM258">mrad</mi><mo>,</mo><mi id="XM259">mm</mi><mo>,</mo><mi id="XM260">mrad</mi><mo>,</mo><mn id="XM261">1</mn><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">76</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Header with units:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r">
                  <span class="ltx_text ltx_font_typewriter"># id turn pos[m] nx[1.e-3 sqrt(m)] npx[1.e-3 sqrt(m)] ny[1.e-3 sqrt(m)] npy[1.e-3 sqrt(m)] nsig[1.e-3 sqrt(m)] ndp/p[1.e-3 sqrt(m)] kt</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">77–EOF</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t">See header in line 76: <span class="ltx_text ltx_font_typewriter">particle id, turn number position s[m], normalized coordinates <math id="Ch8.T3.m23" class="ltx_Math" alttext="[10^{-3}\sqrt{\rm m}]" display="inline"><mrow><mo mathvariant="normal" stretchy="false">[</mo><mrow id="XM262"><msup><mn mathvariant="normal">10</mn><mrow><mo mathvariant="normal">-</mo><mn mathvariant="normal">3</mn></mrow></msup><mo mathvariant="monospace">⁢</mo><msqrt><mi mathvariant="normal">m</mi></msqrt></mrow><mo mathvariant="normal" stretchy="false">]</mo></mrow></math>, ktrack</span> (type of element)</td>
</tr>
</tbody>
</table>
</figure>
<figure id="Ch8.T4" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 8.4: </span>Format of the fma_sixtrack file</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle" style="width:433.6pt;">
<thead class="ltx_thead">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                  <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Line Number</span></span>
                </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Type</span>
                </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">
                  <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
                </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">1–2</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Header with units and description:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r">
                  <span class="ltx_text ltx_font_typewriter"># eps0*,eps2*,eps3* all in 1.e-6*m, phi* [rad]</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r">
                  <span class="ltx_text ltx_font_typewriter"># inputfile method id q1 q2 q3 eps1_min eps2_min eps3_min eps1_max eps2_max eps3_max eps1_avg eps2_avg eps3_avg eps1_0 eps2_0 eps3_0 phi1_0 phi2_0 phi3_0 norm_flag first_turn last_turn</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">3–EOF</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t">See header in line 1-2: The lines are ordered as particles 1-npart for (inputfile1,method1), then particles 1-npart for (inputfile2,method2), etc.. The minimum (min), maximum (max) and average (avg) are taken over the number of turns in the inputfile (fiel specified in the FMA and DUMP block). Units are <math id="Ch8.T4.m1" class="ltx_Math" alttext="\mu\rm m" display="inline"><mrow><mi>μ</mi><mo>⁢</mo><mi mathvariant="normal">m</mi></mrow></math> for <span class="ltx_text ltx_font_typewriter">eps*</span> and rad for <span class="ltx_text ltx_font_typewriter">phi*</span>, where <span class="ltx_text ltx_font_typewriter">phi*</span> is the angle in the normalized phase space coordinates.</td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch8.S2.SS1.SSS0.Px3" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Example</h5>
<div id="Ch8.S2.SS1.SSS0.Px3.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch8.S2.SS1.SSS0.Px3.p2" class="ltx_para">
<p class="ltx_p">An input block to compare the tunes at element IP3 calculated over the interval <math id="Ch8.S2.SS1.SSS0.Px3.p2.m1" class="ltx_Math" alttext="[1,4096]" display="inline"><mrow><mo stretchy="false">[</mo><mn id="XM263">1</mn><mo>,</mo><mn id="XM264">4096</mn><mo stretchy="false">]</mo></mrow></math> and <math id="Ch8.S2.SS1.SSS0.Px3.p2.m2" class="ltx_Math" alttext="[5905,10000]" display="inline"><mrow><mo stretchy="false">[</mo><mn id="XM265">5905</mn><mo>,</mo><mn id="XM266">10000</mn><mo stretchy="false">]</mo></mrow></math>, and using the method <span class="ltx_text ltx_font_typewriter">TUNELASK</span> would look like:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
DUMP
IP3 1 1030 2 IP3_DUMP_1 1 4096
IP3..1 1 1031 2 IP3_DUMP_2 5905 10000
IP3..2 1 1032 2 IP3_DUMP_3 1 4096
IP3..3 1 1033 2 IP3_DUMP_4 5905 10000
NEXT
LINE
ELEMENT  0 2 1 3.75 3.75
NEXT
FMA
IP3_DUMP_1 TUNELASK
IP3_DUMP_2 TUNELASK 1 512 1024
IP3_DUMP_3 TUNELASK 0
IP3_DUMP_4 TUNELASK 0 512 1024
NEXT
</pre>
<p class="ltx_p">where for <span class="ltx_text ltx_font_typewriter">IP3_DUMP_1</span> and <span class="ltx_text ltx_font_typewriter">IP3_DUMP_2</span> the tunes are calculated using normalized coordinates (default) and for <span class="ltx_text ltx_font_typewriter">IP3_DUMP_3</span> and <span class="ltx_text ltx_font_typewriter">IP3_DUMP_4</span> the physical coordinates are used (<span class="ltx_text ltx_font_typewriter">fma_norm_flag = 0</span>).
For <span class="ltx_text ltx_font_typewriter">IP3_DUMP_2</span> and <span class="ltx_text ltx_font_typewriter">IP3_DUMP_4</span> the turns from 512 to 1024 are used for the FMA analysis. This is particularly useful for detecting the maximum diffusion in tunes by taking the maximum over difference over several moving windows.</p>
</div>
<div id="Ch8.S2.SS1.SSS0.Px3.p3" class="ltx_para">
<p class="ltx_p">Note that all element names have to be different due to a limitation in DUMP module. This means practically, that one needs to insert additional markers (here <span class="ltx_text ltx_font_typewriter">IP3..1</span> etc.) in the SixDesk <cite class="ltx_cite">[<a href="#bib.bib34" title="" class="ltx_ref">34</a>, <a href="#bib.bib35" title="" class="ltx_ref">35</a>]</cite> mask file prior to the SixTrack run. It is important to install the additional markers after cycling the machine if the machine is cycled at the location of the additional (e.g. <span class="ltx_text ltx_font_typewriter">IP3</span>), as they are installed in front of the element given in the from statement in the cycle command.</p>
</div>
</section>
</section>
<section id="Ch8.S3" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">8.3 </span>ZIPFile Combined and Compressed Output</h3>
<div id="Ch8.S3.p1" class="ltx_para">
<p class="ltx_p">In order to retrieve extra simulation output such as <span class="ltx_text ltx_font_typewriter">DUMP</span> or <span class="ltx_text ltx_font_typewriter">FMA</span> from BOINC, it is necessary to pack the output files into a single file with a special name that will be retrieved.
This can be achieved with the <span class="ltx_text ltx_font_typewriter">ZIPF</span> block, which packs the listed files into the compressed archive <span class="ltx_text ltx_font_typewriter">Sixout.zip</span> at the end of the simulation.</p>
</div>
<div id="Ch8.S3.p2" class="ltx_para">
<p class="ltx_p">Note that if one of the files do not exist at the end of the simulation, it will be silently skipped and not included in the archive.</p>
</div>
<div id="Ch8.S3.p3" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Keyword</span>
              </td>
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_typewriter">ZIPF</span>
              </td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                <span class="ltx_text ltx_font_bold">Data lines</span>
              </td>
<td class="ltx_td ltx_align_left">Variable, one for each file that is to be packed.</td>
<td class="ltx_td ltx_align_justify" style="width:303.5pt;"></td>
</tr>
</tbody>
</table>
</div>
<section id="Ch8.S3.SS1.SSS0.Px1" class="ltx_paragraph">
<h5 class="ltx_title ltx_title_paragraph">Example</h5>
<div id="Ch8.S3.SS1.SSS0.Px1.p1" class="ltx_para">
<pre class="ltx_verbatim ltx_font_typewriter">
ZIPF
fma_sixtrack
IP3_DUMP_1
fort.90
NEXT
</pre>
<div class="ltx_pagination ltx_role_newpage"></div>
</div>
</section>
</section>
</section>
<section id="A1" class="ltx_appendix">
<h2 class="ltx_title ltx_title_appendix">
<span class="ltx_tag ltx_tag_appendix">Appendix A </span>List of Keywords</h2>
<figure id="A1.T1" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption" style="font-size:70%;"><span class="ltx_tag ltx_tag_table">Table A.1: </span>List of Keywords</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">#</span></span>
          </th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Keyword</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t" colspan="2">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Input Data Block</span>
          </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text ltx_align_left ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Short Description</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">§</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Page</span>
          </th>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<th class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text ltx_align_left ltx_font_bold" style="font-size:70%;background-color:#D9D9FF;">Title</span>
          </th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#D9D9FF;"># of Lines</span>
          </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;"></th>
<th class="ltx_td ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_border_r ltx_border_t"></th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_border_l ltx_border_r"></th>
<th class="ltx_td"></th>
<th class="ltx_td ltx_align_justify" style="width:99.6pt;"></th>
<th class="ltx_td"></th>
<th class="ltx_td ltx_align_justify" style="width:113.8pt;"></th>
<th class="ltx_td"></th>
<th class="ltx_td"></th>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
1</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">BEAM</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">BEAM–BEAM Element</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">4-6D including Beam Separation &amp; Linear Coupling</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S5" title="4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.5</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S5" title="4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.5</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
2</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">BLOC</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Block–definition</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable + 1</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Blocks of Linear Elements</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2" title="3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2" title="3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
3</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">BLOCK</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Linear Parameters for each Structure Element</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S1" title="6.1 Linear Optics Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S1" title="6.1 Linear Optics Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
4</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">CAV</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Cavity in the Structure Input Block</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
5</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">CHRO</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Chromaticity Correction</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">2</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Correcting Chromaticity with Sextupoles</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S3" title="6.3 Chromaticity Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S3" title="6.3 Chromaticity Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
6</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">CORR</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Tune–shift Corrections</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">3</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Correction of Nonlinear Tune–Shift</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S11" title="6.11 Corrections ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.11</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S11" title="6.11 Corrections ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.11</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
7</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">COMB</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Combination of Elements</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Combining Different Elements for a Correction</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch5.S3" title="5.3 Combination of Elements ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch5.S3" title="5.3 Combination of Elements ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
8</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">COMM</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Comment Line</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">1</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Additional Comments</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch2.S3" title="2.3 Comment Line ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch2.S3" title="2.3 Comment Line ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
9</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">DAMAP</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Location for a Printout of a DA map</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S9" title="6.9 Differential Algebra ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.9</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S9" title="6.9 Differential Algebra ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.9</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
10</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">DECO</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Decoupling</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">3</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Compensation of Linear Coupling</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S5" title="6.5 Decoupling of Motion in the Transverse Planes ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.5</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S5" title="6.5 Decoupling of Motion in the Transverse Planes ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.5</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
11</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">DIFF</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Differential Algebra</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">1</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Calculating a One–turn Map with Differential Algebra</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S9" title="6.9 Differential Algebra ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.9</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S9" title="6.9 Differential Algebra ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.9</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
12</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">DISP</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Displacement of Elements</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Displacing Non-linear Elements</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS2" title="3.2.2 Displacement of Elements ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS2" title="3.2.2 Displacement of Elements ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
13</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">DUMP</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Writing the beam population to file</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch8.S1" title="8.1 Dumping of Beam Population ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">8.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch8.S1" title="8.1 Dumping of Beam Population ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">8.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
14</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">DYNK</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Dynamic kicks</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S4" title="4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S4" title="4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
15</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">EL</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Elliptical Aperture Limitation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S2" title="4.2 Aperture Limitations ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S2" title="4.2 Aperture Limitations ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
16</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">ELEMENT</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Linear Parameters after each Single Element</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S1" title="6.1 Linear Optics Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S1" title="6.1 Linear Optics Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
17</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">ELEN</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Electron lens</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S9" title="4.9 Electron lens ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.9</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S9" title="4.9 Electron lens ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.9</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
18</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">ENDE</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">End of SixTrack Input Structure</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch1.S3.SS1" title="1.3.1 Input Format ‣ 1.3 SixTrack Input Structure ‣ Chapter 1 Introduction" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1.3.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch1.S3.SS1" title="1.3.1 Input Format ‣ 1.3 SixTrack Input Structure ‣ Chapter 1 Introduction" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1.3.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
19</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">FLUC</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Random Fluctuation Starting Number</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">1</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Seed for the Random Generator</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch5.S1" title="5.1 Random Fluctuation Starting Number ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch5.S1" title="5.1 Random Fluctuation Starting Number ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
20</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">FMA</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Frequency Map Analysis</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch8.S2" title="8.2 FMA Analysis ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">8.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch8.S2" title="8.2 FMA Analysis ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">8.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
21</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">FREE</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <math id="A1.T1.m1" class="ltx_align_left" alttext="1^{st}" display="inline"><msup><mn>1</mn><mrow><mi>s</mi><mo>⁢</mo><mi>t</mi></mrow></msup></math>
            <span class="ltx_text" style="font-size:70%;"> Program Version</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">0</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Free Format Input from one File</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch2.S1" title="2.1 Program Version ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch2.S1" title="2.1 Program Version ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
22</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">GEOM</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <math id="A1.T1.m2" class="ltx_align_left" alttext="2^{nd}" display="inline"><msup><mn>2</mn><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi></mrow></msup></math>
            <span class="ltx_text" style="font-size:70%;"> Program Version</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">0</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Input of Machine Geometry in extra File</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch2.S1" title="2.1 Program Version ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch2.S1" title="2.1 Program Version ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
23</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">GO</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Start of Tracking in the Structure Input</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
24</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">HCOR=</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Specifies an Horizontal Orbit Corrector Element (Dipole or Multipole)</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
25</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">HMON=</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Specifies an Horizontal Orbit Monitor</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
26</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">INIT</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Initial Coordinates</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">16</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Setting up of the Initial Coordinates</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
27</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">ITER</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Iteration Errors</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">4</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;"># of Iterations and Precision for Correction Routines</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch2.S4" title="2.4 Iteration Errors ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch2.S4" title="2.4 Iteration Errors ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
28</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">LIMI</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Aperture Limitation</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Collimators that stop the Program when being hit</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S2" title="4.2 Aperture Limitations ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S2" title="4.2 Aperture Limitations ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
29</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">MULT</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Multipole</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">max. 11</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Multipole Coefficients normal and skew Coefficients up to </span>
            <math id="A1.T1.m3" class="ltx_align_left" alttext="10^{th}" display="inline"><msup><mn>10</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math>
            <span class="ltx_text" style="font-size:70%;"> order</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Combination of Different Multipoles in the </span>
            <span class="ltx_text ltx_align_left ltx_font_typewriter" style="font-size:70%;">ORGA</span>
            <span class="ltx_text" style="font-size:70%;"> Input Block</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch5.S2" title="5.2 Organisation of Random Numbers ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch5.S2" title="5.2 Organisation of Random Numbers ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
30</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NEXT</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Last Line of each Input Data Block</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
31</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NORM</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Normal Form</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">1</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Normal Form Operations on Maps</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S10" title="6.10 Normal Forms ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.10</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S10" title="6.10 Normal Forms ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.10</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
32</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">ORBI</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Orbit Adjustment</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Adjusting Orbit to desired Sigma Values</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
33</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">ORGA</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Organisation of Random Numbers</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable + 1</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Arranging Random Errors and Multipole sets</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch5.S2" title="5.2 Organisation of Random Numbers ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch5.S2" title="5.2 Organisation of Random Numbers ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
34</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">POST</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Post–processing</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">3</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Post–processing of the Tracking Data</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S12" title="6.12 Post–processing ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.12</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S12" title="6.12 Post–processing ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.12</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
35</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">PRIN</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Printout Selection</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">0</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Initiates the Printing of the Input Data</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch2.S2" title="2.2 Print Selection ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch2.S2" title="2.2 Print Selection ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
36</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">RE</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Rectangular Aperture Limitation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S2" title="4.2 Aperture Limitations ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S2" title="4.2 Aperture Limitations ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
37</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">RESO</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Resonance Compensation</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">6</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Compensation of up to 3 Different Resonances</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S8" title="6.8 Resonance Compensation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.8</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S8" title="6.8 Resonance Compensation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.8</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
38</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">RIPP</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Power Supply Ripple </span>
            <span class="ltx_text ltx_align_left" style="font-size:70%;color:#B30000;">Obsolete! Use <span class="ltx_text ltx_font_typewriter">DYNK</span></span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Invokes a Sinusoidal Tune Variation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S3" title="4.3 Power Supply Ripple ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S3" title="4.3 Power Supply Ripple ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
39</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">SEAR</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Search for Resonance Compensation Positions</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Evaluating Longitudinal Positions for a Resonance Compensation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S7" title="6.7 Search for Optimum Places to Compensate Resonances ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.7</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S7" title="6.7 Search for Optimum Places to Compensate Resonances ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.7</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
40</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">SING</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Single Elements</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Magnet Parameters of Single Elements</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
41</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">STRU</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Structure Input</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Structure of Linear Blocks and Non-linear Elements</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
42</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">SUBR</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Sub–resonance Calculation</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">1</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Calculation of </span>
            <math id="A1.T1.m4" class="ltx_align_left" alttext="1^{th}" display="inline"><msup><mn>1</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math>
            <span class="ltx_text" style="font-size:70%;"> Order Resonances up to </span>
            <math id="A1.T1.m5" class="ltx_align_left" alttext="9^{th}" display="inline"><msup><mn>9</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math>
            <span class="ltx_text" style="font-size:70%;"> Multipole Order</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S6" title="6.6 Sub–resonance Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.6</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S6" title="6.6 Sub–resonance Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.6</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
43</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">SYNC</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Synchrotron Oscillations</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">2</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Parameters concerning Synchrotron Oscillation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch7.S3" title="7.3 Synchrotron Oscillation ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch7.S3" title="7.3 Synchrotron Oscillation ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
44</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">TRAC</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Tracking Parameters</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">3</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">All major Tracking Parameters for the transversal Motion Plane</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
45</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">TUNE</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">Tune Variation</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">2 or 4</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Adjusting the Horizontal and Vertical Tunes</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S2" title="6.2 Tune Variation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S2" title="6.2 Tune Variation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
46</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">TROM</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">“Phase Trombone” element</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">mult. of 14</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Phase Shift Transparent for Linear Optics</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S7" title="4.7 “Phase Trombone” Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.7</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch4.S7" title="4.7 “Phase Trombone” Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.7</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
47</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">VCOR=</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Specifies an Vertical Orbit Corrector Element (Dipole or Multipole)</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
48</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">VMON=</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:99.6pt;"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Specifies an Vertical Orbit Monitor</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">
49</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">WIRE</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:99.6pt;">
            <span class="ltx_text" style="font-size:70%;">WIRE element</span>
          </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:113.8pt;">
            <span class="ltx_text" style="font-size:70%;">Wire element</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
            <a href="#Ch4.S6" title="4.6 Wire ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.6</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
            <a href="#Ch4.S6" title="4.6 Wire ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.6</span></a>
          </td>
</tr>
</table>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
<section id="A2" class="ltx_appendix">
<h2 class="ltx_title ltx_title_appendix">
<span class="ltx_tag ltx_tag_appendix">Appendix B </span>List of Default Values</h2>
<section id="A2.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">B.1 </span>Default Tracking Parameters</h3>
<div id="A2.S1.p1" class="ltx_para">
<p class="ltx_p">Some of the parameters for tracking are set to non–zero values.
This is done for instance to avoid as much as possible program errors such as division by zero due to an erroneous input.
The default values for the <span class="ltx_text ltx_font_italic">Iteration Errors</span> (<a href="#Ch2.S4" title="2.4 Iteration Errors ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.4</span></a>) see table <a href="#Ch2.T1" title="Table 2.1 ‣ 2.4 Iteration Errors ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.1</span></a>.</p>
</div>
<div id="A2.S1.p2" class="ltx_para">
<br class="ltx_break">
</div>
<figure id="A2.T1" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table B.1: </span>Default Tracking Parameters</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">#</span></span>
              </th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Description</span>
              </th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Value</span>
              </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">§</span>
              </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Page</span>
              </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
1</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">General Aperture Limitations (horizontal and vertical)</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1000 mm</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch4.S2" title="4.2 Aperture Limitations ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch4.S2" title="4.2 Aperture Limitations ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.2</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
2</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Starting in the Accelerator Structure at Element Number</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
3</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Turns in the forward Direction</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch7.S1" title="7.1 Tracking Parameters ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.1</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
4</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Initial horizontal Amplitude</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">0.001 mm</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
5</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Horizontal and vertical Phase Space Coupling Switches on</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
6</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Flat Bottom, Ramping and Flat Top Printout after Turn Number</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
7</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Printout of Coordinates (file 6) after Turn Number</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">10000</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
8</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Kinetic Energy [MeV] of the Reference Particle</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <math id="A2.T1.m1" class="ltx_Math" alttext="10^{-6}" display="inline"><msup><mn>10</mn><mrow><mo>-</mo><mn>6</mn></mrow></msup></math>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch7.S2" title="7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.2</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
9</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Harmonic Number</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch7.S3" title="7.3 Synchrotron Oscillation ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.3</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch7.S3" title="7.3 Synchrotron Oscillation ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_tag">7.3</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
10</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Momentum Compaction Factor</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">0.001</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
11</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Length of the Machine</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1 km</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
12</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Mass of the Particle (Proton)</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">938.2723128 </span>
                <math id="A2.T1.m2" class="ltx_Math" alttext="\mathrm{MeV}/\mathrm{c}^{2}" display="inline"><mrow><mi>MeV</mi><mo>/</mo><msup><mi mathvariant="normal">c</mi><mn>2</mn></msup></mrow></math>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
13</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Momentum Correction Factor for Distance in Phase Space</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
14</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Path–length Correction Factor for Distance in Phase Space</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
15</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Averaging Turn Interval for Post–processing</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <a href="#Ch6.S12" title="6.12 Post–processing ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.12</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <a href="#Ch6.S12" title="6.12 Post–processing ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.12</span></a>
              </td>
</tr>
</tbody>
</table>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
<section id="A2.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">B.2 </span>Default Size Parameters</h3>
<div id="A2.S2.p1" class="ltx_para">
<p class="ltx_p">For large machines the arrays holding the machine parameters might have to be increased.
The size of each of the dimensions of the arrays is therefore defined as a parameter.
This can be done by compiling with the <span class="ltx_text ltx_font_typewriter">BIGNPART</span>, <span class="ltx_text ltx_font_typewriter">HUGENPART</span>, <span class="ltx_text ltx_font_typewriter">BIGNBLZ</span>, or <span class="ltx_text ltx_font_typewriter">HUGENBLZ</span> flags.
The default values are adjusted to allow the treatment of a full LHC lattice: the tracking version uses 50 Mb and the DA version 400 Mb.</p>
</div>
<div id="A2.S2.p2" class="ltx_para">
<br class="ltx_break">
</div>
<figure id="A2.T2" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table B.2: </span>Default Size Parameters</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">#</span></span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Description</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Value</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Name</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">§</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;background-color:#B3B3FF;">Page</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
1</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Number of Coordinates used in the Correction Routines</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">6</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">MPA</span>
              </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
2</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Single Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">750</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NELE</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
3</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Blocks of Linear Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">160</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NBLO</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S2" title="3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S2" title="3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
4</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Linear Elements per Block</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">100</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NELB</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
5</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Total Number of Elements in the Structure</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">15000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NBLZ</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S2.SS1" title="3.2.1 Structure Input ‣ 3.2 Block Definitions ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
6</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Accelerator Super–periods</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">16</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NPER</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
7</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Total Number of Random Values</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">300000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NZFZ</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch5.S1" title="5.1 Random Fluctuation Starting Number ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch5.S1" title="5.1 Random Fluctuation Starting Number ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.1</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
8</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Random Values for the basic Set of Nonlinear Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">280000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NRAN</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
9</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Random Values for inserted Nonlinear Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">20000</span>
              </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch5.S2" title="5.2 Organisation of Random Numbers ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.2</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch5.S2" title="5.2 Organisation of Random Numbers ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.2</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
10</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Random Values for each Inserted Nonlinear Element</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">500</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">MRAN</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                <span class="ltx_text" style="font-size:70%;">Number of Nonlinear Elements that can be inserted</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                <span class="ltx_text" style="font-size:70%;">20</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
11</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Limit Number of Particles for Vectorisation</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">64</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NPART</span>
              </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
12</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Number of Elements for Combined Tasks</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">100</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NCOM</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch5.S3" title="5.3 Combination of Elements ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.3</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch5.S3" title="5.3 Combination of Elements ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.3</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
13</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Resonance Compensation Order</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">5</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NRCO</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch5.S3" title="5.3 Combination of Elements ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.3</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch5.S3" title="5.3 Combination of Elements ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.3</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
14</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Total Number of Data for Processing</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">20000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NPOS</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch6.S12" title="6.12 Post–processing ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.12</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch6.S12" title="6.12 Post–processing ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.12</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
15</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Intervals for Calculation of Lyapunov–Exponents</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">10000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NLYA</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
16</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Intervals for Calculation of Invariants</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NINV</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
17</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Data for Plotting</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">20000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NPLO</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
18</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Pole Order of Multipole Block</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">11</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">MMUL</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
19</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Number of extra Parameters of the DA Map</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">10</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">MCOR</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch6.S9" title="6.9 Differential Algebra ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.9</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch6.S9" title="6.9 Differential Algebra ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.9</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
20</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Order of DA Calculation</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">15</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NEMA</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch6.S9" title="6.9 Differential Algebra ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.9</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch6.S9" title="6.9 Differential Algebra ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.9</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
21</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Number of Monitors for Micado Closed Orbit Correction</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">600</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NMON1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
22</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Number of Correctors for Micado Closed Orbit Correction</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">600</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NCOR1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch6.S4" title="6.4 Orbit Correction ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.4</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
23</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Number of Beam–Beam Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">350</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NBB</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch4.S5" title="4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.5</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch4.S5" title="4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.5</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
24</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Number of Slices for 6D Beam–Beam Kick</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">99</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">MBEA</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch4.S5" title="4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.5</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch4.S5" title="4.5 Beam–Beam Element ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.5</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">
25</span>
              </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Number of “Phase Trombone” Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">20</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_typewriter" style="font-size:70%;">NTR</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">refPT</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <a href="#Ch3.S1.SS7" title="3.1.7 “Phase–trombone” or Matrix Element ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.7</span></a>
              </td>
</tr>
</tbody>
</table>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
</section>
<section id="A3" class="ltx_appendix">
<h2 class="ltx_title ltx_title_appendix">
<span class="ltx_tag ltx_tag_appendix">Appendix C </span>Input and Output Files</h2>
<div id="A3.p1" class="ltx_para">
<p class="ltx_p">The program uses a couple of files for its input and output procedures.</p>
</div>
<figure id="A3.T1" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table C.1: </span>List of Input and Output Files.</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">File Unit</span></span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Input</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Output</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">File Type</span>
          </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">
            <span class="ltx_text ltx_align_left ltx_font_bold" style="background-color:#B3B3FF;">Contents</span>
          </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_border_t"></th>
<th class="ltx_td ltx_border_t"></th>
<th class="ltx_td ltx_border_t"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:221.9pt;"></th>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">2</td>
<td class="ltx_td ltx_align_center ltx_border_r">✓</td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:221.9pt;">Geometry and Strength Parameters</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">3</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Tracking Parameters</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Geometry and strength Parameters (format as file <span class="ltx_text ltx_align_left ltx_font_typewriter">fort.2</span>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">6</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Input Parameters and Analysis of Data</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Name, hor., ver. Misalignment and Tilt</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">9</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Internally used multipoles Format: <math id="A3.T1.m1" class="ltx_align_left" alttext="a16,\ 2\times\{6\times(1p,3d23.15),(1p,2d23.15)\}" display="inline"><mrow><mrow id="XM279"><mi>a</mi><mo>⁢</mo><mn>16</mn></mrow><mo>,</mo><mrow id="XM280"><mn> 2</mn><mo>×</mo><mrow><mo stretchy="false">{</mo><mrow id="XM277"><mn>6</mn><mo>×</mo><mrow><mo stretchy="false">(</mo><mrow id="XM273"><mn>1</mn><mo>⁢</mo><mi>p</mi></mrow><mo>,</mo><mrow id="XM274"><mn>3</mn><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mn>23.15</mn></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>,</mo><mrow><mo stretchy="false">(</mo><mrow id="XM275"><mn>1</mn><mo>⁢</mo><mi>p</mi></mrow><mo>,</mo><mrow id="XM276"><mn>2</mn><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mn>23.15</mn></mrow><mo stretchy="false">)</mo></mrow><mo stretchy="false">}</mo></mrow></mrow></mrow></math>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">10</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Summary of Post–processing (auxiliary)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">11</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">This file is used to dump linear coupling parameters at locations of choice</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">12</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">End Coordinates of both Particles. Format: (<math id="A3.T1.m2" class="ltx_align_left" alttext="15\times F10.6" display="inline"><mrow><mrow><mn>15</mn><mo>×</mo><mi>F</mi></mrow><mo>⁢</mo><mn>10.6</mn></mrow></math>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">13</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Start Coordinates for a Prolongation</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">14</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Horizontal FFT Spectrum for detailed Analysis; Format: (<math id="A3.T1.m3" class="ltx_align_left" alttext="2\times F10.6" display="inline"><mrow><mrow><mn>2</mn><mo>×</mo><mi>F</mi></mrow><mo>⁢</mo><mn>10.6</mn></mrow></math>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">15</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Vertical FFT Spectrum for detailed Analysis; Format: (<math id="A3.T1.m4" class="ltx_align_left" alttext="2\times F10.6" display="inline"><mrow><mrow><mn>2</mn><mo>×</mo><mi>F</mi></mrow><mo>⁢</mo><mn>10.6</mn></mrow></math>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">16</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">External multipole errors. Format: <math id="A3.T1.m5" class="ltx_align_left" alttext="a16,\ 2\times\{6\times(1p,3d23.15),(1p,2d23.15)\}" display="inline"><mrow><mrow id="XM293"><mi>a</mi><mo>⁢</mo><mn>16</mn></mrow><mo>,</mo><mrow id="XM294"><mn> 2</mn><mo>×</mo><mrow><mo stretchy="false">{</mo><mrow id="XM291"><mn>6</mn><mo>×</mo><mrow><mo stretchy="false">(</mo><mrow id="XM287"><mn>1</mn><mo>⁢</mo><mi>p</mi></mrow><mo>,</mo><mrow id="XM288"><mn>3</mn><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mn>23.15</mn></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>,</mo><mrow><mo stretchy="false">(</mo><mrow id="XM289"><mn>1</mn><mo>⁢</mo><mi>p</mi></mrow><mo>,</mo><mrow id="XM290"><mn>2</mn><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mn>23.15</mn></mrow><mo stretchy="false">)</mo></mrow><mo stretchy="false">}</mo></mrow></mrow></mrow></math>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">17</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Additional Map at location of interest</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">18</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">One–Turn Map with Differential Algebra</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">19</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Internal use for Differential Algebra</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">20</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Meta–file</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">PS–file of selected Plots</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">21</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Factorisation of the one–turn map</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">22</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Transformation in the Normal Form coordinate</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">23</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Hamiltonian in action variables</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">24</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Tune–shift in action coordinates</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">25</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Tune–shift in Cartesian coordinates</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">26</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">NAGLIB log–file</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">27</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Name, hor., ver. Misalignment and Tilt</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">28</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Horizontal closed orbit displacement, measured at monitors</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">29</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Vertical closed orbit displacement, measured at monitors</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">30</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Name, Random strength, misalignments and tilt</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">31</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Name, Random strength, misalignments and tilt</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">32</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Binary</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Binary dump of full accelerator description</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">33</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Guess values for 6D closed orbit search</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">34</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Multipole strength and linear lattice parameters <cite class="ltx_cite ltx_align_left">[<a href="#bib.bib21" title="" class="ltx_ref">21</a>]</cite>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">90–k</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Binary</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Tracking Data (not singletrackfile) <math id="A3.T1.m6" class="ltx_align_left" alttext="0\leq k\leq 31" display="inline"><mrow><mn>0</mn><mo>≤</mo><mi>k</mi><mo>≤</mo><mn>31</mn></mrow></math>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">90</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Binary</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Tracking Data (singletrackfile) <span class="ltx_text ltx_align_left ltx_font_typewriter">singletrackfile.dat</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">92</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Checkpoint/Restart only: Program “standard output” (lout)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">93</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Checkpoint/Restart only: Log file</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">94</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Checkpoint/Restart only: Temp file for resetting binary tracking data file(s)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">95</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Checkpoint/Restart only: Data file 1</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">96</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">Checkpoint/Restart only: Data file 2</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">98</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">6D coordinates at Cavity (<span class="ltx_text ltx_align_left ltx_font_typewriter">1p,6(2x,e25.18)</span>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">664</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">
<span class="ltx_text ltx_align_left ltx_font_typewriter">DYNK</span> reading <span class="ltx_text ltx_align_left ltx_font_typewriter">FUN FILE(LIN)</span> (only during initialization)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">665</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">
<span class="ltx_text ltx_align_left ltx_font_typewriter">DYNK</span> output file <span class="ltx_text ltx_align_left ltx_font_typewriter">dynksets.dat</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">2001001</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:221.9pt;">
<span class="ltx_text ltx_align_left ltx_font_typewriter">FMA</span> output file <span class="ltx_text ltx_align_left ltx_font_typewriter">fma_sixtrack</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">200101+i*10</td>
<td class="ltx_td ltx_border_b ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">✓</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:221.9pt;">
<span class="ltx_text ltx_align_left ltx_font_typewriter">FMA</span> output file <span class="ltx_text ltx_align_left ltx_font_typewriter">NORM_*</span>, where <math id="A3.T1.m7" class="ltx_align_left" alttext="i=1,\ldots,\mathrm{number\ of\ FMAs}" display="inline"><mrow><mi>i</mi><mo>=</mo><mrow><mn id="XM295">1</mn><mo>,</mo><mi mathvariant="normal" id="XM296">…</mi><mo>,</mo><mrow id="XM297"><mpadded width="+5pt"><mi>number</mi></mpadded><mo>⁢</mo><mpadded width="+5pt"><mi>of</mi></mpadded><mo>⁢</mo><mi>FMAs</mi></mrow></mrow></mrow></math>
</td>
</tr>
</table>
</figure>
<div id="A3.p3" class="ltx_para">
<p class="ltx_p">In addition to those files listed in the table, DUMP uses arbitrary file unit numbers as determined by the input file.
The collimation module also uses many input/output files at various units, which are not listed here.</p>
<div class="ltx_pagination ltx_role_newpage"></div>
</div>
</section>
<section id="A4" class="ltx_appendix">
<h2 class="ltx_title ltx_title_appendix">
<span class="ltx_tag ltx_tag_appendix">Appendix D </span>Data Structure of the Data–Files</h2>
<div id="A4.p1" class="ltx_para">
<p class="ltx_p">A common data structure for the programs MAD-X and SixTrack is agreed on.
Besides some minor differences this allows a straightforward post–processing of data from either program.
Each binary data–file has a header which holds a description of the run with comments, tracking parameters and 50 additional parameters for future purposes, six of which are already specified in SixTrack.</p>
</div>
<figure id="A4.T1" class="ltx_table">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table D.1: </span>Header of the Binary Data Files</figcaption>
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Data Type</span></span>
            </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Bytes</span>
            </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">
              <span class="ltx_text ltx_align_left ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
            </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Character</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">80</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">General title of the run</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Character</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">80</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Additional title</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Character</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Date</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Character</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Time</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Character</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Program name</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">First particle in the file</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Last particle in the file</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Total number of particles</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Code for dimensionality of phase space 1,2,4 are hor., vert. and longitudinal respectively</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Projected number of turns</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Horizontal Tune</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Vertical Tune</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Longitudinal Tune</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">6 * 8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Closed Orbit vector</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">6 * 8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Dispersion vector</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">36 * 8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Six–dimensional transfer map</td>
</tr>
<tr class="ltx_tr" style="background-color:#ECECEC;">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t" colspan="3">
<span class="ltx_text" style="background-color:#ECECEC;"></span>50 additional parameters</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Maximum number of different seeds</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Actual seed number</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Starting value of the seed</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Number of turns in the reverse direction</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:227.6pt;">(IBM only)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Correction–factor for the Lyapunov (<math id="A4.T1.m1" class="ltx_align_left" alttext="\sigma=s-v_{0}\times t" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mn>0</mn></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Correction–factor for the Lyapunov (<span class="ltx_text ltx_align_left"><math id="A4.T1.m2" class="ltx_Math" alttext="\Delta p/p_{0}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow></math></span>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Start turn number for ripple prolongation</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">43 * 8</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:227.6pt;">Dummies</td>
</tr>
</tbody>
</table>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
<div id="A4.p2" class="ltx_para">
<p class="ltx_p">Following this header the tracking data are written in n samples of mine numbers preceded by the turn number.
In the MAD-X format, the number of samples in is not restricted, whilst SixTrack writes only up to two samples for the two particles for the Lyapunov–exponent method.
Up to 64 particles (two per file) can be treated in the vectorised version of SixTrack.</p>
</div>
<figure id="A4.T2" class="ltx_table">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table D.2: </span>Format of the Binary Data</figcaption>
<table class="ltx_tabular ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Data Type</span></span>
            </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold" style="background-color:#B3B3FF;">Bytes</span>
            </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">
              <span class="ltx_text ltx_align_left ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
            </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Turn number</th>
</tr>
<tr class="ltx_tr" style="background-color:#ECECEC;">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t" colspan="3">
<span class="ltx_text" style="background-color:#ECECEC;"></span>One or two samples of 9 values are following</th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Particle number</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Angular distance in phase space ( <math id="A4.T2.m1" class="ltx_align_left" alttext="&lt;=1" display="inline"><mrow><mo id="XM298">&lt;</mo><mo id="XM299">=</mo><mn>1</mn></mrow></math> )</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">x (mm)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">
<math id="A4.T2.m2" class="ltx_align_left" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math> (mrad)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">y (mm)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">
<math id="A4.T2.m3" class="ltx_align_left" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math> (mrad)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Path–length (<math id="A4.T2.m4" class="ltx_align_left" alttext="\sigma=s-v_{0}\times t" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mn>0</mn></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>) (mm)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:227.6pt;">Relative momentum deviation <span class="ltx_text ltx_align_left"><math id="A4.T2.m5" class="ltx_Math" alttext="\Delta p/p_{0}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow></math></span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:227.6pt;">Energy (MeV)</td>
</tr>
</tbody>
</table>
</figure>
<div id="A4.p3" class="ltx_para">
<p class="ltx_p">Note that in case the “Single Track File” option is enabled at compile time, multiple of these files (normally one per particle pair) are interleaved in a single file.
This is done by writing first all headers in order (i.e. first the header for initial particle/final particle 1/2, then 3/4, 5/6 etc.) and then the same for the tracking data.
The “total number of particles” field can always be read from the first header record, which gives the number of header records present in the file.
The two file formats are equivalent, i.e. they contain exactly the same data, and it is thus possible to convert losslessly between them.</p>
</div>
<div id="A4.p4" class="ltx_para">
<p class="ltx_p">Some of the post processing data is written in Ascii format to file <span class="ltx_text ltx_font_typewriter">fort.10</span>.
This can be used for instance for plotting purposes.
Each time the post processing routine is called 60 double precision numbers (some of them still dummy) are added to the file.</p>
</div>
<div id="A4.p5" class="ltx_para">
<p class="ltx_p">The file with the errors (in: <span class="ltx_text ltx_font_typewriter">fort.16</span>, out: <span class="ltx_text ltx_font_typewriter">fort.9</span>) has the following format:</p>
</div>
<div id="A4.p6" class="ltx_para">
<br class="ltx_break">
<table class="ltx_tabular ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
              <span class="ltx_text ltx_font_bold">first line</span>
            </td>
<td class="ltx_td ltx_align_left">name of element;</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
              <span class="ltx_text ltx_font_bold">line 2–7</span>
            </td>
<td class="ltx_td ltx_align_left">normal multipoles order 1–18;</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
              <span class="ltx_text ltx_font_bold">line 8</span>
            </td>
<td class="ltx_td ltx_align_left">normal multipoles of order 19 and 20;</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
              <span class="ltx_text ltx_font_bold">line 9–14</span>
            </td>
<td class="ltx_td ltx_align_left">skew multipoles order 1–18;</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
              <span class="ltx_text ltx_font_bold">line 15</span>
            </td>
<td class="ltx_td ltx_align_left">skew multipoles of order 19 and 20.</td>
</tr>
</tbody>
</table>
</div>
<div id="A4.p7" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">The strength definition is according to block <a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a> and to be effective in <span class="ltx_text ltx_font_typewriter">fort.3</span>.
The random values of the corresponding multipole block have to be set to 1.0.
A word of caution: when writing on file <span class="ltx_text ltx_font_typewriter">fort.9</span> the <span class="ltx_text ltx_font_italic">total</span> multipole strength is used, i.e. systematic and random part combined.
File <span class="ltx_text ltx_font_typewriter">fort.16</span> and <span class="ltx_text ltx_font_typewriter">fort.9</span> might therefore be different.
When using <span class="ltx_text ltx_font_typewriter">fort.9</span> as input (<span class="ltx_text ltx_font_typewriter">fort.16</span>), the systematic part in <span class="ltx_text ltx_font_typewriter">fort.3</span> has to be set to 0.0.</p>
</div>
<div id="A4.p8" class="ltx_para">
<p class="ltx_p">Misalignment and tilt are in file <span class="ltx_text ltx_font_typewriter">fort.8</span> and <span class="ltx_text ltx_font_typewriter">fort.27</span> as input and output respectively.
The format is (<span class="ltx_text ltx_font_typewriter">a16,2x,1p,2d14.6,d17.9</span>), i.e. name, horizontal misalignment, vertical misalignment and tilt.
The misalignment is in units of [mm] the tilt in units of [mrad].
The files <span class="ltx_text ltx_font_typewriter">fort.30</span> (in) and <span class="ltx_text ltx_font_typewriter">fort.31</span> (out) have the random single non-linear element kick, misalignments and tilt in the format: (<span class="ltx_text ltx_font_typewriter">a8,1p,d19.11,2d14.6,d17.9</span>).
Misalignment and tilt in file <span class="ltx_text ltx_font_typewriter">fort.8</span> or <span class="ltx_text ltx_font_typewriter">fort.30</span> is automatically activated, while the random strength (strength definition same as in block <a href="#Ch3.S1" title="3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>) needs an entry in the fourth column in the geometry file <span class="ltx_text ltx_font_typewriter">fort.2</span>.
Files <span class="ltx_text ltx_font_typewriter">fort.28</span> and <span class="ltx_text ltx_font_typewriter">fort.29</span> hold integer counter and closed orbit displacement at a horizontal or vertical monitor respectively.</p>
</div>
<figure id="A4.T3" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table D.3: </span>Post Processing Data</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Column</span></span>
          </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <span class="ltx_text ltx_align_left ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
          </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:341.4pt;"></th>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Maximum turn number</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Stability Flag (0=stable, 1=lost)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
3</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Horizontal Tune</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Vertical Tune</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
5</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Horizontal <math id="A4.T3.m1" class="ltx_align_left" alttext="\beta" display="inline"><mi>β</mi></math>–function</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
6</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Vertical <math id="A4.T3.m2" class="ltx_align_left" alttext="\beta" display="inline"><mi>β</mi></math>–function</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
7</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Horizontal amplitude <math id="A4.T3.m3" class="ltx_align_left" alttext="1^{st}" display="inline"><msup><mn>1</mn><mrow><mi>s</mi><mo>⁢</mo><mi>t</mi></mrow></msup></math> particle</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Vertical amplitude <math id="A4.T3.m4" class="ltx_align_left" alttext="1^{st}" display="inline"><msup><mn>1</mn><mrow><mi>s</mi><mo>⁢</mo><mi>t</mi></mrow></msup></math> particle</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">9</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Relative momentum deviation <span class="ltx_text ltx_align_left"><math id="A4.T3.m5" class="ltx_Math" alttext="\Delta p/p_{0}" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><msub><mi>p</mi><mn>0</mn></msub></mrow></math></span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
10</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Final distance in phase space</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
11</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Maximum slope of distance in phase space</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
12</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Horizontal detuning</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
13</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Spread of horizontal detuning</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
14</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Vertical detuning</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
15</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Spread of vertical detuning</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
16</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Horizontal factor to nearest resonance</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
17</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Vertical factor to nearest resonance</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
18</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Order of nearest resonance</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
19</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Horizontal smear</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
20</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Vertical smear</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
21</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Transverse smear</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
22</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Survived turns <math id="A4.T3.m6" class="ltx_align_left" alttext="1^{st}" display="inline"><msup><mn>1</mn><mrow><mi>s</mi><mo>⁢</mo><mi>t</mi></mrow></msup></math> particle</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
23</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Survived turns <math id="A4.T3.m7" class="ltx_align_left" alttext="2^{nd}" display="inline"><msup><mn>2</mn><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi></mrow></msup></math> particle</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
24</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Starting seed for random generator</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
25</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Synchrotron tune</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
26</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Horizontal amplitude <math id="A4.T3.m8" class="ltx_align_left" alttext="2^{nd}" display="inline"><msup><mn>2</mn><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi></mrow></msup></math> particle</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
27</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Vertical amplitude <math id="A4.T3.m9" class="ltx_align_left" alttext="2^{nd}" display="inline"><msup><mn>2</mn><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi></mrow></msup></math> particle</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
28</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Minimum horizontal amplitude</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
29</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Mean horizontal amplitude</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
30</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Maximum horizontal amplitude</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
31</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Minimum vertical amplitude</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
32</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Mean vertical amplitude</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
33</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Maximum vertical amplitude</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
34</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Minimum horizontal amplitude (linear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
35</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Mean horizontal amplitude (linear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
36</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Maximum horizontal amplitude (linear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
37</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Minimum vertical amplitude (linear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
38</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Mean vertical amplitude (linear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
39</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Maximum vertical amplitude (linear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
40</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Minimum horizontal amplitude (nonlinear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
41</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Mean horizontal amplitude (nonlinear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
42</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Maximum horizontal amplitude (nonlinear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
43</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Minimum vertical amplitude (nonlinear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
44</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Mean vertical amplitude (nonlinear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
45</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Maximum vertical amplitude (nonlinear decoupled)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
46</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Emittance Mode I</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
47</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Emittance Mode II</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
48</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary horizontal <math id="A4.T3.m10" class="ltx_align_left" alttext="\beta" display="inline"><mi>β</mi></math>–function</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
49</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary vertical <math id="A4.T3.m11" class="ltx_align_left" alttext="\beta" display="inline"><mi>β</mi></math>–function</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
50</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T3.m12" class="ltx_align_left" alttext="Q^{\prime}_{x}" display="inline"><msubsup><mi>Q</mi><mi>x</mi><mo>′</mo></msubsup></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
51</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T3.m13" class="ltx_align_left" alttext="Q^{\prime}_{y}" display="inline"><msubsup><mi>Q</mi><mi>y</mi><mo>′</mo></msubsup></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
52–58</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Dummy</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">59–60</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:341.4pt;">Internal use</td>
</tr>
</table>
</figure>
<div id="A4.p10" class="ltx_para">
<p class="ltx_p">As an option the 4D linear parameters can be dumped to file <span class="ltx_text ltx_font_typewriter">fort.11</span> when the linear optics block <a href="#Ch6.S1" title="6.1 Linear Optics Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.1</span></a> is activated.
This can be used for instance for a post–processing of linear coupling.
25 values are written in a binary format.</p>
</div>
<div id="A4.p11" class="ltx_para">
<br class="ltx_break">
</div>
<figure id="A4.T4" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table D.4: </span>4D Linear Parameters</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Column</span></span>
          </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <span class="ltx_text ltx_align_left ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
          </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:341.4pt;"></th>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Name of the element</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Longitudinal Position [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
3</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Horizontal phase advance</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Vertical phase advance</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
5</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Primary horizontal <math id="A4.T4.m1" class="ltx_align_left" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
6</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary horizontal <math id="A4.T4.m2" class="ltx_align_left" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
7</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary vertical <math id="A4.T4.m3" class="ltx_align_left" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Primary vertical <math id="A4.T4.m4" class="ltx_align_left" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
9</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Primary horizontal <math id="A4.T4.m5" class="ltx_align_left" alttext="\alpha" display="inline"><mi>α</mi></math>–function [rad]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
10</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary horizontal <math id="A4.T4.m6" class="ltx_align_left" alttext="\alpha" display="inline"><mi>α</mi></math>–function [rad]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
11</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary vertical <math id="A4.T4.m7" class="ltx_align_left" alttext="\alpha" display="inline"><mi>α</mi></math>–function [rad]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
12</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Primary vertical <math id="A4.T4.m8" class="ltx_align_left" alttext="\alpha" display="inline"><mi>α</mi></math>–function [rad]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
13</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Primary horizontal <math id="A4.T4.m9" class="ltx_align_left" alttext="\gamma" display="inline"><mi>γ</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
14</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary horizontal <math id="A4.T4.m10" class="ltx_align_left" alttext="\gamma" display="inline"><mi>γ</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
15</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary vertical <math id="A4.T4.m11" class="ltx_align_left" alttext="\gamma" display="inline"><mi>γ</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
16</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Primary vertical <math id="A4.T4.m12" class="ltx_align_left" alttext="\gamma" display="inline"><mi>γ</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
17</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Primary horizontal phase of x–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
18</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary horizontal phase of x–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
19</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary vertical phase of y–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
20</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Primary vertical phase of y–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
21</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Primary horizontal phase of <math id="A4.T4.m13" class="ltx_align_left" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
22</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary horizontal phase of <math id="A4.T4.m14" class="ltx_align_left" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
23</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Secondary vertical phase of <math id="A4.T4.m15" class="ltx_align_left" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
24</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Primary vertical phase of <math id="A4.T4.m16" class="ltx_align_left" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
25</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Coupling angle [pi]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
26</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
<math id="A4.T4.m17" class="ltx_align_left" alttext="D_{x}" display="inline"><msub><mi>D</mi><mi>x</mi></msub></math> [mm]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
27</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
<math id="A4.T4.m18" class="ltx_align_left" alttext="D^{\prime}_{x}" display="inline"><msubsup><mi>D</mi><mi>x</mi><mo>′</mo></msubsup></math> [mrad]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
28</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
<math id="A4.T4.m19" class="ltx_align_left" alttext="D_{y}" display="inline"><msub><mi>D</mi><mi>y</mi></msub></math> [mm]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
29</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:341.4pt;">
<math id="A4.T4.m20" class="ltx_align_left" alttext="D^{\prime}_{y}" display="inline"><msubsup><mi>D</mi><mi>y</mi><mo>′</mo></msubsup></math> [mrad]</td>
</tr>
</table>
</figure>
<div id="A4.p12" class="ltx_para">
<p class="ltx_p">When external multipole errors are read in (see section <a href="#Ch5.S1" title="5.1 Random Fluctuation Starting Number ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.1</span></a>), the program expects a complete list of magnet errors to file <span class="ltx_text ltx_font_typewriter">fort.16</span>.
The format of each set of multipole errors is given in table <span class="ltx_ref ltx_ref_self">LABEL:T-XME</span>.
The definition of the multipole coefficients should be as described in section <a href="#Ch4.S1" title="4.1 Multipole Coefficients ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>.</p>
</div>
<div id="A4.p13" class="ltx_para">
<br class="ltx_break">
</div>
<figure id="A4.T5" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table D.5: </span>Format of file with external errors, <span class="ltx_text ltx_font_typewriter">fort.16</span>, and internal errors written to <span class="ltx_text ltx_font_typewriter">fort.9</span></figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Row</span></span>
          </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <span class="ltx_text ltx_align_left ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
          </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:341.4pt;"></th>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Name of multipole set</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m1" class="ltx_align_left" alttext="B_{1}\ B_{2}\ B_{3}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>1</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>2</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>3</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
3</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m2" class="ltx_align_left" alttext="B_{4}\ B_{5}\ B_{6}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>4</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>5</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>6</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m3" class="ltx_align_left" alttext="B_{7}\ B_{8}\ B_{9}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>7</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>8</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>9</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
5</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m4" class="ltx_align_left" alttext="B_{10}\ B_{11}\ B_{12}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>10</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>11</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>12</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
6</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m5" class="ltx_align_left" alttext="B_{13}\ B_{14}\ B_{15}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>13</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>14</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>15</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
7</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m6" class="ltx_align_left" alttext="B_{16}\ B_{17}\ B_{18}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>16</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>17</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>18</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
8</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m7" class="ltx_align_left" alttext="B_{19}\ B_{20}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>19</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>20</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
9</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m8" class="ltx_align_left" alttext="A_{1}\ A_{2}\ A_{3}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>1</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>2</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>3</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
10</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m9" class="ltx_align_left" alttext="A_{4}\ A_{5}\ A_{6}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>4</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>5</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>6</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
11</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m10" class="ltx_align_left" alttext="A_{7}\ A_{8}\ A_{9}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>7</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>8</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>9</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
12</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m11" class="ltx_align_left" alttext="A_{10}\ A_{11}\ A_{12}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>10</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>11</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>12</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
13</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m12" class="ltx_align_left" alttext="A_{13}\ A_{14}\ A_{15}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>13</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>14</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>15</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
14</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m13" class="ltx_align_left" alttext="A_{16}\ A_{17}\ A_{18}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>16</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>17</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>18</mn></msub></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
15</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:341.4pt;">
            <math id="A4.T5.m14" class="ltx_align_left" alttext="A_{19}\ A_{20}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>19</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>20</mn></msub></mrow></math>
          </td>
</tr>
</table>
</figure>
<div id="A4.p14" class="ltx_para">
<p class="ltx_p">With the parameter <span class="ltx_text ltx_font_typewriter">mout</span> set to 2 or 3 in the “Random Fluctuation” block (<a href="#Ch5.S1" title="5.1 Random Fluctuation Starting Number ‣ Chapter 5 Organising Tasks" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5.1</span></a>), the internally used multipoles are written to file <span class="ltx_text ltx_font_typewriter">fort.9</span> in the same format as above.
This file can therefore be used as an input <span class="ltx_text ltx_font_typewriter">fort.16</span> file for a subsequent run.</p>
</div>
<div id="A4.p15" class="ltx_para">
<p class="ltx_p">The file <span class="ltx_text ltx_font_typewriter">fort.34</span> is written when the “Linear Optic Block” (see section <a href="#Ch6.S1" title="6.1 Linear Optics Calculation ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_tag">6.1</span></a>) is invoked with the <span class="ltx_text ltx_font_typewriter">ELEMENT 0</span> option.</p>
</div>
<div id="A4.p16" class="ltx_para">
<br class="ltx_break">
</div>
<figure id="A4.T6" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table D.6: </span>Format of file <span class="ltx_text ltx_font_typewriter">fort.34</span> for detuning and distortion calculation with external program “SODD” <cite class="ltx_cite">[<a href="#bib.bib21" title="" class="ltx_ref">21</a>]</cite></figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="background-color:#B3B3FF;">
<span class="ltx_text ltx_font_bold">Column</span></span>
          </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">
            <span class="ltx_text ltx_align_left ltx_font_bold" style="background-color:#B3B3FF;">Description</span>
          </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:341.4pt;"></th>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Longitudinal position [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Type <span class="ltx_text ltx_align_left ltx_font_typewriter">n</span> of Multipole (<math id="A4.T6.m1" class="ltx_align_left" alttext="n&gt;" display="inline"><mrow><mi>n</mi><mo>&gt;</mo><mi></mi></mrow></math> 0 <math id="A4.T6.m2" class="ltx_align_left" alttext="=&gt;" display="inline"><mrow><mi></mi><mo>=</mo><mo>&gt;</mo></mrow></math> erect, <math id="A4.T6.m3" class="ltx_align_left" alttext="n&lt;" display="inline"><mrow><mi>n</mi><mo>&lt;</mo><mi></mi></mrow></math> 0 <math id="A4.T6.m4" class="ltx_align_left" alttext="=&gt;" display="inline"><mrow><mi></mi><mo>=</mo><mo>&gt;</mo></mrow></math> skew)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
3</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Multipole strength [<math id="A4.T6.m5" class="ltx_align_left" alttext="\mathrm{mrad}\cdot\mathrm{mm}^{(1-|n|)}" display="inline"><mrow><mi>mrad</mi><mo>⋅</mo><msup><mi>mm</mi><mrow><mo stretchy="false">(</mo><mrow id="XM301"><mn>1</mn><mo>-</mo><mrow><mo stretchy="false">|</mo><mi id="XM300">n</mi><mo stretchy="false">|</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></msup></mrow></math>]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
4</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Horizontal <math id="A4.T6.m6" class="ltx_align_left" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
5</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Vertical <math id="A4.T6.m7" class="ltx_align_left" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
6</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:341.4pt;">Horizontal phase advance</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
7</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t" style="width:341.4pt;">Vertical phase advance</td>
</tr>
</table>
</figure>
<div id="A4.p17" class="ltx_para">
<p class="ltx_p">The last line serves as the end of the structure:
Length of the accelerator, fake name <span class="ltx_text ltx_font_typewriter">END</span>, fake type <span class="ltx_text ltx_font_typewriter">100</span>, <math id="A4.p17.m1" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math> functions and phase advances at the end of the accelerator for the horizontal and vertical plane respectively.
</p>
<div class="ltx_pagination ltx_role_newpage"></div>
</div>
</section>
<section id="bib" class="ltx_bibliography">
<h2 class="ltx_title ltx_title_bibliography">Bibliography</h2>
<ul class="ltx_biblist">
<li id="bib.bib1" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">1</span>
<span class="ltx_bibblock"> LBL diffential algebra package and LieLib routines
courtesy of É. Forest.
</span>
      </li>
<li id="bib.bib2" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">2</span>
<span class="ltx_bibblock"> G. Ripken and F. Schmidt, “A symplectic
six–dimensional thin–lens formalism for tracking”, CERN SL 95–12
(AP)(1995), DESY 95–063 (1995).
G. Ripken and F. Schmidt, “Construction of Nonlinear Symplectic
Six–Dimensional Thin–Lens Maps by Exponentiation”, DESY 95–189
(1995),
<a href="http://cern.ch/Frank.Schmidt/report/ripken2.pdf" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://cern.ch/Frank.Schmidt/report/ripken2.pdf</span></a>; D.P. Barber,
K. Heinemann, G. Ripken and F. Schmidt, “Symplectic Thin - Lens
Transfer Maps for SixTrack: Treatment of Bending Magnets in Terms of
the Exact Hamiltonian”, DESY 96–156 (1995),
<a href="http://cern.ch/Frank.Schmidt/report/ripken3.pdf" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://cern.ch/Frank.Schmidt/report/ripken3.pdf</span></a>.
</span>
      </li>
<li id="bib.bib3" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">3</span>
<span class="ltx_bibblock"> A. Wrulich, “RACETRACK, A computer code for the
simulation of nonlinear motion in accelerators”, DESY 84–026
(1984).
</span>
      </li>
<li id="bib.bib4" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">4</span>
<span class="ltx_bibblock"> B. Leemann and É. Forest, “Brief
description of the tracking codes FASTRAC and THINTRAC”, SSC Note
SSC–133.
</span>
      </li>
<li id="bib.bib5" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">5</span>
<span class="ltx_bibblock"> G. Ripken, “Nonlinear canonical
equations of coupled synchro–betatron motion and their solution
within the framework of a nonlinear 6–dimensional (symplectic)
tracking program for ultra–relativistic protons”, DESY 85–084
(1985).
</span>
      </li>
<li id="bib.bib6" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">6</span>
<span class="ltx_bibblock"> D.P. Barber, G. Ripken and F. Schmidt,
“A nonlinear canonical formalism for the coupled
synchro–betatron motion of protons with arbitrary energy”, DESY
87–036 (1987); G. Ripken and F. Schmidt, “A symplectic
six–dimensional thin–lens formalism for tracking”, CERN/SL/95–12
(AP), DESY 95–063 (1995),
<a href="http://cern.ch/Frank.Schmidt/report/ripken.pdf" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://cern.ch/Frank.Schmidt/report/ripken.pdf</span></a>; K. Heinemann,
</span>
      </li>
<li id="bib.bib7" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">7</span>
<span class="ltx_bibblock">
R. Brun and D. Lienart, “HBOOK User Guide”, CERN Program Library
Y250 (1987).
</span>
      </li>
<li id="bib.bib8" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">8</span>
<span class="ltx_bibblock"> R. Brun and N.C. Somon, “HPLOT User
Guide”, CERN Program Library Y251 (1988).
</span>
      </li>
<li id="bib.bib9" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">9</span>
<span class="ltx_bibblock"> R. Bock,
R. Brun, O. Couet, N.C. Somon, C.E. Vandoni and P. Zanarini, “HIGZ
User Guide”, CERN Program Library Q120.
</span>
      </li>
<li id="bib.bib10" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">10</span>
<span class="ltx_bibblock">
G. Guignard, “A general treatment of resonances in accelerators”,
CERN 78–11 (1978).
</span>
      </li>
<li id="bib.bib11" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">11</span>
<span class="ltx_bibblock"> M. Berz, “Differential
algebra description of beam dynamics to very high orders”, Particle
Accelerators, 1989, Vol. <span class="ltx_text" style="text-decoration:underline;">24</span>, pp. 109–124.
</span>
      </li>
<li id="bib.bib12" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">12</span>
<span class="ltx_bibblock"> M. Berz, “DAFOR – Differential Algebra Precompiler
Version 3, Reference Manual”, MSUCL–755 (1991).
</span>
      </li>
<li id="bib.bib13" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">13</span>
<span class="ltx_bibblock"> F. Schmidt and M. Vaenttinen, “Vectorisation of the
single particle tracking program SixTrack”, CERN SL Note 90–20
(1990) (AP).
</span>
      </li>
<li id="bib.bib14" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">14</span>
<span class="ltx_bibblock"> F. Schmidt, “Untersuchungen zur dynamischen
Akzeptanz von Protonenbeschleunigern und ihre Begrenzung durch
chaotische Bewegung”, DESY HERA 88–02, (1988).
</span>
      </li>
<li id="bib.bib15" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">15</span>
<span class="ltx_bibblock"> H. Grote, “A MAD–SixTrack interface”, SL Note
97–02 (AP).
</span>
      </li>
<li id="bib.bib16" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">16</span>
<span class="ltx_bibblock"> SixTrack Physics Manual, <a href="http://sixtrack.web.cern.ch/SixTrack/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://sixtrack.web.cern.ch/SixTrack/</span></a>
</span>
      </li>
<li id="bib.bib17" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">17</span>
<span class="ltx_bibblock"> M. Berz, É. Forest
and J. Irwin, “Normal form methods for complicated periodic
systems: a complete solution using differential algebra and lie
operators”, Particle Accelerators, 1989, Vol. <span class="ltx_text" style="text-decoration:underline;">24</span>, pp.
91–107.
</span>
      </li>
<li id="bib.bib18" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">18</span>
<span class="ltx_bibblock"> M. Bassetti and G.A. Erskine,
“Closed expression for the electrical field of a two–dimensional
Gaussian charge”, CERN–ISR–TH/80–06.
</span>
      </li>
<li id="bib.bib19" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">19</span>
<span class="ltx_bibblock"> K. Hirata, H. Moshammer, F. Ruggiero and M. Bassetti,
“Synchro-Beam interaction”, CERN SL-AP/90-02 (1990) and Proc.
Workshop on Beam Dynamics Issues of High-Luminosity Asymmetric
Collider Rings, Berkeley, 1990, ed. A.M. Sessler (AIP Conf. Proc.
214, New York, 1990), pp. 389-404;
<br class="ltx_break">K. Hirata, H. Moshammer and F. Ruggiero, “A symplectic beam-beam
interaction with energy change”, KEK preprint 92-117 A (1992) and
Part. Accel. 40, 205-228 (1993);
<br class="ltx_break">K. Hirata, “BBC User’s Guide; A Computer Code for Beam-Beam Interaction
with a Crossing Angle, version 3.4”, SL-Note 97-57 AP.
</span>
      </li>
<li id="bib.bib20" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">20</span>
<span class="ltx_bibblock"> L.H.A. Leunissen, F. Schmidt and G. Ripken, “6D
Beam–Beam Kick including Coupled Motion”, LHC Project Report 369,
<a href="http://cern.ch/Frank.Schmidt/report/ripken_new.pdf" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://cern.ch/Frank.Schmidt/report/ripken_new.pdf</span></a>.
</span>
      </li>
<li id="bib.bib21" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">21</span>
<span class="ltx_bibblock"> F. Schmidt, “SODD:
<br class="ltx_break">A Computer Code to calculate
Detuning and Distortion Function Terms in First and Second Order”,
CERN SL/Note 99–009 (AP),
<a href="http://cern.ch/Frank.Schmidt/report/sodd_manual.pdf" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://cern.ch/Frank.Schmidt/report/sodd_manual.pdf</span></a>
</span>
      </li>
<li id="bib.bib22" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">22</span>
<span class="ltx_bibblock">
H. Grote and F.C. Iselin, “The MAD program (Methodical Accelerator
Design), Version 8.10, User’s Reference Manual”, CERN SL 90–13
(AP) (Rev. 4)
<br class="ltx_break"><a href="http://cern.ch/Hans.Grote/mad/mad8/doc/mad8_user.ps.gz" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://cern.ch/Hans.Grote/mad/mad8/doc/mad8_user.ps.gz</span></a>.
</span>
      </li>
<li id="bib.bib23" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">23</span>
<span class="ltx_bibblock">
R. Molloy and S. Blitz, “Fringe Field Effects on Bending Magnets, Derived for,
TRANSPORT/TURTLE”, FERMILAB-TM-2564-AD-APC-PPD
<a href="http://lss.fnal.gov/archive/test-tm/2000/fermilab-tm-2564-ad-apc-ppd.pdf" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://lss.fnal.gov/archive/test-tm/2000/fermilab-tm-2564-ad-apc-ppd.pdf</span></a>
</span>
      </li>
<li id="bib.bib24" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">24</span>
<span class="ltx_bibblock"> private communication.
</span>
      </li>
<li id="bib.bib25" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">25</span>
<span class="ltx_bibblock"> F. James, “A review of
pseudo–random number generators”, to be published in Computer
Physics Communication.
</span>
      </li>
<li id="bib.bib26" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">26</span>
<span class="ltx_bibblock"> B. Autin and Y. Marti, “Closed Orbit Correction of
A.G. Machines Using a Small Number of Magnets”,
CERN–ISR–MA/73–17.
</span>
      </li>
<li id="bib.bib27" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">27</span>
<span class="ltx_bibblock"> M. Giovannozzi,
“Description of software tools to perform tune–shift correction
using normal forms”, CERN SL Note 93–111 (AP).
</span>
      </li>
<li id="bib.bib28" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">28</span>
<span class="ltx_bibblock"> F. Schmidt, F. Willeke and F. Zimmermann,
“Comparison of methods to determine long–term stability in proton
storage rings”, 1991, Particle Accelerators, Vol. <span class="ltx_text" style="text-decoration:underline;">35</span>,
pp. 249–256.
</span>
      </li>
<li id="bib.bib29" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">29</span>
<span class="ltx_bibblock"> R. Bartolini, A. Bazzani, M. Giovannozzi, W. Scandale, E. Todesco,“Tune evaluation in simulations and experiments”,Part. Accel. 52 147
</span>
      </li>
<li id="bib.bib30" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">30</span>
<span class="ltx_bibblock"> M. Giovannozzi, E. Todesco, A. Bazzani and R. Bartolini (1997). “PLATO: a program library for the analysis of nonlinear betatronic motion”, Nucl. Instrum. and Methods A 388 1
</span>
      </li>
<li id="bib.bib31" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">31</span>
<span class="ltx_bibblock"> J. Laskar, C. Froeschle and C. Celletti,
“The measure of chaos by the numerical analysis of the fundamental frequencies. Application to the standard mapping”,
Physica D, vol. 56, pp 253-269, 1992.
</span>
      </li>
<li id="bib.bib32" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">32</span>
<span class="ltx_bibblock"> S. Kostoglou, N. Karastathis, Y. Papaphilippou, D. Pellegrini and P. Zisopoulos,
“Development of computational tools for noise studies in the LHC”,
2017, Proceedings of IPAC’17, Copenhagen, Denmark, 2017.
</span>
      </li>
<li id="bib.bib33" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">33</span>
<span class="ltx_bibblock"> SixTrack build manual, see SixTrack website, <a href="http://sixtrack.web.cern.ch/SixTrack/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://sixtrack.web.cern.ch/SixTrack/</span></a>
</span>
      </li>
<li id="bib.bib34" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">34</span>
<span class="ltx_bibblock"> SixDesk manual, see SixTrack website, <a href="http://sixtrack.web.cern.ch/SixTrack/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://sixtrack.web.cern.ch/SixTrack/</span></a>
</span>
      </li>
<li id="bib.bib35" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">35</span>
<span class="ltx_bibblock"> SixDesk manual, <a href="https://www.overleaf.com/1345694dwypbp#/3325092/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://www.overleaf.com/1345694dwypbp#/3325092/</span></a>
</span>
      </li>
<li id="bib.bib36" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">36</span>
<span class="ltx_bibblock"> J. B. Garcia et al.,
“Long term dynamics of the high luminosity Large Hadron Collider with crab cavities”,
2016, PHYSICAL REVIEW ACCELERATORS AND BEAMS 19, 101003 (2016).
</span>
      </li>
<li id="bib.bib37" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">37</span>
<span class="ltx_bibblock"> K. Sjobak, H. Burkhardt, R.D. Maria, A. Mereghetti and A. Santamaria,
“General functionality for turn-dependent element properties in SixTrack”
2015, Procedings of IPAC’13, Richmond, VA, USA, May 2015.
</span>
      </li>
<li id="bib.bib38" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">38</span>
<span class="ltx_bibblock"> S. Russenschuck,
“Field computation for Accelerator Magnets”,
Wiley-VCH, 2010
</span>
      </li>
<li id="bib.bib39" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">39</span>
<span class="ltx_bibblock"> P. Burla, Q. King and J.G. Pett,
“Optimisation of the current ramp for the LHC”,
Proceedings of the 1999 Particle Accelerator Conference, New York, 1999.
</span>
      </li>
</ul>
</section>
<div class="ltx_pagination ltx_role_newpage"></div>
<h6>List of Tables:</h6>
<ul class="ltx_toclist">
<li class="ltx_tocentry"><a href="#Ch1.T1" title="Table 1.1 ‣ 1.1 Versions and Service ‣ Chapter 1 Introduction" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">1.1 </span>External Routines</span></a></li>
<li class="ltx_tocentry"><a href="#Ch2.T1" title="Table 2.1 ‣ 2.4 Iteration Errors ‣ Chapter 2 General Input" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2.1 </span>Iteration Errors</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T1" title="Table 3.1 ‣ Format ‣ 3.1.1 Linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1 </span>Different Types of Linear Elements</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T2" title="Table 3.2 ‣ Format ‣ 3.1.2 Non-linear Elements ‣ 3.1 Single Elements ‣ Chapter 3 Machine Geometry" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2 </span>Different Types of Non-linear Elements</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.T1" title="Table 4.1 ‣ Format: ‣ 4.4.1 FUN Statements ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">
                <span class="ltx_text" style="font-size:90%;">4.1</span>
               </span>
              <span class="ltx_text" style="font-size:90%;">Available function types in DYNK.</span></span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.T2" title="Table 4.2 ‣ Format: ‣ 4.4.2 SET Statement ‣ 4.4 Dynamic Kicks ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.2 </span>Element types and attributes available in <span class="ltx_text ltx_font_typewriter">DYNK</span>.</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.T3" title="Table 4.3 ‣ 4.6 Wire ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.3 </span>Input parameters for the <span class="ltx_text ltx_font_typewriter">WIRE</span> block.</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4.T4" title="Table 4.4 ‣ 4.9 Electron lens ‣ Chapter 4 Special Elements" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.4 </span>Input parameters for <span class="ltx_text ltx_font_typewriter">ELEN</span> block.</span></a></li>
<li class="ltx_tocentry"><a href="#Ch6.T1" title="Table 6.1 ‣ Format Description ‣ 6.11 Corrections ‣ Chapter 6 Processing" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">6.1 </span>Tune-shift correction parameters</span></a></li>
<li class="ltx_tocentry"><a href="#Ch7.T1" title="Table 7.1 ‣ Format Description ‣ 7.2 Initial Coordinates ‣ Chapter 7 Initial Conditions for Tracking" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">7.1 </span>Initial Coordinates of the 2 Particles</span></a></li>
<li class="ltx_tocentry"><a href="#Ch8.T1" title="Table 8.1 ‣ Format Description ‣ 8.1 Dumping of Beam Population ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">8.1 </span>The following formats, set by the <span class="ltx_text ltx_font_typewriter">format</span> option, are accepted:</span></a></li>
<li class="ltx_tocentry"><a href="#Ch8.T2" title="Table 8.2 ‣ Output file format ‣ 8.2 FMA Analysis ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">8.2 </span>Available tune calculation methods in SixTrack.</span></a></li>
<li class="ltx_tocentry"><a href="#Ch8.T3" title="Table 8.3 ‣ Output file format ‣ 8.2 FMA Analysis ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">8.3 </span>Format of the <span class="ltx_text ltx_font_typewriter">NORM</span> files</span></a></li>
<li class="ltx_tocentry"><a href="#Ch8.T4" title="Table 8.4 ‣ Output file format ‣ 8.2 FMA Analysis ‣ Chapter 8 Extra Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">8.4 </span>Format of the fma_sixtrack file</span></a></li>
<li class="ltx_tocentry"><a href="#A1.T1" title="Table A.1 ‣ Appendix A List of Keywords" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">
          <span class="ltx_text" style="font-size:70%;">A.1</span>
         </span>
        <span class="ltx_text" style="font-size:70%;">List of Keywords</span></span></a></li>
<li class="ltx_tocentry"><a href="#A2.T1" title="Table B.1 ‣ B.1 Default Tracking Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">B.1 </span>Default Tracking Parameters</span></a></li>
<li class="ltx_tocentry"><a href="#A2.T2" title="Table B.2 ‣ B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">B.2 </span>Default Size Parameters</span></a></li>
<li class="ltx_tocentry"><a href="#A3.T1" title="Table C.1 ‣ Appendix C Input and Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">C.1 </span>List of Input and Output Files.</span></a></li>
<li class="ltx_tocentry"><a href="#A4.T1" title="Table D.1 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.1 </span>Header of the Binary Data Files</span></a></li>
<li class="ltx_tocentry"><a href="#A4.T2" title="Table D.2 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.2 </span>Format of the Binary Data</span></a></li>
<li class="ltx_tocentry"><a href="#A4.T3" title="Table D.3 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.3 </span>Post Processing Data</span></a></li>
<li class="ltx_tocentry"><a href="#A4.T4" title="Table D.4 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.4 </span>4D Linear Parameters</span></a></li>
<li class="ltx_tocentry"><a href="#A4.T5" title="Table D.5 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.5 </span>Format of file with external errors, <span class="ltx_text ltx_font_typewriter">fort.16</span>, and internal errors written to <span class="ltx_text ltx_font_typewriter">fort.9</span></span></a></li>
<li class="ltx_tocentry"><a href="#A4.T6" title="Table D.6 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.6 </span>Format of file <span class="ltx_text ltx_font_typewriter">fort.34</span> for detuning and distortion calculation with external program “SODD” <cite class="ltx_cite">[<span class="ltx_ref">21</span>]</cite></span></a></li>
</ul>
<div class="ltx_pagination ltx_role_newpage"></div>
</article>
<aside>
    <?php include_once($incPath.'/aside_manual.php'); ?>
</aside>
<?php
    require_once($incPath.'/footer.php');
?>
