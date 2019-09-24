<?php
class Connection
{
public function fetch()

{
$hostname="localhost";
$username="root";
$password="";
$dbname="jobseek_db";
$conn=mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn)
{
	die('connection failed'.connect_error);
}

$result=mysqli_query($conn,"SELECT name,email,qualification,skills,location,phno,password,profile FROM canditate");
$count=mysqli_num_rows($result);
$res=mysqli_query($conn,"SELECT name,email,pwd,qual,skills,mob_no,location,profile FROM canditatef");
$count1=mysqli_num_rows($res);
$c=0;
if($count>0)
{
	while($row=mysqli_fetch_array($result))
	{
		if ($row["email"]==$_REQUEST["email"] && $row["password"]==$_REQUEST["pwd"])
		{
			$c=1;
			$a=$row["name"];
			$b=$row["email"];
			$t=$row["qualification"];
			$d=$row["skills"];
			$e=$row["location"];
			$f=$row["phno"];
			$g=$row["profile"];
			
			echo "<br>";
		}
	}
}
if ($c==0 && $count1>0 )
{
	while($row=mysqli_fetch_array($res))
	{
		if ($row["email"]==$_REQUEST["email"] && $row["pwd"]==$_REQUEST["pwd"])
		{
			$c=1;
			$a=$row["name"];
			$b=$row["email"];
			$t=$row["qual"];
			$d=$row["skills"];
			$e=$row["location"];
			$f=$row["mob_no"];
			$g=$row["profile"];
			echo "<br>";
		}
	}
	
}
if ($c==1)
	{
		
		$res1=mysqli_query($conn,"SELECT * FROM jobs WHERE skills='$d'");
		$co=mysqli_num_rows($res1);
		
		
		
		include"..//view/profilepage.php";
		
	}
	else
	{
	
	include "..//view/login.php";
	}
}
public function img()

{
$hostname="localhost";
$username="root";
$password="";
$dbname="jobseek_db";
$conn=mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn)
{
	die('connection failed'.connect_error);
}
if (isset($_REQUEST["image"]))
{
session_start();
$img=$_REQUEST["image"];
$b=$_SESSION['b'];
$result=mysqli_query($conn,"UPDATE canditatef SET profile='$img' WHERE email='$b' ");
$result=mysqli_query($conn,"UPDATE canditate SET profile='$img' WHERE email='$b'");
}
}
}
?>

 