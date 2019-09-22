<?php

// Run a script
function RunScript($filepath, $bEcho = true){
    if ($bEcho){
        $scriptName = end(explode("/", $filepath));
        echo "<br><br><b>Running Script:</b> " . $scriptName;
    }

    $status = "";

    try {
        include $filepath;
        $status = "OK";
    } catch (Exception $e) {}
    finally {
        if ($bEcho) {
            echo "<br><b>Status: </b>";
            if ($status == ""){
                echo "Error";
            } else {
                echo $status;
            }
        }
        return;
    }
};

// Read File
function ReadFromFile($filename){
    $data = file_get_contents($filename);
    $fileext = end(explode(".", $filename));
    if ($fileext == "json"){
        return json_decode($data, true);
    }
    return $data;
}

// Write to file
function WriteToFile($filename, $content, $bJson = false){
    if ($bJson){
        $content = json_encode($content);
    }
    file_put_contents($filename, $content);
}



?>