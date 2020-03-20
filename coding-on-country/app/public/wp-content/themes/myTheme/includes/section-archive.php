<!-- Loop through all posts -->
<?php if( have_posts() ): 
    while( have_posts() ): the_post(); // If have post, while have, render post title.
?>

<div class="card mb-3">
<div class="card-body d-flex justify-content-center align-items-center">
    
<!-- Render post featured image (if any) -->
<?php if(has_post_thumbnail( )):?>
    <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title();?>"
    class="img-fluid mb-3 img-thumbnail">
<?php endif;?>

<!-- Render preview badges of posts. -->



<?php 
$args = array( 'post_type' => 'camps'); 
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

?>

<div class="col-md-4">
    <div class="card mb-4 box-shadow">
    <img class="card-img-top" src="<?php echo the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title();?>">
    <div class="card-body">
        <p class="card-text">
        <b><?php the_title(); // Render post title. ?></b>
        <?php the_excerpt() // Render an exerpt of the post's content.?>
        </p>
        <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
        
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href = '<?php the_permalink();?>';">View</button>
            
        </div>
        <?php $readtime = round( (prefix_wcount() % 200) / 60 ); // Calculate read time assuming 200 words a min. ?>
        <small class="text-muted"><?php echo $readtime ?> mins</small>
        </div>
    </div>
    </div>
</div>

<?php endwhile;?>

<section class="blog-content">
    <h3><?php the_title(); // Render post title. ?></h3>
    <?php the_excerpt() // Render an exerpt of the post's content.?>
    <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a> 
</section>
</div>    
</div>

<?php endwhile; else: endif; // End while loop?>