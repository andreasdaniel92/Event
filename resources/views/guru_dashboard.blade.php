@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">


        <div class="row">

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Sekolah NSR</h4>
                        <p class="card-category">Daftar guru</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <tr>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($guru as $g)
                                <tr>
                                    <td>{{ $g->nama }}</td>
                                    <td>{{ $g->umur }}</td>
                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
    });
</script>
@endpush