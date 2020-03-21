<?php $default_thumbnail = 'http://coding-on-country.local/wp-content/uploads/2020/03/56211322-seamless-concrete-texture-gray-background.jpg'; ?>




<!-- ********************************** -->
<!--      Render Future Camp Badges     -->
<!-- ********************************** -->
<h2 class="d-flex justify-content-center">Upcoming Camps</h2>
<div class="row">   
    <!-- Render preview badges of past camp custom posts. -->
    <?php   
    $args = array( 
        'post_type' => 'camps',
        'orderby' => 'ASC',
        'posts_per_page'=>-1
    ); 
    $query = new WP_Query( $args );
    $posts = $query->posts;

    foreach($posts as $post):
        // Continue if admin set a camp date (prevent error).
        if(get_post_meta($post->ID, 'campdatetime', true)):  
                       
            // Render camp badge if camp's datetime is after now.
            if( (double)get_field('campdatetime') >= (double)date("YmdHis")):
                
                // Get featured thumbnail or set to default if none.
                $thumbnail_url = '';
                if( has_post_thumbnail() ){                
                    $thumbnail_url = the_post_thumbnail_url('blog-small');
                } else {
                    // Default thumbnail.
                    $thumbnail_url = $default_thumbnail;
                }?>


                <div class="col-md-4">
                <div class="card mb-4 box-shadow">                    
                <!-- Card Image -->
                <img class="card-img-top" src="<?php echo $thumbnail_url ?>" 
                
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
    <?php endforeach; ?>       
</div>
<!-- ********************************** -->
<!-- ********************************** -->





<br/><br/><br/><br/>





<!-- ********************************** -->
<!--      Render Future Camp Badges     -->
<!-- ********************************** -->
<h2 class="d-flex justify-content-center">Past Camps</h2>
<div class="row">   
    <!-- Render preview badges of past camp custom posts. -->
    <?php 
    $args = array( 
        'post_type' => 'camps',
        'orderby' => 'ASC',
        'posts_per_page'=>-1
    ); 
    $query = new WP_Query( $args );
    $posts = $query->posts;

    foreach($posts as $post):
        // Continue if admin set a camp date (prevent error).
        if(get_post_meta($post->ID, 'campdatetime', true)):  
                       
            // Render camp badge if camp's datetime is after now.
            if( (double)get_field('campdatetime') < (double)date("YmdHis")):
                
                // Get featured thumbnail or set to default if none.
                $thumbnail_url = '';
                if( has_post_thumbnail() ){                
                    $thumbnail_url = the_post_thumbnail_url('blog-small');
                } else {
                    // Default thumbnail.
                    $thumbnail_url = $default_thumbnail;
                }?>


                <div class="col-md-4">
                <div class="card mb-4 box-shadow">                    
                <!-- Card Image -->
                <img class="card-img-top" src="<?php echo $thumbnail_url ?>" 
                
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
    <?php endforeach; ?>       
</div>
<!-- ********************************** -->
<!-- ********************************** -->









