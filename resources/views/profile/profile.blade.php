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
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
				@endif
                <div class="row">
                    <div class="col-md-3">
                        @isset($profilePic)
                            <img class="profile-picture" src="profile_pic/{{Auth::user()->no_kepegawaian}}/{{$profilePic}}" alt="">
                        @else
                            <img class="profile-picture" src="https://www.cobdoglaps.sa.edu.au/wp-content/uploads/2017/11/placeholder-profile.jpg" alt="">
                        @endisset
                        <button class="btn btn-primary" type="submit" form="upload_pic">Ubah Foto Profile</button>
                        <form action="profile/upload" method="POST" id="upload_pic">
                            @csrf
                            <input type="hidden" value="{{Auth::user()->no_kepegawaian}}" name="no_kepegawaian">
                            <input type="hidden" value="{{Auth::user()->id}}" name="id">
                        </form>
                    </div>
                    <div class="col-md-9">
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
                <a href="https://www.asriloka.com/properti/{{$listing->id_properti}}" style="color:black">
                    <div class="card" style="border:solid 1px #d3d3d3; height:95%">
                        <img class="card-img-top" src="https://marketing.asriloka.com/public/listing_pic/{{$listing->id}}/{{$listing->coverImg}}" alt="Gambar Properti">
                        <div class="card-body">
                            <h5 class="card-title">{{$listing->nama_listing}}</h5>
                            <p class="card-text">{{$listing->kota}}, {{$listing->wilayah}}</p>
                            <p class="card-category">{{$listing->id_properti}}</p>
                            
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection