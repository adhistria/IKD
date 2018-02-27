<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}


    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

    <script type="text/javascript" src="{{URL::asset('js/js-webshim/minified/polyfiller.js') }}"></script>

    <style>
        body{
            font-family: 'Noto Serif', serif;}

        @media screen and (max-width: 565px) and (min-width: 300px) {

            .btn{
                padding: 0;
            }
            /*body {*/
                /*font-size: 0.3em;*/
            /*}*/
            /*body {*/
            /*font-size: 1em;*/
            /*}*/
            /*a{*/
            /*font-size: 1em;*/
            /*}*/
            li a{
                font-size: 0.5em;
            }
            #navigatorbar{
                font-size: 0.3em;
            }
            .navbar-brand{
                font-size: 3.5em;
            }

            .nav-link {
                font-size: 0.01em;
                padding-right: 0;
                margin-right: 0;
                color: black;
            }
            .last {
                margin-right: 0;
            }
            /*.flash-message{*/
                /*font-size: 2em;*/
            /*}*/
            /*h3{*/
                /*font-size: 0.5em;*/
            /*}*/
        }







        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            /*background-color: #D9D9D9;*/
            /*background-color: #828081;*/
            background-color: #18121e;
            /*background-color: #111;*/
            /*background-color: #00b8ff;*/
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
            /*color: #818181;*/
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }
        a.navbar-brand{
            margin-left: 1em;
        }
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;

            /*padding: 16px;*/
            /*padding-left: 0;*/
            /*margin-left: 0;*/
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        /*span{*/
            /*margin: 0;*/
        /*}*/

        td.child{
            width: 100%;
            padding-left: 100px;
        }
        .form-title{
            border-top: 3px solid #4abdac;
            border-top-left-radius : 3px;
            border-top-right-radius : 3px;
            padding-top: 2em;
            margin-bottom: 0;
            padding-left: 1em;
            font-size: 18px;
            background-color: #4abdac;
            border-bottom:3px solid #FFFFFF;
            box-shadow : 0 1px 1px rgba(0,0,0,0.1)
            /*background-color: #ffce00;*/
            /*background-color: #dfdce3;*/
        }
        .table-title{
            /*margin-top: 1em;*/
            padding-top: 2em;
            /*background-color: #D9D9D9;*/
            /*text-align: center;*/
            /*margin: 0;*/
            border-top: 3px solid #0375b4;
            border-top-left-radius : 3px;
            border-top-right-radius : 3px;
            margin-bottom: 0;
            padding-bottom: 0;
            padding-left: 1em;
            font-size: 18px;
            /*box-shadow : 0 10px 10px rgba(0,0,0,0.1);*/
            background-color: #0375b4;
            border-bottom:3px solid #FFFFFF;
            box-shadow : 0 1px 1px rgba(0,0,0,0.1)
            /*background-color: #ffce00;*/
            /*background-color: #dfdce3;*/
        }


        form{
            padding: 1em;
            box-sizing: border-box;
            box-shadow : 0 10px 10px rgba(0,0,0,0.1);
        }
        .row{
            margin-top: 1em;
        }
        #navigatorbar {
            box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
            background-color: #f4f4f4;
        }
        .navbar-light .navbar-nav .nav-link{
            color: black;
        }
        #datarent{
            /*padding: 2em;*/
            margin: 0;

            box-sizing: border-box;

            box-shadow : 0 10px 10px rgba(0,0,0,0.1);
        }
        #datarent_wrapper .row {
            margin-top: 0;
            padding: 1em;
            box-sizing: border-box;
            box-shadow : 0 10px 10px rgba(0,0,0,0.1);
        }
        .table-responsive{
            margin-right: 0;
            padding-right: 0;
        }
        .flash-message{
            padding-top: 10px;
        }
        .nav-link {
            padding-right: 20px ;
            color: black;
        }
        .last {
            margin-right: 30px;
        }
        /*input::-webkit-outer-spin-button,*/
        /*input::-webkit-inner-spin-button {*/
             /*display: none;*/
            /*-webkit-appearance: none;*/
            /*margin: 0;*/
        /*}*/
        .table-responsive{
            display : table;
        }
    </style>
