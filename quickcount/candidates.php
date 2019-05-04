<html>
<head>
<?php
	$koneksi = mysqli_connect("localhost","root","","quickcount");
 
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
	$data = mysqli_query($koneksi,"select * from candidates");
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class = "container">
	<table class="table table-striped">
		<?php while($d = mysqli_fetch_array($data)){?>
		  <tr>
			<td><?php echo $d['name']; ?></td>
			<td rowspan="2"><a class= "btn btn-success" href="update.php?id=<?php echo $d['id']; ?>">Tambah</a></td>
		  </tr>
		  <tr>
			<td><?php echo $d['earned_vote']; ?></td>
		  </tr>
		<?php } ?>
	</table>
	</div>
</body>
</html>