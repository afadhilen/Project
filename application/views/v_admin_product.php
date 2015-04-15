<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Product Data</title>

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
    <div class ='jumbotron'>
        <center><h1> Books Catalog </h1></center>
    </div>
    <br><br>
    <div class ='container'>
        <div class ='row top-buffer'>
            <div class='col-lg-8 col-lg-offset-2'>
                <table class ="table-responsive">
                    <table class ="table table-striped table-hover">
                        <thead>
                        <th>Book ID</th>
                        <th>Book Name</th>
                        <th>Book Type</th>
                        <th>Quantity</th>
                        <th>Option</th>
                        </thead>

                        <?php
                        $this->db->select('*');
                        $this->db->from('books');
                        $result = $this->db->get();
                        $query = $result->result();

                        foreach ($query as $row):
                            ?> 
                            <tr>
                                <td> <?= $row->book_id ?></td>
                                <td><?= $row->name ?></td>
                                <td><?= $row->type ?></td>
                                <td><?= $row->pcs ?></td>
                                <td><a href="<?= site_url("c_admin/deletebook/{$row->book_id}") ?>">Delete</a> | <a href="<?= site_url("c_admin/updatebookform/{$row->book_id}") ?>">Edit</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table></table>
                <center><a href ="<?php echo base_url() . 'c_home/admin' ?>"  class ='btn btn-primary btn-sm'> Back </a></center>
            </div>
        </div>
    </div>
</center>
</body>
<footer>
    <div class='col-lg-offset-10'>
        <small>&copy; Powered by ASUS</small>
    </div>
</footer>
</html>