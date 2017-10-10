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
			<div class="wrapper cap">
				<div class="col-1">
					<?php $address_line_1 = get_field("address_line_1","option");
					$address_line_2 = get_field("address_line_2","option");
					$phone_pre = get_field("phone_pre","option");
					$phone = get_field("phone","option");
					$fax_pre = get_field("fax_pre","option");
					$fax = get_field("fax","option");?>
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
							<?php echo $phone_pre.'&nbsp;'.$phone;?>
						</div><!--.phone-->
					<?php endif;?>
					<?php if($fax && $fax_pre):?>
						<div class="fax">
							<?php echo $fax_pre.'&nbsp;'.$fax;?>
						</div><!--.fax-->
					<?php endif;?>
				</div><!--.col-1-->
				<div class="col-2">
					<?php $copyright = get_field("copyright","option");?>
					<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
					<?php if($copyright):?>
						<div class="copyright">
							<?php echo $copyright.'&nbsp;'.date('Y');?>
						</div><!--.copyright-->
					<?php endif;?>
				</div><!--.col-2-->
			</div><!-- wrapper -->
		</div><!--.wrapper-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
