<?php
if (isset($_GET['f'])) {
    $details = file_get_contents('level6/'.$_GET['f'].'.txt');
    $details = explode('|',$details);
}

if (isset($_POST['login'])) {
    if ($_POST['password']==$details[1] && $_POST['login']==$details[0]) {
        header('location: level7.php');
    } else {
        header('location: level6.php?success=0');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Try2hack</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/custom.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to go to next level (now 6)</h1>

            <div class="account-wall">
                <img class="profile-img"
                     src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                     alt="">

                <form class="form-signin" id="login-form" method="post" action="level6.php?f=users">
                    <input type="text" class="form-control" placeholder="Login" id="login" name="login" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required autofocus
                           style="margin-top: 10px">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php if (isset($_GET['success']) && $_GET['success']=='0') { ?>
    <script>
        alert('not this time');
        $("#login").val('');
        $("#password").val('');
    </script>
<?php } ?>
</body>
</html>