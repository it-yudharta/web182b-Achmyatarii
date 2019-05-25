
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Koleksi Butik
                <a class="btn btn-success float-right" href="/koleksi/tambah" role="button">Tambah</a>
                </div>

                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Desainer</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $koleksis as $item )
                        <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->jenis}}</td>
                        <td>{{$item->brand}}</td>
                        <td>{{$item->desainer}}</td>
                        <td>{{$item->harga}}</td>
                        <td>
                        <a class="btn btn-warning" href="/koleksi/{{$item->id}}/edit" role="button">Edit</a>
                        <a class="btn btn-danger" href="/koleksi/{{$item->id}}/hapus" role="button">Hapus</a>
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
