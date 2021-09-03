<form action = "createdb.php" method = "post">
	<label for = "dbname">Search</label><br>
	<input type = "text" name = "dbname" /><br>
    <input type = "submit" name = "submit" value = "submit"/>
</form>



<?php
$host = 'db';
$user = 'burgas' ;
$password = 'Burgas63' ;
$db = 'burgas_web' ;

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
	echo 'Nqma da vlizash dneska' . $conn->connect_error;
}



echo 'Pedal to the metal and straight to the galaxy with the Renault laguna 180hp 2.0D straight pipe';

?>
