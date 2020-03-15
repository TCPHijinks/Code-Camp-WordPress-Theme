<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    
    <?php wp_head();?>
</head>
<body> <!-- closing inside footer.php --> 

<div class="header">
    <div class="container">
        <!-- Location for top navigation bar -->
        <?php wp_nav_menu( 
                array(
                    // 'menu' => 'Top Bar' // Force select the menu.
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-bar',
                    )
                );
            ?>
    </div>    
</div> 

