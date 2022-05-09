<?php
session_start();
include("../Html/conect.php");
// include("./header.php")
?>
<section class="mar25">
<link rel="stylesheet" href="../css/style.css">
<div class="log_in ">
        <br><br>
        <h1 class="t_center" >Add Admin</h1>
        <br>
         <form action="" method="POST" class="t_center">
                
                
                    Name:
                    <input type="text"name="name" placeholder="Enter your name"> <br><br>
                
                Password:
                    <input type="password" name="password"placeholder="Enter Password"> <br><br>
               
                    Institution:
                    <input type="text"name="institute" placeholder="Enter your Institute"> <br><br>
                
               
                    Email:
                    <input type="text"name="email" placeholder="Enter your Email"> <br><br>
                
               
                        <input type="submit" name="submit" value="Add Admin" class="btn">
                
        </form>
    
</div>
</section>

<?php
if(isset($_POST['submit'])){ 
    
$Name=$_POST['name'];
$inst=$_POST['institute'];
$email=$_POST['email'];
$password=$_POST['password'];

if (filter_var($email,FILTER_VALIDATE_EMAIL)) {

$sql22="select max(id) as id from temp";
   if($res22=mysqli_query($con,$sql22)){
    $row=mysqli_fetch_assoc($res22);
    $sno=$row['id']+1;
}
else "error ";

$sql3="INSERT INTO `temp`(`id`, `name`, `institute`, `email`, `password`) VALUES ('$sno','$Name','$inst','$email','$password')";
$res=mysqli_query($con,$sql3);
header('location:../index.php');

}
else{
    echo("$email is not a valid email address");
}

}
else if(isset($_POST['login'])){
    header('location:http://localhost/quiz_game-main/admin/admin_login.php'); 
}

?>