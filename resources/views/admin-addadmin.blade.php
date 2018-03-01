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
        }







        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #18121e;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
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
        }
        .table-title{
            padding-top: 2em;
            border-top: 3px solid #0375b4;
            border-top-left-radius : 3px;
            border-top-right-radius : 3px;
            margin-bottom: 0;
            padding-bottom: 0;
            padding-left: 1em;
            font-size: 18px;
            background-color: #0375b4;
            border-bottom:3px solid #FFFFFF;
            box-shadow : 0 1px 1px rgba(0,0,0,0.1)
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
        #dataadmin{
            margin: 0;
            box-sizing: border-box;
            box-shadow : 0 10px 10px rgba(0,0,0,0.1);
        }
        #dataadmin_wrapper .row {
            margin-top: 0;
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
        form{
            padding: 1em;
            box-sizing: border-box;
            box-shadow : 0 10px 10px rgba(0,0,0,0.1);
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
                {{--<li class="nav-item"><a class="nav-link pr-2" href="#">Tambah Data</a></li>--}}
                <li class="nav-item"> <a class="nav-link pr-2" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    Logout
                    </a>
                </li>

            </ul>
            <div class="collapse navbar-collapse" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link pr-2" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a> </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
]            </div>


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
                    <form action="{{route('register')}}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Nama </label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-3 col-form-label text-md-right">Username</label>

                            <div class="col-md-8">
                                <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('email') }}" required>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-10">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                {{--</div>--}}
        </div>
            {{--</div>--}}
            <div class="col-md-4 recent-data">
                <h3 class="text-left table-title">Recent Data Stored </h3>
                <table id="dataadmin" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class = "priority-2" scope="col">Nama</th>
                        <th class = "priority-3" scope="col">Username</th>
                        {{--<th class = "priority-4" scope="col"> Pemilik Kendaraan </th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @if((collect($users)->isEmpty()))

                    @else
                        @foreach($users as $user)
                            <tr>
                                <td class = "priority-2"> {{$user->name}}</td>
                                <td class = "priority-3"> {{$user->username}}</td>
                                {{--<td class = "priority-4"> {{$car->namapemilik}}</td>--}}
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>

<script>
    $("#dataadmin").DataTable({
        paging : false,
        info : false,
        searching: false,
        autoWidth: false
    });
</script>
<script>
    $('#dataadmin_wrapper').find('div').first().remove();

</script>
<script>
    $('#dataadmin_wrapper').children().last().remove();
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


