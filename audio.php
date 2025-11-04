<?php
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$audiobooks = [
  1 => ["title" => "Book 1", "cover" => "https://i.ytimg.com/vi/sIkNdSXt8ek/hqdefault.jpg", "src" => "https://www.youtube.com/embed/sIkNdSXt8ek"],
  2 => ["title" => "Book 2", "cover" => "https://i.ytimg.com/vi/zgk1areRFQU/hqdefault.jpg", "src" => "https://www.youtube.com/embed/zgk1areRFQU"],
  3 => ["title" => "Book 3", "cover" => "https://i.ytimg.com/vi/k5bRGW3s6fw/hqdefault.jpg", "src" => "https://www.youtube.com/embed/k5bRGW3s6fw"],
  4 => ["title" => "Book 4", "cover" => "https://i.ytimg.com/vi/jofNR_WkoCE/hqdefault.jpg", "src" => "https://www.youtube.com/embed/jofNR_WkoCE"],
  5 => ["title" => "Book 5", "cover" => "https://i.ytimg.com/vi/A52--FKUQgU/hqdefault.jpg", "src" => "https://www.youtube.com/embed/A52--FKUQgU"],
  6 => ["title" => "Book 6", "cover" => "https://i.ytimg.com/vi/KLfXETqLCiM/hqdefault.jpg", "src" => "https://www.youtube.com/embed/KLfXETqLCiM"],
  7 => ["title" => "Book 7", "cover" => "https://i.ytimg.com/vi/CdnaNh1_jks/hqdefault.jpg", "src" => "https://www.youtube.com/embed/CdnaNh1_jks"]
];
$book = $audiobooks[$id];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $book['title']; ?> | AudioVerse Player</title>
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #000428, #004e92);
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 100vh;
  text-align: center;
  padding-bottom: 60px;
}
.container {
  margin-top: 70px;
  max-width: 850px;
  width: 90%;
}
h1 {
  font-size: 34px;
  margin-bottom: 25px;
}
iframe {
  width: 100%;
  height: 420px;
  border-radius: 15px;
  border: none;
  box-shadow: 0 0 25px rgba(255, 200, 0, 0.4);
}
.controls {
  margin-top: 25px;
}
button {
  background: #ff9f00;
  border: none;
  padding: 12px 22px;
  border-radius: 30px;
  margin: 5px;
  cursor: pointer;
  font-weight: bold;
  transition: 0.3s;
}
button:hover {
  background: #ffc107;
  transform: scale(1.08);
}
.speed {
  margin-top: 15px;
  background: #111;
  display: inline-block;
  padding: 10px 20px;
  border-radius: 20px;
}
.nav, .dashboard {
  position: fixed;
  top: 20px;
}
.nav { left: 20px; }
.dashboard { right: 20px; }
.nav button, .dashboard button {
  background: #ff9f00;
  color: #222;
  border-radius: 25px;
}
</style>
</head>
<body>

<div class="nav">
  <button onclick="window.location.href='library.php'">⬅ Library</button>
</div>
<div class="dashboard">
  <button onclick="window.location.href='dashboard.php'">📚 Dashboard</button>
</div>

<div class="container">
  <h1><?php echo $book['title']; ?></h1>
  <iframe id="ytplayer" src="<?php echo $book['src']; ?>?enablejsapi=1&rel=0&showinfo=0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

  <div class="controls">
    <button onclick="rewind()">⏪ 10s</button>
    <button onclick="togglePlay()">⏯ Play / Pause</button>
    <button onclick="forward()">⏩ 10s</button>
  </div>

  <div class="speed">
    Speed:
    <button onclick="setSpeed(1)">1x</button>
    <button onclick="setSpeed(1.5)">1.5x</button>
    <button onclick="setSpeed(2)">2x</button>
  </div>
</div>

<script src="https://www.youtube.com/iframe_api"></script>
<script>
let player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('ytplayer');
}
function togglePlay() {
  if (!player) return;
  const state = player.getPlayerState();
  if (state === 1) player.pauseVideo();
  else player.playVideo();
}
function rewind() {
  if (player) player.seekTo(player.getCurrentTime() - 10, true);
}
function forward() {
  if (player) player.seekTo(player.getCurrentTime() + 10, true);
}
function setSpeed(speed) {
  if (player) player.setPlaybackRate(speed);
}
</script>

</body>
</html>
