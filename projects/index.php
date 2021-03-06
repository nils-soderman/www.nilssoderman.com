<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nils Söderman - Projects</title>
  <meta name="description" content="Here are some the games and other projects I've worked on recently. Altiia and the Trial Islands, Voice of the Monolith, Dodge Golf and more.">
  <meta name="keywords" content="game project, future games, future games stockholm, student games">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./../favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./../resources/css/main.min.css">
  
  <style>
    #content {
      margin-top: 50px;
      min-height: 450px;
    }
    
    h2 {
      text-align:center;
      margin-top:50px;
      font-size: 30px;
      font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
      font-weight:normal;
    }

    .posters{
      display:block;
      margin:auto;
      width: fit-content;
      margin-bottom: 10px;
      user-select: none;
      -moz-user-select: none;
      -webkit-user-drag: none;
      -webkit-user-select: none;
      -ms-user-select: none;
    }

    .posters-scrollbox {
      white-space: nowrap;
      overflow-x: auto;
    }

    .poster {
      margin:15px;
    }

    .poster img{
      border-radius: 2px;
      -webkit-transition: opacity .35s;
      transition: opacity .35s;
    }

    .poster img:hover{
      opacity: 0.8;
    }

    .poster img:active{
      opacity: 0.6;
    }

    .posters-border-fade{
      height: 98%;
      width: 20px;
      position:absolute;
      top:0;
      z-index:2;
      display:none;
    }

    .fade-right{
      right:0;
      background: linear-gradient(to left, #e3e3e3, #e3e3e300 100%);
    }
    
    .fade-left{
      left:0;
      background: linear-gradient(to right, #e3e3e3, #e3e3e300 100%);
    }

    .posters-content {
      position:relative;
    }

    /* width */
    .posters-scrollbox::-webkit-scrollbar {
      margin-top: 15px;
      height: 5px;
    }

    /* Handle */
    .posters-scrollbox::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 2px;
    }

    /* Handle on hover */
    .posters-scrollbox::-webkit-scrollbar-thumb:hover {
      background: #555;
    }


    #menu-item-projects {
        text-decoration: underline;
    }
    #menu-item-projects::before, #menu-item-projects::after{
      content: none;
    }


    @media (max-width: 500px)
    {
      .poster img{
        width: 200px;
        height: auto;
      }

      .posters-content {
        margin-top:10px;
      }
      
      #content {
        margin-top: 50px;
        min-height: 300px;
      }

      .posters-border-fade{
        width: 10px;
      }
    }

    @media (max-width: 1350px)
    {
      .posters-border-fade{
        display:inherit;
      }

    }

    @media (prefers-color-scheme: dark) {
      .fade-right{
        background: linear-gradient(to left, #1d1f1f, #1d1f1f00 100%);
      }
      
      .fade-left{
        background: linear-gradient(to right, #1d1f1f, #1d1f1f00 100%);
      }
    }
    

  </style>
</head>

<body>

    <?php include('./../resources/includes/header.html'); ?>


    <div id="content">

      <h2>Released Titles:</h2>
      <div class="posters-content">
        <div class="posters-border-fade fade-left"></div>
        <div class="posters-scrollbox" id="released-titles">
          <div class="posters">
            <a class="poster" href="./it-takes-two/"><img src="./../resources/images/poster/poster-it-takes-two.jpg" width=256 height=362 alt="It Takes Two - Hazelight"></a>
          </div>
        </div>
        <div class="posters-border-fade fade-right"></div>
      </div>

      <h2>Student Projects:</h2>
      <div class="posters-content">
        <div class="posters-border-fade fade-left"></div>
        <div class="posters-scrollbox" id="student-projects">
          <div class="posters">
            <a class="poster" href="./altiia-and-the-trial-islands/"><img src="./../resources/images/poster/Poster_Altiia-and-the-Trial-Islands.jpg" width=256 height=362 alt="Altiia and the Trial Islands"></a>
            <a class="poster" href="./voice-of-the-monolith/"><img src="./../resources/images/poster/Poster_Voice-of-the-Monolith.jpg" width=256 height=362 alt="Voice of the Monolith"></a>
            <a class="poster" href="./dodge-golf/"><img src="./../resources/images/poster/Poster_Dodge-Golf.jpg" width=256 height=362 alt="Dodge Golf"></a>
          </div>
        </div>
        <div class="posters-border-fade fade-right"></div>
      </div>
    </div>

    <?php include('./../resources/includes/footer.html'); ?>

    <script>
    const PosterAreas = document.getElementsByClassName("posters-scrollbox");
    var bDragging = false;
    var bMouseDown = false;
    var StartPosX;
    var CurrentScroll;
    var CurrentScrollBoxId;

    for (let i = 0; i < PosterAreas.length; i++) {
      const PosterArea = PosterAreas[i];
      PosterArea.addEventListener('mousedown', (Event) => {
        bDragging = false;
        bMouseDown = true;
        StartPosX = Event.pageX - PosterArea.offsetLeft;
        CurrentScroll = PosterArea.scrollLeft;
        CurrentScrollBoxId = PosterArea.id;
      });
      document.addEventListener('mouseup', (Event) => {
        bMouseDown = false;
      });
      PosterArea.addEventListener('click', (Event) => {
        if(bDragging)
        {
          Event.preventDefault();
        }
        bDragging = false;
      });
      document.addEventListener('mousemove', (Event) => {
        if(!bMouseDown) return;
        Event.preventDefault();
        const x = Event.pageX - PosterArea.offsetLeft;
        const AmountMoved = (x - StartPosX);
        if ((AmountMoved > 10 || AmountMoved < -10) && CurrentScrollBoxId == PosterArea.id){
          bDragging = true;
          PosterArea.scrollLeft = CurrentScroll - ((x - StartPosX) * 1.5);
        }
      });
    };
    </script>


</body>

</html>

