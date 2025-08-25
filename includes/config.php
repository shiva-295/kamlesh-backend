

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = mysqli_connect($servername, $username, $password, $database,);


if(!$conn){
    echo "database connection erron";

}else{
    echo "database connected successfully";
}
?>