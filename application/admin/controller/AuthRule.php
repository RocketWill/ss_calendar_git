<?php
namespace app\admin\controller;
use think\Controller;
//use app\admin\model\AuthGroup as AuthGroupModel;
class AuthRule extends Controller
{
    public function lst(){
      return $this -> fetch('lst');
    }


    public function add(){
      return $this -> fetch('add');
    }

    public function edit(){
      return $this -> fetch('edit');
    }
}
