<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
@extends('layouts.app-master')

@section('content')

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>BaseCamp</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/img2/icon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    @guest
    <main class="main" id="top" style="color:#fff">
      <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
    
        <div class="container">   
        <img src="images/img/img2/icon1.svg" alt="" width="350px" height="90px" top="49px" left="96px" class="d-inline-block align-text-top">
        
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  mt-4 mt-lg-0" id="navbarSupportedContent">
        
            <ul class="navbar-nav ms-auto">
            </ul>  
            <form class="">
              <button class="btn btn-primary btn-sm" type="submit" style="color: #fff;"><a href="login" style="color: #fff; text-decoration: double;">Login</button></a>
              &nbsp
              <button class="btn btn-warning btn-sm" type="submit" style="color: black;"><a href="register" style="color: #fff; text-decoration: double;">Get Started for free</button></a>
            </form>  
          </div>
          
          </div>
          
        </nav>
      <section class="pt-7">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-md-start text-center py-6">
              <p class="mb-3 fs-4 " style="color: darkblue; margin-top: 1%;">The first trully intelligent </br>request project</br>management system</br>in the government </p>
              <p class="mb-6 lead text-secondary"><br class="d-none d-xl-block" /><img src="images/img/img4/icon.svg" height="" width="300" alt="logo" style="color: blue;"><br class="d-none d-xl-block" /></p>
              <div class="position-relative" style="width: 80%;">
                <input class="form-control border-2 square-pill w-100 ps-4 pe-5 position-absolute" type="text" placeholder="Email Address" style="height: 50px; color:black;"><a href="home.html"></span>
                <button type="button" class="btn btn-primary square-pill py-2 px-3 shadow-none position-absolute top-0 end-0  m-1"><strong>Start Now!</strong></button>
            
            </div>
            </a>
            </br>
            <div>
            <h6 style="margin-left:8%; margin-top: 15%; color: black;"> or sign up with<a class="btn btn-outline shadow-4 border-1 ms-3 square-pill"href="#!"><img src="images/img/img14/icon.svg" alt="" width="50" height="24"><a class="btn btn-outline ms-3" href="#!"><img src="images/img/img15/icon.svg" alt="" width="70" height="24"></a></div>
            </h2>
            </h6>
            </div>
            <div class="col-md-6 text-end"><img class="pt-15 pt-md-0 img-fluid" src="images/img/img3/icon.svg" alt="" /></div>
          </div>
        </div>
      </section>
      @endguest

      @auth
      <h1>'Dashboard'</h1>
      <p class="lead">Kamu Berhasil Login.</p>
      @endauth
      @endsection


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
  </body>
</html>