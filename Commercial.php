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
   
    <section class="py-5" style="border-bottom:#f1f1f1 solid 10px;">
      
      <div class="col-lg-12 " style="margin-top:3%;">
      <div class="row text-center">
       <div class="col-lg-12" style=" padding:0;" >
       <img src="img/Image M-25.png" width="100%" style="margin-bottom:5%;" class="hidden-xs hidden-sm">
      
      <img src="img/Image M-26.png" width="100%" style="margin-bottom:5%;" class="hidden-md hidden-lg"></div>
     <div class="col-lg-9 hidden-xs hidden-sm" style="margin-left: 12.5%;">
      <h4 class="Aileron-Regular" style="color:#48BD9F; font-size:1.3rem;">COMMERCIAL SERVICE</h4>
        <h4 class="Aileron-SemiBold" style=" font-size:1.1rem; margin-top:3%; margin-bottom:3%;">WHERE CREATING ORDER IS JUST THE BEGINNING</h4>
        
        <p class="Aileron-SemiBold" style="color:#6D6E70; line-height: 30px;">OFFICE AND SPACE PLANNING </p><p  style="color:#919090; font-size:1rem;">
We provide professional customized organizing solutions to help you increase productivity and gain a better sense of control in your environment.
Given that we are focused on tailoring solutions to be precisely what you need (and then some…), we don’t box ourselves in with a prescribed set of services.
We work in residential spaces of all sizes, ranging from micro-suites to mansions. Whether you are looking for the closet of your dreams,
preparing for a move, or a beautifully organized digital empire of all your electronic files, rest assured that we’ve got you covered.</p><br><br>
 

<p class="Aileron-SemiBold" style="color:#6D6E70;">OFFICE INTERIOR DESIGNS </p>
<p  style="color:#919090; font-size:1rem;">We create workplaces that work well and look great.
We do this by incorporating the key elements of interior design, including finishes, color schemes, fittings, fixtures and furnishings,
while focusing on the practicality and usability of these elements within your spaces. We understand different workplaces have
different needs and we committed to making each special space, work well and look great. Steve Jobs said it best…</p><br><br>
<h4 class="Aileron-Regular" style="color:#48BD9F; font-size:1.3rem;">"DESIGN IS NOT JUST WHAT IT LOOKS LIKE AND FEELS LIKE. DESIGN IS HOW IT WORKS."</h4><br><br>
<p  style="color:#919090;">Operating a home-based business, a retail shop or corporate environment? Don’t worry, we do them all.
Our process is tried, tested and true and will have your space not only looking better but functioning better.
Ready to get started? Give us a call.</p><br><br>


<p class="Aileron-SemiBold" style="color:#6D6E70;">OFFICE AND COMMERCIAL ORGANIZING</p> 
<p  style="color:#919090; font-size:1rem;">We provide professional customized organizing solutions to help you and your team increase productivity and efficiency in the workplace.
Given that we are focused on tailoring solutions to be precisely what your workplace needs (and then some…),  we don’t box ourselves in with
a prescribed set of services. Instead we focus on exceeding targets and giving your workplace the efficiency boost it needs.
We work in commercial environments of all sizes, ranging from home-based operations to large, corporate spaces.
Whether your workplace could benefit from the storage room of your dream, well-executed hard-copy file management systems,
or a beautifully organized digital empire of all your electronic files, proceed confidently with Craig innovation interior Inc. ™ as we’ve got you covered.</p><br><br>


<p class="Aileron-SemiBold" style="color:#D3BA53; font-size:1.1rem;">TRY OUT OUR RIGHT SIZE RELOCATION SERVICES </p>
<p  style="color:#919090; font-size:1rem;">Are you planning for an upcoming move but would rather be spending your time doing something else?</p><br><br>
 

<p  style="color:#6D6E70;">LET US HELP YOU!</p>
 <p  style="color:#919090; font-size:1rem;">We are move management experts and provide national coverage on all your relocation needs! Regardless of whether you’re downsizing,
