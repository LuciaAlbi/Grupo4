<?php

require_once "../../vendor/autoloader.php";
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Buscar</title>

</head>


<body>
<header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-sm navbar-dark">
                    <a class="navbar-brand col-1" href="header.php">
                        <img src="../../assests/img/image-removebg-preview.png" alt="Avatar Logo" style="width:50px;">
                    </a>
                    <h2 class="col-9 text-center">La casa del electrodomestico</h2>
                    <div class="dropdown col-5">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            Dropdown button
                        </button>
                        <ul class=" dropdown-menu">
                            <li><a class="dropdown-item" href="#">Poner nombre</a></li>
                            <li><a class="dropdown-item" href="#">Poner nombre</a></li>
                            <li><a class="dropdown-item" href="#">Poner nombre</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="container-fluid">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
<div class="container-fluid">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>


</body>

</html>