<?php
session_start();
include("../Html/conect.php");
$sn0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
   

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

      

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
    <img alt="">
        <h3><?php echo $title[$i];?></h3>
        <h3 class="price"><?php echo $subj[$i];?></h3>
   
    </div>

           <?php
          }

?>
</div>
</section>

</section>

