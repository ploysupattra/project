<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Admin</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/frontoff/css/homeadmin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Capriola'> -->
    <script type="text/javascript">
        'use strict';
        var scrollTimeout = null,
            menu = document.querySelector('.amazing-menu');
        window.addEventListener('scroll', function () {
            if (!scrollTimeout) {
                document.body.classList.add('_disable-pointer-events');
                menu.classList.add('-scrolled');
            } else {
                clearTimeout(scrollTimeout);
            }
            scrollTimeout = setTimeout(function () {
                document.body.classList.remove('_disable-pointer-events');
                menu.classList.remove('-scrolled');
                scrollTimeout = null;
            }, 150);
        });
    </script>
    <style>
      @font-face {
        font-family: Nithan;
        src: url('../fonts/Nithan.ttf') format('truetype') ;
      }
    .nithan{
      font-family: Nithan;
      font-size: 35px;
      font-weight: 900;
    }
    .butout{font-family: Nithan; font-weight: bold; font-size: 25px;}
    </style>
  </head>
  <body style="background-color:#4ecfb5;">
    <div class="container">
      <div class="row" style="padding-top:20px;">
        <center><h3 class="nithan">Motor PLUS Back Office</h3></center>
      </div>
      <div class="amazing-menu">
        <div class="menu-item"><a href="<?php echo base_url(); ?>conadmin/manage_shop" style="color:white;">
          <div class="container">
            <div class="icon"><span class="ion-icecream"></span></div>
            <div class="title">Manage Shop</div>
            <div class="arrow"><span class="ion-chevron-right"></span></div>
            <div class="rating -r2">
              <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
              <div class="text">จัดการบัญชีร้าน</div><br />
            </div>
          </div></a>
        </div>
        <div class="menu-item">
          <div class="container"><a href="<?php echo base_url(); ?>conadmin/manage_user" style="color:white;">
            <div class="icon"><span class="ion-pizza"></span></div>
            <div class="title">Manage User</div>
            <div class="arrow"><span class="ion-chevron-right"></span></div>
            <div class="rating -r5">
              <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
              <div class="text">จัดการบัญชีผู้ใช้</div><br />
            </div>
          </div></a>
        </div>
        <div class="menu-item">
          <div class="container"><a href="<?php echo base_url(); ?>conadmin/manage_comment" style="color:white;">
            <div class="icon"><span class="ion-beer"></span></div>
            <div class="title">Mannage Comment</div>
            <div class="arrow"><span class="ion-chevron-right"></span></div>
            <div class="rating -r4">
              <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
              <div class="text">จัดการการแสดงความคิดเห็น</div><br />
            </div>
          </div></a>
        </div>
        <div class="menu-item">
          <div class="container"><a href="<?php echo base_url(); ?>conadmin/manage_banner" style="color:white;">
            <div class="icon"><span class="ion-ios-wineglass"></span></div>
            <div class="title">Manage Banner</div>
            <div class="arrow"><span class="ion-chevron-right"></span></div>
            <div class="rating -r4">
              <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
              <div class="text">จัดการโฆษณา</div><br />
            </div>
          </div></a>
        </div>
        <div class="menu-item">
          <div class="container"><a href="<?php echo base_url(); ?>conadmin/manage_event" style="color:white;">
            <div class="icon"><span class="ion-coffee"></span></div>
            <div class="title">Manage Event</div>
            <div class="arrow"><span class="ion-chevron-right"></span></div>
            <div class="rating -r2">
              <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
              <div class="text">จัดการกิจกรรม</div><br />
            </div>
          </div></a>
        </div>
      </div>
    </div><br />
    <div class="container">
      <center class="butout"><a href="<?php echo base_url(); ?>conadmin/logout">ออกจากระบบ</a></center>
    </div>

  </body>
</html>
