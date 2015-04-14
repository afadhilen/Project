<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Books Edit</title>

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
            <center><h1>  <h1>Form Books Update</h1>
                    </div>
                    <div class='col-lg-8 col-lg-offset-2'>
                        <div class ='row top-buffer'>
                            <div class ="col-lg-6 col-lg-offset-3">
                                <?php
                                if (isset($msgnew)) {
                                    echo '<div class="alert alert-info" role="alert">';
                                    echo '<span class="glyphicon glyphicon-ok" aria-hidden="true">  </span>';
                                    echo '<span class="sr-only">Error: </span>';
                                    echo '  ';
                                    echo $msgnew;
                                    echo '</br>';
                                }
                                ?>
                                <table class ='table-responsive'>
                                    <a href ="<?php echo base_url() . 'c_home/' ?>" class="btn btn-primary btn-block btn-lg" size="15"> Yes </a>
                                    <a href ="<?php echo base_url() . 'c_check' ?>" class="btn btn-default btn-block btn-lg" size="15"> No </a>
                                </table></div>
                        </div></div>
                    </div>
                    </body>
                    </html>
