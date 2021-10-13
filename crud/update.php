<?php
include("./inc/settings.php");
validate();
?>
<?php
$query="SELECT column1,column2,column3,column4,column5 
    FROM table1 
    WHERE column1 = ".$_GET['column1'].";";

// echo $query;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($query);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($conn->query($query)==TRUE){
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        
        ?>
        <form action="update2.php" method="POST">
        <fieldset>
            <legend>Inserte la información actualizada del registro:</legend>
            ID <input type="number" name="identifier" id="" value="<?= $row['column1'] ?>" readonly><br>
            Name: <input type="text" name="name" id="" value="<?= $row['column2'] ?>"><br>
            Date: <input type="date" name="date" id="" value="<?= $row['column3'] ?>"><br>
            Number: <input type="double" name="num" id="" value="<?= $row['column4'] ?>"><br>
            FNumber: <input type="float" name="fnum" id="" value="<?= $row['column5'] ?>"><br>
            <br>
            <input type="submit" value="Actualizar"><br>
        </fieldset>
        </form>
        <?php
    }
}else{
    echo $whoopsmsg;
}


?>