<html>
    <head>
        <meta charset="UTF-8">
        
       <?php include "../bootstrap.php"; ?>
        <title></title>
    </head>
 
    <body>
        <header>
            <?php include "../Templates/Header.php"; ?> 
        </header>


<?php
/**
 * o	Gegevens worden hier opgeslagen, moet bevestiging tonen of een redirect naar bv index.php
 * 
 */
    session_start();
    
    $_SESSION['messages'][] = $_POST;
    
    var_dump($_SESSION);
    //header('location: index.php');
    exit;