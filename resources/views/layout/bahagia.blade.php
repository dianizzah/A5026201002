<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <style>
        .container{
            background-color: #d0d0f5;
            padding: 50px;
            border-radius: 5px;
            box-sizing: border-box;
            text-align: center;
        }

        button{
            display: inline-block;
            padding: 5px 14px;
            background-color: #fff;
            border: 1px solid #ddd;
            color:#337ab7;
            border-radius: 15px;
            text-decoration: none;
            cursor: pointer;
         }

        body {
        font-family: "Lato", sans-serif;
        transition: background-color. 5s;
        margin:20px;
        }

        .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #7575B1;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        }

        .sidenav a {
        text-align: center;
        text-decoration: none;
        font-size: 20px;
        color: #ffffff;
        display: block;
        transition: 0.3s;
        }

        .sidenav a:hover {
        color: #60bbc2;
        }

        .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 20px;
        font-size: 25px;
        margin-left: 50px;
        }

        #main {
        transition: margin-left .5s;
        padding: 16px;
        }

        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }

        .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 25px;
        background-color: #9E8DC3;
        color: #ffffff;
        font-weight: bolder;
        text-align: center;
        }

    </style>
</head>

<body>




    @section('sidebar')
    <div id="mySidenav" class="sidenav">
        <h2 class="w3-bar-item" style="color:#fafafa; text-align:center; font-weight:bolder">Menu</h2>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="http://127.0.0.1:8000" class="w3-bar-item w3-button">Halaman Utama</a>
        <a href="http://127.0.0.1:8000/pegawai" class="w3-bar-item w3-button">Pegawai</a>
        <a href="http://127.0.0.1:8000/absen" class="w3-bar-item w3-button">Absen</a>
        <a href="http://127.0.0.1:8000/mutasi" class="w3-bar-item w3-button">Mutasi</a>
        <a href="#" class="w3-bar-item w3-button">Minggu Depan</a>
        <a href="#" class="w3-bar-item w3-button">Praktikum</a>


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
    </div>
    @show

    <div id="main">
        <span style="font-size:25px;cursor:pointer; color: black" onclick="openNav()">&#9776;</span>

        <h3 style="text-align: center; color: black">@yield('judulhalaman')</h3>

        <div class="container">
        @section('konten')

        @show
        </div>
      </div>

    <div class="footer">
        <p> &copy; Hak cipta oleh 5026201002 - Dian Nizzah Fortuna</p>
    </div>

</body>

</html>
