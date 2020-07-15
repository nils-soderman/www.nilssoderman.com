<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>

<meta charset="UTF-8">

    <title>EasyFX Blender Add-on - Downloads</title>
    <meta name="description" content="EasyFX is a free addon for Blender that allows you to easily add effects to your renders & animations">
    <meta name="keywords" content="blender, addon, plugin, easyfx, compositor, beginners">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="og:title" content="Blender Add-on: EasyFX - Download">
    <meta name="og:description" content="EasyFX is a free addon for Blender that allows you to easily add effects to your renders & animations">
    <meta name="og:image" content="https://nilssoderman.com/downloads/blender/easyfx/easyfx-thumbnail.jpg">
    <meta name="twitter:card" content="summary">

    <link href="./favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./../../../resources/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="./../../../resources/css/download-button.css">
    <link rel="stylesheet" type="text/css" href="./../../../resources/css/pages/downloads/minecraft-blender-rig.css">

    <style>
    @media (prefers-color-scheme: dark){
        #blender-rig-logo{
            filter:invert(100%);
            opacity:.8;
        }
    }
    </style>

</head>

<body>
    <?php include('./../../../resources/includes/header.html'); ?>

    <div id="content">

        <h1>
            <img id="blender-rig-logo" src="./easyfx-logo.png" alt="EasyFX">
        </h1>

        <div id="promo-art"> 
            <div class="videoWrapper">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/6CNl46d7Pxw?modestbranding=1&iv_load_policy=3&rel=0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        
        <h2 class="dl-title dl-version">Official 2.79 Version:</h2>

        <div class="download-button-wrapper">
            <a href="./../../../files/blender/EasyFX.zip" target="_blank">
                <div class="download-button">
                    <i class="dl-image material-icons">get_app</i>
                    <span class="dl-text">Download EasyFX for 2.79</span>
                </div>
            </a>
        </div>

        <br>
        <h2 class="dl-title dl-version">Unofficial 2.8 Port:</h2>
        <div class="download-button-wrapper">
            <a href="https://github.com/DoubleZZ/EasyFX-2.8/archive/master.zip" target="_blank">
                <div class="download-button">
                    <i class="dl-image material-icons">get_app</i>
                    <span class="dl-text">Download EasyFX for 2.8</span>
                </div>
            </a>
        </div>
        
        <p>This port for Blender 2.8x was created by DoubleZZ, you can find the github repository <a href="https://github.com/DoubleZZ/EasyFX-2.8" target="_blank">here</a>.</p>

        <h4 class="dl-title faq-title">What does this add-on do?</h4>
        <p class="faq-text">EasyFX allows you to easily add effects to your renders & animations directly from the image editor. The add-on will automatically build your compositing node tree.</p>

    </div>

    <?php include('./../../../resources/includes/footer.html'); ?>
</body>
</html>
