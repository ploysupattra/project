<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Motor PLUS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customsweb.css">
		<!-- <link src="<?php echo base_url(); ?>../assets/bootstrap/js/jquery.min.js">
		<link src="<?php echo base_url(); ?>../assets/bootstrap/js/bootstrap.js"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
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
      #map {
        height: 500px;
      }
      html, body {
        height: 100%;
        width: auto;
        margin: 0px;
        padding: inherit;
      }
    </style>
  </head>
  <body>
      <!-- Header -->
        <div class="navbar-more-overlay row"></div>
          <nav class="navbar navbar-inverse navbar-fixed-top animate">
          <div class="container navbar-more visible-xs">
            <form class="navbar-form navbar-left" role="search" action="<?php echo base_url(); ?>lobby/sl_search">
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
              <li>
                <a href="<?php echo base_url(); ?>conuser/regis_user">
                  <span class="menu-icon fa fa-user-o"></span>สมัครสมาชิกผู้ใช้
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
                <a href="<?php echo base_url(); ?>lobby/web">
                  <span class="menu-icon fa fa-motorcycle"></span>หน้าหลัก
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
              <li class="hidden-xs">
                <a href="<?php echo base_url(); ?>conuser/loginformuser">
                  <span class="menu-icon fa fa-bell-o"></span>Login ผู้ใช้
                </a>
              </li>
              <li class="hidden-xs">
                <form class="navbar-form navbar-left" role="search" action="<?php echo base_url(); ?>lobby/sl_search" method="post">
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
                <a href="#navbar-more-show">
                  <span class="menu-icon fa fa-bars"></span>
                  More
                </a>
              </li>
            </ul>
          </div>
        </nav>
			<!-- Body -->
			<div class="container" >

			</div>
      <footer>

      </footer>

  </body>
</html>
