<!DOCTYPE html>
<!--
The source code for this website is avaliable on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Minecraft Blender Rig Download - Rymdnisse</title>
  <meta name="description" content="A free Minecraft rig pack for Blender containing Blocks, Items, Mobs and a Character rig fully ready to be animated.">
  <meta name="keywords" content="minecraft, blender, rig, download, free, render, animation, pack, mob, steve, rymdnisse">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="./../../resources/images/icons/icon-minecraft-blender-rig.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./../../resources/css/main.min.css">
  <link rel="stylesheet" type="text/css" href="./../../resources/css/download-button.css">
  <link rel="stylesheet" type="text/css" href="./../../resources/css/pages/downloads/minecraft-blender-rig.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  

</head>

<body>
    <?php include('./../../resources/includes/header.html'); ?>

    <div id="content">
        

        <h2 id="title-blender-rig" hidden>Minecraft Blender Rig</h2>
        <img id="blender-rig-logo" src="./../../resources/images/image/minecraft-blender-rig.png" alt="Minecraft Blender Rig">

        <div id="promo-art"> 
            <div class="videoWrapper">
                <img src="./../../resources/images/image/minecraft-blender-rig-image.jpg" alt="Blender Minecraft Rig Pack"/>
            </div>
        </div>

        <h3 class="dl-title" id="dl-main-title">Free Download:</h3>

        <h4 class="dl-title dl-version">Legacy Versions:</h4>
        <div id="legacy-download-buttons-container">

            <div class="download-button-wrapper">
                <a href="./../../files/minecraft/Cycles_Minecraft_Rig.zip" target="_blank">
                    <div class="download-button">
                        <i class="dl-image material-icons">get_app</i>
                        <span class="dl-text">Download Cycles Minecraft Rig</span>
                    </div>
                </a>
            </div>

            <div class="download-button-wrapper">
                <a href="./../../files/minecraft/Blender_Minecraft_Rig.zip" target="_blank">
                    <div class="download-button">
                        <i class="dl-image material-icons">get_app</i>
                        <span class="dl-text">Download Internal Minecraft Rig</span>
                    </div>
                </a>
            </div>
            
        </div>
        <div class="clear"></div>

        <h4 class="dl-title dl-version">BSS Edit <i>(latest version)</i>:</h4>

        <div id="boxscape">
            <div class="download-button-wrapper">
                <?php 
                    $url =  file_get_contents("./../../resources/scripts/pages/downloads/minecraft-blender-rig-bss-url.txt"); 
                    echo ' <a href="' . $url . '" target="_blank">';
                ?>
                    <div class="download-button">
                        <i class="dl-image material-icons">get_app</i>
                        <span class="dl-text">Download Cycles Minecraft Rig BSS Edit</span>
                    </div>
                </a>
            </div>
        </div>

        <h5 class="dl-title faq-title">What is the BSS Edit?</h5>
            <p class="faq-text">Back in 2017 I handed over future development of this rig pack to Boxscape Studios.<br>
            Since then they have done an absolutely fantastic job at keeping the rig pack up to date and adding a bunch of cool new things.<br>
            You can visit them at Boxscape Studios: <a href="https://www.boxscapestudios.tk" target="_blank">Website</a>, <a href="https://twitter.com/BoxscapeStudios" target="_blank">Twitter</a>
            </p>
    </div>


    <?php include('./../../resources/includes/footer.html'); ?>
    <script src="./../../resources/scripts/pages/downloads/minecraft-blender-rig.js"></script>
</body>

</html>
