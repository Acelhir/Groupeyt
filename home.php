<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="home.css"> 
</head>
<body>
    <header>
        <h2>Platform Technologies</h2>
    </header>
    <br><br>
    <section id="content">
        <h2>Fernandez Ferdinand's Portfolio</h2>     
        <a href="#" onclick="loadContent('fer.php')">Click</a>
    </section>
    <section id="content">
        <h2>Lester's Portfolio</h2>     
        <a href="#" onclick="loadContent('lester.html')">Click</a>
    </section>
    <section id="content">
        <h2>Regine Mae Dalles's Portfolio</h2>     
        <a href="#" onclick="loadContent('mae.php')">Click</a>
    </section>
    <section id="content">
        <h2>Charlie De Vera's Portfolio</h2>     
        <a href="#" onclick="loadContent('charlie.php')">Click</a>
    </section>
        &copy; 2024 Group 8. All rights reserved.
    </footer>

    <script>
        function loadContent(page) {
            fetch(page)
                .then(response => response.text())
                .then(data => {
                    const contentSection = document.getElementById('content');
                    contentSection.innerHTML = data;
                    contentSection.scrollIntoView({ behavior: 'smooth' });
                })
                .catch(error => console.error('Error loading content:', error));
        }
    </script>
</body>
</html>
