<?php
include("./inc/settings.php");

//print_r($_POST);
$query = "SELECT * FROM users WHERE numero_de_empleado = '$_POST[username]' AND pass = md5('$_POST[pwd]');";
// echo $query;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query($query);
// print_r($result);
if ($result->num_rows > 0) {

    // output data of each row
    $row = $result->fetch_assoc();
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
$conn->close();

?>