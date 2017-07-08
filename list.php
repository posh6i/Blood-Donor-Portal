<html>
<head>
<style>
    td:hover{
        background-color:grey;
    }
    table{
    background-color: white;
    border-style: solid;
    border-width: 5%;
    border-color: grey;
    }
</style>    
<?php
$servername = "localhost";
$username = "root";
$password = "12017";

try {
    //make a connection
    $conn = new PDO("mysql:host=$servername;dbname=donors", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

//selecting and displaying data in a table

$query = $conn->query('SELECT * FROM donors');

    echo '<table style="width:100%" border: 5px solid black" > <tr>';
    echo '<th> Name </th>';
    echo '<th> Email ID </th>';
    echo '<th> Phone Number </th>';
    echo '<th> Whatsapp Number </th>';
    echo '<th> Blood Group </th>';
    echo '<th> Age </th>';
    echo '<th> Medical History </th>';
    echo '</tr>';
    while($row = $query->fetch()) {
        
        echo '<tr>';
        echo '<td>';
        echo $row['name'];
        echo '</td>';
        echo '<td>';
        echo $row['email'];
        echo '</td>';
        echo '<td>';
        echo $row['phoneno'];
        echo '</td>';
        echo '<td>';
        echo $row['whatsappno'];
        echo '</td>';
        echo '<td>';
        echo $row['bgroup'];
        echo '</td>';
        echo '<td>';
        echo $row['age'];
        echo '</td>';
        echo '<td>';
        echo $row['mhistory'];
        echo '</td>';
        echo '</tr>';

    } 
    echo '</table>';

    ?>