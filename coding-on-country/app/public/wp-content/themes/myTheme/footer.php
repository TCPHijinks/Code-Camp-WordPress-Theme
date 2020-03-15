<div class="footer">
    <div class="container">
        <!-- Location for top navigation bar -->
        <?php wp_nav_menu( 
                array(
                    // 'menu' => 'Top Bar' // Force select the menu.
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-bar',
                    )
                );
            ?>
    </div>    
</div> 

<?php wp_footer();?>
</body>
</html>