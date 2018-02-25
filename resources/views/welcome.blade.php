<!doctype html>
{{--<html lang="en">--}}
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
    <title>EKD</title>
    <style>
        @media screen and (max-width: 565px) and (min-width: 300px) {

            .navbar-brand{
                font-size: 3.5em;
            }
            .btn{
                padding: 0;
            }
            #navigatorbar{
                font-size: 0.3em;
            }
            .text-center{
                font-size: 3em;
            }
            .table{
                font-size: 2em;
            }
            .btn{
                font-size: 2em;
            }
            #dataRental{
                font-size: 0.3em;
            }
            #maps{
                font-size: 0.3em;
            }

            #datarent_length{
                display: none;

            }
            .dataTables_length {

            }
            .dataTables_filter input {
                width: 10%;
                height: 20px;
                font-size: 2.5em;
            }
            .dataTables_filter {

                text-align: center;
            }


        }

        .nav-link {
            /*padding-right: .5rem !important;*/
            padding-right: 20px ;
            color: black;
            /*margin-right: 10px;*/
            /*padding-left: .5rem !important;*/

        }
        #navigatorbar {
            box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
            background-color: #f4f4f4;
            z-index:999;
            position:relative;
        }

        .last {
            margin-right: 30px;
        }
        body{
            font-family: 'Noto Serif', serif;}
        #dataRental{
            background-color: white;
            padding-top: 20px;
            padding-bottom: 20px;
            margin : 0px;
            bottom: 0;
        }
        .imgcontainer{
            line-height: 1.5;
            margin: auto;
            /*box-sizing: inherit;*/
            letter-spacing: 4px;
            display: block;
            position:relative;
            max-width:980px;
            width: auto;
            height: auto;
        }
        .imgikd{
            max-width:100%;
            height:auto;
            vertical-align:middle;
        }
        .mapsikd{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        #maps{
            background-color: #f4f4f4;
        }
        .navbar-light .navbar-nav .nav-link{
            color: black;
        }
        .btnlgn{
            background-color: transparent;
        }
        .failedlLogin{
            color: red;
        }
        /*.form-control{*/
            /*padding: 0;*/
            /*width: 80%;*/
        /*}*/
        /*.btn-outline-dark{*/
            /*padding: 0;*/
            /*background-color: #1d2129;*/
            /*color: white;*/
        /*}*/
    </style>
</head>
<body>
    <div id="navigatorbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Istana Khanza Darya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <button type="button" class="btn last my-2 my-sm-0 btnlgn ml-auto" data-toggle="modal" data-target="#loginModal">
                    Login
                </button>
            </div>
        </nav>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        @if ($errors->has('credentials'))
                            {{--<h3>asldn</h3>--}}
                            <h6 class="text-center failedlLogin">
                                    <strong>{{ $errors->first('credentials') }}</strong>
                            </h6>
                        @endif
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">

                            <label for="username">Username </label>
                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                            {{--<input class="form-control" id="username" name="username" required="" placeholder="Username or Email">--}}

                            @if ($errors->has('username'))
                                {{--<h3>asldn</h3>--}}
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            {{--<input name="password" class="form-control" required="" id="password" placeholder="password" type="password">--}}
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <header class="imgcontainer" style="max-width:1500px;" >
        <img class="imgikd" src="img/fixIKD.png" alt="Architecture" width="1500" height="800">
    </header>
    <div id="dataRental" class="dataTables_wrapper" style="overflow-x:auto;">
        <h3 class="text-center">List of Vehicles Rental</h3>
        <table id="datarent" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class = "priority-1" scope="col"> No </th>
                <th class = "priority-2" scope="col"> Plat Nomor</th>
                <th class = "priority-3" scope="col"> Nama Perusahaan </th>
                <th class = "priority-4" scope="col"> Pemilik Kendaraan </th>
            </tr>
            </thead>
            <tbody>
            @if((collect($cars)->isEmpty()))

            @else
                @foreach($cars as $car)
                    <tr>
                        <td class = "priority-1"> {{$loop->iteration}}</td>
                        <td class = "priority-2"> {{$car->platnomor}}</td>
                        <td class = "priority-3"> {{$car->namaperusahaan}}</td>
                        <td class = "priority-4"> {{$car->namapemilik}}</td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>
    {{--<div class="jumbotron">--}}
    <div id="maps">
        <h3 class="text-center mapsikd"> IKD Location</h3>
        <div id="googleMap" style="width:100%;height:450px;"></div>
    </div>
</body>

<script>
    $("#datarent").DataTable();
</script>
@if (count($errors) > 0)
    <script>
        $('#loginModal').modal('show');
    </script>
@endif
<script>
    function myMap()
    {
        var myLatlng = new google.maps.LatLng(-1.6337918860204, 103.64822018);
        var mapOptions = {
            zoom: 16,
            center: myLatlng,
            mapTypeId: 'satellite'
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        map.setMapTypeId('terrain');
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {lat: -1.6337918860204, lng: 103.64822018}
        });
        marker.addListener('click', toggleBounce);
        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQZr6p1kggXrmnPt00cJePieSctdH9qik&callback=myMap"></script>
</html>
