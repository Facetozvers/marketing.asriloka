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
                <h3 class="card-title">Request Listing Baru</h3>
                <p class="card-category">*lengkapi data - data berikut</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Jenis</label>
                            <select class="form-control" id="sel1">
                                <option selected>Rumah</option>
                                <option>Apartemen</option>
                                <option>Tanah</option>
                                <option>Ruko</option>
                            </select> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Sertifikat</label>
                            <select class="form-control" id="sel1">
                                <option selected>Hak Milik</option>
                                <option>Hak Pakai</option>
                                <option>Girik</option>
                                <option>HGB</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Sertifikat</label>
                            <select class="form-control" id="sel1">
                                <option selected>Hak Milik</option>
                                <option>Hak Pakai</option>
                                <option>Girik</option>
                                <option>HGB</option>
                            </select> 
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
</div>
@endsection