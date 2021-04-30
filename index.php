<html>
<head>
	<title></title>

	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  		
body
{
  /*background-image: url("one.jpg");*/
  /*background-color: pink;*/
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  background-size: cover;

}




  </style>





</head>
<body style="color: white;
background-color: black;
">

<!-- ################################# HEADER MENU########################3 -->

<div class="container">

	 <div class="panel panel-primary" style="margin-top: 50px;" >
      <div class="panel-heading">Online Examination System</div>
      <div class="panel-body">Login and Register for Taking the exam</div>
    </div>

</div>

<!-- #############################Register and Login page#################################### -->


<div class="container">
	
	<div class="row">
		
			<div class="col-sm-6">
				

					 <div class="panel panel-primary" style="margin-top: 50px;" >
      <div class="panel-heading">Registration Form</div>
      
    					</div>






  <form  action="register.php" method="post" enctype="multipart/form-data">



              <?php

                      if(isset($_GET['run']) && $_GET['run']=="success")
                      {
                        echo "<mark><b>You are successfully registered!!!</b></mark>";
                      }



                    ?>


       <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
    <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
   <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="pass">
            </div>
             <div class="form-group">
              <label for="file">Upload your image:</label>
              <input type="file" class="form-control" id="file" name="img">
            </div>
            <button type="submit" class="btn btn-default" name="register">Register</button>
  </form>







			</div>

			<div class="col-sm-6" >
				



					  <div class="panel panel-primary" style="margin-top: 50px;" >
      <div class="panel-heading">Login Form</div>
     


    </div>

<br>
<br>



  <form action="login.php" method="post">

        
                       <?php

                      if(isset($_GET['run']) && $_GET['run']=="failed")
                      {
                        echo "<mark><b>your email id or password doesn't match!!!</b></mark>";
                      }



                    ?>






    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pass" id="pwd" placeholder="Enter password">
    </div>
  
    <button type="submit" class="btn btn-default">Submit</button>
  </form>




			</div>




	</div>



</div>





</body>
</html>
