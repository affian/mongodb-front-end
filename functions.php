<?php

// This function takes the details of a $listing and creates a row in a table with that information
function drawLine($listing) {
    echo '<tr>';
    echo '<td><a href="listing.php?id=' . $listing->id . '">' . $listing->id . '</a></td>';
    echo '<td>' . $listing->name . '</td>';
    echo '<td>' . $listing->neighbourhood_cleansed . '</td>';
    echo '<td>' . $listing->accommodates . '</td>';
    echo '<td>' . $listing->price . '</td>';
    echo '</tr>
    ';
}

// This function produces the HTML to construct a table with a row for each of the listings in the $listing object
function drawTable($listings) {
    echo '<div class="ds-table-container ds-col-8">
    <table class="ds-table ds-table-compact ds-striped ds-hover">
    ';
    echo '<tr><th>ID</th><th>Property Name</th><th>Location</th><th>Accommodates</th><th>Price</th></tr>
    ';
    // Iterate over the set of listings and create a row in the table
    foreach($listings as $listing) {
        // We call the drawLine function for each $listing in $listings
        drawLine($listing);
    }
    echo '</table></div>
    ';
}

// This function produces the HTML to construct a listing for a single property using data held in the $listing object
function renderListing($listing) {
    // The following steps demonstrate that the data coming back from the API calls to the database can be manipulated
    // within the front-end code to provide further insights and more detail to the end user.
    // We are not limited to using just the data that comes from our API calls.
    
    //$propertyType = ucfirst(strtolower($listing->property_type));
    
    echo '<div class="ds-row"><div class="ds-col-6ds-alert ds-success ds-mar-t-1">
    <p>This property is called ' . $listing->name . ' .</p>
    </div></div>';
   
    
}




?>
