<?php
    require_once "db_config.php";
    
    if(isset($_POST["webisteSett"])){
        extract($_POST);
        $query = "INSERT INTO options (website_name) VALUES('".$website_name."')";
        $result = mysqli_query($db, $query);
        if($result){
            header('location:websiteManagement.php?success=Record added successfully');
        }else{
            header('location:websiteManagement.php?error=Invalid User please try again');
        }
    }
?>