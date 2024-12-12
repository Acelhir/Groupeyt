<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="fer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header>
        <a href="#home"><img class="logo" src="pictures/Untitled design.png" alt="logo"></a>
        <nav>
          <ul class="nav">
            <li><a href="index.php" class="home">Home</a></li>
            <li><a href="#projects">Project</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#school">School</a></li>
            <li><a href="#index">Contact</a></li>
          </ul>
        </nav>
      </header>
      <section class="index" id="home">
        <div class="img">
            <img src="pictures/pogi2.png" alt="">
        </div>
        
                    <?php
                $aboutMeFile = 'about_me.txt';
                try {
                    if (file_exists($aboutMeFile)) {
                        $aboutMeText = file_get_contents($aboutMeFile);
                        if ($aboutMeText === false) {
                            throw new Exception("Unable to read 'about_me.txt'.");
                        }
                    } else {
                        $aboutMeText = '';
                    }
                } catch (Exception $e) {
                    $aboutMeText = 'An error occurred while fetching About Me information.';
                    error_log($e->getMessage());
                }
                ?>

                    <div class="about-me">
                        <h1>Ferdinand <span>Fernandez</span></h1>
                       <h2>About Me</h2>
                      <p class="text"><?php echo nl2br(htmlspecialchars($aboutMeText)); ?></p>
                      <div class="btn">
                    <a href="edit_about.php">Edit About Me<i class='bx bxs-pencil'></i></a>
                 </div>
                </div>

            <div class="social-links">
                <a href="https://www.facebook.com/ferrr.0"><i class='bx bxl-meta'></i></a>
                <a href="https://github.com/FernandezEJ"><i class='bx bxl-github'></i></a>
                <a href="https://www.linkedin.com/in/ferdinand-fernandez-ba21a4340/"><i class='bx bxl-linkedin-square'></i></a>
                <a href="https://www.instagram.com/fer._.frndz/"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>
    </section>

    <section class="index-page" id="projects">
  <div class="content">
    
          <?php
        $projectsFile = 'projects.txt';
        try {
            if (file_exists($projectsFile)) {
                $projectsText = file_get_contents($projectsFile);
                if ($projectsText === false) {
                    throw new Exception("Unable to read 'projects.txt'.");
                } else {
                  $aboutMeText = '';
              }
            } 
        } catch (Exception $e) {
            $projectsText = 'An error occurred while fetching Projects information.';
            error_log($e->getMessage());
        }
        ?>

<div class="text-section">
    <h1>Projects</h1>
    <h3>From 1st year to 2nd year</h3>
    <p><?php echo nl2br(htmlspecialchars($projectsText)); ?></p>
    <div class="btn">
        <a href="edit_projects.php">Edit Projects<i class='bx bxs-pencil'></i></a>
    </div>
    <div>
  <a href="#projects"><img src="pictures/langs.png" alt="Programming Languages"></a>
</div>
</div>

    <div class="card-section">
      <a href="html/pacman.html" class="card">
        <div class="wrapper">
          <img src="pictures/man1.png" class="cover-image">
        </div>
        <img src="pictures/man.png" class="title">
        <img src="pictures/pac.png" class="character">
      </a>
      
      <a href="html/cal.html">
  <div class="card">
    <div class="wrapper">
      <img src="pictures/cal.png" class="cover-image" />
    </div>
    <img src="pictures/cal2.png" class="title">
    <img src="pictures/cal1.png" class="character" />
  </div>
</a>
<a href="html/block.html">
  <div class="card">
    <div class="wrapper">
      <img src="pictures/block.png" class="cover-image" />
    </div>
    <img src="pictures/block2.png" class="title" />
    <img src="pictures/block1.png" class="character" />
  </div>
</a>
<a href="html/puzz.html">
  <div class="card">
    <div class="wrapper">
      <img src="pictures/puzzle.png" class="cover-image" />
    </div>
    <img src="pictures/puzzle2.png" class="title" />
    <img src="pictures/puzzle1.png" class="character" />
  </div>
