<html>
	
	<head>

    <!-- Stylesheets -->
		<link href="base/themes/<?php echo($_pageTools->getTheme("base")); ?>/stylesheets/cssReset.css" rel="stylesheet" />
		<link href="base/themes/<?php echo($_pageTools->getTheme("base")); ?>/stylesheets/base.css" rel="stylesheet" />
	
    <!-- Javascript CSS Hacks -->
    <script src="base/themes/berry/scripts/cssTricks.js"></script>  

    <!--[if IE]>
      <link href="base/themes/berry/stylesheets/ie.css" rel="stylesheet" />
    <![endif]-->

		<title><?php echo(SITE_NAME." : ".$_title); ?></title>

	</head>

	<body>
  
		<div id="mainContainer">

    	<div id="title">
	
  	 		<?php 
		  		require_once(FULL_PATH."/base/themes/".$_pageTools->getTheme("base")."/templates/title.inc.php"); 
			  ?>
	
    	</div>

      <div class='brownSpacer'></div>
	
    	<div id='navBar'>
	
  		<?php 
				require_once(FULL_PATH."/base/themes/".$_pageTools->getTheme("base")."/templates/links.inc.php"); 
			?>
	
  	 	</div>

      <div class='brownSpacer'></div>
 		  
      <div id="body" class="padded">
	
			  <?php		
				  echo($_content);
			  ?>

      </div>
	 
      <div class='brownSpacer'></div>
 	    
      <div id="footer">
	
 		    <?php 
				  require_once(FULL_PATH."/base/themes/".$_pageTools->getTheme("base")."/templates/footer.inc.php"); 
			  ?>

	  </div>
  		
  </div>

  <script type='text/javascript'>

    setCSSHeight();

  </script>

  </body>

</html>
