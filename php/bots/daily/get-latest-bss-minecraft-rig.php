<?php

$html = file_get_contents('https://sites.google.com/view/boxscape-studios/downloads');

$doc = new DOMDocument();
$doc->loadHTML($html);

$xpath = new DOMXpath($doc);

$nodes = $xpath->query('//a');

$DownloadUrl = "";

foreach($nodes as $node) {
    $url = $node->getAttribute("href");
    if (strpos($url,'dropbox') !== false){
        $url = urldecode ( $url );
        $urlSplit = explode ("?q=", $url);
        $urlSplit = explode ("?", $urlSplit[1]);
        $url = $urlSplit[0] . "?dl=1";
        $DownloadUrl = $url;
        break;
    };
}

WriteToFile("./../../downloads/minecraft-blender-rig/bss-edit-url.txt", $DownloadUrl);

echo "<br><b>URL found:</b> " . $DownloadUrl;

?>