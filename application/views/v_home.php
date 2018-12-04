<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Koplak Food</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900|Lato:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url() ?>master/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url() ?>master/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>master/lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>master/lib/hover/hoverex-all.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url() ?>master/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.html">Koplak Food</a>
      </div>
      <div class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.html">HOME</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="contact.html">CONTACT</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="produk.html">PRODUK</a></li>
              <li><a href="transaksi.html">TRANSAKSI</a></li>
              <li><a href="keranjang.html">KERANJANG</a></li>
              <li><a href="profil.html">YOUR PROFIL</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <!-- *****************************************************************************************************************
   HEADERWRAP
   ***************************************************************************************************************** -->
  <div id="headerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h1>Sistem Penjualan Koplak Food</h1>
        </div>
        <div class="container mt">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 centered">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="<?php echo base_url() ?>master/img/1.jpeg" class="center" alt="">
            </div>
            <div class="item">
              <img src="<?php echo base_url() ?>master/img/2.jpeg" class="center" alt="">
            </div>
            <div class="item">
              <img src="<?php echo base_url() ?>master/img/3.jpeg" class="center" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->

  <!-- *****************************************************************************************************************
   SERVICE LOGOS
   ***************************************************************************************************************** -->
  <div id="service">
    <div class="container">
      <div class="row centered">
        <div class="col-md-4">
          <i class="fa fa-heart-o"></i>
          <h4>Olahan Salak</h4>
          <p>Dari produk ini membuat dari bahan dasar salak lokal jember.</p>
          <p><br/><a href="#" class="btn btn-theme">More Info</a></p>
        </div>
        <div class="col-md-4">
          <i class="fa fa-flask"></i>
          <h4>Olahan Tape</h4>
          <p>Dari produk ini membuat dari bahan dasar tape.</p>
          <p><br/><a href="#" class="btn btn-theme">More Info</a></p>
        </div>
        <div class="col-md-4">
          <i class="fa fa-trophy"></i>
          <h4>Olahan Kopi</h4>
          <p>Dari produk ini mebuat dari bahan kopi membuat berbagai jenis macam kopi.</p>
          <p><br/><a href="#" class="btn btn-theme">More Info</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- *****************************************************************************************************************
   PORTFOLIO SECTION
   ***************************************************************************************************************** -->
  <div id="portfoliowrap">
    <h3>Produk</h3>

    <div class="portfolio-centered">
      <div class="recentitems portfolio">
        <div class="portfolio-item graphic-design">
          <div class="he-wrap tpl6">
            <img src="<?php echo base_url() ?>master/img/portfolio/portfolio_09.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">Kopi Biji Salak</h3>
                <a data-rel="prettyPhoto" href="<?php echo base_url() ?>master/img/portfolio/portfolio_09.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="produk.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

        <div class="portfolio-item web-design">
          <div class="he-wrap tpl6">
            <img src="<?php echo base_url() ?>master/img/portfolio/portfolio_02.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">Kripik Tape</h3>
                <a data-rel="prettyPhoto" href="<?php echo base_url() ?>master/img/portfolio/portfolio_02.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="produk.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

        <div class="portfolio-item graphic-design">
          <div class="he-wrap tpl6">
            <img src="<?php echo base_url() ?>master/img/portfolio/portfolio_03.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">Kurma Salak</h3>
                <a data-rel="prettyPhoto" href="<?php echo base_url() ?>master/img/portfolio/portfolio_03.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="produk.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

        <div class="portfolio-item graphic-design">
          <div class="he-wrap tpl6">
            <img src="<?php echo base_url() ?>master/img/portfolio/portfolio_04.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">Ladrang Tape</h3>
                <a data-rel="prettyPhoto" href="<?php echo base_url() ?>master/img/portfolio/portfolio_04.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="produk.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

        <div class="portfolio-item graphic-design">
          <div class="he-wrap tpl6">
            <img src="<?php echo base_url() ?>master/img/portfolio/portfolio_06.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">Kopi Rosbusta</h3>
                <a data-rel="prettyPhoto" href="<?php echo base_url() ?>master/img/portfolio/portfolio_06.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="produk.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

        <div class="portfolio-item books">
          <div class="he-wrap tpl6">
            <img src="<?php echo base_url() ?>master/img/portfolio/portfolio_07.jpg" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">Kopi Arabika</h3>
                <a data-rel="prettyPhoto" href="<?php echo base_url() ?>master/img/portfolio/portfolio_07.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="produk.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

      </div>
      <!-- portfolio -->
    </div>
    <!-- portfolio container -->
  </div>
  <!--/Portfoliowrap -->


  <!-- *****************************************************************************************************************
   MIDDLE CONTENT
   ***************************************************************************************************************** -->

  <div class="container mtb">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-1">
        <h4>More About Our Agency.</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
        <p><br/><a href="about.html" class="btn btn-theme">More Info</a></p>
      </div>

      <div class="col-lg-3">
        <h4>Frequently Asked</h4>
        <div class="hline"></div>
        <p><a href="#">How cool is this theme?</a></p>
        <p><a href="#">Need a nice good-looking site?</a></p>
        <p><a href="#">Is this theme retina ready?</a></p>
        <p><a href="#">Which version of Font Awesome uses?</a></p>
        <p><a href="#">Free support is integrated?</a></p>
      </div>

      <div class="col-lg-3">
        <h4>Latest Posts</h4>
        <div class="hline"></div>
        <p><a href="single-post.html">Our new site is live now.</a></p>
        <p><a href="single-post.html">Retina ready is not an option.</a></p>
        <p><a href="single-post.html">Bootstrap 3 framework is the best.</a></p>
        <p><a href="single-post.html">You need this theme, buy it now.</a></p>
        <p><a href="single-post.html">This theme is what you need.</a></p>
      </div>

    </div>
  </div>

  <!-- *****************************************************************************************************************
   TESTIMONIALS
   ***************************************************************************************************************** -->
  <div id="twrap">
    <div class="container centered">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <i class="fa fa-comment-o"></i>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          <h4><br/>Marcel Newman</h4>
          <p>WEB DESIGNER</p>
        </div>
      </div>
    </div>
  </div>

  <!-- *****************************************************************************************************************
   OUR CLIENTS
   ***************************************************************************************************************** -->
  <!-- *****************************************************************************************************************
   FOOTER
   ***************************************************************************************************************** -->
  <div id="footerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>About</h4>
          <div class="hline-w"></div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="col-lg-4">
          <h4>Social Links</h4>
          <div class="hline-w"></div>
          <p>
            <a href="https://www.youtube.com/channel/UCOaG94xLltZrE-dQV6gDhaw/videos?view=0&shelf_id=0&sort=dd"><i class="fa fa-youtube"></i></a>
            <a href="https://web.facebook.com/koplakfood/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/koplak_food"><i class="fa fa-instagram"></i></a>
            <a href="https://api.whatsapp.com/send?phone=62857237482717&"><i class="fa fa-whatsapp"></i></a>

          </p>
        </div>
        <div class="col-lg-4">
          <h4>Our Address</h4>
          <div class="hline-w"></div>
          <p>
          Bustomi<br/> Jalan raya Ajung,
        </p>
        <p>
          Email: kopibijisalak@gmail.com<br/> Tel/WA: 0857237482717
        </div>
        </div>

      </div>
    </div>
  </div>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Solid</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/solid-bootstrap-business-template/
          Licensing information: https://templatemag.com/license/
        -->
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url() ?>master/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>master/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>master/lib/php-mail-form/validate.js"></script>
  <script src="<?php echo base_url() ?>master/lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="<?php echo base_url() ?>master/lib/isotope/isotope.min.js"></script>
  <script src="<?php echo base_url() ?>master/lib/hover/hoverdir.js"></script>
  <script src="<?php echo base_url() ?>master/lib/hover/hoverex.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url() ?>master/js/main.js"></script>

</body>
</html>
