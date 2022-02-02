<?php $this->_t = "detail_employe"; ?>
<table class="table table-bordered">
  <thead>
  <?php
if(empty($_COOKIE["employeemail"]) && empty($_COOKIE["employepassword"]))
{
    echo "<script>document.location.href='/HMS_PROJECT/login'</script>";  
}
?>
<form method="post">
  <button type="submit" name="deco" class="btn btn-danger" style="margin-left:40px; margin-top:10px;"><i class="fas fa-sign-out-alt"></i></button>
  <?php
  //echo $_COOKIE["adminemail"];
    if(isset($_POST["deco"]) && isset($_COOKIE["employeemail"]))
    {
      setcookie("employeemail",$_COOKIE["employeemail"], time()-50);
      echo "<script>document.location.href='/HMS_PROJECT/'</script>";  
      if(empty($_COOKIE["employeemail"]))
      {
        echo "<script>document.location.href='/HMS_PROJECT/'</script>";  
      }
    }
  ?>
  </form>
    <h1> Votre informations </h1>
    <tr class="table-primary">
      <th scope="col">Nom</th>
      <th scope="col">prénom</th>
      <th scope="col">date naissance</th>
      <th scope="col">fonction</th>
      <th scope="col">Email</th>
      <th scope="col">adresse</th>
      <th scope="col">Code postal</th>
      <th scope="col">ville</th>
      <th scope="col">province</th>
      <th scope="col">telephone</th>
    </tr>
  </thead>
  <?php
    foreach($employe as $d):
?>
  <tbody>
    <tr>
      <td><?=$d->nom()?></td>
      <td><?=$d->prenom()?></td>
      <td><?=$d->date_naissance()?></td>
      <td><?=$d->fonction()?></td>
      <td><?=$d->email()?></td>
      <td><?=$d->adresse()?></td>
      <td><?=$d->code_postal()?></td>
      <td><?=$d->ville()?></td>
      <td><?=$d->province()?></td>
      <td><?=$d->telephone()?></td>
    </tr>
  </tbody>
<?php
    endforeach;
?>
</table>