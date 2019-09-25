<?php

    include "../statics.php";
    
    echo "<h1>Daily Bot</h1><br>";
    echo  "<h2>Today is: " . date("Y-m-d") . "</h2>";

    // This code will execute once a day
    RunScript("./daily/get-latest-bss-minecraft-rig.php");
?>