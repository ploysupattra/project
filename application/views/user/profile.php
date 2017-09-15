<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Motor PLUS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customsweb.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customshop.css">
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
    <script type="text/javascript">
      $(document).ready(function() {
        var $btnSets = $('#accountshop'),
        $btnLinks = $btnSets.find('a');
        $btnLinks.click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.user-menu>div.user-menu-content").removeClass("active");
            $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
        });
      });
      $( document ).ready(function() {
        $("[rel='tooltip']").tooltip();

        $('.view').hover(
            function(){
                $(this).find('.caption').slideDown(250); //.fadeIn(250)
            },
            function(){
                $(this).find('.caption').slideUp(250); //.fadeOut(205)
            }
        );
      });
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
                <li>
                  <a href="<?php echo base_url(); ?>conuser/logout">
                    <span class="menu-icon fa fa-key"></span>ออกจากระบบ
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
              <li class="hidden-xs">
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
      <?php IF(isset($_SESSION['username'])) {  ?>
      <div class="container">
          <div class="row user-menu-container square">
              <div class="col-md-7 user-details">
                  <div class="row coralbg white">
                      <div class="col-md-6 no-pad">
                          <div class="user-pad">
                              <h3>สวัสดี!! คุณ <?php echo $_SESSION['user_name']; ?></h3><br /><br /><br />
                              <a type="button" class="btn btn-labeled btn-info" href="<?php echo base_url().'conuser/updateuser/'.$_SESSION['user_id'];?>" >แก้ไขข้อมูล</a>
                              <a type="button" class="btn btn-labeled btn-info" href="<?php echo base_url().'conuser/closingaccount/'.$_SESSION['user_id'];?>">ปิดบัญชี</a>
                          </div>
                      </div>
                      <div class="col-md-6 no-pad">
                          <div class="user-image">
                              <img src="<?php echo base_url()."../assets/img/user/".$_SESSION['user_pic']; ?>" class="img-responsive thumbnail">
                          </div>
                      </div>
                  </div>
                  <div class="row overview">
                      <div class=" user-pad text-center">
                        <h3>วันที่คุณสมัคร </h3>
                        <h5><?php echo $_SESSION['date_register']; ?></h5>
                      </div>
                  </div>
              </div>
              <div class="col-md-1 user-menu-btns">
                  <div class="btn-group-vertical square" id="accountshop">
                      <a href="#" class="btn btn-block btn-default active">
                        <i class="fa fa-folder-open-o fa-3x"></i>
                      </a>
                      <a href="#" class="btn btn-default">
                        <i class="fa fa-paper-plane-o fa-3x"></i>
                      </a>
                      <a href="#" class="btn btn-default">
                        <i class="fa fa-map-marker fa-3x"></i>
                      </a>
                      <a href="#" class="btn btn-default">
                        <i class="fa fa-picture-o  fa-3x"></i>
                      </a>
                  </div>
              </div>
              <div class="col-md-4 user-menu user-pad">
                  <div class="user-menu-content active">
                      <h3><center>บัญชีข้อมูลผู้ใช้</center></h3>
                      <ul class="user-menu-list">
                          <h4>ชื่อผู้ใช้ : <?php echo $_SESSION['user_name']; ?></h4>
                          <h4>username : <?php echo $_SESSION['username']; ?></h4>
                          <h4>password : <?php echo $_SESSION['password']; ?></h4>
                      </ul>
                  </div>
                  <div class="user-menu-content">
                      <h3>ช่องทางติดต่อของคุณ</h3>
                      <ul class="user-menu-list">
                          <h4>E-mail : <?php echo $_SESSION['email']; ?></h4>
                      </ul><br />
                  </div>
                  <?php } ?>
                  <div class="user-menu-content">
                    <h3>Shop ที่คุณเขียน commment</h3>
                      <div class="row share-links">
                        <?php foreach ($countuser->result() as $row) { ?>
                        <h4>จำนวนที่คุณเขียน : <?php echo $row->countuser; ?></h4>
                        <?php } ?>
                      </div><br />
                  </div>
                  <div class="user-menu-content">
                      <h2 class="text-center">รูปประจำตัวคุณ</h2>
                      <center><i class="fa fa-picture-o fa-4x"></i></center>
                      <div class="share-links">
                        <?php IF(isset($_SESSION['username'])) {  ?>
                        <div class="row">
                          <h4>ชื่อไฟล์รูปคุณ : <?php echo $_SESSION['user_pic']; ?></h4>
                        </div>
                        <?php } ?>
                      </div>
                  </div>
              </div>
          </div>
      </div><br />

      <footer>

      </footer>

  </body>
</html>
