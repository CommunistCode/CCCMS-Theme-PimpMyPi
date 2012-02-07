<div id='titleImage'><a href='/index.php'><img src='<?php echo($directoryPath); ?>/themes/berry/images/title.png'></a></div>

<div id='smallLogin'>
	<?php 
	
		if (!isset($_SESSION['memberLoggedIn'])) {
	
			require_once($fullPath."/membership/themes/".$pageTools->getTheme("membership")."/templates/smallLogin.inc.php"); 

		}
		else {

			require_once($fullPath."/membership/themes/".$pageTools->getTheme("membership")."/templates/smallLoginInfo.inc.php");
		}

	?>
</div>
