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

    </head>
    <body>
        <div class='jumbotron'>
            <center><h1>  <h1>Form Update</h1>
                    </div>
                    <div class='col-lg-8 col-lg-offset-2'>
                        <div class ='row top-buffer'>
                            <div class ="col-lg-6 col-lg-offset-3">   
                                <?php
                                if (isset($msg1)) {
                                    echo '<div class="alert alert-info" role="alert">';
                                    echo '<span class="glyphicon glyphicon-ok" aria-hidden="true">  </span>';
                                    echo '<span class="sr-only">Error: </span>';
                                    echo '  ';
                                    echo $msg1;
                                    echo '</br>';
                                } else if (isset($msg2)) {
                                    echo '<div class="alert alert-info" role="alert">';
                                    echo '<span class="glyphicon glyphicon-ok" aria-hidden="true">  </span>';
                                    echo '<span class="sr-only">Error: </span>';
                                    echo '  ';
                                    echo $msg2;
                                    echo '</br>';
                                }
                                 $bookid = $this->input->post('bookid');
                                ?>      
                                <form action ='<?php echo base_url() . 'c_check/book_check/' . $bookid; ?>' method='post'>
                                    <?php
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
                                                        <input type="text" name="bookid" size ='4' class='form-control' disabled="true" value ='<?php echo $book->book_id; ?>'>
                                                    </div><br>
                                                    <div class='form-group'>
                                                        <label for="bookname">Book Name:</label>
                                                        <input type="text" name="bookname" class='form-control' disabled="true" value ='<?php echo $book->name; ?>'>
                                                    </div><br>
                                                    <div class='form-group'>
                                                        <label for="type">Book Type:</label>
                                                        <select name="type" class='form-control' disabled="true" value ='<?php echo $book->type; ?>'>
                                                            <option name ="comic" value="comic">Comic</option>
                                                            <option name ="novel" value="novel">Novel</option>
                                                            <option name ="other" value="other">Other</option>
                                                        </select>
                                                    </div><br>
                                                    <div class='form-group'>
                                                        <label for="pcs">Quantity:</label>
                                                        <input type="text" name="pcs" size ='4' class='form-control' value ='<?php echo $book->pcs; ?>'>
                                                    </div>
                                                    <input type ="submit" name = "submit" value="Store Book"  class ='btn btn-default btn-lg'/>
                                                    <?php
                                    }}
                                                ?>
                                               
                                            </table></form></div>
                                            </div>
                                            </div>

                                            </body>
                                            </html>
