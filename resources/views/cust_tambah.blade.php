<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Customer</title>
</head>
<body>

	<h3>Tambah Customer</h3>

	
	
	<br/>
	<br/>

	
	<form action="/customer/store" method="post">
		{{ csrf_field() }}

		<label for="nm_pembeli">Nama <input type="text" required="required" name="nm_pembeli" ></label> 
		<label for="jenis_kelamin">Jenis Kelamin <input type="text" required="required" name="jenis_kelamin" ></label> 
		<label for="alamat">Alamat <textarea required="required" name="alamat"></textarea></label> 
        <label for="kota">Kota <input type="text" required="required" name="kota"></label> 
		
		<input type="submit" value="Simpan Data">
        <a href="/customer">Kembali</a>
	</form>
		

</body>
</html>