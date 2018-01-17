<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>personel listesi</title>
</head>
<body>






<form action="<?=base_url('/PersonnelController/Insert')?>" enctype="multipart/form-data" method="post" id="form_1" name="form_1" accept-charset="utf-8">

    <input type="text" name="name" id="name" placeholder="Name"><br>
    <select name="gender" id="gender">
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
    </select><br>

    <select name="city_id" id="city_id">
        <?php foreach ($cities as $city){?>
        <option value="<?=$city->id?>"><?=$city->name?></option>
        <?php }?>
    </select><br>
    <input type="text" name="address" id="address" placeholder="Address"><br>
    <input type="email" required name="email" id="email" placeholder="Email"><br>

    <input type="file" name="photo_file" id="photo_file" size="20" /><br>
    <input type="submit" value="POST">

</form>

<table>
<?php

foreach ($personnel as $person) {
    ?>
<tr><td><?=$person->id?></td><td><?=$person->name?></td><td><?=$person->gender?></td><td><?=$person->address?></td><td><?=$person->city_name?></td>
    <td><?=$person->email?></td><td>
        <a href="#" onclick="if(confirm('veri silinecek , emin misiniz? ')){ window.open('<?= base_url('/PersonnelController/delete/'.$person->id)?>','_self') }">Sil</a>
        <a href="<?=base_url('/PersonnelController/update/'.$person->id)?>">Güncelle</a>
    </td>
</tr>


    <?php

}
?>
</table>
</body>
</html>

