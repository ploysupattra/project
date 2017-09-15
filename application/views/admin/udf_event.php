<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Motor PLUS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customsweb.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
     $( function() {
       $( "#datepicker" ).datepicker();
     } );
    </script>
    <style>
      body {
        background-color: #c6c6c6;
        font-family: "Roboto", helvetica, arial, sans-serif;
        font-size: 16px;
        font-weight: 400;
        text-rendering: optimizeLegibility;
      }
      .name{ padding-top: 15px; color: #ffffff;}
      .titleh {
        font-family:Nithan;
        color: #240000;
        font-weight: 500;
        font-style: normal;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        text-transform:uppercase;
      }
      .nithan{font-family: Nithan;}
      .btn-add{ margin-right: 200px;
                background-color: #33cc13;
                color: white;
                font-size: 25px;
                padding-left: 25px; padding-right: 25px;
      }
    </style>
  </head>
  <body>
      <!-- Header -->
        <div class="navbar-more-overlay row"></div>
          <nav class="navbar navbar-inverse navbar-fixed-top animate">
          <div class="container">
            <div class="navbar-header hidden-xs">
              <img src="<?php echo base_url(); ?>../assets/logo/logo.png" class="img-responsive" height="auto" width="150"/>
            </div>
            <ul class="nav navbar-nav navbar-right mobile-bar" style="padding-top:10px;">
              <li class="hidden-xs name">สวัสดี Admin</li>
              <li class="hiden-xs">
                <a href="<?php echo base_url(); ?>conadmin/manage_shop">
                  <span class="menu-icon fa fa-home"></span>
                  <span class="hidden-xs">จัดการบัญชีร้าน</span>
                  <span class="visible-xs">ร้าน</span>
                </a>
              </li>
              <li class="hiden-xs">
                <a href="<?php echo base_url(); ?>conadmin/manage_user">
                  <span class="menu-icon fa fa-user"></span>
                  <span class="hidden-xs">จัดการบัญชีผู้ใช้</span>
                  <span class="visible-xs">ผู้ใช้</span>
                </a>
              </li>
              <li class="hiden-xs">
                <a href="<?php echo base_url(); ?>conadmin/manage_banner">
                  <span class="menu-icon fa fa-ballhorn"></span>ลงโฆษณา
                </a>
              </li>
              <li class="hiden-xs">
                <a href="<?php echo base_url(); ?>conadmin/logout">
                  <span class="menu-icon fa fa-key"></span>ออกจากระบบ
                </a>
              </li>
              <li class="visible-xs">
                <a href="#navbar-more-show"><span class="menu-icon fa fa-bars"></span>More</a>
              </li>
            </ul>
          </div>
        </nav>
			<!-- Body -->
      <div class="row" style="padding-top:80px;">
        <div class="container">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
            <center><p class="titleh" style="font-size:55px;">แก้ไขงานเกี่ยวกับมอเตอร์ไซต์</p></center><br />
              <form action="<?php echo base_url(); ?>conadmin/udevent" method="post" enctype="multipart/form-data">
                <?php foreach ($event->result() as $row) { ?>
                <div class="form-inline">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        ชื่องาน : <input class="form-control" type="text" name="eventname" value="<?php echo $row->event_name; ?>" />
                      </div><br />
                      <div class="row">
                        วันที่เริ่มกิจกรรม : <input value="<?php echo $row->date_start; ?>" type="date" class="form-control"  name="start">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        เลือกรูป : <input class="form-control" type="file" name="picture" style="padding-left:5px;">
                        <p style="color:red;">***กำหนด size ที่ 940x540 px</p>
                      </div>
                      <div class="row">
                        วันที่ปิดกิจกรรม : <input value="<?php echo $row->date_end; ?>" type="date" class="form-control"  name="end">
                      </div>
                    </div>
                  </div><br />
                  <div class="row">
                    รายละเอียดกิจกรรม : <textarea style="width:450px;" rows="5" placeholder="<?php echo $row->event_detail; ?>" class="form-control" name="detail"></textarea>
                  </div><br />
                  <div class="row">
                    Link กิจกรรม : <input value="<?php echo $row->link; ?>" class="form-control" type="text" name="link" width="auto" />
                  </div><br />
                  <center><button class="btn btn-success" name="event_id" type="submit" value="<?php echo $row->event_id; ?>">ยืนยันการแก้ไข</button></center>
                </div>
                <?php } ?>
              </form>
          </div>
          <div class="col-md-2">

          </div>
        </div>
      </div>


      <footer>

      </footer>

  </body>
</html>
