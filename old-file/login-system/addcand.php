<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>add</title>
</head>

<body>
<form method="post" >
<table>

	<tr>
		<td>Candidate Name</td>
		<td><input type="text" name="c_name"  /></td>
	</tr>
	<tr>
		<td>Candidate Party</td>
		<td><input type="text" name="c_party" /></td>
	</tr>
	<tr>
		<td>Candidate Course</td>
		<td><input type="text" name="c_course" /></td>
	</tr>
	<tr>
		<td>Candidate Position</td>
		<td><input type="text" name="c_position" /></td>
	</tr>
	<tr>
		<td>Candidate Picture</td>
		<td> <input type="file" name="c_pic"   /></td>
	</tr>
	
	
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" /></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'connect.php';

	                $c_name= $_POST['c_name'] ;					
	  				$c_party=$_POST['c_party'] ;

	mysqli_query($con,"SELECT * FROM candidate");
    mysqli_query($con,"INSERT INTO candidate (candidate_name,candidate_party) 
VALUES ('$c_name','$c_party')");

   echo "$c_name<br> $c_party<br>  ";

}

	?>



