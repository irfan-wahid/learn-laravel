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
                        <h3 class="text-center">Edit Pegawai</h3>

                        <div class=text-center>
                            @foreach($karyawan as $p)
                            <form action="/karyawan/update" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $p->id }}"> <br/><br/>
                                <input type="hidden" name="npa" value="{{ $p->npa }}"> <br/><br/>
                                Nama <br/><input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
                                Alamat <br/><textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
                                <input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
                            </form>
                            @endforeach
                            <a href=/karyawan>Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        @endsection
    <hmtl>