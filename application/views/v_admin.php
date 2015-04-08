<html>
    <title>

        Login    

    </title>

    <head>
    <h2> Admin Login Page </h2>
</head>

<body>

    <?php echo validation_errors(); ?>
    <?php echo form_open('c_admin_verifylogin'); ?>

    <input type = "text" name = "username" placeholder = "Username" size = 15 />
    <br>
    <input type = "password" name = "password" placeholder = "Password" size = 15 />  
    <br>
    <br>
    <input type ="submit" name = "Login" value="Login"/>
    </form>
</body>


</html>

