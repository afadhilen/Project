<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Record Data</title>

        <link rel="stylesheet" type="text/css" href="style.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/main.css'); ?>">

        <link rel="shortcut icon" href="http://www.freefavicon.com/freefavicons/objects/registry-book-152-75799.png" />

    </head>
    <center>
        <div class ='jumbotron'>
            <h1> Admin Catalog Page </h1>
        </div>
    </center>
    <div class="container">
        <br><br>
        <div class ='row top-buffer'>
            <div class ="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Choose Catalog:</h3> </div>
                    <div class="panel-body">
                        <div class ="input-group">
                            <div class ="input-group-addon"> <span class ="glyphicon glyphicon-king"> </span> 
                                <p><br><a class="btn btn-primary btn-lg" href="<?= site_url("c_admin/detail") ?>"> Users</a></p>
                            </div>
                            <div class ="input-group-addon"> <span class ="glyphicon glyphicon-book"> </span> 
                                <p><br><a class="btn btn-default btn-lg" href="<?= site_url("c_admin/product") ?>">Books</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href ="<?php echo base_url() . 'c_admin/' ?>" class ="btn btn-default btn-sm"> Log Out </a>
            </div>
        </div>
    </div>
</body>
<footer>
    <div class='col-md-offset-10'>
        <small>&copy; Powered by ASUS</small>
    </div>
</footer>
</html>