<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Minecraft Blender Rig Download - Rymdnisse</title>
    <meta name="description" content="A free Minecraft rig pack for Blender containing Blocks, Items, Mobs and a Character rig fully ready to be animated.">
    <meta name="keywords" content="minecraft, blender, rig, download, free, render, animation, pack, mob, steve, rymdnisse">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="og:title" content="Minecraft Blender Rig Pack - Download">
    <meta name="og:description" content="A free Minecraft rig pack for Blender containing Blocks, Items, Mobs and a Character rig fully ready to be animated.">
    <meta name="og:image" content="https://nilssoderman.com/resources/images/image/minecraft-blender-rig-image.jpg">
    <meta name="twitter:card" content="summary">

    <link href="./../../resources/images/icons/icon-minecraft-blender-rig.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./../../resources/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="./../../resources/css/download-button.min.css">
    <link rel="stylesheet" type="text/css" href="./../../resources/css/pages/downloads/minecraft-blender-rig.min.css">

</head>

<body>
    <?php include('./../../resources/includes/header.html'); ?>

    <div id="content">
        
        <h1>
            <img id="blender-rig-logo" src="./../../resources/images/image/minecraft-blender-rig.png" alt="Minecraft Blender Rig">
        </h1>

        <div id="promo-art"> 
            <div class="videoWrapper">
                <img src="./../../resources/images/image/minecraft-blender-rig-image.jpg" alt="Blender Minecraft Rig Pack"/>
            </div>
        </div>

        <h2 class="dl-title" id="dl-main-title"> Free Download:</h2>

        <h3 class="dl-title dl-version">Legacy Versions:</h3>
        <div id="legacy-download-buttons-container">

            <div class="download-button-wrapper">
                <a href="./../../files/minecraft/Cycles_Minecraft_Rig.zip" target="_blank" download>
                    <div class="download-button">
                        <i class="dl-image">get_app</i>
                        <span class="dl-text">Download Cycles Minecraft Rig</span>
                    </div>
                </a>
            </div>

            <div class="download-button-wrapper">
                <a href="./../../files/minecraft/Blender_Minecraft_Rig.zip" target="_blank" download>
                    <div class="download-button">
                        <i class="dl-image">get_app</i>
                        <span class="dl-text">Download Internal Minecraft Rig</span>
                    </div>
                </a>
            </div>
            
        </div>
        <div class="clear"></div>

        <h3 class="dl-title dl-version">BSS Edit:</h3>

        <div id="boxscape">
            <div class="download-button-wrapper">
                <?php 
                    $url =  file_get_contents("./bss-edit-url.txt"); 
                    echo ' <a href="' . $url . '" target="_blank" rel="noopener" download>';
                ?>
                    <div class="download-button">
                        <i class="dl-image">get_app</i>
                        <span class="dl-text">Download Cycles Minecraft Rig BSS Edit</span>
                    </div>
                </a>
            </div>
        </div>

        <h4 class="dl-title faq-title">Description:</h4>
            <p class="faq-text"> In this rig you'll find a complete set with all of the things you'll need to get started creating your own 
            minecraft animations, thumbnails or renders. The rig contains characters, blocks, mobs, items and more!
            </p>

        <h4 class="dl-title faq-title">What is the BSS Edit?</h4>
            <p class="faq-text">Back in 2017 I handed over future development of this rig pack to Boxscape Studios.<br>
            Since then they have made numerous updates, adding new things & keeping things up to date. You can visit them at Boxscape Studios: <a href="https://sites.google.com/view/boxscape-studios/downloads" target="_blank" rel="noopener">Website</a>, <a href="https://twitter.com/BoxscapeStudios" target="_blank" rel="noopener">Twitter</a>
            </p>

        <h4 class="dl-title faq-title">Does this rig work with Blender 2.8/2.9?</h4>
        <p class="faq-text">Yes. Both the Cycles version and the BSS Edit works in Blender 2.8 and above.<br>
        The Internal version will no longer work as the internal render engine has been removed from Blender 2.8.
        </p>
    </div>

    <?php include('./../../resources/includes/footer.html'); ?>
</body>

</html>
