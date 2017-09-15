<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">


    <title>Motor PLUS</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootstrap/css/customregis.css">
		<!-- <script type="text/javascript" src="<?php echo base_url(); ?>../assets/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>../assets/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      #map {
        height: 500px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>


  </head>
  <body>
		<div class="container">

			<!-- Header -->
			<div class="row">
        <p>สมัครสมาชิกร้าน</p>
			</div>
			<!-- Body -->
			<div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <div class="row">
            <form action="<?php echo base_url(); ?>conshop/create" method="post" enctype="multipart/form-data">
              <div class="col-md-6">
                <label>ชื่อร้าน :</label>
                <input type="text" class="form-control" name="shop_name">
                <label>ที่อยู่ :</label>
                <textarea type="text" class="form-control" name="address"></textarea>
                <label>เบอร์โทร :</label>
                <input type="text" class="form-control" name="callphone">
              </div>
              <div class="col-md-6">
                <label>Username :</label>
                <input type="text" class="form-control" name="user">
                <label>Password :</label>
                <input type="password" class="form-control" name="pass">
                <label>E-mail :</label>
                <input type="text" class="form-control" name="email">
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>Facebook :</label>
              <input type="text" class="form-control" name="facebook">
            </div>
            <div class="col-md-6">
              <label>Line :</label>
              <input type="text" class="form-control" name="line">
            </div>
          </div><br /><br />
          <div class="row container" >
                <div class="form-inline">
                    <select class="form-control" name="service" >
                      <option>ประเภทบริการ</option>
                      <?php foreach($service->result() as $row) {  ?>
                      <option value="<?php echo $row->service_id; ?>"><?php echo $row->service_name; ?></option>
                      <?php } ?>
                    </select>
                    <select class="form-control" name="daybegin">
                      <option>วันที่เปิด</option>
                      <?php foreach($daybegin->result() as $row) {  ?>
                      <option value="<?php echo $row->begin_id; ?>" ><?php echo $row->begin_name; ?></option>
                      <?php } ?>
                    </select> ถึง
                    <select class="form-control" name="dayend">
                      <option>วันที่ปิด</option>
                      <?php foreach($dayend->result() as $row) {  ?>
                      <option value="<?php echo $row->end_id; ?>" ><?php echo $row->end_name; ?></option>
                      <?php } ?>
                    </select>
                      <select class="form-control" name="open">
                        <option>เวลาเปิด</option>
                        <?php foreach($open->result() as $row) {  ?>
                        <option value="<?php echo $row->open_id; ?>" ><?php echo $row->open; ?></option>
                        <?php } ?>
                      </select>
                      <select class="form-control" name="close">
                        <option>เวลาปิด</option>
                        <?php foreach($close->result() as $row) {  ?>
                        <option value="<?php echo $row->close_id; ?>"><?php echo $row->close; ?></option>
                        <?php } ?>
                      </select>
                      <select class="form-control" name="province" >
                        <option>จังหวัด</option>
                        <?php foreach($province->result() as $row) {  ?>
                        <option value="<?php echo $row->province_id; ?>"><?php echo $row->province_name; ?></option>
                        <?php } ?>
                      </select><br /><br />
                      <label style="padding-left:20px;">รูปโปรไฟล์ :</label><input class="form-control" type="file" name="picture" style="padding-left:5px;">
                </div>
              </div><br />
<!-- _____________________________________ส่วนปัก Location________________________________ -->
            <div class="row">
                <label>Location :</label>
                <div id="map"></div>
                <script>
                  var map;
                  var marker;

                  function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                      center: {lat: -34.397, lng: 150.644},
                      zoom: 17
                    });
                    // Try HTML5 geolocation.
                    if (navigator.geolocation) {
                      navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                          lat: position.coords.latitude,
                          lng: position.coords.longitude
                        };
                        marker = new google.maps.Marker({
                          position: pos,
                          map: map,
                          draggable:true,
                          title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!"
                        });
                        google.maps.event.addListener(marker, 'drag', function(event) {
                          $("#latitude").val(this.getPosition().lat());
                          $("#longtitude").val(this.getPosition().lng());
                        });
                        map.setCenter(pos);
                      }, function() {
                        handleLocationError(true,  map.getCenter());
                      });
                    } else {
                      // Browser doesn't support Geolocation
                      handleLocationError(false,  map.getCenter());
                    }
                  }
                  function saveData() {
                    var name = escape(document.getElementById('name').value);
                    var address = escape(document.getElementById('address').value);
                    var type = document.getElementById('type').value;
                    var latlng = marker.getPosition();
                  }
                  function downloadUrl(url, callback) {
                    var request = window.ActiveXObject ?
                        new ActiveXObject('Microsoft.XMLHTTP') :
                        new XMLHttpRequest;

                    request.onreadystatechange = function() {
                      if (request.readyState == 4) {
                        request.onreadystatechange = doNothing;
                        callback(request.responseText, request.status);
                      }
                    };
                    request.open('GET', url, true);
                    request.send(null);
                  }
                  function doNothing () {
                  }
                  </script>
                <script async defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAt0pP52wKcfM5BZx9gI5UxU73fq-b8pvM&callback=initMap">
                </script>
              </div><br />
              <div class="form-inline">
                  <center><label>Latitude :  </label>
                  <input type="text" class="form-control" id="latitude" name="lat" value="" />
                  <label>Longitude :  </label>
                  <input type="text" class="form-control" id="longtitude" name="lng" value="" /></center>
              </div>
              <div class="row">
                <center><button type="submit" class="btn btn-info" >ยืนยันการสมัคร</button>
                <a href="<?php echo base_url();?>lobby/windows" type="button" class="btn btn-info">กลับหน้าเว็บ</a></center>
              </div>
            </form>
<!-- _______________________________________________________________ปิดส่วนปัก Location__________________________________________ -->
            </div>
        <div class="col-md-2">

        </div>
			</div>
      <footer style="height:10px;"></footer>

		</div>

  </body>
</html>
