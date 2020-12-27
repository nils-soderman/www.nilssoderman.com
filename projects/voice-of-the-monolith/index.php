<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>Nils Söderman - Voice of the Monolith</title>
  <meta name="description" content="In Voice of the Monolith, you play as a child gifted with immense strength, which aids you as you explore the small island village where the Monolith now towers over empty ruins.">
  <meta name="keywords" content="nils soderman, future games, game, student project, student game, mystery">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://nilssoderman.com/resources/images/icons/voice-of-the-monolith.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./../../resources/css/main.min.css">
  <link rel="stylesheet" type="text/css" href="./../../resources/css/video_wrapper.css">
  
  <style>

    @font-face {
      font-family: 'Teko';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Teko Regular'), local('Teko-Regular'), url(https://fonts.gstatic.com/s/teko/v9/LYjNdG7kmE0gfaN9pQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    
    /* Page Content */
    #Content {
      margin-top: 20px;
    }

    #project-description{
      margin-top: 35px;
      font-size: 18px;
    }

    #title {
      margin-top: 50px;
      font-family: 'Teko', sans-serif;
      margin-bottom: 20px;
      font-size:25px;
      text-align: center;
    }

    #description{
      font-family: 'Roboto', sans-serif;
      max-width: 1280px;
      margin: 0 auto;
      margin-bottom: 100px;
    }

    #menu-item-projects {
        text-decoration:underline;
    }
    #menu-item-projects::before, #menu-item-projects::after{
      content: none;
    }

  </style>

</head>

<body>

    <?php include('./../../resources/includes/header.html'); ?>

    <div id="Content">

      <div id="title">
        <h1>Voice of the Monolith</h1>
      </div>

      <div class="videoWrapper">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/ypPz-3eFu9Q?rel=0&amp;showinfo=0" allowfullscreen></iframe>
      </div>

      <div id="description">
        <div id="project-description">
          <p>
            Eleven years ago, the Monolith landed on Earth, and it became clear that humanity is not alone in the universe. But for eleven years, it has remained a mystery, yielding no clues to its origin or purpose.<br>
            <br>
            In Voice of the Monolith, you play as a child gifted with immense strength, which aids you as you explore the small island village where the Monolith now towers over empty ruins. Who you are, and why you exist, is as much of a mystery as the alien artefact - all you know is that the Monolith calls to you. And perhaps, if you pay attention, the village may tell you something of what has transpired...
            <br><br>
            This is a 5 week student project done at Futuregames with a team of 10 people. Our task was to create a game with environmental storytelling with destruction, telling a story without any use of dialogue or text. My main responsibilities was animation and rigging, but I also did FX and optimization work such as setting up LODs & making lightmaps.<br>
            <br>
          </p>
        </div>
      </div>
    </div>

    <?php include('./../../resources/includes/footer.html'); ?>

</body>

</html>