<?php include('database/config.php');
include('include/toppart.php');
include('include/navbar.php');?>
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bg.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center justify-content-center text-center">
<div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
<div class="row justify-content-center mt-5">
<div class="col-md-8 text-center">
<h1>Add Collage</h1>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="site-section bg-light">
 <div class="container">
<div class="row justify-content-center">
<div class="col-md-7 mb-5" data-aos="fade">
<form action="addcollageprocess.php"  method="POST"class="p-5 bg-white">
<div class="row form-group">
<div class="col-md-12">
<label class="text-black" for="email">Collage Name</label>
<input type="text" name="name" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-md-12">
<label class="text-black" for="subject"  >City</label>
<select name="city"  class="form-control">
<?php
$sql='SELECT * FROM city';
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
$option=$row["cityname"];
?>

<option value="<?php echo $option;?>"><?php echo $option;?></option>


<?php 
  }
?>
</select>
</div>
</div>
<div class="row form-group">
<div class="col-md-12">
<label class="text-black" for="subject">Area</label>
<select name="area"  class="form-control">
<?php $sql='SELECT * FROM tbarea';
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
$option =$row['area'];
?>
<option value="<?php echo $option;?>"><?php echo $option;?></option>
<?php 
  }
?>
</select>
</div>
</div>
<div class="row form-group">
<div class="col-md-12">
<label class="text-black" for="subject">Phone</label>
<input type="number" name="mobilenumber" class="form-control">
</div>
</div><br>
<div class="row form-group">
<div class="col-md-12">
<input type="submit"  value="Add Collage" class="btn btn-primary py-2 px-4 text-white">
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="newsletter bg-primary py-5">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<h2>Newsletter</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
<div class="col-md-6">
<form class="d-flex">
<input type="text" class="form-control" placeholder="Email">
<input type="submit" value="Subscribe" class="btn btn-white">
</form>
</div>
</div>
</div>
</div>
<?php include('include/footer.php');?>
