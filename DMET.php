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
<style>
body{

background-image: url("1.jpg");

}
</style>
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
<div class="container-fluid">
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              List Of Students</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Identification No</th>
                      <th>Phone Number</th>
                      <th>Enrollment date</th>
					   <th>Course start date</th>
					  <th>Course end date</th>
                      <th>Details</th>
                      
                    </tr>
                 
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
<?PHP


	$conn= new mysqli("localhost","root","","academy");
	if($conn->connect_error)
	{
	die("connection failed".$conn->connect_error);
	}
	
	
	
	$sql=mysqli_query($conn,"select * from student");
	
	while($result=mysqli_fetch_array($sql))
{
	if($result["course1"]=="DMET" || $result["course2"]=="DMET" || $result["course3"]=="DMET")
		{
		echo "<tr><td>".$result["fullname"]."</td>";
		echo "<td>".$result["IC"]."</td>";
		echo "<td>".$result["phone_num"]."</td>";
		echo "<td>".$result["Endate"]."</td>";
		echo "<td>".$result["Sdate"]."</td>";
		echo "<td>".$result["CeDate"]."</td>";
		echo "<td><a href=/academy/details.php?IC=".$result['IC']."'>Details</a></td>";

		
		
		}
		
}
	
?>

