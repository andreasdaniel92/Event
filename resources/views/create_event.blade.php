<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    format: 'Y-m-d'
                    
                });
            });
        </script>
        <title>CREATE EVENT</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/event" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/event/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_event" class="form-control" placeholder="Nama event ..">

                            @if($errors->has('nama_event'))
                            <div class="text-danger">
                                {{ $errors->first('nama_event')}}
                            </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="lokasi_event" class="form-control" placeholder="Lokasi Event .."></textarea>

                            @if($errors->has('lokasi_event'))
                            <div class="text-danger">
                                {{ $errors->first('lokasi_event')}}
                            </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input name="tanggal_event" type="text" class="form-control" placeholder="Tanggal .." id="datepicker">

                        </div>


                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="ket" class="form-control" placeholder="Keterangan Event .."></textarea>

                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value= 1>Aktif</option>
                                <option value="2">Tidak Aktif</option>
                                
                            </select>

                        </div>



                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>