<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
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
            body {
                font-size: 0.3em;
            }
            /*body {*/
                /*font-size: 1em;*/
            /*}*/
            /*a{*/
                /*font-size: 1em;*/
            /*}*/
            li a{
                font-size: 0.5em;
            }
            .navbar-brand{
                font-size: 3.5em;
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

            /*padding: 16px;*/
            /*padding-left: 0;*/
            /*margin-left: 0;*/
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        span{
            margin: 0;
        }







    </style>
</head>
<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

<div id="main">
    <div id="navigatorbar" >


        <nav class="navbar navbar-light bg-faded justify-content-between flex-nowrap flex-row">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            {{--<button type="button" class="btn navbar-toggler-icon" onclick="openNav()"></button>--}}
            {{--<span class="navbar-toggler-icon" onclick="openNav()">&#9776;</span>--}}
            <a class="navbar-brand mr-auto" href="#">Istana Khanza Darya</a>
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="nav-link pr-2" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link pr-2" href="#">Contact</a></li>
                <li class="nav-item"><a class="nav-link pr-2" href="#">Logout</a></li>
            </ul>
            <div class="collapse navbar-collapse" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item ">

                    </li>
                </ul>
                <button type="button" class="btn last  my-2 my-sm-0" data-toggle="modal" data-target="#loginModal">
                    Login
                </button>
            </div>


        </nav>
    </div>
    <div class="container-fluid">
        <h5 class="text-center">List of Vehicle Rental</h5>
        <div id="dataRental" class="dataTables_wrapper" style="overflow-x:auto;">
            {{--<h3 class="text-center">List of Vehicles Rental</h3>--}}
            <table id="datarent" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>

                    <th class = "priority-1" scope="col"> No </th>
                    <th class = "priority-2" scope="col"> Plat Nomor</th>
                    <th class = "priority-3" scope="col"> Perusahaan </th>
                    <th class = "priority-4" scope="col"> Pemilik Kendaraan </th>
                    <th class = "priority-5" scope="col"> Col-Name </th>
                    <th class = "priority-6" scope="col"> Col-Name </th>
                    <th class = "priority-7" scope="col"> Col-Name </th>
                    <th class = "priority-8" scope="col"> Col-Name </th>
                    <th class = "priority-9" scope="col"> Col-Name </th>
                    <th class = "priority-10" scope="col"> Col-Name </th>
                    <th class = "priority-11" scope="col"> Col-Name </th>
                    <th class = "priority-12" scope="col"> Col-Name </th>
                    <th class = "priority-1" scope="col"> No </th>
                    <th class = "priority-2" scope="col"> Plat Nomor</th>
                    <th class = "priority-3" scope="col"> Perusahaan </th>
                    <th class = "priority-4" scope="col"> Pemilik Kendaraan </th>
                    <th class = "priority-5" scope="col"> Col-Name </th>
                    <th class = "priority-6" scope="col"> Col-Name </th>
                    <th class = "priority-7" scope="col"> Col-Name </th>
                    <th class = "priority-8" scope="col"> Col-Name </th>
                    <th class = "priority-9" scope="col"> Col-Name </th>
                    <th class = "priority-10" scope="col"> Col-Name </th>
                    <th class = "priority-11" scope="col"> Col-Name </th>
                    <th class = "priority-12" scope="col"> Col-Name </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class = "priority-1"> 1 </td>
                    <td class = "priority-2"> BH 4429 MB</td>
                    <td class = "priority-3"> Petrocina</td>
                    <td class = "priority-4"> Adhi </td>
                    <td class = "priority-5"> Fill </td>
                    <td class = "priority-6"> Fill </td>
                    <td class = "priority-7"> Fill </td>
                    <td class = "priority-8"> Fill </td>
                    <td class = "priority-9"> Fill </td>
                    <td class = "priority-10"> Fill </td>
                    <td class = "priority-11"> Fill </td>
                    <td class = "priority-12"> Fill </td>
                    <td class = "priority-1"> 1 </td>
                    <td class = "priority-2"> BH 4429 MB</td>
                    <td class = "priority-3"> Petrocina</td>
                    <td class = "priority-4"> Adhi </td>
                    <td class = "priority-5"> Fill </td>
                    <td class = "priority-6"> Fill </td>
                    <td class = "priority-7"> Fill </td>
                    <td class = "priority-8"> Fill </td>
                    <td class = "priority-9"> Fill </td>
                    <td class = "priority-10"> Fill </td>
                    <td class = "priority-11"> Fill </td>
                    <td class = "priority-12"> Fill </td>
                </tr>
                <tr>
                    <td class = "priority-1"> 2 </td>
                    <td class = "priority-2"> BH 4429 MB</td>
                    <td class = "priority-3"> Petrocina</td>
                    <td class = "priority-4"> Adhi </td>
                    <td class = "priority-5"> Fill </td>
                    <td class = "priority-6"> Fill </td>
                    <td class = "priority-7"> Fill </td>
                    <td class = "priority-8"> Fill </td>
                    <td class = "priority-9"> Fill </td>
                    <td class = "priority-10"> Fill </td>
                    <td class = "priority-11"> Fill </td>
                    <td class = "priority-12"> Fill </td>
                    <td class = "priority-1"> 2 </td>
                    <td class = "priority-2"> BH 4429 MB</td>
                    <td class = "priority-3"> Petrocina</td>
                    <td class = "priority-4"> Adhi </td>
                    <td class = "priority-5"> Fill </td>
                    <td class = "priority-6"> Fill </td>
                    <td class = "priority-7"> Fill </td>
                    <td class = "priority-8"> Fill </td>
                    <td class = "priority-9"> Fill </td>
                    <td class = "priority-10"> Fill </td>
                    <td class = "priority-11"> Fill </td>
                    <td class = "priority-12"> Fill </td>
                </tr>
                <tr>
                    <td class = "priority-1"> 3 </td>
                    <td class = "priority-2"> BH 4429 MB</td>
                    <td class = "priority-3"> Petrocina</td>
                    <td class = "priority-4"> Adhi </td>
                    <td class = "priority-5"> Fill </td>
                    <td class = "priority-6"> Fill </td>
                    <td class = "priority-7"> Fill </td>
                    <td class = "priority-8"> Fill </td>
                    <td class = "priority-9"> Fill </td>
                    <td class = "priority-10"> Fill </td>
                    <td class = "priority-11"> Fill </td>
                    <td class = "priority-12"> Fill </td>
                    <td class = "priority-1"> 3 </td>
                    <td class = "priority-2"> BH 4429 MB</td>
                    <td class = "priority-3"> Petrocina</td>
                    <td class = "priority-4"> Adhi </td>
                    <td class = "priority-5"> Fill </td>
                    <td class = "priority-6"> Fill </td>
                    <td class = "priority-7"> Fill </td>
                    <td class = "priority-8"> Fill </td>
                    <td class = "priority-9"> Fill </td>
                    <td class = "priority-10"> Fill </td>
                    <td class = "priority-11"> Fill </td>
                    <td class = "priority-12"> Fill </td>
                </tr>
                <tr>
                    <td class = "priority-1"> 4 </td>
                    <td class = "priority-2"> BH 4429 MB</td>
                    <td class = "priority-3"> Petrocina</td>
                    <td class = "priority-4"> Adhi </td>
                    <td class = "priority-5"> Fill </td>
                    <td class = "priority-6"> Fill </td>
                    <td class = "priority-7"> Fill </td>
                    <td class = "priority-8"> Fill </td>
                    <td class = "priority-9"> Fill </td>
                    <td class = "priority-10"> Fill </td>
                    <td class = "priority-11"> Fill </td>
                    <td class = "priority-12"> Fill </td>
                    <td class = "priority-1"> 4 </td>
                    <td class = "priority-2"> BH 4429 MB</td>
                    <td class = "priority-3"> Petrocina</td>
                    <td class = "priority-4"> Adhi </td>
                    <td class = "priority-5"> Fill </td>
                    <td class = "priority-6"> Fill </td>
                    <td class = "priority-7"> Fill </td>
                    <td class = "priority-8"> Fill </td>
                    <td class = "priority-9"> Fill </td>
                    <td class = "priority-10"> Fill </td>
                    <td class = "priority-11"> Fill </td>
                    <td class = "priority-12"> Fill </td>
                </tr>
                <tr>
                    <td class = "priority-1"> 5 </td>
                    <td class = "priority-2"> BH 4429 MB</td>
                    <td class = "priority-3"> Petrocina</td>
                    <td class = "priority-4"> Adhi </td>
                    <td class = "priority-5"> Fill </td>
                    <td class = "priority-6"> Fill </td>
                    <td class = "priority-7"> Fill </td>
                    <td class = "priority-8"> Fill </td>
                    <td class = "priority-9"> Fill </td>
                    <td class = "priority-10"> Fill </td>
                    <td class = "priority-11"> Fill </td>
                    <td class = "priority-12"> Fill </td>
                    <td class = "priority-1"> 5 </td>
                    <td class = "priority-2"> BH 4429 MB</td>
                    <td class = "priority-3"> Petrocina</td>
                    <td class = "priority-4"> Adhi </td>
                    <td class = "priority-5"> Fill </td>
                    <td class = "priority-6"> Fill </td>
                    <td class = "priority-7"> Fill </td>
                    <td class = "priority-8"> Fill </td>
                    <td class = "priority-9"> Fill </td>
                    <td class = "priority-10"> Fill </td>
                    <td class = "priority-11"> Fill </td>
                    <td class = "priority-12"> Fill </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>

{{--<script>--}}
    {{--$("#datarent").DataTable();--}}
{{--</script>--}}
</body>
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


