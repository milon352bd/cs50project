<?php 
	include 'inc/header.php';

	$roll = $stname = $stftname = $stbatch = "";
	$rollerr = $stnameerr = $stftnameerr = $stbatchwrr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    
		$roll= ($_POST['roll']);
		$stname= ($_POST['stname']);
		$stftname= ($_POST['stftname']);
		$stbatch= ($_POST['stbatch']);
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO student_info(roll, Name, st_father, st_batch) VALUES ('$roll','$stname','$stftname','$stbatch')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	 echo "<p><a href='index.php'>Go Back</a>";

?>
<?php include 'inc/footer.php'; ?>