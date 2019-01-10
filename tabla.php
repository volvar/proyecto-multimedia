<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">	
		<div class="table-responsive-sm">
		  <table class="table">
			  <tbody>
				  <thead>
				    <tr>
				      <?php  
				      	// query
				      	$sql = "select";
				      	$query = $pdo->prepare($sql);
				      	$query->execute();

				      	for($i = 0; $row = $query->fetch(); $i++){
				      		echo "<th scope='row'>".$i."</th>";
				      		echo "<th>".$row['rut']."</th>";
				      		echo "<th>".$row['nombres']."</th>";
				      		echo "<th>".$row['apell_part']."</th>";
				      		echo "<th>".$row['apell_mat']."</th>";
				      		echo "</tr>";
				      	}
				      ?>
				    
				  </thead>
			  </tbody>
		  </table>
		</div>
	</div>
</body>
</html>