@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Pengguna') }}</div>

                <div class="card-body">
                    <p><a href="{{ route('create_pengguna') }}" class="btn btn-primary">Buat Baru</a></p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Region</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengguna as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_telp }}</td>
                                    <td>{{ $item->region->nama_region }}</td>
                                    <td>
                                        <a href="{{ route('edit_pengguna', ['id' => $item->id ]) }}">EDIT</a>
                                        <a href="{{ route('delete_pengguna', ['id' => $item->id ]) }}">HAPUS</a>
                                        {{-- <a href="{{ route('hapus_pengguna', ['id' => $item->id ]) }}" class="text-danger"><i class="fa fa-trash"></i></a> --}}
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
