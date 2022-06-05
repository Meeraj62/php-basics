<?php

/*
    * A large package can hold five items, while the small package can hold only one item.
        The available number of both large and small packages is limited. All items must be placed in
        packages and used packages have to be filled up completely.

        Write a function that calculates the minimum number of crates needed to hold a given
        number of items. If it's not possible to meet the requirements, return -1.

        Example:
        We have 16 items, 2 large and 10 small crates.
        The function should return 8 (2 large crates + 6 small crates).
*/

function countCrates(int $items, int $largeCrates, int $smallCrates)
{
    $smallCrates = $items % ($largeCrates * 5);

    if ($largeCrates * 5 + $smallCrates >= $items) {
        return $largeCrates + $smallCrates . " ( $largeCrates large crates + $smallCrates small crates )";
    } else {
        return -1;
    }
}

echo countCrates(16, 2, 10);
