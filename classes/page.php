<?php
class Page
{
    public $text;

    public function get_all()
    {
        $db = new Database(HOST, USER, PASS, DB);
        $result = $db->get_all_db();
        
        return $result;

    }

    public function get_one($id)
    {
        $db = new Database(HOST, USER, PASS, DB);
        $result = $db->get_one_db($id);

        return $result;
    }

    public function get_body($text, $file)
    {
        ob_start(); // после этой функции все попадает в буфер обмена
        include $file . '.php'; // подключаем файл шаблона
        return ob_get_clean(); // вытягивает данные с буфера обмена и сразу же очищаем буфер
    
    }
}