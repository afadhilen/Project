<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Success</title>

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
        <div class='jumbotron'>
            <center><h1>Sign Up Success</h1>
        </div>
        <div class ='container'>
            <div class='col-lg-8 col-lg-offset-2'>
                <div class ='row top-buffer'>
                    <div class ="col-lg-6 col-lg-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Account created</h3> </div>
                            <div class="panel-body">
                                <a href = "<?php echo base_url() . 'c_login/' ?>" class="btn btn-primary"> Login </a>
                            </div>
                        </div>
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
