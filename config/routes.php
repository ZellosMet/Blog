<?

$uri = trim((parse_url($_SERVER['REQUEST_URI'])['path']),'/');

if($uri === "" || $uri === "index") require_once CONTROLLERS."/index.php";
else if ($uri === "contacts") require_once CONTROLLERS."/contacts.php";
else if ($uri === "post") require_once CONTROLLERS."/post.php";
else Abort();

$routes = [
    "" => "index.php",
    "index" => "index.php",
    "contacts" => "contacts.php",
    "post" => "post.php"
];

?>