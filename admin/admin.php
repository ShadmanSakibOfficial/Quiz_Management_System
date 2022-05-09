<?php
session_start();
include("../Html/conect.php");

include("./header.php");
$sql="SELECT * FROM `teacher` ";
    $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
?>
<section class="mar25 ">
  <div class="tb">
      <h1>Teacher List</h1>
      <h2>
      <a href="http://localhost/quiz_game-main/admin/add_admin.php" class="btn1">Add Teacher</a>
    <?php
      if($count==0) echo "There is no pending admin.";
      ?>
      </h2>
  <table>
             <tr>
             <th>SN</th>
                 <th>name</th>
                 <th>Email</th>
                 <th>Institute</th>
                 <!-- <th>Action Button</th> -->
                 
             </tr>          

             <?php
             $sn=1;
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
           <td><?php echo $sn; ?></td>
                <td><?php echo $name; ?></td>
               <td><?php echo $email; ?></td>
               <td><?php echo $inst; ?></td>   
               <!-- <td> <input type="submit" name="add" value="Accept" class="btn1"> -->
                <!-- <input type="submit" name="delete" value="Delete" class="btn"> -->
      </td></form>
              <br>
              <br>
           </tr>
           <?php
           $sn++;
          }
        ?>
    </table>
    </div>
</section>
<?php




?>