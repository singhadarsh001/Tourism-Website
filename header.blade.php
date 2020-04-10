@extends('template')


@section('header')

 <!doctype html>
<html >

<head>
  

    
    <link rel="icon" type="image/x-icon" href="icon.png">
    

    <!-- Css part -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

   <!-- header-start -->
    <header>
        <div class="header-area ">

            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="/index">
                                        <img src="img/logo.png" alt=""  width="100px" height="60px">
                                    </a>
                                </div>
                            </div>
         <div class="col-xl-6 col-lg-6">
         <div class="main">
        <nav>
        <ul >
        <li><a class="active" href="/index">home</a></li>
         <li><a class="" href="/destination">Destination</a></l/li>
         <li><a href="/packages">packages <i ></i></a>
        
         </li>

       
             <li><a href="/signup">Signup</a></li>
                           <li><a href="/contact">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div>
                                    <div class="number">
                                        <p> +91-80741-29779</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

</body>
</html>

@endsection
    <!-- header-end -->

@endsection
