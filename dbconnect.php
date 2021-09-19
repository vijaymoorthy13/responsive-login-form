 <?php

class dbconnect{


function_construct(){
   
   require_once('confiq.php');
   // Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_select_db(DATABASE,$conn)

if(!$conn)
{

   	die("couldn't connect top database");
}
return $conn;
}
}


?>