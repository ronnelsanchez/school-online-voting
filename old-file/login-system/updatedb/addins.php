<?php

$host = "localhost";
$user = "root";
$password ="cookie";
$database = "dbupdate";

$Id = "";
$Fname = "";
$Lname = "";
$Age = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}
// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['Id'];
    $posts[1] = $_POST['Fname'];
    $posts[2] = $_POST['Lname'];
    $posts[3] = $_POST['Age'];
    return $posts;
}



 

if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `candidate`(`Fname`, `Lname`, `Age`) VALUES ('$data[1]','$data[2]',$data[3])";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `candidate` WHERE `Id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}






?>


<!DOCTYPE Html>
<html>
    <head>
        <title>PHP INSERT UPDATE DELETE SEARCH</title>
    </head>
    <body>
        <form action="addins.php" method="post">
            <input type="number" name="Id" placeholder="Id" value="<?php echo $Id;?>"><br><br>
            <input type="text" name="Fname" placeholder="First Name" value="<?php echo $Fname;?>"><br><br>
            <input type="text" name="Lname" placeholder="Last Name" value="<?php echo $Lname;?>"><br><br>
            <input type="number" name="Age" placeholder="Age" value="<?php echo $Age;?>"><br><br>
            <div>
                <!-- Input For Add Values To Database-->
                <input type="submit" name="insert" value="Add">
                
                <!-- Input For Edit Values -->
                <input type="submit" name="update" value="Update">
                
                <!-- Input For Clear Values -->
                <input type="submit" name="delete" value="Delete">
                
                <!-- Input For Find Values With The given ID -->
                <input type="submit" name="search" value="Find">
            </div>
        </form>
    </body>
</html>
