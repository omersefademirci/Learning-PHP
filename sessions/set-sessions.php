<?php 

     session_start();

    // $_SESSION["username"] = "sefademirci";
    // $_SESSION["password"] = "1234";

    //Session deleted
    //unset($_SESSION["username"]);

    //Session all delete
    //session_unset();

    //Session info delete
    //session_destroy();
    //$_SESSION = [];

    if(isset($_SESSION["username"])){
        echo $_SESSION["username"]."<br>";
    }else{
        echo "username is not defined.";
    }
    echo $_SESSION["password"];

?>