<?php get_header(); ?>
    <!-- Content -->
    <div class="container-fluid">
        <div class="mt-5 rounded row row-1 bg-darkalt rounded-alt text-light ms-5 me-5">
            <div class="pt-5 col-md-6">
                <div class="px-4 d-flex flex-column justify-content-center align-items-center h-100"> 
                    <h1 class="align-middle">Collection of Latest Articles and News</h1>
                    <p>We are here to collect news and articles from all national, international and trusted sources and are always updated in gathering news.</p>
                </div>
            </div>
            <div class="p-4 my-2 col-md-6">
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
            <div class="mx-auto col-md-12">
            <a href="http://localhost/wordpress/profile/" class="text-dark text-decoration-none">
                <button class="px-3 py-2 mx-5 rounded text-decoration-nonet bg-darkalt rounded-alt text-yellow"><strong>Know More</strong></button></a>
            <a href="http://localhost/wordpress/" class="text-dark text-decoration-none">
                <button href="http://localhost/wordpress/comment/"class="px-3 py-2 mx-5 rounded text-decoration-nonet bg-darkalt rounded-alt text-yellow"><strong>Contact Us</strong></button></a>
            </div>
        </div>
        <p class="text-center">For any other inquiries please contact <a class="text-decoration-none" href="#">support@codingcollective.com</a></p>

        <div class="row">
            <div class="py-4 text-center col-12">
                <a href="http://localhost/wordpress/category/artikel/" class="text-dark text-decoration-none"><h2><strong>Articles</strong></h2></a>
                <h4>Most Read :</h4>
            </div>
        </div>

        <div class="mx-auto mb-5 text-center row justify-content-center">
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
                            <div id="post-<?php the_ID(); ?>" class="p-0 mx-auto mb-4 text-white col-md-3 col-sm-12 bg-darkalt rounded-alt" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded-top-alt">
                                <div class="p-3">
                                    <h4 itemprop="headline" class="card-title"><strong>
                                    <?php the_title( sprintf( '<a class="text-white text-decoration-none" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></strong>
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
                <a href="http://localhost/wordpress/category/berita/" class="text-dark text-decoration-none"><h2><strong>News</strong></h2></a>
                <h4>Most Read :</h4>
            </div>
        </div>
        <div class="mx-auto mb-5 text-center row justify-content-center">
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
                    <div id="post-<?php the_ID(); ?>" class="p-0 mx-auto mb-4 col-md-3 col-sm-12 bg-yellowalt text-dark rounded-alt"itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded-top-alt">
                        <div class="p-3">
                            <h4 class="card-title" itemprop="headline"><strong><?php the_title( sprintf( '<a class="text-dark text-decoration-none" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></strong></h4>
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

