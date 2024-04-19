<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <!-- Add any necessary CSS or JavaScript -->
</head>
<body>

<!-- First div for programming language output -->
<div id="programming-language-output">
    <?php print $pl_output; ?>
</div>

<!-- Second div for recipe generator output -->
<div id="recipe-generator-output">
    <?php echo isset($_SESSION["recipe_dish"]) ? $_SESSION["recipe_dish"] : ''; ?>
</div>

<!-- Third div for social media ads output -->
<div id="social-media-ads-output">
    <?php print $sm_output; ?>
</div>

</body>
</html>
