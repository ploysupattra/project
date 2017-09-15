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
    footer{
      height: 50px;
    }
    .slideshow{
      width: auto;
      height:inherit;
    }
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
            <!-- <li class="hidden-xs name">สวัสดีคุณ....</li> -->
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
              <!-- <li class="hiden-xs">
                <a href="<?php echo base_url(); ?>welcome/mailadmin">
                  <span class="menu-icon fa fa-phone"></span>
                  <span class="hidden-xs">สอบถาม Admin</span>
                  <span class="visible-xs">สอบถาม</span>
                </a>
              </li> -->
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
        <?php if (isset($_SESSION['shop_id'])) { ?>
        <div class="row headrow">
          <h2>ร้าน <?php echo $_SESSION['shop_name'] ?></h2>
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
            </div><br />
            <div class="row">
                <button class="btn btn-primary" type="submit" value="" name="review">เขียน review</button>
            </form>
            <div class="row">
              <h4>ประเภทร้าน : </h4>
              <h4>เบอร์โทรร้าน : </h4>
              <h5>ที่อยู่ : </h5>
              <h5>เวลเปิด :  ถึง </h5>
              <h5>วันที่เปิดทำการ : ถึง </h5>
              <h5>อยู่ในจังหวัด : </h5>
              <h5>Facebook : </h5>
              <h5>Line : </h5>
            </div><hr />
            <h4>ความคิดเห็นเกี่ยวกับร้าน</h4><br />
            <div class="row bgcom" >
              <div class="row">
                <div class="col-md-2">
                  <img class="imgcom img-circle" src="" />
                </div>
                <div class="col-md-10">
                  ผู้เขียน :  <br />
                  วัน/เวลาที่เขียน :
                </div>
              </div><br />
              <div class"row">
                <h5> </h5>
              </div>
            </div><br />
          </div>
          <div class="col-md-3 col-xs-3">
            <img  class="img-responsive" src="<?php echo base_url(); ?>../assets/img/banner/carside.jpg"/><br /><br />
            <img  class="img-responsive" src="<?php echo base_url(); ?>../assets/img/banner/banner2.jpg"/>
          </div>
        </div>
			</div>
      <footer>

      </footer>
  </body>
</html>
