<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nama Pembeli</th>
							<!-- <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Kota</th> -->
							<th>Tanggal</th>
						</tr>
					</thead>
					<tbody>
						@foreach($transaksi as $a)
						<tr>
							<td><?php $transaksi = App\Transaksi::find(1);

echo $transaksi->nm_pembeli; ?></td>
                            <!-- <td>{{ $a->jenis_kelamin }}</td>
							<td>{{ $a->alamat }}</td>
                            <td>{{ $a->kota }}</td> -->
                            <td>{{ $a->tgl_beli}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
                
			</div>
		</div>
	</div>

    
</body>
</html>