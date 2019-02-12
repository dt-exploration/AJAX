<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 80%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$q=$_GET['q'];

$con = new mysqli ('localhost','root','','ajax');
$query = " SELECT * FROM users WHERE id='$q' ";
$result=$con->query($query) or die($con->error);
$row = $result->fetch_assoc();
$con->close();

echo "<table>
<tr>
<th>Ime</th>
<th>Prezime</th>
<th>Godine</th>
<th>Grad</th>
<th>Posao</th>
</tr>";

echo "<tr>";
echo "<td>" . $row['Ime'] . "</td>";
echo "<td>" . $row['Prezime'] . "</td>";
echo "<td>" . $row['Godine'] . "</td>";
echo "<td>" . $row['Grad'] . "</td>";
echo "<td>" . $row['Posao'] . "</td>";
echo "</tr>";

echo "</table>";

?>
</body>
</html>
