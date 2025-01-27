<?
require_once(dirname(__DIR__)."/config/config.php");

require_once CORE."/functions.php";
require_once CONFIG."/db.php";
require_once CORE."/classes/DB.php";

//подключение к базе данных
$db_config = require(CONFIG."/db.php");

$db = (Db::GetInstance()->GetConnection($db_config));

//DieDump([$db, $db2]);

require_once CORE."/router.php";

?>
