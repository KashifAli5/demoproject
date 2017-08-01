


<html>
<head>
<title> sign up page </title>
<link rel="stylesheet" type="text/css" href="Include/css/mystyle.css">
<link rel="stylesheet" type="text/css" href="Include/css/bootstrap.min.css">
<script type="text/javascript" src="include/js/jquery.js"></script>
<script type="text/javascript" src="include/js/bootstrap.min.js"></script>

</head>
<body>



<!--place for header-->



<div class="container-fluid"><!-- main container-->
<div class="signup-heading"> CREATE AN ACCOUNT </div>
<div class="row">
<div class="col-md-5 col-sm-offset-1 col-sm-6 col-xs-12">
<h3 class="signup-statment"> New Customers</h3>
</div>
<div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
<h3 class="signup-statment"> New Customers</h3>
</div></div><!--end of row-->
<div class="row">
<div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p></div>

<div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
<p>
If you have an account with us, please log in.
</p>
<div><!--div of form-->
 <form class="form-inline" action="signin.php" method="post">


    <div class="form-group signin_p">
      <label for="name">User Name</label><br>
      <input type="text" class="form-control signin_p input-group-lg" id="name" placeholder="User name" name="email">
    </div>
<br> <div class="form-group signin_p">
      <label for="email">Password</label><br>
      <input type="Password" class="form-control" id="pass" placeholder="***********" name="pass">
    </div><br><br>

<input type="submit" name="login" class="btn btn-default btn-lg" id="btn" value="Signin">



    </form>
</div>
</div>
</div><!--end of row-->

<!--end of form-->


<?php


mysql_connect("localhost","root","ahmed1") or die("check conection");
 mysql_select_db("demotask") or die("check database");


if (isset($_POST['submit']))
{
$email=$_POST


}








?>








</div><!--end of main container-->


</body></html> 