<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="<?=base_url('/Forms/create')?>" method="post">
    <table>

        <tr><td>name</td><td><input type="text" name="name" id="name"></td></tr>
        <tr><td>email</td><td><input type="email" name="email" id="email"></td></tr>
        <tr><td>gender</td><td><select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select></td></tr>
        <tr><td></td><td><input type="submit" name="submit" id="submit" value="EKLE"></td></tr>
    </table>



</form>


</body>
</html>