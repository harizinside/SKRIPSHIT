<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo lang('login_heading');?></title>

    <link href="/avengers/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/avengers/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/avengers/assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/avengers/assets/css/animate.css" rel="stylesheet">
    <link href="/avengers/assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to Developer</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                	<?php if($message != NULL) {?>
                	<div id="infoMessage" class="alert alert-danger  alert-dismissable">
                		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <?php echo $message;?>
                	</div>
                	<?php } ?>
                    <form class="m-t" role="form" method="post" action="login">
                        <div class="form-group">
                            <input type="text" id="identity" name="identity" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
                        <div>
                        	<label> <input type="checkbox" class="i-checks" id="remember"> Remember me </label>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                        <a href="forgot_password">
                            <small>Forgot password?</small>
                        </a>
                    	</div>
                    </form>
                    <p class="m-t">
                        <small>Agape Software International &copy; 2018</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Muhamad Haris Setiawan
            </div>
            <div class="col-md-6 text-right">
               <small>© 2017-2018</small>
            </div>
        </div>
    </div>

    <script src="/avengers/assets/js/jquery-3.1.1.min.js"></script>
    <script src="/avengers/assets/js/bootstrap.min.js"></script>

    <!-- iCheck -->
    <script src="/avengers/assets/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>

</body>

</html>
