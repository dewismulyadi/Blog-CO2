<?php get_header(); ?>
    <!-- Content -->
    <div class="pt-3 container-fluid">
        <div class="rounded row row-1 bg-darkalt rounded-alt text-light ms-5 me-5">
            <div class="col-md-6">
                <div class="px-4 d-flex flex-column justify-content-center align-items-center h-100"> 
                    <h1 class="align-middle">Collection of Latest Articles and News</h1>
                    <p>We are here to collect news and articles from all national, international and trusted sources and are always updated in gathering news.</p>
                </div>
            </div>
            <div class="p-4 col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/image/slider1.jpg" alt="<?php bloginfo('name'); ?> " class="rounded img-fluid rounded-alt" >
            </div>
        </div>
     
        <div class="row">
            <div class="py-4 text-center col-12">
                <h1>Welcome to Collection of Latest</h1>
                <h1 class="text-yellow">Articles and News</h1>
                <h4><strong>“Updated and Reliable”</strong></h4>
            </div>
        </div>

        <div class="p-5 text-center rounded row row-1 bg-yellowalt rounded-alt text-dark ms-5 me-5">
            <div class="col-md-12">
                <p>We are here to collect news and articles from all national, international and trusted sources and are always updated in gathering news.<br><br>We accept submissions in the form of articles if the articles we receive are appropriate and appropriate to be posted on our website.</p>
            </div>
            <div class="mt-3 col-md-12">
                <button class="px-3 py-2 mx-5 rounded bg-darkalt rounded-alt text-yellow">
                    Know More
                </button>
                <button class="px-3 py-2 mx-5 mt-2 rounded bg-darkalt rounded-alt text-yellow">
                    Contact Us
                </button>
            </div>
        </div>
        <p class="text-center">For any other inquiries please contact <a href="#">support@codingcollective.com</a></p>

        <div class="row">
            <div class="py-4 text-center col-12">
                <h2><strong>Articles</strong></h2>
                <h4>Most Read :</h4>
            </div>
        </div>

        <div class="text-center row text">
            <?php
                $recent = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'posts_per_page' => '4',
                        'category_name' => 'Artikel',
                        'order'=> 'DESC',
                    )
                );
                if($recent->have_posts()) :
                    while ($recent->have_posts()):$recent->the_post();
                        if ($recent->current_post == 0) :
                            echo "<div style='clear:both'></div>";
                        else :
                            ?>
                            <div id="post-<?php the_ID(); ?>" class="p-0 text-white bg-darkalt col ms-4 rounded-alt" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded-top-alt">
                                <div class="p-3">
                                    <h4 itemprop="headline"><strong>
                                    <?php the_title( sprintf( '<a class="text-white card-text text-decoration-none" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></strong>
                                    </h4>
                                    <p class="p-3 card-text"><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </div>
                            <?php
					    endif;
				    endwhile;
				else :
					echo "<div class='content-error'><p>No posts available</p></div>";
				endif;
			wp_reset_query();
		    ?>
        </div>
        <div class="row">
            <div class="py-4 text-center col-12">
                <h2><strong>News</strong></h2>
                <h4>Most Read :</h4>
            </div>
        </div>
        <div class="mb-4 text-center row text">
        <?php
			$recent = new WP_Query(
				array(
					'post_type' => 'post',
					'posts_per_page' => '4',
					'order'=> 'DESC',
                    'category_name' => 'berita'
				)
			);
            if($recent->have_posts()) :
				while ($recent->have_posts()):$recent->the_post();
					if ($recent->current_post == 0) :
						echo "<div style='clear:both'></div>";
					else :
						?>
                    <div id="post-<?php the_ID(); ?>" class="p-0 bg-yellowalt text-dark col ms-4 rounded-alt" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded-top-alt">
                        <div class="p-3">
                            <h4 class="card-title" itemprop="headline"><strong><?php the_title( sprintf( '<a class="text-dark card-text text-decoration-none" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></strong></h4>
                            <p class="p-3 card-text"><?php echo get_the_excerpt(); ?></p>
                        </div>
                    </div>
                    <?php
					endif;
				endwhile;
			else :
				echo "<div class='content-error'><p>No posts available</p></div>";
			endif;
			wp_reset_query();
		    ?>
        </div>
</div>
<?php get_footer(); ?>

