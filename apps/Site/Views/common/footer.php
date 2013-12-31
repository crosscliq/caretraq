

<?php //echo \Dsc\Debug::dump( $this->app->hive(), false ); ?>

 <footer>
    	<div>
            <section class="cf">
                <ul class="footer-links">
                    <li><a href="#" target="_blank">www.cliqcare.com</a></li>
                    <li><a href="mailto:email@website.com" target="_blank">info@cliqcare.com</a></li>
                </ul>
                <ul class="footer-media">
                    <li><a href="#"><img src="./site/images/media_google.png" alt="text"></a></li>
                    <li><a href="#"><img src="./site/images/media_twitter.png" alt="text"></a></li>
                    <li><a href="#"><img src="./site/images/media_facebook.png" alt="text"></a></li>
                </ul>
            </section>
        </div>
    	<p id="fun"> Copyright &copy; 2013, Company Name</p>
    </footer>
    
<a href="#" class="go-top">Go Top</a>
<script>
	$(document).ready(function() {
		// Show or hide the sticky footer button
		$(window).scroll(function() {
			if ($(this).scrollTop() > 200) {
				$('.go-top').fadeIn(200);
			} else {
				$('.go-top').fadeOut(200);
			}
		});
		
		// Animate the scroll to top
		$('.go-top').click(function(event) {
			event.preventDefault();
			
			$('html, body').animate({scrollTop: 0}, 300);
		})
	});
</script>