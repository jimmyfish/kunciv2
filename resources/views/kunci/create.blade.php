@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Buat Kunci') }}</div>

                <div class="card-body">
                    <form action="" method="post">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="nama_lokasi" id="nama_lokasi" class="form-control">
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
