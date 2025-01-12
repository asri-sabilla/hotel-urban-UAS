<?php

include '../controller/db.php';
session_start();
$id = $_SESSION['id'];

if(!isset($id)){
   header('location:../models/login.php');
};

if(isset($_GET['logout'])){
   unset($id);
   session_destroy();
   header('location:../models/login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/styless.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($db, "SELECT * FROM registrasi WHERE id = '$id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['pp'] == ''){
            echo '<img src="../upload/">';
         }else{
            echo '<img src="../upload/'.$fetch['pp'].'">';
         }
      ?>
      <h3><?php echo $fetch['fullname']; ?></h3>
      <a href="form-edit.php" class="btn">update profile</a>
      <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
      <p>new <a href="../models/login.php">login</a> or <a href="../models/register.php">register</a></p>
   </div>

</div>

</body>
</html>