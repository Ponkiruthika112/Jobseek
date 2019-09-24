<?php
class Model
{
	
	public function invoke(){
		
		include"view/nav.php";
	}
	public function callf()
	{
		$hostname="localhost";
		$username="root";
		$password="";
		$dbname="jobseek_db";
		$conn=new mysqli($hostname,$username,$password,$dbname);

		if(!$conn){
		die("connection failed".mysqli_connect_error());
		}

		if (isset($_POST['submit1']))
		{	


		    $name=$_POST['uname'];
			$email=$_POST['email'];
			$pass=$_POST['pwd'];
			$ph=$_POST['mob_no'];
			$loc=$_POST['location'];
			$qual=$_POST['qual'];
			$ins=$_POST['inst'];
			$pyear=$_POST['pyear'];
			$skill=$_POST['skills'];
			
			
			
		
		mysqli_query($conn,"INSERT INTO canditatef(name,email,pwd,mob_no,location,qual,inst,pyear,skills,profile) 
		VALUES('$name','$email','$pass','$ph','$loc','$qual','$ins','$pyear','$skill','..//avatar.png')");
		
		}

	}	
	public function call()
	{
		$hostname="localhost";
		$username="root";
		$password="";
		$dbname="jobseek_db";
		$conn=new mysqli($hostname,$username,$password,$dbname);

		if(!$conn)
		{
			die('connection failed'.connect_error);
		}
			if(isset($_POST['submit2'])){
			$name=$_REQUEST['uname'];
			$email=$_POST['email'];
			$pass=$_POST['pwd'];
			$ph=$_POST['mob_no'];
			$loc=$_POST['location'];
			$qual=$_POST['qual'];
			$ins=$_POST['inst'];
			$pyear=$_POST['pyear'];
			$skill=$_POST['skills'];
			$cname=$_POST['cname'];
			$exp1=$_POST['exp1'];
			$ref=$_POST['ref'];
			$con=$_POST['con_no'];
			
	
			mysqli_query($conn,"INSERT INTO canditate(name,email,password,location,phno,qualification,institute,passingyear,skills,cmpnyname,experiance,refperson,cmpnyno,profile) VALUES('$name','$email','$pass','$loc','$ph','$qual','$ins','$pyear','$skill','$cname','$exp1','$ref','$con','..//avatar.png')");
	        
		
		
	}
		
}
   
}
?>

