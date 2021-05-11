
<?php include('include/toppart.php');
 include('include/navbar.php');?>
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
 <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIwzALxUPNbatRBj3Xi1Uhp0fFzwWNBkE&callback=initMap&libraries=&v=weekly"
      async
    ></script>
 
 </script>
	
 <?php 
include('database/config.php');
$id= $_GET['id'];
$sql="Select *from tblcollegepost WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result)
 ?>
 
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(admin/image/<?php echo $row['image'];?>);" data-aos="fade" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center justify-content-center text-center">
<div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
<div class="row justify-content-center mt-5">
<div class="col-md-8 text-center">
<h1><?php echo $row['collegename']; ?></</h1>
<p class="mb-0"><?php echo $row['city']; ?></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="site-section">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="mb-4">
<div class="slide-one-item home-slider owl-carousel">
<div><img src="admin/image/<?php echo $row['image'];?>" alt="Image" class="img-fluid"></div>
<div><img src="admin/image/<?php echo $row['image'];?>" alt="Image" class="img-fluid"></div>
<div><img src="admin/image/<?php echo $row['image'];?>" alt="Image" class="img-fluid"></div>

</div>
</div>
<h4 class="h5 mb-4 text-black">Description</h4>
<p><?php echo $row['Description']; ?></p>
</div>
<div class="col-lg-3 ml-auto">
<div class="mb-5">
<h3 class="h5 text-black mb-3">Contact Detais </h3>

<div class="form-group">
<div class="select-wrap">
<span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
<select class="form-control" name="" id="">
<option value="" selected readonly> <?php echo $row['mobilenumber']; ?> </option>

</select>
</div>
</div>
<div class="form-group">

<div class="wrap-icon">
<span class="icon icon-room"></span>
<input type="text" placeholder="<?php echo $row['collegeaddress']; ?>" class="form-control" readonly>
</div>
</div>
</form>
</div>
<div class="mb-5">
<p> Email </p>
<p> <?php echo $row['email']; ?>
 <div id="map"></div>
 
</div>

</div>
</div>
</div>
</div>
<div class="site-section bg-light">
<div class="container">
<div class="row mb-5">
<div class="col-md-7 text-left border-primary">
<h2 class="font-weight-light text-primary">Trending College</h2>
</div>
</div>
<div class="row mt-5">

<?PHP
include('database/config.php');
$sql="Select *from tblcollegepost order by id Limit 4";
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
<div class="site-section bg-white">
<div class="container">
<div class="row justify-content-center mb-5">
<div class="col-md-7 text-center border-primary">
<h2 class="font-weight-light text-primary">Testimonials</h2>
</div>
</div>
<div class="slide-one-item home-slider owl-carousel">
<div>
<div class="testimonial">
<figure class="mb-4">
<img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
<p>John Smith</p>
</figure>
<blockquote>
<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
</blockquote>
</div>
</div>
<div>
<div class="testimonial">
<figure class="mb-4">
<img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
<p>Christine Aguilar</p>
</figure>
<blockquote>
<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
</blockquote>
</div>
</div>
<div>
<div class="testimonial">
<figure class="mb-4">
<img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
<p>Robert Spears</p>
</figure>
<blockquote>
<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
</blockquote>
</div>
</div>
<div>
<div class="testimonial">
<figure class="mb-4">
 <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
<p>Bruce Rogers</p>
</figure>
<blockquote>
<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
</blockquote>
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