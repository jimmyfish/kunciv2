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
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $pengguna->nama }}">
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
