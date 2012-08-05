<?php

include "settings.php";

$_GET['createtrue'];

echo"
<form action='createuser.php' method='post'>
Name: <input type='text' name='name'>
</form>
";

if(isset($createtrue)){

/*
mysql_connect($dbhost,$dbuser,$dbpass);

@mysql_select_db($dbname) or die( "Unable to select database");

$query = "INSERT INTO visits VALUES ('','$managerid','$dayte','$typeid','$friendly1','$friendly2','$friendly3','$friendly4','$accuracy1','$accuracy2','$accuracy3','$speed1','$quality1','$quality2','$quality3','$cleanliness1','$cleanliness2','$cleanliness3','$cleanliness4','$cleanliness5','$cleanliness6','$storeid','$totaladd','$grandtotal','$completeby')";

mysql_query($query);

$lastid = mysql_insert_id();

mysql_close();

*/

}

?>
