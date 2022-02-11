<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h4>Laporan E-Tamu Dinas</h4>
	</center>

	<table class='table table-bordered'>
        <thead>
            <tr>
                <th style="text-align:center">NO</th>
                <th style="text-align:center">NOMOR SURAT</th>
                <th style="text-align:center">PENERIMA KUNJUNGAN</th>
                <th style="text-align:center">SIFAT</th>
                <th style="text-align:center">PERIHAL</th>
                <th style="text-align:center">TANGGAL</th>
                <th style="text-align:center">DURASI</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($kunjungans as $p)
            <tr>
                <td style="text-align:center">{{ $p->id}}</td>
                <td style="text-align:center">{{ $p->nsurat}}</td>
                <td style="text-align:center">{{ $p->penerima}}</td>
                <td style="text-align:center">{{ $p->sifat}}</td>
                <td style="text-align:center">{{ $p->perihal}}</td>
                <td style="text-align:center">{{ $p->tanggal}}</td>
                <td style="text-align:center">{{ $p->durasi}}</td>
            </tr>
        @endforeach
        </tbody>
	</table>

</body>
</html>