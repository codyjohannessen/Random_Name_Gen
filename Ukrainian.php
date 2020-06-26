<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 30%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 5px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Ukrainian Name Generator</h2>

<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    
  </tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";

try { 
    $conn = new PDO("mysql:host=$servername;dbname=random", $username, $password);
    // Set the PDO error mode here 
    // Setting as an expection 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Succesfully";
    }
catch (PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
$sql = "SELECT DISTINCT ID, first_name, last_name FROM UkrainianNames ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0){

    while ($row = $result->fetch_assoc()){

        // displays the first and last names
        echo "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td></tr>";
}
    echo "</table>";
} else {
    echo "0 results"; // echoing results if it doesn't work. 
}

?> 