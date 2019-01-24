<html>
<head>
<body>
<meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#">
	<img src="julius.png" style="width: 120px;">
	</a>
  <ul class="navbar-nav">
    
      <a class="nav-link" href="/academy/dashboard.html">Dashboard</a>
    
    <li class="nav-item">
      <a class="nav-link" href="/academy/regist.html">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
   
  </ul>
</nav>
<br>
<div class="container">
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              .........</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   
                
				</div>
				</div>
				</div>
				</div>

				<script>
				var modal= document.getElementById('id01');
					window.href="dashboard.html";
					
					
				
				</script>
					
</body>

</head>

</html>
<?php
	
	$conn= new mysqli("localhost","root","","academy");
	if($conn->connect_error)
	{
	die("connection failed".$conn->connect_error);
	}
	$date=$_POST['edate'];
	$date1=$_POST['sdate'];
	$date2=$_POST['cedate'];
	$course=$_POST['first_course'];
	$courses=$_POST['second_course'];
	$coursed=$_POST['third_course'];
	$name=$_POST["fullname"];
	$ic=$_POST['IC'];
	$numfon=$_POST['phone_num'];
	$val=$_POST['val'];
	$json=json_encode($val);
	echo "<div class='card bg-success text-white'>
				<div class='card-body'>Data saves successfully</div>
				</div><br>";
	$result=mysqli_query($conn,"INSERT INTO student (Endate,Sdate,CeDate,course1,course2,course3,fullname,IC,phone_num,Detail) values('$date','$date1','$date2','$course','$courses','$coursed','$name','$ic','$numfon','$json')");
	
?>
