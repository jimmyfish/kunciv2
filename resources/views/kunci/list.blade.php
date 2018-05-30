@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Kunci') }}</div>

                <div class="card-body">
                    <p><a href="{{ route('buat_kunci') }}" class="btn btn-primary">Buat Baru</a></p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Tersedia</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kunci as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_lokasi }}</td>
                                    @if ($item->is_available == 1)
                                        <td><span class="badge badge-success">Ya</span></td>
                                    @else
                                        <td><span class="badge badge-warning">Tidak</span></td>
                                    @endif
                                    <td>
                                        <a href="{{ route('edit_kunci', ['id' => $item->id ]) }}" class="text-primary"><i class="fa fa-pencil"></i></a>&nbsp;
                                        <a href="{{ route('hapus_kunci', ['id' => $item->id ]) }}" class="text-danger"><i class="fa fa-trash"></i></a>
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
