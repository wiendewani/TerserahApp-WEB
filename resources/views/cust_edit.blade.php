<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Customer</title>
</head>
<body>

	<h3>Edit Customer</h3>

	
	
	<br/>
	<br/>

	@foreach($customer as $cust)
	<form action="/customer/update" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $cust->id }}">
		<label for="nm_pembeli">Nama <input type="text" required="required" name="nm_pembeli" value="{{ $cust->nm_pembeli }}"></label> 
		<label for="jenis_kelamin">Jenis Kelamin <input type="text" required="required" name="jenis_kelamin" value="{{ $cust->jenis_kelamin }}"></label> 
		<label for="alamat">Alamat <textarea required="required" name="alamat">{{ $cust->alamat }}</textarea></label> 
        <label for="kota">Kota <input type="text" required="required" name="kota" value="{{ $cust->kota }}"></label> 
		
		<input type="submit" value="Simpan Data">
        <a href="/customer">Kembali</a>
	</form>
    
	@endforeach
		

</body>
</html>