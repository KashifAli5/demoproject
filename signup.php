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
<h3 class="signup-statment"> Personal information</h3>





<div><!--div of form-->
 <form class="form-inline signup-form form-margin" action="signup.php" method="post">

 <div class="form-group">
      <label for="fname">First Name</label><br>
      <input type="text" class="form-control" id="fname" placeholder="Name" name="fname" required="required">
    </div>
    <div class="form-group">
      <label for="mname">Middle Name/Intitial</label><br>
      <input type="text" class="form-control" id="mname" placeholder="Midd Name" name="mname" required="required">
    </div>
    <div class="form-group">
      <label for="lname">Last Name</label><br>
      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" required="required">
    </div>
    <br>
    <div class="form-group signup-email">
      <label for="email">Email:</label>
      <br>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="email">
    </div>
   <br>
    <div class="checkbox form-margin">
      <label><input type="checkbox" name="remember"> Sign Up for Newsletter</label>
    </div><br>
 <p class="signup-statment">    Login Information  </p>
  
 <div class="form-group signup-email">
      <label for="password">password</label>
      <br>
      <input type="password" class="form-control" id="pass" placeholder="*********" name="pass" required="password">
 </div>
<br>
<input type="submit" value="submit" name="submit">

  </form>
</div>
<!--end of form-->

<?php 

mysql_connect("localhost","root","ahmed1") or die("check conection");
 mysql_select_db("demotask") or die("check database");


if (isset($_POST['submit']))
{

 $name=$_POST['fname'];
 $mname=$_POST['mname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];




$query="insert into signup(fname, mname, lname, email, pass) value ('$fname', '$mname', '$lname', '$email', '$pass')";

if (mysql_query($query)){

echo "data inserted sucessfully";
}

}
?>











</div><!--end of main container-->


</body></html> 