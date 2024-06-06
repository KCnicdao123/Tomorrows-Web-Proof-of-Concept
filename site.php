<?php
    //Connecting php files
    include_once 'includes/dbh.inc.php';
    include_once 'includes/geoplugin.class.php';
    $query = "select * from users2";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/site_style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<!--Navigation Menu Bar-->
        <div class="navbar">
            <img src="goneup logo.png" class="logo"> <!--Goneup Logo-->
            <a href="login.php">Logout</a> <!--Log out-->
            <a href="form.php">Form</a> <!--To Form-->
            <a href="site.php">Home</a> <!--To Home Page-->
        </div>

<!--Table showcasing data from the database-->
<div class="content">
    <table class="table">
        <tr>
            <td>Name</td>
            <td>Service</td>
            <td>Portfolio Link</td>
            <td>City</td>
        </tr>
        <tr>
            <?php
            while($row = mysqli_fetch_assoc($result)) //Fetching the results of the database and show to table
            {
            ?>
            <td>
                <?php echo $row['full_name']; ?> <!--Name Data-->
            </td>
            <td>
                <?php echo $row['services']; ?> <!--Service Data-->
            </td>
            <td>
                <a href="<?php echo $row['portfolio_link']; ?>"><?php echo $row['portfolio_link']; ?></a> <!--Clickable Portfolio Link-->
            </td> 
            <td>
                <?php echo $ip_data->geoplugin_city; ?> <!--Geolocation using geoPlugin API-->
            </td>
        </tr>
            <?php
            }
            ?>
    </table>
</div>
</body>
</html>