<?php
session_start();
include("../Html/conect.php");
include("./header.php");
?>

<section class="mar25">
<div class="log_in ">
        <br><br>
        <h1 class="t_center" >Start Quiz</h1>
        <br>  
        <form action=""method="POST" class="t_center">

                title: <br>
                <input type="text"name="Title" placeholder="Enter your title"> <br>
                
                
                Quiz Type: <br>
        
                <select name="subject" >
                   <option value="HTML">HTML</option>
                   <option value="CSS">CSS</option>
                   <option value="SQL">SQL</option>
                   <option value="PHP">PHP</option> 
                
                 </select>
</br>
                

                 <br>Be sure you wanna create this quiz: <br><br>
                        <input type="submit" name="submit" value="Create" class="btn1"><br>

                     
        
        </form>
    </div>
</section>
<?php
if(isset($_POST['submit'])){
$subj=$_POST['subject'];
$title=$_POST['Title'];
    $sql22="select max(id) as id from quiz_table";
    if($res22=mysqli_query($con,$sql22)){
     $row=mysqli_fetch_assoc($res22);
     $sno=$row['id']+1;
 }
 else "error ";

 $sql3="INSERT INTO `quiz_table`(`id`, `t_id`, `subject`, `title`) VALUES ('$sno','$sno','$subj','$title')";
 $res=mysqli_query($con,$sql3);



 $sql="CREATE TABLE `$sno` (
     `id` int(11) NOT NULL,
     `title` varchar(1000) NOT NULL,
     `subj` varchar(1000) NOT NULL
   )";
   $res=mysqli_query($con,$sql);
   header('location:ques_select.php');


}
?>
