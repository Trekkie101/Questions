<?php

$pagetitle = "Create User";

include "settings.php";
include "header.php";

$createtrue = mysql_real_escape_string($_POST['createtrue']);
$name = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);

echo"
<form action='createuser.php' method='post'>
Name: <input type='text' name='name' /><br />
Email: <input type='text' name='email' /><br />
Password: <input type='password' name='password' /><br />
<input type='hidden' value='bingo' name='createtrue' />
<input type='Submit' /> 
</form>
";

if(isset($createtrue)){


mysql_connect($dbhost,$dbuser,$dbpass);

@mysql_select_db($dbname) or die( "Unable to select database");

$query = "INSERT INTO users VALUES ('','$name','$email','$password')";

mysql_query($query);

$lastid = mysql_insert_id();

mysql_close();


echo"$createtrue";
}

?>
