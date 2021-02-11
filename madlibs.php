<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Mad Libs</title>
</head>

<body>
    <form action="madlibs.php" method="post">
        Noun:<input type="text" name="noun" /> </br>
        Verb:<input type="text" name="verb" /> </br>
        Adjective:<input type="text" name="adj" /> </br>
        <input type="submit" value="submit" />
    </form>
    </br>
    <?php
    $noun = $_POST['noun'];
    $verb = $_POST['verb'];
    $adj = $_POST['adj'];

    echo "There is a $noun <br>";
    echo "Who $verb everyday <br>";
    echo "This $noun is not $adj, this $noun is very $adj <br>";
    echo "The next day, the $noun $verb again<br>";
    ?>
</body>

</html>