<?php $this->_t = "Rendez-vous"; ?>
<form method="post">
<select name="rend">
    <?php foreach($departement as $dep):
        ?>
        <option value="<?=$dep->id()?>"><?= $dep->nom_dep();?></option>
    <?php endforeach; ?>
    <?php foreach($doctor as $e):
        ?>
        <option value="<?=$e->id()?>">Dr.<?= $e->nom();?></option>
    <?php endforeach; ?>
</select>
    <input type="date" name="date"/>
    <input type="time" name="heure"/>
    <input type="submit" value="prendre rendez-vous" name="take"/>
</form>