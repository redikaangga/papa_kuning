<?php

// 	class hewan 
// 	{
// 		function jalan($hewan = "")
// 		{
// 			echo $hewan . " berjalan \n";
// 		} 
// 		function makan($hewan = "")
// 		{
// 			echo $hewan . " makan\n";
// 		} 
// 	}

// 	class bebek extends hewan
// 	{
// 		function terbang()
// 		{
// 			echo "Bebek terbang\n";
// 		} 
// 	}

// 	class itik extends bebek
// 	{

// 	}

// $Bebek = new bebek();
// $Bebek -> jalan("Bebek");
// $Bebek -> makan("Bebek");

// $Itik = new itik();
// $Itik -> terbang("Itik");
// $Itik -> jalan("Itik");

//---------------------------------------------------------------//

// class pegawai
// {
// 	function __construct ()
// 	{
// 		$this -> gaji = 1500000;
// 		$this -> sks = 15000;
// 		$this -> absen = 5000;
// 	}
// }
// class dosen extends pegawai
// {
// 	public function gdos($sk)
// 	{
// 		$lembur = $this -> sks * $sk;
// 		$gaji = $this -> gaji + $lembur;
// 		echo "Gaji total dosen = " . $gaji . "\n";
// 	}
// }
// class staf extends pegawai
// {
// 	public function gstaf($abs)
// 	{
// 		$lembur = $this -> absen * $abs;
// 		$gaji = $this -> gaji + $lembur;
// 		echo "Gaji total staf = " . $gaji . "\n";
// 	}
// }

// $dsn = new dosen();
// $dsn -> gdos("4");

// $staff = new staf();
// $staff -> gstaf("4");

//---------------------------------------------------------------//
class Pegawai
{
	
	function __construct()
	{
		$this->gajiPokok = 1500000;
	}
}
class Dosen extends Pegawai
{
	public function __construct()
	{
		
		parent::__construct();
		$this->gajiDosen = $this->gajiPokok;
		
	}
	
	public function gajiDosen($sks='')
	{
		$total = ($sks * 15000);
		$this->gajiDosen += $total ;
	}
	public function getGajiDosen()
	{
		echo "Gaji dosen adalah " . $this->gajiDosen . "\n";
	}
	
}

class Staff extends Pegawai
{
	public function __construct()
	{
		parent::__construct();
		$this->gajiStaff = $this->gajiPokok;
	}
	public function gajiStaff($pertemuan='')
	{
		$total = ($pertemuan * 5000);
		$this->gajiStaff += $total ;
	}
	public function getGajiStaff()
	{
		echo "Gaji staff adalah " . $this->gajiStaff . "\n";
	}
	
}
$dosen = new Dosen();
$dosen->gajiDosen(2);
$dosen->getGajiDosen();
$staff = new Staff();
$staff->gajiStaff(2);
$staff->getGajiStaff();

//------------------------------------------//

?>