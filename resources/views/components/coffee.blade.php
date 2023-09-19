<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="icon" type="image/png" href="images/favicon.png">
  <title>ksmpreanger</title>

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800" rel="stylesheet">

  <!-- CSS FILES -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/zoomslider.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
  <!-- TOP BAR -->
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <ul class="top-bar-contacts">
            <li><i class="fa fa-phone" aria-hidden="true"></i>+62 821 1526 5767</li>
            <li class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>mekarwangi.coffee@gmail.com</li>
            <li class="skype"><i class="fa fa-instagram" aria-hidden="true"></i>mekarwangi.coffee</li>
            <li class="skype"><i class="fa fa-facebook" aria-hidden="true"></i>Mekar Wangi Coffee</li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 top-social-wrap">
          <ul class="top-social">
            <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- TOP BAR END -->
  <!-- HEADER -->
  <div class="header-wrap">
    <header class="top-nav inner-page" data-spy="affix" data-offset-top="34">
      <div class="container">
        <div class="row position-relative">
          <div class="col-lg-2 col-md-2">
            <a href="index.html" class="small-logo alt"><img src="images/small-logo.png" alt=""></a>
          </div>
          <div class="col-lg-10 col-md-10">
            <nav class="navbar collapse navbar-collapse" id="coffee-menu">
              <div class="col-lg-10 col-md-10">
                <ul class="main-menu nav">
                  <li><a href="/">Home</a></li>
                  <li><a href="/products">products</a></li>
                  <li><a href="/where">where to buy</a></li>
                  <li><a href="/testimonials">Testimonials</a></li>
                  <li><a href="/galleries">Gallery</a></li>
                  <li><a href="/blogs">blog</a></li>
                  <li><a href="/contacts">Contacts</a></li>
                </ul>
              </div>
              <!-- <div class="col-lg-2 col-md-12">
                <div class="top-right">
                  <a href="cart.html" class="cart">
                    <span class="name">Cart</span>
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span class="count">0</span>
                  </a>
                  <div class="top-search">
                    <input type="text" placeholder="Search">
                    <a href="#" class="fa fa-search search" aria-hidden="true"></a>
                  </div>
                </div>
              </div> -->
            </nav>
          </div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#coffee-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      </div>
    </header>
  </div>
  <!-- HEADER END -->

  {{ $slot }}

  <!-- SUBSCRIBE FORM -->
  <!-- <section class="subscribe">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
          <div class="inner">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="top-title">Want to know about new types of coffee?</div>
                <div class="bottom-title">Get our weekly email</div>
              </div>
              <div class="col-lg-5 col-md-6">
                <form class="subs-form">
                  <input type="text" placeholder="Enter Your Email">
                  <input type="submit" value="SUBMIT">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- SUBSCRIBE FORM END -->

  <!-- FOOTER -->
  <footer class="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-6">
            <a href="#" class="footer-logo"><img src="images/footer-logo.png" alt=""></a>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="footer-about">
              <div class="title">About Mekarwangi Coffee</div>
              <p>Mekarwangi Coffee adalah merek kopi yang menghadirkan keindahan rasa kopi dalam setiap cangkir. <br> Kami berasal dari Indonesia, sebuah negara dengan kekayaan alam yang luar biasa, terutama dalam hal produksi kopi berkualitas tinggi. </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <ul class="footer-contacts">
              <li><i class="fa fa-phone" aria-hidden="true"></i>+62 821 1526 5767</li>
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i>mekarwangi.coffee@gmail.com</li>
              <li><i class="fa fa-instagram" aria-hidden="true"></i>mekarwangi.coffee</li>
              <li><i class="fa fa-facebook" aria-hidden="true"></i>Mekar Wangi Coffee</li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-social">
              <div class="title">Follow Us</div>
              <ul class="social">
                <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                <li><a href="https://wa.me/082115265767" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                <li><a href="https://instagram.com/mekarwangi.coffee" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com/mekar.coffee" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="copyrights"><a href="/">ksmpreanger</a> 2023 &copy; All Rights reserved</div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- FOOTER END -->

  <!-- JAVASCRIPT FILES -->
  <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTRSHf8sjMCfK9PHPJxjJkwrCIo5asIzE"></script>
  <script type="text/javascript" src="{{ asset('js/map-style.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.zoomslider.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/waypoint.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/custom-number.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.select2.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.swipebox.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>

</html>