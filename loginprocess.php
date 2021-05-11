<?php require('database/config.php');
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$pass=md5($password);
$sql="SELECT * FROM users WHERE email='$email'AND password='$pass'";
$result=mysqli_query($conn,$sql);
$count= mysqli_num_rows($result);
// echo $count;
if($count==1){
$login=mysqli_fetch_array($result);
$_SESSION['id']=$login['id'];
$_SESSION['first1']=$login['first'];
$_SESSION['last1']=$login['last'];
$_SESSION['email1']=$login['email'];
$_SESSION['password1']=$login['password'];
// echo $_SESSION['$first'];
header('location:index.php');
}else{
header('location:login.php');
}

?>