<!DOCTYPE HTML>
<html lang="en" class="default <?php echo @$html_class; ?>" >
<head>
<meta charset="utf-8">
<?php echo $this->renderLayout('common/head.php'); ?>
</head>
<body>
<div class="container">
	<div class="wrapper">
		  	<div class="page-content">
				    <div class="content container">

				    	<tmpl type="system.messages" />    
						<tmpl type="view" />


				 				 
					</div>
		  
		    </div>
	  </div>
</div>

</body>
</html>