</a>
<a href="https://fernandezej.github.io/Coffeeshop/homepage.html">
  <div class="card">
    <div class="wrapper">
      <img src="pictures/coffee.png" class="cover-image" />
    </div>
    <img src="pictures/coffee2.png" class="title" />
    <img src="pictures/coffee1.png" class="character" />
  </div>
</a>
<a href="https://fernandezej.github.io/Portfolio/homepage.html">
  <div class="card">
    <div class="wrapper">
      <img src="pictures/web.png" class="cover-image" />
    </div>
    <img src="pictures/web2.png" class="title" />
    <img src="pictures/web1.png" class="character" />
  </div>
</a>
    </div>
  </div>
</section  id="skills">
<section class="index-page1" id="skills">
        <div class="skills">
          <h1>My Skills</h1>
          <p>My journey of refining my editing and coding skills has been a 
            continuous process of growth and innovation, marked by 
            countless hours of practice and learning.</p>
        </div>

        <div class="row">

          <div class="col">
            <div class="sub-title">
              <h2>Programming Skills</h2>
            </div>
            <div class="skills-container">

              <div class="skill"></div>
                  <div class="subject">HTML5</div>
                  <div class="bar" value="50%">
                      <div class="line" style="max-width: 50%;"></div>
                  </div>
            </div>

            <div class="skill"></div>
                  <div class="subject">CSS3</div>
                  <div class="bar" value="40%">
                      <div class="line" style="max-width: 40%;"></div>
                  </div>

            <div class="skill"></div>
                  <div class="subject">PHP</div>
                  <div class="bar" value="20%">
                      <div class="line" style="max-width: 20%;"></div>
                  </div>

                  <div class="skill"></div>
                  <div class="subject">JavaScript</div>
                  <div class="bar" value="15%">
                      <div class="line" style="max-width: 15%;"></div>
                  </div>

            <div class="skill"></div>
                  <div class="subject">JAVA</div>
                  <div class="bar" value="45%">
                      <div class="line" style="max-width: 45%;"></div>
                  </div>
                </div>

          <div class="col">
            <div class="sub-title">
              <h2>Editing Skills</h2>
            </div>
            <div class="skills-container">

              <div class="skill"></div>
                  <div class="subject">Alightmotion</div>
                  <div class="bar" value="60%">
                      <div class="line" style="max-width: 60%;"></div>
                  </div>
            </div>

            <div class="skill"></div>
                  <div class="subject">Canva</div>
                  <div class="bar" value="70%">
                      <div class="line" style="max-width: 70%;"></div>
                  </div>

            <div class="skill"></div>
                  <div class="subject">PowerPoint</div>
                  <div class="bar" value="40%">
                      <div class="line" style="max-width: 40%;"></div>
            </div>

            <div class="skill"></div>
                  <div class="subject">CapCut</div>
                  <div class="bar" value="50%">
                      <div class="line" style="max-width: 50%;"></div>
                  </div>
            </div>
          </div>
