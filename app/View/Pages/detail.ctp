<article class="row">
    <section class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10">
        <p class="h3"><h2><?php echo $players['Player']['player-name']?></h2></p>
        <h1 class="h2"></h1>
        <hr>
        <p class="sentence"></p>
        <span class="fa fa-tags"></span>

///youtube

       <!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <input id="video_url" type="text" value="https://www.youtube.com/v/wCc2v7izk8w?version=3" style="width:400px;">
    <input type="button" value="videoを切り替える" onClick="changeVideo()">
    <BR>
    <div id="player"></div>

    <script>
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: '<?php echo $players['Player']['player-url'] ?>',
          events: {
            'onReady': onPlayerReady,
          }
        });
      }
      function onPlayerReady(event) {
        event.target.playVideo();
      }
      function changeVideo() {
        var url = document.getElementById("video_url").value;
        alert(url);
        player.loadVideoByUrl(url, 0, 'large');
      }
    </script>
  </body>
</html>



    </section>
    <section class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10">
            <hr>
            <form role="form">
                <h2>バンド情報</h2>
                <div class="form-horizontal">
                    <div class="form-group">
                        <?php echo "結成：".$players['Player']['player-age']."年"?>
                    </div>

                    <div class="form-group">
                        <?php echo "作品：".$players['Player']['player-gear']?>
                        <img src="<?php echo $players['Player']['player-img'] ?>">
                    </div>




                    <div class="form-group">
                        <?php echo "コメント：".$players['Player']['player-comment']?>
                    </div>
                    
            </form>
        </div>

    </section>
</article>