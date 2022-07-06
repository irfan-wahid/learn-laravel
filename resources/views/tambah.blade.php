<!DOCTYPE html>
<html>

@extends('template')

@section('konten')
    <head>
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
                <h3 class="text-center">Tambah Pegawai</h3>
                <br/>
                <br/>
                <div class="text-center">
                    <form action="/karyawan/store" method="post">
                        {{ csrf_field() }}
                        Nama <br/><input type="text" name="nama" required="required"> <br/><br/>
                        NPA <br/><input type="text" name="npa" required="required"> <br/><br/>
                        Alamat <br/><textarea name="alamat" required="required"></textarea> <br/>
                        <input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
                        <a href="/karyawan"> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    </body>
    @endsection
</html>