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

    </head>
    <center><div class ='container'>
            <div class ='jumbotron'>
                <h1> Product Record Data </h1>
            </div>
            <div class ='row top-buffer'>
                <div class='col-lg-8 col-lg-offset-2'>
                    <table class ="table">
                        <thead>
                        <th>Book ID</th>
                        <th>Book Name</th>
                        <th>Book Type</th>
                        <th>Quantity</th>
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
                            </tr>
                        <?php endforeach; ?>
                    </table> 
                    <a class="btn btn-default btn-primary btn-lg" href ="c_admin/logout"> Log Out </a>
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