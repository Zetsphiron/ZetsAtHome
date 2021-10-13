<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
$cruddir = "https://localhost/crud";
$whoopsmsg = "Algo salió mal :( <a href='crud.php'>Click here to go back to CRUD</a>";

function validate(){
    session_start();
    if (empty($_SESSION["nombre"])) {
        echo "Illegal Access! Your IP will be logged and will be notified to the web police.";
?>
    <a href="../crud/">Go back</a>
<?php
    exit();
    }
}

?>