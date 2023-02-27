<?php 
session_start();

$title = 'Skills Bootcamp';

include 'inc/head.php';

?>

          <!-- Header -->
          <header class="background-image scs__header slim-header title-section scs" id="scs">
              <h1><?php echo $title; ?></h1>
          </header>

          <!-- Main -->
          <main class="white">
            <section class="width aux-text">
              <h2>Introduction to Netmatters Skills Bootcamp</h2>
              <p>The <a href="https://www.netmatters.co.uk/skills-bootcamp" target="_blank">Netmatters Skills Bootcamp</a> is an intensive, specially tailored training program run by Netmatters in order to give willing candidates the opportunity to enter the industry as web developers. Under the supervision of senior web developers, participants undergo 16-weeks of specific training, giving them the skills they need to become junior developers. The course is intensive and therefore the level of learning achieved is extensive in a short space of time.</p>
              <h2>Treehouse</h2>
              <p>Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, iOS development, data analysis, and more. By completing courses users can earn points, allowing them to track their progress and see how much they've covered in certain areas.</p>
              <h3>Total Score</h3>
              <p><a href="https://teamtreehouse.com/profiles/willwoodsballard" target="_blank">teamtreehouse.com/profiles/willwoodsballard</a></p>
              
              <h2>About Netmatters</h2>
              <ul>
                <li>Established in 2008</li>
                <li>Norfolk's leading technology company</li>
                <li>Winner of the Princess Royal Training Award</li>
                <li>Winner of EDP Skills of Tomorrow Award</li>
                <li>80+ staff, 2 locations across Norfolk</li>
                <li>Digital Marketing, Website & Software development & IT Support</li>
                <li>Broad spectrum of clients, working nationwide</li>
                <li>Operate to strict company values</li>
              </ul>
              <div class="logo"><a href="https://www.netmatters.co.uk/" target="_blank"><img src="img/netmatters-logo.png" alt="Netmatters Logo"></a></div>
            </section>

<?php 

include 'inc/footer.php';

?>