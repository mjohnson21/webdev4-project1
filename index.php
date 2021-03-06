<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body id='page-home'>
  <!--#include virtual="/includes/navbar.shtml" -->

  <div id="home-carousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item vehicle-slide active">
        <img src="img/home/feature-1-bg.jpg" alt="bg">
        <img src="img/home/feature-1-vehicles.jpg" id="vehicles" alt="vehicles" >
      </div>
      <div class="item cherokee-slide">
        <img src="img/home/feature-2-bg.jpg" alt="bg">
      </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
  </div>



  <div class="row-fluid" id="home-features">
    <ul class="thumbnails">
      <li class="span4 offset1">
        <a href="#feature1" class="thumbnail" data-toggle="modal">
          <img data-src="holder.js/430x200/auto" >
        </a>
      </li>
      <li class="span3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/310x200/auto" >
        </a>
      </li>
      <li class="span3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/310x200/auto" >
        </a>
      </li>
    </ul>
  </div>

  <div id="feature1" class="modal hide fade">
    <img data-src="holder.js/560x400/auto" >
  </div>


  <!--#include virtual="/includes/footer.shtml" -->




    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/vendor/holder.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
