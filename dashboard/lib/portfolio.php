<?php

function addNewPortfolio($img , $desc, $user_id){
    // Database Connection
    $dbConnect = mysqli_connect("localhost", "root", "", "resume");
    // insert data
    $insertQuery = "INSERT INTO `portfolio`(`img`,`description`,`user_id`) VALUES('$img', '$desc', $user_id)";
    mysqli_query($dbConnect, $insertQuery);
    // Affected Rows
    $res = mysqli_affected_rows($dbConnect);
    if($res == 1){
        return true;
    }else{
        return false;
    }
    }

function getPortfolios(){
    $dbConnect = mysqli_connect("localhost", "root", "", "resume");
    // Select data
    $selectQuery = "SELECT * FROM `user_portfolio`";
     $q = mysqli_query($dbConnect, $selectQuery);
     $pro = [];
    // Fetch data From Database
    while ($result = mysqli_fetch_assoc($q)) {
        $pro[] = $result;
    }
    return $pro;
}


function deletePortfolio($pro_id){
    // Database Connection
    $dbConnect = mysqli_connect("localhost", "root", "", "resume");
    // insert data
    $deleteQuery = "DELETE FROM  `portfolio` WHERE id = $pro_id";
    mysqli_query($dbConnect, $deleteQuery);
    // Affected Rows
    $res = mysqli_affected_rows($dbConnect);
    if($res == 1){
        return true;
    }else{
        return false;
    }
    }

    function getPortfolioById($pro_id){
        $dbConnect = mysqli_connect("localhost", "root", "", "resume");
        // Select data
        $selectQuery = "SELECT * FROM `user_portfolio` WHERE `id` = $pro_id";
         $q = mysqli_query($dbConnect, $selectQuery);
        // Fetch data From Database
        $result = mysqli_fetch_assoc($q);
        return $result;
    }
    
    function updatePortfolio($id, $desc, $img){
        // Database Connection
        $dbConnect = mysqli_connect("localhost", "root", "", "resume");
        // insert data
        $updateQuery = "UPDATE `portfolio` SET `description` = '$desc'";
        if(!empty($img)){
            $updateQuery .= ",`img` = '$img'";
        }
        $updateQuery .= "WHERE `id` = $id";
        mysqli_query($dbConnect, $updateQuery);
        // Affected Rows
        $res = mysqli_affected_rows($dbConnect);
        if($res == 1){
            return true;
        }else{
            return false;
        }
        }