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

    </head>
    <body>
        <div class='jumbotron'>
            <center><h1>  <h1>Form Books Update</h1></center>
        </div>
        <div class ='container'>
            <div class='col-lg-8 col-lg-offset-2'>
                <div class ='row top-buffer'>
                    <div class ="col-lg-6 col-lg-offset-3">
                        <form action ='<?php echo base_url() . 'c_admin/booksupdate/' . $this->uri->segment(3); ?>' method='post'>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3>Edit Data: </h3></div>
                                <div class="panel-body">
                                    <?php
                                    echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>');

                                    $bookid = $this->uri->segment(3);
                                    $this->db->where('book_id', $bookid);
                                    $this->db->from('books');

                                    $query = $this->db->get();

                                    foreach ($query->result() as $rows) {
                                        ?>
                                        <table class ='table table-bordered'>
                                            <td><div class='form-group'>
                                                    <label for="bookid">Book ID:</label>
                                                    <div class ="input-group">
                                                        <div class ="input-group-addon"> <span class ="glyphicon glyphicon-barcode"> </span> </div>
                                                        <input type="text" name="bookid" size ='4' class='form-control' value ='<?php echo $rows->book_id; ?>'>
                                                    </div><br>
                                                    <div class='form-group'>
                                                        <label for="bookname">Book Name:</label>
                                                        <div class ="input-group">
                                                            <div class ="input-group-addon"> <span class ="glyphicon glyphicon-book"> </span> </div>
                                                            <input type="text" name="bookname" class='form-control' value ='<?php echo $rows->name; ?>'>
                                                        </div><br>
                                                        <div class='form-group'>
                                                            <label for="type">Book Type:</label>
                                                            <div class ="input-group">
                                                                <div class ="input-group-addon"> <span class ="glyphicon glyphicon-cog"> </span> </div>
                                                                <select name="type" class='form-control' value ='<?php echo $rows->type; ?>'>
                                                                    <option name ="comic" value="comic">Comic</option>
                                                                    <option name ="novel" value="novel">Novel</option>
                                                                    <option name ="other" value="other">Other</option>
                                                                </select>
                                                            </div><br>
                                                            <div class='form-group'>
                                                                <div class ="input-group">
                                                                    <div class ="input-group-addon"> <span class ="glyphicon glyphicon-pencil"> </span> </div>
                                                                    <label for="pcs">Quantity:</label>
                                                                    <input type="text" name="pcs" size ='4' class='form-control' value ='<?php echo $rows->pcs; ?>'>
                                                                </div>
                                                                <input type ="submit" class ='btn btn-default btn-lg' name = "submit" value="Update"/>
                                                                </table>
                                                                <a href ="<?php echo base_url() . 'c_admin/product' ?>"> Back </a>
                                                            </div>
                                                        </div>
                                                        </br>

                                                        <?php
                                                    }
                                                    ?>  

                                                    </form>
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