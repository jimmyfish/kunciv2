@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pengembalian Kunci') }}</div>

                <div class="card-body">
                    <form action="" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="data_peminjaman">Deskripsi Data Pinjaman : </label>
                            <select name="data_peminjaman" id="data_peminjaman" class="form-control">
                                @foreach ($data as $item)
                                    <option value="{{ $item->id }}">{{ $item->pengguna->nama }} - {{ $item->kunci->nama_lokasi }} ({{ $item->kunci->keterangan }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Perbarui" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
