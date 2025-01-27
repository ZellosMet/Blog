<?

$title = "Blog/Home";
$headers = "Recent Posts";

$sql = "SELECT * FROM Posts ORDER BY post_id DESC";
$posts = $db->query($sql)->FindAll();

$sql = "SELECT title, post_id FROM Posts ORDER BY popularity DESC LIMIT 5";
$most_popular_posts = $db->query($sql)->FindAll();

require_once VIEWS.'/index.tmpl.php';

?>