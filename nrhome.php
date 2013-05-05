<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Home</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="http://localhost/styles.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
	    <div id="black_bg">
	    	<div id="header_bg">
				<div id="menu">
					<ul>
						<li><a href="nrhome.php" class="active">Home</a></li>
						
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
				<div id="prew_img">
				
				   <ul class="round">
			<li><img src="images/44.jpg" alt="" /></li>
			<li><img src="images/55.jpg" alt="" /></li>
			<li><img src="images/Trinethra.png" alt="" /></li>
			<li><img src="images/33.jpg" alt="" /></li>
			<li><img src="images/11.jpg" alt="" /></li>
			<li><img src="images/66.jpg" alt="" /></li>
</ul>
<script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="lib/jquery.roundabout.js"></script>
<script type="text/javascript">
			
			$(document).ready(function() {
				$('.round').roundabout();
			});
		
		</script>
				
				</div>
			</div>
		</div>	

                <div style="clear: both"></div>
					
					</div>
				</div>
				<!--<div id="prew_but_bg">
					
				</div>-->
				<div id="content_bg">
					<div id="content">
						<div class="main_box">
							<h2>Welcome to Nethra Adhyayana!</h2>
							<p>Nethra Adhyayana portal provides a wide range of OT (Ophthalmology) images in DICOM format.
		
						</div>
						<div id="column_box">
							<div class="column1_content">
								<h3> Actions</h3>
								<div class="column_text">
									<!--<div class="img_bg">
										<img src="images/ot.jpg" alt="" title="" />
									</div>--> <p> Welcome  <a href="nrlogout.php"> Logout </a> </p>
									<h4 style="margin-left:30px;margin-top:20px;"> Dicom Image Uploader </h4>
									<div style="margin-top:20px;">
									<!--<form enctype="multipart/form-data" action="http://localhost/12.php" method="POST">
									 Choose a file: <input name="image_file" type="file" />
									 <input type="submit" value="Upload" /><br/>
									 </form>-->
<form method='POST' enctype='multipart/form-data' name='frmmain' action='http://localhost/nrhome.php'>
Browse for Image (.dcm): <input type="file" name="image_file" size="35">
<br>
<input type="submit" value="  Upload File  " name="action">

<?php
if (trim($_POST["action"]) == "Upload File") { 

$target_path='images/';	
$name=basename($_FILES['image_file']['name']);
$imagename = $target_path.basename($_FILES['image_file']['name']);

$fextension= end(explode(".", $imagename));
if($fextension=='dcm')
{
   $result = move_uploaded_file($_FILES['image_file']['tmp_name'], $imagename);
	
   if ($result==1) //echo("<script> alert('Upload Successful')</script>"); 
echo("<br/><br/><b>Successfully uploaded: ".$imagename."</b>");


}
else { echo("<br/><br/><b>Only DICOM images are allowed</b>"); 
//print 'alert("Only DICOM images are allowed")'; 

//echo("<script> alert('Only DICOM images are allowed')</script>"); 
}

}
?>

</form>

									</div><br/><br/><br/>
									<h4> Wanna Download DICOM images? <a href="nrgallery.php"> Click Here</a></h4>


								</div>
								<div class="column_content_bot"></div>
							</div>
							<div class="column2_content">
								<h3>3Nethra</h3>
								<div class="column_text">
									<div class="img_bg">
										<img src="images/3nethra12.jpg" alt="" title=""  style="margin-left:50px;"/>
									</div>
									<p style="margin-top:15px; font-size:18px;"><a href="http://forushealth.com/forus/products">3Nethra</a> is a single, portable, intelligent, non-invasive, non-mydriatic pre-screening Ophthalmology device that can detect major ailments such as Diabetic retinopathy, cataract, glaucoma, cornea problems and refractive errors</p>
								</div>
								<div class="column_content_bot"></div>
							</div>
							<div class="column3_content">
								<h3>Nethra Adhyayana Vision</h3>
								<div class="column_text">
									<div class="img_bg">
										<img src="images/ot.jpg" style="margin-left:10px;" alt="" title="" />
									</div>
									<p> To provide a convenient way for researchers, medical students, doctors to have access to huge DICOM image samples with OT Modality</p>
								</div>
								<div class="column_content_bot"></div>
							</div>
							<div class="clear"></div>
						</div>
					
					</div>
				</div>
				<div id="content_bottom_bg">
					<div id="content_bottom">
						<div class="con_bot_left">
							<h4>How to Download Dicom image samples of Eye?</h4>
						</div>
						<div class="con_bot_right">
						<p>
Simple!!! If you are a registered user, just login to your profile and start downloading Dicom samples of your interest!! 
If you are a new user, just signup on our site to start downloading Dicom image samples!!! </p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div id="footer_border_top"></div> <!-- Brown border line near site footer -->
				<div id="footer_bot">
					<p>&copy;  2011. Designed by <a href="http://www.pesse.pes.edu" title="PES School Of Engineering">PESSE</a></p>
				</div>
			</div>
		</div>
    </body>

					

</html>
