<?php
include("./inc/settings.php");
validate();
?>
<?php
$query = "UPDATE table1 
    SET column2='".$_POST['name']."', 
    column3='".$_POST['date']."', 
    column4='".$_POST['num']."', 
    column5='".$_POST['fnum']."' 
    WHERE column1=".$_POST['identifier'].";";


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