</section>

    <section class="index-page2" id="school">
      <div class="content1">
        <div class="text-section1">
        <h1>School</h1>
        <h3>Universidad De Dagupan</h3>
        <br>
          Universidad de Dagupan (UDD) is a premier educational institution 
          renowned for its commitment to academic excellence and holistic 
          development. With a strong tradition of producing topnotchers, UDD 
          offers a wide range of undergraduate and graduate programs across 
           disciplines. Our dedicated faculty, state-of-the-art facilities, 
           and supportive learning environment foster critical thinking, 
           innovation, and leadership skills. <br></br>

          Recognizing our dedication to quality education and continuous improvement, 
          Universidad de Dagupan is recommended for the ISO 21001:2018 Certification,
           a globally recognized standard for Educational Organizations Management Systems. 
           This achievement underscores our unwavering commitment to meeting the needs of
            learners and stakeholders through an effective management system. It reflects 
            our dedication to fostering excellence and delivering high-quality 
             that prepares our students for success in a rapidly changing world. <br></br>
          
          UDD is more than just a school; it's a community that nurtures growth and potential.
          We believe in providing accessible and affordable quality education to empower our 
          students to achieve their dreams. By investing in your future at UDD, you're not just 
          gaining knowledge; you're gaining a competitive edge in today's dynamic world.          
        </p>
        <div class="btn">
          <a href="https://www.facebook.com/uddinfoboard">Visit Here!</a>
        </div>
      </div>
      </div>
      <div class="right-images">
        <article>
          <figure>
            <img class="dynamic-image" src="pictures/udd1.jpg" alt="Dynamic Image">
          </figure>
        </article>
        <article>
          <figure>
            <img class="dynamic-image" src="pictures/udd.jpg" alt="Dynamic Image">
          </figure>
        </article>
      </div>
    </section>

    <section class="index-page3" id="index">
      <div class="cont">
        <div class="contents">
          <div class="left">
            <div class="image-box">
              <img src="pictures/pogi1.png" alt="Profile Image">
            </div>
          </div>
      
          <div class="middle">
            <div class="details address">
              <div class="info">
                <div class="topik"><i class='bx bx-map'></i>Address</div>
                <div class="text-one">Dagupan City, Pangasinan</div>
                <div class="text-two">#1168 Japan St., Bonuan Binloc</div>
              </div>
            </div>
      
            <div class="details phone">
              <div class="info">
                <div class="topik"><i class='bx bx-phone'></i>Phone</div>
                <div class="text-one">+0927 1754 838</div>
                <div class="text-two">+0972 7145 383</div>
              </div>
            </div>
      
            <div class="details email">
              <div class="info">
                <div class="topik"><i class='bx bxl-gmail'></i>Email</div>
                <div class="text-one">fernandezfr.884.stud@cdd.edu.ph</div>
                <div class="text-two">ferferfernandez2717@gmail.com</div>
              </div>
            </div>
            <div class="imgss">
              <img src="pictures/cat.png" alt="">
            </div>
          </div>
      
          <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you find anything in my projects appealing and would 
              like to request the source code, feel free to reach out 
              to me. Additionally, if you have any comments or feedback, 
              don't hesitate to get in touch. Thank you for checking out my portfolio!</p>


        <form id="contactForm">
        <div class="input-box">
            <input type="text" name="name" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
            <input type="text" name="number" placeholder="Enter your number" required>
        </div>
        <div class="input-box">
            <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box msg-box">
            <textarea name="message" placeholder="Enter your message" required></textarea>
        </div>
        <div class="button">
            <input type="submit" value="Send Now">
        </div>
    </form>
    <div id="notification" style="display: none;"></div>

    <script>
        const form = document.getElementById('contactForm');
        const notification = document.getElementById('notification');

        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent default form submission behavior

            // Collect form data
            const formData = new FormData(form);

            // Send form data to PHP via fetch API
            fetch('message.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    notification.textContent = data.message;
                    notification.style.display = 'block';
                    notification.style.color = 'green';
                } else {
                    notification.textContent = 'Failed to send message.';
                    notification.style.display = 'block';
                    notification.style.color = 'red';
                }

                // Clear form after submission
                form.reset();

                // Hide notification after 3 seconds
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 3000);
            })
            .catch(error => {
                notification.textContent = 'Error: Could not send message.';
                notification.style.display = 'block';
                notification.style.color = 'red';
            });
        });
    </script>


          </div>
        </div>
      </div>
      
      <div class="social-links3">
          <a href="https://www.facebook.com/ferrr.0"><i class='bx bxl-meta'></i></a>
          <a href="https://github.com/FernandezEJ"><i class='bx bxl-github'></i></a>
          <a href="https://www.linkedin.com/in/ferdinand-fernandez-ba21a4340/"><i class='bx bxl-linkedin-square'></i></a>
          <a href="https://www.instagram.com/fer._.frndz/"><i class='bx bxl-instagram'></i></a>
      </div>
  </section>


</body>
</html>