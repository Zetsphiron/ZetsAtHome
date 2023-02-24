<?php
include("./inc/settings.php");
validate();
?>
<?php
/* print_r($_POST); */
/* echo $_POST ['identifier']."<br>\n"; /*<- this is a """line skip"""*/
/*echo $_POST ['name'];
echo $_POST ['date'];
echo $_POST ['num'];
echo $_POST ['fnum'];*/

$identifier = $_POST ['identifier'];
$name = $_POST ['name'];
$date = $_POST ['date'];
$num = $_POST ['num'];
$fnum = $_POST ['fnum'];

$query="INSERT INTO table1 
    (column1,column2,column3,column4,column5) 
    VALUES ($identifier, '$name', '$date', $num, $fnum);";
// echo $query;


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

if(pg_query($conn, $query)){ //TODO: Remove the ==TRUE on mySQL version?
    header("location:crud.php");
}else{
    echo $whoopsmsg;
}

?>