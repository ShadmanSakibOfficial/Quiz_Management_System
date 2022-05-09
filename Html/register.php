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
        <h1 class="t_center" >Student Registration</h1>
        <br>
         <form action="" method="POST" class="t_center">

         Name : <br><br>
             <input type="name" name="name" placeholder="Enter Username"> <br><br>
             Institute : <br><br>
             <input type="institue" name="institute" placeholder="Enter Institute"> <br><br>
            Email : <br><br>
             <input type="email" name="email" placeholder="Enter Email"> <br><br>
             Password : <br><br>
             <input type="password" name="password" placeholder="Enter Password"> <br><br>
 
             <input type="submit" value="Register"  name="register" class="btn">
             
             
         </form>
     </div>
</body>
</html>
<?php
if(isset($_POST['register'])){ 

    
$Name=$_POST['name'];
$inst=$_POST['institute'];
$email=$_POST['email'];
$password=$_POST['password'];

if (filter_var($email,FILTER_VALIDATE_EMAIL)) {

    
$sql22="select max(id) as id from student";
   if($res22=mysqli_query($con,$sql22)){
    $row=mysqli_fetch_assoc($res22);
    $sno=$row['id']+1;
}
else "error ";

$sql3="INSERT INTO `student`(`id`, `name`, `Institue`, `email`, `password`) VALUES ('$sno','$Name','$inst','$email','$password')";
$res=mysqli_query($con,$sql3);
header('location:http://localhost/quiz_game-main/Html/login.php');
}
else{
    echo("$email is not a valid email address");
}

}

?>