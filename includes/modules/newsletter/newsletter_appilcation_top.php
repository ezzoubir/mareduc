<?php
  if(isset($_POST['FORM_REGISTER_NEWSLETTER_SUBMIT']))
  {
        // on teste si mail valide
        if(TestEmail($_POST['FORM_REGISTER_NEWSLETTER_EMAIL']))
        {
            // on teste si email pas deja enregisdtré
            $sql='select * from '.PREFIXE_BDD.'newsletter_emails where email="'.$_POST['FORM_REGISTER_NEWSLETTER_EMAIL'].'" and type_inscription="site"';//and language="'.$language.'"
            $res=mysql_query($sql);
            if(mysql_num_rows($res)==0)
            {
                // on peut enregistrer
                $sql='insert into '.PREFIXE_BDD.'newsletter_emails (email,language,nom,prenom,ville,pays,tel,type_inscription) values ("'.$_POST['FORM_REGISTER_NEWSLETTER_EMAIL'].'","'.$language.'","'.$_POST['FORM_REGISTER_NEWSLETTER_NOM'].'","'.$_POST['FORM_REGISTER_NEWSLETTER_PRENOM'].'","'.$_POST['FORM_REGISTER_NEWSLETTER_VILLE'].'","'.$_POST['FORM_REGISTER_NEWSLETTER_PAYS'].'","'.$_POST['FORM_REGISTER_NEWSLETTER_TEL'].'","site")';
                mysql_query($sql);
                $inscription_newsletter=INSCRIPTION_NEWSLETTER_SUCCES;
            }
            else
            {
            $inscription_newsletter=FORM_NEWSLETTER_DEJA_INSCRIT;
            }
        }
        else
        {
            $inscription_newsletter=FORM_EMAIL_NON_VALIDE;
            
        }
        
        // on teste si email existe sur la base
        
        
  
  }
  if(isset($_POST['FORM_NEWSLETTER_DESINSCRIPTION']))
  {
      if(TestEmail($_POST['FORM_EMAIL']))
      {
        $sql='delete from '.PREFIXE_BDD.'newsletter_emails where email="'.$_POST['FORM_EMAIL'].'"';
        mysql_query($sql);
        header('LOCATION:'.$_POST['URL_SRC'].'&ok');
        
      }
  
  }
?>