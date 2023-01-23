<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Email|Pro</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    
</head>

<body>
  
   
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="index.php">
                        <b class="logo-icon">
                         
                        </b>
                        <span class="logo-text">
                            <!-- <h2>Email Server Pro</h2> -->
                            <img src="../assets/m.logo1.png" alt="homepage" class="dark-logo" style="width:200px; height:100px;"/>

                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                
                    <ul class="navbar-nav me-auto mt-md-0 ">
                       
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                                <?php
                                    include '../backend/config.php';
                                    $myusername = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM `signup` WHERE `Email`='$myusername'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                          $row = $result->fetch_assoc();
                                   
                                    ?>
                                    
                            <a class="nav-link waves-effect waves-dark" href="adduser.php?id=<?= $row["registration_id"]?>">
                             
                                <img src="../backend/image/<?= $row["profile_name"]?>" alt="user" class="profile-pic me-2">
                               
                                 <?php 
                                        echo $row["Full_Name"];
                                 ?>
                            </a>
                            <?php
                                    }
                                ?>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
       