upsizing or rightsizing, our dedicated team of Professional Organizers and movers can facilitate your entire relocation,
making the process simple, stress-free and rewarding!</p><br><br>
<div class="col-lg-12 text-left" style=" background-color:#94D2BC; padding:2% 10%; margin-bottom:3%;"><p class="Aileron-SemiBold"  style="color:#58585B; font-size:1.2rem;">PROFESSIONAL ORGANIZING</p>
<p style="color:#fff; font-size:1rem;">Comprehensive, hands-on professional organizing of your belongings, helping you make decisions on keeping
the items you need and want and disposing of things that won’t work in your new space. This ensures you are
not moving things that don’t serve you!</p>
</div>

<div class="col-lg-12 text-left" style=" background-color:#7AC9AE; padding:2% 10%; margin-bottom:3%;"><p class="Aileron-SemiBold" style="color:#58585B; font-size:1.2rem;">SAVVY SPACE PLANNING & STAGING</p>
<p style="color:#fff; font-size:1rem;">Smart space-planning and staging of your current residence to get your property to sell/lease for top dollar!</p>
</div>
<div class="col-lg-12 text-left" style=" background-color:#5DC1A4; padding:2% 10%; margin-bottom:3%;"><p class="Aileron-SemiBold" style="color:#58585B; font-size:1.2rem;">UTILITY SUPPORT</p>
<p style="color:#fff; font-size:1rem;">Proactive support in cancelling/switching utilities, phone numbers and other home services unique to your
living arrangements!</p>
</div>
<div class="col-lg-12 text-left" style=" background-color:#48BD9F; padding:2% 10%; margin-bottom:3%;"><p class="Aileron-SemiBold" style="color:#58585B; font-size:1.2rem;">FULL HOME PACKING</p>
<p style="color:#fff; font-size:1rem;">Full-home packing service facilitated with utmost respect of your treasured belongings because we treat
your possessions as if they are our own! Your packing can commence while organizing, or just prior to
your move – whichever you prefer!</p>
</div>
<div class="col-lg-12 text-left" style=" background-color:#3DAE8E; padding:2% 10%; margin-bottom:3%;"><p class="Aileron-SemiBold" style="color:#58585B; font-size:1.2rem;">UNPACKING & SETTLING IN SERVICE </p>
<p style="color:#fff; font-size:1rem;">Right size settling in service offers a complete unpacking and professional organizing service at destination.
The service ensures your belongings, from furniture to cutlery, are logically placed in your new home for
optimum functionality, making sure your new space works for you.</p>
</div>
      </div>
     <div class="col-12  hidden-lg hidden-md text-left" style="padding:5%;">
      <h4 class="Aileron-Regular" style="color:#48BD9F;font-size:1.2rem;">COMMERCIAL SERVICE</h4>
        <h4 class="Aileron-SemiBold" style=" font-size:0.9rem; margin-top:3%; margin-bottom:3%;">WHERE CREATING ORDER IS JUST THE BEGINNING</h4><br><br>
        
         <p class="Aileron-SemiBold"  style="color:#6D6E70;">OFFICE AND SPACE PLANNING </p>
         <p  style="color:#919090; font-size:1rem; ">
We provide professional customized organizing solutions to help you increase productivity and gain a better sense of control in your environment.
Given that we are focused on tailoring solutions to be precisely what you need (and then some…), we don’t box ourselves in with a prescribed set of services.
We work in residential spaces of all sizes, ranging from micro-suites to mansions. Whether you are looking for the closet of your dreams,
preparing for a move, or a beautifully organized digital empire of all your electronic files, rest assured that we’ve got you covered.</p><br><br>
 

<p class="Aileron-SemiBold" style="color:#6D6E70;">OFFICE INTERIOR DESIGNS </p>
<p  style="color:#919090; font-size:1rem;">We create workplaces that work well and look great.
We do this by incorporating the key elements of interior design, including finishes, color schemes, fittings, fixtures and furnishings,
while focusing on the practicality and usability of these elements within your spaces. We understand different workplaces have
different needs and we committed to making each special space, work well and look great. Steve Jobs said it best…</p><br><br>
<h4 class="Aileron-Regular text-center" style="color:#48BD9F; font-size:1.2rem;">"DESIGN IS NOT JUST WHAT IT LOOKS LIKE AND FEELS LIKE. DESIGN IS HOW IT WORKS."</h4><br><br>
<p  style="color:#919090; font-size:1rem;">Operating a home-based business, a retail shop or corporate environment? Don’t worry, we do them all.
Our process is tried, tested and true and will have your space not only looking better but functioning better.
Ready to get started? Give us a call.</p><br><br>


