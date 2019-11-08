<?php
class App{
    // http://localhost/lives/Home/SayHi/1/2/3
    protected $controller="Home";
    protected $action="GotoHome";
    protected $params=[];
    function __construct(){
         $arr = $this->UrlProcess();
      //   print_r($arr);// xuất mảng 
      // Xu li controller
      if(file_exists("./mvc/controllers/".$arr[0].".php")){
         $this->controller = $arr[0];
         unset($arr[0]); 
      }
      require_once("./mvc/controllers/".$this->controller.".php");
      $this->controller = new $this->controller;
      //Xử lí Action
      if(isset($arr[1]))
      {
          if(method_exists($this->controller, $arr[1]))
          {
              $this->action = $arr[1];
          }
          unset($arr[1]);
      }
    
      //Xử lí params
      $this->params = $arr ? array_values($arr) : [];
      //gọi địa chỉ mặc định
      call_user_func_array([$this->controller,$this->action],$this->params);
    
    }
    function UrlProcess()// trả về mảng chứa các giá trị địa chỉ
    {
        if(isset($_GET["url"])) // có tồn tại url
        {
            // hàm explode() : cắt theo dấu /
            // hàm filter_var() : check theo dấu / 
            // hàm trim() : loại bỏ các khoảng trắng 
            return explode('/', filter_var(rtrim($_GET["url"],'/'), FILTER_SANITIZE_URL));   
        }
    }
}
?>