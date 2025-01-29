<?
//Функции отладки
//Вывод содержимого переменной
function Dump($data)
{
    echo "<pre>";
        var_dump($data);
    echo "</pre>";
}
//Вывод только содержимого переменной
function DieDump($data)
{
    Dump($data);
    die;    
}
//Функция обработки ошибок
function Abort($code = "404")
{
    //http_response_code($code); //Альтернатива выброса ошибок
    require_once ERRORS."/{$code}.tmpl.php";
    die;
}
//Функция загрузки данных запроса
function LoadReqData($fillable = [])
{
    $data = [];
    foreach ($_POST as $key => $value)  
    {
        if(in_array($key, $fillable))
            $data[$key] = trim($value);    
    }   
    return $data;
}
//Функция хранения старых данных поста
function OldPostData($fielaname)
{
    return (isset($_POST[$fielaname])) ? Htmlspecialchar($_POST[$fielaname]) : "";
}
function Htmlspecialchar($str)
{
    return htmlentities($str, ENT_QUOTES); 
}

//Функция регистрации пользователя
function ValidationUserData(string $login, string $email, string $password, string $password_confirm, $email_users = [])
{
    $login = trim(htmlspecialchars($login));
    $email = trim(htmlspecialchars($email));
    $password = trim(htmlspecialchars($password));
    $$password_confirm = trim(htmlspecialchars($password_confirm));

    $errors = []; //Массив ошибок
    $pattern_pass = "/^[a-z0-9_!@$-]{3,30}$/i";
    $pattern_login = "/^[a-zа-ю0-9_ -]{3,20}$/iu";

    //Проверка на заполненность всех полей
    if($login == "" || $email == "" || $password == "" || $password_confirm == "")
    {
        $errors[] = "Всё поля должны быть заполнены!";
    }
    //Проверка на длину логина
    if(strlen($login) < 3 || strlen($login) > 20 )
    {
        $str = "Длина логина должна быть от 3 до 15 символов!";
        $errors[] = $str;   
    }
    //Проверка на нужные символы в логине
    if(!preg_match($pattern_login, $login))
    {
        $errors[] = "Логин может состоять только из латинских букв, кириллицы, цифр и символов: _-";
    }
    //Проверка пароля на нужные символы
    if(!preg_match($pattern_pass, $password))
    {
        $errors[] = "Пароль может составлять только из латинских букв, цифр, и символов: _!@$!";
    }
    //Проверка на длину пароля
    if(strlen($password) < 3 || strlen($password) > 30 )
    {
        $errors[] = "Длина пароля должна быть от 3 до 30 символов!";
    }           
    //Проверка на совпадающие пароли
    if($password != $password_confirm)
    {
        $errors[] = "Пароли не совпадают!";
    }
    //Проверка на наличие в базе данных
    foreach($email_users as $uemail)
    {
        if($uemail['user_email'] === $email)
        {
            $errors[] = "Пользователь с таким Email уже зарегистрирован!";
            break;
        }
    }      

    return $errors;
}

?>