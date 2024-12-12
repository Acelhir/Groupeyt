<?php
$contentFile = 'content.json';

if (file_exists($contentFile)) {
    $content = json_decode(file_get_contents($contentFile), true);
} else {
    $content = [];
    // Optional: You can define default content here.
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="charlie.css">
</head>
<body>
  <header class="navbar">
    <nav>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="abouts.php">About</a></li>
        <li><a href="skills.php">Skills</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="contacts.php">Contacts</a></li>
      </ul>
    </nav>
  </header>
  <section class="hero">
    <div class="container">
      <div class="text-content">
        <p class="highlight">
          <?php echo file_exists('content/welcome.txt') ? file_get_contents('content/welcome.txt') : 'Welcome'; ?>
        </p>
        <h1 class='heading'>
          <?php echo file_exists('content/heading.txt') ? file_get_contents('content/heading.txt') : "I'm Charlie" ; ?>
        </h1>
        <p class="description">
          <?php echo file_exists('content/description.txt') ? file_get_contents('content/description.txt') : 'Description not available.'; ?>
        </p>
      </div>
      <div class="profile-picture">
        <img src="image-removebg-preview-TDVN-g1GU-transformed.png" alt="Profile Picture">
      </div>
    </div>
  </section>
</body>
</html>
