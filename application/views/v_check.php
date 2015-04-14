<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Check your ID</title>

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

        <div class='col-lg-8 col-lg-offset-2'>
            <div class ='row top-buffer'>
                <div class ="col-lg-6 col-lg-offset-3">
                    <center><h1> Check Book ID </h1></center>
                    <br><br>
                    <form action ='<?php echo base_url() . 'c_check/'; ?>' method='post' name ='store'>
                        <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <table class ='table table-bordered'>
                            <td><div class='form-group'>
                                    <label for="bookid">Check Book ID:</label>
                                    <input type="text" name="bookid" size ='4' class='form-control'>
                                </div><br>
                                <input type ="submit" name = "submit" value="Check"  class ='btn btn-default btn-lg'/>
                        </table></form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
