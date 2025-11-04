<?php
// library.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>AudioVerse Library</title>
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(120deg, #141E30, #243B55);
  color: #fff;
  padding: 50px;
}
h1 {
  text-align: center;
  font-size: 42px;
  margin-bottom: 10px;
}
p {
  text-align: center;
  color: #bbb;
  font-size: 16px;
  margin-bottom: 50px;
}
.library {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
}
.card {
  background: rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  overflow: hidden;
  text-align: center;
  padding-bottom: 20px;
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.05);
  transition: 0.4s;
}
.card:hover {
  transform: translateY(-10px);
  box-shadow: 0 0 30px rgba(255, 200, 0, 0.4);
}
.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.title {
  font-size: 20px;
  margin: 15px 0 10px;
  color: #fff;
}
button {
  background: #ff9f00;
  border: none;
  padding: 10px 25px;
  border-radius: 25px;
  font-weight: bold;
  cursor: pointer;
  transition: 0.3s;
}
button:hover {
  background: #ffc107;
  transform: scale(1.05);
}
.back {
  position: fixed;
  top: 20px;
  left: 20px;
  background: #ff9f00;
  padding: 10px 20px;
  border-radius: 25px;
  cursor: pointer;
  color: #222;
  font-weight: bold;
}
.back:hover {
  background: #ffc107;
}
</style>
<script>
function goBack() {
  window.location.href = "index.php";
}
function openPlayer(id) {
  window.location.href = "audio.php?id=" + id;
}
</script>
</head>
<body>
<div class="back" onclick="goBack()">⬅ Home</div>
<h1>🎧 Audiobook Library</h1>
<p>Explore and listen to your favorite audiobooks below.</p>

<div class="library">

  <div class="card">
    <img src="https://i.ytimg.com/vi/sIkNdSXt8ek/hqdefault.jpg">
    <div class="title">Book 1</div>
    <button onclick="openPlayer(1)">Listen Now</button>
  </div>

  <div class="card">
    <img src="https://i.ytimg.com/vi/zgk1areRFQU/hqdefault.jpg">
    <div class="title">Book 2</div>
    <button onclick="openPlayer(2)">Listen Now</button>
  </div>

  <div class="card">
    <img src="https://i.ytimg.com/vi/k5bRGW3s6fw/hqdefault.jpg">
    <div class="title">Book 3</div>
    <button onclick="openPlayer(3)">Listen Now</button>
  </div>

  <div class="card">
    <img src="https://i.ytimg.com/vi/jofNR_WkoCE/hqdefault.jpg">
    <div class="title">Book 4</div>
    <button onclick="openPlayer(4)">Listen Now</button>
  </div>

  <div class="card">
    <img src="https://i.ytimg.com/vi/A52--FKUQgU/hqdefault.jpg">
    <div class="title">Book 5</div>
    <button onclick="openPlayer(5)">Listen Now</button>
  </div>

  <div class="card">
    <img src="https://i.ytimg.com/vi/KLfXETqLCiM/hqdefault.jpg">
    <div class="title">Book 6</div>
    <button onclick="openPlayer(6)">Listen Now</button>
  </div>

  <div class="card">
    <img src="https://i.ytimg.com/vi/Zez8tDuzP3w/hqdefault.jpg">
    <div class="title">Book 7</div>
    <button onclick="openPlayer(7)">Listen Now</button>
  </div>

  <div class="card">
    <img src="https://i.ytimg.com/vi/CdnaNh1_jks/hqdefault.jpg">
    <div class="title">Book 8</div>
    <button onclick="openPlayer(8)">Listen Now</button>
  </div>

</div>
</body>
</html>
