<?php
require_once('dbc.php');
$dbc=mysql_connect(HOST,NAME,PASSWORD,DATABASE) or die(mysql_error());
echo "Connected to MySQL<br />";

$password =md5('sanami123');
$query="SELECT * FROM `DATABASE.corporate` WHERE email='manzoor_81@hotmail.com' AND password='$password' AND activated = 1";
$result= mysql_query($query,$dbc);
	 				
					if(@mysqli_num_rows($result) == 1)
					{
						$row = mysqli_fetch_array($result);
						
								$_SESSION['lname']=$row['lname'];
								$_SESSION['fname']= $row['fname'];
								
								setcookie("lname", $_SESSION['lname'], time()+60*60);
								setcookie("fname",$_SESSION['fname'],time()+60*60);
								echo $_SESSION['fname']."<br>";
									echo $_SESSION['lname']."<br>";
								
								mysqli_close($dbc);
							//if no header is not sent, send it.
							if(!headers_sent())
							{
								header('Location: http://www.limozoor.com/login/homepage.php');	
							}//inner
						
				    }//outter
					else{
						echo "INVALID";
					}
					
?>