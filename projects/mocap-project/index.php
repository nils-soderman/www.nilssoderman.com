<!DOCTYPE html>
<!--
The source code for this website is avaliable on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>

  <meta charset="UTF-8">

  <title>Motion Capture Scene - Nils Söderman</title>
  <meta name="description" content="A breakdown of a motion captured scene I made in my spare time at FutureGames 2018.">
  <meta name="keywords" content="nils soderman, future games, mocap, motion capture, motion builder, unreal engine, breakdown">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="./../../resources/css/main.css">
  <link rel="stylesheet" type="text/css" href="./../../resources/css/video_wrapper.css">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
  <link href="./../favicon.ico" rel="shortcut icon" type="image/x-icon">

  <style>

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
      margin-bottom: 20px;
      text-align: center;
      font-family: 'Titillium Web', sans-serif;
      font-size: 20px;
      color: #1a1a1a;
    }

    #description{
      font-size:5px;
      max-width: 1280px;
      margin: 0 auto;
      margin-bottom: 100px;
    }

    .smallTitle{
      font-family: 'Titillium Web', sans-serif;
      margin-top:0px;
      margin-left:20px;
    }

    #menu-item-projects {
        text-decoration:underline;
    }

    .video-section{
        width:100%;   
        min-height:320px;
    }

    .smallvid{
        float:left;
        margin-right:50px;
    }

    .phone-title{
        display:none;
    }

     @media (max-width: 1200px) {
        .smallvid{
            float:none;
        }

        .phone-title{
            display:block;
        }

        .video-desc .smallTitle{
            display:none;
        }

        .smallTitle{
            margin-left:0px;
        }

     }

    .text-url{
      color:#001349;
      text-decoration:none;
    }

    .text-url:hover{
        text-decoration:underline;
        color:#273c76;
    }

    .text-url:active{
        color:#4d66b0;
    }

  </style>

</head>

<body>

    <?php include('./../../resources/includes/header.html'); ?>
    <div id="Content">
      <div id="title">
        <h1>Motion Capture Scene Breakdown</h1>
      </div>

      <div class="videoWrapper">
        <iframe src="https://player.vimeo.com/video/266885742?title=0&byline=0&portrait=0" width="1280" height="720" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>

      <div id="description">
        <div id="project-description">
          <p>
            This scene was a personal project made during my spare time at FutureGames. My goal was to learn how to work with Motion-Capture & MotionBuilder,
            as well as setting up a realtime cinematic sequence in Unreal Engine.<br>
            <br>
            The characters/rigs were borrowed from the <a class="text-url" href="https://www.unrealengine.com/marketplace/en-US/assets?keywords=paragon" target="_blank">Paragon assets</a>.
            <br><br><br><br>
          </p>    

         <div class="video-section">
             <div class="phone-title"><h3 class="smallTitle">Raw Mocap Data</h3></div>
             <div class="smallvid">
                <video autoplay loop muted controls>
                    <source src="https://nilssoderman.com/resources/videos/mocap-project/raw-data.mp4" />
                </video>
             </div>

             <div class="video-desc">
                 <h3 class="smallTitle">Raw Mocap Data</h3>
                 <p>
                    As I wasn't able to record any mocap data myself I searched through the internet + our school server and was able to find a few takes which inspired this idea.<br>
                    I then took these takes, applied them to the rigs and arranged them in Motionbuilder's story tool. I also matched the takes to make sure they were somewhat correctly placed in the world.
                    </p>
             </div>
         </div>

         <br><br>

         <div class="video-section">
             <div class="phone-title"><h3 class="smallTitle">Blending Clips</h3></div>
             <div class="smallvid">
                <video autoplay loop muted controls>
                    <source src="https://nilssoderman.com/resources/videos/mocap-project/blending-clips.mp4" />
                </video>
             </div>
             <div class="video-desc">
                <h3 class="smallTitle">Blending Clips</h3>
                <p>
                    Then it was time to start blending the clips together.
                    Here I was mostly looking at the timing while also trying to get the blends to look as good as possible, or at least to a state were I can work with them.<br>
                    <br>
                    If I had done it today I definitely would've spent a bit more time in story mode working on the blends, which could've helped save time + give a better final result.<br>
                </p>
             </div>
        </div>

        <br><br>
         <div class="video-section">
             <div class="phone-title"><h3 class="smallTitle">Correction Pass</h3></div>
             <div class="smallvid">
                <video autoplay loop muted controls>
                    <source src="https://nilssoderman.com/resources/videos/mocap-project/correction-pass.mp4" />
                </video>
             </div>
             <div class="video-desc">
                <h3 class="smallTitle">Correction Pass</h3>
                <p>
                    Once I had blends that was working I plotted everything down to the control rigs. I then started correcting some poses & movments to be closer to what I was after.<br>
                    I also began fixing most of the footsliding, to make this proccess easier I wrote a simple script (<a class="text-url" target="_blank" href="https://nilssoderman.com/code/motionbuilder-foot-sliding">Feet_Sliding.py</a>)
                    to copy the position from the previous frame and paste it on the current frame.
                    All footsliding was corrected on it's own layer so I later could turn down the weight of that layer in order still keep some of the original rotation in the feet, not giving them a dead feeling.
                </p>
             </div>
        </div>
        
        <br><br>

         <div class="video-section">
             <div class="phone-title"><h3 class="smallTitle">Polish + Rendering</h3></div>
             <div class="smallvid">
                <video autoplay loop muted controls>
                    <source src="https://nilssoderman.com/resources/videos/mocap-project/polish.mp4" />
                </video>
             </div>

             <div class="video-desc">
                 <h3 class="smallTitle">Polish + Rendering</h3>
                 <p>
                    Here I made smaller tweaks, removing any pops & cleaned up some of the arcs. I also animated the hair, bag & the phone.<br>
                    For the hair I made a simple rig setup where I constrained some markers together, and the phone was just constrained to his hand until the end where I turned off the constraint &
                    animated it falling to the ground.
                    <br><br>
                    Once the shot was ready I brought it into Unreal Engine 4 to light and render it.<br>
                    I used Unreal's cinematic sequence to setup the scene and animate the doors + the UV coordinates for the floor plan display.<br>
                </p>
             </div>
        </div>

        <br>

        <div>
            <p style="text-align:center;">
                I'd like to end this by give a special thanks to Jonas Wallin & Morris Belfrage for giving me some pro tips and tricks for MotionBuilder,<br> as well as Jack Parson for giving me some killer lighting tips.
            </p>
        </div>

        </div>
      </div>
    </div>

  <?php include('./../../resources/includes/footer.html'); ?>

</body>
</html>

