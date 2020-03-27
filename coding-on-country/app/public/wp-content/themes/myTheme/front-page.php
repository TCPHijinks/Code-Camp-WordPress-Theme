<?php get_header(); // Load default header by calling WP func w/o params ?> 

<div class="page-wrap">  
    <div class="container">  

        <div class="row">
            <div class="col-xl-12 adminPosts">   

                <?php 

                    $adminPosts = get_posts();
                    foreach ($adminPosts as $singleAPost){
                
                
                ?>

                <div class= "adminPost">
                <a href="<?php echo get_permalink($singleAPost); ?>">
                <?php echo get_the_post_thumbnail($singleAPost,'thumbnail', array( 'class' => 'postThumb' ) ); ?>
                
                    <div class="aPostText">
                    <!-- Render Homepage title -->
                        <h4>
                        <?php   echo $singleAPost->post_title;  ?></h4>

                        <!-- Render Homepage content -->
                        <p><?php echo $singleAPost->post_content;?></p>
                    </div>
                    </a>
                </div> <!-- end adminPost div -->


                <?php } ?>  

                

            </div>
        </div>
          
            
        <!-- Render past & upcoming camp badges -->
       
        <?php get_template_part('includes/section','archive'); ?>   <!-- Loop that gens content -->


        <!-- Render a search bar -->
        <?php get_search_form(); ?>
        
        
        
        <?php
        $pages = get_pages(); 
                foreach ($pages as $page_data) {
                    ?>

                        <div class= "single-page-format">

                    <?php
                    $content = apply_filters('the_content', $page_data->post_content); 
                    $title = $page_data->post_title; 
                    echo "<h1 id=\"$title\"><br><br>$title</h1>"; 
                    echo $content; ?>

                </div>
                    <?php

                }
                
                
                ?>

    </div>   
</div>

      

<?php get_footer(); // Load footer by calling WP func ?> 