<?php 
    include('functions.php');
    
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: login.php");
    }

    $homeSQL = "SELECT * FROM `home` WHERE homeid='1'";
    $homeresult = mysqli_query($db, $homeSQL) or die("Bad query : $aboutSQL");
    $row = mysqli_fetch_array($homeresult);

    $eduSQL = "SELECT * FROM `edu` WHERE eduid= '1'";
$eduSQL2 = "SELECT * FROM `edu` WHERE eduid= '2'";
$eduSQL3 = "SELECT * FROM `edu` WHERE eduid= '3'";
$eduresult = mysqli_query($db, $eduSQL) or die("Bad query : $eduSQL");
$eduresult2 = mysqli_query($db, $eduSQL2) or die("Bad query : $eduSQL2");
$eduresult3 = mysqli_query($db, $eduSQL3) or die("Bad query : $eduSQL3");
$row1 = mysqli_fetch_array($eduresult);
$row2 = mysqli_fetch_array($eduresult2);
$row3 = mysqli_fetch_array($eduresult3);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Education</title>
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
                    <li style="padding-right: 12%"><a href="#home">User</a></li>
        <li><a href="index.php">Homepage</a></li>
        <li><a href="aboutme.php">About me</a></li>
        <li><a href="skills.php">Skills</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="exp.php">Experience</a></li>
        <li><a href="#">Education</a></li>
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

              <header>
      <h1 style="text-align: center; color: #f1f1f1">Education</h1>
    </header>

    <div class="container-exp">
      <div class="row-exp">
        <div class="leftside-e" style="padding:30px ; color: #f1f1f1">
          <p><?php echo $row1['date'] ?></p>
          <h2><?php echo $row1['edutype'] ?></h2>
        </div>
        <div class="rightside-e" style="padding-left: 20px; padding-top: 10px; padding-right: 6px">
          <h2><?php echo $row1['title'] ?></h3>
          <p><?php echo $row1['institution'] ?></p>
        </div>
      </div>
    </div>

    <div class="container-exp">
            <div class="row-exp">
              <div class="leftside-e" style="padding:30px ; color: #f1f1f1">
                <p><?php echo $row2['date'] ?></p>
                <h2><?php echo $row2['edutype'] ?></h2>
              </div>
              <div class="rightside-e" style="padding-left: 20px; padding-top: 10px; padding-right: 6px">
              <h2><?php echo $row2['title'] ?></h3>
              <p><?php echo $row2['institution'] ?></p>
              </div>
            </div>
          </div>

    <div class="container-exp">
            <div class="row-exp">
              <div class="leftside-e" style="padding:30px; color: #f1f1f1">
                <p><?php echo $row3['date'] ?></p>
                <h2><?php echo $row3['edutype'] ?></h2>
              </div>
              <div class="rightside-e" style="padding-left: 20px; padding-top: 10px; padding-right: 6px">
              <h2><?php echo $row3['title'] ?></h3>
               <p><?php echo $row3['institution'] ?></p>
              </div>
            </div>
          </div>
    <!--Login pop up code starts -->

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

    <!--Login pop up code ends -->

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
