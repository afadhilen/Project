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

    </head>
    <body>
        <div class ='container'>
            <div class='jumbotron'>
                <center><h1>  <h1>Form Update</h1>
                        </div>
                        <div class='jumbotron col-lg-8 col-lg-offset-2'>
                            <div class ='row top-buffer'>
                                <div class ="col-lg-6 col-lg-offset-3">
                                    <form action ='<?php echo base_url() . 'C_signup/signup'; ?>' method='post'>
                                        <?php echo validation_errors(); ?>

                                        <div class='form-group'>
                                            <label for='firstname'>First Name:</label>
                                            <input type = "text" name = "firstname" placeholder = "FirstName" class ="form-control" />			
                                        </div></br>
                                        <div class='form-group'>
                                            <label for='lastname'>Last Name:</label>
                                            <input type = "text" name = "lastname" placeholder = "LastName" class ="form-control" />			
                                        </div></br>
                                        <div class='form-group'>
                                            <label for='username'>Username:</label>
                                            <input type = "text" name = "username" placeholder = "Username" class ="form-control"/>
                                        </div></br>
                                        <div class='form-group'>
                                            <label for='password'>Password:</label>
                                            <input type = "text" name = "password" placeholder = "Password" class ="form-control"/>
                                        </div></br>
                                        <div class='form-group'>
                                            <label for='password2'>Re-Type Password:</label>
                                            <input type = "text" name = "password2" placeholder = "Re-Type Password" class ="form-control" />
                                        </div></br>
                                        <div class='form-group'>
                                            <label for='email'>Email:</label>
                                            <input type = "text" name = "email" placeholder = "Email" class ="form-control"/>
                                        </div></br>
                                        </table>
                                        <input type ="submit" class ='btn btn-default btn-lg' name = "submit" value="Sign Up"/>
                                    </form>
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


