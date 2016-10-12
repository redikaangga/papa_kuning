<?php

/*	function tambah($nilai1, $nilai2)
	{
		$total = $nilai1 + $nilai2;
		echo $total;
	}
	function tampil()
	{
		return "Ini fungsi return";
	}



	// tambah(5,5);
	echo tampil();*/

/*	$str = "Joni makan tempe";

	//saya ingin mengubah tempe menjadi tahu

	function ubahTempe($str)
	{
		$out = $str . " tahu";

		return $out;
	}

	$hasil = ubahTempe($str);
	echo $hasil;*/




	//saya ingin mengalikan isi $nilai3 dengan 2
/*	
	$nilai3 = 10;

	function kali($nilai)
	{
		$output = $nilai * 2;

		return $output;
	}

	function tampil($hasil_akhir)
	{
		echo "<br>Hasil akhir adalah = " . $hasil_akhir;
	}

	$hasil = kali($nilai3);
	echo "Nilai dari function kali = ". $hasil. "<br>";
	tampil($hasil);
	*/

/*
	$nilai1 = 5;
	$nilai2 = 3;

	function tambah($nil1, $nil2)
	{
		$hasil_tambah = $nil1 + $nil2;
		return $hasil_tambah;
	}

	function bagi($hasil_tambah)
	{
		$hasil_bagi = $hasil_tambah / 2;
		return $hasil_bagi;
	}

	function kali($hasil_bagi)
	{
		$hasil_kali = $hasil_bagi * 4;
		return $hasil_kali;		
	}

	function tampil($hasil_kali)
	{
		echo "Nilai akhir = ". $hasil_kali. "<br>";
	}
	$hasilt = tambah($nilai1, $nilai2);
	$hasilb = bagi($hasilt);
	$hasilk = kali($hasilb);

	echo "Hasil dari fungsi kali = ".$hasilk."<br>";
	tampil($hasilk);
*/



/*	
function pecah_string($kalimat)
	{
		list ($b, $p, $k, $s, $m, $c) = split ('[ / . - ]', $kalimat);
		echo "1. ".$b."<br>";
		echo "2. ".$p."<br>";
		echo "3. ".$k."<br>";
		echo "4. ".$s."<br>";
		echo "5. ".$m."<br>";
		echo "6. ".$c."<br>";
	}
	*/
/*	$kalimat = "Budi pergi ke sekolah menggunakan becak";
	$pemisah = explode (" ", $kalimat);

	function tampil($kal)
	{
		echo "<pre>";
		print_r($kal);
		echo "</pre>";
	}
	$hasil = pecah_string($kalimat);

	tampil($hasil);*/



	// $siswa =[ 
	// 	[
	// 	"siswa" => ["Budi", "Andi", "Jono"],
	// 	"nilai" => [60, 70, 75]
	// 	],

	// 	[
	// 	"alamat_sekolah" => "Jl. Sukoharjo 10 Malang",
	// 	"no_telp"        => "0341 - 45885"
	// 	]
	// ];


	// function makesiswa($arr)
	// {
	// 	$sw = array_slice($arr, 0, 1);
	// 	return $sw;
	// }

	// function makesekolah($arr)
	// {
	// 	$skl = array_slice($arr, -1, 0);
	// 	return $skl;
	// }
	
	// function tampil($arr)
	// {
	// 	echo "<pre>";
	// 	print_r($arr);
	// 	echo "</pre>";
	// }

	// $sw = makesiswa($siswa);
	// $skl = makesekolah($siswa);
	// tampil($siswa);	

	// $output = array_slice($siswa, 1);
	//jika parameter positif maka parameter dibuang
	//jika parameter negatif maka parameter diambil dari kanan

	$kalimat = "Budi pergi ke sekolah menggunakan becak";
	function pecah($klm)
	{
		$pecahan = explode(" ", $klm);

		for ($i=0; $i < count($pecahan) ; $i++) { 
			echo ucfirst($pecahan[$i])."<br>";
		}
	}
	function tampil($ubh)
	{
		echo "<pre>";
		print_r($ubh);
		echo "</pre>";
	}
	pecah($kalimat);











	?>