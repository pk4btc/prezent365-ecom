<?php
session_start();
include("mechanism/dbconn.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <script src="js/bootstrap.min.js">
    </script>
    <title>Prezent365</title>
</head>
<body>
<navbar>
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">
                <img src="./img/logo.png"/>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Strona glowna</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="jakiKubek.php">Kubki</a>
                  </li>
                  <li class="nav-item  align-items-end">
                    <a class="nav-link " href="bransoletki.php">Bransoletki</a>
                  </li>
                  </ul>
                  <div class="row">
                  <!--Taking global var SESSIONS with applied before stored and cheking if already set if it then do if -->
               
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0  align-items-end">
                  <li class="nav-item">
                    
                    <?php 
                    
                    if (isset($_SESSION["userEmail"])){
                       echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0  align-items-end">
                      <li class="nav-item">
                        <a  href="konto.php" class="nav-link ">Moje konto</a>
                        </li>
                        <li class="nav-item">
                        <a  href="mechanism/logout.php" class="nav-link ">Wyloguj</a>
                      </li>';
                    } else{
                      echo "<ul class='navbar-nav me-auto mb-2 mb-lg-0  align-items-end'>
                      <li class='nav-item'>
                        <a  href='login.php' class='nav-link '>Zaloguj ssie</a>
                      </li>";
                    }
               ?>
                  </li>
                  <li class="nav-item">
                    <a href="./basket.php" class="nav-link ">Koszyk</a>
                  </li>
                </ul>
               
              </div>
            </div>
          </nav>
        
</navbar>