<div class="container">
	<h1>Daftar Mahasiswa</h1>
	<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
		Tambah Mahasiswa
	</button>

	<div class="modal fade" id="formModal" data-bs-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Form data Mahasiswa</h5>
					<button class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<form action="<?= BASEURL ?>Mahasiswa/postAdd" method="post">
						<div class="form-group">
							<label for="nama-form">Nama Mahasiswa</label>
							<input type="text" name="nama" id="nama-form" class="form-control">
						</div>
						<div class="form-group">
							<label for="email-form">Email</label>
							<input type="email" name="email" id="email-form" class="form-control">
						</div>
						<div class="form-group">
							<label for="jurusan-form">Jurusan</label>
							<!-- <input type="text" name="jurusan" id="jurusan-form" class="form-control"> -->
							<select name="jurusan" id="jurusan-form">
								<option value="Sistem Informasi">Sistem Informasi</option>
								<option value="Teknik Informatika">Teknik Informatika</option>
								<option value="Sistem Komputer">Sistem Komputer</option>
								<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
							</select>
						</div>
						<div class="form-group">
							<label for="alamat-form">Alamat</label>
							<input type="text" name="alamat" id="alamat-form" class="form-control">
						</div>

						<button type="submit" class="btn btn-primary mt-3">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>

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
					<td><?= $mhs["id"] ?></td>
					<td><a href="<?= BASEURL ?>Mahasiswa/detail/<?= $mhs["id"] ?>"><?= $mhs["nama"] ?></a></td>
					<td><?= $mhs["email"] ?></td>
					<td><?= $mhs["jurusan"] ?></td>
					<td><?= $mhs["alamat"] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>