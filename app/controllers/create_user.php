<?
require_once CORE."/functions.php";
$is_success = "";
$errors = [];

if($_SERVER['REQUEST_METHOD'] == "POST")
{    

    $sql = "SELECT user_email FROM User";
    $email_users = $db->query($sql)->FindAll();
    $errors = RegisterUser($_POST['user_login'], $_POST['user_email'], $_POST['user_password'], $_POST['confirm_password'], $email_users);

    //DieDump("");

    //Если ошибок нет, то добавлем пользователя в базу
    if(empty($errors))
    {
        $hash_pass = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO User (user_login, user_email, user_password) VALUES (?, ?, ?)";
        if(!$db->query($sql, [$_POST['user_login'], $_POST['user_email'], $hash_pass]))
            $errors[] = "Ошибка при добавлении пользователя!";
    }
    if(empty($errors))    
        $is_success = "Success!";    
}

require_once VIEWS."/create_user.tmpl.php";

?>