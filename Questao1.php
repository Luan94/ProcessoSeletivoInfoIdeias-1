<?php
function SECULOANO($ano)
{

$seculoCalc = ($ano / 100) +1;
$currentSeculo = intval($seculoCalc);
echo $currentSeculo;
};

SECULOANO(2022);
?>