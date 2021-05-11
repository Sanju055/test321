
<?php require('database/config.php');

$first=$_POST['firstname'];
$last=$_POST['lastname'];
if(is_numeric($first) || is_numeric($last)){
    echo "First Name or last name cannot be numeric";
    return;
}
$email=$_POST['email'];
$password=$_POST['password'];
$pass=md5($password);

$sql="INSERT INTO users(first,last,email,password)VALUES('$first','$last','$email','$pass')";
if(mysqli_query($conn,$sql)){
header('location:login.php');
}
else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
$conn->close();


?>