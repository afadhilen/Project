<html>
    <head>
    <h2> Welcome Home </h2>
    <title>Store Your Book</title>
</head>
<body>
    <?php
    echo isset($msg) ? $msg : '';
    ?>
    <form action ='<?php echo base_url() . 'C_home/store'; ?>' method='post' name ='store'>
        <?php echo validation_errors(); ?>
        Book ID:<br>
        <input type="text" name="bookid" size ='4'>
        <br>
        Book Name:<br>
        <input type="text" name="bookname">
        <br>
        Book Type:<br>
        <select name="type">
            <option name ="comic" value="comic">Comic</option>
            <option name ="novel" value="novel">Novel</option>
            <option name ="other" value="other">Other</option>
        </select>
        <br>
        Quantity:<br>
        <input type="text" name="pcs" size ='4'>
        <input type ="submit" name = "submit" value="Store Book"/>
    </form>
</body>
<a href ="c_home/logout"> Log Out </a>
</html>