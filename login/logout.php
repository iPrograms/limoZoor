<?
	session_start();
	
	if(isset($_SESSION['lname']))
	{
		$_SESSION = array();
		
		if(isset($_COOKIE[session_name()]))
		{
			setcookie(session_name(),'',time()-3600);
		}
		session_destroy();	
	}
	
	setcookie("lname", '' ,time()-3600);
	setcookie("fname",'' , time()-3600);
	
	header("Location: signin.php");
?>