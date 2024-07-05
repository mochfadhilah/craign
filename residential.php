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
<link href="css/fade1.css" rel="stylesheet">
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
       <div class="col-lg-12" style=" padding:0;" >
       <img src="img/Image M-23.png" width="100%" style="margin-bottom:5%;" class="hidden-xs hidden-sm">
      
      <img src="img/Image M-24.png" width="100%" style="margin-bottom:5%;" class="hidden-md hidden-lg"></div>
     <div class="col-lg-9 hidden-xs hidden-sm" style="margin-left:12.5%;">
      <h4 class="Aileron-Regular" style="color:#48BD9F;font-size:1.7rem;">RESIDENTIAL SERVICE</h4>
        <h4 class="Aileron-SemiBold" style=" font-size:1.1rem; margin-top:3%; margin-bottom:3%;">WHERE CREATING ORDER IS JUST THE BEGINNING</h4>
        
        <p class="Aileron-SemiBold" style="color:#6D6E70;">HOME SPACE PLANNING</p>
        <p  style="color:#919090; line-height: 30px;">

Are you feeling like your home could have improved flow, or that your square footage could be better utilized?
Alternatively, maybe you are building a new home or doing renovations and want to ensure appropriate layout for the new spaces?
If so, our tailored space planning service may be just what you need to improve efficiency and get the most out of your space.
We plan out all types of environments, ranging from micro-suites to mansions. We assess your space and jump into action to get
your environment to a place that supports efficient movement while optimizing its valued square footage.
CRAIG INNOVATION INTERIOR INC™ understands how precious your space is and trust us, we make the most of it.</p><br><br>
 

<p class="Aileron-SemiBold" style="color:#6D6E70;">HOME INTERIOR DESIGNS</p>
<p  style="color:#919090;">We create environments that work well and look great.
We do this by incorporating the key elements of interior design, including finishes, color schemes, fittings,
fixtures and furnishings, while focusing on the practicality and usability of these elements within your home.
Steve Jobs said it best…</p><br><br>
<h4 class="Aileron-Regular" style="color:#48BD9F; font-size:1.3rem;">"DESIGN IS NOT JUST WHAT IT LOOKS LIKE AND FEELS LIKE.
DESIGN IS HOW IT WORKS."</h4><br><br>
<p  style="color:#919090;">Living in a condo, townhome, or multi-million dollar estate? Don’t worry, we do them all.
We understand different residences have different needs and we committed to making each special space, work well and look great.</p><br><br>


<p class="Aileron-SemiBold" style="color:#6D6E70;">HOME ORGANIZING</p> 
<p  style="color:#919090;">We provide professional customized organizing solutions to help you increase productivity and gain a better sense of control in your environment.
Given that we are focused on tailoring solutions to be precisely what you need (and then some…), we don’t box ourselves in with a prescribed set of services.
We work in residential spaces of all sizes, ranging from micro-suites to mansions. Whether you are looking for the closet of your dreams,
preparing for a move, or a beautifully organized digital empire of all your electronic files,
rest assured that we’ve got you covered.</p><br><br>


<p  style="color:#D3BA53; font-size:1.1rem;">THE JOURNEY TO A MORE PRODUCTIVE LIFE STARTS WITH US.</p>
<p  style="color:#919090;">Whether you are preparing your home for sale, redesigning your commercial space or looking to get the most of your valued
square footage, we are your resource. We understand the importance of time, so let us help you make the most of yours.
You’ll be happy you did.</p><br><br>
 
<p class="btn hvr-fade1" style="margin-top:5%; ">CONTACT US NOW</p>
      </div>
     <div class="col-12  hidden-lg hidden-md text-center" style="padding:5%;">
      <h4 class="Aileron-Regular text-left" style="color:#48BD9F; font-size:1.2rem;">RESIDENTIAL SERVICE</h4>
        <h4 class="Aileron-SemiBold text-left" style=" font-size:1.1rem; margin-top:3%; margin-bottom:3%;">WHERE CREATING ORDER IS JUST THE BEGINNING</h4>
        
        <p class="Aileron-SemiBold  text-left" style="color:#6D6E70;">HOME SPACE PLANNING</p>
        <p class=" text-left" style="color:#919090;">

