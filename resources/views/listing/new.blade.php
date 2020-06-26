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
                    <div class="col-8">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
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
                    <div class="col-6">
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
                    <div class="col-6">
                        <div class="form-group">
                            <label>Tipe Penjualan</label>
                            <select class="form-control" id="sel1">
                                <option selected>Jual</option>
                                <option>Sewa</option>
                                <option>Jual / Sewa</option>
                            </select> 
                        </div>
                    </div>
                </div>
                <p class="pt-3">Lokasi</p>
                <div class="row">
                    <div class="col-6">
                        <label>Kota</label>
                        <select class="form-control" id="sel1">
                            <option selected>Jual</option>
                            <option>Sewa</option>
                            <option>Jual / Sewa</option>
                        </select>
                    </div>                
                    <div class="col-6">
                        <label>Wilayah</label>
                        <select class="form-control" id="sel1">
                            <option selected>Jual</option>
                            <option>Sewa</option>
                            <option>Jual / Sewa</option>
                        </select>
                    </div>  
                    <div class="col-12 pt-2">
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>              
                </div>
                <p class="pt-3">Kelengkapan Rumah</p>
                <div class="row">
                    <div class="col-3">
                        <label>Kamar Tidur</label>
                        <input type="text" placeholder="Banyak kamar" class="form-control">
                    </div>                
                    <div class="col-3">
                        <label>Kamar Mandi</label>
                        <input type="text" placeholder="Banyak kamar" class="form-control">
                    </div>                
                    <div class="col-3">
                        <label>Kapasitas Garasi (isi 0 jika tidak ada)</label>
                        <input type="text" placeholder="Kapasitas garasi" class="form-control">
                    </div>                
                    <div class="col-3">
                        <label>Luas Tanah (m<sup>2</sup>)</label>
                        <input type="text" placeholder="Luas tanah" class="form-control">
                    </div>               
                </div>
            </div>
        </div>     
    </div>
</div>
@endsection