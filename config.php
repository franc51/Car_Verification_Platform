<?PHP
error_reporting(E_ALL );
ini_set('display_errors', 1);
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="car_verification";
$registration = "registration";
if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("Connection Failed");
}else{
}

?>