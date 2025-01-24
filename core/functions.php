<?
//Функции отладки
//Вывод содержимого переменной
function Dump($data)
{
    echo "<pre>";
        var_dump($data);
    echo "<pre>";
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

?>