<?php
$num_Languages = 4;  

$months = 11;

$days = $months * 16; 

$daysPerLanguage = $days / $num_Languages;

echo 'вывод: ', $daysPerLanguage, "\n";