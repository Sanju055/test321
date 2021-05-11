
<?php include('database/config.php');
 include('include/toppart.php');
 include('include/navbar.php');?>
 
<div class="site-blocks-cover overlay" style="background-image: url(images/bg.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">

<div class="container">
<div class="row align-items-center justify-content-center text-center">
<div class="col-md-12">
<div class="row justify-content-center mb-4">
<div class="col-md-8 text-center">
<h1 class="" data-aos="fade-up"> Find Your Dream College </h1>
<p data-aos="fade-up" data-aos-delay="100"> You can find <b> Colleges </b> according to your <b> Requirement </b></p>
</div>
</div>
<div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">

<form method="POST" action="listings.php">
<div class="row align-items-center">
<div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
<input list="browsers" name="name" id="browser" class="form-control rounded" placeholder="What are you looking for?">

<datalist id="browsers" name="name">
<?php
	include('database/config.php');
	$sql="Select *from tblcollegepost";
	 $result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)){
	  ?>
		<option value="">
	<?php
	}
	?>
</datalist>



</div>

<div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
<div class="select-wrap">
<span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
<select class="form-control rounded" name="city">
<option value=""> Location</option>
<?php
include('database/config.php');
$sql="Select *from city";
 $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
  ?>
<option value="<?php echo $row['cityname'];?>"> <?php echo $row['cityname'];?> </option>
<?php
}
?>

</select>
</div>
</div>


<div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
<div class="select-wrap">
<span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
<select class="form-control rounded" name=" faculty">
<option value="">All Faculty</option>
<?php
include('database/config.php');
$sql="Select *from faculty";
 $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
  ?>
<option value="<?php echo $row['Facultyname'];?>"> <?php echo $row['Facultyname'];?> </option>
<?php
}
?>
</select>

</div>
</div>
<div class="col-lg-12 col-xl-2 ml-auto text-right">
<input type="submit" class="btn btn-primary btn-block rounded" value="Search">

</div>
</div>
</form>


</div>
</div>
</div>
</div>
</div>
<div class="site-section bg-light">
<div class="container">
<div class="overlap-category mb-5">
<div class="row align-items-stretch no-gutters">
<?php
include('database/config.php');
$sql="Select *from faculty order by id DESC Limit 6";
 $result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result)){
  ?>

<div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
<a href="list.php?faculty=<?php echo $row['Facultyname'];?>" class="popular-category h-100">
<span class="icon"><span class="flaticon-house"></span></span>
<span class="caption mb-2 d-block"> <?php echo $row['Facultyname'];?> </span>

 
<span class="number">10</span>
</a>
</div>
<?php
}
?>

</div>
</div>

<div class="row">
<div class="col-12">
<h2 class="h5 mb-4 text-black">Featured Colleges</h2>
</div>
</div>
<div class="row">
<div class="col-12  block-13">
<div class="owl-carousel nonloop-block-13">

<?PHP
include('database/config.php');
$sql="Select *from tblcollegepost";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
  ?>

<div class="d-block d-md-flex listing vertical">
<a  style="background-image: url(pages/image/<?php echo $row['image'];?>);" href="listings-single.php" class="img d-block" ></a>
<div class="lh-content">
<span class="category"> <?php echo $row['faculty']; ?></span>
<a href="#" class="bookmark"><span class="icon-heart"></span></a>
<h3><a href="listings-single.php?id=<?php echo $row['id']; ?>"><?php echo $row['collegename']; ?></a></h3>
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

<?php
}
?>

</div>
</div>
</div>
</div>
</div>
<div class="site-section" data-aos="fade">
<div class="container">
<div class="row justify-content-center mb-5">
<div class="col-md-7 text-center border-primary">
<h2 class="font-weight-light text-primary">Popular Colleges</h2>
<p class="color-black-opacity-5">Which College you like!!</p>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
<div class="listing-item">
<div class="listing-image">
<img src="images/oxford.jpg" alt="Image" class="img-fluid" style ="height:300px;">
</div>
<div class="listing-item-content">
<a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
<a class="px-3 mb-3 category" href="#">Oxford College</a>
<h2 class="mb-1"><a href="#">Popular College </a></h2>
<span class="address">Sukkhanagar,Butwal</span>
</div>
</div>
</div>
<div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
<div class="listing-item">
<div class="listing-image">
<img src="images/kalika.jpg" alt="Image" class="img-fluid" style ="height:300px;">
</div>
<div class="listing-item-content">
<a href="#" class="bookmark"><span class="icon-heart"></span></a>
<a class="px-3 mb-3 category" href="#">Kalika Multiple Campus</a>
<h2 class="mb-1"><a href="#">Popular College</a></h2>
<span class="address">Kalikanagar,Butwal-12</span>
</div>
</div>
</div>
<div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
<div class="listing-item">
<div class="listing-image">
<img src="images/deep.jpg" alt="Image" class="img-fluid" style ="height:300px;">
</div>
<div class="listing-item-content">
<a href="#" class="bookmark"><span class="icon-heart"></span></a>
<a class="px-3 mb-3 category" href="#">Deep Boarding School</a>
<h2 class="mb-1"><a href="#">Popular College</a></h2>
<span class="address">Sukkhanagar,Rupendehi</span>
</div>
 </div>
