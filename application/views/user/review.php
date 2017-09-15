<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Motor PLUS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customsweb.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/frontoff/css/styles.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      src: url('.../assets/bootstrap/fonts/Nithan.ttf') format('truetype') ;
    }
    h3{
      font-family: Nithan;
      font-size: 30px;
      font-weight: bold;
    }
      .slideshow{
        width: auto;
        height:inherit;
      }
      .btndown{
        padding-top: 10px;
      }
      .carousel-indicators{
        padding-top: 100px;
      }
    footer{
      height: 50px;
    }
    body{
      background-color: #dfdbdb;
    }
    .name{ padding-top: 15px; color: #ffffff;}
  </style>
</head>
<body>
    <!-- Header -->
      <div class="navbar-more-overlay row"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top animate">
          <div class="container navbar-more visible-xs">
            <form class="navbar-form navbar-left" role="search" action="<?php echo base_url(); ?>conuser/sl_search">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" name="sdata" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">ค้นหา</button>
                  </span>
                </div>
              </div>
            </form>
            <ul class="nav navbar-nav">
              <li class="hiden-xs">
                <a href="<?php echo base_url(); ?>conuser/profile">
                  <span class="menu-icon fa fa-user"></span>โปรไฟล์ของคุณ
                </a>
              </li>
            </ul>
        </div>
        <div class="container">
          <div class="navbar-header hidden-xs">
            <img src="<?php echo base_url(); ?>../assets/logo/logo.png" class="img-responsive" height="auto" width="150"/>
          </div>
          <ul class="nav navbar-nav navbar-right mobile-bar" style="padding-top:10px;">
            <li class="hiden-xs">
              <a href="<?php echo base_url(); ?>conuser/web">
                <span class="menu-icon fa fa-motorcycle"></span>หน้าหลัก
              </a>
            </li>
            <li class="hidden-xs">
              <a href="<?php echo base_url(); ?>conuser/profile">
                <span class="menu-icon fa fa-user"></span>โปรไฟล์ของคุณ
              </a>
            </li>
            <li class="hiden-xs">
              <a href="<?php echo base_url(); ?>conuser/logout">
                <span class="menu-icon fa fa-key"></span>ออกจากระบบ
              </a>
            </li>
            <li class="hidden-xs">
              <form class="navbar-form navbar-left" role="search" action="<?php echo base_url(); ?>conuser/sl_search" method="post">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" name="sdata" placeholder="Search for...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">ค้นหา</button>
                    </span>
                  </div>
                </div>
              </form>
            </li>
            <li class="visible-xs">
              <a href="#navbar-more-show"><span class="menu-icon fa fa-bars"></span>More</a>
            </li>
          </ul>
        </div>
      </nav>
    <!-- _______________body_______________ -->
    <div class="container" style="margin-top:40px;">
      <div class="row">
        <h3>ร้านซ่อมรถแนะนำ</h3>
        <center>
            <div class="carousel slide slideshow" id="myCarousel" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <div class="col-md-3">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235">
                    </div>
                    <div class="col-md-3"><a href="#2">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive"  width="235">
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                    <div class="col-md-3"><a href="#3">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive"  width="235">
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                    <div class="col-md-3"><a href="#4">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235">
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-md-3"><a href="#5">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235" >
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                    <div class="col-md-3"><a href="#6">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235">
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                    <div class="col-md-3"><a href="#7"><a href="#">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235" >
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                    <div class="col-md-3"><a href="#8">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235">
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </center>
      </div><br /><br /><br />
      <div class="row">
        <div class="col-md-4">
          <div class="content">
            <div class="admin-panel"><a class="admin-text" href="<?php echo base_url(); ?>conuser/sl_top">ร้านซ่อมยอดนิยม</a></div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="content">
              <div class="admin-panel"><b class="admin-text">ดูตามประเภทการบริการ</b></div>
              <span class="cog octicon octicon-gear"></span>
              <div class="menu">
                <div class="arrow"></div>
                  <a href="<?php echo base_url(); ?>conuser/sl_gen">ทั่วไป </a>
                  <a href="<?php echo base_url(); ?>conuser/sl_bigbike">Big Bike </a>
                  <a href="<?php echo base_url(); ?>conuser/sl_vespa">Vespa </a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="content">
              <div class="admin-panel"><b class="admin-text">ดูตามพื้นที่ภูมิภาค</b></div>
              <span class="cog octicon octicon-gear"></span>
              <div class="menu">
                <div class="arrow"></div>
                  <a href="<?php echo base_url(); ?>conuser/sl_north">เหนือ</a>
                  <a href="<?php echo base_url(); ?>conuser/sl_central">กลาง</a>
                  <a href="<?php echo base_url(); ?>conuser/sl_northeast">อีสาน</a>
                  <a href="<?php echo base_url(); ?>conuser/sl_southern">ใต้</a>
                </div>
              </div>
          <script>
          $( ".cog, .admin-text" ).on( "click", function()
          {
              $( ".menu" ).stop().fadeToggle( "fast" );
          });
          </script>
        </div>
      </div><br /><br />
      <div class="row" style="padding-top:70px;">
        <a href="#"><h3>งานเกี่ยวกับมอเตอร์ไซด์</h3></a>
        <center>
            <div class="carousel slide slideshow" id="myCarousel2" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <div class="col-md-3">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235">
                    </div>
                    <div class="col-md-3"><a href="#2">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive"  width="235">
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                    <div class="col-md-3"><a href="#3">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive"  width="235">
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                    <div class="col-md-3"><a href="#4">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235">
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-md-3"><a href="#5">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235" >
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                    <div class="col-md-3"><a href="#6">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235">
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                    <div class="col-md-3"><a href="#7"><a href="#">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235" >
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                    <div class="col-md-3"><a href="#8">
                      <img src="<?php echo base_url(); ?>../assets/img/shop/hhh.jpg" class="img-responsive" width="235">
                      <label>ร้านแถวตัวเมือง</label></a>
                    </div>
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </center>
      </div><br /><br /><br />
      <footer>

      </footer>
    </div>
    <!-- END BODY -->
  </body>
</html>
