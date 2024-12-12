<?php
$content = file_get_contents("content/home.txt");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="mae.css">
</head>
<body>
    <header>
        <div class="user">
            <img src="gine.jpg" alt="">
            <h3 class="name">Mae Dallz</h3>
            <p class="post">front end developer</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div id="menu" class="fas fa-bars"></div>

<!-- home section starts -->

<section class="home" id="home">

        <h3>HI THERE !</h3>
        <h1>I'M <span>Mae Dallz</span> </h1>
        <p>Lorem ipsum dolor sit, amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Dolorem ex nam nobis! Excepturi velit architecto consectetur debitis, repellat harum inventore suscipit amet animi ad nobis, temporibus, iusto alias impedit consequatur.
        adipisicing elit.</p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- about section starts -->

<section class="about"  id="about">

<h1 class="heading"><span>about</span> me</h1>

<div class="row">

      <div class="info">
        <h3><span>name : </span>mae dallz </h3>
        <h3><span>age : </span>20</h3>
        <h3><span>qualification : </span>BMS </h3>
        <h3><span>post : </span>front end developer </h3>
        <h3><span>language : </span>english </h3>
        <a href="#"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
      </div>

      <div class="counter">
 
          <div class="box">
            <span>2+</span>
            <h3>years of experience</h3>
          </div>

          <div class="box">
            <span>100+</span>
            <h3>project completed</h3>
          </div>

          <div class="box">
            <span>430+</span>
            <h3>happy clients</h3>
      </div>

      <div class="box">
            <span>12+</span>
            <h3>awards won</h3>
      </div>

      </div>
</div>

</section>

<!-- education section start -->

<section class="education" id="education">

<h1 class="heading">My<span> Education</span> </h1>

<div class="box-container">

     <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2016</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad velit, sequi reiciendis facere, hic corrupti voluptatem delectus ipsa culpa in enim quisquam,
         praesentium itaque dolorem repellat exercitationem iure possimus rerum!</p>
     </div>

     <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2017</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad velit, sequi reiciendis facere, hic corrupti voluptatem delectus ipsa culpa in enim quisquam,
         praesentium itaque dolorem repellat exercitationem iure possimus rerum!</p>
     </div>

     <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2018</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad velit, sequi reiciendis facere, hic corrupti voluptatem delectus ipsa culpa in enim quisquam,
         praesentium itaque dolorem repellat exercitationem iure possimus rerum!</p>
     </div>

     <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2019</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad velit, sequi reiciendis facere, hic corrupti voluptatem delectus ipsa culpa in enim quisquam,
         praesentium itaque dolorem repellat exercitationem iure possimus rerum!</p>
     </div>

     <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2020</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad velit, sequi reiciendis facere, hic corrupti voluptatem delectus ipsa culpa in enim quisquam,
         praesentium itaque dolorem repellat exercitationem iure possimus rerum!</p>
     </div>

     <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2021</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad velit, sequi reiciendis facere, hic corrupti voluptatem delectus ipsa culpa in enim quisquam,
         praesentium itaque dolorem repellat exercitationem iure possimus rerum!</p>
     </div>

</div>

</section>

<!-- portfolio section starts --> 

<section class="portfolio" id="portfolio">

<h1 class="heading"> My <span>portfolio</span> </h1>

<div class="box-container">

     <div class="box">
        <img src="mae.jpg" alt="">
     </div>

     <div class="box">
        <img src="gine.jpg" alt="">
     </div>

     <div class="box">
        <img src="mae.jpg" alt="">
     </div>

     <div class="box">
        <img src="gine.jpg" alt="">
     </div>

     <div class="box">
        <img src="mae.jpg" alt="">
     </div>

     <div class="box">
        <img src="gine.jpg" alt="">
     </div>
     
</div>

</section>

<!-- contact section starts--> 

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me</h1>

<div class="row">
    <div class="content">

        <h3 class="title">content info</h3>
        <div class="info">
            <h3><i class="fa fa-enveloped"></i> Mae23@gmail.com </h3>
            <h3><i class="fa fa-phone"></i>+063-981-654-3797 </h3>
            <h3><i class="fa fa-phone"></i>+111-222-333 </h3>
            <h3><i class="fa fa-map-marker-alt"></i> 218 liwliwa, Anonang San fabian , Pangasinan</h3>
        </div>

    </div>

    <form action="">

        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="text" placeholder="project" class="box">
        <textarea name="text" id="" cols="30" rows="10" class="box message" placeholder="message">          
        </textarea>
         <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i></button>
    
    </form>
</div>
</section>
 
<!-- scroll top button --> 
<a href="#home" class="top">
    <img src="mae.jpg" alt="">
</a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>

</body>
</html>
