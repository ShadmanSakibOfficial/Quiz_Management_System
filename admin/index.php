<?php
session_start();
include("../Html/conect.php");
include("./header.php")
?>
<section class="mar25">
<section class="menu" id="menu">
<?php
       if(isset($_SESSION['login'])){
           unset($_SESSION['login']);
       }
     
       ?>

<div class="box-container">


    <div class="box">
        <h1>000</h1>
        <h3>Total Teacher</h3>
        <a href="http://localhost/quiz_game-main/admin/admin.php" class="btn1">View Teacher</a>
    </div>
    <div class="box">
        <h1>000</h1>
        <h3>Total Student</h3>
        <a href="http://localhost/quiz_game-main/admin/student.php" class="btn1">View Student</a>
    </div>
    <div class="box">
        <h1>000</h1>
        <h3>Total Question</h3>
        <a href="http://localhost/quiz_game-main/admin/question.php" class="btn1">View Question</a>
    </div>
    <div class="box">
        <h1>000</h1>
        <h3>Total Quiz</h3>
        <a href="http://localhost/quiz_game-main/admin/quiz.php" class="btn1">View Quiz</a>
    </div>



</div>

</section>

</section>