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
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Jenis</label>
                                <select class="form-control" id="" name="jenis_listing">
                                    <option value="Rumah" selected>Rumah</option>
                                    <option value="Apartemen">Apartemen</option>
                                    <option value="Tanah">Tanah</option>
                                    <option value="Ruko">Ruko</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Sertifikat</label>
                                <select class="form-control" name="statusTanah" id="">
                                    <option value="Hak Milik" selected>Hak Milik</option>
                                    <option value="Hak Pakai">Hak Pakai</option>
                                    <option value="Girik">Girik</option>
                                    <option value="HGB">HGB</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Tipe Penjualan</label>
                                <select class="form-control" name="TipePenjualan" id="">
                                    <option value="jual" selected>Jual</option>
                                    <option value="sewa">Sewa</option>
                                    <option value="both">Jual dan Sewa</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Harga</label>
                                <input class="form-control" type="number" name="harga" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Fee untuk PT.BAF (persen)</label>
                                <input class="form-control" type="number" name="persenan" required>
                            </div>
                        </div>
                    </div>
                    <p class="pt-3">Lokasi</p>
                    <div class="row">
                        <div class="col-6">
                        <div class="form-group">
                            <label>Kota</label>
                            <input class="form-control" type="text" name="kota" placeholder="" required>
                        </div>
                        </div>                
                        <div class="col-6">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input class="form-control" type="text" name="wilayah" placeholder="" required>
                        </div>
                        </div>  
                        <div class="col-12 pt-2">
                            <div class="form-group">
                                <label>Alamat Lengkap</label>
                                <input type="text" class="form-control" name="alamat_detail" required>
                            </div>
                        </div>              
                    </div>
                    <p class="pt-3">Kelengkapan Rumah</p>
                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Kamar Tidur</label>
                            <input type="text" placeholder="Banyak kamar" name="kamar" class="form-control" required>
                        </div>
                        </div>                
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Kamar Mandi</label>
                            <input type="text" placeholder="Banyak kamar" name="kamar_mandi" class="form-control" required>
                        </div>                
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Kapasitas Garasi (isi 0 jika tidak ada)</label>
                            <input type="text" placeholder="Kapasitas Mobil didalam garasi" name="garasi" class="form-control" required>
                        </div>                
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Luas Tanah (m<sup>2</sup>)</label>
                            <input type="text" placeholder="Luas tanah" name="luas" class="form-control" required>
                        </div>      
                        </div>         
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Perabotan</label>
                            <select class="form-control" name="perabotan" id="">
                                <option value="Unfurnished" selected>Unfurnished</option>
                                <option value="Furnished">Furnished</option>
                            </select>
                        </div>            
                        </div>    
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Daya Listrik (W)</label>
                            <input type="text" class="form-control" name="daya_listrik" required>
                        </div>           
                        </div>     
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Air</label>
                            <select class="form-control" name="air" id="">
                                <option value="PAM" selected>PAM</option>
                                <option value="Sumur Tanah">Sumur Tanah</option>
                            </select>
                        </div>
                        </div>                
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Lantai</label>
                            <select class="form-control" name="jenis_lantai" id="">
                                <option value="Keramik" selected>Keramik</option>
                                <option value="Granit">Granit</option>
                                <option value="Kayu">Kayu</option>
                            </select>
                        </div>       
                        </div>        
                    </div>
                    <label for="">Fasilitas</label>
                    <div class="row">
                    <div class="col-12">
                        <div class="form-check">
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="carport"> <!--Value ketika unchecked -->
                                <input class="form-check-input" name="carport" value="1" type="checkbox">
                                <span class="form-check-sign">Carport</span>
                            </label>
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="swimming_pool">
                                <input class="form-check-input" name="swimming_pool" value="1" type="checkbox">
                                <span class="form-check-sign">Kolam Renang</span>
                            </label>
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="restaurant">
                                <input class="form-check-input" name="restaurant" value="1" type="checkbox">
                                <span class="form-check-sign">Restoran</span>
                            </label>
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="garden">
                                <input class="form-check-input" name="garden" value="1" type="checkbox">
                                <span class="form-check-sign">Taman</span>
                            </label>
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="security">
                                <input class="form-check-input" name="security" value="1" type="checkbox">
                                <span class="form-check-sign">Security</span>
                            </label>
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="gym">
                                <input class="form-check-input" name="gym" value="1" type="checkbox">
                                <span class="form-check-sign">Gym</span>
                            </label>
                        </div>
                        
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Deskripsi Tambahan</label>
                                <textarea style="border: solid 1px grey" class="form-control" name="desc" id="" cols="30" rows="20" required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="btn1">Tambah Gambar</button>
                    <div class="row" id="gambar">
                        <div class="col-3">
                        <div class="form-group" id="pic">
                            <label>Gambar</label>
                            <input type="file" name="gambar[]" class="form-control-file">
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