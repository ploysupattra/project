<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Motor PLUS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customs.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/tb_set.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('a[href="#navbar-more-show"], .navbar-more-overlay').on('click', function(event) {
        event.preventhefault();
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
        background-color: #86ff4e;
        font-family: "Roboto", helvetica, arial, sans-serif;
        font-size: 16px;
        font-weight: 400;
        text-rendering: optimizeLegibility;
      }
      .name{ padding-top: 15px; color: #ffffff;}
      .titleh {
        font-family:Nithan;
        color: #000000;
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
                <a href="<?php echo base_url(); ?>conadmin/manage_user">
                  <span class="menu-icon fa fa-star"></span>
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
        </nav><br /><br /><br />
			<!-- Body -->
        <div class="row" style="padding-top:20px;">
          <div class="container">
            <center><p class="titleh" style="font-size:55px;">จัดการร้านซ่อมรถ</p></center>
          </div>
          <table class="table-fill">
            <thead>
              <tr><th class="text-left">ID</th>
                  <th class="text-left">Picture</th>
                  <th class="text-center nithan">ร้าน</th>
                  <th class="text-left">Username</th>
                  <th class="text-left">Callphone</th>
                  <th class="text-left">Service</th>
                  <th class="text-center">Email</th>
                  <th class="text-left">Latitude</th>
                  <th class="text-left">Longtitude</th>
                  <th class="text-center nithan">วันที่สมัคร</th>
                  <th class="text-center nithan">แก้ไข</th>
                  <th class="text-center nithan">ลบ</th></tr>
            </thead>
            <?php foreach ($manageshop->result() as $row) {  ?>
            <tbody class="table-hover">
              <tr><td><?php echo $row->shop_id; ?></td>
                  <td><?php echo $row->picture; ?></td>
                  <td><?php echo $row->shop_name; ?></td>
                  <td><?php echo $row->username; ?></td>
                  <td><?php echo $row->callphone; ?></td>
                  <td><?php echo $row->service_name; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td><?php echo $row->lat; ?></td>
                  <td><?php echo $row->lng; ?></td>
                  <td><?php echo $row->date; ?></td>
                  <td><a href="<?php echo base_url().'conadmin/udf_shop/' .$row->shop_id; ?>"><button class="btn btn-warning" >Edit</button></a></td>
                  <td><a href="<?php echo base_url().'conadmin/cfdl_shop/'.$row->shop_id;?>" class="btn btn-danger">Delete</a></td></tr>
            </tbody>
            <?php } ?>
          </table>
        </div>

      <footer>

      </footer>
  </body>
</html>
