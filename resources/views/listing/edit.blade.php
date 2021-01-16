@extends('layouts.header')
@section('title', 'Edit | Listing Saya')
@section('navbar-title', 'Edit Listing')
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
                <h3 class="card-title">Edit Listing</h3>
                <p class="card-category">ID : {{$data->id_properti}}</p>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" value="{{$data->nama_listing}}" class="form-control" name="judul" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Jenis</label>
                                <select class="form-control" id="" name="jenis_listing">
                                    <option value="Rumah" {{$data->jenis_listing == 'Rumah' ? 'selected' : ''}}>Rumah</option>
                                    <option value="Apartemen" {{$data->jenis_listing == 'Apartemen' ? 'selected' : ''}}>Apartemen</option>
                                    <option value="Tanah" {{$data->jenis_listing == 'Tanah' ? 'selected' : ''}}>Tanah</option>
                                    <option value="Ruko" {{$data->jenis_listing == 'Ruko' ? 'selected' : ''}}>Ruko</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Sertifikat</label>
                                <select class="form-control" name="statusTanah" id="">
                                    <option value="Hak Milik" {{$data->statusTanah == 'Hak Milik' ? 'selected' : ''}}>Hak Milik</option>
                                    <option value="Hak Pakai" {{$data->statusTanah == 'Hak Pakai' ? 'selected' : ''}}>Hak Pakai</option>
                                    <option value="Girik" {{$data->statusTanah == 'Girik' ? 'selected' : ''}}>Girik</option>
                                    <option value="HGB" {{$data->statusTanah == 'HGB' ? 'selected' : ''}}>HGB</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Tipe Penjualan</label>
                                <select class="form-control" name="TipePenjualan" id="">
                                    <option value="jual" {{$data->TipePenjualan == 'jual' ? 'selected' : ''}}>Jual</option>
                                    <option value="sewa" {{$data->TipePenjualan == 'sewa' ? 'selected' : ''}}>Sewa</option>
                                    <option value="both" {{$data->TipePenjualan == 'both' ? 'selected' : ''}}>Jual dan Sewa</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Harga</label>
                                <input class="form-control" value="{{$data->harga}}" type="number" name="harga" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Fee untuk PT.BAF (persen)</label>
                                <input class="form-control" value="{{$data->persenan}}" type="number" name="persenan" required>
                            </div>
                        </div>
                    </div>
                    <p class="pt-3">Lokasi</p>
                    <div class="row">
                        <div class="col-6">
                        <div class="form-group">
                            <label>Kota</label>
                            <input class="form-control" value="{{$data->kota}}" type="text" name="kota" placeholder="" required>
                        </div>
                        </div>                
                        <div class="col-6">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input class="form-control" value="{{$data->wilayah}}" type="text" name="wilayah" placeholder="" required>
                        </div>
                        </div>  
                        <div class="col-12 pt-2">
                            <div class="form-group">
                                <label>Alamat Lengkap</label>
                                <input type="text" class="form-control" value="{{$data->alamat_detail}}" name="alamat_detail" required>
                            </div>
                        </div>              
                    </div>
                    <p class="pt-3">Kelengkapan Rumah</p>
                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Kamar Tidur</label>
                            <input type="text" value="{{$data->kamar}}" placeholder="Banyak kamar" name="kamar" class="form-control" required>
                        </div>
                        </div>                
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Kamar Mandi</label>
                            <input type="text" value="{{$data->kamar_mandi}}" placeholder="Banyak kamar" name="kamar_mandi" class="form-control" required>
                        </div>                
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Kapasitas Garasi (isi 0 jika tidak ada)</label>
                            <input type="text" value="{{$data->garasi}}" placeholder="Kapasitas Mobil didalam garasi" name="garasi" class="form-control" required>
                        </div>                
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Luas Tanah (m<sup>2</sup>)</label>
                            <input type="text" value="{{$data->luas}}" placeholder="Luas tanah" name="luas" class="form-control" required>
                        </div>      
                        </div>         
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Perabotan</label>
                            <select class="form-control" name="perabotan" id="">
                                <option value="Unfurnished" {{$data->perabotan == 'Unfurnished' ? 'selected' : ''}}>Unfurnished</option>
                                <option value="Furnished" {{$data->perabotan == 'Furnished' ? 'selected' : ''}}>Furnished</option>
                            </select>
                        </div>            
                        </div>    
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Daya Listrik (W)</label>
                            <input type="text" value="{{$data->daya_listrik}}" class="form-control" name="daya_listrik" required>
                        </div>           
                        </div>     
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Air</label>
                            <select class="form-control" name="air" id="">
                                <option value="PAM" {{$data->air == 'PAM' ? 'selected' : ''}}>PAM</option>
                                <option value="Sumur Tanah" {{$data->air == 'Sumur Tanah' ? 'selected' : ''}}>Sumur Tanah</option>
                            </select>
                        </div>
                        </div>                
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Lantai</label>
                            <select class="form-control" name="jenis_lantai" id="">
                                <option value="Keramik" {{$data->jenis_lantai == 'Keramik' ? 'selected' : ''}}>Keramik</option>
                                <option value="Granit" {{$data->jenis_lantai == 'Granit' ? 'selected' : ''}}>Granit</option>
                                <option value="Kayu" {{$data->jenis_lantai == 'Kayu' ? 'selected' : ''}}>Kayu</option>
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
                                <input class="form-check-input" name="carport" value="1" type="checkbox" {{$data->carport == 1 ? 'checked' : ''}}>
                                <span class="form-check-sign">Carport</span>
                            </label>
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="swimming_pool">
                                <input class="form-check-input" name="swimming_pool" value="1" type="checkbox" {{$data->swimming_pool == 1 ? 'checked' : ''}}>
                                <span class="form-check-sign">Kolam Renang</span>
                            </label>
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="restaurant">
                                <input class="form-check-input" name="restaurant" value="1" type="checkbox" {{$data->restaurant == 1 ? 'checked' : ''}}>
                                <span class="form-check-sign">Restoran</span>
                            </label>
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="garden">
                                <input class="form-check-input" name="garden" value="1" type="checkbox" {{$data->garden == 1 ? 'checked' : ''}}>
                                <span class="form-check-sign">Taman</span>
                            </label>
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="security">
                                <input class="form-check-input" name="security" value="1" type="checkbox" {{$data->security == 1 ? 'checked' : ''}}>
                                <span class="form-check-sign">Security</span>
                            </label>
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="gym">
                                <input class="form-check-input" name="gym" value="1" type="checkbox" {{$data->gym == 1 ? 'checked' : ''}}>
                                <span class="form-check-sign">Gym</span>
                            </label>
                        </div>
                        
                    </div>
                    </div>
                    <label for="">Lain - Lain</label>
                    <div class="row">
                    <div class="col-12">
                        <div class="form-check">
                            <label class="form-check-label pr-3">
                                <input type="hidden" value="0" name="unit_ganda"> <!--Value ketika unchecked -->
                                <input class="form-check-input" name="unit_ganda" value="1" type="checkbox" disabled {{$data->unit_ganda == 1 ? 'checked' : ''}}>
                                <span class="form-check-sign">Unit Ganda</span>
                            </label>
                            <p class="pt-1" style="font-size:12px">*centang jika listing memiliki lebih dari 1 unit</p>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Deskripsi Tambahan</label>
                                <textarea style="border: solid 1px grey" class="form-control" name="desc" id="" cols="30" rows="20" required>{{$data->desc}}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>     
    </div>
</div>

@endsection