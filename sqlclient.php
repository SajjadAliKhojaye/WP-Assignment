<?php
$servername = $_POST["sname"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$database = $_POST["dbase"];
$query = $_POST["tarea"];

//Database Connection
$conn = mysqli_connect($servername, $user, $pass);
if(!$conn){
    die("Failed to Connect". mysqli_connect_error());
}
else{
    echo "The connection was established<br>";
}

//Create Table
$db_creation = mysqli_query($conn, $query);
if($db_creation){
    echo "Query: ". $query;
    echo "<br>";
    echo "Result: Database Created Successfully<br>";
}
else{
    echo "Query: ". $query;
    echo "<br>";
    echo "Result: Failed to Create Database<br>";
}

// //Create Table
$conn = mysqli_connect($servername, $user, $pass, $database);
$create_table = mysqli_query($conn, $query);
if($create_table){
    echo "Query: ". $query;
    echo "<br>";
    echo "Result: Table have been successfully created<br>";
}
else{
    echo "Query: ". $query;
    echo "<br>";
    echo "Result: Failed to create table<br>";
}

//Insert Record
$Insert_record = mysqli_query($conn, $query);
if($Insert_record){
    echo "Query: ". $query;
    echo "<br>";
    echo "Result: Record have been successfully Inserted<br>";
}
else{
    echo "Query: ". $query;
    echo "<br>";
    echo "Result: Failed to insert record<br>";
}

// //Update Record
$Update_record = mysqli_query($conn, $query);
if($Update_record){
    echo "Query: ". $query;
    echo "<br>";
    echo "Result: Record have been successfully Updated<br>";
}
else{
    echo "Query: ". $query;
    echo "<br>";
    echo "Result: Failed to update record<br>";
}

// //Alter Table
$Alter_Table = mysqli_query($conn, $query);
if($Alter_Table){
    echo "Query: ". $query;
    echo "<br>";
    echo "Result: Table have been successfully Altered<br>";
}
else{
    echo "Query: ". $query;
    echo "<br>";
    echo "Result: Failed to alter table<br>";
}
?> 
