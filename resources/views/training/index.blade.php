@extends('layouts.header')
@section('title', 'Jadwal Training')
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
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title"> Jadwal Training</h4>
                        <h4 class="card-category"> Training yang diadakan oleh PT.BAF</h4>
                    </div>
                </div>
                    @if(Session::has('message'))
                    <div class="alert {{Session::GET('alert-class')}} alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ Session::get('message') }}</strong>
                    </div>
                    @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                Judul Training
                            </th>
                            <th>
                                Level
                            </th>
                            <th>
                                Tanggal Pelaksanaan
                            </th>
                            <th>
                                Lokasi
                            </th>
                            <th class="text-right">
                                
                            </th>
                        </thead>
                        <tbody>
                        @foreach($trainings as $training)
                            <tr>
                                <td>
                                    {{$training->judul}}
                                </td>
                                <td>
                                    {{$training->level}}
                                </td>
                                <td>
                                    {{date('d M Y', strtotime($training->tanggal))}}, <strong>{{date('H:i', strtotime($training->waktu))}}</strong>
                                </td>
                                <td>
                                    {{$training->lokasi}}
                                </td>
                                <td class="text-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                        <i class="now-ui-icons loader_gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/training/detail/{{$training->id}}">Lihat Detail</a>
                                        <button form="daftar{{$training->id}}" class="dropdown-item" type="submit">Daftar</button>
                                        <form id="daftar{{$training->id}}" action="/training/daftar" method="POST">
                                        @csrf
                                        <input type="hidden" name="token" value="{{Auth::user()->token}}">
                                        <input type="hidden" name="id" value="{{$training->id}}">
                                    </form>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection