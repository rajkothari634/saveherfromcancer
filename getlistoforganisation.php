<?php
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q === "money") {
    $hint = "Fight from Cancer !123,moti road Khargone Madhya pradesh !fightfromcancer@gmail.com !12.00~Parental Support !45,jawahar marg Patna Bihar !parentalsupport@gmail.com !5.06&28.08 10.03 18.05";
}else{
    $hint = "Fight from Cancer !123,moti road Khargone Madhya pradesh !9787896778 !fightfromcancer@gmail.com !@fightfromcancer !link of the organisation !we work for the betterment of people and to guide them in their path. !background.png~Parental Support !45,jawahar marg Patna Bihar !9887765834 !parentalsupport@gmail.com !@parentalsupport !linjk of oeganisation !we work for the betterment of people and to guide them in their path. !background.png";
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>