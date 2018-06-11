@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Pengguna') }}</div>

                <div class="card-body">
                    <form action="" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $pengguna->nama }}">
                        </div>
                        <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control">{{ $pengguna->alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No. Telp</label>
                                <input type="text" name="no_telp" id="no_telp" class="form-control" value="{{ $pengguna->no_telp }}">
                            </div>
                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
