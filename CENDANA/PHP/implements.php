<?php  

// interface Payment{
// 	public function kredit();
// 	public function debit();
// 	public function getATM();
// 	public function getSaldo();
// }

// class ATM 
// {
// 	public function inisialAtm(Payment $bank)
// 	{
// 		$bank->getATM();		
// 	}
// 	public function cetakSaldo(Payment $bank)
// 	{
// 		$bank->getSaldo();
// 	}
// }

// class Mandiri implements Payment
// {
// 	public function __construct()
// 	{
// 		$this->saldo = 0;
// 	}
// 	public function kredit()
// 	{
// 		$this->saldo++;
// 	}
// 	public function debit()
// 	{
// 		$this->saldo--;
// 	}
// 	public function getATM()
// 	{
// 		echo "Ini dari bank Mandiri \n";
// 	}
// 	public function getSaldo()
// 	{
// 		echo "Saldo rekening Mandiri Anda : " . $this->saldo . " \n";
// 	}

// }

// class BNI implements Payment
// {
// 	public function __construct()
// 	{
// 		$this->saldo = 0;
// 	}
// 	public function kredit()
// 	{
// 		$this->saldo++;
// 	}
// 	public function debit()
// 	{
// 		$this->saldo--;
// 	}
// 	public function getATM()
// 	{
// 		echo "Ini dari bank BNI \n";
// 	}
// 	public function getSaldo()
// 	{
// 		echo "Saldo rekening BNI Anda : " . $this->saldo . " \n";
// 	}

// }


// $mandiri = new Mandiri();
// $mandiri->kredit();
// $mandiri->kredit();
// $mandiri->kredit();
// $mandiri->kredit();

// $bni = new BNI();
// $bni->kredit();
// $bni->kredit();
// $bni->kredit();
// $bni->kredit();

// $atm = new ATM();
// $atm->inisialAtm($mandiri);
// $atm->cetakSaldo($mandiri);
// $atm->inisialAtm($bni);
// $atm->cetakSaldo($bni);

//--------------------------------------------------//

// interface sosmed{
// 	public function tambah();
// 	public function kurang();
// 	public function tampil();
// 	public function total();
// }


// class output
// {
// 	public function cetak(sosmed $like)
// 	{
// 		$like->tampil();
// 	}
// }


// class facebook implements sosmed
// {
// 	public function __construct()
// 	{
// 		$this->like = 0;
// 	}
// 	public function tambah()
// 	{
// 		$this->like++;
// 	}
// 	public function kurang()
// 	{
// 		$this->like--;
// 	}
// 	public function tampil()
// 	{
// 		echo "Total like facebook : " . $this->like . " \n";
// 	}
// 	public function total()
// 	{
// 		return $this->like;
// 	}
// }

// class twitter implements sosmed
// {
// 	public function __construct()
// 	{
// 		$this->fav = 0;
// 	}
// 	public function tambah()
// 	{
// 		$this->fav++;
// 	}
// 	public function kurang()
// 	{
// 		$this->fav--;
// 	}
// 	public function tampil()
// 	{
// 		echo "Total favorit twitter : " . $this->fav . " \n";
// 	}
// 	public function total()
// 	{
// 		return $this->fav;
// 	}
// }

// class gplus implements sosmed
// {
// 	public function __construct()
// 	{
// 		$this->plus = 0;
// 	}
// 	public function tambah()
// 	{
// 		$this->plus++;
// 	}
// 	public function kurang()
// 	{
// 		$this->plus--;
// 	}
// 	public function tampil()
// 	{
// 		echo "Total plus G+ : " . $this->plus . " \n";
// 	}
// 	public function total()
// 	{
// 		return $this->plus;
// 	}
// }
// class banding
// {
// 	public function comp(sosmed $lk, sosmed $fv, sosmed $pl)
// 	{
// 		if($lk->total() > $fv->total() && $lk->total() > $pl->total())
// 		{
// 			echo "Facebook paling populer\n";
// 		}
// 		else if ($fv->total() > $lk->total() && $fv->total() > $pl->total())
// 		{
// 			echo "Twitter paling populer\n";
// 		}
// 		else if ($pl->total() > $lk->total() && $pl->total() > $fv->total())
// 		{
// 			echo "G+ paling populer\n";
// 		}		
// 		else {
// 			echo "Semua sama\n";
// 		}
// 	} 
// }
// $fesbuk = new facebook();
// $fesbuk->tambah();

// $OUTF = new output();
// $OUTF->cetak($fesbuk);

// $twe = new twitter();
// $twe->tambah();

// $OUTT = new output();
// $OUTT->cetak($twe);

// $gp = new gplus();
// $gp->tambah();

// $OUTG = new output();
// $OUTG->cetak($gp);

// $OUTC = new banding;
// $OUTC->comp($fesbuk, $twe, $gp);

//-----------------------------------//

interface club{
	public function yel();
	// public function hsl();
}

class output
{
	public function cetak(club $fc)
	{
		$fc->yel();
	}
}

class mlg implements club
{
	public function yel()
	{
		echo "Salam Satu Jiwa\n";
	}
}

class sby implements club
{
	public function yel()
	{
		echo "Bondo Nekat\n";
	}	
}

class jkt implements club
{
	public function yel()
	{
		echo "Jakmania\n";
	}
}

$arrr = new mlg;
$sbyy = new sby;
$jkkk = new jkt;
$out = new output;
$out->cetak($arrr);
$out->cetak($sbyy);
$out->cetak($jkkk);

?>