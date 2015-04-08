<html>
    <title>

        Login    

    </title>

    <head>
    <h2> Login Page </h2>
</head>

<body>

    <?php echo validation_errors(); ?>
    <?php echo form_open('c_verifiedlogin'); ?>

    <input type = "text" name = "username" placeholder = "Username" size = 15 />
    <br>
    <input type = "password" name = "password" placeholder = "Password" size = 15 />  
    <br>
    <br>
    <input type ="submit" name = "Login" value="Login"/>
    <?php echo '<a href ="' . site_url('C_signup/index') . '"> SignUp </a>'; ?>

</form>
</body>


</html>

