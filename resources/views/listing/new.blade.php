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
                <form action="">
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
                                <select class="form-control" id="">
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
                                <select class="form-control" id="">
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
                                <select class="form-control" id="">
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
                        <div class="form-group">
                            <label>Kota</label>
                            <select class="form-control" id="">
                                <option selected>Jual</option>
                                <option>Sewa</option>
                                <option>Jual / Sewa</option>
                            </select>
                        </div>
                        </div>                
                        <div class="col-6">
                        <div class="form-group">
                            <label>Wilayah</label>
                            <select class="form-control" id="">
                                <option selected>Jual</option>
                                <option>Sewa</option>
                                <option>Jual / Sewa</option>
                            </select>
                        </div>
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
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Kamar Tidur</label>
                            <input type="text" placeholder="Banyak kamar" class="form-control">
                        </div>
                        </div>                
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Kamar Mandi</label>
                            <input type="text" placeholder="Banyak kamar" class="form-control">
                        </div>                
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Kapasitas Garasi (isi 0 jika tidak ada)</label>
                            <input type="text" placeholder="Kapasitas garasi" class="form-control">
                        </div>                
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Luas Tanah (m<sup>2</sup>)</label>
                            <input type="text" placeholder="Luas tanah" class="form-control">
                        </div>      
                        </div>         
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Perabotan</label>
                            <select class="form-control" id="">
                                <option selected>Unfurnished</option>
                                <option>Furnished</option>
                            </select>
                        </div>            
                        </div>    
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Daya Listrik (Kw/h)</label>
                            <input type="text" class="form-control">
                        </div>           
                        </div>     
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Air</label>
                            <select class="form-control" id="">
                                <option selected>PAM</option>
                                <option>Sumur Tanah</option>
                            </select>
                        </div>
                        </div>                
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Lantai</label>
                            <select class="form-control" id="">
                                <option selected>Keramik</option>
                                <option>Granit</option>
                                <option>Kayu</option>
                            </select>
                        </div>       
                        </div>        
                    </div>
                    <label for="">Fasilitas</label>
                    <div class="row">
                    <div class="col-12">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign">Carport</span>
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign">Kolam Renang</span>
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign">Restoran</span>
                            </label>
                       
                        
                        
                        
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign">Taman</span>
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign">Security</span>
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign">Gym</span>
                            </label>
                        </div>
                        
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Deskripsi Tambahan</label>
                                <textarea style="border: solid 1px grey" class="form-control" name="" id="" cols="30" rows="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>     
    </div>
</div>
@endsection