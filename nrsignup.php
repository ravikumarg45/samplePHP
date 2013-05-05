<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Sign Up</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="contact.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
	    <div id="black_bg">

				<div id="menu">
					<ul>
						<li><a href="nrindex.php">Home</a></li>
						<li><a href="nrgallery.php">Gallery</a></li>
						<li><a href="nrabout_us.html">About Us</a></li>
						<li><a href="nrfaq.html">FAQ</a></li>
						<li><a href="nrcontact.html">Contact Us</a></li>
					</ul>
					<div class="clear"></div>
				</div>	
				<div id="logo"> <img src="http://localhost/Images/Eye_2.png" style="margin-top:-35px;">
					<h1><a href="index.php" style="color:yellow;">Nethra Adhyayana</a></h1>
					<a href="#" ><small style="color:yellow;">Welcome to OT Zone</small></a>
				</div>
				
			</div>

                <div style="clear: both"></div>
					
					</div>
				</div>
<!--				<div id="prew_but_bg">
					
				</div>-->
			<div id="content_bg">
					<div id="content">
						<div class="main_box">				
<div id="main" class="mod-con">
      <div id="contact-page" class="container clearfix">
        <div class="main-con">
          <div class="title-nav">
          </div>
          <div class="content">
            <br/><h1>New User Registration:</h1><br/>

<?php

function connectDatabase()
{
	$connection = mysql_connect("localhost","root","");

	if(!$connection)
	{
		echo "Error in Database Connection";
	}

	mysql_select_db("3nethradbc",$connection);

	return $connection;
}

if(isset($_POST['submit']))
{
	$con   = connectDatabase();
	$fname  = $_POST['fname'];
	

	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	$midname=$_POST['midname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$email = $_POST['email'];
	$aemail = $_POST['aemail'];
	$designation = $_POST['designation'];
	$contactno  = $_POST['contactno'];
	
		/*$query1= mysql_query($dbc, "SELECT * FROM user WHERE email=$email");*/
		/*$query1= "SELECT * FROM user WHERE email=$email";
		$result=mysql_query($query1,$con);*/
		if(mysql_num_rows(mysql_query("SELECT * FROM user WHERE email = '$email'")))
		{
			echo "User Already exists";
		}
		else
		{

			if(!empty($email) && !empty($password1) && !empty($password2) && !empty($fname)&& !empty($lname) && !empty($city) && !empty($country) && !empty($gender))
			{

				if(strlen($password1)<6)
				{
					echo "Password must contain more than 6 characters";

					break;
				}
				if($password1 != $password2)
				{
					echo "Password Mismatch";
					break;
				}


				
				$query = "insert into user (password,doj,fname,midname,lname,gender,city,country,email,designation,aemail,contactno) values(SHA('$password1'),NOW(),'$fname','$midname','$lname','$gender','$city','$country','$email','$designation','$aemail','$contactno')";
				$success = mysql_query($query,$con);
						if(isset($success))
						{
							echo "SuccessFully added";
						}
			}
			
			else
			{
				echo "Fill all the fields";
			}
		

		
		}
        		mysql_close($dbc);

require_once('./PHPMailer1/class.phpmailer.php');
 
$mail             = new PHPMailer();
 
$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth   = true;                  		// enable SMTP authentication
$mail->SMTPSecure = "ssl";                 		// sets the prefix to the servier
//$mail->SMTPSecure = "tls";                 		// sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      		// sets GMAIL as the SMTP server
$mail->Port       = 465;                  	 	// set the SMTP port for the GMAIL server
$mail->Username   = "*******@gmail.com";  	// GMAIL username
$mail->Password   = "**********";		// GMAIL password
 
$mail->SetFrom('*******@gmail.com', 'Nethra Adhyayana');
 
$mail->Subject    = "Update - 2";
 
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
 
$mail->MsgHTML($body);
 
$address = "*******@gmail.com";

$mail->AddAddress($address, "Ravi");
 
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

       			exit();
        
}	
?>



<form action="http://localhost/verify_captcha1.php" method="POST">
<p>
	<label>* FName : </label>		&nbsp;&nbsp;<input type="text" value="" name="fname" size="15"/>
	<label>MidName : </label>		<input type="text" value="" name="midname" size="15"/>
	<label>* LName : </label>		<input type="text" value="" name="lname" size="15"/><br/> <br/>
	<label>* Password : </label>	<input type="password" value="" name="password1" size="15"/>&nbsp;&nbsp;&nbsp;
	<label>* Re enter Password : </label>	<input type="password" value="" name="password2" size="15"/><br/><br/>
	<label>* Gender : </label>		<input type="text" value="" name="gender" size="15"/><br/><br/>
	<label>* City : </label>		<input type="text" value="" name="city"/>
	<label>* Country: </label>		<input type="text" value="" name="country"/><br/><br/>
	<label>* E-Mail : </label>	<input type="text" value="" name="email"/><br/><br/>
	<label>Alternate E-Mail : </label>	<input type="text" value="" name="aemail"/><br/><br/>
	<label>Contact num :</label> <input type="text" value="" name="contactno"/><br/><br/>
	<label>Designation:</label> <input type="text" value="" name="designation"/><br/><br/>
	<p> Fields marked * are mandatory </p>


<p>
    <img id="siimage" style="border: 1px solid #000; margin-right: 15px" src="./securimage_show.php?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" align="left">
    <object type="application/x-shockwave-flash" data="./securimage_play.swf?audio_file=./securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" height="32" width="32">
    <param name="movie" value="./securimage_play.swf?audio_file=./securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000">
    </object>
    &nbsp;
    <a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = './securimage_show.php?sid=' + Math.random(); this.blur(); return false"><img src="./images/refresh.png" alt="Reload Image" onclick="this.blur()" align="bottom" border="0"></a><br />
    <strong>* Enter Code:</strong><br/>
    <input type="text" name="ct_captcha" size="12" maxlength="8" />
  </p>
	<input type="submit" value="Register" name="submit" style="height: 25px; width: 110px"/>  

</p>
</form>
          </div>
        </div>
	
            </div>
</div>
</div>
</div>

<!--<div style="margin-top:334px;">-->
<div id="footer_border_top"></div> <!-- Brown border line near site footer -->
				<div id="footer_bot">
					<p>&copy;  2012. Designed by <a href="http://www.pesse.pes.edu" title="PES School Of Engineering">PESSE</a></p>
				</div>
			<!--</div>-->
      </div>
	</div>
    </body>
</html>




