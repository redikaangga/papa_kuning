<?php

// class hewan{

// 	function __construct ($hewan)
// 	{
// 		echo "Ini adalah Constructor\n";
// 		$this -> tampil($hewan);
// 	}

// 	function makan($apa = "")
// 	{
// 		return " sedang makan" . $apa;
// 	}

// 	function tampil($hewan)
// 	{
// 		echo $hewan . $this->makan(" sate");
// 	}
// }

// $hewan = new Hewan("Bebek");
// // $hewan -> tampil("Bebek");

//---------------------------------------------//

// class mahasiswa
// {
// 	function demo()
// 	{
// 		return "demo";
// 	}

// 	function kuliah()
// 	{
// 		return "kuliah";
// 	}

// 	function gabungAktivitas()
// 	{
// 		return " sedang " . $this -> demo() . " dan " . $this -> kuliah();
// 	}

// 	function tampil($tmp)
// 	{
// 		echo $tmp . $this->gabungAktivitas();
// 	}
// }
// 	$hsl = new mahasiswa();
// 	$hsl->tampil("Hani");

//---------------------------------------------//


// $kalimat = "Andi 10 Budi 23 Jono 31";
// $pecah = explode(" ", $kalimat);
// $jml = count($pecah);
// $b = [];
// $a = [];

// for ($i=0; $i < $jml; $i++) {
    // if (is_numeric($pecah[$i])) {
        // $num = $pecah[$i];
        // echo $num . "<br>";
		// array_push($b, $num);
    // } 
	// else {
        // $not = $pecah[$i];
    	// echo $not . "<br>";
		// array_push($a, $not);
    // }
// }

// echo "<pre>";
// print_r ($b);
// print_r ($a);
// $hsl = count($b);
// echo "\nRata-rata = " . array_sum($pecah) / $hsl . "<br>";


// $kalimat = "Andi 10 Budi 23 Jono 31";

// class nilai
// {
// 	var $a = [];			
// 	var $b = [];
// 	var $output;
// 	function rekap($kal)
// 	{
// 		$pecah = explode(" ", $kal);
// 		$jml = count($pecah);
// 		for ($i=0; $i < $jml; $i++) {
// 			if (is_numeric($pecah[$i])) {
// 				$num = $pecah[$i];
// 				array_push($this->b, $num);
// 		}
// 			else {
// 				$not = $pecah[$i];
// 				array_push($this->a, $not);
// 			}
// 		}
// 	}
// 	function rata()
// 	{
// 		echo "<pre>";
// 		$hsl = count($this->b);
// 		$rrt = array_sum($this->b);
// 		$this->output = $rrt/ $hsl;
// 	}
// 	function tampil()
// 	{
// 		echo "Rata-rata = " . $this->output;
// 	}
// }
// $akhir = new nilai();
// $akhir -> rekap($kalimat);
// $akhir -> rata();
// $akhir -> tampil();

//---------------------------------------------//


$nilai = [
"PDI" => 0,
"PKB" => 0,
"PPP" => 0,
"HANURA" => 0,
"GOLKAR" => 0,
];

class partai {

	function voting($tambah)
	{
		MENU :
		global $nilai;
		echo "List Partai : \n\n";
		echo "1. PDI\n";
		echo "2. PKB\n";
		echo "3. PPP\n";
		echo "4. Hanura\n";
		echo "5. Golkar\n";
		echo "\nPilih partai : ";
		$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
		if(trim($line) == '1'){
			$nilai["PDI"]+=1;
			$this -> hasil();
		}
		else if(trim($line) == '2'){
			$nilai["PKB"]+=1;
			$this -> hasil();
		}
		else if(trim($line) == '3'){
			$nilai["PPP"]+=1;
			$this -> hasil();
		}
		else if(trim($line) == '4'){
			$nilai["HANURA"]+=1;
			$this -> hasil();
		}
		else if(trim($line) == '5'){
			$nilai["GOLKAR"]+=1;
			$this -> hasil();
		}
		else {
			echo "Golput\n";
		}

		echo "Pilih lagi ?";
		$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
		if(trim($line) == 'y' || trim($line) == 'Y'){
			
			while (trim($line) == 'y' || trim($line) == 'Y') {
				goto MENU;
			}
		}
		else {
			echo "Mukucih";
			exit;
		}
	}
	function hasil()
	{
		global $nilai;
		// echo "<pre>";
		print_r($nilai);
	}
}
$output = new partai();
$output -> voting("PDI");

?>