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
<html>
<head>
<title>Raspberry Pi GPIO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/png" href="img/favicon.png" />
<style type="text/css">
body {
	background-image: url(img/bg.jpg);
	background-repeat: repeat-x;
	}
.all {
	width: 100%;
	font-size: 16px;
	}
</style>
</head>
<body>
<div class="all">
<div align="center">
<h1>Raspberry Pi GPIO</h1>
</div>
<div align="center">
<div>
<form method="post">
<p><button name="setgpio">Set GPIO'S</button></p>
</form>
</div>
<div>
	<form method="post">
	  <p>GPIO 4&nbsp;&nbsp;&nbsp;<button name="GPIO4-1" style="width: 50px; background-image: url(img/bbg.jpg)">ein</button> <button name="GPIO4-0" style="width: 50px; background-image: url(img/bbgr.jpg)">aus</button> Status: <img src="img/<?php echo "$color4"; ?>.png"></p>
	  <p>GPIO 7&nbsp;&nbsp;&nbsp;<button name="GPIO7-1" style="width: 50px; background-image: url(img/bbg.jpg)">ein</button> <button name="GPIO7-0" style="width: 50px; background-image: url(img/bbgr.jpg)">aus</button> Status: <img src="img/<?php echo "$color7"; ?>.png"></p>
	  <p>GPIO 8&nbsp;&nbsp;&nbsp;<button name="GPIO8-1" style="width: 50px; background-image: url(img/bbg.jpg)">ein</button> <button name="GPIO8-0" style="width: 50px; background-image: url(img/bbgr.jpg)">aus</button> Status: <img src="img/<?php echo "$color8"; ?>.png"></p>
	  <p>GPIO 18&nbsp;<button name="GPIO18-1" style="width: 50px; background-image: url(img/bbg.jpg)">ein</button> <button name="GPIO18-0" style="width: 50px; background-image: url(img/bbgr.jpg)">aus</button> Status:<img src="img/<?php echo "$color18"; ?>.png"></p>
	</form>
    </div>
    <div>
    	<p><a href="sysinfo.php">Systeminformationen</a></p>
    </div>
</div>
<div align="center">
<p><img src="img/<?php echo "$image4"; ?>.png" ><img src="img/<?php echo "$image18"; ?>.png" ><img src="img/<?php echo "$image8"; ?>.png" ><img src="img/<?php echo "$image7"; ?>.png" >
</p>
</div>
<div align="center">
<p>&copy; 2013 <a href="http://go-seven.de">Pascal Tippelt</a></p>
</div>
</div>
</body>
</html>
