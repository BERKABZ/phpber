
<?php
    $servername = "localhost";
    $Username = "root";
    $Password = "";
    $db_name = "bsit2";
    $conn = new mysqli ($servername, $Username, $Password, $db_name);
    if ($conn-> connect_error)
    {
        die("Connection Failed" .$conn->connect_error);
    }
    echo "";

?>