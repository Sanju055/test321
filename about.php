
<?php include('include/toppart.php');
include('include/navbar.php');?>
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bg.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center justify-content-center text-center">
<div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
<div class="row justify-content-center mt-5">
<div class="col-md-8 text-center">
<h1>About Us</h1>
<p class="mb-0">A World Class Classified Company</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="site-section" data-aos="fade">

<div class="container">
<div class="row mb-12">
<div class="col-md-12 ml-auto">
<?php
include('database/config.php');
$sql="Select *from tblarticle WHERE articletype ='introduction'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result)
 ?>
<p> <?php echo $row['details']; ?></p>

?>
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
<footer class="site-footer">
<div class="container">
<div class="row">
<div class="col-md-9">
<div class="row">
<div class="col-md-6">
<h2 class="footer-heading mb-4">About</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rerum unde possimus molestias dolorem fuga, illo quis fugiat!</p>
</div>
<div class="col-md-3">
<h2 class="footer-heading mb-4">Navigations</h2>
<ul class="list-unstyled">
<li><a href="#">About Us</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Testimonials</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>
<div class="col-md-3">
<h2 class="footer-heading mb-4">Follow Us</h2>
<a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
<a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
<a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
<a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
</div>
</div>
</div>
<div class="col-md-3">
<form action="#" method="post">
<div class="input-group mb-3">
<input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Search products..." aria-label="Enter Email" aria-describedby="button-addon2">
<div class="input-group-append">
<button class="btn btn-primary text-white" type="button" id="button-addon2">Search</button>
</div>
</div>
</form>
</div>
</div>
<div class="row pt-5 mt-5 text-center">
<div class="col-md-12">
<div class="border-top pt-5">
<p>
  
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

</p>
</div>
</div>
</div>
</div>
</footer>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/rangeslider.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>