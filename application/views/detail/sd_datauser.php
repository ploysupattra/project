<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Motor PLUS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customsweb.css">
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
    .bgcom{ background-color: #e0dede; padding: 10px; box-shadow: 2px 2px 4px #d5d5d5;}
    .bgcon {
      background-color:white;
      padding: 25px;
      box-shadow: 2px 2px 8px #575555;
    }
    .imgcom{ width: 50px; height: 50px;}
    .slideshow{
      width: auto;
      height:inherit;
    }
    .headrow{
      padding-top: 30px;
    }
    .name{ padding-top: 15px; color: #ffffff;}
    </style>
  </head>
  <body style="background-color:#d8dad8;">
      <!-- Header -->
        <div class="navbar-more-overlay row"></div>
          <nav class="navbar navbar-inverse navbar-fixed-top animate">
          <div class="container">
            <div class="navbar-header hidden-xs">
              <img src="<?php echo base_url(); ?>../assets/logo/logo.png" class="img-responsive" height="auto" width="150"/>
            </div>
            <ul class="nav navbar-nav navbar-right mobile-bar" style="padding-top:10px;">
              <li class="hidden-xs name">สวัสดีคุณ....</li>
                <li>
                  <a href="<?php echo base_url(); ?>conuser/web">
                    <span class="menu-icon fa fa-motorcycle"></span>หน้าหลัก
                  </a>
                </li>
              <li>
                <a href="<?php echo base_url(); ?>conuser/review">
                  <span class="menu-icon fa fa-star"></span>
                  <span class="hidden-xs">รีวิวร้านซ่อมรถ</span>
                  <span class="visible-xs">รีวิวร้าน</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>conuser/mailadmin">
                  <span class="menu-icon fa fa-phone"></span>
                  <span class="hidden-xs">สอบถาม Admin</span>
                  <span class="visible-xs">สอบถาม</span>
                </a>
              </li>
              <li class="hidden-xs">
                <a href="<?php echo base_url(); ?>conuser/profile">
                  <span class="menu-icon fa fa-user-o"></span>โปรไฟล์ของคุณ
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>conuser/logout">
                  <span class="menu-icon fa fa-key"></span>ออกจากระบบ
                </a>
              </li>
              <li class="visible-xs">
                <a href="#navbar-more-show">
                  <span class="menu-icon fa fa-bars"></span>More
                </a>
              </li>
            </ul>
          </div>
        </nav>
			<!-- Body -->
			<div class="container bgcon">
        <?php if (isset($_SESSION['shop_id'])) { ?>
        <div class="row headrow">
          <form action="<?php echo base_url(); ?>conuser/comment" method="post">
          <h2>ร้าน <?php echo $_SESSION['shop_name'] ?></h2>
          <div class="col-md-9 col-xs-6">
            <div class="row">
              <center>
                  <div class="carousel slide slideshow" id="myCarousel" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators" >
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="<?php echo base_url(); ?>../assets/img/shop/pagegall.jpg" class="img-responsive" height="50" >
                        </div>
                        <?php foreach ($gallery->result() as $row) { ?>
                        <div class="item">
                          <img src="<?php echo base_url().'../assets/img/gallery/'.$row->picture; ?>" class="img-responsive" height="50" >
                        </div>
                        <?php } ?>
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
            </div><br />
            <div class="row">
                <button class="btn btn-primary" type="submit" value="<?php echo $_SESSION['shop_id']; ?>" name="review">เขียน review</button>
            </form>
            </div><br />
            <div class="row">
              <h4>ประเภทร้าน : <?php echo $_SESSION['service_name']; ?></h4>
              <h4>เบอร์โทรร้าน : <?php echo $_SESSION['callphone']; ?></h4>
              <h5>ที่อยู่ : <?php echo $_SESSION['address']; ?></h5>
              <h5>เวลเปิด : <?php echo $_SESSION['open']; ?> ถึง <?php echo $_SESSION['close']; ?></h5>
              <h5>เวลาปิด : <?php echo $_SESSION['close']; ?></h5>
              <h5>วันที่เปิดทำการ : <?php echo $_SESSION['begin_name']; ?> ถึง <?php echo $_SESSION['end_name']; ?></h5>
              <h5>อยู่ในจังหวัด : <?php echo $_SESSION['province_name']; ?></h5>
              <h5>Facebook : <?php echo $_SESSION['facebook']; ?></h5>
              <h5>Line : <?php echo $_SESSION['line']; ?></h5>
            </div><hr />
            <?php } ?>
            <h4>ความคิดเห็นเกี่ยวกับร้าน</h4><br />
            <?php foreach ($show->result() as $row) { ?>
            <div class="row bgcom" >
              <div class="row">
                <div class="col-md-2">
                  <img class="imgcom img-circle" src="<?php echo base_url().'../assets/img/user/'.$row->user_pic;  ?>" />
                </div>
                <div class="col-md-10">
                  ผู้เขียน : <?php echo $row->user_name; ?> <br />
                  วัน/เวลาที่เขียน : <?php echo $row->date_comment;?>
                </div>
              </div><br />
              <div class"row">
                <h5> <?php echo $row->review; ?></h5>
              </div>
            </div><br />
            <?php } ?>
          </div>
          <div class="col-md-3 col-xs-3">
            <?php foreach ($banner2->result() as $row) { ?>
            <img  class="img-responsive" src="<?php echo base_url().'../assets/img/addbanner/'.$row->ban_pic; ?>"/><br /><br />
            <?php } ?>
            <img  class="img-responsive" src="<?php echo base_url(); ?>../assets/img/banner/4.jpg"/>
          </div>
        </div>
			</div>
      <footer style="height:100px;">

      </footer>
  </body>
</html>
