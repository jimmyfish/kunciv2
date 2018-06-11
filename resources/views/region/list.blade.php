@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Region') }}</div>

                <div class="card-body">
                    <p><a href="{{ route('create_region') }}" class="btn btn-primary">Buat Baru</a></p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Region</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($region as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_region }}</td>
                                    <td>
                                        <a href="{{ route('edit_region', ['id' => $item->id ]) }}">EDIT</a>
                                        <a href="{{ route('delete_region', ['id' => $item->id ]) }}">HAPUS</a>
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
