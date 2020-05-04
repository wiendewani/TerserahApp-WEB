<!DOCTYPE html>
<html>
<head>
	<title>List Pembeli</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
            <h5 class="text-center my-4">List Pembeli</h5>
				<a href="/customer/tambah">Tambahkan Customer Baru</a>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nama Pembeli</th>
							<th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Edit Data</th>
                            <th>Hapus Data</th>
						</tr>
					</thead>
					<tbody>
						@foreach(App\pembeli::all() as $customer)
						<tr>
                            <td>{{ $customer->nm_pembeli}}</td>
                            <td>{{ $customer->jenis_kelamin }}</td>
							<td>{{ $customer->alamat }}</td>
                            <td>{{ $customer->kota }}</td>
                            <td><a href="/customer/edit/{{ $customer->id }}">Edit</a></td>
                            <td><a href="/customer/hapus/{{ $customer->id }}">Hapus</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
                
			</div>
		</div>
	</div>

    
</body>
</html>