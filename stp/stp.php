<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
<title>Online Stopwatch - HTML5</title>
<meta name="viewport" content="user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<script>soundFile = 'bell'; curSndLoop = 0;</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="www.online-stopwatch.com/html5/js/getswf.js?v=11116"></script>
<script type="text/javascript" src="www.online-stopwatch.com/html5/js/online-stopwatch.js?v=nov16a"></script>
<link href="http://aiucbef.com/stp/c.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="timer"> <div class="bluebar"><a id="homeLink" href="http://www.online-stopwatch.com/" title="Online Stopwatch">www.online-stopwatch.com</a></div> <div id="contents"> <div id="s1" class="screen s1"> <div class="timerScreen"> <div class="pad"></div> <div id="displayScreen" class="display"><span id="time">00:00:00</span></div> <div id=mills>000</div> </div> <div class=buttonSpace> <div class=pad></div> <div class=button><a id=doStart>Start</a></div> <div class=button2><a id=doClear>Clear</a></div> </div> </div> <div id=s2 class="screen s2"> <div class=button><a id=gotoStopwatch><span>Stopwatch</span></a></div> <div class=break></div> <div class=button><a id=gotoCountdown><span>Countdown</span></a></div> </div> <div id=s3 class="screen s3"> <div class=timerScreen> <div class=pad></div> <div id=setTime class=display>00:00:00</div> </div> <div class=buttonSpace> <div class=pad></div> <div class=sleft> <ol> <li><a class=sbutton id=do5>5</a></li> <li><a class=sbutton id=do6>6</a></li> <li><a class=sbutton id=do7>7</a></li> <li><a class="sbutton" id="do8">8</a></li> <li><a class="sbutton" id="do9">9</a></li> </ol> <div class="tpad"></div> <ol> <li><a class="sbutton" id="do0">0</a></li> <li><a class="sbutton" id="do1">1</a></li> <li><a class=sbutton id=do2>2</a></li> <li><a class=sbutton id=do3>3</a></li> <li><a class=sbutton id=do4>4</a></li> </ol> <div class=tpad></div> </div> <div class=sright> <ol> <li class=wide><a id=doSet class=sbutton>Set</a></li> </ol> <div class=tpad></div> <ol> <li class=wide><a id=doUnSet class=sbutton>Clear</a></li> </ol> <div class=tpad></div> </div> </div> </div> <div id=s4 class=s4> <div class=padload></div> <div class=loading>Loading...</div> </div> </div> <div class=bluebar><a id=doBack title=Back>Back</a></div> <div id=debug></div> <div id=playAudio></div> <audio class=hid id='audio1' preload=auto> <source src=bell.mp3 type=audio/mpeg /> <source src=bell.wav type=audio/wav /> </audio> </div>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23284110-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script><script>$(function() {var loopMax = 1;document.getElementById("audio1").addEventListener("ended", function(){if (curSndLoop < loopMax){this.currentTime = 0;this.play();curSndLoop++;}}, false);});</script>
</body>
</html>