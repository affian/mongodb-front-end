<?php
require_once('functions.php');
require_once('page-header.php');
require('vendor/autoload.php');
require('connection.php');

// Include a way to return to the previous page
echo '<h4 class="ds-heading-4 ds-margin-t-b-2"><a href="index.php">&lt back to complete listings</a></h4>
';

// Display title and description
echo '<div class="ds-row"><h2 class="ds-heading-1 ds-col-6">Listing Info</h2>
<p class="ds-col-6 ds-margin-b-2">This information relates to the listing that you selected from the previous list.
We have called against another API endpoint to pull this data from our database.</p>
</div>
';

// Collect the data from various endpoints

// Start with the listing information - we use the API endpoint 
$rperfclient = new GuzzleHttp\Client([ 'base_uri'=>$apiBaseUri]);
$rperfresponse = $rperfclient->request('GET', 'findall?id=' . $_GET['id']);
$content = $rperfresponse->getBody();
$jsonContent = json_decode($content, false);

echo '<div class="ds-margin-t-b-2">Alternative approach to rendering results on screen
' . $jsonContent->id . '
</div>';
  /*  echo '<div class="ds-row">
    <div class="ds-col-6 ds-shadow-floating ds-bg-neutral-2">
    <h3 class="ds-heading-2 ds-margin-t-2">' . $listing->id . ' ' . $listing->name . '</h3>
    <div class="ds-hr-thick"></div>
    <h4 class="ds-heading-3 ds-margin-t-b-2">' . $listing->description . '</h4>
    <p class="ds-margin-b-2">
    ' . $listing->neighborhood_cleansed . '<br />
    ' . $listing->accommodates . '<br />
    ' . $listing->price . '<br />
    </p>*/
//print_r($jsonContent);
//print_r("above is jsonContent below the price & name of this listing.");
//renderListing($jsonContent);
/*
if ($jsonContent->success == 1) {
    $listing = $jsonContent->data[0];

    // Now we can render our page using that data
    // The renderListing function can be found in functions.php
    renderListing($listing);

// If the lookup fails, provide information
} else {
    echo '<div class="ds-margin-t-b-2">API call to look up listing has failed.
    ' . print_r($jsonContent) . '
    </div>';
}
*/ 
// Include a way to return to the previous page
echo '<br />
<h4 class="ds-heading-4 ds-margin-t-b-2"><a href="index.php">&lt back to complete listings</a></h4>
';

// Add footer from template
require_once('page-footer.php');
?>
