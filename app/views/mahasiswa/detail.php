<?php
$mhs = $data["mahasiswa"];
?>

<div class="container">
	<h1><?= $mhs["nama"] ?></h1>
	<ul>
		<li>Alamat: <?= $mhs["alamat"] ?></li>
		<li>Jurusan: <?= $mhs["jurusan"] ?></li>
		<li>Email: <?= $mhs["email"] ?></li>
	</ul>
</div>