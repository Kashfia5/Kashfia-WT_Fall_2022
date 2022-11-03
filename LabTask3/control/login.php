<?php
$passwordError = "";
if (isset($_REQUEST["login"]))
{
	if (file_exists("../data/users.json"))
	{
		if (isset($_REQUEST["mail"]) || isset($_REQUEST["password"]))
			{
				if ($_REQUEST["mail"]=="")
				{
					echo "<br> Email is required";
				}
				if ($_REQUEST["password"]=="")
				{
					echo "<br> Passwoed is required";
					$passwordError= "";
				}
				if($_REQUEST["password"]=="" && strlen($_REQUEST["password"])<5)
				{
					echo "<br>password length is invalid, please use your correct password, is must require min of 5 chars";
				}
				$jsondata=json_decode(file_get_contents("../data/users.json"));
				
					if ($_REQUEST["mail"]&& $_REQUEST["password"])
					{
						echo $_REQUEST["mail"]."<b>Welcome to Dashboard";
						return;
					}
				
			}
			else {
				echo "<br> please try with valid username and password with valid legth<br>";
			}
	}
	else {
		echo "<br>the database file might be deleted, plase try to register with new one and try again later";
	}
}

?>