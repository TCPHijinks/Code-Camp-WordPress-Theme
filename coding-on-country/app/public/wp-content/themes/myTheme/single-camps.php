
<!-- THIS TEMPLATE LOADS THE POST CONTENT -->
<?php get_header(); 
if(get_post_meta($post->ID, 'campdatetime', true)){  
   $campdate = (double)get_field('campdatetime',$post->ID);
   if( (double)$campdate >= (double)date("YmdHis") ) {

    // Calculate time until date. 
    $campyear = substr($campdate,0, 4);
    $campmonth = substr($campdate,4, 2);
    $campday = substr($campdate,6, 2);
    $camphour = substr($campdate,8, 2);
    $campminute = substr($campdate,10, 2);


    // Declare and define two dates 
    $date1 = strtotime((string)date("Y-m-d H:i:s"));  
    $date2 = strtotime( $campyear.'-'.$campmonth.'-'.$campday.' '.$camphour.':'.$campminute.':00');  
    
    // Formulate the Difference between two dates 
    $diff = abs($date2 - $date1);  

    
    // To get the year divide the resultant date into 
    // total seconds in a year (365*60*60*24) 
    $years = floor($diff / (365*60*60*24));  
    
    
    // To get the month, subtract it with years and 
    // divide the resultant date into 
    // total seconds in a month (30*60*60*24) 
    $months = floor(($diff - $years * 365*60*60*24) 
                                / (30*60*60*24));  
    
    
    // To get the day, subtract it with years and  
    // months and divide the resultant date into 
    // total seconds in a days (60*60*24) 
    $days = floor(($diff - $years * 365*60*60*24 -  
                $months*30*60*60*24)/ (60*60*24)); 
    
    
    // To get the hour, subtract it with years,  
    // months & seconds and divide the resultant 
    // date into total seconds in a hours (60*60) 
    $hours = floor(($diff - $years * 365*60*60*24  
        - $months*30*60*60*24 - $days*60*60*24) 
                                    / (60*60));  
    
    
    // To get the minutes, subtract it with years, 
    // months, seconds and hours and divide the  
    // resultant date into total seconds i.e. 60 
    $minutes = floor(($diff - $years * 365*60*60*24  
            - $months*30*60*60*24 - $days*60*60*24  
                            - $hours*60*60)/ 60);  
    
    
    // To get the minutes, subtract it with years, 
    // months, seconds, hours and minutes  
    $seconds = floor(($diff - $years * 365*60*60*24  
            - $months*30*60*60*24 - $days*60*60*24 
                    - $hours*60*60 - $minutes*60));  
    
    $remaining = '';
    
    if((double)$years > 0) { ($remaining .= $years.' years, '); }
    if((double)$months > 0) { ($remaining .= $months.' months, '); }
    if((double)$days > 0) { ($remaining .= $days.' days, '); }
    if((double)$hours > 0) { ($remaining .= $hours.' hours, '); }
    if((double)$minutes > 0) { ($remaining .= $minutes.' minutes.'); }
   }
}



?> 




<div class="page-wrap">
    <div class="container">  

        <h1 style="text-align:center"><?php the_title();?></h1>

        <?php if(has_post_thumbnail( )):?>           
            <!-- Load large image for post (see functions.php) -->
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title();?>"
            class="img-fluid mb-3 img-thumbnail">
        <?php endif;?>

        
        
        <section class="row">
            <!-- Render future camp info if future camp -->
            <?php 
            if( (double)$campdate >= (double)date("YmdHis") ): ?>
                <div class="col-8">
                <?php 
                if( have_posts() ): 
                    while( have_posts() ): the_post(); // If have post, while have, render post
                        the_content(); // Render the content.
                    endwhile;
                    wp_link_pages();
                endif; ?>
               
                </div>

                <div class="col-4">
                    <?php
                        $location = get_field('camplocation');
                        if( $location ): ?>
                            <div class="acf-map" data-zoom="0">
                                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                            </div>    
                    <?php endif?>                     
                    <?php 
                        echo $campminute.":".$camphour." - ".$campday."/".$campmonth."/".$campyear; ?>
                        <br/> <?php
                        echo "Starts in <i>".$remaining."</i>"; 
                    ?>   
                </div>
                <?php endif; ?>
                 <!-- Render past camp info if past camp -->
                 <?php if( (double)$campdate < (double)date("YmdHis") ): ?>
                    <div class="col-12">
                        <?php 
                        if( have_posts() ): 
                            while( have_posts() ): the_post(); // If have post, while have, render post
                                the_content(); // Render the content.
                            endwhile;
                            wp_link_pages();
                        endif;?>               
                    </div>
                <?php endif; ?>               
        </section>

                  
   
 <!-- Show navigation buttons for multi-page posts. -->

        <!-- Blog pages links show if blog contains page breaks/many pages -->
        <h5> <?php wp_link_pages( ); ?> </h5>
        
        <!-- *********** -->
        <!-- Default commenting system. Needs styling. -->
        <?php comments_template( ) ?>
 
    

    </div>

   
</div>
      
<style type="text/css">
/* Google Maps Styling */
.acf-map {
    width: 100%;
    height: 400px;
    border: #ccc solid 1px;
    margin: 20px 0;
}

// Fixes potential theme css conflict.
.acf-map img {
   max-width: inherit !important;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlnbjtq5JcUKwC3ptBdc9PT6H_YxOU35A"></script>
<script type="text/javascript">
(function( $ ) {

/**
 * initMap
 *
 * Renders a Google Map onto the selected jQuery element
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
        zoom        : $el.data('zoom') || 16,
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
        initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
}

/**
 * initMarker
 *
 * Creates a marker for the given jQuery element and map.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
        lat: parseFloat( lat ),
        lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
        position : latLng,
        map: map
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
        });
    }
}

/**
 * centerMap
 *
 * Centers the map showing all markers in view.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
        bounds.extend({
            lat: marker.position.lat(),
            lng: marker.position.lng()
        });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
        map.setCenter( bounds.getCenter() );

    // Case: Multiple markers.
    } else{
        map.fitBounds( bounds );
    }
}

// Render maps on page load.
$(document).ready(function(){
    $('.acf-map').each(function(){
        var map = initMap( $(this) );
    });
});

})(jQuery);
</script>



<?php get_footer(); // Load footer by calling WP func ?> 