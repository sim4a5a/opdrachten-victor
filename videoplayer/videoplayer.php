<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HTML Video Player</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

   <div class="player">
     <video data-video="video" class="player__video viewer" src="https://player.vimeo.com/external/194837908.sd.mp4?s=c350076905b78c67f74d7ee39fdb4fef01d12420&profile_id=164"></video>

     <div class="player__controls">
       <div data-video="video-progress" class="progress">
        <div data-video="progress-bar" class="progress__filled"></div>
       </div>
         <button data-video="btn-play" class="player__button toggle" title="Toggle Play">►</button>
       <input data-video="input-volume" type="range" name="volume" class="player__slider" min="0" max="1" step="0.05" value="1">
       <input data-video="input-playbackRate" type="range" name="playbackRate" class="player__slider" min="0.5" max="2" step="0.1" value="1">
       <button data-skip="-10" class="player__button">« 10s</button>
       <button data-skip="25" class="player__button">25s »</button>
       <button data-video="toggle-screen" class="fullscreenbtn">fullscreen</button>
     </div>
   </div>

  <script src="scripts.js"></script>
</body>
</html>
