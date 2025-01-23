<?

//Указание путей
define("PATH", "https://blog.loc");
define("ROOT", dirname(__DIR__));
define("APP", ROOT."/app");
define("VIEWS", APP."/views");
define("CONTROLLERS", APP."/controllers");
define("COMPONENTS", VIEWS."/components");
define("CORE", ROOT."/core");
define("PUBLIC", ROOT."/public");

require_once CORE."/functions.php";

$title = "Blog/Contacts";
$header = "Contacts";
$contacts = "Some contacts";

require_once ("../app/views/contacts.tmpl.php");

?>