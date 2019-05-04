<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
function cetak($value)
{
	$char1 = array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	$charactersLength = count($char1);
	for($x = 0; $x < $value; $x++)
	{
		$char = $char1;
		$randomString = '';
		for ($i = 0; $i < 32; $i++) {
			$id = rand(0, $charactersLength - 1);
			if(empty($char[$id]))
			{
				$i--;
				continue;
			}
			$randomString .= $char[$id];
			unset($char[$id]);
		}
		echo $randomString;
		echo "<br>";
	}
}
cetak(3);