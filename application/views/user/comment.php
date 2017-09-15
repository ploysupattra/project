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
    <style>
    .headrow{
      padding-top: 30px;
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
            <li class="hiden-xs">
              <a href="<?php echo base_url(); ?>conuser/review">
                <span class="menu-icon fa fa-star"></span>
                <span class="hidden-xs">รีวิวร้านซ่อมรถ</span>
                <span class="visible-xs">รีวิวร้าน</span>
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
			<!-- Body -->
			<div class="container">
        <div class="row headrow">
          <?php if (isset($_SESSION['shop_id'])) { ?>
          <h2>ร้าน <?php echo $_SESSION['shop_name']; ?></h2>
          <div class="col-md-9 col-xs-6">
            <div class="row">
              <center>
                  <div class="carousel slide slideshow" id="myCarousel" data-ride="carousel">
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="<?php echo base_url(); ?>../assets/img/banner/ban3.jpg" class="img-responsive" height="auto" >
                        </div>
                        <?php foreach ($banner->result() as $row) {?>
                        <div class="item">
                          <img src="<?php echo base_url().'../assets/img/addbanner/'.$row->ban_pic;?>" class="img-responsive" height="auto" >
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
            </div><br /><br />
            <div class="row">
              <h4>ประเภทร้าน : <?php echo $_SESSION['service_name']; ?></h4>
              <h4>เบอร์โทรร้าน : <?php echo $_SESSION['callphone']; ?></h4>
              <h5>ที่อยู่ : <?php echo $_SESSION['address']; ?></h5>
              <h5>เวลเปิด : <?php echo $_SESSION['open']; ?></h5>
              <h5>เวลาปิด : <?php echo $_SESSION['close']; ?></h5>
              <h5>วันเปิดทำการ : <?php echo $_SESSION['begin_name']; ?> ถึง <?php echo $_SESSION['end_name']; ?></h5>
              <h5>อยู่ในจังหวัด : <?php echo $_SESSION['province_name']; ?></h5>
            </div>
            <div class="row">
              <form action="<?php echo base_url(); ?>conuser/sendcomment" method="post" >
                <h3>เขียนแสดงความคิดเห็น</h3>
                <button type="button" class="btn btn-default" disabled="disabled">ผู้เขียน  <?php echo $_SESSION['user_name']; ?></button>
                <input class="btn" style="color:white;" name="waiter" value="<?php  echo $_SESSION['user_id']; ?>"  readonly><br /><br />
                <textarea class="form-control" name="review" rows="5"></textarea><br />
                <button class="btn btn-warning" name="sendreview" type="submit" value="<?php echo $_SESSION['shop_id']; ?>">ยืนยันการส่ง</button>
              </form><br />
            </div>
          </div>
          <?php } ?>
          <div class="col-md-3 col-xs-3">
            <?php foreach ($banner2->result() as $row) { ?>
            <img  class="img-responsive" src="<?php echo base_url().'../assets/img/addbanner/'.$row->ban_pic; ?>"/><br /><br />
            <?php } ?>
            <img  class="img-responsive" src="<?php echo base_url(); ?>../assets/img/banner/4.jpg"/>
          </div>
        </div>
			</div>
      <footer>

      </footer>
  </body>
</html>
