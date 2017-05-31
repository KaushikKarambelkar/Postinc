<!DOCTYPE html>
<html>
  <head>
    <title>PostInc</title>
	<link rel="shortcut icon" href="http://postinc.in/img/logo2.png">
<!-- 	<meta name="description" content="Postinc"> -->
	<meta name="revisit-after" content="10 days">
	<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <link type="text/css" rel="stylesheet" href="http://postinc.in/css/style.css"/>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="http://postinc.in/css/materialize.min.css"  media="screen,projection"/>
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
				color: #111;
				background-color: rgba(225,225,225,0.9);
				background-image: url('bg.png');
				background-size: 100%;
				background-repeat: repeat;

/*		 animation-name: backgroundscroller;
*/  animation-duration: 420s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  animation-direction: normal; 
  padding-bottom: 0px;
  margin-bottom: 0px;
  bottom: 0px;
			}

      span.beta2
{
  color: grey;
  font-size: 140%;
  font-weight: 200;
  padding-bottom: 20px;
  border-color: #3fc3ff;
  border-width: 0 0 2px 0;
  border-style: solid;
  display: block;
  width: 100%;
}
    </style>
  </head>

  <body onload="Materialize.showStaggeredList('#nav-mobile');">

 
  <?php require_once('../header.php'); ?>

    <div class="center-align container section scrollspy" class="section scrollspy">
    <div class="row" style="  font-family: 'Cormorant Garamond', serif!important;">
    <div class="col s12 m10 l8" align="left">
    <h3>Graphic Design - An Introduction</h3>
<span class="beta2">Graphic design? What’s this fancy term, anyway?</span>
<div class="blogtext" style="padding-top: 20px;">
<p>'It's just a glorified title for those people who used to be commercial artists and typesetters.'<br/>
'It's people doing cool stuff in PhotoShop.'<br/>
'I need a poster made, so I'm looking for a graphic designer.'</p>

<p>The people who call themselves graphic designers, however, like to believe that their work is more sophisticated than that.</p>

<p>Graphic design is everywhere.</p>

<a href="http://www.designlovefest.com/2017/04/dress-your-tech-185/#more-59556" target="_blank">
<img src="img1.jpg" width="100%"></a></p>

<p>
<a href="http://melanie-f.com/en/" target="_blank">
<img src="img2.jpg" width="100%">
<img src="img3.png" width="100%">
</a></p>

<p>The cover of the novel you're reading, the game you love playing, the chips packet you reach for, the motivational quotes you love to Instagram—all of these once lived on a computer and were brought to life by a graphic designer. Graphic design isn't just minimalism, or merging multiple photographs, or beautiful websites. It is all of this, and much more.</p>

<p>Good design is more powerful than you might think. It's what motivates you to buy this album or that funky T-shirt, or to choose this shop over the other. Because, after all, we do judge books by their covers.</p>

<p>Graphic designing is now easier than ever. Computers and software packages have never been so powerful. Colour printing is fast, accessible, and inexpensive. The Internet is home to a wealth of information and resources (like this one). But good design, that elusive mistress, has proven no easier to woo.</p>

<p>Graphic design is also a worldwide phenomenon—a beautiful community creating beautiful things, propelled by sheer love of the craft. Just as there are movements in art, great periods where a few styles of music or painting enjoyed prominence, there are waves of style that the whole world is suddenly caught up with. So if you look closely, you’ll see the same ten fonts used in all kinds of places; you’ll notice a sudden proliferation of simple design; you’ll realise that all your favourite websites have some common design elements.</p>

<p>Welcome to our world. Are you excited yet?
</div>
    </div>
    <div class="col hide-on-small-only m2 l4"><br></div>
    </div>
</div>
<div style="color: #eee">  <?php require_once('../footer.php'); ?></div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
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