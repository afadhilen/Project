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
        <br><br>
        <div class="container">
            <div class='col-lg-8 col-lg-offset-2'>
                <div class ='row top-buffer'>
                    <div class ="col-lg-6 col-lg-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Confirmation</h3> </div>
                            <div class="panel-body">
                                <?php
                                if (isset($msgnew)) {
                                    echo '<div class="alert alert-warning" role="alert">';
                                    echo '<span class="glyphicon glyphicon-alert" aria-hidden="true">  </span>';
                                    echo '<span class="sr-only">Error: </span>';
                                    echo '  ';
                                    echo $msgnew;
                                    echo '</br>';
                                    echo $msgnew1;
                                    echo '</div>';
                                }
                                ?>
                                <form>
                                    <table class ='table-responsive'>
                                        <div class='form-group'>
                                            <a href ="<?php echo base_url() . 'c_home/' ?>" class="btn btn-primary btn-lg" size="15"> Yes </a>
                                            <a href ="<?php echo base_url() . 'c_check' ?>" class="btn btn-default btn-lg" size="15"> No </a>
                                        </div>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
