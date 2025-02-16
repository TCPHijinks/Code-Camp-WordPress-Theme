<?php get_header('secondary'); // Load default header by calling WP func w/o params ?> 

<div class="page-wrap"> 
    <a name="top"></a>

    <div id="cover-section">

        <div id="cover-text">

            <div id="cover-int-text"> 
                <h1>Coding on Country</h1>
                
            <p>Where Country meets Code. </p>
                
            </div>

        </div>
    </div>





    <div class="container">  
        
        <div class= "single-page-format" id="home">
            <?php
                $page_data = get_page(0);                    
                    
                
                // -------> Don't need posts showing up here <------- //

                // $content = apply_filters('the_content', $page_data->post_content); 
                // $title = $page_data->post_title; 
                // echo "<h1 style='text-align:center' id=\"$title\"><br><br>$title</h1>"; 
                // echo $content; ?>


    
            
                
            <!-- Render past & upcoming camp badges -->
        
            <?php get_template_part('includes/section','archive'); ?>   <!-- Loop that gens content -->


        
            
            
            <!-- Load all normal pages following the camps and code quets -->
            <?php
            $pages = get_pages(); 
                    foreach ($pages as $page_data) {
                        ?>

                    <div class= "single-page-format">

                        <?php
                        $content = apply_filters('the_content', $page_data->post_content); 
                        $title = $page_data->post_title; 
                        echo "<h1 style='text-align:center' id=\"$title\"><br><br>$title</h1>"; 
                        echo $content; ?>

                    </div>
                    <?php }; ?>
        
            





            
           
        </div>




                        <!-- Load all admin blog posts -->
            <div class="row">
                <div class="col-xl-12 adminPosts">   
                
                        <?php 
                        $adminPosts = get_posts();                
                        foreach ($adminPosts as $singleAPost){                       
                    
                        ?>

                            <div class= "adminPost">
                                <a href="<?php echo get_permalink($singleAPost); ?>">
                                <?php echo get_the_post_thumbnail($singleAPost, 'full' , array( 'class' => 'postThumb' ) ); ?>
                                
                                    <div class="aPostText">
                                    <!-- Render Homepage title -->
                                        <h4>
                                        <?php   echo $singleAPost->post_title;  ?></h4>

                                        <!-- Render Homepage content -->
                                        <p><?php echo $singleAPost->post_content;?></p>
                                    </div>
                                    
                                </a>
                            </div>
                            
                        <?php } ?> 
                </div> <!-- end adminPost div -->
                     
            </div><!-- row -->
            
    
    
    
    
    </div> <!-- END CONTAINER --> 
    
    


  




</div> <!-- END WRAPPER -->

      




        


<?php get_footer(); // Load footer by calling WP func ?> 