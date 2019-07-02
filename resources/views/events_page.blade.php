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
                    
                </div>
                <div class="card-body">
                   
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Event</th>
                                <th>Lokasi Event</th>
                                <th>Tanggal Event</th>
                                <th>Keterangan</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($event as $p)
                            <tr>
                                
                                <td> <a href="{{ route('event.search', [$p->nama_event]) }}" id="nama_event">{{$p->nama_event}}</a> </td>
                                <td>{{ $p->lokasi_event }}</td>
                                <td>{{ $p->tanggal_event }}</td>
                                <td>{{ $p->keterangan }}</td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>