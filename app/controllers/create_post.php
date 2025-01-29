<?
require_once CORE."/functions.php";
require_once CORE."/classes/Validator.php";

$sql = "SELECT post_id, title FROM Posts ORDER BY popularity DESC LIMIT 5";
$most_popular_posts = $db->query($sql)->FindAll();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $fillable = ['title', 'excerpt', 'content'];
    $data = LoadReqData($fillable);

    $errors = [];

    //Вылидация полей
    $rules = 
    [
        'title' => ['required' => true, 'min' => 3, 'max' => 10],
        'excerpt' => ['required' => true, 'min' => 15, 'max' => 100],
        'content' => ['required' => true, 'min' => 15, 'max' => 300]
    ];
    $validator = new Validator();
    $validation = $validator->Validate($data, $rules);

    //Проверка на пустоту полей
    if(empty($data['title']))  
        $errors['title'] = "Title is required";
    
    if(empty($data['content']))   
        $errors['content'] = "Description is required";
    
    if(empty($data['excerpt']))   
        $errors['excerpt'] = "Excerpt is required";
    
    if(empty($errors))
    {
        $sql = "INSERT INTO Posts(title, excerpt, content, popularity) VALUES (?, ?, ?, ?)";
        if($db->query($sql, [$data['title'], $data['excerpt'], $data['content'], 0]))
            echo "Success";
        else
            echo "DB error";
    }
}

require_once VIEWS."/create_post.tmpl.php";

?>