</head>
<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{route('cars.index')}}">Home</a>
    <a href="{{route('cars.create')}}">Tambah Data Mobil</a>
    <a href="{{route('register')}}">Tambah Data Admin</a>
    <a href="{{route('editadmin')}}">Hapus Data Admin</a>
    <a href="#">Add Admin</a>
</div>

<div id="main">


    <div id="navigatorbar" >


        <nav class="navbar navbar-light bg-faded justify-content-between flex-nowrap flex-row">
            <span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <a class="navbar-brand mr-auto" href="#">Istana Khanza Darya</a>
            <ul class="nav navbar-nav flex-row">
                {{--<li class="nav-item"><a class="nav-link pr-2" href="#">About</a></li>--}}
                {{--<li class="nav-item"><a class="nav-link pr-2" href="#">Contact</a></li>--}}
                {{--<li class="nav-item"><a class="nav-link pr-2" href="#">Logout</a></li>--}}
                <li class="nav-item"> <a class="nav-link pr-2" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a> </li></ul>
            <div class="collapse navbar-collapse" >
                <ul class="navbar-nav ml-auto">
                    {{--<li class="nav-item ">--}}
                        {{--<a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item ">--}}
                        {{--<a class="nav-link" href="#">Contact</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item ">--}}

                    {{--</li>--}}
                    <li class="nav-item"> <a class="nav-link pr-2" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a> </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
                <button type="button" class="btn last  my-2 my-sm-0" data-toggle="modal" data-target="#loginModal">
                    Login
                </button>
            </div>


        </nav>
    </div>
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div>
    <div id="recentdata" class="container-fluid store">
        <div class="row">
            <div id= "forminput" class="col-md-8 store-data">
                <h3 class="text-left form-title">Store New Data</h3>
                        <form action="{{route('cars.store')}}" method="POST">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="noPolisi">Nomor Polisi</label>
                                <input class="form-control" id="noPolisi" required name = "noPolisi"placeholder="Plat Mobil" maxlength="14" minlength="5">
                            </div>
                            <div class="form-group">
                                <label for="type">Tipe Kendaraan</label>
                                <input class="form-control" id="type" required name = "type" placeholder="Tipe Mobil">
                            </div>
                            <div class="form-group">
                                <label for="namaPemilik">Pemilik Kendaraan</label>
                                <input name="namaPemilik" class="form-control" required id="namaPemilik" placeholder="Pemilik Mobil">
                            </div>
                            <div class="form-group">
                                <label for="namaPenyewa">Nama Perusahaan Penyewa</label>
                                <input name="namaPenyewa" class="form-control" required id="namaPenyewa" placeholder="Perusahaan Penyewa">
                            </div>
                            <div class="form-group">
                                <label for="thnPembuatan">Tahun Pembuatan Mobil</label>
                                <input class="form-control" id="datepicker" required name = "thnPembuatan" placeholder="Tahun Pembuatan Mobil" type="text">
                            </div>
                            <div class="form-group">
                                <label for="thRegistrasi">Tahun Registrasi Mobil</label>
                                <input class="form-control" id="datepicker2" name="thRegistrasi"  required placeholder="Tahun Registrasi Mobil" type="text">
                            </div>
                            <div class="form-group">
                                <label for="noSPK">No SPK</label>
                                <input name="noSPK" class="form-control" id="noSPK" placeholder="No SPK">
                            </div>
                            <div class="form-group">
                                <label for="periodePemakaianKlien">Periode Pemakaian Klien</label>
                                <input class="form-control" id="periodePemakaianKlien" required name = "periodePemakaianKlien" placeholder="Periode Pemakaian Klien">
                            </div>
                            <div class="form-group">
                                <label for="periodePemilikMobil">Periode Pemilik Mobil</label>
                                <input name="periodePemilikMobil" class="form-control" required id="periodePemilikMobil" placeholder="Periode Pemilik Mobil">
                            </div>
                            <div class="form-group">
                                <label for="sopir">Sopir </label>
                                <input name="sopir" class="form-control" id="sopir" placeholder="Sopir Mobil">
                            </div>
                            <div class="form-group">
                                <label for="gaji">Gaji</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp</div>
                                    </div>
                                    <input class="form-control" id="gaji" name = "gaji" placeholder="Gaji" type="number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hargaPenyewa">Harga Penyewa</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp</div>
                                    </div>
                                    <input type="number" name="hargaPenyewa" class="form-control money" required id="hargaPenyewa" placeholder="Harga ke Penyewa" >
                                </div>
                           </div>
                            <div class="form-group">
                                <label for="hargaKePemilik">Harga Ke Pemilik</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp</div>
                                    </div>
                                    <input name="hargaKePemilik" class="form-control" required id="hargaKePemilik" placeholder="Harga Ke Pemilik" type="number">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="gajiDriver">Gaji Driver</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp</div>
                                    </div>
                                    <input name="gajiDriver" class="form-control" required id="gajiDriver" placeholder="Gaji Driver" type="number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="feePihakKe3">Fee Pihak Ke-3</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp</div>
                                    </div>
                                    <input name="feePihakKe3" class="form-control" required id="feePihakKe3" placeholder="Fee Untuk Pihak Ke-3" type="number">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary col-md-2 offset-md-10" style="margin-right: 15px" value="update">Tambah Data</button>
                        </form>
            </div>
            <div class="col-md-4 recent-data dataTables_wrapper " style="overflow-x:auto;">
                <h3 class="text-left table-title ">Recent Data Stored </h3>
                <table id="datarent" class="table table-responsive table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> No. Polisi</th>
                            <th> Type Kendaraan</th>
                            <th> Nama Pemilik</th>
                            <th> Nama Penyewa</th>
                            <th> Tahun Pembuatan</th>
                            <th> Tahun Registrasi</th>
                            <th> No SPK</th>
                            <th> Periode Pemakaian Klien</th>
                            <th> Periode Pemilik Mobil</th>
                            <th> Sopir</th>
                            <th> Gaji</th>
                            <th> Harga Penyewa </th>
                            <th> Harga KePemilik</th>
                            <th> Gaji Driver</th>
                            <th> Fee Pihak Ke-3</th>
                        </tr>
                    </thead>
                    <tbody>

                    @if((collect($cars)->isEmpty()))

                    @else

                        @foreach($cars as $car)
                            <tr>
                                <td> {{$loop->iteration}}</td>
                                <td> {{$car->noPolisi}}</td>
                                <td> {{$car->type}}</td>
                                <td> {{$car->namaPemilik}}</td>
                                <td> {{$car->namaPenyewa}}</td>
                                <td> {{$car->thnPembuatan}}</td>
                                <td> {{$car->thRegistrasi}}</td>
                                <td> {{$car->noSPK}}</td>
                                <td> {{$car->periodePemakaianKlien}}</td>
                                <td> {{$car->periodePemilikMobil}}</td>
                                <td> {{$car->sopir}}</td>
                                <td> {{$car->gaji}}</td>
                                <td> {{$car->hargaPenyewa}}</td>
                                <td> {{$car->hargaKePemilik}}</td>
                                <td> {{$car->gajiDriver}}</td>
                                <td> {{$car->feePihakKe3}}</td>
                            </tr>
                        @endforeach

                    @endif
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>


</body>
{{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

<script>
    $("#datarent").DataTable();

</script>
<script>
    $('#datarent_wrapper').find('div').first().remove();

</script>
<script>
    $('#datarent_wrapper').children().last().remove();
</script>
<script>

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("datarent").style.display= "block";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }

</script>

<script>
    $("#datepicker").datepicker( {
        autoclose: true,
        format: " yyyy", // Notice the Extra space at the beginning
        viewMode: "years",
        orientation: "auto bottom",
        minViewMode: "years"
    });
    $("#datepicker2").datepicker( {
        autoclose: true,
        format: " yyyy", // Notice the Extra space at the beginning
        viewMode: "years",
        orientation: "auto bottom",
        minViewMode: "years"
    });
</script>
<script>
    webshims.setOptions('forms-ext', {
        replaceUI: 'auto',
        types: 'number',
        "widgets": {
            "calculateWidth": false
        }
    });
    webshims.polyfill('forms forms-ext');

</script>
</html>

