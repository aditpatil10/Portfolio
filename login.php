<?php include('functions.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>adi10's Portfolio</title>
    <link rel="stylesheet" href="css/portfolio.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/portfolio.js" type="text/javascript"></script>
  </head>
  <body class="home">
    <nav>
      <ul>
        <button>🞬</button>
        <li style="padding-right: 12%"><a href="#home">adi10</a></li>
        <li><a href="#">Homepage</a></li>
        <li><a href="aboutme.html">About me</a></li>
        <li><a href="skills.html">Skills</a></li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="exp.html">Experience</a></li>
        <li><a href="edu.html">Education</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="Hireme.html">Hire me</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li>
          <a
            href="register.php"
            
            >Sign up</a
          >
        </li>
        <li>
          <a
            href="#"
            
            >Login</a
          >
        </li>
      </ul>
    </nav>
    <!-- Log in popup starts -->
    <!-- The Modal -->
    <div>
      <!-- Modal Content -->
      <form class="modal-content animate" method="post" action="login.php">

      <?php echo display_error(); ?>
        <div style="padding: 2%">
          <h1>Log in</h1>
        </div>

        <div class="container">
          <label for="username"><b>Username</b></label>
          <input
            placeholder="Enter Username"
            input type="text" name="username"
          />

          <label for="psw"><b>Password</b></label>
          <input
            placeholder="Enter Password"
            type="password" name="password"
          />

          <button type="submit" name="login_btn">Login</button>

          <p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
          <label>
            <input type="checkbox" checked="checked" name="remember" /> Remember
            me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
    <!-- Log in popup ends -->
    
    <footer>
      <p>Copyrights @adi10</p>
    </footer>
  </body>
</html>
