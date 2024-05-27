<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel</title>
	@vite('resources/css/app.css')
</head>
<body>
	<div class="navbar bg-base-100 mb-2">
		<a class="btn btn-ghost text-xl">DATA PEGAWAI</a>
	  </div>
	  <a href="/pegawai/tambah"> <button class="btn btn-info mb-2">Info</button></a>
	  <div class="overflow-x-auto">
		<table class="table table-zebra">
		  <!-- head -->
		  <thead>
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
		  </thead>
		  <tbody>
			<!-- row 1 -->
			@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}"><button class="btn btn-success">Edit</button></a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"><button class="btn btn-error">Hapus</button></a>
			</td>
		</tr>
		@endforeach
		  </tbody>
		</table>
	  </div>
</body>
</html>

