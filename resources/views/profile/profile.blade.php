@extends('layouts.header')
@section('title', 'Nama')
@section('navbar-title', 'Profile')
@section('panel')
    <div class="panel-header panel-header-sm">
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
    <div class="card card-user">
            <div class="image">
                
            </div>
            <div class="card-body">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="../assets/img//mike.jpg" alt="...">
                        <h5 class="title">Mike Andrew</h5>
                    </a>
                    <p class="description">
                        michael24
                    </p>
                </div>
                <p class="description text-center">
                    "Lamborghini Mercy
                    <br> Your chick she so thirsty
                    <br> I'm in that two seat Lambo"
                </p>
            </div>
            <hr>
            <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-google-plus-g"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection