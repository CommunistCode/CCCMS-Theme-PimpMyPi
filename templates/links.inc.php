<?php

	$result = $_pageTools->getPageLinks();
	
	foreach($result as $row) {
	
		if (!$row['linkOrder'] == 0) {
		
			if (defined('PAGE_ID') && PAGE_ID == $row['dContentID']) {
				echo("<div class='navBarLinkSelected'>");
			} 
			else {
				echo("<div class='navBarLink'>");
			}
			
			if ($row['directLink'] == "") {

				echo("<a href='".DIRECTORY_PATH."/index.php?page=".$row['dContentID']."'>".$row['linkName']."</a>\n");
		
			}

			else {

				echo("<a href='".DIRECTORY_PATH."/".$row['directLink']."?page=".$row['dContentID']."'>".$row['linkName']."</a>\n");

			}

			echo("</div>");

		}
	}

?>
