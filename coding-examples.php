<?php 
session_start();

$title = 'Coding Examples';

include 'inc/head.php'; 
include 'inc/portfolio_array.php';

?>

          <!-- Header -->
          <header class="background-image coding__header slim-header title-section coding" id="coding-top">
              <h1>Coding Examples</h1>
          </header>

          <!-- Main -->
          <main class="white">
            <section class="width aux-text">
              <h2>PHP Leaflet Initialiser</h2>
              <pre>
                <code class="language-php">
&lt;?php
include('inc/locations.php');
?&gt;
&lt;!-- Script to initialise maps plugin --&gt;
&lt;script&gt;
&lt;!-- Loop through each value within $locations --&gt;
&lt;?php foreach ($locations as $key =&gt; $loc) { ?&gt;
    &lt;!-- Create variable who's name is the array key of the particular $location,
    and perform the initialisation --&gt;
    var &lt;?php echo $key; ?&gt; = 
        L.map(&lt;?php echo '\'' . $key . '\''; ?&gt;, { 
            scrollWheelZoom: false,
            attributionControl: false
        })
        .setView(&lt;?php echo "[" . implode(", ", $loc["coordinates"]) . "]"; ?&gt;, 15);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; &lt;a href="https://www.openstreetmap.org/copyright"&gt;OpenStreetMap&lt;/a&gt; contributors'
    }).addTo(&lt;?php echo $key; ?&gt;);

    &lt;!-- set marker with popup containing address --&gt;
    L.marker(&lt;?php echo "[" . implode(", ", $loc["coordinates"]) . "]"; ?&gt;).addTo(&lt;?php echo $key ?&gt;)
        .bindPopup(`
            &lt;?php 
            //Print address of office in the popup, line by line  
            foreach ($loc["address"] as $line) {
                echo $line;
                if ($line != end($loc["address"])) {
                    echo "&lt;br&gt;";
                }
            }          
            ?&gt;
        `);

&lt;?php } ?&gt;
                </code>
              </pre>
              <p>In order to initialise the <a href="https://leafletjs.com/" target="_blank">Leaflet JS Plugin</a> for each of Netmatters' offices (see <a href="<?php echo $portfolio_array["netmatters"]["website-link"]; ?>contact-us.php" target="_blank">my recreation of the Netmatters contact page</a>) without resorting to doing it manually for each one, 
              I created this PHP loop that takes data from an array in <code class="language-php">'inc/locations.php'</code>, and creates a script that initialises the plugin according to the data for each <code class="language-php">$location</code> in the <code class="language-php">$potfolio_array</code>. This means that more locations can be added, or existing locations can be edited, simply by modifying the <code class="language-php">$potfolio_array</code>.</p>
              <h2>Sass Loop</h2>
              <pre class="prettyprint">
                <code class="language-css">
// loop to assign hover colors and icons to each nav section

@each $theme, $icon in $theme-icons {
    .#{$theme} {
        &__icon {
            color: map-get($theme-colors, $theme);
            &::before {
                content: $icon;
            }
        }
        &:hover {
            background-color: map-get($theme-colors, $theme);
            .triangle {
                background-color: map-get($theme-colors, $theme);
            }
            .menu-popup {
                background-color: darken(map-get($theme-colors, $theme), 10%);
            }
        }
    }
}
                </code>
              </pre>
              <p>This loop, written in Sass, defines the theme colours of the nav bar in <a href="<?php echo $portfolio_array["netmatters"]["website-link"]; ?>" target="_blank">my recreation</a> of the <a href="https://www.netmatters.co.uk/" target="_blank">Netmatters homepage</a>.
              It does so by accessing theme colours defined in a Sass map in the <code class="language-css">_config.scss</code> file, allowing someone to easily modify these colours should they desire. 
              Using a loop to do this rather than individually coding each item adheres to the Don't Repeat Yourself, (DRY), principle which is general coding best practice.</p>
            
              <h2>Javascript Sticky Menu Icon</h2>
              <pre class="prettyprint">
                <code class="language-javascript">
//scroll event listener
window.addEventListener("scroll", function() {
    // Call the makeSticky function  
    makeSticky(document.querySelector('.hamburger-container')); 
});

//make an element stick when scrolling
function makeSticky(element) {
    // Get the position of the element 
    const position = element.getBoundingClientRect();

    // Check if the element is in the viewport  
    const isInViewport = (position.top > -100 && $(element).css('position') !== 'fixed');

    if (!isInViewport && !hamShow ) {  
        // The element is not in the viewport, so add the "sticky" class to make it sticky
        
        $(element).addClass("sticky").addClass("sticky-reveal"); 
        hamShow = true;
        let i = 0;
        //loop that loops for approx 2 seconds if not hovering on popup and infinitely if hovering and then when finished removes popup 
        function hoverLoop() {
            setTimeout(() => {
                if (isHovering(element) && i <= 2000) {
                    i = 0;
                    hoverLoop();
                } else if (!isHovering || i <= 2000) {
                    i += 250;
                    hoverLoop();
                } else {
                    element.classList.remove("sticky-reveal");
                    if (window.pageYOffset > 100) {
                        setTimeout(function() {
                            element.classList.remove("sticky"); 
                            hamShow = false;
                        }, 500);
                    } else {
                        element.classList.remove("sticky"); 
                        hamShow = false;
                    }
                }
            }, 250);
        }
        
        hoverLoop();

    } else if (isInViewport && hamShow ) {
        // The element is in the viewport, so remove the "sticky" class
        element.classList.remove("sticky"); 
        hamShow = false; 
    } 
}
  
//test id the user is hovering over an element
function isHovering(element) {

    // Get the element's position  
    const position = element.getBoundingClientRect();

    // Get the mouse position 
    const mouseX = mousePos[0];  
    const mouseY = mousePos[1];
    // Check if the mouse position is within the element's position
    if (mouseX >= position.left && mouseX <= position.right && mouseY >= position.top && mouseY <= position.bottom) { 
        return true;
    } else { 
        return false;  

    }  

}
                </code>
              </pre>
              <p>This JavaScript function is taken from this website and causes the menu pop-out icon to appear and dissapear as the user scrolls (in mobile view).
                It accomplishes this by adding a CSS class to the hamburger element when the user has scrolled it out of viewport which brings it back into viewport.
                The icon will appear for two seconds before dissapearing again, unless the user is hovering on the item (which is tested for using the <code class="language-javascript">isHovering()</code> function).
                The <code class="language-javascript">makeSticky()</code> function is then called in an event listener which watches for user scroll input.
                I purposely kept these functions non-specific to the element they are applied to so that I can use them in future projects without having to adapt them.
              </p>
            </section>

          </main>

<?php 
include 'inc/footer.php';
?>