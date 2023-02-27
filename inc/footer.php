<footer class="background-image water__footer">

            <a href="#<?php 
            if ($title == 'Portfolio') {
                echo 'portfolio';
            } else {
                echo 'main';
            }
            ?>" class="scroll">
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
    <script src="prism/prism.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>