<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Motor PLUS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customsweb.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/tb_set.css">
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
                <a href="<?php echo base_url(); ?>conadmin/manage_comment">
                  <span class="menu-icon fa fa-pencil"></span>
                  <span class="hidden-xs">จัดการ comment</span>
                  <span class="visible-xs">comment</span>
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
      <div class="row" style="padding-top:20px;">
        <div class="container">
          <div class="row">
            <center><p class="titleh" style="font-size:55px;">จัดการงานเกี่ยวกับมอเตอร์ไซต์</p></center>
          </div>
          <div class="row" style="padding-left:100px;">
            <a href="<?php echo base_url(); ?>conadmin/add_event"><button class="btn btn-add nithan">เพิ่ม</button></a>
          </div>
        </div><br />
        <table class="table-fill">
          <thead>
            <tr><th class="text-left">ID</th>
                <th class="text-left">Picture</th>
                <th class="text-center nithan">ชื่อกิจกรรม</th>
                <th class="text-center nithan">รายละเอียดกิจกรรม</th>
                <th class="text-center nithan">วันที่เริ่ม</th>
                <th class="text-center nithan">วันปิดกิจกรรม</th>
                <th class="text-center nithan">Link กิจกรรม</th>
                <th class="text-center nithan">แก้ไขกิจกรรม</th>
                <th class="text-center nithan">ลบ</th></tr>
          </thead>
          <tbody class="table-hover">
            <?php foreach ($event->result() as $row) { ?>
            <tr><td><?php echo $row->event_id; ?></td>
                <td><img src="<?php echo base_url().'../assets/img/addevent/'.$row->event_pic; ?>" height="100"/></td>
                <td><?php echo $row->event_name; ?></td>
                <td><?php echo $row->event_detail; ?></td>
                <td><?php echo $row->date_start; ?></td>
                <td><?php echo $row->date_end; ?></td>
                <td><?php echo $row->link; ?></td>
                <td><form action="<?php echo base_url().'conadmin/udf_event/'.$row->event_id; ?>"><button class="btn btn-warning">Edit</button></form></td>
                <td><a href="<?php echo base_url().'conadmin/cfdl_event/'.$row->event_id;?>" class="btn btn-danger">Delete</a></td></tr>
                <?php } ?>
          </tbody>
        </table>
      </div>
      <footer>

      </footer>
  </body>
</html>
