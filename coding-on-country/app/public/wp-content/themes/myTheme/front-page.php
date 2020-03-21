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
        <h1><marquee>CARS 4 SALE!! ?</marquee></h1>
        <?php get_template_part('includes/section','archive'); ?>   <!-- Loop that gens content -->


        <!-- Render a search bar -->
        <?php get_search_form(); ?>

    </div>   
</div>

      

<?php get_footer(); // Load footer by calling WP func ?> 