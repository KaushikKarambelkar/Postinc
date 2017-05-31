<!DOCTYPE html>
<html>
   <head>
      <title>PostInc</title>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1">      
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
   </head>
<style type="text/css">
  div.cont
{ width: 90%;
  margin: 0% 5%;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

li {
    display: inline;
}
</style>
   <body onload="Materialize.showStaggeredList('#nav-mobile');"> <!--('#btnwp').click();"--> 

  <?php require_once('header.php'); ?>
  <div class="cont center-align">
    <h4 class="needheader">What do you need?</h4>

<div class="container">

<div class="buttonscont">
<div class="row center-align">
  <div class="col l2 m1 hide-on-small-only">&nbsp;</div>

  <div class="col l4 m5 s12">
  <button class="btna btn waves-effect waves-light" id="btnwp" onclick="Materialize.fadeInImage('#form_wall')">Wall poster</button>
  </div>

  <div class="hide-on-med-and-up s12"></div>

  <div class="col l4 m5 s12"><button class="btna btn waves-effect waves-light spafter" onclick="Materialize.fadeInImage('#form_dmc')">Digital Marketing Content</button></div>

  <div class="col l2 m1 hide-on-small-only">&nbsp;</div>
</div>

<div class="row center-align">
  <div class="col l3 m3 s6"><button class="btna btn waves-effect waves-light spafter" onclick="Materialize.fadeInImage('#form_logo')">Logo</button></div>
  <div class="col l3 m3 s6"><button class="btna btn waves-effect waves-light" onclick="Materialize.fadeInImage('#form_website')">Website</button></div>
  <div class="col l3 m3 s6"><button class="btna btn waves-effect waves-light spafter" onclick="Materialize.fadeInImage('#form_brochure')">Brochure</button></div>
  <div class="col l3 m3 s6"><button class="btna btn waves-effect waves-light" onclick="Materialize.fadeInImage('#form_other')">Other</button></div>
</div>
</div>

<div id="form_wall" class="forms center-align">
<h4 class="desordcap"> Wall Poster </h4>
<p class="desordcap">You are Posting a design order</p>

<div class="row">
  <form class="col s12" method="POST" action="upload.php">
  <input type="hidden" name="ptype" value="wallp">
  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="name" id="name" placeholder="Name" class="validate">
    </div>
    <div class="input-field col s5">
      <input type="email" name="email" id="email" placeholder="Email" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="phno" id="phno" placeholder="Phone No." class="validate">
    </div>
    <div class="input-field col s5">
      <input name="hrno" id="hrno" placeholder="Hostel and Room No." class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s10">
      <textarea id="desc" name="descr" placeholder="Description" class="materialize-textarea"></textarea>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="file-field input-field col s10">
      <div class="btn" style="background-color: #3fc3ff; text-transform: none!important;  height: 2.4rem; line-height: 2.4rem;">
        <span>Upload File(s)</span>
        <input type="file" name="imgname[]">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">  
  <div class="col s4"></div>
  <div class="col s4">
     <button class="btn waves-effect waves-light" type="submit" name="submit" 
     class="btnsubm" style="padding: 0px 0; height: 70%; width: 80%; text-transform: none!important;">Submit
  </button>
  </div>
  <div class="col s4"></div>
  </div>
  </form>
</div>



</div>

<div id="form_dmc" class="forms">
<h4 class="desordcap">Digital Marketing</h4>
<p class="desordcap"></p>

<div class="row">
  <form class="col s12" method="POST" action="upload.php">
  <input type="hidden" name="ptype" value="wallp">
  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="name" id="name" placeholder="Name" class="validate">
    </div>
    <div class="input-field col s5">
      <input type="email" name="email" id="email" placeholder="Email" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="phno" id="phno" placeholder="Phone No." class="validate">
    </div>
    <div class="input-field col s5">
      <input name="hrno" id="hrno" placeholder="Website (Optional)" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s10">
      <textarea id="desc" name="descr" placeholder="Description" class="materialize-textarea"></textarea>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="file-field input-field col s10">
      <div class="btn" style="background-color: #3fc3ff; text-transform: none!important;  height: 2.4rem; line-height: 2.4rem;">
        <span>Upload File(s)</span>
        <input type="file" name="imgname[]">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">  
  <div class="col s4"></div>
  <div class="col s4">
     <button class="btn waves-effect waves-light" type="submit" name="submit" 
     class="btnsubm" style="padding: 0px 0; height: 70%; width: 80%; text-transform: none!important;">Submit
  </button>
  </div>
  <div class="col s4"></div>
  </div>
  </form>
</div>
</div>

<div id="form_logo" class="forms">
<h4 class="desordcap"> Logo </h4>
<p class="desordcap"></p>
<div class="row">
  <form class="col s12" method="POST" action="upload.php">
  <input type="hidden" name="ptype" value="wallp">
  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="name" id="name" placeholder="Name" class="validate">
    </div>
    <div class="input-field col s5">
      <input type="email" name="email" id="email" placeholder="Email" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="phno" id="phno" placeholder="Phone No." class="validate">
    </div>
    <div class="input-field col s5">
      <input name="hrno" id="hrno" placeholder="Website (Optional)" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s10">
      <textarea id="desc" name="descr" placeholder="Description" class="materialize-textarea"></textarea>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="file-field input-field col s10">
      <div class="btn" style="background-color: #3fc3ff; text-transform: none!important;  height: 2.4rem; line-height: 2.4rem;">
        <span>Upload File(s)</span>
        <input type="file" name="imgname[]">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">  
  <div class="col s4"></div>
  <div class="col s4">
     <button class="btn waves-effect waves-light" type="submit" name="submit" 
     class="btnsubm" style="padding: 0px 0; height: 70%; width: 80%; text-transform: none!important;">Submit
  </button>
  </div>
  <div class="col s4"></div>
  </div>
  </form>
</div>
</div>

<div id="form_website" class="forms">
<h4 class="desordcap"> Website </h4>
<p class="desordcap"></p>
<div class="row">
  <form class="col s12" method="POST" action="upload.php">
  <input type="hidden" name="ptype" value="wallp">
  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="name" id="name" placeholder="Name" class="validate">
    </div>
    <div class="input-field col s5">
      <input type="email" name="email" id="email" placeholder="Email" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="phno" id="phno" placeholder="Phone No." class="validate">
    </div>
    <div class="input-field col s5">
      <input name="hrno" id="hrno" placeholder="Website (Optional)" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s10">
      <textarea id="desc" name="descr" placeholder="Description" class="materialize-textarea"></textarea>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="file-field input-field col s10">
      <div class="btn" style="background-color: #3fc3ff; text-transform: none!important;  height: 2.4rem; line-height: 2.4rem;">
        <span>Upload File(s)</span>
        <input type="file" name="imgname[]">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">  
  <div class="col s4"></div>
  <div class="col s4">
     <button class="btn waves-effect waves-light" type="submit" name="submit" 
     class="btnsubm" style="padding: 0px 0; height: 70%; width: 80%; text-transform: none!important;">Submit
  </button>
  </div>
  <div class="col s4"></div>
  </div>
  </form>
</div>
</div>

<div id="form_brochure" class="forms">
<h4 class="desordcap"> Brochure </h4>
<div class="row">
  <form class="col s12" method="POST" action="upload.php">
  <input type="hidden" name="ptype" value="wallp">
  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="name" id="name" placeholder="Name" class="validate">
    </div>
    <div class="input-field col s5">
      <input type="email" name="email" id="email" placeholder="Email" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="phno" id="phno" placeholder="Phone No." class="validate">
    </div>
    <div class="input-field col s5">
      <input name="hrno" id="hrno" placeholder="Website (Optional)" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s10">
      <textarea id="desc" name="descr" placeholder="Description" class="materialize-textarea"></textarea>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="file-field input-field col s10">
      <div class="btn" style="background-color: #3fc3ff; text-transform: none!important;  height: 2.4rem; line-height: 2.4rem;">
        <span>Upload File(s)</span>
        <input type="file" name="imgname[]">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">  
  <div class="col s4"></div>
  <div class="col s4">
     <button class="btn waves-effect waves-light" type="submit" name="submit" 
     class="btnsubm" style="padding: 0px 0; height: 70%; width: 80%; text-transform: none!important;">Submit
  </button>
  </div>
  <div class="col s4"></div>
  </div>
  </form>
</div>
</div>

<div id="form_other" class="forms">
<h4 class="desordcap"> Other </h4>
<p class="desordcap"></p>
<div class="row">
  <form class="col s12" method="POST" action="upload.php">
  <input type="hidden" name="ptype" value="wallp">
  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="name" id="name" placeholder="Name" class="validate">
    </div>
    <div class="input-field col s5">
      <input type="email" name="email" id="email" placeholder="Email" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="phno" id="phno" placeholder="Phone No." class="validate">
    </div>
    <div class="input-field col s5">
      <input name="hrno" id="hrno" placeholder="Website (Optional)" class="validate">
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s10">
      <textarea id="desc" name="descr" placeholder="Description" class="materialize-textarea"></textarea>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">
  <div class="col s1"></div>
    <div class="file-field input-field col s10">
      <div class="btn" style="background-color: #3fc3ff; text-transform: none!important;  height: 2.4rem; line-height: 2.4rem;">
        <span>Upload File(s)</span>
        <input type="file" name="imgname[]">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  <div class="col s1"></div>
  </div>

  <div class="row">  
  <div class="col s4"></div>
  <div class="col s4">
     <button class="btn waves-effect waves-light" type="submit" name="submit" 
     class="btnsubm" style="padding: 0px 0; height: 70%; width: 80%; text-transform: none!important;">Submit
  </button>
  </div>
  <div class="col s4"></div>
  </div>
  </form>
</div>
</div>


</div>

</div>

<script type="text/javascript">
  $( "[class^=btna]" ).click(function() {
//    alert("Haii");
  $( ".forms" ).each(function( index, element ) {
    $( element ).fadeTo( "slow" , 0, function() { });

});

});

</script>
   </body>
</html>