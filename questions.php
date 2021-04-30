<?php
session_start();
include("db.php");
extract($_POST);

$q = "select * from questions where cat_id='".$cat_opt."'";
$_SESSION['cat_opt'] = $cat_opt;

$r  = mysqli_query($con,$q);

?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="">
.color
{
	color: white;
}	

</style>



</head>
<body style="background-color: black; ">

<div class="container">
	
		 <h2 class="color">Online Test</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li style="float:right;"><a href="logout.php">Logout</a></li>
  </ul>


  		 <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

    	  <h3 class="color">Question</h3>
    	  <div class="col-sm-2"></div>
    	  <div class="col-sm-8">
    	  	


    	  		<form action="answer.php" id="form1" method="post">


    	  				<?php

      						while($d = mysqli_fetch_assoc($r))
									{
										
										
										

      				?>	


				     <table class="table table-bordered">
				    <thead>
				      <tr class="info">
				        <th>&nbsp;<?php echo $d['id']; ?>&emsp;<?php  echo $d['questions'];  ?></th>
				      </tr>


				    </thead>
				    <tbody>
				    	<?Php if(isset($d['ans1']))   { ?>
				    	<tr class="danger">
				       
				        <td>&nbsp;1&emsp;&nbsp;<input type="radio" name="<?php echo $d['id'];?>" value="0">&nbsp;&nbsp;<?php echo $d['ans1']; ?></td>
				      </tr>
				     <?php      }       ?>
				      <?Php if(isset($d['ans1']))   { ?>
				      <tr class="danger">
				       
				        <td>&nbsp;2&emsp;&nbsp;<input type="radio" name="<?php echo $d['id'];?>" value="1">&nbsp;&nbsp;<?php echo $d['ans2']; ?></td>
				      </tr>
				  <?php } ?>

				     <?Php if(isset($d['ans1']))   { ?>
				      <tr class="danger">

				     
				     
				       
				        <td>&nbsp;3&emsp;&nbsp;<input type="radio" name="<?php echo $d['id'];?>" value ="2">&nbsp;&nbsp;<?php echo $d['ans3']; ?></td>
				      </tr>
				     <?php } ?>

				     <?Php if(isset($d['ans1']))   { ?>
				      <tr class="danger">
				       
				        <td>&nbsp;4&emsp;&nbsp;<input type="radio" name="<?php echo $d['id'];?>">&nbsp;&nbsp;<?php echo $d['ans4']; ?></td>
				      </tr>
				     
                     <?php } ?>    
                     


					<tr class="danger">
				        <td><input type="radio" value="no_attempt" name="<?php echo $d['id'];?>" checked="checked" style ="display :none"></td>
				      </tr>

				     
				    </tbody>
				  </table>




				   <?php 

				 		

				  } ?>


	 <center><button class="btn btn-success">Submit Exam</button></center>

				
				</form>








    	  </div>
    	  <div class="col-sm-2"></div>





    </div>
</div>




</div>


</body>
</html>
