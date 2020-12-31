
<?php
require('Database.php');

class DbFunction{
	
	function login($loginid,$password){
	
      if(!ctype_alpha($loginid) || !ctype_alpha($password)){
      	
        echo "<script>alert('Either LoginId or Password is Missing')</script>";
      
      }		
   else{		
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT loginid, password FROM tbl_login where loginid=? and password=? ";
	$stmt= $mysqli->prepare($query);
	if(false===$stmt){
		
		trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
	}
	
	else{
		
		$stmt->bind_param('ss',$loginid,$password);
		$stmt->execute();
		$stmt -> bind_result($loginid,$password);
		$rs=$stmt->fetch();
		if(!$rs)
		{
			echo "<script>alert('Invalid Details')</script>";
			header('location:login.php');
		}
		else{
			
			header('location:dashboard.php');
		}
	}
	
	}
	
	}
	function tlogin($loginid,$password){
	
      if(!ctype_alpha($loginid) || !ctype_alpha($password)){
      	
        echo "<script>alert('Either LoginId or Password is Missing')</script>";
      
      }		
   else{		
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT loginid, password FROM tbl_tlogin where loginid=? and password=? ";
	$stmt= $mysqli->prepare($query);
	if(false===$stmt){
		
		trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
	}
	
	else{
		
		$stmt->bind_param('ss',$loginid,$password);
		$stmt->execute();
		$stmt -> bind_result($loginid,$password);
		$rs=$stmt->fetch();
		if(!$rs)
		{
			echo "<script>alert('Invalid Details')</script>";
			header('location:login.php');
		}
		else{
			
			header('location:t_dashboard.php');
		}
	}
	
	}
	
	}
	function create_branch($cshort,$cfull,$cdate){
		
				if($cshort==""){
			 
			echo "<script>alert('Select  Branch Short Name')</script>";
		
		}
		
		
		else if($cfull==""){
			 
			echo "<script>alert('Select  Branch Full Name')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into tbl_branch(cshort,cfull,cdate)values(?,?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('sss',$cshort,$cfull,$cdate);
				$stmt->execute();
				echo "<script>alert('Branch Added Successfully')</script>";
					//header('location:login.php');
				
			}
		}				
	}

