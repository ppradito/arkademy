<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
function pass_check($password){
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $special   = preg_match('@[\W]+@',$password);
    
    if(!$uppercase || !$lowercase || !$number || !$special || strlen($password) < 8) {
        return false;
    }else {
        return true;
    }
}

function username_check($username){
    $uppercase = preg_match('@[A-Z]@', $username);
    $lowercase = preg_match('@[a-z]@', $username);
    $number    = preg_match('@[0-9]@', $username);
    $special   = preg_match('@[\W]+@',$username);
    
    if($uppercase || !$lowercase || $number || $special || strlen($username) != 8) {
        return false;
    }else {
        return true;
    }
}
$password = "Ppraddito3/4";
$username = "apaanasih";
if (pass_check($password))
    echo "Password True<br>";
else 
    echo "Password False<br>";
    
if (username_check($username))
    echo "Username True";
else 
    echo "Username False";

//echo $uppercase;
//echo $lowercase;
//echo $number;
//echo $special;

