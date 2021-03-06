@extends('layouts.header')
@section('title', 'Koneksi')
@section('navbar-title', 'Koneksi')
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
                        <h4 class="card-title">Upline Saya</h4>
                    </div>
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
                            <p>Nama : <br>
                            {{$upline->name}}
                            </p>
                            <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>No. Marketing : <br>
                                    {{$upline->no_kepegawaian}}
                                </p>
                                <hr>
                                <p>HP : <br>
                                {{$upline->phone_number}}
                                </p>
                                <hr>
                            </div>
                            <div class="col-6">
                            <p>Email : <br>
                                {{$upline->email}}
                            </p>
                            <hr>
                            <p>Kode Referral : <br>
                                {{$upline->referral_code}}
                            </p>
                            <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Downline Saya</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                No. Marketing
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                HP
                            </th>
                            <th>
                                Level
                            </th>
                            <th class="text-right">
                                
                            </th>
                        </thead>
                        <tbody>
                        @foreach($downlines as $downline)
                            <tr>
                                <td>
                                    {{$downline->no_kepegawaian}}
                                </td>
                                <td>
                                    {{$downline->name}}
                                </td>
                                <td>
                                    {{$downline->email}}
                                </td>
                                <td>
                                    {{$downline->phone_number}}
                                </td>
                                <td>
                                    {{$downline->level}}
                                </td>
                                <td class="text-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                        <i class="now-ui-icons loader_gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="https://marketing.asriloka.com/u/{{$downline->no_kepegawaian}}">Kunjungi Profile</a>
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