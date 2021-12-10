<div class="container">
	<h1>Daftar Mahasiswa</h1>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data["allMahasiswa"] as $mhs) { ?>
				<!-- This will loop all items in $data["allMahasiswa"] array -->
				<tr>
					<td><?= $mhs["id"] ?> </td>
					<td><?= $mhs["nama"] ?></td>
					<td><?= $mhs["email"] ?></td>
					<td><?= $mhs["jurusan"] ?></td>
					<td><?= $mhs["alamat"] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>