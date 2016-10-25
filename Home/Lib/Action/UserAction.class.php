<?php
/**
 * Created by PhpStorm.
 * User: liyan
 * Date: 16/10/24
 * Time: 下午2:23
 *
 */

    class UserAction extends Action{

        public function index(){
            $model = M("User");
            $array = $model->select();

            $this->assign('data',$array);
            $this->display();
        }

        public  function del(){
            $model = M("User");
            $id = $_GET["id"];
            $model->delete($id);

            if ($id > 0){
                $this->success("删除成功");
            }else{
                $this->error("删除失败");
            }
        }


        public function modify(){
            $model = M("User");
            $id = $_GET['id'];
            $array = $model->find($id);

            $this->assign('data',$array);
            $this->display();
        }


        public  function update(){
            echo $_POST['id'].$_POST['username'].$_POST['sex'];
            $model = M("User");
            $data["id"] = $_POST["id"];
            $data["username"] = $_POST["username"];
            $data["sex"] = $_POST["sex"];

            $count = $model->save($data);

            if ($count > 0){
                $this->success("修改成功","index");
            }else{
                $this->error("修改失败");
            }
        }




        public function add(){
            $this->display();
        }

        public function create(){
            $model = M("User");
            $model->username = $_POST["username"];
            $model->sex = $_POST["sex"];
            $idNum = $model->add();

            if ($idNum > 0){
                $this->success("添加成功","index");
            }else{
                $this->error("添加失败");
            }
        }
    }
?>