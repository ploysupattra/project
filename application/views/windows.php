<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Welcome to MotorPLUS </title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .slideshow{
      width: auto;
      height: 500px;
    }
    .btndown{
      padding-top: 10px;
    }
    </style>



  </head>
  <body>
    <nav class="navbar navbar-inverse" style="padding:5px;">
      <center>
        <img src="<?php echo base_url(); ?>../assets/logo/logo.png" class="img-responsive" height="auto" width="150"/>
      </center>
    </nav>
    <div class="container">
      <div class="row">
        <center>
          <div class="slideshow">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators" style="height:400px;">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="<?php echo base_url(); ?>../assets/img/banner/win.jpg" class="img-responsive" height="100px">
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url(); ?>../assets/img/banner/win2.jpg" class="img-responsive" height="150px">
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
          </div>
        </center>
      </div><br />
      <div class="row">
        <center class=btndown>
          <a href="<?php echo base_url(); ?>lobby/web" class="btn btn-default" role="button">เข้า Website</a>
          <a class="btn btn-default" data-toggle="modal" data-target="#login-modal">สำหรับร้าน</a>
          <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                <div class="loginmodal-container">
                  <h1>Login เข้าบัญชีสมาชิก</h1><br>
                  <form action="<?php echo base_url(); ?>conshop/login" method="post" enctype="multipart/form-data">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                  </form>
                  <div class="login-help">
                    <a href="<?php echo base_url(); ?>conshop/register">สมัครสมาชิก</a> / <a href="#">ลืมรหัสผ่าน</a>
                  </div>
                </div>
              </div>
            </div>
        </center>
      </div>
    </div>
    <footer class="container-fluid text-right">
      <p><a href="<?php echo base_url(); ?>conadmin/loginform">Admin only</a></p>
    </footer>
  </body>
</html>
