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

?>