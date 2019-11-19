<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Blog</title>
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
  <body>
    <nav>
      <ul>
        <button>🞬</button>
        <li style="padding-right: 12%"><a href="#home">User</a></li>
        <li><a href="index.php">Homepage</a></li>
        <li><a href="aboutme.php">About me</a></li>
        <li><a href="skills.php">Skills</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="exp.php">Experience</a></li>
        <li><a href="edu.php">Education</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="hireme.php">Hire me</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li>
        <a
          href="home.php?logout='1'"
            >Log out</a
          >
        </li>
      </ul>
    </nav>
    <header><h1 style="text-align: center">Professional skills</h1></header>
    <div class="wrapper-blog">
      <div>
        <img src="imgs/pixel.jpg" class="img-blog center" />
      </div>
      <h3><b>Google Pixel 4 XL review</b></h3>
      <p>
        The Google Pixel 4 XL is a handsome phone in its simplicity that, by the
        same coin, feels less impressive than its Android flagship counterparts.
        It doesn’t help that its new standout features are inessential, and
        erratically functional.
      </p>

      <button><a href="http://aditpatil10.uta.cloud/tech/google-pixel-4-xl-review/" style="text-decoration: none; color:#f1f1f1"> Get in</a></button>
    </div>
    <div class="wrapper-blog">
      <div>
        <img src="imgs/jsimg.png" class="img-blog center" />
      </div>
      <p>
          It’s that time of year again: The annual overview of the JavaScript tech ecosystem. Our aim is to highlight the learning topics and technologies with the highest potential job ROI. What are people using in the workforce? What do the trends look like? We’re not attempting to pick what’s best, but instead using a data-driven approach to help you focus on what might actually help you land a job when the interviewer asks you
        </p>
  
        <button><a href="http://aditpatil10.uta.cloud/tech/top-javascript-frameworks-and-topics-to-learn-in-2019/" style="text-decoration: none; color:#f1f1f1"> Get in</a></button>
      </div>
    </div>
    <div class="wrapper-blog">
      <div>
        <img src="imgs/globe.jpg" class="img-blog center" />
      </div>
      <p>
          The Google Pixel 4 XL is a handsome phone in its simplicity that, by the
          same coin, feels less impressive than its Android flagship counterparts.
          It doesn’t help that its new standout features are inessential, and
          erratically functional.
        </p>
  
        <button><a href="http://aditpatil10.uta.cloud/tech/ai-being-used-to-confront-mediate-climate-change/" style="text-decoration: none; color:#f1f1f1"> Get in</a></button>
      </div>
    </div>
    <!-- Log in popup starts -->
    <!-- The Modal -->
    <div id="id01" class="modal">
      <span
        onclick="document.getElementById('id01').style.display='none'"
        class="close"
        title="Close Modal"
        >&times;</span
      >

      <!-- Modal Content -->
      <form class="modal-content animate" action="/action_page.php">
        <div style="padding: 2%">
          <h1>Log in</h1>
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input
            type="text"
            placeholder="Enter Username"
            name="uname"
            required
          />

          <label for="psw"><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="psw"
            required
          />

          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember" /> Remember
            me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button
            type="button"
            onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn"
          >
            Cancel
          </button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
    <!-- Log in popup ends -->
    <!-- The Modal -->
    <div id="id02" class="modal">
      <span
        onclick="document.getElementById('id02').style.display='none'"
        class="close"
        title="Close Modal"
        >&times;</span
      >

      <!-- Modal Content -->
      <form class="modal-content animate" action="/action_page.php">
        <div style="padding: 2%">
          <h1>Check in</h1>
        </div>

        <div class="container">
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter name" name="name" required />

          <label for="lname"><b>Last name</b></label>
          <input
            type="text"
            placeholder="Enter Last name"
            name="lname"
            required
          />
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required />
          <label for="usern"><b>Username</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="usern"
            required
          />
          <label for="pass"><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="pass"
            required
          />
          <label for="rpass"><b>Repeat Password</b></label>
          <input
            type="password"
            placeholder="Reenter Password"
            name="rpass"
            required
          />

          <button type="submit">Save</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button
            type="button"
            onclick="document.getElementById('id02').style.display='none'"
            class="cancelbtn"
          >
            Cancel
          </button>
        </div>
      </form>
    </div>
    <footer>
      <p>Copyrights @adi10</p>
    </footer>
  </body>
</html>
