<div class="container">
	<h1>Daftar Dosen</h1>
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
			<?php foreach ($data["allDosen"] as $dsn) { ?>
				<!-- This will loop all items in $data["allDosen"] array -->
				<tr>
					<td><?= $dsn["id"] ?> </td>
					<td><?= $dsn["nama"] ?></td>
					<td><?= $dsn["email"] ?></td>
					<td><?= $dsn["jurusan"] ?></td>
					<td><?= $dsn["alamat"] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>