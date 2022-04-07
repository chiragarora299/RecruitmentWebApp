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
                        include("connect.php");
                        $REG_ID=$_GET['rn'];
                        $query ="delete from candidate where REG_ID ='$REG_ID'";
                        $data=mysqli_query($conn,$query);
                        if($data){
                            echo "The data is Sucessfully Deleted";
                        }else {
                            echo "failed to delete";
                        }
                    ?>
                </div>
            
                <div class="delete">
                    <button class="deletebtn"><a href="data.php">View Data</a></button>
                </div>
        </div>
        <div class="img1">
            <img src="img1.png">
        </div>
    </div>


</body>
</html>