<?php
	
	if(isset($_POST['ajouter']))
  {
	$sql='insert into supervision (id_delegue,id_marchand,commission,duree_contrat,type_paiement,chiffre_affaire) 
			values 
		  ("'.$_POST['id_delegue'].'","'.$_POST['id_marchand'].'","'.$_POST['commission'].'","'.$_POST['duree_contrat'].'","'.$_POST['type_paiement'].'","'.$_POST['chiffre_affaire'].'")';
	mysql_query($sql);
	
	$msg='<script>alert("Les données ont été enregistré avec succès")</script>';
  }
?>
<h2>Ajouter une trace</h2>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
<table width="100%" cellspacing="5" cellpadding="0">
		<tr><td>Délégue</td><td>
		<tr><td>Marchand</td><td>
		<tr><td>Commission</td><td><input type="text" name="commission" value="" /></td></tr>
		<tr><td>Durée de contrat</td><td>
		<tr><td>Type de paiement</td><td>
		<tr><td>Chiffre d'affaires</td><td><input type="text" name="chiffre_affaire" value="" /></td></tr>
		<tr><td></td><td><input type="submit" name="ajouter" value="Ajouter" /></td></tr>
</table>
</form>
<?php
	if(isset($msg)) {
		echo $msg;
	}
?>
	