<?php
include '../controller/db.php';

session_start();
$id = $_SESSION['id'];

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($db, $_POST['update_name']);
   $update_username = mysqli_real_escape_string($db, $_POST['update_username']);

   mysqli_query($db, "UPDATE registrasi SET fullname = '$update_name', username = '$update_username' WHERE id = '$id'") or die('query failed');

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($db, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($db, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($db, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($db, "UPDATE registrasi SET password = '$confirm_pass' WHERE id = '$id'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = '../upload/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($db, "UPDATE registrasi SET pp = '$update_image' WHERE id = '$id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
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
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/styless.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($db, "SELECT * FROM registrasi WHERE id = '$id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['pp'] == ''){
            echo '<img src="../upload/">';
         }else{
            echo '<img src="../upload/'.$fetch['pp'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>Fullname :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['fullname']; ?>" class="box">
            <span>your username :</span>
            <input type="username" name="update_username" value="<?php echo $fetch['username']; ?>" class="box">
            <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="home.php" class="delete-btn">go back</a>
   </form>

</div>

</body>
</html>