<?php include_once './data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>table and loops </title>
	<style>
		body{
			background-image: linear-gradient(to bottom, blue,white, skyblue);
		}
		.tableContainer{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		table {
		    border: 1px solid #CCC;
		    border-collapse: collapse;
		}
		th {
			color: grey;
		 	border-bottom: 1px solid #cfcfcf;
		}
		
		tbody tr td{
			color: white;
			background-color: skyblue;

		}
		td {
			padding: 10px 15px;
		    border: none;
		    border-bottom: 1px solid #cecece;
		}
		.score{
			border-left: 1px solid #cfcfcf;
		}
	</style>
</head>
<body>
<div class="tableContainer">
	<table >
		<thead>
			<tr>
				<th>S.N.</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>score</th>
			</th>
		</thead>
		<tbody>
			<?php $i=0;
			  while($i<count($data)):?>
				<tr>
				<td><?=$i+1?></td>
				<td><?=$data[$i]['firstName'] ?></td>
				<td><?=$data[$i]['lastName'] ?></td>
				<td><?=$data[$i]['address'] ?></td>
				<td class="score"><?=$data[$i++]['score'] ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
		
	</table>
</div>
	

	
</body>
</html>