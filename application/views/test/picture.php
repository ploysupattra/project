<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">

  </head>
  <body>
    <center><h2>อัพโหลดรูปภาพ</h2></center><br /><br />
    <div class="row">
      <center>
        <div class="container">
          <table class="table table-bordered">
            <thead style="text-align:center;">
              <tr><td>รูปภาพ</td>
                  <td>เลือกไฟล์</td>
                  <td>แก้ไข</td>
                  <td>ลบ</td></tr>
            </thead>
            <tbody class="set">
              <tr><td>รูปภาพ1<img src="<?php echo base_url()."../assets/img/".$_SESSION['picture']; ?>" class="img-responsive thumbnail"></td>
                  <form action="<?php echo base_url(); ?>conupload/saveall" method="post" enctype="multipart/form-data">
                  <td><button class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="picture">
                      </button></td>
                  <td><button type="reset" class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Edit</span>
                      </button></td>
                  <td><button type="button" class="btn btn-danger delete">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                      </button></td></tr>
              <tr><td>รูปภาพ2<img src="<?php echo base_url()."../assets/img/".$_SESSION['picture']; ?>" class="img-responsive thumbnail"></td>
                  <td><button class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="picture2">
                      </button></td>
                  <td><button type="reset" class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Edit</span>
                      </button></td>
                  <td><button type="button" class="btn btn-danger delete">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                      </button></td></tr>
              <tr><td>รูปภาพ3<img src="<?php echo base_url()."../assets/img/".$_SESSION['picture']; ?>" class="img-responsive thumbnail"></td>
                  <td><button class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="picture3">
                      </button></td>
                  <td><button type="reset" class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Edit</span>
                      </button></td>
                  <td><button type="button" class="btn btn-danger delete">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                      </button></td></tr>
              <tr><td>รูปภาพ4<img src="<?php echo base_url()."../assets/img/".$_SESSION['picture']; ?>" class="img-responsive thumbnail"></td>
                  <td><button class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="picture4">
                      </button></td>
                  <td><button type="reset" class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Edit</span>
                      </button></td>
                  <td><button type="button" class="btn btn-danger delete">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                      </button></td></tr>
              <tr><td>รูปภาพ5<img src="<?php echo base_url()."../assets/img/".$_SESSION['picture']; ?>" class="img-responsive thumbnail"></td>
                  <td><button class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="picture5">
                      </button></td>
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

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