<p class="Aileron-SemiBold" style="color:#6D6E70;">OFFICE AND COMMERCIAL ORGANIZING</p> 
<p  style="color:#919090; font-size:1rem;">We provide professional customized organizing solutions to help you and your team increase productivity and efficiency in the workplace.
Given that we are focused on tailoring solutions to be precisely what your workplace needs (and then some…),  we don’t box ourselves in with
a prescribed set of services. Instead we focus on exceeding targets and giving your workplace the efficiency boost it needs.
We work in commercial environments of all sizes, ranging from home-based operations to large, corporate spaces.
Whether your workplace could benefit from the storage room of your dream, well-executed hard-copy file management systems,
or a beautifully organized digital empire of all your electronic files, proceed confidently with Craig innovation interior Inc. ™ as we’ve got you covered.</p><br><br>


<p class="Aileron-SemiBold"  style="color:#D3BA53; font-size:1.1rem;">TRY OUT OUR RIGHT SIZE RELOCATION SERVICES </p>
<p  style="color:#919090; font-size:1rem;">Are you planning for an upcoming move but would rather be spending your time doing something else?</p><br><br>
 

<p class="Aileron-SemiBold" style="color:#919090;">LET US HELP YOU!</p>
 <p  style="color:#919090; font-size:1rem;">We are move management experts and provide national coverage on all your relocation needs! Regardless of whether you’re downsizing,
upsizing or rightsizing, our dedicated team of Professional Organizers and movers can facilitate your entire relocation,
making the process simple, stress-free and rewarding!</p><br><br>
<div class="col-12 text-left" style=" background-color:#94D2BC; padding:5% 3%; margin-bottom:5%; "><p class="Aileron-SemiBold" style="color:#58585B; font-size:1.2rem;">PROFESSIONAL ORGANIZING</p>
<p style="color:#fff; font-size:1rem;">Comprehensive, hands-on professional organizing of your belongings, helping you make decisions on keeping
the items you need and want and disposing of things that won’t work in your new space. This ensures you are
not moving things that don’t serve you!</p>
</div>

<div class="col-12 text-left" style=" background-color:#7AC9AE; padding:5% 3%; margin-bottom:5%;"><p class="Aileron-SemiBold" style="color:#58585B; font-size:1.2rem;">SAVVY SPACE PLANNING & STAGING</p>
<p style="color:#fff; font-size:1rem;">Smart space-planning and staging of your current residence to get your property to sell/lease for top dollar!</p>
</div>
<div class="col-12 text-left" style=" background-color:#5DC1A4; padding:5% 3%; margin-bottom:5%;"><p class="Aileron-SemiBold" style="color:#58585B; font-size:1.2rem;">UTILITY SUPPORT</p>
<p style="color:#fff; font-size:1rem;">Proactive support in cancelling/switching utilities, phone numbers and other home services unique to your
living arrangements!</p>
</div>
<div class="col-12 text-left" style=" background-color:#48BD9F; padding:5% 3%; margin-bottom:5%;"><p class="Aileron-SemiBold" style="color:#58585B; font-size:1.2rem;">FULL HOME PACKING</p>
<p style="color:#fff; font-size:1rem;">Full-home packing service facilitated with utmost respect of your treasured belongings because we treat
your possessions as if they are our own! Your packing can commence while organizing, or just prior to
your move – whichever you prefer!</p>
</div>
<div class="col-12 text-left" style=" background-color:#3DAE8E; padding:5% 3%; margin-bottom:5%;"><p class="Aileron-SemiBold" style="color:#58585B; font-size:1.2rem;">UNPACKING & SETTLING IN SERVICE </p>
<p style="color:#fff; font-size:1rem;">Right size settling in service offers a complete unpacking and professional organizing service at destination.
The service ensures your belongings, from furniture to cutlery, are logically placed in your new home for
optimum functionality, making sure your new space works for you.</p>
</div>
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
