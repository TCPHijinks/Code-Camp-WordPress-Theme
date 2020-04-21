<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding on Country</title>
    
    
    <?php wp_head();?>

    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body> <!-- closing inside footer.php --> 



<nav class="navbar navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#home"><?php bloginfo('name')?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
       <a href="#home">Home</a>
       <a href="#code-quests">Code Quests</a>
        <a href="#upcoming-camps">Upcoming Camps</a>
        <a href="#past-camps">Past Camps</a>
        <?php
        $pages = get_pages(); 
                foreach ($pages as $page_data) {
                  
                    $content = apply_filters('the_content', $page_data->post_content); 
                    $title = $page_data->post_title; 
                    echo "<a href=\"#$title\">$title</a>"; 
                    
                }
                
                
                ?> 
                 <!-- Render a search bar -->
        <?php get_search_form(); ?>  
        
        <!-- <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form> -->
      </div>
    </nav>