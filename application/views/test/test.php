<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test comment</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
  </head>
  <body>
    <div class="container">
      <center>
        <?php
        if(isset($_POST['submit']))
        {
            $firstName = $_POST['fName'];
            $lastName = $_POST['lName'];
         echo "<h2>ยินดีต้อนรับ คุณ$firstName $lastName</h2>";
        }else{
        ?>
        <form name="test" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        ชื่อ<input type="text" name="fName" size=50><br>
        นามสกุล<input type="text" name="lName" size=50><br>
        <input type="submit" name="submit" value="ส่งข้อมูล"></td></tr>
        </form>
        <?php }  ?>
      </center>
    </div>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
