<!DOCTYPE html>
<html lang="en">

	<head>


	<title>CRM | VIEW APPLICANTS</title>
    <link rel="stylesheet" href="user.css">
	<link rel="stylesheet" href="common.css">
	<link rel="stylesheet" href="login.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7894fc58d6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
		<style>
			table, td, th, p{
				border: 1px solid black;
				width: 40px;
				padding: 5px 5px;
				text-align: center;
				border-collapse:collapse;
				background-color:lightblue;
				padding-top: 8px;
			}
			table { margin: 50px; 
				margin-left: 0.5px;
  				margin-right: 70px;}
			
		</style>
	</head>
	<body>
		

	<nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">CRM.<span>RECRUITMENT SYSTEM</span></a></div>
            <ul class="menu">
                 
                <li><a href="login.php" class="menu-btn">LOG OUT<i class="fas fa-power-off"></i></a></li>
            </ul>
           
        </div> 
    </nav>		
	
	<div class="box">
        <h2>WELCOME TO <br> ADMIN PORTAL</h2>
            <div class="boxes"> 
                <li><a href="user1.php" class="menu-btn">HOME</a></li>
                <li><a href="about.php" class="menu-btn">ABOUT</a></li>
                <li><a href="contact.php" class="menu-btn">CONTACT</a></li>
                <li><a href="data.php" class="menu-btn">VIEW APPLICANTS</a></li>
                <li><a href="index.php" class="menu-btn">ADD APPLICANTS</a></li>
              

               
            </div>
	</div>

	<div class="vl"></div>

	<div class="datatable">
		<?php
		error_reporting(0);
            // refer manual for these 4 lines
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "demo";
			$a=[];
			// Create connection
			// Opens a new connection to the MySQL server
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			//	Check connection and return an error description from the last connection error, if any
			if ($conn->connect_error)
				die("Connection failed: " . $conn->connect_error);
			$sql = "SELECT * FROM candidate";
			//	performs a query against the database
			$result = $conn->query($sql);
			// echo "<br>";
			// echo "<center> STUDENT LIST </center>";
			echo "<table border='2'>";
				echo "<tr>";
					echo "<th>REG ID</th><th>NAME</th><th>CONTACT</th><th>EMAIL</th><th>GENDER</th><th>JOB ROLE</th>
					 <th>COLLAGE NAME</th><th>operation1</th><th>operation2</th></tr>"; 
					if ($result->num_rows> 0) {
						//	output data of each row and fetches a result row as an associative array
						while($row = $result->fetch_assoc()) {
							echo "<tr>";
								echo "<td>". $row["Reg_ID"]."</td>";
								echo "<td>". $row["NAME"]."</td>";
								echo "<td>". $row["CONTACT"]."</td>";
                                echo "<td>". $row["EMAIL"]."</td>";
                                echo "<td>". $row["GENDER"]."</td>";
                                echo "<td>". $row["JOB_ROLE"]."</td>";
                                echo "<td>". $row["COLLAGE_NAME"]."</td>
								<td><a href ='Update.php?rn=$row[Reg_ID]'>update</td>
								<td><a href ='delete.php?rn=$row[Reg_ID]'>Delete</td>
                                </tr>";
								array_push($a,$row["Reg_ID"]);
						}
					}
					else
						// echo "Table is Empty";
			
		?>
	</div>

	</body>
</html>



    


 
  




