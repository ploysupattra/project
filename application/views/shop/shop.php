<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proflie Member</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customshop.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/tb_set.css">
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<style>
.nithan{font-family: Nithan;}
  #map {
        height: 500px;
      }
</style>
<body>
  <?php IF(isset($_SESSION['username'])) {  ?>
    <div class="container">
        <div class="row user-menu-container square">
            <div class="col-md-7 user-details">
                <div class="row coralbg white">
                    <div class="col-md-6 no-pad">
                        <div class="user-pad">
                            <h3>สวัสดี!! เจ้าของร้าน <?php  echo $_SESSION['shop_name'];?></h3><br /><br /><br />
                            <a type="button" class="btn btn-labeled btn-info" href="<?php echo base_url().'conshop/updateform/'.$_SESSION['shop_id'];?>" >แก้ไขข้อมูล</a>
                            <a type="button" class="btn btn-labeled btn-info" href="<?php echo base_url(); ?>conshop/logout">ออกจากระบบ</a>
                            <a type="button" class="btn btn-labeled btn-info" href="<?php echo base_url().'conshop/closingaccount/'.$_SESSION['shop_id'];?>">ปิดบัญชี</a>
                        </div>
                    </div>
                    <div class="col-md-6 no-pad">
                        <div class="user-image">
                            <img src="<?php echo base_url()."../assets/img/logoshop/".$_SESSION['picture']; ?>" class="img-responsive thumbnail">
                        </div>
                    </div>
                </div>
                <div class="row overview">
                    <div class=" user-pad text-center">
                      <h3>วันที่คุณสมัคร</h3><h5><?php echo $_SESSION['date_register'];  ?></h5>
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
                        <h4>ชื่อร้าน : <?php echo $_SESSION['shop_name']; ?></h4>
                        <h4>ที่อยู่ร้าน : <?php echo $_SESSION['address']; ?></h4>
                        <h4>username : <?php echo $_SESSION['username']; ?></h4>
                        <h4>password : <?php echo $_SESSION['password']; ?></h4>
                    </ul>
                </div>
                <div class="user-menu-content">
                    <h3>ช่องทางติดต่อของคุณ</h3>
                    <ul class="user-menu-list">
                        <h4>E-mail : <?php echo $_SESSION['email']; ?></h4>
                        <h4>เบอร์โทร : <?php echo $_SESSION['callphone']; ?></h4>
                    </ul><br />
                </div>
                <div class="user-menu-content">
                  <h3>Location</h3>
                    <div class="row share-links">
                      <h4>Latitude : <?php echo $_SESSION['latitude']; ?></h4>
                      <h4>Longtitude : <?php echo $_SESSION['longtitude'];?></h4>
                    </div><br />
                </div>
                <div class="user-menu-content">
                    <h2 class="text-center">รูปภาพร้านคุณ</h2>
                    <center><i class="fa fa-bar-chart-o fa-4x"></i></center>
                    <div class="share-links">
                      <center><form action="<?php echo base_url(); ?>conshop/addgallary" method="post" enctype="multipart/form-data">
                        <label>เลือกรูป : </label> <input class="form-control" type="file" name="picture" style="padding-left:5px;"><br />
                        <button class="btn  btn-label btn-danger fa fa-picture-o" value="<?php echo $_SESSION['shop_id'];  ?>" type="submit" style="background-color:#e3014c;"> เพิ่มรูปภาพ</button>
                        </form>
                      </center>
                    </div>
                </div>
            </div>
        </div><br /><br />
        <!-- location -->
        <div class="row">
            <label>Location ร้านของคุณ :</label>
            <div id="map"></div>
            <script>
              function initMap() {
              var mapOptions = {
                center: {lat: 18.889769984395198, lng: 99.02368089814763},
                zoom: 16,
              }
              var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
              var marker;
              var InfoWindow;

              InfoWindow = new google.maps.InfoWindow();

              $.getJSON("<?php echo base_url(); ?>json/jsonObj", function(jsonObj) {
                $.each(jsonObj,function(i,item) {
                    marker = new google.maps.Marker({
                      position:new google.maps.LatLng(<?php echo $_SESSION['latitude']; ?>,<?php echo $_SESSION['longtitude'];?>),
                      map: maps,
                      icon:iconBase + 'gener.png',
                      title: item.shop_name
                    });
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                      InfoWindow.setContent(item.shop_name);
                      InfoWindow.open(maps, marker);
                    }
                    })(marker, i));
                });
              });
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJb6ASr8pWUF4uMoxT9Oujreq-fmGXljs&callback=initMap" async defer></script><br />
          </div><br />
          <div class="row">
            <form>
              <table class="table-fill">
                <thead>
                  <tr><th class="text-center nithan">ID รูปภาพ</th>
                      <th class="text-center nithan">Picture</th>
                      <th class="text-center nithan">ชื่อ Picture</th>
                      <th class="text-center nithan">ลบ</th>
                </thead>
                <tbody class="table-hover">
                  <?php foreach ($gallery->result() as $row) { ?>
                  <tr><td class="text-center"><?php echo $row->pic_id; ?></td>
                      <td><center><img src="<?php echo base_url().'../assets/img/gallery/'.$row->pic_name; ?>" width="70" /></center></td>
                      <td class="text-center"><?php echo $row->pic_name ?></td>
                      <td><center><a href="<?php echo base_url().'conshop/confirmdl/'.$row->pic_id; ?>" class="btn btn-danger">Delete</a></center></td>
                  <?php } ?>
                </tbody>
              </table>
            </form>
          </div>
    </div><br />
  <?php }else{
      echo '<script language="javascript">';
      echo 'alert("ยังไม่ได้เข้าสู่ระบบ")';
      echo '</script>';
      $this->load->view('shop/loginform'); }  ?>
  </body>
</html>
