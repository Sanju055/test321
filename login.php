
<?php include('include/toppart.php');?>
<!-- // navbar -->
<div class="site-wrap">
<div class="site-mobile-menu">
<div class="site-mobile-menu-header">
<div class="site-mobile-menu-close mt-3">
<span class="icon-close2 js-menu-toggle"></span>
</div>
</div>
<div class="site-mobile-menu-body"></div>
</div>
<header class="site-navbar container py-0 bg-white" role="banner">

<div class="row align-items-center">
<div class="col-6 col-xl-2">
<h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">Kun<span class="text-primary">&nbsp;Collage</span> </a></h1>
</div>
<div class="col-12 col-md-10 d-none d-xl-block">
<nav class="site-navigation position-relative text-right" role="navigation">
<ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
<li class="active"><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li class="has-children">
<a href="#">Faculty</a>
<ul class="dropdown">
<li><a href="#"> Engineering</a></li>
<li><a href="#"> Medical</a></li>
<li><a href="#"> Information Technology </a></li>
<li><a href="#">Hospitality</a></li>
<li><a href="#"> Medical</a></li>
<li><a href="#"> Information Technology </a></li>
<li><a href="#">Hospitality</a></li>
<li><a href="#"> Medical</a></li>
<li><a href="#"> Information Technology </a></li>
<li><a href="#">Hospitality</a></li>
</ul>
</li>
<li><a href="blog.php">Blog</a></li>
<li><a href="contact.php">Contact</a></li>

<li class="ml-xl-3 login"><a href="login.php"><span class="border-left pl-xl-4"></span>Log In</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="#" class="cta"><span class="bg-primary text-white rounded">+  ADD Collage</span></a></li>
</ul>
</nav>
</div>
<div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
<a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
</div>
</div>

</header>
<!-- // end navbar -->
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bg.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center justify-content-center text-center">
<div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
<div class="row justify-content-center mt-5">
<div class="col-md-8 text-center">
<h1>Log In</h1>
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
<form action="loginprocess.php"  method="POST" class="p-5 bg-white">
<div class="row form-group">
<div class="col-md-12">
<label class="text-black" for="email">Email</label>
<input type="email" name="email" class="form-control" required>
</div>
</div>
<div class="row form-group">
<div class="col-md-12">
<label class="text-black" for="subject">Password</label>
<input type="password" name="password" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-12">
<p>No account yet? <a href="register.html">Register</a></p>
</div>
</div>
<div class="row form-group">
<div class="col-md-12">
<input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
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