<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stadium Ticket Booking System</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar" id="navbar">
    <div class="navbar1">
        <div class="nav-center">
            <div class="nav-header">
                <div class="logo">ONLINE <span class="first-letter">T</span>ICKETS</div>
                <button class="bars" id="nav-btn">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="nav-menu">
                <ul>
                    <li class="active">
                        <a href="index.php#home">Home</a>
                    </li>
                    <li>
                        <a href="index.php#about">About</a>
                    </li>
                    <li>
                        <a href="index.php#contact">Contact Us</a>
                    </li>
                    <li>
                        <a href="admin/index.php">Admin Login</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <aside class="sidebar" id="sidebar">
        <div>
            <button id="close-btn" class="close-btn">
                <i class="fa fa-times"></i>
            </button>
            <ul class="sidebar-links">
                <li>
                    <a href="index.php#home">Home</a>
                </li>
                <li>
                    <a href="index.php#about">About</a>
                </li>
                <li>
                    <a href="index.php#contact">Contact Us</a>
                </li>
                <li>
                    <a href="admin/index.php">Admin Login</a>
                </li>
            </ul>
            <p class="social-icons">
                <a href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
                <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in"><i class="fa fa-linkedin"></i></a>
            </p>
        </div>
    </aside>

    <section id="home">
      <div class="header">
        <div class="header-content">
            <div class="header-title">
                <h1>Welcome to <span style="color: chartreuse;"><b>ATHT</b></span> Online Ticketing</h1>
            </div>
          <a href="reserved.php"><button class="btn">RESERVE NOW</button></a>
        </div>
      </div>
    </section>

    <section id="about">
        <div class="aboutus">
            <h1>About Us</h1>
            <p><b style="color:red;">ATHT Online Ticketing</b> is a Stadium ticket booking company. We build your trust on us and gives fast service.</p>
            <p>It is affiliated to the Board of Control for Cricket in India and following Cricket Stadiums:</p>
            <ul>
                <li><b><i class="fa fa-angle-double-right"></i></b> Wankhede Stadium, Mumbai</li>
                <li><b><i class="fa fa-angle-double-right"></i></b> MCA cricket Stadium, Pune</li>
                <li><b><i class="fa fa-angle-double-right"></i></b> Eden Gardens, Kolkata</li>
                <li><b><i class="fa fa-angle-double-right"></i></b> Arun Jaitley Stadium, Delhi</li>
            </ul>
        </div>
    </section>

    <section id="contact">
        <div class="contactus">
            <h1>Contact Us</h1>
            <h2><b style="color:red;">ATHT</b> Ticket Booking</h2>
            <p><b>Contact:</b> 020 123 45678</p>
            <p><b>Email: </b>atht@gmail.com</p>
            <p class="social-links">
                <a href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
                <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/tanmay_v_thole"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in"><i class="fa fa-linkedin"></i></a>
            </p>
        </div>

    </section>

    <!--Footer-->
    <footer class="footer" id="footer">
      <div class="footer-text">
        <div class="cr-section">&copy; 2020 by <b>ATHT</b></div>
        <div class="developer-section">
          <b>Designed & Developed by:</b>
          <br>
          1. Ashish Kumar(88) <br>
          2. Hemanshu Patil(92) <br>
          3. Tejas Bhavsar(94) <br>
          4. Tanmay Thole(97) <br>
        </div>
      </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>