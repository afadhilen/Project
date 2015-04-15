<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Signup Form</title>

        <link rel="stylesheet" type="text/css" href="style.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/main.css'); ?>">

        <link rel="shortcut icon" href="http://www.freefavicon.com/freefavicons/objects/registry-book-152-75799.png" />

    </head>
    <body>
        <div class='jumbotron'>
            <center><h1>  <h1>Sign Up Form</h1></center>
        </div>
        <br><br>
        <div class ='container'>
            <div class='col-lg-8 col-lg-offset-2'>
                <div class ='row top-buffer'>
                    <div class ="col-lg-6 col-lg-offset-3">
                        <form action ='<?php echo base_url() . 'C_signup/signup'; ?>' method='post'>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3>Fill Up Your Data: </h3></div>
                                <div class="panel-body">
                                    <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    <table class ='table table-bordered'>
                                        <td><div class='form-group'>
                                                <label for='firstname'>First Name:</label>
                                                <div class ="input-group">
                                                    <div class ="input-group-addon"> <span class ="glyphicon glyphicon-pencil"> </span> </div>
                                                    <input type = "text" name = "firstname" placeholder = "FirstName" class ="form-control" />			
                                                </div></br>
                                                <div class='form-group'>
                                                    <label for='lastname'>Last Name:</label>
                                                    <div class ="input-group">
                                                        <div class ="input-group-addon"> <span class ="glyphicon glyphicon-pencil"> </span> </div>
                                                        <input type = "text" name = "lastname" placeholder = "LastName" class ="form-control" />			
                                                    </div></br>
                                                    <div class='form-group'>
                                                        <label for='username'>Username:</label>
                                                        <div class ="input-group">
                                                            <div class ="input-group-addon"> <span class ="glyphicon glyphicon-user"> </span> </div>
                                                            <input type = "text" name = "username" placeholder = "Username" class ="form-control"/>
                                                        </div></br>
                                                        <div class='form-group'>
                                                            <label for='password'>Password:</label>
                                                            <div class ="input-group">
                                                                <div class ="input-group-addon"><span class="glyphicon glyphicon-lock"></span> </div>
                                                                <input type = "password" name = "password" placeholder = "Password" class ="form-control"/>
                                                            </div></br>
                                                            <div class='form-group'>
                                                                <label for='password2'>Re-Type Password:</label>
                                                                <div class ="input-group">
                                                                    <div class ="input-group-addon"> <span class="glyphicon glyphicon-lock"></span> </div>
                                                                    <input type = "password" name = "password2" placeholder = "Re-Type Password" class ="form-control" />
                                                                </div></br>
                                                                <div class='form-group'>
                                                                    <label for='email'>Email:</label>
                                                                    <div class ="input-group">
                                                                        <div class ="input-group-addon"> @ </div>
                                                                        <input type = "text" name = "email" placeholder = "Email" class ="form-control"/>
                                                                    </div></br>
                                                                    <input type ="submit" class ='btn btn-primary btn-lg' name = "submit" value="Sign Up"/>
                                                                    </table>
                                                                    <a href = '<?php echo base_url() . 'c_login/' ?>'> Back </a>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </body>
                                            <footer>
                                                <div class='col-lg-10 col-lg-offset-10'>
                                                    <small>&copy; Powered by ASUS</small>
                                                </div>
                                            </footer>
                                            </html>


