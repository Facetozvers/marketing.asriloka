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
                <h3 class="card-title">Detail Listing</h3>
                <p class="card-category"> ID listing : {{$listings->id}}</p>
            </div>
            <div class="card-body">
                <h5>Informasi Properti</h5>
                <div class="row">
                    <div class="col-6">
                        <p>Judul : <br>
                        <a target="_blank" href="https://asriloka.com/properti/{{$listings->id}}">{{$listings->nama_listing}}</a>
                        </p>
                        <hr>
                        <p>Sertifikat : <br>
                        {{$listings->statusTanah}}
                        </p>
                        <hr>
                        <p>Kota : <br>
                        {{$listings->kota}}
                        </p>
                        <hr>
                        <p>Tipe Penjualan : <br>
                        {{$listings->TipePenjualan}}
                        </p>
                        <hr>
                        <p>Kamar Tidur : <br>
                        {{$listings->kamar}}
                        </p>
                        <hr>
                        <p>Garasi : <br>
                        {{$listings->garasi}} Mobil
                        </p>
                        <hr>
                    </div>
                    <div class="col-6">
                    <p>Jenis : <br>
                        {{$listings->jenis_listing}}
                    </p>
                    <hr>
                    <p>Alamat : <br>
                        {{$listings->alamat_detail}}
                    </p>
                    <hr>
                    <p>Wilayah : <br>
                        {{$listings->wilayah}}
                        </p>
                        <hr>
                    <p>Harga : <br>
                       Rp. {{number_format($listings->harga, 0)}}
                    </p>
                    <hr>
                    <p>Kamar Mandi : <br>
                        {{$listings->kamar_mandi}}
                    </p>
                    <hr>
                    <p>Luas : <br>
                        {{$listings->luas}} m<sup>2<sup>
                    </p>
                    <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <p>Deskripsi : <br>
                        {!! nl2br(e($listings->desc)) !!}
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Fasilitas</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p>Air :<br>
                        {{$listings->air}}
                        </p>
                        <hr>
                        <p>Perabotan :<br>
                        {{$listings->perabotan}}
                        </p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <p>Daya Listrik :<br>
                        {{$listings->daya_listrik}}
                        </p>
                        <hr>
                        <p>Jenis Lantai :<br>
                        {{$listings->jenis_lantai}}
                        </p>
                        <hr>
                    </div>
                    <div class="col-12">
                    <p>Lainnya :<br>
                        @if($listings->carport)
                            Carport, 
                        @endif
                        @if($listings->garden)
                            Taman, 
                        @endif
                        @if($listings->gym)
                            Gym, 
                        @endif
                        @if($listings->swimming_pool)
                            Kolam Renang, 
                        @endif
                        @if($listings->security)
                            Security, 
                        @endif
                        @if($listings->restaurant)
                            Restaurant, 
                        @endif
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection