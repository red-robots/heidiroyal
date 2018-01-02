<?php
/**
 * Template part for displaying page content in page-about.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-about"); ?>>
    <?php $row_1_image = get_field("row_1_image");
    $row_1_image_mobile = get_field("row_1_image_mobile");?>
    <div class="row-1 <?php if($row_1_image_mobile) echo "mobile ";?>">
        <?php if($row_1_image):?>
            <img class="desktop" src="<?php echo $row_1_image['url'];?>" alt="<?php echo $row_1_image['alt'];?>">
        <?php endif;?>
        <?php if($row_1_image_mobile):?>
            <img class="mobile" src="<?php echo $row_1_image_mobile['url'];?>" alt="<?php echo $row_1_image_mobile['alt'];?>">
        <?php endif;?>
    </div><!--.row-1-->
    <div class="row-2">
		<div class="wrapper cap">   
            <header class="row-1"><h1><?php the_title();?></h1></header>
            <div class="row-2 clear-bottom">
                <aside class="col-1 copy">
                    <?php $name = get_field("name");
                    $linkedin = get_field("linkedin");
                    $email = get_field("email");
                    if($name):?>
                        <header><h2><?php echo $name;?></h2></header>
                        <div class="spacer"></div><!--.spacer-->
                    <?php endif;
                    if($linkedin ||$email):?>
                        <div class="social">
                            <?php if($linkedin):?>
                                <div class="linkedin">
                                    <a href="<?php echo $linkedin;?>">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div><!--linkedin-->
                            <?php endif;
                            if($email):?>
                                <div class="email">
                                    <a href="mailto:<?php echo $email;?>">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div><!--linkedin-->
                            <?php endif;?>
                        </div><!--.social-->
                    <?php endif;?>
                    <?php $sidebar = get_field("sidebar");
                    if($sidebar):?>
                        <div class="list">
                            <?php echo $sidebar;?>
                        </div><!--.list-->
                    <?php endif;?>
                </aside><!--.col-1-->
                <section class="col-2">
                    <div class="copy">
                        <?php the_content();?>
                    </div><!--.copy-->
                </section><!--.col-2-->
            </div><!--.row-2-->
        </div><!--.wrapper-->
    </div><!--.row-2-->
</article><!-- #post-## -->
