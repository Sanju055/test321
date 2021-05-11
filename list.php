<?php include('include\toppart.php');?>
<?php include('include/navbar.php');?>


<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center justify-content-center text-center">
<div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
<div class="row justify-content-center mt-5">
<div class="col-md-8 text-center">
<h1>Collage Listings</h1>
<p class="mb-0">Choose College as your requirement</p>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
$FACULTY  =$_GET['faculty'];
?>

<div class="site-section">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="row">

<?PHP
include('database/config.php');
$sql="Select *from tblcollegepost WHERE faculty='$FACULTY'";
 $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
  ?>

<div class="col-lg-6">
<div class="d-block d-md-flex listing vertical">
<a href="listings-single.php?id=<?php echo $row['id']; ?>"class="img d-block" style="background-image: url('pages/image/<?php echo $row['image'];?>')"></a>
<div class="lh-content">
<span class="category"><?php echo $row['faculty']; ?></span>
<a href="listings-single.php?id=<?php echo $row['id']; ?>" class="bookmark"><span class="icon-heart"></span></a>
<h3><a href="listings-single.php?id=<?php echo $row['id']; ?>"> <?php echo $row['collegename']; ?></a></h3>
<address><?php echo $row['city']; ?></address>
<p class="mb-0">
<span class="icon-star text-warning"></span>
<span class="icon-star text-warning"></span>
<span class="icon-star text-warning"></span>
<span class="icon-star text-warning"></span>
<span class="icon-star text-secondary"></span>
<span class="review">(3 Reviews)</span>
</p>
</div>
</div>
</div>

<?php
}
?>









</div>


</div>
<div class="col-lg-3 ml-auto">
<div class="mb-5">
<h3 class="h5 text-black mb-3">Filters</h3>
<form action="#" method="post">
<div class="form-group">
<input type="text" placeholder="What are you looking for?" class="form-control">
</div>
<div class="form-group">
<div class="select-wrap">
<span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
<select class="form-control" name="" id="">
<option value="">All Categories</option>
<option value="" selected="">Real Estate</option>
<option value="">Books &amp; Magazines</option>
<option value="">Furniture</option>
<option value="">Electronics</option>
<option value="">Cars &amp; Vehicles</option>
<option value="">Others</option>
</select>
</div>
</div>
<div class="form-group">

<div class="wrap-icon">
<span class="icon icon-room"></span>
<input type="text" placeholder="Location" class="form-control">
</div>
</div>
</form>
</div>
<div class="mb-5">
<form action="#" method="post">
<div class="form-group">
<p>Radius around selected destination</p>
</div>
<div class="form-group">
<input type="range" min="0" max="100" value="20" data-rangeslider>
</div>
</form>
</div>
<div class="mb-5">
<form action="#" method="post">
<div class="form-group">
<p>Category Collages is selected</p>

<p>More filters</p>
</div>

<div class="form-group">
<ul class="list-unstyled">
<li>
<label for="option1">
<input type="checkbox" id="option1">
Mangement
</label>
</li>
<li>
<label for="option2">
<input type="checkbox" id="option2">
Education
</label>
</li>


</ul>
</div>
</form>
</div>

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