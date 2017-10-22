<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hanging up the moon</title>
<meta name="distribution" content="global" />
<meta name="robots" content="index,follow" />
<meta name="language" content="en" />
<meta name="googlebot" content="index,follow" />
<meta name="Keywords" content="singer,songwriter,singapore,folk,sean lam,home recording,homemade,album,music" />
<meta name="description" content="In 2011, Sean Lam started a music project under the moniker Hanging Up The Moon. His Self-titled home recorded album is available as a free download or you can also choose to pay as you wish." />

<meta name="format-detection" content="telephone=no">

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.maximage.min.js"></script>
<script type="text/javascript" src="js/jquery.history.min.js"></script>
<script type="text/javascript" src="js/detectmobilebrowser.js"></script>
<script type="text/javascript" src="js/ajax2.js"></script>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.maximage.min.css" />

<script type="text/javascript">
  if((navigator.userAgent.match(/iPad/i))) {
  document.write("<meta name=\"viewport\" content=width=822px, minimum-scale=.934, maximum-scale=1.29, user-scalable=0 \/>");
  }
  else if(navigator.userAgent.match(/iPhone/i)) {
  document.write("<meta name=\"viewport\" content=width=411px, minimum-scale=.4, maximum-scale=1.0 , user-scalable=1 \/>");
  }
  else if(navigator.userAgent.match(/iPod/i)) {
  document.write("<meta name=\"viewport\" content=width=411px, minimum-scale=.4, maximum-scale=1.0 , user-scalable=1 \/>");
  }
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24274853-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>

<div id="social">
 <div class="fltright"><a href="http://hangingupthemoon.bandcamp.com" target="_blank"><img src="images/ico_bandcamp.gif" width="34" height="54" alt="facebook" /></a></div>
 <div class="fltright"><a href="https://soundcloud.com/hanging-up-the-moon" target="_blank"><img src="images/ico_soundcloud.gif" width="34" height="54" alt="facebook" /></a></div>
 <div class="fltright"><a href="http://www.facebook.com/hangingupthemoon" target="_blank"><img src="images/ico_fb.gif" width="34" height="54" alt="facebook" /></a></div>
</div>

<div id="fix">
 <div class="fltleft">menu</div>
</div> 

<!--- Top panel ---->
<div id="panel">

 <div class="menu_container">
   <div class="menu" id="menu1"><a href="#/album3">album 3</a></div>
   <div class="menu" id="menu2"><a href="#/album2">album 2</a></div>
   <div class="menu" id="menu3"><a href="#/album1">album 1</a></div>
   <div class="menu" id="menu4"><a href="#/bio">bio</a></div>
   <div class="menu" id="menu5"><a href="http://www.facebook.com/hangingupthemoon" target="_blank">news</a></div>
   <div class="menu" id="menu6"><a href="#/buy">buy</a></div>
   <div id="audio"></div>
 </div>
 
</div> <!--- end Top panel ---->

<div id="content"></div>

<div class="footer">&copy; 2017 Hanging Up The Moon. <a href="http://www.plateinteractive.com" target="_blank">plate</a>.</div>

<script type="text/javascript">
 
$('#fix').toggle(
function()
{
   $('#panel').animate({
      marginTop: '55px',
    }, 500);
   $('#content').animate({
      marginTop: '55px',
    }, 500);
},
function()
{
 $('#panel').animate({
      marginTop: '0px',
    }, 500);
  $('#content').animate({
      marginTop: '0px',
    }, 500);
});


if(navigator.userAgent.match(/iPhone/i)) {
doMargin();
doFooter();
}

if((navigator.userAgent.match(/iPad/i))) {
$('#audio').css("bottom","17px");
doFooter();
}

function doMargin () { 
$('.menu').css("margin-right","10px");
$('#audio').css("bottom","16px");
$('#audio').css("margin-left","205px");
}

function doFooter () { 
$('#footer').removeClass("footer").addClass("ifooter");
}
</script>
</body>
</html>