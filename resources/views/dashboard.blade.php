@extends('layouts.header')
@section('title', 'Dashboard')
@section('navbar-title', 'Dashboard')
@section('panel')
    <div class="panel-header">
        <div class="header text-center">
            <h2 class="title">Selamat Datang</h2>
            <p class="category">Asriloka Marketing Management System</p>
        </div>
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="card-category">Listing Properti</h5>
                <h5 class="card-title">Listing Terbaru Anda</h5>
            </div>
            <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th >
                    Judul
                  </th>
                  <th >
                    Tanggal Request
                  </th>
                  <th >
                    Status
                  </th>
                </thead>
                <tbody>
                @foreach($listings as $listing)
                  <tr >
                    <td >
                      <a href="https://www.asriloka.com/properti/{{$listing->id_properti}}" target="_blank">{{$listing->nama_listing}}</a>
                    </td>
                    <td >
                      {{$listing->created_at->format('j F Y')}}
                    </td>
                    <td >
                      {{$listing->Approval}}
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="card-category">Transaksi</h5>
                <h4 class="card-title">Status Transaksi Anda</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th >
                    No. Transaksi
                  </th>
                  <th >
                    Status
                  </th>
                </thead>
                <tbody>
                @foreach($transactions as $transaksi)
                  <tr >
                    <td >
                      {{$transaksi->no_transaksi}}
                    </td>
                    <td >
                      {{$transaksi->status}}
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              @if($transactions->count() == 0)
                <p>Tidak ada transaksi terbaru</p>
              @endif
            </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-category">Training</h5>
        <h4 class="card-title">Training yang akan datang</h4>
      </div>
      <div class="card-body">
        <div class="table-full-width table-responsive">
          <table class="table">
          <thead class=" text-primary">
            <th >
              Judul
            </th>
            <th >
              Tanggal
            </th>
            <th >
              Level
            </th>
            <th>
            
            </th>
          </thead>
            <tbody>
            @foreach($trainings as $training)
              <tr>
                <td >
                  {{$training->judul}}
                </td>
                <td >
                  {{$training->tanggal}}
                </td>
                <td >
                  {{$training->level}}
                </td>
                <td class="text-right">
                  <div class="dropdown">
                      <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                          <i class="now-ui-icons loader_gear"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="/listing/detail/{{$listing->id}}">Lihat Detail</a>
                      </div>
                  </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer">
        @if($trainings->count() == 0)
        <p>Belum ada jadwal training baru</p>
        @endif
        
      </div>
  </div>
  </div>
</div>
@endsection
