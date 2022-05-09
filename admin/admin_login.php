
<?php

session_start();
include("../Html/conect.php");

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
        <h1 class="t_center" >Teacher's LOG IN</h1>
        <?php
       if(isset($_SESSION['login'])){
           echo $_SESSION['login'];
           unset($_SESSION['login']);
       }
       if(isset($_SESSION['no-login'])){
        echo $_SESSION['no-login'];
        unset($_SESSION['no-login']);
    }
       ?>
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
             
         </form>
     </div>
</body>
</html>
<?php
 if(isset($_POST['login'])){ 
      $name=$_POST['Name'];
        $password=($_POST['password']);
   $sql="SELECT * FROM `teacher` WHERE name='$name' && password='$password'";
      $res=mysqli_query($con,$sql);
      if(mysqli_num_rows($res)>0){
        $_SESSION['login'] = "<div>Log in Successfully.</div>";
        $_SESSION['user'] = $name;
          header('location:index.php');
      }
   else{
    $_SESSION['login'] = "<div>User Name or Password does not match.</div>";
      header('location:admin_login.php');

    }

   }


  ?>