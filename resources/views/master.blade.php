<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
</head>
<body>
	<header>
		<h2>Backend Admin</h2>
		<nav>
			<a href="/backend/admin">ADMIN</a>
			|
			<a href="/backend/daerah">DAERAH</a>
			|
			<a href="/backend/kategori">KATEGORI</a>
			|
			<a href="/backend/pengguna">PENGGUNA</a>
			|
			<a href="/backend/detail_pariwisata">DETAIL PARIWISATA</a>
			|
			<a href="/backend/foto_pariwisata">FOTO PARIWISATA</a>
			|
			<a href="/backend/jadwal_buka">JADWAL BUKA</a>
			|
			<a href="/backend/pariwisata">PARIWISATA</a>
			|
			<a href="/backend/review">REVIEW</a>
		</nav>
	</header>
	<hr>
	<br>

	@yield('konten')

	<br>
	<hr>
	<footer><p>&copy; IRSYAD 2020</p></footer>
</body>
</html>