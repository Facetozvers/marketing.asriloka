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
                <p class="card-category"><a href="/listing/all"><i class="now-ui-icons arrows-1_minimal-left"></i> Kembali</p></a>
                <h3 class="card-title">Upload Bukti Closing</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-info" data-notify="container">
                    <span data-notify="message">MOHON DIPERHATIKAN!! <br>
                    Halaman ini merupakan halaman untuk melakukan upload bukti transaksi CLOSING yang dilakukan PESELLING<br>
                    <br>
                    Ketidaksesuaian dengan instruksi diatas akan menyebabkan kesalahan pada pembagian hasil nantinya, maka diharapkan untuk melakukan koordinasi dengan pihak - pihak yang terkait sebelum melakukan upload
                    </span>
                </div>
                
                <h5>Upload Bukti Transaksi :</h5>
                <p>ID Properti : {{$listing->id_properti}}</p>
                    <form action="/listing/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Nama Pembeli</label>
                                <input type="text" class="form-control" name="pembeli" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Harga Terjual</label>
                                <input type="text" class="form-control" name="harga_jual" required>
                            </div>
                        </div>
                    </div>
                        <label> Bukti Transaksi :</label><br>
                        <input type="file" name="bukti_transaksi" required><br>
                        <input type="hidden" name="token" value="{{Auth::user()->token}}">
                        <input type="hidden" name="listing_id" value="{{$listing->id}}">
                        <button type="submit" class="btn btn-success" name="submit">Upload</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection