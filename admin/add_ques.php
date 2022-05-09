<?php
session_start();
include("../Html/conect.php");
include("./header.php");
?>
<section class="mar25">
<div class="log_in ">
        <br><br>
        <h1 class="t_center" >Add Question</h1>
        <br>  
<form action=""method="POST">
            
                    Subject: <br>
                    <select name="subject" >
                   <option value="HTML">HTML</option>
                   <option value="CSS">CSS</option>
                   <option value="SQL">SQL</option>
                   <option value="PHP">PHP</option> 
                
                 </select> 
</br>
                
                    The Question:<br>
                    <input type="text"name="ques" placeholder="Enter Question Title"><br>
                
                Options:<br><br>
                   A) &nbsp; <input type="txt" name="a"placeholder="Enter Your Option"><br>
                   B) &nbsp; <input type="txt" name="b"placeholder="Enter Your Option"><br>
                   C) &nbsp; <input type="txt" name="c"placeholder="Enter Your Option"><br>
                   D) &nbsp; <input type="txt" name="d"placeholder="Enter Your Option"><br><br>
                
                
                    The Correct Option:<br>
                    <input type="text"name="ans" placeholder="Enter Answer"><br>
                

                        <input type="submit" name="submit" value="submit" class="btn">

                    <br>
                
           
        </form>

        <!-- <select id="cars" name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select> -->
</div>  
</section>   
</body>
</html>
<?php
if(isset($_POST['submit'])){

    
  $ques=$_POST['ques'];
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  $d=$_POST['d'];
  $ans=$_POST['ans'];
  $sub=$_POST['subject'];
   

  $sql22="select max(id) as id from ques";
   if($res22=mysqli_query($con,$sql22)){
    $row=mysqli_fetch_assoc($res22);
    $sno=$row['id']+1;
}
else "error ";

$sql3="INSERT INTO `ques`(`id`, `ques`, `a`, `b`, `c`, `d`, `ans`, `subj`) VALUES ('$sno','$ques','$a','$b','$c','$d','$ans','$sub')";
$res=mysqli_query($con,$sql3);
 header('location:add_ques.php');


}
?>