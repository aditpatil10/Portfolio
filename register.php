
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
            href="#"
            onclick="document.getElementById('id02').style.display='block'"
            >Sign up</a
          >
        </li>
        <li>
          <a
            href="#"
            onclick="document.getElementById('id01').style.display='block'"
            >Login</a
          >
        </li>
      </ul>
    </nav>

    <!-- The Modal -->
    <div>

      <!-- Modal Content onsubmit="return singup()"  -->
      <form
        class="modal-content animate"
        action="register.php"
        method="post"
      >
      <?php echo display_error(); ?>
        <div style="padding: 2%">
          <h1>Check in</h1>
        </div>

        <div class="container">
          <label for="email" id="email-label"><b>Email</b></label>
          <input type="email" name="email" value="<?php echo $email; ?>" />
          <p>
            <label for="username"><b>Username</b></label>
            <input name="username" type="text" value="<?php echo $username; ?>"  />
          </p>

          <label for="password" id="password-label"><b>Password</b></label>
          <input
            class="pwd"
            name="password_1"
            type="password"
          />

          <label id="password-label" for="password"
            ><b>Repeat Password</b></label
          >
          <input
            name="password_2"
            type="password"
          />

          <button type="submit" name="register_btn">Register</button>
          <input type="reset" name="reset" value="Reset" />
        </div>

        <div class="container" style="background-color:#f1f1f1">
        </div>
      </form>
    </div>
    <footer>
      <p>Copyrights @adi10</p>
    </footer>
  </body>
</html>
