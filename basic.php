<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page of PHP</title>
</head>
<body>
    <h2>This is the syntax of php </h2>
    <?php

    echo "Hello World! <br>";
    ECHO "Hello world! <br>";
    EcHo "Hello World! <br>";
    echo "<h2>Syntax for variable names</h2>";
    $fruits="Banana"; 
    echo "My fav Fruit is".$fruits."<br>";
    echo "My fav Fruit is".$Fruits."<br>";
    echo "My fav Fruit is".$FruIts."<br>";
    echo "<h2>Using Variables</h2>";
    $txt="Welcome Everyone";
    echo "Hello and ".$txt."<br>";

    echo "<h2>Constant declare</h2><br>";
    define("language","PHP is the best scripting language");
    echo language;
    echo "<h2>Function example</h2>";
    function sum(int $a , int $b){
        return $a+$b;
    }
    echo "Sum is ".sum(5,10);
    echo "<h2>Using Arrays</h2>";
    $language=array("Python","C++","C","PHP","Java","Javascript");
    echo "I use ".$language[0]." and ".$language[1]." and ".$language[2]." as programming language<br>";
?>
</body>
</html>