<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    public function index(){
//        echo "hello world!!!";

//        $model = new Model("Persons");
        $model = M("Persons");
        $array = $model->select();
//        var_dump($array);

        $name = "liyan";
        $this->assign("data",$array);
        $this->display();

    }


    public function show(){
        echo "访问了Index模块下的show方法".$_GET['name'];
    }
}
