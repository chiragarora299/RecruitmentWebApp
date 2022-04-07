<!DOCTYPE html>
<html>
<head>
	<title>CRM | LOGIN</title>
	<link rel="stylesheet" a href="login.css">
  <link rel="stylesheet" a href="user.css">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
</head>
<body>



<nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">CRM.<span>RECURITMENT SYSTEM</span></a></div>
        </div> 
    </nav>

    <div class="imgbox">
    <img src="loginimg.png"  />
    </div>

    <div class="container">
		  <form action="user.php" method="post">
            <div class="containers"> 
              <h1>ADMIN PORTAL</h1>
              <input type="User" placeholder="Enter Username" name="uname" required>
              <input type="pass" placeholder="Enter Password" name="psw" required>        
              <button type="submit">Login</button>
            </div>
      </form>
	</div>
</body>
</html>
