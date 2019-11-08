<?php
class Controller{
    public function Models($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function Views($view,$data=[])// tao mang data de nham tham so truyen vao de hien thi
    {
        require_once "./mvc/views/".$view.".php";
    }
}
?>