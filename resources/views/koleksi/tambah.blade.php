@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Koleksi </div>

                <div class="card-body">
                <form method="GET" action="/koleksi/store">

                <div class="form-group row">
                            <label for="jenis" class="col-md-4 col-form-label text-md-right">{{ __('Jenis') }}</label>

                            <div class="col-md-6">
                                <input id="jenis" type="text" class="form-control" name="jenis" value="{{ old('jenis') }}" placeholder="Masukkan Jenis">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}</label>

                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" name="brand" value="{{ old('brand') }}" placeholder="Masukkan Brand">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="desainer" class="col-md-4 col-form-label text-md-right">{{ __('Desainer') }}</label>

                            <div class="col-md-6">
                                <input id="desainer" type="text" class="form-control" name="desainer" value="{{ old('desainer') }}" placeholder="Masukkan Desainer">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                                <input id="harga" type="text" class="form-control" name="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
