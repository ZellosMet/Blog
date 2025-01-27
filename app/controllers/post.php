<?
require_once CORE."/functions.php";

$id = $_GET['id'] ?? 0;

$sql = "SELECT post_id, title FROM Posts ORDER BY popularity DESC LIMIT 5";
$most_popular_posts = $db->query($sql)->FindAll();

$sql = "SELECT * FROM Posts WHERE post_id = ?";
$post = $db->query($sql, [$id])->FindOrAbord();

$popular = $post['popularity'];

if (isset($_POST["incr_poopulsr"])) 
{
    $sql = "UPDATE Posts SET popularity = ? WHERE post_id = ?";
    $db->query($sql, [$popular+1, $id]);
    unset($_POST["incr_poopulsr"]);
}

require_once VIEWS."/post.tmpl.php";

?>