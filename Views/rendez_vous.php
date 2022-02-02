<html>
<head>
    <?php $this->_t = "rendez-vous"; ?>
</head>
<body>
<?php
if(empty($_COOKIE["patientemail"]) && empty($_COOKIE["patientpassword"]))
{
    echo "<script>document.location.href='/HMS_PROJECT/login'</script>";  
}
?>
<form method="post">
  <button type="submit" name="deco" class="btn btn-danger" style="margin-left:40px; margin-top:10px;"><i class="fas fa-sign-out-alt"></i></button>
  <?php
  //echo $_COOKIE["adminemail"];
    if(isset($_POST["deco"]) && isset($_COOKIE["patientemail"]))
    {
      setcookie("patientemail",$_COOKIE["patientemail"], time()-3601);
      echo "<script>document.location.href='/HMS_PROJECT/'</script>";  
      if(empty($_COOKIE["patientemail"]))
      {
        echo "<script>document.location.href='/HMS_PROJECT/'</script>";  
      }
    }
  ?>
  </form>
<form method="post">
  <input type="text" id="fname" name="id_patient" value = "votre nom"><br>
<select name="departement">
    <?php foreach($departement as $dep):
        ?>
        <option value="<?=$dep->id()?>"><?= $dep->nom_dep();?></option>
    <?php endforeach; ?>
</select>
<br>
<select name = "id_doctor">
    <?php foreach($doctor as $doc):
        ?>
        <option value="<?=$doc->id()?>">Dr.<?= $doc->nom();?></option>
    <?php endforeach; ?>
</select>
    <input type="date" name="date_rendezvous"/>
    <input type="time" name="heure_rendezvous"/>
    <input type="submit" value="prendre un rendez-vous" name="take"/>
    </form>

</body>
</html>
