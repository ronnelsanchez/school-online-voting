<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Comsel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style>
	hr { <br><br><br>
	}
	
   input[type='text'] { color : black;
   }
  
 divs {
   border: 2px solid #a1a1a1;
    padding: 20px 85px; 
    background: #dddddd;
    width: 300px;
    border-radius: 25px;
    text-center;
}

  body {
      position: relative; 
	   text-align: right;
  }
  #section1 {padding-top:90px;height:400px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:350px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:350px;color: #fff; background-color: #ff9800;}
  #section4 {padding-top:50px;height:350px;color: #fff; background-color: #1E88E5;}
  #section51 {padding-top:50px;height:350px;color: #fff; background-color: #00bcd4;}
  #section52 {padding-top:50px;height:350px;color: #fff; background-color: #009688;}
   #section53 {padding-top:50px;height:350px;color: #fff; background-color: #00bcd4;}
    #section54 {padding-top:50px;height:450px;color: #fff; background-color: #009688;}
  </style>

</head>
<div id="section1" class="container-fluid">
  
  

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>  
		   <span class="icon-bar"></span>  
		    <span class="icon-bar"></span>  
			 <span class="icon-bar"></span>  
		  
                                 		  
      </button>
      <a class="navbar-brand" href="#">Comsel Main</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1"></a></li>
          <li><a href="#section2"></a></li>
          <li><a href="#section3"></a></li>
		  <li><a href="#section4"></a></li>
          
		   
		  
        </ul>
		
      </div>
    </div>
  </div>
</nav>  

<div class="row">
<div class ="col-sm-4">
</div>

<div class ="col-sm-4">

<form method="post">
<table>


	<tr>
		<td><h5>Candidate Name</h5></td>
		<td><input type="text" name="c_name" /></td>
	</tr>
	<tr>
		<td><h5>Candidate Party</h5></td>
		<td><input type="text" name="c_party" /></td>
	</tr>
	<tr>
		<td><h5>Candidate Course</h5></td>
		<td><input type="text" name="c_course" /></td>
	</tr>
	<tr>
		<td><h5>Candidate Position</h5></td>
		<td><input type="text" name="c_position" /></td>
	</tr>
	<tr>
		<td><h5>Candidate Picture</h5></td>
		<td> <input type="file"  name="c_pic" /></td>
	</tr>
	
	
		<td>&nbsp;</td>
		<td><input type="submit" class="btn btn-success" name="submit" value="adds" /></td>
	</tr>
	</div>
</table>
<div class ="col-sm-4">
</div>


</div>
</div>


</div>

<div id="section2" class="container-fluid">
  
  
</div>
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