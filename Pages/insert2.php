<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$link = mysqli_connect("www.sadbhawnasamiti.com", "user1", "sa_123", "sadbhawnasamiti");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['name']);
$Email = mysqli_real_escape_string($link, $_REQUEST['email']);
$text = mysqli_real_escape_string($link, $_REQUEST['text']);


 
// attempt insert query execution
$sql = "INSERT INTO `cnt_frm`(`name`, `email`, `text`) VALUES ('$Name', '$Email', '$text')";
if(mysqli_query($link, $sql)){
    //echo "Records added successfully.";
	header("Location: contact.html?done=1");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>