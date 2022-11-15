<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='basic';

$conn =mysqli_connect($hostname,$username,$password,$dbname);

$print = "Connection Successful";

if($conn)
{
	echo $print;

}
else
{
	echo "Connection Failed";
}
?>