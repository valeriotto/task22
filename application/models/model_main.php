<?php
class Model_Main extends Model
{
    public function get_data()
    {
        $data = array(
            'header' => 'Главная страница',
            'description' => 'Мы рады Вас приветствовать на главной странице!'
        );
        return $data;
    }
}
