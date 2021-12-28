<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <?php
    $_SESSION["language"]="PHP";
    $_SESSION["text_editor"]="Nvim";
    echo "sessions variables are set";
    ?>
    <h1>Now to call the sessions</h1>
    <?php
    print_r($_SESSION);
    
    ?>
</body>
</html>