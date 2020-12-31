<?php session_start();

if (!(isset($_SESSION['login']))) {

	header('location:../index.php');

}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .backimg{
            background: url(demo.png);
            background-size: cover;
            width: 200px;
            height: 230px;
        }
    </style>
    
</head>

<body>
    
    <form method="post" >
	<div id="wrapper">

		<?php include('leftbar.php')?>;
        
             <div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
                    
				<h4 class="page-header" style="text-align:center;"  > <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
                    
                    <div align="center">
                        
                        
                        <div class="backimg">
                            
                            
                        </div>
                        <p style="font-family:cursive; text-size:300px; text-align:left;"><b>About the college</b></p>
                        <p style="font-family:cursive; "text-align:left>Bangalore Institute of Technology was started in the year 1979 with the objective of providing quality education in the ﬁeld of Technology and thereby serving the society. It has reached enviable level of excellence in technical education. The college thrives to achieve the all-round development of the students.</p>
                        <p style="font-family:cursive; text-size:300px; text-align:left;"><b>About the Department</b></p>
                        <p style="font-family:cursive; "text-align:left>Realizing well in time that the Information Technology (IT) wave has become a phenomenon in itself over the past few years, the institute established a separate department to cater the ever growing demand for professionals in this challenging field. The department of Information Science and Engineering (ISE) came into existence in the year 2000.</p>
                        <p style="font-family:cursive; text-size:300px; text-align:left;"><b>Brief description of the Project</b></p>
                        <p style="font-family:cursive; "text-align:left>1. We   describe   a   sample   database   application   called   STUDENT   INFORMATION SYSTEM, which serves to illustrate the basic ER model concepts and their use in schema design.
 The STUDENT INFORMATION SYSTEM keeps track of students information such as their attendance,internal marks.
 This work focus on the student information system which will be in place at education organisations for better monitoring of students with corrective measures to bring the quality in education system.
</p>
                    </div>
				</div>
                 </div>   </div></div>
        


    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
        

</body>

</html>
