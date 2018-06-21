<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$link = mysqli_connect("www.sadbhawnasamiti.com", "user1", "sa_123", "sadbhawnasamiti");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$Lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$Email = mysqli_real_escape_string($link, $_REQUEST['email']);
$Number = mysqli_real_escape_string($link, $_REQUEST['number']);
$msg = mysqli_real_escape_string($link, $_REQUEST['msg']);


 
// attempt insert query execution
$sql = "INSERT INTO `donate_frm`(`fname`, `lname`, `email`, `number`, `msg`) VALUES ('$Fname', '$Lname', '$Email', '$Number', '$msg')";
if(mysqli_query($link, $sql)){
    //echo "Records added successfully.";
	header("Location: Donation.html?done=1");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>