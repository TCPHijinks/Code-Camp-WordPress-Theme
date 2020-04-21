<?php 
    $default_thumbnail = site_url() . '/wp-content/themes/myTheme/images/default.jpg'; 
    $words_per_min = 200;
?>




<!-- ********************************** -->
<!--      Render Future Camp Badges     -->
<!-- ********************************** -->
<div class= "camp-section" id = "upcoming-camps">
    
    <h2 class="d-flex justify-content-center"><br><br><br>Upcoming Camps<br><br><br></h2>
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
                        
                $campdate = get_field('campdatetime');
                // Render camp badge if camp's datetime is after now.
                if( (double)$campdate >= (double)date("YmdHis")):
                    
                    // Get featured thumbnail or set to default if none.
                    $thumbnail_url = '';
                    if( has_post_thumbnail() ){                
                        $imageid = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-small' );
                        $thumbnail_url = $imageid['0'];
                    } else {
                        // Default thumbnail.
                        $thumbnail_url = $default_thumbnail;
                    }
                    
                    // Calculate time until date. 
                    $campyear = substr($campdate,0, 4);
                    $campmonth = substr($campdate,4, 2);
                    $campday = substr($campdate,6, 2);
                    $camphour = substr($campdate,8, 2);
                    $campminute = substr($campdate,10, 2);


                    // Declare and define two dates 
                    $date1 = strtotime((string)date("Y-m-d H:i:s"));  
                    $date2 = strtotime( $campyear.'-'.$campmonth.'-'.$campday.' '.$camphour.':'.$campminute.':00');  
                    
                    // Formulate the Difference between two dates 
                    $diff = abs($date2 - $date1);  
                
                    
                    // To get the year divide the resultant date into 
                    // total seconds in a year (365*60*60*24) 
                    $years = floor($diff / (365*60*60*24));  
                    
                    
                    // To get the month, subtract it with years and 
                    // divide the resultant date into 
                    // total seconds in a month (30*60*60*24) 
                    $months = floor(($diff - $years * 365*60*60*24) 
                                                / (30*60*60*24));  
                    
                    
                    // To get the day, subtract it with years and  
                    // months and divide the resultant date into 
                    // total seconds in a days (60*60*24) 
                    $days = floor(($diff - $years * 365*60*60*24 -  
                                $months*30*60*60*24)/ (60*60*24)); 
                    
                    
                    // To get the hour, subtract it with years,  
                    // months & seconds and divide the resultant 
                    // date into total seconds in a hours (60*60) 
                    $hours = floor(($diff - $years * 365*60*60*24  
                        - $months*30*60*60*24 - $days*60*60*24) 
                                                    / (60*60));  
                    
                    
                    // To get the minutes, subtract it with years, 
                    // months, seconds and hours and divide the  
                    // resultant date into total seconds i.e. 60 
                    $minutes = floor(($diff - $years * 365*60*60*24  
                            - $months*30*60*60*24 - $days*60*60*24  
                                            - $hours*60*60)/ 60);  
                    
                    
                    // To get the minutes, subtract it with years, 
                    // months, seconds, hours and minutes  
                    $seconds = floor(($diff - $years * 365*60*60*24  
                            - $months*30*60*60*24 - $days*60*60*24 
                                    - $hours*60*60 - $minutes*60));  
                    
                    $remaining = '';
                    
                    if((double)$years > 0) { ($remaining .= $years.' years, '); }
                    if((double)$months > 0) { ($remaining .= $months.' months, '); }
                    if((double)$days > 0) { ($remaining .= $days.' days, '); }
                    if((double)$hours > 0) { ($remaining .= $hours.' hours, '); }
                    if((double)$minutes > 0) { ($remaining .= $minutes.' minutes.'); }
                    ?>


                    <div class="col-md-4">
                    <div class="card mb-4 box-shadow">                    
                    <!-- Card Image -->                
                    <img class="card-img-top" src="<?php echo $thumbnail_url ?>" alt="<?php the_title();?>">
                        
                
                    

                    <!-- Card Contents -->
                    <div class="card-body">
                        <p class="card-text">
                        <b><?php the_title(); ?></b>      
                        <i> <?php echo $remaining; ?></i>           
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

</div> <!-- end camp section -->
<!-- ********************************** -->
<!-- ********************************** -->





<br/><br/><br/><br/>





<!-- ********************************** -->
<!--      Render Future (PAST?) Camp Badges     -->
<!-- ********************************** -->

<div class= "camp-section" id="past-camps">
    <h2 class="d-flex justify-content-center"><br><br><br>Past Camps<br><br><br></h2>
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

</div> <!-- end camp section -->
<!-- ********************************** -->
<!-- ********************************** -->









