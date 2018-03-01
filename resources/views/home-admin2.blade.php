<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - IKD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script type="text/javascript" src="{{URL::asset('js/js-webshim/minified/polyfiller.js') }}"></script>
    <link rel="stylesheet" href="{{URL::asset('css/homeadmin.css')}}">

</head>
<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{route('cars.index')}}">Home</a>
    <a href="{{route('cars.create')}}">Tambah Data Mobil</a>
    <a href="{{route('editprofile')}}">Edit Akun</a>

    {{--<a href="#">Add Admin</a>--}}
</div>

<div id="main">
    <div id="navigatorbar" >
        <nav class="navbar navbar-light bg-faded justify-content-between flex-nowrap flex-row">
            <span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <a class="navbar-brand mr-auto" href="#">Istana Khanza Darya</a>
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link pr-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"> Logout
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </nav>
    </div>
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div>
    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 id="modaltitle" class="modal-title">Edit atau Delete Data</h4>
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
                            <label for="noSPK">No PO/SPK</label>
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
                            <input name="sopir" class="form-control" id="sopir" placeholder="Sopir Mobil">
                        </div>
                        <div class="form-group">
                            <label for="gaji">Gaji</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input min="0" class="form-control" id="gaji" name = "gaji" placeholder="Gaji" type="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hargaPenyewa">Harga Penyewa</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" min="0" name="hargaPenyewa" class="form-control money" required id="hargaPenyewa" placeholder="Harga ke Penyewa" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hargaKePemilik">Harga Ke Pemilik</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input name="hargaKePemilik" min="0" class="form-control" required id="hargaKePemilik" placeholder="Harga Ke Pemilik" type="number">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="gajiDriver">Gaji Driver</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input min="0" name="gajiDriver" class="form-control" id="gajiDriver" placeholder="Gaji Driver" type="number" >

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="feePihakKe3">Fee Pihak Ke-3</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input min="0" name="feePihakKe3" class="form-control" id="feePihakKe3" placeholder="Fee Untuk Pihak Ke-3" type="number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 mr-auto">
                                    <button type="submit" name="destroy" class="btn btn-danger" value="destroy">Delete</button>
                            </div>
                            <div class="ml-auto">
                                <button type="submit" min="0" name="update" class="btn btn-primary" style="margin-right: 15px" value="update">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid listdata ">
        <h5 class="text-center">List of Vehicle Rental</h5>
        <div id="dataRental" class="dataTables_wrapper " style="overflow-x:auto;">
            <table id="datarent" class="table table-responsive dt-responsive table-striped table-bordered nowrap" cellspacing="0" width="100%">
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
                    <th> PPN(10%)</th>
                    <th> PPH(2%)</th>
                    <th> Total Harga Penyewa</th>
                    <th> Harga KePemilik</th>
                    <th> PPH Ke Pemilik (2%)</th>
                    <th> Gaji Driver</th>
                    <th> Fee Pihak Ke-3</th>
                    <th> Fee Manajemen </th>
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
                            <td class="priority-7">
                                @if(!empty($car->noSPK))
                                    {{$car->noSPK}}
                                @else
                                    -
                                @endif
                            </td>
                            <td class="priority-8"> {{$car->periodePemakaianKlien}}</td>
                            <td class="priority-9"> {{$car->periodePemilikMobil}}</td>
                            <td class="priority-10">
                                @if(!empty($car->sopir))
                                    {{($car->sopir)}}
                                @else
                                    -
                                @endif
                            </td>
                            <td class="priority-11">
                                @if($car->gaji==0)
                                    -
                                @else
                                    Rp. {{number_format($car->gaji)}}
                                @endif
                            </td>
                            <td class="priority-12">Rp. {{number_format($car->hargaPenyewa)}}</td>
                            <td class="priority-16">Rp. {{number_format($car->ppn)}}</td>
                            <td class="priority-17">Rp. {{number_format($car->pph)}}</td>
                            <td class="priority-18">Rp. {{number_format($car->totalHargaPenyewa)}}</td>
                            <td class="priority-13">Rp. {{number_format($car->hargaKePemilik)}}</td>
                            <td class="priority-19">Rp. {{number_format($car->pphPemilik)}}</td>
                            <td class="priority-14">
                                @if($car->gajiDriver==0)
                                    -
                                @else
                                    Rp. {{number_format($car->gajiDriver)}}
                                @endif
                            </td>
                            <td class="priority-15">
                                @if($car->feePihakKe3==0)
                                    -
                                @else
                                    Rp. {{ number_format($car->feePihakKe3)}}
                                @endif
                            </td>
                            <td class="priority-20">Rp. {{number_format($car->feeManajemen)}}</td>
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
<script type="text/javascript" src="{{URL::asset('js/homeadmin.js') }}"></script>
</html>