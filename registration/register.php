<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Registration Portal</title>
    <link rel="icon" href="../img/nes.png" type="image/gif" sizes="16x16">
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <?php include('errors.php'); ?><br>
                    <form method="POST" action="register.php">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="username">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="College" name="college">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Address" name="address">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Campus Ambassador (in any)" name="ca">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option selected="selected">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="Password" placeholder="Password" name="password_1">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="Password" placeholder="Confirm Password" name="password_2">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="reg_user">Submit</button>
                        </div>
                    </form>
                    <div class="p-t-10" style="margin-bottom: 12px;">
                        <button class="btn btn--pill btn--green" onclick="window.location.href = './login.php';">Sign in</button>
                    </div>
                    <div style="margin-top: 5px;">
                     <button class="btn btn--pill btn--green" onclick="window.location.href = '../';">Explore</button>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Jquery JS-->
 <script src="vendor/jquery/jquery.min.js"></script>
 <!-- Vendor JS-->
 <script src="vendor/select2/select2.min.js"></script>
 <script src="vendor/datepicker/moment.min.js"></script>
 <script src="vendor/datepicker/daterangepicker.js"></script>

 <!-- Main JS-->
 <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->