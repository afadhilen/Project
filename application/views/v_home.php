<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Store Your Book</title>

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
            <center><h1>  <h1>Store Book</h1>
                    </div>
        <br><br>
                    <div class ="container">
                        <div class ='row top-buffer'>
                            <div class='col-sm-6 col-xs-12'>
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3>Fill Up the form </h3> </div>
                                    <div class="panel-body">
                                        <?php
                                        if (isset($msgnew)) {
                                            echo '<div class="alert alert-info" role="alert">';
                                            echo '<span class="glyphicon glyphicon-ok" aria-hidden="true">  </span>';
                                            echo '<span class="sr-only">Error: </span>';
                                            echo '  ';
                                            echo $msgnew;
                                            echo '</div>';
                                        } else if (isset($msg1) && ($msg2)) {
                                            echo '<div class="alert alert-info" role="alert">';
                                            echo '<span class="glyphicon glyphicon-ok" aria-hidden="true">  </span>';
                                            echo '<span class="sr-only">Error: </span>';
                                            echo '  ';
                                            echo $msg1;
                                            echo '</br>';
                                            echo '</br>';
                                            echo $msg2;
                                            echo '</div>';
                                        } elseif (isset($msg3)) {
                                            echo '<div class="alert alert-danger" role="alert">';
                                            echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true">  </span>';
                                            echo '<span class="sr-only">Ok: </span>';
                                            echo '  ';
                                            echo $msg3;
                                            echo '</div>';
                                        } elseif (isset($msg4)) {
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo '<span class="glyphicon glyphicon-ok" aria-hidden="true">  </span>';
                                            echo '<span class="sr-only">Ok: </span>';
                                            echo '  ';
                                            echo $msg4;
                                            echo '</div>';
                                        } elseif (isset($msg5)) {
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo '<span class="glyphicon glyphicon-ok" aria-hidden="true">  </span>';
                                            echo '<span class="sr-only">Ok: </span>';
                                            echo '  ';
                                            echo $msg5;
                                            echo '</div>';
                                        } else {
                                            
                                        }
                                        ?>
                                        <form action ='<?php echo base_url() . 'C_home/'; ?>' method='post' name ='store'>
                                            <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                            <table class ='table table-bordered'>
                                                <td><div class='form-group'>
                                                        <label for="bookid">Book ID:</label>
                                                        <div class ="input-group">
                                                            <div class ="input-group-addon"> <span class ="glyphicon glyphicon-barcode"> </span> </div>
                                                            <input type="text" name="bookid" size ='4' class='form-control' value =''>
                                                        </div><br>
                                                        <div class='form-group'>
                                                            <label for="bookname">Book Name:</label>
                                                            <div class ="input-group">
                                                                <div class ="input-group-addon"> <span class ="glyphicon glyphicon-book"> </span> </div>
                                                                <input type="text" name="bookname" class='form-control'>
                                                            </div></div><br>
                                                        <div class='form-group'>
                                                            <label for="type">Book Type:</label>
                                                            <div class ="input-group">
                                                                <div class ="input-group-addon"> <span class ="glyphicon glyphicon-cog"> </span> </div>
                                                                <select name="type" class='form-control'>
                                                                    <option name ="comic" value="comic">Comic</option>
                                                                    <option name ="novel" value="novel">Novel</option>
                                                                    <option name ="other" value="other">Other</option>
                                                                </select>
                                                            </div></div><br>
                                                        <div class='form-group'>
                                                            <label for="pcs">Quantity:</label>
                                                            <div class ="input-group">
                                                                <div class ="input-group-addon"> <span class ="glyphicon glyphicon-pencil"> </span> </div>
                                                                <input type="text" name="pcs" size ='4' class='form-control'>
                                                            </div></div>
                                                        <br>
                                                        <input type ="submit" name = "submit" value="Store Book"  class ='btn btn-default btn-lg'/>
                                            </table>
                                        </form>
                                        <a href ="<?php echo base_url() . 'c_check/' ?>"> Back </a>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-6 col-xs-12'>
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3>Store book Rule: </h3> </div>
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
                                            <li>If Book ID already exist, it must be match with the book name</li>
                                            <li>If Book ID and book name is match, the quantity will be added automatically based on Quantity box</li>
                                            <li>Book Name is the name of the book</li>
                                            <li>There are 3 types of book: </li>
                                            <ul>
                                                <li> Comic </li>
                                                <li> Novel </li>
                                                <li> Other </li>
                                            </ul>
                                            <li>Quantity is quantity of the book</li>
                                            <li>Quantity must be in integer number</li>
                                            <br>
                                        </ol>  
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