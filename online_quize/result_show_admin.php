<?php 

include("includes/bootstrap_cdn_inc.php");
include("class/users.php");
$res=new users;
//print_r($_POST);
$answers=$res->show_result($_POST);    //here answers becomes an array because show_result() method returns an array
 ?>


<div class="container mt-5">
	<center><div class="col-md-6">
 <!-- <center>
 	<h2>Right answer : <?php echo $answers['right'];?></h2>
 	<h2>Wrong answer : <?php echo $answers['wrong'];?></h2>
 	<h2>Not attempted : <?php echo $answers['not_attempted'];?></h2>

 </center> -->
 <?php 
 		$total_ques=$answers['right']+$answers['wrong']+$answers['not_attempted'];
 		$attempted_ques=$total_ques-$answers['not_attempted'];
 		$percentage=($answers['right']*100)/$total_ques;
 		$message="";
 		if ($percentage<=100 and $percentage>=70) 
 		{
 			$message="Congratulation you have scored : ";
 		}
 		elseif ($percentage<=69 and $percentage>=50) 
 		{
 			$message="You can do better, try again. you scored : ";
 		}
 		else
 		{
 			$message="Sorry you are failed, try again you scored : ";
 		}



  ?>
<head>
    <link rel="shortcut icon" type="text/css" href="../..//img/mylogo.png"> 
</head>
<h2>Your Quiz Result</h2><br>
 <table class="table table-bordered table-active">
 	
  <thead>
    <tr>
      <th scope="col">Total No.of questions</th>
      <th scope="col"><?php echo $total_ques; ?></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Attempted Questions</th>
      <td><?php echo $attempted_ques; ?></td>
     
    </tr>
    <tr>
      <th scope="row">Right Questions</th>
      <td> <?php echo $answers['right'];?></td>
      
    </tr>
    <tr>
      <th scope="row">Wrong Answers</th>
      <td><?php echo $answers['wrong'];?></td>
  
    </tr>

      <tr>
      <th scope="row">Not Attempted</th>
      <td><?php echo $answers['not_attempted'];?></td>
  
    </tr>
  </tbody>

 

</table>
 <div class="card-header mt-5 bg-danger text-light">
  	<?php echo $message; ?> <b><?php echo $percentage.' %'; ?></b>
  </div>

  <button type="button" class="btn btn-primary mt-3"><a href="../admin/manage_quiz/manage_quiz.php" style="text-decoration: none; color: white;">Back</a></button>
 <!--   <a href="quizhome.php" class="btn btn-success"> Back </a> -->

</div></center>
</div>