<?php

    function is_username_valid($username) {
        if (!preg_match("/^[a-z]{5,9}$/",$username)) {
            echo "false"; 
        } else{
            echo "true";
        }
    }

    function is_password_valid($password) {
        if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{10}$/",$password)) {
            echo "false"; 
        } else {
            echo "true";
        }
    }


    echo '@wakwaw &emsp;'; is_username_valid("@wakwaw");
    echo '<br>';
    echo 'poEtri &emsp;'; is_username_valid("poEtri");
    echo '<br>';
    echo 'tiara &emsp;'; is_username_valid("tiara");

    echo '<br><br>';
    echo 'p@ssW0rd99 &emsp;'; is_password_valid("p@ssW0rd99");
    echo '<br>';
    echo 'C0d3YourFuture!# &emsp;'; is_password_valid("C0d3YourFuture!#");

    echo '<br>';

?>