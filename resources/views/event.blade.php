<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>List Event</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Event
                </div>
                <div class="card-body">
                    <a href="/event/tambah" class="btn btn-primary">Input Event Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Event</th>
                                <th>Lokasi Event</th>
                                <th>Tanggal Event</th>
                                <th>Keterangan</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($event as $p)
                            <tr>
                                <td>{{ $p->nama_event }}</td>
                                <td>{{ $p->lokasi_event }}</td>
                                <td>{{ $p->tanggal_event }}</td>
                                <td>{{ $p->keterangan }}</td>
                                <td>
                                    <a href="/event/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/event/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>