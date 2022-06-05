<?php

/*
    * Implement a getViewCount method. It should accept a JSON string and sum all viewCount
        fields inside. The JSON will always have the same structure as in the example case.
        
        Example: calling getViewCount should return 88270796 for the following json string:
            {
            "apiVersion": "2.1",
            "videos": [
                {
                "id": "253",
                "category": "Music",
                "title": "Jingle Bells",
                "duration": 457,
                "viewCount": 88270796
                }
            ]
            }
*/

function getViewCount($json)
{
    $obj = json_decode($json);
    $sum = 0;

    foreach ($obj->videos as $video) {
        $sum += $video->viewCount;
    }

    return $sum;
}

echo getViewCount('{"apiVersion": "2.1", "videos": [{"id": "253", "category": "Music", "title": "Jingle Bells", "duration": 457, "viewCount": 88270796},{"id": "253", "category": "Music", "title": "Jingle Bells", "duration": 457, "viewCount": 88270796}]}');
