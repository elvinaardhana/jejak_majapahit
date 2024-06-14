@extends('layouts.template')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Data Situs Sejarah</h4>
            </div>
            <div class="card-body">
                <table class="table table-secondary table-striped" id="example">
                    <thead class="table-secondary">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>

                            <th>Koordinat</th>
                            <th>Foto</th>
                            <th>Waktu Unggah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach ($points as $p)
                            @php
                                $geometry = json_decode($p->geom);
                            @endphp
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->description }}</td>

                                <td>{{ $geometry->coordinates[1] . ', ' . $geometry->coordinates[0] }}
                                </td>
                                <td><img src="{{ asset('storage/images/' . $p->image) }}" alt="" width="200"></td>
                                <td>{{ date_format($p->created_at, 'D, d M Y, H:i:s') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('script')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');
    </script>
@endsection
