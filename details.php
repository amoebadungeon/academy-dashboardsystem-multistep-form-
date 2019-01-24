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
f.serif{
	color: black;
	font-family:"Times New Roman", Times,serif;
	font-weight: bold;
	font-style:oblique;
}
f.sans-serif{
	color: grey;
	font-family:"Verdana",sans-serif;
	font-weight:500;
	font-variant:small-caps;
}

.topright {
  position: absolute;
  top: 80px;
  right: 200px;
  
}
mark{
	background-color:lightblue;
}
.bottomright {
  position: absolute;
  bottom: 400px;
  right: 280px;
  
}
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
<div class="container">
<div class="card mb-3">
            <div class="card-header bg-success text-white">
              <i class="fas fa-table"></i>
              Student's details</div>
            <div class="card-body ">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    
                 
				</div>
				</div>
				</div>
				</div>


					
</body>

</head>

</html>
<?php



$conn=new mysqli("localhost","root","","academy");
$conn= new mysqli("localhost","root","","academy");
	if($conn->connect_error)
	{
	die("connection failed".$conn->connect_error);
	}

if(isset($_GET['IC']))
	{
		$id= (int)$_GET['IC'];
$sql= mysqli_query($conn,"select * from student WHERE IC=$id");

while($result=mysqli_fetch_array($sql))
{
	echo " <f class='serif'><h4><mark>Applicant's Detail</mark></h4>Full Name(as per IC):</f>"."<br>"."<f class='sans-serif'>".$result["fullname"]."</f></br>";
	echo "<f class='serif'>Identification Number:</f>"."<br>"."<f class='sans-serif'>".$result["IC"]."</f></br>";
	echo "<f class='serif'>Phone Number:</f>"."<br>"."<f class='sans-serif'>".$result["phone_num"]."</f></br>";
	
		$json=json_decode($result["Detail"]);
		foreach($json as $list=> $value)
		{
	
		switch($list)
			{
				case 'Address': echo "<f class='serif'>Address:</f><br>"."<f class='sans-serif'>".$value."</f>"."</br>";break;
				case 'RACE': echo "<f class='serif'>Race:</f><br>"."<f class='sans-serif'>".$value."</f>"."<br>";break;
				case 'RELIGION': echo "<f class='serif'>Religion:</f>"."<br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'DOB': echo "<f class='serif'>Date of Birth:</f>"."<br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'Email': echo "<f class='serif'>Email:</f>"."<br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'gender': echo "<f class='serif'>Gender:</f>"."<br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'status': echo "<f class='serif'>Marital Status:</f>"."<br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'FB': echo "<f class='serif'>Facebook Address:</f>"."<br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'tuiter': echo "<f class='serif'>Twitter Address:</f>"."<br>"."<f class='sans-serif'>".$value."</f><br>";break;
				
				case 'gName':echo " <f class='serif'><div class='topright'><h4><mark>Parents'Guardian Contact</mark></h4></f>"; echo "Guardian/Parents Full Name:<br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'gIc': echo "<f class='serif'>Identification Number:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'gAdd': echo "<f class='serif'>Address:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'job': echo "<f class='serif'>Occupation:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'gfon': echo "<f class='serif'>Phone Number:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'gIc': echo "<f class='serif'>Identification Number:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				
				
				case 'g2Name': echo "<f class='serif'>Guardian/Parents Full Name:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'g2Ic': echo "<f class='serif'>Identification Number::</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'g2Add': echo "<f class='serif'>Address::</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'job2': echo "<f class='serif'>Occupation::</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'g2fon': echo "<f class='serif'>Phone Number::</f><br>"."<f class='sans-serif'>".$value."</f><br></div>";break;
				
				case 'Hschool':echo "<br> <f class='serif'><h4><mark>Education Background</mark></h4></f>"; echo "Secondary Education(High School):<br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'from': echo "<f class='serif'>From-to(Year):</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'grad': echo "<f class='serif'>Did You graduate:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'achievment1': echo "<f class='serif'>Achievment:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'Hschool1': echo "<f class='serif'>Tertiary Education:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'from1': echo "<f class='serif'>From-to(Year):</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'grad1': echo "<f class='serif'>Did You Graduate:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'achievment2': echo "<f class='serif'>Achievment:</f><br>"."<f class='sans-serif'>".$value."</f><p>";break;

				case 'company':echo " <br><f class='serif'>  <div class='bottomright'><h4><mark>Employement Details</mark></h4></f>"; echo "<f class='serif'>Company Name:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'occu': echo " <f class='serif'>Occupation:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'year': echo " <f class='serif'>Year:</f><br>"."<f class='sans-serif'>".$value."</f><p>";break;
				case 'company2':echo "<f class='serif'>Company Name:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'occu2': echo " <f class='serif'>Occupation:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'year2': echo " <f class='serif'>Year:</f><br>"."<f class='sans-serif'>".$value."</f><p>";break;
				
				
				case 'sName':echo " <br><f class='serif'> <h4><mark>Sponsorship</mark></h4></f>"; echo "<f class='serif'>Sponsor Name:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'sIc': echo " <f class='serif'>Identification number:</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'sPhone': echo " <f class='serif'>Contact Number:</f><br>"."<f class='sans-serif'>".$value."</f><br></div>";break;
				
				case 'asma':echo"<br><f class='serif'> <h4><mark>Medical History</mark></h4></f>"; echo"Bronchial asthma:<br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'tension':echo "<f class='serif'>Hypertension</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'hearing':echo "<f class='serif'>Hearing Problem</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'diabetes':echo "<f class='serif'>Diabetes Mellitus</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'heart':echo "<f class='serif'>Heart Disease</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'kidney':echo "<f class='serif'>Kidney Disease</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'psyc':echo "<f class='serif'>Psychiatric Illness</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
				case 'hiv':echo "<f class='serif'>HIV/AIDS</f><br>"."<f class='sans-serif'>".$value."</f><br>";break;
			}
		}
	
}
	}

?>