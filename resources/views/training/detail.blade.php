@extends('layouts.header')
@section('title', 'Detail Training - '.$training->id)
@section('navbar-title', 'Training')
@section('panel')
    <div class="panel-header panel-header-sm">
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <p class="card-category"><a href="/training"><i class="now-ui-icons arrows-1_minimal-left"></i> Kembali</p></a>
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Detail Training</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    <p>Judul : <br>
                    {{$training->judul}}
                    </p>
                    <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Materi : <br>
                            {{$training->materi}}
                        </p>
                        <hr>
                        <p>Lokasi : <br>
                        {{$training->lokasi}}
                        </p>
                        <hr>
                        <p>Waktu Pelaksanaan : <br>
                        {{date('H:i', strtotime($training->waktu))}}
                        </p>
                        <hr>
                        <p>Level : <br>
                        {{$training->level}}
                        </p>
                        <hr>
                    </div>
                    <div class="col-6">
                    <p>Pemateri : <br>
                        {{$training->pemateri}}
                    </p>
                    <hr>
                    <p>Tanggal Pelaksanaan : <br>
                    {{date('d M Y', strtotime($training->tanggal))}}
                    </p>
                    <hr>
                    <p>Deadline Pendaftaran : <br>
                    {{date('d M Y', strtotime($training->due))}}
                    </p>
                    <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <p>Informasi Tambahan : <br>
                        {!! nl2br(e($training->desc)) !!}
                        </p>
                        <hr>
                    </div>
                </div>
                <form action="/training/daftar" method="POST">
                @csrf
                    <input type="hidden" name="token" value="{{Auth::user()->token}}">
                    <input type="hidden" name="id" value="{{$training->id}}">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection