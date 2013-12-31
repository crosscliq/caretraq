<!DOCTYPE HTML>
<html lang="en" class="default <?php echo @$html_class; ?>" >
<head>
<meta charset="utf-8">
<?php echo $this->renderLayout('common/head.php'); ?>
<?php echo $this->renderLayout('common/pusher.php'); ?>
</head>
<body>


<div class="container">
<?php echo $this->renderLayout('common/nav-top.php'); ?>


		<div class="wrapper">


		<?php echo $this->renderLayout('common/nav-primary.php'); ?>

	 
		  	<div class="page-content">
				    <div class="content container">

				    	<tmpl type="system.messages" />    
						<tmpl type="view" />


				      
				 
					</div>
		  
		    </div>
	  </div>
</div>
<?php echo $this->renderLayout('common/footer.php'); ?>
</body>
</html>
