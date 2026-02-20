
<?php 
$db="ayush";
$user="root";
$pass="";
$server="localhost";
$a=$_POST['doctorid'];
$b=$_SESSION['username'];

$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	echo"connection successful";
	$sql="INSERT INTO send_request VALUES('$a','$b')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";
            }
	else{
		echo"Record not inserted";
	}
}
else{
	echo"connection error";

}
?> 


<!-- php 
// filepath: /c:/xampp/htdocs/ayush/send_arequest.php
session_start(); // Start the session

$db = "ayush";
$user = "root";
$pass = "";
$server = "localhost";
$a = $_POST['doctorid'];
$b = $_POST['username'];

$con = mysqli_connect($server, $user, $pass, $db);

if ($con) {
    echo "connection successful";
    $sql = "INSERT INTO send_request (doctor_id, user_id) VALUES ('$a', '$b')";

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully"; ?>
        <script type="text/javascript">
            window.alert("Appointment confirmed");
            window.location = "viewrequestfc.php";
        </script>
    ?php 
    } else {
        echo "Record not inserted: " . mysqli_error($con);
    }
} else {
    echo "connection error: " . mysqli_connect_error();
}
?> -->