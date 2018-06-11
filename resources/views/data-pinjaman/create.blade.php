@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Buat Data Pinjaman') }}</div>

                <div class="card-body">
                    <form action="" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="nama_pengguna">Nama Pengguna : </label>
                            <select name="nama_pengguna" id="nama_pengguna" class="form-control">
                                <option value="null">-- Pilih Pengguna --</option>
                                @foreach ($pengguna as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group hide" id="kunci-container">
                            <label for="nama_kunci">Nama Kunci : </label>
                            <select name="nama_kunci" id="nama_kunci" class="form-control">
                                <option value="null">NULL</option>
                            </select>
                            <span class="text-danger hide" id="error"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Pinjam" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customJS')
    <script src="{{ asset('js/data-pinjaman.min.js') }}"></script>
@endsection