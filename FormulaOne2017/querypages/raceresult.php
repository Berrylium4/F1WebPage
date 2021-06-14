<html>
	<head>
	<title>Race Results</title>
	
	<style>
		body{
				background-color: #F7F4F1;
				background-image: url('/img/background');
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: 100% 100%;
				background-blend-mode: normal;
			}

		.logo{
			/* Resize huge f1 logo */
			width: 150px;
			padding-top: 10px;
			padding-left: 10px;
			padding-right: 10px;
			display:inline-block;
		}
		.logotext{
			display:inline-block;
			line-height: 0px;
			position: relative;
			bottom: 30px; /* Center text with the middle of logo */
		}
		#btn{
			display:inline-block;
			position: relative;
			bottom: 30px;
			left: 10px;
			width: 80px;
			height: 30px;
		}
		
		#top{
			/* White text over red BG */
			background-color: #E10600;
			color: #FFFFFF;
			display: block;
			margin-left: 2.5%;
			margin-top: 2%;
			width: 90%;
			padding: 10px;
		}
		
		#query{
			background-color: #FFFFFF;
			width: 90%;
			padding: 10px;
			margin-top: 30px;
			margin-left: 2.5%;
			
			font-family: sans-serif;
			font-size: 0.75 em;
		}
		
		#drivertable{
			border-collapse: collapse;
			border: 1px solid black;
		}
		
		td, th {
			border-left: 1px solid black;
			border-right: 1px solid black;
			padding-top: 5px;
			padding-bottom: 5px;
			padding-left: 10px;
			padding-right: 10px;
		}
		
		tr:nth-child(even) {background: #CCC}
		tr:nth-child(odd) {background: #FFF}
		
		#title{
			margin-left:20%;
		}
		#table{
			margin-left:20%;
			margin-bottom: 50px;
		}
		
		
	</style>
	</head>
	<body>
		<div id = "top">
			<img src="/img/f1logo" alt="" class = "logo">
			<h1 class = "logotext">2017 F1 Database</h1>
			<button id="btn">Go Back</button>
			
			<script type="text/javascript">
				var button = document.getElementById("btn");
				button.onclick = function(){
					window.location.href = "../index.php";
				}
			
			</script>
		</div>
		
		<div id = "query">
		
<?php
		// Create connection to DB
		$conn = new mysqli("localhost","root","","formulaone");
		//print ($conn->host_info); //debug
		
		if ($conn->connect_error){
			die("Can't connect to database: " . $conn->connect_error);
		}
?>
		<h3 id="title"> 2017 F1 Race Results </h3>
	
<?php
		$sql = "SELECT race.rname, driver, position, score, date\n"

			. "FROM race_score RIGHT JOIN race ON race_score.rname = race.rname \n"

			. "ORDER BY date ASC, position ASC";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0){
			
			// setup html table
			echo "
			<div id = \"table\">
			<table id=\"drivertable\"> 
				<tr>
					<th>Race</th>
					<th>Position</th>
					<th>Driver</th>
					<th>Points</th>
				</tr>
			";
			
			$counter = 1;
			while ($row = $result->fetch_assoc()){
				echo "<tr><td>" . $row["rname"] . "</td><td>" . $row["position"] . "</td><td>" . $row["driver"] 
				. "</td><td>" . $row["score"] . "</td></tr>";
			}
			
			echo "</table></div>";
		}
		else {
			echo "ERROR IN QUERY";
		}
		
		$conn->close(); 
?>

		</div>


	</body>
	
</html>