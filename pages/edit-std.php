

<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}
include('../config/DbFunction.php');
	$obj=new DbFunction();
	$id=$_GET['id'];
    $rs=$obj->showStudents1($id);
    $res=$rs->fetch_object(); 
	$c=$res->branch;
    $cname=$obj->showBranch1($c);
    $res1=$cname->fetch_object();
	$rs1=$obj->showBranch();
	if(isset($_POST['submit'])){
	
     
     $obj->edit_std($_POST['cshort'],$_POST['usn'],$_POST['fname'],$_POST['lname'],$_POST['gender'],
     	            $_POST['pname'],$_POST['income'],$_POST['category'],$_POST['ph'],$_POST['nation']
                    , $_POST['mobno'],$_POST['email'],$_POST['country'],$_POST['state'],$_POST['city'],$_POST['padd'],
     	              $_POST['cadd'],$_POST['pmob'],$_POST['board1'],$_POST['roll1'],$_POST['pyear1'],$_POST['board2'],$_POST['roll2'],
     	              $_POST['pyear2'],$_GET['id']);
	
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
<title>edit students</title>
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
</head>

<body>

	<form method="post" >
	<div id="wrapper">
	<?php include('leftbar.php');?>

	 </div>	
										
	 <br><br>							

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="page-header"> <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">General</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-10">
			<div class="form-group">
		    <div class="col-lg-4">
			<label>Select Branch<span id="" style="font-size:11px;color:red">*</span>	</label>
			</div>
			<div class="col-lg-6">
<select class="form-control" name="cshort"  onchange="showSub(this.value)" required="required" >			
<option VALUE="<?php echo $res1->cid?>"><?php echo $res1->cshort?></option>
				<?php while($res2=$rs1->fetch_object()){?>							
			<?php if($res2->cid==$res1->cid){
				   continue;
				   }else
				   
				   ?>                     
					 <option VALUE="<?php echo htmlentities($res2->cshort);?>"><?php echo htmlentities($res2->cshort)?></option>
                        
                        
                    <?php }?>   </select>										
                                    </div>
										</div>	
										
								<br><br>
								
		

                <div class="col-lg-4">
<br>
    <label>USN 
    <span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
<br>
 <input class="form-control" name="usn"  value="<?php echo htmlentities($res->usn);?>">
                </div>
                </div>	
	<br><br>		
		
									
													
				</div>

					</div>
								
							</div>
							
						</div>
						
					</div>
			<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Personal Informations</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>First Name<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fname" required="required" value="<?php echo htmlentities($res->fname);?>">
			</div>
			 <div class="col-lg-2">
			<label>Last Name</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="lname" value="<?php echo htmlentities($res->lname);?>">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
            <div class="col-lg-2">
			<label>Gender</label>
			
			</div>
			<div class="col-lg-4">
			<?php 
			if (strcasecmp($res->gender,"Male")==0){?>
		 <input type="radio" name="gender" id="male" value="Male" required="required" checked> &nbsp; Male &nbsp;
		 <?php }else{ ?>
		 <input type="radio" name="gender" id="male" value="Male" required="required"> &nbsp; Male &nbsp;
		 <?php }?>
		 <?php 
			if (strcasecmp($res->gender,"female")==0){?>
		 <input type="radio" name="gender" id="female" value="female" checked> &nbsp; Female &nbsp;
		 <?php } else{?>
		 <input type="radio" name="gender" id="female" value="female"> &nbsp; Female &nbsp;
		 <?php }?>
		 <?php 
			if (strcasecmp($res->gender,"other")==0){?>
		 <input type="radio" name="gender" id="other" value="other" checked> &nbsp; Other &nbsp;
		 <?php } else{?>
		 <input type="radio" name="gender" id="other" value="other"> &nbsp; Other &nbsp;
		 <?php }?>
			</div>	<br><br>	
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Parent's/Guardian's Name<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="pname" required="required" value="<?php echo htmlentities($res->pname);?>">
			</div>
                </div>
				<br><br>	
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Family Income<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  type="income" name="income" required="required" value="<?php echo htmlentities($res->income);?>">
                </div>
			 <div class="col-lg-2">
			<label>Category<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<select class="form-control" name="category"  id="category" required="required" >
         <option value="<?php echo htmlentities($res->category);?>"><?php echo htmlentities($res->category);?></option>
        <option VALUE="general">General</option>
        <option value="obc">OBC</option>
        <option value="sc">SC</option>
        <option value="st">ST</option>
		<option value="other">Other</option>
       </select>
			</div>
			</div>	
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Physically Challenged<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<select class="form-control" name="ph"  id="ph"required="required" >
        <option VALUE="<?php echo htmlentities($res->ph);?>"><?php echo htmlentities($res->ph);?></option>
        <option VALUE="yes">Yes</option>
        <option value="no">No</option>
               
       </select>
			</div>
			 <div class="col-lg-2">
			<label>Nationality<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="nation" value="<?php echo htmlentities($res->nation);?>">
			</div>
			</div>	
			<br><br>
			</div>	
			<br><br>
		</div>
      	</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Contact Informations</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>Mobile Number<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" type="number" name="mobno" required="required" maxlength="10" 
                   value="<?php echo htmlentities($res->mobno);?>">
			</div>
			 <div class="col-lg-2">
			<label>Email Id</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  type="email" name="email" value="<?php echo htmlentities($res->email);?>">
			</div>
			</div>	
			<br><br>
                 <div class="col-lg-2">
			<label>Country</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  type="country" name="country" value="<?php echo htmlentities($res->country);?>">
			</div>	
            <div class="col-lg-2">
			<label>State</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  type="state" name="state" value="<?php echo htmlentities($res->state);?>">
                </div>
			</div>	
                </div>
	<br><br>
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>City<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  type="city" name="city" value="<?php echo htmlentities($res->city);?>">
                </div>
			 <div class="col-lg-2">
			<label>Permanent Address<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<textarea class="form-control" rows="3" name="padd" value="<?php echo htmlentities($res->padd);?>"><?php echo htmlentities($res->padd);?></textarea>
			</div>
			</div>	
			<br><br>
					
		     
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Correspondence Address<span id="" style="font-size:11px;color:red">*</span>
			
			</div>
			<div class="col-lg-4">
      <textarea class="form-control" rows="3" name="cadd"  value="<?php echo htmlentities($res->cadd);?>"><?php echo htmlentities($res->cadd);?></textarea>
			</div>
			 <div class="col-lg-2">
			<label>Parent's/Gaurdian's Mob.No.<span id="" style="font-size:11px;color:red">*</span></label>
			
			
			</div>
			<div class="col-lg-4">
                <input class="form-control" type="pmob" name="pmob" maxlength="10" value="<?php echo htmlentities($res->pmob);?>">
			
			</div>
			</div>	
			<br><br>
			
			
			</div>	
			<br><br>
		</div>
      	</div>
		</div>					
        <div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Board<span id="" style="font-size:11px;color:red">*</span>	</label></th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Roll No</th>
			</div>   
              <div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;Year Of Passing<span id="" style="font-size:11px;color:red">*</span></th>
			</div>  <                               
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  <input class="form-control" type="text" name="board1" value="<?php echo htmlentities($res->board1);?>">
				  </div></td>
                  <td><div class="col-lg-6">
			<input class="form-control" type="text" name="roll1" value="<?php echo htmlentities($res->roll1);?>">
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="pyear1" value="<?php echo htmlentities($res->pyear1);?>">
			</div></td>
                  </tr>

              <tr> 
                  <td><div class="col-lg-6">
				  <input class="form-control" type="text" name="board2" value="<?php echo htmlentities($res->board2);?>">
				  </div></td>
                  <td><div class="col-lg-6">
			<input class="form-control" type="text" name="roll2" value="<?php echo htmlentities($res->roll2);?>">
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="pyear2" value="<?php echo htmlentities($res->pyear2);?>">
			</div></td>
                  </tr>      
                                        
                </tbody>
                </table></div></div>
                            </div>
                    
                
										
            <div class="form-group">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-6"><br><br>
	<input type="submit" class="btn btn-primary" name="submit" value="Update"></button>
	</div>
	</div>	

	<!-- jQuery -->
	<script src="../bower_components/jquery/dist/jquery.min.js"
		type="text/javascript"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"
		type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../bower_components/metisMenu/dist/metisMenu.min.js"
		type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>
	
	<script>
        

</script>

</body>

</html>
