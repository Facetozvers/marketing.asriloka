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
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
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
                        @foreach($listings as $listing)
                        <tbody>
                            <tr>
                                <td>
                                    {{$listing->nama_listing}}
                                </td>
                                <td>
                                    {{$listing->created_at}}
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
                                        <a class="dropdown-item" href="listing/detail/{{$listing->id}}">Lihat Detail</a>
                                        <a class="dropdown-item" href="https://asriloka.com/properti/{{$listing->id}}">Kunjungi Laman</a>
                                        <a class="dropdown-item" href="#">Request Update</a>
                                        <a class="dropdown-item" href="#">Upload Bukti Transaksi</a>
                                        <a class="dropdown-item text-danger" href="#">Lapor</a>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection