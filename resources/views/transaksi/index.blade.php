@extends('layouts.header')
@section('title', 'Transaksi Saya')
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
                        <h4 class="card-title">Transaksi Anda</h4>
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
                                No. Transaksi
                            </th>
                            <th>
                                Nama Pembeli
                            </th>
                            <th>
                                ID Properti
                            </th>
                            <th>
                                ID Sales
                            </th>
                            <th>
                                Tanggal Closing
                            </th>
                            <th>
                                Harga Terjual
                            </th>
                            <th>
                                Status
                            </th>
                            <th class="text-right">
                                
                            </th>
                        </thead>
                        <tbody>
                        @foreach($transaksis as $transaksi)
                            <tr>
                                <td>
                                    {{$transaksi->no_transaksi}}
                                </td>
                                <td>
                                    {{$transaksi->pembeli}}
                                </td>
                                <td>
                                    {{$transaksi->listing_id}}
                                </td>
                                <td>
                                    {{$transaksi->sales_id}}
                                </td>
                                <td>
                                    {{$transaksi->created_at->format('j F Y')}}
                                </td>
                                <td>
                                    Rp. {{number_format($transaksi->harga_jual, 0)}}
                                </td>
                                <td>
                                    {{$transaksi->status}}
                                </td>
                                <td class="text-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                        <i class="now-ui-icons loader_gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="https://asriloka.com/properti/{{$transaksi->listing_id}}">Kunjungi Laman Properti</a>
                                        <a class="dropdown-item {{$transaksi->status === 'Closing' ? '' : 'disabled'}}" {{$transaksi->status == "Closing" ? "href=/transaction/akad/$transaksi->id" : ""}}>Upload Bukti Akad</a>
                                        
                                        <a class="dropdown-item text-danger" href="/transaction/decline/{{$transaksi->no_transaksi}}">Batalkan Transaksi</a>
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