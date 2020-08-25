@extends('layouts.header')
@section('title', 'Upload Profile Picture')
@section('navbar-title', 'Profile')
@section('panel')
    <div class="panel-header panel-header-sm">
    </div>
@endsection
@section('content')
<div class="row">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <p>Tekan tombol untuk upload foto profile <br>
                        Foto harus berupa image .png/.jpg/.jpeg. Max size 3MB</p>
                            <form action="/profile/upload_proses" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="pic" accept="image/x-png,image/jpg,image/jpeg" required><br>
                                <input type="hidden" name="no_kepegawaian" value="{{$data['no_kepegawaian']}}">
                                <input type="hidden" name="id" value="{{$data['id']}}">
                                <button type="submit" class="mt-4 btn btn-primary">Simpan</button>
                            </form>
                    </div>

                    <div class="mt-2 col-12">
                        <p>Atau<br>
                        Tekan tombol untuk menghapus foto profile</p>
                            <form action="/profile/delete_pic" method="POST">
                                @csrf
                                <input type="hidden" name="no_kepegawaian" value="{{$data['no_kepegawaian']}}">
                                <input type="hidden" name="id" value="{{$data['id']}}">
                                <button type="submit" class="mt-0 btn btn-danger">Hapus Foto Profile</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection