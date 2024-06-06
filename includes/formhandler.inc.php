<?php

//Checks if user submitted the form using a the post method
if($_SERVER ["REQUEST_METHOD"] == "POST"){
    //Variables for the form contents
    $full_name = $_POST["full_name"];
    $services = $_POST["services"];
    $portfolio_link = $_POST["portfolio_link"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users2 (full_name, services, portfolio_link) VALUES (:full_name, :services, :portfolio_link);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":full_name", $full_name);
        $stmt->bindParam(":services", $services);
        $stmt->bindParam(":portfolio_link", $portfolio_link);

        //submits user data in an array
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../site.php");

        die();

    } catch (PDOException $e) {
        die("Query failed:" . $e->getMessage());
    }


}else{
    header("Location: ../site.php");
}
