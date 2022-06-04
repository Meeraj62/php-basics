<?php
/*
        * a. TABLE recipes
            id INTEGER PRIMARY KEY NOT NULL
            name VARCHAR(50) NOT NULL
            cost DECIMAL(5, 2) NOT NULL

        * b. TABLE ingredients
            id INTEGER PRIMARY KEY NOT NULL
            name VARCHAR(50) NOT NULL
            recipeId INTEGER NOT NULL
            FOREIGN KEY (recipeId) REFERENCES recipes(id)                                                           
    */

$db = new PDO('mysql:host=localhost;dbname=neotech', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$updateSql = "UPDATE recipes r
                JOIN ingredients i on r.id = i.recipeId
                SET r.cost = r.cost + 2
                where r.name = 'tuna'";

$result = $db->exec($updateSql);

if ($result) {
    echo "Successfully updated";
} else {
    echo "Error";
}

$db = null;
