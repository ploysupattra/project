<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body style="background-color:#7c61a3;">
    <div class="row">

    </div><br /><br /><br />
    <div class="row">
      <div class="col-md-4"></div>
      <center>
        <div class="col-md-4" style="padding-top:170px;">
          <div class="panel panel-primary">
           <div class="panel-heading">Confirm Delete Comment</div>
           <div class="panel-body">
             <?php foreach ($comment->result() as $row) { ?>
              <p>คุณยืนยันที่จะลบ Comment นี้หรือไม่?</p><p style="color:red;">**หากลบแล้วจะไม่สามารถกู้ข้อมูลคืนได้</p><br />
              <a href="<?php echo base_url().'conadmin/dl_comment/'.$row->review_id;?>"><button class="btn btn-primary" >ยืนยัน</button></a>
              <a href="<?php echo base_url(); ?>conadmin/manage_comment"><button class="btn btn-primary" >ยกเลิก</button></a>
             <?php } ?>
           </div>
         </div>
        </div>
      </center>
      <div class="col-md-4"></div>
    </div>
    <div class="row">

    </div>


  </body>
</html>
