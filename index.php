<?php
if(isset($_POST['submit'])){
 
$to ='Info@craiginnovationinterior.com';
$subject = 'Newsletter';

$email = $_POST['email'];


$message = <<<EMAIL
Email : $email

EMAIL;
$header ='From: $email';

if ($_POST){
	if( $email == '' ){
$feedback = 'Please Insert First';
}else {
mail($to, $subject, $message, $header);
$feedback ='Thank You';
}
}
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Craig Innovation</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/hover.css" rel="stylesheet">
<link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
  </head>
<style>
input::placeholder {
  color: #fff;
}
</style>
  <body>

    <!-- Navigation -->
    <?php include 'navigation.php' ?>
    <header>
    <div id="carouselExampleIndicators" class="carousel slide hidden-lg hidden-md" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
    
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/Image-17.png')">
            <div class="col-lg-4 col-12 text-center animated fadeIn" style="float:right; background-color: rgba(35,31,32,0.8);  margin-top: 50%;  padding-top:5%; padding-bottom:5%;">
            <div class="col-lg-12 col-12" style="opacity: 40; color:#fff; ">
            <div class=" col-xs-offset-5" style="width:15%;"><img src="img/Image-03.png" width="100%"></div>
              <h4 style="font-size:1.3rem;">Craig Innovation InteriorINC.</h4>
              Great Interior designs - with proffesional work force,makingyour homes,offices look uique.<br><br>
              <a href="contact.php"><div class=" col-8  col-xs-offset-1 hvr-fade5" style="border:#FFF solid;">CONTACT US NOW</div></a>
              </div>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/Image-18.png')">
            <div class="col-lg-4 col-12 text-center animated fadeIn" style="float:right; background-color: rgba(213,183,127,0.8);   margin-top: 50%;  padding-top:5%; padding-bottom:5%;">
            <div class="col-lg-12 col-12" style="opacity: 40; color:#fff; ">
            <div class=" col-xs-offset-5" style="width:15%;"><img src="img/Image-03.png" width="100%"></div>
              <h4 style="font-size:1.3rem;">Craig Innovation InteriorINC.</h4>
              Get the great design that is able to organize your storage partially basedon functionality for Your homes and offices.<br><br>
              <a href="contact.php"><div class=" col-8 col-xs-offset-1 hvr-fade5 " style="border:#FFF solid;">CONTACT US NOW</div></a>
              </div>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/Image-19.png')">
            <div class="col-lg-4 col-12 text-center animated fadeIn" style="float:right; background-color: rgba(172,161,72,0.8);  margin-top: 50%; padding-top:5%;  padding-bottom:5%;">
            <div class="col-lg-12 col-12" style="opacity: 40; color:#fff; ">
            <div class=" col-xs-offset-5" style="width:15%;"><img src="img/Image-03.png" width="100%"></div>
              <h4 style="font-size:1.3rem;">Craig Innovation InteriorINC.</h4>
              Optimize Your homes and offices space. Let's make it comfortable, ultimate, flexible with the best quality result with us.<br><br>
              <a href="contact.php"><div class="col-8  col-xs-offset-1 hvr-fade5" style="border:#FFF solid;">CONTACT US NOW</div></a>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div id="carouselExampleIndicators1" class="carousel slide hidden-xs hidden-sm" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
        </ol>
    
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/Image-04.png')">
            <div class=" text-center animated fadeInRight" style="float:right; background-color: rgba(35,31,32,0.8); width:31%; height: 100%; padding-top: 15%;  ">
            <div class="col-lg-12" style="opacity: 40; color:#fff;">
             <div class=" col-xs-offset-5" style="width:15%; margin-bottom:3%;"><img src="img/Image-03.png" width="100%"></div>
              <h4 style="margin-bottom:3%;">Craig Innovation InteriorINC.</h4>
              Great Interior designs - with proffesional<br>
              work force,makingyour homes,offices<br>
              look uique.<br><br>
             <a href="contact.php"> <div class=" col-lg-8 hvr-fade5 Aileron-SemiBold" style="border:#FFF solid; padding-top:2%; padding-bottom:2%; letter-spacing:1px; font-size:1.1rem;">CONTACT US NOW</div></a>
              </div>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/Image-05.png')">
             <div class=" text-center animated fadeInRight" style="float:right; background-color: rgba(213,183,127,0.8); width:31%; height: 100%; padding-top: 15%;  ">
            <div class="col-lg-12" style="opacity: 40; color:#404041;">
             <div class=" col-xs-offset-5" style="width:15%; margin-bottom:3%;"><img src="img/Image-02.png" width="100%"></div>
               <h4 style="margin-bottom:3%;">Craig Innovation InteriorINC.</h4>
              Get the great design that is able to organize<br>
              Your storage partially basedon functionality<br>
              for Your homes and offices.<br><br>
              <a href="contact.php"><div class=" col-lg-8 hvr-fade4 Aileron-SemiBold" style="border:#404041 solid; padding-top:2%; padding-bottom:2%; letter-spacing:1px; font-size:1.1rem;">CONTACT US NOW</div></a>
              </div>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/Image-06.png')">
             <div class=" text-center animated fadeInRight" style="float:right; background-color: rgba(172,161,72,0.8); width:31%; height: 100%; padding-top: 15%; ">
            <div class="col-lg-12" style="opacity: 40; color:#fff;">
             <div class=" col-xs-offset-5" style="width:15%; margin-bottom:3%;"><img src="img/Image-03.png" width="100%"></div>
            <h4 style="margin-bottom:3%;">Craig Innovation InteriorINC.</h4>
              Optimize Your homes and offices space.<br>
              Let's make it comfortable, ultimate, flexible<br>
              with the best quality result with us.<br><br>
             <a href="contact.php"> <div class=" col-lg-8 hvr-fade5 Aileron-SemiBold text-center" style="border:#fff solid; padding-top:2%; padding-bottom:2%; letter-spacing:1px; font-size:1.1rem;">CONTACT US NOW</div></a>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
     <section class="py-5" style="padding-bottom:0 !important; padding-top:0 !important; margin-bottom:0; border-bottom:#f1f1f1 solid 10px;border-top:#f1f1f1 solid 10px;" >
      
      <div class="col-lg-12">
      <div class="row">
  <div class="col-12 hidden-lg hidden-md " style="margin:0; padding:0;" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim" >
        <img src="img/Image-07.png" width="100%">
</div>   
<div class="col-lg-6 text-left Aileron-Light hidden-xs hidden-sm" style="margin:0; padding-top:5%; padding-left:8%;" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim">

        <h4 class="Aileron-Regular" style="color:#48BD9F; font-size:1.7rem;">OUR PHILOSOPHY</h4>
        <p class="Aileron-SemiBold" style=" font-size:1rem; color:#404041; margin-top: 3%; margin-bottom: 5%;">A MORE PRODUCTIVE LIFE START WITH A STYLE OF<br>OUR DESIGNS.</p>
        <p  style="color:#919090; letter-spacing:1.2px;">We proffesional believe in the power of creativity, <br>
        well planned organizational skills to maximize the <br>
        productive effort of our exceptional service, we bring <br>
        to you excellent designs ever.</p>
        
        <a href="philosophy.php"><p class="btn hvr-fade1 Aileron-SemiBold" style=" color:#fff; margin-top:10%; font-size: 1.1rem; padding: 2% 5%; ">LEARN MORE</p></a>
</div>
<div class="col-12 text-center Aileron-Light hidden-lg hidden-md" style="margin:0; padding:5%; " data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim">

        <h4 class="Aileron-Regular text-left" style="color:#48BD9F; font-size:1.2rem;">OUR PHILOSOPHY</h4>
        <p class="Aileron-Regular text-left" style=" font-size:1rem; color:#404041;">A MORE PRODUCTIVE LIFE START WITH A STYLE OF OUR DESIGNS.</p>
        <p class="text-left" style="color:#919090;">We proffesional believe in the power of creativity, well planned organizational skills to maximize the productive effort of our exceptional service, we bring to you excellent designs ever.</p>
        
         <a href="philosophy.php"><p class="btn hvr-fade1" style=" color:#fff; margin-top:10%; font-size: 1.1rem; padding: 2% 5%;">LEARN MORE</p></a>
</div>
 <div class="col-lg-6 hidden-xs hidden-sm " style="margin:0; padding:0;" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim" >
        <img src="img/Image-07.png" width="100%">
</div>
</div>
      </div>
   
      
      <div class="col-lg-12">
      <div class="row">
      <div class="col-lg-6 " style="margin:0;padding:0;" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim">
        <img src="img/Image-08.png" width="100%">
</div>
<div class="col-lg-6 text-right Aileron-Light hidden-xs hidden-sm" style="margin:0; padding:3%; padding-right: 8%; padding-bottom: 0;  " data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim">
        <h4 class="Aileron-Regular" style="color:#48BD9F; font-size:1.7rem;">OUR PROCESS</h4>
        <p class="Aileron-Regular" style=" font-size:1rem; color:#404041; margin-top: 3%; margin-bottom: 5%;">A MORE PRODUCTIVE LIFE START WITH A STYLE OF<br>OUR DESIGNS.</p>
        <p  style="color:#919090; letter-spacing:1.2px;">it begins with a consultation where we listen to our clients and <br>
        have a great understanding of what is required to achieve our ends.</p>
        <div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2" style="margin-top:10%; margin-bottom: 8%;"><img src="img/icons/Icons-49.png" width="100%"></div>
        <a href="process.php"><p class="btn hvr-fade1" style=" color:#fff; margin-top:10%; font-size: 1.1rem; padding: 2% 5%;">LEARN MORE</p></a>
</div>
<div class="col-12 text-center Aileron-Light hidden-md hidden-lg" style="margin:0; padding:5%;" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim">
        <h4 class="Aileron-Regular text-right" style="color:#48BD9F; font-size:1.2rem;">OUR PROCESS</h4>
        <p class="Aileron-Regular text-right" style=" font-size:1rem; color:#404041;">A MORE PRODUCTIVE LIFE START WITH A STYLE OF OUR DESIGNS.</p>
        <p  class="text-right" style="color:#919090;">it begins with a consultation where we listen to our clients and have a great understanding of what is required to achieve our ends.</p>
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1" style="margin-top:10%; margin-bottom: 10%;"><img src="img/icons/Icons-49.png" width="100%"></div>
        <a href="process.php"><p class="btn hvr-fade1" style=" color:#fff; margin-bottom:20%; margin-top:10%; font-size: 1.1rem; padding: 2% 5%;">LEARN MORE </p></a>
</div>
</div>
      </div>
    </section>
   <section class="py-5" style="padding-top:0 !important; border-bottom:#f1f1f1 solid 10px; background-color:#f4f5f6;">
      
      <div class="col-lg-12" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim">
      <div class="row">
      <div class="col-lg-12 hidden-xs hidden-sm" style="padding:0;">
     <img src="img/Image-10.png" width="100%">
     </div>
     <div class="col-12 hidden-lg hidden-md" style="padding:0;">
     <img src="img/Image M-12.png" width="100%">
     </div>
<div class="col-lg-10 col-lg-offset-1 col-12 text-center Aileron-SemiBold" style="padding:5%;">
<h4 class=" hidden-xs hidden-sm" style="color:#48BD9F; margin-top:5%; font-size:1.7rem; letter-spacing:1.5px;"> SERVICES  EXPLORE YOUR WORLD IMAGINATION DESIGNS</h4>
<p class=" hidden-xs hidden-sm" style="margin-bottom:5%; color:#D3BA53; font-size:1.2rem; ">WE CREATE EXCLUSIVE ORDER AS FOLLOWS</p>
<h4 class=" hidden-md hidden-lg" style="color:#48BD9F; margin-top:5%; font-size:1.2rem;"> SERVICES  EXPLORE YOUR WORLD IMAGINATION DESIGNS</h4>
<p class=" hidden-md hidden-lg" style="margin-bottom:5%; color:#D3BA53; font-size:0.9rem;">WE CREATE EXCLUSIVE ORDER AS FOLLOWS</p>
<div class=" col-md-12 col-lg-12 hidden-xs hidden-sm row" style="padding:0; margin:0;">
<div class="col-lg-6 col-md-6 col-sm-12  text-center" style="padding-left:0; ">
<p style="color:#404041; font-size:1.5rem;">RESIDENTIAL SERVICES</p>
<div class="col-lg-12 text-left Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#E8D994; font-size:1.2rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;"> HOME SPACE PLANNING
</div>
<div class="col-lg-12 text-left Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#E5CF72; font-size:1.2rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;">HOME INTERIOR DESIGN
</div>
<div class="col-lg-12 text-left Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#D5BE5E; font-size:1.2rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;">HOME ORGANIZING
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12  col-sm-offset-0 text-center" style="padding-right:0; ">
<p style="color:#404041; font-size:1.5rem;">COMMERCIAL SERVICES</p>
<div class="col-lg-12 text-left Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#E8D994;font-size:1.2rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;">OFFICE SPACE PLANNING
</div>
<div class="col-lg-12 text-left Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#E5CF72;font-size:1.2rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;">OFFICE INTERIOR DESIGNS
</div>
<div class="col-lg-12 text-left  Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#D5BE5E;font-size:1.2rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;">OFFICE ORGANIZING
</div>
</div>
</div>
<div class=" col-sm-12 col-12 hidden-md hidden-lg row" style="padding:0; margin:0;">
<div class="col-12 col-sm-12  text-center" style="padding:0;">
<p style="color:#404041; font-size:1.2rem;">RESIDENTIAL SERVICES</p>
<div class="col-12 text-left Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#E8D994; font-size:1rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;"> HOME SPACE PLANNING
</div>
<div class="col-12 text-left Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#E5CF72; font-size:1rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;">HOME INTERIOR DESIGN
</div>
<div class="col-12 text-left Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#D5BE5E; font-size:1rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;">HOME ORGANIZING
</div>
</div>
<div class="col-12  col-sm-offset-0 text-center" style="padding:0;">
<p style="color:#404041; font-size:1.2rem;">COMMERCIAL SERVICES</p>
<div class="col-12 text-left Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#E8D994;font-size:1rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;">OFFICE SPACE PLANNING
</div>
<div class="col-12 text-left Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#E5CF72;font-size:1rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;">OFFICE INTERIOR DESIGNS
</div>
<div class="col-12 text-left  Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding-top:4%; padding-bottom:4%; background-color:#D5BE5E;font-size:1rem; letter-spacing:1.5px;">
<img src="img/icons/ceklist.png" width="6%" style="margin-right:5%;">OFFICE ORGANIZING
</div>
</div>
</div>
<div class="col-lg-12 text-center  hidden-xs hidden-sm Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding:5% 8%; background-color:#D3BA53;">
<h4 style="margin-bottom:5%; font-size:1.5rem; letter-spacing:1.5px;">TRY OUR SPECIAL SERVICE WHILE RELOCATIONG</h4>


<p class="Aileron-Light" style="margin-bottom:7%; font-size:1.1rem; letter-spacing:1.2px;">We can relocate your interiors regardless of whether you are in downtown or uptown, our dedicated team of professional can facilitate your entire relocation, making our customers to enjoy a stress free moving, and also we regard maintenance service of every of your products and designs in your home or offices</p>
<p class="btn hvr-fade2" style="font-size:1.1rem; letter-spacing:1.2px;">Learn More</p>
</div>
<div class="col-12 text-center  hidden-lg hidden-md Aileron-Regular" style="color:#fff; margin-top:3%; margin-bottom:3%; padding:5% 8%; background-color:#D3BA53;">
<h4 style="margin-bottom:5%; font-size:1.2rem;">TRY OUR SPECIAL SERVICE WHILE RELOCATIONG</h4>


<p class="Aileron-Light" style="margin-bottom:7%;">We can relocate your interiors regardless of whether you are in downtown or uptown, our dedicated team of professional can facilitate your entire relocation, making our customers to enjoy a stress free moving, and also we regard maintenance service of every of your products and designs in your home or offices</p>
<p class="btn hvr-fade2">Learn More</p>
</div>
</div>
      </div>
      </div>
    </section>
    <section class="col-lg-12 col-sm-12 col-md-12 " style="background-color: transparent; padding:0; border-bottom:#f1f1f1 solid 10px;">

<div class="parallax-window hidden-xs hidden-sm" data-parallax="scroll" data-image-src="img/Image-13.png">
<div class="col-lg-6 col-lg-offset-3 text-center" style="padding-top:5%; padding-bottom:5%;" >
<H4 class="Aileron-SemiBold" style="margin-bottom:5%; color:#48bd9f; font-size:1.7rem;">JOIN OUR NETWORK</H4>
<p class="Aileron-Light" style="color:#fff; letter-spacing:1.2px;">We are always expanding business connections in any industry.
Whether in the brokerage business, developer, contractor, hospitality care,
creative and technology, and other business sectors. We would like to hear, discuss,
listen to the various projects we can do together in a professional work environment!</p>
<p class="btn hvr-fade1" style="margin-top:5%; ">CONTACT US</p>
<form action="" method="post" name="mail"> <span class="Aileron-SemiBold" style="margin-bottom:5%; color:#48bd9f;">JOIN OUR NEWSLETTER</span> <input name="email" type="text" style="width:50%; margin:5% 2%; border:#fff thin solid; color:#fff; background-color:transparent; padding-left:1%;" placeholder="Enter Your E-mail"><input class="hvr-fade3" name="submit" type="submit" style=" color:#fff; border:none; padding:0.5% 2%;" value="JOIN US"></form>
</div>
  </div>
  
  <div class="parallax-window1 hidden-lg hidden-md" data-parallax="scroll" data-image-src="img/Image-26.png">
<div class="col-lg-6 col-lg-offset-3 col-12 text-left" style=" padding:10% 8%; " >
<H4 class="Aileron-SemiBold text-center" style="margin-bottom:5%; color:#48bd9f; font-size:1.2rem;">JOIN OUR NETWORK</H4>
<p class=" Aileron-Light text-center" style="color:#fff; letter-spacing:1.2px;">We are always expanding business connections in any industry.
Whether in the brokerage business, developer, contractor, hospitality care,
creative and technology, and other business ectors. We would like to hear, discuss,
listen to the various projects we can do together in a professional work environment!</p>
<a href="contact.php"><p class="btn hvr-fade1" style="margin-top:5%; margin-left:35%; margin-bottom:20%; ">CONTACT US</p></a>
<form action="" method="post" name="mail1"> <span class="Aileron-SemiBold " style="margin-bottom:5%; color:#48bd9f;">JOIN OUR NEWSLETTER</span> <input name="email" type="text" class="input-group" style=" margin:5% 0; border:#fff thin solid; color:#fff; background-color:transparent; padding-left:1%;" placeholder="Enter Your E-mail"><input  name="submit"  value="JOIN US" class="text-left hvr-fade3" type="submit" style=" color:#fff; border:none; margin-bottom:5%; padding:0.5% 2%;"></form>
</div>
  </div>
    </section>
<section class="col-lg-12 col-sm-12 col-md-12" style="background-color: transparent; padding:0;  border-bottom:#f1f1f1 solid 10px;">
<div class="col-lg-10 col-lg-offset-1 text-center Aileron-Regular" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim">
<h4 class="hidden-lg hidden-md Aileron-Regular" style="color:#48BD9F; font-size:1.2rem; margin-top:20%; ">CONSULT WITH US</h4>
<p class="hidden-lg hidden-md Aileron-SemiBold" style="margin-bottom:3%; font-size:0.9rem; color:#D3BA53;">WE PROVIDE A FRIENDLY, CONSIDERATE <br>AND PLEASANT CONSULTATION EXPERIENCE.</p>
<div class="col-lg-10 col-lg-offset-1 hidden-xs hidden-sm" style="margin-bottom:5%; margin-top:5%;"><img src="img/Image-12.png" width="100%"></div>
<div class="col-12 hidden-lg hidden-md" style="margin-bottom:5%; margin-top:5%;"><img src="img/Image M-14.png" width="100%"></div>
<div class="col-lg-9 hidden-xs hidden-sm" style="margin-left: 12.5%;">
<h4 class=" Aileron-Regular" style="color:#48BD9F; font-size:1.7rem;">CONSULT WITH US</h4>
<p class=" Aileron-regular" style="margin-bottom:3%; font-size:1.2rem; color:#D3BA53;">WE PROVIDE A FRIENDLY, CONSIDERATE AND PLEASANT CONSULTATION EXPERIENCE</p>
<p class="Aileron-Regular hidden-xs hidden-sm" style="color:#919090; font-size:1rem; line-height: 30px;"> It all starts from our experts listening to your wishes for a beautiful home anda charming office space. Well organie andd arranged room will make your mood happy. Undoubtedly, you will love it more and stay in it for long. We are readyto listen then realize your dream home and office with the great satisfication for you.</p></div>
 <div class="col-12 hidden-lg hidden-md" style="margin-bottom:20%; padding-left:5%; padding-right:5%;">
 <p class="Aileron-regular " style="color:#919090; font-size:1rem;"> It all starts from our experts listening to your wishes for a beautiful home anda charming office space.
 Well organie andd arranged room will make your mood happy. Undoubtedly, you will love it more and tay in it for long. We are readyto listen then realize your dream home and office with the great satisfication for you.</p>
<p class="btn Aileron-Regular hvr-fade1" style="margin-top:10%;  font-size:1rem;">CONSULT WITH US</p>
</div>
<p class="btn Aileron-Regular hvr-fade1 hidden-xs hidden-sm" style="margin-top:5%; margin-bottom:5%;  font-size:1rem;">CONSULT WITH US</p>
</div>
    </section>
<?php include 'footer.php' ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/anijs-min.js"></script>
   <script src="js/anijs-helper-scrollreveal-min.js"></script>
<script type="text/javascript">
$('.parallax-window').parallax({imageSrc: 'img/Image-13.png'});
$('.parallax-window1').parallax({imageSrc: 'img/Image-26.png'});
</script>
  </body>

</html>
