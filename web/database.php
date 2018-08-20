<?
//in this script we gonna just 
//open a database connection for the further use
$host = 'localhost';
$username='root';
$password='';
$dbname = "patient";
$conn = mysqli_connect($host,$username,$password,$dbname);
//now we crate a connection so if there is 
//no connection we send a confirmation msg
if (!$conn) {
	die("connection failed ".mysqli_errno($conn));
}
else {
	//echo "successful";
}


?>
