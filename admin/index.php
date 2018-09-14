<!Doctype html>
<html>

	<head>
		<title>Members information</title>
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	</head>
	<body class="container">
		<table class="table" cellpadding="10" cellspacing="0" border="1">
			<tr>
				<thead align="left">
				<th>No.</th>
				<th>Personal ID</th>
				<th>First Name</th>
				<th>Surname</th>
				<th>Email Address</th>
				
				<thead>
			</tr>
			<?php
				mysql_connect('localhost', 'root', '');
				mysql_select_db('EPS2');
				$query = mysql_query("Select * From EventCompanies Order By id DESC");
				while($row = mysql_fetch_array($query)) {
					echo "<tr>";
					echo "<td>".$row['CompanyID']."</td>";
					echo "<td>".$row['CompanyName']."</td>";
					echo "<td>".$row['HeadOffice']."</td>";
					echo "<td>".$row['Services']."</td>";
					echo "<td>".$row['Email']."</td>";
					
					echo "</tr>";
				}
			?>
				
			
			
			
		</table>

	</body>
</html>