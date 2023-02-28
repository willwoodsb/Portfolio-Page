<?php

session_start();

$title = 'Portfolio';

include 'inc/head.php';

?>

          <!-- Header -->
          <header class="background-image water__header water">
            <!-- Main title section -->
            <section class="title-section width" id="index-title">
              <div id="title">
                <h1 class="no-JS" style="display: none;">My Name is Will Woods Ballard</h1>
                <h3 class="no-JS"style="display: none;">I'm a Web Developer</h3>
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
                  <form method="post" name="myForm" action="inc/postData.php" onsubmit="return submitForm(document.myForm)">
                    <div class="form__col--child">
                      <input type="text" class="" id="fname" name="fname" placeholder="First Name">
                      <p class="error">Please enter your first name</p>
                    </div>
                    <div class="form__col--child">
                      <input type="text" class="" id="lname" name="lname" placeholder="Last Name">
                      <p class="error">Please enter your last name</p>
                    </div>
                    <div class="form__col--child">
                      <input type="email" class="" id="email" name="email" placeholder="Email Address">
                      <p class="error">Please enter a valid email</p>
                    </div>
                    <div class="form__col--child">
                      <textarea class="" id="message" name="message" placeholder="Message"></textarea>
                      <p class="error">Please enter a message</p>
                    </div>
                    <input type="submit" class="form__col--child" value="Send Message">
                  </form>
                </div>
              </div>
            </section>

            

          </main>

<?php 
include 'inc/footer.php';
?>