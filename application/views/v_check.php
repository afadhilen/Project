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
            <div class ='row'>
                <div class='col-sm-6 col-xs-12'>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3>Insert Book ID</h3> </div>
                        <div class="panel-body">
                            <br>
                            <form action ='<?php echo base_url() . 'c_check/'; ?>' method='post' name ='store'>
                                <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                <table class ='table table-bordered'>
                                    <td><div class='form-group'>
                                            <label for="bookid">Book ID:</label>
                                            <div class ="input-group">
                                                <div class ="input-group-addon"> <span class ="glyphicon glyphicon-barcode"> </span> </div>
                                                <input type="text" name="bookid" class='form-control '>
                                            </div>
                                            <br>
                                            <input type ="submit" name = "submit" value="Check"  class ='btn btn-default btn-lg'/>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class='col-sm-6 col-xs-12'>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3>Book ID Rule: </h3> </div>
                        <div class="panel-body">
                            <ol>
                                <li>Book ID is the simulation form of ISBN (International Standard Book Number)</li>
                                <li>Book ID must be in 3 digit integer number, and separated by dash</li>
                                <li>Book ID order : X-XX</li>
                                <ul class="list-inline">
                                    <li> e.g: </li>
                                    <li>  0-01 </li>
                                    <li>  1-23 </li>
                                </ul>
                                <li>If Book ID already exist, it go to the Book ID data</li>
                                <li>If no, then go to Book Store Page</li>
                            </ol>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <a href ="<?php echo base_url() . 'c_login/' ?>" class ="btn btn-default btn-sm"> Log Out </a>
        </div>
    </body>
</html>
