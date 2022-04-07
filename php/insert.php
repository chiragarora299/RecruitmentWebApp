<!DOCTYPE html>
<html lang="en">
    


    <head>
    
    <title>CRM | VIEW PORT</title>
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="delete.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7894fc58d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">

    </head>
    
    
    
    
    
<body>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">CRM.<span>RECRUITMENT SYSTEM</span></a></div>
            <ul class="menu">
                <li><a href="login.php" class="menu-btn">LOG OUT<i class="fas fa-power-off"></i></a></li>
            </ul>
        </div> 
    </nav>

    <div class="box">
        <h2>WELCOME TO <br> ADMIN PORTAL</h2>
            <div class="boxes"> 
                <li><a href="user1.php" class="menu-btn">HOME</a></li>
                <li><a href="about.php" class="menu-btn">ABOUT</a></li>
                <li><a href="contact.php" class="menu-btn">CONTACT</a></li>
                <li><a href="data.php" class="menu-btn">VIEW APPLICANTS</a></li>
                <li><a href="index.php" class="menu-btn">ADD APPLICANTS</a></li>
              

               
            </div>
	</div>

    <div class="vl"></div>
   
    <div class="mybox">
        <div class="mybox2">
            <div class="insertphp">
                <?php
                    // servername => localhost
                    // username => root
                    // password => empty
                    // database name => staff
                    $conn = mysqli_connect("localhost", "root", "", "demo");
                    
                    // Check connection
                    if($conn === false){
                        die("ERROR: Could not connect. " 
                            . mysqli_connect_error());
                    }
                    
                    // Taking all 5 values from the form data(input)
                    $REG_ID =  $_REQUEST['REG_ID'];
                    $NAME = $_REQUEST['NAME'];
                    $CONTACT =  $_REQUEST['CONTACT'];
                    $EMAIL = $_REQUEST['EMAIL'];
                    $GENDER = $_REQUEST['GENDER'];
                    $JOB_ROLE = $_REQUEST['JOB_ROLE'];
                    $COLLAGE_NAME = $_REQUEST['COLLAGE_NAME'];
                    
                    // Performing insert query execution
                    // here our table name is college
                    $sql = "INSERT INTO candidate  VALUES ('$REG_ID', 
                        '$NAME','$CONTACT','$EMAIL','$GENDER','$JOB_ROLE','$COLLAGE_NAME')";
                    
                    if(mysqli_query($conn, $sql)){
                        echo "<h3>Data is stored successfully."; 
                            // . " Please browse your localhost php my admin" 
                            // . " to view the updated data</h3>"; 
            
                        // echo nl2br("\n$REG_ID\n $NAME\n "
                        //     . "$CONTACT\n $EMAIL\n $GENDER\n $JOB_ROLE\n $COLLAGE_NAME");
                    } else{
                        echo "ERROR: Hush! Sorry $sql. " 
                            . mysqli_error($conn);
                    }
                    
                    // Close connection
                    mysqli_close($conn);
                ?>
            </div>

            <div class="insertbtn">
                   <button class="insertbtn"><a href="data.php">View Data</a></button>
            </div>
        </div>
        <div class="img1">
                <img src="img1.png">
        </div>
    </div>

    
</body>
</html>


