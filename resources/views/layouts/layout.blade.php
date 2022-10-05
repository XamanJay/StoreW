<!DOCTYPE html>
<html lang="en">
<head>                      
    <title>Whirlpool <?php  print date("Y") ; ?> </title>
    <meta charset="utf-8">   
    <meta name="description" content="">
    <meta name="author" content="jaissiel@yahoo.com">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <!--Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/main_style.css') }}">
    
    

    <link href="https://fonts.googleapis.com/css2?family=Griffy&display=swap" rel="stylesheet">    <style>    .font__Griffy {        font-family: 'Griffy', serif;        font-size: 20px;    }    </style>
    
    

   
</head>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<body>



   
    <div style="margin-bottom:0px">
        
        <img src="{{ asset('images/navimage.png') }}" style="width:100%" alt="Whirlpool" >
    </div>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		



    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand MOVIMIENTO_DESCENDIENDO" href="/"><img src="{{ asset('images/LogoWhirlpool.png') }}" width="120px" height="55px" alt="Whirlpool" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link" href="/userws">Usuarios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/categories">Categorias </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/products">Productos</a>
                </li>
                
                
            </ul>
            
            

            </div>
        </div>
        </nav>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


    @yield('content')



    
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


<footer class="container-fluid text-center footer-style " style="margin-top:0px">
<div class="container-fluid">
    <div class="row">
    <div class="col-md-4 footer-col">
            <h3>...</h3>
            <p> </p>
        </div>
            <div class="col-md-4 footer-col">
            <h3>...</h3>
            <p> </p>
            <p>	
            </p>
        </div>
        <div class="col-md-4 footer-col">
            <h3> </h3>
            <p> &copy; <?php  print date("Y") ; ?> </p>
            
        </div>
       
        
    </div>
    
</div>
</footer>






</body>
</html>

