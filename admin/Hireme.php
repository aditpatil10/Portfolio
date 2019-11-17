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

$hireSQL = "SELECT * FROM `hireme` WHERE hireid= '1'";
$hireSQL2 = "SELECT * FROM `hireme` WHERE hireid= '2'";
$hireSQL3 = "SELECT * FROM `hireme` WHERE hireid= '3'";
$hireresult = mysqli_query($db, $hireSQL) or die("Bad query : $hireSQL");
$hireresult2 = mysqli_query($db, $hireSQL2) or die("Bad query : $hireSQL2");
$hireresult3 = mysqli_query($db, $hireSQL3) or die("Bad query : $hireSQL3");
$row1 = mysqli_fetch_array($hireresult);
$row2 = mysqli_fetch_array($hireresult2);
$row3 = mysqli_fetch_array($hireresult3);

$serviceSQL = "SELECT * FROM `services` WHERE serid= '1'";
$serviceSQL2 = "SELECT * FROM `services` WHERE serid= '2'";
$serviceSQL3 = "SELECT * FROM `services` WHERE serid= '3'";
$serviceSQL4 = "SELECT * FROM `services` WHERE serid= '4'";
$serviceSQL5 = "SELECT * FROM `services` WHERE serid= '5'";
$serviceSQL6 = "SELECT * FROM `services` WHERE serid= '6'";
$serviceSQL7 = "SELECT * FROM `services` WHERE serid= '7'";
$serviceSQL8 = "SELECT * FROM `services` WHERE serid= '8'";
$serviceSQL9 = "SELECT * FROM `services` WHERE serid= '9'";
$serresult = mysqli_query($db, $serviceSQL) or die("Bad query : $serviceSQL");
$serresult2 = mysqli_query($db, $serviceSQL2) or die("Bad query : $serviceSQL2");
$serresult3 = mysqli_query($db, $serviceSQL3) or die("Bad query : $serviceSQL3");
$serresult4 = mysqli_query($db, $serviceSQL4) or die("Bad query : $serviceSQL4");
$serresult5 = mysqli_query($db, $serviceSQL5) or die("Bad query : $serviceSQL5");
$serresult6 = mysqli_query($db, $serviceSQL6) or die("Bad query : $serviceSQL6");
$serresult7 = mysqli_query($db, $serviceSQL7) or die("Bad query : $serviceSQL7");
$serresult8 = mysqli_query($db, $serviceSQL8) or die("Bad query : $serviceSQL8");
$serresult9 = mysqli_query($db, $serviceSQL9) or die("Bad query : $serviceSQL9");
$srow1 = mysqli_fetch_array($serresult);
$srow2 = mysqli_fetch_array($serresult2);
$srow3 = mysqli_fetch_array($serresult3);
$srow4 = mysqli_fetch_array($serresult4);
$srow5 = mysqli_fetch_array($serresult5);
$srow6 = mysqli_fetch_array($serresult6);
$srow7 = mysqli_fetch_array($serresult7);
$srow8 = mysqli_fetch_array($serresult8);
$srow9 = mysqli_fetch_array($serresult9);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Education</title>
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
					$ser1 = $('#ser1').html();
          $ser2 = $('#ser2').html();
          $ser3 = $('#ser3').html();
          $ser4 = $('#ser4').html();
          $ser5 = $('#ser5').html();
          $ser6 = $('#ser6').html();
          $ser7 = $('#ser7').html();
          $ser8 = $('#ser8').html();
          $ser9 = $('#ser9').html();
          $cost1 = $('#cost1').html();
          $cost2 = $('#cost2').html();
          $cost3 = $('#cost3').html();
          $descrip1 = $('#descrip1').html();
          $descrip2 = $('#descrip2').html();
          $descrip3 = $('#descrip3').html();
					$.ajax({
						url: 'hiremeedit.php',
						type: 'post',
					  data: {data1: $ser1, data2: $ser2, data3: $ser3, data4: $ser4, data5: $ser5, data6: $ser6, data7: $ser7, data8: $ser8, data9: $ser9, data10: $cost1, data11: $descrip1, data12: $cost2, data13: $descrip2, data14: $cost3, data15: $descrip3},
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
        <li><a href="exp.php">Experience</a></li>
        <li><a href="edu.php">Education</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="#">Hire me</a></li>
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
      <h1 style="text-align: center; color: #f1f1f1">Hire me</h1>
    </header>
    <div class="container-h">
    <main class="cards" style="justify-content: center">
            <article class="card">
                <div style="height: 35%; background-color: green">
                    <i class="fa fa-shopping-cart" style="font-size:100px; color:white ; margin: 15px"></i>
                </div>
              <div class="text" style="text-align: center">
                $<h1 id="cost1" contenteditable="true"><?php echo $row1['cost'] ?></h1>
                <p id="descrip1" contenteditable="true"><?php echo $row1['description'] ?></p>
                <ul class="ul-h">
                        <li class="li-h" id="ser1" contenteditable="true"><?php echo $srow1['services'] ?></li>
                        <li class="li-h" id="ser2" contenteditable="true"><?php echo $srow2['services'] ?></li>
                        <li class="li-h" id="ser3" contenteditable="true"><?php echo $srow3['services'] ?></li>
                        <li class="li-h" ><a href="contact.html" style="color: green ;text-decoration: none"> Contact us</a></li>
                      </ul>
              </div>
            </article>
            <article class="card">
                    <div style="height: 35%; background-color: blue">
                            <i class="fa fa-shopping-cart" style="font-size:100px; color:white ; margin: 15px"></i>
                        </div>
                      <div class="text" style="text-align: center">
                      $<h1 id="cost2" contenteditable="true"><?php echo $row2['cost'] ?></h1>
                       <p id="descrip2" contenteditable="true"><?php echo $row2['description'] ?></p>
                        <ul class="ul-h">
                                <li class="li-h" id="ser1" contenteditable="true"><?php echo $srow1['services'] ?></li>
                                <li class="li-h" id="ser3" contenteditable="true"><?php echo $srow3['services'] ?></li>
                                <li class="li-h" id="ser4" contenteditable="true"><?php echo $srow4['services'] ?></li>
                                <li class="li-h" id="ser5" contenteditable="true"><?php echo $srow5['services'] ?></li>
                                <li class="li-h" ><a href="contact.html" style="color: green ;text-decoration: none"> Contact us</a></li>
                              </ul>
                      </div>
            </article>
            <article class="card">
                    <div style="height: 35%; background-color: blueviolet">
                            <i class="fa fa-shopping-cart" style="font-size:100px; color:white ; margin: 15px"></i>
                        </div>
                      <div class="text" style="text-align: center">
                      $<h1 id="cost3" contenteditable="true"><?php echo $row3['cost'] ?></h1>
                      <p id="descrip3" contenteditable="true"><?php echo $row3['description'] ?></p>
                        <ul class="ul-h">
                                <li class="li-h" id="ser6" contenteditable="true"><?php echo $srow6['services'] ?></li>
                                <li class="li-h" id="ser7" contenteditable="true"><?php echo $srow7['services'] ?></li>
                                <li class="li-h" id="ser8" contenteditable="true"><?php echo $srow8['services'] ?></li>
                                <li class="li-h" id="ser9" contenteditable="true"><?php echo $srow9['services'] ?></li>
                                <li class="li-h" ><a href="contact.html" style="color: green ;text-decoration: none"> Contact us</a></li>
                              </ul>
                      </div>
            </article>
            
            </div>
            <button id="save">Click to Save</button>

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
