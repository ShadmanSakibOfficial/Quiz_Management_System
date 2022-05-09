<?php
session_start();
include("../Html/conect.php");
$sn0;
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
            <a href="http://localhost/quiz_game-main/Html/quiz.php">Quiz</a>
            <a href="result.html">results</a>
            <a href="contact.html">contact</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>


    </header>

<?php
$sql="SELECT * FROM `quiz_table` ";
    $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
      $n=0;
      while($rows=mysqli_fetch_assoc($res))
      {
          $title[$n]=$rows['title'];
          $subj[$n]=$rows['subject'];
          $sno [$n]=$rows['id'];
          $n++;
      }
          ?>

<section class="mar25">
<section class="menu" id="menu">
<div class="box-container">
<?php for($i=0;$i<$n;$i++) { ?>





    <div class="box">
    <img src="../images/quiz.png" alt="">
        <h3><?php echo $title[$i];?></h3>
        <h3 class="price"><?php echo $subj[$i];?></h3>
        <a href="<?php echo 'http://localhost/quiz_game-main/Html/'?>exam.php?id=<?php echo $sno[$i]?>" class="btn">Start</a>
    </div>





          

           <?php
          }

?>
</div>
</section>

</section>

