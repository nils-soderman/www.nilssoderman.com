<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MotionBuilder Utils - Visual Studio Code Extension</title>
    <meta name="description" content="Open source tools to assist when writing Python code for Autodesk MotionBuilder. IntelliSense, debugging, execute code and more.">
    <meta name="keywords" content="motionbuilder, python, vscode, visual studio code, autodesk, programming, extension">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="og:title" content="MotionBuilder Utils - Visual Studio Code Extension">
    <meta name="og:description" content="Tools to assist when writing Python code for Autodesk MotionBuilder. IntelliSense, debugging, execute code and more.">
    <meta name="og:image" content="">
    <meta name="twitter:card" content="summary">

    <link href="./favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./../../../resources/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="./../../../resources/css/download-button.min.css">
    <link rel="stylesheet" type="text/css" href="./../../../resources/css/pages/downloads/downloadpage.min.css">

    <style>
        @font-face {
            font-family: 'Catamaran';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Catamaran Regular'), local('Catamaran-Regular'), url(https://fonts.gstatic.com/s/catamaran/v6/o-0IIpQoyXQa2RxT7-5r5TRA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        h1 {
            font-family: 'Catamaran', sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size:46px;
            margin: 0 auto 10px auto;
        }
    </style>

</head>

<body>
    <?php include('./../../../resources/includes/header.html'); ?>

    <div id="content">
        
        <h1>
            MotionBuilder Utils<br>Visual Studio Code Extension
        </h1>


        <div id="download-buttons">
            <div class="download-button-wrapper">
                <a href="vscode:extension/NilsSoderman.mobu-utils">
                    <div class="download-button">
                        <i class="dl-image">get_app</i>
                        <span class="dl-text">Install</span>
                    </div>
                </a>
            </div>
            <div class="download-button-wrapper">
                <a href="https://github.com/nils-soderman/vscode-motionbuilder-utils" target="_blank">
                    <div class="download-button">
                        <i class="dl-image">get_app</i>
                        <span class="dl-text">GitHub Repository</span>
                    </div>
                </a>
            </div>
        </div>

        <a href="https://marketplace.visualstudio.com/items/NilsSoderman.mobu-utils" target="_blank">VS Code Marketplace</a>

        <a href="https://marketplace.visualstudio.com/items/NilsSoderman.mobu-utils/changelog" target="_blank">Changelog</a>

        <br/>
        <p class="faq-text">Open source tools to assist when writing Python code for Autodesk MotionBuilder.</p>
        
        <h2 class="dl-title faq-title">Features:</h2>

        <h3 class="dl-title faq-title">Execute Code:</h3>
        <p class="faq-text">Run code in MotionBuilder directly from within the editor.</p>
        <img src="https://github.com/nils-soderman/vscode-motionbuilder-utils/raw/main/media/demo/demo-exec.gif?raw=true" width="800px" alt="Demo of python code being executed inside MotionBuilder from VS Code"/>
        
        <h3 class="dl-title faq-title">Intellisense / Auto-Completion:</h3>
        <p class="faq-text">This extention comes with improved stub files for the pyfbsdk module.</p>
        <img src="https://github.com/nils-soderman/vscode-motionbuilder-utils/raw/main/media/demo/auto-completion.jpg?raw=true" width="800px"/>
        <ul>
        <li>Feature complete (contains all of the functions & classes that can be accessed in the pyfbsdk module)</li>
        <li>Variable type annotations</li>
        <li>Readable descriptions</li>    
        </ul>
        
        <h3 class="dl-title faq-title">Debugging:</h3>
        <p class="faq-text">Attach VS Code to MotionBuilder to debug your scripts, set breakpoints & step through the code.</p>
        <img src="https://github.com/nils-soderman/vscode-motionbuilder-utils/raw/main/media/demo/demo-debug.gif?raw=true" width="800px"/>
        
        <h3 class="dl-title faq-title">Browse the Documentation:</h3>
        <p class="faq-text">Quickly search through the official sdk documentation from within the editor, and open the page in a new web-browser tab.</p>
        <img src="https://github.com/nils-soderman/vscode-motionbuilder-utils/raw/main/media/demo/demo-docs.gif?raw=true" width="800px"/>
    </div>

    <?php include('./../../../resources/includes/footer.html'); ?>
</body>

</html>
