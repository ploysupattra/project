<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regicter User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style>
      @font-face {
        font-family: Nithan;
        src: url('.../assets/bootstrap/fonts/Nithan.ttf') format('truetype') ;
      }
      p{
        font-family: NiThan;
        font-size: 50px; 
      }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <div class="row" style="padding-top:20px;">
        <center><p>สมัครสมาชิกผู้ใช้</p></center>
      </div><br /><br />
      <!-- Body -->
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <form action="<?php echo base_url(); ?>conuser/createuser" method="post" enctype="multipart/form-data">
          <div class="row">
              <div class="col-md-6">
                <label>ชื่อสมาชิก :</label>
                <input type="text" class="form-control" name="user_name"><br />
                <label>E-mail :</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="col-md-6">
                <label>Username :</label>
                <input type="text" class="form-control" name="username"><br />
                <label>Password :</label>
                <input type="password" class="form-control" name="password">
              </div>
          </div><br />
          <div class="row" >
            <div class="form-inline">
              <label style="padding-left:20px;">เลือกรูป :</label><input class="form-control" type="file" name="picture" style="padding-left:5px;">
            </div>
          </div><br />
          <div class="row">
            <center><button type="submit" class="btn btn-info" >ยืนยันการสมัคร</button>
            <a href="<?php echo base_url();?>lobby/web" type="button" class="btn btn-info">กลับหน้าหลัก</a></center>
          </div>
        </form>
        </div>
      </div>
    </div>
  </body>
</html>
