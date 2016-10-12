<?php
/*
for ($i=0;$i<10;$i++)
{
	echo $i. "\n";
}
*/
/* for ($a=9;$a>=0;$a--)
{
	echo $a."\n";
}
 */
/*  for ($i=0;$i<=10;$i++)
 {
	 if($i==5)
	 {
		 for ($j=1; $j<=3; $j++)
		 {
			 echo "Perulangan J = ".$j."\n";
		 }
	 }
	 else 
	 {
		 echo "Perulangan I = ".$i."\n";
	 }
 } */
 
/* for($i=1; $i<=10; $i++)
{
	if($i%2==0)
	{
		echo $i." = Genap\n";
	}else {
		echo $i." = Ganjil\n";
		for($j=1; $j<=3; $j++)
		{
			echo "Ganjil - ".$j."\n";
		}
	}
} */
for ($i=1; $i<=10; $i++){
	if($i%2==0 && $i%3==0) {
		echo $i." - Ciyee Hore\n";
	}
	else if($i%2==0)
	{
		echo $i." - Hore\n";
	}
	else if($i%3==0)
	{
		echo $i." - Ciyee\n";
	}
	else
	{
		echo $i."\n";
	}
}
 
?>