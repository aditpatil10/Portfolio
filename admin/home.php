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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>adi10's Portfolio</title>
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
        <li><a href="#">Homepage</a></li>
        <li><a href="aboutme.php">About me</a></li>
        <li><a href="skills.php">Skills</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="exp.php">Experience</a></li>
        <li><a href="edu.php">Education</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="Hireme.php">Hire me</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li>
        <a
          href="home.php?logout='1'"
            >Log out</a
          >
        </li>
        
      </ul>
    </nav>

    <div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
    <?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
    <img
      class="center"
      src="https://avatars.githubusercontent.com/aditpatil10"
      style="border-radius: 50%; margin-top: 4%"
      alt="Avatar"
    />
    <div style="text-align: center; margin: auto">
      <header>
        <h2 style="font-size: 50px; color: white">
          Adit Patil
        </h2>
      </header>
      <p style="font-size: 20px; color: white">
        Web Developer, Android Developer, Writer
      </p>
      <button class="button">Hire me</button>
      <button class="button">Download CV</button>
    </div>
    <div style="text-align: center; padding-top: 4%; margin-bottom: 25% ">
      <a
        href="https://www.facebook.com/adi10.patil"
        class="fa fa-facebook"
        style="height: 50px; width:50px"
      ></a>
      <a
        href="https://twitter.com/aditpatil10"
        class="fa fa-twitter"
        style="height: 50px; width:50px"
      ></a>
      <a
        href="https://www.instagram.com/aditpatil10/"
        class="fa fa-instagram "
        style="height: 50px; width:50px"
      ></a>
      <a
        href="https://www.linkedin.com/in/adit-patil-a21a02a9"
        class="fa fa-linkedin"
        style="height: 50px; width:50px"
      ></a>
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
      <form
        class="modal-content animate"
        action="/action_page.php"
        method="get"
        onsubmit="return singup()"
      >
        <div style="padding: 2%">
          <h1>Check in</h1>
        </div>

        <div class="container">
          <label for="name"><b>Name</b></label>
          <input
            type="text"
            id="name"
            class="fname"
            name="firstname"
            placeholder="Enter name"
            required
          />
          <label for="lname"><b>Last name</b></label>
          <input
            type="text"
            placeholder="Enter Last name"
            id="lname"
            class="lname"
            name="lastname"
            required
          />
          <label for="email" id="email-label"><b>Email</b></label>
          <input id="email" type="email" class="email" name="email" />
          <p>
            <label for="username"><b>Username</b></label>
            <input id="username" name="username" type="text" required />
          </p>

          <label for="password" id="password-label"><b>Password</b></label>
          <input
            id="password"
            class="pwd"
            name="password"
            type="password"
            required
          />

          <label id="password-label" for="password"
            ><b>Repeat Password</b></label
          >
          <input
            id="password-confirm"
            class="conpwd"
            name="password"
            type="password"
            required
          />

          <p class="emsgb valdi"></p>
          <button id="submit" type="submit">Save</button>
          <input type="reset" name="reset" value="Reset" />
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
