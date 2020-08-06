<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{$user->name}} - Agen PT.BAF</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    
</head>

<body class="">
    <div class="wrapper">
        <div class="main-panel" style="width:100%">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand">Profile Agen PT.BAF</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search.">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.asriloka.com" target="_blank">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class=" d-md-block">Asriloka.com</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                
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
                                <a href="" style="color:black">
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
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="/assets/js/core/jquery.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->

<script src="/assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        $("#btn1").click(function(){
    $("#gambar").append('<div class="col-3"><div class="form-group" id="pic"><label>Gambar</label><input type="file" name="gambar[]" class="form-control-file"></div></div>');
  });
    });
</script>

</html>

