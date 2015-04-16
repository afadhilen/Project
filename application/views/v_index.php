<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>LIMAS</title>

        <link rel="stylesheet" type="text/css" href="style.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/main.css'); ?>">

<!--<link rel="icon" href="<?php echo base_url('img/favicon.png'); ?>" type="image/gif">-->
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

        <div class ='jumbotron'>
            <center>  <h1> Library Management System </h1> </center>
        </div>
        <div class="container">
            <br><br>
            <div class ='row top-buffer'>
                <div class ="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4> Login as: </h4></div>
                        <div class="panel-body">
                            <a href = '<?php echo base_url() . 'c_admin/' ?>' class="btn btn-primary btn-block btn-lg" size="15"> Admin </a>
                            <a href = '<?php echo base_url() . 'c_login/' ?>' class="btn btn-default btn-block btn-lg" size="15"> User </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
    <br><br><br><br><br><br><br><br><br><br>
    <footer>
        <div class='col-md-offset-10'>
            <small>&copy; Powered by ASUS</small>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>




