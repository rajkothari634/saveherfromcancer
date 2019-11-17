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
$c = 0;
// lookup all hints from array if $q is different from ""
if ($q === "money") 
{
    $sql = "SELECT * FROM organisations";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                if($c>=3){
                    if ($hint === "") {
                         $hint = $row['organisationname'].'!'.$row['address'].'!'.$row['emailid'].'!'.$row['moneygiven'];
                     } else {
                         $hint .= '~'.$row['organisationname'].'!'.$row['address'].'!'.$row['emailid'].'!'.$row['moneygiven'];
                     }
                }else{$c = $c + 1;}
            }
            // Free result set
            $hint .= '&28.08 10.03 18.05';
            mysqli_free_result($result);
        }else
        {
            echo "No records matching your query were found.";
        }
    } 
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    } 
}
else{
    $sql = "SELECT * FROM organisations";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                if ($hint === "") {
                    $hint = $row['organisationname'].'!'.$row['address'].'!'.'9753719205'.'!'.$row['emailid'].'!@'.$row['organisationid'].'!'.$row['link'].'!'.$row['aboutyou'].'!background.png';
                }else {
                    $hint .= '~'.$row['organisationname'].'!'.$row['address'].'!'.'9753719205'.'!'.$row['emailid'].'!@'.$row['organisationid'].'!'.$row['link'].'!'.$row['aboutyou'].'!background.png';
                }   
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
    // $hint = "Fight from Cancer !123,moti road Khargone Madhya pradesh !9787896778 !fightfromcancer@gmail.com !@fightfromcancer !link of the organisation !we work for the betterment of people and to guide them in their path. !background.png~Parental Support !45,jawahar marg Patna Bihar !9887765834 !parentalsupport@gmail.com !@parentalsupport !linjk of oeganisation !we work for the betterment of people and to guide them in their path. !background.png";
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>