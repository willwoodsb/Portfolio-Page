<?php 
session_start();


$title = 'About Me';

include 'inc/head.php'; 

?>

          <!-- Header -->
          <header class="background-image about-me__header slim-header title-section about-me" id="about-me">
              <h1 class="ticker">About Me</h1>
          </header>

          <!-- Main -->
          <main class="white">
            <section class="width aux-text" id="about-me-text">
              <p>I am a highly motivated, logically minded and creative individual, 
              looking to pursue a career in Tech. To this end, I am currently
              studying on the <a href="./scs.php">Netmatters Code Bootcamp</a> programme, which will give me the tools
              I need to be a highly proficient, full-stack developer.</p>
              <h2 id="skills-title">Skills</h2>
              <div class="skills-grid">
                <div class="skills-grid__item">
                  <h3>HTML5</h3>
                  <p>Very comfortable with semantic markup and general structuring.</p>
                </div>
                <div class="skills-grid__item">
                  <h3>CSS3</h3>
                  <p>Able to manage layouts with both Flexbox and CSS Grid, in conjunction with SASS.</p>
                </div>
                <div class="skills-grid__item">
                  <h3>JavaScript</h3>
                  <p>Able to use vanilla JavaScript as well as jQuery and AJAX to effectively make dynamic and interactive websites.</p>
                </div>
                <div class="skills-grid__item">
                  <h3>PHP</h3>
                  <p>Knowledge of the language, including experience building applications using it.</p>
                </div>
                <div class="skills-grid__item">
                  <h3>Git</h3>
                  <p>Used frequently while working on projects.</p>
                </div>
              </div>
              <h2>Education</h2>
              <div class="text-grid">
                <div class="text-grid__item">
                  <h3>BEng Aerospace Engineering with First Class Honours - University of Bristol</h3>
                  <p>During my time studying as an undergraduate,
                    I completed courses in C and extensively used MATLAB. My 3rd year research project was entirely 
                    based on a MATLAB script I wrote, using aeroelastic models to predict the vibrational behaviour of 
                    carbon fibre wing structures under aerodynamic loading. Furthermore, during a university-based research 
                    internship, I programmed a radio-controlled breakable link for a water sampling drone using Arduino 
                    code, digitally controlling analogue circuitry to create a current controller with a customised sampling 
                    frequency.</p>
                  <p>Studying engineering has afforded me an in-depth understanding of engineering principles both practically and theoretically stemming 
                    from extensive teaching and applied group projects. Projects included successfully designing 
                    and manufacturing a two-meter-long plane wing in a group of thirty-five, requiring strong 
                    teamwork, communication and technical skills.</p>
                </div>
                <div class="text-grid__item">
                  <h3>MA Popular Music Practice with Distinction - BIMM</h3>
                  <p>This course was geared around a major project in which I wrote, produced and mixed an album of 
                    original music, supplementing this with written documentation of the process that led to it. The 
                    project involved collaborating with other musicians and sound engineers to record multiple 
                    instrumental parts that I had written, requiring clear communication between all parties to produce 
                    the best final outcome.</p>
                  <p>Digital manipulation of sound is at the forefront of my practice, and as such 
                    I am highly proficient at using audio software such as Ableton Live. I gain an enormous amount of 
                    satisfaction from the creative process, whether I am writing and recording music or coding, I am most 
                    engaged when I am working on a project that requires a degree of creative thinking.
                    </p>
                </div>
              </div>
              <h2>Hobbies</h2>
              <div class="text-grid">
                <div class="text-grid__item">
                  <h3>Music Technology</h3>
                  <p>As both a musician and producer, I am obsessed with music technology. I have extensively used software such as Ableton Live for recording and interacting with hardware.</p>
                </div>
                <div class="text-grid__item">
                  <h3>Ski Touring</h3>
                  <p>I am a firm believer that skiing is much more enjoyable if you walk up the mountain first. This hobby has become the primary motivation behind most of the traveling I do, taking me to places such as Kazakhstan and Japan.</p>
                </div>
              </div>
            </section>
          </main>
<?php 
include 'inc/footer.php';
?>