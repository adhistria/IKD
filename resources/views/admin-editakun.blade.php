<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">


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
            {{--<button type="button" class="btn navbar-toggler-icon" onclick="openNav()"></button>--}}
            {{--<span class="navbar-toggler-icon" onclick="openNav()">&#9776;</span>--}}
            <a class="navbar-brand mr-auto" href="#">Istana Khanza Darya</a>
            <ul class="nav navbar-nav flex-row">
                {{--<li class="nav-item"><a class="nav-link pr-2" href="#">About</a></li>--}}
                {{--<li class="nav-item"><a class="nav-link pr-2" href="#">Contact</a></li>--}}
                {{--<li class="nav-item"><a class="nav-link pr-2" href="#">Logout</a></li>--}}
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
    </div> <!-- end .flash-message -->
    {{--<div class="alert alert-primary" role="alert">--}}
    {{--This is a primary alert—check it out!--}}
    {{--</div>--}}
    <div id="recentdata" class="container-fluid store">
        <div class="row">
            <div id= "forminput" class="col-md-8 store-data">
                <h3 class="text-left form-title">Store New Data</h3>
                <form action="{{route('cars.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="platnomor">Nomor Polisi</label>
                        <input class="form-control" id="platnomor" required="" name = "platnomor"placeholder="Enter Plate Number" maxlength="11" minlength="6">
                    </div>
                    <div class="form-group">
                        <label for="namapemilik">Nama Pemilik</label>
                        <input name="namapemilik" class="form-control" required=""id="namapemilik" placeholder="Car Owner">
                    </div>
                    <div class="form-group">
                        <label for="namaperusahaan">Nama Perusahaan</label>
                        <input name="namaperusahaan" class="form-control" required=""id="namaperusahaan" placeholder="Tenant Companies">
                    </div>

                    <button type="submit" class="btn btn-primary col-md-2 offset-md-10">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


</body>

{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>

<script>
    $("#datarent").DataTable({
        paging : false,
        info : false,
        searching: false,
        autoWidth: false

//        overflow-x: hidden;

        //        ,
//        "aoColumnDefs": [
//            { "sClass": "my_class", "aTargets": [ 0 ] }
//        ]
    });
</script>
<script>
    $('#datarent_wrapper').find('div').first().remove();

</script>
{{--<script>--}}
{{--var yourUl = document.getElementsByClassName("table-responsive");--}}
{{--yourUl.style.display = yourUl.style.display === 'block' ? '' : 'block';--}}

{{--</script>--}}
<script>
    $('#datarent_wrapper').children().last().remove();
</script>
<script>

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }

</script>




</html>


