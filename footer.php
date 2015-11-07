		<footer>
			<div class="footerWrapper">

				<p>I love solving problems and taking on new challenges. If you would like to talk about a project you would like to bring to life, or just say hi, send me an email or fill in the information!</p>

				<div class="contactOptions">
					<form action="//formspree.io/me@amiephipps.com" method="POST">
					<input name="name" type="text" placeholder="Your Name" required>
					<input name="_replyto" type="text" placeholder="Your Email" required>
					<textarea id="textArea" placeholder="Your Message"></textarea>
					<input name="submit" type="submit" value="Send">
					<input type="hidden" name="_next" value="//amiephipps.com" />
					<input type="hidden" name="_subject" value="Reply from Amie Phipps!" />
					</form>

					<div class="email">
						<a href="mailto:me@amiephipps.com">me@amiephipps.com</a>
					</div>
				</div> <!-- contactOptions -->
			</div> <!-- WRAPPER -->
				
			<img src="<?php bloginfo('template_url') ?>/images/doglogo.svg" alt="logo - geodesic dog">
		</footer>

		<div id="contact"></div>
	</div> <!-- rightSide -->
</div> <!-- /.flexParent -->

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
	
<?php wp_footer(); ?>

</body>
</html>