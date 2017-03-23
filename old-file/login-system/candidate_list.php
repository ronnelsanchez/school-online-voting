<?php
require_once("connect.php");


$sql="SELECT candidate_name,candidate_party,candidate_course,candidate_position FROM candidate";

if ($result=mysqli_query($con,$sql))
  {

echo "<table>";
  // Fetch one and one row
  while ($row=mysqli_fetch_array($result))
    {

 echo "</tr>";
    echo "<td>" . $row['candidate_name'] . "</td>";
    echo "<td>" . $row['candidate_party'] . "</td>";
    echo "<td>" . $row['candidate_position'] . "</td>";
    echo "<td>" . $row['candidate_course'] . "</td>";
 echo "</tr>";
    
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

<h2></h2>


</body>
</html>

