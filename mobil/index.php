<?php
    
	if (isset($_POST['GPIO4-1']))
    {
         shell_exec("gpio -g write 4 1");
    }
    if (isset($_POST['GPIO4-0']))
    {
	 shell_exec("gpio -g write 4 0");
    }
	
	if (isset($_POST['GPIO7-1']))
    {
         shell_exec("gpio -g write 7 1");
    }
    if (isset($_POST['GPIO7-0']))
    {
	 shell_exec("gpio -g write 7 0");
    }
	
	if (isset($_POST['GPIO8-1']))
    {
         shell_exec("gpio -g write 8 1");
    }
    if (isset($_POST['GPIO8-0']))
    {
	 shell_exec("gpio -g write 8 0");
    }
	
	if (isset($_POST['GPIO18-1']))
    {
         shell_exec("gpio -g write 18 1");
    }
    if (isset($_POST['GPIO18-0']))
    {
	 shell_exec("gpio -g write 18 0");
    }
	
	$outputgpio4 = shell_exec(' gpio -g read 4');
	$outputgpio7 = shell_exec(' gpio -g read 7'); 
	$outputgpio8 = shell_exec(' gpio -g read 8'); 
	$outputgpio18 = shell_exec(' gpio -g read 18'); 
	
	if ($outputgpio4 == 0) { $color4 = "red";	}
	if ($outputgpio4 == 1) { $color4 = "green";	}
	if ($outputgpio7 == 0) { $color7 = "red";	}
	if ($outputgpio7 == 1) { $color7 = "green";	}
	if ($outputgpio8 == 0) { $color8 = "red";	}
	if ($outputgpio8 == 1) { $color8 = "green";	}
	if ($outputgpio18 == 0) { $color18 = "red";	}
	if ($outputgpio18 == 1) { $color18 = "green";	}
	
	if ($outputgpio4 == 0) { $image4 = "40"; }
	if ($outputgpio4 == 1) { $image4 = "41"; }
	if ($outputgpio18 == 0) { $image18 = "180"; }
	if ($outputgpio18 == 1) { $image18 = "181"; }
	if ($outputgpio8 == 0) { $image8 = "80"; }
	if ($outputgpio8 == 1) { $image8 = "81"; }
	if ($outputgpio7 == 0) { $image7 = "70"; }
	if ($outputgpio7 == 1) { $image7 = "71"; }
	
	if (isset($_POST['setgpio']))
	{
		shell_exec("setgpio");
	};
			
?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mobile GPIO</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="mobil.css" rel="stylesheet" type="text/css">

<script src="respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix" align="center">
  <div align="center">
  <h1>Raspberry Pi GPIO</h1>
  </div>
  <div>
<form method="post">
<p><button name="setgpio" style="width: 120px; background-image: url(img/trans.jpg)">GPIO's setzen</button> falls es beim Start fehl schlug.</p>
</form>
</div>
<div>
	<form method="post">
	  <p>GPIO 4
<button name="GPIO4-1" style="width: 50px; background-image: url(img/bbg.jpg)">ein</button> 
<button name="GPIO4-0" style="width: 50px; background-image: url(img/bbgr.jpg)">aus</button> Status: <img src="img/<?php echo "$color4"; ?>.png"></p>
	  <p>GPIO 7
	    <button name="GPIO7-1" style="width: 50px; background-image: url(img/bbg.jpg)">ein</button> <button name="GPIO7-0" style="width: 50px; background-image: url(img/bbgr.jpg)">aus</button> Status: <img src="img/<?php echo "$color7"; ?>.png"></p>
	  <p>GPIO 8
        <button name="GPIO8-1" style="width: 50px; background-image: url(img/bbg.jpg)">ein</button> <button name="GPIO8-0" style="width: 50px; background-image: url(img/bbgr.jpg)">aus</button> Status: <img src="img/<?php echo "$color8"; ?>.png"></p>
	  <p>GPIO 18
	    <button name="GPIO18-1" style="width: 50px; background-image: url(img/bbg.jpg)">ein</button> <button name="GPIO18-0" style="width: 50px; background-image: url(img/bbgr.jpg)">aus</button> Status:<img src="img/<?php echo "$color18"; ?>.png"></p>
	</form>
    </div>
    <div align="center">
    <p><img src="img/<?php echo "$image4"; ?>.png" ><img src="img/<?php echo "$image18"; ?>.png" ><img src="img/<?php echo "$image8"; ?>.png" ><img src="img/<?php echo "$image7"; ?>.png" >
</p>

    </div>
<div align="center">
<p>&copy; 2013 Pascal Tippelt
</p>
</div>
</div>
</body>
</html>
