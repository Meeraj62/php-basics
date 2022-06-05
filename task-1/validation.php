<?php
/*
    * username should be 4 characters long
    * username should contain only letters, numbers and underscores
    * username should start with a letter
    * username should not end with an underscore
*/
function validateUsername($username)
{
    if (isset($username) && !empty($username)) {
        if (strlen($username) < 4) {
            echo "Username must be at least 4 characters long.<br>";
            return false;
        } elseif (!preg_match("/^[a-zA-Z]\w*$/", $username)) {
            echo "Username must start with a letter and can only contain letters, numbers and underscores.<br>";
            return false;
        } elseif (substr($username, -1) == "_") {
            echo "Username cannot end with an underscore.<br>";
            return false;
        } else {
            echo "Username can be accepted. <br>";
            return true;
        }
    } else {
        echo "Username is empty.<br>";
        return false;
    }
}

validateUsername("Meeraj123");
