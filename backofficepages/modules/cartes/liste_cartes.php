<?php

if(isset($_POST['save']))
  {
      // id_membre =
      $id=GetImageButtonValue($_POST['save']);
      if(isset($_POST['statut'][$id]))
      {
          $sql='update  cartes set statut="1" where id="'.$id.'"';
          mysql_query($sql);
      }
      else
      {
      
        $sql='update  cartes set statut="0" where id="'.$id.'"';
        mysql_query($sql);
      }
	  
}

if(isset($_POST['delete']))
{
    $id=GetImageButtonValue($_POST['delete']);
    
    // on supprimer l'enregistrement
    $sql='delete from cartes where id="'.$id.'"';
    mysql_query($sql);
}

$sql='select * from cartes order by id desc';
$req=mysql_query($sql);

?>
<h2>Liste des cartes</h2>
<br/>
<br/>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
<table width="100%" cellspacing="5" cellpadding="0" class="display" id="example">
	<thead>
	<tr>	
		<th>Nom</th>
		<th>Adresse</th>
		<th>Tél</th>
		<th>Email</th>
		<th>Carte</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
<?php while($data=mysql_fetch_array($req)) { ?>
	<tr>	
		<td><a href=""><?php echo $data['nom']; ?></a></td>
   <td><input type="checkbox" name="statut[<?php echo $data['id']; ?>]" <?php if($data['statut']==1) echo ' checked '; ?>></td>
		<td><input type="image" name="save[<?php echo $data['id']; ?>]" src="imgs/floppy_disk16.gif">
     <input style="margin-left:10px;" type="image" name="delete[<?php echo $data['id']; ?>]" src="imgs/b_drop.gif" onclick='javascript: if(confirm("Supprimer cette coupon ?")){this.submit();} else return false;'>
	 </td>
	</tr>
<?php } ?>
</tbody>	
</table>	
</form>