<!doctype html>
<html>

  <head>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

  </head>

  <body>
    <header class="header">
      <h1 class="headline">Steve Slusarczyk</h1>

      <ul class="header-subnav">
        <li><a href="index.php">About</a></li>
        <li><a href="resume.php">Resume</a></li>
        <li><a href="contact.php" class="is-active">Contact</a></li>
      </ul>

    </header>

    <div class="row">
      <div class="medium-6 columns">
        <h3>Contact Me</h3>
        <p>Please feel free to contact me at any of the following sites.</p>
      <?php
          $links= array(array("https://github.com/steveslu", "Github"),
          array("https://www.linkedin.com/in/stephen-slusarczyk-b3282296", "LinkedIn"),
          array("https://www.facebook.com/stephen.slusarczyk", "Facebook"),
          );
          echo "<ul class='menu' id='arrylist'>";
          foreach($links as $temp){
            echo "<li class='link'>";
            echo "<a href='";
            echo $temp[0];
            echo "' target='_blank'>";
            echo $temp[1];
            echo "</a>";
            echo "</li>";
          }
          echo "</ul>";
      ?>


      </div>
      <div class="medium-6 columns">
        <label>Name
          <input type="text" placeholder="Name">
        </label>
        <label>Email
          <input type="text" placeholder="Email">
        </label>
        <label>
          Message
          <textarea placeholder="I will implement a functioning submit button in part 2."></textarea>
        </label>
        <input type="submit" class="button expanded" value="Will work in part 2">
      </div>
    </div>
    <div class="phone">
      <p>stephen.slusarczyk@gmail.com</p>
      <p>484-947-4694</p>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>

</html>
