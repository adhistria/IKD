<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
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
            /*li a{*/
                /*font-size: 0.5em;*/
            /*}*/
            /*.navbar-brand{*/
                /*font-size: 3.5em;*/
            /*}*/
            /*.nav-link {*/
                /*!*font-size: 0.3em;*!*/
                /*padding-right: 0;*/
                /*color: black;*/
            /*}*/
            .last {
                margin-right: 0px;
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

        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        span{
            margin: 0;
        }

        td.child{
            width: 100%;
            padding-left: 100px;
        }

        #navigatorbar {
            box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
            background-color: #f4f4f4;
        }
        .listdata{
            margin-top: 1em;
        }
        .navbar-light .navbar-nav .nav-link{
            color: black;
        }
        .nav-link {
            padding-right: 20px;
            color: black;
        }
        .last {
            margin-right: 30px;
        }
        .flash-message{
            padding-top: 10px;
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
    {{--<a href="#">Add Admin</a>--}}
</div>

<div id="main">
    <div id="navigatorbar" >
        <nav class="navbar navbar-light bg-faded justify-content-between flex-nowrap flex-row">
            <span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <a class="navbar-brand mr-auto" href="#">Istana Khanza Darya</a>
            <ul class="nav navbar-nav flex-row">
                {{--<li class="nav-item"><a class="nav-link pr-2" href="#">Tambah Admin</a></li>--}}
                {{--<li class="nav-item"><a class="nav-link pr-2" href="#">Tambah Data</a></li>--}}
                <li class="nav-item"> <a class="nav-link pr-2" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a> </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
            <div class="collapse navbar-collapse" >
                <ul class="nav navbar-nav flex-row">
                    {{--<li class="nav-item"><a class="nav-link pr-2" href="#">About</a></li>--}}
                    {{--<li class="nav-item"><a class="nav-link pr-2" href="#">Contact</a></li>--}}
                    <li class="nav-item"> <a class="nav-link pr-2" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a> </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
                {{--<button type="button" class="btn last  my-2 my-sm-0" data-toggle="modal" data-target="#loginModal">--}}
                    {{--Login--}}
                {{--</button>--}}
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
    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 id="modaltitle" class="modal-title text-center">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{route('cars.choice')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="id" id="id">

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
                            {{--<input type="text" id="datepicker" />--}}
                            <input class="form-control" id="thnPembuatan" required name = "thnPembuatan" placeholder="Tahun Pembuatan Mobil" type="text">
                        </div>
                        <div class="form-group">
                            <label for="thRegistrasi">Tahun Registrasi Mobil</label>
                            <input class="form-control" id="thRegistrasi" name="thRegistrasi"  required placeholder="Tahun Registrasi Mobil" type="text">
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
                            <label for="periodePemilikMobil">Nama Pemilik</label>
                            <input name="periodePemilikMobil" class="form-control" required id="periodePemilikMobil" placeholder="Periode Pemilik Mobil">
                        </div>
                        <div class="form-group">
                            <label for="sopir">Sopir </label>
                            <input name="sopir" class="form-control" required id="sopir" placeholder="Sopir Mobil">
                        </div>
                        <div class="form-group">
                            <label for="gaji">Gaji</label>
                            <input class="form-control" id="gaji" required name = "gaji" placeholder="Gaji" type="number">
                        </div>
                        <div class="form-group">
                            <label for="hargaPenyewa">Harga Penyewa</label>
                            <input name="hargaPenyewa" class="form-control" required id="hargaPenyewa" placeholder="Harga ke Penyewa" type="number">
                        </div>
                        <div class="form-group">
                            <label for="hargaKePemilik">Harga Ke Pemilik</label>
                            <input name="hargaKePemilik" class="form-control" required id="hargaKePemilik" placeholder="Harga Ke Pemilik" type="number">
                        </div>
                        <div class="form-group">
                            <label for="gajiDriver">Gaji Driver</label>
                            <input name="gajiDriver" class="form-control" required id="gajiDriver" placeholder="Gaji Driver" type="number">
                        </div>
                        <div class="form-group">
                            <label for="feePihakKe3">Fee Pihak Ke-3</label>
                            <input name="feePihakKe3" class="form-control" required id="feePihakKe3" placeholder="Fee Untuk Pihak Ke-3" type="number">
                        </div>
                        <div class="row">
                            <div class="col-2 mr-auto">
                                {{--<form action="{{route('cars.destroy')}}" method="POST">--}}
                                    {{--{{csrf_field()}}--}}
                                    {{--<input type="hidden" name="_method" value="delete" />--}}
                                    <button type="submit" name="destroy" class="btn btn-danger" value="destroy">Delete</button>
                                {{--</form>--}}
                            </div>
                            <div class="ml-auto">
                                <button type="submit" name="update" class="btn btn-primary" style="margin-right: 15px" value="update">Update</button>
                            </div>
                        {{--</div>--}}
                        {{--<button type="submit" class="ml-auto btn btn-primary" style="margin-right: 15px">Update</button>--}}
                        {{--<div class="ml-auto col-0">--}}
                            {{--<button type="submit" class="btn btn-primary" style="margin-right: 15px">Update</button>--}}
                        {{--</div>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid listdata">
        <h5 class="text-center">List of Vehicle Rental</h5>
        <div id="dataRental" class="dataTables_wrapper" style="overflow-x:auto;">
            <table id="datarent" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th> No </th>
                    <th> No. Polisi</th>
                    <th> Type</th>
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
                @if(empty($cars))

                @else
                    <tbody>
                        @foreach($cars as $car)
                        {{--<tr data-toggle="modal" data-id="{{$car->id}}" data-target="#orderModal" data-backdrop="static" data-keyboard="false">--}}
                        <tr data-toggle="modal" data-id="{{$car->id}}" data-backdrop="static" data-keyboard="false">
                            <td> {{$loop->iteration}}</td>
                            <td class="priority-1"> {{$car->noPolisi}}</td>
                            <td class="priority-2"> {{$car->type}}</td>
                            <td class="priority-3"> {{$car->namaPemilik}}</td>
                            <td class="priority-4"> {{$car->namaPenyewa}}</td>
                            <td class="priority-5"> {{$car->thnPembuatan}}</td>
                            <td class="priority-6"> {{$car->thRegistrasi}}</td>
                            <td class="priority-7"> {{$car->noSPK}}</td>
                            <td class="priority-8"> {{$car->periodePemakaianKlien}}</td>
                            <td class="priority-9"> {{$car->periodePemilikMobil}}</td>
                            <td class="priority-10"> {{$car->sopir}}</td>
                            <td class="priority-11"> {{$car->gaji}}</td>
                            <td class="priority-12"> {{$car->hargaPenyewa}}</td>
                            <td class="priority-13"> {{$car->hargaKePemilik}}</td>
                            <td class="priority-14"> {{$car->gajiDriver}}</td>
                            <td class="priority-15"> {{$car->feePihakKe3}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </div>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

{{--<script>--}}
    {{--$('#orderModal').modal({--}}
        {{--backdrop: 'static',--}}
        {{--keyboard: false--}}
    {{--})--}}
{{--</script>--}}
<script>
    $('table').on('click','tbody tr', function (evt) {
        var $cell=$(evt.target).closest('td');
        if($cell.index() > 0){
            var $row = $(this).closest('tr');
            var rowID = $row.attr('data-id');
            console.log('rowId');
            console.log(rowID);
            var nopol = $row.find('.priority-1').text();
            var type = $row.find('.priority-2').text();
            var namaPemilik = $row.find('.priority-3').text();
            var namaPenyewa = $row.find('.priority-4').text();
            var thnPembuatan = $row.find('.priority-5').text();
            var thRegistrasi = $row.find('.priority-6').text();
            var noSPK = $row.find('.priority-7').text();
            var periodePemakaianKlien = $row.find('.priority-8').text();
            var periodePemilikMobil= $row.find('.priority-9').text();
            var sopir = $row.find('.priority-10').text();
            var gaji = parseInt($row.find('.priority-11').text()) ;
            var hargaPenyewa = parseInt($row.find('.priority-12').text()) ;
            var hargaKePemilik = parseInt($row.find('.priority-13').text());
            var gajiDriver = parseInt($row.find('.priority-14').text());
            var feePihakKe3 = parseInt($row.find('.priority-15').text());
            console.log(feePihakKe3);
            $('#modaltitle').val("Data ");
            $('#id').val(rowID);
            $('#noPolisi').val(nopol);
            $('#type').val(type);
            $('#namaPemilik').val(namaPemilik);
            $('#namaPenyewa').val(namaPenyewa);
            $('#thnPembuatan').val(thnPembuatan);
            $('#thRegistrasi').val(thRegistrasi);
            $('#noSPK').val(noSPK);
            $('#periodePemakaianKlien').val(periodePemakaianKlien);
            $('#periodePemilikMobil').val(periodePemilikMobil);
            $('#sopir').val(sopir);
            $('#gaji').val(gaji);
            $('#hargaPenyewa').val(hargaPenyewa);
            $('#hargaKePemilik').val(hargaKePemilik);
            $('#gajiDriver').val(gajiDriver);
            $("#feePihakKe3").val(feePihakKe3);
            $('#orderModal').modal('show');

        }


    });
</script>



{{--<script>--}}
    {{--$('tr').not('thead tr ').addClass('selected').click(function() {--}}
        {{--var $row = $(this).closest('tr');--}}
        {{--var rowID = $row.attr('data-id');--}}
        {{--console.log(rowID);--}}
        {{--var nopol = $row.find('.priority-1').text();--}}
        {{--var type = $row.find('.priority-2').text();--}}
        {{--var namaPemilik = $row.find('.priority-3').text();--}}
        {{--var namaPenyewa = $row.find('.priority-4').text();--}}
        {{--var thnPembuatan = $row.find('.priority-5').text();--}}
        {{--var thRegistrasi = $row.find('.priority-6').text();--}}
        {{--var noSPK = $row.find('.priority-7').text();--}}
        {{--var periodePemakaianKlien = $row.find('.priority-8').text();--}}
        {{--var periodePemilikMobil= $row.find('.priority-9').text();--}}
        {{--var sopir = $row.find('.priority-10').text();--}}
        {{--var gaji = parseInt($row.find('.priority-11').text()) ;--}}
        {{--var hargaPenyewa = parseInt($row.find('.priority-12').text()) ;--}}
        {{--var hargaKePemilik = parseInt($row.find('.priority-13').text());--}}
        {{--var gajiDriver = parseInt($row.find('.priority-14').text());--}}
        {{--var feePihakKe3 = parseInt($row.find('.priority-15').text());--}}
        {{--console.log(feePihakKe3);--}}
        {{--$('#modaltitle').val("Data ");--}}
        {{--$('#id').val(rowID);--}}
        {{--$('#noPolisi').val(nopol);--}}
        {{--$('#type').val(type);--}}
        {{--$('#namaPemilik').val(namaPemilik);--}}
        {{--$('#namaPenyewa').val(namaPenyewa);--}}
        {{--$('#thnPembuatan').val(thnPembuatan);--}}
        {{--$('#thRegistrasi').val(thRegistrasi);--}}
        {{--$('#noSPK').val(noSPK);--}}
        {{--$('#periodePemakaianKlien').val(periodePemakaianKlien);--}}
        {{--$('#periodePemilikMobil').val(periodePemilikMobil);--}}
        {{--$('#sopir').val(sopir);--}}
        {{--$('#gaji').val(gaji);--}}
        {{--$('#hargaPenyewa').val(hargaPenyewa);--}}
        {{--$('#hargaKePemilik').val(hargaKePemilik);--}}
        {{--$('#gajiDriver').val(gajiDriver);--}}
        {{--$("#feePihakKe3").val(feePihakKe3);--}}
        {{--$('#orderModal').modal('show');--}}
    {{--});--}}
{{--</script>--}}
<script>
    $("#thnPembuatan").datepicker( {
        autoclose: true,
        format: " yyyy", // Notice the Extra space at the beginning
        viewMode: "years",
        orientation: "auto bottom",
        minViewMode: "years"
    });
    $("#thRegistrasi").datepicker( {
        autoclose: true,
        format: " yyyy", // Notice the Extra space at the beginning
        viewMode: "years",
        orientation: "auto bottom",
        minViewMode: "years"
    });
</script>
<script>
    $("#datarent").DataTable();
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }
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