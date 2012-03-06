<div id='titleImage'><a href='/index.php'><img src='<?php echo(DIRECTORY_PATH); ?>/base/themes/berry/images/title.png'></a></div>

<div id='smallLogin'>
	<?php 
	
		if (!isset($_SESSION['memberLoggedIn'])) {
	
			require_once(FULL_PATH."/membership/themes/".$_pageTools->getTheme("membership")."/templates/smallLogin.inc.php"); 

		}
		else {

			require_once(FULL_PATH."/membership/themes/".$_pageTools->getTheme("membership")."/templates/smallLoginInfo.inc.php");
		}

	?>
</div>
