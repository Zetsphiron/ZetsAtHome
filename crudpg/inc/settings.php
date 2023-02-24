<?php
// Local settings
/*
$servername = "localhost";
$username = "postgres";
$password = "12345";
$dbname = "pds2";
$cruddir = "https://localhost/crudpg";
*/

// Heroku's remote settings
$servername = "ec2-44-199-158-170.compute-1.amazonaws.com";
$username = "wjddecddubhnnb";
$password = "c2641ab2b7c46bc1c086437f133deb0cd0bd3f9bd57238fdbcb0b5abedd53cba";
$dbname = "d52cll34fujq6j";
$cruddir = "http://pds2-page.herokuapp.com/crudpg/";

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