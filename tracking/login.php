<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trans Global Express -> Tracking</title>
        <base href="">
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/_login/css/form-elements.css">
        <link rel="stylesheet" href="assets/_login/css/style.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Favicon and touch icons -->
        <!--<link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/ico/favicon.ico" type="image/x-icon">-->
    </head>
    <body>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <a href="../index.html"><img src="../images/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-6">
                            <div class="form-box">
                                <?php if (isset($_GET['msg'])): ?>
                                    <div align="center" class="alert alert-info" role="alert"><?php echo $_GET['msg']; ?></div>
                                <?php endif; ?>
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h1>Login</h1>
                                        <p>Enter username and password below to log in:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="login_action.php" method="post" class="login-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" placeholder="Username..." class="form-control" id="form-username" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" placeholder="Password..." class="form-control" id="form-password" name="password" required>
                                        </div>
                                        <button type="submit" class="btn submit-button" name="submit">Login</button>
                                    </form>
                                    <br>
                                    <p class="clearfix">
                                        <a class="btn btn-primary disabled pull-left"">Register</a>
                                        <a class="btn btn-primary disabled pull-right">Recover Password</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="footer-border"></div>
                        <p style="color: black;">© 2017 - All Rights Reserved. Designed by Inyavic Sage.</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>