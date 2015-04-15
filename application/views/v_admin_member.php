<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>User Data</title>

        <link rel="stylesheet" type="text/css" href="style.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/main.css'); ?>">

        <link rel="shortcut icon" href="http://www.freefavicon.com/freefavicons/objects/registry-book-152-75799.png" />

    </head>
    <div class ='jumbotron'>
        <center><h1> Users Catalog </h1></center>                s
    </div><br><br>
    <div class ='container'>
        <div class ='row top-buffer'>
            <div class='col-lg-8 col-lg-offset-2'>
                <table class ="table-responsive">
                    <table class ="table table-striped table-hover">
                        <thead>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Option</th>
                        </thead>

                        <?php foreach ($users as $_key => $_value): ?> 
                            <tr>
                                <td> <?= $_value->id ?></td>
                                <td><?= $_value->username ?></td>
                                <td><?= $_value->password ?></td>
                                <td><?= $_value->firstname ?></td>
                                <td><?= $_value->lastname ?></td>
                                <td><?= $_value->email ?></td>
                                <td><a href="<?= site_url("c_admin/delete/{$_value->id}") ?>">Delete</a> | <a href="<?= site_url("c_admin/updateform/{$_value->id}") ?>">Edit</a></td>
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