<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}


$aboutSQL = "SELECT * FROM `personal` WHERE pid='1'";
$aboutresult = mysqli_query($db, $aboutSQL) or die("Bad query : $aboutSQL");
$row = mysqli_fetch_array($aboutresult);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact me</title>
    <link rel="stylesheet" href="../css/portfolio.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="../js/portfolio.js" type="text/javascript"></script>
  </head>
  <body class="home">
  <nav>
      <ul>
        <button>🞬</button>
        <li style="padding-right: 12%"><a href="#home">Admin</a></li>
        <li><a href="home.php">Homepage</a></li>
        <li><a href="aboutme.php">About me</a></li>
        <li><a href="skills.php">Skills</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="exp.php">Experience</a></li>
        <li><a href="edu.php">Education</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="Hireme.php">Hire me</a></li>
        <li><a href="#">Contact</a></li>
        <li>
        <a
          href="home.php?logout='1'"
            >Log out</a
          >
        </li>
        
      </ul>
    </nav>

    <div class="container">
      <div style="text-align:center">
        <h2><b>Contact Me</b></h2>
      </div>
      <div class="row">
        <div class="column">
          <form action="/action_page.php">
            <label for="fname">Name</label>
            <input
              type="text"
              id="fname"
              name="firstname"
              placeholder="Your name.."
            />
            <label for="CEmail">Email</label>
            <input
              type="text"
              id="CEmail"
              name="lastname"
              placeholder="Your last name.."
            />
            <label for="subject">Subject</label>
            <textarea
              id="subject"
              name="subject"
              placeholder="Write something.."
              style="height:170px"
            ></textarea>
            <input type="submit" value="Submit" />
          </form>
        </div>
        <div class="column">
          <h3>Address:</h3>
          <p><?php echo $row['address'] ?></p>
          <h3>Phone:</h3>
          <p><?php echo $row['phone'] ?></p>
          <h3>Email:</h3>
          <p><?php echo $row['email'] ?></p>
        </div>
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
