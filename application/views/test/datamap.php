<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proflie Member</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customshop.css">
    <!-- <link href="<?php echo base_url(); ?>../assets/bootstrap/js/jquery.min.js" type="text/javascript"> -->
    <!-- <link src="<?php echo base_url(); ?>../assets/bootstrap/js/bootstrap.js" type="text/javascript"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/jquery.fileupload.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    <style>
    .set{
      text-align: center;
      margin: auto;
      border: 0px;
    }
    </style>
</head>
<body>

    <div class="container">
        <div class="row user-menu-container square">
            <div class="col-md-7 user-details">
                <div class="row coralbg white">
                    <div class="col-md-6 no-pad">
                        <div class="user-pad">
                            <h3>สวัสดี!! คุณ Supattra</h3>
                            <h4 class="white"><i class=""></i>วันนี้วันที่ : ใกล้เส้นตาย</h4>
                            <h4 class="white"><i class="fa fa-tag"></i>สาเหตุ : ยังไม่ถึงไหนเบย</h4>
                            <a type="button" class="btn btn-labeled btn-info" href="<?php echo base_url(); ?>member/register">แก้ไขข้อมูล</a>
                            <a type="button" class="btn btn-labeled btn-info" href="<?php echo base_url(); ?>member/logout">ออกจากระบบ</a>
                            <a type="button" class="btn btn-labeled btn-info" href="#">ปิดบัญชี</a>
                        </div>
                    </div>
                    <div class="col-md-6 no-pad">
                        <div class="user-image">
                            <img src="" class="img-responsive thumbnail">
                        </div>
                    </div>
                </div>
                <div class="row overview">
                    <div class="col-md-6 user-pad text-center">
                      <h3>จำนวนผู้ใช้งาน</h3><h4>2,784</h4>
                    </div>
                    <div class="col-md-6 user-pad text-center">
                      <h3>ผู้ใช้งานที่เข้าร้าน</h3><h4>456</h4>
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
                      <i class="fa fa-bar-chart-o  fa-3x"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 user-menu user-pad">
                <div class="user-menu-content active">
                    <h3>บัญชีข้อมูลร้าน</h3>
                    <ul class="user-menu-list">
                        <h4>ชื่อเจ้าของร้าน : </h4>
                        <h4>ชื่อร้าน : </h4>
                        <h4>username : </h4>
                        <h4>password : </h4>
                    </ul>
                </div>
                <div class="user-menu-content">
                    <h3>ช่องทางติดต่อของคุณ</h3>
                    <ul class="user-menu-list">
                        <h4>E-mail : </h4>
                        <h4>เบอร์โทร : </h4>
                    </ul><br />
                    <center>
                      <button type="button" class="btn btn-labeled btn-danger" href="#">
                      <span class="btn-label"><i class="fa fa-envelope-o"></i></span>View All Messages</button>
                    </center>
                </div>
                <div class="user-menu-content">
                  <h3>Location</h3>
                    <div class="row share-links">
                      <h4>Latitude : </h4>
                      <h4>Longtitude : </h4>
                    </div><br />
                    <center class="padding-top:20px;">
                      <button type="button" class="btn btn-lg btn-labeled btn-success" href="#" id="locationGraph" style="margin-bottom: 15px;">
                      <span class="btn-label"><i class="fa fa-eye"></i></span>ดู Location Map</button>
                    </center>
                </div>
                <div class="user-menu-content">
                    <h2 class="text-center">สถิติการบริการ</h2>
                    <center><i class="fa fa-bar-chart-o fa-4x"></i></center>
                    <div class="share-links">
                      <li>เดือนนี้</li>
                        <center><button type="button" class="btn btn-lg btn-labeled btn-success" href="#" style="margin-bottom: 15px;">
                                <span class="btn-label"><i class="fa fa-eye"></i></span>ดูรายละเอียด</button>
                        </center>
                        <li>ตั้งแต่เปิดร้าน</li>
                        <center><button type="button" class="btn btn-lg btn-labeled btn-warning" href="#">
                                <span class="btn-label"><i class="fa fa-eye"></i></span>ดูรายละเอียด</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div><br />
    <div class="container" style="background-color:#000000;">
      <div class="carousel slide" id="myCarousel" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
              <li data-target="#myCarousel" data-slide-to="5"></li>
          </ol>
          <!-- Wrapper for slides -->
          <?php  IF(isset($_SESSION['username'])){ ?>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo base_url()."assets/img/gallery/".$_SESSION['picture1']; ?>" class="img-responsive" height="150px">
            </div>
            <div class="item">
              <img src="<?php echo base_url()."assets/img/gallery/".$_SESSION['picture2']; ?>" class="img-responsive" height="150px">
            </div>
            <div class="item">
              <img src="<?php echo base_url()."assets/img/gallery/".$_SESSION['picture3']; ?>" class="img-responsive" height="150px">
            </div>
            <div class="item">
              <img src="<?php echo base_url()."assets/img/gallery/".$_SESSION['picture4'];?>" class="img-responsive" height="150px">
            </div>
            <div class="item">
              <img src="<?php echo base_url()."assets/img/gallery/".$_SESSION['picture5']; ?>" class="img-responsive" height="150px">
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
    </div><br />

    <div class="row">
      <center>
        <div class="container">
          <table class="table table-bordered">
            <thead style="text-align:center;">
              <tr><td>รูปภาพ</td>
                  <td>เลือกไฟล์</td>
                  <!-- <td>อัพโหลด</td> -->
                  <td>แก้ไข</td>
                  <td>ลบ</td></tr>
            </thead>
            <tbody class="set">
              <tr><td>รูปภาพ1</td>
                  <form action="<?php echo base_url(); ?>conupload/saveall" method="post" enctype="multipart/form-data">
                  <td><button class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="picture">
                      </button></td>
                  <!-- <td><button type="submit" class="btn btn-primary start">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start Upload</span>
                      </button></td> -->
                  <!-- </form> -->
                  <td><button type="reset" class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Edit</span>
                      </button></td>
                  <td><button type="button" class="btn btn-danger delete">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                      </button></td></tr>
              <tr><td>รูปภาพ2</td>
                  <!-- <form action="<?php echo base_url(); ?>conupload/save" method="post" enctype="multipart/form-data"> -->
                  <td><button class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="picture2">
                      </button></td>
                  <!-- <td><button type="submit" class="btn btn-primary start">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start Upload</span>
                      </button></td> -->
                  <!-- </form> -->
                  <td><button type="reset" class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Edit</span>
                      </button></td>
                  <td><button type="button" class="btn btn-danger delete">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                      </button></td></tr>
              <tr><td>รูปภาพ3</td>
                  <!-- <form action="<?php echo base_url(); ?>conupload/save" method="post" enctype="multipart/form-data"> -->
                  <td><button class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="picture3">
                      </button></td>
                  <!-- <td><button type="submit" class="btn btn-primary start">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start Upload</span>
                      </button></td> -->
                  <!-- </form> -->
                  <td><button type="reset" class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Edit</span>
                      </button></td>
                  <td><button type="button" class="btn btn-danger delete">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                      </button></td></tr>
              <tr><td>รูปภาพ4</td>
                  <!-- <form action="<?php echo base_url(); ?>conupload/save" method="post" enctype="multipart/form-data"> -->
                  <td><button class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="picture4">
                      </button></td>
                  <!-- <td><button type="submit" class="btn btn-primary start">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start Upload</span>
                      </button></td> -->
                  <!-- </form> -->
                  <td><button type="reset" class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Edit</span>
                      </button></td>
                  <td><button type="button" class="btn btn-danger delete">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                      </button></td></tr>
              <tr><td>รูปภาพ5</td>
                  <!-- <form action="<?php echo base_url(); ?>conupload/save" method="post" enctype="multipart/form-data"> -->
                  <td><button class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="picture5">
                      </button></td>
                  <!-- <td><button type="submit" class="btn btn-primary start">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start Upload</span>
                      </button></td> -->
                  <!-- </form> -->
                  <td><button type="reset" class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Edit</span>
                      </button></td>
                  <td><button type="button" class="btn btn-danger delete">
                      <i class="glyphicon glyphicon-trash"></i>
                      <span>Delete</span>
                      </button></td></tr>
            </tbody>
          </table>
          <center>
            <td><button type="submit" class="btn btn-primary start">
                  <i class="glyphicon glyphicon-upload"></i>
                  <span>Start Upload</span>
                </button></td>
          </center>
          </form>
        </div>
      </center>
    </div>

  </body>
</html>
