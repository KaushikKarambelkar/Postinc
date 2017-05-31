<!DOCTYPE html>
<html>
  <head>
    <title>PostInc</title>
	<link rel="shortcut icon" href="http://postinc.in/img/logo2.png">
<!-- 	<meta name="description" content="Postinc"> -->
	<meta name="revisit-after" content="10 days">
	<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">
    @keyframes backgroundscroller {
  from {
    background-position: 0% 0%;    
  }
  to {
    background-position: 500% 500%, 400% 400%, 300% 300%, 200% 200%, 100% 100%;    
  }
}

    	body
			{
				color: #eee;
				background-color: rgba(5,5,5,0.9);
				background-image: url('img/bg.png');

		 animation-name: backgroundscroller;
  animation-duration: 420s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  animation-direction: normal; 
  padding-bottom: 0px;
  margin-bottom: 0px;
  bottom: 0px;
			}
    </style>
  </head>

  <body onload="Materialize.showStaggeredList('#nav-mobile');">

 
  <?php require_once('header.php'); ?>

    <div class="center-align container section scrollspy" class="section scrollspy">

		<div class="row">
			<div class="col s12"></div>
		</div>
		<div class="row">
			<div class="col s1 m3 l3"><br></div>
			<div class="col s10 m6 l6"><img class="responsive-img logo" id="fading" src="img/logo2.png">
			</div>
			<div class="col s1 m3 l3"><br></div>
		</div>
		<div class="row">
			<div class="col s12"></div>
		</div>

	<!--First bar-->
		<div class="row" id="textcont">
			<div class="col s1 hide-on-med-and-up"></div>

			<div class="col s12 m5 l4 valign img1" 
			style="padding: 0 50px; border: 0px white solid;">
			<img class="responsive-img" src="img/social.png">
			</div>

			<div class="col s1 hide-on-med-and-up"></div>

			<div class="col s12 m7 l7 valign fixvert" style="border: 0px white solid;">
			<h5>The Social Network of Graphic Designers</h5>
			<p>Showcase your creativity to the world! Inspire someone with your work or get inspired by someone's.</p>
			</div>

		</div>

	<!--Second bar-->
		<div class="row" id="textcont">
			<div class="col l1 s1 hide-on-med-only"></div>

			<div class="col s12 m5 l4 valign img1 push-l7 push-m8" 
			style="padding: 0 50px; border: 0px white solid;">
			<img class="responsive-img" src="img/store.png">
			</div>

			<div class="col s1 hide-on-med-and-up"></div>

			<div class="col s12 m7 l7 valign pull-l4 pull-m4 fixvert" style="border: 0px white solid;">
			<h5>Make money - your posters in print</h5>
			<p>An online store featuring great designs which could include yours. Upload your wall poster designs to our online store, and get paid when someone purchases your work.</p>
			</div>

		</div>

	<!--Third bar-->
		<div class="row" id="textcont">
			<div class="col s1 hide-on-med-and-up"></div>

			<div class="col s12 m5 l4 valign img1" 
			style="padding: 0 50px; border: 0px white solid;">
			<img class="responsive-img" src="img/cash.png">
			</div>

			<div class="col s1 hide-on-med-and-up"></div>

			<div class="col s12 m7 l7 valign fixvert" style="border: 0px white solid;">
			<h5>The one-stop shop for posters</h5>
			<p>If you're looking for good design, this is the place for you. PostInc features a variety of wall posters to suit any mood and requirement. Find them in our store or post in your requirements.</p>
			</div>

		</div>

    </div>


    <!--Poster Submit-->
		<div id="posterupl" class="section scrollspy center-align" class="section scrollspy">
		<h4 style="font-family: 'Cormorant Garamond', serif">Upload Poster designs</h4>
		<p style="font-size: 16px;">These designs will be featured on PostInc's poster store.</p>
		<a class="waves-effect waves-light btn" style="font-family: 'Roboto', sans-serif; text-transform: none; margin: 10px 0px; background-color: #3fc3ff" href="posters.php">Upload Posters</a>
		</div>

		<!--Design Order-->
		<div id="design" class="section scrollspy center-align" class="section scrollspy">
		<h4 style="font-family: 'Cormorant Garamond', serif">Have a design requirement?</h4>
		<p style="font-size: 16px;">Drop us a line. Our designers will custom-make your requirement.</p>
		<a class="waves-effect waves-light btn" style="font-family: 'Roboto', sans-serif; text-transform: none; margin: 10px 0px; background-color: #3fc3ff" href="order.php">Describe Order</a>
		</div>

  <?php require_once('footer.php'); ?>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
	var fadeStart=30 // 100px scroll or less will equiv to 1 opacity
    ,fadeUntil=500 // 200px scroll or more will equiv to 0 opacity
    ,fading = $('#fading');

	$(window).bind('scroll', function(){
    var offset = $(document).scrollTop()
        ,opacity=0
    ;
    if( offset<=fadeStart ){
        opacity=1;
    }else if( offset<=fadeUntil ){
        opacity=(1-offset/fadeUntil)*(1-offset/fadeUntil);
    }
    fading.css('opacity',opacity).html('');
	});
	</script>

<!-- <script type="text/javascript">
	
  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
       	
</script>
-->

 	<script type="text/javascript">
		$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});
	</script>

  </body>
</html>