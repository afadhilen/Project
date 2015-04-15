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

        <link rel="shortcut icon" href="http://www.freefavicon.com/freefavicons/objects/registry-book-152-75799.png" />
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

        <style>
            .jumbotron{

                background-color: #337AB7;
                background-attachment:fixed;
                background-repeat: no-repeat;
                color:white;
                min-height: 200px;
                margin-top: 0px;
                margin-bottom: 0px;
            }
        </style>

    </head>
    <body>
        <div class='jumbotron'>
            <center><h1> Admin Login Page </h1>
        </div>
        <br><br>
        <div class='col-lg-8 col-lg-offset-2'>
            <div class ='row top-buffer'>
                <div class ="col-lg-6 col-lg-offset-3">
                    <?php echo form_open('c_admin_verifylogin'); ?>
                    <form class="form" method="post">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3> Login: </h3></div>
                            <div class="panel-body">
                                <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                <table class ='table table-bordered'>
                                    <td><div class='form-group'>
                                            <label for="username">Username:</label>
                                            <div class ="input-group">
                                                <div class ="input-group-addon"> <span class ="glyphicon glyphicon-user"> </span> </div>
                                                <input type = "text" name = "username" placeholder = "Enter Username" class ='form-control' id="inputError1 "value=""/>    
                                            </div>
                                        </div><br>
                                        <div class='form-group'>
                                            <label for="password">Password:</label>
                                            <div class ="input-group">
                                                <div class ="input-group-addon"><span class="glyphicon glyphicon-lock"></span> </div>
                                                <input type = "password" name = "password" placeholder = "Enter Password" class ='form-control' value=""/>  
                                            </div><br>
                                            <div class='form-group'>
                                                <br>
                                                <input type ="submit" name = "Login" value="Login" class ='btn btn-primary btn-lg'/>
                                            </div>
                                </table>
                                <a href = '<?php echo base_url() . 'c_index/' ?>'> Back </a>
                            </div>
                        </div>
                    </form>
                    <?php echo form_close(); ?>

                </div>
            </div>
        </div>
    </body>
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
    <br>
    <footer>
        <div class='col-md-offset-10'>
            <small>&copy; Powered by ASUS</small>
        </div>
    </footer>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</html>

