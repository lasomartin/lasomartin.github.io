<?php
// define variables and set to empty values
$nameErr = $genderErr = "";
$name = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>