<?php 

session_start();
include("db.php");
extract($_POST);
$email = $_SESSION['email'] ;




 ?>


<html>
<head>
	<title>Online Exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style type="text/css">
   color
   {
    color:black;
   }
</style>
</head>
<body style="background-color:black;">


	<div class="container">
  <h2></h2>
 <div style="background-color: white;">

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><b>Home</b></a></li>
    <li><a data-toggle="tab" href="#menu1"><b>Profile</b></a></li>
    <li><a data-toggle="tab" href="#menu2"><b>About Us</b></a></li>
    <li style="float:right;"><a href="logout.php"><b>Logout</b></a></li>
  </ul>
</div>






  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      

    		<br>
<br>
<br>


<center><button class="btn btn-primary " data-toggle="tab" href="#select">Start Exam</button></center>

<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4 tab-pane fade" id="select">


			 <form action="questions.php" method="post">
			 <label for="sel1">Select Subject:</label>
          <select class="form-control" id="sel1" name="cat_opt">
            <option>Choose  subject</option>


            	<?php 

                $query = "select * from category where sub_taken=0";

                $r = mysqli_query($con,$query);

                while($d = mysqli_fetch_assoc($r))
                {


            ?>
           <option value="<?php echo $d['id'] ; ?>"><?php  echo $d['cat_name'];  ?></option>
            <?php }  ?>


        </select>


        <br><br>
  <center><button type="submit" class="btn btn-danger" >Let's start</button></center>


</form>



		</div>
		<div class="col-sm-4"></div>


</div>

















    </div>
    <div id="menu1" class="tab-pane fade">
      <h3></h3>
      <p></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3></h3>
      <p></p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3></h3>
      <p></p>
    </div>
  </div>
</div>




</body>
</html>
