<html>
	
	<head>

    <!-- Stylesheets -->
		<link href="themes/<?php echo($pageTools->getTheme("base")); ?>/stylesheets/cssReset.css" rel="stylesheet" />
		<link href="themes/<?php echo($pageTools->getTheme("base")); ?>/stylesheets/base.css" rel="stylesheet" />
	
    <!-- Javascript CSS Hacks -->
    <script src="themes/berry/scripts/cssTricks.js"></script>  

    <!--[if IE]>
      <link href="themes/berry/stylesheets/ie.css" rel="stylesheet" />
    <![endif]-->

    <!-- Favicon -->
    <link rel="SHORTCUT ICON" href="themes/berry/favicon.ico" />

		<title><?php echo($title." : ".$pageContent['title']); ?></title>

	</head>

	<body>
  
		<div id="mainContainer">

    	<div id="title">
	
  	 		<?php 
		  		require_once($fullPath."/themes/".$pageTools->getTheme("base")."/templates/title.inc.php"); 
			  ?>
	
    	</div>

      <div class='brownSpacer'></div>
	
    	<div id='navBar'>
	
  		<?php 
				require_once($fullPath."/themes/".$pageTools->getTheme("base")."/templates/links.inc.php"); 
			?>
	
  	 	</div>

      <div class='brownSpacer'></div>
 		  
      <div id="body" class="padded">
	
			  <?php		
				  echo($content);
			  ?>

      </div>
	 
      <div class='brownSpacer'></div>
 	    
      <div id="footer">
	
 		    <?php 
				  require_once($fullPath."/themes/".$pageTools->getTheme("base")."/templates/footer.inc.php"); 
			  ?>

	  </div>
  		
  </div>

  <script type='text/javascript'>

    setCSSHeight();

  </script>

  </body>

</html>
