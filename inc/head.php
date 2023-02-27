<?php
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
    <title><?php echo $title;?> | Will Woods Ballard | Web Developer</title>
    <link rel="stylesheet" href="prism/prism.css">
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
            <div class="home popout-menu__item"><a href="./" class="<?php if ($title == 'Portfolio') {echo 'internal-links';} ?>">WWB</a></div>
            <hr class="popout-menu__item">
            <div class="popout-menu__item"><a href="./about-me.php">About Me</a></div>
            <div class="popout-menu__item"><a href="<?php if ($title != 'Portfolio') {echo './';} ?>#portfolio" class="<?php if ($title == 'Portfolio') {echo 'internal-links';} ?>">My Portfolio</a></div>
            <div class="popout-menu__item"><a href="./coding-examples.php">Coding Examples</a></div>
            <div class="popout-menu__item"><a href="./scs.php">Skills Bootcamp</a></div>
            <hr class="popout-menu__item">
            <div class="popout-menu__item" ><a href="<?php if ($title != 'Portfolio') {echo './';} ?>#form" class="<?php if ($title == 'Portfolio') {echo 'internal-links';} ?>" id="contact">Contact Me</a></div>
            <hr class="popout-menu__item">
            <div class="popout-menu__item">
              <a href="https://www.linkedin.com/in/william-woods-ballard-1947101b3/" target="_blank"><div><span class="icon linkedin"></span></div></a>
              <a href="https://github.com/willwoodsb" target="_blank"><div><span class="icon github"></span></div></a>
            </div>
          </div>
        </section>

        <!-- Content div -->
        <div class="body__item main white" id="main">