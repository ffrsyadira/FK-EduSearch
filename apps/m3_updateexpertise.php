<?php
session_start();
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
                <button type="button" class="btn fw-bolder btnusername" id="">USERNAME</button>
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
                        <button class="btn fw-bolder btnusername" id="experthomebutton">HOME</button>
                    </div>
                </div>
                <br><br>
                <div class="d-flex justify-content-center">
                    <div class="list-group" style="width: 14rem;">
                        <br>
                        <button class="btn fw-bolder mb-2 btnusername" id="" name="updateexpertise">UPDATE EXPERTISE</button>
                        <button class="btn fw-bolder mb-2 btnusername" id="" name="managepost">MANAGE POST</button>
                        <button class="btn fw-bolder mb-2 btnusername" id="" name="myrating">MY RATING</button>
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
                <h5 class="text-uppercase fw-bolder" style="margin-top:5px;">UPDATE EXPERTISE</h5>
            </div>
            <div>
                <div style="margin: 30px 0px 0px 30px;">
                    <div>
                        <form action="m3_updateexpertise.php" method="post">
                            <h5 class="text-uppercase fw-bolder" style="padding-bottom: 20px;">PROFILE</h5>
                            <div class="d-flex flex-row">
                                <div style="width: 600px">
                                    <div>
                                        <label class="h6">Expert ID :</label>&nbsp;&nbsp;&nbsp;
                                        <p class="h6" style="margin: 0; display: inline;">Expert ID</p>
                                    </div>
                                    <div style="padding-top: 15px;">
                                        <label>Expert Name :</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Expert Name" required>
                                    </div>
                                    <div style="padding-top: 15px;">
                                        <label>Expert Age :</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Expert Age" required>
                                    </div>
                                    <div style="padding-top: 15px;">
                                        <label>Expert Email :</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Expert Email" required>
                                    </div>
                                    <div style="padding-top: 15px;">
                                        <label>Expert Office Number :</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Expert Office Number" required>
                                    </div>
                                </div>
                                <div style="width: 600px">
                                    <div>
                                        <label>Expert Address :</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Expert Address" required>
                                    </div>
                                    <div style="padding-top: 15px;">
                                        <label>Expert Phone Number :</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Expert Phone Number" required>
                                    </div>
                                    <div style="padding-top: 15px;">
                                        <label>Expert Password :</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Expert Password" required>
                                    </div>
                                    <div style="padding-top: 15px;">
                                        <label>Expert CV :</label>&nbsp;&nbsp;&nbsp;
                                        <input class="form-control form-control-sm" id="inputboxstyle" type="file"placeholder="Enter Expert CV" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" name="submitprofileupdate">UPDATE PROFILE</button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="reset" class="btn btn-danger" name="reset">RESET ALL</button>
                            </div>
                            <br>
                            <div>
                                <h5 class="text-uppercase fw-bolder" style="padding-bottom: 15px;">CREDENTIALS</h5>
                                <h6 class="text-uppercase fw-bolder">RESEARCH AREA</h6>
                                <h6 class="text-uppercase fw-bolder">CURRENT RESEARCH AREA :</h6>
                                <label>ENTER RESEARCH AREA:</label><br>
                                <select class="form-select" aria-label="Default select example" id="inputboxstyle" required>
                                    <option>CHOOSE RESEARCH AREA</option>
                                    <option value="ARTIFICIAL INTELLIGENCE">ARTIFICIAL INTELLIGENCE</option>
                                    <option value="BIG DATA">BIG DATA</option>
                                    <option value="CYBERSECURITY">CYBERSECURITY</option>
                                    <option value="GRAPHIC DESIGNING">GRAPHIC DESIGNING</option>
                                    <option value="SOFTWARE MANAGEMENT">SOFTWARE MANAGEMENT</option>
                                    <option value="BLOCKCHAIN">BLOCKCHAIN</option>
                                </select>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" class="form-control" id="inputboxstyle" placeholder="For Expertise That Not In The List">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-primary" name="submitexpertiseupdate">UPDATE EXPERTISE</button>
                                &nbsp;&nbsp;
                                <button type="reset" class="btn btn-danger">RESET</button>
                            </div>
                            <br>
                            <div>
                                <h6 class="text-uppercase fw-bolder">PUBLICATION</h6>
                                <table style="width:60%;" class="table table-bordered" align="center">
                                <thead>
                                    <tr style="background-color: #D3D3D3;">
                                        <th scope="col"style="width: 50px;">No</th>
                                        <th scope="col"style="width: 100px;">Date</th>
                                        <th scope="col"style="width: 300px;">Publication</th>
                                        <th scope="col"style="width: 40px;">DELETE</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Mark</td>
                                        <td>Mark</td>
                                        <td class="d-flex justify-content-around">
                                            <button class="btn btn-transparent">
                                                <img src="assets/img/dustbin.png" alt="view" class="imgintable">
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                                <div style="padding-top: 10px;">
                                    <label>Publication Name :</label>&nbsp;&nbsp;&nbsp;
                                    <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Publication Name" required>
                                </div>
                                <div style="padding-top: 15px;">
                                    <label>Publication Date :</label>&nbsp;&nbsp;&nbsp;
                                    <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Publication Date" required>
                                    <em>dd-mm-yyyy</em>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary" name="submitpublicationeupdate">UPDATE PUBLICATION</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="reset" class="btn btn-secondary">VISUALIZE PUBLICATION</button>
                                </div>
                            </div>
                            <br>
                            <div>
                                <h5 class="text-uppercase fw-bolder">SOCIAL MEDIA</h5>
                                <table style="width:50%;" class="table table-bordered" align="center">
                                <thead>
                                    <tr style="background-color: #D3D3D3;">
                                        <th scope="col"style="width: 50px;">No</th>
                                        <th scope="col"style="width: 100px;">Username</th>
                                        <th scope="col"style="width: 100px;">Type</th>
                                        <th scope="col"style="width: 40px;">DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Mark</td>
                                        <td>Mark</td>
                                        <td class="d-flex justify-content-around">
                                            <button class="btn btn-transparent">
                                                <img src="assets/img/dustbin.png" alt="view" class="imgintable">
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                                <br>
                                <h6>ADD SOCIAL MEDIA ACCOUNT</h6>
                                <div style="padding-top: 10px;">
                                    <label>Username :</label>&nbsp;&nbsp;&nbsp;
                                    <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Username" required>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Social Media Type :</label>&nbsp;&nbsp;&nbsp;
                                    <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Enter Social Media Type" required>&nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-primary" name="submitsocmedupdate">UPDATE SOCIAL MEDIA</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="assets/js/javascript.js" defer></script>
    <script src="assets/js/module3js.js" defer></script>

    </body>
</html>