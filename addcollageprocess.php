<?php require('database/config.php');

$name=$_POST['name'];
$city=$_POST['city'];
$area=$_POST['area'];
$phone=$_POST['mobilenumber'];
// echo $name; 
$sql="INSERT INTO tblcollegepost(collegename,city,area,mobilenumber)VALUES('$name','$city','$area','$phone')";
$result=mysqli_query($conn,$sql);
if($result){
    // echo "insert ";
    header('location:index.php');
}else{
    echo mysqli_error($conn);
}
?>