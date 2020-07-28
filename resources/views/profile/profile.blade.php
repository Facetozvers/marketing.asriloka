@extends('layouts.header')
@section('title', $user->name.' - Agen PT.BAF')
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
                    <div class="col-md-4">
                        <img src="https://www.cobdoglaps.sa.edu.au/wp-content/uploads/2017/11/placeholder-profile.jpg" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="author">
                                <h5 class="title mb-0">{{$user->name}}</h5>
                                <p class="description">Marketing PT.BAF</p>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Email : <br>
                                    {{$user->email}}
                                </p>
                                <hr>
                                <p>Kode Referral : <br>
                                    {{$user->referral_code}}                     
                                </p>
                                <hr>
                                </div>
                                <div class="col-6">
                                <p>HP : <br>
                                    {{$user->phone_number}}
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h4 class="card-title">Katalog Saya</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
            @foreach($listings as $listing)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://icon-library.com/images/photo-placeholder-icon/photo-placeholder-icon-7.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$listing->nama_listing}}</h5>
                            <p class="card-text">{{$listing->kota}}, {{$listing->wilayah}}</p>
                            <p class="card-category">{{$listing->id}}</p>
                            <a href="#" class="btn btn-primary">Kunjungi</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection