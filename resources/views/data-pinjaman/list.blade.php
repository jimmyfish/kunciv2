@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Kunci') }}</div>

                <div class="card-body">
                    @if (Session::has('status'))
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ Session::get('status') }}
                        </div>
                    @endif
                    
                    <p>
                        <a href="{{ route('create_data_pinjaman') }}" class="btn btn-primary">Pinjam</a>
                        <a href="{{ route('kembalikan_data_pinjaman') }}" class="btn btn-success">Pengembalian</a>
                    </p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pengguna</th>
                                <th>Nama Kunci</th>
                                <th>Waktu Pinjam</th>
                                <th>Waktu Kembali</th>
                                <th>Sudah Kembali ?</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->pengguna->nama }}</td>
                                    <td>{{ $item->kunci->nama_lokasi }} - {{ $item->kunci->keterangan }}</td>
                                    <td>{{ $item->waktu_pinjam }}</td>
                                    <td>{{ $item->waktu_kembali }}</td>
                                    <td>
                                        @if ($item->is_proccessed == 0)
                                            <span class="badge badge-warning">Tidak</span>
                                        @else
                                            <span class="badge badge-success">Ya</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
