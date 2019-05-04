<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
function cetak_gambar($value)
{
	$aa = $value / 2 + 0.5;
	for ($x = 0; $x < $value; $x++) {
		for ($y = 0; $y < $value; $y++) {
			if($x == $aa-1)
				echo "* ";
			else if($y == 0)
				echo "* ";
			else if($y == $value-1)
				echo "*";
			else
				echo "= ";
		}
	echo "<br>";
	} 
}
$number = 9;
if($number % 2 == 0)
	echo "Harus Ganjil";
else
	cetak_gambar($number);
