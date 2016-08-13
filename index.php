<!DOCTYPE html>
<head>
<link rel="icon" href="http://munhunger.se/images/icon.ico">
<title>Munhunger</title>
</head>
<body style="background-color:#0F0F0F">
	<div style="position:relative; width:640px; margin-left:auto; margin-right:auto; margin-top:150px; background-color:#151515; border-radius:15px">
		<?php
			echo "In PHP";
		   class MyDB extends SQLite3
		   {
		      function __construct()
		      {
		         $this->open('test.db');
		      }
		   }
		   $db = new MyDB();
		   if(!$db){
		      echo $db->lastErrorMsg();
		   } else {
		      echo "Opened database successfully\n";
		   }
		?>
	</div>
</body>
</html>
