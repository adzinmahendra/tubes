<!DOCTYPE html>
<html lang="en">
  <head>
    <title>D-Farmer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/icons/favicon.ico"/>

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">022 75991187</span>
					    </div>
					    <!-- <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div> -->
					    <div class="col-md-5 pr-4 d-flex topper align-items-end text-lg-right align-self-end">
                            <!-- <span class="text">3-5 Business days delivery &amp; Free Returns</span> -->
                            <?php
                                if($this->session->userdata('status') != "login"){
                                    // redirect(base_url("login"));
                            ?>
                            <span class="text"><a href="<?= base_url()?>index.php/User/Login" class="btn btn-outline-light">Login<a></span>
                            <?php
                                }
                            ?>
                            <?php
                                if($this->session->userdata('status') == "login"){
                                    // redirect(base_url("login"));
                            ?>
                            <span class="text"><a href="<?= base_url()?>index.php/User/Logout" class="btn btn-danger">Logout<a></span>
                            <?php
                                }
                            ?>

                            <!-- <span class="text"><a href="" class="btn btn-outline-danger">Logout<a></span> -->
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?= base_url()?>">D-Farmer</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?= base_url()?>index.php/Shop">Shop</a>
              	<a class="dropdown-item" href="<?= base_url()?>index.php/Shop/Wishlist">Wishlist</a>
                <a class="dropdown-item" href="<?= base_url()?>index.php/Shop/Wishlist">Single Product</a>
                <a class="dropdown-item" href="<?= base_url()?>index.php/Shop/Cart">Cart</a>
                <a class="dropdown-item" href="<?= base_url()?>index.php/Shop/Checkout">Checkout</a>
                <a class="dropdown-item" href="<?= base_url()?>index.php/Shop/Category">Category</a>
              </div>
            </li>
	          <li class="nav-item"><a href="<?= base_url()?>index.php/Welcome/About" class="nav-link">About</a></li>
	          <!-- <li class="nav-item"><a href="<?= base_url()?>index.php/blog" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="<?= base_url()?>index.php/Shop/Saran" class="nav-link">Contact/Advisory</a></li>
	          <li class="nav-item cta cta-colored"><a href="<?= base_url()?>index.php/shop/cart" class="nav-link"><span class="icon-shopping_cart"></span>[<?= $this->M_All->count('cart')?>]</a></li>
              <!-- <li class="nav-item"><a href="contact.html" class="nav-link">Login</a></li> -->
	        </ul>
	      </div>
	    </div>
	  </nav>
