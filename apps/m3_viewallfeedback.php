<?php
include "config/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FK-EduSearch</title>
    <link rel="shortcut icon" href="assets/img/Emblem_of_Universiti_Malaysia_Pahang.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/module3.css">
</head>
<body>

    <!-- navbar -->
    <nav class="d-flex justify-content-between fixed-top" id="navbarset">
        <div style="display: flex; align-items: center;">
            <div id="logofkedu">
                <img src="assets/img/logofkedusearch.png" alt="fkedusearch"  id="logoedu">
                &nbsp;
                <h6 class="text-dark fw-bolder">FK-EduSearch</h6>
            </div>
            <div>
                <button class="navbar-button" id="menu-toggle">&#9776;</button>
            </div>
        </div>
        <div style="display: flex; align-items: center;">
            <div>
                <button type="button" class="btn fw-bolder" id="btnusername">USERNAME</button>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div>
                <button class="navbar-button">
                    <img src="assets/img/logout.png" alt="logout" id="navbarimg">
                </button>
            </div>
            &nbsp;&nbsp;
        </div>
    </nav>

    <div class="contentpart">
        <!-- sidebar -->
        <div class="sidenav" id="sidenavigation">
            <div>
                <div class="d-flex justify-content-center">
                    <div class="list-group" style="width: 14rem;">
                        <br>
                        <button class="btn fw-bolder" id="btnusername">HOME</button>
                    </div>
                </div>
                <br><br>
                <div class="d-flex justify-content-center">
                    <div class="list-group" style="width: 14rem;">
                        <br>
                        <button class="btn fw-bolder mb-2" id="btnusername">UPDATE EXPERTISE</button>
                        <button class="btn fw-bolder mb-2" id="btnusername">MANAGE POST</button>
                        <button class="btn fw-bolder mb-2" id="btnusername">MY RATING</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- content -->
        <div id="maincontentpage">
            <div class="d-flex p-2 mb-1 bg-primary text-white">
                <button class="btn btn-transparent btn-sm">
                    <img src="assets/img/return.png" alt="back" style="width: 30px;">
                </button>
                <h5 class="text-uppercase fw-bolder" style="margin-top:5px;">ALL FEEDBACK</h5>
            </div>
            <div style="padding: 20px 0px 0px 40px">
                <div id="feedbackbox">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, laudantium qui enim ut nobis hic amet doloremque? Iure nulla ab saepe similique, obcaecati reprehenderit fuga esse voluptate. Consectetur, commodi voluptas?</p>
                    <p style="float: right; padding-right: 10px;">FROM USER</p>
                </div>
                <br><br>
                <div id="feedbackbox">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, laudantium qui enim ut nobis hic amet doloremque? Iure nulla ab saepe similique, obcaecati reprehenderit fuga esse voluptate. Consectetur, commodi voluptas?</p>
                    <p style="float: right; padding-right: 10px;">FROM USER</p>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="assets/js/javascript.js" defer></script>
    <script src="assets/js/module3js.js" defer></script>

    </body>
</html>