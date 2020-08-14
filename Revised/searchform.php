<form action="/" method="get">

   
    
    <input type="hidden" name="dd" value="4">
    
    <!-- Search input that Requires something be entered. -->
    <div id="search-section">

        <input type="text" name="s" id="search" placeholder="Search..."
            value="<?php the_search_query();?>" required>

        <button type="submit" id="menu-search-btn"></button>

    </div>
</form>