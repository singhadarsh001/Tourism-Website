@extends('template')


@section('footer')

<!doctype html>
<html >

<head>
    <meta charset="utf-8">

       <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<!-- footer beginning -->
 
    <footer>
        <div class="footer "  >
          <style> footer{
  background-color: #87CEFA;
}
</style>
            <div  class="footer-area">
                <div class="container">
                    <div class="footer_border">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt=""  width="100px"
                                          height="60px">
                                    </a>
                                </div>
                            </div>
                       <div class="col-xl-6 col-lg-6">
                    <div class="main-block">
        <nav>
        <ul id="navigation">
        <li><a  href="/index">home</a></li>
         <li><a class="" href="/travel">Help us Improve</a></l/li>
         <li><a href="/policies">Policies<i ></i></a>
        
         </li>


             <li><a href="/about">About</a></li>
                           <li><a href="/contact">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div >
                                    <div class="number">
                                        <p> +91-80741-29779</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</body>
</html>

@endsection
