<?php get_header(); ?>

<?php 
$args = array(
    'post_type' => 'post',
    'post_per_page' => 3,

);

$blogposts= new WP_Query($args);

while($blogposts->have_posts()){
    $blogposts->the_post();
 ?>

 <h2><?php the_title(); ?></h2>
 Posted by <?php the_author(); ?>
 <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"/>
 <?php the_content();?>
 <div>
 </div>
 <div class="comment-section">
 <?php comment_form();
 
 $comments_num = get_comments_number();
 if($comments_num != 0){
 ?>
 
 <div class="comments">
     <h3>What other say</h3>
     <ol class="all_comments">
         <?php
         $comments = get_comments(array(
         'post_Id'=>$post->ID,
         'status' =>'approve'
        ));
        wp_list_comments(array(
            'per_page'=>15,
        ),$comments);
        ?>
     </ol>
 </div>
<?php } ?>

</div>
<?php }?>




<?php get_footer(); ?>