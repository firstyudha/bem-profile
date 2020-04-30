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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body> 
     <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->

            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="#">BEM<span>PLB</span></a>
            
            <!-- IMG BASED LOGO  -->
            <!--  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a> --> 
            
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href="#">Beranda</a></li>
              <li><a href="#about">Tentang</a></li>
              <li><a href="#works">Kabinet</a></li> 
              <li><a href="#service">Proker</a></li> 
              
              <li><a href="#team">Pesan</a></li> 
             
              <li><a href="#blog">Kegiatan</a></li>               
              <li><a href="#contact">Kritik dan Saran</a></li>
              <li><a href="#" data-toggle="modal" data-target="#exampleModal1">Masuk Admin</a></li>



  <!-- Modal -->
                      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <h5 class="modal-title " id="exampleModalLabel">Login Admin</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form method="post" action="backend/login_admin.php" >
                              <label>username</label>
                              <input type="text" class="form-control" name="username">
                              <label>Password</label>
                              <input type="password" class="form-control" name="password">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
  <!-- Akhir Modal -->


            </ul>           
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->

      <!-- BEGIN SLIDER AREA-->
      <div class="slider_area">
        <!-- BEGIN SLIDER-->          
        <div id="slides">
          
          <ul class="slides-container">

            <!-- THE FIRST SLIDE-->
            <li>
              <!-- FIRST SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- FIRST SLIDE MAIN IMAGE -->
              <img src="img/full-slide1.jpg" alt="img">
              <!-- FIRST SLIDE CAPTION-->
              <div class="slider_caption">
                <?php

                if(isset($_GET['pesan'])){

                    //alert login
                    if($_GET['pesan'] == 'belum_login'){
                        echo "
                               
                                    <script>alert('Anda harus login terlebih dahulu!');</script>
                                
                            ";
                    }

                    //alert kritik dan saran
                    if($_GET['pesan'] == 'belum_daftar'){
                        echo "
                               
                                    <div class='alert ' role='alert' style='width: 70%;background-color: rgb(162,23,23);margin-left: 30%;color: rgb(225,237,228)'><strong>NIM belum terdaftar</strong> silakan daftar terlebih dahulu!</div>
                                
                            ";
                    }elseif($_GET['pesan'] == 'terkirim'){
                         echo "
                               
                                    <div class='alert ' role='alert' style='width: 70%;background-color: green;margin-left: 30%;color: rgb(225,237,228)'>Terima Kasih Kritik atau Saran Telah <strong>terkirim!</strong></div>
                                
                            ";
                    }

                }

              ?>
                <h2>Menjadi Mahasiswa yang Benar-benar Mahasiswa</h2>
                <p>BEM 2019-2020</p>
                <a href="#about" class="slider_btn">tentang</a>              
              </div>
            </li>

            <!-- THE SECOND SLIDE-->
            <li>
              <!-- SECOND SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- SECOND SLIDE MAIN IMAGE -->
              <img src="img/full-slide1.jpg" alt="img">
              <!-- SECOND SLIDE CAPTION-->
              <div class="slider_caption">
                <?php 
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == 'belum_daftar'){
                        echo "
                               
                                    <div class='alert ' role='alert' style='width: 70%;background-color: rgb(162,23,23);margin-left: 30%;color: rgb(225,237,228)'><strong>Belum terdaftar</strong> silakan daftar terlebih dahulu!</div>
                                
                            ";
                    }elseif($_GET['pesan'] == 'terkirim'){
                         echo "
                               
                                    <div class='alert ' role='alert' style='width: 70%;background-color: green;margin-left: 30%;color: rgb(225,237,228)'>Terima Kasih Kritik atau Saran Telah <strong>terkirim!</strong></div>
                                
                            ";
                    }

                }
             ?>
                <h2>Indonesia tidak tersusun dari batas peta, tapi gerak dan peran besar kaum muda</h2>
                <p>Najwa Shihab</p>               
              </div>
            </li>

            <!-- THE THIRD SLIDE-->
            <li>
              <!-- THIRD SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- THIRD SLIDE MAIN IMAGE -->
              <img src="img/full-slide1.jpg" alt="img">
              <!-- THIRD SLIDE CAPTION-->
              <div class="slider_caption">
                <?php 
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == 'belum_daftar'){
                        echo "
                               
                                    <div class='alert ' role='alert' style='width: 70%;background-color: rgb(162,23,23);margin-left: 30%;color: rgb(225,237,228)'><strong>Belum terdaftar</strong> silakan daftar terlebih dahulu!</div>
                                
                            ";
                    }elseif($_GET['pesan'] == 'terkirim'){
                         echo "
                               
                                    <div class='alert ' role='alert' style='width: 70%;background-color: green;margin-left: 30%;color: rgb(225,237,228)'>Terima Kasih Kritik atau Saran Telah <strong>terkirim!</strong></div>
                                
                            ";
                    }

                }
             ?>
                <h2>Tidak ada pohon perjuangan yang berbuah kesia-siaan</h2>
                <p>BEM 2019-2020</p>
                <a href="#about" class="slider_btn">tentang</a>
              </div>
            </li>

            
          </ul>
          <!-- BEGAIN SLIDER NAVIGATION -->
          <nav class="slides-navigation">
            <!-- PREV IN THE SLIDE -->
            <a class="prev" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Prev</strong></h3>
            </a>
            <!-- NEXT IN THE SLIDE -->
            <a class="next" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Next</strong></h3>
            </a>
          </nav>       
        </div>
        <!-- END SLIDER-->          
      </div>
      <!-- END SLIDER AREA -->
    </header>
    <!--=========== End HEADER SECTION ================--> 


    <!--=========== BEGIN ABOUT SECTION ================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about_area">
              <!-- START ABOUT HEADING -->
              <div class="heading">
                <h2 class="wow fadeInLeftBig">BEM LP3I Bandung </h2>
                <h4>VISI DAN MISI PRESMA-WAPRESMA</h4>
              </div>

              <!-- START VISI CONTENT -->
              <div class="about_content">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
                        <!-- START SINGLE FEATURED ITEAM #1-->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                 <span class="fa fa-check-square-o"></span>VISI
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <h3>
                                Mewujudkan Badan Eksekutif Mahasiswa (BEM) yang progresif, berkualitas, unggul dan menghidupkan kembali roda Organisasi di LP3I. Serta menjadi wadah aspirasi demi kesejahteraan mahasiswa.
                              </h3>
                             
                            </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_slider">
                      <!-- BEGAIN FEATURED SLIDER -->
                      <div class="featured_slider">
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <a href="#"> <img src="img/feature_img1.jpg" alt="img"></a>                          
                        </div>       
                      </div>
                      <!-- END FEATURED SLIDER -->
                    </div>
                  </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="about_slider">
                        <!-- BEGAIN FEATURED SLIDER -->
                        <div class="featured_slider">
                          <!-- SINGLE SLIDE IN THE SLIDER -->
                          <div class="single_iteam"><br><br>
                            <a href="#"> <img src="img/feature_img1.jpg" alt="img"></a>                          
                          </div>
                        </div>
                        <!-- END FEATURED SLIDER -->
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
                        <!-- START SINGLE FEATURED ITEAM #1-->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                 <span class="fa fa-check-square-o"></span>MISI
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <ol>
                                <h4><li>Membenahi kinerja BEM sebagai induk organisasi di LP3I.</li></h4>
                                <h4><li>Mengembalikan fungsi BEM yang sebenarnya.</li></h4>
                                <h4><li>Menjadikan BEM sebagai organisasi yang aktif, kreatif, dan inisiatif.</li></h4>
                                <h4><li>Meningkatkan kesadaran "Cinta Kampus". </li></h4>
                                <h4><li>Mengenalkan "Payung Hukum" kepada warga Politeknik LP3I.</li></h4>
                                <h4><li>Menyampaikan suara mahasiswa.</li></h4>
                                <h4><li>Membuat Laporan Pertanggung Jawaban (LPJ) di setiap kegiatan.</li></h4>
                                <h4><li>Menghidupkan 4 sifat organisasi, yaitu :
                             Konsultasi, Koordinasi, Kolaborasi, dan Intruksi. </li></h4>
                              </ol>
                             
                            </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                    
                </div>

              </div>
            </div>
          </div>
        </div>       
      </div>
    </section>
    <!--=========== END ABOUT SECTION ================-->

    <!--=========== BEGAIN WORKS SECTION ================-->
    <section id="works">
      <!-- BEGAIN FORTFOLIO WORSK SECTION -->
      <div class="row">
        <div class="portfolio_area">
          <!-- BEGAIN PORTFOLIO HEADER -->
          <div class="row">
            <div class="col-lg-12 col-md-12">
             <div class="container">
                <div class="heading">
                  <h2 class="wow fadeInLeftBig"> <span>kabinet</span> Aksi Revolusi</h2>
                </div>
              </div>
            </div>
          </div>
          <!-- END PORTFOLIO HEADER -->

          <!-- BEGAIN PORTFOLIO GALLERY -->
          <div class="row">
            <div class="portfolio_gallery">
              <div id="elastic_grid_demo"></div>
            </div>
          </div>
          <!-- END PORTFOLIO GALLERY -->
        </div>         
      </div>      
      <!-- END FORTFOLIO WORSK SECTION -->
    </section>
    <!--=========== END WORKS SECTION ================-->

    <!--=========== BEGIN SERVICE SECTION ================-->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN SERVICE HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Program Kerja</h2>
            </div>
          </div>          
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN SERVICE  -->
            <div class="service_area">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_slider">
                      <!-- BEGAIN FEATURED SLIDER -->
                      <div class="featured_slider">
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <h3>POSMMA</h3>
                          <a href="#"> <img src="img/proker/posmma.png" style="height: 60%; width: 60%; margin-top: 10%;padding-right: 5%;" alt="img" align="left"><p style="margin-top: 27%; font-size: 28px;">Pekan Olahraga Seni Mahasiswa, Manajemen, dan Alumni</p></a>                          
                        </div>       
                      </div>
                      <!-- END FEATURED SLIDER -->
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
                        <!-- START SINGLE FEATURED ITEAM #1-->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="margin-top: 23%;">
                                 <span class="fa fa-check-square-o"></span>Tujuan
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <ol>
                                <h4><li>Merealisasikan program kerja BEM Politeknik LP3I, periode 2019-2020</li></h4>
                                <h4><li>Mempererat tali persaudaraan antar civitas academica dan alumni Politeknik LP3I</li></h4>
                                <h4><li>Menumbuhkan minat, bakat dan kreativitas, khususnya bagi bahasiswa</li></h4>
                                <h4><li>Menumbuhkan jiwa semangat dalam meraih tujuan</li></h4>
                                <h4><li>Menumbuhkan jiwa sportivitas</li></h4>
                                
                              </ol>
                             
                            </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
           
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SERVICE SECTION ================-->


    <!--=========== BEGAIN TEAM SECTION ================-->
    <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN ABOUT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Pesan untuk BEM 2019-2020</h2>            
            </div>
            <div class="team_area">
              <!-- BEGAIN TEAM SLIDER -->
              <div class="team_slider">  
                <!-- BEGAIN SINGLE TEAM SLIDE#1 -->              
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5 class="">Nama Pemberi Pesan</h5>
                    <span>Founder</span>                        
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#2 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Nama Pemberi Pesan</h5>
                    <span>CMS Developer</span>                        
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#3 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Nama Pemberi Pesan</h5>
                    <span>Manager</span>                        
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#4 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Nama Pemberi Pesan</h5>
                    <span>Developer</span>                        
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#5 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Nama Pemberi Pesan</h5>
                    <span>Programmer</span>                        
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#6 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Nama Pemberi Pesan</h5>
                    <span>Web Designer</span>                        
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#7 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Nama Pemberi Pesan</h5>
                    <span>Marketing Head</span>                        
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>                              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END TEAM SECTION ================-->


    


    <!--=========== BEGAIN BLOG SECTION ================-->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Kegiatan</h2>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN BLOG CONTENT -->
            <div class="blog_content">

              <!-- BEGAIN BLOG SLIDER -->
              <div class="blog_slider">
                <!-- BEGAIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/kegiatan/konsolidasi1.jpeg" alt="img">
                    </div>
                    <h3>KONSOLIDASI FKMPI JABAR KE-4</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>KEMENLU</a>
                      <span><i class="fa fa-calendar"></i>18.00 - 22.00 WIB</span>
                      <a href="#"><i class="fa fa-tags"></i>Gedung Direktorat Poltekkes Kemenkes Bandung (Jl. Padjajaran No.56)</a>
                    </div>
                    <p>
                      Konsolidasi FKMP ke-4 membahas mengenai :
                      <ol style="padding-left: 15%;">
                        <li>Galang Dana di Desa Cipeundeuy</li>
                        <li>Open House FKMPI</li>
                        <li>Evaluasi Per-Divisi</li>
                      </ol>
                    </p>                  
                  </div>
                </div>

                <!-- BEGAIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Sed ut perspiciatis unde omnis</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                      <span><i class="fa fa-calendar"></i>6:49 AM</span>
                      <a href="#"><i class="fa fa-tags"></i>Technology</a>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                    <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                  </div>
                </div>
                <!-- BEGAIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Sed ut perspiciatis unde omnis</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                      <span><i class="fa fa-calendar"></i>6:49 AM</span>
                      <a href="#"><i class="fa fa-tags"></i>Technology</a>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                    <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                  </div>
                </div>
                <!-- BEGAIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Sed ut perspiciatis unde omnis</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                      <span><i class="fa fa-calendar"></i>6:49 AM</span>
                      <a href="#"><i class="fa fa-tags"></i>Technology</a>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                    <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                  </div>
                </div>
                <!-- BEGAIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Sed ut perspiciatis unde omnis</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                      <span><i class="fa fa-calendar"></i>6:49 AM</span>
                      <a href="#"><i class="fa fa-tags"></i>Technology</a>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                    <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                  </div>
                </div>
                <!-- BEGAIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Sed ut perspiciatis unde omnis</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                      <span><i class="fa fa-calendar"></i>6:49 AM</span>
                      <a href="#"><i class="fa fa-tags"></i>Technology</a>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                    <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END BLOG SECTION ================-->
   
    <!--=========== BEGAIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START CONTACT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Kritik dan Saran</h2>
            </div>
          </div>
        </div>       
        <div class="row">
          <!-- BEGAIN CONTACT CONTENT -->
          <div class="contact_content">
            <!-- BEGAIN CONTACT FORM -->
            <div class="col-lg-5 col-md-5 col-sm-5">
              <div class="contact_form">

                <!-- FOR CONTACT FORM MESSAGE -->
                <div id="form-messages"></div>

                <form action="backend/kritik.php" method="post">
                  <input class="form-control" name="nim" type="text" placeholder="NIM" required>
                  <input class="form-control" name="password" type="password" placeholder="Password" required="">
                  <br>   
                  <textarea class="form-control" cols="30" name="kritik" rows="10" placeholder="Kritik dan Saran" required=""></textarea>
                  <h5 style="float: right; color: #4f535e">Belum terdaftar? daftar <a href="daftar.php" target="_blank" style="color : skyblue;"><strong>di sini</strong></a></h5>
                   <input class="submit_btn" type="submit" value="Kirim">  
                </form>
              </div>
            </div>
            <!-- BEGAIN CONTACT MAP -->
            <div class="col-lg-7 col-md-7 col-sm-7">
              <div class="about_slider">
                      <!-- BEGAIN FEATURED SLIDER -->
                      <div class="featured_slider">
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <a href="#"> <img src="img/feature_img1.jpg" alt="img"></a>                          
                        </div>       
                      </div>
                      <!-- END FEATURED SLIDER -->
                    </div>
            </div>           
          </div>
        </div>      
      </div>             
    </section>
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGAIN CONTACT FEATURE SECTION ================-->
    <section id="contactFeature">
      <!-- SKILLS COUNTER OVERLAY -->
      <div class="slider_overlay" ></div>
      <div class="row">
        <div class="col-lg-12 col-md-12">       
          <div class="container">               
              <div class="contact_feature">
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-phone"></i>
                <h4>Hubungi Kami</h4>
                <p>+62 xxx xxx</p>                
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-envelope-o"></i>
                <h4>Alamat Surel</h4>
                <p>bempolitekniklp3i@gmail.com</p>
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-map-marker"></i>
                <h4>Lokasi</h4>
                <p>Jalan Pahlawan nomor 59</p>
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-clock-o"></i>
                <h4>Kumpulan Rutin</h4>
                <p>Jumat 17.00 - selesai</p>
              </div>
            </div>
          </div>
          </div>         
        </div>
      </div>
    </section>
    <!--=========== END CONTACT FEATURE SECTION ================-->

     <!--=========== BEGAIN FOOTER ================-->
     <footer id="footer">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_left">
				<!--=========== Designed By WpFreeware Team ================-->
               <p>Copyright &copy; 2019 By BEM Periode 2019-2020</p>
			   <!--=========== Designed By WpFreeware Team ================-->
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_right">
               <ul class="social_nav">
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
      </footer>
      <!--=========== END FOOTER ================-->

     <!-- Javascript Files
     ================================================== -->
  
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