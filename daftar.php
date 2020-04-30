<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>BEM | LP3I Bandung</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicons.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">  
    <!-- Elastic grid css file -->
    <link rel="stylesheet" href="css/elastic_grid.css"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>    
    <!-- Default Theme css file -->
    <link id="orginal" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/Registration.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background: black">


<!-- <center>
    <h1 style="color : white;">DAFTAR</h1>    
</center>

<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <form>
                    <input type="text" name="nim" placeholder="NIM" class="form-control" style="width: 500px;">
                    <br>
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" style="width: 500px;">
                    <br>
                    <input type="email" name="email" placeholder="Email" class="form-control" style="width: 500px;">
                    <br>
                    <input type="password" name="password" placeholder="Password" class="form-control" style="width: 500px;">
                    <br> 
                   <input class="submit_btn" type="submit" value="Kirim"> 
                </form>
            </center>
        </div>
    </div>
</div> -->
<div style="margin-left: 10%;">
    <h1 style="color: white" >BEM PLB</h1> 
</div>



<div class="register-photo">
    <?php 
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == 'email_ada'){
                        echo "
                                <center>
                                    <div class='alert ' role='alert' style='width: 70%;background-color: rgb(162,23,23);color: rgb(225,237,228)'><strong>Email</strong> sudah dipakai!</div>
                                </center>
                            ";
                    }elseif($_GET['pesan'] == 'nim_ada'){
                        echo "
                                <center>
                    
                                     <div class='alert ' role='alert' style='width: 70%;background-color: rgb(162,23,23);color: rgb(225,237,228)'><strong>NIM</strong> sudah dipakai!</div>
                      
                                </center>
                            ";
                    }

                }
             ?>
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post"  action="backend/register.php">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="nim" placeholder="NIM" required></div>
                <div class="form-group"><input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                <div class="form-group"><button class="btn  btn-block" style="background-color: black;color: white" type="submit">Sign Up</button></div>
            </form>
        </div>
    </div>

    <div>
        <center>
            <h3 style="color: white;font-size: 14px;">Copyright © 2019 By BEM Periode 2019-2020</h3> 
        </center>
    </div>
    


       <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/jquery.ui.map.js"></script>
     <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script> 
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.superslides.min.js" type="text/javascript"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- for portfolio filter gallery -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/elastic_grid.min.js"></script>
    <script src="js/portfolio_slider.js"></script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>
  </body>
</html>