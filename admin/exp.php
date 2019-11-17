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


$expSQL = "SELECT * FROM `exp` WHERE expid= '1'";
$expSQL2 = "SELECT * FROM `exp` WHERE expid= '2'";
$expresult = mysqli_query($db, $expSQL) or die("Bad query : $expSQL");
$expresult2 = mysqli_query($db, $expSQL2) or die("Bad query : $expSQL2");
$row1 = mysqli_fetch_array($expresult);
$row2 = mysqli_fetch_array($expresult2);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Work Experience</title>
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
    <script type="text/javascript">
    $(document).ready(function(argument) {
				$('#save').click(function(){
					// Get edit field value
					$ediexpdate1 = $('#ediexpdate1').html();
          $ediexpdate2 = $('#ediexpdate2').html();
          $ediexpfirm1 = $('#ediexpfirm1').html();
          $ediexpfirm2 = $('#ediexpfirm2').html();
          $ediexptitle1 = $('#ediexptitle1').html();
          $ediexptitle2 = $('#ediexptitle2').html();
          $ediexpdes1 = $('#ediexpdes1').html();
          $ediexpdes2 = $('#ediexpdes2').html();
					$.ajax({
						url: 'expedit.php',
						type: 'post',
					data: {data1: $ediexpdate1, data2: $ediexpfirm1, data3: $ediexptitle1, data4: $ediexpdes1, data5: $ediexpdate2, data6: $ediexpfirm2, data7: $ediexptitle2, data8: $ediexpdes2},
						datatype: 'html',
						success: function(rsp){
								alert(rsp);
							}
					});
				});
			});
    </script>
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
        <li><a href="#">Experience</a></li>
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

    <header>
      <h1 style="text-align: center; color: #f1f1f1">Work Experience</h1>
    </header>

    <div class="container-exp">
      <div class="row-exp">
        <div class="leftside-e lp" style="color: #f1f1f1">
          <p id="ediexpdate1" contenteditable="true"><?php echo $row1['date'] ?></p>
          <h2 id="ediexpfirm1" contenteditable="true"><?php echo $row1['firm'] ?></h2>
        </div>
        <div class="rightside-e" style="padding-left: 20px; padding-top: 10px; padding-right: 6px">
          <h2 id="ediexptitle1" contenteditable="true"><?php echo $row1['title'] ?></h3>
          <p id="ediexpdes1" contenteditable="true"><?php echo $row1['description'] ?>
            </p>
        </div>
      </div>
    </div>

    <div class="container-exp">
            <div class="row-exp">
              <div class="leftside-e" style="padding:20px; color: #f1f1f1">
              <p id="ediexpdate2" contenteditable="true"><?php echo $row2['date'] ?></p>
              <h2 id="ediexpfirm2" contenteditable="true"><?php echo $row2['firm'] ?></h2>
              </div>
              <div class="rightside-e" style="padding-left: 20px; padding-top: 10px; padding-right: 6px">
              <h2 id="ediexptitle2" contenteditable="true"><?php echo $row2['title'] ?></h3>
              <p id="ediexpdes2" contenteditable="true"><?php echo $row2['description'] ?>
                  </p>
              </div>
            </div>
            <button id="save">Click to Save</button>
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
