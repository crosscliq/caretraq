<!DOCTYPE HTML>
<html lang="en" class="default <?php echo @$html_class; ?>" >
<head>
<meta charset="utf-8">
<?php echo $this->renderLayout('common/head.php'); ?>
</head>
<body>
<!-- OUTER MOST DIVISION -->
<div id="wrapper">
		<tmpl type="system.messages" />    
          <tmpl type="view" />
   
    
   <?php echo $this->renderLayout('common/footer.php'); ?>
    
</div>

</body>
</html>
