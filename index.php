<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reglee</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div>
    <nav class="navbar navbar-default navigation-clean-button">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Reglee </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="#">About </a></li>
                    <li role="presentation"><a href="#">Contact </a></li>
                </ul>
                <button class="btn btn-info btn-sm navbar-btn navbar-right" type="button">Login </button>
            </div>
        </div>
    </nav>
</div>
<div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>
        <form method="post">
            <h2 class="text-center"><strong>Create</strong> an account.</h2>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label class="control-label">
                        <input type="checkbox">I agree to the license terms.</label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
            </div><a href="#" class="already">You already have an account? Login here.</a></form>
    </div>
</div>
<div class="footer-basic">
    <footer>
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li><a href="#">About </a></li>
            <li><a href="#">Contact </a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Reglee © 2017</p>
    </footer>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>