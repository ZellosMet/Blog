<?
require_once CORE."/functions.php";
$is_success = false;

if($_SERVER['REQUEST_METHOD'] == "POST")
{    
    //Получаем пользователей из БД
    $sql = "SELECT user_login, user_password FROM User";
    $db_users = $db->query($sql)->FindAll();

    //Обрабатываем данные из формы
    $login = trim(htmlspecialchars($_POST['user_login']));
    $password = trim(htmlspecialchars($_POST['user_password']));

    //Проверяем на заполненность
    if($login == "" || $password == "")
    {
        $errors = "Всё поля должны быть заполнены!";
    }

    if(empty($errors))
    {    
        //Ищим пользователя в БД
        foreach($db_users as $user)
        {
            if($user['user_login'] == $login && password_verify($password, $user['user_password']))
            {
                //Если нашли, то сохраняем найденного пользователя и выходим из цикла
                $find_user = $user['user_login'];
                $is_success = true;
                break;
            }
        }        
    }
    if(empty($errors))
    {
        if(!$is_success)
        {
            $errors = "Неверный пользователь или пароль";
        }
    }
        
}

require_once VIEWS."/login.tmpl.php";

?>