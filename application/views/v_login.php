<html>
    <title>
        User Login    
    </title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

        <link rel="shortcut icon" href="http://www.freefavicon.com/freefavicons/objects/registry-book-152-75799.png" />
    </head>
    <body>
        <div class ='container'>
            <div class='jumbotron'>
                <center><h1> User Login Page </h1>
            </div>
            <div class='col-lg-8 col-lg-offset-2'>
                <div class ='row top-buffer'>
                    <div class ="col-lg-6 col-lg-offset-3">
                        <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <?php echo form_open('c_verifiedlogin'); ?>
                        <?php echo isset($msg) ? $msg : ''; ?>
                        <table class ='table table-bordered'>
                            <td><div class='form-group'>
                                    <label for="username">Username:</label>
                                    <input type = "text" name = "username" placeholder = "Enter Username" class ='form-control' />
                                </div><br>
                                <div class='form-group'>
                                    <label for="password">Password:</label>
                                    <input type = "password" name = "password" placeholder = "Enter Password" class ='form-control' />  
                                </div><br>
                                <div class='form-group'>
                                    <input type ="submit" name = "Login" value="Login" class ='btn btn-primary btn-lg'/>
                               
                                    <a href ='<?php echo base_url() . 'c_signup/' ?>' class="btn btn-default btn-lg"> Signup </a>
                                </div></table>
                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class='col-lg-offset-10'>
            <small>&copy; Powered by ASUS</small>
        </div>
    </footer>
</html>

