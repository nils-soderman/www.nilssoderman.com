<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nils Söderman - Resources</title>
  <meta name="description" content="A collection of free resources. Containing Rigs, Scripts, Plugins & more.">
  <meta name="keywords" content="downloads, free, minecraft, blender, rig, software, animation, tool, tools, addon, script">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="./../favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./../resources/css/main.min.css">
  <link rel="stylesheet" href="./../resources/css/pages/downloads/downloads.min.css" media="print" onload="this.media='all'">
  <script src="../resources/scripts/pages/downloads/downloads-index.min.js" async></script>
</head>

<body>
  <?php include('./../resources/includes/header.html'); ?>

  <div id="content">
    <div id="page-content">

      <h3 id="filter-header">Filter:</h3>
      <div id="filter">
        <input id="search-filter" oninput="Filter()" placeholder="Search...">
        <h4>Categories:</h4>
        <div id="tags">
        <input id="tag-all" type="radio" name="tag-filter" value="All" class="tag-input">
        <label for="tag-all" class="tag-label">All</label>
        <input id="tag-blender" type="radio" name="tag-filter" value="Blender" class="tag-input">
        <label for="tag-blender" class="tag-label">Blender</label>
        <input id="tag-motionbuilder" type="radio" name="tag-filter" value="MotionBuilder" class="tag-input">
        <label for="tag-motionbuilder" class="tag-label">MotionBuilder</label>
        <input id="tag-rigs" type="radio" name="tag-filter" value="Rigs" class="tag-input">
        <label for="tag-rigs" class="tag-label">Rigs</label>
        <input id="tag-vs code" type="radio" name="tag-filter" value="VS Code" class="tag-input">
        <label for="tag-vs code" class="tag-label">VS Code</label>
      </div>
    </div>

    <div id="dl-items">
      <div class="dl-item">
        <a href="./minecraft-blender-rig">
                <img width="320" height="150" src="./minecraft-blender-rig/thumbnail.jpg" class="dl-img" alt="Minecraft Blender Rig">
              </a>
            <div class="dl-text">
              <a href="./minecraft-blender-rig">
                    <h2 class="dl-title">Minecraft Blender Rig</h2>
                </a>
                <p class="dl-description">A free Minecraft rig pack for Blender. Containing most Blocks, Items &amp;
                  Mobs from the game, as well as a character rig.</p>
                </div>
        </div>
        <div class="dl-item">
            <a href="./vscode/motionbuilder-utils">
            <img width="320" height="150" src="./vscode/motionbuilder-utils/thumbnail.jpg" class="dl-img"
                    alt="MotionBuilder Utils - VS Code Extension"></a>
            <div class="dl-text">
                <a href="./vscode/motionbuilder-utils">
                    <h2 class="dl-title">MotionBuilder Utils - VS Code Extension</h2>
                </a>
                <p class="dl-description">Visual Studio Code extension to assist when writing python code for Autodesk
                    MotionBuilder.</p>
            </div>
        </div>
        <div class="dl-item">
            <a href="./motionbuilder/ball-with-legs-rig">
            <img width="320" height="150" src="./motionbuilder/ball-with-legs-rig/thumbnail.jpg" class="dl-img" alt="MotionBuilder Ball With Legs Rig"></a>
            <div class="dl-text">
                <a href="./motionbuilder/ball-with-legs-rig">
                    <h2 class="dl-title">MotionBuilder Ball With Legs Rig</h2>
                </a>
                <p class="dl-description">A free simple ball with legs type of rig for MotionBuilder, utilizing HumanIK.
                    Perfect for people who are new to MotionBuilder and just wants to get familiar with the layout and
                    try out some simple keyframe animation.</p>
                  </div>
        </div>
        <div class="dl-item">
            <a href="./blender/easyfx">
            <img width="320" height="150" src="./blender/easyfx/thumbnail.jpg" class="dl-img" alt="EasyFX"></a>
            <div class="dl-text">
                <a href="./blender/easyfx">
                    <h2 class="dl-title">EasyFX</h2>
                </a>
                <p class="dl-description">A free Blender add-on which allows you to easily apply effects to your renders
                    &amp; animations.</p>
            </div>
        </div>
    </div>
</div>
  </div>

  <?php include('./../resources/includes/footer.html'); ?>

</body>

</html>

