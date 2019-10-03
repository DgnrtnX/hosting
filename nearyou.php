<!DOCTYPE html>

<html>
  <head>
    <title>DISCOVER NEAR YOU</title>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
  </head>
  <body>
    <!-- header starts here -->
    <header class="header">

<a class="user-logo-nav" href="index.php">IN</a>

<!-- user navbar  -->
<nav class="user-nav">

    <!--content/usrnav-->
    <ul class="user-nav__menu">

        <li> <a href="gallery.php">gallery</a> </li>
        <li> <a href="about.php">about</a> </li>
        <li class="last"><a href="team.php">team</a></li>
        <li>
        <?php
            if(isset($_SESSION['userId'])){
                echo '<a href="includes/login.out.php" class="sign-btn" style=" color: #da006d;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Sign Out
            </a>';
            }
            else{
                echo '<a href="login.php" class="sign-btn" style=" color: #da006d;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Sign In
            </a>';
            }
        ?>
        </li>
     
    </ul>
  
</nav>
<!-- user nabar ends here -->



</header>
    <!-- header ends here -->

    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Main -->
      <div id="main">
        <!-- One -->
        <section id="one" class="tiles">
          <article>
            <span class="image">
              <img href="booking.php" src="img/images/chen.jpg" alt="" />
            </span>
            <header class="major">
              <!-- <a href="booking.php"><h3>chennai</h3></a>	 -->
              <h3><a href="booking.php" class="link primary">Chennai</a></h3>
              <p class="desccolor">
              A tradition of excellence
              </p>
            </header>
          </article>

          <article>
            <span class="image">
              <img src="img/images/manali.jpg" alt="" />
            </span>
            <header class="major">
              <!-- <h3>Kolkata</a></h3> -->
              <h3><a href="booking.php" class="link primary">Manali</a></h3>
              <p class="desccolor">
              Awaken To A Different World.
              </p>
            </header>
          </article>


          <article>
            <span class="image">
              <img src="img/images/Mumbai1.jpg" alt="" />
            </span>
            <header class="major">
              <!-- <h3>Mumbai</a></h3> -->
              <h3><a href="booking.php" class="link primary">Mumbai</a></h3>
              <p class="desccolor">
              A Destination for the New Millennium
              </p>
            </header>
          </article>

          

          <article>
            <span class="image">
              <img src="img/images/del.jpg" alt="" />
            </span>          
            <header class="major">
              <!-- <h3>Delhi</h3> -->
              <h3><a href="booking.php" class="link primary">Delhi</a></h3>
              <p class="desccolor">
                Ultimate in Diversity
              </p>
            </header>
          </article>

          <article>
            <span class="image">
              <img src="img/images/pune.jpg" alt="" />
            </span>
            <header class="major">
              <!-- <h3>Pune</a></h3> -->
              <h3><a href="booking.php" class="link primary">Pune</a></h3>
              <p class="desccolor">
              Endless Discoveries
              </p>
            </header>
          </article>

          <article>
            <span class="image">
              <img src="img/images/goa.jpg" alt="" />
            </span>
            <header class="major">
              <!-- <h3>Goa</h3> -->
              <h3><a href="booking.php" class="link primary">Goa</a></h3>
              <p class="desccolor">
              A Perfect Holiday Destination
              </p>
            </header>
          </article>

        </section>
      </div>

      <footer>
        <div class="footer">
          <p>indus hotels and resorts &trade; <br />copyright reserved &reg;</p>
        </div>
      </footer>
    </div>

    <!-- Scripts -->
    <script src="js/1.js"></script>
    <script src="js/2.js"></script>
    <script src="js/3.js"></script>
    <script src="js/main1.js"></script>
  </body>
</html>
