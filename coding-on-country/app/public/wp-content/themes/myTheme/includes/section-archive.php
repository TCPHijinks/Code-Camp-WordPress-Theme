<?php 
    $default_thumbnail = 'http://coding-on-country.local/wp-content/uploads/2020/03/56211322-seamless-concrete-texture-gray-background.jpg'; 
    $words_per_min = 200;
?>




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
        'posts_per_page'=>-1 // Ignore page limit & get all.
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
                    $imageid = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-small' );
                    $thumbnail_url = $imageid['0'];
                } else {
                    // Default thumbnail.
                    $thumbnail_url = $default_thumbnail;
                }?>


                <div class="col-md-4">
                <div class="card mb-4 box-shadow">                    
                <!-- Card Image -->
                
                <div class="hover hover-2 text-white rounded">
                <img class="card-img-top" src="<?php echo $thumbnail_url ?>" alt="<?php the_title();?>">
                <div class="hover-overlay"></div>
                    <div class="hover-2-content px-5 py-4">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
                        <p class="hover-2-description text-uppercase mb-0">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit.</p>
                    </div>
                </div>
                
              
                

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

                    <?php 
                        $postcontent = get_post_field( 'post_content', $post->ID );
                        $wordcount = str_word_count( strip_tags( $postcontent ) );
                        
                        $readtime = round( $wordcount / $words_per_min ); 
                    ?>
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
                    $imageid = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-small' );
                    $thumbnail_url = $imageid['0'];
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
                    <?php 
                        $postcontent = get_post_field( 'post_content', $post->ID );
                        $wordcount = str_word_count( strip_tags( $postcontent ) );
                        
                        $readtime = round( $wordcount / $words_per_min ); 
                    ?>
                    
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