Are you feeling like your home could have improved flow, or that your square footage could be better utilized?
Alternatively, maybe you are building a new home or doing renovations and want to ensure appropriate layout for the new spaces?
If so, our tailored space planning service may be just what you need to improve efficiency and get the most out of your space.
We plan out all types of environments, ranging from micro-suites to mansions. We assess your space and jump into action to get
your environment to a place that supports efficient movement while optimizing its valued square footage.
CRAIG INNOVATION INTERIOR INC™ understands how precious your space is and trust us, we make the most of it.</p><br><br>
 

<p class="Aileron-SemiBold text-left" style="color:#6D6E70;">HOME INTERIOR DESIGNS</p>
<p class=" text-left" style="color:#919090;">We create environments that work well and look great.
We do this by incorporating the key elements of interior design, including finishes, color schemes, fittings,
fixtures and furnishings, while focusing on the practicality and usability of these elements within your home.
Steve Jobs said it best…</p><br><br>
<h4 class="Aileron-Regular" style="color:#48BD9F;font-size:1.2rem;">"DESIGN IS NOT JUST WHAT IT LOOKS LIKE AND FEELS LIKE.
DESIGN IS HOW IT WORKS."</h4><br><br>
<p class=" text-left" style="color:#919090;">Living in a condo, townhome, or multi-million dollar estate? Don’t worry, we do them all.
We understand different residences have different needs and we committed to making each special space, work well and look great.</p><br><br>


<p class="Aileron-SemiBold text-left" style="color:#6D6E70;">HOME ORGANIZING</p> 
<p class=" text-left" style="color:#919090;">We provide professional customized organizing solutions to help you increase productivity and gain a better sense of control in your environment.
Given that we are focused on tailoring solutions to be precisely what you need (and then some…), we don’t box ourselves in with a prescribed set of services.
We work in residential spaces of all sizes, ranging from micro-suites to mansions. Whether you are looking for the closet of your dreams,
preparing for a move, or a beautifully organized digital empire of all your electronic files,
rest assured that we’ve got you covered.</p><br><br>


<p  style="color:#D3BA53; font-size:1.1rem;">THE JOURNEY TO A MORE PRODUCTIVE LIFE STARTS WITH US.</p>
<p class=" text-left" style="color:#919090;">Whether you are preparing your home for sale, redesigning your commercial space or looking to get the most of your valued
square footage, we are your resource. We understand the importance of time, so let us help you make the most of yours.
You’ll be happy you did.</p><br><br>
 
<p class="btn hvr-fade1" style="margin-top:5%; ">CONTACT US NOW</p>
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
<div class="col-lg-9 hidden-xs hidden-sm" style="margin-left: 12.5%;">
<h4 class=" Aileron-Regular" style="color:#48BD9F; font-size:1.7rem;">CONSULT WITH US</h4>
<p class=" Aileron-regular" style="margin-bottom:3%; font-size::1.2rem; color:#D3BA53;">WE PROVIDE A FRIENDLY, CONSIDERATE AND PLEASANT CONSULTATION EXPERIENCE</p>
<p class="Aileron-Regular hidden-xs hidden-sm" style="color:#919090; font-size:1rem; line-height: 30px;"> It all starts from our experts listening to your wishes for a beautiful home anda charming office space. Well organie andd arranged room will make your mood happy. Undoubtedly, you will love it more and stay in it for long. We are readyto listen then realize your dream home and office with the great satisfication for you.</p></div>
 <div class="col-12 hidden-lg hidden-md" style="margin-bottom:20%; padding-left:5%; padding-right:5%;">
 <p class="Aileron-regular " style="color:#919090; font-size:1rem;"> It all starts from our experts listening to your wishes for a beautiful home anda charming office space.
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
