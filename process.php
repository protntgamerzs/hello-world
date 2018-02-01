<?php
    // values passe form in Login.html file
    $username = $_POST['username']
    $Password = $_POST['password'];

    // to prevent mysql injection
    $username = stripcslashes($username);e
    $Password = stripcslashes ($Password);
    $username = mysql_real_escape_string($username);
    $Password = mysql_real_escape_string ($Password);

    // connect to the server and select database
    mysql_connect("localhost", "root", "";
    mysql_select_db("Login");

    // Query the database for user
    $result = mysql_query("select * from users where username = '$username' and password = '$Password'")
                  or die ("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row ['username'] == $username && $row['password'] == $Password ){
      echo "Login succes!!! Welcome ".$row['username'];
    } else {
      echo "Failed To Login!";
    }

  ?>




?>
