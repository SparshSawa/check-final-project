<?php 
session_start();
if(isset($_POST['submit'])){
	
	 include('../config/DbFunction.php');
	 $obj=new DbFunction();
	 $_SESSION['login']=$_POST['id'];
	 $obj->tlogin($_POST['id'],$_POST['password']);
}
	

?>

<html lang="en">

<head>

    <title>Student Management Login </title>

    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body style="background : url(../images/test.jpg)">

    <div class="heading" style="text-align: center; color:white; margin-top: 60px; font-family:initial;">           
        <h2>TEACHER'S LOGIN PAGE </h2>
             <img>       
                </div>
    
    <div class="container">
        <br><br><br>
            <div class="col-md-5 col-md-offset-4">
                
                
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
             <input class="form-control" placeholder="Login Id"  id="id"name="id" type="text" autofocus autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password"name="password" type="password" value="">
                                </div>
                                <input type="submit" value="login" name="submit" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <div class="container" id="home">
        <div class="row text-center">
            <div class="col-md-12">
                <h3 class="head-last"></h3>
               <a href="http://localhost/check final project\pages/Login.php" class="btn btn-danger btn-lg head-btn-one"> ADMIN LOGIN</a> &nbsp  &nbsp  &nbsp  &nbsp; 
                <a href="http://localhost/check final project\pages/home/index.html" class="btn btn-primary btn-lg">HOME PAGE</a>
            </div>
        </div>
    </div>
    
</body>

</html>
