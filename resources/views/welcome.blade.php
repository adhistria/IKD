<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IKD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/welcome.css')}}">
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
                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus placeholder="username">
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
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="password">
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
        <img class="imgikd" src="img/fixHomeImg.png" alt="Architecture" width="1500" height="800">
    </header>
    <div id="dataRental" class="dataTables_wrapper" style="overflow-x:auto;">
        <h3 class="text-center dftarmobil">Daftar Mobil Rental</h3>
        <table id="datarent" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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
                        <td>
                            @if($car->noSPK==NULL)
                                -
                            @else
                                Rp. {{($car->noSPK)}}
                            @endif
                        </td>

                        <td> {{$car->periodePemakaianKlien}}</td>
                        <td> {{$car->periodePemilikMobil}}</td>
                        <td>
                            @if($car->sopir==NULL)
                                -
                            @else
                                Rp. {{($car->sopir)}}
                            @endif
                        </td>

                        <td> @if($car->gaji==0)
                             -
                             @else
                                Rp. {{number_format($car->gaji)}}
                            @endif
                        </td>
                        <td>Rp. {{number_format($car->hargaPenyewa)}}</td>
                        <td>Rp. {{number_format($car->hargaKePemilik)}}</td>
                        <td>@if($car->gajiDriver==0)
                                -
                            @else
                                Rp. {{number_format($car->gajiDriver)}}
                            @endif
                        </td>
                        <td>
                            @if($car->feePihakKe3==0)
                                -
                            @else
                                Rp. {{number_format($car->feePihakKe3)}}
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>
    <div id="maps">
        <div class="container contact">
            <h3 class="text-center mapsikd"> Kontak</h3>
            <div class="row">
                <div class="col-md-9 offset-md-3 col-sm-8 offset-sm-6">
                    <i class="fa fa-map-marker" aria-hidden="true" > JL. Jawa No.27 Rt.08 Kel.Talang Bakung Kec.Jambi Selatan - Kota Jambi</i><br>
                    <i class="fa fa-phone" aria-hidden="true" > 0741 - 571174</i><br>
                    <i class="fa fa-fax" >  0741 - 573891 </i><br>
                    <i class="fa fa-envelope" >  istanakanzadarya@gmail.com</i>
                </div>
            </div>

        </div>
        <div id="googleMap" style="width:100%;height:400px;"></div>
    </div>
    <footer class="text-center">
        <p> ©IstanaKhanzaDarya-2018 </p>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
@if (count($errors) > 0)
    <script>
        $('#loginModal').modal('show');
    </script>
@endif
<script type="text/javascript" src="{{URL::asset('js/welcome.js') }}"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQZr6p1kggXrmnPt00cJePieSctdH9qik&callback=myMap"></script>--}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQZr6p1kggXrmnPt00cJePieSctdH9qik&libraries=places&callback=myMap"></script>

</html>