function showBranch(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM tbl_branch ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showBranch1($cid){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM tbl_branch  where cid='".$cid."'";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showSubject(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM subject ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}


function showSubject1($sid){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM subject where subid='$sid' ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}


function create_subject($cshort,$cfull,$sub1,$sub2,$sub3,$sub4,$sub5,$sub6){
		
				if($cshort==""){
			 
			echo "<script>alert('Select  Branch Short Name')</script>";
		
		}
		
		
		else if($cfull==""){
			 
			echo "<script>alert('Select  Branch Full Name')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into subject(cshort,cfull,sub1,sub2,sub3,sub4,sub5,sub6)values(?,?,?,?,?,?,?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('ssssssss',$cshort,$cfull,$sub1,$sub2,$sub3,$sub4,$sub5,$sub6);
				$stmt->execute();
				echo "<script>alert('Subjects Added Successfully')</script>";
					
				
			}
		}				
	}

		
function showStudents(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM personal ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	
function showStudents1($id){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM personal  where id='".$id."'";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	



function personal($cshort,$usn,$fname,$lname,$gender,$pname,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$pmob,$board1,$roll1,$pyear1,$board2,$roll2,$pyear2){
 			          
 			        $db = Database::getInstance();
		           	$mysqli = $db->getConnection();
		           	
   $query = " INSERT INTO `personal`(`branch`, `usn`, `fname`, `lname`, `gender`, `pname`, `income`, `category`, `ph`, `nation`, `mobno`,`email`, `country`, `state`, `city`, `padd`, `cadd`, `pmob`, `board1`, `roll1`, `pyear1`, `board2`, `roll2`, `pyear2`)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                    $stmt= $mysqli->prepare($query);
			        if(false===$stmt){
			
			     	trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			    }
			
			    else{
			
			$stmt->bind_param('ssssssssssssssssssssssss',
		         	$cshort,$usn,$fname,$lname,$gender,$pname,$income,$category,$ph,$nation,$mobno,
					$email,$country,$state,$city,$padd,$cadd,$pmob,$board1,$roll1,$pyear1,$board2,$roll2,$pyear2);
			$stmt->execute();
		   	echo "<script>alert('Successfully added ')</script>";
		 	//header('location:login.php');
				
		  }
				


       }

function marks($usn,$sem1,$marks1,$att1,$sem2,$marks2,$att2,$sem3,$marks3,$att3,$sem4,$marks4,$att4){
		
				if($usn==""){
			 
			echo "<script>alert('Select  USN')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "INSERT INTO `marks`(`usn`, `sem1`, `marks1`, `att1`, `sem2`, `marks2`, `att2`, `sem3`, `marks3`, `att3`, `sem4`,
                        `marks4`, `att4`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('sssssssssssss',$usn,$sem1,$marks1,$att1,$sem2,$marks2,$att2,$sem3,$marks3,$att3,$sem4,$marks4,$att4);
				$stmt->execute();
				echo "<script>alert('Marks Added Successfully')</script>";
					
				
			}
		}				
	}

function edit_branch($cshort,$cfull,$udate,$id){
-
    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	//echo $cshort.$cfull.$udate.$id;exit;
	$query = "update tbl_branch set cshort=?,cfull=? ,cdate=? where cid=?";
	$stmt= $mysqli->prepare($query);
	$stmt->bind_param('sssi',$cshort,$cfull,$udate,$id);
    $stmt->execute();
    echo '<script>'; 
    echo 'alert("Branch Updated Successfully")'; 
    echo '</script>';

}


function edit_subject($sub1,$sub2,$sub3,$sub4,$sub5,$sub6,$id){

    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "update subject set sub1=?,sub2=? ,sub3=?,sub4=?,sub5=?,sub6=? where subid=?";
	$stmt= $mysqli->prepare($query);
	$stmt->bind_param('ssssssi',$sub1,$sub2,$sub3,$sub4,$sub5,$sub6,$id);
	$stmt->execute();
    echo '<script>'; 
    echo 'alert("Subjects Updated Successfully")'; 
    echo '</script>';

}

function edit_std($cshort,$usn,$fname,$lname,$gender,$pname,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$pmob,$board1,$roll1,
				   $pyear1,$board2,$roll2,$pyear2,$id){
  // echo $id;exit;
    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "update personal set branch=?,usn=?,fname=?,lname=?,gender=?,pname=?,
              income=?,category=?,ph=?,nation=?,mobno=?,email=?,country=?,state=?,city=?
         	 ,padd=?,cadd=?,pmob=?,board1=?,roll1=?,pyear1=?,board2=?,roll2=?,pyear2=? where id=?" ;
    //echo $query;
	$stmt= $mysqli->prepare($query);
	if(false===$stmt){
			
			     	trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			    }

	$rc=$stmt->bind_param('ssssssssssssssssssssssssi',$cshort,$usn,$fname,$lname,$gender,$pname,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$pmob,$board1,$roll1,$pyear1,$board2,$roll2,$pyear2,$id);
				   
    //echo $rc;
 if ( false===$rc ) {
 
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
  }		   
	$rc=$stmt->execute();
	
	if ( false==$rc ) {
          die('execute() failed: ' . htmlspecialchars($stmt->error));
    }
	else{
         echo '<script>'; 
         echo 'alert(" Successfully Updated")'; 
          echo '</script>';
		}  
  
}
function edit_marks($usn,$sem1,$marks1,$att1,$sem2,$marks2,$att2,$sem3,$marks3,$att3,$sem4,$marks4,$att4,$id){

    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "update marks set usn=?,sem1=?,marks1=?,att1=?,sem2=?,marks2=?,att2=?,sem3=?,marks3=?,att3=?,sem4=?,marks4=?,att4=? WHERE id=? ";
	$stmt= $mysqli->prepare($query);
	$stmt->bind_param('sssssssssssssi',$usn,$sem1,$marks1,$att1,$sem2,$marks2,$att2,$sem3,$marks3,$att3,$sem4,$marks4,$att4,$id);
	$stmt->execute();
    echo '<script>'; 
    echo 'alert("Markss Updated Successfully")'; 
    echo '</script>';

}

function del_branch($id){

   //  echo $id;exit;
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from tbl_branch where cid=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('s',$id);
	$stmt->execute();
    echo "<script>alert('Branch has been deleted')</script>";
    echo "<script>window.location.href='view-branch.php'</script>";
}

function del_std($usn){

   $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from personal where usn=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('s',$usn);
	$stmt->execute();
    echo "<script>alert('One record has been deleted')</script>";
    echo "<script>window.location.href='view-personal.php'</script>";

}

 function del_subject($id){

     //echo $id;exit;
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from subject where subid=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('i',$id);
	$stmt->execute();
    echo "<script>alert('Subject has been deleted')</script>";
   // echo "<script>window.location.href='view-branch.php'</script>";
}
function showMarks(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query ="SELECT * FROM marks";
	$stmt= $mysqli->query($query);
	return $stmt;
}

    
function showMarks1($id){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query ="SELECT * FROM marks  where usn='".$id."'";
	$stmt= $mysqli->query($query);
	return $stmt;
}

function showTeachers(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query ='CALL GetTeachers()';
	$stmt= $mysqli->query($query);
	return $stmt;
}
    

}

?>



