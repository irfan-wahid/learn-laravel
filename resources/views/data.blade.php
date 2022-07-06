<!DOCTYPE html>
<html>
@extends('template')

@section('konten')    
<head>
	<title>Latihan CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Data Pegawai</h3>
                <br/>
                <form action="/karyawan/cari" method="GET">
                    <input type="text" name="cari" placeholder="Inputkan nama yang akan dicari" value="{{ old('cari') }}">
                    <input type="submit" value="CARI">
                </form>
                <br/>
                <a href="/karyawan/tambah"> Tambah Karyawan Baru</a>
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>NPA</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($karyawan as $k)
                    <tr>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->npa }}</td>
                        <td>{{ $k->alamat }}</td>
                        <td>{{ $k->pekerjaan->nama_pekerjaan }}</td>
                        <td><a class="btn btn-danger btn-sm" href="/karyawan/delete/{{$k->id}}">Hapus</a>
                        <a class="btn btn-warning btn-sm" href="/karyawan/edit/{{$k->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                        
                </table>
                Halaman : {{ $karyawan->currentPage() }}<br/>
                Jumlah Data : {{ $karyawan->total() }} <br/><br/>
                {{ $karyawan->links() }}
            </div>
        </div>
    </div>
 
 
</body>
@endsection
</html>