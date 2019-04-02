<?php
  function svgBadge($cType,$cStatus,$cCol) {
    $bgCol = "#9f9f9f";
    switch($cCol) {
    case "green":
      $bgCol = "#40c010";
      break;
    case "yellow":
      $bgCol = "#c0c010";
      break;
    case "orange":
      $bgCol = "#c07e10";
      break;
    case "red":
      $bgCol = "#e05d44";
      break;
    case "blue":
      $bgCol = "#109dc0";
      break;
    }
    echo "<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='88' height='20'>";
    echo   "<linearGradient id='b' x2='0' y2='100%'>";
    echo     "<stop offset='0' stop-color='#bbb' stop-opacity='.1'/>";
    echo     "<stop offset='1' stop-opacity='.1'/>";
    echo   "</linearGradient>";
    echo   "<clipPath id='a'>";
    echo     "<rect width='88' height='20' rx='3' fill='#fff'/>";
    echo   "</clipPath>";
    echo   "<g clip-path='url(#a)'>";
    echo     "<path fill='#505050' d='M0 0h37v20H0z'/>";
    echo     "<path fill='".$bgCol."' d='M37 0h51v20H37z'/>";
    echo     "<path fill='url(#b)' d='M0 0h88v20H0z'/>";
    echo   "</g>";
    echo   "<g fill='#fff' text-anchor='left' font-family='DejaVu Sans,Verdana,Geneva,sans-serif' font-size='110'>";
    echo     "<text x='55' y='150' fill='#010101' fill-opacity='.3' transform='scale(.1)'>".$cType."</text>";
    echo     "<text x='55' y='140' transform='scale(.1)'>".$cType."</text>";
    echo     "<text x='415' y='150' fill='#010101' fill-opacity='.3' transform='scale(.1)'>".$cStatus."</text>";
    echo     "<text x='415' y='140' transform='scale(.1)'>".$cStatus."</text>";
    echo   "</g>";
    echo "</svg>";
  }
?>
