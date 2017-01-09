
<?php
if(isset($_REQUEST["sid"]))
{
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "lucrarean";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query("delete FROM clienti where id=".$_POST['sid']);
}else echo 'Not Deleted Error Occured';
?>