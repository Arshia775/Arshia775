<?php
document.write("
$html = file_get_contents('https://www.time.ir');


echo "تاریخ امروز <br>";
preg_match('#<span id="ctl00_cphTop_Sampa_Web_View_TimeUI_ShowDate00cphTop_3734_lblShamsiNumeral" class="show numeral">(.*?)</span>#',$html,$matchw);


echo $matchw[0];

")
?>