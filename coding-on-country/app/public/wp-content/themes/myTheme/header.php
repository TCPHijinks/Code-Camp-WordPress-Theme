<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    
    <?php wp_head();?>
</head>
<body> <!-- closing inside footer.php --> 



<nav class="navbar navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav mr-auto">
        <?php wp_nav_menu( 
            array(
                // 'menu' => 'Top Bar' // Force select the menu.
                'theme_location' => 'top-menu',
                'menu_class' => 'decnav',                
                'depth' => 4,
                'walker' => new wp_bootstrap_navwalker()
                )
            );            
        ?>    
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </nav>