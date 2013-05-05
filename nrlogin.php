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

$con   = connectDatabase();

	$email = $_POST['email'];
	$password=$_POST['password'];


if(mysql_num_rows(mysql_query("SELECT * FROM user WHERE email = '$email' AND password=SHA('$password')")))
{
				$row=mysql_fetch_array($data);
				$_SESSION['eid']= $row['emailid'];
				$_SESSION['username']= $row['fname'];
				setcookie('Emailid',$row['emailid'],time()+(30*24*60*60));
				setcookie('Username',$row['fname'],time()+(30*24*60*60));
				
//			echo "You are logged in as: ";
//			echo $_SESSION['username'];
	
				$home_url='http://localhost/nrhome.php';	
				header('Location:'.$home_url);	//redirection	
					
}
			else
			{
				echo 'Sorry! Enter VALID userid and password.';
			}

?>
