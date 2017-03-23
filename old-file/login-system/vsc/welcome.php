<!DOCTYPE html>
<html lang="en">
<head>
  <title>Voting Main</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <style>
  body {
      position: relative; 
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
      <a class="navbar-brand" href="#">Voting Main</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">President</a></li>
          <li><a href="#section2">Vice President</a></li>
          <li><a href="#section3">Secretary</a></li>
		  <li><a href="#section4">Treasurer</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Representative <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section51"> SH</a></li>
              <li><a href="#section52">Second Year</a></li>
			   <li><a href="#section53">Third Year</a></li>
			    <li><a href="#section54">Fourth Year</a></li>
            </ul>
          </li>
		   <li>  <div class="col-lg-1 col-offset-6 centered"> <button type="button"   class="btn btn-success" data-toggle="modal" data-target="#myModal">VOTE</button></li></div>
		  
        </ul>
		
      </div>
    </div>
  </div>
</nav>    
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you ok with your vote?</h4>
        </div>
        <div class="modal-body">
          <center><h3>President Candidate Name</h3></center>
		  <center><h3>Vice President Candidate Name</h3></center>
		  <center><h3>Secretary Candidate Name</h3></center>
		  <center><h3>Treasurer Candidate Name</h3></center>
		  <br>
		  <center><h3>SHS Representative</h3></center>
		  <center><h3>Second Year Representative</h3></center>
		  <center><h3>Third Year Representative</h3></center>
		  <center><h3>Fourth Year Representative</h3></center>
        </div>
        <div class="modal-footer">
		  <center><center><button type="button" class="btn btn-default" data-dismiss="modal">Submit</button></center>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<div id="section1" class="container-fluid">
  <!--<h1><p>President</p></h1> -->
 
 <div class="container">
 
 <!--<h1> <p class="text-center"> VOTING </p>  </h1>
<p class="text-center"> Just a Placement Text </p>  -->


     <div class ="row">
	   <div class="col-sm-4"> 
	<label><h1><input type="radio" name="president" checked>Abstain</h1></label>
	
	   </div>
	   
	  <div class="col-sm-4"> 
     <h1><p class="text-center"> President</p></h1>
	 </div>
	 
	  <div class="col-sm-4"> 
	  </div>
	</div>
	
	<br> 
	
	   <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	 <h3 class="text-info"> <p class="text-center";> Liberal Party</p> </h3>
	
	 
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	 <h3 class="text-info"> <p class="text-center";>Nationalista Party </p> </h3>
	  
	  
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	  <h3 class="text-info"> <p class="text-center";>Independent</p> </h3>
	  
	</div>
  </div>
	 
	 
	 
	 <!---     first       -->
	 
  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
          <!----p class="text-primary">NAME: Jonse C. Baterna</p----><br>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		  <p><img src="VSource/jonse.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		  
		  <p class="text-center"><label><input type="radio" name="president"></label></p>
		        
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
		   <h4>
       <!--  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olvoting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  candidate_name FROM candidate";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
        echo  " - Name: " . $row["candidate_name"].  "<br>";
      
    
} else {
    
}
$conn->close();
?>-->
		   </h4>
		   <h5>
            <p class="text-primary">4th year </p>
		   </h5>
		   
		      <h6><p class="text-primary">School of Inforamation Technology</p>	</h6>		
           
	     
		    
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	   <!----p class="text-primary">NAME:Patrick Jason Cuevas</p----><br>
	      <div class="col-sm-6" style="background-color:lavenderblush;">
		  <!---     second      -->
		   <p><img src="VSource/patrick.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		    <p class="text-center"><label><input type="radio" name="president"></label></p>
  <!--p class="text-primary">Candidate Descrition </p--> 	  
	      </div>

	         <h4>

		  
	       <div class="col-sm-6" style="background-color:lavenderblush;"> 
	        <h4>
            <p class="text-primary">Patrick Jason Cuevas</p> 
		   </h4>
		   <h5>
            <p class="text-primary">4th year </p>
		   </h5>
		   
		      <h6><p class="text-primary">School of Inforamation Technology</p>	</h6>		
	      </div> 
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	   <!---p class="text-primary">NAME:Carlo Biolena</p----><br>
	      <div class="col-sm-6" style="background-color:lavender;">
		  <!---     third       -->
		   <p><img src="VSource/carlo.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		    <p class="text-center"><label><input type="radio" name="president"></label></p>
  <!--p class="text-primary">Candidate Descrition </p-->  
	      </div>




		  
	     <div class="col-sm-6" style="background-color:lavender;"> 
	       <h4>
            <p class="text-primary">Carlo Biolena</p> 
		   </h4>
		   <h5>
            <p class="text-primary">4th year </p>
		   </h5>
		   
		      <h6><p class="text-primary">School of Inforamation Technology</p>	</h6>		
	      </div>
	</div>

  </div>
    <div class ="row">
	   <div class="col-sm-4"> 
	<label><h1><input type="radio" name="Vice President"checked>Abstain</h1></label>
	
	   </div>
	   
	  <div class="col-sm-4"> 
     <h1><p class="text-center"> Vice President</p></h1>
	 </div>
	 
	  <div class="col-sm-4"> 
	  </div>
	</div>


  
  
  
 <!-------------- Seperating -------------->
 <!------take note of * & *2 below--->
	 
	   <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	 <h3 class="text-info"> <p class="text-center";>Liberal Party </p> </h3>
	  
	 
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	  <h3 class="text-info"> <p class="text-center";>Nationalista Party</p> </h3>
	  
	  
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	 <h3 class="text-info"> <p class="text-center";>Independent</p> </h3>
	  
	  
	</div>
	
  </div>
	 
	 
	 
	 
	 
  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		   <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		    <p class="text-center"><label><input type="radio" name="Vice President"></label></p>
  <p class="text-primary">Candidate Descrition </p>  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	       <p class="text-primary">Candidate Descrition </p> 
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavenderblush;">
		 
		  <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		   <p class="text-center"><label><input type="radio" name="Vice President"></label></p>
  <p class="text-primary">Candidate Descrition </p>	  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavenderblush;"> 
	       <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	  <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		 <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		  <p class="text-center"><label><input type="radio" name="Vice President"></label></p>
  <p class="text-primary">Candidate Descrition </p>  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
  </div>
  
   <div class ="row">
	   <div class="col-sm-4"> 
	<label><h1><input type="radio" name="Secretary"checked>Abstain</h1></label>
	
	   </div>
	   
	  <div class="col-sm-4"> 
     <h1><p class="text-center"> Secretary</p></h1>
	 </div>
	 
	  <div class="col-sm-4"> 
	  </div>
	</div>
  

  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	 <h3 class="text-info"> <p class="text-center";>Liberal Party</p> </h3>
	  
	 
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	  <h3 class="text-info"> <p class="text-center";>Nationalista Party</p> </h3>
	  
	  
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	  <h3 class="text-info"> <p class="text-center";>Independent</p> </h3>
	  
	  
	</div>
	
  </div>
	 
	 
	 
	 
	 
  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		   <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		    <p class="text-center"><label><input type="radio" name="Secretary"></label></p>
  <p class="text-primary">Candidate Descrition </p>  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavenderblush;">
		 
		  <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		   <p class="text-center"><label><input type="radio" name="Secretary"></label></p>
  <p class="text-primary">Candidate Descrition </p> 
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavenderblush;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		 <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		  <p class="text-center"><label><input type="radio" name="Secretary"></label></p>
  <p class="text-primary">Candidate Descrition </p>		  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
  </div>
  
  <div class ="row">
	   <div class="col-sm-4"> 
	<label><h1><input type="radio" name="Treasurer"checked>Abstain</h1></label>
	
	   </div>
	   
	  <div class="col-sm-4"> 
     <h1><p class="text-center"> Treasurer</p></h1>
	 </div>
	 
	  <div class="col-sm-4"> 
	  </div>
	</div>
  

  
  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	 <h3 class="text-info"> <p class="text-center";>Liberal Party</p> </h3>
	  
	 
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	  <h3 class="text-info"> <p class="text-center";>Nationalista Party</p> </h3>
	  
	  
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	 <h3 class="text-info"> <p class="text-center";>Independent</p> </h3>
	  
	  
	</div>
	
  </div>
	 
	 
	 
	 
	 
  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		   <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		    <p class="text-center"><label><input type="radio" name="Treasurer"></label></p>
  <p class="text-primary">Candidate Descrition </p>	  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	     <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	  <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavenderblush;">
		 
		  <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		   <p class="text-center"><label><input type="radio" name="Treasurer"></label></p>
 <p class="text-primary">Candidate Descrition </p>		  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavenderblush;"> 
	       <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		 <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		  <p class="text-center"><label><input type="radio" name="Treasurer"></label></p>
  <p class="text-primary">Candidate Descrition </p>	  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
  </div>
  
   <div class ="row">
	   <div class="col-sm-4"> 
	<label><h1><input type="radio" name="SH Representative"checked>Abstain</h1></label>
	
	   </div>
	   
	  <div class="col-sm-4"> 
     <h1><p class="text-center"> SH Representative</p></h1>
	 </div>
	 
	  <div class="col-sm-4"> 
	  </div>
	</div>
  
  
  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	  <h3 class="text-info"> <p class="text-center";>Liberal Party</p> </h3>
	  
	 
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	  <h3 class="text-info"> <p class="text-center";>Nationalista Party</p> </h3>
	  
	  
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	  <h3 class="text-info"> <p class="text-center";>Independent</p> </h3>
	  
	  
	</div>
	
  </div>
	 
	 
	 
	 
	 
  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		   <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		    <p class="text-center"><label><input type="radio" name="SH Representative"></label></p>
 <p class="text-primary">Candidate Descrition </p>		  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	       <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavenderblush;">
		 
		  <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		   <p class="text-center"><label><input type="radio" name="SH Representative"></label></p>
 <p class="text-primary">Candidate Descrition </p>		  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavenderblush;"> 
	       <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		 <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		  <p class="text-center"><label><input type="radio" name="SH Representative"></label></p>
  <p class="text-primary">Candidate Descrition </p>	  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
  </div>
  
   <div class ="row">
	   <div class="col-sm-4"> 
	<label><h1><input type="radio" name="Second Year Representative"checked>Abstain</h1></label>
	
	   </div>
	   
	  <div class="col-sm-4"> 
     <h3><p class="text-center"> Second Year Representative</p></h3>
	 </div>
	 
	  <div class="col-sm-4"> 
	  </div>
	</div>
  

  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	 <h3 class="text-info"> <p class="text-center";>Liberal Party</p> </h3>
	  
	 
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	  <h3 class="text-info"> <p class="text-center";>Nationalista Party</p> </h3>
	  
	  
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	  <h3 class="text-info"> <p class="text-center";>Independent</p> </h3>
	  
	  
	</div>
	
  </div>
	 
	 
	 
	 
	 
  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	  <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		   <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		    <p class="text-center"><label><input type="radio" name="Second Year Representative"></label></p>
  <p class="text-primary">Candidate Descrition </p>	  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavenderblush;">
		 
		  <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		   <p class="text-center"><label><input type="radio" name="Second Year Representative"></label></p>
  <p class="text-primary">Candidate Descrition </p>	  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavenderblush;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		 <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		  <p class="text-center"><label><input type="radio" name="Second Year Representative"></label></p>
 <p class="text-primary">Candidate Descrition </p> 		  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	       <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
  </div>
  
     <div class ="row">
	   <div class="col-sm-4"> 
	<label><h1><input type="radio" name="Third Year Representative"checked>Abstain</h1></label>
	
	   </div>
	   
	  <div class="col-sm-4"> 
     <h3><p class="text-center"> Third Year Representative</p></h3>
	 </div>
	 
	  <div class="col-sm-4"> 
	  </div>
	</div>
  

  
   <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	  <h3 class="text-info"> <p class="text-center";>Liberal Party</p> </h3>
	  
	 
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	   <h3 class="text-info"> <p class="text-center";>Nationalista Party</p> </h3>
	  
	  
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	  <h3 class="text-info"> <p class="text-center";>Independent</p> </h3>
	  
	  
	</div>
	
  </div>
	 
	 
	 
	 
	 
  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		   <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		    <p class="text-center"><label><input type="radio" name="Third Year Representative"></label></p>
  <p class="text-primary">Candidate Descrition </p>		  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	     <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavenderblush;">
		 
		  <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		   <p class="text-center"><label><input type="radio" name="Third Year Representative"></label></p>
 <p class="text-primary">Candidate Descrition </p>		  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavenderblush;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		 <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		  <p class="text-center"><label><input type="radio" name="Third Year Representative"></label></p>
 <p class="text-primary">Candidate Descrition </p>		  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
  </div>
  
     <div class ="row">
	   <div class="col-sm-4"> 
	<label><h1><input type="radio" name="Fourth Representative"checked>Abstain</h1></label>
	
	   </div>
	   
	  <div class="col-sm-4"> 
     <h3><p class="text-center"> Fourth Representative</p></h3>
	 </div>
	 
	  <div class="col-sm-4"> 
	  </div>
	</div>
  

  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	 <h3 class="text-info"> <p class="text-center";>Liberal Party</p> </h3>
	  
	 
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	  <h3 class="text-info"> <p class="text-center";>Nationalista Party</p> </h3>
	  
	  
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	  <h3 class="text-info"> <p class="text-center";>Independent</p> </h3>
	  
	  
	</div>
	
  </div>
	 
	 
	 
	 
	 
  <div class="row">
      <div class="col-sm-4" style="background-color:lavender;"> 
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		   <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		    <p class="text-center"><label><input type="radio" name="Fourth Representative"></label></p>
 <p class="text-primary">Candidate Descrition </p>
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	     <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavenderblush;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavenderblush;">
		 
		  <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		   <p class="text-center"><label><input type="radio" name="Fourth Representative"></label></p>
  <p class="text-primary">Candidate Descrition </p>		  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavenderblush;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
      <div class="col-sm-4" style="background-color:lavender;">
	   <p class="text-primary">NAME:</p>
	      <div class="col-sm-6" style="background-color:lavender;">
		 
		 <p><img src="VSource/DeafaltPric.jpg" class="img-rounded" alt="Cinque Terre" width="136" height="118"></p>
		  <p class="text-center"><label><input type="radio" name="Fourth Representative"></label></p>
 <p class="text-primary">Candidate Descrition </p> 		  
	      </div>
		  
	      <div class="col-sm-6" style="background-color:lavender;"> 
	      <p class="text-primary">Candidate Descrition </p>
	      </div>
	</div>
  </div>
  

  
  
  
</div>
 
 
 
</div>
<div id="section2" class="container-fluid">
  
  
</div>
<div id="section3" class="container-fluid">

  
</div>

<div id="section4" class="container-fluid">
 
  
</div>

<div id="section51" class="container-fluid">

  
</div>
<div id="section52" class="container-fluid">

  </div>
  <div id="section53" class="container-fluid">

  
</div>
<div id="section54" class="container-fluid">

  
</div>

</body>
</html>

      <!--li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li--->
    </ul>
  </div>
</nav>
  
<div class="container">
  
</div>

</body>
</html>
