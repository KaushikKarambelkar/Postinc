    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function(){
	  $(".button-collapse").sideNav();
	});
</script>

<style type="text/css">
	span.beta
	{
		color: #888;
		font-weight: 700;
	}
</style>
<div class="navbar-fixed" id="Us">
<nav class="black z-depth-5" role="navigation">
	<div class="nav-wrapper">
		<a class="logoname" href="http://www.postinc.in/index.php#Us" class="brand-logo">POSTINC</a>
		<span class="beta">BETA</span>
		<a class="logoname brand-logo"" href="http://www.postinc.in/blog"><?php 
		if(mb_substr($_SERVER['REQUEST_URI'], 0, 5)=="/blog")
			{
				echo "&nbsp;";
			}
		?></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="right hide-on-small-only">
<!-- 		  <li><a class="active" href="#">Us</a></li> -->
		  <li><a href="http://www.postinc.in/posters.php">Upload Posters</a></li>
		  <li><a href="http://www.postinc.in/order.php">Design Order</a></li>
		  <li><a href="http://www.postinc.in/index.php#contact">Contact Us</a></li>
		  <li><a href="http://www.postinc.in/blog">Blog</a></li>
<!-- 		  <li><a href="http://localhost/postinc/about.php">About</a></li> -->
		</ul>
	</div>

        <ul class="side-nav" id="mobile-demo">
		  <li><a href="posters.php">Upload Posters</a></li>
		  <li><a href="order.php">Design Order</a></li>
		  <li><a href="index.php#contact">Contact Us</a></li>
		</ul>

</nav>

</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96271128-2', 'auto');
  ga('send', 'pageview');
</script>