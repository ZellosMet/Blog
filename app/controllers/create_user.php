<?
require_once CORE."/functions.php";
$is_success = "";
$errors = [];

if($_SERVER['REQUEST_METHOD'] == "POST")
{    
    $sql = "SELECT user_email FROM User";
    $email_users = $db->query($sql)->FindAll();

    //Подготавливаем данные из формы
    $login = strtoupper(trim(htmlspecialchars($_POST['user_login'])));
    $email = strtoupper(trim(htmlspecialchars($_POST['user_email'])));
    $password = trim(htmlspecialchars($_POST['user_password']));
    $password_confirm = trim(htmlspecialchars($_POST['confirm_password']));

    //Проверяем корректность данных
    $errors = ValidationUserData($login, $email, $password, $password_confirm, $email_users);

    //Если ошибок нет, то добавлем пользователя в базу
    if(empty($errors))
    {
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO User (user_login, user_email, user_password) VALUES (?, ?, ?)";
        if(!$db->query($sql, [$login, $email, $hash_pass]))
            $errors[] = "Ошибка при добавлении пользователя!";
    }
    if(empty($errors))    
        $is_success = "Success!";    
}

require_once VIEWS."/create_user.tmpl.php";

?>