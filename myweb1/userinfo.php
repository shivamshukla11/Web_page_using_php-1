<!-- userinfo database  -->
<?php

// making connection 
$con = mysqli_connect('localhost','root');

// testing connection 
if($con){
    echo "helllo the connection is successful";
}else{
    echo "not connected";
}


// selecting databases
mysqli_select_db($con,'myweb_sample1');

$name = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO feedback_enquiry( name, email, mobile, comment) VALUES ('$name','$email','$mobile','$comment')";

mysqli_query($con,$query);

// this if we want our page on same after clicking 
header('location:contactus.php');

?>