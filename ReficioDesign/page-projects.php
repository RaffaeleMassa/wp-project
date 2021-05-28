<?php get_header(); ?>
    <div id="banner">
        <h1>REFICIO DESIGN</h1>
        <h3>Ricrea il tuo mobile da zero</h3>
    </div>

    <main>

        <section>

        <?php  

        while(have_posts()){
            the_post();
        
        ?>

            <?php }
             wp_reset_query(); ?>

        </section>

        
        	<h2 class="section-heading">All Projects</h2>
    

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

       <div class="pagination">
           <?php echo paginate_links();?>
       </div>
       <?php get_footer() ?>