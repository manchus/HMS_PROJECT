<?php $this->_t = "detail_employe"; ?>
<table class="table table-bordered">
  <thead>
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