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

    </head>
    <center><div class ='container'>
            <div class ='jumbotron'>
                <h1> Admin Record Data </h1>
            </div>
            <div class ='row top-buffer'>
                <div class ="col-lg-8 col-lg-offset-2">
                    <div class ='jumbotron'>
                        <td><a class="btn btn-default btn-primary btn-lg" href="<?= site_url("c_admin/detail") ?>"> Members</a> | <a class="btn btn-default btn-defult btn-lg" href="<?= site_url("c_admin/product") ?>">Products</a></td> 
                    </div>
                </div>
            </div>
        </div></center>
</body>
<footer>
    <div class='col-lg-offset-10'>
        <small>&copy; Powered by ASUS</small>
    </div>
</footer>
</html>
