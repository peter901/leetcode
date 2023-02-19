<?php
$string = "Crown Healthcare (U)<>? `#$ \"!'=% \Limited,
Plot 118 – 120, Seventh Street.,:; Industrial Area, 

";


// echo html_entity_decode("Crown Healthcare (U) Limited,
// Plot 118 – 120, Seventh Street, Industrial Area, ",ENT_QUOTES,"UTF-8");
echo ord('a');
echo preg_replace('/[^a-zA-Z0-9 &()<>:;?"=!$%`#.,@\-\']/', '', $string);