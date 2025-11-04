<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Audible Clone - Home</title>
<style>
body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(135deg, #1f1c2c, #928DAB);
  color: white;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
}
h1 {
  font-size: 48px;
  margin-bottom: 10px;
}
p {
  font-size: 18px;
  max-width: 600px;
}
button {
  margin-top: 40px;
  padding: 15px 40px;
  font-size: 18px;
  border: none;
  border-radius: 50px;
  background: #ff9f00;
  color: #222;
  cursor: pointer;
  transition: 0.3s;
}
button:hover {
  background: #ffc107;
  transform: scale(1.05);
}
</style>
<script>
function goToLibrary() {
  window.location.href = "library.php";
}
</script>
</head>
<body>
  <h1>Welcome to AudioVerse</h1>
  <p>Immerse yourself in the world of stories, ideas, and learning — all through the power of sound.</p>
  <button onclick="goToLibrary()">🎧 Get Started</button>
</body>
</html>
