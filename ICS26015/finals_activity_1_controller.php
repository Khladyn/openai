<?php
echo "hello";
session_start();


// Check if the form for programming language was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["language"]) && isset($_POST["task"])) {
    // Handle the programming language form submission
    $selectedLanguage = $_POST["language"];
    $task = $_POST["task"];

}

// Check if the form for recipe generator was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["dish"])) {
    // Handle the recipe generator form submission
    // $dish = $_POST["dish"];
    // $_SESSION["recipe_dish"] = $dish;

    // Redirect to finals_activity_1_output.php
    header("Location: finals_activity_1_output.php");
    exit();
}

// Check if the form for social media ads was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ad"])) {
    // Handle the social media ads form submission
    $adPrompt = $_POST["ad"];
    // Generate social media ad based on the provided prompt
    // Your logic here
    // Redirect or output generated ad as needed
}

?>