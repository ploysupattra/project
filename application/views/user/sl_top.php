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
    <script src="<?php echo base_url(); ?>../assets/frontoff/js/jquery.twbsPagination.js" type="text/javascript"></script>
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
          <li class="hidden-xs name">สวัสดีคุณ....</li>
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
            <li class="hiden-xs">
              <a href="<?php echo base_url(); ?>welcome/mailadmin">
                <span class="menu-icon fa fa-phone"></span>
                <span class="hidden-xs">สอบถาม Admin</span>
                <span class="visible-xs">สอบถาม</span>
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
        <div class="row">
          <center>
              <div class="carousel slide slideshow" id="myCarousel" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators" >
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                      <li data-target="#myCarousel" data-slide-to="4"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="<?php echo base_url(); ?>../assets/img/banner/banner3.jpg" class="img-responsive" height="auto" >
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url(); ?>../assets/img/banner/banner3.jpg" class="img-responsive" height="auto" >
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url(); ?>../assets/img/banner/banner3.jpg" class="img-responsive" height="auto" >
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url(); ?>../assets/img/banner/banner3.jpg" class="img-responsive" height="auto" >
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url(); ?>../assets/img/banner/banner3.jpg" class="img-responsive" height="auto" >
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
        </div>
      </div>
			<div class="container"  style="padding-top:80px;">
        <div class="container"><h4>ร้านซ่อมรถ</h4></div>
        <div class="col-md-8">
          <form action="<?php echo base_url(); ?>conuser/pagination" method="">
            <div class="row" id="page-con">
              <div class="col-md-4 col-xs-2 col-lg-4">
                <img src="<?php echo base_url(); ?>../assets/img/bgmotor.jpg" class="img-responsive"/>
              </div>
              <div class="col-md-8 col-xs-4">
                <h4><a href="<?php echo base_url(); ?>conuser/showdata">ร้านซ่อมปะยาง</a></h4>
                <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><br />
                <label>ประเภท: </label>
                <p>"ร้านอยู่ใกล้ๆมหาวิทยาแม่โจ้"</p>
                <p>"เจ้าของร้านใจดีมากๆเลยค่ะ งานออกมาสวยมาก"</p>
                <p>เวลาเปิด :</p>
                <p>เวลาปิด :</p>
                <label>192 ,.77 เมือง เชียงใหม่</label>
                <p>จาก 2 ใน 300 ร้านในเชียงใหม่</p>
              </div>
            </div><br /><br />
            <div class="row">
              <div class="col-md-4 col-xs-2 col-lg-4">
                <img src="<?php echo base_url(); ?>../assets/img/bgmotor.jpg" class="img-responsive"/>
              </div>
              <div class="col-md-8 col-xs-4">
                <h4><a href="<?php echo base_url(); ?>conuser/showdata">ร้านซ่อมปะยาง</a></h4>
                <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><br />
                <label>ประเภท: </label>
                <p>"ร้านอยู่ใกล้ๆมหาวิทยาแม่โจ้"</p>
                <p>"เจ้าของร้านใจดีมากๆเลยค่ะ งานออกมาสวยมาก"</p>
                <p>เวลาเปิด :</p>
                <p>เวลาปิด :</p>
                <label>192 ,.77 เมือง เชียงใหม่</label>
                <p>จาก 2 ใน 300 ร้านในเชียงใหม่</p>
              </div>
            </div><br /><br />
            <div class="row">
              <div class="col-md-4 col-xs-2 col-lg-4">
                <img src="<?php echo base_url(); ?>../assets/img/bgmotor.jpg" class="img-responsive"/>
              </div>
              <div class="col-md-8 col-xs-4">
                <h4><a href="<?php echo base_url(); ?>conuser/showdata">ร้านซ่อมปะยาง</a></h4>
                <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><br />
                <label>ประเภท: </label>
                <p>"ร้านอยู่ใกล้ๆมหาวิทยาแม่โจ้"</p>
                <p>"เจ้าของร้านใจดีมากๆเลยค่ะ งานออกมาสวยมาก"</p>
                <p>เวลาเปิด :</p>
                <p>เวลาปิด :</p>
                <label>192 ,.77 เมือง เชียงใหม่</label>
                <p>จาก 2 ใน 300 ร้านในเชียงใหม่</p>
              </div>
            </div>
          <nav aria-label="Page navigation">
              <ul class="pagination" id="pagination"></ul>
          </nav>
          <script type="text/javascript">
              $(function () {
                  window.pagObj = $('#pagination').twbsPagination({
                      totalPages: 20,
                      visiblePages: 5,
                      onPageClick: function (event, page) {
                          $('#page-con').text('page' + page);
                      }
                  })
              });
          </script>
        </form>
        </div>
        <div class="col-md-4">
          <img  class="img-responsive" src="<?php echo base_url(); ?>../assets/img/banner/carside.jpg"/><br /><br />
          <img  class="img-responsive" src="<?php echo base_url(); ?>../assets/img/banner/banner2.jpg"/>
        </div>
			</div>
      <footer>

      </footer>
  </body>
</html>
