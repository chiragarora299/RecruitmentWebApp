<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>CRM | ADD APPLICANTS</title>
        <link rel="stylesheet" href="user.css">
        <link rel="stylesheet" href="common.css">
        
        

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


<!-- designing in common.css -->


                <div class="contain">
                    <form action="insert.php" method="post" class="containers">    
                        <div class="contains"> 
                            <h1>Add Candidate Details</h1>
                            <input type="text" name="REG_ID"        id="reg_id"         placeholder="REGISTRATION ID"   required>    
                            <input type="text" name="NAME"          id="fullname"       placeholder="FULL NAME"         required>         
                            <input type="text" name="CONTACT"       id="phno"           placeholder="MOBILE NUMBER"     required>        
                            <input type="text" name="EMAIL"         id="email"          placeholder="EMAIL"             required>                     
                            <input type="text" name="GENDER"        id="gender"         placeholder="GENDER"            required>                    
                            <input type="text" name="JOB_ROLE"      id="job_role"       placeholder="JOB ROLE"          required>               
                            <input type="text" name="COLLAGE_NAME"  id="college_name"   placeholder="COLLEGE NAME"      required>
                            <button type="submit" value="ADD CANDIDATE" >SUBMIT</button> 
                        </div>
                    </form>
                </div>

                <div class="indexing">
                    <img src="Development.png">
                </div>
     


</body>
</html>


