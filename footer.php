<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="col-1">
				<div class="site-name">
					<?php bloginfo('name'); ?>
				</div><!--.site-name-->
				<?php if($address_line_1):?>
					<div class="address-line-1">
						<?php echo $address_line_1;?>
					</div><!--.address-line-1-->
				<?php endif;?>
				<?php if($address_line_2):?>
					<div class="address-line-2">
						<?php echo $address_line_2;?>
					</div><!--.address-line-2-->
				<?php endif;?>
				<?php if($phone && $phone_pre):?>
					<div class="phone">
						<?php echo $phone_pre.$phone;?>
					</div><!--.phone-->
				<?php endif;?>
				<?php if($fax && $fax_pre):?>
					<div class="fax">
						<?php echo $fax_pre.$fax;?>
					</div><!--.fax-->
				<?php endif;?>

			</div><!--.col-1-->
			<div class="col-2">
			</div><!--.col-2-->
		</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
