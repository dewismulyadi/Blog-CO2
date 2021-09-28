<div id="primary" class="sidebar">
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
        );
        ?>                 
        <aside id="post-<?php the_ID(); ?>" class="widget-article" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="article-in-right">
                <h4>Popular <span class="text-yellow">Articles</span></h4>
                <?php while($recent->have_posts()) : $recent->the_post(); //standart wordpress loop ?>
                <div class="article-in-right-item">
                    <div class="article-in-right-popular">
                        <div class="article-in-right-popular-detail">
                            <h6><?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                            </h6>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                        <div class="article-in-right-popular-img">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>">
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </aside>
        <?php 
        $recent = new WP_Query(
            array(
                'post_type' => 'post',
                'posts_per_page' => '4',
                'category_name' => 'Berita',
                'order'=> 'DESC',
                )
        );
        ?>                 
        <aside id="post-<?php the_ID(); ?>" class="widget-article" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="article-in-right">
                <h4>Popular <span class="text-yellow">News</span></h4>
                <?php while($recent->have_posts()) : $recent->the_post(); //standart wordpress loop ?>
                <div class="article-in-right-item">
                    <div class="article-in-right-popular">
                        <div class="article-in-right-popular-detail">
                            <h6><?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                            </h6>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                        <div class="article-in-right-popular-img">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>">
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </aside>
   <?php endif; ?>
</div>