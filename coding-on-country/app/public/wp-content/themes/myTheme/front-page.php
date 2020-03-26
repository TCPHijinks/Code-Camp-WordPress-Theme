<?php get_header(); // Load default header by calling WP func w/o params ?> 

<div class="page-wrap">  
    <div class="container">  

        <div class="row">
            <div class="col-xl-12">   

                <!-- Render Homepage title -->
                <h1><?php the_title();?></h1></h1>

                <!-- Render Homepage content -->
                <?php get_template_part('includes/section','content'); ?>  

                

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