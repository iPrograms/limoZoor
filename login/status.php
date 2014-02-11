<?
    ob_start();
    session_start();
    if(!isset($_SESSION['lname'])){
         header("Location: ../index.php");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html>

<head>
<title>San Jose, Oakland, San Francisco reservation status check</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" href="../images/Envision.css" type="text/css"/>

<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="wrap">
  <div id="header"></div>
  <div id="content-wrap">
    <div id="sidebar">
	<div style="background-image:url(../images/cont.gif); height:90px; padding:20px 10px 5px 15px;">
	<span class="man">Toll-Free: <? include('../phone.php'); echo $toll_free; ?></span><br />
      <span class="man">Bay Area : <? echo $phone; ?></span><br/>
      <span class="man"><? echo $email; ?></span>
	 </div>
    </div>
    <!-- End left nav -->
    <div id="main5">
     
	    <div style="margin:30px 10px 10px 0px;">

		  <?php
			  
			  $status='';
			  $dbc = mysqli_connect('localhost','root','','test') or die('Error can not connect to database');
			  
			  if(isset($_POST['ck']))
			  {
				 //@auth Manzoor Ahmed
				 //@Date Jan 02, 13
				 
				 $code =$_POST['status'];
				 
				 if(empty($code)){
				 	echo "<p>Please provide reservation code.</p>";
				 }
				 else{
					 $query = "SELECT status from `corp_reservation` where `code` ='$code'"; 
					 $data= mysqli_query($dbc,$query);
					 $row = mysqli_fetch_array($data);
						
						//failed, now check reservation table
						if(mysqli_num_rows($data)==0){
							 
							$query=null;
							$data= null;
							$row =null;
							 
							$query = "SELECT status from `reservation` where `code`='$code'";
							$data = mysqli_query($dbc,$query);
							$row = mysqli_fetch_array($data);
								
								if(mysqli_num_rows($data)==0)
								{
									echo "<p style='color:red'>Invalid reservation code.</p>";	
								}
								else
								{
									echo "<p style='color:green;'> Your Reservation is ".$row['status']."</p>";			
								}
						}//found it in corp_reservation
						else
						{
							echo "<div><p style='color:green;'> Your Reservation is ".$row['status']."</p></div>";
						}
						mysqli_close($dbc);
					}
				}//else		  
			  ?>
		  <div>
		    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
			<table width="100%" cellpadding="0" cellspacing="0">
			<tr ><td width="50%" >
		    <label style="color:#009900; font-weight:bold;">Reservation Code:</label>
		    <input type="text" size="25" name="status" id="status" style="font-size:18px; color:#0099CC;" <? echo htmlentities($status)?>/></td>
			<td><label>&nbsp;</label><input type="submit" name="ck" id="ck" value="Check" style="background-color:#E93701; font-weight: bold; color:#FFFFFF;"/></td></tr>
			</table>
			</form>
			<a href="homepage.php">My Home Page</a>
		  </div>
	    </div>
	    <div style="margin:30px 10px 10px 0px;">
	  
      </div>
        <!--End Text -->
    </div>
  </div>
 
  <div id="footer">
    <p> &copy; 2010 &mdash; <script type="text/javascript">var d=new Date();
document.write(d.getFullYear());</script>
  | <a href="../terms.php">Terms and conditions</a> | <a href="../reservation.php">reservation</a> &nbsp;|&nbsp;&nbsp; <a href="../index.php">Home</a>&nbsp;|&nbsp; <a href="../sitemap.php">Site map</a>&nbsp;|&nbsp; <a href="../prices.php">prices</a>| <a 
  href="../links.php">see all cities</a>| <a href="../sites.php">sites</a></p>
  </div>
</div>
</div>
</body>
</html>