</div>
<div class="col-md-6 mb-4 mb-lg-4 col-lg-6">
<div class="listing-item">
<div class="listing-image">
<img src="images/rmc.jpg" alt="Image" class="img-fluid" style ="height:470px;">
</div>
<div class="listing-item-content">
<a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
<a class="px-3 mb-3 category" href="#">Rammani Multiple Campus</a>
<h2 class="mb-1"><a href="#">Popular College</a></h2>
<span class="address">Manigram,Rupendehi</span>
</div>
</div>
</div>
<div class="col-md-6 mb-4 mb-lg-4 col-lg-6">
<div class="listing-item">
<div class="listing-image">
<img src="images/oxford.jpg" alt="Image" class="img-fluid" style ="height:470px;">
</div>
<div class="listing-item-content">
<a href="#" class="bookmark"><span class="icon-heart"></span></a>
<a class="px-3 mb-3 category" href="#">Oxford College </a>
<h2 class="mb-1"><a href="#">Popular College</a></h2>
<span class="address">Sukkhanagar,Rupendehi</span>
</div>
</div>
</div>
</div>
</div>
</div>



<div class="site-section bg-light">
<div class="container">
<div class="row mb-5">
<div class="col-md-7 text-left border-primary">
<h2 class="font-weight-light text-primary">Trending Today</h2>
</div>
</div>
<div class="row mt-5">

<?PHP
include('database/config.php');
$sql="Select *from tblcollegepost order by id Limit 8";
 $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
  ?>
<div class="col-lg-6">
<div class="d-block d-md-flex listing">
<a href="#" class="img d-block" style="background-image: url('pages/image/<?php echo $row['image'];?>')"></a>
<div class="lh-content">
<span class="category"><?php echo $row['faculty']; ?></span>
<a href="listings-single.php?id=<?php echo $row['id']; ?>" class="bookmark"><span class="icon-heart"></span></a>
<h3><a href="listings-single.php?id=<?php echo $row['id']; ?>"><?php echo $row['collegename']; ?></a></h3>
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

<?php if(isset($_SESSION['id'])){?>
<div class="site-section bg-light">
<div class="container">
<div class="row mb-5">
<div class="col-md-7 text-left border-primary">
<h2 class="font-weight-light text-primary">Recomdation College For you </h2>
</div>
</div>
<div class="row mt-5">

<?PHP
include('database/config.php');
$sql="Select *from tblcollegepost ORDER BY RAND() LIMIT 4";
 $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
  ?>
<div class="col-lg-6">
<div class="d-block d-md-flex listing">
<a href="#" class="img d-block" style="background-image: url('pages/image/<?php echo $row['image'];?>')"></a>
<div class="lh-content">
<span class="category"><?php echo $row['faculty']; ?></span>
<a href="listings-single.php?id=<?php echo $row['id']; ?>" class="bookmark"><span class="icon-heart"></span></a>
<h3><a href="listings-single.php?id=<?php echo $row['id']; ?>"><?php echo $row['collegename']; ?></a></h3>
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
}
?>

</div>
</div>


<div class="site-section bg-light">
<div class="container">
<div class="row justify-content-center mb-5">
<div class="col-md-7 text-center border-primary">
<h2 class="font-weight-light text-primary">Our Blog</h2>
<p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
</div>
</div>
<div class="row mb-3 align-items-stretch">
<div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
<div class="h-entry">
<img src="images/kalika.jpg" alt="Image" class="img-fluid rounded" style="width:100%;heigth:400px">
<h2 class="font-size-regular"><a href="#" class="text-black">Kalika College</a></h2>
<div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> 2070 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
<p>Butwal Kalika College is located at Kalikanagar, Butwal-12. Established at 2070 BS in Rupandehi District of Lumbini Zone, Butwal Kalika Campus is offering 4 years BBS program with affiliation from Tribhuvan University.  From 2075 BS, Butwal Kalika Campus is offering BCA program. </p>
</div>
</div>
<div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
<div class="h-entry">
<img src="images/oxford.jpg" alt="Image" class="img-fluid rounded">
<h2 class="font-size-regular"><a href="#" class="text-black">Oxford College</a></h2>
<div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> 2002<span class="mx-1">&bullet;</span> <a href="#">News</a></div>
<p>Established in 2002, Oxford College has a fourteen years long history. The college runs bachelor programs and +2 science and management. Administered by the committed social workers and lecturers, the college’s aspires to provide world class, engaged education to prepare its students for the real world challenges.</p>
</div>
</div>
<div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
<div class="h-entry">
<img src="images/Manimukunda.jpg" alt="Image" class="img-fluid rounded" style="width:100%;">
<h2 class="font-size-regular"><a href="#" class="text-black">Manimukunda College</a></h2>
<div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> 2056 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
<p>Manimukunda College was established in the year 1999 AD (2056 BS) by a team of experienced lecturers. It is affiliated to National Examination Board (NEB) and Tribhuvan University (TU).  It has been established with the intension of imparting quality education in the field of Science, Management and Education.</p>
</div>
</div>
<div class="col-12 text-center mt-4">
<a href="#" class="btn btn-primary rounded py-2 px-4 text-white">View All Posts</a>
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