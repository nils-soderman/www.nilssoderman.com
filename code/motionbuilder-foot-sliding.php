<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>MotionBuilder Foot Sliding Python Script - Nils Söderman</title>
  <meta name="description" content="Foot Sliding script">
  <meta name="keywords" content="python, motionbuilder, sciprt, animation, foot, feet, sliding, tech, technical, code, source, pyfbsdk, CharacterSelectAndKey">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="./../resources/images/icons/source-code-icon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./../resources/css/main.min.css">
  <link rel="stylesheet" type="text/css" href="./../resources/css/download-button.css">
  
  <style>
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    @font-face {
        font-family: 'Source Code Pro';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Source Code Pro Regular'), local('SourceCodePro-Regular'), url(https://fonts.gstatic.com/s/sourcecodepro/v11/HI_SiYsKILxRpg3hIP6sJ7fM7PqlPevW.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    #Content {
      margin-top: 20px;
      max-height: 1500px;
      max-width:800px;
      margin: 0 auto;
    }

    .code-block {
        background-color: #eaeaea;
        border-style: solid;
        border-width: 2px 2px 2px 2px;
        border-color: #6b6b6b;
    }

    code *::selection{
        background-color: #b7dff7;
    }

    code::selection{
        background-color: #b7dff7;
    }

    .code-block pre {
        margin:10px;
        font-family: 'Source Code Pro', monospace;
    }

    #post-code {
        margin-top: 20px;
    }

    #title{
        text-align: center;
        margin-top: 50px;
        font-family: 'Roboto', sans-serif;
    }

  </style>

</head>

<body>

    <?php include('./../resources/includes/header.html'); ?>
    <div id="Content">       

        <div id="title">
            <h1>MotionBuilder Feet Sliding Script</h1>
            <h2>Laungage: Python</h2>
        </div>

        <div class="code-block">
            <pre><code class="SyntaxHighlight"><?php include('./../resources/scripts/motionbuilder/Feet_Sliding.py'); ?></code></pre>
        </div>

        <div id = "post-code" >
            <div id="download-button">
                <div class="download-button-wrapper">
                    <a href="./../resources/scripts/motionbuilder/Feet_Sliding.py" download="Feet_Sliding.py", target="_blank">
                        <div class="download-button">
                            <i class="dl-image material-icons">get_app</i>
                            <span class="dl-text">Download Feet-Sliding.py</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include('./../resources/includes/footer.html'); ?>

    <script type="text/javascript" src="./../resources/scripts/SyntaxHighlighter.js"></script>

</body>



</html>

