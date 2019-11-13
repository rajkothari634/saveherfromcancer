<?php
// Array with names


$a[] = "Acute Lymphoblastic Leukemia (ALL)";
$a[] = "Acute Myeloid Leukemia (AML)";
$a[] = "Adolescents";
$a[] = "Adrenocortical Carcinoma";
$a[] = "Childhood Adrenocortical Carcinoma";
$a[] = "AIDS-Related Cancers";
$a[] = "Kaposi Sarcoma (Soft Tissue Sarcoma)";
$a[] = "AIDS-Related Lymphoma (Lymphoma)";
$a[] = "Primary CNS Lymphoma (Lymphoma)";
$a[] = "Anal Cancer";
$a[] = "Appendix Cancer - see Gastrointestinal Carcinoid Tumors";
$a[] = "Astrocytomas Childhood (Brain Cancer)";
$a[] = "Atypical Teratoid";
$a[] = "Basal Cell Carcinoma of the Skin";
$a[] = "Bile Duct Cancer";
$a[] = "Bladder Cancer";
$a[] = "Childhood Bladder Cancer";
$a[] = "Bone Cancer";
$a[] = "Brain Tumors";
$a[] = "Nasal Cavity";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Paranasal Sinus";
$a[] = "Liza";
$a[] = "Neuroblastoma";
$a[] = "Nasopharyngeal";
$a[] = "Wenche";
$a[] = "Non-Small Cell Lung Cancer";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>