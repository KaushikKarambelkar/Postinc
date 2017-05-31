<!DOCTYPE html>
<html>
  <head>
  <title>Upload Posters | PostInc</title>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
   <body onload="Materialize.showStaggeredList('#nav-mobile');">
   <?php require_once('header.php'); ?>

   <div class="container center-align">
    <h4 class="needheader">Upload Posters</h4>
<br>
    <div id="form_wall" class="uplform center-align">
<!-- <h4 class="desordcap"> Wall Poster </h4>
<p class="desordcap">You are Posting a design order</p>
 -->
<div class="row">
  <form class="col s12" method="POST" action="upload.php">

  <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="name" id="name" placeholder="Name" class="dummyclass">
    </div>
    <div class="input-field col s5">
      <input type="email" name="email" id="email" placeholder="Email" class="dummyclass">
    </div>
  <div class="col s1"></div>
  </div>

<!--   <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s5">
      <input type="text" name="phno" id="phno" placeholder="Phone No." class="validate">
    </div>
    <div class="input-field col s5">
    </div>
  <div class="col s1"></div>
  </div> -->

<!--   <div class="row">
  <div class="col s1"></div>
    <div class="input-field col s10">
      <textarea id="desc" name="desc" placeholder="Description" class="materialize-textarea"></textarea>
    </div>
  <div class="col s1"></div>
  </div>
 -->
 <section class="uplunit">
   
  <div class="row" style="margin: 11px!important;">
    <div class="file-field input-field col s12" style="width: 100%;">
      <div class="btn" style="background-color: #3fc3ff; text-transform: none!important;  height: 2.4rem; line-height: 2.4rem;">
        <span>Upload Poster</span>
        <input type="file" name="files[]" accept="image/x-png,image/psd,image/jpeg,image/ai">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" placeholder="Upload the .jpg|.png|.psd|.ai file format"  type="text">
      </div>
    </div>
<!--     <div class="input-field col s4">
      <input type="text" name="picname[]" id="picname[]" placeholder="Name of the Image(Optional)" class="validate">
    </div> -->
    <div class="input-field col s12">
      <input type="text" name="desc[]" id="desc[]" placeholder="Add hashtags to describe(min 3)" class="dummyclass">
    </div>
  </div>
 </section>




  <div class="row">  
  <div class="col s1"></div>
  <div class="col s3">
     <button class="btn waves-effect waves-light" name="addm" type="button" 
     class="btnsubm" style="padding: 0px 0; height: 100%; width: 100%; text-transform: none!important;" onclick="addm();">Add more
  </button>
  </div>
  <div class="col s4"></div>
  <div class="col s3">
     <button class="btn waves-effect waves-light" type="submit" name="submit" 
     class="btnsubm" style="padding: 0px 0; height: 70%; width: 100%; text-transform: none!important;">Submit
  </button>
  </div>
  <div class="col s1"></div>
  </div>
  </form>
</div>

</div>

   </div>



    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $('button .addm').click(function(){
        alert('Haii');
      })
    </script>
  </body>
</html>