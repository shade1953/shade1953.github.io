<?php

$username = 'root';
$password = 'kookaburra32';
$dbname = '466_project';
$server = "localhost";

mysqli_connect($server, $username, $password, $dbname);

?>


<html>
    <head>

        <script src="function.js"></script>
        <link href="style.css" rel="stylesheet">
    </head>


    <input type="submit" name="test" id="test" class="test"/>

    <?php
    $test = 'test';

    if (isset($_POST['test'])){
        echo 'character_cards()';

    }

    ?>

</html>


