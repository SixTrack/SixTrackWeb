<?php
    $bMain  = true;
    $sHead  = '<!--Generated on Fri Feb 23 09:10:49 2018 by LaTeXML (version 0.8.1) http://dlmf.nist.gov/LaTeXML/.-->
<!--Document created on February 23, 2018.-->
<link rel="stylesheet" href="LaTeXML.css" type="text/css">
<link rel="stylesheet" href="ltx-article.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML" type="text/javascript"></script>
';
    $sHead .= '<link rel="stylesheet" href="/SixTrack/web/css/latexml-fix.css" type="text/css">
';
    require_once('../../includes/header.php');
?>
<article id='manual' class='ltx_document'>
<div id='generator'>Generated on Fri Feb 23 09:10:49 2018 by <a href='http://dlmf.nist.gov/LaTeXML/'>LaTeXML</a> (version 0.8.1)</div>
<h1 class="ltx_title ltx_title_document">SixTrack Physics Manual (Draft)</h1>
<div class="ltx_authors">
<span class="ltx_creator ltx_role_author">
<span class="ltx_personname">R. De Maria, M. Fitterer, M. Fjellstrom, A. Patapenka
</span></span>
</div>
<div class="ltx_date ltx_role_creation">February 23, 2018</div>
<h6>Contents:</h6>
<ul class="ltx_toclist">
<li class="ltx_tocentry"><a href="#S1" title="1 Introduction ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">1 </span>Introduction</span></a></li>
<li class="ltx_tocentry"><a href="#S2" title="2 Basic Principles and Hamiltonian formalism and notation ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2 </span>Basic Principles and Hamiltonian formalism and notation</span></a></li>
<li class="ltx_tocentry">
<a href="#S3" title="3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3 </span>Beam-line elements tracking maps</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#S3.SS1" title="3.1 Drift ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1 </span>Drift</span></a></li>
<li class="ltx_tocentry">
<a href="#S3.SS2" title="3.2 Dipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2 </span>Dipole</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S3.SS2.SSS1" title="3.2.1 Thick dipole ‣ 3.2 Dipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.1 </span>Thick dipole</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS2.SSS2" title="3.2.2 Thin dipole ‣ 3.2 Dipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.2 </span>Thin dipole</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS2.SSS3" title="3.2.3 Dipole Edge effects ‣ 3.2 Dipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.3 </span>Dipole Edge effects</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#S3.SS3" title="3.3 Quadrupole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3 </span>Quadrupole</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S3.SS3.SSS1" title="3.3.1 Thick quadrupole ‣ 3.3 Quadrupole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.1 </span>Thick quadrupole</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS3.SSS2" title="3.3.2 Thick skew quadrupole ‣ 3.3 Quadrupole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.2 </span>Thick skew quadrupole</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#S3.SS4" title="3.4 Combined function magnet ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.4 </span>Combined function magnet</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S3.SS4.SSS1" title="3.4.1 Thin combined function magnet ‣ 3.4 Combined function magnet ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.4.1 </span>Thin combined function magnet</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#S3.SS5" title="3.5 Thin Multipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5 </span>Thin Multipole</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS6" title="3.6 RF-cavity ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.6 </span>RF-cavity</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS7" title="3.7 Solenoid ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.7 </span>Solenoid</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS8" title="3.8 Beam-beam lens ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.8 </span>Beam-beam lens</span></a></li>
<li class="ltx_tocentry">
<a href="#S3.SS9" title="3.9 Beam-beam element ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.9 </span>Beam-beam element</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S3.SS9.SSS1" title="3.9.1 Round beam ‣ 3.9 Beam-beam element ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.9.1 </span>Round beam</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS9.SSS2" title="3.9.2 Elliptical beam ‣ 3.9 Beam-beam element ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.9.2 </span>Elliptical beam</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#S3.SS10" title="3.10 Hirata’s beam-beam element ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.10 </span>Hirata’s beam-beam element</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS11" title="3.11 RF multipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.11 </span>RF multipole</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS12" title="3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.12 </span>Wire</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS13" title="3.13 Crab cavity ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.13 </span>Crab cavity</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS14" title="3.14 AC-dipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.14 </span>AC-dipole</span></a></li>
<li class="ltx_tocentry">
<a href="#S3.SS15" title="3.15 Electron lens ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.15 </span>Electron lens</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S3.SS15.SSS1" title="3.15.1 Hollow electron lens - uniform annular profile ‣ 3.15 Electron lens ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.15.1 </span>Hollow electron lens - uniform annular profile</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#S3.SS16" title="3.16 Misalignment ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.16 </span>Misalignment</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#S4" title="4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4 </span>Optics calculations</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#S4.SS1" title="4.1 Diagonalisation of one-turn matrix ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.1 </span>Diagonalisation of one-turn matrix</span></a></li>
<li class="ltx_tocentry"><a href="#S4.SS2" title="4.2 Normalisation of eigenvectors ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.2 </span>Normalisation of eigenvectors</span></a></li>
<li class="ltx_tocentry"><a href="#S4.SS3" title="4.3 Conversion to normalized coordinates ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.3 </span>Conversion to normalized coordinates</span></a></li>
<li class="ltx_tocentry"><a href="#S4.SS4" title="4.4 Twiss parameters ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.4 </span>Twiss parameters</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#S5" title="5 Table of symbols ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5 </span>Table of symbols</span></a></li>
<li class="ltx_tocentry"><a href="#bib" title="References ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_title">References</span></a></li>
</ul>
<div class="ltx_pagination ltx_role_newpage"></div>
<section id="S1" class="ltx_section">
<h2 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">1 </span>Introduction</h2>
<div id="S1.p1" class="ltx_para">
<p class="ltx_p">These notes give a short self-contained exposition of the physical assumptions
and models implemented in SixTrack. Emphasis is given on the physical concepts
rather then delving in to the details of the implementation. The content is
meant to complement the SixTrack user guide (see <cite class="ltx_cite">[<a href="#bib.bib1" title="SIXTRACK: single particle tracking code treating transverse motion with synchrotron oscillations in a symplectic manner" class="ltx_ref">10</a>]</cite>).</p>
</div>
<div id="S1.p2" class="ltx_para">
<p class="ltx_p">SixTrack is a 6D single particle symplectic tracking code used to compute the
trajectories of individual relativistic charged particles in circular
accelerators. It has been developed based on the 4D tracking code RaceTrack
<cite class="ltx_cite">[<a href="#bib.bib2" title="RACETRACK: a computer code for the nonlinear particle motion in accelerators" class="ltx_ref">13</a>]</cite> by adding the third degree of freedom, introducing beam-beam
forces and extending the pre- and post- processing capabilities.</p>
</div>
<div id="S1.p3" class="ltx_para">
<p class="ltx_p">The physical models are collected from the main references
<cite class="ltx_cite">[<a href="#bib.bib6" title="Non-linear canonical equations of coupled synchro-betatron motion and their solutions within the framework of a non-linear six-dimensional (symplectic) tracking program for ultrarelativistic protons" class="ltx_ref">9</a>, <a href="#bib.bib7" title="A non-linear canonical formalism for the coupled synchro-betatron motion of protons with arbitrary energy" class="ltx_ref">2</a>, <a href="#bib.bib8" title="A symplectic six-dimensional thin-lens formalism for tracking" class="ltx_ref">8</a>, <a href="#bib.bib9" title="Construction of nonlinear symplectic six-dimensional thin-lens maps by exponentiation" class="ltx_ref">4</a>, <a href="#bib.bib10" title="Symplectic thin-lens transfer maps for SIXTRACK: treatment of bending magnets in terms of the exact hamiltonian" class="ltx_ref">1</a>, <a href="#bib.bib4" title="6D beam-beam kick including coupled motion" class="ltx_ref">7</a>, <a href="#bib.bib5" title="RF multipole implementation" class="ltx_ref">6</a>]</cite>,
which contain more details of the derivation of the maps.</p>
</div>
</section>
<section id="S2" class="ltx_section">
<h2 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">2 </span>Basic Principles and Hamiltonian formalism and notation</h2>
<figure id="S2.F1" class="ltx_figure"><svg id="S2.F1.pic1" class="ltx_picture ltx_centering" height="209.54" version="1.1" viewBox="-172.17 -66.43 420.95 209.54" width="420.95"><g transform="matrix(1 0 0 -1 0 76.68)"><g stroke="#000000"><g fill="#000000"><g stroke-width="0.4pt"><path d="M 0 0" style="fill:none"></path><g transform="matrix(1 0 0 1 -20.76 -14.57)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="41.51">
                            <math id="S2.F1.pic1.m1" class="ltx_Math" alttext="\vec{r}(s)" display="inline"><mrow><mover accent="true"><mi>r</mi><mo stretchy="false">→</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM7">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                          </foreignObject></switch></g></g><g stroke-width="0.8pt"><path d="M 0 0 L -117.23 58.62" style="fill:none"></path><g transform="matrix(-0.894427 0.447212 -0.447212 -0.894427 -117.23 58.62)"><g stroke-width="0.64pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -2.16 2.88 C -1.98 1.8 0 0.18 0.54 0 C 0 -0.18 -1.98 -1.8 -2.16 -2.88" style="fill:none"></path></g></g></g></g></g><g transform="matrix(1 0 0 1 -164.79 66.99)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="41.51">
                              <math id="S2.F1.pic1.m2" class="ltx_Math" alttext="\hat{x}(s)" display="inline"><mrow><mover accent="true"><mi>x</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM8">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                            </foreignObject></switch></g></g></g><g stroke-width="0.8pt"><path d="M 0 0 L 0 117.13" style="fill:none"></path><g transform="matrix(0 1 -1 0 0 117.13)"><g stroke-width="0.64pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -2.16 2.88 C -1.98 1.8 0 0.18 0.54 0 C 0 -0.18 -1.98 -1.8 -2.16 -2.88" style="fill:none"></path></g></g></g></g></g><g transform="matrix(1 0 0 1 -20.76 126.04)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="41.51">
                              <math id="S2.F1.pic1.m3" class="ltx_Math" alttext="\hat{y}(s)" display="inline"><mrow><mover accent="true"><mi>y</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM9">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                            </foreignObject></switch></g></g></g><g stroke-width="0.8pt"><path d="M 0 0 L 117.23 58.62" style="fill:none"></path><g transform="matrix(0.894427 0.447212 -0.447212 0.894427 117.23 58.62)"><g stroke-width="0.64pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -2.16 2.88 C -1.98 1.8 0 0.18 0.54 0 C 0 -0.18 -1.98 -1.8 -2.16 -2.88" style="fill:none"></path></g></g></g></g></g><g transform="matrix(1 0 0 1 123.28 66.99)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="41.51">
                              <math id="S2.F1.pic1.m4" class="ltx_Math" alttext="\hat{z}(s)" display="inline"><mrow><mover accent="true"><mi>z</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM10">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                            </foreignObject></switch></g></g></g><g stroke-width="0.8pt"><path d="M 0 0 C -31.32 -15.66 -48.92 -36.91 -48.92 -59.06" style="fill:none"></path><g transform="matrix(1 0 0 1 -48.92 -59.06)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 0)"><switch><foreignObject color="#000000" height="0" overflow="visible" width="0"></foreignObject></switch></g></g></g><g stroke-width="0.8pt"><path d="M 0 0 C 13.78 6.89 29.86 12.52 46.56 16.41" style="fill:none"></path><g transform="matrix(0.974555 0.227207 -0.227207 0.974555 46.56 16.41)"><g stroke-width="0.64pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -2.16 2.88 C -1.98 1.8 0 0.18 0.54 0 C 0 -0.18 -1.98 -1.8 -2.16 -2.88" style="fill:none"></path></g></g></g></g></g><g transform="matrix(1 0 0 1 47.52 21.8)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 0)"><switch><foreignObject color="#000000" height="0" overflow="visible" width="0"></foreignObject></switch></g></g></g><g stroke-width="0.8pt"><path d="M 0 0 C 38.53 19.27 93.45 27.92 147.11 23.19" style="fill:none"></path><g transform="matrix(1 0 0 1 147.11 23.19)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 0)"><switch><foreignObject color="#000000" height="0" overflow="visible" width="0"></foreignObject></switch></g></g></g><path d="M -43.75 -59.05 L 118.1 -59.05" style="fill:none"></path><path d="M 145.28 18.03 L 118.1 -59.05" style="fill:none"></path><g stroke-width="0.8pt"><path d="M 118.1 -59.05 L 0.88 -0.44" style="fill:none"></path><g transform="matrix(-0.89799 0.448988 -0.448988 -0.89799 0.88 -0.44)"><g stroke-width="0.64pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -2.16 2.88 C -1.98 1.8 0 0.18 0.54 0 C 0 -0.18 -1.98 -1.8 -2.16 -2.88" style="fill:none"></path></g></g></g></g></g></g><path d="M 35.43 -17.72" style="fill:none"></path><g transform="matrix(1 0 0 1 40.32 -6.6)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 18.68)"><switch><foreignObject color="#000000" height="24.91" overflow="visible" width="31.13">
                            <math id="S2.F1.pic1.m5" class="ltx_Math" alttext="\rho=\frac{1}{h}" display="inline"><mrow><mi>ρ</mi><mo>=</mo><mfrac><mn>1</mn><mi>h</mi></mfrac></mrow></math>
                          </foreignObject></switch></g></g><path d="M 236.22 -59.05 L 165.99 -59.05" style="fill:none"></path><g transform="matrix(-1 0 0 -1 165.99 -59.05)"><g stroke-width="0.32pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -1.66 2.21 C -1.52 1.38 0 0.14 0.42 0 C 0 -0.14 -1.52 -1.38 -1.66 -2.21" style="fill:none"></path></g></g></g></g></g><g transform="matrix(1 0 0 1 160.16 -51.4)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="10.38">
                            <math id="S2.F1.pic1.m6" class="ltx_Math" alttext="\hat{X}" display="inline"><mover accent="true"><mi>X</mi><mo stretchy="false">^</mo></mover></math>
                          </foreignObject></switch></g></g><path d="M 236.22 -59.05 L 236.22 -0.64" style="fill:none"></path><g transform="matrix(0 1 -1 0 236.22 -0.64)"><g stroke-width="0.32pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -1.66 2.21 C -1.52 1.38 0 0.14 0.42 0 C 0 -0.14 -1.52 -1.38 -1.66 -2.21" style="fill:none"></path></g></g></g></g></g><g transform="matrix(1 0 0 1 231.03 7.66)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="10.38">
                            <math id="S2.F1.pic1.m7" class="ltx_Math" alttext="\hat{Y}" display="inline"><mover accent="true"><mi>Y</mi><mo stretchy="false">^</mo></mover></math>
                          </foreignObject></switch></g></g><path d="M 236.22 -59.05 L 212.88 -12.38" style="fill:none"></path><g transform="matrix(-0.447209 0.89442 -0.89442 -0.447209 212.88 -12.38)"><g stroke-width="0.32pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -1.66 2.21 C -1.52 1.38 0 0.14 0.42 0 C 0 -0.14 -1.52 -1.38 -1.66 -2.21" style="fill:none"></path></g></g></g></g></g><g transform="matrix(1 0 0 1 217.48 -4.15)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="10.38">
                            <math id="S2.F1.pic1.m8" class="ltx_Math" alttext="\hat{Z}" display="inline"><mover accent="true"><mi>Z</mi><mo stretchy="false">^</mo></mover></math>
                          </foreignObject></switch></g></g><g transform="matrix(1 0 0 1 -99.13 66.71)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="103.78">
                            <math id="S2.F1.pic1.m9" class="ltx_Math" alttext="\vec{Q}(x,y,s,t)" display="inline"><mrow><mover accent="true"><mi>Q</mi><mo stretchy="false">→</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM11">x</mi><mo>,</mo><mi id="XM12">y</mi><mo>,</mo><mi id="XM13">s</mi><mo>,</mo><mi id="XM14">t</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                          </foreignObject></switch></g></g><path d="M -47.24 59.05 M -43.09 59.05 C -43.09 61.35 -44.95 63.21 -47.24 63.21 C -49.54 63.21 -51.39 61.35 -51.39 59.05 C -51.39 56.76 -49.54 54.9 -47.24 54.9 C -44.95 54.9 -43.09 56.76 -43.09 59.05 Z M -47.24 59.05" style="stroke:none"></path><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M -47.24 59.05 L -47.24 23.62" style="fill:none"></path></g><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M -47.24 59.05 L 0 35.43" style="fill:none"></path></g><path d="M -114.57 27.76 C -114.57 27.76 -97.6 45.69 -88.58 50.2 C -79.57 54.7 -58.62 59.01 -49.61 60.24 C -40.59 61.47 -30.83 59.38 -23.62 59.06 C -16.41 58.73 -6.65 57.46 2.36 57.87 C 11.38 58.28 41.34 62.01 41.34 62.01" style="fill:none"></path></g></g></g></g></svg>
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure 1: </span>Moving reference frame <math id="S2.F1.m5" class="ltx_Math" alttext="(\hat{x},\hat{y},\hat{z})" display="inline"><mrow><mo stretchy="false">(</mo><mover accent="true" id="XM23"><mi>x</mi><mo stretchy="false">^</mo></mover><mo>,</mo><mover accent="true" id="XM24"><mi>y</mi><mo stretchy="false">^</mo></mover><mo>,</mo><mover accent="true" id="XM25"><mi>z</mi><mo stretchy="false">^</mo></mover><mo stretchy="false">)</mo></mrow></math> parametrized by
<math id="S2.F1.m6" class="ltx_Math" alttext="s(t)" display="inline"><mrow><mi>s</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM26">t</mi><mo stretchy="false">)</mo></mrow></mrow></math>. The trajectory of a particle <math id="S2.F1.m7" class="ltx_Math" alttext="Q" display="inline"><mi>Q</mi></math> can be described by the coordinates
<math id="S2.F1.m8" class="ltx_Math" alttext="(x,y,s,t)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM27">x</mi><mo>,</mo><mi id="XM28">y</mi><mo>,</mo><mi id="XM29">s</mi><mo>,</mo><mi id="XM30">t</mi><mo stretchy="false">)</mo></mrow></math>.</figcaption>
</figure>
<div id="S2.p1" class="ltx_para">
<p class="ltx_p">The speed, momentum, energy, rest mass, charge of a particle are indicated
by <math id="S2.p1.m1" class="ltx_Math" alttext="v" display="inline"><mi>v</mi></math>, <math id="S2.p1.m2" class="ltx_Math" alttext="P" display="inline"><mi>P</mi></math>, <math id="S2.p1.m3" class="ltx_Math" alttext="E" display="inline"><mi>E</mi></math>, <math id="S2.p1.m4" class="ltx_Math" alttext="m" display="inline"><mi>m</mi></math> and <math id="S2.p1.m5" class="ltx_Math" alttext="q" display="inline"><mi>q</mi></math>, respectively. These quantities are
related by the following equations:</p>
<table id="S5.EGx1" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E1" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E1.m1" class="ltx_Math" alttext="\displaystyle v" display="inline"><mi>v</mi></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E1.m2" class="ltx_Math" alttext="\displaystyle=\beta c" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi>β</mi><mo>⁢</mo><mi>c</mi></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E1.m3" class="ltx_Math" alttext="\displaystyle E^{2}-P^{2}c^{2}" display="inline"><mrow><msup><mi>E</mi><mn>2</mn></msup><mo>-</mo><mrow><msup><mi>P</mi><mn>2</mn></msup><mo>⁢</mo><msup><mi>c</mi><mn>2</mn></msup></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E1.m4" class="ltx_Math" alttext="\displaystyle=m^{2}c^{4}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msup><mi>m</mi><mn>2</mn></msup><mo>⁢</mo><msup><mi>c</mi><mn>4</mn></msup></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E1.m5" class="ltx_Math" alttext="\displaystyle E" display="inline"><mi>E</mi></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E1.m6" class="ltx_Math" alttext="\displaystyle=\gamma mc^{2}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi>γ</mi><mo>⁢</mo><mi>m</mi><mo>⁢</mo><msup><mi>c</mi><mn>2</mn></msup></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E1.m7" class="ltx_Math" alttext="\displaystyle Pc" display="inline"><mrow><mi>P</mi><mo>⁢</mo><mi>c</mi></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E1.m8" class="ltx_Math" alttext="\displaystyle=\beta E" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi>β</mi><mo>⁢</mo><mi>E</mi></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(1)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S2.p1.m6" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math> and <math id="S2.p1.m7" class="ltx_Math" alttext="\gamma" display="inline"><mi>γ</mi></math> are the relativistic factors.</p>
</div>
<div id="S2.p2" class="ltx_para">
<p class="ltx_p">In a curvilinear reference frame defined by a constant curvature <math id="S2.p2.m1" class="ltx_Math" alttext="h_{x}" display="inline"><msub><mi>h</mi><mi>x</mi></msub></math> in the
<math id="S2.p2.m2" class="ltx_Math" alttext="\hat{X},\hat{Z}" display="inline"><mrow><mover accent="true" id="XM31"><mi>X</mi><mo stretchy="false">^</mo></mover><mo>,</mo><mover accent="true" id="XM32"><mi>Z</mi><mo stretchy="false">^</mo></mover></mrow></math> plane and parameterized by <math id="S2.p2.m3" class="ltx_Math" alttext="s" display="inline"><mi>s</mi></math> (see Fig. <a href="#S2.F1" title="Figure 1 ‣ 2 Basic Principles and Hamiltonian formalism and notation ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>), the
position of the particle at a time <math id="S2.p2.m4" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math> can be written as:</p>
<table id="S5.EGx2" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E2" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E2.m1" class="ltx_Math" alttext="\displaystyle\vec{Q}(t)=\vec{r}(s)+x\,\hat{x}(s)+y\,\hat{y}(s)," display="inline"><mrow><mrow><mrow><mover accent="true"><mi>Q</mi><mo stretchy="false">→</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM37">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mover accent="true"><mi>r</mi><mo stretchy="false">→</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM38">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>x</mi></mpadded><mo>⁢</mo><mover accent="true"><mi>x</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM39">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>y</mi></mpadded><mo>⁢</mo><mover accent="true"><mi>y</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM40">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(2)</span></td>
</tr>
</table>
<p class="ltx_p">and therefore identified by the coordinates <math id="S2.p2.m5" class="ltx_Math" alttext="s,x,y,t" display="inline"><mrow><mi id="XM41">s</mi><mo>,</mo><mi id="XM42">x</mi><mo>,</mo><mi id="XM43">y</mi><mo>,</mo><mi id="XM44">t</mi></mrow></math> in the reference frame
defined by <math id="S2.p2.m6" class="ltx_Math" alttext="\hat{x}(s)" display="inline"><mrow><mover accent="true"><mi>x</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM45">s</mi><mo stretchy="false">)</mo></mrow></mrow></math> and <math id="S2.p2.m7" class="ltx_Math" alttext="\hat{y}(s)" display="inline"><mrow><mover accent="true"><mi>y</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM46">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>. In particle tracking, <math id="S2.p2.m8" class="ltx_Math" alttext="s" display="inline"><mi>s</mi></math> is normally
used as independent parameter and <math id="S2.p2.m9" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math> as a coordinate.</p>
</div>
<div id="S2.p3" class="ltx_para">
<p class="ltx_p">The electromagnetic fields <span class="ltx_text ltx_font_bold">E</span> and <span class="ltx_text ltx_font_bold">B</span> can be derived in a curvilinear
reference frame from the potentials <math id="S2.p3.m1" class="ltx_Math" alttext="V(x,y,s,t)" display="inline"><mrow><mi>V</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM47">x</mi><mo>,</mo><mi id="XM48">y</mi><mo>,</mo><mi id="XM49">s</mi><mo>,</mo><mi id="XM50">t</mi><mo stretchy="false">)</mo></mrow></mrow></math> and <math id="S2.p3.m2" class="ltx_Math" alttext="\mathbf{A}(x,y,s,t)" display="inline"><mrow><mi>𝐀</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM51">x</mi><mo>,</mo><mi id="XM52">y</mi><mo>,</mo><mi id="XM53">s</mi><mo>,</mo><mi id="XM54">t</mi><mo stretchy="false">)</mo></mrow></mrow></math>, where</p>
<table id="S5.EGx3" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E3" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E3.m1" class="ltx_Math" alttext="\displaystyle\mathbf{A}(x,y,s,t)=A_{x}(x,y,s,t)\hat{x}(s)+A_{y}(x,y,s,t)\hat{y%
}(s)+A_{s}(x,y,s,t)\hat{z}(s)" display="inline"><mrow><mrow><mi>𝐀</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM74">x</mi><mo>,</mo><mi id="XM75">y</mi><mo>,</mo><mi id="XM76">s</mi><mo>,</mo><mi id="XM77">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><msub><mi>A</mi><mi>x</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM78">x</mi><mo>,</mo><mi id="XM79">y</mi><mo>,</mo><mi id="XM80">s</mi><mo>,</mo><mi id="XM81">t</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>x</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM82">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><msub><mi>A</mi><mi>y</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM83">x</mi><mo>,</mo><mi id="XM84">y</mi><mo>,</mo><mi id="XM85">s</mi><mo>,</mo><mi id="XM86">t</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>y</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM87">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><msub><mi>A</mi><mi>s</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM88">x</mi><mo>,</mo><mi id="XM89">y</mi><mo>,</mo><mi id="XM90">s</mi><mo>,</mo><mi id="XM91">t</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>z</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM92">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3)</span></td>
</tr>
</table>
<p class="ltx_p">and for which:</p>
<table id="S5.EGx4" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E4" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E4.m1" class="ltx_Math" alttext="\displaystyle\mathbf{E}" display="inline"><mi>𝐄</mi></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E4.m2" class="ltx_Math" alttext="\displaystyle=-\nabla V-\frac{\partial\mathbf{A}}{\partial t}=-\partial_{x}V%
\hat{x}-\partial_{y}V\hat{y}-\frac{1}{1+hx}\partial_{s}V\hat{z}-\partial_{t}%
\mathbf{A}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><mo>-</mo><mrow><mo>∇</mo><mo>⁡</mo><mi>V</mi></mrow></mrow><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mo>∂</mo><mo>⁡</mo><mi>𝐀</mi></mrow><mrow><mo>∂</mo><mo>⁡</mo><mi>t</mi></mrow></mfrac></mstyle></mrow><mo>=</mo><mrow><mrow><mo>-</mo><mrow><msub><mo>∂</mo><mi>x</mi></msub><mo>⁡</mo><mrow><mi>V</mi><mo>⁢</mo><mover accent="true"><mi>x</mi><mo stretchy="false">^</mo></mover></mrow></mrow></mrow><mo>-</mo><mrow><msub><mo>∂</mo><mi>y</mi></msub><mo>⁡</mo><mrow><mi>V</mi><mo>⁢</mo><mover accent="true"><mi>y</mi><mo stretchy="false">^</mo></mover></mrow></mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mn>1</mn><mo>+</mo><mrow><mi>h</mi><mo>⁢</mo><mi>x</mi></mrow></mrow></mfrac></mstyle><mo>⁢</mo><mrow><msub><mo>∂</mo><mi>s</mi></msub><mo>⁡</mo><mrow><mi>V</mi><mo>⁢</mo><mover accent="true"><mi>z</mi><mo stretchy="false">^</mo></mover></mrow></mrow></mrow><mo>-</mo><mrow><msub><mo>∂</mo><mi>t</mi></msub><mo>⁡</mo><mi>𝐀</mi></mrow></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(4)</span></td>
</tr>
</table>
<table id="S5.EGx5" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E5" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E5.m1" class="ltx_Math" alttext="\displaystyle\mathbf{B}=\nabla\times\mathbf{A}" display="inline"><mrow><mi>𝐁</mi><mo>=</mo><mrow><mo>∇</mo><mo>×</mo><mi>𝐀</mi></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E5.m2" class="ltx_Math" alttext="\displaystyle=\left(\partial_{y}A_{s}-\frac{\partial_{s}A_{y}}{1+hx}\right)%
\hat{x}+\cdots" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><mrow><mo>(</mo><mrow id="XM94"><mrow><msub><mo>∂</mo><mi>y</mi></msub><mo>⁡</mo><msub><mi>A</mi><mi>s</mi></msub></mrow><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><msub><mo>∂</mo><mi>s</mi></msub><mo>⁡</mo><msub><mi>A</mi><mi>y</mi></msub></mrow><mrow><mn>1</mn><mo>+</mo><mrow><mi>h</mi><mo>⁢</mo><mi>x</mi></mrow></mrow></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>x</mi><mo stretchy="false">^</mo></mover></mrow><mo>+</mo><mi mathvariant="normal">⋯</mi></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(5)</span></td>
</tr>
<tr id="S2.E6" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E6.m2" class="ltx_Math" alttext="\displaystyle\cdots+\left(\frac{\partial_{s}A_{x}}{1+hx}-\frac{hA_{s}}{1+hx}-%
\partial_{x}A_{s}\right)\hat{y}+\left(\partial_{x}A_{y}-\partial_{y}A_{x}%
\right)\hat{z}." display="inline"><mrow><mrow><mi mathvariant="normal">⋯</mi><mo>+</mo><mrow><mrow><mo>(</mo><mrow id="XM97"><mstyle displaystyle="true"><mfrac><mrow><msub><mo>∂</mo><mi>s</mi></msub><mo>⁡</mo><msub><mi>A</mi><mi>x</mi></msub></mrow><mrow><mn>1</mn><mo>+</mo><mrow><mi>h</mi><mo>⁢</mo><mi>x</mi></mrow></mrow></mfrac></mstyle><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mi>h</mi><mo>⁢</mo><msub><mi>A</mi><mi>s</mi></msub></mrow><mrow><mn>1</mn><mo>+</mo><mrow><mi>h</mi><mo>⁢</mo><mi>x</mi></mrow></mrow></mfrac></mstyle><mo>-</mo><mrow><msub><mo>∂</mo><mi>x</mi></msub><mo>⁡</mo><msub><mi>A</mi><mi>s</mi></msub></mrow></mrow><mo>)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>y</mi><mo stretchy="false">^</mo></mover></mrow><mo>+</mo><mrow><mrow><mo>(</mo><mrow id="XM98"><mrow><msub><mo>∂</mo><mi>x</mi></msub><mo>⁡</mo><msub><mi>A</mi><mi>y</mi></msub></mrow><mo>-</mo><mrow><msub><mo>∂</mo><mi>y</mi></msub><mo>⁡</mo><msub><mi>A</mi><mi>x</mi></msub></mrow></mrow><mo>)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>z</mi><mo stretchy="false">^</mo></mover></mrow></mrow><mo>.</mo></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(6)</span></td>
</tr>
</table>
<p class="ltx_p">In this reference frame the canonical momenta are:</p>
<table id="S5.EGx6" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E7" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E7.m1" class="ltx_Math" alttext="\displaystyle P_{x}" display="inline"><msub><mi>P</mi><mi>x</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E7.m2" class="ltx_Math" alttext="\displaystyle=m\gamma\dot{x}+qA_{x}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>m</mi><mo>⁢</mo><mi>γ</mi><mo>⁢</mo><mover accent="true"><mi>x</mi><mo>˙</mo></mover></mrow><mo>+</mo><mrow><mi>q</mi><mo>⁢</mo><msub><mi>A</mi><mi>x</mi></msub></mrow></mrow></mrow><mo>,</mo></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E7.m3" class="ltx_Math" alttext="\displaystyle P_{y}" display="inline"><msub><mi>P</mi><mi>y</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E7.m4" class="ltx_Math" alttext="\displaystyle=m\gamma\dot{y}+qA_{y}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>m</mi><mo>⁢</mo><mi>γ</mi><mo>⁢</mo><mover accent="true"><mi>y</mi><mo>˙</mo></mover></mrow><mo>+</mo><mrow><mi>q</mi><mo>⁢</mo><msub><mi>A</mi><mi>y</mi></msub></mrow></mrow></mrow><mo>,</mo></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E7.m5" class="ltx_Math" alttext="\displaystyle P_{s}" display="inline"><msub><mi>P</mi><mi>s</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E7.m6" class="ltx_Math" alttext="\displaystyle=m\gamma\dot{s}(1+hx)^{2}+q(1+hx)A_{s}." display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>m</mi><mo>⁢</mo><mi>γ</mi><mo>⁢</mo><mover accent="true"><mi>s</mi><mo>˙</mo></mover><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM101"><mn>1</mn><mo>+</mo><mrow><mi>h</mi><mo>⁢</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow><mo>+</mo><mrow><mi>q</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM102"><mn>1</mn><mo>+</mo><mrow><mi>h</mi><mo>⁢</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msub><mi>A</mi><mi>s</mi></msub></mrow></mrow></mrow><mo>.</mo></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(7)</span></td>
</tr>
</table>
<p class="ltx_p">If <math id="S2.p3.m3" class="ltx_Math" alttext="s(t)" display="inline"><mrow><mi>s</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM103">t</mi><mo stretchy="false">)</mo></mrow></mrow></math> is monotonically increasing, it is possible to derive the equations
of motion using <math id="S2.p3.m4" class="ltx_Math" alttext="s" display="inline"><mi>s</mi></math> as the independent parameter and <math id="S2.p3.m5" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math> as a coordinate with
<math id="S2.p3.m6" class="ltx_Math" alttext="-E" display="inline"><mrow><mo>-</mo><mi>E</mi></mrow></math> as the conjugate momentum. Since in accelerators the orbits of the
particles are often a perturbation of the reference trajectory followed by a
particle with rest mass <math id="S2.p3.m7" class="ltx_Math" alttext="m_{0}" display="inline"><msub><mi>m</mi><mn>0</mn></msub></math>, charge <math id="S2.p3.m8" class="ltx_Math" alttext="q_{0}" display="inline"><msub><mi>q</mi><mn>0</mn></msub></math>, speed <math id="S2.p3.m9" class="ltx_Math" alttext="\beta_{0}c" display="inline"><mrow><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi></mrow></math> and momentum
<math id="S2.p3.m10" class="ltx_Math" alttext="P_{0}" display="inline"><msub><mi>P</mi><mn>0</mn></msub></math>, one could use the following derived quantities that usually assume small
values:</p>
<table id="S5.EGx7" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E8" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E8.m1" class="ltx_Math" alttext="\displaystyle\Delta s" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>s</mi></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E8.m2" class="ltx_Math" alttext="\displaystyle=s-\beta ct" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><mi>β</mi><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E8.m3" class="ltx_Math" alttext="\displaystyle c\Delta t" display="inline"><mrow><mi>c</mi><mo>⁢</mo><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>t</mi></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E8.m4" class="ltx_Math" alttext="\displaystyle=s/\beta_{0}-ct" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>s</mi><mo>/</mo><msub><mi>β</mi><mn>0</mn></msub></mrow><mo>-</mo><mrow><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E8.m5" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E8.m6" class="ltx_Math" alttext="\displaystyle=s-\beta_{0}ct" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(8)</span></td>
</tr>
<tr id="S2.E9" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E9.m1" class="ltx_Math" alttext="\displaystyle\delta" display="inline"><mi>δ</mi></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E9.m2" class="ltx_Math" alttext="\displaystyle=\frac{P-P_{0}}{P_{0}}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mi>P</mi><mo>-</mo><msub><mi>P</mi><mn>0</mn></msub></mrow><msub><mi>P</mi><mn>0</mn></msub></mfrac></mstyle></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E9.m3" class="ltx_Math" alttext="\displaystyle p_{t}" display="inline"><msub><mi>p</mi><mi>t</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E9.m4" class="ltx_Math" alttext="\displaystyle=\frac{E-E_{0}}{P_{0}c}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mi>E</mi><mo>-</mo><msub><mi>E</mi><mn>0</mn></msub></mrow><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi></mrow></mfrac></mstyle></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E9.m5" class="ltx_Math" alttext="\displaystyle p_{\sigma}" display="inline"><msub><mi>p</mi><mi>σ</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E9.m6" class="ltx_Math" alttext="\displaystyle=\frac{E-E_{0}}{\beta_{0}P_{0}c}." display="inline"><mrow><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mi>E</mi><mo>-</mo><msub><mi>E</mi><mn>0</mn></msub></mrow><mrow><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi></mrow></mfrac></mstyle></mrow><mo>.</mo></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(9)</span></td>
</tr>
</table>
<p class="ltx_p">and rescale the momenta according to:</p>
<table id="S5.EGx8" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E10" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E10.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E10.m2" class="ltx_Math" alttext="\displaystyle=P_{x}/P_{0}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>P</mi><mi>x</mi></msub><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E10.m3" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E10.m4" class="ltx_Math" alttext="\displaystyle=P_{y}/P_{0}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>P</mi><mi>y</mi></msub><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E10.m5" class="ltx_Math" alttext="\displaystyle p_{s}" display="inline"><msub><mi>p</mi><mi>s</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E10.m6" class="ltx_Math" alttext="\displaystyle=P_{s}/P_{0}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>P</mi><mi>s</mi></msub><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(10)</span></td>
</tr>
<tr id="S2.E11" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E11.m1" class="ltx_Math" alttext="\displaystyle a_{x}" display="inline"><msub><mi>a</mi><mi>x</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E11.m2" class="ltx_Math" alttext="\displaystyle=qA_{x}/P_{0}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>q</mi><mo>⁢</mo><msub><mi>A</mi><mi>x</mi></msub></mrow><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E11.m3" class="ltx_Math" alttext="\displaystyle a_{y}" display="inline"><msub><mi>a</mi><mi>y</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E11.m4" class="ltx_Math" alttext="\displaystyle=qA_{y}/P_{0}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>q</mi><mo>⁢</mo><msub><mi>A</mi><mi>y</mi></msub></mrow><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E11.m5" class="ltx_Math" alttext="\displaystyle a_{s}" display="inline"><msub><mi>a</mi><mi>s</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E11.m6" class="ltx_Math" alttext="\displaystyle=qA_{s}/P_{0}." display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>q</mi><mo>⁢</mo><msub><mi>A</mi><mi>s</mi></msub></mrow><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow></mrow><mo>.</mo></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(11)</span></td>
</tr>
</table>
<p class="ltx_p">The corresponding Hamiltonians, kept implicit for brevity, are:</p>
<table id="S5.EGx9" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E12" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E12.m1" class="ltx_Math" alttext="\displaystyle H\left(x,p_{x},y,p_{y},\sigma,p_{\sigma};s\right)" display="inline"><mrow><mi>H</mi><mo>⁢</mo><mrow><mo>(</mo><mi id="XM111">x</mi><mo>,</mo><msub id="XM112"><mi>p</mi><mi>x</mi></msub><mo>,</mo><mi id="XM113">y</mi><mo>,</mo><msub id="XM114"><mi>p</mi><mi>y</mi></msub><mo>,</mo><mi id="XM115">σ</mi><mo>,</mo><msub id="XM116"><mi>p</mi><mi>σ</mi></msub><mo>;</mo><mi id="XM117">s</mi><mo>)</mo></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E12.m2" class="ltx_Math" alttext="\displaystyle=p_{\sigma}-p_{s}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>-</mo><msub><mi>p</mi><mi>s</mi></msub></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(12)</span></td>
</tr>
<tr id="S2.E13" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E13.m1" class="ltx_Math" alttext="\displaystyle H\left(x,p_{x},y,p_{y},c\Delta t,p_{t};s\right)" display="inline"><mrow><mi>H</mi><mo>⁢</mo><mrow><mo>(</mo><mi id="XM125">x</mi><mo>,</mo><msub id="XM126"><mi>p</mi><mi>x</mi></msub><mo>,</mo><mi id="XM127">y</mi><mo>,</mo><msub id="XM128"><mi>p</mi><mi>y</mi></msub><mo>,</mo><mrow id="XM129"><mi>c</mi><mo>⁢</mo><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>t</mi></mrow><mo>,</mo><msub id="XM130"><mi>p</mi><mi>t</mi></msub><mo>;</mo><mi id="XM131">s</mi><mo>)</mo></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E13.m2" class="ltx_Math" alttext="\displaystyle=\frac{p_{t}}{\beta_{0}}-p_{s}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>t</mi></msub><msub><mi>β</mi><mn>0</mn></msub></mfrac></mstyle><mo>-</mo><msub><mi>p</mi><mi>s</mi></msub></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(13)</span></td>
</tr>
<tr id="S2.E14" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E14.m1" class="ltx_Math" alttext="\displaystyle H\left(x,p_{x},y,p_{y},\Delta s,\delta;s\right)" display="inline"><mrow><mi>H</mi><mo>⁢</mo><mrow><mo>(</mo><mi id="XM139">x</mi><mo>,</mo><msub id="XM140"><mi>p</mi><mi>x</mi></msub><mo>,</mo><mi id="XM141">y</mi><mo>,</mo><msub id="XM142"><mi>p</mi><mi>y</mi></msub><mo>,</mo><mrow id="XM143"><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>s</mi></mrow><mo>,</mo><mi id="XM144">δ</mi><mo>;</mo><mi id="XM145">s</mi><mo>)</mo></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E14.m2" class="ltx_Math" alttext="\displaystyle=\delta-p_{s}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mi>δ</mi><mo>-</mo><msub><mi>p</mi><mi>s</mi></msub></mrow></mrow><mo>,</mo></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(14)</span></td>
</tr>
</table>
<p class="ltx_p">where</p>
<table id="S5.EGx10" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E15" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E15.m1" class="ltx_Math" alttext="\displaystyle p_{s}" display="inline"><msub><mi>p</mi><mi>s</mi></msub></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E15.m2" class="ltx_Math" alttext="\displaystyle=(1+hx)\left(\sqrt{(1+\delta)^{2}-(p_{x}-a_{x})^{2}-(p_{y}-a_{y})%
^{2}}+a_{s}\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM154"><mn>1</mn><mo>+</mo><mrow><mi>h</mi><mo>⁢</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM155"><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM151"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM152"><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><msub><mi>a</mi><mi>x</mi></msub></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM153"><msub><mi>p</mi><mi>y</mi></msub><mo>-</mo><msub><mi>a</mi><mi>y</mi></msub></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow></msqrt><mo>+</mo><msub><mi>a</mi><mi>s</mi></msub></mrow><mo>)</mo></mrow></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(15)</span></td>
</tr>
<tr id="S2.E16" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E16.m1" class="ltx_Math" alttext="\displaystyle\frac{P}{P_{0}}" display="inline"><mstyle displaystyle="true"><mfrac><mi>P</mi><msub><mi>P</mi><mn>0</mn></msub></mfrac></mstyle></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E16.m2" class="ltx_Math" alttext="\displaystyle=1+\delta=\sqrt{\left(\frac{E}{P_{0}c}\right)^{2}-\left(\frac{mc}%
{P_{0}}\right)^{2}}=\sqrt{p_{t}^{2}+\frac{2p_{t}}{\beta_{0}}+\frac{1}{\beta_{0%
}^{2}}\left(1-\frac{m^{2}}{m_{0}^{2}}\right)+1}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo>=</mo><msqrt><mrow><msup><mrow><mo>(</mo><mstyle displaystyle="true" id="XM159"><mfrac id="XM159a"><mi>E</mi><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi></mrow></mfrac></mstyle><mo>)</mo></mrow><mn>2</mn></msup><mo>-</mo><msup><mrow><mo>(</mo><mstyle displaystyle="true" id="XM160"><mfrac id="XM160a"><mrow><mi>m</mi><mo>⁢</mo><mi>c</mi></mrow><msub><mi>P</mi><mn>0</mn></msub></mfrac></mstyle><mo>)</mo></mrow><mn>2</mn></msup></mrow></msqrt><mo>=</mo><msqrt><mrow><msubsup><mi>p</mi><mi>t</mi><mn>2</mn></msubsup><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><mn>2</mn><mo>⁢</mo><msub><mi>p</mi><mi>t</mi></msub></mrow><msub><mi>β</mi><mn>0</mn></msub></mfrac></mstyle><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><msubsup><mi>β</mi><mn>0</mn><mn>2</mn></msubsup></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM161"><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><msup><mi>m</mi><mn>2</mn></msup><msubsup><mi>m</mi><mn>0</mn><mn>2</mn></msubsup></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow><mo>+</mo><mn>1</mn></mrow></msqrt></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(16)</span></td>
</tr>
<tr id="S2.E17" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E17.m1" class="ltx_Math" alttext="\displaystyle\frac{E}{P_{0}c}" display="inline"><mstyle displaystyle="true"><mfrac><mi>E</mi><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi></mrow></mfrac></mstyle></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E17.m2" class="ltx_Math" alttext="\displaystyle=\frac{1}{\beta_{0}}+p_{t}=\sqrt{\left(\frac{P}{P_{0}}\right)^{2}%
+\left(\frac{mc}{P_{0}}\right)^{2}}=\sqrt{\left(1+\delta\right)^{2}+\left(%
\frac{m}{m_{0}}\right)^{2}\left(\frac{1}{\beta_{0}\gamma_{0}}\right)^{2}}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><msub><mi>β</mi><mn>0</mn></msub></mfrac></mstyle><mo>+</mo><msub><mi>p</mi><mi>t</mi></msub></mrow><mo>=</mo><msqrt><mrow><msup><mrow><mo>(</mo><mstyle displaystyle="true" id="XM167"><mfrac id="XM167a"><mi>P</mi><msub><mi>P</mi><mn>0</mn></msub></mfrac></mstyle><mo>)</mo></mrow><mn>2</mn></msup><mo>+</mo><msup><mrow><mo>(</mo><mstyle displaystyle="true" id="XM168"><mfrac id="XM168a"><mrow><mi>m</mi><mo>⁢</mo><mi>c</mi></mrow><msub><mi>P</mi><mn>0</mn></msub></mfrac></mstyle><mo>)</mo></mrow><mn>2</mn></msup></mrow></msqrt><mo>=</mo><msqrt><mrow><msup><mrow><mo>(</mo><mrow id="XM169"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo>)</mo></mrow><mn>2</mn></msup><mo>+</mo><mrow><msup><mrow><mo>(</mo><mstyle displaystyle="true" id="XM170"><mfrac id="XM170a"><mi>m</mi><msub><mi>m</mi><mn>0</mn></msub></mfrac></mstyle><mo>)</mo></mrow><mn>2</mn></msup><mo>⁢</mo><msup><mrow><mo>(</mo><mstyle displaystyle="true" id="XM171"><mfrac id="XM171a"><mn>1</mn><mrow><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><msub><mi>γ</mi><mn>0</mn></msub></mrow></mfrac></mstyle><mo>)</mo></mrow><mn>2</mn></msup></mrow></mrow></msqrt></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(17)</span></td>
</tr>
</table>
<table id="S5.EGx11" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E18" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E18.m1" class="ltx_Math" alttext="\displaystyle\left(1+\delta\right)^{2}" display="inline"><msup><mrow><mo>(</mo><mrow id="XM173"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo>)</mo></mrow><mn>2</mn></msup></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E18.m2" class="ltx_Math" alttext="\displaystyle=\beta_{0}^{2}p_{\sigma}^{2}+2p_{\sigma}+1" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><msubsup><mi>β</mi><mn>0</mn><mn>2</mn></msubsup><mo>⁢</mo><msubsup><mi>p</mi><mi>σ</mi><mn>2</mn></msubsup></mrow><mo>+</mo><mrow><mn>2</mn><mo>⁢</mo><msub><mi>p</mi><mi>σ</mi></msub></mrow><mo>+</mo><mn>1</mn></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E18.m3" class="ltx_Math" alttext="\displaystyle\beta=\frac{Pc}{E}" display="inline"><mrow><mi>β</mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mi>P</mi><mo>⁢</mo><mi>c</mi></mrow><mi>E</mi></mfrac></mstyle></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E18.m4" class="ltx_Math" alttext="\displaystyle=\frac{1+\delta}{1/{\beta_{0}}+p_{t}}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mrow><mrow><mn>1</mn><mo>/</mo><msub><mi>β</mi><mn>0</mn></msub></mrow><mo>+</mo><msub><mi>p</mi><mi>t</mi></msub></mrow></mfrac></mstyle></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(18)</span></td>
</tr>
</table>
</div>
<div id="S2.p4" class="ltx_para">
<p class="ltx_p">In addition the following derivatives and approximations can be derived:</p>
<table id="S5.EGx12" class="ltx_equationgroup ltx_eqn_align">
<tr id="S2.E20" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E20.m1" class="ltx_Math" alttext="\displaystyle\delta" display="inline"><mi>δ</mi></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E20.m2" class="ltx_Math" alttext="\displaystyle\simeq p_{\sigma}-\frac{1}{\gamma_{0}^{2}}\cdot\frac{1}{2}p_{%
\sigma}^{2}" display="inline"><mrow><mi></mi><mo>≃</mo><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>-</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><msubsup><mi>γ</mi><mn>0</mn><mn>2</mn></msubsup></mfrac></mstyle><mo>⋅</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle></mrow><mo>⁢</mo><msubsup><mi>p</mi><mi>σ</mi><mn>2</mn></msubsup></mrow></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E20.m3" class="ltx_Math" alttext="\displaystyle\frac{d\delta}{dp_{\sigma}}" display="inline"><mstyle displaystyle="true"><mfrac><mrow><mi>d</mi><mo>⁢</mo><mi>δ</mi></mrow><mrow><mi>d</mi><mo>⁢</mo><msub><mi>p</mi><mi>σ</mi></msub></mrow></mfrac></mstyle></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E20.m4" class="ltx_Math" alttext="\displaystyle=\frac{\beta_{0}}{\beta}\simeq 1-\frac{p_{\sigma}}{\gamma_{0}^{2}}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle><mo>≃</mo><mrow><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>σ</mi></msub><msubsup><mi>γ</mi><mn>0</mn><mn>2</mn></msubsup></mfrac></mstyle></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E20.m5" class="ltx_Math" alttext="\displaystyle\frac{d^{2}\delta}{dp_{\sigma}^{2}}" display="inline"><mstyle displaystyle="true"><mfrac><mrow><msup><mi>d</mi><mn>2</mn></msup><mo>⁢</mo><mi>δ</mi></mrow><mrow><mi>d</mi><mo>⁢</mo><msubsup><mi>p</mi><mi>σ</mi><mn>2</mn></msubsup></mrow></mfrac></mstyle></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E20.m6" class="ltx_Math" alttext="\displaystyle=-\frac{1}{\gamma_{0}^{2}}\cdot\left(\frac{p_{0}}{p}\right)^{3}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><msubsup><mi>γ</mi><mn>0</mn><mn>2</mn></msubsup></mfrac></mstyle><mo>⋅</mo><msup><mrow><mo>(</mo><mstyle displaystyle="true" id="XM175"><mfrac id="XM175a"><msub><mi>p</mi><mn>0</mn></msub><mi>p</mi></mfrac></mstyle><mo>)</mo></mrow><mn>3</mn></msup></mrow></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(20)</span></td>
</tr>
<tr id="S2.E21" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E21.m1" class="ltx_Math" alttext="\displaystyle\delta" display="inline"><mi>δ</mi></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E21.m2" class="ltx_Math" alttext="\displaystyle\simeq\frac{p_{t}}{\beta_{0}}-\frac{1}{\beta_{0}^{2}\gamma_{0}^{2%
}}\cdot\frac{1}{2}p_{t}^{2}" display="inline"><mrow><mi></mi><mo>≃</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>t</mi></msub><msub><mi>β</mi><mn>0</mn></msub></mfrac></mstyle><mo>-</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><msubsup><mi>β</mi><mn>0</mn><mn>2</mn></msubsup><mo>⁢</mo><msubsup><mi>γ</mi><mn>0</mn><mn>2</mn></msubsup></mrow></mfrac></mstyle><mo>⋅</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle></mrow><mo>⁢</mo><msubsup><mi>p</mi><mi>t</mi><mn>2</mn></msubsup></mrow></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E21.m3" class="ltx_Math" alttext="\displaystyle\frac{d\delta}{dp_{t}}" display="inline"><mstyle displaystyle="true"><mfrac><mrow><mi>d</mi><mo>⁢</mo><mi>δ</mi></mrow><mrow><mi>d</mi><mo>⁢</mo><msub><mi>p</mi><mi>t</mi></msub></mrow></mfrac></mstyle></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E21.m4" class="ltx_Math" alttext="\displaystyle=\frac{1}{\beta}\simeq\frac{1}{\beta_{0}}-\frac{p_{t}}{\beta_{0}^%
{2}\gamma_{0}^{2}}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mi>β</mi></mfrac></mstyle><mo>≃</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><msub><mi>β</mi><mn>0</mn></msub></mfrac></mstyle><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>t</mi></msub><mrow><msubsup><mi>β</mi><mn>0</mn><mn>2</mn></msubsup><mo>⁢</mo><msubsup><mi>γ</mi><mn>0</mn><mn>2</mn></msubsup></mrow></mfrac></mstyle></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S2.E21.m5" class="ltx_Math" alttext="\displaystyle\frac{d^{2}\delta}{dp_{t}^{2}}" display="inline"><mstyle displaystyle="true"><mfrac><mrow><msup><mi>d</mi><mn>2</mn></msup><mo>⁢</mo><mi>δ</mi></mrow><mrow><mi>d</mi><mo>⁢</mo><msubsup><mi>p</mi><mi>t</mi><mn>2</mn></msubsup></mrow></mfrac></mstyle></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S2.E21.m6" class="ltx_Math" alttext="\displaystyle=-\frac{1}{\beta_{0}^{2}\gamma_{0}^{2}}\cdot\left(\frac{p_{0}}{p}%
\right)^{3}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><msubsup><mi>β</mi><mn>0</mn><mn>2</mn></msubsup><mo>⁢</mo><msubsup><mi>γ</mi><mn>0</mn><mn>2</mn></msubsup></mrow></mfrac></mstyle><mo>⋅</mo><msup><mrow><mo>(</mo><mstyle displaystyle="true" id="XM177"><mfrac id="XM177a"><msub><mi>p</mi><mn>0</mn></msub><mi>p</mi></mfrac></mstyle><mo>)</mo></mrow><mn>3</mn></msup></mrow></mrow></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(21)</span></td>
</tr>
</table>
</div>
</section>
<section id="S3" class="ltx_section">
<h2 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3 </span>Beam-line elements tracking maps</h2>
<div id="S3.p1" class="ltx_para">
<p class="ltx_p">Each beam line elements is often characterized by a specific field
configuration which determine the way the equation of motions are solved. The
solutions of the equation of motion are typically explicit and derived by
solving exactly the Hamilton equations for arbitrary initial conditions of an
approximated Hamiltonian.</p>
</div>
<div id="S3.p2" class="ltx_para">
<p class="ltx_p">The following section illustrates the tracking maps used by SixTrack, labelled
by the beam line elements that the maps approximately represent. The map is the
solution of the equations of motion for a step <math id="S3.p2.m1" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> in the independent parameter
<math id="S3.p2.m2" class="ltx_Math" alttext="s" display="inline"><mi>s</mi></math> with a given set of initial conditions in the canonical coordinates. For
brevity, when a coordinate is left unchanged by the map, the corresponding
equation is omitted. High order integrators for single beam line elements can
be built by combining simpler maps (e.g. thin kick and drifts).</p>
</div>
<div id="S3.p3" class="ltx_para">
<p class="ltx_p">The following maps use the canonical conjugate pairs <math id="S3.p3.m1" class="ltx_Math" alttext="(x,p_{x})" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM178">x</mi><mo>,</mo><msub id="XM179"><mi>p</mi><mi>x</mi></msub><mo stretchy="false">)</mo></mrow></math>, <math id="S3.p3.m2" class="ltx_Math" alttext="(y,p_{y})" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM180">y</mi><mo>,</mo><msub id="XM181"><mi>p</mi><mi>y</mi></msub><mo stretchy="false">)</mo></mrow></math>
and <math id="S3.p3.m3" class="ltx_Math" alttext="(\sigma,p_{\sigma})" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM182">σ</mi><mo>,</mo><msub id="XM183"><mi>p</mi><mi>σ</mi></msub><mo stretchy="false">)</mo></mrow></math>. It should be noted that SixTrack compute <math id="S3.p3.m4" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math> and <math id="S3.p3.m5" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>
during tracking instead of the momentum coordinates <math id="S3.p3.m6" class="ltx_Math" alttext="p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math> and <math id="S3.p3.m7" class="ltx_Math" alttext="p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math> and (<math id="S3.p3.m8" class="ltx_Math" alttext="E" display="inline"><mi>E</mi></math>,
<math id="S3.p3.m9" class="ltx_Math" alttext="E_{0}" display="inline"><msub><mi>E</mi><mn>0</mn></msub></math>), (<math id="S3.p3.m10" class="ltx_Math" alttext="P" display="inline"><mi>P</mi></math>, <math id="S3.p3.m11" class="ltx_Math" alttext="P_{0}" display="inline"><msub><mi>P</mi><mn>0</mn></msub></math>) instead of <math id="S3.p3.m12" class="ltx_Math" alttext="p_{\sigma}" display="inline"><msub><mi>p</mi><mi>σ</mi></msub></math>. The canonical variables are
used instead for the generation of linear and higher order symplectic maps
needed for action-angle variable transformations and Twiss parameter extraction.</p>
</div>
<section id="S3.SS1" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1 </span>Drift</h3>
<div id="S3.SS1.p1" class="ltx_para">
<p class="ltx_p">A drift is a straight, field-free region (<math id="S3.SS1.p1.m1" class="ltx_Math" alttext="h_{x,y}=0" display="inline"><mrow><msub><mi>h</mi><mrow><mi id="XM184">x</mi><mo>,</mo><mi id="XM185">y</mi></mrow></msub><mo>=</mo><mn>0</mn></mrow></math>, <math id="S3.SS1.p1.m2" class="ltx_Math" alttext="V=0" display="inline"><mrow><mi>V</mi><mo>=</mo><mn>0</mn></mrow></math> and
<math id="S3.SS1.p1.m3" class="ltx_Math" alttext="\mathbf{A}=0" display="inline"><mrow><mi>𝐀</mi><mo>=</mo><mn>0</mn></mrow></math>). The exact and expanded Hamiltonian for a drift space are</p>
<table id="S5.EGx13" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E22" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E22.m1" class="ltx_Math" alttext="\displaystyle H=p_{\sigma}-\sqrt{(1+\delta)^{2}-p_{x}^{2}-p_{y}^{2}}" display="inline"><mrow><mi>H</mi><mo>=</mo><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>-</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM187"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E22.m2" class="ltx_Math" alttext="\displaystyle\approx p_{\sigma}-\delta+\frac{1}{2}\frac{p_{x}^{2}+p_{y}^{2}}{1%
+\delta}." display="inline"><mrow><mrow><mi></mi><mo>≈</mo><mrow><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>-</mo><mi>δ</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(22)</span></td>
</tr>
</table>
</div>
<div id="S3.SS1.p2" class="ltx_para">
<p class="ltx_p">With the help of the following definitions:</p>
<table id="S5.EGx14" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E23" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E23.m1" class="ltx_Math" alttext="\displaystyle x_{p}" display="inline"><msub><mi>x</mi><mi>p</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E23.m2" class="ltx_Math" alttext="\displaystyle=\frac{P_{x}}{P_{0}(1+\delta)}\simeq\frac{p_{x}}{p_{z}}=x^{\prime}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><msub><mi>P</mi><mi>x</mi></msub><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM189"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mfrac></mstyle><mo>≃</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>=</mo><msup><mi>x</mi><mo>′</mo></msup></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E23.m3" class="ltx_Math" alttext="\displaystyle y_{p}" display="inline"><msub><mi>y</mi><mi>p</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E23.m4" class="ltx_Math" alttext="\displaystyle=\frac{P_{y}}{P_{0}(1+\delta)}\simeq\frac{p_{y}}{p_{z}}=y^{\prime}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><msub><mi>P</mi><mi>y</mi></msub><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM191"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mfrac></mstyle><mo>≃</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>=</mo><msup><mi>y</mi><mo>′</mo></msup></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(23)</span></td>
</tr>
</table>
</div>
<div id="S3.SS1.p3" class="ltx_para">
<p class="ltx_p">the map relative to the expanded Hamiltonian is (eq. 3.49 in <cite class="ltx_cite">[<a href="#bib.bib8" title="A symplectic six-dimensional thin-lens formalism for tracking" class="ltx_ref">8</a>]</cite>)
</p>
<table id="S5.EGx15" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E24" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E24.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E24.m2" class="ltx_Math" alttext="\displaystyle\to x+x_{p}L" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>x</mi><mo>+</mo><mrow><msub><mi>x</mi><mi>p</mi></msub><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E24.m3" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E24.m4" class="ltx_Math" alttext="\displaystyle\to y+y_{p}L" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>y</mi><mo>+</mo><mrow><msub><mi>y</mi><mi>p</mi></msub><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(24)</span></td>
</tr>
<tr id="S3.E25" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E25.m1" class="ltx_Math" alttext="\displaystyle c\Delta t" display="inline"><mrow><mi>c</mi><mo>⁢</mo><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>t</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E25.m2" class="ltx_Math" alttext="\displaystyle\to c\Delta t+\frac{L}{\beta_{0}}-\frac{L}{\beta}\left(1+\frac{x_%
{p}^{2}+y_{p}^{2}}{2}\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mi>c</mi><mo>⁢</mo><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>t</mi></mrow><mo>+</mo><mstyle displaystyle="true"><mfrac><mi>L</mi><msub><mi>β</mi><mn>0</mn></msub></mfrac></mstyle></mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mi>L</mi><mi>β</mi></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM193"><mn>1</mn><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><msubsup><mi>x</mi><mi>p</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>y</mi><mi>p</mi><mn>2</mn></msubsup></mrow><mn>2</mn></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E25.m3" class="ltx_Math" alttext="\displaystyle\Delta s" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>s</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E25.m4" class="ltx_Math" alttext="\displaystyle\to\Delta s-\frac{x_{p}^{2}+y_{p}^{2}}{2}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>s</mi></mrow><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><msubsup><mi>x</mi><mi>p</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>y</mi><mi>p</mi><mn>2</mn></msubsup></mrow><mn>2</mn></mfrac></mstyle></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(25)</span></td>
</tr>
<tr id="S3.E26" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E26.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E26.m2" class="ltx_Math" alttext="\displaystyle\to\sigma+L-\beta_{0}\frac{L}{\beta}\left(1+\frac{x_{p}^{2}+y_{p}%
^{2}}{2}\right)." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mrow><mi>σ</mi><mo>+</mo><mi>L</mi></mrow><mo>-</mo><mrow><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>L</mi><mi>β</mi></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM195"><mn>1</mn><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><msubsup><mi>x</mi><mi>p</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>y</mi><mi>p</mi><mn>2</mn></msubsup></mrow><mn>2</mn></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(26)</span></td>
</tr>
</table>
</div>
<div id="S3.SS1.p4" class="ltx_para ltx_noindent">
<p class="ltx_p">With the additional definitions:</p>
<table id="S5.EGx16" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E27" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E27.m1" class="ltx_Math" alttext="\displaystyle p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E27.m2" class="ltx_Math" alttext="\displaystyle=\frac{P_{z}}{P_{0}}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><msub><mi>P</mi><mi>z</mi></msub><msub><mi>P</mi><mn>0</mn></msub></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(27)</span></td>
</tr>
<tr id="S3.E28" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E28.m1" class="ltx_Math" alttext="\displaystyle p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E28.m2" class="ltx_Math" alttext="\displaystyle=\sqrt{(1+\delta)^{2}-p_{x}^{2}-p_{y}^{2}}=\sqrt{\beta_{0}^{2}p_{%
\sigma}^{2}+2p_{\sigma}+1-p_{x}^{2}-p_{y}^{2}}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM197"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt><mo>=</mo><msqrt><mrow><mrow><mrow><msubsup><mi>β</mi><mn>0</mn><mn>2</mn></msubsup><mo>⁢</mo><msubsup><mi>p</mi><mi>σ</mi><mn>2</mn></msubsup></mrow><mo>+</mo><mrow><mn>2</mn><mo>⁢</mo><msub><mi>p</mi><mi>σ</mi></msub></mrow><mo>+</mo><mn>1</mn></mrow><mo>-</mo><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(28)</span></td>
</tr>
<tr id="S3.E29" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E29.m1" class="ltx_Math" alttext="\displaystyle\beta_{z}" display="inline"><msub><mi>β</mi><mi>z</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E29.m2" class="ltx_Math" alttext="\displaystyle=\beta\frac{P_{z}}{P}=\frac{p_{z}}{1+\delta}=\frac{p_{z}}{1/\beta%
_{0}+p_{t}}=\frac{p_{z}}{1/\beta_{0}+\beta_{0}p_{\sigma}}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mi>β</mi><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>P</mi><mi>z</mi></msub><mi>P</mi></mfrac></mstyle></mrow><mo>=</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>z</mi></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>=</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>z</mi></msub><mrow><mrow><mn>1</mn><mo>/</mo><msub><mi>β</mi><mn>0</mn></msub></mrow><mo>+</mo><msub><mi>p</mi><mi>t</mi></msub></mrow></mfrac></mstyle><mo>=</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>z</mi></msub><mrow><mrow><mn>1</mn><mo>/</mo><msub><mi>β</mi><mn>0</mn></msub></mrow><mo>+</mo><mrow><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><msub><mi>p</mi><mi>σ</mi></msub></mrow></mrow></mfrac></mstyle></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(29)</span></td>
</tr>
</table>
<p class="ltx_p">the map of the exact Hamiltonian (eq. A.6a in <cite class="ltx_cite">[<a href="#bib.bib9" title="Construction of nonlinear symplectic six-dimensional thin-lens maps by exponentiation" class="ltx_ref">4</a>]</cite>) is</p>
<table id="S5.EGx17" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E30" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E30.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E30.m2" class="ltx_Math" alttext="\displaystyle\to x+x^{\prime}L" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>x</mi><mo>+</mo><mrow><msup><mi>x</mi><mo>′</mo></msup><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E30.m3" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E30.m4" class="ltx_Math" alttext="\displaystyle\to y+y^{\prime}L" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>y</mi><mo>+</mo><mrow><msup><mi>y</mi><mo>′</mo></msup><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(30)</span></td>
</tr>
<tr id="S3.E31" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E31.m1" class="ltx_Math" alttext="\displaystyle c\Delta t" display="inline"><mrow><mi>c</mi><mo>⁢</mo><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>t</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E31.m2" class="ltx_Math" alttext="\displaystyle\to c\Delta t+\left(\frac{1}{\beta_{0}}-\frac{1}{\beta_{z}}\right%
)\cdot L" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mi>c</mi><mo>⁢</mo><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>t</mi></mrow><mo>+</mo><mrow><mrow><mo>(</mo><mrow id="XM199"><mstyle displaystyle="true"><mfrac><mn>1</mn><msub><mi>β</mi><mn>0</mn></msub></mfrac></mstyle><mo>-</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><msub><mi>β</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⋅</mo><mi>L</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E31.m3" class="ltx_Math" alttext="\displaystyle\Delta s" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>s</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E31.m4" class="ltx_Math" alttext="\displaystyle\to\Delta s+\frac{p_{z}-1-\delta}{p_{z}}\cdot L" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>s</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>-</mo><mn>1</mn><mo>-</mo><mi>δ</mi></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>⋅</mo><mi>L</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(31)</span></td>
</tr>
<tr id="S3.E32" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E32.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E32.m2" class="ltx_Math" alttext="\displaystyle\to\sigma+\left(1-\frac{\beta_{0}}{\beta_{z}}\right)\cdot L" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>+</mo><mrow><mrow><mo>(</mo><mrow id="XM201"><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><msub><mi>β</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⋅</mo><mi>L</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E32.m3" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E32.m4" class="ltx_Math" alttext="\displaystyle\to\sigma+\frac{p_{z}-1-\beta_{0}^{2}p_{\sigma}}{p_{z}}\cdot L." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>-</mo><mn>1</mn><mo>-</mo><mrow><msubsup><mi>β</mi><mn>0</mn><mn>2</mn></msubsup><mo>⁢</mo><msub><mi>p</mi><mi>σ</mi></msub></mrow></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>⋅</mo><mi>L</mi></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(32)</span></td>
</tr>
</table>
</div>
<div id="S3.SS1.p5" class="ltx_para">
<p class="ltx_p">It is possible to define a ‘‘polar’’ drift that has the effect of rotating the reference frame
<cite class="ltx_cite">[<a href="#bib.bib13" title="Beam dynamics: a new attitude and framework" class="ltx_ref">3</a>]</cite> for instance in the <math id="S3.SS1.p5.m1" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>-<math id="S3.SS1.p5.m2" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math> plane:</p>
<table id="S5.EGx18" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E33" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E33.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E33.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}\cos\theta+p_{z}\sin\theta" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow><mo>+</mo><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E33.m3" class="ltx_Math" alttext="\displaystyle p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E33.m4" class="ltx_Math" alttext="\displaystyle\to-p_{x}\sin\theta+p_{z}\cos\theta" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mo>-</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow><mo>+</mo><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(33)</span></td>
</tr>
<tr id="S3.E34" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E34.m1" class="ltx_Math" alttext="\displaystyle z" display="inline"><mi>z</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E34.m2" class="ltx_Math" alttext="\displaystyle=-x\sin\theta" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mi>x</mi><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E34.m3" class="ltx_Math" alttext="\displaystyle x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E34.m4" class="ltx_Math" alttext="\displaystyle=p_{x}/p_{z}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>/</mo><msub><mi>p</mi><mi>z</mi></msub></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E34.m5" class="ltx_Math" alttext="\displaystyle y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E34.m6" class="ltx_Math" alttext="\displaystyle=p_{y}/p_{z}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>/</mo><msub><mi>p</mi><mi>z</mi></msub></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(34)</span></td>
</tr>
<tr id="S3.E35" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E35.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E35.m2" class="ltx_Math" alttext="\displaystyle\to x\cos\theta-x^{\prime}z" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mi>x</mi><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow><mo>-</mo><mrow><msup><mi>x</mi><mo>′</mo></msup><mo>⁢</mo><mi>z</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E35.m3" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E35.m4" class="ltx_Math" alttext="\displaystyle\to y-x^{\prime}z" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>y</mi><mo>-</mo><mrow><msup><mi>x</mi><mo>′</mo></msup><mo>⁢</mo><mi>z</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(35)</span></td>
</tr>
<tr id="S3.E36" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E36.m1" class="ltx_Math" alttext="\displaystyle\Delta s" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>s</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E36.m2" class="ltx_Math" alttext="\displaystyle\to\Delta s+\frac{1+\delta}{p_{z}}z" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>s</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>⁢</mo><mi>z</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E36.m3" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E36.m4" class="ltx_Math" alttext="\displaystyle\to\sigma+\frac{\beta_{0}}{\beta_{z}}z." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><msub><mi>β</mi><mi>z</mi></msub></mfrac></mstyle><mo>⁢</mo><mi>z</mi></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(36)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS1.p5.m3" class="ltx_Math" alttext="\theta" display="inline"><mi>θ</mi></math> is the angle bringing the new <math id="S3.SS1.p5.m4" class="ltx_Math" alttext="\hat{x}" display="inline"><mover accent="true"><mi>x</mi><mo stretchy="false">^</mo></mover></math> towards the old <math id="S3.SS1.p5.m5" class="ltx_Math" alttext="\hat{z}" display="inline"><mover accent="true"><mi>z</mi><mo stretchy="false">^</mo></mover></math>.
The map can be also generated by combining a rotation with a <math id="S3.SS1.p5.m6" class="ltx_Math" alttext="-x\sin(\theta)" display="inline"><mrow><mo>-</mo><mrow><mi>x</mi><mo>⁢</mo><mrow><mi id="XM202">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM203">θ</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>-length drift. This map is not used in SixTrack.</p>
</div>
</section>
<section id="S3.SS2" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.2 </span>Dipole</h3>
<div id="S3.SS2.p1" class="ltx_para">
<p class="ltx_p">In a curvilinear reference system with a constant curvature <math id="S3.SS2.p1.m1" class="ltx_Math" alttext="h_{x}" display="inline"><msub><mi>h</mi><mi>x</mi></msub></math> in the
horizontal plane or <math id="S3.SS2.p1.m2" class="ltx_Math" alttext="h_{y}" display="inline"><msub><mi>h</mi><mi>y</mi></msub></math> in the vertical plane (but not both, i.e. <math id="S3.SS2.p1.m3" class="ltx_Math" alttext="h_{x}\cdot h_{y}=0" display="inline"><mrow><mrow><msub><mi>h</mi><mi>x</mi></msub><mo>⋅</mo><msub><mi>h</mi><mi>y</mi></msub></mrow><mo>=</mo><mn>0</mn></mrow></math>)
a uniform magnetic field can be derived by the vector potential:</p>
<table id="S5.EGx19" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E37" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E37.m1" class="ltx_Math" alttext="\displaystyle A_{x}" display="inline"><msub><mi>A</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E37.m2" class="ltx_Math" alttext="\displaystyle=0," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mn>0</mn></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E37.m3" class="ltx_Math" alttext="\displaystyle A_{y}" display="inline"><msub><mi>A</mi><mi>y</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E37.m4" class="ltx_Math" alttext="\displaystyle=0," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mn>0</mn></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E37.m5" class="ltx_Math" alttext="\displaystyle A_{s}" display="inline"><msub><mi>A</mi><mi>s</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E37.m6" class="ltx_Math" alttext="\displaystyle=-B_{y}x\left(1-\frac{h_{x}x}{2(1+h_{x}x)}\right)," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><msub><mi>B</mi><mi>y</mi></msub><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM207"><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>x</mi></mrow><mrow><mn>2</mn><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM206"><mn>1</mn><mo>+</mo><mrow><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(37)</span></td>
</tr>
</table>
<p class="ltx_p">where we have chosen <math id="S3.SS2.p1.m4" class="ltx_Math" alttext="h_{y}=0" display="inline"><mrow><msub><mi>h</mi><mi>y</mi></msub><mo>=</mo><mn>0</mn></mrow></math>. Often the bending radius of the dipole correspond to
<math id="S3.SS2.p1.m5" class="ltx_Math" alttext="h_{x,y}=\frac{q_{0}}{p}B_{x,y}" display="inline"><mrow><msub><mi>h</mi><mrow><mi id="XM208">x</mi><mo>,</mo><mi id="XM209">y</mi></mrow></msub><mo>=</mo><mrow><mfrac><msub><mi>q</mi><mn>0</mn></msub><mi>p</mi></mfrac><mo>⁢</mo><msub><mi>B</mi><mrow><mi id="XM210">x</mi><mo>,</mo><mi id="XM211">y</mi></mrow></msub></mrow></mrow></math>, where <math id="S3.SS2.p1.m6" class="ltx_Math" alttext="q_{0}" display="inline"><msub><mi>q</mi><mn>0</mn></msub></math> is the charge of the reference particle,
which simplify the Hamiltonian further. In these conditions the exact and
expanded Hamiltonian for a horizontal bending magnet is (eq. 2.12 in
<cite class="ltx_cite">[<a href="#bib.bib7" title="A non-linear canonical formalism for the coupled synchro-betatron motion of protons with arbitrary energy" class="ltx_ref">2</a>]</cite>)</p>
<table id="S5.EGx20" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E38" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E38.m1" class="ltx_Math" alttext="\displaystyle H" display="inline"><mi>H</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E38.m2" class="ltx_Math" alttext="\displaystyle=p_{\sigma}-p_{s}+q\cdot h_{x}x\left(1+\frac{h_{x}x}{2}\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>-</mo><msub><mi>p</mi><mi>s</mi></msub></mrow><mo>+</mo><mrow><mrow><mi>q</mi><mo>⋅</mo><msub><mi>h</mi><mi>x</mi></msub></mrow><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM213"><mn>1</mn><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>x</mi></mrow><mn>2</mn></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(38)</span></td>
</tr>
<tr id="S3.E39" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E39.m2" class="ltx_Math" alttext="\displaystyle\approx p_{\sigma}+\frac{1}{2}\frac{p_{x}^{2}+p_{y}^{2}}{1+\delta%
}-h_{x}x(1+\delta)+\frac{q}{q_{0}}h_{x}x\left(1+\frac{h_{x}x}{2}\right)" display="inline"><mrow><mi></mi><mo>≈</mo><mrow><mrow><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow><mo>-</mo><mrow><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM216"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><msub><mi>q</mi><mn>0</mn></msub></mfrac></mstyle><mo>⁢</mo><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM217"><mn>1</mn><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>x</mi></mrow><mn>2</mn></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(39)</span></td>
</tr>
</table>
</div>
<section id="S3.SS2.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.2.1 </span>Thick dipole</h4>
<div id="S3.SS2.SSS1.p1" class="ltx_para">
<p class="ltx_p">Defining the following quantities,</p>
<table id="S5.EGx21" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E40" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E40.m1" class="ltx_Math" alttext="\displaystyle G_{x}" display="inline"><msub><mi>G</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E40.m2" class="ltx_Math" alttext="\displaystyle=\frac{q}{q_{0}}\cdot\frac{h_{x}^{2}}{1+\delta}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><msub><mi>q</mi><mn>0</mn></msub></mfrac></mstyle><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msubsup><mi>h</mi><mi>x</mi><mn>2</mn></msubsup><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E40.m3" class="ltx_Math" alttext="\displaystyle G_{y}" display="inline"><msub><mi>G</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E40.m4" class="ltx_Math" alttext="\displaystyle=\frac{q}{q_{0}}\cdot\frac{h_{y}^{2}}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><msub><mi>q</mi><mn>0</mn></msub></mfrac></mstyle><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msubsup><mi>h</mi><mi>y</mi><mn>2</mn></msubsup><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(40)</span></td>
</tr>
<tr id="S3.E41" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E41.m1" class="ltx_Math" alttext="\displaystyle C_{x,y}" display="inline"><msub><mi>C</mi><mrow><mi id="XM224">x</mi><mo>,</mo><mi id="XM225">y</mi></mrow></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E41.m2" class="ltx_Math" alttext="\displaystyle=\cos(\sqrt{G_{x,y}}L)," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mi id="XM228">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM229"><msqrt><msub><mi>G</mi><mrow><mi id="XM226">x</mi><mo>,</mo><mi id="XM227">y</mi></mrow></msub></msqrt><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E41.m3" class="ltx_Math" alttext="\displaystyle S_{x,y}" display="inline"><msub><mi>S</mi><mrow><mi id="XM236">x</mi><mo>,</mo><mi id="XM237">y</mi></mrow></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E41.m4" class="ltx_Math" alttext="\displaystyle=\sin(\sqrt{G_{x,y}}L)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi id="XM240">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM241"><msqrt><msub><mi>G</mi><mrow><mi id="XM238">x</mi><mo>,</mo><mi id="XM239">y</mi></mrow></msub></msqrt><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(41)</span></td>
</tr>
</table>
<p class="ltx_p">the map relative to the expanded Hamiltonian is (eq. 4.11 in <cite class="ltx_cite">[<a href="#bib.bib7" title="A non-linear canonical formalism for the coupled synchro-betatron motion of protons with arbitrary energy" class="ltx_ref">2</a>]</cite>)</p>
<table id="S5.EGx22" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex1" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.Ex1.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.Ex1.m2" class="ltx_Math" alttext="\displaystyle\to C_{x}\cdot x+\frac{S_{x}}{\sqrt{G_{x}}}\frac{1}{1+\delta}%
\cdot p_{x}+\frac{\delta}{h_{x}}(1-C_{x})" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>C</mi><mi>x</mi></msub><mo>⋅</mo><mi>x</mi></mrow><mo>+</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><msub><mi>S</mi><mi>x</mi></msub><msqrt><msub><mi>G</mi><mi>x</mi></msub></msqrt></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mi>δ</mi><msub><mi>h</mi><mi>x</mi></msub></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM243"><mn>1</mn><mo>-</mo><msub><mi>C</mi><mi>x</mi></msub></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.Ex2" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.Ex2.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.Ex2.m2" class="ltx_Math" alttext="\displaystyle\to-\sqrt{G_{x}}(1+\delta)\cdot S_{x}\cdot x+C_{x}\cdot p_{x}+%
\delta\sqrt{1+\delta}\cdot S_{x}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mo>-</mo><mrow><mrow><msqrt><msub><mi>G</mi><mi>x</mi></msub></msqrt><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM245"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>⋅</mo><msub><mi>S</mi><mi>x</mi></msub><mo>⋅</mo><mi>x</mi></mrow></mrow><mo>+</mo><mrow><msub><mi>C</mi><mi>x</mi></msub><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow><mo>+</mo><mrow><mrow><mi>δ</mi><mo>⁢</mo><msqrt><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></msqrt></mrow><mo>⋅</mo><msub><mi>S</mi><mi>x</mi></msub></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.Ex3" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.Ex3.m1" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.Ex3.m2" class="ltx_Math" alttext="\displaystyle\to C_{y}\cdot y+\frac{S_{y}}{\sqrt{G_{y}}}\frac{1}{1+\delta}%
\cdot p_{y}+\frac{\delta}{h_{y}}(1-C_{y})" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>C</mi><mi>y</mi></msub><mo>⋅</mo><mi>y</mi></mrow><mo>+</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><msub><mi>S</mi><mi>y</mi></msub><msqrt><msub><mi>G</mi><mi>y</mi></msub></msqrt></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mi>δ</mi><msub><mi>h</mi><mi>y</mi></msub></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM247"><mn>1</mn><mo>-</mo><msub><mi>C</mi><mi>y</mi></msub></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.Ex4" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.Ex4.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.Ex4.m2" class="ltx_Math" alttext="\displaystyle\to-\sqrt{G_{y}}(1+\delta)\cdot S_{y}\cdot y+C_{y}\cdot p_{y}+%
\delta\sqrt{1+\delta}\cdot S_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mo>-</mo><mrow><mrow><msqrt><msub><mi>G</mi><mi>y</mi></msub></msqrt><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM249"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>⋅</mo><msub><mi>S</mi><mi>y</mi></msub><mo>⋅</mo><mi>y</mi></mrow></mrow><mo>+</mo><mrow><msub><mi>C</mi><mi>y</mi></msub><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow><mo>+</mo><mrow><mrow><mi>δ</mi><mo>⁢</mo><msqrt><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></msqrt></mrow><mo>⋅</mo><msub><mi>S</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.Ex5" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.Ex5.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.Ex5.m2" class="ltx_Math" alttext="\displaystyle\to\sigma+L\left(1-\frac{\beta_{0}}{\beta}\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>+</mo><mrow><mi>L</mi><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM251"><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.Ex6" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.Ex6.m2" class="ltx_Math" alttext="\displaystyle\qquad\,-\frac{\beta_{0}}{\beta}\Bigg[\frac{h_{x}S_{x}}{\sqrt{G_{%
x}}}\cdot x+\frac{1-C_{x}}{h_{x}}\cdot p_{x}+\frac{h_{y}S_{y}}{\sqrt{G_{y}}}%
\cdot y+\frac{1-C_{y}}{h_{y}}\cdot p_{y}+\delta\left(2L-\frac{S_{x}}{\sqrt{G_{%
x}}}-\frac{S_{y}}{\sqrt{G_{y}}}\right)\Bigg]" display="inline"><mrow><mpadded width="+1.7pt"><mi>  </mi></mpadded><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle><mo>⁢</mo><mrow><mo maxsize="260%" minsize="260%">[</mo><mrow id="XM255"><mrow><mstyle displaystyle="true"><mfrac><mrow><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><msub><mi>S</mi><mi>x</mi></msub></mrow><msqrt><msub><mi>G</mi><mi>x</mi></msub></msqrt></mfrac></mstyle><mo>⋅</mo><mi>x</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>-</mo><msub><mi>C</mi><mi>x</mi></msub></mrow><msub><mi>h</mi><mi>x</mi></msub></mfrac></mstyle><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><msub><mi>h</mi><mi>y</mi></msub><mo>⁢</mo><msub><mi>S</mi><mi>y</mi></msub></mrow><msqrt><msub><mi>G</mi><mi>y</mi></msub></msqrt></mfrac></mstyle><mo>⋅</mo><mi>y</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>-</mo><msub><mi>C</mi><mi>y</mi></msub></mrow><msub><mi>h</mi><mi>y</mi></msub></mfrac></mstyle><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow><mo>+</mo><mrow><mi>δ</mi><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM254"><mrow><mn>2</mn><mo>⁢</mo><mi>L</mi></mrow><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mi>S</mi><mi>x</mi></msub><msqrt><msub><mi>G</mi><mi>x</mi></msub></msqrt></mfrac></mstyle><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mi>S</mi><mi>y</mi></msub><msqrt><msub><mi>G</mi><mi>y</mi></msub></msqrt></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow><mo maxsize="260%" minsize="260%">]</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.Ex7" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.Ex7.m2" class="ltx_Math" alttext="\displaystyle\qquad\,-\frac{1}{4}\frac{\beta_{0}}{\beta}\Bigg[G_{x}\left(L-%
\frac{C_{x}S_{x}}{\sqrt{G_{x}}}\right)\left(x-\frac{\delta}{h_{x}}\right)^{2}+%
\left(L+\frac{C_{x}S_{x}}{\sqrt{G_{x}}}\right)\frac{p_{x}^{2}}{(1+\delta)^{2}}%
-\left(x-\frac{\delta}{h_{x}}\right)\frac{2S_{x}^{2}}{1+\delta}\cdot p_{x}" display="inline"><mrow><mpadded width="+1.7pt"><mi>  </mi></mpadded><mo>-</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>4</mn></mfrac></mstyle><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle><mrow><mo maxsize="260%" minsize="260%">[</mo><msub><mi>G</mi><mi>x</mi></msub><mrow><mo>(</mo><mi>L</mi><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><msub><mi>C</mi><mi>x</mi></msub><mo>⁢</mo><msub><mi>S</mi><mi>x</mi></msub></mrow><msqrt><msub><mi>G</mi><mi>x</mi></msub></msqrt></mfrac></mstyle><mo>)</mo></mrow><msup><mrow><mo>(</mo><mi>x</mi><mo>-</mo><mstyle displaystyle="true"><mfrac><mi>δ</mi><msub><mi>h</mi><mi>x</mi></msub></mfrac></mstyle><mo>)</mo></mrow><mn>2</mn></msup><mo>+</mo><mrow><mo>(</mo><mi>L</mi><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><msub><mi>C</mi><mi>x</mi></msub><mo>⁢</mo><msub><mi>S</mi><mi>x</mi></msub></mrow><msqrt><msub><mi>G</mi><mi>x</mi></msub></msqrt></mfrac></mstyle><mo>)</mo></mrow><mstyle displaystyle="true"><mfrac><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><msup><mrow><mo stretchy="false">(</mo><mrow id="XM261"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mfrac></mstyle><mo>-</mo><mrow><mo>(</mo><mi>x</mi><mo>-</mo><mstyle displaystyle="true"><mfrac><mi>δ</mi><msub><mi>h</mi><mi>x</mi></msub></mfrac></mstyle><mo>)</mo></mrow><mstyle displaystyle="true"><mfrac><mrow><mn>2</mn><mo>⁢</mo><msubsup><mi>S</mi><mi>x</mi><mn>2</mn></msubsup></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.Ex8" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.Ex8.m2" class="ltx_Math" alttext="\displaystyle\qquad\,+G_{y}\left(L-\frac{C_{y}S_{y}}{\sqrt{G_{y}}}\right)\left%
(y-\frac{\delta}{h_{y}}\right)^{2}+\left(L+\frac{C_{y}S_{y}}{\sqrt{G_{y}}}%
\right)\frac{p_{y}^{2}}{(1+\delta)^{2}}-\left(y-\frac{\delta}{h_{y}}\right)%
\frac{2S_{y}^{2}}{1+\delta}\cdot p_{y}\Bigg]." display="inline"><mrow><mpadded width="+1.7pt"><mi>  </mi></mpadded><mo>+</mo><msub><mi>G</mi><mi>y</mi></msub><mrow><mo>(</mo><mi>L</mi><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><msub><mi>C</mi><mi>y</mi></msub><mo>⁢</mo><msub><mi>S</mi><mi>y</mi></msub></mrow><msqrt><msub><mi>G</mi><mi>y</mi></msub></msqrt></mfrac></mstyle><mo>)</mo></mrow><msup><mrow><mo>(</mo><mi>y</mi><mo>-</mo><mstyle displaystyle="true"><mfrac><mi>δ</mi><msub><mi>h</mi><mi>y</mi></msub></mfrac></mstyle><mo>)</mo></mrow><mn>2</mn></msup><mo>+</mo><mrow><mo>(</mo><mi>L</mi><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><msub><mi>C</mi><mi>y</mi></msub><mo>⁢</mo><msub><mi>S</mi><mi>y</mi></msub></mrow><msqrt><msub><mi>G</mi><mi>y</mi></msub></msqrt></mfrac></mstyle><mo>)</mo></mrow><mstyle displaystyle="true"><mfrac><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup><msup><mrow><mo stretchy="false">(</mo><mrow id="XM271"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mfrac></mstyle><mo>-</mo><mrow><mo>(</mo><mi>y</mi><mo>-</mo><mstyle displaystyle="true"><mfrac><mi>δ</mi><msub><mi>h</mi><mi>y</mi></msub></mfrac></mstyle><mo>)</mo></mrow><mstyle displaystyle="true"><mfrac><mrow><mn>2</mn><mo>⁢</mo><msubsup><mi>S</mi><mi>y</mi><mn>2</mn></msubsup></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub><mo maxsize="260%" minsize="260%">]</mo><mo>.</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
<p class="ltx_p">An alternative version of the ideal sector bend (eq. 12.18 in <cite class="ltx_cite">[<a href="#bib.bib13" title="Beam dynamics: a new attitude and framework" class="ltx_ref">3</a>]</cite>) with arbitrary bending field <math id="S3.SS2.SSS1.p1.m1" class="ltx_Math" alttext="b_{1}=\frac{q_{0}}{P_{O}}B_{y}" display="inline"><mrow><msub><mi>b</mi><mn>1</mn></msub><mo>=</mo><mrow><mfrac><msub><mi>q</mi><mn>0</mn></msub><msub><mi>P</mi><mi>O</mi></msub></mfrac><mo>⁢</mo><msub><mi>B</mi><mi>y</mi></msub></mrow></mrow></math> and reference radius <math id="S3.SS2.SSS1.p1.m2" class="ltx_Math" alttext="\rho" display="inline"><mi>ρ</mi></math> is</p>
<table id="S5.EGx23" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E42" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E42.m1" class="ltx_Math" alttext="\displaystyle\alpha(s)" display="inline"><mrow><mi>α</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM281">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E42.m2" class="ltx_Math" alttext="\displaystyle=\sin^{-1}\left(\frac{p_{x}(s)}{\sqrt{(1+\delta^{2})-p_{y}^{2}}}\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msup id="XM284"><mi>sin</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁡</mo><mrow><mo>(</mo><mstyle displaystyle="true" id="XM285"><mfrac id="XM285a"><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM282">s</mi><mo stretchy="false">)</mo></mrow></mrow><msqrt><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM283"><mn>1</mn><mo>+</mo><msup><mi>δ</mi><mn>2</mn></msup></mrow><mo stretchy="false">)</mo></mrow><mo>-</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mfrac></mstyle><mo>)</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(42)</span></td>
</tr>
<tr id="S3.E43" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E43.m1" class="ltx_Math" alttext="\displaystyle p_{z}(s)" display="inline"><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM289">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E43.m2" class="ltx_Math" alttext="\displaystyle=\sqrt{(1+\delta)^{2}-p_{x}^{2}(s)-p_{y}^{2}}" display="inline"><mrow><mi></mi><mo>=</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM290"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><mrow><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM291">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>-</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(43)</span></td>
</tr>
<tr id="S3.E44" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E44.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E44.m2" class="ltx_Math" alttext="\displaystyle\to\frac{\rho}{b_{1}}\left(\frac{1}{\rho}p_{z}(L)-p_{x}^{\prime}(%
L)-b_{1}\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mstyle displaystyle="true"><mfrac><mi>ρ</mi><msub><mi>b</mi><mn>1</mn></msub></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM297"><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mi>ρ</mi></mfrac></mstyle><mo>⁢</mo><msub><mi>p</mi><mi>z</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM295">L</mi><mo stretchy="false">)</mo></mrow></mrow><mo>-</mo><mrow><msubsup><mi>p</mi><mi>x</mi><mo>′</mo></msubsup><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM296">L</mi><mo stretchy="false">)</mo></mrow></mrow><mo>-</mo><msub><mi>b</mi><mn>1</mn></msub></mrow><mo>)</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(44)</span></td>
</tr>
<tr id="S3.E45" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E45.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E45.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}\cos(\theta)+\left(p_{z}(0)-b_{1}(\rho+x)\right)\sin(\theta)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⁢</mo><mrow><mi id="XM305">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM306">θ</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>+</mo><mrow><mrow><mo>(</mo><mrow id="XM309"><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM307">0</mn><mo stretchy="false">)</mo></mrow></mrow><mo>-</mo><mrow><msub><mi>b</mi><mn>1</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM308"><mi>ρ</mi><mo>+</mo><mi>x</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>)</mo></mrow><mo>⁢</mo><mrow><mi id="XM310">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM311">θ</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(45)</span></td>
</tr>
<tr id="S3.E46" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E46.m1" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E46.m2" class="ltx_Math" alttext="\displaystyle\to y+\frac{p_{y}L}{b_{1}\rho}+\frac{p_{y}}{b_{1}}\left(\alpha(0)%
-\alpha(L)\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>y</mi><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mrow><msub><mi>b</mi><mn>1</mn></msub><mo>⁢</mo><mi>ρ</mi></mrow></mfrac></mstyle><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>b</mi><mn>1</mn></msub></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM317"><mrow><mi>α</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM315">0</mn><mo stretchy="false">)</mo></mrow></mrow><mo>-</mo><mrow><mi>α</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM316">L</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(46)</span></td>
</tr>
<tr id="S3.E47" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E47.m1" class="ltx_Math" alttext="\displaystyle ct" display="inline"><mrow><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E47.m2" class="ltx_Math" alttext="\displaystyle\to ct+\frac{(1+\delta)L}{b_{1}\rho}+\frac{(1+\delta)}{b_{1}}%
\left(\alpha(0)-\alpha(L)\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM323"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi>L</mi></mrow><mrow><msub><mi>b</mi><mn>1</mn></msub><mo>⁢</mo><mi>ρ</mi></mrow></mfrac></mstyle><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><mo stretchy="false">(</mo><mrow id="XM324"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><msub><mi>b</mi><mn>1</mn></msub></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM327"><mrow><mi>α</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM325">0</mn><mo stretchy="false">)</mo></mrow></mrow><mo>-</mo><mrow><mi>α</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM326">L</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(47)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS2.SSS1.p1.m3" class="ltx_Math" alttext="\theta=hL" display="inline"><mrow><mi>θ</mi><mo>=</mo><mrow><mi>h</mi><mo>⁢</mo><mi>L</mi></mrow></mrow></math> is the bending angle. This map is numerically unstable for <math id="S3.SS2.SSS1.p1.m4" class="ltx_Math" alttext="L\to 0" display="inline"><mrow><mi>L</mi><mo>→</mo><mn>0</mn></mrow></math>, <math id="S3.SS2.SSS1.p1.m5" class="ltx_Math" alttext="b_{1}\to 0" display="inline"><mrow><msub><mi>b</mi><mn>1</mn></msub><mo>→</mo><mn>0</mn></mrow></math>, <math id="S3.SS2.SSS1.p1.m6" class="ltx_Math" alttext="\rho\to\infty" display="inline"><mrow><mi>ρ</mi><mo>→</mo><mi mathvariant="normal">∞</mi></mrow></math>. This map is not used in SixTrack.</p>
</div>
</section>
<section id="S3.SS2.SSS2" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.2.2 </span>Thin dipole</h4>
<div id="S3.SS2.SSS2.p1" class="ltx_para">
<p class="ltx_p">The map for a thin dipole kick (horizontal or vertical) from the expanded Hamiltonian is
(eq. 4.12 in <cite class="ltx_cite">[<a href="#bib.bib9" title="Construction of nonlinear symplectic six-dimensional thin-lens maps by exponentiation" class="ltx_ref">4</a>]</cite>):</p>
<table id="S5.EGx24" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E48" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E48.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E48.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}-\frac{q}{q_{0}}\cdot(h_{x}L)(1+h_{x}x)+(h_{x}L)(1+\delta)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><msub><mi>q</mi><mn>0</mn></msub></mfrac></mstyle><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM332"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM333"><mn>1</mn><mo>+</mo><mrow><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM334"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM335"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(48)</span></td>
</tr>
<tr id="S3.E49" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E49.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E49.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}-\frac{q}{q_{0}}\cdot(h_{y}L)(1+h_{y}y)+(h_{y}L)(1+\delta)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>-</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><msub><mi>q</mi><mn>0</mn></msub></mfrac></mstyle><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM340"><msub><mi>h</mi><mi>y</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM341"><mn>1</mn><mo>+</mo><mrow><msub><mi>h</mi><mi>y</mi></msub><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM342"><msub><mi>h</mi><mi>y</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM343"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(49)</span></td>
</tr>
<tr id="S3.E50" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E50.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E50.m2" class="ltx_Math" alttext="\displaystyle\to\sigma-\frac{\beta_{0}}{\beta}(h_{x}x+h_{y}y)L." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM345"><mrow><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><msub><mi>h</mi><mi>y</mi></msub><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow><mo>.</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(50)</span></td>
</tr>
</table>
</div>
<div id="S3.SS2.SSS2.p2" class="ltx_para">
<p class="ltx_p">The map for a horizontal (<math id="S3.SS2.SSS2.p2.m1" class="ltx_Math" alttext="h_{y}=0" display="inline"><mrow><msub><mi>h</mi><mi>y</mi></msub><mo>=</mo><mn>0</mn></mrow></math>) thin dipole with the exact Hamiltonian
can be expressed as (eq. 3.21 in <cite class="ltx_cite">[<a href="#bib.bib10" title="Symplectic thin-lens transfer maps for SIXTRACK: treatment of bending magnets in terms of the exact hamiltonian" class="ltx_ref">1</a>]</cite>)
<math id="S3.SS2.SSS2.p2.m2" class="ltx_Math" alttext="T_{II}(L/2)\circ T_{I}(L)\circ T_{II}(L/2)" display="inline"><mrow><mrow><mrow><mrow><mrow><msub><mi>T</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM346"><mi>L</mi><mo>/</mo><mn>2</mn></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>∘</mo><msub><mi>T</mi><mi>I</mi></msub></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM347">L</mi><mo stretchy="false">)</mo></mrow></mrow><mo>∘</mo><msub><mi>T</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM348"><mi>L</mi><mo>/</mo><mn>2</mn></mrow><mo stretchy="false">)</mo></mrow></mrow></math> where <math id="S3.SS2.SSS2.p2.m3" class="ltx_Math" alttext="T_{II}(L)" display="inline"><mrow><msub><mi>T</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM349">L</mi><mo stretchy="false">)</mo></mrow></mrow></math> is given by</p>
<table id="S5.EGx25" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E51" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E51.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E51.m2" class="ltx_Math" alttext="\displaystyle\to\frac{1}{1+(h_{x}L)^{2}}\left[p_{x}+(h_{x}L)(1+\delta)\left(%
\sqrt{1-\frac{p_{x}^{2}+p_{y}^{2}-C}{(1+\delta)^{2}}}-1\right)\right]" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mn>1</mn><mo>+</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM356"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM361"><msub><mi>p</mi><mi>x</mi></msub><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM358"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM359"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM360"><msqrt><mrow><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mrow><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow><mo>-</mo><mi>C</mi></mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM357"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mfrac></mstyle></mrow></msqrt><mo>-</mo><mn>1</mn></mrow><mo>)</mo></mrow></mrow></mrow><mo>]</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(51)</span></td>
</tr>
<tr id="S3.E52" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E52.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E52.m2" class="ltx_Math" alttext="\displaystyle\to x+(h_{x}L)\cdot x\cdot\frac{p_{x}}{p_{z}}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>x</mi><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM363"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⋅</mo><mi>x</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(52)</span></td>
</tr>
<tr id="S3.E53" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E53.m1" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E53.m2" class="ltx_Math" alttext="\displaystyle\to y+(h_{x}L)\cdot x\cdot\frac{p_{y}}{p_{z}}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>y</mi><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM365"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⋅</mo><mi>x</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(53)</span></td>
</tr>
<tr id="S3.E54" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E54.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E54.m2" class="ltx_Math" alttext="\displaystyle\to\sigma+(h_{x}L)\cdot x\cdot\left(\frac{\beta_{0}}{\beta}-\frac%
{\beta_{0}}{\beta_{z}}\right)," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM368"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⋅</mo><mi>x</mi><mo>⋅</mo><mrow><mo>(</mo><mrow id="XM369"><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><msub><mi>β</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(54)</span></td>
</tr>
</table>
<p class="ltx_p">with <math id="S3.SS2.SSS2.p2.m4" class="ltx_Math" alttext="C=-(h_{x}L)^{2}p_{y}^{2}+2(h_{x}L)(1+\delta)p_{x}" display="inline"><mrow><mi>C</mi><mo>=</mo><mrow><mrow><mo>-</mo><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM370"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>⁢</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow></mrow><mo>+</mo><mrow><mn>2</mn><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM371"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM372"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow></mrow></math> and <math id="S3.SS2.SSS2.p2.m5" class="ltx_Math" alttext="T_{I}(L)" display="inline"><mrow><msub><mi>T</mi><mi>I</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM373">L</mi><mo stretchy="false">)</mo></mrow></mrow></math> is given by</p>
<table id="S5.EGx26" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E55" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E55.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E55.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}-h_{x}^{2}Lx+(h_{x}L)\cdot\delta" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><mrow><msubsup><mi>h</mi><mi>x</mi><mn>2</mn></msubsup><mo>⁢</mo><mi>L</mi><mo>⁢</mo><mi>x</mi></mrow></mrow><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM375"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⋅</mo><mi>δ</mi></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(55)</span></td>
</tr>
<tr id="S3.E56" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E56.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E56.m2" class="ltx_Math" alttext="\displaystyle\to\sigma-(h_{x}L)x\cdot\frac{\beta_{0}}{\beta}." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>-</mo><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM377"><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi>x</mi></mrow><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle></mrow></mrow></mrow><mo>.</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(56)</span></td>
</tr>
</table>
<p class="ltx_p">In order to represent a dipole of length <math id="S3.SS2.SSS2.p2.m6" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> this map is to be combined with
two surrounding drift spaces using the exact Hamiltonian, each of half the
length of the dipole.</p>
</div>
<div id="S3.SS2.SSS2.p3" class="ltx_para">
<p class="ltx_p">The exact thin dipole could be also generated by the composition of</p>
<table id="S5.EGx27" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E57" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E57.m1" class="ltx_Math" alttext="\displaystyle D(-L/2)\circ D_{p}(\theta/2)\circ K(L)\circ D_{p}(\theta/2)\circ
D%
(L/2)" display="inline"><mrow><mrow><mrow><mrow><mrow><mrow><mrow><mrow><mrow><mi>D</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM383"><mo>-</mo><mrow><mi>L</mi><mo>/</mo><mn>2</mn></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>∘</mo><msub><mi>D</mi><mi>p</mi></msub></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM384"><mi>θ</mi><mo>/</mo><mn>2</mn></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>∘</mo><mi>K</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM385">L</mi><mo stretchy="false">)</mo></mrow></mrow><mo>∘</mo><msub><mi>D</mi><mi>p</mi></msub></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM386"><mi>θ</mi><mo>/</mo><mn>2</mn></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>∘</mo><mi>D</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM387"><mi>L</mi><mo>/</mo><mn>2</mn></mrow><mo stretchy="false">)</mo></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(57)</span></td>
</tr>
</table>
<p class="ltx_p">for which <math id="S3.SS2.SSS2.p3.m1" class="ltx_Math" alttext="D" display="inline"><mi>D</mi></math> is a drift, <math id="S3.SS2.SSS2.p3.m2" class="ltx_Math" alttext="D_{p}" display="inline"><msub><mi>D</mi><mi>p</mi></msub></math> a polar drift and <math id="S3.SS2.SSS2.p3.m3" class="ltx_Math" alttext="K" display="inline"><mi>K</mi></math> the map generated by
<math id="S3.SS2.SSS2.p3.m4" class="ltx_Math" alttext="K=b_{y}(x+\frac{h_{x}}{2}x^{2})" display="inline"><mrow><mi>K</mi><mo>=</mo><mrow><msub><mi>b</mi><mi>y</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM388"><mi>x</mi><mo>+</mo><mrow><mfrac><msub><mi>h</mi><mi>x</mi></msub><mn>2</mn></mfrac><mo>⁢</mo><msup><mi>x</mi><mn>2</mn></msup></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>. This map is not used in SixTrack.</p>
</div>
</section>
<section id="S3.SS2.SSS3" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.2.3 </span>Dipole Edge effects</h4>
<div id="S3.SS2.SSS3.p1" class="ltx_para">
<p class="ltx_p">The dipole edge effects from a dipole of length <math id="S3.SS2.SSS3.p1.m1" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> and bending
angle <math id="S3.SS2.SSS3.p1.m2" class="ltx_Math" alttext="\theta" display="inline"><mi>θ</mi></math> can be approximated by the map:</p>
<table id="S5.EGx28" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E58" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E58.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E58.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}+\frac{1+\delta}{\rho}\tan(\alpha)\cdot x" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>+</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mi>ρ</mi></mfrac></mstyle><mo>⁢</mo><mrow><mi id="XM391">tan</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM392">α</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>⋅</mo><mi>x</mi></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(58)</span></td>
</tr>
<tr id="S3.E59" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E59.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E59.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}-\frac{1+\delta}{\rho}\tan(\alpha)\cdot y," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>-</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mi>ρ</mi></mfrac></mstyle><mo>⁢</mo><mrow><mi id="XM395">tan</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM396">α</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>⋅</mo><mi>y</mi></mrow></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(59)</span></td>
</tr>
</table>
<p class="ltx_p">where the bending radius <math id="S3.SS2.SSS3.p1.m3" class="ltx_Math" alttext="\rho" display="inline"><mi>ρ</mi></math> and <math id="S3.SS2.SSS3.p1.m4" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math> are defined as
</p>
<table id="S5.EGx29" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E60" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E60.m1" class="ltx_Math" alttext="\displaystyle\rho^{-1}" display="inline"><msup><mi>ρ</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E60.m2" class="ltx_Math" alttext="\displaystyle=\frac{h_{x}}{\sqrt{1+\delta}}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><msub><mi>h</mi><mi>x</mi></msub><msqrt><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></msqrt></mfrac></mstyle></mrow></math>
                  </td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E60.m3" class="ltx_Math" alttext="\displaystyle\alpha" display="inline"><mi>α</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E60.m4" class="ltx_Math" alttext="\displaystyle=\frac{1}{2}\frac{L}{\rho}=\frac{\theta}{2}." display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>L</mi><mi>ρ</mi></mfrac></mstyle></mrow><mo>=</mo><mstyle displaystyle="true"><mfrac><mi>θ</mi><mn>2</mn></mfrac></mstyle></mrow><mo>.</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(60)</span></td>
</tr>
</table>
<p class="ltx_p">.</p>
</div>
</section>
</section>
<section id="S3.SS3" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3 </span>Quadrupole</h3>
<div id="S3.SS3.p1" class="ltx_para">
<p class="ltx_p">A quadrupole is characterized by the vector potential</p>
<table id="S5.EGx30" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E61" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E61.m1" class="ltx_Math" alttext="\displaystyle a_{x}" display="inline"><msub><mi>a</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E61.m2" class="ltx_Math" alttext="\displaystyle=0" display="inline"><mrow><mi></mi><mo>=</mo><mn>0</mn></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E61.m3" class="ltx_Math" alttext="\displaystyle a_{y}" display="inline"><msub><mi>a</mi><mi>y</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E61.m4" class="ltx_Math" alttext="\displaystyle=0" display="inline"><mrow><mi></mi><mo>=</mo><mn>0</mn></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E61.m5" class="ltx_Math" alttext="\displaystyle a_{s}" display="inline"><msub><mi>a</mi><mi>s</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E61.m6" class="ltx_Math" alttext="\displaystyle=-\frac{1}{2}k_{1}(y^{2}-x^{2})." display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><msub><mi>k</mi><mn>1</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM398"><msup><mi>y</mi><mn>2</mn></msup><mo>-</mo><msup><mi>x</mi><mn>2</mn></msup></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(61)</span></td>
</tr>
</table>
<p class="ltx_p">The expanded Hamiltonian for a particle in a quadrupole is</p>
<table id="S5.EGx31" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E62" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E62.m1" class="ltx_Math" alttext="\displaystyle H=p_{\sigma}-\delta+\frac{1}{2}\frac{p_{x}^{2}+p_{y}^{2}}{1+%
\delta}+\frac{1}{2}k_{1}(x^{2}-y^{2})." display="inline"><mrow><mrow><mi>H</mi><mo>=</mo><mrow><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>-</mo><mi>δ</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><msub><mi>k</mi><mn>1</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM400"><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><msup><mi>y</mi><mn>2</mn></msup></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(62)</span></td>
</tr>
</table>
</div>
<section id="S3.SS3.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.1 </span>Thick quadrupole</h4>
<div id="S3.SS3.SSS1.p1" class="ltx_para ltx_noindent">
<p class="ltx_p">By defining the following quantities</p>
<table id="S5.EGx32" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E63" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E63.m1" class="ltx_Math" alttext="\displaystyle g" display="inline"><mi>g</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E63.m2" class="ltx_Math" alttext="\displaystyle=q\cdot\frac{g_{0}}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi>q</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>g</mi><mn>0</mn></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(63)</span></td>
</tr>
</table>
<p class="ltx_p">we have the following two cases</p>
<table id="S5.EGx33" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E64" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E64.m1" class="ltx_Math" alttext="\displaystyle C" display="inline"><mi>C</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E64.m2" class="ltx_Math" alttext="\displaystyle=\left\{\begin{array}[]{l l}\cos(\sqrt{g}L)&amp;g&gt;0\\
\cosh(\sqrt{-g}L)&amp;g&lt;0\end{array}\right." display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>{</mo><mtable id="XM410"><mtr id="XM410a"><mtd columnalign="left" id="XM410b"><mrow><mi id="XM406">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM407"><msqrt><mi>g</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mtd><mtd columnalign="left" id="XM410c"><mrow><mi>g</mi><mo>&gt;</mo><mn>0</mn></mrow></mtd></mtr><mtr id="XM410d"><mtd columnalign="left" id="XM410e"><mrow><mi id="XM408">cosh</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM409"><msqrt><mrow><mo>-</mo><mi>g</mi></mrow></msqrt><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mtd><mtd columnalign="left" id="XM410f"><mrow><mi>g</mi><mo>&lt;</mo><mn>0</mn></mrow></mtd></mtr></mtable><mi></mi></mrow></mrow></math>
                  </td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E64.m3" class="ltx_Math" alttext="\displaystyle S" display="inline"><mi>S</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E64.m4" class="ltx_Math" alttext="\displaystyle=\left\{\begin{array}[]{l l}\sin(\sqrt{g}L)&amp;g&gt;0\\
\sinh(\sqrt{-g}L)&amp;g&lt;0\end{array}\right." display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>{</mo><mtable id="XM420"><mtr id="XM420a"><mtd columnalign="left" id="XM420b"><mrow><mi id="XM416">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM417"><msqrt><mi>g</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mtd><mtd columnalign="left" id="XM420c"><mrow><mi>g</mi><mo>&gt;</mo><mn>0</mn></mrow></mtd></mtr><mtr id="XM420d"><mtd columnalign="left" id="XM420e"><mrow><mi id="XM418">sinh</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM419"><msqrt><mrow><mo>-</mo><mi>g</mi></mrow></msqrt><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mtd><mtd columnalign="left" id="XM420f"><mrow><mi>g</mi><mo>&lt;</mo><mn>0</mn></mrow></mtd></mtr></mtable><mi></mi></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(64)</span></td>
</tr>
<tr id="S3.E65" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E65.m1" class="ltx_Math" alttext="\displaystyle\hat{C}" display="inline"><mover accent="true"><mi>C</mi><mo stretchy="false">^</mo></mover></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E65.m2" class="ltx_Math" alttext="\displaystyle=\left\{\begin{array}[]{l l}\cosh(\sqrt{g}L)&amp;g&gt;0\\
\cos(\sqrt{-g}L)&amp;g&lt;0\end{array}\right." display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>{</mo><mtable id="XM430"><mtr id="XM430a"><mtd columnalign="left" id="XM430b"><mrow><mi id="XM426">cosh</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM427"><msqrt><mi>g</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mtd><mtd columnalign="left" id="XM430c"><mrow><mi>g</mi><mo>&gt;</mo><mn>0</mn></mrow></mtd></mtr><mtr id="XM430d"><mtd columnalign="left" id="XM430e"><mrow><mi id="XM428">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM429"><msqrt><mrow><mo>-</mo><mi>g</mi></mrow></msqrt><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mtd><mtd columnalign="left" id="XM430f"><mrow><mi>g</mi><mo>&lt;</mo><mn>0</mn></mrow></mtd></mtr></mtable><mi></mi></mrow></mrow></math>
                  </td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E65.m3" class="ltx_Math" alttext="\displaystyle\hat{S}" display="inline"><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E65.m4" class="ltx_Math" alttext="\displaystyle=\left\{\begin{array}[]{l l}\sinh(\sqrt{g}L)&amp;g&gt;0\\
\sin(\sqrt{-g}L)&amp;g&lt;0\end{array}\right." display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>{</mo><mtable id="XM440"><mtr id="XM440a"><mtd columnalign="left" id="XM440b"><mrow><mi id="XM436">sinh</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM437"><msqrt><mi>g</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mtd><mtd columnalign="left" id="XM440c"><mrow><mi>g</mi><mo>&gt;</mo><mn>0</mn></mrow></mtd></mtr><mtr id="XM440d"><mtd columnalign="left" id="XM440e"><mrow><mi id="XM438">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM439"><msqrt><mrow><mo>-</mo><mi>g</mi></mrow></msqrt><mo>⁢</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mtd><mtd columnalign="left" id="XM440f"><mrow><mi>g</mi><mo>&lt;</mo><mn>0</mn></mrow></mtd></mtr></mtable><mi></mi></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(65)</span></td>
</tr>
</table>
<p class="ltx_p">Using the above definitions the map of a thick quadrupole is (eq. 4.2 in <cite class="ltx_cite">[<a href="#bib.bib7" title="A non-linear canonical formalism for the coupled synchro-betatron motion of protons with arbitrary energy" class="ltx_ref">2</a>]</cite>)</p>
<table id="S5.EGx34" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E66" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E66.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E66.m2" class="ltx_Math" alttext="\displaystyle\to C\cdot x+\frac{S}{\sqrt{|g|}}\frac{p_{x}}{1+\delta}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mi>C</mi><mo>⋅</mo><mi>x</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mi>S</mi><msqrt><mrow><mo stretchy="false">|</mo><mi id="XM442">g</mi><mo stretchy="false">|</mo></mrow></msqrt></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(66)</span></td>
</tr>
<tr id="S3.E67" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E67.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E67.m2" class="ltx_Math" alttext="\displaystyle\to-(1+\delta)\sqrt{|g|}S\cdot x+C\cdot p_{x}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mo>-</mo><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM446"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msqrt><mrow><mo stretchy="false">|</mo><mi id="XM445">g</mi><mo stretchy="false">|</mo></mrow></msqrt><mo>⁢</mo><mi>S</mi></mrow><mo>⋅</mo><mi>x</mi></mrow></mrow><mo>+</mo><mrow><mi>C</mi><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(67)</span></td>
</tr>
<tr id="S3.E68" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E68.m1" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E68.m2" class="ltx_Math" alttext="\displaystyle\to\hat{C}\cdot y+\frac{\hat{S}}{\sqrt{|g|}}\frac{p_{y}}{1+\delta}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mover accent="true"><mi>C</mi><mo stretchy="false">^</mo></mover><mo>⋅</mo><mi>y</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><msqrt><mrow><mo stretchy="false">|</mo><mi id="XM448">g</mi><mo stretchy="false">|</mo></mrow></msqrt></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(68)</span></td>
</tr>
<tr id="S3.E69" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E69.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E69.m2" class="ltx_Math" alttext="\displaystyle\to(1+\delta)\sqrt{|g|}\hat{S}\cdot y+\hat{C}\cdot p_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM452"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msqrt><mrow><mo stretchy="false">|</mo><mi id="XM451">g</mi><mo stretchy="false">|</mo></mrow></msqrt><mo>⁢</mo><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover></mrow><mo>⋅</mo><mi>y</mi></mrow><mo>+</mo><mrow><mover accent="true"><mi>C</mi><mo stretchy="false">^</mo></mover><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(69)</span></td>
</tr>
<tr id="S3.E70" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E70.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E70.m2" class="ltx_Math" alttext="\displaystyle\to\sigma+L\left(1-\frac{\beta_{0}}{\beta}\right)-\frac{|g|}{4}%
\frac{\beta_{0}}{\beta}\Bigg[\left(L-\frac{C\cdot S}{\sqrt{|g|}}\right)\cdot x%
^{2}-\left(L-\frac{\hat{C}\cdot\hat{S}}{\sqrt{|g|}}\right)\cdot y^{2}\Bigg]" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mi>σ</mi><mo>+</mo><mrow><mi>L</mi><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM464"><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><mo stretchy="false">|</mo><mi id="XM461">g</mi><mo stretchy="false">|</mo></mrow><mn>4</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle><mo>⁢</mo><mrow><mo maxsize="260%" minsize="260%">[</mo><mrow id="XM468"><mrow><mrow><mo>(</mo><mrow id="XM466"><mi>L</mi><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mi>C</mi><mo>⋅</mo><mi>S</mi></mrow><msqrt><mrow><mo stretchy="false">|</mo><mi id="XM462">g</mi><mo stretchy="false">|</mo></mrow></msqrt></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⋅</mo><msup><mi>x</mi><mn>2</mn></msup></mrow><mo>-</mo><mrow><mrow><mo>(</mo><mrow id="XM467"><mi>L</mi><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mover accent="true"><mi>C</mi><mo stretchy="false">^</mo></mover><mo>⋅</mo><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover></mrow><msqrt><mrow><mo stretchy="false">|</mo><mi id="XM463">g</mi><mo stretchy="false">|</mo></mrow></msqrt></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⋅</mo><msup><mi>y</mi><mn>2</mn></msup></mrow></mrow><mo maxsize="260%" minsize="260%">]</mo></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(70)</span></td>
</tr>
<tr id="S3.E71" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E71.m2" class="ltx_Math" alttext="\displaystyle\,\qquad-\frac{1}{4}\frac{\beta_{0}}{\beta}\Bigg[\left(L+\frac{C%
\cdot S}{\sqrt{|g|}}\right)\cdot\frac{p_{x}^{2}}{(1+\delta)^{2}}+\left(L+\frac%
{\hat{C}\cdot\hat{S}}{\sqrt{|g|}}\right)\frac{p_{y}^{2}}{(1+\delta)^{2}}\Bigg]" display="inline"><mrow><mi mathvariant="normal" id="XM487"> </mi><mo mathvariant="italic" separator="true">  </mo><mrow id="XM488"><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>4</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle><mo>⁢</mo><mrow><mo maxsize="260%" minsize="260%">[</mo><mrow id="XM486"><mrow><mrow><mo>(</mo><mrow id="XM484"><mi>L</mi><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><mi>C</mi><mo>⋅</mo><mi>S</mi></mrow><msqrt><mrow><mo stretchy="false">|</mo><mi id="XM479">g</mi><mo stretchy="false">|</mo></mrow></msqrt></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><msup><mrow><mo stretchy="false">(</mo><mrow id="XM480"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mfrac></mstyle></mrow><mo>+</mo><mrow><mrow><mo>(</mo><mrow id="XM485"><mi>L</mi><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><mover accent="true"><mi>C</mi><mo stretchy="false">^</mo></mover><mo>⋅</mo><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover></mrow><msqrt><mrow><mo stretchy="false">|</mo><mi id="XM481">g</mi><mo stretchy="false">|</mo></mrow></msqrt></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup><msup><mrow><mo stretchy="false">(</mo><mrow id="XM482"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mfrac></mstyle></mrow></mrow><mo maxsize="260%" minsize="260%">]</mo></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(71)</span></td>
</tr>
<tr id="S3.E72" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E72.m2" class="ltx_Math" alttext="\displaystyle\,\qquad-\frac{1}{2}\frac{\beta_{0}}{\beta}\Bigg[-x\cdot\frac{p_{%
x}}{1+\delta}\cdot S^{2}+y\cdot\frac{p_{y}}{1+\delta}\hat{S}^{2}\Bigg]." display="inline"><mrow><mrow><mi mathvariant="normal" id="XM493"> </mi><mo mathvariant="italic" separator="true">  </mo><mrow id="XM494"><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle><mo>⁢</mo><mrow><mo maxsize="260%" minsize="260%">[</mo><mrow id="XM492"><mrow><mo>-</mo><mrow><mi>x</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⋅</mo><msup><mi>S</mi><mn>2</mn></msup></mrow></mrow><mo>+</mo><mrow><mrow><mi>y</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow><mo>⁢</mo><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mn>2</mn></msup></mrow></mrow><mo maxsize="260%" minsize="260%">]</mo></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(72)</span></td>
</tr>
</table>
</div>
</section>
<section id="S3.SS3.SSS2" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.2 </span>Thick skew quadrupole</h4>
<div id="S3.SS3.SSS2.p1" class="ltx_para">
<p class="ltx_p">The Hamiltonian for a skew quadrupole</p>
<table id="S5.EGx35" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E73" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E73.m1" class="ltx_Math" alttext="\displaystyle H=p_{\sigma}-\delta+\frac{1}{2}\frac{p_{x}^{2}+p_{y}^{2}}{1+%
\delta}-N\cdot xy," display="inline"><mrow><mrow><mi>H</mi><mo>=</mo><mrow><mrow><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>-</mo><mi>δ</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow><mo>-</mo><mrow><mrow><mi>N</mi><mo>⋅</mo><mi>x</mi></mrow><mo>⁢</mo><mi>y</mi></mrow></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(73)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS3.SSS2.p1.m1" class="ltx_Math" alttext="N=\frac{1}{2}\frac{q}{E_{0}}\left(\frac{\partial B_{x}}{\partial x}-\frac{%
\partial B_{y}}{\partial y}\right)_{x=y=0}" display="inline"><mrow><mi>N</mi><mo>=</mo><mrow><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>⁢</mo><mfrac><mi>q</mi><msub><mi>E</mi><mn>0</mn></msub></mfrac><mo>⁢</mo><msub><mrow><mo>(</mo><mrow id="XM495"><mfrac><mrow><mo>∂</mo><mo>⁡</mo><msub><mi>B</mi><mi>x</mi></msub></mrow><mrow><mo>∂</mo><mo>⁡</mo><mi>x</mi></mrow></mfrac><mo>-</mo><mfrac><mrow><mo>∂</mo><mo>⁡</mo><msub><mi>B</mi><mi>y</mi></msub></mrow><mrow><mo>∂</mo><mo>⁡</mo><mi>y</mi></mrow></mfrac></mrow><mo>)</mo></mrow><mrow><mi>x</mi><mo>=</mo><mi>y</mi><mo>=</mo><mn>0</mn></mrow></msub></mrow></mrow></math>.
For a thick skew quadrupole the map is (eq. 3.19, 3.20 in <cite class="ltx_cite">[<a href="#bib.bib6" title="Non-linear canonical equations of coupled synchro-betatron motion and their solutions within the framework of a non-linear six-dimensional (symplectic) tracking program for ultrarelativistic protons" class="ltx_ref">9</a>]</cite>)</p>
<table id="S5.EGx36" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E74" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E74.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E74.m2" class="ltx_Math" alttext="\displaystyle\to C^{+}\cdot x+S^{+}\cdot p_{x}-C^{-}\cdot y-S^{-}\cdot p_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><msup><mi>C</mi><mo>+</mo></msup><mo>⋅</mo><mi>x</mi></mrow><mo>+</mo><mrow><msup><mi>S</mi><mo>+</mo></msup><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow><mo>-</mo><mrow><msup><mi>C</mi><mo>-</mo></msup><mo>⋅</mo><mi>y</mi></mrow><mo>-</mo><mrow><msup><mi>S</mi><mo>-</mo></msup><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(74)</span></td>
</tr>
<tr id="S3.E75" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E75.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E75.m2" class="ltx_Math" alttext="\displaystyle\to-\hat{S}^{-}\cdot x+C^{+}\cdot p_{x}+\hat{S}^{+}\cdot y-C^{-}%
\cdot p_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mo>-</mo><mrow><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>-</mo></msup><mo>⋅</mo><mi>x</mi></mrow></mrow><mo>+</mo><mrow><msup><mi>C</mi><mo>+</mo></msup><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow><mo>+</mo><mrow><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>+</mo></msup><mo>⋅</mo><mi>y</mi></mrow></mrow><mo>-</mo><mrow><msup><mi>C</mi><mo>-</mo></msup><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(75)</span></td>
</tr>
<tr id="S3.E76" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E76.m1" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E76.m2" class="ltx_Math" alttext="\displaystyle\to-C^{-}\cdot x-S^{-}\cdot p_{x}+C^{+}\cdot y+S^{+}\cdot p_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mo>-</mo><mrow><msup><mi>C</mi><mo>-</mo></msup><mo>⋅</mo><mi>x</mi></mrow></mrow><mo>-</mo><mrow><msup><mi>S</mi><mo>-</mo></msup><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow><mo>+</mo><mrow><msup><mi>C</mi><mo>+</mo></msup><mo>⋅</mo><mi>y</mi></mrow><mo>+</mo><mrow><msup><mi>S</mi><mo>+</mo></msup><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(76)</span></td>
</tr>
<tr id="S3.E77" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E77.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E77.m2" class="ltx_Math" alttext="\displaystyle\to\hat{S}^{+}\cdot x-C^{-}\cdot p_{x}-\hat{S}^{-}\cdot y+C^{+}%
\cdot p_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>+</mo></msup><mo>⋅</mo><mi>x</mi></mrow><mo>-</mo><mrow><msup><mi>C</mi><mo>-</mo></msup><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow><mo>-</mo><mrow><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>-</mo></msup><mo>⋅</mo><mi>y</mi></mrow></mrow><mo>+</mo><mrow><msup><mi>C</mi><mo>+</mo></msup><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(77)</span></td>
</tr>
<tr id="S3.E78" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E78.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E78.m2" class="ltx_Math" alttext="\displaystyle\to\sigma+\frac{1}{8}(x^{2}+y^{2})\left(C^{+}\hat{S}^{-}+C^{-}%
\hat{S}^{+}\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>8</mn></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM498"><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><msup><mi>y</mi><mn>2</mn></msup></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM499"><mrow><msup><mi>C</mi><mo>+</mo></msup><mo>⁢</mo><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>-</mo></msup></mrow><mo>+</mo><mrow><msup><mi>C</mi><mo>-</mo></msup><mo>⁢</mo><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>+</mo></msup></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(78)</span></td>
</tr>
<tr id="S3.E79" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E79.m2" class="ltx_Math" alttext="\displaystyle\qquad-\frac{1}{8}\frac{p_{x}^{2}+p_{y}^{2}}{(1+\delta)^{2}}\left%
[L+C^{+}S^{+}+C^{-}S^{-}\right]" display="inline"><mrow><mi>  </mi><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>8</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM502"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mfrac></mstyle><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM503"><mi>L</mi><mo>+</mo><mrow><msup><mi>C</mi><mo>+</mo></msup><mo>⁢</mo><msup><mi>S</mi><mo>+</mo></msup></mrow><mo>+</mo><mrow><msup><mi>C</mi><mo>-</mo></msup><mo>⁢</mo><msup><mi>S</mi><mo>-</mo></msup></mrow></mrow><mo>]</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(79)</span></td>
</tr>
<tr id="S3.E80" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E80.m2" class="ltx_Math" alttext="\displaystyle\qquad+\frac{1}{2}Nxy\left[L-C^{+}S^{+}-C^{-}S^{-}\right]+\frac{1%
}{2}\frac{p_{x}p_{y}}{(1+\delta)^{2}}\left[C^{+}S^{-}+C^{-}C^{+}\right]" display="inline"><mrow><mi>  </mi><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mi>N</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM508"><mi>L</mi><mo>-</mo><mrow><msup><mi>C</mi><mo>+</mo></msup><mo>⁢</mo><msup><mi>S</mi><mo>+</mo></msup></mrow><mo>-</mo><mrow><msup><mi>C</mi><mo>-</mo></msup><mo>⁢</mo><msup><mi>S</mi><mo>-</mo></msup></mrow></mrow><mo>]</mo></mrow></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⁢</mo><msub><mi>p</mi><mi>y</mi></msub></mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM507"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mfrac></mstyle><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM509"><mrow><msup><mi>C</mi><mo>+</mo></msup><mo>⁢</mo><msup><mi>S</mi><mo>-</mo></msup></mrow><mo>+</mo><mrow><msup><mi>C</mi><mo>-</mo></msup><mo>⁢</mo><msup><mi>C</mi><mo>+</mo></msup></mrow></mrow><mo>]</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(80)</span></td>
</tr>
<tr id="S3.E81" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E81.m2" class="ltx_Math" alttext="\displaystyle\qquad+\frac{xp_{x}+yp_{y}}{1+\delta}S^{+}\hat{S}^{-}-\frac{xp_{y%
}+p_{x}y}{1+\delta}\frac{1}{2}\left[S^{+}\hat{S}^{-}+S^{-}\hat{S}^{+}\right]" display="inline"><mrow><mrow><mi>  </mi><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><mrow><mi>x</mi><mo>⁢</mo><msub><mi>p</mi><mi>x</mi></msub></mrow><mo>+</mo><mrow><mi>y</mi><mo>⁢</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⁢</mo><msup><mi>S</mi><mo>+</mo></msup><mo>⁢</mo><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>-</mo></msup></mrow></mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><mrow><mi>x</mi><mo>⁢</mo><msub><mi>p</mi><mi>y</mi></msub></mrow><mo>+</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⁢</mo><mi>y</mi></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM511"><mrow><msup><mi>S</mi><mo>+</mo></msup><mo>⁢</mo><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>-</mo></msup></mrow><mo>+</mo><mrow><msup><mi>S</mi><mo>-</mo></msup><mo>⁢</mo><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>+</mo></msup></mrow></mrow><mo>]</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(81)</span></td>
</tr>
</table>
<p class="ltx_p">where</p>
<table id="S5.EGx37" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E82" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E82.m1" class="ltx_Math" alttext="\displaystyle C^{-}" display="inline"><msup><mi>C</mi><mo>-</mo></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E82.m2" class="ltx_Math" alttext="\displaystyle=\frac{\cos\sqrt{N}L-\cosh\sqrt{N}L}{2}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mrow><mi>cos</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow><mo>-</mo><mrow><mi>cosh</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow><mn>2</mn></mfrac></mstyle></mrow></math>
                  </td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E82.m3" class="ltx_Math" alttext="\displaystyle C^{+}" display="inline"><msup><mi>C</mi><mo>+</mo></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E82.m4" class="ltx_Math" alttext="\displaystyle=\frac{\cos\sqrt{N}L+\cosh\sqrt{N}L}{2}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mrow><mi>cos</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow><mo>+</mo><mrow><mi>cosh</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow><mn>2</mn></mfrac></mstyle></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(82)</span></td>
</tr>
<tr id="S3.E83" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E83.m1" class="ltx_Math" alttext="\displaystyle S^{-}" display="inline"><msup><mi>S</mi><mo>-</mo></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E83.m2" class="ltx_Math" alttext="\displaystyle=\frac{\sin\sqrt{N}L-\sinh\sqrt{N}L}{2\sqrt{N}}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mrow><mi>sin</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow><mo>-</mo><mrow><mi>sinh</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow><mrow><mn>2</mn><mo>⁢</mo><msqrt><mi>N</mi></msqrt></mrow></mfrac></mstyle></mrow></math>
                  </td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E83.m3" class="ltx_Math" alttext="\displaystyle S^{+}" display="inline"><msup><mi>S</mi><mo>+</mo></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E83.m4" class="ltx_Math" alttext="\displaystyle=\frac{\sin\sqrt{N}L+\sinh\sqrt{N}L}{2\sqrt{N}}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mrow><mi>sin</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow><mo>+</mo><mrow><mi>sinh</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow><mrow><mn>2</mn><mo>⁢</mo><msqrt><mi>N</mi></msqrt></mrow></mfrac></mstyle></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(83)</span></td>
</tr>
<tr id="S3.E84" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E84.m1" class="ltx_Math" alttext="\displaystyle\hat{S}^{-}" display="inline"><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>-</mo></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E84.m2" class="ltx_Math" alttext="\displaystyle=\frac{\sqrt{N}}{2}(\sin\sqrt{N}L-\sinh\sqrt{N}L)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><msqrt><mi>N</mi></msqrt><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM513"><mrow><mi>sin</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow><mo>-</mo><mrow><mi>sinh</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E84.m3" class="ltx_Math" alttext="\displaystyle\hat{S}^{+}" display="inline"><msup><mover accent="true"><mi>S</mi><mo stretchy="false">^</mo></mover><mo>+</mo></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E84.m4" class="ltx_Math" alttext="\displaystyle=\frac{\sqrt{N}}{2}(\sin\sqrt{N}L+\sinh\sqrt{N}L)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><msqrt><mi>N</mi></msqrt><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM515"><mrow><mi>sin</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow><mo>+</mo><mrow><mi>sinh</mi><mo>⁡</mo><mrow><msqrt><mi>N</mi></msqrt><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(84)</span></td>
</tr>
</table>
</div>
</section>
</section>
<section id="S3.SS4" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.4 </span>Combined function magnet</h3>
<section id="S3.SS4.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.4.1 </span>Thin combined function magnet</h4>
<div id="S3.SS4.SSS1.p1" class="ltx_para">
<p class="ltx_p">The map is the combination of the map for the thin dipole and for a thin quadrupole using
the thin multipole expansion (eq. 3.12 in <cite class="ltx_cite">[<a href="#bib.bib8" title="A symplectic six-dimensional thin-lens formalism for tracking" class="ltx_ref">8</a>]</cite>)</p>
<table id="S5.EGx38" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E85" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E85.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E85.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}-G_{1}L\cdot x+(1+\delta)h_{x}L-q\cdot h_{x}L" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><mrow><mrow><msub><mi>G</mi><mn>1</mn></msub><mo>⁢</mo><mi>L</mi></mrow><mo>⋅</mo><mi>x</mi></mrow></mrow><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM517"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>L</mi></mrow></mrow><mo>-</mo><mrow><mrow><mi>q</mi><mo>⋅</mo><msub><mi>h</mi><mi>x</mi></msub></mrow><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(85)</span></td>
</tr>
<tr id="S3.E86" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E86.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E86.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}-G_{2}L\cdot y+(1+\delta)h_{y}L-q\cdot h_{y}L" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>-</mo><mrow><mrow><msub><mi>G</mi><mn>2</mn></msub><mo>⁢</mo><mi>L</mi></mrow><mo>⋅</mo><mi>y</mi></mrow></mrow><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM519"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msub><mi>h</mi><mi>y</mi></msub><mo>⁢</mo><mi>L</mi></mrow></mrow><mo>-</mo><mrow><mrow><mi>q</mi><mo>⋅</mo><msub><mi>h</mi><mi>y</mi></msub></mrow><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(86)</span></td>
</tr>
<tr id="S3.E87" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E87.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E87.m2" class="ltx_Math" alttext="\displaystyle\to\sigma-\frac{\beta_{0}}{\beta}(h_{x}x+h_{y}y)L," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM521"><mrow><msub><mi>h</mi><mi>x</mi></msub><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><msub><mi>h</mi><mi>y</mi></msub><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi>L</mi></mrow></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(87)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS4.SSS1.p1.m1" class="ltx_Math" alttext="G_{1}=q\cdot h_{x}^{2}+k_{1}" display="inline"><mrow><msub><mi>G</mi><mn>1</mn></msub><mo>=</mo><mrow><mrow><mi>q</mi><mo>⋅</mo><msubsup><mi>h</mi><mi>x</mi><mn>2</mn></msubsup></mrow><mo>+</mo><msub><mi>k</mi><mn>1</mn></msub></mrow></mrow></math> and <math id="S3.SS4.SSS1.p1.m2" class="ltx_Math" alttext="G_{2}=q\cdot h_{y}^{2}-k_{1}" display="inline"><mrow><msub><mi>G</mi><mn>2</mn></msub><mo>=</mo><mrow><mrow><mi>q</mi><mo>⋅</mo><msubsup><mi>h</mi><mi>y</mi><mn>2</mn></msubsup></mrow><mo>-</mo><msub><mi>k</mi><mn>1</mn></msub></mrow></mrow></math>.</p>
</div>
</section>
</section>
<section id="S3.SS5" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5 </span>Thin Multipole</h3>
<div id="S3.SS5.p1" class="ltx_para">
<p class="ltx_p">A longitudinally uniform static magnetic field can be described by the following equations</p>
<table id="S5.EGx39" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E88" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E88.m1" class="ltx_Math" alttext="\displaystyle A_{z}" display="inline"><msub><mi>A</mi><mi>z</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E88.m2" class="ltx_Math" alttext="\displaystyle=-\Re\sum_{n=1}\frac{1}{n}\left(B_{n}+iA_{n}\right)\frac{(x+iy)^{%
n}}{r_{0}^{n-1}}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mi mathvariant="normal">ℜ</mi><mo>⁢</mo><mrow><mstyle displaystyle="true"><munder><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>n</mi><mo>=</mo><mn>1</mn></mrow></munder></mstyle><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mi>n</mi></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM525"><msub><mi>B</mi><mi>n</mi></msub><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><msub><mi>A</mi><mi>n</mi></msub></mrow></mrow><mo>)</mo></mrow><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msup><mrow><mo stretchy="false">(</mo><mrow id="XM524"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mi>n</mi></msup><msubsup><mi>r</mi><mn>0</mn><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msubsup></mfrac></mstyle></mrow></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(88)</span></td>
</tr>
<tr id="S3.E89" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E89.m1" class="ltx_Math" alttext="\displaystyle B_{y}+iB_{x}" display="inline"><mrow><msub><mi>B</mi><mi>y</mi></msub><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><msub><mi>B</mi><mi>x</mi></msub></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E89.m2" class="ltx_Math" alttext="\displaystyle=\sum_{n=1}\left(B_{n}+iA_{n}\right)\frac{(x+iy)^{n-1}}{r_{0}^{n-%
1}}." display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><munder><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>n</mi><mo>=</mo><mn>1</mn></mrow></munder></mstyle><mrow><mrow><mo>(</mo><mrow id="XM529"><msub><mi>B</mi><mi>n</mi></msub><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><msub><mi>A</mi><mi>n</mi></msub></mrow></mrow><mo>)</mo></mrow><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msup><mrow><mo stretchy="false">(</mo><mrow id="XM528"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msup><msubsup><mi>r</mi><mn>0</mn><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msubsup></mfrac></mstyle></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(89)</span></td>
</tr>
</table>
<p class="ltx_p">A thin multiple idealize the effect of the field by taking the limit of the integration
length going to zero while keeping constant the integrated strength. The Hamiltonian is:</p>
<table id="S5.EGx40" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E90" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E90.m1" class="ltx_Math" alttext="\displaystyle H=-\delta(s)L\frac{q}{p}A_{z}." display="inline"><mrow><mrow><mi>H</mi><mo>=</mo><mrow><mo>-</mo><mrow><mi>δ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM531">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi>L</mi><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>q</mi><mi>p</mi></mfrac></mstyle><mo>⁢</mo><msub><mi>A</mi><mi>z</mi></msub></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(90)</span></td>
</tr>
</table>
<p class="ltx_p">The corresponding map is:</p>
<table id="S5.EGx41" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E91" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E91.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E91.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}-L\cdot\Re\left[\sum_{n=0}\frac{1}{n!}(k_{n}+i\hat{k}_{n%
})(x+iy)^{n}\right]," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><mrow><mi>L</mi><mo>⋅</mo><mrow><mi mathvariant="normal" id="XM538">ℜ</mi><mo>⁡</mo><mrow><mo>[</mo><mrow id="XM539"><mstyle displaystyle="true"><munder><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>n</mi><mo>=</mo><mn>0</mn></mrow></munder></mstyle><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mi>n</mi><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM536"><msub><mi>k</mi><mi>n</mi></msub><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><msub><mover accent="true"><mi>k</mi><mo stretchy="false">^</mo></mover><mi>n</mi></msub></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM537"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mi>n</mi></msup></mrow></mrow><mo>]</mo></mrow></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(91)</span></td>
</tr>
<tr id="S3.E92" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E92.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E92.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}+L\cdot\Im\left[\sum_{n=0}\frac{1}{n!}(k_{n}+i\hat{k}_{n%
})(x+iy)^{n}\right]," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>+</mo><mrow><mi>L</mi><mo>⋅</mo><mrow><mi mathvariant="normal" id="XM546">ℑ</mi><mo>⁡</mo><mrow><mo>[</mo><mrow id="XM547"><mstyle displaystyle="true"><munder><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>n</mi><mo>=</mo><mn>0</mn></mrow></munder></mstyle><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mi>n</mi><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM544"><msub><mi>k</mi><mi>n</mi></msub><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><msub><mover accent="true"><mi>k</mi><mo stretchy="false">^</mo></mover><mi>n</mi></msub></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM545"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mi>n</mi></msup></mrow></mrow><mo>]</mo></mrow></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(92)</span></td>
</tr>
</table>
<p class="ltx_p">for which</p>
<table id="S5.EGx42" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E93" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E93.m1" class="ltx_Math" alttext="\displaystyle k_{n}" display="inline"><msub><mi>k</mi><mi>n</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E93.m2" class="ltx_Math" alttext="\displaystyle=\frac{q}{p}\frac{\partial^{n}B_{y}}{\partial x^{n}}=\frac{q}{p}%
\frac{n!}{r_{0}^{n}}B_{n+1}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><mi>p</mi></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msup><mo>∂</mo><mi>n</mi></msup><mo>⁡</mo><msub><mi>B</mi><mi>y</mi></msub></mrow><mrow><mo>∂</mo><mo>⁡</mo><msup><mi>x</mi><mi>n</mi></msup></mrow></mfrac></mstyle></mrow><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><mi>p</mi></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mi>n</mi><mo lspace="0pt" rspace="3.5pt">!</mo></mrow><msubsup><mi>r</mi><mn>0</mn><mi>n</mi></msubsup></mfrac></mstyle><mo>⁢</mo><msub><mi>B</mi><mrow><mi>n</mi><mo>+</mo><mn>1</mn></mrow></msub></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E93.m3" class="ltx_Math" alttext="\displaystyle B_{n+1}=\frac{r_{0}^{n}}{n!}\frac{\partial^{n}B_{y}}{\partial x^%
{n}}" display="inline"><mrow><msub><mi>B</mi><mrow><mi>n</mi><mo>+</mo><mn>1</mn></mrow></msub><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><msubsup><mi>r</mi><mn>0</mn><mi>n</mi></msubsup><mrow><mi>n</mi><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msup><mo>∂</mo><mi>n</mi></msup><mo>⁡</mo><msub><mi>B</mi><mi>y</mi></msub></mrow><mrow><mo>∂</mo><mo>⁡</mo><msup><mi>x</mi><mi>n</mi></msup></mrow></mfrac></mstyle></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(93)</span></td>
</tr>
<tr id="S3.E94" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E94.m1" class="ltx_Math" alttext="\displaystyle\hat{k}_{n}" display="inline"><msub><mover accent="true"><mi>k</mi><mo stretchy="false">^</mo></mover><mi>n</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E94.m2" class="ltx_Math" alttext="\displaystyle=\frac{q}{p}\frac{\partial^{n}B_{x}}{\partial x^{n}}=\frac{q}{p}%
\frac{n!}{r_{0}^{n}}A_{n+1}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><mi>p</mi></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msup><mo>∂</mo><mi>n</mi></msup><mo>⁡</mo><msub><mi>B</mi><mi>x</mi></msub></mrow><mrow><mo>∂</mo><mo>⁡</mo><msup><mi>x</mi><mi>n</mi></msup></mrow></mfrac></mstyle></mrow><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><mi>p</mi></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mi>n</mi><mo lspace="0pt" rspace="3.5pt">!</mo></mrow><msubsup><mi>r</mi><mn>0</mn><mi>n</mi></msubsup></mfrac></mstyle><mo>⁢</mo><msub><mi>A</mi><mrow><mi>n</mi><mo>+</mo><mn>1</mn></mrow></msub></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E94.m3" class="ltx_Math" alttext="\displaystyle A_{n+1}=\frac{r_{0}^{n}}{n!}\frac{\partial^{n}B_{x}}{\partial x^%
{n}}" display="inline"><mrow><msub><mi>A</mi><mrow><mi>n</mi><mo>+</mo><mn>1</mn></mrow></msub><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><msubsup><mi>r</mi><mn>0</mn><mi>n</mi></msubsup><mrow><mi>n</mi><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msup><mo>∂</mo><mi>n</mi></msup><mo>⁡</mo><msub><mi>B</mi><mi>x</mi></msub></mrow><mrow><mo>∂</mo><mo>⁡</mo><msup><mi>x</mi><mi>n</mi></msup></mrow></mfrac></mstyle></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(94)</span></td>
</tr>
</table>
<p class="ltx_p">For instance, the map for a normal quadrupole, sextupole and octupole are :</p>
<table id="S5.EGx43" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E95" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E95.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E95.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}-L\cdot{k_{1}}\cdot x" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><mrow><mi>L</mi><mo>⋅</mo><msub><mi>k</mi><mn>1</mn></msub><mo>⋅</mo><mi>x</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E95.m3" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E95.m4" class="ltx_Math" alttext="\displaystyle\to p_{y}+L\cdot{k_{1}}\cdot y," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>+</mo><mrow><mi>L</mi><mo>⋅</mo><msub><mi>k</mi><mn>1</mn></msub><mo>⋅</mo><mi>y</mi></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(95)</span></td>
</tr>
<tr id="S3.E96" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E96.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E96.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}-L\cdot\frac{k_{2}}{2}\cdot(x^{2}-y^{2})" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><mrow><mi>L</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>k</mi><mn>2</mn></msub><mn>2</mn></mfrac></mstyle><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM549"><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><msup><mi>y</mi><mn>2</mn></msup></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E96.m3" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E96.m4" class="ltx_Math" alttext="\displaystyle\to p_{y}+L\cdot k_{2}\cdot xy," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>+</mo><mrow><mrow><mi>L</mi><mo>⋅</mo><msub><mi>k</mi><mn>2</mn></msub><mo>⋅</mo><mi>x</mi></mrow><mo>⁢</mo><mi>y</mi></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(96)</span></td>
</tr>
<tr id="S3.E97" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E97.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E97.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}-L\cdot\frac{k_{3}}{6}\cdot(x^{3}-3xy^{2})" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><mrow><mi>L</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>k</mi><mn>3</mn></msub><mn>6</mn></mfrac></mstyle><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM551"><msup><mi>x</mi><mn>3</mn></msup><mo>-</mo><mrow><mn>3</mn><mo>⁢</mo><mi>x</mi><mo>⁢</mo><msup><mi>y</mi><mn>2</mn></msup></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E97.m3" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E97.m4" class="ltx_Math" alttext="\displaystyle\to p_{y}+L\cdot\frac{k_{3}}{6}\cdot(3x^{2}y-y^{3})." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>+</mo><mrow><mi>L</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>k</mi><mn>3</mn></msub><mn>6</mn></mfrac></mstyle><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM553"><mrow><mn>3</mn><mo>⁢</mo><msup><mi>x</mi><mn>2</mn></msup><mo>⁢</mo><mi>y</mi></mrow><mo>-</mo><msup><mi>y</mi><mn>3</mn></msup></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(97)</span></td>
</tr>
</table>
</div>
</section>
<section id="S3.SS6" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.6 </span>RF-cavity</h3>
<div id="S3.SS6.p1" class="ltx_para">
<p class="ltx_p">The expanded Hamiltonian for a RF-cavity is (eq. 2.30 in <cite class="ltx_cite">[<a href="#bib.bib8" title="A symplectic six-dimensional thin-lens formalism for tracking" class="ltx_ref">8</a>]</cite>)</p>
<table id="S5.EGx44" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E98" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E98.m1" class="ltx_Math" alttext="\displaystyle H" display="inline"><mi>H</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E98.m2" class="ltx_Math" alttext="\displaystyle=p_{\sigma}+\frac{1}{\beta_{0}^{2}}\frac{C}{2\pi h_{a}}\frac{qV(s%
)}{E_{0}}\cos\left(h_{a}\frac{2\pi}{C}\sigma+\varphi\right)," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><msubsup><mi>β</mi><mn>0</mn><mn>2</mn></msubsup></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>C</mi><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><msub><mi>h</mi><mi>a</mi></msub></mrow></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mi>q</mi><mo>⁢</mo><mi>V</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM557">s</mi><mo stretchy="false">)</mo></mrow></mrow><msub><mi>E</mi><mn>0</mn></msub></mfrac></mstyle><mo>⁢</mo><mrow><mi id="XM558">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM559"><mrow><msub><mi>h</mi><mi>a</mi></msub><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi></mrow><mi>C</mi></mfrac></mstyle><mo>⁢</mo><mi>σ</mi></mrow><mo>+</mo><mi>φ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(98)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS6.p1.m1" class="ltx_Math" alttext="h_{a}" display="inline"><msub><mi>h</mi><mi>a</mi></msub></math> is the harmonic number, <math id="S3.SS6.p1.m2" class="ltx_Math" alttext="\varphi" display="inline"><mi>φ</mi></math> is the phase angle, <math id="S3.SS6.p1.m3" class="ltx_Math" alttext="V" display="inline"><mi>V</mi></math> is the voltage and
<math id="S3.SS6.p1.m4" class="ltx_Math" alttext="C" display="inline"><mi>C</mi></math> is the design circumference length. The thin lens transfer map is (eq. 3.44 in <cite class="ltx_cite">[<a href="#bib.bib8" title="A symplectic six-dimensional thin-lens formalism for tracking" class="ltx_ref">8</a>]</cite>)</p>
<table id="S5.EGx45" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E99" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E99.m1" class="ltx_Math" alttext="\displaystyle p_{\sigma}" display="inline"><msub><mi>p</mi><mi>σ</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E99.m2" class="ltx_Math" alttext="\displaystyle\to p_{\sigma}+\frac{1}{\beta_{0}^{2}}\frac{qV(s_{0})}{E_{0}}%
\cdot\sin\left(h_{a}\frac{2\pi}{C}\sigma+\varphi\right)." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>+</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><msubsup><mi>β</mi><mn>0</mn><mn>2</mn></msubsup></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mi>q</mi><mo>⁢</mo><mi>V</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM563"><mi>s</mi><mn>0</mn></msub><mo stretchy="false">)</mo></mrow></mrow><msub><mi>E</mi><mn>0</mn></msub></mfrac></mstyle></mrow><mo>⋅</mo><mrow><mi id="XM564">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM565"><mrow><msub><mi>h</mi><mi>a</mi></msub><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi></mrow><mi>C</mi></mfrac></mstyle><mo>⁢</mo><mi>σ</mi></mrow><mo>+</mo><mi>φ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(99)</span></td>
</tr>
</table>
<p class="ltx_p">Using the relation between <math id="S3.SS6.p1.m5" class="ltx_Math" alttext="p_{\sigma}" display="inline"><msub><mi>p</mi><mi>σ</mi></msub></math> and the energy <math id="S3.SS6.p1.m6" class="ltx_Math" alttext="E" display="inline"><mi>E</mi></math>, the map can be expressed as
the change in energy of the tracked particle</p>
<table id="S5.EGx46" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E100" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E100.m1" class="ltx_Math" alttext="\displaystyle E" display="inline"><mi>E</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E100.m2" class="ltx_Math" alttext="\displaystyle\to E+q\cdot V\sin\left(h_{a}\frac{2\pi}{C}\sigma+\varphi\right)." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mi>E</mi><mo>+</mo><mrow><mrow><mi>q</mi><mo>⋅</mo><mi>V</mi></mrow><mo>⁢</mo><mrow><mi id="XM568">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM569"><mrow><msub><mi>h</mi><mi>a</mi></msub><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi></mrow><mi>C</mi></mfrac></mstyle><mo>⁢</mo><mi>σ</mi></mrow><mo>+</mo><mi>φ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(100)</span></td>
</tr>
</table>
<p class="ltx_p">This is how Sixtrack performs the calculation.</p>
</div>
</section>
<section id="S3.SS7" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.7 </span>Solenoid</h3>
<div id="S3.SS7.p1" class="ltx_para">
<p class="ltx_p">The expanded Hamiltonian for a particle in a solenoid is</p>
<table id="S5.EGx47" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E101" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E101.m1" class="ltx_Math" alttext="\displaystyle H" display="inline"><mi>H</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E101.m2" class="ltx_Math" alttext="\displaystyle=p_{\sigma}+\frac{1}{2}\frac{(p_{x}+R\cdot y)^{2}+(p_{y}-R\cdot x%
)}{1+\delta}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM572"><msub><mi>p</mi><mi>x</mi></msub><mo>+</mo><mrow><mi>R</mi><mo>⋅</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>+</mo><mrow><mo stretchy="false">(</mo><mrow id="XM573"><msub><mi>p</mi><mi>y</mi></msub><mo>-</mo><mrow><mi>R</mi><mo>⋅</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(101)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS7.p1.m1" class="ltx_Math" alttext="R=\frac{1}{2}\frac{q}{P_{0}c}\mathbf{B}(0,0,s)" display="inline"><mrow><mi>R</mi><mo>=</mo><mrow><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>⁢</mo><mfrac><mi>q</mi><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi></mrow></mfrac><mo>⁢</mo><mi>𝐁</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM574">0</mn><mo>,</mo><mn id="XM575">0</mn><mo>,</mo><mi id="XM576">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math>. The map for a solenoid
of length <math id="S3.SS7.p1.m2" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> in the thin lens approximation with the expanded
Hamiltonian (eq. 4.35 in <cite class="ltx_cite">[<a href="#bib.bib9" title="Construction of nonlinear symplectic six-dimensional thin-lens maps by exponentiation" class="ltx_ref">4</a>]</cite>)
</p>
<table id="S5.EGx48" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E102" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E102.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E102.m2" class="ltx_Math" alttext="\displaystyle\to\,\,\,\,\,C\cdot x+S\cdot y" display="inline"><mrow><mi></mi><mo rspace="11pt">→</mo><mrow><mrow><mi>C</mi><mo>⋅</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>S</mi><mo>⋅</mo><mi>y</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(102)</span></td>
</tr>
<tr id="S3.E103" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E103.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E103.m2" class="ltx_Math" alttext="\displaystyle\to-\theta R\cdot C\cdot x+C\cdot p_{x}-\theta R\cdot S\cdot y+S%
\cdot p_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mrow><mo>-</mo><mrow><mrow><mi>θ</mi><mo>⁢</mo><mi>R</mi></mrow><mo>⋅</mo><mi>C</mi><mo>⋅</mo><mi>x</mi></mrow></mrow><mo>+</mo><mrow><mi>C</mi><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow><mo>-</mo><mrow><mrow><mi>θ</mi><mo>⁢</mo><mi>R</mi></mrow><mo>⋅</mo><mi>S</mi><mo>⋅</mo><mi>y</mi></mrow></mrow><mo>+</mo><mrow><mi>S</mi><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(103)</span></td>
</tr>
<tr id="S3.E104" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E104.m1" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E104.m2" class="ltx_Math" alttext="\displaystyle\to-S\cdot x+C\cdot y" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mo>-</mo><mrow><mi>S</mi><mo>⋅</mo><mi>x</mi></mrow></mrow><mo>+</mo><mrow><mi>C</mi><mo>⋅</mo><mi>y</mi></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(104)</span></td>
</tr>
<tr id="S3.E105" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E105.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E105.m2" class="ltx_Math" alttext="\displaystyle\to\,\,\,\,\,\theta R\cdot S\cdot x-S\cdot p_{x}-\theta R\cdot C%
\cdot y+C\cdot p_{y}" display="inline"><mrow><mi></mi><mo rspace="11pt">→</mo><mrow><mrow><mrow><mrow><mi>θ</mi><mo>⁢</mo><mi>R</mi></mrow><mo>⋅</mo><mi>S</mi><mo>⋅</mo><mi>x</mi></mrow><mo>-</mo><mrow><mi>S</mi><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow><mo>-</mo><mrow><mrow><mi>θ</mi><mo>⁢</mo><mi>R</mi></mrow><mo>⋅</mo><mi>C</mi><mo>⋅</mo><mi>y</mi></mrow></mrow><mo>+</mo><mrow><mi>C</mi><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(105)</span></td>
</tr>
<tr id="S3.E106" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E106.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E106.m2" class="ltx_Math" alttext="\displaystyle\to\sigma-\frac{\beta_{0}}{\beta}\frac{\theta}{1+\delta}\left(%
\frac{1}{2}R(x^{2}+y^{2})+(p_{x}y-p_{y}x)\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>β</mi><mn>0</mn></msub><mi>β</mi></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>θ</mi><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM582"><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mi>R</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM580"><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><msup><mi>y</mi><mn>2</mn></msup></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><mo stretchy="false">(</mo><mrow id="XM581"><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⁢</mo><mi>y</mi></mrow><mo>-</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>⁢</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(106)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS7.p1.m3" class="ltx_Math" alttext="R\equiv R(s_{0})" display="inline"><mrow><mi>R</mi><mo>≡</mo><mrow><mi>R</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM583"><mi>s</mi><mn>0</mn></msub><mo stretchy="false">)</mo></mrow></mrow></mrow></math>, <math id="S3.SS7.p1.m4" class="ltx_Math" alttext="\theta=\frac{R}{1+\delta}" display="inline"><mrow><mi>θ</mi><mo>=</mo><mfrac><mi>R</mi><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mrow></math>,
<math id="S3.SS7.p1.m5" class="ltx_Math" alttext="C=\cos(\theta)" display="inline"><mrow><mi>C</mi><mo>=</mo><mrow><mi id="XM584">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM585">θ</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math> and <math id="S3.SS7.p1.m6" class="ltx_Math" alttext="S=\sin(\theta)" display="inline"><mrow><mi>S</mi><mo>=</mo><mrow><mi id="XM586">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM587">θ</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math>.
<br class="ltx_break">
The map for a thick solenoid is (eq. 3.47, 3.48 in <cite class="ltx_cite">[<a href="#bib.bib6" title="Non-linear canonical equations of coupled synchro-betatron motion and their solutions within the framework of a non-linear six-dimensional (symplectic) tracking program for ultrarelativistic protons" class="ltx_ref">9</a>]</cite>)</p>
<table id="S5.EGx49" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E107" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E107.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E107.m2" class="ltx_Math" alttext="\displaystyle\to C^{2}\cdot x+\frac{1}{R}\cdot S\cdot C\cdot p_{x}+S\cdot C%
\cdot y+\frac{1}{R}\cdot S^{2}\cdot p_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msup><mi>C</mi><mn>2</mn></msup><mo>⋅</mo><mi>x</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mi>R</mi></mfrac></mstyle><mo>⋅</mo><mi>S</mi><mo>⋅</mo><mi>C</mi><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow><mo>+</mo><mrow><mi>S</mi><mo>⋅</mo><mi>C</mi><mo>⋅</mo><mi>y</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mi>R</mi></mfrac></mstyle><mo>⋅</mo><msup><mi>S</mi><mn>2</mn></msup><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(107)</span></td>
</tr>
<tr id="S3.E108" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E108.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E108.m2" class="ltx_Math" alttext="\displaystyle\to-R\cdot S\cdot C\cdot x+C^{2}\cdot p_{x}-R\cdot S^{2}\cdot y+S%
\cdot C\cdot p_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mrow><mo>-</mo><mrow><mi>R</mi><mo>⋅</mo><mi>S</mi><mo>⋅</mo><mi>C</mi><mo>⋅</mo><mi>x</mi></mrow></mrow><mo>+</mo><mrow><msup><mi>C</mi><mn>2</mn></msup><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow><mo>-</mo><mrow><mi>R</mi><mo>⋅</mo><msup><mi>S</mi><mn>2</mn></msup><mo>⋅</mo><mi>y</mi></mrow></mrow><mo>+</mo><mrow><mi>S</mi><mo>⋅</mo><mi>C</mi><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(108)</span></td>
</tr>
<tr id="S3.E109" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E109.m1" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E109.m2" class="ltx_Math" alttext="\displaystyle\to-S\cdot C\cdot x-\frac{1}{R}\cdot S^{2}\cdot p_{x}+C^{2}\cdot y%
+\frac{1}{R}\cdot S\cdot C\cdot p_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mo>-</mo><mrow><mi>S</mi><mo>⋅</mo><mi>C</mi><mo>⋅</mo><mi>x</mi></mrow></mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mi>R</mi></mfrac></mstyle><mo>⋅</mo><msup><mi>S</mi><mn>2</mn></msup><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow><mo>+</mo><mrow><msup><mi>C</mi><mn>2</mn></msup><mo>⋅</mo><mi>y</mi></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mi>R</mi></mfrac></mstyle><mo>⋅</mo><mi>S</mi><mo>⋅</mo><mi>C</mi><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(109)</span></td>
</tr>
<tr id="S3.E110" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E110.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E110.m2" class="ltx_Math" alttext="\displaystyle\to R\cdot S^{2}\cdot x-S\cdot C\cdot p_{x}-R\cdot S\cdot C\cdot y%
+C^{2}\cdot p_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mi>R</mi><mo>⋅</mo><msup><mi>S</mi><mn>2</mn></msup><mo>⋅</mo><mi>x</mi></mrow><mo>-</mo><mrow><mi>S</mi><mo>⋅</mo><mi>C</mi><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow><mo>-</mo><mrow><mi>R</mi><mo>⋅</mo><mi>S</mi><mo>⋅</mo><mi>C</mi><mo>⋅</mo><mi>y</mi></mrow></mrow><mo>+</mo><mrow><msup><mi>C</mi><mn>2</mn></msup><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(110)</span></td>
</tr>
<tr id="S3.E111" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E111.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E111.m2" class="ltx_Math" alttext="\displaystyle\to\sigma-\frac{L}{2}\left[R^{2}(x^{2}+y^{2})+2R\left(\frac{p_{x}%
}{1+\delta}y-\frac{p_{y}}{1+\delta}x\right)+\frac{p_{x}^{2}+p_{y}^{2}}{(1+%
\delta)^{2}}\right]" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mi>L</mi><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM595"><mrow><msup><mi>R</mi><mn>2</mn></msup><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM593"><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><msup><mi>y</mi><mn>2</mn></msup></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><mn>2</mn><mo>⁢</mo><mi>R</mi><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM594"><mrow><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⁢</mo><mi>y</mi></mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⁢</mo><mi>x</mi></mrow></mrow><mo>)</mo></mrow></mrow><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM592"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mfrac></mstyle></mrow><mo>]</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(111)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS7.p1.m7" class="ltx_Math" alttext="\theta=R\cdot L" display="inline"><mrow><mi>θ</mi><mo>=</mo><mrow><mi>R</mi><mo>⋅</mo><mi>L</mi></mrow></mrow></math>, <math id="S3.SS7.p1.m8" class="ltx_Math" alttext="C=\cos\theta" display="inline"><mrow><mi>C</mi><mo>=</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></math> and <math id="S3.SS7.p1.m9" class="ltx_Math" alttext="S=\sin\theta" display="inline"><mrow><mi>S</mi><mo>=</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></math>.</p>
</div>
</section>
<section id="S3.SS8" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.8 </span>Beam-beam lens</h3>
<div id="S3.SS8.p1" class="ltx_para">
<p class="ltx_p">In order to study beam-beam interactions the strong bunch can be split
longitudinally into several slices, each slice described by an electrostatic
potential of the form (eq. 2.1 in <cite class="ltx_cite">[<a href="#bib.bib4" title="6D beam-beam kick including coupled motion" class="ltx_ref">7</a>]</cite>)</p>
<table id="S5.EGx50" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E112" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E112.m1" class="ltx_Math" alttext="\displaystyle\hat{U}(x,y;\hat{\Sigma}_{11},\hat{\Sigma}_{33};\theta)\equiv U(%
\hat{x},\hat{y};\hat{\Sigma}_{11},\hat{\Sigma}_{33})=-\frac{r_{p}}{\gamma_{0}}%
\int_{0}^{\infty}\frac{\exp\left(-\frac{\hat{x}^{2}}{2\hat{\Sigma}_{11}+u}-%
\frac{\hat{y}^{2}}{2\hat{\Sigma}_{33}+u}\right)}{\sqrt{2\hat{\Sigma}_{11}+u}%
\sqrt{2\hat{\Sigma}_{33}+u}}du," display="inline"><mrow><mrow><mrow><mover accent="true"><mi>U</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM609">x</mi><mo>,</mo><mi id="XM610">y</mi><mo>;</mo><msub id="XM611"><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>11</mn></msub><mo>,</mo><msub id="XM612"><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>33</mn></msub><mo>;</mo><mi id="XM613">θ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>≡</mo><mrow><mi>U</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mover accent="true" id="XM614"><mi>x</mi><mo stretchy="false">^</mo></mover><mo>,</mo><mover accent="true" id="XM615"><mi>y</mi><mo stretchy="false">^</mo></mover><mo>;</mo><msub id="XM616"><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>11</mn></msub><mo>,</mo><msub id="XM617"><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>33</mn></msub><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>r</mi><mi>p</mi></msub><msub><mi>γ</mi><mn>0</mn></msub></mfrac></mstyle><mo>⁢</mo><mrow><mstyle displaystyle="true"><msubsup><mo largeop="true" symmetric="true">∫</mo><mn>0</mn><mi mathvariant="normal">∞</mi></msubsup></mstyle><mrow><mstyle displaystyle="true"><mfrac><mrow><mi id="XM607">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM608"><mrow><mo>-</mo><mfrac><msup><mover accent="true"><mi>x</mi><mo stretchy="false">^</mo></mover><mn>2</mn></msup><mrow><mrow><mn>2</mn><mo>⁢</mo><msub><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>11</mn></msub></mrow><mo>+</mo><mi>u</mi></mrow></mfrac></mrow><mo>-</mo><mfrac><msup><mover accent="true"><mi>y</mi><mo stretchy="false">^</mo></mover><mn>2</mn></msup><mrow><mrow><mn>2</mn><mo>⁢</mo><msub><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>33</mn></msub></mrow><mo>+</mo><mi>u</mi></mrow></mfrac></mrow><mo>)</mo></mrow></mrow><mrow><msqrt><mrow><mrow><mn>2</mn><mo>⁢</mo><msub><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>11</mn></msub></mrow><mo>+</mo><mi>u</mi></mrow></msqrt><mo>⁢</mo><msqrt><mrow><mrow><mn>2</mn><mo>⁢</mo><msub><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>33</mn></msub></mrow><mo>+</mo><mi>u</mi></mrow></msqrt></mrow></mfrac></mstyle><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi>u</mi></mrow></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(112)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS8.p1.m1" class="ltx_Math" alttext="\Sigma_{ij}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi>i</mi><mo>⁢</mo><mi>j</mi></mrow></msub></math> are the elements of the <math id="S3.SS8.p1.m2" class="ltx_Math" alttext="6\times 6" display="inline"><mrow><mn>6</mn><mo>×</mo><mn>6</mn></mrow></math> phase-space envelope
matrix of the strong bunch.</p>
</div>
<div id="S3.SS8.p2" class="ltx_para">
<p class="ltx_p">To evaluate the effect of the beam-beam interaction on a test particle two
sets of transformations need to be considered. The first is a transformation
of Cartesian to accelerator coordinates and a Lorentz boost making the
collision between the bunches head-on, this is accomplished by the Lorentz
transformation given by (eq. 2.21 in <cite class="ltx_cite">[<a href="#bib.bib4" title="6D beam-beam kick including coupled motion" class="ltx_ref">7</a>]</cite>)</p>
<table id="S3.E113" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="S3.E113.m1" class="ltx_Math" alttext="\mathcal{L}=\left(\begin{array}[]{cccc}\frac{1}{\cos\phi}&amp;-\cos\alpha\sin\phi&amp;%
-\tan\phi\sin\phi&amp;-\sin\alpha\sin\phi\\
-\cos\alpha\tan\phi&amp;1&amp;\cos\alpha\tan\phi&amp;0\\
0&amp;-\cos\alpha\sin\phi&amp;\cos\phi&amp;-\sin\alpha\sin\phi\\
-\sin\alpha\tan\phi&amp;0&amp;\sin\alpha\tan\phi&amp;1\end{array}\right)," display="block"><mrow><mrow><mi class="ltx_font_mathcaligraphic">ℒ</mi><mo>=</mo><mrow><mo>(</mo><mtable displaystyle="true" id="XM618"><mtr id="XM618a"><mtd columnalign="center" id="XM618b"><mfrac><mn>1</mn><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mfrac></mtd><mtd columnalign="center" id="XM618c"><mrow><mo>-</mo><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mtd><mtd columnalign="center" id="XM618d"><mrow><mo>-</mo><mrow><mrow><mi>tan</mi><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mtd><mtd columnalign="center" id="XM618e"><mrow><mo>-</mo><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mtd></mtr><mtr id="XM618f"><mtd columnalign="center" id="XM618g"><mrow><mo>-</mo><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>tan</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mtd><mtd columnalign="center" id="XM618h"><mn>1</mn></mtd><mtd columnalign="center" id="XM618i"><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>tan</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mtd><mtd columnalign="center" id="XM618j"><mn>0</mn></mtd></mtr><mtr id="XM618k"><mtd columnalign="center" id="XM618l"><mn>0</mn></mtd><mtd columnalign="center" id="XM618m"><mrow><mo>-</mo><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mtd><mtd columnalign="center" id="XM618n"><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mtd><mtd columnalign="center" id="XM618o"><mrow><mo>-</mo><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mtd></mtr><mtr id="XM618p"><mtd columnalign="center" id="XM618q"><mrow><mo>-</mo><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>tan</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mtd><mtd columnalign="center" id="XM618r"><mn>0</mn></mtd><mtd columnalign="center" id="XM618s"><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>tan</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mtd><mtd columnalign="center" id="XM618t"><mn>1</mn></mtd></mtr></mtable><mo>)</mo></mrow></mrow><mo>,</mo></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(113)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS8.p2.m1" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math> is the crossing plane angle and <math id="S3.SS8.p2.m2" class="ltx_Math" alttext="2\phi" display="inline"><mrow><mn>2</mn><mo>⁢</mo><mi>ϕ</mi></mrow></math> is the total crossing
angle. The second set of transformations is called the Synchro-Beam Mapping
(SBM). In the SBM the test particle at the interaction point (IP) is brought
to the collision point by a drift, then the beam-beam interaction is applied
and finally the position of the test particle is brought back to the IP.</p>
</div>
<div id="S3.SS8.p3" class="ltx_para">
<p class="ltx_p">For a test particle with Lorentz transformed coordinates
<math id="S3.SS8.p3.m1" class="ltx_Math" alttext="(x^{*},p_{x}^{*},y^{*},p_{y}^{*},z^{*},p_{z}^{*})" display="inline"><mrow><mo stretchy="false">(</mo><msup id="XM619"><mi>x</mi><mo>*</mo></msup><mo>,</mo><msubsup id="XM620"><mi>p</mi><mi>x</mi><mo>*</mo></msubsup><mo>,</mo><msup id="XM621"><mi>y</mi><mo>*</mo></msup><mo>,</mo><msubsup id="XM622"><mi>p</mi><mi>y</mi><mo>*</mo></msubsup><mo>,</mo><msup id="XM623"><mi>z</mi><mo>*</mo></msup><mo>,</mo><msubsup id="XM624"><mi>p</mi><mi>z</mi><mo>*</mo></msubsup><mo stretchy="false">)</mo></mrow></math> the explicit form for the SBM is (eq. 2.65
in <cite class="ltx_cite">[<a href="#bib.bib4" title="6D beam-beam kick including coupled motion" class="ltx_ref">7</a>]</cite>)</p>
<table id="S5.EGx51" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E114" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E114.m1" class="ltx_Math" alttext="\displaystyle x^{*}" display="inline"><msup><mi>x</mi><mo>*</mo></msup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E114.m2" class="ltx_Math" alttext="\displaystyle\to x^{*}+Sn^{*}F_{x}^{*}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msup><mi>x</mi><mo>*</mo></msup><mo>+</mo><mrow><mi>S</mi><mo>⁢</mo><msup><mi>n</mi><mo>*</mo></msup><mo>⁢</mo><msubsup><mi>F</mi><mi>x</mi><mo>*</mo></msubsup></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(114)</span></td>
</tr>
<tr id="S3.E115" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E115.m1" class="ltx_Math" alttext="\displaystyle p_{x}^{*}" display="inline"><msubsup><mi>p</mi><mi>x</mi><mo>*</mo></msubsup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E115.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}^{*}-n^{*}F_{x}^{*}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msubsup><mi>p</mi><mi>x</mi><mo>*</mo></msubsup><mo>-</mo><mrow><msup><mi>n</mi><mo>*</mo></msup><mo>⁢</mo><msubsup><mi>F</mi><mi>x</mi><mo>*</mo></msubsup></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(115)</span></td>
</tr>
<tr id="S3.E116" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E116.m1" class="ltx_Math" alttext="\displaystyle y^{*}" display="inline"><msup><mi>y</mi><mo>*</mo></msup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E116.m2" class="ltx_Math" alttext="\displaystyle\to y^{*}+Sn^{*}F_{y}^{*}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msup><mi>y</mi><mo>*</mo></msup><mo>+</mo><mrow><mi>S</mi><mo>⁢</mo><msup><mi>n</mi><mo>*</mo></msup><mo>⁢</mo><msubsup><mi>F</mi><mi>y</mi><mo>*</mo></msubsup></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(116)</span></td>
</tr>
<tr id="S3.E117" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E117.m1" class="ltx_Math" alttext="\displaystyle p_{y}^{*}" display="inline"><msubsup><mi>p</mi><mi>y</mi><mo>*</mo></msubsup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E117.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}^{*}-n^{*}F_{y}^{*}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msubsup><mi>p</mi><mi>y</mi><mo>*</mo></msubsup><mo>-</mo><mrow><msup><mi>n</mi><mo>*</mo></msup><mo>⁢</mo><msubsup><mi>F</mi><mi>y</mi><mo>*</mo></msubsup></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(117)</span></td>
</tr>
<tr id="S3.E118" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E118.m1" class="ltx_Math" alttext="\displaystyle p_{z}^{*}" display="inline"><msubsup><mi>p</mi><mi>z</mi><mo>*</mo></msubsup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E118.m2" class="ltx_Math" alttext="\displaystyle\to p_{z}^{*}-n^{*}F_{z}^{*}-\frac{1}{2}\left[n^{*}F_{x}^{*}(p_{x%
}^{*}-\frac{1}{2}n^{*}F_{x}^{*})+n^{*}F_{y}^{*}(p_{y}^{*}-\frac{1}{2}n^{*}F_{y%
}^{*})\right]," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><msubsup><mi>p</mi><mi>z</mi><mo>*</mo></msubsup><mo>-</mo><mrow><msup><mi>n</mi><mo>*</mo></msup><mo>⁢</mo><msubsup><mi>F</mi><mi>z</mi><mo>*</mo></msubsup></mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM630"><mrow><msup><mi>n</mi><mo>*</mo></msup><mo>⁢</mo><msubsup><mi>F</mi><mi>x</mi><mo>*</mo></msubsup><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM628"><msubsup><mi>p</mi><mi>x</mi><mo>*</mo></msubsup><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><msup><mi>n</mi><mo>*</mo></msup><mo>⁢</mo><msubsup><mi>F</mi><mi>x</mi><mo>*</mo></msubsup></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><msup><mi>n</mi><mo>*</mo></msup><mo>⁢</mo><msubsup><mi>F</mi><mi>y</mi><mo>*</mo></msubsup><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM629"><msubsup><mi>p</mi><mi>y</mi><mo>*</mo></msubsup><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><msup><mi>n</mi><mo>*</mo></msup><mo>⁢</mo><msubsup><mi>F</mi><mi>y</mi><mo>*</mo></msubsup></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>]</mo></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(118)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS8.p3.m2" class="ltx_Math" alttext="n^{*}" display="inline"><msup><mi>n</mi><mo>*</mo></msup></math> is the number of particles in the slice <math id="S3.SS8.p3.m3" class="ltx_Math" alttext="S" display="inline"><mi>S</mi></math> is the distance between
a test particle and the strong bunch and</p>
<table id="S5.EGx52" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E119" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E119.m1" class="ltx_Math" alttext="\displaystyle F_{x}^{*}" display="inline"><msubsup><mi>F</mi><mi>x</mi><mo>*</mo></msubsup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E119.m2" class="ltx_Math" alttext="\displaystyle=\frac{\partial}{\partial\bar{x}^{*}}\hat{U}(\bar{x}^{*},\bar{y}^%
{*};\hat{\Sigma}_{11}(\varphi),\hat{\Sigma}_{33}(\varphi);\theta(\varphi))" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mo>∂</mo><mrow><mo>∂</mo><mo>⁡</mo><msup><mover accent="true"><mi>x</mi><mo stretchy="false">¯</mo></mover><mo>*</mo></msup></mrow></mfrac></mstyle><mo>⁢</mo><mover accent="true"><mi>U</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msup id="XM642"><mover accent="true"><mi>x</mi><mo stretchy="false">¯</mo></mover><mo>*</mo></msup><mo>,</mo><msup id="XM643"><mover accent="true"><mi>y</mi><mo stretchy="false">¯</mo></mover><mo>*</mo></msup><mo>;</mo><mrow id="XM644"><msub><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>11</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM639">φ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>,</mo><mrow id="XM645"><msub><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>33</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM640">φ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>;</mo><mrow id="XM646"><mi>θ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM641">φ</mi><mo stretchy="false">)</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(119)</span></td>
</tr>
<tr id="S3.E120" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E120.m1" class="ltx_Math" alttext="\displaystyle F_{y}^{*}" display="inline"><msubsup><mi>F</mi><mi>y</mi><mo>*</mo></msubsup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E120.m2" class="ltx_Math" alttext="\displaystyle=\frac{\partial}{\partial\bar{y}^{*}}\hat{U}(\bar{x}^{*},\bar{y}^%
{*};\hat{\Sigma}_{11}(\varphi),\hat{\Sigma}_{33}(\varphi);\theta(\varphi))" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mo>∂</mo><mrow><mo>∂</mo><mo>⁡</mo><msup><mover accent="true"><mi>y</mi><mo stretchy="false">¯</mo></mover><mo>*</mo></msup></mrow></mfrac></mstyle><mo>⁢</mo><mover accent="true"><mi>U</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msup id="XM658"><mover accent="true"><mi>x</mi><mo stretchy="false">¯</mo></mover><mo>*</mo></msup><mo>,</mo><msup id="XM659"><mover accent="true"><mi>y</mi><mo stretchy="false">¯</mo></mover><mo>*</mo></msup><mo>;</mo><mrow id="XM660"><msub><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>11</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM655">φ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>,</mo><mrow id="XM661"><msub><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>33</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM656">φ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>;</mo><mrow id="XM662"><mi>θ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM657">φ</mi><mo stretchy="false">)</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(120)</span></td>
</tr>
<tr id="S3.E121" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E121.m1" class="ltx_Math" alttext="\displaystyle F_{z}^{*}" display="inline"><msubsup><mi>F</mi><mi>z</mi><mo>*</mo></msubsup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E121.m2" class="ltx_Math" alttext="\displaystyle=\frac{\partial}{\partial\bar{z}^{*}}\hat{U}(\bar{x}^{*},\bar{y}^%
{*};\hat{\Sigma}_{11}(\varphi),\hat{\Sigma}_{33}(\varphi);\theta(\varphi))," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mo>∂</mo><mrow><mo>∂</mo><mo>⁡</mo><msup><mover accent="true"><mi>z</mi><mo stretchy="false">¯</mo></mover><mo>*</mo></msup></mrow></mfrac></mstyle><mo>⁢</mo><mover accent="true"><mi>U</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msup id="XM674"><mover accent="true"><mi>x</mi><mo stretchy="false">¯</mo></mover><mo>*</mo></msup><mo>,</mo><msup id="XM675"><mover accent="true"><mi>y</mi><mo stretchy="false">¯</mo></mover><mo>*</mo></msup><mo>;</mo><mrow id="XM676"><msub><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>11</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM671">φ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>,</mo><mrow id="XM677"><msub><mover accent="true"><mi mathvariant="normal">Σ</mi><mo stretchy="false">^</mo></mover><mn>33</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM672">φ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>;</mo><mrow id="XM678"><mi>θ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM673">φ</mi><mo stretchy="false">)</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(121)</span></td>
</tr>
</table>
<p class="ltx_p">which are calculated from the expression for <math id="S3.SS8.p3.m4" class="ltx_Math" alttext="\hat{U}" display="inline"><mover accent="true"><mi>U</mi><mo stretchy="false">^</mo></mover></math> given above. Finally the
inverse Lorentz transformation <math id="S3.SS8.p3.m5" class="ltx_Math" alttext="\mathcal{L}^{-1}" display="inline"><msup><mi class="ltx_font_mathcaligraphic">ℒ</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></math> is applied to the SBM transformed
coordinates.</p>
</div>
</section>
<section id="S3.SS9" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.9 </span>Beam-beam element</h3>
<div id="S3.SS9.p1" class="ltx_para">
<p class="ltx_p">In the following, <math id="S3.SS9.p1.m1" class="ltx_Math" alttext="r_{e}" display="inline"><msub><mi>r</mi><mi>e</mi></msub></math> is the classical electron radius and <math id="S3.SS9.p1.m2" class="ltx_Math" alttext="S" display="inline"><mi>S</mi></math> is the strength ratio with respect to the nominal beam-beam kick strength. The maps below assumes no linear coupling between the transverse planes.</p>
</div>
<section id="S3.SS9.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.9.1 </span>Round beam</h4>
<div id="S3.SS9.SSS1.p1" class="ltx_para">
<p class="ltx_p">Definitions
</p>
<table id="S5.EGx53" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E122" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E122.m1" class="ltx_Math" alttext="\displaystyle r_{x}" display="inline"><msub><mi>r</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E122.m2" class="ltx_Math" alttext="\displaystyle=x-x_{\text{co}}+x_{\text{sep}}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>x</mi><mo>-</mo><msub><mi>x</mi><mtext>co</mtext></msub></mrow><mo>+</mo><msub><mi>x</mi><mtext>sep</mtext></msub></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(122)</span></td>
</tr>
<tr id="S3.E123" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E123.m1" class="ltx_Math" alttext="\displaystyle r_{y}" display="inline"><msub><mi>r</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E123.m2" class="ltx_Math" alttext="\displaystyle=y-y_{\text{co}}+y_{\text{sep}}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>y</mi><mo>-</mo><msub><mi>y</mi><mtext>co</mtext></msub></mrow><mo>+</mo><msub><mi>y</mi><mtext>sep</mtext></msub></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(123)</span></td>
</tr>
<tr id="S3.E124" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E124.m1" class="ltx_Math" alttext="\displaystyle r^{2}" display="inline"><msup><mi>r</mi><mn>2</mn></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E124.m2" class="ltx_Math" alttext="\displaystyle=r_{x}^{2}+r_{y}^{2}." display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><msubsup><mi>r</mi><mi>x</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>r</mi><mi>y</mi><mn>2</mn></msubsup></mrow></mrow><mo>.</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(124)</span></td>
</tr>
</table>
<p class="ltx_p">The kick is</p>
<table id="S5.EGx54" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E125" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E125.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E125.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}+r_{e}\cdot S\cdot\frac{r_{x}}{r^{2}}\left[1-\exp\left(%
\frac{r^{2}}{2\sigma^{2}}\right)\right]-\text{beamoff(4)}," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>+</mo><mrow><mrow><msub><mi>r</mi><mi>e</mi></msub><mo>⋅</mo><mi>S</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>r</mi><mi>x</mi></msub><msup><mi>r</mi><mn>2</mn></msup></mfrac></mstyle></mrow><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM684"><mn>1</mn><mo>-</mo><mrow><mi id="XM682">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mstyle displaystyle="true" id="XM683"><mfrac id="XM683a"><msup><mi>r</mi><mn>2</mn></msup><mrow><mn>2</mn><mo>⁢</mo><msup><mi>σ</mi><mn>2</mn></msup></mrow></mfrac></mstyle><mo>)</mo></mrow></mrow></mrow><mo>]</mo></mrow></mrow></mrow><mo>-</mo><mtext>beamoff(4)</mtext></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(125)</span></td>
</tr>
<tr id="S3.E126" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E126.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E126.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}+r_{e}\cdot S\cdot\frac{r_{y}}{r^{2}}\left[1-\exp\left(%
\frac{r^{2}}{2\sigma^{2}}\right)\right]-\text{beamoff(5)}." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>+</mo><mrow><mrow><msub><mi>r</mi><mi>e</mi></msub><mo>⋅</mo><mi>S</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>r</mi><mi>y</mi></msub><msup><mi>r</mi><mn>2</mn></msup></mfrac></mstyle></mrow><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM690"><mn>1</mn><mo>-</mo><mrow><mi id="XM688">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mstyle displaystyle="true" id="XM689"><mfrac id="XM689a"><msup><mi>r</mi><mn>2</mn></msup><mrow><mn>2</mn><mo>⁢</mo><msup><mi>σ</mi><mn>2</mn></msup></mrow></mfrac></mstyle><mo>)</mo></mrow></mrow></mrow><mo>]</mo></mrow></mrow></mrow><mo>-</mo><mtext>beamoff(5)</mtext></mrow></mrow><mo>.</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(126)</span></td>
</tr>
</table>
</div>
</section>
<section id="S3.SS9.SSS2" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.9.2 </span>Elliptical beam</h4>
<div id="S3.SS9.SSS2.p1" class="ltx_para">
<p class="ltx_p">For this map, it is assumed that <math id="S3.SS9.SSS2.p1.m1" class="ltx_Math" alttext="x&gt;y" display="inline"><mrow><mi>x</mi><mo>&gt;</mo><mi>y</mi></mrow></math> (i.e. the horizontal extension of the beam is larger than the vertical extension.) For the reverse case, <math id="S3.SS9.SSS2.p1.m2" class="ltx_Math" alttext="y&gt;x" display="inline"><mrow><mi>y</mi><mo>&gt;</mo><mi>x</mi></mrow></math>, interchange <math id="S3.SS9.SSS2.p1.m3" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math> and <math id="S3.SS9.SSS2.p1.m4" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math> in the map.</p>
<table id="S5.EGx55" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E127" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E127.m1" class="ltx_Math" alttext="\displaystyle r_{x}" display="inline"><msub><mi>r</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E127.m2" class="ltx_Math" alttext="\displaystyle=x-x_{\text{co}}+x_{\text{sep}}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>x</mi><mo>-</mo><msub><mi>x</mi><mtext>co</mtext></msub></mrow><mo>+</mo><msub><mi>x</mi><mtext>sep</mtext></msub></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(127)</span></td>
</tr>
<tr id="S3.E128" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E128.m1" class="ltx_Math" alttext="\displaystyle r_{y}" display="inline"><msub><mi>r</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E128.m2" class="ltx_Math" alttext="\displaystyle=y-y_{\text{co}}+y_{\text{sep}}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>y</mi><mo>-</mo><msub><mi>y</mi><mtext>co</mtext></msub></mrow><mo>+</mo><msub><mi>y</mi><mtext>sep</mtext></msub></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(128)</span></td>
</tr>
<tr id="S3.E129" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E129.m1" class="ltx_Math" alttext="\displaystyle\bar{\sigma}" display="inline"><mover accent="true"><mi>σ</mi><mo stretchy="false">¯</mo></mover></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E129.m2" class="ltx_Math" alttext="\displaystyle=\sqrt{2(\sigma_{x}^{2}-\sigma_{y}^{2})}." display="inline"><mrow><mrow><mi></mi><mo>=</mo><msqrt><mrow><mn>2</mn><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM692"><msubsup><mi>σ</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>σ</mi><mi>y</mi><mn>2</mn></msubsup></mrow><mo stretchy="false">)</mo></mrow></mrow></msqrt></mrow><mo>.</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(129)</span></td>
</tr>
</table>
<p class="ltx_p">The kick is</p>
<table id="S5.EGx56" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E130" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E130.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E130.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}+\operatorname{sgn}(r_{x})\left[r_{e}\cdot S\frac{\sqrt{%
\pi}}{\bar{\sigma}}\left(\operatorname{erf}\left(\frac{|r_{y}|}{\bar{\sigma}}%
\right)-\exp\left(-\frac{1}{2}\left[\frac{r_{x}^{2}}{\sigma_{x}^{2}}+\frac{r_{%
y}^{2}}{\sigma_{y}^{2}}\right]\right)\operatorname{erf}\left(\frac{\sigma_{x}}%
{\sigma_{y}}\frac{|r_{y}|}{\bar{\sigma}}\right)\right)\right]-\text{beamoff(4)}," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>+</mo><mrow><mrow><mo>sgn</mo><mo>⁡</mo><mrow><mo stretchy="false">(</mo><msub id="XM709"><mi>r</mi><mi>x</mi></msub><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM718"><mrow><msub><mi>r</mi><mi>e</mi></msub><mo>⋅</mo><mi>S</mi></mrow><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msqrt><mi>π</mi></msqrt><mover accent="true"><mi>σ</mi><mo stretchy="false">¯</mo></mover></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM717"><mrow><mo>erf</mo><mo>⁡</mo><mrow><mo>(</mo><mstyle displaystyle="true" id="XM711"><mfrac id="XM711a"><mrow><mo stretchy="false">|</mo><msub id="XM706"><mi>r</mi><mi>y</mi></msub><mo stretchy="false">|</mo></mrow><mover accent="true"><mi>σ</mi><mo stretchy="false">¯</mo></mover></mfrac></mstyle><mo>)</mo></mrow></mrow><mo>-</mo><mrow><mrow><mi id="XM713">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM714"><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM712"><mstyle displaystyle="true"><mfrac><msubsup><mi>r</mi><mi>x</mi><mn>2</mn></msubsup><msubsup><mi>σ</mi><mi>x</mi><mn>2</mn></msubsup></mfrac></mstyle><mo>+</mo><mstyle displaystyle="true"><mfrac><msubsup><mi>r</mi><mi>y</mi><mn>2</mn></msubsup><msubsup><mi>σ</mi><mi>y</mi><mn>2</mn></msubsup></mfrac></mstyle></mrow><mo>]</mo></mrow></mrow></mrow><mo>)</mo></mrow></mrow><mo>⁢</mo><mrow><mo>erf</mo><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM716"><mstyle displaystyle="true"><mfrac><msub><mi>σ</mi><mi>x</mi></msub><msub><mi>σ</mi><mi>y</mi></msub></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mo stretchy="false">|</mo><msub id="XM707"><mi>r</mi><mi>y</mi></msub><mo stretchy="false">|</mo></mrow><mover accent="true"><mi>σ</mi><mo stretchy="false">¯</mo></mover></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mo>)</mo></mrow></mrow><mo>]</mo></mrow></mrow></mrow><mo>-</mo><mtext>beamoff(4)</mtext></mrow></mrow><mo>,</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(130)</span></td>
</tr>
<tr id="S3.E131" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E131.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E131.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}+\operatorname{sgn}(r_{y})\left[r_{e}\cdot S\frac{\sqrt{%
\pi}}{\bar{\sigma}}\left(\operatorname{erf}\left(\frac{|r_{x}|}{\bar{\sigma}}%
\right)-\exp\left(-\frac{1}{2}\left[\frac{r_{x}^{2}}{\sigma_{x}^{2}}+\frac{r_{%
y}^{2}}{\sigma_{y}^{2}}\right]\right)\operatorname{erf}\left(\frac{\sigma_{y}}%
{\sigma_{x}}\frac{|r_{x}|}{\bar{\sigma}}\right)\right)\right]-\text{beamoff(5)}." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>+</mo><mrow><mrow><mo>sgn</mo><mo>⁡</mo><mrow><mo stretchy="false">(</mo><msub id="XM735"><mi>r</mi><mi>y</mi></msub><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM744"><mrow><msub><mi>r</mi><mi>e</mi></msub><mo>⋅</mo><mi>S</mi></mrow><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msqrt><mi>π</mi></msqrt><mover accent="true"><mi>σ</mi><mo stretchy="false">¯</mo></mover></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM743"><mrow><mo>erf</mo><mo>⁡</mo><mrow><mo>(</mo><mstyle displaystyle="true" id="XM737"><mfrac id="XM737a"><mrow><mo stretchy="false">|</mo><msub id="XM732"><mi>r</mi><mi>x</mi></msub><mo stretchy="false">|</mo></mrow><mover accent="true"><mi>σ</mi><mo stretchy="false">¯</mo></mover></mfrac></mstyle><mo>)</mo></mrow></mrow><mo>-</mo><mrow><mrow><mi id="XM739">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM740"><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM738"><mstyle displaystyle="true"><mfrac><msubsup><mi>r</mi><mi>x</mi><mn>2</mn></msubsup><msubsup><mi>σ</mi><mi>x</mi><mn>2</mn></msubsup></mfrac></mstyle><mo>+</mo><mstyle displaystyle="true"><mfrac><msubsup><mi>r</mi><mi>y</mi><mn>2</mn></msubsup><msubsup><mi>σ</mi><mi>y</mi><mn>2</mn></msubsup></mfrac></mstyle></mrow><mo>]</mo></mrow></mrow></mrow><mo>)</mo></mrow></mrow><mo>⁢</mo><mrow><mo>erf</mo><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM742"><mstyle displaystyle="true"><mfrac><msub><mi>σ</mi><mi>y</mi></msub><msub><mi>σ</mi><mi>x</mi></msub></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mo stretchy="false">|</mo><msub id="XM733"><mi>r</mi><mi>x</mi></msub><mo stretchy="false">|</mo></mrow><mover accent="true"><mi>σ</mi><mo stretchy="false">¯</mo></mover></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mo>)</mo></mrow></mrow><mo>]</mo></mrow></mrow></mrow><mo>-</mo><mtext>beamoff(5)</mtext></mrow></mrow><mo>.</mo></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(131)</span></td>
</tr>
</table>
</div>
</section>
</section>
<section id="S3.SS10" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.10 </span>Hirata’s beam-beam element</h3>
<div id="S3.SS10.p1" class="ltx_para">
<p class="ltx_p">Initial transformation of coordinates.</p>
<table id="S5.EGx57" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E132" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E132.m1" class="ltx_Math" alttext="\displaystyle x_{i}" display="inline"><msub><mi>x</mi><mi>i</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E132.m2" class="ltx_Math" alttext="\displaystyle\to(x+dx)-x_{\text{co}}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM746"><mi>x</mi><mo>+</mo><mrow><mi>d</mi><mo>⁢</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>-</mo><msub><mi>x</mi><mtext>co</mtext></msub></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(132)</span></td>
</tr>
<tr id="S3.E133" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E133.m1" class="ltx_Math" alttext="\displaystyle p_{x,i}" display="inline"><msub><mi>p</mi><mrow><mi id="XM751">x</mi><mo>,</mo><mi id="XM752">i</mi></mrow></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E133.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}-p_{x,\text{co}}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><msub><mi>p</mi><mrow><mi id="XM753">x</mi><mo>,</mo><mtext id="XM754">co</mtext></mrow></msub></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(133)</span></td>
</tr>
<tr id="S3.E134" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E134.m1" class="ltx_Math" alttext="\displaystyle y_{i}" display="inline"><msub><mi>y</mi><mi>i</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E134.m2" class="ltx_Math" alttext="\displaystyle\to(y+dy)-y_{\text{co}}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM756"><mi>y</mi><mo>+</mo><mrow><mi>d</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>-</mo><msub><mi>y</mi><mtext>co</mtext></msub></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(134)</span></td>
</tr>
<tr id="S3.E135" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E135.m1" class="ltx_Math" alttext="\displaystyle p_{y,i}" display="inline"><msub><mi>p</mi><mrow><mi id="XM761">y</mi><mo>,</mo><mi id="XM762">i</mi></mrow></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E135.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}-p_{y,\text{co}}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>-</mo><msub><mi>p</mi><mrow><mi id="XM763">y</mi><mo>,</mo><mtext id="XM764">co</mtext></mrow></msub></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(135)</span></td>
</tr>
<tr id="S3.E136" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E136.m1" class="ltx_Math" alttext="\displaystyle\sigma_{i}" display="inline"><msub><mi>σ</mi><mi>i</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E136.m2" class="ltx_Math" alttext="\displaystyle\to\sigma-\sigma_{\text{co}}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>σ</mi><mo>-</mo><msub><mi>σ</mi><mtext>co</mtext></msub></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(136)</span></td>
</tr>
<tr id="S3.E137" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E137.m1" class="ltx_Math" alttext="\displaystyle\delta_{i}" display="inline"><msub><mi>δ</mi><mi>i</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E137.m2" class="ltx_Math" alttext="\displaystyle\to\delta-\delta_{\text{co}}." display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mi>δ</mi><mo>-</mo><msub><mi>δ</mi><mtext>co</mtext></msub></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(137)</span></td>
</tr>
</table>
</div>
<div id="S3.SS10.p2" class="ltx_para">
<p class="ltx_p">Lorentz boost. <math id="S3.SS10.p2.m1" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math> is the crossing plane angle and <math id="S3.SS10.p2.m2" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math> is the half crossing angle. The particle has initial coordinates <math id="S3.SS10.p2.m3" class="ltx_Math" alttext="(x^{i},p_{x}^{i},y^{i},p_{y}^{i},\sigma^{i},\delta^{i})" display="inline"><mrow><mo stretchy="false">(</mo><msup id="XM765"><mi>x</mi><mi>i</mi></msup><mo>,</mo><msubsup id="XM766"><mi>p</mi><mi>x</mi><mi>i</mi></msubsup><mo>,</mo><msup id="XM767"><mi>y</mi><mi>i</mi></msup><mo>,</mo><msubsup id="XM768"><mi>p</mi><mi>y</mi><mi>i</mi></msubsup><mo>,</mo><msup id="XM769"><mi>σ</mi><mi>i</mi></msup><mo>,</mo><msup id="XM770"><mi>δ</mi><mi>i</mi></msup><mo stretchy="false">)</mo></mrow></math>.
We define <math id="S3.SS10.p2.m4" class="ltx_Math" alttext="h=(1+\delta^{i})-\sqrt{(1+\delta^{i})^{2}-(p_{x}^{i})^{2}-(p_{y}^{i})^{2}}" display="inline"><mrow><mi>h</mi><mo>=</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM774"><mn>1</mn><mo>+</mo><msup><mi>δ</mi><mi>i</mi></msup></mrow><mo stretchy="false">)</mo></mrow><mo>-</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM771"><mn>1</mn><mo>+</mo><msup><mi>δ</mi><mi>i</mi></msup></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msup><mrow><mo stretchy="false">(</mo><msubsup id="XM772"><mi>p</mi><mi>x</mi><mi>i</mi></msubsup><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msup><mrow><mo stretchy="false">(</mo><msubsup id="XM773"><mi>p</mi><mi>y</mi><mi>i</mi></msubsup><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow></msqrt></mrow></mrow></math>. <math id="S3.SS10.p2.m5" class="ltx_Math" alttext="p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math> is computed with the most recent values of <math id="S3.SS10.p2.m6" class="ltx_Math" alttext="\delta" display="inline"><mi>δ</mi></math>, <math id="S3.SS10.p2.m7" class="ltx_Math" alttext="p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math> and <math id="S3.SS10.p2.m8" class="ltx_Math" alttext="p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>.</p>
<table id="S5.EGx58" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E138" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E138.m1" class="ltx_Math" alttext="\displaystyle\delta" display="inline"><mi>δ</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E138.m2" class="ltx_Math" alttext="\displaystyle\to\delta^{i}-\cos\alpha\tan\phi\cdot p_{x}^{i}-\sin\alpha\tan%
\phi\cdot p_{y}^{i}+h\cdot\tan^{2}\phi" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msup><mi>δ</mi><mi>i</mi></msup><mo>-</mo><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>tan</mi><mo>⁡</mo><mrow><mi>ϕ</mi><mo>⋅</mo><msubsup><mi>p</mi><mi>x</mi><mi>i</mi></msubsup></mrow></mrow></mrow><mo>-</mo><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>tan</mi><mo>⁡</mo><mrow><mi>ϕ</mi><mo>⋅</mo><msubsup><mi>p</mi><mi>y</mi><mi>i</mi></msubsup></mrow></mrow></mrow></mrow><mo>+</mo><mrow><mi>h</mi><mo>⋅</mo><mrow><msup><mi>tan</mi><mn>2</mn></msup><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(138)</span></td>
</tr>
<tr id="S3.E139" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E139.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E139.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}^{i}\frac{1}{\cos\phi}\left(p_{x}^{i}-\tan\phi\cos\alpha%
\cdot h\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msubsup><mi>p</mi><mi>x</mi><mi>i</mi></msubsup><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM776"><msubsup><mi>p</mi><mi>x</mi><mi>i</mi></msubsup><mo>-</mo><mrow><mrow><mi>tan</mi><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mrow><mi>α</mi><mo>⋅</mo><mi>h</mi></mrow></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(139)</span></td>
</tr>
<tr id="S3.E140" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E140.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E140.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}^{i}\frac{1}{\cos\phi}\left(p_{y}^{i}-\tan\phi\sin\alpha%
\cdot h\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msubsup><mi>p</mi><mi>y</mi><mi>i</mi></msubsup><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM778"><msubsup><mi>p</mi><mi>y</mi><mi>i</mi></msubsup><mo>-</mo><mrow><mrow><mi>tan</mi><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mrow><mi>α</mi><mo>⋅</mo><mi>h</mi></mrow></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(140)</span></td>
</tr>
<tr id="S3.E141" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E141.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E141.m2" class="ltx_Math" alttext="\displaystyle\to\frac{\sigma^{i}}{\cos\phi}+\left(1-\frac{1+\delta}{p_{z}}%
\right)\left(\sin\phi\cos\alpha\cdot x^{i}+\sin\phi\sin\alpha\cdot y^{i}\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mstyle displaystyle="true"><mfrac><msup><mi>σ</mi><mi>i</mi></msup><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mfrac></mstyle><mo>+</mo><mrow><mrow><mo>(</mo><mrow id="XM781"><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM782"><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mrow><mi>α</mi><mo>⋅</mo><msup><mi>x</mi><mi>i</mi></msup></mrow></mrow></mrow><mo>+</mo><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mrow><mi>α</mi><mo>⋅</mo><msup><mi>y</mi><mi>i</mi></msup></mrow></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(141)</span></td>
</tr>
<tr id="S3.E142" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E142.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E142.m2" class="ltx_Math" alttext="\displaystyle\to\cos\alpha\tan\phi\cdot\sigma+\left(1+\cos\alpha\sin\phi\frac{%
p_{x}}{p_{z}}\right)\cdot x^{i}+\sin\alpha\sin\phi\frac{p_{x}}{p_{z}}\cdot y^{i}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>tan</mi><mo>⁡</mo><mrow><mi>ϕ</mi><mo>⋅</mo><mi>σ</mi></mrow></mrow></mrow><mo>+</mo><mrow><mrow><mo>(</mo><mrow id="XM784"><mn>1</mn><mo>+</mo><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mrow><mi>ϕ</mi><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow></mrow></mrow></mrow><mo>)</mo></mrow><mo>⋅</mo><msup><mi>x</mi><mi>i</mi></msup></mrow><mo>+</mo><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mrow><mrow><mi>ϕ</mi><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>⋅</mo><msup><mi>y</mi><mi>i</mi></msup></mrow></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(142)</span></td>
</tr>
<tr id="S3.E143" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E143.m1" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E143.m2" class="ltx_Math" alttext="\displaystyle\to\sin\alpha\tan\phi\cdot\sigma+\left(1+\sin\alpha\sin\phi\frac{%
p_{y}}{p_{z}}\right)\cdot y^{i}+\cos\alpha\sin\phi\frac{p_{y}}{p_{z}}\cdot x^{i}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>tan</mi><mo>⁡</mo><mrow><mi>ϕ</mi><mo>⋅</mo><mi>σ</mi></mrow></mrow></mrow><mo>+</mo><mrow><mrow><mo>(</mo><mrow id="XM786"><mn>1</mn><mo>+</mo><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mrow><mi>ϕ</mi><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow></mrow></mrow></mrow><mo>)</mo></mrow><mo>⋅</mo><msup><mi>y</mi><mi>i</mi></msup></mrow><mo>+</mo><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mrow><mrow><mi>ϕ</mi><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>⋅</mo><msup><mi>x</mi><mi>i</mi></msup></mrow></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(143)</span></td>
</tr>
</table>
</div>
<div id="S3.SS10.p3" class="ltx_para">
<p class="ltx_p">Inverse Lorentz boost. We define the determinat of the inverse Lorentz transformation matrix as</p>
<table id="S5.EGx59" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E144" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E144.m1" class="ltx_Math" alttext="\displaystyle D" display="inline"><mi>D</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E144.m2" class="ltx_Math" alttext="\displaystyle=\frac{1}{\cos\phi}+\tan\phi\left[\frac{p_{x}^{i}}{p_{z}}\cos%
\alpha+\frac{p_{y}^{i}}{p_{z}}\sin\alpha-\left(1-\frac{1+\delta^{i}}{p_{z}}%
\right)\sin\phi\right]." display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mfrac></mstyle><mo>+</mo><mrow><mrow><mi>tan</mi><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM792"><mrow><mrow><mstyle displaystyle="true"><mfrac><msubsup><mi>p</mi><mi>x</mi><mi>i</mi></msubsup><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><mfrac><msubsup><mi>p</mi><mi>y</mi><mi>i</mi></msubsup><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow></mrow></mrow><mo>-</mo><mrow><mrow><mo>(</mo><mrow id="XM791"><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><msup><mi>δ</mi><mi>i</mi></msup></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow><mo>]</mo></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(144)</span></td>
</tr>
</table>
</div>
<div id="S3.SS10.p4" class="ltx_para">
<table id="S5.EGx60" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E145" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E145.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E145.m2" class="ltx_Math" alttext="\displaystyle\to\frac{1}{D}\bigg[x\left(\frac{1}{\cos\phi}+\sin\alpha\tan\phi%
\left(\frac{p_{y}}{p_{z}}-\sin\alpha\sin\phi\left(1-\frac{1+\delta}{p_{z}}%
\right)\right)\right)" display="inline"><mrow><mo>→</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mi>D</mi></mfrac></mstyle><mrow><mo maxsize="210%" minsize="210%">[</mo><mi>x</mi><mrow><mo>(</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mfrac></mstyle><mo>+</mo><mi>sin</mi><mi>α</mi><mi>tan</mi><mi>ϕ</mi><mrow><mo>(</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>-</mo><mi>sin</mi><mi>α</mi><mi>sin</mi><mi>ϕ</mi><mrow><mo>(</mo><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>)</mo></mrow><mo>)</mo></mrow><mo>)</mo></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(145)</span></td>
</tr>
<tr id="S3.E146" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E146.m2" class="ltx_Math" alttext="\displaystyle\qquad\qquad+y\sin\alpha\tan\phi\left(\left(1-\frac{1+\delta}{p_{%
z}}\right)\cos\alpha\sin\phi-\frac{p_{x}}{p_{z}}\right)" display="inline"><mrow><mi id="XM825">  </mi><mo mathvariant="italic" separator="true">  </mo><mrow id="XM826"><mo>+</mo><mrow><mi>y</mi><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>tan</mi><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM824"><mrow><mrow><mo>(</mo><mrow id="XM823"><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(146)</span></td>
</tr>
<tr id="S3.E147" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E147.m2" class="ltx_Math" alttext="\displaystyle\qquad\qquad-\sigma\tan\phi\left(\cos\alpha+\sin\phi\cos\alpha%
\sin\alpha\frac{p_{y}}{p_{z}}-\sin^{2}\alpha\sin\phi\frac{p_{x}}{p_{z}}\right)\bigg]" display="inline"><mrow><mi id="XM831">  </mi><mo mathvariant="italic" separator="true">  </mo><mo>-</mo><mi>σ</mi><mi>tan</mi><mi>ϕ</mi><mrow><mo>(</mo><mi>cos</mi><mi>α</mi><mo>+</mo><mi>sin</mi><mi>ϕ</mi><mi>cos</mi><mi>α</mi><mi>sin</mi><mi>α</mi><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>-</mo><msup><mi>sin</mi><mn>2</mn></msup><mi>α</mi><mi>sin</mi><mi>ϕ</mi><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>)</mo></mrow><mo maxsize="210%" minsize="210%">]</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(147)</span></td>
</tr>
<tr id="S3.E148" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E148.m1" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E148.m2" class="ltx_Math" alttext="\displaystyle\to\frac{1}{D}\bigg[y\left(\frac{1}{\cos\phi}+\cos\alpha\tan\phi%
\left(\frac{p_{x}}{p_{z}}-\cos\alpha\sin\phi\left(1-\frac{1+\delta}{p_{z}}%
\right)\right)\right)" display="inline"><mrow><mo>→</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mi>D</mi></mfrac></mstyle><mrow><mo maxsize="210%" minsize="210%">[</mo><mi>y</mi><mrow><mo>(</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mfrac></mstyle><mo>+</mo><mi>cos</mi><mi>α</mi><mi>tan</mi><mi>ϕ</mi><mrow><mo>(</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>-</mo><mi>cos</mi><mi>α</mi><mi>sin</mi><mi>ϕ</mi><mrow><mo>(</mo><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>)</mo></mrow><mo>)</mo></mrow><mo>)</mo></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(148)</span></td>
</tr>
<tr id="S3.E149" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E149.m2" class="ltx_Math" alttext="\displaystyle\qquad\qquad+y\cos\alpha\tan\phi\left(\left(1-\frac{1+\delta}{p_{%
z}}\right)\sin\alpha\sin\phi-\frac{p_{y}}{p_{z}}\right)" display="inline"><mrow><mi id="XM865">  </mi><mo mathvariant="italic" separator="true">  </mo><mrow id="XM866"><mo>+</mo><mrow><mi>y</mi><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>tan</mi><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM864"><mrow><mrow><mo>(</mo><mrow id="XM863"><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>)</mo></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(149)</span></td>
</tr>
<tr id="S3.E150" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E150.m2" class="ltx_Math" alttext="\displaystyle\qquad\qquad-\sigma\tan\phi\left(\sin\alpha+\sin\phi\cos\alpha%
\sin\alpha\frac{p_{x}}{p_{z}}-\cos^{2}\alpha\sin\phi\frac{p_{y}}{p_{z}}\right)\bigg]" display="inline"><mrow><mi id="XM871">  </mi><mo mathvariant="italic" separator="true">  </mo><mo>-</mo><mi>σ</mi><mi>tan</mi><mi>ϕ</mi><mrow><mo>(</mo><mi>sin</mi><mi>α</mi><mo>+</mo><mi>sin</mi><mi>ϕ</mi><mi>cos</mi><mi>α</mi><mi>sin</mi><mi>α</mi><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>-</mo><msup><mi>cos</mi><mn>2</mn></msup><mi>α</mi><mi>sin</mi><mi>ϕ</mi><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>)</mo></mrow><mo maxsize="210%" minsize="210%">]</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(150)</span></td>
</tr>
<tr id="S3.E151" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E151.m1" class="ltx_Math" alttext="\displaystyle\sigma" display="inline"><mi>σ</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E151.m2" class="ltx_Math" alttext="\displaystyle\to\frac{1}{D}\bigg[\sigma\left(1+\frac{p_{x}}{p_{z}}\cos\alpha%
\sin\phi+\frac{p_{y}}{p_{z}}\sin\alpha\sin\phi\right)-x\left(1+\frac{1+\delta}%
{p_{z}}\right)\cos\alpha\sin\phi" display="inline"><mrow><mo>→</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mi>D</mi></mfrac></mstyle><mrow><mo maxsize="210%" minsize="210%">[</mo><mi>σ</mi><mrow><mo>(</mo><mn>1</mn><mo>+</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mi>cos</mi><mi>α</mi><mi>sin</mi><mi>ϕ</mi><mo>+</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mi>sin</mi><mi>α</mi><mi>sin</mi><mi>ϕ</mi><mo>)</mo></mrow><mo>-</mo><mi>x</mi><mrow><mo>(</mo><mn>1</mn><mo>+</mo><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>)</mo></mrow><mi>cos</mi><mi>α</mi><mi>sin</mi><mi>ϕ</mi></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(151)</span></td>
</tr>
<tr id="S3.E152" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E152.m2" class="ltx_Math" alttext="\displaystyle\qquad\qquad-y\left(1-\frac{1+\delta}{p_{z}}\right)\sin\alpha\sin%
\phi\bigg]" display="inline"><mrow><mi id="XM881">  </mi><mo mathvariant="italic" separator="true">  </mo><mo>-</mo><mi>y</mi><mrow><mo>(</mo><mn>1</mn><mo>-</mo><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>)</mo></mrow><mi>sin</mi><mi>α</mi><mi>sin</mi><mi>ϕ</mi><mo maxsize="210%" minsize="210%">]</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(152)</span></td>
</tr>
<tr id="S3.E153" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E153.m1" class="ltx_Math" alttext="\displaystyle\delta" display="inline"><mi>δ</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E153.m2" class="ltx_Math" alttext="\displaystyle\to\delta+\cos\alpha\sin\phi\cdot p_{x}+\sin\alpha\sin\phi\cdot p%
_{y}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mi>δ</mi><mo>+</mo><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mrow><mi>ϕ</mi><mo>⋅</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow></mrow><mo>+</mo><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mrow><mi>ϕ</mi><mo>⋅</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(153)</span></td>
</tr>
<tr id="S3.E154" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E154.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E154.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}+\cos\alpha\sin\phi\cos^{3}\phi\left[(1+\delta)-p_{z}^{i%
}\right]" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>+</mo><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><msup><mi>cos</mi><mn>3</mn></msup><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM892"><mrow><mo stretchy="false">(</mo><mrow id="XM891"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>-</mo><msubsup><mi>p</mi><mi>z</mi><mi>i</mi></msubsup></mrow><mo>]</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(154)</span></td>
</tr>
<tr id="S3.E155" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E155.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E155.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}+\sin\alpha\sin\phi\cos^{3}\phi\left[(1+\delta)-p_{z}^{i%
}\right]" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>+</mo><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>α</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><msup><mi>cos</mi><mn>3</mn></msup><mo>⁡</mo><mi>ϕ</mi></mrow><mo>⁢</mo><mrow><mo>[</mo><mrow id="XM902"><mrow><mo stretchy="false">(</mo><mrow id="XM901"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>-</mo><msubsup><mi>p</mi><mi>z</mi><mi>i</mi></msubsup></mrow><mo>]</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(155)</span></td>
</tr>
</table>
</div>
</section>
<section id="S3.SS11" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.11 </span>RF multipole</h3>
<div id="S3.SS11.p1" class="ltx_para">
<p class="ltx_p">The Hamiltonian for a thin RF multipole is</p>
<table id="S5.EGx61" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E156" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E156.m1" class="ltx_Math" alttext="\displaystyle H" display="inline"><mi>H</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E156.m2" class="ltx_Math" alttext="\displaystyle=\delta\left(s-\frac{L}{2}\right)\bigg\{-\frac{1}{k_{\rm RF}}%
\frac{qV_{\rm RF}}{p_{s}c}\cos(\vartheta_{\rm RF}-k_{\rm RF}z)+\cdots" display="inline"><mrow><mo>=</mo><mi>δ</mi><mrow><mo>(</mo><mi>s</mi><mo>-</mo><mstyle displaystyle="true"><mfrac><mi>L</mi><mn>2</mn></mfrac></mstyle><mo>)</mo></mrow><mrow><mo maxsize="210%" minsize="210%">{</mo><mo>-</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><msub><mi>k</mi><mi>RF</mi></msub></mfrac></mstyle><mstyle displaystyle="true"><mfrac><mrow><mi>q</mi><mo>⁢</mo><msub><mi>V</mi><mi>RF</mi></msub></mrow><mrow><msub><mi>p</mi><mi>s</mi></msub><mo>⁢</mo><mi>c</mi></mrow></mfrac></mstyle><mi id="XM909">cos</mi><mrow><mo stretchy="false">(</mo><msub><mi>ϑ</mi><mi>RF</mi></msub><mo>-</mo><msub><mi>k</mi><mi>RF</mi></msub><mi>z</mi><mo stretchy="false">)</mo></mrow><mo>+</mo><mi mathvariant="normal">⋯</mi></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(156)</span></td>
</tr>
<tr id="S3.E157" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E157.m2" class="ltx_Math" alttext="\displaystyle\cdots+\sum_{n=0}^{N}\frac{1}{(n+1)!}\Re\left[(K_{\text{N},n}L%
\cos(\vartheta_{n}-k_{\rm RF}z)+iK_{\text{S},n}L\cos(\varphi_{n}-k_{\rm RF}z))%
(x+iy)^{n+1}\right]\bigg\}" display="inline"><mrow><mi mathvariant="normal">⋯</mi><mo>+</mo><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>n</mi><mo>=</mo><mn>0</mn></mrow><mi>N</mi></munderover></mstyle><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM926"><mi>n</mi><mo>+</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mstyle><mi mathvariant="normal" id="XM937">ℜ</mi><mrow><mo>[</mo><mrow><mo stretchy="false">(</mo><msub><mi>K</mi><mrow><mtext id="XM927">N</mtext><mo>,</mo><mi id="XM928">n</mi></mrow></msub><mi>L</mi><mi id="XM931">cos</mi><mrow><mo stretchy="false">(</mo><msub><mi>ϑ</mi><mi>n</mi></msub><mo>-</mo><msub><mi>k</mi><mi>RF</mi></msub><mi>z</mi><mo stretchy="false">)</mo></mrow><mo>+</mo><mi>i</mi><msub><mi>K</mi><mrow><mtext id="XM929">S</mtext><mo>,</mo><mi id="XM930">n</mi></mrow></msub><mi>L</mi><mi id="XM933">cos</mi><mrow><mo stretchy="false">(</mo><msub><mi>φ</mi><mi>n</mi></msub><mo>-</mo><msub><mi>k</mi><mi>RF</mi></msub><mi>z</mi><mo stretchy="false">)</mo></mrow><mo stretchy="false">)</mo></mrow><msup><mrow><mo stretchy="false">(</mo><mi>x</mi><mo>+</mo><mi>i</mi><mi>y</mi><mo stretchy="false">)</mo></mrow><mrow><mi>n</mi><mo>+</mo><mn>1</mn></mrow></msup><mo>]</mo></mrow><mo maxsize="210%" minsize="210%">}</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(157)</span></td>
</tr>
</table>
<p class="ltx_p">where the <math id="S3.SS11.p1.m1" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math>-th order normal- and skew- multipole magnetic strengths are</p>
<table id="S5.EGx62" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E158" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E158.m1" class="ltx_Math" alttext="\displaystyle K_{\rm N,n}" display="inline"><msub><mi>K</mi><mrow><mi mathvariant="normal" id="XM941">N</mi><mo>,</mo><mi mathvariant="normal" id="XM942">n</mi></mrow></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E158.m2" class="ltx_Math" alttext="\displaystyle=\frac{q}{p_{s}}\frac{\partial^{n}B_{y}}{\partial x^{n}}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><msub><mi>p</mi><mi>s</mi></msub></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msup><mo>∂</mo><mi>n</mi></msup><mo>⁡</mo><msub><mi>B</mi><mi>y</mi></msub></mrow><mrow><mo>∂</mo><mo>⁡</mo><msup><mi>x</mi><mi>n</mi></msup></mrow></mfrac></mstyle></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E158.m3" class="ltx_Math" alttext="\displaystyle K_{\rm S,n}" display="inline"><msub><mi>K</mi><mrow><mi mathvariant="normal" id="XM945">S</mi><mo>,</mo><mi mathvariant="normal" id="XM946">n</mi></mrow></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E158.m4" class="ltx_Math" alttext="\displaystyle=\frac{q}{p_{s}}\frac{\partial^{n}B_{x}}{\partial x^{n}}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mi>q</mi><msub><mi>p</mi><mi>s</mi></msub></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><msup><mo>∂</mo><mi>n</mi></msup><mo>⁡</mo><msub><mi>B</mi><mi>x</mi></msub></mrow><mrow><mo>∂</mo><mo>⁡</mo><msup><mi>x</mi><mi>n</mi></msup></mrow></mfrac></mstyle></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(158)</span></td>
</tr>
</table>
<p class="ltx_p">respectively. The multipolar expansion is done similar as for a static
magnetic field, but to account for the oscillatory behaviour the multipolar
coefficients are expressed as</p>
<table id="S5.EGx63" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E159" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E159.m1" class="ltx_Math" alttext="\displaystyle\tilde{B}_{n}(z)" display="inline"><mrow><msub><mover accent="true"><mi>B</mi><mo stretchy="false">~</mo></mover><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM953">z</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E159.m2" class="ltx_Math" alttext="\displaystyle=\Re[B_{n}e^{j(\vartheta_{n}-k_{\rm RF}z)}]=B_{n}\cos(\vartheta_{%
n}-k_{\rm RF}z)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi mathvariant="normal" id="XM955">ℜ</mi><mo>⁡</mo><mrow><mo stretchy="false">[</mo><mrow id="XM956"><msub><mi>B</mi><mi>n</mi></msub><mo>⁢</mo><msup><mi>e</mi><mrow><mi>j</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM954"><msub><mi>ϑ</mi><mi>n</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></msup></mrow><mo stretchy="false">]</mo></mrow></mrow><mo>=</mo><mrow><msub><mi>B</mi><mi>n</mi></msub><mo>⁢</mo><mrow><mi id="XM957">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM958"><msub><mi>ϑ</mi><mi>n</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(159)</span></td>
</tr>
<tr id="S3.E160" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E160.m1" class="ltx_Math" alttext="\displaystyle\tilde{A}_{n}(z)" display="inline"><mrow><msub><mover accent="true"><mi>A</mi><mo stretchy="false">~</mo></mover><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM965">z</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E160.m2" class="ltx_Math" alttext="\displaystyle=\Re[A_{n}e^{j(\varphi_{n}-k_{\rm RF}z)}]=A_{n}\cos(\varphi_{n}-k%
_{\rm RF}z)," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mi mathvariant="normal" id="XM967">ℜ</mi><mo>⁡</mo><mrow><mo stretchy="false">[</mo><mrow id="XM968"><msub><mi>A</mi><mi>n</mi></msub><mo>⁢</mo><msup><mi>e</mi><mrow><mi>j</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM966"><msub><mi>φ</mi><mi>n</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></msup></mrow><mo stretchy="false">]</mo></mrow></mrow><mo>=</mo><mrow><msub><mi>A</mi><mi>n</mi></msub><mo>⁢</mo><mrow><mi id="XM969">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM970"><msub><mi>φ</mi><mi>n</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(160)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS11.p1.m2" class="ltx_Math" alttext="\vartheta_{n}" display="inline"><msub><mi>ϑ</mi><mi>n</mi></msub></math> and <math id="S3.SS11.p1.m3" class="ltx_Math" alttext="\varphi_{n}" display="inline"><msub><mi>φ</mi><mi>n</mi></msub></math> are the phases for the normal and skew
coefficients, <math id="S3.SS11.p1.m4" class="ltx_Math" alttext="\tilde{B}_{n}(z)" display="inline"><mrow><msub><mover accent="true"><mi>B</mi><mo stretchy="false">~</mo></mover><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM971">z</mi><mo stretchy="false">)</mo></mrow></mrow></math> and <math id="S3.SS11.p1.m5" class="ltx_Math" alttext="\tilde{A}_{n}(z)" display="inline"><mrow><msub><mover accent="true"><mi>A</mi><mo stretchy="false">~</mo></mover><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM972">z</mi><mo stretchy="false">)</mo></mrow></mrow></math>, respectively, <math id="S3.SS11.p1.m6" class="ltx_Math" alttext="k_{\rm RF}" display="inline"><msub><mi>k</mi><mi>RF</mi></msub></math> is the RF wave number of the generating field (<math id="S3.SS11.p1.m7" class="ltx_Math" alttext="k_{\rm RF}z=\omega_{\rm RF}t" display="inline"><mrow><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow><mo>=</mo><mrow><msub><mi>ω</mi><mi>RF</mi></msub><mo>⁢</mo><mi>t</mi></mrow></mrow></math>).</p>
</div>
<div id="S3.SS11.p2" class="ltx_para">
<p class="ltx_p">The kick experienced by an arbitrary particle in <math id="S3.SS11.p2.m1" class="ltx_Math" alttext="(x,y,z)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM973">x</mi><mo>,</mo><mi id="XM974">y</mi><mo>,</mo><mi id="XM975">z</mi><mo stretchy="false">)</mo></mrow></math> can be expressed as
(eq. 16 in <cite class="ltx_cite">[<a href="#bib.bib5" title="RF multipole implementation" class="ltx_ref">6</a>]</cite>)</p>
<table id="S5.EGx64" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E161" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E161.m1" class="ltx_Math" alttext="\displaystyle\Delta p_{x}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E161.m2" class="ltx_Math" alttext="\displaystyle=-\sum_{n=0}^{N}\frac{1}{n!}\Re\left[(K_{\text{N},n}L\cos(%
\vartheta_{n}-k_{\rm RF}z)+iK_{\text{S},n}L\cos(\varphi_{n}-k_{\rm RF}z))(x+iy%
)^{n}\right]," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>n</mi><mo>=</mo><mn>0</mn></mrow><mi>N</mi></munderover></mstyle><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mi>n</mi><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mi mathvariant="normal" id="XM998">ℜ</mi><mo>⁡</mo><mrow><mo>[</mo><mrow id="XM999"><mrow><mo stretchy="false">(</mo><mrow id="XM996"><mrow><msub><mi>K</mi><mrow><mtext id="XM988">N</mtext><mo>,</mo><mi id="XM989">n</mi></mrow></msub><mo>⁢</mo><mi>L</mi><mo>⁢</mo><mrow><mi id="XM992">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM993"><msub><mi>ϑ</mi><mi>n</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><msub><mi>K</mi><mrow><mtext id="XM990">S</mtext><mo>,</mo><mi id="XM991">n</mi></mrow></msub><mo>⁢</mo><mi>L</mi><mo>⁢</mo><mrow><mi id="XM994">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM995"><msub><mi>φ</mi><mi>n</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM997"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mi>n</mi></msup></mrow><mo>]</mo></mrow></mrow></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(161)</span></td>
</tr>
<tr id="S3.E162" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E162.m1" class="ltx_Math" alttext="\displaystyle\Delta p_{y}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E162.m2" class="ltx_Math" alttext="\displaystyle=\sum_{n=0}^{N}\frac{1}{n!}\Im\left[(K_{\text{N},n}L\cos(%
\vartheta_{n}-k_{\rm RF}z)+iK_{\text{S},n}L\cos(\varphi_{n}-k_{\rm RF}z))(x+iy%
)^{n}\right]," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>n</mi><mo>=</mo><mn>0</mn></mrow><mi>N</mi></munderover></mstyle><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mi>n</mi><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mi mathvariant="normal" id="XM1022">ℑ</mi><mo>⁡</mo><mrow><mo>[</mo><mrow id="XM1023"><mrow><mo stretchy="false">(</mo><mrow id="XM1020"><mrow><msub><mi>K</mi><mrow><mtext id="XM1012">N</mtext><mo>,</mo><mi id="XM1013">n</mi></mrow></msub><mo>⁢</mo><mi>L</mi><mo>⁢</mo><mrow><mi id="XM1016">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1017"><msub><mi>ϑ</mi><mi>n</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><msub><mi>K</mi><mrow><mtext id="XM1014">S</mtext><mo>,</mo><mi id="XM1015">n</mi></mrow></msub><mo>⁢</mo><mi>L</mi><mo>⁢</mo><mrow><mi id="XM1018">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1019"><msub><mi>φ</mi><mi>n</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1021"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mi>n</mi></msup></mrow><mo>]</mo></mrow></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(162)</span></td>
</tr>
<tr id="S3.E163" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E163.m1" class="ltx_Math" alttext="\displaystyle\Delta p_{t}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msub><mi>p</mi><mi>t</mi></msub></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E163.m2" class="ltx_Math" alttext="\displaystyle=\frac{qV_{\rm RF}}{p_{s}c}\sin(\vartheta_{\rm RF}-k_{\rm RF}z)+\cdots" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><mrow><mi>q</mi><mo>⁢</mo><msub><mi>V</mi><mi>RF</mi></msub></mrow><mrow><msub><mi>p</mi><mi>s</mi></msub><mo>⁢</mo><mi>c</mi></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mi id="XM1026">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1027"><msub><mi>ϑ</mi><mi>RF</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>+</mo><mi mathvariant="normal">⋯</mi></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(163)</span></td>
</tr>
<tr id="S3.E164" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E164.m2" class="ltx_Math" alttext="\displaystyle\qquad\cdots-k_{\rm RF}\sum_{n=0}^{N}\Re\left[(K_{\text{N},n}L%
\sin(\vartheta_{n}-k_{\rm RF}z)+iK_{\text{S},n}L\sin(\varphi_{n}-k_{\rm RF}z))%
(x+iy)^{n}\right]." display="inline"><mrow><mrow><mrow><mi>  </mi><mo>⁢</mo><mi mathvariant="normal">⋯</mi></mrow><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>n</mi><mo>=</mo><mn>0</mn></mrow><mi>N</mi></munderover></mstyle><mrow><mi mathvariant="normal" id="XM1050">ℜ</mi><mo>⁡</mo><mrow><mo>[</mo><mrow id="XM1051"><mrow><mo stretchy="false">(</mo><mrow id="XM1048"><mrow><msub><mi>K</mi><mrow><mtext id="XM1040">N</mtext><mo>,</mo><mi id="XM1041">n</mi></mrow></msub><mo>⁢</mo><mi>L</mi><mo>⁢</mo><mrow><mi id="XM1044">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1045"><msub><mi>ϑ</mi><mi>n</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><msub><mi>K</mi><mrow><mtext id="XM1042">S</mtext><mo>,</mo><mi id="XM1043">n</mi></mrow></msub><mo>⁢</mo><mi>L</mi><mo>⁢</mo><mrow><mi id="XM1046">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1047"><msub><mi>φ</mi><mi>n</mi></msub><mo>-</mo><mrow><msub><mi>k</mi><mi>RF</mi></msub><mo>⁢</mo><mi>z</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1049"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mi>n</mi></msup></mrow><mo>]</mo></mrow></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(164)</span></td>
</tr>
</table>
</div>
<div id="S3.SS11.p3" class="ltx_para">
<p class="ltx_p">In Sixtrack the following equations are used:</p>
</div>
<div id="S3.SS11.p4" class="ltx_para">
<table id="S5.EGx65" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E165" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E165.m1" class="ltx_Math" alttext="\displaystyle\Delta x^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E165.m2" class="ltx_Math" alttext="\displaystyle=\frac{b_{2}\,x\,\cos\left(\phi+k\,z\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mpadded width="+1.7pt"><msub><mi>b</mi><mn>2</mn></msub></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><mi>x</mi></mpadded><mo>⁢</mo><mrow><mi id="XM1054">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1055"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(165)</span></td>
</tr>
<tr id="S3.E166" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E166.m1" class="ltx_Math" alttext="\displaystyle\Delta y^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>y</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E166.m2" class="ltx_Math" alttext="\displaystyle=\frac{-b_{2}\,y\,\cos\left(\phi+k\,z\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mo>-</mo><mrow><mpadded width="+1.7pt"><msub><mi>b</mi><mn>2</mn></msub></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><mi>y</mi></mpadded><mo>⁢</mo><mrow><mi id="XM1058">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1059"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(166)</span></td>
</tr>
<tr id="S3.E167" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E167.m1" class="ltx_Math" alttext="\displaystyle\Delta E" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>E</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E167.m2" class="ltx_Math" alttext="\displaystyle=-P_{0}k\beta_{0}\,\frac{b_{2}}{2}\,\left(x^{2}-y^{2}\right)\,%
\sin\left(\phi+k\,z\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>k</mi><mo>⁢</mo><mpadded width="+1.7pt"><msub><mi>β</mi><mn>0</mn></msub></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><mstyle displaystyle="true"><mfrac><msub><mi>b</mi><mn>2</mn></msub><mn>2</mn></mfrac></mstyle></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1063"><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><msup><mi>y</mi><mn>2</mn></msup></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1064">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1065"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(167)</span></td>
</tr>
</table>
</div>
<div id="S3.SS11.p5" class="ltx_para">
<table id="S5.EGx66" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E168" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E168.m1" class="ltx_Math" alttext="\displaystyle\Delta x^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E168.m2" class="ltx_Math" alttext="\displaystyle=\frac{b_{3}\,\left(x^{2}-y^{2}\right)\,\cos\left(\phi+k\,z\right%
)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mpadded width="+1.7pt"><msub><mi>b</mi><mn>3</mn></msub></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1069"><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><msup><mi>y</mi><mn>2</mn></msup></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1070">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1071"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(168)</span></td>
</tr>
<tr id="S3.E169" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E169.m1" class="ltx_Math" alttext="\displaystyle\Delta y^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>y</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E169.m2" class="ltx_Math" alttext="\displaystyle=\frac{-2b_{3}\,xy\,\cos\left(\phi+k\,z\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mo>-</mo><mrow><mn>2</mn><mo>⁢</mo><mpadded width="+1.7pt"><msub><mi>b</mi><mn>3</mn></msub></mpadded><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mpadded width="+1.7pt"><mi>y</mi></mpadded><mo>⁢</mo><mrow><mi id="XM1074">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1075"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(169)</span></td>
</tr>
<tr id="S3.E170" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E170.m1" class="ltx_Math" alttext="\displaystyle\Delta E" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>E</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E170.m2" class="ltx_Math" alttext="\displaystyle=-P_{0}k\beta_{0}\,\frac{b_{3}}{3}\,\left(x^{3}-3xy^{2}\right)\,%
\sin\left(\phi+k\,z\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>k</mi><mo>⁢</mo><mpadded width="+1.7pt"><msub><mi>β</mi><mn>0</mn></msub></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><mstyle displaystyle="true"><mfrac><msub><mi>b</mi><mn>3</mn></msub><mn>3</mn></mfrac></mstyle></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1079"><msup><mi>x</mi><mn>3</mn></msup><mo>-</mo><mrow><mn>3</mn><mo>⁢</mo><mi>x</mi><mo>⁢</mo><msup><mi>y</mi><mn>2</mn></msup></mrow></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1080">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1081"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(170)</span></td>
</tr>
</table>
</div>
<div id="S3.SS11.p6" class="ltx_para">
<table id="S5.EGx67" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E171" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E171.m1" class="ltx_Math" alttext="\displaystyle\Delta x^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E171.m2" class="ltx_Math" alttext="\displaystyle=\frac{b_{4}\,\left(x^{3}-3xy^{2}\right)\,\cos\left(\phi+k\,z%
\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mpadded width="+1.7pt"><msub><mi>b</mi><mn>4</mn></msub></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1085"><msup><mi>x</mi><mn>3</mn></msup><mo>-</mo><mrow><mn>3</mn><mo>⁢</mo><mi>x</mi><mo>⁢</mo><msup><mi>y</mi><mn>2</mn></msup></mrow></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1086">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1087"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(171)</span></td>
</tr>
<tr id="S3.E172" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E172.m1" class="ltx_Math" alttext="\displaystyle\Delta y^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>y</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E172.m2" class="ltx_Math" alttext="\displaystyle=\frac{-b_{4}\,\left(3x^{2}y-y^{3}\right)\,\cos\left(\phi+k\,z%
\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mo>-</mo><mrow><mpadded width="+1.7pt"><msub><mi>b</mi><mn>4</mn></msub></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1091"><mrow><mn>3</mn><mo>⁢</mo><msup><mi>x</mi><mn>2</mn></msup><mo>⁢</mo><mi>y</mi></mrow><mo>-</mo><msup><mi>y</mi><mn>3</mn></msup></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1092">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1093"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(172)</span></td>
</tr>
<tr id="S3.E173" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E173.m1" class="ltx_Math" alttext="\displaystyle\Delta E" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>E</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E173.m2" class="ltx_Math" alttext="\displaystyle=-\frac{P_{0}k}{c}\,\frac{b_{4}}{4}\,\left(x^{4}-6x^{2}y^{2}+y^{4%
}\right)\,\sin\left(\phi+k\,z\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mpadded width="+1.7pt"><mstyle displaystyle="true"><mfrac><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>k</mi></mrow><mi>c</mi></mfrac></mstyle></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><mstyle displaystyle="true"><mfrac><msub><mi>b</mi><mn>4</mn></msub><mn>4</mn></mfrac></mstyle></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1097"><mrow><msup><mi>x</mi><mn>4</mn></msup><mo>-</mo><mrow><mn>6</mn><mo>⁢</mo><msup><mi>x</mi><mn>2</mn></msup><mo>⁢</mo><msup><mi>y</mi><mn>2</mn></msup></mrow></mrow><mo>+</mo><msup><mi>y</mi><mn>4</mn></msup></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1098">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1099"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(173)</span></td>
</tr>
</table>
</div>
<div id="S3.SS11.p7" class="ltx_para">
<table id="S5.EGx68" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E174" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E174.m1" class="ltx_Math" alttext="\displaystyle\Delta x^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E174.m2" class="ltx_Math" alttext="\displaystyle=\frac{a_{2}\,y\,\cos\left(\phi+k\,z\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mpadded width="+1.7pt"><msub><mi>a</mi><mn>2</mn></msub></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><mi>y</mi></mpadded><mo>⁢</mo><mrow><mi id="XM1102">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1103"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(174)</span></td>
</tr>
<tr id="S3.E175" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E175.m1" class="ltx_Math" alttext="\displaystyle\Delta y^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>y</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E175.m2" class="ltx_Math" alttext="\displaystyle=\frac{a_{2}\,x\,\cos\left(\phi+k\,z\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mpadded width="+1.7pt"><msub><mi>a</mi><mn>2</mn></msub></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><mi>x</mi></mpadded><mo>⁢</mo><mrow><mi id="XM1106">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1107"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(175)</span></td>
</tr>
<tr id="S3.E176" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E176.m1" class="ltx_Math" alttext="\displaystyle\Delta E" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>E</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E176.m2" class="ltx_Math" alttext="\displaystyle=P_{0}k\beta_{0}\,a_{2}\,xy\,\sin\left(\phi+k\,z\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>k</mi><mo>⁢</mo><mpadded width="+1.7pt"><msub><mi>β</mi><mn>0</mn></msub></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><msub><mi>a</mi><mn>2</mn></msub></mpadded><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mpadded width="+1.7pt"><mi>y</mi></mpadded><mo>⁢</mo><mrow><mi id="XM1110">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1111"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(176)</span></td>
</tr>
</table>
</div>
<div id="S3.SS11.p8" class="ltx_para">
<table id="S5.EGx69" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E177" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E177.m1" class="ltx_Math" alttext="\displaystyle\Delta x^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E177.m2" class="ltx_Math" alttext="\displaystyle=\frac{2a_{3}\,xy\,\cos\left(\phi+k\,z\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mn>2</mn><mo>⁢</mo><mpadded width="+1.7pt"><msub><mi>a</mi><mn>3</mn></msub></mpadded><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mpadded width="+1.7pt"><mi>y</mi></mpadded><mo>⁢</mo><mrow><mi id="XM1114">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1115"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(177)</span></td>
</tr>
<tr id="S3.E178" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E178.m1" class="ltx_Math" alttext="\displaystyle\Delta y^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>y</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E178.m2" class="ltx_Math" alttext="\displaystyle=\frac{-a_{3}\,\left(y^{2}-x^{2}\right)\,\cos\left(\phi+k\,z%
\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mo>-</mo><mrow><mpadded width="+1.7pt"><msub><mi>a</mi><mn>3</mn></msub></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1119"><msup><mi>y</mi><mn>2</mn></msup><mo>-</mo><msup><mi>x</mi><mn>2</mn></msup></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1120">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1121"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(178)</span></td>
</tr>
<tr id="S3.E179" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E179.m1" class="ltx_Math" alttext="\displaystyle\Delta E" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>E</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E179.m2" class="ltx_Math" alttext="\displaystyle=\frac{P_{0}k\beta_{0}a_{3}}{3}\,\left(y^{3}-3yx^{2}\right)\,\sin%
\left(\phi+k\,z\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mpadded width="+1.7pt"><mstyle displaystyle="true"><mfrac><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>k</mi><mo>⁢</mo><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><msub><mi>a</mi><mn>3</mn></msub></mrow><mn>3</mn></mfrac></mstyle></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1125"><msup><mi>y</mi><mn>3</mn></msup><mo>-</mo><mrow><mn>3</mn><mo>⁢</mo><mi>y</mi><mo>⁢</mo><msup><mi>x</mi><mn>2</mn></msup></mrow></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1126">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1127"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(179)</span></td>
</tr>
</table>
</div>
<div id="S3.SS11.p9" class="ltx_para">
<table id="S5.EGx70" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E180" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E180.m1" class="ltx_Math" alttext="\displaystyle\Delta x^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E180.m2" class="ltx_Math" alttext="\displaystyle=\frac{a_{4}\,\left(y^{3}-3yx^{2}\right)\,\cos\left(\phi+k\,z%
\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mpadded width="+1.7pt"><msub><mi>a</mi><mn>4</mn></msub></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1131"><msup><mi>y</mi><mn>3</mn></msup><mo>-</mo><mrow><mn>3</mn><mo>⁢</mo><mi>y</mi><mo>⁢</mo><msup><mi>x</mi><mn>2</mn></msup></mrow></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1132">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1133"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(180)</span></td>
</tr>
<tr id="S3.E181" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E181.m1" class="ltx_Math" alttext="\displaystyle\Delta y^{\prime}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>y</mi><mo>′</mo></msup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E181.m2" class="ltx_Math" alttext="\displaystyle=\frac{a_{4}\,\left(3xy^{2}-x^{3}\right)\,\cos\left(\phi+k\,z%
\right)}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mpadded width="+1.7pt"><msub><mi>a</mi><mn>4</mn></msub></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1137"><mrow><mn>3</mn><mo>⁢</mo><mi>x</mi><mo>⁢</mo><msup><mi>y</mi><mn>2</mn></msup></mrow><mo>-</mo><msup><mi>x</mi><mn>3</mn></msup></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1138">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1139"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(181)</span></td>
</tr>
<tr id="S3.E182" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E182.m1" class="ltx_Math" alttext="\displaystyle\Delta E" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>E</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E182.m2" class="ltx_Math" alttext="\displaystyle=-P_{0}k\beta_{0}\,a_{4}\,\left(x^{3}y-y^{3}x\right)\,\sin\left(%
\phi+k\,z\right)," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>k</mi><mo>⁢</mo><mpadded width="+1.7pt"><msub><mi>β</mi><mn>0</mn></msub></mpadded><mo>⁢</mo><mpadded width="+1.7pt"><msub><mi>a</mi><mn>4</mn></msub></mpadded><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1143"><mrow><msup><mi>x</mi><mn>3</mn></msup><mo>⁢</mo><mi>y</mi></mrow><mo>-</mo><mrow><msup><mi>y</mi><mn>3</mn></msup><mo>⁢</mo><mi>x</mi></mrow></mrow><mo rspace="4.2pt">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1144">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1145"><mi>ϕ</mi><mo>+</mo><mrow><mpadded width="+1.7pt"><mi>k</mi></mpadded><mo>⁢</mo><mi>z</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(182)</span></td>
</tr>
</table>
<p class="ltx_p">, where <math id="S3.SS11.p9.m1" class="ltx_Math" alttext="k=\frac{2\pi f}{c\beta_{0}}" display="inline"><mrow><mi>k</mi><mo>=</mo><mfrac><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><mi>f</mi></mrow><mrow><mi>c</mi><mo>⁢</mo><msub><mi>β</mi><mn>0</mn></msub></mrow></mfrac></mrow></math>, <math id="S3.SS11.p9.m2" class="ltx_Math" alttext="f" display="inline"><mi>f</mi></math> is frequency and <math id="S3.SS11.p9.m3" class="ltx_Math" alttext="c" display="inline"><mi>c</mi></math> is the speed of light.</p>
</div>
</section>
<section id="S3.SS12" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.12 </span>Wire</h3>
<div id="S3.SS12.p1" class="ltx_para">
<p class="ltx_p">The wire element is described by in total 7 parameters: the wire current <math id="S3.SS12.p1.m1" class="ltx_Math" alttext="I" display="inline"><mi>I</mi></math>, the physical length of the wire <math id="S3.SS12.p1.m2" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> and the length of the embedded drift <math id="S3.SS12.p1.m3" class="ltx_Math" alttext="L_{\mathrm{emb}}" display="inline"><msub><mi>L</mi><mi>emb</mi></msub></math>, the horizontal distance <math id="S3.SS12.p1.m4" class="ltx_Math" alttext="dx" display="inline"><mrow><mi>d</mi><mo>⁢</mo><mi>x</mi></mrow></math> and vertical distance <math id="S3.SS12.p1.m5" class="ltx_Math" alttext="dy" display="inline"><mrow><mi>d</mi><mo>⁢</mo><mi>y</mi></mrow></math> between the wire midpoint and the closed orbit, and the tilt angle <math id="S3.SS12.p1.m6" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math> in the <math id="S3.SS12.p1.m7" class="ltx_Math" alttext="(z,y)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM1146">z</mi><mo>,</mo><mi id="XM1147">y</mi><mo stretchy="false">)</mo></mrow></math> plane and the tilt angle <math id="S3.SS12.p1.m8" class="ltx_Math" alttext="\theta" display="inline"><mi>θ</mi></math> in the <math id="S3.SS12.p1.m9" class="ltx_Math" alttext="(x,z)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM1148">x</mi><mo>,</mo><mi id="XM1149">z</mi><mo stretchy="false">)</mo></mrow></math> plane. The length <math id="S3.SS12.p1.m10" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> is the physical length of the wire while the embedded drift is the length of the integration interval of the kick (Eqn. <a href="#S3.E189" title="(189) ‣ 3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">189</span></a>) in order to also take the fringe fields of the wire into account. This is illustrated in Fig. <a href="#S3.F2" title="Figure 2 ‣ 3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2</span></a> which shows the vector potential and magnetic field together with the physical length <math id="S3.SS12.p1.m11" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> and the length of the embedded drift <math id="S3.SS12.p1.m12" class="ltx_Math" alttext="L_{\mathrm{emb}}" display="inline"><msub><mi>L</mi><mi>emb</mi></msub></math>. The tilt angles are illustrated in Fig. <a href="#S3.F3" title="Figure 3 ‣ 3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a>.</p>
</div>
<figure id="S3.F2" class="ltx_figure">
<span class="ltx_inline-block ltx_minipage ltx_align_middle" style="width:216.8pt;"><img src="wire_vector_potential.png" id="S3.F2.g1" class="ltx_graphics ltx_centering" width="541" height="329" alt="">
</span>
<span class="ltx_inline-block ltx_minipage ltx_align_middle" style="width:216.8pt;"><img src="wire_field.png" id="S3.F2.g2" class="ltx_graphics ltx_centering" width="541" height="329" alt="">
</span>
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_figure">Figure 2: </span>Vector potential (left) and magnetic field (right) of a current bearing wire with physical length <math id="S3.F2.m3" class="ltx_Math" alttext="L=1" display="inline"><mrow><mi>L</mi><mo>=</mo><mn>1</mn></mrow></math> m and embedded drift (integrational length) <math id="S3.F2.m4" class="ltx_Math" alttext="L_{\mathrm{emb}}=2" display="inline"><mrow><msub><mi>L</mi><mi>emb</mi></msub><mo>=</mo><mn>2</mn></mrow></math> m.</figcaption>
</figure>
<div id="S3.SS12.p2" class="ltx_para">
<p class="ltx_p">To calculate the kick strength <math id="S3.SS12.p2.m1" class="ltx_Math" alttext="\mathcal{L}" display="inline"><mi class="ltx_font_mathcaligraphic">ℒ</mi></math> of the wire in order to compensate the beam-beam kick from one long-range beam-beam encounter, the following relation between holds <cite class="ltx_cite">[<a href="#bib.bib14" title="Electron lens as beam-beam wire compensator in HL-LHC" class="ltx_ref">11</a>]</cite>:</p>
<table id="S3.E183" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="S3.E183.m1" class="ltx_Math" alttext="\mathcal{L}=e\cdot c\cdot N_{p}=L\cdot I" display="block"><mrow><mi class="ltx_font_mathcaligraphic">ℒ</mi><mo>=</mo><mrow><mi>e</mi><mo>⋅</mo><mi>c</mi><mo>⋅</mo><msub><mi>N</mi><mi>p</mi></msub></mrow><mo>=</mo><mrow><mi>L</mi><mo>⋅</mo><mi>I</mi></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(183)</span></td>
</tr>
</table>
<p class="ltx_p">with <math id="S3.SS12.p2.m2" class="ltx_Math" alttext="N_{p}" display="inline"><msub><mi>N</mi><mi>p</mi></msub></math> being the bunch charge and <math id="S3.SS12.p2.m3" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> and <math id="S3.SS12.p2.m4" class="ltx_Math" alttext="I" display="inline"><mi>I</mi></math> are the length and current of the wire. <math id="S3.SS12.p2.m5" class="ltx_Math" alttext="\mathcal{L}" display="inline"><mi class="ltx_font_mathcaligraphic">ℒ</mi></math> than has to units Am.</p>
</div>
<div id="S3.SS12.p3" class="ltx_para">
<p class="ltx_p">The generic formula for a vector potential of a straight current bearing wire with length <math id="S3.SS12.p3.m1" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> and current <math id="S3.SS12.p3.m2" class="ltx_Math" alttext="I" display="inline"><mi>I</mi></math> centered at the origin is given in Cartesian coordinates by the following expression<span class="ltx_note ltx_role_footnote"><sup class="ltx_note_mark">1</sup><span class="ltx_note_outer"><span class="ltx_note_content"><sup class="ltx_note_mark">1</sup>Note that Curvilinear and Cartesian coordinate system are equivalent as the curvature is zero at the location of the wire element.</span></span></span>:</p>
<table id="S5.EGx71" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex9" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.Ex9.m1" class="ltx_Math" alttext="\displaystyle{A_{i}(x,y,z)}" display="inline"><mrow><msub><mi>A</mi><mi>i</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1155">x</mi><mo>,</mo><mi id="XM1156">y</mi><mo>,</mo><mi id="XM1157">z</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.Ex9.m2" class="ltx_Math" alttext="\displaystyle=\frac{I\mu_{0}\cos(c_{i})}{4\pi}\cdot" display="inline"><mrow><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mi>I</mi><mo>⁢</mo><msub><mi>μ</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mi id="XM1158">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><msub id="XM1159"><mi>c</mi><mi>i</mi></msub><mo stretchy="false">)</mo></mrow></mrow></mrow><mrow><mn>4</mn><mo>⁢</mo><mi>π</mi></mrow></mfrac></mstyle><mo>⋅</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E184" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E184.m2" class="ltx_Math" alttext="\displaystyle\quad\left(\mathrm{asinh}\left(\frac{L/2-a}{\sqrt{b-a^{2}}}\right%
)-\mathrm{asinh}\left(\frac{-L/2-a}{\sqrt{b-a^{2}}}\right)\right),\ i=x,y,z," display="inline"><mrow><mrow><mrow id="XM1176"><mrow><mrow id="XM1172"><mi mathvariant="normal"> </mi><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1171"><mrow><mi>asinh</mi><mo>⁢</mo><mrow><mo>(</mo><mstyle displaystyle="true" id="XM1169"><mfrac id="XM1169a"><mrow><mrow><mi>L</mi><mo>/</mo><mn>2</mn></mrow><mo>-</mo><mi>a</mi></mrow><msqrt><mrow><mi>b</mi><mo>-</mo><msup><mi>a</mi><mn>2</mn></msup></mrow></msqrt></mfrac></mstyle><mo>)</mo></mrow></mrow><mo>-</mo><mrow><mi>asinh</mi><mo>⁢</mo><mrow><mo>(</mo><mstyle displaystyle="true" id="XM1170"><mfrac id="XM1170a"><mrow><mrow><mo>-</mo><mrow><mi>L</mi><mo>/</mo><mn>2</mn></mrow></mrow><mo>-</mo><mi>a</mi></mrow><msqrt><mrow><mi>b</mi><mo>-</mo><msup><mi>a</mi><mn>2</mn></msup></mrow></msqrt></mfrac></mstyle><mo>)</mo></mrow></mrow></mrow><mo>)</mo></mrow></mrow><mo rspace="7.5pt">,</mo><mi id="XM1173">i</mi></mrow><mo>=</mo><mi>x</mi></mrow><mo>,</mo><mrow><mi id="XM1174">y</mi><mo>,</mo><mi id="XM1175">z</mi></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(184)</span></td>
</tr>
</table>
<p class="ltx_p">where the parameters <math id="S3.SS12.p3.m3" class="ltx_Math" alttext="a" display="inline"><mi>a</mi></math> and <math id="S3.SS12.p3.m4" class="ltx_Math" alttext="b" display="inline"><mi>b</mi></math> are defined as</p>
<table id="S5.EGx72" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E185" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E185.m1" class="ltx_Math" alttext="\displaystyle a" display="inline"><mi>a</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E185.m2" class="ltx_Math" alttext="\displaystyle=x\cdot\cos(c_{x})+y\cdot\cos(c_{y})+z\cdot\cos(c_{z})," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>x</mi><mo>⋅</mo><mrow><mi id="XM1184">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><msub id="XM1185"><mi>c</mi><mi>x</mi></msub><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>+</mo><mrow><mi>y</mi><mo>⋅</mo><mrow><mi id="XM1186">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><msub id="XM1187"><mi>c</mi><mi>y</mi></msub><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>+</mo><mrow><mi>z</mi><mo>⋅</mo><mrow><mi id="XM1188">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><msub id="XM1189"><mi>c</mi><mi>z</mi></msub><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(185)</span></td>
</tr>
<tr id="S3.E186" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E186.m1" class="ltx_Math" alttext="\displaystyle b" display="inline"><mi>b</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E186.m2" class="ltx_Math" alttext="\displaystyle=x^{2}+y^{2}+z^{2}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><msup><mi>y</mi><mn>2</mn></msup><mo>+</mo><msup><mi>z</mi><mn>2</mn></msup></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(186)</span></td>
</tr>
</table>
<p class="ltx_p">and <math id="S3.SS12.p3.m5" class="ltx_Math" alttext="\cos(c_{i})" display="inline"><mrow><mi id="XM1190">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><msub id="XM1191"><mi>c</mi><mi>i</mi></msub><mo stretchy="false">)</mo></mrow></mrow></math> are the direction cosines. The direction cosines can in general be expressed through two tilt angles <math id="S3.SS12.p3.m6" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math> and <math id="S3.SS12.p3.m7" class="ltx_Math" alttext="\theta" display="inline"><mi>θ</mi></math> (see Fig. <a href="#S3.F3" title="Figure 3 ‣ 3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a>) with:</p>
<table id="S5.EGx73" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex10" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.Ex10.m1" class="ltx_Math" alttext="\displaystyle\cos(c_{x})" display="inline"><mrow><mi id="XM1200">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><msub id="XM1201"><mi>c</mi><mi>x</mi></msub><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.Ex10.m2" class="ltx_Math" alttext="\displaystyle:=\frac{\tan({\phi})}{\sqrt{\tan^{2}({\phi})+\tan^{2}({\theta})+1}}" display="inline"><mrow><mo id="XM1208">:</mo><mo id="XM1209">=</mo><mstyle displaystyle="true"><mfrac><mrow><mi id="XM1202">tan</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM1203">ϕ</mi><mo stretchy="false">)</mo></mrow></mrow><msqrt><mrow><mrow><msup id="XM1204"><mi>tan</mi><mn>2</mn></msup><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM1205">ϕ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><msup id="XM1206"><mi>tan</mi><mn>2</mn></msup><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM1207">θ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mn>1</mn></mrow></msqrt></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E187" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E187.m1" class="ltx_Math" alttext="\displaystyle\cos(c_{y})" display="inline"><mrow><mi id="XM1218">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><msub id="XM1219"><mi>c</mi><mi>y</mi></msub><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E187.m2" class="ltx_Math" alttext="\displaystyle:=\frac{\tan({\theta})}{\sqrt{\tan^{2}({\phi})+\tan^{2}({\theta})%
+1}}" display="inline"><mrow><mo id="XM1226">:</mo><mo id="XM1227">=</mo><mstyle displaystyle="true"><mfrac><mrow><mi id="XM1220">tan</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM1221">θ</mi><mo stretchy="false">)</mo></mrow></mrow><msqrt><mrow><mrow><msup id="XM1222"><mi>tan</mi><mn>2</mn></msup><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM1223">ϕ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><msup id="XM1224"><mi>tan</mi><mn>2</mn></msup><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM1225">θ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mn>1</mn></mrow></msqrt></mfrac></mstyle></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(187)</span></td>
</tr>
<tr id="S3.Ex11" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.Ex11.m1" class="ltx_Math" alttext="\displaystyle\cos(c_{z})" display="inline"><mrow><mi id="XM1234">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><msub id="XM1235"><mi>c</mi><mi>z</mi></msub><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.Ex11.m2" class="ltx_Math" alttext="\displaystyle:=\frac{1}{\sqrt{\tan^{2}({\phi})+\tan^{2}({\theta})+1}}." display="inline"><mrow><mo id="XM1240">:</mo><mo id="XM1241">=</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><msqrt><mrow><mrow><msup id="XM1236"><mi>tan</mi><mn>2</mn></msup><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM1237">ϕ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><msup id="XM1238"><mi>tan</mi><mn>2</mn></msup><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM1239">θ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mn>1</mn></mrow></msqrt></mfrac></mstyle><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
<figure id="S3.F3" class="ltx_figure"><svg id="S3.F3.pic1" class="ltx_picture ltx_centering" height="227.11" version="1.1" viewBox="-164.01 -113.56 317.65 227.11" width="317.65"><g transform="matrix(1 0 0 -1 0 -0.00999999999999091)"><g stroke="#000000"><g fill="#000000"><g stroke-width="0.4pt"><g stroke-width="0.8pt"><path d="M -125.98 0 L 125 0" style="fill:none"></path><g transform="matrix(1 0 0 1 125 0)"><g stroke-width="0.64pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -2.16 2.88 C -1.98 1.8 0 0.18 0.54 0 C 0 -0.18 -1.98 -1.8 -2.16 -2.88" style="fill:none"></path></g></g></g></g></g></g><g stroke-width="0.8pt"><path d="M 0 -110.24 L 0 109.25" style="fill:none"></path><g transform="matrix(0 1 -1 0 0 109.25)"><g stroke-width="0.64pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -2.16 2.88 C -1.98 1.8 0 0.18 0.54 0 C 0 -0.18 -1.98 -1.8 -2.16 -2.88" style="fill:none"></path></g></g></g></g></g></g><g stroke-width="0.8pt"><path d="M -110.24 -110.24 L 109.54 109.54" style="fill:none"></path><g transform="matrix(0.707097 0.7071 -0.7071 0.707097 109.54 109.54)"><g stroke-width="0.64pt"><g stroke-dashoffset="0.0pt"><g stroke-linecap="round"><g stroke-linejoin="round"><path d="M -2.16 2.88 C -1.98 1.8 0 0.18 0.54 0 C 0 -0.18 -1.98 -1.8 -2.16 -2.88" style="fill:none"></path></g></g></g></g></g></g><g stroke="#FF0000" color="#FF0000"><g fill="#FF0000"><g stroke-width="1.6pt"><path d="M -110.24 -55.12 L 110.24 55.12" style="fill:none"></path></g></g></g><g transform="matrix(1 0 0 1 130.87 -14.57)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="10.38">
                              <math id="S3.F3.pic1.m1" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>
                            </foreignObject></switch></g></g><g transform="matrix(1 0 0 1 4.89 95.66)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="10.38">
                              <math id="S3.F3.pic1.m2" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>
                            </foreignObject></switch></g></g><g transform="matrix(1 0 0 1 115.12 95.66)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="10.38">
                              <math id="S3.F3.pic1.m3" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>
                            </foreignObject></switch></g></g><g transform="matrix(1 0 0 1 115.12 51.66)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="31.13">
                              <math id="S3.F3.pic1.m4" class="ltx_Math" alttext="L/2" display="inline"><mrow><mi>L</mi><mo>/</mo><mn>2</mn></mrow></math>
                            </foreignObject></switch></g></g><g transform="matrix(1 0 0 1 -156.64 -58.58)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="41.51">
                              <math id="S3.F3.pic1.m5" class="ltx_Math" alttext="-L/2" display="inline"><mrow><mo>-</mo><mrow><mi>L</mi><mo>/</mo><mn>2</mn></mrow></mrow></math>
                            </foreignObject></switch></g></g><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 110.24 55.12 L 86.61 31.5" style="fill:none"></path></g><g stroke="#00FF00" color="#00FF00"><g fill="#00FF00"><g stroke-width="1.6pt"><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 86.61 31.5 L 86.61 0" style="fill:none"></path></g></g></g></g><g stroke="#0000FF" color="#0000FF"><g fill="#0000FF"><g stroke-width="1.6pt"><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 86.61 0 L 110.24 23.62" style="fill:none"></path></g></g></g></g><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 110.24 23.62 L 110.24 55.12" style="fill:none"></path></g><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 110.24 55.12 L 23.62 55.12" style="fill:none"></path></g><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 86.61 31.5 L 0 31.5" style="fill:none"></path></g><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 0 31.5 L 23.62 55.12" style="fill:none"></path></g><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 23.62 55.12 L 23.62 23.62" style="fill:none"></path></g><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 23.62 23.62 L 110.24 23.62" style="fill:none"></path></g><g stroke="#0000FF" color="#0000FF"><g fill="#0000FF"><g stroke-width="1.6pt"><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 110.24 23.62 L 0 0" style="fill:none"></path></g></g></g></g><g stroke="#00FF00" color="#00FF00"><g fill="#00FF00"><g stroke-width="1.6pt"><g stroke-dasharray="3.0pt,3.0pt" stroke-dashoffset="0.0pt"><path d="M 0 0 L 86.61 31.5" style="fill:none"></path></g></g></g></g><g stroke="#0000FF" color="#0000FF"><g fill="#0000FF"><g stroke-width="1.2pt"><path d="M 29.92 6.3 C 29.92 8.83 31.28 2.53 31.5 0" style="fill:none"></path></g></g></g><g stroke="#00FF00" color="#00FF00"><g fill="#00FF00"><g stroke-width="1.2pt"><path d="M 47.24 15.75 C 47.24 21.89 49.34 5.77 47.24 0" style="fill:none"></path></g></g></g><g transform="matrix(1 0 0 1 26.31 -14.57)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="10.38">
                              <math id="S3.F3.pic1.m6" class="ltx_Math" alttext="{\theta}" display="inline"><mi>θ</mi></math>
                            </foreignObject></switch></g></g><g transform="matrix(1 0 0 1 42.06 -14.57)"><g class="ltx_svg_fog" transform="matrix(1 0 0 -1 0 9.69)"><switch><foreignObject color="#000000" height="12.45" overflow="visible" width="10.38">
                              <math id="S3.F3.pic1.m7" class="ltx_Math" alttext="{\phi}" display="inline"><mi>ϕ</mi></math>
                            </foreignObject></switch></g></g></g></g></g></g></svg>
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure 3: </span>Wire centered (red) at the origin including the angles <math id="S3.F3.m3" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math> and <math id="S3.F3.m4" class="ltx_Math" alttext="\theta" display="inline"><mi>θ</mi></math> as defined for the directional cosines in Eqn. <a href="#S3.Ex10" title="3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.12</span></a>.</figcaption>
</figure>
<div id="S3.SS12.p4" class="ltx_para">
<p class="ltx_p">In case the wire lies parallel to the longitudinal axis (<math id="S3.SS12.p4.m1" class="ltx_Math" alttext="\phi=\theta=0" display="inline"><mrow><mi>ϕ</mi><mo>=</mo><mi>θ</mi><mo>=</mo><mn>0</mn></mrow></math>), the transverse potential <math id="S3.SS12.p4.m2" class="ltx_Math" alttext="A_{x,y}" display="inline"><msub><mi>A</mi><mrow><mi id="XM1242">x</mi><mo>,</mo><mi id="XM1243">y</mi></mrow></msub></math> vanish and the longitudinal potential can be further simplified, leading to:</p>
<table id="S5.EGx74" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex12" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.Ex12.m1" class="ltx_Math" alttext="\displaystyle A_{x}(x,y,z)" display="inline"><mrow><msub><mi>A</mi><mi>x</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1247">x</mi><mo>,</mo><mi id="XM1248">y</mi><mo>,</mo><mi id="XM1249">z</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.Ex12.m2" class="ltx_Math" alttext="\displaystyle=0" display="inline"><mrow><mi></mi><mo>=</mo><mn>0</mn></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.Ex13" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.Ex13.m1" class="ltx_Math" alttext="\displaystyle A_{y}(x,y,z)" display="inline"><mrow><msub><mi>A</mi><mi>y</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1253">x</mi><mo>,</mo><mi id="XM1254">y</mi><mo>,</mo><mi id="XM1255">z</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.Ex13.m2" class="ltx_Math" alttext="\displaystyle=0" display="inline"><mrow><mi></mi><mo>=</mo><mn>0</mn></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E188" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E188.m1" class="ltx_Math" alttext="\displaystyle A_{z}(x,y,z)" display="inline"><mrow><msub><mi>A</mi><mi>z</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1262">x</mi><mo>,</mo><mi id="XM1263">y</mi><mo>,</mo><mi id="XM1264">z</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E188.m2" class="ltx_Math" alttext="\displaystyle=\frac{I\mu_{0}}{4\pi}\cdot\left(\mathrm{asinh}\left(\frac{L/2-z}%
{\sqrt{x^{2}+y^{2}}}\right)-\mathrm{asinh}\left(\frac{-L/2-z}{\sqrt{x^{2}+y^{2%
}}}\right)\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mrow><mi>I</mi><mo>⁢</mo><msub><mi>μ</mi><mn>0</mn></msub></mrow><mrow><mn>4</mn><mo>⁢</mo><mi>π</mi></mrow></mfrac></mstyle><mo>⋅</mo><mrow><mo>(</mo><mrow id="XM1267"><mrow><mi>asinh</mi><mo>⁢</mo><mrow><mo>(</mo><mstyle displaystyle="true" id="XM1265"><mfrac id="XM1265a"><mrow><mrow><mi>L</mi><mo>/</mo><mn>2</mn></mrow><mo>-</mo><mi>z</mi></mrow><msqrt><mrow><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><msup><mi>y</mi><mn>2</mn></msup></mrow></msqrt></mfrac></mstyle><mo>)</mo></mrow></mrow><mo>-</mo><mrow><mi>asinh</mi><mo>⁢</mo><mrow><mo>(</mo><mstyle displaystyle="true" id="XM1266"><mfrac id="XM1266a"><mrow><mrow><mo>-</mo><mrow><mi>L</mi><mo>/</mo><mn>2</mn></mrow></mrow><mo>-</mo><mi>z</mi></mrow><msqrt><mrow><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><msup><mi>y</mi><mn>2</mn></msup></mrow></msqrt></mfrac></mstyle><mo>)</mo></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(188)</span></td>
</tr>
</table>
<p class="ltx_p">The Hamiltonian for the wire is then simply <math id="S3.SS12.p4.m3" class="ltx_Math" alttext="H=-A_{s}=-A_{z}" display="inline"><mrow><mi>H</mi><mo>=</mo><mrow><mo>-</mo><msub><mi>A</mi><mi>s</mi></msub></mrow><mo>=</mo><mrow><mo>-</mo><msub><mi>A</mi><mi>z</mi></msub></mrow></mrow></math>.</p>
</div>
<div id="S3.SS12.p5" class="ltx_para">
<p class="ltx_p">The kick experienced by an arbitrary particle with coordinates <math id="S3.SS12.p5.m1" class="ltx_Math" alttext="(x,y,z)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM1268">x</mi><mo>,</mo><mi id="XM1269">y</mi><mo>,</mo><mi id="XM1270">z</mi><mo stretchy="false">)</mo></mrow></math> using a first order symplectic integrator is then given by:</p>
<table id="S5.EGx75" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E189" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E189.m1" class="ltx_Math" alttext="\displaystyle\Delta p_{x}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E189.m2" class="ltx_Math" alttext="\displaystyle=\int\limits_{-L_{\mathrm{emb}}/2}^{+L_{\mathrm{emb}}/2}{\frac{%
\partial A_{z}(x,y,s)}{\partial x}ds}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∫</mo><mrow><mo>-</mo><mrow><msub><mi>L</mi><mi>emb</mi></msub><mo>/</mo><mn>2</mn></mrow></mrow><mrow><mo>+</mo><mrow><msub><mi>L</mi><mi>emb</mi></msub><mo>/</mo><mn>2</mn></mrow></mrow></munderover></mstyle><mrow><mstyle displaystyle="true"><mfrac><mrow><mrow><mo>∂</mo><mo>⁡</mo><msub><mi>A</mi><mi>z</mi></msub></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1274">x</mi><mo>,</mo><mi id="XM1275">y</mi><mo>,</mo><mi id="XM1276">s</mi><mo stretchy="false">)</mo></mrow></mrow><mrow><mo>∂</mo><mo>⁡</mo><mi>x</mi></mrow></mfrac></mstyle><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi>s</mi></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(189)</span></td>
</tr>
<tr id="S3.E190" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E190.m1" class="ltx_Math" alttext="\displaystyle\Delta p_{y}" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E190.m2" class="ltx_Math" alttext="\displaystyle=\int\limits_{-L_{\mathrm{emb}}/2}^{+L_{\mathrm{emb}}/2}{\frac{%
\partial A_{z}(x,y,s)}{\partial y}ds}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∫</mo><mrow><mo>-</mo><mrow><msub><mi>L</mi><mi>emb</mi></msub><mo>/</mo><mn>2</mn></mrow></mrow><mrow><mo>+</mo><mrow><msub><mi>L</mi><mi>emb</mi></msub><mo>/</mo><mn>2</mn></mrow></mrow></munderover></mstyle><mrow><mstyle displaystyle="true"><mfrac><mrow><mrow><mo>∂</mo><mo>⁡</mo><msub><mi>A</mi><mi>z</mi></msub></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1280">x</mi><mo>,</mo><mi id="XM1281">y</mi><mo>,</mo><mi id="XM1282">s</mi><mo stretchy="false">)</mo></mrow></mrow><mrow><mo>∂</mo><mo>⁡</mo><mi>y</mi></mrow></mfrac></mstyle><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi>s</mi></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(190)</span></td>
</tr>
<tr id="S3.E191" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E191.m1" class="ltx_Math" alttext="\displaystyle\Delta x" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>x</mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E191.m2" class="ltx_Math" alttext="\displaystyle=\Delta y=\Delta\delta=\Delta\sigma=0" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>y</mi></mrow><mo>=</mo><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>δ</mi></mrow><mo>=</mo><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>σ</mi></mrow><mo>=</mo><mn>0</mn></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(191)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS12.p5.m2" class="ltx_Math" alttext="L_{\mathrm{emb}}" display="inline"><msub><mi>L</mi><mi>emb</mi></msub></math> is the embedding drift or integration length (see Fig. <a href="#S3.F2" title="Figure 2 ‣ 3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2</span></a>), which takes into account the fringe field of the wire, while the parameter <math id="S3.SS12.p5.m3" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> in Eqn. <a href="#S3.Ex12" title="3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.12</span></a> denotes the physical length of the wire. A symplectic rotation of the coordinate system as described in <cite class="ltx_cite">[<a href="#bib.bib13" title="Beam dynamics: a new attitude and framework" class="ltx_ref">3</a>]</cite> is included in order to compute the transport map for arbitrary orientation, explicitly arbitrary angles <math id="S3.SS12.p5.m4" class="ltx_Math" alttext="\theta" display="inline"><mi>θ</mi></math> and <math id="S3.SS12.p5.m5" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math> in Fig. <a href="#S3.F3" title="Figure 3 ‣ 3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a>.</p>
</div>
<div id="S3.SS12.p6" class="ltx_para">
<p class="ltx_p">The first order symplectic transport map in thin lens approximation for an arbitrary orientation of the wire can then be obtained by the following steps:</p>
</div>
<div id="S3.SS12.p7" class="ltx_para">
<dl id="I1" class="ltx_description">
<dt id="I1.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">Step 1</span></dt>
<dd class="ltx_item">
<div id="I1.ix1.p1" class="ltx_para">
<p class="ltx_p">Shift to the origin: We define the new variables</p>
<table id="S5.EGx76" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex14" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.Ex14.m1" class="ltx_Math" alttext="\displaystyle r_{x}" display="inline"><msub><mi>r</mi><mi>x</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.Ex14.m2" class="ltx_Math" alttext="\displaystyle:=x-x_{co}+dx" display="inline"><mrow><mo id="XM1283">:</mo><mo id="XM1284">=</mo><mi>x</mi><mo>-</mo><msub><mi>x</mi><mrow><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow></msub><mo>+</mo><mi>d</mi><mi>x</mi></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E192" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E192.m1" class="ltx_Math" alttext="\displaystyle r_{y}" display="inline"><msub><mi>r</mi><mi>y</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E192.m2" class="ltx_Math" alttext="\displaystyle:=y-y_{co}+dy" display="inline"><mrow><mo id="XM1285">:</mo><mo id="XM1286">=</mo><mi>y</mi><mo>-</mo><msub><mi>y</mi><mrow><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow></msub><mo>+</mo><mi>d</mi><mi>y</mi></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(192)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="I1.ix1.p1.m1" class="ltx_Math" alttext="x_{co}" display="inline"><msub><mi>x</mi><mrow><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow></msub></math> and <math id="I1.ix1.p1.m2" class="ltx_Math" alttext="y_{co}" display="inline"><msub><mi>y</mi><mrow><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow></msub></math> denotes the closed orbit at the center of the wire.</p>
</div>
</dd>
<dt id="I1.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">Step 2</span></dt>
<dd class="ltx_item">
<div id="I1.ix2.p1" class="ltx_para">
<p class="ltx_p">Symplectic rotation in <math id="I1.ix2.p1.m1" class="ltx_Math" alttext="(x,z)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM1287">x</mi><mo>,</mo><mi id="XM1288">z</mi><mo stretchy="false">)</mo></mrow></math> by <math id="I1.ix2.p1.m2" class="ltx_Math" alttext="\theta" display="inline"><mi>θ</mi></math> as described in <cite class="ltx_cite">[<a href="#bib.bib13" title="Beam dynamics: a new attitude and framework" class="ltx_ref">3</a>]</cite>: In a drift space the normalized momenta <math id="I1.ix2.p1.m3" class="ltx_Math" alttext="p_{i}" display="inline"><msub><mi>p</mi><mi>i</mi></msub></math> are related by <math id="I1.ix2.p1.m4" class="ltx_Math" alttext="p_{x}^{2}+p_{y}^{2}+p_{z}^{2}=(1+\delta)^{2}" display="inline"><mrow><mrow><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>p</mi><mi>z</mi><mn>2</mn></msubsup></mrow><mo>=</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1289"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow></math> and we can thus write <math id="I1.ix2.p1.m5" class="ltx_Math" alttext="p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math> as</p>
<table id="S5.EGx77" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E193" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E193.m1" class="ltx_Math" alttext="\displaystyle p_{z}=\sqrt{(1+\delta)^{2}-p_{x}^{2}-p_{y}^{2}}" display="inline"><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>=</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1291"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(193)</span></td>
</tr>
</table>
<p class="ltx_p">The rotation by <math id="I1.ix2.p1.m6" class="ltx_Math" alttext="\theta" display="inline"><mi>θ</mi></math> can then be expressed as a rotation first in <math id="I1.ix2.p1.m7" class="ltx_Math" alttext="(p_{x},p_{z})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM1292"><mi>p</mi><mi>x</mi></msub><mo>,</mo><msub id="XM1293"><mi>p</mi><mi>z</mi></msub><mo stretchy="false">)</mo></mrow></math>:</p>
<table id="S5.EGx78" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex15" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.Ex15.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.Ex15.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}\cdot\cos\theta+p_{z}\cdot\sin\theta" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⋅</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow><mo>+</mo><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E194" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E194.m1" class="ltx_Math" alttext="\displaystyle p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E194.m2" class="ltx_Math" alttext="\displaystyle\to-p_{x}\cdot\sin\theta+p_{z}\cdot\cos\theta" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mo>-</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow><mo>+</mo><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⋅</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(194)</span></td>
</tr>
</table>
<p class="ltx_p">followed by a transformation in <math id="I1.ix2.p1.m8" class="ltx_Math" alttext="(r_{x},r_{y})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM1294"><mi>r</mi><mi>x</mi></msub><mo>,</mo><msub id="XM1295"><mi>r</mi><mi>y</mi></msub><mo stretchy="false">)</mo></mrow></math>:</p>
<table id="S5.EGx79" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex16" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.Ex16.m1" class="ltx_Math" alttext="\displaystyle r_{x}" display="inline"><msub><mi>r</mi><mi>x</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.Ex16.m2" class="ltx_Math" alttext="\displaystyle\to r_{x}\left(\cos\theta-\frac{p_{x}}{p_{z}}\cdot\sin\theta\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>r</mi><mi>x</mi></msub><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1297"><mrow><mi>cos</mi><mo>⁡</mo><mi>θ</mi></mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E195" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E195.m1" class="ltx_Math" alttext="\displaystyle r_{y}" display="inline"><msub><mi>r</mi><mi>y</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E195.m2" class="ltx_Math" alttext="\displaystyle\to r_{y}-r_{x}\cdot\frac{p_{y}}{p_{z}}\cdot\sin\theta" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>r</mi><mi>y</mi></msub><mo>-</mo><mrow><msub><mi>r</mi><mi>x</mi></msub><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(195)</span></td>
</tr>
</table>
</div>
</dd>
<dt id="I1.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">Step 3</span></dt>
<dd class="ltx_item">
<div id="I1.ix3.p1" class="ltx_para">
<p class="ltx_p">Symplectic rotation in <math id="I1.ix3.p1.m1" class="ltx_Math" alttext="(y,z)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM1298">y</mi><mo>,</mo><mi id="XM1299">z</mi><mo stretchy="false">)</mo></mrow></math> by <math id="I1.ix3.p1.m2" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math> as described in <cite class="ltx_cite">[<a href="#bib.bib13" title="Beam dynamics: a new attitude and framework" class="ltx_ref">3</a>]</cite>: The new <math id="I1.ix3.p1.m3" class="ltx_Math" alttext="p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math> is again defined as
<math id="I1.ix3.p1.m4" class="ltx_Math" alttext="p_{z}=\sqrt{(1+\delta)^{2}-p_{x}^{2}-p_{y}^{2}}" display="inline"><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>=</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1300"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow></math> using the updated values of <math id="I1.ix3.p1.m5" class="ltx_Math" alttext="p_{x},p_{y}" display="inline"><mrow><msub id="XM1301"><mi>p</mi><mi>x</mi></msub><mo>,</mo><msub id="XM1302"><mi>p</mi><mi>y</mi></msub></mrow></math> from Step 2. Analogical to the symplectic rotation in <math id="I1.ix3.p1.m6" class="ltx_Math" alttext="(x,z)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM1303">x</mi><mo>,</mo><mi id="XM1304">z</mi><mo stretchy="false">)</mo></mrow></math>, the rotation by <math id="I1.ix3.p1.m7" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math> in <math id="I1.ix3.p1.m8" class="ltx_Math" alttext="(y,z)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM1305">y</mi><mo>,</mo><mi id="XM1306">z</mi><mo stretchy="false">)</mo></mrow></math> can be expressed as a rotation first in <math id="I1.ix3.p1.m9" class="ltx_Math" alttext="(p_{y},p_{z})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM1307"><mi>p</mi><mi>y</mi></msub><mo>,</mo><msub id="XM1308"><mi>p</mi><mi>z</mi></msub><mo stretchy="false">)</mo></mrow></math>:</p>
<table id="S5.EGx80" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex17" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.Ex17.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.Ex17.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}\cdot\cos\phi+p_{z}\cdot\sin\phi" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>⋅</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow><mo>+</mo><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E196" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E196.m1" class="ltx_Math" alttext="\displaystyle p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E196.m2" class="ltx_Math" alttext="\displaystyle\to-p_{y}\cdot\sin\phi+p_{z}\cdot\cos\phi" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mo>-</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow><mo>+</mo><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⋅</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(196)</span></td>
</tr>
</table>
<p class="ltx_p">followed by a transformation in <math id="I1.ix3.p1.m10" class="ltx_Math" alttext="(r_{x},r_{y})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM1309"><mi>r</mi><mi>x</mi></msub><mo>,</mo><msub id="XM1310"><mi>r</mi><mi>y</mi></msub><mo stretchy="false">)</mo></mrow></math>:</p>
<table id="S5.EGx81" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex18" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.Ex18.m1" class="ltx_Math" alttext="\displaystyle r_{x}" display="inline"><msub><mi>r</mi><mi>x</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.Ex18.m2" class="ltx_Math" alttext="\displaystyle\to r_{x}-r_{y}\cdot\frac{p_{x}}{p_{z}}\cdot\sin\phi" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>r</mi><mi>x</mi></msub><mo>-</mo><mrow><msub><mi>r</mi><mi>y</mi></msub><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>x</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E197" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E197.m1" class="ltx_Math" alttext="\displaystyle r_{y}" display="inline"><msub><mi>r</mi><mi>y</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E197.m2" class="ltx_Math" alttext="\displaystyle\to r_{y}\left(\cos\theta-\frac{p_{y}}{p_{z}}\sin\theta\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>r</mi><mi>y</mi></msub><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1312"><mrow><mi>cos</mi><mo>⁡</mo><mi>θ</mi></mrow><mo>-</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>p</mi><mi>y</mi></msub><msub><mi>p</mi><mi>z</mi></msub></mfrac></mstyle><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(197)</span></td>
</tr>
</table>
</div>
</dd>
<dt id="I1.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">Step 4</span></dt>
<dd class="ltx_item">
<div id="I1.ix4.p1" class="ltx_para">
<p class="ltx_p">Application of the symplectic kick of a wire aligned along the longitudinal axis (<math id="I1.ix4.p1.m1" class="ltx_Math" alttext="\theta=\phi=0" display="inline"><mrow><mi>θ</mi><mo>=</mo><mi>ϕ</mi><mo>=</mo><mn>0</mn></mrow></math>): We define the radius <math id="I1.ix4.p1.m2" class="ltx_Math" alttext="r" display="inline"><mi>r</mi></math> in the <math id="I1.ix4.p1.m3" class="ltx_Math" alttext="(r_{x},r_{y})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM1313"><mi>r</mi><mi>x</mi></msub><mo>,</mo><msub id="XM1314"><mi>r</mi><mi>y</mi></msub><mo stretchy="false">)</mo></mrow></math> by:</p>
<table id="S5.EGx82" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E198" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E198.m1" class="ltx_Math" alttext="\displaystyle r^{2}:=r_{x}^{2}+r_{y}^{2}" display="inline"><mrow><msup><mi>r</mi><mn>2</mn></msup><mo>:=</mo><mrow><msubsup><mi>r</mi><mi>x</mi><mn>2</mn></msubsup><mo>+</mo><msubsup><mi>r</mi><mi>y</mi><mn>2</mn></msubsup></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(198)</span></td>
</tr>
</table>
<p class="ltx_p">The thin lens kick of the wire aligned along the longitudinal axis can then be expressed by:</p>
<table id="S5.EGx83" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex19" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.Ex19.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.Ex19.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}-10^{-7}\cdot I\frac{e}{P_{0}}\frac{r_{x}}{r^{2}}\left(d%
^{+}-d^{-}\right)-p_{co,wire}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><mrow><mrow><msup><mn>10</mn><mrow><mo>-</mo><mn>7</mn></mrow></msup><mo>⋅</mo><mi>I</mi></mrow><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>e</mi><msub><mi>P</mi><mn>0</mn></msub></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>r</mi><mi>x</mi></msub><msup><mi>r</mi><mn>2</mn></msup></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1320"><msup><mi>d</mi><mo>+</mo></msup><mo>-</mo><msup><mi>d</mi><mo>-</mo></msup></mrow><mo>)</mo></mrow></mrow><mo>-</mo><msub><mi>p</mi><mrow><mrow id="XM1318"><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow><mo>,</mo><mrow id="XM1319"><mi>w</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>e</mi></mrow></mrow></msub></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E199" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E199.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E199.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}-10^{-7}\cdot I\frac{e}{P_{0}}\frac{r_{y}}{r^{2}}\left(d%
^{+}-d^{-}\right)-p_{co,wire}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>-</mo><mrow><mrow><msup><mn>10</mn><mrow><mo>-</mo><mn>7</mn></mrow></msup><mo>⋅</mo><mi>I</mi></mrow><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>e</mi><msub><mi>P</mi><mn>0</mn></msub></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>r</mi><mi>y</mi></msub><msup><mi>r</mi><mn>2</mn></msup></mfrac></mstyle><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1326"><msup><mi>d</mi><mo>+</mo></msup><mo>-</mo><msup><mi>d</mi><mo>-</mo></msup></mrow><mo>)</mo></mrow></mrow><mo>-</mo><msub><mi>p</mi><mrow><mrow id="XM1324"><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow><mo>,</mo><mrow id="XM1325"><mi>w</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>e</mi></mrow></mrow></msub></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(199)</span></td>
</tr>
</table>
<p class="ltx_p">with <math id="I1.ix4.p1.m4" class="ltx_Math" alttext="d^{+}" display="inline"><msup><mi>d</mi><mo>+</mo></msup></math> and <math id="I1.ix4.p1.m5" class="ltx_Math" alttext="d^{-}" display="inline"><msup><mi>d</mi><mo>-</mo></msup></math> defined as:</p>
<table id="S5.EGx84" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E200" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E200.m1" class="ltx_Math" alttext="\displaystyle d^{+}" display="inline"><msup><mi>d</mi><mo>+</mo></msup></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E200.m2" class="ltx_Math" alttext="\displaystyle=\sqrt{(L_{\mathrm{emb}}+L)^{2}+4r^{2}}" display="inline"><mrow><mi></mi><mo>=</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1328"><msub><mi>L</mi><mi>emb</mi></msub><mo>+</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>+</mo><mrow><mn>4</mn><mo>⁢</mo><msup><mi>r</mi><mn>2</mn></msup></mrow></mrow></msqrt></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(200)</span></td>
</tr>
<tr id="S3.E201" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E201.m1" class="ltx_Math" alttext="\displaystyle d^{-}" display="inline"><msup><mi>d</mi><mo>-</mo></msup></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E201.m2" class="ltx_Math" alttext="\displaystyle=\sqrt{(L_{\mathrm{emb}}-L)^{2}+4r^{2}}" display="inline"><mrow><mi></mi><mo>=</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1330"><msub><mi>L</mi><mi>emb</mi></msub><mo>-</mo><mi>L</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>+</mo><mrow><mn>4</mn><mo>⁢</mo><msup><mi>r</mi><mn>2</mn></msup></mrow></mrow></msqrt></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(201)</span></td>
</tr>
</table>
<p class="ltx_p">As reminder <math id="I1.ix4.p1.m6" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> denotes the physical length of the wire and <math id="I1.ix4.p1.m7" class="ltx_Math" alttext="L_{\mathrm{emb}}" display="inline"><msub><mi>L</mi><mi>emb</mi></msub></math> the length of the embedded drift. The parameter <math id="I1.ix4.p1.m8" class="ltx_Math" alttext="p_{co,wire}" display="inline"><msub><mi>p</mi><mrow><mrow id="XM1331"><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow><mo>,</mo><mrow id="XM1332"><mi>w</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>e</mi></mrow></mrow></msub></math> is the closed orbit kick due to the wire. This kick is only subtracted if <em class="ltx_emph">ibeco</em> is equal to <math id="I1.ix4.p1.m9" class="ltx_Math" alttext="1" display="inline"><mn>1</mn></math> in the BEAM block.</p>
</div>
</dd>
<dt id="I1.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">Step 5</span></dt>
<dd class="ltx_item">
<div id="I1.ix5.p1" class="ltx_para">
<p class="ltx_p">Backward rotation by <math id="I1.ix5.p1.m1" class="ltx_Math" alttext="-\phi" display="inline"><mrow><mo>-</mo><mi>ϕ</mi></mrow></math> in <math id="I1.ix5.p1.m2" class="ltx_Math" alttext="(p_{y},p_{z})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM1333"><mi>p</mi><mi>y</mi></msub><mo>,</mo><msub id="XM1334"><mi>p</mi><mi>z</mi></msub><mo stretchy="false">)</mo></mrow></math>: The new <math id="I1.ix5.p1.m3" class="ltx_Math" alttext="p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math> is again defined as
<math id="I1.ix5.p1.m4" class="ltx_Math" alttext="p_{z}=\sqrt{(1+\delta)^{2}-p_{x}^{2}-p_{y}^{2}}" display="inline"><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>=</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1335"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow></math> using the updated values of <math id="I1.ix5.p1.m5" class="ltx_Math" alttext="p_{x},p_{y}" display="inline"><mrow><msub id="XM1336"><mi>p</mi><mi>x</mi></msub><mo>,</mo><msub id="XM1337"><mi>p</mi><mi>y</mi></msub></mrow></math> from Step 4. The rotation is then given by:</p>
<table id="S5.EGx85" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex20" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.Ex20.m1" class="ltx_Math" alttext="\displaystyle p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.Ex20.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}\cdot\cos\phi-p_{z}\cdot\sin\phi" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>⋅</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow><mo>-</mo><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E202" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E202.m1" class="ltx_Math" alttext="\displaystyle p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E202.m2" class="ltx_Math" alttext="\displaystyle\to p_{y}\cdot\sin\phi+p_{z}\cdot\cos\phi" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>y</mi></msub><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow><mo>+</mo><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⋅</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(202)</span></td>
</tr>
</table>
</div>
</dd>
<dt id="I1.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">Step 6</span></dt>
<dd class="ltx_item">
<div id="I1.ix6.p1" class="ltx_para">
<p class="ltx_p">Backward rotation by <math id="I1.ix6.p1.m1" class="ltx_Math" alttext="-\theta" display="inline"><mrow><mo>-</mo><mi>θ</mi></mrow></math> in <math id="I1.ix6.p1.m2" class="ltx_Math" alttext="(p_{x},p_{z})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM1338"><mi>p</mi><mi>x</mi></msub><mo>,</mo><msub id="XM1339"><mi>p</mi><mi>z</mi></msub><mo stretchy="false">)</mo></mrow></math>: The new <math id="I1.ix6.p1.m3" class="ltx_Math" alttext="p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math> is again defined as
<math id="I1.ix6.p1.m4" class="ltx_Math" alttext="p_{z}=\sqrt{(1+\delta)^{2}-p_{x}^{2}-p_{y}^{2}}" display="inline"><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>=</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1340"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msubsup><mi>p</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>p</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow></math> using the updated values of <math id="I1.ix6.p1.m5" class="ltx_Math" alttext="p_{x},p_{y}" display="inline"><mrow><msub id="XM1341"><mi>p</mi><mi>x</mi></msub><mo>,</mo><msub id="XM1342"><mi>p</mi><mi>y</mi></msub></mrow></math> from Step 5. The rotation is then given by:</p>
<table id="S5.EGx86" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.Ex21" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.Ex21.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.Ex21.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}\cdot\cos\theta-p_{z}\cdot\sin\theta" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⋅</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow><mo>-</mo><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S3.E203" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E203.m1" class="ltx_Math" alttext="\displaystyle p_{z}" display="inline"><msub><mi>p</mi><mi>z</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E203.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}\cdot\sin\theta+p_{z}\cdot\cos\theta" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>⋅</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow><mo>+</mo><mrow><msub><mi>p</mi><mi>z</mi></msub><mo>⋅</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>θ</mi></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(203)</span></td>
</tr>
</table>
</div>
</dd>
</dl>
<p class="ltx_p">Note that as required for a thin lens approximation, the map does not change <math id="S3.SS12.p7.m1" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math> and <math id="S3.SS12.p7.m2" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>.</p>
</div>
</section>
<section id="S3.SS13" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.13 </span>Crab cavity</h3>
<div id="S3.SS13.p1" class="ltx_para">
<p class="ltx_p">The voltage of the crab cavity is denoted by <math id="S3.SS13.p1.m1" class="ltx_Math" alttext="V" display="inline"><mi>V</mi></math>, the frequency by <math id="S3.SS13.p1.m2" class="ltx_Math" alttext="f" display="inline"><mi>f</mi></math> and the phase by <math id="S3.SS13.p1.m3" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math>. The map for a horizontal
crab cavity is</p>
<table id="S5.EGx87" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E204" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E204.m1" class="ltx_Math" alttext="\displaystyle p_{x}\to p_{x}-\frac{V}{p}\cdot(1+\delta)\sin\left(2\pi f\frac{%
\sigma}{c}+\phi\right)" display="inline"><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><mi>V</mi><mi>p</mi></mfrac></mstyle><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1346"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mi id="XM1347">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1348"><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><mi>f</mi><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>σ</mi><mi>c</mi></mfrac></mstyle></mrow><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(204)</span></td>
</tr>
<tr id="S3.E205" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E205.m1" class="ltx_Math" alttext="\displaystyle\delta\to\delta-2\pi f\frac{V}{pc}\cdot x\cdot\cos\left(2\pi f%
\frac{\sigma}{c}+\phi\right)." display="inline"><mrow><mrow><mi>δ</mi><mo>→</mo><mrow><mi>δ</mi><mo>-</mo><mrow><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><mi>f</mi><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>V</mi><mrow><mi>p</mi><mo>⁢</mo><mi>c</mi></mrow></mfrac></mstyle></mrow><mo>⋅</mo><mi>x</mi><mo>⋅</mo><mrow><mi id="XM1351">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1352"><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><mi>f</mi><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>σ</mi><mi>c</mi></mfrac></mstyle></mrow><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow><mo>.</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(205)</span></td>
</tr>
</table>
<p class="ltx_p">Followed by updates of the momentum and energy due to the change of <math id="S3.SS13.p1.m4" class="ltx_Math" alttext="\delta" display="inline"><mi>δ</mi></math>. The map for a vertical crab cavity
is given by replacing <math id="S3.SS13.p1.m5" class="ltx_Math" alttext="x\to y" display="inline"><mrow><mi>x</mi><mo>→</mo><mi>y</mi></mrow></math> and <math id="S3.SS13.p1.m6" class="ltx_Math" alttext="p_{x}\to p_{y}" display="inline"><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>→</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></math> in the map above.</p>
</div>
</section>
<section id="S3.SS14" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.14 </span>AC-dipole</h3>
<div id="S3.SS14.p1" class="ltx_para">
<p class="ltx_p">The excitation amplitude of the AC-dipole is denoted by <math id="S3.SS14.p1.m1" class="ltx_Math" alttext="A" display="inline"><mi>A</mi></math> [Tm], the excitation frequency by <math id="S3.SS14.p1.m2" class="ltx_Math" alttext="q_{d}" display="inline"><msub><mi>q</mi><mi>d</mi></msub></math> [<math id="S3.SS14.p1.m3" class="ltx_Math" alttext="2\pi" display="inline"><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi></mrow></math>] and the phase of the excitation by <math id="S3.SS14.p1.m4" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math>. The map
presented here is for a purely horizontal dipole, the map for a vertical dipole is obtained by replacing <math id="S3.SS14.p1.m5" class="ltx_Math" alttext="p_{x}\to p_{y}" display="inline"><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>→</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></math>.</p>
</div>
<div id="S3.SS14.p2" class="ltx_para">
<p class="ltx_p">The effect of the AC-dipole is split into four stages. The turn number is denoted by <math id="S3.SS14.p2.m1" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math>.</p>
<ol id="I2" class="ltx_enumerate">
<li id="I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="I2.i1.p1" class="ltx_para">
<p class="ltx_p">A number of free turns <math id="I2.i1.p1.m1" class="ltx_Math" alttext="n_{\text{free}}" display="inline"><msub><mi>n</mi><mtext>free</mtext></msub></math>, in which the AC-dipole has no effect on the motion.</p>
</div>
</li>
<li id="I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="I2.i2.p1" class="ltx_para">
<p class="ltx_p">Ramp-up of the voltage from <math id="I2.i2.p1.m1" class="ltx_Math" alttext="0" display="inline"><mn>0</mn></math> to the excitation amplitude <math id="I2.i2.p1.m2" class="ltx_Math" alttext="A" display="inline"><mi>A</mi></math> for <math id="I2.i2.p1.m3" class="ltx_Math" alttext="n_{\text{ramp-up}}" display="inline"><msub><mi>n</mi><mtext>ramp-up</mtext></msub></math> turns.</p>
<table id="S5.EGx88" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E206" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E206.m1" class="ltx_Math" alttext="\displaystyle n^{\prime}" display="inline"><msup><mi>n</mi><mo>′</mo></msup></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E206.m2" class="ltx_Math" alttext="\displaystyle=\frac{n-n_{\text{free}}}{n_{\text{ramp-up}}}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mi>n</mi><mo>-</mo><msub><mi>n</mi><mtext>free</mtext></msub></mrow><msub><mi>n</mi><mtext>ramp-up</mtext></msub></mfrac></mstyle></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(206)</span></td>
</tr>
<tr id="S3.E207" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E207.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E207.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}+n^{\prime}\cdot\frac{A}{pc}\cdot(1+\delta)\sin\left(2%
\pi q_{d}\cdot(n-n_{\text{free}})+\phi\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>+</mo><mrow><mrow><msup><mi>n</mi><mo>′</mo></msup><mo>⋅</mo><mstyle displaystyle="true"><mfrac><mi>A</mi><mrow><mi>p</mi><mo>⁢</mo><mi>c</mi></mrow></mfrac></mstyle><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1357"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mi id="XM1359">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1360"><mrow><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><msub><mi>q</mi><mi>d</mi></msub></mrow><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1358"><mi>n</mi><mo>-</mo><msub><mi>n</mi><mtext>free</mtext></msub></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(207)</span></td>
</tr>
</table>
</div>
</li>
<li id="I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="I2.i3.p1" class="ltx_para">
<p class="ltx_p">Constant excitation amplitude for <math id="I2.i3.p1.m1" class="ltx_Math" alttext="n_{\text{flat}}" display="inline"><msub><mi>n</mi><mtext>flat</mtext></msub></math> turns.</p>
<table id="S5.EGx89" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E208" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E208.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E208.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}+\frac{A}{pc}\cdot(1+\delta)\sin\left(2\pi q_{d}\cdot(n-%
n_{\text{free}})+\phi\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>+</mo><mrow><mrow><mstyle displaystyle="true"><mfrac><mi>A</mi><mrow><mi>p</mi><mo>⁢</mo><mi>c</mi></mrow></mfrac></mstyle><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1365"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mi id="XM1367">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1368"><mrow><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><msub><mi>q</mi><mi>d</mi></msub></mrow><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1366"><mi>n</mi><mo>-</mo><msub><mi>n</mi><mtext>free</mtext></msub></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(208)</span></td>
</tr>
</table>
</div>
</li>
<li id="I2.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="I2.i4.p1" class="ltx_para">
<p class="ltx_p">Ramp-down of the voltage from the excitation amplitude <math id="I2.i4.p1.m1" class="ltx_Math" alttext="A" display="inline"><mi>A</mi></math> to <math id="I2.i4.p1.m2" class="ltx_Math" alttext="0" display="inline"><mn>0</mn></math> for <math id="I2.i4.p1.m3" class="ltx_Math" alttext="n_{\text{ramp-down}}" display="inline"><msub><mi>n</mi><mtext>ramp-down</mtext></msub></math> turns.</p>
<table id="S5.EGx90" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E209" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E209.m1" class="ltx_Math" alttext="\displaystyle n^{\prime}" display="inline"><msup><mi>n</mi><mo>′</mo></msup></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E209.m2" class="ltx_Math" alttext="\displaystyle=\frac{n-n_{\text{free}}-n_{\text{ramp-up}}-n_{\text{flat}}-n_{%
\text{ramp-down}}}{n_{\text{ramp-down}}}" display="inline"><mrow><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><mi>n</mi><mo>-</mo><msub><mi>n</mi><mtext>free</mtext></msub><mo>-</mo><msub><mi>n</mi><mtext>ramp-up</mtext></msub><mo>-</mo><msub><mi>n</mi><mtext>flat</mtext></msub><mo>-</mo><msub><mi>n</mi><mtext>ramp-down</mtext></msub></mrow><msub><mi>n</mi><mtext>ramp-down</mtext></msub></mfrac></mstyle></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(209)</span></td>
</tr>
<tr id="S3.E210" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S3.E210.m1" class="ltx_Math" alttext="\displaystyle p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S3.E210.m2" class="ltx_Math" alttext="\displaystyle\to p_{x}+n^{\prime}\cdot\frac{A}{p}\cdot(1+\delta)\sin\left(2\pi
q%
_{d}\cdot(n-n_{\text{free}})+\phi\right)" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>p</mi><mi>x</mi></msub><mo>+</mo><mrow><mrow><msup><mi>n</mi><mo>′</mo></msup><mo>⋅</mo><mstyle displaystyle="true"><mfrac><mi>A</mi><mi>p</mi></mfrac></mstyle><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1373"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mi id="XM1375">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1376"><mrow><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><msub><mi>q</mi><mi>d</mi></msub></mrow><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1374"><mi>n</mi><mo>-</mo><msub><mi>n</mi><mtext>free</mtext></msub></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(210)</span></td>
</tr>
</table>
</div>
</li>
</ol>
</div>
</section>
<section id="S3.SS15" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.15 </span>Electron lens</h3>
<section id="S3.SS15.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.15.1 </span>Hollow electron lens - uniform annular profile</h4>
<div id="S3.SS15.SSS1.p1" class="ltx_para">
<p class="ltx_p">For a uniform distribution of the electron beam between <math id="S3.SS15.SSS1.p1.m1" class="ltx_Math" alttext="R_{1}" display="inline"><msub><mi>R</mi><mn>1</mn></msub></math> and <math id="S3.SS15.SSS1.p1.m2" class="ltx_Math" alttext="R_{2}" display="inline"><msub><mi>R</mi><mn>2</mn></msub></math>, the radial kick can be described by a shape function <math id="S3.SS15.SSS1.p1.m3" class="ltx_Math" alttext="f(r)" display="inline"><mrow><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1377">r</mi><mo stretchy="false">)</mo></mrow></mrow></math> and a maximum kick strength <math id="S3.SS15.SSS1.p1.m4" class="ltx_Math" alttext="\theta_{\rm max}" display="inline"><msub><mi>θ</mi><mi>max</mi></msub></math>:</p>
<table id="S3.E211" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="S3.E211.m1" class="ltx_Math" alttext="\theta(r)=\frac{f(r)}{(r/R_{2})}\cdot\theta_{\rm max}" display="block"><mrow><mrow><mi>θ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1380">r</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mfrac><mrow><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1378">r</mi><mo stretchy="false">)</mo></mrow></mrow><mrow><mo stretchy="false">(</mo><mrow id="XM1379"><mi>r</mi><mo>/</mo><msub><mi>R</mi><mn>2</mn></msub></mrow><mo stretchy="false">)</mo></mrow></mfrac><mo>⋅</mo><msub><mi>θ</mi><mi>max</mi></msub></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(211)</span></td>
</tr>
</table>
<p class="ltx_p">with <math id="S3.SS15.SSS1.p1.m5" class="ltx_Math" alttext="r=\sqrt{x^{2}+y^{2}}" display="inline"><mrow><mi>r</mi><mo>=</mo><msqrt><mrow><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><msup><mi>y</mi><mn>2</mn></msup></mrow></msqrt></mrow></math> and <math id="S3.SS15.SSS1.p1.m6" class="ltx_Math" alttext="\theta_{\rm max}" display="inline"><msub><mi>θ</mi><mi>max</mi></msub></math> independent of <math id="S3.SS15.SSS1.p1.m7" class="ltx_Math" alttext="r" display="inline"><mi>r</mi></math>. The shape function <math id="S3.SS15.SSS1.p1.m8" class="ltx_Math" alttext="f(r)" display="inline"><mrow><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1381">r</mi><mo stretchy="false">)</mo></mrow></mrow></math> is defined as</p>
<table id="S3.E212" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="S3.E212.m1" class="ltx_Math" alttext="f(r)=\frac{I(r)}{I_{T}}=\frac{2\pi}{I_{T}}\int_{0}^{r}r\rho(r)\mathrm{d}r" display="block"><mrow><mrow><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1383">r</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mfrac><mrow><mi>I</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1382">r</mi><mo stretchy="false">)</mo></mrow></mrow><msub><mi>I</mi><mi>T</mi></msub></mfrac><mo>=</mo><mrow><mfrac><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi></mrow><msub><mi>I</mi><mi>T</mi></msub></mfrac><mo>⁢</mo><mrow><msubsup><mo largeop="true" symmetric="true">∫</mo><mn>0</mn><mi>r</mi></msubsup><mrow><mi>r</mi><mo>⁢</mo><mi>ρ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1384">r</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi mathvariant="normal">d</mi><mo>⁢</mo><mi>r</mi></mrow></mrow></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(212)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS15.SSS1.p1.m9" class="ltx_Math" alttext="I_{T}" display="inline"><msub><mi>I</mi><mi>T</mi></msub></math> is the total electron beam current, <math id="S3.SS15.SSS1.p1.m10" class="ltx_Math" alttext="I(r)" display="inline"><mrow><mi>I</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1385">r</mi><mo stretchy="false">)</mo></mrow></mrow></math> is the current enclosed in a radius <math id="S3.SS15.SSS1.p1.m11" class="ltx_Math" alttext="r" display="inline"><mi>r</mi></math> and <math id="S3.SS15.SSS1.p1.m12" class="ltx_Math" alttext="\rho(r)" display="inline"><mrow><mi>ρ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1386">r</mi><mo stretchy="false">)</mo></mrow></mrow></math> is the electron beam density distribution.</p>
</div>
<div id="S3.SS15.SSS1.p2" class="ltx_para">
<p class="ltx_p">For a uniform profile one then obtains:</p>
<table id="S3.E213" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="S3.E213.m1" class="ltx_Math" alttext="f(r)=\begin{cases}0&amp;,\quad r&lt;R_{1}\\
\frac{r^{2}-R_{1}^{2}}{R_{2}^{2}-R_{1}^{2}}&amp;,\quad R_{1}\leq r&lt;R_{2}\\
1&amp;,\quad R_{2}\leq r\end{cases}" display="block"><mrow><mrow><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1387">r</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mo>{</mo><mtable displaystyle="true"><mtr><mtd columnalign="left"><mn id="XM1">0</mn></mtd><mtd columnalign="left"><mrow id="XM2"><mo rspace="12.5pt">,</mo><mi>r</mi><mo>&lt;</mo><msub><mi>R</mi><mn>1</mn></msub></mrow></mtd></mtr><mtr><mtd columnalign="left"><mstyle displaystyle="false" id="XM3"><mfrac id="XM3a"><mrow><msup><mi>r</mi><mn>2</mn></msup><mo>-</mo><msubsup><mi>R</mi><mn>1</mn><mn>2</mn></msubsup></mrow><mrow><msubsup><mi>R</mi><mn>2</mn><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>R</mi><mn>1</mn><mn>2</mn></msubsup></mrow></mfrac></mstyle></mtd><mtd columnalign="left"><mrow id="XM4"><mo rspace="12.5pt">,</mo><msub><mi>R</mi><mn>1</mn></msub><mo>≤</mo><mi>r</mi><mo>&lt;</mo><msub><mi>R</mi><mn>2</mn></msub></mrow></mtd></mtr><mtr><mtd columnalign="left"><mn id="XM5">1</mn></mtd><mtd columnalign="left"><mrow id="XM6"><mo rspace="12.5pt">,</mo><msub><mi>R</mi><mn>2</mn></msub><mo>≤</mo><mi>r</mi></mrow></mtd></mtr></mtable></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(213)</span></td>
</tr>
</table>
<p class="ltx_p">and
</p>
<table id="S3.E214" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="S3.E214.m1" class="ltx_Math" alttext="\theta_{\rm max}=\theta(R_{2})=\frac{2LI_{T}(1\pm\beta_{e}\beta_{p})}{4\pi%
\epsilon_{0}\left(B\rho\right)_{p}\beta_{e}\beta_{p}c^{2}}\cdot\frac{1}{R_{2}}" display="block"><mrow><msub><mi>θ</mi><mi>max</mi></msub><mo>=</mo><mrow><mi>θ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1390"><mi>R</mi><mn>2</mn></msub><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mfrac><mrow><mn>2</mn><mo>⁢</mo><mi>L</mi><mo>⁢</mo><msub><mi>I</mi><mi>T</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1388"><mn>1</mn><mo>±</mo><mrow><msub><mi>β</mi><mi>e</mi></msub><mo>⁢</mo><msub><mi>β</mi><mi>p</mi></msub></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow><mrow><mn>4</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><msub><mi>ϵ</mi><mn>0</mn></msub><mo>⁢</mo><msub><mrow><mo>(</mo><mrow id="XM1389"><mi>B</mi><mo>⁢</mo><mi>ρ</mi></mrow><mo>)</mo></mrow><mi>p</mi></msub><mo>⁢</mo><msub><mi>β</mi><mi>e</mi></msub><mo>⁢</mo><msub><mi>β</mi><mi>p</mi></msub><mo>⁢</mo><msup><mi>c</mi><mn>2</mn></msup></mrow></mfrac><mo>⋅</mo><mfrac><mn>1</mn><msub><mi>R</mi><mn>2</mn></msub></mfrac></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(214)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS15.SSS1.p2.m1" class="ltx_Math" alttext="L" display="inline"><mi>L</mi></math> is the length of the e-lens, <math id="S3.SS15.SSS1.p2.m2" class="ltx_Math" alttext="I_{T}" display="inline"><msub><mi>I</mi><mi>T</mi></msub></math> the total electron beam current, <math id="S3.SS15.SSS1.p2.m3" class="ltx_Math" alttext="\beta_{e}" display="inline"><msub><mi>β</mi><mi>e</mi></msub></math> and <math id="S3.SS15.SSS1.p2.m4" class="ltx_Math" alttext="\beta_{p}" display="inline"><msub><mi>β</mi><mi>p</mi></msub></math> the relativistic <math id="S3.SS15.SSS1.p2.m5" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math> of electron and proton beam, <math id="S3.SS15.SSS1.p2.m6" class="ltx_Math" alttext="B\rho" display="inline"><mrow><mi>B</mi><mo>⁢</mo><mi>ρ</mi></mrow></math> the magnetic rigidity, <math id="S3.SS15.SSS1.p2.m7" class="ltx_Math" alttext="c" display="inline"><mi>c</mi></math> the speed of light and <math id="S3.SS15.SSS1.p2.m8" class="ltx_Math" alttext="\epsilon_{0}" display="inline"><msub><mi>ϵ</mi><mn>0</mn></msub></math> the vacuum permittivity. The <math id="S3.SS15.SSS1.p2.m9" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>-sign represents the two cases of the electron beam traveling in the direction of the proton beam (<math id="S3.SS15.SSS1.p2.m10" class="ltx_Math" alttext="v_{e}v_{p}&gt;0" display="inline"><mrow><mrow><msub><mi>v</mi><mi>e</mi></msub><mo>⁢</mo><msub><mi>v</mi><mi>p</mi></msub></mrow><mo>&gt;</mo><mn>0</mn></mrow></math>) leading to ‘‘<math id="S3.SS15.SSS1.p2.m11" class="ltx_Math" alttext="-" display="inline"><mo>-</mo></math>" or in the opposite direction (<math id="S3.SS15.SSS1.p2.m12" class="ltx_Math" alttext="v_{e}v_{p}&lt;0" display="inline"><mrow><mrow><msub><mi>v</mi><mi>e</mi></msub><mo>⁢</mo><msub><mi>v</mi><mi>p</mi></msub></mrow><mo>&lt;</mo><mn>0</mn></mrow></math>) leading to ‘‘<math id="S3.SS15.SSS1.p2.m13" class="ltx_Math" alttext="+" display="inline"><mo>+</mo></math>". For hollow electron beam collimation, electron and proton beam travel in opposite directions.</p>
</div>
<div id="S3.SS15.SSS1.p3" class="ltx_para">
<p class="ltx_p">The kick in <math id="S3.SS15.SSS1.p3.m1" class="ltx_Math" alttext="(x^{\prime},y^{\prime})" display="inline"><mrow><mo stretchy="false">(</mo><msup id="XM1391"><mi>x</mi><mo>′</mo></msup><mo>,</mo><msup id="XM1392"><mi>y</mi><mo>′</mo></msup><mo stretchy="false">)</mo></mrow></math> can then be expressed as (note <math id="S3.SS15.SSS1.p3.m2" class="ltx_Math" alttext="\frac{x}{r}=\cos(\phi),\frac{y}{r}=\sin(\phi)" display="inline"><mrow><mrow id="XM1397"><mfrac><mi>x</mi><mi>r</mi></mfrac><mo>=</mo><mrow><mi id="XM1393">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM1394">ϕ</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>,</mo><mrow id="XM1398"><mfrac><mi>y</mi><mi>r</mi></mfrac><mo>=</mo><mrow><mi id="XM1395">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM1396">ϕ</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>):</p>
<table id="S5.EGx91" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E215" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E215.m1" class="ltx_Math" alttext="\displaystyle x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E215.m2" class="ltx_Math" alttext="\displaystyle=x^{\prime}-\theta_{\rm max}\cdot\frac{R_{2}}{r^{2}}\cdot f(r)%
\cdot x\cdot\frac{1}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msup><mi>x</mi><mo>′</mo></msup><mo>-</mo><mrow><mrow><mrow><msub><mi>θ</mi><mi>max</mi></msub><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>R</mi><mn>2</mn></msub><msup><mi>r</mi><mn>2</mn></msup></mfrac></mstyle><mo>⋅</mo><mi>f</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1400">r</mi><mo stretchy="false">)</mo></mrow></mrow><mo>⋅</mo><mi>x</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(215)</span></td>
</tr>
<tr id="S3.E216" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E216.m1" class="ltx_Math" alttext="\displaystyle y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E216.m2" class="ltx_Math" alttext="\displaystyle=y^{\prime}-\theta_{\rm max}\cdot\frac{R_{2}}{r^{2}}\cdot f(r)%
\cdot y\cdot\frac{1}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msup><mi>y</mi><mo>′</mo></msup><mo>-</mo><mrow><mrow><mrow><msub><mi>θ</mi><mi>max</mi></msub><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>R</mi><mn>2</mn></msub><msup><mi>r</mi><mn>2</mn></msup></mfrac></mstyle><mo>⋅</mo><mi>f</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1402">r</mi><mo stretchy="false">)</mo></mrow></mrow><mo>⋅</mo><mi>y</mi><mo>⋅</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(216)</span></td>
</tr>
</table>
<p class="ltx_p">The maximum kick angle <math id="S3.SS15.SSS1.p3.m3" class="ltx_Math" alttext="\theta_{\max}" display="inline"><msub><mi>θ</mi><mi>max</mi></msub></math> depends on the magnetic rigidity <math id="S3.SS15.SSS1.p3.m4" class="ltx_Math" alttext="(B\rho)_{p}" display="inline"><msub><mrow><mo stretchy="false">(</mo><mrow id="XM1403"><mi>B</mi><mo>⁢</mo><mi>ρ</mi></mrow><mo stretchy="false">)</mo></mrow><mi>p</mi></msub></math> of the proton beam and thus on the particle momentum. For off-momentum particles this results in a factor <math id="S3.SS15.SSS1.p3.m5" class="ltx_Math" alttext="(B\rho)(\delta)=(B\rho)(0)\cdot(1+\delta)" display="inline"><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM1404"><mi>B</mi><mo>⁢</mo><mi>ρ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1405">δ</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM1406"><mi>B</mi><mo>⁢</mo><mi>ρ</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM1407">0</mn><mo stretchy="false">)</mo></mrow></mrow><mo>⋅</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1408"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math> which has been added in Eqn. <a href="#S3.E215" title="(215) ‣ 3.15.1 Hollow electron lens - uniform annular profile ‣ 3.15 Electron lens ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">215</span></a>–<a href="#S3.E216" title="(216) ‣ 3.15.1 Hollow electron lens - uniform annular profile ‣ 3.15 Electron lens ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">216</span></a>. If the electron lens is offset by <math id="S3.SS15.SSS1.p3.m6" class="ltx_Math" alttext="(x_{\rm offset},y_{\rm offset})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM1409"><mi>x</mi><mi>offset</mi></msub><mo>,</mo><msub id="XM1410"><mi>y</mi><mi>offset</mi></msub><mo stretchy="false">)</mo></mrow></math>, the coordinates <math id="S3.SS15.SSS1.p3.m7" class="ltx_Math" alttext="(x,y)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM1411">x</mi><mo>,</mo><mi id="XM1412">y</mi><mo stretchy="false">)</mo></mrow></math> are simply transfered to:</p>
<table id="S5.EGx92" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E217" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E217.m1" class="ltx_Math" alttext="\displaystyle\tilde{x}" display="inline"><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E217.m2" class="ltx_Math" alttext="\displaystyle=x+x_{\rm offset}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi>x</mi><mo>+</mo><msub><mi>x</mi><mi>offset</mi></msub></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(217)</span></td>
</tr>
<tr id="S3.E218" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E218.m1" class="ltx_Math" alttext="\displaystyle\tilde{y}" display="inline"><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E218.m2" class="ltx_Math" alttext="\displaystyle=y+y_{\rm offset}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi>y</mi><mo>+</mo><msub><mi>y</mi><mi>offset</mi></msub></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(218)</span></td>
</tr>
<tr id="S3.E219" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E219.m1" class="ltx_Math" alttext="\displaystyle\tilde{r}" display="inline"><mover accent="true"><mi>r</mi><mo stretchy="false">~</mo></mover></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E219.m2" class="ltx_Math" alttext="\displaystyle=\sqrt{\tilde{x}^{2}+\tilde{y}^{2}}" display="inline"><mrow><mi></mi><mo>=</mo><msqrt><mrow><msup><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover><mn>2</mn></msup><mo>+</mo><msup><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover><mn>2</mn></msup></mrow></msqrt></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(219)</span></td>
</tr>
</table>
<p class="ltx_p">and the kick is then given by:</p>
<table id="S5.EGx93" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E220" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E220.m1" class="ltx_Math" alttext="\displaystyle x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E220.m2" class="ltx_Math" alttext="\displaystyle=x^{\prime}-\theta_{\rm max}\cdot\frac{R_{2}}{\tilde{r}^{2}}\cdot
f%
(\tilde{r})\cdot\tilde{x}\cdot\frac{1}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msup><mi>x</mi><mo>′</mo></msup><mo>-</mo><mrow><mrow><mrow><msub><mi>θ</mi><mi>max</mi></msub><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>R</mi><mn>2</mn></msub><msup><mover accent="true"><mi>r</mi><mo stretchy="false">~</mo></mover><mn>2</mn></msup></mfrac></mstyle><mo>⋅</mo><mi>f</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mover accent="true" id="XM1414"><mi>r</mi><mo stretchy="false">~</mo></mover><mo stretchy="false">)</mo></mrow></mrow><mo>⋅</mo><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover><mo>⋅</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(220)</span></td>
</tr>
<tr id="S3.E221" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                    <math id="S3.E221.m1" class="ltx_Math" alttext="\displaystyle y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>
                  </td>
<td class="ltx_td ltx_align_left">
                    <math id="S3.E221.m2" class="ltx_Math" alttext="\displaystyle=y^{\prime}-\theta_{\rm max}\cdot\frac{R_{2}}{\tilde{r}^{2}}\cdot
f%
(\tilde{r})\cdot\tilde{y}\cdot\frac{1}{1+\delta}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msup><mi>y</mi><mo>′</mo></msup><mo>-</mo><mrow><mrow><mrow><msub><mi>θ</mi><mi>max</mi></msub><mo>⋅</mo><mstyle displaystyle="true"><mfrac><msub><mi>R</mi><mn>2</mn></msub><msup><mover accent="true"><mi>r</mi><mo stretchy="false">~</mo></mover><mn>2</mn></msup></mfrac></mstyle><mo>⋅</mo><mi>f</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mover accent="true" id="XM1416"><mi>r</mi><mo stretchy="false">~</mo></mover><mo stretchy="false">)</mo></mrow></mrow><mo>⋅</mo><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover><mo>⋅</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow></math>
                  </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(221)</span></td>
</tr>
</table>
<p class="ltx_p">This idealized implementation of the hollow e-lens has no explicit dependence on the particle energy. The particle energy is only taken into account in form of the input parameter <math id="S3.SS15.SSS1.p3.m8" class="ltx_Math" alttext="\theta_{\rm max}" display="inline"><msub><mi>θ</mi><mi>max</mi></msub></math> provided by the user. A change of the particle energy could occur if the particle enters with an initial <math id="S3.SS15.SSS1.p3.m9" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math> or <math id="S3.SS15.SSS1.p3.m10" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math> and thus sees an accelerating or respectively decelerating field.</p>
</div>
</section>
</section>
<section id="S3.SS16" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.16 </span>Misalignment</h3>
<div id="S3.SS16.p1" class="ltx_para">
<p class="ltx_p">Misalignments of elements affects the coordinates at the entrance of an
element as follows</p>
<table id="S5.EGx94" class="ltx_equationgroup ltx_eqn_align">
<tr id="S3.E222" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E222.m1" class="ltx_Math" alttext="\displaystyle x" display="inline"><mi>x</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E222.m2" class="ltx_Math" alttext="\displaystyle\to(x-x_{s})\cdot t_{c}+(y-y_{s})\cdot t_{s}" display="inline"><mrow><mi></mi><mo>→</mo><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM1419"><mi>x</mi><mo>-</mo><msub><mi>x</mi><mi>s</mi></msub></mrow><mo stretchy="false">)</mo></mrow><mo>⋅</mo><msub><mi>t</mi><mi>c</mi></msub></mrow><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM1420"><mi>y</mi><mo>-</mo><msub><mi>y</mi><mi>s</mi></msub></mrow><mo stretchy="false">)</mo></mrow><mo>⋅</mo><msub><mi>t</mi><mi>s</mi></msub></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(222)</span></td>
</tr>
<tr id="S3.E223" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S3.E223.m1" class="ltx_Math" alttext="\displaystyle y" display="inline"><mi>y</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S3.E223.m2" class="ltx_Math" alttext="\displaystyle\to-(x-x_{s})\cdot t_{s}+(y-y_{s})\cdot t_{c}," display="inline"><mrow><mrow><mi></mi><mo>→</mo><mrow><mrow><mo>-</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM1423"><mi>x</mi><mo>-</mo><msub><mi>x</mi><mi>s</mi></msub></mrow><mo stretchy="false">)</mo></mrow><mo>⋅</mo><msub><mi>t</mi><mi>s</mi></msub></mrow></mrow><mo>+</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM1424"><mi>y</mi><mo>-</mo><msub><mi>y</mi><mi>s</mi></msub></mrow><mo stretchy="false">)</mo></mrow><mo>⋅</mo><msub><mi>t</mi><mi>c</mi></msub></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(223)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S3.SS16.p1.m1" class="ltx_Math" alttext="x_{s}" display="inline"><msub><mi>x</mi><mi>s</mi></msub></math> and <math id="S3.SS16.p1.m2" class="ltx_Math" alttext="y_{s}" display="inline"><msub><mi>y</mi><mi>s</mi></msub></math> are the displacements in the horizontal and vertical
directions, respectively. <math id="S3.SS16.p1.m3" class="ltx_Math" alttext="t_{c}" display="inline"><msub><mi>t</mi><mi>c</mi></msub></math> and <math id="S3.SS16.p1.m4" class="ltx_Math" alttext="t_{s}" display="inline"><msub><mi>t</mi><mi>s</mi></msub></math> are the cosine and sine of the tilt
angle for the element.</p>
</div>
</section>
</section>
<section id="S4" class="ltx_section">
<h2 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4 </span>Optics calculations</h2>
<div id="S4.p1" class="ltx_para">
<p class="ltx_p">Optics calculation are needed to study the motion around the closed orbit. By defining <math id="S4.p1.m1" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math> as the vector of <math id="S4.p1.m2" class="ltx_Math" alttext="2k" display="inline"><mrow><mn>2</mn><mo>⁢</mo><mi>k</mi></mrow></math> coordinates,</p>
<table id="S5.EGx95" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E224" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S4.E224.m1" class="ltx_Math" alttext="\displaystyle z" display="inline"><mi>z</mi></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S4.E224.m2" class="ltx_Math" alttext="\displaystyle=(z_{1},\ldots,z_{2k})^{T}=(x-x_{0},p_{x}-p_{x0},y-y_{0},p_{y}-p_%
{y0},\tau-\tau_{0},p_{t}-p_{t0})^{T}" display="inline"><mrow><mi></mi><mo>=</mo><msup><mrow><mo stretchy="false">(</mo><msub id="XM1434"><mi>z</mi><mn>1</mn></msub><mo>,</mo><mi mathvariant="normal" id="XM1435">…</mi><mo>,</mo><msub id="XM1436"><mi>z</mi><mrow><mn>2</mn><mo>⁢</mo><mi>k</mi></mrow></msub><mo stretchy="false">)</mo></mrow><mi>T</mi></msup><mo>=</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1437"><mi>x</mi><mo>-</mo><msub><mi>x</mi><mn>0</mn></msub></mrow><mo>,</mo><mrow id="XM1438"><msub><mi>p</mi><mi>x</mi></msub><mo>-</mo><msub><mi>p</mi><mrow><mi>x</mi><mo>⁢</mo><mn>0</mn></mrow></msub></mrow><mo>,</mo><mrow id="XM1439"><mi>y</mi><mo>-</mo><msub><mi>y</mi><mn>0</mn></msub></mrow><mo>,</mo><mrow id="XM1440"><msub><mi>p</mi><mi>y</mi></msub><mo>-</mo><msub><mi>p</mi><mrow><mi>y</mi><mo>⁢</mo><mn>0</mn></mrow></msub></mrow><mo>,</mo><mrow id="XM1441"><mi>τ</mi><mo>-</mo><msub><mi>τ</mi><mn>0</mn></msub></mrow><mo>,</mo><mrow id="XM1442"><msub><mi>p</mi><mi>t</mi></msub><mo>-</mo><msub><mi>p</mi><mrow><mi>t</mi><mo>⁢</mo><mn>0</mn></mrow></msub></mrow><mo stretchy="false">)</mo></mrow><mi>T</mi></msup></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(224)</span></td>
</tr>
</table>
<p class="ltx_p">one can define linear transfer maps (e.g. <math id="S4.p1.m3" class="ltx_Math" alttext="M_{1\to 2}" display="inline"><msub><mi>M</mi><mrow><mn>1</mn><mo>→</mo><mn>2</mn></mrow></msub></math> that propagates coordinates between two points <math id="S4.p1.m4" class="ltx_Math" alttext="s_{1}" display="inline"><msub><mi>s</mi><mn>1</mn></msub></math>, <math id="S4.p1.m5" class="ltx_Math" alttext="s_{2}" display="inline"><msub><mi>s</mi><mn>2</mn></msub></math>) and the one-turn map (e.g. <math id="S4.p1.m6" class="ltx_Math" alttext="M_{1}" display="inline"><msub><mi>M</mi><mn>1</mn></msub></math> that combines the effects for one turn starting from <math id="S4.p1.m7" class="ltx_Math" alttext="s_{1}" display="inline"><msub><mi>s</mi><mn>1</mn></msub></math>):</p>
<table id="S5.EGx96" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E225" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                <math id="S4.E225.m1" class="ltx_Math" alttext="\displaystyle z(s_{2})" display="inline"><mrow><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1445"><mi>s</mi><mn>2</mn></msub><mo stretchy="false">)</mo></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S4.E225.m2" class="ltx_Math" alttext="\displaystyle=M_{1\to 2}z(s_{1})" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>M</mi><mrow><mn>1</mn><mo>→</mo><mn>2</mn></mrow></msub><mo>⁢</mo><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1446"><mi>s</mi><mn>1</mn></msub><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_right">
                <math id="S4.E225.m3" class="ltx_Math" alttext="\displaystyle z(C+s_{1})" display="inline"><mrow><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1449"><mi>C</mi><mo>+</mo><msub><mi>s</mi><mn>1</mn></msub></mrow><mo stretchy="false">)</mo></mrow></mrow></math>
              </td>
<td class="ltx_td ltx_align_left">
                <math id="S4.E225.m4" class="ltx_Math" alttext="\displaystyle=M_{1}z(s_{1})." display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><msub><mi>M</mi><mn>1</mn></msub><mo>⁢</mo><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1450"><mi>s</mi><mn>1</mn></msub><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>.</mo></mrow></math>
              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(225)</span></td>
</tr>
</table>
<p class="ltx_p">In the following we will describe the optics calculation based on the Ripken formalism described in <cite class="ltx_cite">[<a href="#bib.bib12" title="Methods of beam optics" class="ltx_ref">12</a>]</cite>. A good summary is also given in the MAD8 physics manual <cite class="ltx_cite">[<a href="#bib.bib11" title="The mad program (methodical accelerator design), physics methods manual" class="ltx_ref">5</a>]</cite>.</p>
</div>
<section id="S4.SS1" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.1 </span>Diagonalisation of one-turn matrix</h3>
<div id="S4.SS1.p1" class="ltx_para">
<p class="ltx_p">Since the matrices derive from symplectic maps, the eigenvalue spectrum of the one-turn map <math id="S4.SS1.p1.m1" class="ltx_Math" alttext="M" display="inline"><mi>M</mi></math> consists of 2<math id="S4.SS1.p1.m2" class="ltx_Math" alttext="k" display="inline"><mi>k</mi></math> distinct eigenvalues and linearly independent eigenvectors. In addition, for the motion to be stable the eigenvalues <math id="S4.SS1.p1.m3" class="ltx_Math" alttext="\lambda_{k}^{\pm}" display="inline"><msubsup><mi>λ</mi><mi>k</mi><mo>±</mo></msubsup></math> with eigenvectors <math id="S4.SS1.p1.m4" class="ltx_Math" alttext="v_{k}^{\pm}" display="inline"><msubsup><mi>v</mi><mi>k</mi><mo>±</mo></msubsup></math> have to be complex <cite class="ltx_cite">[<a href="#bib.bib12" title="Methods of beam optics" class="ltx_ref">12</a>]</cite>:
</p>
<table id="S5.EGx97" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E226" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E226.m1" class="ltx_Math" alttext="\displaystyle Mv_{k}^{\pm}=\lambda_{k}^{\pm}v_{k}^{\pm},\ k=1,\ldots,3" display="inline"><mrow><mrow id="XM1459"><mrow><mi>M</mi><mo>⁢</mo><msubsup><mi>v</mi><mi>k</mi><mo>±</mo></msubsup></mrow><mo>=</mo><mrow><msubsup><mi>λ</mi><mi>k</mi><mo>±</mo></msubsup><mo>⁢</mo><msubsup><mi>v</mi><mi>k</mi><mo>±</mo></msubsup></mrow></mrow><mo rspace="7.5pt">,</mo><mrow id="XM1460"><mi>k</mi><mo>=</mo><mrow><mn id="XM1456">1</mn><mo>,</mo><mi mathvariant="normal" id="XM1457">…</mi><mo>,</mo><mn id="XM1458">3</mn></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(226)</span></td>
</tr>
<tr id="S4.E227" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E227.m1" class="ltx_Math" alttext="\displaystyle v_{k}^{+}=(v_{k}^{-})^{*},\quad\lambda_{k}^{+}=(\lambda_{k}^{-})%
^{*},\quad|\lambda_{k}^{\pm}|=1" display="inline"><mrow><mrow id="XM1473"><msubsup><mi>v</mi><mi>k</mi><mo>+</mo></msubsup><mo>=</mo><msup><mrow><mo stretchy="false">(</mo><msubsup id="XM1468"><mi>v</mi><mi>k</mi><mo>-</mo></msubsup><mo stretchy="false">)</mo></mrow><mo>*</mo></msup></mrow><mo rspace="12.5pt">,</mo><mrow><mrow id="XM1471"><msubsup><mi>λ</mi><mi>k</mi><mo>+</mo></msubsup><mo>=</mo><msup><mrow><mo stretchy="false">(</mo><msubsup id="XM1469"><mi>λ</mi><mi>k</mi><mo>-</mo></msubsup><mo stretchy="false">)</mo></mrow><mo>*</mo></msup></mrow><mo rspace="12.5pt">,</mo><mrow id="XM1472"><mrow><mo stretchy="false">|</mo><msubsup id="XM1470"><mi>λ</mi><mi>k</mi><mo>±</mo></msubsup><mo stretchy="false">|</mo></mrow><mo>=</mo><mn>1</mn></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(227)</span></td>
</tr>
</table>
<p class="ltx_p">As the eigenvectors are linearly independent <math id="S4.SS1.p1.m5" class="ltx_Math" alttext="M" display="inline"><mi>M</mi></math> can be diagonalized with</p>
<table id="S5.EGx98" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E228" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E228.m1" class="ltx_Math" alttext="\displaystyle M" display="inline"><mi>M</mi></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E228.m2" class="ltx_Math" alttext="\displaystyle=V\Lambda V^{-1}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mi>V</mi><mo>⁢</mo><mi mathvariant="normal">Λ</mi><mo>⁢</mo><msup><mi>V</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(228)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S4.SS1.p1.m6" class="ltx_Math" alttext="V" display="inline"><mi>V</mi></math> consists of the eigenvectors and <math id="S4.SS1.p1.m7" class="ltx_Math" alttext="\Lambda" display="inline"><mi mathvariant="normal">Λ</mi></math> of the eigenvalues:</p>
<table id="S5.EGx99" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E229" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E229.m1" class="ltx_Math" alttext="\displaystyle V=" display="inline"><mrow><mi>V</mi><mo>=</mo><mi></mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E229.m2" class="ltx_Math" alttext="\displaystyle\left(\begin{array}[]{cccc}v^{+}_{1,1}&amp;v^{-}_{1,1}&amp;\cdots&amp;v^{-}_{%
3,1}\\
v^{+}_{1,2}&amp;v^{-}_{1,2}&amp;\cdots&amp;v^{-}_{3,2}\\
\vdots&amp;\vdots&amp;\vdots&amp;\vdots\\
\end{array}\right)" display="inline"><mrow><mo>(</mo><mtable id="XM1500"><mtr id="XM1500a"><mtd columnalign="center" id="XM1500b"><msubsup><mi>v</mi><mrow><mn id="XM1488">1</mn><mo>,</mo><mn id="XM1489">1</mn></mrow><mo>+</mo></msubsup></mtd><mtd columnalign="center" id="XM1500c"><msubsup><mi>v</mi><mrow><mn id="XM1490">1</mn><mo>,</mo><mn id="XM1491">1</mn></mrow><mo>-</mo></msubsup></mtd><mtd columnalign="center" id="XM1500d"><mi mathvariant="normal">⋯</mi></mtd><mtd columnalign="center" id="XM1500e"><msubsup><mi>v</mi><mrow><mn id="XM1492">3</mn><mo>,</mo><mn id="XM1493">1</mn></mrow><mo>-</mo></msubsup></mtd></mtr><mtr id="XM1500f"><mtd columnalign="center" id="XM1500g"><msubsup><mi>v</mi><mrow><mn id="XM1494">1</mn><mo>,</mo><mn id="XM1495">2</mn></mrow><mo>+</mo></msubsup></mtd><mtd columnalign="center" id="XM1500h"><msubsup><mi>v</mi><mrow><mn id="XM1496">1</mn><mo>,</mo><mn id="XM1497">2</mn></mrow><mo>-</mo></msubsup></mtd><mtd columnalign="center" id="XM1500i"><mi mathvariant="normal">⋯</mi></mtd><mtd columnalign="center" id="XM1500j"><msubsup><mi>v</mi><mrow><mn id="XM1498">3</mn><mo>,</mo><mn id="XM1499">2</mn></mrow><mo>-</mo></msubsup></mtd></mtr><mtr id="XM1500k"><mtd columnalign="center" id="XM1500l"><mi mathvariant="normal">⋮</mi></mtd><mtd columnalign="center" id="XM1500m"><mi mathvariant="normal">⋮</mi></mtd><mtd columnalign="center" id="XM1500n"><mi mathvariant="normal">⋮</mi></mtd><mtd columnalign="center" id="XM1500o"><mi mathvariant="normal">⋮</mi></mtd></mtr></mtable><mo>)</mo></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E229.m3" class="ltx_Math" alttext="\displaystyle\Lambda=" display="inline"><mrow><mi mathvariant="normal">Λ</mi><mo>=</mo><mi></mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E229.m4" class="ltx_Math" alttext="\displaystyle\left(\begin{array}[]{cccc}\lambda^{+}_{1}&amp;&amp;&amp;\\
&amp;\lambda^{-}_{1}&amp;&amp;\\
&amp;&amp;\ddots&amp;\\
&amp;&amp;&amp;\lambda^{-}_{3}\end{array}\right)" display="inline"><mrow><mo>(</mo><mtable id="XM1502"><mtr id="XM1502a"><mtd columnalign="center" id="XM1502b"><msubsup><mi>λ</mi><mn>1</mn><mo>+</mo></msubsup></mtd><mtd id="XM1502c"></mtd><mtd id="XM1502d"></mtd><mtd id="XM1502e"></mtd></mtr><mtr id="XM1502f"><mtd id="XM1502g"></mtd><mtd columnalign="center" id="XM1502h"><msubsup><mi>λ</mi><mn>1</mn><mo>-</mo></msubsup></mtd><mtd id="XM1502i"></mtd><mtd id="XM1502j"></mtd></mtr><mtr id="XM1502k"><mtd id="XM1502l"></mtd><mtd id="XM1502m"></mtd><mtd columnalign="center" id="XM1502n"><mi mathvariant="normal">⋱</mi></mtd><mtd id="XM1502o"></mtd></mtr><mtr id="XM1502p"><mtd id="XM1502q"></mtd><mtd id="XM1502r"></mtd><mtd id="XM1502s"></mtd><mtd columnalign="center" id="XM1502t"><msubsup><mi>λ</mi><mn>3</mn><mo>-</mo></msubsup></mtd></mtr></mtable><mo>)</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(229)</span></td>
</tr>
</table>
<p class="ltx_p">for which <math id="S4.SS1.p1.m8" class="ltx_Math" alttext="v^{\pm}_{i,j}" display="inline"><msubsup><mi>v</mi><mrow><mi id="XM1503">i</mi><mo>,</mo><mi id="XM1504">j</mi></mrow><mo>±</mo></msubsup></math> is the component <math id="S4.SS1.p1.m9" class="ltx_Math" alttext="j" display="inline"><mi>j</mi></math> of eigenvector <math id="S4.SS1.p1.m10" class="ltx_Math" alttext="v_{i}^{\pm}" display="inline"><msubsup><mi>v</mi><mi>i</mi><mo>±</mo></msubsup></math>.</p>
</div>
<div id="S4.SS1.p2" class="ltx_para">
<p class="ltx_p">The same calculation can be carried out with real numbers by the following definitions:</p>
<table id="S5.EGx100" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E230" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E230.m1" class="ltx_Math" alttext="\displaystyle\ v_{k}^{\pm}" display="inline"><mrow><mi mathvariant="normal"> </mi><mo>⁢</mo><msubsup><mi>v</mi><mi>k</mi><mo>±</mo></msubsup></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E230.m2" class="ltx_Math" alttext="\displaystyle=a_{k}\pm ib_{k}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><msub><mi>a</mi><mi>k</mi></msub><mo>±</mo><mrow><mi>i</mi><mo>⁢</mo><msub><mi>b</mi><mi>k</mi></msub></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E230.m3" class="ltx_Math" alttext="\displaystyle\lambda_{k}^{\pm}" display="inline"><msubsup><mi>λ</mi><mi>k</mi><mo>±</mo></msubsup></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E230.m4" class="ltx_Math" alttext="\displaystyle=\cos\mu_{k}\pm i\sin\mu_{k}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>μ</mi><mi>k</mi></msub></mrow><mo>±</mo><mrow><mi>i</mi><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>μ</mi><mi>k</mi></msub></mrow></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E230.m5" class="ltx_Math" alttext="\displaystyle\mu_{k},a_{k},b_{k}\in\mathbb{R}" display="inline"><mrow><mrow><msub id="XM1508"><mi>μ</mi><mi>k</mi></msub><mo>,</mo><msub id="XM1509"><mi>a</mi><mi>k</mi></msub><mo>,</mo><msub id="XM1510"><mi>b</mi><mi>k</mi></msub></mrow><mo>∈</mo><mi>ℝ</mi></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(230)</span></td>
</tr>
</table>
<p class="ltx_p">such that:</p>
<table id="S5.EGx101" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E231" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E231.m1" class="ltx_Math" alttext="\displaystyle M=" display="inline"><mrow><mi>M</mi><mo>=</mo><mi></mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E231.m2" class="ltx_Math" alttext="\displaystyle WRW^{-1}" display="inline"><mrow><mi>W</mi><mo>⁢</mo><mi>R</mi><mo>⁢</mo><msup><mi>W</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(231)</span></td>
</tr>
</table>
<p class="ltx_p">with</p>
<table id="S5.EGx102" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E232" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E232.m1" class="ltx_Math" alttext="\displaystyle R=R(\mu_{k})=" display="inline"><mrow><mi>R</mi><mo>=</mo><mrow><mi>R</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1513"><mi>μ</mi><mi>k</mi></msub><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mi></mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E232.m2" class="ltx_Math" alttext="\displaystyle\left(\begin{array}[]{ccccc}\cos\mu_{1}&amp;\sin\mu_{1}&amp;&amp;&amp;\\
-\sin\mu_{1}&amp;\cos\mu_{1}&amp;&amp;&amp;\\
&amp;&amp;\ddots&amp;&amp;\\
&amp;&amp;&amp;\cos\mu_{3}&amp;\sin\mu_{3}\\
&amp;&amp;&amp;-\sin\mu_{3}&amp;\cos\mu_{3}\\
\end{array}\right)," display="inline"><mrow><mrow><mo>(</mo><mtable id="XM1514"><mtr id="XM1514a"><mtd columnalign="center" id="XM1514b"><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>μ</mi><mn>1</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1514c"><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>μ</mi><mn>1</mn></msub></mrow></mtd><mtd id="XM1514d"></mtd><mtd id="XM1514e"></mtd><mtd id="XM1514f"></mtd></mtr><mtr id="XM1514g"><mtd columnalign="center" id="XM1514h"><mrow><mo>-</mo><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>μ</mi><mn>1</mn></msub></mrow></mrow></mtd><mtd columnalign="center" id="XM1514i"><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>μ</mi><mn>1</mn></msub></mrow></mtd><mtd id="XM1514j"></mtd><mtd id="XM1514k"></mtd><mtd id="XM1514l"></mtd></mtr><mtr id="XM1514m"><mtd id="XM1514n"></mtd><mtd id="XM1514o"></mtd><mtd columnalign="center" id="XM1514p"><mi mathvariant="normal">⋱</mi></mtd><mtd id="XM1514q"></mtd><mtd id="XM1514r"></mtd></mtr><mtr id="XM1514s"><mtd id="XM1514t"></mtd><mtd id="XM1514u"></mtd><mtd id="XM1514v"></mtd><mtd columnalign="center" id="XM1514w"><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>μ</mi><mn>3</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1514x"><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>μ</mi><mn>3</mn></msub></mrow></mtd></mtr><mtr id="XM1514y"><mtd id="XM1514z"></mtd><mtd id="XM1514aa"></mtd><mtd id="XM1514ab"></mtd><mtd columnalign="center" id="XM1514ac"><mrow><mo>-</mo><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>μ</mi><mn>3</mn></msub></mrow></mrow></mtd><mtd columnalign="center" id="XM1514ad"><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>μ</mi><mn>3</mn></msub></mrow></mtd></mtr></mtable><mo>)</mo></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(232)</span></td>
</tr>
<tr id="S4.E233" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E233.m1" class="ltx_Math" alttext="\displaystyle W=" display="inline"><mrow><mi>W</mi><mo>=</mo><mi></mi></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E233.m2" class="ltx_Math" alttext="\displaystyle\left(\begin{array}[]{ccccc}a_{1,1}&amp;b_{1,1}&amp;\cdots&amp;a_{3,1}&amp;b_{3,1%
}\\
a_{1,2}&amp;b_{1,2}&amp;\cdots&amp;a_{3,2}&amp;b_{3,2}\\
\vdots&amp;\vdots&amp;\vdots&amp;\vdots\\
a_{1,6}&amp;b_{1,6}&amp;\cdots&amp;a_{3,6}&amp;b_{3,6}\\
\end{array}\right)" display="inline"><mrow><mo>(</mo><mtable id="XM1564"><mtr id="XM1564a"><mtd columnalign="center" id="XM1564b"><msub><mi>a</mi><mrow><mn id="XM1540">1</mn><mo>,</mo><mn id="XM1541">1</mn></mrow></msub></mtd><mtd columnalign="center" id="XM1564c"><msub><mi>b</mi><mrow><mn id="XM1542">1</mn><mo>,</mo><mn id="XM1543">1</mn></mrow></msub></mtd><mtd columnalign="center" id="XM1564d"><mi mathvariant="normal">⋯</mi></mtd><mtd columnalign="center" id="XM1564e"><msub><mi>a</mi><mrow><mn id="XM1544">3</mn><mo>,</mo><mn id="XM1545">1</mn></mrow></msub></mtd><mtd columnalign="center" id="XM1564f"><msub><mi>b</mi><mrow><mn id="XM1546">3</mn><mo>,</mo><mn id="XM1547">1</mn></mrow></msub></mtd></mtr><mtr id="XM1564g"><mtd columnalign="center" id="XM1564h"><msub><mi>a</mi><mrow><mn id="XM1548">1</mn><mo>,</mo><mn id="XM1549">2</mn></mrow></msub></mtd><mtd columnalign="center" id="XM1564i"><msub><mi>b</mi><mrow><mn id="XM1550">1</mn><mo>,</mo><mn id="XM1551">2</mn></mrow></msub></mtd><mtd columnalign="center" id="XM1564j"><mi mathvariant="normal">⋯</mi></mtd><mtd columnalign="center" id="XM1564k"><msub><mi>a</mi><mrow><mn id="XM1552">3</mn><mo>,</mo><mn id="XM1553">2</mn></mrow></msub></mtd><mtd columnalign="center" id="XM1564l"><msub><mi>b</mi><mrow><mn id="XM1554">3</mn><mo>,</mo><mn id="XM1555">2</mn></mrow></msub></mtd></mtr><mtr id="XM1564m"><mtd columnalign="center" id="XM1564n"><mi mathvariant="normal">⋮</mi></mtd><mtd columnalign="center" id="XM1564o"><mi mathvariant="normal">⋮</mi></mtd><mtd columnalign="center" id="XM1564p"><mi mathvariant="normal">⋮</mi></mtd><mtd columnalign="center" id="XM1564q"><mi mathvariant="normal">⋮</mi></mtd><mtd id="XM1564r"></mtd></mtr><mtr id="XM1564s"><mtd columnalign="center" id="XM1564t"><msub><mi>a</mi><mrow><mn id="XM1556">1</mn><mo>,</mo><mn id="XM1557">6</mn></mrow></msub></mtd><mtd columnalign="center" id="XM1564u"><msub><mi>b</mi><mrow><mn id="XM1558">1</mn><mo>,</mo><mn id="XM1559">6</mn></mrow></msub></mtd><mtd columnalign="center" id="XM1564v"><mi mathvariant="normal">⋯</mi></mtd><mtd columnalign="center" id="XM1564w"><msub><mi>a</mi><mrow><mn id="XM1560">3</mn><mo>,</mo><mn id="XM1561">6</mn></mrow></msub></mtd><mtd columnalign="center" id="XM1564x"><msub><mi>b</mi><mrow><mn id="XM1562">3</mn><mo>,</mo><mn id="XM1563">6</mn></mrow></msub></mtd></mtr></mtable><mo>)</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(233)</span></td>
</tr>
</table>
<p class="ltx_p">Usually <math id="S4.SS1.p2.m1" class="ltx_Math" alttext="\mu_{k}" display="inline"><msub><mi>μ</mi><mi>k</mi></msub></math> is written as <math id="S4.SS1.p2.m2" class="ltx_Math" alttext="\mu_{k}=2\pi Q_{k}" display="inline"><mrow><msub><mi>μ</mi><mi>k</mi></msub><mo>=</mo><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><msub><mi>Q</mi><mi>k</mi></msub></mrow></mrow></math>, where <math id="S4.SS1.p2.m3" class="ltx_Math" alttext="Q_{k}" display="inline"><msub><mi>Q</mi><mi>k</mi></msub></math> is then the tune of the mode <math id="S4.SS1.p2.m4" class="ltx_Math" alttext="k" display="inline"><mi>k</mi></math>.</p>
</div>
</section>
<section id="S4.SS2" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.2 </span>Normalisation of eigenvectors</h3>
<div id="S4.SS2.p1" class="ltx_para">
<p class="ltx_p">By convention, the eigenvectors and values are normalized, sorted and rotated so that the following three conditions are fulfilled:</p>
<ol id="I3" class="ltx_enumerate">
<li id="I3.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="I3.i1.p1" class="ltx_para">
<p class="ltx_p">Plane 1 is associated with the horizontal, plane 2 with the vertical and plane 3 with the longitudinal plane. This is achieved by first normalizing the eigenvectors <math id="I3.i1.p1.m1" class="ltx_Math" alttext="v_{k}^{\pm}" display="inline"><msubsup><mi>v</mi><mi>k</mi><mo>±</mo></msubsup></math> and then sorting them so that:</p>
<table id="S5.EGx103" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E234" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E234.m1" class="ltx_Math" alttext="\displaystyle|v_{j,2j-1}^{+}|=|v_{j,2j-1}^{-}|=\max_{k=1,2,3}v_{k,j},\quad j=1%
,\ldots,3" display="inline"><mrow><mrow id="XM1595"><mrow><mo stretchy="false">|</mo><msubsup id="XM1590"><mi>v</mi><mrow><mi id="XM1581">j</mi><mo>,</mo><mrow id="XM1582"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow><mo>+</mo></msubsup><mo stretchy="false">|</mo></mrow><mo>=</mo><mrow><mo stretchy="false">|</mo><msubsup id="XM1591"><mi>v</mi><mrow><mi id="XM1583">j</mi><mo>,</mo><mrow id="XM1584"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow><mo>-</mo></msubsup><mo stretchy="false">|</mo></mrow><mo>=</mo><mrow><munder><mi>max</mi><mrow><mi>k</mi><mo>=</mo><mrow><mn id="XM1585">1</mn><mo>,</mo><mn id="XM1586">2</mn><mo>,</mo><mn id="XM1587">3</mn></mrow></mrow></munder><mo>⁡</mo><msub><mi>v</mi><mrow><mi id="XM1588">k</mi><mo>,</mo><mi id="XM1589">j</mi></mrow></msub></mrow></mrow><mo rspace="12.5pt">,</mo><mrow id="XM1596"><mi>j</mi><mo>=</mo><mrow><mn id="XM1592">1</mn><mo>,</mo><mi mathvariant="normal" id="XM1593">…</mi><mo>,</mo><mn id="XM1594">3</mn></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(234)</span></td>
</tr>
</table>
</div>
</li>
<li id="I3.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="I3.i2.p1" class="ltx_para">
<p class="ltx_p">The eigenvectors are then rotated with a phase term <math id="I3.i2.p1.m1" class="ltx_Math" alttext="\psi_{k}" display="inline"><msub><mi>ψ</mi><mi>k</mi></msub></math></p>
<table id="S5.EGx104" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E235" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E235.m1" class="ltx_Math" alttext="\displaystyle v_{k}" display="inline"><msub><mi>v</mi><mi>k</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E235.m2" class="ltx_Math" alttext="\displaystyle\to v_{k}\exp(i\psi_{k})" display="inline"><mrow><mi></mi><mo>→</mo><mrow><msub><mi>v</mi><mi>k</mi></msub><mo>⁢</mo><mrow><mi id="XM1599">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1600"><mi>i</mi><mo>⁢</mo><msub><mi>ψ</mi><mi>k</mi></msub></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(235)</span></td>
</tr>
</table>
<p class="ltx_p">such that</p>
<table id="S5.EGx105" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E236" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E236.m1" class="ltx_Math" alttext="\displaystyle\mathrm{angle}(v_{k,2k-1}^{+})=0\leftrightarrow\psi_{k}=-\mathrm{%
angle}(v_{k,2k-1}^{+})" display="inline"><mrow><mrow><mrow><mi>angle</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msubsup id="XM1611"><mi>v</mi><mrow><mi id="XM1607">k</mi><mo>,</mo><mrow id="XM1608"><mrow><mn>2</mn><mo>⁢</mo><mi>k</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow><mo>+</mo></msubsup><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mn>0</mn></mrow><mo>↔</mo><mrow><msub><mi>ψ</mi><mi>k</mi></msub><mo>=</mo><mrow><mo>-</mo><mrow><mi>angle</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msubsup id="XM1612"><mi>v</mi><mrow><mi id="XM1609">k</mi><mo>,</mo><mrow id="XM1610"><mrow><mn>2</mn><mo>⁢</mo><mi>k</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow><mo>+</mo></msubsup><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(236)</span></td>
</tr>
</table>
<p class="ltx_p">In real space, Eqn. <a href="#S4.E234" title="(234) ‣ 1. ‣ 4.2 Normalisation of eigenvectors ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">234</span></a> and <a href="#S4.E236" title="(236) ‣ 2. ‣ 4.2 Normalisation of eigenvectors ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">236</span></a> then become equivalent to:
</p>
<table id="S5.EGx106" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E237" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E237.m1" class="ltx_Math" alttext="\displaystyle|a_{j,2j-1}|" display="inline"><mrow><mo stretchy="false">|</mo><msub id="XM1624"><mi>a</mi><mrow><mi id="XM1622">j</mi><mo>,</mo><mrow id="XM1623"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo stretchy="false">|</mo></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E237.m2" class="ltx_Math" alttext="\displaystyle=\max_{k=1,2,3}|a_{k,j}|," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><munder><mi>max</mi><mrow><mi>k</mi><mo>=</mo><mrow><mn id="XM1625">1</mn><mo>,</mo><mn id="XM1626">2</mn><mo>,</mo><mn id="XM1627">3</mn></mrow></mrow></munder><mo>⁡</mo><mrow><mo stretchy="false">|</mo><msub id="XM1630"><mi>a</mi><mrow><mi id="XM1628">k</mi><mo>,</mo><mi id="XM1629">j</mi></mrow></msub><mo stretchy="false">|</mo></mrow></mrow></mrow><mo>,</mo></mrow></math>
                      </td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E237.m3" class="ltx_Math" alttext="\displaystyle b_{j,2j-1}" display="inline"><msub><mi>b</mi><mrow><mi id="XM1633">j</mi><mo>,</mo><mrow id="XM1634"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E237.m4" class="ltx_Math" alttext="\displaystyle=0," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mn>0</mn></mrow><mo>,</mo></mrow></math>
                      </td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E237.m5" class="ltx_Math" alttext="\displaystyle j=1,\ldots,3" display="inline"><mrow><mi>j</mi><mo>=</mo><mrow><mn id="XM1638">1</mn><mo>,</mo><mi mathvariant="normal" id="XM1639">…</mi><mo>,</mo><mn id="XM1640">3</mn></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(237)</span></td>
</tr>
</table>
<p class="ltx_p">This has the effect that a particle with <math id="I3.i2.p1.m2" class="ltx_Math" alttext="x=0" display="inline"><mrow><mi>x</mi><mo>=</mo><mn>0</mn></mrow></math> is transformed to <math id="I3.i2.p1.m3" class="ltx_Math" alttext="\tilde{x}" display="inline"><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover></math> in the normalized phase space.</p>
</div>
</li>
<li id="I3.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="I3.i3.p1" class="ltx_para">
<p class="ltx_p">The sign of <math id="I3.i3.p1.m1" class="ltx_Math" alttext="b_{k,j}" display="inline"><msub><mi>b</mi><mrow><mi id="XM1641">k</mi><mo>,</mo><mi id="XM1642">j</mi></mrow></msub></math> is fixed by the symplectic condition on <math id="I3.i3.p1.m2" class="ltx_Math" alttext="W" display="inline"><mi>W</mi></math></p>
<table id="S5.EGx107" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E238" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E238.m1" class="ltx_Math" alttext="\displaystyle W^{T}SW=S" display="inline"><mrow><mrow><msup><mi>W</mi><mi>T</mi></msup><mo>⁢</mo><mi>S</mi><mo>⁢</mo><mi>W</mi></mrow><mo>=</mo><mi>S</mi></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(238)</span></td>
</tr>
</table>
<p class="ltx_p">with <math id="I3.i3.p1.m3" class="ltx_Math" alttext="S" display="inline"><mi>S</mi></math> defined as</p>
<table id="S5.EGx108" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E239" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E239.m1" class="ltx_Math" alttext="\displaystyle S" display="inline"><mi>S</mi></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E239.m2" class="ltx_Math" alttext="\displaystyle=\left(\begin{array}[]{ccc}0&amp;1&amp;\\
-1&amp;0&amp;\\
&amp;&amp;\ddots\\
\end{array}\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>(</mo><mtable id="XM1644"><mtr id="XM1644a"><mtd columnalign="center" id="XM1644b"><mn>0</mn></mtd><mtd columnalign="center" id="XM1644c"><mn>1</mn></mtd><mtd id="XM1644d"></mtd></mtr><mtr id="XM1644e"><mtd columnalign="center" id="XM1644f"><mrow><mo>-</mo><mn>1</mn></mrow></mtd><mtd columnalign="center" id="XM1644g"><mn>0</mn></mtd><mtd id="XM1644h"></mtd></mtr><mtr id="XM1644i"><mtd id="XM1644j"></mtd><mtd id="XM1644k"></mtd><mtd columnalign="center" id="XM1644l"><mi mathvariant="normal">⋱</mi></mtd></mtr></mtable><mo>)</mo></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(239)</span></td>
</tr>
</table>
<p class="ltx_p">which is equivalent to:</p>
<table id="S5.EGx109" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.Ex22" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex22.m1" class="ltx_Math" alttext="\displaystyle a_{k}^{T}\cdot S\cdot b_{k}" display="inline"><mrow><msubsup><mi>a</mi><mi>k</mi><mi>T</mi></msubsup><mo>⋅</mo><mi>S</mi><mo>⋅</mo><msub><mi>b</mi><mi>k</mi></msub></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex22.m2" class="ltx_Math" alttext="\displaystyle=1,\quad b_{k}^{T}\cdot S\cdot a_{k}=-1," display="inline"><mrow><mrow><mrow id="XM1647"><mi></mi><mo>=</mo><mn>1</mn></mrow><mo rspace="12.5pt">,</mo><mrow id="XM1648"><mrow><msubsup><mi>b</mi><mi>k</mi><mi>T</mi></msubsup><mo>⋅</mo><mi>S</mi><mo>⋅</mo><msub><mi>a</mi><mi>k</mi></msub></mrow><mo>=</mo><mrow><mo>-</mo><mn>1</mn></mrow></mrow></mrow><mo>,</mo></mrow></math>
                      </td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex22.m3" class="ltx_Math" alttext="\displaystyle\text{ for }k=l" display="inline"><mrow><mrow><mtext>for </mtext><mo>⁢</mo><mi>k</mi></mrow><mo>=</mo><mi>l</mi></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.E240" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E240.m1" class="ltx_Math" alttext="\displaystyle a_{k}^{T}\cdot S\cdot b_{l}" display="inline"><mrow><msubsup><mi>a</mi><mi>k</mi><mi>T</mi></msubsup><mo>⋅</mo><mi>S</mi><mo>⋅</mo><msub><mi>b</mi><mi>l</mi></msub></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E240.m2" class="ltx_Math" alttext="\displaystyle=0," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mn>0</mn></mrow><mo>,</mo></mrow></math>
                      </td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E240.m3" class="ltx_Math" alttext="\displaystyle\text{ for }k\not=l" display="inline"><mrow><mrow><mtext>for </mtext><mo>⁢</mo><mi>k</mi></mrow><mo>≠</mo><mi>l</mi></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(240)</span></td>
</tr>
<tr id="S4.Ex23" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex23.m1" class="ltx_Math" alttext="\displaystyle a_{k}^{T}\cdot S\cdot a_{l}" display="inline"><mrow><msubsup><mi>a</mi><mi>k</mi><mi>T</mi></msubsup><mo>⋅</mo><mi>S</mi><mo>⋅</mo><msub><mi>a</mi><mi>l</mi></msub></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex23.m2" class="ltx_Math" alttext="\displaystyle=0,\quad b_{k}^{T}\cdot S\cdot b_{l}=0," display="inline"><mrow><mrow><mrow id="XM1651"><mi></mi><mo>=</mo><mn>0</mn></mrow><mo rspace="12.5pt">,</mo><mrow id="XM1652"><mrow><msubsup><mi>b</mi><mi>k</mi><mi>T</mi></msubsup><mo>⋅</mo><mi>S</mi><mo>⋅</mo><msub><mi>b</mi><mi>l</mi></msub></mrow><mo>=</mo><mn>0</mn></mrow></mrow><mo>,</mo></mrow></math>
                      </td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex23.m3" class="ltx_Math" alttext="\displaystyle k,l=1,\ldots,3" display="inline"><mrow><mrow id="XM1663"><mrow><mi id="XM1659">k</mi><mo>,</mo><mi id="XM1660">l</mi></mrow><mo>=</mo><mn>1</mn></mrow><mo>,</mo><mrow><mi mathvariant="normal" id="XM1661">…</mi><mo>,</mo><mn id="XM1662">3</mn></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
<p class="ltx_p">Eqn. <a href="#S4.Ex22" title="3. ‣ 4.2 Normalisation of eigenvectors ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a> yields that in phase space <math id="I3.i3.p1.m4" class="ltx_Math" alttext="a_{k}" display="inline"><msub><mi>a</mi><mi>k</mi></msub></math> is thus obtained by an anticlockwise rotation of <math id="I3.i3.p1.m5" class="ltx_Math" alttext="b_{k}" display="inline"><msub><mi>b</mi><mi>k</mi></msub></math> by <math id="I3.i3.p1.m6" class="ltx_Math" alttext="\pi/2" display="inline"><mrow><mi>π</mi><mo>/</mo><mn>2</mn></mrow></math> and a scaling of its length with <math id="I3.i3.p1.m7" class="ltx_Math" alttext="|a_{k}|=\frac{1}{|b_{k}|}" display="inline"><mrow><mrow><mo stretchy="false">|</mo><msub id="XM1666"><mi>a</mi><mi>k</mi></msub><mo stretchy="false">|</mo></mrow><mo>=</mo><mfrac><mn>1</mn><mrow><mo stretchy="false">|</mo><msub id="XM1665"><mi>b</mi><mi>k</mi></msub><mo stretchy="false">|</mo></mrow></mfrac></mrow></math>.
</p>
</div>
</li>
</ol>
</div>
</section>
<section id="S4.SS3" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.3 </span>Conversion to normalized coordinates</h3>
<div id="S4.SS3.p1" class="ltx_para">
<p class="ltx_p">We will show in the following that in the normalized phase space the propagation of particle coordinates <math id="S4.SS3.p1.m1" class="ltx_Math" alttext="z(s)" display="inline"><mrow><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1667">s</mi><mo stretchy="false">)</mo></mrow></mrow></math> from <math id="S4.SS3.p1.m2" class="ltx_Math" alttext="s_{1}" display="inline"><msub><mi>s</mi><mn>1</mn></msub></math> to <math id="S4.SS3.p1.m3" class="ltx_Math" alttext="s_{2}" display="inline"><msub><mi>s</mi><mn>2</mn></msub></math> is just a rotation by an angle <math id="S4.SS3.p1.m4" class="ltx_Math" alttext="\phi_{k}" display="inline"><msub><mi>ϕ</mi><mi>k</mi></msub></math> in the <math id="S4.SS3.p1.m5" class="ltx_Math" alttext="k=1,\ldots,3" display="inline"><mrow><mi>k</mi><mo>=</mo><mrow><mn id="XM1668">1</mn><mo>,</mo><mi mathvariant="normal" id="XM1669">…</mi><mo>,</mo><mn id="XM1670">3</mn></mrow></mrow></math> planes, while the amplitude <math id="S4.SS3.p1.m6" class="ltx_Math" alttext="I_{k}" display="inline"><msub><mi>I</mi><mi>k</mi></msub></math> and initial phase <math id="S4.SS3.p1.m7" class="ltx_Math" alttext="\phi_{k,0}" display="inline"><msub><mi>ϕ</mi><mrow><mi id="XM1671">k</mi><mo>,</mo><mn id="XM1672">0</mn></mrow></msub></math> stay constant, explicitly <math id="S4.SS3.p1.m8" class="ltx_Math" alttext="z(s)" display="inline"><mrow><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1673">s</mi><mo stretchy="false">)</mo></mrow></mrow></math> is then given by:</p>
<table id="S5.EGx110" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E241" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E241.m1" class="ltx_Math" alttext="\displaystyle z(s)=\sum_{k=1}^{3}\sqrt{2I_{k}}\left(a_{k}(s)\cos\left(\phi_{k,%
0}+\phi_{k}(s)\right)-b_{k}(s)\sin\left(\phi_{k,0}+\phi_{k}(s)\right)\right)" display="inline"><mrow><mrow><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1692">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>k</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msqrt><mrow><mn>2</mn><mo>⁢</mo><msub><mi>I</mi><mi>k</mi></msub></mrow></msqrt><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1701"><mrow><msub><mi>a</mi><mi>k</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1693">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1695">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1696"><msub><mi>ϕ</mi><mrow><mi id="XM1688">k</mi><mo>,</mo><mn id="XM1689">0</mn></mrow></msub><mo>+</mo><mrow><msub><mi>ϕ</mi><mi>k</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1694">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow><mo>-</mo><mrow><msub><mi>b</mi><mi>k</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1697">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mi id="XM1699">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM1700"><msub><mi>ϕ</mi><mrow><mi id="XM1690">k</mi><mo>,</mo><mn id="XM1691">0</mn></mrow></msub><mo>+</mo><mrow><msub><mi>ϕ</mi><mi>k</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1698">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(241)</span></td>
</tr>
</table>
<p class="ltx_p">and</p>
<table id="S5.EGx111" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E242" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E242.m1" class="ltx_Math" alttext="\displaystyle z(s_{2})" display="inline"><mrow><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1707"><mi>s</mi><mn>2</mn></msub><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E242.m2" class="ltx_Math" alttext="\displaystyle=W(s_{2})R(\phi_{k})W(s_{1})^{-1}z(s_{1})," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mi>W</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1708"><mi>s</mi><mn>2</mn></msub><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi>R</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1709"><mi>ϕ</mi><mi>k</mi></msub><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi>W</mi><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><msub id="XM1710"><mi>s</mi><mn>1</mn></msub><mo stretchy="false">)</mo></mrow><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁢</mo><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1711"><mi>s</mi><mn>1</mn></msub><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(242)</span></td>
</tr>
<tr id="S4.Ex24" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.Ex24.m2" class="ltx_Math" alttext="\displaystyle   \text{ with }\phi_{k}=\phi_{k}(s_{2})-\phi_{k}(s_{1})" display="inline"><mrow><mrow><mi>   </mi><mo>⁢</mo><mtext> with </mtext><mo>⁢</mo><msub><mi>ϕ</mi><mi>k</mi></msub></mrow><mo>=</mo><mrow><mrow><msub><mi>ϕ</mi><mi>k</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1714"><mi>s</mi><mn>2</mn></msub><mo stretchy="false">)</mo></mrow></mrow><mo>-</mo><mrow><msub><mi>ϕ</mi><mi>k</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM1715"><mi>s</mi><mn>1</mn></msub><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
<p class="ltx_p">This implies that one turn is simply a rotation by <math id="S4.SS3.p1.m9" class="ltx_Math" alttext="\phi_{k}=2\pi Q_{k}" display="inline"><mrow><msub><mi>ϕ</mi><mi>k</mi></msub><mo>=</mo><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><msub><mi>Q</mi><mi>k</mi></msub></mrow></mrow></math> where <math id="S4.SS3.p1.m10" class="ltx_Math" alttext="Q_{k}" display="inline"><msub><mi>Q</mi><mi>k</mi></msub></math> is the tune of the mode <math id="S4.SS3.p1.m11" class="ltx_Math" alttext="k" display="inline"><mi>k</mi></math>. In the transverse plane the tune (<math id="S4.SS3.p1.m12" class="ltx_Math" alttext="Q_{I,II}" display="inline"><msub><mi>Q</mi><mrow><mi id="XM1716">I</mi><mo>,</mo><mrow id="XM1717"><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></mrow></msub></math>) is usually positive and the particles rotate clockwise, while in the longitudinal plane the tune (<math id="S4.SS3.p1.m13" class="ltx_Math" alttext="Q_{III}" display="inline"><msub><mi>Q</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub></math>) is negative above <math id="S4.SS3.p1.m14" class="ltx_Math" alttext="\gamma_{T}" display="inline"><msub><mi>γ</mi><mi>T</mi></msub></math> leading to an anticlockwise rotation.</p>
</div>
<div id="S4.SS3.p2" class="ltx_para">
<p class="ltx_p">For the derivation the following steps are needed:</p>
<ol id="I4" class="ltx_enumerate">
<li id="I4.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="I4.i1.p1" class="ltx_para">
<p class="ltx_p">The effect of one turn on the normalized variable <math id="I4.i1.p1.m1" class="ltx_Math" alttext="\tilde{z}(s)=W^{-1}(s)z(s)" display="inline"><mrow><mrow><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1718">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><msup><mi>W</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1719">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1720">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math> is a rotation:</p>
<table id="S5.EGx112" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E243" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E243.m1" class="ltx_Math" alttext="\displaystyle\tilde{z}(C+s)=W^{-1}z(s+C)\overset{(\rm Eqn.\ref{opt:eqn:1:1})}{%
=}W^{-1}WRW^{-1}z(s)=R\tilde{z}(s)," display="inline"><mrow><mrow><mrow><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1731"><mi>C</mi><mo>+</mo><mi>s</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><msup><mi>W</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁢</mo><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM1732"><mi>s</mi><mo>+</mo><mi>C</mi></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mo>=</mo><mrow><mo stretchy="false">(</mo><mrow><mi id="XM1728">Eqn</mi><mo>.</mo><mtext id="XM1729"><a href="#S4.E231" title="(231) ‣ 4.1 Diagonalisation of one-turn matrix ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">231</span></a></mtext></mrow><mo stretchy="false">)</mo></mrow></mover><mo>⁢</mo><msup><mi mathvariant="normal">W</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁢</mo><msup><mi>WRW</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁢</mo><mi mathvariant="normal">z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi mathvariant="normal" id="XM1733">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi mathvariant="normal">R</mi><mo>⁢</mo><mover accent="true"><mi mathvariant="normal">z</mi><mo stretchy="false">~</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi mathvariant="normal" id="XM1734">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>,</mo></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(243)</span></td>
</tr>
</table>
<p class="ltx_p">As <math id="I4.i1.p1.m2" class="ltx_Math" alttext="M" display="inline"><mi>M</mi></math> and <math id="I4.i1.p1.m3" class="ltx_Math" alttext="R" display="inline"><mi>R</mi></math> are symplectic also <math id="I4.i1.p1.m4" class="ltx_Math" alttext="W" display="inline"><mi>W</mi></math> is symplectic, and its inverse is thus given by <math id="I4.i1.p1.m5" class="ltx_Math" alttext="S^{-1}W^{T}S" display="inline"><mrow><msup><mi>S</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁢</mo><msup><mi>W</mi><mi>T</mi></msup><mo>⁢</mo><mi>S</mi></mrow></math>, explicitly:</p>
<table id="S5.EGx113" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E244" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E244.m1" class="ltx_Math" alttext="\displaystyle W^{-1}" display="inline"><msup><mi>W</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E244.m2" class="ltx_Math" alttext="\displaystyle=\left(\begin{array}[]{cccccc}b_{12}&amp;-b_{11}&amp;b_{14}&amp;-b_{13}&amp;b_{16%
}&amp;-b_{15}\\
-a_{12}&amp;a_{11}&amp;-a_{14}&amp;a_{13}&amp;-a_{16}&amp;a_{15}\\
b_{22}&amp;-b_{21}&amp;b_{24}&amp;-b_{23}&amp;b_{26}&amp;-b_{25}\\
-a_{22}&amp;a_{21}&amp;-a_{24}&amp;a_{23}&amp;-a_{26}&amp;a_{25}\\
b_{32}&amp;-b_{31}&amp;b_{34}&amp;-b_{33}&amp;b_{36}&amp;-b_{35}\\
-a_{32}&amp;a_{31}&amp;-a_{34}&amp;a_{33}&amp;-a_{36}&amp;a_{35}\\
\end{array}\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>(</mo><mtable id="XM1736"><mtr id="XM1736a"><mtd columnalign="center" id="XM1736b"><msub><mi>b</mi><mn>12</mn></msub></mtd><mtd columnalign="center" id="XM1736c"><mrow><mo>-</mo><msub><mi>b</mi><mn>11</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736d"><msub><mi>b</mi><mn>14</mn></msub></mtd><mtd columnalign="center" id="XM1736e"><mrow><mo>-</mo><msub><mi>b</mi><mn>13</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736f"><msub><mi>b</mi><mn>16</mn></msub></mtd><mtd columnalign="center" id="XM1736g"><mrow><mo>-</mo><msub><mi>b</mi><mn>15</mn></msub></mrow></mtd></mtr><mtr id="XM1736h"><mtd columnalign="center" id="XM1736i"><mrow><mo>-</mo><msub><mi>a</mi><mn>12</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736j"><msub><mi>a</mi><mn>11</mn></msub></mtd><mtd columnalign="center" id="XM1736k"><mrow><mo>-</mo><msub><mi>a</mi><mn>14</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736l"><msub><mi>a</mi><mn>13</mn></msub></mtd><mtd columnalign="center" id="XM1736m"><mrow><mo>-</mo><msub><mi>a</mi><mn>16</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736n"><msub><mi>a</mi><mn>15</mn></msub></mtd></mtr><mtr id="XM1736o"><mtd columnalign="center" id="XM1736p"><msub><mi>b</mi><mn>22</mn></msub></mtd><mtd columnalign="center" id="XM1736q"><mrow><mo>-</mo><msub><mi>b</mi><mn>21</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736r"><msub><mi>b</mi><mn>24</mn></msub></mtd><mtd columnalign="center" id="XM1736s"><mrow><mo>-</mo><msub><mi>b</mi><mn>23</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736t"><msub><mi>b</mi><mn>26</mn></msub></mtd><mtd columnalign="center" id="XM1736u"><mrow><mo>-</mo><msub><mi>b</mi><mn>25</mn></msub></mrow></mtd></mtr><mtr id="XM1736v"><mtd columnalign="center" id="XM1736w"><mrow><mo>-</mo><msub><mi>a</mi><mn>22</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736x"><msub><mi>a</mi><mn>21</mn></msub></mtd><mtd columnalign="center" id="XM1736y"><mrow><mo>-</mo><msub><mi>a</mi><mn>24</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736z"><msub><mi>a</mi><mn>23</mn></msub></mtd><mtd columnalign="center" id="XM1736aa"><mrow><mo>-</mo><msub><mi>a</mi><mn>26</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736ab"><msub><mi>a</mi><mn>25</mn></msub></mtd></mtr><mtr id="XM1736ac"><mtd columnalign="center" id="XM1736ad"><msub><mi>b</mi><mn>32</mn></msub></mtd><mtd columnalign="center" id="XM1736ae"><mrow><mo>-</mo><msub><mi>b</mi><mn>31</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736af"><msub><mi>b</mi><mn>34</mn></msub></mtd><mtd columnalign="center" id="XM1736ag"><mrow><mo>-</mo><msub><mi>b</mi><mn>33</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736ah"><msub><mi>b</mi><mn>36</mn></msub></mtd><mtd columnalign="center" id="XM1736ai"><mrow><mo>-</mo><msub><mi>b</mi><mn>35</mn></msub></mrow></mtd></mtr><mtr id="XM1736aj"><mtd columnalign="center" id="XM1736ak"><mrow><mo>-</mo><msub><mi>a</mi><mn>32</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736al"><msub><mi>a</mi><mn>31</mn></msub></mtd><mtd columnalign="center" id="XM1736am"><mrow><mo>-</mo><msub><mi>a</mi><mn>34</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736an"><msub><mi>a</mi><mn>33</mn></msub></mtd><mtd columnalign="center" id="XM1736ao"><mrow><mo>-</mo><msub><mi>a</mi><mn>36</mn></msub></mrow></mtd><mtd columnalign="center" id="XM1736ap"><msub><mi>a</mi><mn>35</mn></msub></mtd></mtr></mtable><mo>)</mo></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(244)</span></td>
</tr>
</table>
</div>
</li>
<li id="I4.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="I4.i2.p1" class="ltx_para">
<p class="ltx_p">The one-turn map and <math id="I4.i2.p1.m1" class="ltx_Math" alttext="W" display="inline"><mi>W</mi></math>-matrix can be propagated from <math id="I4.i2.p1.m2" class="ltx_Math" alttext="s_{1}" display="inline"><msub><mi>s</mi><mn>1</mn></msub></math> to <math id="I4.i2.p1.m3" class="ltx_Math" alttext="s_{2}" display="inline"><msub><mi>s</mi><mn>2</mn></msub></math> by</p>
<table id="S5.EGx114" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E245" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E245.m1" class="ltx_Math" alttext="\displaystyle M_{2}" display="inline"><msub><mi>M</mi><mn>2</mn></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E245.m2" class="ltx_Math" alttext="\displaystyle=M_{1\to 2}M_{1}M^{-1}_{1\to 2}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>M</mi><mrow><mn>1</mn><mo>→</mo><mn>2</mn></mrow></msub><mo>⁢</mo><msub><mi>M</mi><mn>1</mn></msub><mo>⁢</mo><msubsup><mi>M</mi><mrow><mn>1</mn><mo>→</mo><mn>2</mn></mrow><mrow><mo>-</mo><mn>1</mn></mrow></msubsup></mrow></mrow></math>
                      </td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E245.m3" class="ltx_Math" alttext="\displaystyle W_{2}" display="inline"><msub><mi>W</mi><mn>2</mn></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E245.m4" class="ltx_Math" alttext="\displaystyle=M_{1\to 2}W_{1}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><msub><mi>M</mi><mrow><mn>1</mn><mo>→</mo><mn>2</mn></mrow></msub><mo>⁢</mo><msub><mi>W</mi><mn>1</mn></msub></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(245)</span></td>
</tr>
</table>
<p class="ltx_p">As Eqn. <a href="#S4.E243" title="(243) ‣ 1. ‣ 4.3 Conversion to normalized coordinates ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">243</span></a> represents a similarity transformation, the eigenvalues are thus independent of the position <math id="I4.i2.p1.m4" class="ltx_Math" alttext="s" display="inline"><mi>s</mi></math> and as the rotation matrix <math id="I4.i2.p1.m5" class="ltx_Math" alttext="R" display="inline"><mi>R</mi></math> consists of the eigenvalues of <math id="I4.i2.p1.m6" class="ltx_Math" alttext="M" display="inline"><mi>M</mi></math>, the angle of the rotation <math id="I4.i2.p1.m7" class="ltx_Math" alttext="\mu_{k}=2\pi Q_{k}" display="inline"><mrow><msub><mi>μ</mi><mi>k</mi></msub><mo>=</mo><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><msub><mi>Q</mi><mi>k</mi></msub></mrow></mrow></math> is thus also independent of <math id="I4.i2.p1.m8" class="ltx_Math" alttext="s" display="inline"><mi>s</mi></math>.</p>
</div>
</li>
<li id="I4.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="I4.i3.p1" class="ltx_para">
<p class="ltx_p">As Eqn. <a href="#S4.E231" title="(231) ‣ 4.1 Diagonalisation of one-turn matrix ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">231</span></a> represents a basis transformation from the standard <math id="I4.i3.p1.m1" class="ltx_Math" alttext="\mathbb{R}^{2}" display="inline"><msup><mi>ℝ</mi><mn>2</mn></msup></math> basis to the eigenvector basis, the vectors <math id="I4.i3.p1.m2" class="ltx_Math" alttext="a_{k}" display="inline"><msub><mi>a</mi><mi>k</mi></msub></math> and <math id="I4.i3.p1.m3" class="ltx_Math" alttext="b_{k}" display="inline"><msub><mi>b</mi><mi>k</mi></msub></math> are projected onto (Eqn. <a href="#S4.Ex22" title="3. ‣ 4.2 Normalisation of eigenvectors ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a>):</p>
<table id="S5.EGx115" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.Ex25" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex25.m1" class="ltx_Math" alttext="\displaystyle\tilde{a}_{1}=W^{-1}a_{1}" display="inline"><mrow><msub><mover accent="true"><mi>a</mi><mo stretchy="false">~</mo></mover><mn>1</mn></msub><mo>=</mo><mrow><msup><mi>W</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁢</mo><msub><mi>a</mi><mn>1</mn></msub></mrow></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex25.m2" class="ltx_Math" alttext="\displaystyle=-SW^{T}Sa_{1}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mi>S</mi><mo>⁢</mo><msup><mi>W</mi><mi>T</mi></msup><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>a</mi><mn>1</mn></msub></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.Ex26" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex26.m2" class="ltx_Math" alttext="\displaystyle=-S(a_{1}Sa_{1},b_{1}Sa_{1},\ldots,b_{3}Sa_{1})^{T}=(1,0,\ldots,0)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mi>S</mi><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1745"><msub><mi>a</mi><mn>1</mn></msub><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>a</mi><mn>1</mn></msub></mrow><mo>,</mo><mrow id="XM1746"><msub><mi>b</mi><mn>1</mn></msub><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>a</mi><mn>1</mn></msub></mrow><mo>,</mo><mi mathvariant="normal" id="XM1747">…</mi><mo>,</mo><mrow id="XM1748"><msub><mi>b</mi><mn>3</mn></msub><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>a</mi><mn>1</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mi>T</mi></msup></mrow></mrow><mo>=</mo><mrow><mo stretchy="false">(</mo><mn id="XM1749">1</mn><mo>,</mo><mn id="XM1750">0</mn><mo>,</mo><mi mathvariant="normal" id="XM1751">…</mi><mo>,</mo><mn id="XM1752">0</mn><mo stretchy="false">)</mo></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.Ex27" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex27.m1" class="ltx_Math" alttext="\displaystyle\tilde{b}_{1}=W^{-1}b_{1}" display="inline"><mrow><msub><mover accent="true"><mi>b</mi><mo stretchy="false">~</mo></mover><mn>1</mn></msub><mo>=</mo><mrow><msup><mi>W</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁢</mo><msub><mi>b</mi><mn>1</mn></msub></mrow></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex27.m2" class="ltx_Math" alttext="\displaystyle=-SW^{T}Sb_{1}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mi>S</mi><mo>⁢</mo><msup><mi>W</mi><mi>T</mi></msup><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>b</mi><mn>1</mn></msub></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.E246" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E246.m2" class="ltx_Math" alttext="\displaystyle=-S(a_{1}Sb_{1},b_{1}Sb_{1},\ldots,b_{3}Sb_{1})^{T}=(0,1,\ldots,0)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mi>S</mi><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1761"><msub><mi>a</mi><mn>1</mn></msub><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>b</mi><mn>1</mn></msub></mrow><mo>,</mo><mrow id="XM1762"><msub><mi>b</mi><mn>1</mn></msub><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>b</mi><mn>1</mn></msub></mrow><mo>,</mo><mi mathvariant="normal" id="XM1763">…</mi><mo>,</mo><mrow id="XM1764"><msub><mi>b</mi><mn>3</mn></msub><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>b</mi><mn>1</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mi>T</mi></msup></mrow></mrow><mo>=</mo><mrow><mo stretchy="false">(</mo><mn id="XM1765">0</mn><mo>,</mo><mn id="XM1766">1</mn><mo>,</mo><mi mathvariant="normal" id="XM1767">…</mi><mo>,</mo><mn id="XM1768">0</mn><mo stretchy="false">)</mo></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(246)</span></td>
</tr>
<tr id="S4.Ex28" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex28.m1" class="ltx_Math" alttext="\displaystyle\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>
                      </td>
<td class="ltx_td ltx_align_left"></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.Ex29" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex29.m1" class="ltx_Math" alttext="\displaystyle\tilde{b}_{3}=W^{-1}b_{3}" display="inline"><mrow><msub><mover accent="true"><mi>b</mi><mo stretchy="false">~</mo></mover><mn>3</mn></msub><mo>=</mo><mrow><msup><mi>W</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁢</mo><msub><mi>b</mi><mn>3</mn></msub></mrow></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex29.m2" class="ltx_Math" alttext="\displaystyle=-SW^{T}Sb_{3}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mi>S</mi><mo>⁢</mo><msup><mi>W</mi><mi>T</mi></msup><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>b</mi><mn>3</mn></msub></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.Ex30" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex30.m2" class="ltx_Math" alttext="\displaystyle=-S(a_{1}Sb_{3},b_{1}Sb_{3},\ldots,b_{3}Sb_{3})^{T}=(0,0,\ldots,1)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mrow><mi>S</mi><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM1777"><msub><mi>a</mi><mn>1</mn></msub><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>b</mi><mn>3</mn></msub></mrow><mo>,</mo><mrow id="XM1778"><msub><mi>b</mi><mn>1</mn></msub><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>b</mi><mn>3</mn></msub></mrow><mo>,</mo><mi mathvariant="normal" id="XM1779">…</mi><mo>,</mo><mrow id="XM1780"><msub><mi>b</mi><mn>3</mn></msub><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>b</mi><mn>3</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mi>T</mi></msup></mrow></mrow><mo>=</mo><mrow><mo stretchy="false">(</mo><mn id="XM1781">0</mn><mo>,</mo><mn id="XM1782">0</mn><mo>,</mo><mi mathvariant="normal" id="XM1783">…</mi><mo>,</mo><mn id="XM1784">1</mn><mo stretchy="false">)</mo></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
<p class="ltx_p">in the normalized phase space.</p>
</div>
</li>
<li id="I4.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="I4.i4.p1" class="ltx_para">
<p class="ltx_p">From Eqn. <a href="#S4.E243" title="(243) ‣ 1. ‣ 4.3 Conversion to normalized coordinates ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">243</span></a> it follows that the amplitude <math id="I4.i4.p1.m1" class="ltx_Math" alttext="I_{k}" display="inline"><msub><mi>I</mi><mi>k</mi></msub></math> and initial phase <math id="I4.i4.p1.m2" class="ltx_Math" alttext="\phi_{k0}" display="inline"><msub><mi>ϕ</mi><mrow><mi>k</mi><mo>⁢</mo><mn>0</mn></mrow></msub></math> of <math id="I4.i4.p1.m3" class="ltx_Math" alttext="\tilde{z}=W^{-1}z=(\tilde{z}_{a_{1}},\tilde{z}_{b_{1}},\ldots,\tilde{z}_{b_{3}})" display="inline"><mrow><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><mo>=</mo><mrow><msup><mi>W</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup><mo>⁢</mo><mi>z</mi></mrow><mo>=</mo><mrow><mo stretchy="false">(</mo><msub id="XM1785"><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>a</mi><mn>1</mn></msub></msub><mo>,</mo><msub id="XM1786"><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>b</mi><mn>1</mn></msub></msub><mo>,</mo><mi mathvariant="normal" id="XM1787">…</mi><mo>,</mo><msub id="XM1788"><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>b</mi><mn>3</mn></msub></msub><mo stretchy="false">)</mo></mrow></mrow></math></p>
<table id="S5.EGx116" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E247" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E247.m1" class="ltx_Math" alttext="\displaystyle I_{k}" display="inline"><msub><mi>I</mi><mi>k</mi></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E247.m2" class="ltx_Math" alttext="\displaystyle=\frac{(\tilde{z}_{a_{k}})^{2}+(\tilde{z}_{b_{k}})^{2}}{2},\quad k%
=1,\ldots,3" display="inline"><mrow><mrow id="XM1801"><mi></mi><mo>=</mo><mstyle displaystyle="true"><mfrac><mrow><msup><mrow><mo stretchy="false">(</mo><msub id="XM1796"><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>a</mi><mi>k</mi></msub></msub><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>+</mo><msup><mrow><mo stretchy="false">(</mo><msub id="XM1797"><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>b</mi><mi>k</mi></msub></msub><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow><mn>2</mn></mfrac></mstyle></mrow><mo rspace="12.5pt">,</mo><mrow id="XM1802"><mi>k</mi><mo>=</mo><mrow><mn id="XM1798">1</mn><mo>,</mo><mi mathvariant="normal" id="XM1799">…</mi><mo>,</mo><mn id="XM1800">3</mn></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(247)</span></td>
</tr>
<tr id="S4.E248" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E248.m1" class="ltx_Math" alttext="\displaystyle\tan\phi_{k0}" display="inline"><mrow><mi>tan</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi>k</mi><mo>⁢</mo><mn>0</mn></mrow></msub></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E248.m2" class="ltx_Math" alttext="\displaystyle=-\frac{\tilde{z}_{b_{k}}}{\tilde{z}_{a_{k}}}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mo>-</mo><mstyle displaystyle="true"><mfrac><msub><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>b</mi><mi>k</mi></msub></msub><msub><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>a</mi><mi>k</mi></msub></msub></mfrac></mstyle></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(248)</span></td>
</tr>
</table>
<p class="ltx_p">are constants of the motion, which is illustrated in Fig. <a href="#S4.F4" title="Figure 4 ‣ 4. ‣ 4.3 Conversion to normalized coordinates ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4</span></a>.</p>
</div>
<figure id="S4.F4" class="ltx_figure"><img src="x1.png" id="S4.F4.g1" class="ltx_graphics ltx_centering" width="744" height="1052" alt="">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure 4: </span>Normalized phase space.</figcaption>
</figure>
<div id="I4.i4.p2" class="ltx_para">
<p class="ltx_p">The initial phase is defined with a minus sign in view of the definition of the Twiss parameters, where the initial phase is then added (and not subtracted) to the phase advance. The components of <math id="I4.i4.p2.m1" class="ltx_Math" alttext="\tilde{z}" display="inline"><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover></math> are then explicitly given by:</p>
<table id="S5.EGx117" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E249" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E249.m1" class="ltx_Math" alttext="\displaystyle\tilde{z}_{a_{k}}" display="inline"><msub><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>a</mi><mi>k</mi></msub></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E249.m2" class="ltx_Math" alttext="\displaystyle=\sum_{j=1}^{3}b_{k,2j}z_{2j-1}-b_{k,2j-1}z_{2j},\quad k=1,\ldots,3" display="inline"><mrow><mrow id="XM1819"><mi></mi><mo>=</mo><mrow><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>j</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msub><mi>b</mi><mrow><mi id="XM1812">k</mi><mo>,</mo><mrow id="XM1813"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>⁢</mo><msub><mi>z</mi><mrow><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></msub></mrow></mrow><mo>-</mo><mrow><msub><mi>b</mi><mrow><mi id="XM1814">k</mi><mo>,</mo><mrow id="XM1815"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo>⁢</mo><msub><mi>z</mi><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></msub></mrow></mrow></mrow><mo rspace="12.5pt">,</mo><mrow id="XM1820"><mi>k</mi><mo>=</mo><mrow><mn id="XM1816">1</mn><mo>,</mo><mi mathvariant="normal" id="XM1817">…</mi><mo>,</mo><mn id="XM1818">3</mn></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(249)</span></td>
</tr>
<tr id="S4.E250" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E250.m1" class="ltx_Math" alttext="\displaystyle\tilde{z}_{b_{k}}" display="inline"><msub><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>b</mi><mi>k</mi></msub></msub></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E250.m2" class="ltx_Math" alttext="\displaystyle=\sum_{j=1}^{3}a_{k,2j-1}z_{2j}-a_{k,2j}z_{2j-1},\quad k=1,\ldots%
,3." display="inline"><mrow><mrow id="XM1837"><mi></mi><mo>=</mo><mrow><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>j</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msub><mi>a</mi><mrow><mi id="XM1830">k</mi><mo>,</mo><mrow id="XM1831"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo>⁢</mo><msub><mi>z</mi><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></msub></mrow></mrow><mo>-</mo><mrow><msub><mi>a</mi><mrow><mi id="XM1832">k</mi><mo>,</mo><mrow id="XM1833"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>⁢</mo><msub><mi>z</mi><mrow><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></msub></mrow></mrow></mrow><mo rspace="12.5pt">,</mo><mrow id="XM1838"><mi>k</mi><mo>=</mo><mrow><mn id="XM1834">1</mn><mo>,</mo><mi mathvariant="normal" id="XM1835">…</mi><mo>,</mo><mn id="XM1836">3.</mn></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(250)</span></td>
</tr>
</table>
<p class="ltx_p">An arbitrary vector <math id="I4.i4.p2.m2" class="ltx_Math" alttext="z(s)" display="inline"><mrow><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1839">s</mi><mo stretchy="false">)</mo></mrow></mrow></math> can thus be written in the following form:</p>
<table id="S5.EGx118" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.Ex31" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex31.m1" class="ltx_Math" alttext="\displaystyle z(s)" display="inline"><mrow><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1843">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex31.m2" class="ltx_Math" alttext="\displaystyle=W(s)\tilde{z}(s)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi>W</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1844">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1845">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.Ex32" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex32.m2" class="ltx_Math" alttext="\displaystyle=W(s)\left(\sum_{k=1}^{3}\tilde{z}_{a_{k}}\tilde{a}_{k}+\tilde{z}%
_{b_{k}}\tilde{b}_{k}\right)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mi>W</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1848">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1849"><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>k</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msub><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>a</mi><mi>k</mi></msub></msub><mo>⁢</mo><msub><mover accent="true"><mi>a</mi><mo stretchy="false">~</mo></mover><mi>k</mi></msub></mrow></mrow><mo>+</mo><mrow><msub><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>b</mi><mi>k</mi></msub></msub><mo>⁢</mo><msub><mover accent="true"><mi>b</mi><mo stretchy="false">~</mo></mover><mi>k</mi></msub></mrow></mrow><mo>)</mo></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.Ex33" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex33.m2" class="ltx_Math" alttext="\displaystyle=\sum_{k=1}^{3}\tilde{z}_{a_{k}}W(s)\tilde{a}_{k}+\tilde{z}_{b_{k%
}}W(s)\tilde{b}_{k}\overset{\rm Eqn.\leavevmode\nobreak\ \ref{opt:eqn:3:2}}{=}%
\sum_{k=1}^{3}\tilde{z}_{a_{k}}a_{k}+\tilde{z}_{b_{k}}b_{k}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>k</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msub><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>a</mi><mi>k</mi></msub></msub><mo>⁢</mo><mi>W</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1856">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msub><mover accent="true"><mi>a</mi><mo stretchy="false">~</mo></mover><mi>k</mi></msub></mrow></mrow><mo>+</mo><mrow><msub><mover accent="true"><mi>z</mi><mo stretchy="false">~</mo></mover><msub><mi>b</mi><mi>k</mi></msub></msub><mo>⁢</mo><mi>W</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1857">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msub><mover accent="true"><mi>b</mi><mo stretchy="false">~</mo></mover><mi>k</mi></msub><mo>⁢</mo><mover accent="true"><mo>=</mo><mrow><mi id="XM1854">Eqn</mi><mo rspace="7.5pt">.</mo><mtext id="XM1855"><a href="#S4.Ex25" title="3. ‣ 4.3 Conversion to normalized coordinates ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a></mtext></mrow></mover><mo>⁢</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi mathvariant="normal">k</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msub><mover accent="true"><mi mathvariant="normal">z</mi><mo stretchy="false">~</mo></mover><msub><mi mathvariant="normal">a</mi><mi mathvariant="normal">k</mi></msub></msub><mo>⁢</mo><msub><mi mathvariant="normal">a</mi><mi mathvariant="normal">k</mi></msub></mrow></mrow></mrow><mo>+</mo><mrow><msub><mover accent="true"><mi mathvariant="normal">z</mi><mo stretchy="false">~</mo></mover><msub><mi mathvariant="normal">b</mi><mi mathvariant="normal">k</mi></msub></msub><mo>⁢</mo><msub><mi mathvariant="normal">b</mi><mi mathvariant="normal">k</mi></msub></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.E251" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E251.m2" class="ltx_Math" alttext="\displaystyle\overset{\rm Eqns.\leavevmode\nobreak\ \ref{opt:eqn:20a},\ref{opt%
:eqn:20b}}{=}\sum_{k=1}^{3}\sqrt{2I_{k}}\left(a_{k}\cos{\phi_{k0}}-b_{k}\sin{%
\phi_{k0}}\right)" display="inline"><mrow><mover accent="true"><mo>=</mo><mrow><mi id="XM1865">Eqns</mi><mo rspace="7.5pt">.</mo><mrow><mtext id="XM1863"><a href="#S4.E247" title="(247) ‣ 4. ‣ 4.3 Conversion to normalized coordinates ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">247</span></a></mtext><mo>,</mo><mtext id="XM1864"><a href="#S4.E248" title="(248) ‣ 4. ‣ 4.3 Conversion to normalized coordinates ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">248</span></a></mtext></mrow></mrow></mover><mo>⁢</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi mathvariant="normal">k</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msqrt><mrow><mn>2</mn><mo>⁢</mo><msub><mi mathvariant="normal">I</mi><mi mathvariant="normal">k</mi></msub></mrow></msqrt><mo>⁢</mo><mrow><mo>(</mo><mrow id="XM1867"><mrow><msub><mi mathvariant="normal">a</mi><mi mathvariant="normal">k</mi></msub><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>ϕ</mi><mi>k0</mi></msub></mrow></mrow><mo>-</mo><mrow><msub><mi mathvariant="normal">b</mi><mi mathvariant="normal">k</mi></msub><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>ϕ</mi><mi>k0</mi></msub></mrow></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(251)</span></td>
</tr>
</table>
</div>
</li>
</ol>
</div>
</section>
<section id="S4.SS4" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.4 </span>Twiss parameters</h3>
<div id="S4.SS4.p1" class="ltx_para">
<p class="ltx_p">In the following the parameter <math id="S4.SS4.p1.m1" class="ltx_Math" alttext="k" display="inline"><mi>k</mi></math> will always be used for the mode <math id="S4.SS4.p1.m2" class="ltx_Math" alttext="k" display="inline"><mi>k</mi></math> and the parameter <math id="S4.SS4.p1.m3" class="ltx_Math" alttext="j=1,2,3" display="inline"><mrow><mi>j</mi><mo>=</mo><mrow><mn id="XM1868">1</mn><mo>,</mo><mn id="XM1869">2</mn><mo>,</mo><mn id="XM1870">3</mn></mrow></mrow></math> for the horizontal (<math id="S4.SS4.p1.m4" class="ltx_Math" alttext="x,x^{\prime}" display="inline"><mrow><mi id="XM1871">x</mi><mo>,</mo><msup id="XM1872"><mi>x</mi><mo>′</mo></msup></mrow></math>), vertical (<math id="S4.SS4.p1.m5" class="ltx_Math" alttext="y,y^{\prime}" display="inline"><mrow><mi id="XM1873">y</mi><mo>,</mo><msup id="XM1874"><mi>y</mi><mo>′</mo></msup></mrow></math>) and longitudinal plane <math id="S4.SS4.p1.m6" class="ltx_Math" alttext="(\sigma,\delta)" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM1875">σ</mi><mo>,</mo><mi id="XM1876">δ</mi><mo stretchy="false">)</mo></mrow></math> in the phase space. <math id="S4.SS4.p1.m7" class="ltx_Math" alttext="z_{2j-1}" display="inline"><msub><mi>z</mi><mrow><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></msub></math> then stands for the coordinates <math id="S4.SS4.p1.m8" class="ltx_Math" alttext="(x,y,\sigma" display="inline"><mrow><mo stretchy="false">(</mo><mi id="XM1877">x</mi><mo>,</mo><mi id="XM1878">y</mi><mo>,</mo><mi id="XM1879">σ</mi></mrow></math>) and <math id="S4.SS4.p1.m9" class="ltx_Math" alttext="z_{2j}" display="inline"><msub><mi>z</mi><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></msub></math> for <math id="S4.SS4.p1.m10" class="ltx_Math" alttext="(x^{\prime},y^{\prime},\delta" display="inline"><mrow><mo stretchy="false">(</mo><msup><mi>x</mi><mo>′</mo></msup><mo>,</mo><msup><mi>y</mi><mo>′</mo></msup><mo>,</mo><mi id="XM1882">δ</mi></mrow></math>).</p>
</div>
<div id="S4.SS4.p2" class="ltx_para">
<p class="ltx_p">The Twiss parameters can be introduced by writing the components of the eigenvector basis <math id="S4.SS4.p2.m1" class="ltx_Math" alttext="(a_{k}(s),b_{k}(s))" display="inline"><mrow><mo stretchy="false">(</mo><mrow id="XM1885"><msub><mi>a</mi><mi>k</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1883">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>,</mo><mrow id="XM1886"><msub><mi>b</mi><mi>k</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1884">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></math> as the product of two envelope functions <math id="S4.SS4.p2.m2" class="ltx_Math" alttext="\sqrt{\beta_{k,j}(s)}" display="inline"><msqrt><mrow><msub><mi>β</mi><mrow><mi id="XM1887">k</mi><mo>,</mo><mi id="XM1888">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1889">s</mi><mo stretchy="false">)</mo></mrow></mrow></msqrt></math>, <math id="S4.SS4.p2.m3" class="ltx_Math" alttext="\sqrt{\gamma_{k,j}(s)}" display="inline"><msqrt><mrow><msub><mi>γ</mi><mrow><mi id="XM1890">k</mi><mo>,</mo><mi id="XM1891">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1892">s</mi><mo stretchy="false">)</mo></mrow></mrow></msqrt></math> and phase functions <math id="S4.SS4.p2.m4" class="ltx_Math" alttext="\phi_{k,j}(s)" display="inline"><mrow><msub><mi>ϕ</mi><mrow><mi id="XM1893">k</mi><mo>,</mo><mi id="XM1894">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1895">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>, <math id="S4.SS4.p2.m5" class="ltx_Math" alttext="\bar{\phi}_{k,j}(s)" display="inline"><mrow><msub><mover accent="true"><mi>ϕ</mi><mo stretchy="false">¯</mo></mover><mrow><mi id="XM1896">k</mi><mo>,</mo><mi id="XM1897">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1898">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>, also called Twiss parameters or lattice functions, with</p>
<table id="S5.EGx119" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.Ex34" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.Ex34.m1" class="ltx_Math" alttext="\displaystyle a_{k,2j-1}(s)" display="inline"><mrow><msub><mi>a</mi><mrow><mi id="XM1908">k</mi><mo>,</mo><mrow id="XM1909"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1910">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.Ex34.m2" class="ltx_Math" alttext="\displaystyle=\sqrt{\beta_{k,j}(s)}\cos{\phi_{k,j}(s)}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><msqrt><mrow><msub><mi>β</mi><mrow><mi id="XM1911">k</mi><mo>,</mo><mi id="XM1912">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1913">s</mi><mo stretchy="false">)</mo></mrow></mrow></msqrt><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi id="XM1914">k</mi><mo>,</mo><mi id="XM1915">j</mi></mrow></msub></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1916">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.E252" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E252.m1" class="ltx_Math" alttext="\displaystyle b_{k,2j-1}(s)" display="inline"><mrow><msub><mi>b</mi><mrow><mi id="XM1933">k</mi><mo>,</mo><mrow id="XM1934"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1935">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E252.m2" class="ltx_Math" alttext="\displaystyle=\sqrt{\beta_{k,j}(s)}\sin{\phi_{k,j}(s)},\ k,j=1,\ldots,3," display="inline"><mrow><mrow><mrow id="XM1947"><mi></mi><mo>=</mo><mrow><mrow id="XM1945"><msqrt><mrow><msub><mi>β</mi><mrow><mi id="XM1936">k</mi><mo>,</mo><mi id="XM1937">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1938">s</mi><mo stretchy="false">)</mo></mrow></mrow></msqrt><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi id="XM1939">k</mi><mo>,</mo><mi id="XM1940">j</mi></mrow></msub></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1941">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo rspace="7.5pt">,</mo><mi id="XM1946">k</mi></mrow></mrow><mo>,</mo><mrow id="XM1948"><mi>j</mi><mo>=</mo><mrow><mn id="XM1942">1</mn><mo>,</mo><mi mathvariant="normal" id="XM1943">…</mi><mo>,</mo><mn id="XM1944">3</mn></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(252)</span></td>
</tr>
<tr id="S4.Ex35" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.Ex35.m1" class="ltx_Math" alttext="\displaystyle a_{k,2j}(s)" display="inline"><mrow><msub><mi>a</mi><mrow><mi id="XM1958">k</mi><mo>,</mo><mrow id="XM1959"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1960">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.Ex35.m2" class="ltx_Math" alttext="\displaystyle=\sqrt{\gamma_{k,j}(s)}\cos{\bar{\phi}_{k,j}(s)}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><msqrt><mrow><msub><mi>γ</mi><mrow><mi id="XM1961">k</mi><mo>,</mo><mi id="XM1962">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1963">s</mi><mo stretchy="false">)</mo></mrow></mrow></msqrt><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><msub><mover accent="true"><mi>ϕ</mi><mo stretchy="false">¯</mo></mover><mrow><mi id="XM1964">k</mi><mo>,</mo><mi id="XM1965">j</mi></mrow></msub></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1966">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.E253" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E253.m1" class="ltx_Math" alttext="\displaystyle b_{k,2j}(s)" display="inline"><mrow><msub><mi>b</mi><mrow><mi id="XM1983">k</mi><mo>,</mo><mrow id="XM1984"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1985">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E253.m2" class="ltx_Math" alttext="\displaystyle=\sqrt{\gamma_{k,j}(s)}\sin{\bar{\phi}_{k,j}(s)},\ k,j=1,\ldots,3" display="inline"><mrow><mrow id="XM1997"><mi></mi><mo>=</mo><mrow><mrow id="XM1995"><msqrt><mrow><msub><mi>γ</mi><mrow><mi id="XM1986">k</mi><mo>,</mo><mi id="XM1987">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1988">s</mi><mo stretchy="false">)</mo></mrow></mrow></msqrt><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><msub><mover accent="true"><mi>ϕ</mi><mo stretchy="false">¯</mo></mover><mrow><mi id="XM1989">k</mi><mo>,</mo><mi id="XM1990">j</mi></mrow></msub></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM1991">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo rspace="7.5pt">,</mo><mi id="XM1996">k</mi></mrow></mrow><mo>,</mo><mrow id="XM1998"><mi>j</mi><mo>=</mo><mrow><mn id="XM1992">1</mn><mo>,</mo><mi mathvariant="normal" id="XM1993">…</mi><mo>,</mo><mn id="XM1994">3</mn></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(253)</span></td>
</tr>
</table>
<p class="ltx_p">where <math id="S4.SS4.p2.m6" class="ltx_Math" alttext="\beta_{k,j}(s),\alpha_{k,j}(s),\gamma_{k,j}(s)" display="inline"><mrow><mrow id="XM2008"><msub><mi>β</mi><mrow><mi id="XM1999">k</mi><mo>,</mo><mi id="XM2000">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2005">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>,</mo><mrow id="XM2009"><msub><mi>α</mi><mrow><mi id="XM2001">k</mi><mo>,</mo><mi id="XM2002">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2006">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>,</mo><mrow id="XM2010"><msub><mi>γ</mi><mrow><mi id="XM2003">k</mi><mo>,</mo><mi id="XM2004">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2007">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math> represent the projection of the ellipse of mode <math id="S4.SS4.p2.m7" class="ltx_Math" alttext="k" display="inline"><mi>k</mi></math> on the plane of coordinates <math id="S4.SS4.p2.m8" class="ltx_Math" alttext="z_{2k-1}-z_{2k}" display="inline"><mrow><msub><mi>z</mi><mrow><mrow><mn>2</mn><mo>⁢</mo><mi>k</mi></mrow><mo>-</mo><mn>1</mn></mrow></msub><mo>-</mo><msub><mi>z</mi><mrow><mn>2</mn><mo>⁢</mo><mi>k</mi></mrow></msub></mrow></math> (see Fig. <a href="#S4.F5" title="Figure 5 ‣ 4.4 Twiss parameters ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5</span></a>)</p>
</div>
<figure id="S4.F5" class="ltx_figure"><img src="ripken_phase_space_ellipse.png" id="S4.F5.g1" class="ltx_graphics ltx_centering" width="541" height="467" alt="">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure 5: </span>Projection of lattice function in the <math id="S4.F5.m2" class="ltx_Math" alttext="z-z^{\prime}" display="inline"><mrow><mi>z</mi><mo>-</mo><msup><mi>z</mi><mo>′</mo></msup></mrow></math> plane.</figcaption>
</figure>
<div id="S4.SS4.p3" class="ltx_para">
<p class="ltx_p">Using Eqns. <a href="#S4.E241" title="(241) ‣ 4.3 Conversion to normalized coordinates ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">241</span></a>, <a href="#S4.E252" title="(252) ‣ 4.4 Twiss parameters ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">252</span></a>, <a href="#S4.E253" title="(253) ‣ 4.4 Twiss parameters ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">253</span></a> and <math id="S4.SS4.p3.m1" class="ltx_Math" alttext="\cos(x+y)=\cos x\cos y-\sin x\sin y" display="inline"><mrow><mrow><mi id="XM2011">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM2012"><mi>x</mi><mo>+</mo><mi>y</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mrow><mi>cos</mi><mo>⁡</mo><mi>x</mi></mrow><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>y</mi></mrow></mrow><mo>-</mo><mrow><mrow><mi>sin</mi><mo>⁡</mo><mi>x</mi></mrow><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><mi>y</mi></mrow></mrow></mrow></mrow></math>, the coordinates <math id="S4.SS4.p3.m2" class="ltx_Math" alttext="z(s)" display="inline"><mrow><mi>z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2013">s</mi><mo stretchy="false">)</mo></mrow></mrow></math> can be expressed by:</p>
<table id="S5.EGx120" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E254" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E254.m1" class="ltx_Math" alttext="\displaystyle z_{2j-1}(s)" display="inline"><mrow><msub><mi>z</mi><mrow><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2025">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E254.m2" class="ltx_Math" alttext="\displaystyle=\sum_{k=1}^{3}\sqrt{2I_{k}\beta_{k,j}(s)}\cos{(\phi_{k,j}(s)+%
\phi_{k,0})}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>k</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msqrt><mrow><mn>2</mn><mo>⁢</mo><msub><mi>I</mi><mi>k</mi></msub><mo>⁢</mo><msub><mi>β</mi><mrow><mi id="XM2026">k</mi><mo>,</mo><mi id="XM2027">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2028">s</mi><mo stretchy="false">)</mo></mrow></mrow></msqrt><mo>⁢</mo><mrow><mi id="XM2034">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM2035"><mrow><msub><mi>ϕ</mi><mrow><mi id="XM2029">k</mi><mo>,</mo><mi id="XM2030">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2033">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><msub><mi>ϕ</mi><mrow><mi id="XM2031">k</mi><mo>,</mo><mn id="XM2032">0</mn></mrow></msub></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(254)</span></td>
</tr>
<tr id="S4.E255" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E255.m1" class="ltx_Math" alttext="\displaystyle z_{2j}(s)" display="inline"><mrow><msub><mi>z</mi><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2052">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E255.m2" class="ltx_Math" alttext="\displaystyle=\sum_{k=1}^{3}\sqrt{2I_{k}\gamma_{k,j}(s)}\cos{(\bar{\phi}_{k,j}%
(s)+\phi_{k,0})},\ j=1,\ldots,3" display="inline"><mrow><mrow id="XM2066"><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>k</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msqrt><mrow><mn>2</mn><mo>⁢</mo><msub><mi>I</mi><mi>k</mi></msub><mo>⁢</mo><msub><mi>γ</mi><mrow><mi id="XM2053">k</mi><mo>,</mo><mi id="XM2054">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2055">s</mi><mo stretchy="false">)</mo></mrow></mrow></msqrt><mo>⁢</mo><mrow><mi id="XM2061">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM2062"><mrow><msub><mover accent="true"><mi>ϕ</mi><mo stretchy="false">¯</mo></mover><mrow><mi id="XM2056">k</mi><mo>,</mo><mi id="XM2057">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2060">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><msub><mi>ϕ</mi><mrow><mi id="XM2058">k</mi><mo>,</mo><mn id="XM2059">0</mn></mrow></msub></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></mrow><mo rspace="7.5pt">,</mo><mrow id="XM2067"><mi>j</mi><mo>=</mo><mrow><mn id="XM2063">1</mn><mo>,</mo><mi mathvariant="normal" id="XM2064">…</mi><mo>,</mo><mn id="XM2065">3</mn></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(255)</span></td>
</tr>
</table>
<p class="ltx_p">Conversely the lattice functions can also be expressed by <math id="S4.SS4.p3.m3" class="ltx_Math" alttext="a_{k}" display="inline"><msub><mi>a</mi><mi>k</mi></msub></math> and <math id="S4.SS4.p3.m4" class="ltx_Math" alttext="b_{k}" display="inline"><msub><mi>b</mi><mi>k</mi></msub></math> with</p>
<table id="S5.EGx121" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E256" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E256.m1" class="ltx_Math" alttext="\displaystyle\beta_{k,j}(s)" display="inline"><mrow><msub><mi>β</mi><mrow><mi id="XM2077">k</mi><mo>,</mo><mi id="XM2078">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2079">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E256.m2" class="ltx_Math" alttext="\displaystyle=a_{k,2j-1}(s)^{2}+b_{k,2j-1}(s)^{2}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><msub><mi>a</mi><mrow><mi id="XM2080">k</mi><mo>,</mo><mrow id="XM2081"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mi id="XM2084">s</mi><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow><mo>+</mo><mrow><msub><mi>b</mi><mrow><mi id="XM2082">k</mi><mo>,</mo><mrow id="XM2083"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mi id="XM2085">s</mi><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(256)</span></td>
</tr>
<tr id="S4.E257" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E257.m1" class="ltx_Math" alttext="\displaystyle\alpha_{k,j}(s)" display="inline"><mrow><msub><mi>α</mi><mrow><mi id="XM2101">k</mi><mo>,</mo><mi id="XM2102">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2103">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E257.m2" class="ltx_Math" alttext="\displaystyle=a_{k,2j-1}(s)a_{k,2j}(s)-b_{k,2j-1}(s)b_{k,2j}(s)" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mrow><msub><mi>a</mi><mrow><mi id="XM2104">k</mi><mo>,</mo><mrow id="XM2105"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2112">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msub><mi>a</mi><mrow><mi id="XM2106">k</mi><mo>,</mo><mrow id="XM2107"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2113">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>-</mo><mrow><msub><mi>b</mi><mrow><mi id="XM2108">k</mi><mo>,</mo><mrow id="XM2109"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2114">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msub><mi>b</mi><mrow><mi id="XM2110">k</mi><mo>,</mo><mrow id="XM2111"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2115">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(257)</span></td>
</tr>
<tr id="S4.E258" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E258.m1" class="ltx_Math" alttext="\displaystyle\gamma_{k,j}(s)" display="inline"><mrow><msub><mi>γ</mi><mrow><mi id="XM2125">k</mi><mo>,</mo><mi id="XM2126">j</mi></mrow></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2127">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E258.m2" class="ltx_Math" alttext="\displaystyle=a_{k,2j}(s)^{2}+b_{k,2j}(s)^{2}," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mrow><msub><mi>a</mi><mrow><mi id="XM2128">k</mi><mo>,</mo><mrow id="XM2129"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mi id="XM2132">s</mi><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow><mo>+</mo><mrow><msub><mi>b</mi><mrow><mi id="XM2130">k</mi><mo>,</mo><mrow id="XM2131"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mi id="XM2133">s</mi><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow></mrow></mrow><mo>,</mo></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(258)</span></td>
</tr>
</table>
<p class="ltx_p">The well known relations between the lattice functions</p>
<table id="S5.EGx122" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E259" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E259.m1" class="ltx_Math" alttext="\displaystyle\sum_{j=1}^{3}\beta_{k,j}\phi_{k,j}^{\prime}" display="inline"><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>j</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msub><mi>β</mi><mrow><mi id="XM2138">k</mi><mo>,</mo><mi id="XM2139">j</mi></mrow></msub><mo>⁢</mo><msubsup><mi>ϕ</mi><mrow><mi id="XM2140">k</mi><mo>,</mo><mi id="XM2141">j</mi></mrow><mo>′</mo></msubsup></mrow></mrow></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E259.m2" class="ltx_Math" alttext="\displaystyle=1" display="inline"><mrow><mi></mi><mo>=</mo><mn>1</mn></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(259)</span></td>
</tr>
<tr id="S4.E260" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E260.m1" class="ltx_Math" alttext="\displaystyle\gamma_{k,j}" display="inline"><msub><mi>γ</mi><mrow><mi id="XM2156">k</mi><mo>,</mo><mi id="XM2157">j</mi></mrow></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E260.m2" class="ltx_Math" alttext="\displaystyle=\frac{\beta_{k,j}^{2}\phi_{k,j}^{\prime 2}+\alpha_{k,j}^{2}}{%
\beta_{k,j}},\text{ with }" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true" id="XM2168"><mfrac id="XM2168a"><mrow><mrow><msubsup><mi>β</mi><mrow><mi id="XM2158">k</mi><mo>,</mo><mi id="XM2159">j</mi></mrow><mn>2</mn></msubsup><mo>⁢</mo><msubsup><mi>ϕ</mi><mrow><mi id="XM2160">k</mi><mo>,</mo><mi id="XM2161">j</mi></mrow><mrow><mi mathvariant="normal" id="XM2162">′</mi><mo>⁣</mo><mn id="XM2163">2</mn></mrow></msubsup></mrow><mo>+</mo><msubsup><mi>α</mi><mrow><mi id="XM2164">k</mi><mo>,</mo><mi id="XM2165">j</mi></mrow><mn>2</mn></msubsup></mrow><msub><mi>β</mi><mrow><mi id="XM2166">k</mi><mo>,</mo><mi id="XM2167">j</mi></mrow></msub></mfrac></mstyle><mo>,</mo><mtext id="XM2169"> with</mtext></mrow></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(260)</span></td>
</tr>
<tr id="S4.E261" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E261.m1" class="ltx_Math" alttext="\displaystyle\alpha_{k,j}" display="inline"><msub><mi>α</mi><mrow><mi id="XM2174">k</mi><mo>,</mo><mi id="XM2175">j</mi></mrow></msub></math>
                </td>
<td class="ltx_td ltx_align_left">
                  <math id="S4.E261.m2" class="ltx_Math" alttext="\displaystyle:=-\frac{1}{2}\beta_{k,j}^{\prime}" display="inline"><mrow><mo id="XM2178">:</mo><mo id="XM2179">=</mo><mo id="XM2180">-</mo><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle><msubsup><mi>β</mi><mrow><mi id="XM2176">k</mi><mo>,</mo><mi id="XM2177">j</mi></mrow><mo>′</mo></msubsup></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(261)</span></td>
</tr>
</table>
<p class="ltx_p">can then be derived with the help of the normalization condition (Eqn. <a href="#S4.Ex22" title="3. ‣ 4.2 Normalisation of eigenvectors ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a>)</p>
<table id="S5.EGx123" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E262" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                  <math id="S4.E262.m1" class="ltx_Math" alttext="\displaystyle a_{k}^{T}Sb_{k}=1" display="inline"><mrow><mrow><msubsup><mi>a</mi><mi>k</mi><mi>T</mi></msubsup><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>b</mi><mi>k</mi></msub></mrow><mo>=</mo><mn>1</mn></mrow></math>
                </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(262)</span></td>
</tr>
</table>
<p class="ltx_p">by the following steps:</p>
<ol id="I5" class="ltx_enumerate">
<li id="I5.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="I5.i1.p1" class="ltx_para">
<p class="ltx_p">As <math id="I5.i1.p1.m1" class="ltx_Math" alttext="x^{\prime}=\frac{dx}{ds},\ y^{\prime}=\frac{dy}{ds}" display="inline"><mrow><mrow id="XM2181"><msup><mi>x</mi><mo>′</mo></msup><mo>=</mo><mfrac><mrow><mi>d</mi><mo>⁢</mo><mi>x</mi></mrow><mrow><mi>d</mi><mo>⁢</mo><mi>s</mi></mrow></mfrac></mrow><mo rspace="7.5pt">,</mo><mrow id="XM2182"><msup><mi>y</mi><mo>′</mo></msup><mo>=</mo><mfrac><mrow><mi>d</mi><mo>⁢</mo><mi>y</mi></mrow><mrow><mi>d</mi><mo>⁢</mo><mi>s</mi></mrow></mfrac></mrow></mrow></math> and <math id="I5.i1.p1.m2" class="ltx_Math" alttext="\delta=\frac{d\sigma}{ds}" display="inline"><mrow><mi>δ</mi><mo>=</mo><mfrac><mrow><mi>d</mi><mo>⁢</mo><mi>σ</mi></mrow><mrow><mi>d</mi><mo>⁢</mo><mi>s</mi></mrow></mfrac></mrow></math> the following relations hold also for <math id="I5.i1.p1.m3" class="ltx_Math" alttext="a_{k}" display="inline"><msub><mi>a</mi><mi>k</mi></msub></math> and <math id="I5.i1.p1.m4" class="ltx_Math" alttext="b_{k}" display="inline"><msub><mi>b</mi><mi>k</mi></msub></math>:</p>
<table id="S5.EGx124" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E263" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E263.m1" class="ltx_Math" alttext="\displaystyle a_{k,2j}=a_{k,2j-1}^{\prime}" display="inline"><mrow><msub><mi>a</mi><mrow><mi id="XM2190">k</mi><mo>,</mo><mrow id="XM2191"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>=</mo><msubsup><mi>a</mi><mrow><mi id="XM2192">k</mi><mo>,</mo><mrow id="XM2193"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow><mo>′</mo></msubsup></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E263.m2" class="ltx_Math" alttext="\displaystyle=\frac{d}{ds}(a_{k,2j-1})," display="inline"><mrow><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mi>d</mi><mrow><mi>d</mi><mo>⁢</mo><mi>s</mi></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM2196"><mi>a</mi><mrow><mi id="XM2194">k</mi><mo>,</mo><mrow id="XM2195"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>,</mo></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(263)</span></td>
</tr>
<tr id="S4.E264" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E264.m1" class="ltx_Math" alttext="\displaystyle b_{k,2j}=b_{k,2j-1}^{\prime}" display="inline"><mrow><msub><mi>b</mi><mrow><mi id="XM2211">k</mi><mo>,</mo><mrow id="XM2212"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>=</mo><msubsup><mi>b</mi><mrow><mi id="XM2213">k</mi><mo>,</mo><mrow id="XM2214"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow><mo>′</mo></msubsup></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E264.m2" class="ltx_Math" alttext="\displaystyle=\frac{d}{ds}(b_{k,2j-1}),\ k,j=1,\ldots,3" display="inline"><mrow><mrow id="XM2223"><mi></mi><mo>=</mo><mrow><mrow id="XM2221"><mstyle displaystyle="true"><mfrac><mi>d</mi><mrow><mi>d</mi><mo>⁢</mo><mi>s</mi></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mo stretchy="false">(</mo><msub id="XM2217"><mi>b</mi><mrow><mi id="XM2215">k</mi><mo>,</mo><mrow id="XM2216"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow></msub><mo stretchy="false">)</mo></mrow></mrow><mo rspace="7.5pt">,</mo><mi id="XM2222">k</mi></mrow></mrow><mo>,</mo><mrow id="XM2224"><mi>j</mi><mo>=</mo><mrow><mn id="XM2218">1</mn><mo>,</mo><mi mathvariant="normal" id="XM2219">…</mi><mo>,</mo><mn id="XM2220">3</mn></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(264)</span></td>
</tr>
</table>
</div>
</li>
<li id="I5.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="I5.i2.p1" class="ltx_para">
<p class="ltx_p">The normalization condition Eqn. <a href="#S4.Ex22" title="3. ‣ 4.2 Normalisation of eigenvectors ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a> can then be written as</p>
<table id="S5.EGx125" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.Ex36" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex36.m1" class="ltx_Math" alttext="\displaystyle a_{k}^{T}Sb_{k}" display="inline"><mrow><msubsup><mi>a</mi><mi>k</mi><mi>T</mi></msubsup><mo>⁢</mo><mi>S</mi><mo>⁢</mo><msub><mi>b</mi><mi>k</mi></msub></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex36.m2" class="ltx_Math" alttext="\displaystyle=\sum_{j=1}^{3}\sqrt{\beta_{k,j}}\cos{\phi_{k,j}}\left(\sqrt{%
\beta_{k,j}}\sin{\phi_{k,j}}\right)^{\prime}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>j</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msqrt><msub><mi>β</mi><mrow><mi id="XM2234">k</mi><mo>,</mo><mi id="XM2235">j</mi></mrow></msub></msqrt><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi id="XM2236">k</mi><mo>,</mo><mi id="XM2237">j</mi></mrow></msub></mrow><mo>⁢</mo><msup><mrow><mo>(</mo><mrow id="XM2242"><msqrt><msub><mi>β</mi><mrow><mi id="XM2238">k</mi><mo>,</mo><mi id="XM2239">j</mi></mrow></msub></msqrt><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi id="XM2240">k</mi><mo>,</mo><mi id="XM2241">j</mi></mrow></msub></mrow></mrow><mo>)</mo></mrow><mo>′</mo></msup></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.Ex37" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex37.m2" class="ltx_Math" alttext="\displaystyle\qquad-\left(\sqrt{\beta_{k,j}}\cos{\phi_{k,j}}\right)^{\prime}%
\sqrt{\beta_{k,j}}\sin{\phi_{k,j}}" display="inline"><mrow><mi>  </mi><mo>-</mo><mrow><msup><mrow><mo>(</mo><mrow id="XM2260"><msqrt><msub><mi>β</mi><mrow><mi id="XM2252">k</mi><mo>,</mo><mi id="XM2253">j</mi></mrow></msub></msqrt><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi id="XM2254">k</mi><mo>,</mo><mi id="XM2255">j</mi></mrow></msub></mrow></mrow><mo>)</mo></mrow><mo>′</mo></msup><mo>⁢</mo><msqrt><msub><mi>β</mi><mrow><mi id="XM2256">k</mi><mo>,</mo><mi id="XM2257">j</mi></mrow></msub></msqrt><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi id="XM2258">k</mi><mo>,</mo><mi id="XM2259">j</mi></mrow></msub></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.Ex38" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex38.m2" class="ltx_Math" alttext="\displaystyle=\sum_{j=1}^{3}\beta_{k,j}\phi_{k,j}^{\prime}" display="inline"><mrow><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true"><munderover><mo largeop="true" movablelimits="false" symmetric="true">∑</mo><mrow><mi>j</mi><mo>=</mo><mn>1</mn></mrow><mn>3</mn></munderover></mstyle><mrow><msub><mi>β</mi><mrow><mi id="XM2265">k</mi><mo>,</mo><mi id="XM2266">j</mi></mrow></msub><mo>⁢</mo><msubsup><mi>ϕ</mi><mrow><mi id="XM2267">k</mi><mo>,</mo><mi id="XM2268">j</mi></mrow><mo>′</mo></msubsup></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.E265" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E265.m2" class="ltx_Math" alttext="\displaystyle=1" display="inline"><mrow><mi></mi><mo>=</mo><mn>1</mn></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(265)</span></td>
</tr>
</table>
<p class="ltx_p">Note that Eqn. <a href="#S4.E265" title="(265) ‣ 2. ‣ 4.4 Twiss parameters ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">265</span></a> yields the the following relation between the phase advance <math id="I5.i2.p1.m1" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math> and <math id="I5.i2.p1.m2" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math> in 2D:</p>
<table id="S5.EGx126" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E266" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E266.m1" class="ltx_Math" alttext="\displaystyle\phi(s)=\phi(0)+\int_{s_{0}}^{s}\frac{1}{\beta(\bar{s})}d\bar{s}" display="inline"><mrow><mrow><mi>ϕ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2273">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mi>ϕ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM2274">0</mn><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><mstyle displaystyle="true"><msubsup><mo largeop="true" symmetric="true">∫</mo><msub><mi>s</mi><mn>0</mn></msub><mi>s</mi></msubsup></mstyle><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><mrow><mi>β</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mover accent="true" id="XM2272"><mi>s</mi><mo stretchy="false">¯</mo></mover><mo stretchy="false">)</mo></mrow></mrow></mfrac></mstyle><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mover accent="true"><mi>s</mi><mo stretchy="false">¯</mo></mover></mrow></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(266)</span></td>
</tr>
</table>
</div>
</li>
<li id="I5.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="I5.i3.p1" class="ltx_para">
<p class="ltx_p">Using the abbreviation <math id="I5.i3.p1.m1" class="ltx_Math" alttext="\alpha_{k,j}:=-\frac{1}{2}\beta_{k,j}" display="inline"><mrow><msub><mi>α</mi><mrow><mi id="XM2275">k</mi><mo>,</mo><mi id="XM2276">j</mi></mrow></msub><mo>:=</mo><mrow><mo>-</mo><mrow><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>⁢</mo><msub><mi>β</mi><mrow><mi id="XM2277">k</mi><mo>,</mo><mi id="XM2278">j</mi></mrow></msub></mrow></mrow></mrow></math>, one finds for each mode <math id="I5.i3.p1.m2" class="ltx_Math" alttext="k" display="inline"><mi>k</mi></math> and plane <math id="I5.i3.p1.m3" class="ltx_Math" alttext="j" display="inline"><mi>j</mi></math></p>
<table id="S5.EGx127" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.Ex39" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex39.m1" class="ltx_Math" alttext="\displaystyle\sqrt{\gamma_{k,j}}\cos{\phi_{k,j}}" display="inline"><mrow><msqrt><msub><mi>γ</mi><mrow><mi id="XM2292">k</mi><mo>,</mo><mi id="XM2293">j</mi></mrow></msub></msqrt><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi id="XM2294">k</mi><mo>,</mo><mi id="XM2295">j</mi></mrow></msub></mrow></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex39.m2" class="ltx_Math" alttext="\displaystyle=a_{k,2j}=a_{k,2j-1}^{\prime}=(\sqrt{\beta_{k,j}}\cos{\phi_{k,j}}%
)^{\prime}" display="inline"><mrow><mi></mi><mo>=</mo><msub><mi>a</mi><mrow><mi id="XM2296">k</mi><mo>,</mo><mrow id="XM2297"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>=</mo><msubsup><mi>a</mi><mrow><mi id="XM2298">k</mi><mo>,</mo><mrow id="XM2299"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow><mo>′</mo></msubsup><mo>=</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM2304"><msqrt><msub><mi>β</mi><mrow><mi id="XM2300">k</mi><mo>,</mo><mi id="XM2301">j</mi></mrow></msub></msqrt><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi id="XM2302">k</mi><mo>,</mo><mi id="XM2303">j</mi></mrow></msub></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>′</mo></msup></mrow></math>
                      </td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex39.m3" class="ltx_Math" alttext="\displaystyle\quad(1)" display="inline"><mrow><mi mathvariant="normal"> </mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM2306">1</mn><mo stretchy="false">)</mo></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.Ex40" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex40.m1" class="ltx_Math" alttext="\displaystyle\sqrt{\gamma_{k,j}}\sin{\phi_{k,j}}" display="inline"><mrow><msqrt><msub><mi>γ</mi><mrow><mi id="XM2320">k</mi><mo>,</mo><mi id="XM2321">j</mi></mrow></msub></msqrt><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi id="XM2322">k</mi><mo>,</mo><mi id="XM2323">j</mi></mrow></msub></mrow></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.Ex40.m2" class="ltx_Math" alttext="\displaystyle=b_{k,2j}=b_{k,2j-1}^{\prime}=(\sqrt{\beta_{k,j}}\sin{\phi_{k,j}}%
)^{\prime}" display="inline"><mrow><mi></mi><mo>=</mo><msub><mi>b</mi><mrow><mi id="XM2324">k</mi><mo>,</mo><mrow id="XM2325"><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow></mrow></msub><mo>=</mo><msubsup><mi>b</mi><mrow><mi id="XM2326">k</mi><mo>,</mo><mrow id="XM2327"><mrow><mn>2</mn><mo>⁢</mo><mi>j</mi></mrow><mo>-</mo><mn>1</mn></mrow></mrow><mo>′</mo></msubsup><mo>=</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM2332"><msqrt><msub><mi>β</mi><mrow><mi id="XM2328">k</mi><mo>,</mo><mi id="XM2329">j</mi></mrow></msub></msqrt><mo>⁢</mo><mrow><mi>sin</mi><mo>⁡</mo><msub><mi>ϕ</mi><mrow><mi id="XM2330">k</mi><mo>,</mo><mi id="XM2331">j</mi></mrow></msub></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>′</mo></msup></mrow></math>
                      </td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.Ex40.m3" class="ltx_Math" alttext="\displaystyle\quad(2)" display="inline"><mrow><mi mathvariant="normal"> </mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM2334">2</mn><mo stretchy="false">)</mo></mrow></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="S4.E267" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E267.m1" class="ltx_Math" alttext="\displaystyle\overset{(1)^{2}+(2)^{2}}{\Rightarrow}\gamma_{k,j}" display="inline"><mrow><mover accent="true"><mo>⇒</mo><mrow><msup><mrow><mo stretchy="false">(</mo><mn id="XM2356">1</mn><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>+</mo><msup><mrow><mo stretchy="false">(</mo><mn id="XM2357">2</mn><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow></mover><mo>⁢</mo><msub><mi>γ</mi><mrow><mi id="XM2358">k</mi><mo>,</mo><mi id="XM2359">j</mi></mrow></msub></mrow></math>
                      </td>
<td class="ltx_td ltx_align_left">
                        <math id="S4.E267.m2" class="ltx_Math" alttext="\displaystyle=\frac{\beta_{k,j}^{2}\phi_{k,j}^{\prime 2}+\alpha_{k,j}^{2}}{%
\beta_{k,j}},\quad k,j=1,\ldots,3" display="inline"><mrow><mrow id="XM2375"><mi></mi><mo>=</mo><mrow><mstyle displaystyle="true" id="XM2373"><mfrac id="XM2373a"><mrow><mrow><msubsup><mi>β</mi><mrow><mi id="XM2360">k</mi><mo>,</mo><mi id="XM2361">j</mi></mrow><mn>2</mn></msubsup><mo>⁢</mo><msubsup><mi>ϕ</mi><mrow><mi id="XM2362">k</mi><mo>,</mo><mi id="XM2363">j</mi></mrow><mrow><mi mathvariant="normal" id="XM2364">′</mi><mo>⁣</mo><mn id="XM2365">2</mn></mrow></msubsup></mrow><mo>+</mo><msubsup><mi>α</mi><mrow><mi id="XM2366">k</mi><mo>,</mo><mi id="XM2367">j</mi></mrow><mn>2</mn></msubsup></mrow><msub><mi>β</mi><mrow><mi id="XM2368">k</mi><mo>,</mo><mi id="XM2369">j</mi></mrow></msub></mfrac></mstyle><mo rspace="12.5pt">,</mo><mi id="XM2374">k</mi></mrow></mrow><mo>,</mo><mrow id="XM2376"><mi>j</mi><mo>=</mo><mrow><mn id="XM2370">1</mn><mo>,</mo><mi mathvariant="normal" id="XM2371">…</mi><mo>,</mo><mn id="XM2372">3</mn></mrow></mrow></mrow></math>
                      </td>
<td class="ltx_td ltx_align_right"></td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(267)</span></td>
</tr>
</table>
<p class="ltx_p">which simplifies in the 2D case to:</p>
<table id="S5.EGx128" class="ltx_equationgroup ltx_eqn_align">
<tr id="S4.E268" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                        <math id="S4.E268.m1" class="ltx_Math" alttext="\displaystyle\gamma\overset{\rm Eqn.\leavevmode\nobreak\ \ref{opt:eqn:4:3}}{=}%
\frac{1+\alpha^{2}}{\beta}" display="inline"><mrow><mi>γ</mi><mo>⁢</mo><mover accent="true"><mo>=</mo><mrow><mi id="XM2379">Eqn</mi><mo rspace="7.5pt">.</mo><mtext id="XM2380"><a href="#S4.E265" title="(265) ‣ 2. ‣ 4.4 Twiss parameters ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">265</span></a></mtext></mrow></mover><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mn>1</mn><mo>+</mo><msup><mi>α</mi><mn>2</mn></msup></mrow><mi>β</mi></mfrac></mstyle></mrow></math>
                      </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(268)</span></td>
</tr>
</table>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="S5" class="ltx_section">
<h2 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">5 </span>Table of symbols</h2>
<div id="S5.p1" class="ltx_para">
<dl id="I6" class="ltx_description">
<dt id="I6.i1" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i1.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i1.p1.m1" class="ltx_Math" alttext="\vec{R}" display="inline"><mover accent="true"><mi>R</mi><mo stretchy="false">→</mo></mover></math>: moving reference frame origin</p>
</div>
</dd>
<dt id="I6.i2" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i2.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i2.p1.m1" class="ltx_Math" alttext="s" display="inline"><mi>s</mi></math>: path length of the reference frame origin trajectory</p>
</div>
</dd>
<dt id="I6.i3" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i3.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i3.p1.m1" class="ltx_Math" alttext="\hat{X},\hat{Y},\hat{Z}" display="inline"><mrow><mover accent="true" id="XM2381"><mi>X</mi><mo stretchy="false">^</mo></mover><mo>,</mo><mover accent="true" id="XM2382"><mi>Y</mi><mo stretchy="false">^</mo></mover><mo>,</mo><mover accent="true" id="XM2383"><mi>Z</mi><mo stretchy="false">^</mo></mover></mrow></math>: global reference frame bases</p>
</div>
</dd>
<dt id="I6.i4" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i4.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i4.p1.m1" class="ltx_Math" alttext="X,Y,Z" display="inline"><mrow><mi id="XM2384">X</mi><mo>,</mo><mi id="XM2385">Y</mi><mo>,</mo><mi id="XM2386">Z</mi></mrow></math>: reference frame origin coordinates <math id="I6.i4.p1.m2" class="ltx_Math" alttext="\vec{R}(s)=X(s)\hat{X}+Y(s)\hat{Y}+Z(s)\hat{Z}" display="inline"><mrow><mrow><mover accent="true"><mi>R</mi><mo stretchy="false">→</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2387">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mi>X</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2388">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>X</mi><mo stretchy="false">^</mo></mover></mrow><mo>+</mo><mrow><mi>Y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2389">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>Y</mi><mo stretchy="false">^</mo></mover></mrow><mo>+</mo><mrow><mi>Z</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2390">s</mi><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>Z</mi><mo stretchy="false">^</mo></mover></mrow></mrow></mrow></math></p>
</div>
</dd>
<dt id="I6.i5" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i5.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i5.p1.m1" class="ltx_Math" alttext="\vec{Q}" display="inline"><mover accent="true"><mi>Q</mi><mo stretchy="false">→</mo></mover></math>: particle position</p>
</div>
</dd>
<dt id="I6.i6" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i6.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i6.p1.m1" class="ltx_Math" alttext="\hat{x},\hat{y},\hat{s}" display="inline"><mrow><mover accent="true" id="XM2391"><mi>x</mi><mo stretchy="false">^</mo></mover><mo>,</mo><mover accent="true" id="XM2392"><mi>y</mi><mo stretchy="false">^</mo></mover><mo>,</mo><mover accent="true" id="XM2393"><mi>s</mi><mo stretchy="false">^</mo></mover></mrow></math>: moving reference frame bases</p>
</div>
</dd>
<dt id="I6.i7" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i7.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i7.p1.m1" class="ltx_Math" alttext="x,y" display="inline"><mrow><mi id="XM2394">x</mi><mo>,</mo><mi id="XM2395">y</mi></mrow></math>: transverse particle coordinates <math id="I6.i7.p1.m2" class="ltx_Math" alttext="\vec{Q}(s)=\vec{R}(s)+x(s)\,\hat{x}(s)+y(s)\,\hat{y}(s)" display="inline"><mrow><mrow><mover accent="true"><mi>Q</mi><mo stretchy="false">→</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2396">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mover accent="true"><mi>R</mi><mo stretchy="false">→</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2397">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2398">s</mi><mo rspace="4.2pt" stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>x</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2399">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>+</mo><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2400">s</mi><mo rspace="4.2pt" stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>y</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2401">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math></p>
</div>
</dd>
<dt id="I6.i8" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i8.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i8.p1.m1" class="ltx_Math" alttext="t(s)" display="inline"><mrow><mi>t</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2402">s</mi><mo stretchy="false">)</mo></mrow></mrow></math>: time at which the particle is located in the plane <math id="I6.i8.p1.m2" class="ltx_Math" alttext="\hat{x}(s),\hat{y}(s)" display="inline"><mrow><mrow id="XM2405"><mover accent="true"><mi>x</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2403">s</mi><mo stretchy="false">)</mo></mrow></mrow><mo>,</mo><mrow id="XM2406"><mover accent="true"><mi>y</mi><mo stretchy="false">^</mo></mover><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM2404">s</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math></p>
</div>
</dd>
<dt id="I6.i9" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i9.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i9.p1.m1" class="ltx_Math" alttext="v,P,E,m,q" display="inline"><mrow><mi id="XM2407">v</mi><mo>,</mo><mi id="XM2408">P</mi><mo>,</mo><mi id="XM2409">E</mi><mo>,</mo><mi id="XM2410">m</mi><mo>,</mo><mi id="XM2411">q</mi></mrow></math>: particle velocity momenta, energy, rest mass, charge</p>
</div>
</dd>
<dt id="I6.i10" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i10.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i10.p1.m1" class="ltx_Math" alttext="v_{0},P_{0},E_{0},m_{0},q_{0}" display="inline"><mrow><msub id="XM2412"><mi>v</mi><mn>0</mn></msub><mo>,</mo><msub id="XM2413"><mi>P</mi><mn>0</mn></msub><mo>,</mo><msub id="XM2414"><mi>E</mi><mn>0</mn></msub><mo>,</mo><msub id="XM2415"><mi>m</mi><mn>0</mn></msub><mo>,</mo><msub id="XM2416"><mi>q</mi><mn>0</mn></msub></mrow></math>: reference momentum, energy, rest mass,</p>
</div>
</dd>
<dt id="I6.i11" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i11.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i11.p1.m1" class="ltx_Math" alttext="\beta_{0},\gamma_{0}" display="inline"><mrow><msub id="XM2417"><mi>β</mi><mn>0</mn></msub><mo>,</mo><msub id="XM2418"><mi>γ</mi><mn>0</mn></msub></mrow></math>: reference relativistic factors
</p>
</div>
</dd>
<dt id="I6.i12" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i12.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i12.p1.m1" class="ltx_Math" alttext="\Delta t=s/\beta_{0}-ct" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>t</mi></mrow><mo>=</mo><mrow><mrow><mi>s</mi><mo>/</mo><msub><mi>β</mi><mn>0</mn></msub></mrow><mo>-</mo><mrow><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></mrow></mrow></math>: Mad time deviation, canonical conjugate of <math id="I6.i12.p1.m2" class="ltx_Math" alttext="p_{t}" display="inline"><msub><mi>p</mi><mi>t</mi></msub></math></p>
</div>
</dd>
<dt id="I6.i13" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i13.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i13.p1.m1" class="ltx_Math" alttext="\sigma=s-\beta_{0}ct" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></mrow></mrow></math>: Sixtrack time deviation, canonical conjugate of <math id="I6.i13.p1.m2" class="ltx_Math" alttext="p_{\sigma}" display="inline"><msub><mi>p</mi><mi>σ</mi></msub></math></p>
</div>
</dd>
<dt id="I6.i14" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i14.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i14.p1.m1" class="ltx_Math" alttext="\Delta s=s-\beta ct" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>s</mi></mrow><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><mi>β</mi><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></mrow></mrow></math> path length deviation, canonical conjugate of <math id="I6.i14.p1.m2" class="ltx_Math" alttext="\delta" display="inline"><mi>δ</mi></math></p>
</div>
</dd>
<dt id="I6.i15" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i15.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i15.p1.m1" class="ltx_Math" alttext="z=\beta(s/\beta_{0}-ct)" display="inline"><mrow><mi>z</mi><mo>=</mo><mrow><mi>β</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM2419"><mrow><mi>s</mi><mo>/</mo><msub><mi>β</mi><mn>0</mn></msub></mrow><mo>-</mo><mrow><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math> John time deviation, canonical conjugate of <math id="I6.i15.p1.m2" class="ltx_Math" alttext="\delta" display="inline"><mi>δ</mi></math></p>
</div>
</dd>
<dt id="I6.i16" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i16.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i16.p1.m1" class="ltx_Math" alttext="\rho=1/h" display="inline"><mrow><mi>ρ</mi><mo>=</mo><mrow><mn>1</mn><mo>/</mo><mi>h</mi></mrow></mrow></math> Radius of curvature for a moving reference frame in a circular trajectory.</p>
</div>
</dd>
<dt id="I6.i17" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i17.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i17.p1.m1" class="ltx_Math" alttext="P_{x},P_{y},P_{s}" display="inline"><mrow><msub id="XM2420"><mi>P</mi><mi>x</mi></msub><mo>,</mo><msub id="XM2421"><mi>P</mi><mi>y</mi></msub><mo>,</mo><msub id="XM2422"><mi>P</mi><mi>s</mi></msub></mrow></math>: canonical momenta coordinates in a straight or curved reference frame. Note that for a circular trajectory: <math id="I6.i17.p1.m2" class="ltx_Math" alttext="v_{s}=(1+hx)\dot{s}" display="inline"><mrow><msub><mi>v</mi><mi>s</mi></msub><mo>=</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM2423"><mn>1</mn><mo>+</mo><mrow><mi>h</mi><mo>⁢</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mover accent="true"><mi>s</mi><mo>˙</mo></mover></mrow></mrow></math>, <math id="I6.i17.p1.m3" class="ltx_Math" alttext="P_{x}=m\gamma\dot{x}+qA_{x}" display="inline"><mrow><msub><mi>P</mi><mi>x</mi></msub><mo>=</mo><mrow><mrow><mi>m</mi><mo>⁢</mo><mi>γ</mi><mo>⁢</mo><mover accent="true"><mi>x</mi><mo>˙</mo></mover></mrow><mo>+</mo><mrow><mi>q</mi><mo>⁢</mo><msub><mi>A</mi><mi>x</mi></msub></mrow></mrow></mrow></math>, <math id="I6.i17.p1.m4" class="ltx_Math" alttext="P_{y}=m\gamma\dot{y}qA_{y}" display="inline"><mrow><msub><mi>P</mi><mi>y</mi></msub><mo>=</mo><mrow><mi>m</mi><mo>⁢</mo><mi>γ</mi><mo>⁢</mo><mover accent="true"><mi>y</mi><mo>˙</mo></mover><mo>⁢</mo><mi>q</mi><mo>⁢</mo><msub><mi>A</mi><mi>y</mi></msub></mrow></mrow></math> and
<math id="I6.i17.p1.m5" class="ltx_Math" alttext="P_{s}=m\gamma\dot{s}(1+hx)^{2}+q(1+hx)A_{s}" display="inline"><mrow><msub><mi>P</mi><mi>s</mi></msub><mo>=</mo><mrow><mrow><mi>m</mi><mo>⁢</mo><mi>γ</mi><mo>⁢</mo><mover accent="true"><mi>s</mi><mo>˙</mo></mover><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM2424"><mn>1</mn><mo>+</mo><mrow><mi>h</mi><mo>⁢</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mrow><mo>+</mo><mrow><mi>q</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM2425"><mn>1</mn><mo>+</mo><mrow><mi>h</mi><mo>⁢</mo><mi>x</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><msub><mi>A</mi><mi>s</mi></msub></mrow></mrow></mrow></math>.</p>
</div>
</dd>
<dt id="I6.i18" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i18.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i18.p1.m1" class="ltx_Math" alttext="p_{x}=P_{x}/P_{0},p_{y}=P_{x}/P_{0},p_{s}=P_{s}/P_{0}" display="inline"><mrow><mrow id="XM2428"><msub><mi>p</mi><mi>x</mi></msub><mo>=</mo><mrow><msub><mi>P</mi><mi>x</mi></msub><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow></mrow><mo>,</mo><mrow><mrow id="XM2426"><msub><mi>p</mi><mi>y</mi></msub><mo>=</mo><mrow><msub><mi>P</mi><mi>x</mi></msub><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow></mrow><mo>,</mo><mrow id="XM2427"><msub><mi>p</mi><mi>s</mi></msub><mo>=</mo><mrow><msub><mi>P</mi><mi>s</mi></msub><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow></mrow></mrow></mrow></math> normalized momenta coordinates</p>
</div>
</dd>
<dt id="I6.i19" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i19.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i19.p1.m1" class="ltx_Math" alttext="x^{\prime}=P_{x}/P_{s},y^{\prime}=P_{x}/P_{s}" display="inline"><mrow><mrow id="XM2430"><msup><mi>x</mi><mo>′</mo></msup><mo>=</mo><mrow><msub><mi>P</mi><mi>x</mi></msub><mo>/</mo><msub><mi>P</mi><mi>s</mi></msub></mrow></mrow><mo>,</mo><mrow id="XM2431"><msup><mi>y</mi><mo>′</mo></msup><mo>=</mo><mrow><msub><mi>P</mi><mi>x</mi></msub><mo>/</mo><msub><mi>P</mi><mi>s</mi></msub></mrow></mrow></mrow></math> transverse divergence coordinates</p>
</div>
</dd>
<dt id="I6.i20" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i20.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i20.p1.m1" class="ltx_Math" alttext="x_{p}=P_{x}/P,y_{p}=P_{y}/P" display="inline"><mrow><mrow id="XM2432"><msub><mi>x</mi><mi>p</mi></msub><mo>=</mo><mrow><msub><mi>P</mi><mi>x</mi></msub><mo>/</mo><mi>P</mi></mrow></mrow><mo>,</mo><mrow id="XM2433"><msub><mi>y</mi><mi>p</mi></msub><mo>=</mo><mrow><msub><mi>P</mi><mi>y</mi></msub><mo>/</mo><mi>P</mi></mrow></mrow></mrow></math> approximated divergence coordinates</p>
</div>
</dd>
<dt id="I6.i21" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i21.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i21.p1.m1" class="ltx_Math" alttext="\delta=(P-P_{0})/P_{0}" display="inline"><mrow><mi>δ</mi><mo>=</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM2434"><mi>P</mi><mo>-</mo><msub><mi>P</mi><mn>0</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow></mrow></math>: normalized momentum deviation</p>
</div>
</dd>
<dt id="I6.i22" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i22.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i22.p1.m1" class="ltx_Math" alttext="p_{t}=(E-E_{0})/P_{0}c" display="inline"><mrow><msub><mi>p</mi><mi>t</mi></msub><mo>=</mo><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM2435"><mi>E</mi><mo>-</mo><msub><mi>E</mi><mn>0</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mo>/</mo><msub><mi>P</mi><mn>0</mn></msub></mrow><mo>⁢</mo><mi>c</mi></mrow></mrow></math>: normalized energy deviation</p>
</div>
</dd>
<dt id="I6.i23" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i23.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i23.p1.m1" class="ltx_Math" alttext="p_{\sigma}=(E-E_{0})/\beta_{0}P_{0}c" display="inline"><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>=</mo><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM2436"><mi>E</mi><mo>-</mo><msub><mi>E</mi><mn>0</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mo>/</mo><msub><mi>β</mi><mn>0</mn></msub></mrow><mo>⁢</mo><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi></mrow></mrow></math>: SixTrack energy deviation canonical conjugate of <math id="I6.i23.p1.m2" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math></p>
</div>
</dd>
<dt id="I6.i24" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i24.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i24.p1.m1" class="ltx_Math" alttext="H" display="inline"><mi>H</mi></math> Hamiltonian function</p>
</div>
</dd>
<dt id="I6.i25" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i25.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i25.p1.m1" class="ltx_Math" alttext="E_{x},E_{y},E_{s}" display="inline"><mrow><msub id="XM2437"><mi>E</mi><mi>x</mi></msub><mo>,</mo><msub id="XM2438"><mi>E</mi><mi>y</mi></msub><mo>,</mo><msub id="XM2439"><mi>E</mi><mi>s</mi></msub></mrow></math> Electric fields in a straight or curved reference frame</p>
</div>
</dd>
<dt id="I6.i26" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i26.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i26.p1.m1" class="ltx_Math" alttext="B_{x},B_{y},B_{s}" display="inline"><mrow><msub id="XM2440"><mi>B</mi><mi>x</mi></msub><mo>,</mo><msub id="XM2441"><mi>B</mi><mi>y</mi></msub><mo>,</mo><msub id="XM2442"><mi>B</mi><mi>s</mi></msub></mrow></math> Magnetic fluxes in a straight or curved reference frame</p>
</div>
</dd>
<dt id="I6.i27" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="I6.i27.p1" class="ltx_para">
<p class="ltx_p"><math id="I6.i27.p1.m1" class="ltx_Math" alttext="A_{x},A_{y},A_{s}" display="inline"><mrow><msub id="XM2443"><mi>A</mi><mi>x</mi></msub><mo>,</mo><msub id="XM2444"><mi>A</mi><mi>y</mi></msub><mo>,</mo><msub id="XM2445"><mi>A</mi><mi>s</mi></msub></mrow></math> Magnetic fluxes in a straight or curved reference frame</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="bib" class="ltx_bibliography">
<h2 class="ltx_title ltx_title_bibliography">References</h2>
<ul id="L1" class="ltx_biblist">
<li id="bib.bib10" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[1]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">D.P. Barber, K. Heinemann, G. Ripken and F. Schmidt</span><span class="ltx_text ltx_bib_year"> (1996)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">Symplectic thin-lens transfer maps for SIXTRACK: treatment of bending magnets in terms of the exact hamiltonian</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock">Technical Report <span class="ltx_text ltx_bib_number">96-156</span>,  <span class="ltx_text ltx_bib_publisher">DESY</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S1.p3" title="1 Introduction ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>,
<a href="#S3.SS2.SSS2.p2" title="3.2.2 Thin dipole ‣ 3.2 Dipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>.
</span>
</li>
<li id="bib.bib7" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[2]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">D.P. Barber, G. Ripken and F. Schmidt</span><span class="ltx_text ltx_bib_year"> (1987)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">A non-linear canonical formalism for the coupled synchro-betatron motion of protons with arbitrary energy</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock">Technical Report <span class="ltx_text ltx_bib_number">87-36</span>,  <span class="ltx_text ltx_bib_publisher">DESY</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S1.p3" title="1 Introduction ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>,
<a href="#S3.SS2.SSS1.p1" title="3.2.1 Thick dipole ‣ 3.2 Dipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>,
<a href="#S3.SS2.p1" title="3.2 Dipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>,
<a href="#S3.SS3.SSS1.p1" title="3.3.1 Thick quadrupole ‣ 3.3 Quadrupole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>.
</span>
</li>
<li id="bib.bib13" class="ltx_bibitem ltx_bib_book">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[3]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">E. Forest</span><span class="ltx_text ltx_bib_year"> (1999)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">Beam dynamics: a new attitude and framework</span>.
</span>
<span class="ltx_bibblock"> <span class="ltx_text ltx_bib_publisher">Harcourt Academic Publisher</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#I1.ix2.p1" title="Step 2 ‣ 3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">Step 2</span></a>,
<a href="#I1.ix3.p1" title="Step 3 ‣ 3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">Step 3</span></a>,
<a href="#S3.SS1.p5" title="3.1 Drift ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>,
<a href="#S3.SS12.p5" title="3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.12</span></a>,
<a href="#S3.SS2.SSS1.p1" title="3.2.1 Thick dipole ‣ 3.2 Dipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>.
</span>
</li>
<li id="bib.bib9" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[4]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">K. Heinemann, G. Ripken and F. Schmidt</span><span class="ltx_text ltx_bib_year"> (1995)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">Construction of nonlinear symplectic six-dimensional thin-lens maps by exponentiation</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock">Technical Report <span class="ltx_text ltx_bib_number">95-189</span>,  <span class="ltx_text ltx_bib_publisher">DESY</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S1.p3" title="1 Introduction ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>,
<a href="#S3.SS1.p4" title="3.1 Drift ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>,
<a href="#S3.SS2.SSS2.p1" title="3.2.2 Thin dipole ‣ 3.2 Dipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>,
<a href="#S3.SS7.p1" title="3.7 Solenoid ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.7</span></a>.
</span>
</li>
<li id="bib.bib11" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[5]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">F. C. Iselin</span><span class="ltx_text ltx_bib_year"> (1992)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">The mad program (methodical accelerator design), physics methods manual</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock">Technical Report <span class="ltx_text ltx_bib_number">CERN/SL/92-??</span>,  <span class="ltx_text ltx_bib_publisher">CERN</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S4.p1" title="4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4</span></a>.
</span>
</li>
<li id="bib.bib5" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[6]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">A. Latina and R. D. Maria</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">RF multipole implementation</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock"> <span class="ltx_text ltx_bib_publisher">CERN-ATS</span>.
</span>
<span class="ltx_bibblock">Note: <span class="ltx_text ltx_bib_note">2012-088</span>
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S1.p3" title="1 Introduction ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>,
<a href="#S3.SS11.p2" title="3.11 RF multipole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.11</span></a>.
</span>
</li>
<li id="bib.bib4" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[7]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">L.H.A. Leunissen, F. Schmidt and G. Ripken</span><span class="ltx_text ltx_bib_year"> (2001)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">6D beam-beam kick including coupled motion</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock">Technical Report <span class="ltx_text ltx_bib_number"></span>,  <span class="ltx_text ltx_bib_publisher"></span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S1.p3" title="1 Introduction ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>,
<a href="#S3.SS8.p1" title="3.8 Beam-beam lens ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.8</span></a>,
<a href="#S3.SS8.p2" title="3.8 Beam-beam lens ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.8</span></a>,
<a href="#S3.SS8.p3" title="3.8 Beam-beam lens ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.8</span></a>.
</span>
</li>
<li id="bib.bib8" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[8]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">G. Ripken and F. Schmidt</span><span class="ltx_text ltx_bib_year"> (1995)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">A symplectic six-dimensional thin-lens formalism for tracking</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock">Technical Report <span class="ltx_text ltx_bib_number">DESY 95-63 and CERN/SL/95-12(AP)</span>,  <span class="ltx_text ltx_bib_publisher">DESY, CERN</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S1.p3" title="1 Introduction ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>,
<a href="#S3.SS1.p3" title="3.1 Drift ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>,
<a href="#S3.SS4.SSS1.p1" title="3.4.1 Thin combined function magnet ‣ 3.4 Combined function magnet ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.1</span></a>,
<a href="#S3.SS6.p1" title="3.6 RF-cavity ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6</span></a>.
</span>
</li>
<li id="bib.bib6" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[9]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">G. Ripken</span><span class="ltx_text ltx_bib_year"> (1985)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">Non-linear canonical equations of coupled synchro-betatron motion and their solutions within the framework of a non-linear six-dimensional (symplectic) tracking program for ultrarelativistic protons</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock">Technical Report <span class="ltx_text ltx_bib_number">85-084</span>,  <span class="ltx_text ltx_bib_publisher">DESY</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S1.p3" title="1 Introduction ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>,
<a href="#S3.SS3.SSS2.p1" title="3.3.2 Thick skew quadrupole ‣ 3.3 Quadrupole ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.2</span></a>,
<a href="#S3.SS7.p1" title="3.7 Solenoid ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.7</span></a>.
</span>
</li>
<li id="bib.bib1" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[10]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">F. Schmidt</span><span class="ltx_text ltx_bib_year"> (1994)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">SIXTRACK: single particle tracking code treating transverse motion with synchrotron oscillations in a symplectic manner</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock">Technical Report <span class="ltx_text ltx_bib_number">94-56</span>,  <span class="ltx_text ltx_bib_publisher">CERN</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S1.p1" title="1 Introduction ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>.
</span>
</li>
<li id="bib.bib14" class="ltx_bibitem ltx_bib_article">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[11]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">A. Valishev and G. Stancari</span><span class="ltx_text ltx_bib_year"> (2013)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">Electron lens as beam-beam wire compensator in HL-LHC</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S3.SS12.p2" title="3.12 Wire ‣ 3 Beam-line elements tracking maps ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.12</span></a>.
</span>
</li>
<li id="bib.bib12" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[12]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">F. Willeke and G. Ripken</span><span class="ltx_text ltx_bib_year"> (1988)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">Methods of beam optics</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock">Technical Report <span class="ltx_text ltx_bib_number">88-114</span>,  <span class="ltx_text ltx_bib_publisher">DESY</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S4.SS1.p1" title="4.1 Diagonalisation of one-turn matrix ‣ 4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4.1</span></a>,
<a href="#S4.p1" title="4 Optics calculations ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">4</span></a>.
</span>
</li>
<li id="bib.bib2" class="ltx_bibitem ltx_bib_report">
<span class="ltx_bibtag ltx_bib_key ltx_role_refnum">[13]</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_author">A. Wrulich</span><span class="ltx_text ltx_bib_year"> (1984)</span>
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_title">RACETRACK: a computer code for the nonlinear particle motion in accelerators</span>.
</span>
<span class="ltx_bibblock"><span class="ltx_text ltx_bib_type">Technical report</span>
</span>
<span class="ltx_bibblock">Technical Report <span class="ltx_text ltx_bib_number">84-026</span>,  <span class="ltx_text ltx_bib_publisher">DESY</span>.
</span>
<span class="ltx_bibblock ltx_bib_cited">Cited by: <a href="#S1.p2" title="1 Introduction ‣ SixTrack Physics Manual (Draft)" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>.
</span>
</li>
</ul>
</section>
</article>
<aside>
    <?php include_once($incPath.'/aside_manual.php'); ?>
</aside>
<?php
    require_once($incPath.'/footer.php');
?>
