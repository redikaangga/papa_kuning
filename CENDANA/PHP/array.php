<?php
// echo $arr2[0]." ".$arr2[1]." ".$arr2[2];

/* $jmlar = count($arr2);

for($i=0; $i<$jmlar; $i++)
	{
	echo $arr2[$i]. "\n"; 
} */
/* for($i=0; $i<=5; $i++)
{
	if($i>1 && $i<5)
	{
		echo $arr2[$i]."\n";
	}
}

echo (count($arr2)-1);
 */

/* echo $nama[0]." membawa ". $benda[0]. " dan ". $benda[1]. ", sedangkan ". $nama[3]. " membawa ". $benda[2]. " bersama ". $nama[1]. ", ". $nama[2]." dan ". $nama[4].".";
*/
/* $arr = [
		["A1","B1","C1"],
		["A2","B2","C2","D2"],
		["A3","B3","C3","D3","E3"]
		];
 
$parent = count($arr);

for($i=0; $i<$parent; $i++)
{
	$child = count ($arr[$i]);

	echo "Data ke - ".$i."\n";

	for($j=0; $j<$child; $j++)
		{
			echo "Berisi ".$arr[$i][$j]."\n";
		}
echo "\n";
}
 */
// echo $arr ["nama"] [0];
/* 
$arr =[ 
		"nama" => ["Thoni", "Dika", "Wawan"],
		"nilai" => [10, 11, 12],
		"kelas" => ["A", "B", "C"]
	  ];
print_r ($arr)."\n";
	  
foreach($arr as $index => $isi)
{
	print_r ($isi)."\n";
}
 */

/* $arr =[ 
		"nama" => ["Thoni", "Andik", "Wawan"],
		"nun" => [30, 28.5, 27],
		"kelas" => ["A", "B", "C"],
		"keterangan" => "semua siswa dinyatakan lolos"
		];
 */
/* echo "SMA NEGERI XXX Malang memiliki siswa sebagai berikut : \n";
		
	$no = 1;
	$no2 = 1;
		foreach($arr["nama"] as $index => $isi)
			{
				echo $no++.". ".$isi."\n";
			}

echo "\nMasing-masing siswa memiliki nilai UN sebagai berikut : \n";
			
		foreach($arr["nun"] as $index => $isi)
			{
				echo $no2++.". ".$isi."\n";
			}		
		
echo "\ndengan demikian dapat disimpulkan bahwa ".$arr["keterangan"].".";
 */

$arr =[ 
		"nama" => ["Thoni", "Andik", "Wawan"],
		"nun" => [30, 28.5, 27],
		"kelas" => ["A", "B", "C"],
		"keterangan" => "semua siswa dinyatakan lolos"
		];

echo "Hasil Ujian Nasional SMA NEGERI XXX Malang adalah sebagai berikut : \n";
$no = 1;
/* 		foreach($arr["nama"] as $index => $isi)
			{				
				echo $no++.". Nama  : ".$isi."\n";				
				echo "   Kelas : ".$arr["kelas"][$index]."\n";
				echo "   Nilai : ".$arr["nun"][$index]."\n"			
			} */
			
$jml = count ($arr["nama"]);
for($i=0; $i<$jml; $i++)
{
	echo $no++.". Nama  : ".$arr["nama"][$i]."\n";				
	echo "   Kelas : ".$arr["kelas"][$i]."\n";
	echo "   Nilai : ".$arr["nun"][$i]."\n";
}	
 
 
 
 
 
 
 
?>