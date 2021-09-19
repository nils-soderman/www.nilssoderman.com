<?php
    include "../../statics.php";
    // Construct the url
    $NumberOfImages = 10;
    $MaxNumberOfPages = 1;
    $Sort = "latest";
    $BaseUrl = "https://unsplash.com/napi/users/nilssoderman/photos";
    $Url = $BaseUrl . "?per_page=" . $NumberOfImages . "&order_by=" . $Sort;

    // Fetch the content
    
    
    $ParsedContent = array();
    for ($PageNumber = 1; $PageNumber <= $MaxNumberOfPages; $PageNumber++) {
        $Html = file_get_contents($Url . "&page=" . $PageNumber);
        $ParsedPage = json_decode($Html);
        if (empty($ParsedPage)) {
            break;
        }
        $ParsedContent = array_merge($ParsedContent, $ParsedPage);
    }


    // Construct a new json with relevat data
    $WriteableJson = new stdClass();
    foreach ($ParsedContent as &$ImageData) {
        $RawUrl = $ImageData->urls->raw;
        // URL-Example: https://images.unsplash.com/photo-1630174570147-44c5dd7bab9c?ixid=MnwxMjA3fDB8MXxhbGx8MXx8fHx8fDJ8fDE2MzE5NjMxNzg&ixlib=rb-1.2.1
        $ImageID = explode("?", $RawUrl)[0];
        $ImageID = explode("-", $ImageID, 2)[1];

        $WriteableJson->$ImageID = new stdClass();
        $WriteableJson->$ImageID->width = $ImageData->width;
        $WriteableJson->$ImageID->height = $ImageData->height;
    }

    
    WriteToFile("../../../photos/photo-data.json", $WriteableJson);
?>