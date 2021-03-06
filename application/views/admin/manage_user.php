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
        background-color: #bb24e8;
        font-family: "Roboto", helvetica, arial, sans-serif;
        font-size: 16px;
        font-weight: 400;
        text-rendering: optimizeLegibility;
      }
      .name{ padding-top: 15px; color: #ffffff;}
      .titleh {
        font-family:Nithan;
        color: #fafafa;
        font-weight: 500;
        font-style: normal;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        text-transform:uppercase;
      }
      .nithan{font-family: Nithan;}
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
                <a href="<?php echo base_url(); ?>conadmin/manage_event">
                  <span class="menu-icon fa fa-motorcycle"></span>จัดการอีเว้นต์
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
          <center><p class="titleh" style="font-size:55px;">จัดการบัญชีผู้ใช้</p></center>
        </div>
        <table class="table-fill">
          <thead>
            <tr><th class="text-left">ID</th>
                <th class="text-left">Picture</th>
                <th class="text-center nithan">ชื่อผู้ใช้</th>
                <th class="text-left">Username</th>
                <th class="text-center">Email</th>
                <th class="text-center">วันที่สมัคร</th>
                <th class="text-center nithan">แก้ไข</th>
                <th class="text-center nithan">ลบ</th></tr>
          </thead>
          <tbody class="table-hover">
            <?php foreach ($manageuser->result() as $row) { ?>
            <tr><td><?php echo $row->user_id; ?></td>
                <td><?php echo $row->user_pic; ?></td>
                <td><?php echo $row->user_name; ?></td>
                <td><?php echo $row->username; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->dateuser; ?></td>
                <td><form action="<?php echo base_url().'conadmin/udf_user/'.$row->user_id; ?>"><button class="btn btn-warning">Edit</button></form></td>
                <td><a href="<?php echo base_url().'conadmin/cfdl_user/'.$row->user_id;?>" class="btn btn-danger">Delete</a></td></tr>
                <?php } ?>
          </tbody>
        </table>
      </div>

      <footer>

      </footer>

  </body>
</html>
