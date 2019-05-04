<?php
$koneksi = mysqli_connect("localhost","root","","quickcount");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM candidates WHERE id='$id'");

while($data = mysqli_fetch_array($query)){
	$nama = $data['name'];
	$id = $data['id'];
	$vote = $data['earned_vote']+1;
}
mysqli_query($koneksi,"update candidates set name = '$nama', earned_vote = '$vote' where id = '$id'");
//echo "update candidates set id = '$id', name = '$nama', earned_vote = '$vote')";
header("location:candidates.php");
//echo "SELECT * FROM candidates WHERE id='$id'";