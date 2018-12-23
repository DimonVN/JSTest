[php wraplines=”false”]/**
* This is how a wrong response looks like
* array(1) { ["InstagramOAuthToken"]=> string(89) "{"code": 400, "error_type": "OAuthException", "error_message": "No matching code found."}" }
*/
session_start();
if (isset($_SESSION[‘InstagramAccessToken’]) && !empty($_SESSION[‘InstagramAccessToken’])) {
header(‘Location: /index.php’);
die();
}

// Instantiate the API handler object
$instagram = new Instagram($config);
$instagram->openAuthorizationUrl();
[/php]