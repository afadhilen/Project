<html>
    <title>
        Admin Login
    </title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    </head>
    <body>
        <div class ='container'>
            <div class='jumbotron'>
                <center><h1> Admin Login Page </h1>
            </div>
            <div class='jumbotron col-lg-8 col-lg-offset-2'>
                <div class ='row top-buffer'>
                <div class ="col-lg-6 col-lg-offset-3">


                <?php echo validation_errors(); ?>
                <?php echo form_open('c_admin_verifylogin'); ?>

                <div class='form-group'>
                    <label for="username">Username:</label>
                    <input type = "text" name = "username" placeholder = "Enter Username" class ='form-control' />
                </div><br>
                <div class='form-group'>
                    <label for="password">Password:</label>
                    <input type = "password" name = "password" placeholder = "Enter Password" class ='form-control'/>  
                </div><br>
                <div class='form-group'>
                    <br>
                    <input type ="submit" name = "Login" value="Login" class ='btn btn-default btn-lg'/>
                </div></div></div>
            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </div>
</body>



</html>

