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
                <h3 class="card-title">Upload Bukti Akad</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-info" data-notify="container">
                    <span data-notify="message">MOHON DIPERHATIKAN!! <br>
                    Halaman ini merupakan halaman untuk melakukan upload bukti transaksi AKAD yang dilakukan oleh PELISTING<br>
                    Validasi pencairan maksimal 14 hari kerja setelah dana masuk ke rekening PT.BAF dari pemilik aset.<br>
                </div>
                
                <h5>Upload Bukti Transaksi :</h5>
                <p>Nomor Transaksi : {{$transaksi->no_transaksi}}</p>
                    <form action="/transaction/akad/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                        <h5>Bukti Akad :</h5>
                        <input type="file" name="bukti_transaksi" required><br><br><br>
                        <h5>Bukti Transfer Fee PT.BAF : </h5>
                        <input type="file" name="bukti_BAF" required><br>
                        <input type="hidden" name="token" value="{{Auth::user()->token}}">
                        <input type="hidden" name="no_transaksi" value="{{$transaksi->id}}">
                        <input type="hidden" name="lister_id" value="{{$transaksi->lister_id}}">
                        <button type="submit" class="btn btn-success" name="submit">Upload</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection