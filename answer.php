<?php 



session_start();
include('db.php');
extract($_POST);



$q = "select id,ans from questions where cat_id='".$_SESSION['cat_opt']."'";

$r  = mysqli_query($con,$q);


$right=0;
$wrong=0;
$no_answer=0;


while($row = mysqli_fetch_assoc($r))
	{

		if($row['ans']==$_POST[$row['id']])
				{
					$right++;
				}
				else if($_POST[$row['id']]=="no_attempt")
				{
					$no_answer++; 

				}
				else
				{
					$wrong++;
				}

			}


				$array = array();
			$array['right'] = $right;
			$array['wrong'] = $wrong;
			$array['no_answer'] = $no_answer;





 ?>

 <?php 
	$total_ques =$array['right']+$array['wrong']+$array['no_answer']; 
	$attemt_que = $total_ques-$array['no_answer'];
	 ?>


	 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
	
	<div class="container">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			
						 <h2>Exam Result</h2>
			                         
			  <table class="table table-bordered">
			   
			      <tr>
			        <th>Total Questions</th>
			        <th><?php echo  $total_ques; ?></th>

			        
			      </tr>
			    
			        <tr>
			        <th>Attempted Questions</th>
			        <th><?php echo  $attemt_que;  ?></th>

			       
			     
			      </tr>
			       <tr>
			       <th>UnAttempted Questions</th>
			        <th><?php echo  $array['no_answer']; ?></th>

			       
			      </tr>
			      <tr>
			       <th>Right Questions</th>
			        <th><?php echo  $array['right']; ?></th>

			       
			      </tr>
			      <tr>
			       <th>Wrong Questions</th>
			        <th><?php echo  $array['wrong']; ?></th>

			      
			      </tr>
			      <tr>
			      <th>Percentage</th>
			      <th><?php 

			        		$percent =  ($array['right']/$total_ques)*100;
			        		echo $percent."%";

			         ?></th>
			       
			      </tr>
			      <tr>
			      <th>Result</th>
			      <th><?php 

			        		if($percent>=60)
			        		{
			        			echo "<h2 style='color:green;'>Passed</h2>";
			        		}
			        		else
			        		{
			        			echo"<span style='color:red;'>Failed</span>";
			        		}

			         ?></th>
			        
				  </tr>
			  </table>
