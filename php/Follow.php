<?php
	require '../includes/config.php';
	$link =@mysql_connect(SQL_SVR,SQL_LOGIN,SQL_PASS); 
	@mysql_select_db(SQL_DATABASE);
	mysql_query("SET CHARACTER SET 'utf8';", $link)or die(mysql_error());
	mysql_query("SET NAMES 'UTF8' ");
	
	
	if(isset($_POST['action']))
		{

			if(htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8') == 'follow')
	{
		/*
		* vars
		*/
		$id = intval($_POST['id_marchand']);
		
		// YOUR MYSQL REQUEST HERE or other thing :)
		/*
		*
		*/
		
		// if request successful
		$success = true;
		// else $success = false;
		
		/*$sql='select * from ratings where ip = "'.$_SERVER['REMOTE_ADDR'].'"';
		$req=mysql_query($sql);
		$nm=mysql_num_rows($req);*/
		
		// json datas send to the js file
		if($success)
		{
			$sql='insert into followers (id_marchand,id_membre) values ("'.$id.'","22")';
			$req=mysql_query($sql);
			
			$aResponse['message'] = 'Your rate has been successfuly recorded. Thanks for your rate :)';
					
			echo json_encode($aResponse);
		}
		else
		{
			$aResponse['error'] = true;
			$aResponse['message'] = 'An error occured during the request. Please retry';
	
			echo json_encode($aResponse);
		}
	} elseif(htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8') == 'unfollow'){
		/*
		* vars
		*/
		$id = intval($_POST['id_marchand']);
		
		// YOUR MYSQL REQUEST HERE or other thing :)
		/*
		*
		*/
		
		// if request successful
		$success = true;
		// else $success = false;
		
		/*$sql='select * from ratings where ip = "'.$_SERVER['REMOTE_ADDR'].'"';
		$req=mysql_query($sql);
		$nm=mysql_num_rows($req);*/
		
		// json datas send to the js file
		if($success)
		{
			$sql='delete from followers where id_membre = "22" and id_marchand = "'.$id.'"';
			$req=mysql_query($sql);
			
			$aResponse['message'] = 'Your rate has been successfuly recorded. Thanks for your rate :)';
					
			echo json_encode($aResponse);
		}
		else
		{
			$aResponse['error'] = true;
			$aResponse['message'] = 'An error occured during the request. Please retry';
	
			echo json_encode($aResponse);
		}
	}
	else
	{
		$aResponse['error'] = true;
		$aResponse['message'] = '"action" post data not equal to \'rating\'';
		
		// ONLY FOR THE DEMO, YOU CAN REMOVE THE CODE UNDER
			$aResponse['server'] = '<strong>ERROR :</strong> "action" post data not equal to \'rating\'';
		// END ONLY FOR DEMO
			
		
		echo json_encode($aResponse);
	}

		}