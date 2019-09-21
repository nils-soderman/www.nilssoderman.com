<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Minecraft Blender Rig Download - Rymdnisse</title>
    <meta name="description" content="A free Minecraft rig pack for Blender containing Blocks, Items, Mobs and a Character rig fully ready to be animated."></meta>
    <meta name="keywords" content="minecraft, blender, rig, download, free, render, animation, pack, mob, steve, rymdnisse"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>

    <meta name="og:title" content="Minecraft Blender Rig Pack - Download"></meta>
    <meta name="og:description" content="A free Minecraft rig pack for Blender containing Blocks, Items, Mobs and a Character rig fully ready to be animated."></meta>
    <meta name="og:image" content="https://nilssoderman.com/resources/images/image/minecraft-blender-rig-image.jpg"></meta>
    <meta name="twitter:card" content="summary"></meta>

    <link href="./../../resources/images/icons/icon-minecraft-blender-rig.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./../../resources/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="./../../resources/css/download-button.min.css">
    <link rel="stylesheet" type="text/css" href="./../../resources/css/pages/downloads/minecraft-blender-rig.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  

</head>

<body>
    <?php include('./../../resources/includes/header.html'); ?>

    <div id="content">
        

        <h1 id="title-blender-rig" hidden>Minecraft Blender Rig</h1>
        <img id="blender-rig-logo" src="./../../resources/images/image/minecraft-blender-rig.png" alt="Minecraft Blender Rig">

        <div id="promo-art"> 
            <div class="videoWrapper">
                <img src="./../../resources/images/image/minecraft-blender-rig-image.jpg" alt="Blender Minecraft Rig Pack"/>
            </div>
        </div>

        <h2 class="dl-title" id="dl-main-title">Free Download:</h2>

        <h3 class="dl-title dl-version">Legacy Versions:</h3>
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

        <h3 class="dl-title dl-version">BSS Edit:</h3>

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

        <div id="bss-dl-page">
            <a href="https://www.boxscapestudios.tk/downloads" target="_blank">Boxscape Studios download page</a>
        </div>

        <h4 class="dl-title faq-title">What is the BSS Edit?</h4>
            <p class="faq-text">Back in 2017 I handed over future development of this rig pack to Boxscape Studios.<br>
            Since then they have done an absolutely fantastic job at keeping the rig pack up to date and adding a bunch of cool new things.<br>
            You can visit them at Boxscape Studios: <a href="https://www.boxscapestudios.tk" target="_blank">Website</a>, <a href="https://twitter.com/BoxscapeStudios" target="_blank">Twitter</a>
            </p>

        <h4 class="dl-title faq-title">Does this rig work with Blender 2.8?</h4>
        <p class="faq-text">Yes. Both the Cycles version and the BSS Edit works in Blender 2.8 and above.<br>
        The Internal version will no longer work as the internal render engine has been removed from Blender 2.8.
        </p>
    </div>


    <?php include('./../../resources/includes/footer.html'); ?>
</body>

</html>
