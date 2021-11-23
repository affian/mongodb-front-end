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

    //###############################
    /*
    $description = $listing->description;
    $neighborhood = $listing->neighborhood_overview;
    $propertyType = $listing->property_type;
    $bathrooms = $listing->bathrooms_text;
    $bedrooms = $listing->bedrooms;
    $beds = $listing->beds;
    $price = $listing->price;
    //host
    $hostName = $listing->host_name;
    $hostSince = $listing->host_since;
    $hostAbout = $listing->host_about;
    $hostResponseRate = $listing->host_response_rate;
*/
    // Here we present that information to the user
    echo '<div class="ds-row">
    <div class="ds-col-6 ds-shadow-floating ds-bg-neutral-2">
    <h3 class="ds-heading-2 ds-margin-t-2"><a href="listing.php?id=' . $listing->id . '">' . $listing->id . ' ' . $listing->name . '</a></h3>
    <div class="ds-hr-thick"></div>
    <h4 class="ds-heading-3 ds-margin-t-b-2">' . $listing->description . '</h4>
    <p class="ds-margin-b-2">
    ' . $listing->neighborhood_cleansed . '<br />
    ' . $listing->accommodates . '<br />
    ' . $listing->price . '<br />
    </p>
    
    <p class="ds-margin-b-2">&nbsp</p>
    </div></div></div>
    ';
}




?>
