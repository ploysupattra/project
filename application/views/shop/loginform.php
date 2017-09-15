<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customloginform.css">
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>../assets/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>../assets/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <form class="login-form" action=" <?php echo base_url();?>conshop/login" method="post"
          enctype="multipart/form-data">
          <h3>Login เข้าบัญชีสมาชิก</h3><br />
          <input type="text" placeholder="Username" name="username"/>
          <input type="password" placeholder="Password" name="password"/>
          <button>login</button>
          <p class="message"><a href="<?php echo base_url(); ?>lobby/web">Home</a>/<a href="<?php echo base_url(); ?>conshop/register">สมัครสมาชิก</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
