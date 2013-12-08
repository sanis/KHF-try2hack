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
            <h1 class="text-center login-title">Sign in to go to next level (now 2)</h1>

            <div class="account-wall">
                <img class="profile-img"
                     src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                     alt="">

                <form class="form-signin" id="login-form">
                    <input type="text" class="form-control" placeholder="Login" id="login" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" id="password" required autofocus
                           style="margin-top: 10px">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $( "#login-form" ).submit(function( event ) {
        var login = $("#login");
        var password = $("#password");
        if ((login.val()=='one') && (password.val()=='google')) {
            if(confirm('Login sucessful, continue to next level')) {
                window.location.href = 'level2.php';
            }
        } else {
            alert('Not this time');
            login.val('');
            password.val('');
        }
        return false;
    });
</script>
</body>
</html>