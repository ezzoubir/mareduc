<?php

if(!GESTION_ESPACE_MEMBRE_STATUT)
{
    // tous les comptes doivent être actif
    $sql='update '.PREFIXE_BDD.'membres set statut="1"';
    mysql_query($sql);
    $statut=1;
    $where_statut='';
}
else
{
  $statut=0;
  $where_statut=' and statut="1" ';
  
}
  
  if(isset($_GET['logoff'])) {
    unset($_SESSION['id_membre']);
	header('LOCATION:accueil.html');
 }

  if(isset($_POST['LOGIN_PASSWORD_FORM_ENVOYER']))
  {
        // rappel mot de passe 
        
  
  }
  function GetNewPassword()
    {
        $NbrChrs=6;
        $list = "ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
        mt_srand((double)microtime()*1000000);
        $pass="";
        while(strlen( $pass )< $NbrChrs ) 
        {
    			$pass .= $list[mt_rand(0, strlen($list)-1)];
    		}
    		return $pass;
    }
  if(isset($_POST['LOGIN_FORM_ENVOYER']))
  {
      // login
      $sql='select * from '.PREFIXE_BDD.'membres where email="'.$_POST['FORM_EMAIL'].'" and password="'.md5($_POST['FORM_PASSWORD']).'" '.$where_statut;
      $res=mysql_query($sql);
      if(mysql_num_rows($res)==1)
      {
          $ro=mysql_fetch_array($res);
          $_SESSION['id_membre']=$ro['id_membre'];
          if(isset($ro['privilege']))
          $_SESSION['privilege']=true;
          
          // on met à jour derniere conncection
          $sql='update  '.PREFIXE_BDD.'membres set date_login="'.date('Y-m-d').'" where id_membre="'.$_SESSION['id_membre'].'"';
          mysql_query($sql);
          
          header('LOCATION:mes-promos.html');
      }
      else
      {
          $erreur_identification=true;
      
      }
  }
  
  if(isset($_POST['ESPACE_MEMBRE_FORM_INSCRIPTION']))
  {
      // traitement de l'inscription
      if($_POST['FORM_NOM']!='' && $_POST['FORM_EMAIL']!='' && $_POST['FORM_PASSWORD']!='' && $_POST['FORM_PASSWORD']==$_POST['FORM_PASSWORD2'])
      {
          // on verifi que le compte n'existe pas
          $sql='select * from '.PREFIXE_BDD.'membres where email="'.$_POST['FORM_EMAIL'].'"';
          $res=mysql_query($sql);
          if(mysql_num_rows($res)==0)
          {
	
					
              // on peut continuer
              $sql='insert into '.PREFIXE_BDD.'membres (nom,societe,adresse,tel,email,password,date_inscription,statut,source)  values("'.$_POST['FORM_NOM'].'","'.$_POST['FORM_SOCIETE'].'","'.$_POST['FORM_ADRESSE'].'","'.$_POST['FORM_TEL'].'","'.$_POST['FORM_EMAIL'].'","'.md5($_POST['FORM_PASSWORD']).'","'.date('Y-m-d').'","1","site")';
              mysql_query($sql);
			
              // envoi email de confirmation
               require 'class/phpmailer.class.inc.php';
                 /*
                 DEFINE('EMAIL_TXT_MOT_DE_PASSE_OUBLIE','Bonjour,<br /><br />Veuillez trouver ci dessous votre nouveau mot de passe : <br /><br />');
DEFINE('MAIL_SIGNATURE','DROITS POUR TOUS');
                 */
                 if($language!='ar')
                    $message='<div>';
                  else
                    $message='<div dir="rtl">';
                  $message.='<br /><br />Merci de vous être enregistré sur lespromos.ma. Vous pouvez désormais<br/> vous identifier en cliquant sur ce lien ci-après ou en le copiant dans votre<br/> navigateur :<br /><br /><a href="'.BASE_URL.'">'.BASE_URL.'</a>';
				  $message.='Identifiant : '.$_POST['FORM_EMAIL'];
				  $message.='Mot de passe : '.$_POST['FORM_PASSWORD'];
				  $message.='Cordialement,<br/>L`\'équipe Groupromo.ma';
                  $message.='</div>';
                  $mail = new PHPmailer();
                  $mail->IsHTML(true);
                  $mail->From=EMAIL_EXP;
                  $mail->FromName=stripslashes(BASE_URL);
                  $mail->Subject=stripslashes('['.INSCRIPTION_MEMBRE_TITRE_OK.']['.BASE_URL.']');
                  $mail->AddReplyTo(EMAIL_ADMIN);
                  $mail->AddAddress($_POST['FORM_EMAIL']);
                  $mail->Body=stripslashes($message);
                  $mail->Send();
              
				  // login
				  $sql='select * from '.PREFIXE_BDD.'membres where email="'.$_POST['FORM_EMAIL'].'" and password="'.md5($_POST['FORM_PASSWORD']).'" '.$where_statut;
				  $res=mysql_query($sql);
				  if(mysql_num_rows($res)==1)
				  {
					  $ro=mysql_fetch_array($res);
					  $_SESSION['id_membre']=$ro['id_membre'];
					  $_SESSION['displayname']=$ro['nom'];
					  if(isset($ro['privilege']))
					  $_SESSION['privilege']=true;
					  
					  // on met à jour derniere conncection
					  $sql='update  '.PREFIXE_BDD.'membres set date_login="'.date('Y-m-d').'" where id_membre="'.$_SESSION['id_membre'].'"';
					  mysql_query($sql);
					  
					  header('LOCATION:mes-promos.html');
				  }
          }  
          else
          {
            $erreur_inscription_compte_existe=true;
          }
          
      }
      else
      {
        $erreur_inscription_champs=true;
      }
  
  }
  
  
  
  if(isset($_POST['LOGIN_PASSWORD_FORM_ENVOYER']))
  {
      // on genere un nouveau mot de passe
      //on teste si email ewiste
      if(TestEmail($_POST['FORM_EMAIL']))
      {
            $sql='select * from '.PREFIXE_BDD.'membres where email="'.$_POST['FORM_EMAIL'].'"';
            $res=mysql_query($sql);
            if(mysql_num_rows($res)==1)
            {   
                $row=mysql_fetch_array($res);
                // email existe
                $new_password=GetNewPassword();
                
                $sql='update '.PREFIXE_BDD.'membres set password="'.md5($new_password).'" where id_membre="'.$row['id_membre'].'"';
                mysql_query($sql);
            
                 require 'class/phpmailer.class.inc.php';
                 /*
                 DEFINE('EMAIL_TXT_MOT_DE_PASSE_OUBLIE','Bonjour,<br /><br />Veuillez trouver ci dessous votre nouveau mot de passe : <br /><br />');
DEFINE('MAIL_SIGNATURE','DROITS POUR TOUS');
                 */
                 if($language!='ar')
                    $message='<div>';
                  else
                    $message='<div dir="rtl">';
                  $message.=EMAIL_TXT_MOT_DE_PASSE_OUBLIE.'<br /><br />'.$new_password.'<br /><br />'.MAIL_SIGNATURE;
                  $message.='</div>';
                  $mail = new PHPmailer();
                  $mail->IsHTML(true);
                  $mail->From=EMAIL_EXP;
                  $mail->FromName=stripslashes(BASE_URL);
                  $mail->Subject=stripslashes('['.MOT_DE_PASSE_OUBLIE.']['.BASE_URL.']');
                  $mail->AddReplyTo(EMAIL_ADMIN);
                  $mail->AddAddress($_POST['FORM_EMAIL']);
                  $mail->Body=stripslashes($message);
                  $mail->Send();
                  
                  
                  unset($message);
                 // echo $new_password;
                 header('LOCATION:'.$_POST['URL_SRC'].'&email_sent');
      
            }
      }
      
  
  }

  if(isset($_POST['ESPACE_MEMBRE_FORM_MODIF_COMPTE']))
  {
        if(isset($_SESSION['id_membre']))
        {
        // informations generale 
        $sql='update  '.PREFIXE_BDD.'membres set fonction="'.addslashes($_POST['fonction']).'",zone="'.addslashes($_POST['zone']).'",site="'.addslashes($_POST['site']).'",fax="'.addslashes($_POST['fax']).'",siren="'.addslashes($_POST['siren']).'",adresse="'.addslashes($_POST['adresse']).'",societe="'.addslashes($_POST['societe']).'", nom="'.addslashes($_POST['FORM_NOM']).'",prenom="'.addslashes($_POST['FORM_PRENOM']).'",email="'.addslashes($_POST['FORM_EMAIL']).'" where id_membre="'.$_SESSION['id_membre'].'"';
        mysql_query($sql);
        
        if($_POST['FORM_PASSWORD']==$_POST['FORM_PASSWORD2'] && $_POST['FORM_PASSWORD']!='')
        {
            // maj pass
            $sql='update  '.PREFIXE_BDD.'membres set password="'.md5($_POST['FORM_PASSWORD']).'"  where id_membre="'.$_SESSION['id_membre'].'"';
            mysql_query($sql);
        }
          header('LOCATION:'.$_POST['URL_SRC'].'&ok');
        }
  
  }

?>