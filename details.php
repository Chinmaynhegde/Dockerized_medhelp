<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Applicants_id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Age</th>
<th>City</th>
<th>Past_medical_history</th>
<th>Present_medical_problem</th>
<th>Gender</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "appointment");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT a_id,firstname,lastname,email,age,city,past_medical_history,present_medical_problem,gender FROM register";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["a_id"]. "</td><td>" . $row["firstname"] . "</td><td>"
. $row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["age"]."</td><td>".$row["city"]."</td><td>".$row["past_medical_history"]."</td><td>".$row["present_medical_problem"]."</td><td>".$row["gender"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>