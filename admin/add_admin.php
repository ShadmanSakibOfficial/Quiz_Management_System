<?php
session_start();
include("../Html/conect.php");
include("./header.php");
$sql="SELECT * FROM `temp` ";
    $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
?>
<section class="mar25 ">
  <div class="tb">
      <h1>Pending Admin List</h1>
      <h2><?php
      if($count==0) echo "There is no pending admin.";
      ?>
          <a href="http://localhost/quiz_game-main/admin/add_temp_admin.php" class="btn1">Add New Teacher</a>
  
      </h2>
  <table>
             <tr>
                 <th>name</th>
                 <th>Email</th>
                 <th>Institute</th>
                 <th>Action Button</th>
                 
             </tr>          

             <?php
      while($rows=mysqli_fetch_assoc($res))
      {
          $name=$rows['name'];
          $inst=$rows['institute'];
          $email=$rows['email'];
          $password=$rows['password'];
          $sno=$rows['id'];
          ?>

          
           <tr>
           <form action="" method="POST">
               <td><?php echo $name; ?></td>
               <td><?php echo $email; ?></td>
               <td><?php echo $inst; ?></td>   
               <td> <input type="submit" name="add" value="Accept" class="btn1">
                <input type="submit" name="delete" value="Delete" class="btn">
      </td></form>
              <br>
              <br>
           </tr>
           <?php
          }
        ?>
    </table>
    </div>
</section>
<?php
if(isset($_POST["add"])){
    $sql22="select max(id) as id from teacher";
   if($res22=mysqli_query($con,$sql22)){
    $row=mysqli_fetch_assoc($res22);
    $sid=$row['id']+1;
}
else "error ";
$sql3="INSERT INTO `teacher`(`id`, `name`, `institute`, `email`, `password`) VALUES ('$sid','$name','$inst','$email','$password')";
$res=mysqli_query($con,$sql3);
$sql4="DELETE FROM `temp` WHERE id=$sno";
$res1=mysqli_query($con,$sql4);
header('location:add_admin.php');
}
else if(isset($_POST["delete"])){
    $sql4="DELETE FROM `temp` WHERE id=$sno";
    $res1=mysqli_query($con,$sql4);
    header('location:add_admin.php');
}


?>
