



<form action="<?=base_url('/PersonnelController/update')?>" method="post" id="form_1" name="form_1" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id" value="<?=$personnel->id?>">
    <input type="text" name="name" id="name" placeholder="Name" value="<?=$personnel->name?>"><br>
    <select name="gender" id="gender">
        <option value="male" <?php if($personnel->gender == 'male'){?>selected<?php }?>>MALE</option>
        <option value="female" <?php if($personnel->gender == 'female'){?>selected<?php }?>>FEMALE</option>
    </select><br>

    <select name="city_id" id="city_id">
        <?php foreach ($cities as $city){?>
            <option value="<?=$city->id?>" <?php if($personnel->city_id == $city->id){?>selected<?php }?>><?=$city->name?></option>
        <?php }?>
    </select><br>
    <input type="text" name="address" id="address" value="<?=$personnel->address?>" placeholder="Address"><br>
    <input type="email" required name="email" id="email" placeholder="Email" value="<?=$personnel->email?>"><br>

    <input type="file"><br>
    <input type="submit" value="POST">

</form>