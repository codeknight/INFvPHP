<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Contact | Innovation Factory</title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/dark.css">
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

    <div class="header-notice">
      <div class="container">
        <div class="sixteen columns">
          <p><strong>THE INNOVATION FACTORY</strong></p>
        </div>
      </div>
    </div><!-- /header-notice -->

    <div class="container">
      <div class="five columns">
        <a href="index-2.html" id="logo">Powerful.</a>
      </div>

      <div class="eleven columns">
        <nav class="menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="services.php">Services</a>
            <li><a href="portfolio.php">Portfolio</a></li>
            <!-- <li><a href="blog.php">Blog</a></li> -->
            <li  class="current-menu-item"><a href="contact.php">Contact</a></li>
          </ul>
        </nav><!-- /menu -->
      </div>
    </div>
    
  </header>
  <div role="main">

    <div class="container contact">


        <div class="sixteen columns">
      
          <div class="sixteen columns alpha content">

            <div id="map_canvas" style="height: 400px;"></div>
            <script>
            function initialize() {
              var pixby = new google.maps.LatLng(54.56745979999999, -1.2314930000000004);
              var myLatlng = new google.maps.LatLng(54.56745979999999, -1.2314930000000004);
              var mapOptions = {
                zoom: 13,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                panControl: false,
                scrollwheel: false,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.BIG,
                    position: google.maps.ControlPosition.LEFT_TOP
                },
                streetViewControl: false
              }

              var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

              var contentString = '<div id="content">'+
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<h4 id="firstHeading" class="firstHeading">iNNOVATION FACTORY</h4>'+
                  '<div id="bodyContent">'+
                  '<p>59, Sincil Bank, Lincoln, LN5 7TH</p>'+
                  '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

              var marker = new google.maps.Marker({
                  position: pixby,
                  map: map,
                  title: 'Powerful.',
                  zIndex: 99
              });
              google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
              });
              
            }

            initialize();

          </script>

          <div class="five columns alpha address">
            <h3>Address</h3>

            <p>
              89 PARK LANE<br>
              MIDDLESBROUGH<br>
              UNITED KINGDOM<br><br>

              Email: <a href="#">info@innof.com</a><br>
              Skype: <a href="#">theinnof</a>
            </p>

            <h3>Social</h3>
            <p>
              Twitter: <a href="http://twitter.com/theinnof">@theinnof</a><br>
              Facebook: <a href="http://fb.me/theinnof">theinnof</a><br>
            </p>

          </div>

          <div class="eleven columns alpha">
            <h1>Get in touch</h1>
            <p>Please write to us - feedback, queries or anything you want to. </p>

            <form>
              <label for="name">Name:</label>
              <input type="text" id="name">

              <label for="email">Email:</label>
              <input type="email" id="email">

              <label for="message">Message:</label>
              <textarea id="message" rows="8"></textarea>


              <p><br><input type="submit" class="button branded" value="Send message"></p>
            </form>
          </div>

            
          </div><!-- /content -->

        </div>

      </div><!-- /container -->


  </div><!-- /main -->
    <?php include("footer.php") ?>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>

</body>
</html>