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

    </head>
    <body>
        <div class ='container'>
            <div class='jumbotron'>
                <center><h1>  <h1>Store Book</h1>
                        </div>
                        <div class='col-lg-8 col-lg-offset-2'>
                            <div class ='row top-buffer'>
                                <div class ="col-lg-6 col-lg-offset-3">
                                    <?php
                                    if (isset($msg1) && ($msg2)) {
                                        echo '<div class="alert alert-info" role="alert">';
                                        echo '<span class="glyphicon glyphicon-ok" aria-hidden="true">  </span>';
                                        echo '<span class="sr-only">Error: </span>';
                                        echo '  ';
                                        echo $msg1;
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
                                    } else {
                                        
                                    }
                                    ?>
                                    <form action ='<?php echo base_url() . 'C_home/index'; ?>' method='post' name ='store'>
                                        <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>

                                        <div class='form-group'>
                                            <label for="bookid">Book ID:</label>
                                            <input type="text" name="bookid" size ='4' class='form-control'>
                                        </div><br>
                                        <div class='form-group'>
                                            <label for="bookname">Book Name:</label>
                                            <input type="text" name="bookname" class='form-control'>
                                        </div><br>
                                        <div class='form-group'>
                                            <label for="type">Book Type:</label>
                                            <select name="type" class='form-control'>
                                                <option name ="comic" value="comic">Comic</option>
                                                <option name ="novel" value="novel">Novel</option>
                                                <option name ="other" value="other">Other</option>
                                            </select>
                                        </div><br>
                                        <div class='form-group'>
                                            <label for="pcs">Quantity:</label>
                                            <input type="text" name="pcs" size ='4' class='form-control'>
                                        </div>
                                        <input type ="submit" name = "submit" value="Store Book"  class ='btn btn-default btn-lg'/>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                        </body>
                        <center><a href ="<?php echo base_url() . 'c_home/logout' ?>"  class ='btn btn-primary btn-sm'> Log Out </a></center>
                        <footer>
                            <div class='col-lg-offset-10'>
                                <small>&copy; Powered by ASUS</small>
                            </div>
                        </footer>
                        </html>