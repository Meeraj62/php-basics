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
            
        * Write an SQL update query that will increase the cost of all recipes that have an ingredient by
            $2 and whose name exactly matches "tuna"
    */

$sql = "UPDATE recipes r 
            JOIN ingredients i on r.id = i.recipeId
            SET r.cost = r.cost + 2
            where r.name = 'tuna'";
