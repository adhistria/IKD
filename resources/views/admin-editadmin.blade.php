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
                    <form action="{{route('deleteadmin')}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="delete" />
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input class="form-control" id="name" name="name" required="" >
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" class="form-control" required="" id="username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input name="email" class="form-control" required="" id="email">
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-danger ml-auto" style="margin-right: 15px" >Delete</button>
                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid listdata">
        <h5 class="text-center">List of Admin IKD</h5>
        <div id="dataRental" class="dataTables_wrapper" style="overflow-x:auto;">
            <table id="datarent" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    {{--<th class = "priority-1" scope="col"> No </th>--}}
                    <th class = "priority-2" scope="col"> Nama </th>
                    <th class = "priority-3" scope="col"> Username </th>
                    <th class = "priority-4" scope="col"> Email </th>
                </tr>
                </thead>
                @if(empty($users))

                @else
                    <tbody>
                    @foreach($users as $user)
                        {{--@if($user->id=={{}})--}}
                        @if(Auth::user()->id != $user->id)

                        <tr data-toggle="modal" data-id="{{$user->id}}" data-target="#orderModal" data-backdrop="static" data-keyboard="false">
                            {{--<td class = "priority-1"> {{$loop->iteration}}</td>--}}
                            <td class = "priority-2"> {{$user->name}}</td>
                            <td class = "priority-3"> {{$user->username}}</td>
                            <td class = "priority-4"> {{$user->email}}</td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                @endif
            </table>
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
{{--<script>--}}
{{--$('#orderModal').modal({--}}
{{--backdrop: 'static',--}}
{{--keyboard: false--}}
{{--})--}}
{{--</script>--}}
<script>
    $('tr').not('thead tr').addClass('selected').click(function() {
        var $row = $(this).closest('tr');
        var rowID = $row.attr('data-id');
        console.log(rowID);
        var name = $row.find('.priority-2').text();
        var namapemilik = $row.find('.priority-3').text();
        var namaperusahaan = $row.find('.priority-4').text();
        $('#modaltitle').val("Data ");
        $('#id').val(rowID);
        $('#name').val(name);
        $('#username').val(namapemilik);
        $('#email').val(namaperusahaan);
        $('#orderModal').modal('show');
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>