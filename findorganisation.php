<?php


$servername = "localhost";
$ue = "root";
$pd = "";
$dbname = "save_her_from_cancer";

// Create connection
$conn = new mysqli($servername, $ue, $pd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";
    $sql = "SELECT * FROM organisations WHERE state='$q'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $hint = $row['organisationname'].'!'.$row['address'].'!'.$row['organisationid'].'!'.$row['emailid'].'!'.$row['link'].'!'.$row['workingarea'];
            }
            mysqli_free_result($result);
        }else
        {
            echo "No records matching your query were found.";
        }
    } 
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    } 
echo $hint === "" ? "no suggestion" : $hint;
?>