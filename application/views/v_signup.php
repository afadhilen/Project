<html>

    <title> Sign Up </title>
    <head>
    <h2> Sign Up Page </h2>
</head>
<body> 

    <form action ='<?php echo base_url() . 'C_signup/signup'; ?>' method='post'>
        <?php echo validation_errors(); ?>
        <label>First Name:</label>
        <input type = "text" name = "firstname" placeholder = "FirstName" class ="input-xlarge" />			
        </br>
        <label>Last Name:</label>
        <input type = "text" name = "lastname" placeholder = "LastName" class ="input-xlarge" />			
        </br>
        <label>Username:</label>
        <input type = "text" name = "username" placeholder = "Username" class ="input-xlarge"/>
        </br>
        <label>Password:</label>
        <input type = "text" name = "password" placeholder = "Password" class ="input-xlarge"/>
        </br>
        <label>Re-Type Password:</label>
        <input type = "text" name = "password2" placeholder = "Re-Type Password" class ="input-xlarge" />
        </br>
        <label>Email:</label>
        <input type = "text" name = "email" placeholder = "Email" class ="input-xlarge"/>
        </br>

    </table>
    <input type ="submit" name = "submit" value="Sign Up"/>
</form>



</body>



</html>


