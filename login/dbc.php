<?

define('HOST','localhost');
define('NAME','');
define('PASSWORD','');
define('DATABASE','1061162_res');



//database connection 
	$dbc = mysqli_connect(HOST,NAME,PASSWORD,DATABASE) or die(mysqli_error());
?>
