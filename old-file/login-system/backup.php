<!--<?php  
	//$conn = mysql_connect('localhost', 'root', '');
	 //if (!$conn)
    {
//	 die('Could not connect: ' . mysql_error());
//	}
//	mysql_select_db("olvoting", $conn);
?>-->



			 		<!--$c_name=$_POST['c_name'] ;
					$c_party= $_POST['c_party'] ;					
					$c_course=$_POST['c_course'] ;
					$c_position=$_POST['c_position'] ;
					$c_pic=$_POST['c_pic'] ;

												
		 mysql_query("INSERT INTO `candidate`(candidate_name,candidate_party,candidate_course,candidate_position,candidate_pic) 
		 VALUES ('$c_name','$c_party','$c_course','$c_position','$c_pic')"); 


		   echo "$c_name<br> $c_position<br>  ";
				
				
	        }



	        
    echo "<table>";
    printf ("%s (%s) (%s) (%s)\n",$row[0],$row[1],$row[2],$row[3]);
    
     
