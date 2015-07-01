</div>
</div>
<div id="footer">
	<p>
		Copyright &copy; <?php echo date("Y"); ?> <?php echo bloginfo('name'); ?>. Todos los derechos reservados 
	</p>
</div>


<?php 
$pov_google_analytics = get_option('pov_google_analytics');
if ($pov_google_analytics != '') { echo stripslashes($pov_google_analytics); }
?>
<?php wp_footer(); ?>




</body>
</html>
