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
   
    <section class="py-5" style="border-bottom:#f1f1f1 solid 10px; ">
      
      <div class="col-lg-12 " style="margin-top:3%;">
      <div class="row text-center">
      <div class="col-lg-12" style="padding:0;">
      <img src="img/Image M-21.png" width="100%" class="hidden-xs hidden-sm">
            <img src="img/Image-14.png" width="100%" class="hidden-md hidden-lg">
      </div>
     <div class="col-lg-12 text-center Aileron-Light hidden-xs hidden-sm" style="margin-top:5%;">
     <h4 class="Aileron-Regular" style="color:#48bd9f; font-size:1.7rem;">OUR VISION AND MISSION</h4>
     <h4 class="Aileron-SemiBold" style="font-size:1.2rem;">A MORE PRODUCTIVE LIFE AND START WITH A STYLE OF</h4>
     <h4 class="Aileron-SemiBold" style="font-size:1.2rem; margin-bottom:5%;">OUR DESIGNS.</h4>
     <P style="font-size:1rem; color:#f1b53f;"> OUR MISSION </P>
     <p style="color:#6d6e70;">We are in the interior design business to provide our customers and consumers our innovative and creative design development</p>
     <p style="color:#6d6e70;"> 
to bring out the best looks in their homes and offices in United States America and around the world.</p>
     <P style="font-size:1rem; color:#f1b53f; margin-top:5%;"> OUR VISION </P>
     <p style="color:#6d6e70;">We are out to build a creative and strong innovative network of interior designs ever</P>
     <p style="color:#6d6e70; margin-bottom:5%;">
that will stand a test of time in the world.</p>
  

<P class="btn Cabin-Bold hvr-fade1">CONTACT NOW </P>
</div>     
     <div class="col-lg-12 text-center Aileron-Light hidden-lg hidden-md" style="margin-top:5%; padding:5%;">
     <h4 class="Aileron-Regular text-left" style="color:#48bd9f; font-size:1.2rem">OUR VISION AND MISSION</h3>
     <h4 class="Aileron-SemiBold text-left" style="font-size:1.1rem; margin-bottom:5%;">A MORE PRODUCTIVE LIFE AND START WITH A STYLE OF OUR DESIGNS.</h4>
     <P class="Aileron-SemiBold text-left" style="font-size:1rem; color:#f1b53f;"> OUR MISSION </P>
     <p class="text-left" style="color:#6d6e70;">We are in the interior design business to provide our customers and consumers our innovative and creative design development 
to bring out the best looks in their homes and offices in United States America and around the world.</p>
     <P class="Aileron-SemiBold text-left" style="font-size:1rem; color:#f1b53f; margin-top:5%;"> OUR VISION </P>
     <p class="text-left" style="color:#6d6e70;">We are out to build a creative and strong innovative network of interior designs ever
that will stand a test of time in the world.</p>
  

<P class="btn Cabin-Bold hvr-fade1">CONTACT NOW </P>
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
<p class="btn hvr-fade1" style="margin-top:5%; margin-left:35%; margin-bottom:20%; ">CONTACT US</p>
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
<div class="col-lg-9" style="margin-left: 12.5%; ">
<h4 class="hidden-xs hidden-sm Aileron-Regular" style="color:#48BD9F; font-size:1.7rem;">CONSULT WITH US</h4>
<p class="hidden-xs hidden-sm Aileron-regular" style="margin-bottom:3%; font-size::1.2rem; color:#D3BA53;">WE PROVIDE A FRIENDLY, CONSIDERATE AND PLEASANT CONSULTATION EXPERIENCE</p>
<p class="Aileron-Regular hidden-xs hidden-sm" style="color:#919090; font-size:1rem; line-height: 30px;"> It all starts from our experts listening to your wishes for a beautiful home anda charming office space. Well organie andd arranged room will make your mood happy. Undoubtedly, you will love it more and stay in it for long. We are readyto listen then realize your dream home and office with the great satisfication for you.</p>
</div>
 <div class="col-12 hidden-lg hidden-md" style="margin-bottom:20%; padding-left:5%; padding-right:5%;">
 <p class="Aileron-Regular " style="color:#919090; font-size:1rem;"> It all starts from our experts listening to your wishes for a beautiful home anda charming office space.
 Well organie andd arranged room will make your mood happy. Undoubtedly, you will love it more and tay in it for long. We are readyto listen then realize your dream home and office with the great satisfication for you.</p>
<p class="btn Aileron-Regular hvr-fade1" style="margin-top:10%;  font-size:1rem;">CONSULT WITH US</p>
</div>
<p class="btn Aileron-Regular hvr-fade1 hidden-xs hidden-sm" style="margin-top:5%; margin-bottom:5%;  font-size:1rem;">CONSULT WITH US</p>
</div>
    </section>
      
    <!-- Footer -->
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
