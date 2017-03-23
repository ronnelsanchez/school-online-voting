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

try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}


function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['Id'];
    $posts[1] = $_POST['Fname'];
    $posts[2] = $_POST['Lname'];
    $posts[3] = $_POST['Age'];
    return $posts;
}

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM candidate WHERE Id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['Id'];
                $fname = $row['Fname'];
                $lname = $row['Lname'];
                $age = $row['Age'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
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



if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `candidate` SET `Fname`='$data[1]',`Lname`='$data[2]',`Age`=$data[3] WHERE `Id` = $data[0]";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>
