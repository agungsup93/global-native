<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistem Informasi Management</title>
	<link rel="shortcut icon" href="assets/img/logo.png">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/style_index.css">
</head>
<body>
<!----Header---->
<nav class="navbar navbar-expand-lg navbar-light al-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" height="36px" />PT. Globalnine Indonesia
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="primaryNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php include "function/time/controller_waktu.php";?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!----Body---->
<br><br><br>
<section class="hk-services">
    <div class="container">
        <div class="row">
           
            <div class="col-sm-6 col-md-6">
                <a href="sales/login">
                    <div class="hk-services-box text-center">
                        <i class="fas fa-folder-open"></i>
                        <h3>Sales</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-6">
                <a href="inventory/login">
                    <div class="hk-services-box text-center">
                        <i class="fas fa-dolly"></i>
                        <h3>Inventory</h3>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</section>
</body>
</html>