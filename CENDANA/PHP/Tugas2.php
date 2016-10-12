<?php
$arr = [
			["A","B","C"],
			[1, 2, 3, 4, 5, 6],
			["Joko", "Budi", "Yuni"]
		]; 

$jml1= $arr[1][1]+$arr[1][2]+$arr[1][3];
$jml2= $arr[1][4]+$arr[1][5];

echo $arr[2][0]." mempunyai anak sebanyak ".$arr[1][3]." orang sekelas dengan anaknya ".$arr[2][2]." yaitu di kelas A, mereka menambahkan angka ".$arr[1][1].",".$arr[1][2]." dan ".$arr[1][3]." menjadi ".$jml1.". ".$arr[2][1]." menjumlahkan angka ".$arr[1][4]." dan ".$arr[1][5]." menjadi ".$jml2.".";
?>