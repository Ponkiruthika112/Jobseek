
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<div class="container">
  

    
  
  <form action="..\\controller\professioncon.php" method="POST">
    <div class="row setup-content">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h2>PERSONAL DETAILS</h2><br>
			<div class="form-group">
			<label for="text">NAME</label>
			<input id="u1" class="form-control" type="text" placeholder="Enter your name" name="uname" >
			</div>
			<div class="form-group">
			<label for="email">EMAIL</label>
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
			</div>
			<div class="form-group">
			<label for="pwd">PASSWORD</label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" >
			</div>
			<div class="form-group">
			<label for="text">CONTACT_NO</label>
			<input type="text" class="form-control" id="cx1" placeholder="Enter your mobile no" name="mob_no" >
			</div>
			<div class="form-group">
			<label for="text">LOCATION</label>
			<input id="l1" class="form-control" type="text" placeholder="Enter your location" name="location" >
			</div>
        </div>
      </div>
    </div>
    <div class="row setup-content" >
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
        <h3>EDUCATION DETAILS</h3><br>
		<div class="form-group">
		<label for="text">QUALIFICATION</label>
		<input id="q1" class="form-control" type="text" placeholder="Enter your highest qualification" name="qual" >
		</div>
		<div class="form-group">
		<label for="text">INSTITUTE NAME</label>
		<input type="text" class="form-control" id="i1" placeholder="Enter your institute name" name="inst">
		</div>
		<div class="form-group">
		<label for="text">PASSING YEAR</label>
		<input type="text" class="form-control" id="p1" placeholder="Enter your passed year or passing year" name="pyear" >
		</div>
		<div class="form-group">
      <label for="sel1">SELECT SKILLS:</label>
      <select name="skills" class="form-control" id="sel1">
        <option value="python">python</option>
        <option value="c">c</option>
        <option value="java">java</option>
        <option value="php">php</option>
      </select>
		</div>
        </div>
      </div>
    </div>
	<div class="row setup-content" >
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
        <h3>EXPERIENCE DETAILS</h3><br>
		<div class="form-group">
		<label for="text">COMPANY NAME</label>
		<input id="c1" class="form-control" type="text" placeholder="Enter your working company name" name="cname" >
		</div>
		<div class="form-group">
		<label for="text">EXPERIENCE</label>
		<input type="text" class="form-control" id="e1" placeholder="Enter your experiance" name="exp1" >
		</div>
		<div class="form-group">
		<label for="text">REFERENCE PERSON</label>
		<input type="text" class="form-control" id="rp" placeholder="Enter your manager name" name="ref" >
		</div>
		<div class="form-group">
		<label for="text">COMPANY'S CONTACT NO</label>
		<input id="cc" class="form-control" type="text" placeholder="Enter your company contact no" name="con_no" >
		</div>
        </div>
      </div>
    </div>
    <div class="row setup-content" >
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>submit </h3>
          <button class="btn btn-success btn-lg pull-right" name="submit2" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  
</div>