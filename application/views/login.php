<html>


<head>

</head>
<body>

<form action="<?=base_url("Login/loginControl")?>" method="post">

    email :<input type="text" name="email" id="email"><br>
    pw:<input type="text" name="password" id="password"><br>
    <input type="submit" value="login" name="login" id="login">

    <?php

        echo @$validation_error;


    ?>



</form>
</body>
</html>