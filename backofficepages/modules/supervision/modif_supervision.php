<?php
	
	if(isset($_POST['modifier']))
  {
  
	$sql='update supervision set id_delegue="'.$_POST['id_delegue'].'",
		id_marchand="'.$_POST['id_marchand'].'",
		commission="'.$_POST['commission'].'",
		duree_contrat="'.$_POST['duree_contrat'].'",
		type_paiement="'.$_POST['type_paiement'].'" where id="'.$_POST['id'].'"';
		
	mysql_query($sql);
	
	$msg='<script>alert("Les données ont été modifié avec succès")</script>';
  }
  
  $sd='select * from supervision where id="'.$_GET['id'].'"';
  $fg=mysql_query($sd);
  $dr=mysql_fetch_assoc($fg);
?>
<h2>Modifier le commercial : <?php echo $dr['nom'].' '.$dr['prenom']; ?></h2>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
<table width="100%" cellspacing="5" cellpadding="0">
		<tr><td>Délégue</td><td>
		<tr><td></td><td><input type="submit" name="modifier" value="Modifier" /></td></tr>
</table>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
</form>
<?php
	if(isset($msg)) {
		echo $msg;
	}
?>
	