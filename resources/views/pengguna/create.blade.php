@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Buat Pengguna') }}</div>

                <div class="card-body">
                    <form action="" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="region_id">Region</label>
                            <select name="region_id" id="region_id" class="form-control">
                                @foreach ($region as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_region }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No. Telp</label>
                            <input type="text" name="no_telp" id="no_telp" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Daftarkan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
