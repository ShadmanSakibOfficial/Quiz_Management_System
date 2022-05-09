
<?php

session_start();
include("conect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <div class="log_in ">
        <br><br>
        <h1 class="t_center" >LOG IN</h1>
        <br>
         <form action="" method="POST" class="t_center">

         <!-- Name : <br><br>
             <input type="text" name="username" placeholder="Enter Username"> <br><br>
             Institute : <br><br>
             <input type="text" name="institute" placeholder="Enter Institute"> <br><br> -->
            Name : <br><br>
             <input type="text" name="Name" placeholder="Enter Name"> <br><br>
             Password : <br><br>
             <input type="password" name="password" placeholder="Enter Password"> <br><br>
 
             <input type="submit" value="Log In"  name="login" class="btn">
             <a href="register.php" class="btn">Sign-Up</a><br><br>
             <a href="..\admin\admin_login.php" class="">Log in as a Teacher</a>
             
         </form>
     </div>
</body>
</html>
<?php
 if(isset($_POST['login'])){ 
      $name=$_POST['Name'];
        $password=($_POST['password']);
   $sql="SELECT * FROM `student` WHERE name='$name' && password='$password'";
      $res=mysqli_query($con,$sql);
      if(mysqli_num_rows($res)>0){
          $row=mysqli_fetch_assoc($res);
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row['name'];
        $_SESSION['id'] = $row['id'];
       
          header('location:http://localhost/quiz_game-main/Html/quiz.php');
      }
   else{
//        //  $_SESSION['login']="<div class='error text-center'>Name or Password didn't match.</div>";
      header('location:login.php');
    }

   }


  ?>