<?php
	//根据url进入到配置方案和价格计算
	$url = $_SERVER['REQUEST_URI'];
	if(preg_match('/configuration/', $url))
	{
		include_once('configuration.php');
		exit;
	}
	if(preg_match('/calculate_price/', $url))
	{
		include_once('calculate_price.php');
		exit;
	}
?>
<?php
 get_header('meta');
 get_header();
 ?>
<div class="heading-top">
当前位置：<a href="<?php bloginfo('siteurl'); ?>/" title="返回首页">首页</a> > <?php the_title(); ?>
</div>
<!-- Main Container -->
<div id="body-wrapper">
 <!-- Content -->
    <div id="content" class="clearfix">
        <!-- Main Content -->
        <div class="main">
            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="divleft">
                <div class="single_list">
                    <span class="comment-count"><?php comments_popup_link ('0°','+1°','+%°'); ?></span><h2><?php the_title() ?></h2>
                    <div class="hr-line" style="margin-bottom: 8px;"></div>
                    <div class="post-entry">
                    <?php the_content() ?>

                    </div>
                </div>
            </div>
         <!-- /Post -->
                <?php comments_template('', true); ?>
            <?php endwhile; ?>
                <?php endif; ?>
        </div>
        <!-- /Main Content -->
<?php get_sidebar(); ?></div>

<?php get_footer(); ?>
