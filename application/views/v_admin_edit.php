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
            <center><h1>Form Update</h1></center>
        </div>
        <br><br>
        <div class ='container'>
            <div class='col-lg-8 col-lg-offset-2'>
                <div class ='row top-buffer'>
                    <div class ="col-lg-6 col-lg-offset-3">
                        <form action ='<?php echo base_url() . 'c_admin/update/' . $this->uri->segment(3); ?>' method='post'>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3>Edit Data: </h3></div>
                                <div class="panel-body">
                                    <?php
                                    echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>');

                                    $id = $this->uri->segment(3);
                                    $this->db->where('id', $id);
                                    $this->db->from('users');

                                    $query = $this->db->get();

                                    foreach ($query->result() as $rows) {
                                        ?>
                                        <table class ='table table-bordered'>
                                            <td><div class='form-group'>
                                                    <label for="username">First Name:</label>
                                                    <div class ="input-group">
                                                        <div class ="input-group-addon"> <span class ="glyphicon glyphicon-pencil"> </span> </div>
                                                        <input type = "text" name = "firstname" class ='form-control' value ='<?php echo $rows->firstname; ?>'/>		
                                                    </div></br>
                                                    <div class='form-group'>
                                                        <label for ='lastname'>Last Name:</label>
                                                        <div class ="input-group">
                                                            <div class ="input-group-addon"> <span class ="glyphicon glyphicon-pencil"> </span> </div>
                                                            <input type = "text" name = "lastname" class ='form-control' value ='<?php echo $rows->lastname; ?>'/>			
                                                        </div></br>
                                                        <div class='form-group'>
                                                            <label for='username'>Username:</label>
                                                            <div class ="input-group">
                                                                <div class ="input-group-addon"> <span class ="glyphicon glyphicon-user"> </span> </div>
                                                                <input type = "text" name = "username" class ='form-control' value ='<?php echo $rows->username; ?>'/>
                                                            </div></br>
                                                            <div class='form-group'>
                                                                <label for='password'>Password:</label>
                                                                <div class ="input-group">
                                                                    <div class ="input-group-addon"> <span class ="glyphicon glyphicon-lock"> </span> </div>
                                                                    <input type = "text" name = "password" class ='form-control' value ='<?php echo $rows->password; ?>'/>
                                                                </div></br>
                                                                <div class='form-group'>
                                                                    <label for='email'>Email:</label><div class ="input-group">
                                                                        <div class ="input-group-addon"> @ </div>
                                                                        <input type = "text" name = "email" class ='form-control' value ='<?php echo $rows->email; ?>'/>
                                                                    </div></br>
                                                                    <?php
                                                                }
                                                                ?>  

                                                                <input type ="submit" class ='btn btn-default btn-lg' name = "submit" value="Update"/>
                                                                </table>
                                                                <a href ="<?php echo base_url() . 'c_admin/detail' ?>"> Back </a>
                                                            </div>
                                                        </div>
                                                    </div>
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
