@extends('layouts.header')
@section('title', 'Listing Saya')
@section('navbar-title', 'Listing')
@section('panel')
    <div class="panel-header panel-header-sm">
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <p class="card-category"><a href="/listing"><i class="now-ui-icons arrows-1_minimal-left"></i> Kembali</p></a>
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="card-title"> Edit Gambar</h4>
                        <p>ID Listing : {{$data->id_properti}}</p>
                    </div>
                    <div class="col-md-3">
                        <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                            <label for="">Upload image baru</label><br>
                            <input type="file" name="gambar" required>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
                    @if(Session::has('message'))
                    <div class="alert {{Session::GET('alert-class')}} alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ Session::get('message') }}</strong>
                    </div>
                    @endif
            </div>
            <div class="card-body">
                <label>Note : Di website, Gambar berurutan dari kiri ke kanan</label>
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-md-4">
                            <div class="card">
                                <img style="height:350px" src="/{{$data->picUrl}}/{{$image->getFilename()}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <form action="/deleteImage" method="POST">
                                @csrf
                                    <input type="hidden" name="listing_id" value="{{$data->listing_id}}">
                                    <input type="hidden" name="namaFile" value="{{$image->getFilename()}}">
                                    <button type="submit" class="btn btn-danger"><i style="color:white" class="fa fa-trash"></i></button>
                                </form>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection