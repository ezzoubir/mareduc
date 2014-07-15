<?php
include '../class/upload.class.inc.php';
function ProposePhoto($UploadingFile)
{
        $charge=false;
        //insertion photo traitement 
        $handle = new upload($UploadingFile);
        if ($handle->uploaded) 
        {
            $FileName='logo_'.time();
            $Rep='../'.RepPhoto;
            $Rep2='../'.RepPhoto.'mins';
            $ext='.'.$handle->file_src_name_ext;
            $handle->file_new_name_body  = $FileName;
            if($handle->image_src_x>800)
            {
                 $handle->image_resize         = true;
                 $handle->image_x             =800;
                 $handle->image_ratio_y        = true;
              } 
            $handle->process($Rep);
            $handle->file_new_name_body  = $FileName;
            if($handle->image_src_x>150)
            {
                 $handle->image_resize         = true;
                 $handle->image_x             =150;
                 
                 $handle->image_ratio_y        = true;
            } 

            $handle->process($Rep2);
            $charge=true;
            $handle->clean(); 
            unset($handle);
            $file=$FileName.$ext;
            return $file;
      }
      else return false;
    } 
	
	function ProposeFichier($UploadingFile)
{
        $charge=false;
        //insertion photo traitement 
        $handle = new upload($UploadingFile);
        if ($handle->uploaded) 
        {
            $FileName='video_'.$_POST['titre'].'_'.time();
            $Rep='../'.RepPhoto;
            $Rep2='../'.RepPhoto.'mins';
            $ext='.'.$handle->file_src_name_ext;
            $handle->file_new_name_body  = $FileName;
           
            $handle->process($Rep);
           
            $charge=true;
            $handle->clean(); 
            unset($handle);
            $file=$FileName.$ext;
            return $file;
      }
      else return false;
    } 
	
	if(isset($_POST['ajouter']))
  {
  
	@$uploadphoto=ProposePhoto($_FILES['logo']);
	
	$uploadfile=ProposeFichier($_FILES['fichier']);
	if($uploadfile!=false){
	$uploadfile=ProposeFichier($_FILES['fichier']);
	}else{
	$uploadfile="Null";
	}
	$sql='insert into coupons (titre,logo,presentation,url,site,reduction,id_ville,id_cat,id_marchand) 
			values 
		  ("'.$_POST['titre'].'","'.$uploadphoto.'","'.$_POST['presentation'].'","'.$_POST['url'].'","'.$_POST['site'].'","'.$_POST['reduction'].'","'.$_POST['ville'].'","'.$_POST['cat'].'","'.$_POST['marchand'].'")';
		  
	mysql_query($sql);
	
	$msg='<script>alert("Les données ont été enregistré avec succès")</script>';
  }
?>
<h2>Ajouter une coupon</h2>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
<table width="100%" cellspacing="5" cellpadding="0">
		<tr><td>Titre</td><td><input type="text" name="titre" value="" /></td></tr>
		<tr><td>Logo</td><td><input type="file" name="logo" value="" /></td></tr>
		<tr><td>Présentation</td><td><textarea cols="20" rows="3" name="presentation"></textarea></td></tr>
		<tr><td>Vidéo (url)</td><td><input type="text" name="url" value="" /></td></tr>		
		<tr><td>Web site</td><td><input type="text" name="site" value="" /></td></tr>		
		<tr><td>Réduction</td><td><input type="text" name="reduction" value="" /></td></tr>
		<tr><td>Ville</td><td><select name="ville">
		<option value=""></option>
		<?php
			$sq='select * from villes order by ville asc';
			$rq=mysql_query($sq);
			while($dt=mysql_fetch_array($rq)){
		?>
		<option value="<?php echo $dt['id']; ?>"><?php echo $dt['ville']; ?></option>
		<?php } ?>
		</select></td></tr>
		<tr><td>Marchand</td><td><select name="marchand">
		<option value=""></option>
		<?php
			$sq='select * from marchands order by marchand asc';
			$rq=mysql_query($sq);
			while($dt=mysql_fetch_array($rq)){
		?>
		<option value="<?php echo $dt['id']; ?>"><?php echo $dt['marchand']; ?></option>
		<tr><td>Secteur</td><td><select name="cat">
		<option value=""></option>
		<?php
			$sq='select * from categories order by cat asc';
			$rq=mysql_query($sq);
			while($dt=mysql_fetch_array($rq)){
		?>
		<option value="<?php echo $dt['id']; ?>"><?php echo $dt['cat']; ?></option>
		<?php } ?>
		</select></td></tr>
		<tr><td></td><td><input type="submit" name="ajouter" value="Ajouter" /></td></tr>
</table>
</form>
<?php
	if(isset($msg)) {
		echo $msg;
	}
?>
	