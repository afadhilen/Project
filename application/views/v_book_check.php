<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>User Edit</title>

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
            <center><h1>Book Data</h1> </center>
        </div>
        <br><br>
        <div class='col-lg-8 col-lg-offset-2'>
            <div class ='row top-buffer'>
                <div class ="col-lg-6 col-lg-offset-3">   
                    <?php
                    $bookid = $this->input->post('bookid');
                    ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3>Insert Book ID</h3> </div>
                        <div class="panel-body">
                            <form action ='<?php echo base_url() . 'c_check/book_check/' . $bookid; ?>' method='post'>
                                <?php
                                if (isset($msg1)) {
                                    echo '<div class="alert alert-info" role="alert">';
                                    echo '<span class="glyphicon glyphicon-ok" aria-hidden="true">  </span>';
                                    echo '<span class="sr-only">Error: </span>';
                                    echo '  ';
                                    echo $msg1;
                                    echo '</br>';
                                    echo '</div>';
                                } else if (isset($msg2)) {
                                    echo '<div class="alert alert-info" role="alert">';
                                    echo '<span class="glyphicon glyphicon-ok" aria-hidden="true">  </span>';
                                    echo '<span class="sr-only">Error: </span>';
                                    echo '  ';
                                    echo $msg2;
                                    echo '</br>';
                                    echo '</div>';
                                }
                                echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>');


                                $this->db->where('book_id', $bookid);
                                $this->db->from('books');

                                $book = $this->db->get()->row();

                                if (isset($book->book_id)) {
                                    if ($book->book_id == $bookid) {
                                        ?>
                                        <table class ='table table-bordered'>
                                            <td><div class='form-group'>
                                                    <label for="bookid">Book ID:</label>
                                                    <div class ="input-group">
                                                        <div class ="input-group-addon"> <span class ="glyphicon glyphicon-barcode"> </span> </div>
                                                        <input type="text" name="bookid" size ='4' class='form-control' disabled="true" value ='<?php echo $book->book_id; ?>'>
                                                    </div><br>
                                                    <div class='form-group'>
                                                        <label for="bookname">Book Name:</label>
                                                        <div class ="input-group">
                                                            <div class ="input-group-addon"> <span class ="glyphicon glyphicon-book"> </span> </div>
                                                            <input type="text" name="bookname" class='form-control' disabled="true" value ='<?php echo $book->name; ?>'>
                                                        </div><br>
                                                        <div class='form-group'>
                                                            <label for="type">Book Type:</label>
                                                            <div class ="input-group">
                                                                <div class ="input-group-addon"> <span class ="glyphicon glyphicon-cog"> </span> </div>
                                                                <select name="type" class='form-control' disabled="true" value ='<?php echo $book->type; ?>'>
                                                                    <option name ="comic" value="comic">Comic</option>
                                                                    <option name ="novel" value="novel">Novel</option>
                                                                    <option name ="other" value="other">Other</option>
                                                                </select>
                                                            </div><br>
                                                            <div class='form-group'>
                                                                <label for="pcs">Quantity:</label>
                                                                <div class ="input-group">
                                                                    <div class ="input-group-addon"> <span class ="glyphicon glyphicon-pencil"> </span> </div>
                                                                    <input type="text" name="pcs" size ='4' class='form-control' value ='<?php echo $book->pcs; ?>'>
                                                                </div>
                                                                <br>
                                                                <input type ="submit" name = "submit" value="Store Book"  class ='btn btn-default btn-lg'/>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                        </table>
                                                        </form>
                                                       <!-- <a href ="<?php echo base_url() . 'c_check/' ?>"> Back </a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <br><br>
                                        </body>

                                        </html>
