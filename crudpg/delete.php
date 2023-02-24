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
$conn = @pg_connect("
    host=$servername 
    port=$port 
    dbname=$dbname 
    user=$username 
    password=$password
    ");
// Check connection
if (!$conn) {
    die("Connection failed: ");
}

if(pg_query($conn, $query)){
    header("location:crud.php");
}else{
    echo $whoopsmsg;
}

?>