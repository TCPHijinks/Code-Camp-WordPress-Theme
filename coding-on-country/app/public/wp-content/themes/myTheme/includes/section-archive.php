<!-- Loop through all posts -->
<?php if( have_posts() ): 
    while( have_posts() ): the_post(); // If have post, while have, render post title.
?>


    <!-- ********************************** -->
    <!--    Render Future Camp Badges       -->
    <!-- ********************************** -->
    <h2 class="d-flex justify-content-center">Upcoming Camps</h2>
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

    if(get_post_meta($post->ID, 'campdatetime', true)): 
        $res = preg_replace("/[^0-9]/", "", get_field('campdatetime') );
    
        if( (double)$res >= (double)date("YmdHis")): ?>       
            <div class="col-md-6">
            <div class="card mb-4 box-shadow">
            
            
            <!-- Card Image -->
            <img class="card-img-top" src="<?php 
            if(has_post_thumbnail( )) 
                {
                    // Show featured thumbnail.
                    echo the_post_thumbnail_url('blog-small');
                } else {
                    // Default thumbnail.
                    echo 'http://coding-on-country.local/wp-content/uploads/2020/03/56211322-seamless-concrete-texture-gray-background.jpg';
                }?>" 
            
            alt="<?php the_title();?>">


            <!-- Card Contents -->
            <div class="card-body">
                <p class="card-text">
                <b><?php the_title(); ?></b>
                <?php the_excerpt() ?>
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
    <?php endif; endif; ?>
    <?php endwhile;?>
    </div>   
    </div>
    </section>          


    



    <section class="container">
    <!-- ********************************** -->
    <!--      Render Past Camp Badges       -->
    <!-- ********************************** -->
    <h2 class="d-flex justify-content-center">Past Camps</h2>
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

    if(get_post_meta($post->ID, 'campdatetime', true)): 
        $res = preg_replace("/[^0-9]/", "", get_field('campdatetime') );
    
        if( (double)$res < (double)date("YmdHis")): ?>       
            <div class="col-md-6">
            <div class="card mb-4 box-shadow">
            
            
            <!-- Card Image -->
            <img class="card-img-top" src="<?php 
            if(has_post_thumbnail( )) 
                {
                    // Show featured thumbnail.
                    echo the_post_thumbnail_url('blog-small');
                } else {
                    // Default thumbnail.
                    echo 'http://coding-on-country.local/wp-content/uploads/2020/03/56211322-seamless-concrete-texture-gray-background.jpg';
                }?>" 
            
            alt="<?php the_title();?>">


            <!-- Card Contents -->
            <div class="card-body">
                <p class="card-text">
                <b><?php the_title(); ?></b>
                <?php the_excerpt() ?>
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
    <?php endif; endif; ?>
    <?php endwhile;?>
    </div>   
    </div>

<?php endwhile; else: endif; // End while loop?>
