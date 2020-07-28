@extends('layouts.header')
@section('title', 'Cari Listing')
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
                        <h4 class="card-title">Cari Listing</h4>
                    </div>
                </div>
                <form>
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Cari ID Properti...">
                        <span class="input-group-addon">
                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                        </span>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th style="width:25%">
                                ID Properti
                            </th>
                            <th style="width:45%">
                                Judul
                            </th>
                            <th class="text-right">
                                
                            </th>
                        </thead>
                        <tbody>
                        @foreach($listings as $listing)
                            <tr>
                                <td>
                                    {{$listing->id}}
                                </td>
                                <td>
                                    {{$listing->nama_listing}}
                                </td>
                                <td class="text-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                        <i class="now-ui-icons loader_gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/listing/detail/{{$listing->id}}">Lihat Detail</a>
                                        <a class="dropdown-item {{$listing->Approval === 'Pending' ? 'disabled' : ''}}" {{$listing->Approval != 'Pending' ? 'href=https://asriloka.com/properti/'.$listing->id : ''}}>Kunjungi Laman</a>
                                        <a class="dropdown-item text-success" href="/listing/upload/{{$listing->id}}">Upload Bukti Transaksi</a>
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