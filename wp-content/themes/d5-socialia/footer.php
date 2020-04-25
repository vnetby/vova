<?php
/* 	Socialia Theme's Footer
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Socialia 2.0
*/
?>




</div>

<div id="footer">
	<div id="footer-container">

		<?php
		get_sidebar('footer');
		?>
		<div id="creditline">
		<?php echo '&copy; ' . date("Y") . ': ' . get_bloginfo('name'); ?> 
	</div>
</div>

<div class=" clear"> </div>

<script src="<?= SRC; ?>assets/assets.min.js"></script>

<?php wp_footer(); ?>

<script src="<?= SRC; ?>js/main.min.js"></script>
</body>

</html>