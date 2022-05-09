
<?php
session_start();
include("../Html/conect.php");
if (isset($_SESSION['loggedin'])==false)header('login:quiz.php');
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
        <a href="course.html">Course</a>
        <a href="quiz.php">Quiz</a>
        <a href="result.php">results</a>
        <a href="contact.html">contact</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    
</header>
</body>
</html>

<?php
$S_id=$SESSION['id'];
$sql="SELECT * FROM `res`";
    $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
?>
        <section class="mar25 ">
  <div class="tb">
      <h1>Results</h1>
      <h2><?php
      if($count==0) echo "You Don't participate in any exam";
      ?>
      </h2>
  <table>
             <tr>
                 <th>Exam Id</th>
                 <th>Your Mark</th>
                 <th>Full Mark</th>
</tr>
<?php
      
      while($_rows=mysqli_fetch_assoc($res))
      {
        $s_id=$_rows['s_id'];
        $e_id=$_rows['e_id'];
        $mark=$_rows['mark'];
        $f_mark=$_rows['f_mark'];
       
          ?>
          <tr class="wh">

           <form action="" method="POST">
           
               <td><?php echo $e_id; ?></td>
               <td><?php echo $mark; ?></td> 
               <td><?php echo $f_mark; ?></td>
               

                <!-- <td><input type="submit" name="add" value="Add" class="btn1"> <br><br> -->
                <!-- <input type="submit" name="next" value="next" class="btn-second"> -->
      </td></form>

           </tr>
           <?php
      }

?>