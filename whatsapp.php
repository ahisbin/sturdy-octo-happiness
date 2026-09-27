<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>TD1 - PHP</title>

    <?php
        $x = 2;
        $y = 4;
        $z = 0;
        $msg = "Bonjour à tous";

        define("PI", 3.14);
    ?>
</head>

<body>

    <?php
        echo $msg;
        
        echo "<p>Bonjour à tous</p><br>";
        
        print "<p>Bonjour à tous</p><br>";

        $z = $x * $y;

        echo $x . " fois " . $y . " = " . $z;

?>

</body>
</html>