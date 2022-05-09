<?php
session_start();
include("../Html/conect.php");
ob_start();
$s_id=$_SESSION['id'];
$_name=$SESSION['name'];
$id=$_GET['id'];
$sql111="SELECT * FROM `$id` natural join ques;";
$res1=mysqli_query($con,$sql111);
$count=mysqli_num_rows($res1);
$i=0;
// $status;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="../images/logo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="http://localhost/quiz_game-main/index.php">home</a>
            <a href=".\Html\course.html">Course</a>
            <a href="http://localhost/quiz_game-main/Html/quiz.php">Quiz</a>
            <a href=".\Html\result.html">results</a>
            <a href=".\Html\contact.html">contact</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>


    </header>

<section class="mar25 ">
  <div class="tb">
      <h1>Exam!!!</h1>
      <h2><?php
      if($count==0) echo "Exam Finished";
      ?>
      </h2>
  <table>
             <tr>
                 <th>Question</th>
                 <th>Option:A</th>
                 <th>Option:B</th>
                 <th>Option:C</th>
                 <th>Option:D</th>
                 <th>Answer</th>
                 
             </tr> 

<?php

while($_rows=mysqli_fetch_assoc($res1)){

      
        $ques=$_rows['ques'];
        $a=$_rows['a'];
        $b=$_rows['b'];
        $c=$_rows['c'];
        $d=$_rows['d'];
        $ans=$_rows['ans'];
        $sub=$_rows['subj'];
        $qid=$_rows['id'];
          ?>

 
           <tr>
           <form action="" method="POST">
           
           <td><?php echo $ques; ?></td>
               <td ><?php echo $a; ?></td>
               <td><?php echo $b; ?></td> 
               <td><?php echo $c; ?></td>
               <td><?php echo $d; ?></td> 

            <td>
                  <select name="status[]" >
                   <option value="A">A</option>
                   <option value="B">B</option>
                   <option value="C">C</option>
                   <option value="D">D</option> 
                
                 </select> 
                

            </datalist>

            </td>
           
   
           
               <!-- <td type="radio" name="a">A</td>
               <td type="radio" name="b">B</td>
               <td type="radio" name="c">C</td> 
               <td type="radio" name="d">D</td> -->
               
           </tr>
           <?php
          
          // echo $status[0];
        
           }?>
           </table>
           <input type="submit" name="submit" value="Submit" class="btn1 ">
           </form>
        </div>
        </section>
           <?php
          
if(isset($_POST["submit"])){
        //    echo"kaj korce";
        $cnn=0;
        $cnt=0;
     $ccn=$_POST['status'];
     $sql111="SELECT * FROM `$id` natural join ques;";
$res1=mysqli_query($con,$sql111);
     foreach($ccn as $v){
        $_rows=mysqli_fetch_assoc($res1);
         $cnt++;
         if($v==$_rows['ans']) $cnn++;
        
     }

     $sql22="select max(id) as id from res";
   if($res22=mysqli_query($con,$sql22)){
    $row=mysqli_fetch_assoc($res22);
    $sno=$row['id']+1;
}
    
        $sql123="INSERT INTO `res`(`id`, `e_id`, `s_id`, `mark`, `f_mark`) VALUES ('$sno','$id','$s_id','$cnn','$cnt')";
     $res123=mysqli_query($con,$sql123);
      
    //  echo"Your mark is ";
    //  echo$cnn;
    //  echo" out of  ";
    //  echo$cnt;
    
    header('location:http://localhost/quiz_game-main/Html/result.php');
    ob_end_flush();
      
    }
?>