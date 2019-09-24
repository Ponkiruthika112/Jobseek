<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<form action="" >
<br>
<br>
<center><h1>JOB SEEK</h1></center>
<br>

<style>
body,html{
background-image:url("https://picjumbo.com/wp-content/uploads/business-woman-working-on-laptop-in-her-office-2210x1473.jpg");
 background-size:cover;
 }
 </style>
 <script>
function openwindow()
{
	window.open("..//view/fresher.php");
}
function openk()
{
	window.open("../","_self");
}
function openwin()
{
	window.open("..//view/experiance.php");
}
</script>

	<div class="row">
      <div class="col-md-4"></div>
	  <div class="col-md-4">
		<br>
          <center><h2>SIGN UP</h2></center>
			
			<div class="form-group">
			<label for="email">EMAIL</label>
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
			</div>
			<div class="form-group">
			<label for="pwd">PASSWORD</label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" >
			</div>
			<div class="form-group">
			<label for="pwd">CONFIRM PASSWORD</label>
			<input type="password" class="form-control" id="pwd1" placeholder=" Retype password" name="cpwd" >
			</div>
			
			<center>
			<div class="clear">
			<br>
			 <button type="button" class="btn-primary"  data-toggle="modal" data-target="#myModal">SIGNUP</button>
			 <button type="button" class="btn-primary" onclick="openk()">CANCEL</button>
			 <div class="container">
  
			<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
    
      
			<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title">Are you a fresher or a professional?</h4>
			</div>
			<div class="modal-body">
			<button type="button" class="btn btn-primary" onclick="openwindow()" name="fresher" data-dismiss="modal">fresher</button>
			<button type="button" class="btn btn-primary" onclick="openwin()" name="professional" data-dismiss="modal">professional</button>
          
			</div>
        
		</div>
      
		</div>
	</div>
  
	</div>

             
			<br>
			</div>
			</center>
			<br>
			<br>
			
        </div>
      </div>
	  
</form>
</html>