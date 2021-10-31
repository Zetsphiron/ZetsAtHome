<?php
$servername = "localhost";
$username = "postgres";
$password = "12345";
$dbname = "pds2";
$cruddir = "https://localhost/crudpg";
$whoopsmsg = "Algo salió mal :( <a href='crud.php'>Click here to go back to CRUD</a>";
$port = 5432;

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