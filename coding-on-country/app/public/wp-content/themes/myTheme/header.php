<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    
    <?php wp_head();?>
</head>
<body> <!-- closing inside footer.php --> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse justify-content-md-center collapse" id="navbarsExample08" style="">
        <ul class="navbar-nav">
        <?php wp_nav_menu( 
                array(
                    // 'menu' => 'Top Bar' // Force select the menu.
                    'theme_location' => 'top-menu',
                    'menu_class' => 'nav',
                    'depth' => 4,
                    'walker' => new wp_bootstrap_navwalker()
                    )
                );
               
            ?>          
        </ul>
      </div>
    </nav>