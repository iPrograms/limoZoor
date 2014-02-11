<?php
include ('dbc.php');

if (isset($_GET['email']) && preg_match('/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i', $_GET['email']))
{
    $email = $_GET['email'];
}

if(isset($_GET['key']) && (strlen($_GET['key']) == 32)){
    $key = $_GET['key'];
}

if(isset($_GET['user'])){
	$user = $_GET['user'];
}

if(isset($email) && isset($key) && isset($user))
{
    $dbc = mysqli_connect(HOST,NAME,PASSWORD,DATABASE);
	
	if($user=='ind')
	{		
			// Update the user database to set the "activation" field to 1
			$query_activate_account = "UPDATE user SET activated= 1 WHERE(email ='$email' AND activation='$key')LIMIT 1";
			$result_activate_account = mysqli_query($dbc, $query_activate_account) ;
			
			//if successfull
			if (mysqli_affected_rows($dbc) == 1)//if update query was successfull
			{
			  echo '<div class="success">Your account is now active.You may now <a href="http://www.limozoor.com/login/signin.php">Log in</a></div>';
			  echo "<p>Redirecting in 5 seconds</p>";
			  echo '<meta http-equiv="refresh" content="5;URL=\'http://limozoor.com/login/signin.php\'">';
			  mysqli_close($dbc);	
			} 
     }//ind
	
	 else if($user=='corp')
	 {
			$query_activate_account1 = "UPDATE corporate SET activated=1 WHERE(email ='$email' AND activation='$key')LIMIT 1";
			$result_activate_account1 = mysqli_query($dbc, $query_activate_account1) ;
				
			if (mysqli_affected_rows($dbc) == 1)//if update query was successfull
			{
			  	echo '<div class="success">Your Corporation account is now active.\n You may now <a href="http://www.limozoor.com/login/signin.php">Log in</a></div>';
				mysqli_close($dbc);
			}
			else
			{
				echo "<div>Can not activate this corporation account.</div>";
			}
	}	  
}//end set email,key,user 

//wront url, link, code,
else
{
	echo  "<p>This account can not be activated. </p>";
}
?>

