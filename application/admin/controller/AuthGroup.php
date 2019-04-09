<?php
namespace app\admin\controller;
use app\admin\model\AuthGroup as AuthGroupModel;
use think\Controller;

class AuthGroup extends Controller
{
    public function lst(){
        return $this -> fetch('lst');
    }

    public function edit(){
      return $this -> fetch('edit');
    }

    public function add(){
      return $this -> fetch('add');
    }
}
