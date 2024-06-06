<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/form_style.css" rel="stylesheet" type="text/css">
    <title>Goneup</title>
</head>
<body>
<!--Navigation Menu Bar-->
        <div class="navbar">
            <img src="goneup logo.png" class="logo"> <!--Goneup Logo-->
            <a href="login.php">Logout</a> <!--Log out-->
            <a href="form.php">Form</a> <!--To Form-->
            <a href="site.php">Home</a> <!--To Home Page-->
        </div>
    
<!--Fill Up Form-->
    <div class="content">
    <h3>What Service Do You Provide?</h3>
        <!--Connects the form to the database-->
        <form action="includes/formhandler.inc.php" method="post"> 
            <input type="text" name="full_name" placeholder="Name"> <!--Full Name-->
            <input type="text" name="services" placeholder="Service"> <!--Service-->
            <input type="text" name="portfolio_link" placeholder="Portfolio Link"> <!--Portfolio Link-->
            <div class="center"><button class="button">Send</button></div>
        </form>
    </div>
</body>
</html>