<?php

/*
    * An application requires different date formats to be converted into one common date
    format.
    Implement the function transformDateFormat which accepts a list of dates as strings, and
    returns a new list of strings representing dates in the format of YYYYMMDD.

    All incoming dates will be valid dates, but only those in one of the following formats:
    a. YYYY/MM/DD
    b. DD/MM/YYYY
    c. MM-DD-YYYY
    Should be included in the returned list, where YYYY, MM, and DD are numbers representing
    the year, month, and day, respectively.

    Example:
    transformDateFormat(array("2010/02/20", "19/12/2016", "11-18-2012","20130720"));
    Should return the array ["20100220", "20161219", "20121118"]
*/

function transformDateFormat($dates)
{
    $result = array();

    foreach ($dates as $date) {
        if (strpos($date, '-')) {
            $date = str_replace('-', '/', $date);
        } else if (strpos($date, '/')) {
            $date = str_replace('/', '-', $date);
        }
        $result[] = date('Ymd', strtotime($date));
    }
    return $result;
}

$formattedDateArray = transformDateFormat(array("2010/02/20", "19/12/2016", "11-18-2012", "20130720"));

echo "<pre>";
print_r($formattedDateArray);
echo "</pre>";
