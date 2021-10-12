<div id="primary" class="sidebar col-4 pe-4">
<?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>  
        <?php 
        $recent = new WP_Query(
            array(
                'post_type' => 'post',
                'posts_per_page' => '4',
                'category_name' => 'Artikel',
                'order'=> 'DESC',
                )
        );?>
		<div id="post-<?php the_ID(); ?>" class="m-4 widget-article" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
			<h4 class="m-4 text-center">Popular<span class="text-yellow"> article</span></h4>
            <?php if($recent->have_posts()) :
                    while ($recent->have_posts()):$recent->the_post();?> 
			<div class="my-2 row">
				<div class="col-7">
					<h6><a class="text-dark text-decoration-none" href="<?php the_permalink(); ?>"> <?php the_title();?></a></h6>
				</div>
				<div class="col-5">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
				</div>
			</div>
            <?php endwhile; ?>
            <?php endif; ?>
            <h6 class="m-4 text-center"><a class="text-dark text-decoration-none" href="http://localhost/wordpress/category/artikel/">See more...</a></h6>
        </div>

        <?php 
        $recent = new WP_Query(
            array(
                'post_type' => 'post',
                'posts_per_page' => '4',
                'category_name' => 'Berita',
                'order'=> 'DESC',
                )
        );?>
		<div id="post-<?php the_ID(); ?>" class="m-4 widget-article" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
			<h4 class="m-4 text-center">Popular<span class="text-yellow"> Berita</span></h4>
            <?php if($recent->have_posts()) :
                    while ($recent->have_posts()):$recent->the_post();?> 
			<div class="my-2 row">
				<div class="col-7">
					<h6><a class="text-dark text-decoration-none" href="<?php the_permalink(); ?>"> <?php the_title();?></a></h6>
				</div>
				<div class="col-5">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
				</div>
			</div>
            <?php endwhile; ?>
            <?php endif; ?>
            <h6 class="m-4 text-center"><a class="text-dark text-decoration-none" href="http://localhost/wordpress/category/berita/">See more...</a></h6>
        </div>
        <?php endif; ?>
</div>