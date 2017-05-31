<!DOCTYPE html>
<html>
<head>
	<title>PostInc</title>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style type="text/css">

	@import url('https://fonts.googleapis.com/css?family=EB+Garamond');
	@font-face {
	    font-family: Majesti-Banner-Book;

	    src: url(fonts/Majesti-Banner-Book.otf);
	}

	::selection
	{
		background: #3fc3ff;
		opacity: 0.2;
	}

	body
	{
		background-image: url('img/back.png');
		background-color: rgba(1,1,1,0.9);
		display: flex;
		justify-content: center;
	}

	div.content
	{
		background-color: rgba(12,12,12,0.58);
		margin: auto;
    	position:absolute;
    	top: 21%;
    	bottom:0;
    	height: 67%;
    	left:0%;
    	/*right:0;*/ 
    	width: 100%; /*otherwise div defaults to page width*/
    	margin: 0 auto; /*horizontally centers div*/


	}

	div.logo
	{
		margin: auto;
		background-image: url('img/logo2.png');
		background-repeat: no-repeat;
		background-size: 100%;
    	position:absolute;
    	top:29%;
    	bottom:0;
    	left:11%;
    	/*right:0;*/ 
    	width: 17%; /*otherwise div defaults to page width*/
    	margin: 0 auto; /*horizontally centers div*/
	}

	div.about
	{
    	position:absolute;
    	text-align: justify;
    	top:26%;
    	bottom:0;
    	right:12%; 
    	width: 48%; /*otherwise div defaults to page width*/
    	margin: 0 auto; /*horizontally centers div*/
    	color: #eee;
		left: 41%;
	}

	p
	{
		font-family: 'Roboto', sans-serif;
		font-size: 110%;
	}

	h1
	{
		font-weight: 100;
		letter-spacing: 7px;
		font-family: 'EB Garamond', serif!important;
		border-color: #3fc3ff;
		border-style: solid;
		padding-bottom: 10px;
		border-width: 0px 0px 2px 0px;
		font-size: 300%;
	}

    div.header
    {
    	z-index: 5;
    	background-color: #010101;
	    position:fixed;
	    top: 0px;
	    left: 0px;
	    width: 100%;
	    color: #ccc;
	    height: 9%;

/*	    border-width: 2px 0px;
	    border-color: #444;
	    border-style: solid;
*/
	    overflow-x:auto; overflow-y:hidden;
    }

    div.name
    {
    	letter-spacing: 7px;
    	font-size: 28px;
    	padding: 12px 40px;
    	font-family: Majesti-Banner-Book;
    	float: left;

    }

    div.tabs
    {
    	 width: 50%;
    	 float: right;
    	 font-family: 'Roboto', sans-serif;

    }

    div.child
    {
    	  float: right;
    	  padding: 2.7% 5% 2% 5%;
/*	    border-width: 0px 2px;
	    border-color: #444;
	    border-style: solid;
*/    }

	div.aboutus
	{
	    border-width: 0 0 2px 0;
	    border-color: #3fc3ff;
	    border-style: solid;
    }
	a
	{
		text-decoration: none;
		color: #eee;

	}
	    div.n:hover
    {
    		    border-width: 0 0 2px 0;
	    border-color: rgba(63, 200, 255, 0.4);
	    border-style: solid;

    }


	
</style>
</head>
<body>
<!-- <div class="header">
	<div class="name"><a href="http://www.postinc.in">POSTINC</a></div>
	<div class="tabs">
		<div class="child n"><a href="http://www.postinc.in/#contactus">Contact Us</a></div>
		<div class="child aboutus">About Us</div>
	</div>
</div>
 -->
<?php require_once('header.php'); ?>
 <div class="content">
</div>

<div class="logo">
</div>
<div class="about">
<h1>POSTINC</h1>
<p>We are a group of designers who want to play a part in the growth of the design community across the country. We believe the way forward is to connect designers with businesses and startups in need of quality design via a freelance platform.</p>

<p>We plan to expand our social networking platform for designers to an online poster store and a freelancing platform. Here, clients will be able to provide specifications for their design requirements, which designers can then work on.</p>
</div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</body>
</html>