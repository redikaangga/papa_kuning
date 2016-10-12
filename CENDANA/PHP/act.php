<?php

$total = $_POST;
$jml = array_sum($total['nilai']);
$nil = count($total['nilai']);
echo "<pre>";
echo "Jumlah total nilai = ".$jml."\n\n";
echo "Jumlah nilai = ".$nil."\n\n";
echo "Rata - rata nilai keseluruhan adalah : ";
echo array_sum($total['nilai']) / count($total['nilai']);
echo "</pre>";

/*$temp = 0;
for ($i=0; $i <count($total['nilai']) ; $i++) { 
	$temp += $total['nilai'][$i];
$rata = $temp/count($total['nilai']);
echo $rata;*/
?>