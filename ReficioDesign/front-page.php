<?php get_header(); ?>
    <div id="banner">
        <h1>REFICIO DESIGN</h1>
        <h3>Ricrea il tuo mobile da zero</h3>
    </div>

    <main>
        <a href="<?php echo site_url('/Blog') ?>">
            <h2 class="section-heading">All Blog</h2>
        </a>

        <section>

        <?php  
        $args = array(
            'post-type' =>'post',
            'post_per_page' => '3'
        );

        $blogposts = new WP_Query($args);

        while($blogposts->have_posts()){
            $blogposts->the_post();
        
        ?>

            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo the_post_thumbnail_url(get_the_ID());?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                       <?php the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>

            <?php }
             wp_reset_query(); ?>

        </section>

        <a href="blogslist.html">
        	<h2 class="section-heading">All Projects</h2>
    	</a>

        <section>
            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        <img src="img/3.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="blogpost.html">
                        <h3>The Project Title Here</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, ullam facilis consequuntur eligendi sit accusamus tempora
                        cum distinctio pariatur ipsa quod, odit dolorum non vero recusandae? Corporis voluptatem optio nulla.
                    </p>
                    <a href="blogpost.html" class="btn-readmore">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        <img src="img/4.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="blogpost.html">
                        <h3>The Project Title Here</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, ullam facilis consequuntur eligendi sit accusamus tempora
                        cum distinctio pariatur ipsa quod, odit dolorum non vero recusandae? Corporis voluptatem optio nulla.
                    </p>
                    <a href="blogpost.html" class="btn-readmore">Read more</a>
                </div>
            </div>
        </section>


    <?php get_footer() ?>