<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Motor PLUS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customsweb.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('a[href="#navbar-more-show"], .navbar-more-overlay').on('click', function(event) {
        event.preventDefault();
        $('body').toggleClass('navbar-more-show');
        if ($('body').hasClass('navbar-more-show'))	{
          $('a[href="#navbar-more-show"]').closest('li').addClass('active');
        }else{
          $('a[href="#navbar-more-show"]').closest('li').removeClass('active');
        }
        return false;
        });
      });
    </script>
    <style>
      @font-face {
        font-family: Nithan;
        src: url('../fonts/Nithan.ttf') format('truetype') ;
      }
      #map {
        height: 500px;
      }
      html, body {
        height: 100%;
        width: auto;
        margin: 0px;
        padding: inherit;
      }
      div .scroll{
        overflow-x: hidden;
        overflow-y: scroll;
        width: auto;
        height: 400px;
      }
      label{
        font-family: Nithan;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
      <!-- Header -->
        <div class="navbar-more-overlay row"></div>
          <nav class="navbar navbar-inverse navbar-fixed-top animate">
          <div class="container navbar-more visible-xs">
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Submit</button>
                  </span>
                </div>
              </div>
            </form>
            <ul class="nav navbar-nav">
              <li>
                <a href="<?php echo base_url(); ?>conuser/regis_user">
                  <span class="menu-icon fa fa-picture-o"></span>
                  สมัครสมาชิกผู้ใช้
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>conuser/loginformuser">
                  <span class="menu-icon fa fa-bell-o"></span>Login ผู้ใช้
                </a>
              </li>
            </ul>
          </div>
          <div class="container">
            <div class="navbar-header hidden-xs">
              <img src="<?php echo base_url(); ?>../assets/logo/logo.png" class="img-responsive" height="auto" width="150"/>
            </div>
            <ul class="nav navbar-nav navbar-right mobile-bar" style="padding-top:10px;">
              <li>
                <a href="<?php echo base_url(); ?>lobby/windows">
                  <span class="menu-icon fa fa-home"></span>
                  หน้าเว็บ
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>lobby/review">
                  <span class="menu-icon fa fa-star"></span>
                  <span class="hidden-xs">รีวิวร้านซ่อมรถ</span>
                  <span class="visible-xs">รีวิวร้าน</span>
                </a>
              </li>
              <li class="hidden-xs">
                <a href="<?php echo base_url(); ?>conuser/regis_user">
                  <span class="menu-icon fa fa-user-o"></span>สมัครสมาชิกผู้ใช้
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>lobby/information">
                  <span class="menu-icon fa fa-list-alt"></span>
                  เกี่ยวกับเว็บ
                </a>
              </li>
              <li class="hidden-xs">
                <a href="<?php echo base_url(); ?>conuser/loginformuser">
                  <span class="menu-icon fa fa-bell-o"></span>Login ผู้ใช้
                </a>
              </li>
              <li class="visible-xs">
                <a href="#navbar-more-show">
                  <span class="menu-icon fa fa-bars"></span>
                  More
                </a>
              </li>
            </ul>
          </div>
        </nav><br />
			<!-- Body -->
			<div class="container" style="padding-top:65px;" >
          <center>
            <div id="map"></div>
            <script>
              function initMap() {
              var mapOptions = {
                center: {lat: 18.889769984395198, lng: 99.02368089814763},
                zoom: 16,
              }
              var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
              var marker;
              var InfoWindow;
              var iconBase = '<?php echo base_url(); ?>../assets/marker/';


              // Try HTML5 geolocation.
              if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                  var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                  };
                  marker = new google.maps.Marker({
                    position: pos,
                    map: maps,
                    title:"คุณอยู่ตรงนี้!"
                  });
                  maps.setCenter(pos);
                }, function() {
                  handleLocationError(true,  map.getCenter());
                });
              } else {
                handleLocationError(false,  map.getCenter());
              }
              InfoWindow = new google.maps.InfoWindow();

              $.getJSON("<?php echo base_url(); ?>json/jsonGen", function(jsonGen) {
                $.each(jsonGen,function(i,itemG) {
                    marker = new google.maps.Marker({
                      position:new google.maps.LatLng(itemG.latitude,itemG.longtitude),
                      icon:iconBase + 'gener.png',
                      map: maps,
                      title: itemG.shop_name
                    });
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                      InfoWindow.setContent(item.shop_name);
                      InfoWindow.open(maps, marker);
                    }
                    })(marker, i));
                });
              });
              // Loop BB
              $.getJSON( "<?php echo base_url(); ?>json/jsonBig", function( jsonBig ) {
                  $.each(jsonBig, function(i,itemB){
                    marker = new google.maps.Marker({
                       position: new google.maps.LatLng(itemB.latitude,itemB.longtitude),
                       icon:iconBase + 'bb.png',
                       map: maps,
                       title: itemB.shop_name
                    });
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                      InfoWindow.setContent(itemB.shop_name);
                      InfoWindow.open(maps, marker);
                    }
                    })(marker, i));
                  });
               });
              //  LOOP VS
              $.getJSON( "<?php echo base_url(); ?>json/jsonVes", function( jsonVes ) {
                  $.each(jsonVes, function(i,itemV){
                    title : itemV.shop_name,
                    marker = new google.maps.Marker({
                       position: new google.maps.LatLng(itemV.latitude,itemV.longtitude),
                       icon:iconBase + 'ves.png',
                       map: maps,
                       title : itemV.shop_name,
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                      $("#shop").val(this.shop_name().shop());
                      $("#owner").val(this.getPosition().owner());
                      InfoWindow.setContent('ร้าน :'+itemV.shop_name,
                      'เบอร์โทร :'+itemV.callphone);
                      InfoWindow.open(maps, marker);
                    }
                    })(marker, i));
                  });
               });// close LOOP
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJb6ASr8pWUF4uMoxT9Oujreq-fmGXljs&callback=initMap" async defer></script><br />
            <div class="row">
              <label style="color:#a60707;"><img src="<?php echo base_url(); ?>../assets/marker/red_icon.png" class="img-responsive" height="auto"/>สีแดง = ร้านซ่อมทั่วไป</label>
              <label style="color:#094875;"><img src="<?php echo base_url(); ?>../assets/marker/blue_icon.png" class="img-responsive" height="auto"/>สีฟ้า = ร้านซ่อมรถ Bigbike</label>
              <label style="color:#028226;"><img src="<?php echo base_url(); ?>../assets/marker/green_icon.png" class="img-responsive" height="auto"/>สีเขียว = ร้านซ่อมรถ Vespa</label>
            </div>
          </center>
			</div>
      <footer style="height:50px;">
      </footer>
  </body>

</html>
