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
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title"> Listing Saya</h4>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-primary float-right" href="/listing/new">Request Baru</a>
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
                                ID Properti
                            </th>
                            <th style="width:45%">
                                Judul
                            </th>
                            <th>
                                Tanggal Request
                            </th>
                            <th>
                                Status
                            </th>
                            <th class="text-right">
                                
                            </th>
                        </thead>
                        <tbody>
                        @foreach($listings as $listing)
                            <tr>
                                <td>
                                    {{$listing->id_properti}}
                                </td>
                                <td>
                                    {{$listing->nama_listing}}
                                </td>
                                <td>
                                    {{$listing->created_at->format('j F Y')}}
                                </td>
                                <td>
                                    {{$listing->Approval}}
                                </td>
                                <td class="text-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                        <i class="now-ui-icons loader_gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/listing/detail/{{$listing->id}}">Lihat Detail</a>
                                        <a class="dropdown-item {{$listing->Approval === 'Pending' ? 'disabled' : ''}}" {{$listing->Approval != "Pending" ? "href=https://asriloka.com/properti/$listing->id_properti" : ""}}>Kunjungi Laman</a>
                                        <a class="dropdown-item {{$listing->Approval === 'Pending' ? 'disabled' : ''}}" {{$listing->Approval != "Pending" ? "href=https://asriloka.com/properti/$listing->id_properti?ref=".$ref->ref : ""}}>Kunjungi Laman Sebagai Marketing</a>
                                        <a class="dropdown-item {{$listing->Approval === 'Pending' ? 'disabled' : ''}} {{$listing->Approval === 'Sold Out' ? 'disabled' : ''}}" {{$listing->Approval == "Approved" ? "href=/listing/sold/$listing->id" : ""}}>Ubah Menjadi Sold Out</a>
                                        <a class="dropdown-item {{$listing->Approval === 'Pending' ? 'disabled' : 'text-success'}} {{$listing->Approval === 'Sold Out' ? 'disabled' : ''}}" {{$listing->Approval == "Approved" ? "href=/listing/upload/$listing->id" : ""}}>Upload Bukti Transaksi</a>
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