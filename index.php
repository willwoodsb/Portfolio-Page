<?php

session_start();

$success = null;
if (isset($_SESSION["success"])) {
  if ($_SESSION["success"]) {
    $success = true;
  } else if ($_SESSION["success"] === false) {
    $success = false;
  }
  $_SESSION["success"] = null;
}

if (isset($_SESSION["accessed"])) {
  $accessed = 'y';
} else {
  $accessed = 'n';
}
$_SESSION["accessed"] = true;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio | Will Woods Ballard | Web Developer</title>
    <link rel="stylesheet" href="css/application.css">
    <link rel="icon" href="img/W.png" type="image/x-icon">
  </head>
  <body>
    <div class="">
      <!-- hamburger -->
      <a class="hamburger-container width">
        <div class="hamburger"><span class="icon"></span></div>
      </a>
      
      <!-- Container div for the content of the website. Contains two item divs, one for the main menu and one for the main content of the website. -->
      <div class="body">
        <!-- Main menu -->
        <section class="body__item is-visible-large-screen" id="index-nav">
          <div class="popout-menu white is-visible-large-screen">
            <div class="home popout-menu__item"><a href="#main" class="internal-links">WWB</a></div>
            <hr class="popout-menu__item">
            <div class="popout-menu__item"><a href="./about-me.html">About Me</a></div>
            <div class="popout-menu__item"><a href="#portfolio" class="internal-links">My Portfolio</a></div>
            <div class="popout-menu__item"><a href="./coding-examples.html">Coding Examples</a></div>
            <div class="popout-menu__item"><a href="./scs.html">SCS Scheme</a></div>
            <hr class="popout-menu__item">
            <div class="popout-menu__item" ><a href="#form" class="internal-links" id="contact">Contact Me</a></div>
            <hr class="popout-menu__item">
            <div class="popout-menu__item"><a href="https://www.linkedin.com/in/william-woods-ballard-1947101b3" target="_blank"><div><span class="icon"></span></div></a></div>
          </div>
        </section>

        <!-- Content div -->
        <div class="body__item main white" id="main">

          <!-- Header -->
          <header class="background-image water__header water">
            <!-- Main title section -->
            <section class="title-section width" id="index-title">
              <div id="title">
                <h1 class="no-JS">My Name is Will Woods Ballard</h1>
                <h3 class="no-JS">I'm a Web Developer</h3>
                <h1 id="name"></h1>
                <h3 id="web-dev"></h3>
              </div>
              <a href="#portfolio" class="scroll" id="scroll-down">
                <p>Scroll Down</p>
                <span class="icon"></span>
              </a>
            </section>

          </header>

          <!-- Main -->
          <main class="white">
            <!-- Main content -->
            <section id="portfolio" class="portfolio width">
              <?php include 'inc/portfolioItem.php'; ?>
              <div class="portfolio__item">
                <img src="img/placeholder1.jpg" alt="Placeholder Image">
                <div class="padded">
                  <h2>Project Three</h2>
                  <div class="view-link"><p>Coming Soon</p></div>
                </div>
              </div>
            </section>

            

            <!-- Contact Form -->
            <section class="width" id="form">
              <?php if ($success === false) { ?>
                <div class="submit-message" id="success">
                    <p>Something has gone wrong, your query could not be submitted.</p>
                    <span class="icon"></span>
                </div>
              <?php } else if ($success) { ?>
                  <div class="submit-message success" id="success">
                      <p>Your query has been submitted! Thanks for getting in touch.</p>
                      <span class="icon"></span>
                  </div>
              <?php } ?>
              <div class="form">
                <div class="form__col">
                  <h2>Get In Touch</h2>
                  <p>Please contact me via the form, I will be happy to recieve your message and will get back to you as soon as possible!</p>
                  <h3>07741 487037</h3>
                  <h3>willwoodsb@gmail.com</h3>
                </div>
                <div class="form__col">
                  <form method="post" name="myForm" action="inc/postData.php">
                    <div class="form__col--child">
                      <input type="text" class="" id="fname" name="fname" placeholder="First Name" required>
                      <p class="error">Please enter your first name</p>
                    </div>
                    <div class="form__col--child">
                      <input type="text" class="" id="lname" name="lname" placeholder="Last Name" required>
                      <p class="error">Please enter your last name</p>
                    </div>
                    <div class="form__col--child">
                      <input type="email" class="" id="email" name="email" placeholder="Email Address" required>
                      <p class="error">Please enter a valid email</p>
                    </div>
                    <div class="form__col--child">
                      <textarea class="" id="message" name="message" placeholder="Message" required></textarea>
                      <p class="error">Please enter a message</p>
                    </div>
                    <input type="submit" class="form__col--child" value="Send Message" onclick="submitForm(document.myForm)">
                  </form>
                </div>
              </div>
            </section>

            

          </main>

          <footer class="background-image water__footer">

            <a href="#portfolio" class="scroll">
              <span class="icon"></span>
              <p>Back To Top</p>
            </a>

            
          </footer>
        </div>
      </div>  
    </div>
    <!-- JS links -->
    <script>
      const accessed = <?php echo "'" . $accessed . "'"; ?>;
    </script>
    <script
      src="https://code.jquery.com/jquery-3.6.2.min.js"
      integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA="
      crossorigin="anonymous">
    </script> 
    <script
      src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
      integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0="
      crossorigin="anonymous">
    </script>
    <script src="text-effect/selfw.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>