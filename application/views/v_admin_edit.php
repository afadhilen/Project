<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Form Update</h1>
        <form action ='<?php echo base_url() . 'c_admin/update/'. $this->uri->segment(3); ?>' method='post'>
            <?php
            echo validation_errors();

            $id = $this->uri->segment(3);
            $this->db->where('id', $id);
            $this->db->from('users');

            $query = $this->db->get();

            foreach ($query->result() as $rows) {
                ?>

                <label>First Name:</label>
                <input type = "text" name = "firstname" class ="input-xlarge" value ='<?php echo $rows->firstname; ?>'/>		
                </br>
                <label>Last Name:</label>
                <input type = "text" name = "lastname" class ="input-xlarge" value ='<?php echo $rows->lastname; ?>'/>			
                </br>
                <label>Username:</label>
                <input type = "text" name = "username" class ="input-xlarge"value ='<?php echo $rows->username; ?>'/>
                </br>
                <label>Password:</label>
                <input type = "text" name = "password" class ="input-xlarge"value ='<?php echo $rows->password; ?>'/>
                </br>
                <label>Email:</label>
                <input type = "text" name = "email" class ="input-xlarge" value ='<?php echo $rows->email; ?>'/>
                </br>
                <?php
            }
            ?>  
        </table>
        <input type ="submit" name = "submit" value="Update"/>
    </form>
</body>
</html>
