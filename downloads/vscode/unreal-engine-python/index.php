<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unreal Engine Python - Visual Studio Code Extension</title>
    <meta name="description" content="Open source tools to assist when writing Python code for Unreal Engine. Debugging, execute code and more.">
    <meta name="keywords" content="unreal, engine, python, vscode, visual studio code, autodesk, programming, extension">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="og:title" content="Unreal Engine Python - Visual Studio Code Extension">
    <meta name="og:description" content="Tools to assist when writing Python code for Unreal Engine. Debugging, execute code and more.">
    <meta name="og:image" content="https://nilssoderman.com/downloads/vscode/unreal-python/vscode-unreal-python-banner.jpg">
    <meta name="twitter:card" content="summary">

    <link href="./favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./../../../resources/css/main.css">
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
            font-size: 55px;
            margin: 0 auto 10px auto;
            line-height: 50px;
        }

        #download-buttons {
            text-align: center;
        }

        .download-button-wrapper {
            display: inline-block;
            margin-left: 20px;
            margin-top: 20px;
        }

        .github-button {
            background-image: linear-gradient(to top, #24292d, #333a40);
            color: white;
        }
        
        .github-button:hover {
            background-image: linear-gradient(to top, #272c30, #3d454d);
            color: white;
        }
        
        .github-button #btn-github-icon {
            display: inline-block;
            height: 100%;
            float: left;
        }

        .github-button:active {
            box-shadow: 0 0 5px 1px #0d1f2b inset;
        }

        .github-button .dl-text {
            margin-left: 3px;
        }

        .github-button #btn-github-icon img {
            padding: 8px;
        }

        #features-title {
            font-size: 25px;
        }

        .features-sub-title {
            font-size: 18px;
        }

        #additional-urls {
            text-align: center;
        }

        #content {
            max-width: 800px;
        }
        
        @media (prefers-color-scheme: dark) {
            .github-button {
                background-image: linear-gradient(to top, #202c36, #516f88);
                color: white;
            }
        
            .github-button:hover {
                background-image: linear-gradient(to top, #202c36, #6187a7);
                color: white;
            }    
        }
    </style>

</head>

<body>
    <?php include('./../../../resources/includes/header.html'); ?>

    <div id="content">
        
        <h1>
            Unreal Engine Python<br><span style="font-size:32px;line-height:18px;">Visual Studio Code Extension</span>
        </h1>

        <br><br>

        <div id="download-buttons">
            <div class="download-button-wrapper">
                <a href="vscode:extension/NilsSoderman.ue-python">
                    <div class="download-button">
                        <i class="dl-image">get_app</i>
                        <span class="dl-text">Install</span>
                    </div>
                </a>
            </div>
            <div class="download-button-wrapper">
                <a href="https://github.com/nils-soderman/vscode-unreal-python" target="_blank">
                    <div class="download-button github-button">
                        <div id="btn-github-icon">
                            <img src="./../../../resources/images/icons/github-light-32x.png" alt="github-icon"/>
                        </div>
                        <span class="dl-text">GitHub Repository</span>
                    </div>
                </a>
            </div>
        </div>

        <br>

        <div id="additional-urls">
            <a href="https://marketplace.visualstudio.com/items/NilsSoderman.ue-python" target="_blank">VS Code Marketplace</a>
            <br>
            <a href="https://marketplace.visualstudio.com/items/NilsSoderman.ue-python/changelog" target="_blank">Changelog</a>
        </div>

        <br><br>

        <p class="faq-text" style="margin-bottom:40px">Open source tools to assist when writing Python code for Unreal Engine.</p>
        <h2 class="dl-title" id="features-title">Features:</h2>

        <h3 class="dl-title features-sub-title">Execute Code:</h3>
        <p class="faq-text">Run code in Unreal Engine directly from within the editor</p>
        <img src="https://github.com/nils-soderman/vscode-unreal-python/raw/main/media/demo/demo-exec.gif?raw=true" width="100%" alt="Demo of python code being executed inside of Unreal Engine from VS Code"/>
        <br><br><br>

        <h3 class="dl-title features-sub-title">Setup Code Completion:</h3>
        <p class="faq-text">Setup code completion for the unreal module based on the current project.</p>
        <img src="https://github.com/nils-soderman/vscode-unreal-python/raw/main/media/demo/demo-codecompletion.jpg?raw=true"  width="100%"/>
        <ul>
        <li>Feature complete (contains all of the functions & classes that can be accessed in the pyfbsdk module)</li>
        <li>Variable type annotations</li>
        <li>Readable descriptions</li>    
        </ul>
        <br><br><br>
        
        <h3 class="dl-title features-sub-title">Debugging:</h3>
        <p class="faq-text">Attach VS Code to Unreal Engine to debug your scripts, set breakpoints and step through the code.</p>
        <img src="https://github.com/nils-soderman/vscode-unreal-python/raw/main/media/demo/demo-attach.gif?raw=true"  width="100%"/>
    </div>

    <?php include('./../../../resources/includes/footer.html'); ?>
</body>

</html>
