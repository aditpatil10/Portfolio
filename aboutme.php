<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>About Me</title>
    <link rel="stylesheet" href="css/portfolio.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/portfolio.js" type="text/javascript"></script>
  </head>
  <body>
    <nav>
      <ul>
        <button>🞬</button>
        <li style="padding-right: 12%"><a href="#home">adi10</a></li>
        <li><a href="home.html">Homepage</a></li>
        <li><a href="#">About me</a></li>
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

    <div id="wrapper">
      <div class="leftside">
        <article>
          <h1>About</h1>
          <p>
            A graduate Computer Science student at University of Texas at
            Arlington with an interest in Web developing, Data mining,
            Artificial Intelligence and Machine Learning. Seeking the new
            opportunities across various tech domains. Currently working and
            Learning AI & Algorithms.
          </p>
          <p>
            <b>Specialties</b>
          </p>
          <ul>
            <li>Javascript</li>
            <li>Angular.js</li>
            <li>React.js</li>
            <li>Node.js</li>
          </ul>
        </article>
      </div>
      <div class="rightside">
        <article>
          <h1><b>Basic Information</b></h1>

          <p><b>Age:</b> 22</p>
          <p><b>Email:</b> adi10.patil@gmail.com</p>
          <p><b>Phone:</b> 4699203325</p>
          <p><b>Address:</b> 221B Bakers Street</p>
          <p><b>Language:</b> English, Hindi, Marathi</p>
        </article>
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
    <!-- Login pop up ends -->
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