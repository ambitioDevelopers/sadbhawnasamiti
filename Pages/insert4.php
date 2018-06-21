<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$link = mysqli_connect("www.sadbhawnasamiti.com", "user1", "sa_123", "sadbhawnasamiti");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['fname']);
$Email = mysqli_real_escape_string($link, $_REQUEST['email']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);


 
// attempt insert query execution
$sql = "INSERT INTO `use_frm`(`FIRSTname`, `Email`, `LastName`) VALUES ('$Name', '$Email', '$lname')";
if(mysqli_query($link, $sql)){
   // echo "Records added successfully.";
	header("Location: about.html?done=1");
	header("Location: Gallery.html?done=1");
	header("Location: Our-project.html?done=1");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>