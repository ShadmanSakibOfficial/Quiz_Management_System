<?php
session_start();
include("../Html/conect.php");
include("./header.php");


$sql="SELECT * FROM `ques`";
    $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
      ?>
<section class="mar25 ">
  <div class="tb">
      <h1>Add Question</h1>
      <h2><?php
      if($count==0) echo "There is no Question.";
      ?>
      </h2>
  <table>
             <tr>
             <th>Question</th>
                 <th>A </th>
                 <th>B</th>
                 <th>C</th>
                 <th>D</th>
                 <th>Answer</th>
                 <!-- <th>Action Button</th> -->
                 
             </tr> 

      <?php
      while($_rows=mysqli_fetch_assoc($res))
      {
        $ques=$_rows['ques'];
        $a=$_rows['a'];
        $b=$_rows['b'];
        $c=$_rows['c'];
        $d=$_rows['d'];
        $ans=$_rows['ans'];
        $sub=$_rows['subj'];
        $qid=$_rows['id'];
          ?>
          <tr class="wh">

           <form action="" method="POST">
           
               <td><?php echo $ques; ?></td>
               <td><?php echo $a; ?></td>
               <td><?php echo $b; ?></td> 
               <td><?php echo $c; ?></td>
               <td><?php echo $d; ?></td> 
               <td><?php echo $ans; ?></td> 

                <!-- <td><input type="submit" name="add" value="Add" class="btn1"> <br><br> -->
                <!-- <input type="submit" name="next" value="next" class="btn-second"> -->
      </td></form>

           </tr>
           <?php
      }

?>