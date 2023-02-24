<?php
include("./inc/settings.php");
validate();
?>
<?php
//print_r($_GET);

$identifier = $_GET ['column1'];
$query="DELETE FROM table1 WHERE column1=$identifier;";
//echo $query;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($conn->query($query)==TRUE){
    header("location:crud.php");
}else{
    echo $whoopsmsg;
}

?>