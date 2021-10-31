<?php
include("./inc/settings.php");

//print_r($_POST);
$query = "SELECT * FROM users WHERE numero_de_empleado = '$_POST[username]' AND pass = md5('$_POST[pwd]');";
// echo $query;


// Create connection: MySQL
//$conn = new mysqli($servername, $username, $password, $dbname);

// Create connection: PostgreSQL
$conn = @pg_connect("
    host=$servername 
    port=$port 
    dbname=$dbname 
    user=$username 
    password=$password
    ");

// Check connection
if ($conn) {
    echo "Sucessful connection!";
}else{
    die("Connection failed: ");
}

$result = pg_query($conn, $query);
// print_r($result);
if (pg_num_rows($result) > 0) {

    // output data of each row
    $row = pg_fetch_assoc($result);
    //echo "Access validated. Redirecting to main page...";

    session_start();
    $_SESSION["nombre"] = $row["nombre"];
    $_SESSION["apellido1"] = $row["apellido1"];
    $_SESSION["apellido2"] = $row["apellido2"];
    
    header("location:crud.php");
    
} else {
    echo "Illegal Access! Your IP will be logged and will be notified to the web police.";
?>
    <a href="<?= $cruddir ?>">Go back</a>
<?php
}
pg_close($conn);

?>