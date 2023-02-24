<?php
//TODO: Clase del 21!
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