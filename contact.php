<?php
if(isset($_POST['submit'])){
 
$to ='Info@craiginnovationinterior.com';
$subject = 'Contact Us';
$name = $_POST['yname'];
$email = $_POST['yemail'];
$pesan = $_POST['ymessage'];

$message = <<<EMAIL
Full Name : $name

Message : $pesan
EMAIL;
$header ='From: $email';

if ($_POST){
	if($name == '' ||  $email == '' ||  $pesan == ''){
$feedback = 'Please Insert First';
}else {
mail($to, $subject, $message, $header);
$feedback ='Thankyou';
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
<link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
  </head>

  <body>

    <!-- Navigation -->
    <?php include 'navigation.php' ?>
   
    <section class="py-5" style="padding-bottom:0 !important; border-bottom:#f1f1f1 solid 10px;">
      
      <div class="col-lg-12 col-12" style="margin-top:10%;  padding-left:5%; padding-right:5%;">
      <div class="row">
      <div class="col-12 text-left Aileron-Light hidden-lg hidden-md" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim" style="margin-top:10%; margin-bottom:10%; border-bottom:#f1f1f1 solid 10px; font-size:1rem;">
        <h4 class="Aileron-Regular" style="color:#48BD9F; font-size:1.2rem ">MORE INFO</h4>
        <p  style="color:#666; ">We provide the excellent consultation detail process and great result of your interior needs and satisfaction to experience the exciting service with us. Please feel frree and comfortable to call send us message and contact us for more details, questions and informations. We gladly to answer it for you. Thank You.</p><br>
<p style="color:#6666;"><b>Address : </b>21755 hardy oak blvd ste 104 San Antonio TX U.S.A</p>
<p style="color:#6666;"><b>Email : </b><span style="color:#D3BA53;">info@craiginnovationinterior.com</span></p>

<p style="color:#6666;"><b>Phone : </b><span style="color:#D3BA53;">+1 210 348 3348  / +1 210 504 8970</span></p>
<p style="color:#6666;"><b>Business Hours : </b>8:30 am - 4:30 pm ( Monday - Friday ) </p>
</div>
      <div class="col-lg-4 col-lg-offset-1 col-12" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim" >
       <form action="" method="post" name="contactus">
       Your Name <br> 
       <input name="yname" class="input-group" type="text" size="100%" style="margin-bottom:5%;">
       Your Email <br>
       <input name="yemail" style="margin-bottom:5%;" class="input-group" type="text" size="100%">
       Your Message <br>
       <textarea name="ymessage" class="input-group" cols="" rows="5"></textarea>
       <input name="submit" type="submit" style="margin-top:5%;">
       </form>
</div>
<div class="col-lg-5 col-lg-offset-1 text-left Aileron-Light hidden-xs hidden-sm" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal, after: removeAnim" style="font-size:1rem">
        <h4 class="Aileron-Regular" style="color:#48BD9F; font-size:1.7rem; ">MORE INFO</h4><br>
        <p  style="color:#666;">We provide the excellent consultation detail process and great result of your interior needs and satisfaction to experience the exciting service with us. Please feel frree and comfortable to call send us message and contact us for more details, questions and informations. We gladly to answer it for you. Thank You.</p><br>
<p style="color:#6666;"><b><img src="img/icons/3 Location.png" width="3%"> Address : </b>21755 hardy oak blvd ste 104 San Antonio TX U.S.A</p>
<p style="color:#6666;"><b><img src="img/icons/2 Email.png" width="3%"> Email : </b><span style="color:#D3BA53;">info@craiginnovationinterior.com</span></p>

<p style="color:#6666;"><b><img src="img/icons/1 Phone.png" width="3%"> Phone : </b><span style="color:#D3BA53;">+1 210 348 3348  / +1 210 504 8970</span></p>
<p style="color:#6666;"><b>Business Hours : </b>8:30 am - 4:30 pm ( Monday - Friday ) </p>
</div>

</div>
      </div>
      <div class="col-lg-12 col-12" style="margin-top:5%; padding:0; border-top:#f1f1f1 solid 9px;">
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3467.589056832192!2d-98.49461331846828!3d29.644676519978965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c627a63b8e041%3A0x12ca9d89cd197eb9!2s21755+Hardy+Oak+Blvd%2C+San+Antonio%2C+TX+78258%2C+USA!5e0!3m2!1sen!2sid!4v1505814767105" width="100%" height="500px"  frameborder="0" style="border:0" allowfullscreen></iframe>

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
</script>
  </body>

</html>
