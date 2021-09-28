<?php get_header(); ?>
    <div class="archive">
        <div class="news-cards">
        <?php
            if(have_posts() ) :
				while (have_posts()): the_post() ;
						?>
                            <article id="post-<?php the_ID(); ?>" class="news-card" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
                            <div class="entry-thumbnail">
                                <a class="thumb-link" href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>"/>
                                </a>
                            </div>
                            <div class="news-card-content">
                                <h2 class="entry-title" itemprop="headline">
                                    <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                                </h2>
                                <p><?php echo get_the_excerpt(); ?></p></div>
                            <div class='clear'></div>
                        </article>
                        <?php
				endwhile;
				else :
					echo "<div class='content-error'><p>No posts available</p></div>";
				endif;?>
        </div>
        </div>
        <?php while(have_posts()) : the_post(); //standart wordpress loop ?>
        <div class="list-news">
            <ul>
                <li>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium');?></a>
                    <h3><a href="<?php the_permalink(); ?>"> <?php the_title();?></a></h3>
                    <p><?php echo get_the_excerpt(); ?></p>

                </li>
            </ul>
        </div>
        <?php endwhile ?>
    </div>
<?php get_footer(); ?>