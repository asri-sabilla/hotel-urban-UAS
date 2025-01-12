<?php

include '../controller/db.php';

if(isset($_POST['submit'])){

   $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
   $username = mysqli_real_escape_string($db, $_POST['username']);
   $pass = mysqli_real_escape_string($db, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($db, md5($_POST['cpassword']));
   $pp = $_FILES['pp']['fullname'];
   $image_size = $_FILES['pp']['size'];
   $image_tmp_name = $_FILES['pp']['tmp_name'];
   $image_folder = '../upload/'.$image;

   $select = mysqli_query($db, "SELECT * FROM registrasi WHERE username = '$username' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($db, "INSERT INTO registrasi(fullname, username, password, pp) VALUES('$fullname', '$username', '$pass', '$pp')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:../akun/home.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/styless.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="fullname" placeholder="enter fullname" class="box" required>
      <input type="username" name="username" placeholder="enter username" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>