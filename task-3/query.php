<?php

/*
        * a. TABLE menu
            itemName VARCHAR(50) PRIMARY KEY NOT NULL,
            category VARCHAR(50) NOT NULL,
            price DECIMAL(5,2)

        * Write an SQL update statement that will increase the price of all menu items that are in
            either the "Soups" or "Salads" categories by 10%
    */

$sql = "UPDATE menu SET price = price * 1.1 WHERE category IN ('Soups', 'Salads')";
