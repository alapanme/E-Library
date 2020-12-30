<?php
$servername="localhost";
$username="root";
$password="";
$dbname="newdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//fetch from database
$sql = "SELECT * from bookdb";
$result = $conn->query($sql);

?>
<html>
</head>
<title>E-Library Display Section</title>
<link rel="stylesheet" type="text/css" href="css/display.css">
</head>
<body>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="">E-Library</a></li>
			<li><a href="https://www.alapan.me/" target="_blank">Visit My Blog!</a></li>
		</ul>
	<div style="overflow-x:auto;">
	<h1>Books Available for Free Download</h1>
		<table width="100%" cellspacing="0" cellpadding="18">
				<div class="header">
					<th>Book Name</th>
					<th>Book Description</th>
					<th>Book Author</th>
					<th>Book Language</th>
					<th>Download Link</th>
					<th>Uploader Name</th>
					<th>Uploader Email</th>
				</div>	
					<tr>
						<?php
							while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>".$row['bookname']."</td>";
							echo "<td>".$row['bookdesc']."</td>";
							echo "<td>".$row['bookauthor']."</td>";
							echo "<td>".$row['booklang']."</td>";
							echo "<td><a href='http://localhost/Elibrary/files/".$row['bookfile']."'><b>Download E-Book</b></a></td>";
							echo "<td>".$row['uploadername']."</td>";
							echo "<td>".$row['uploaderemail']."</td>";
							echo "</tr>";
							}
						?>
		</table>
	</div>
</body>
</html>
