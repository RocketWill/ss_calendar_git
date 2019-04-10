<?php
namespace app\admin\controller;
use app\admin\model\ManageAuthGroup as ManageAuthGroupModel;
use think\Controller;

class AuthGroup extends Controller
{
    public function lst(){
        $auth_group_list = ManageAuthGroupModel::paginate(5);
        $this -> assign('auth_group_list', $auth_group_list);
        return $this -> fetch('lst');
    }

    public function edit(){
      if (request() -> isPost()){
        $data = input('post.');
        if(!empty($data['rules'])){
          $data['rules'] = implode(',', $data['rules']);
        }else{
          $data['rules'] = '';
        }
        // check status switch
        $status = isset($_POST['status']);
        if ($status == true){
          $data['status'] = 1;
        }else{
          $data['status'] = 0;
        }

        $save = db('manage_auth_group') -> update($data);
        if($save !== false){
          $this -> success('修改用戶組成功', 'lst');
        }else{
          $this -> error('修改用戶組失敗');
        }
      }
      //query the group needed edit
      $auth_rule = new \app\admin\model\ManageAuthRule();
      $auth_rule_list = $auth_rule -> authRuleTree();
      $this -> assign('auth_rule_list', $auth_rule_list);
      $auth_group = db('manage_auth_group') -> find(input('id'));
      $this ->  assign('auth_group', $auth_group);

      return $this -> fetch('edit');
    }

    public function add(){
      if(request() -> isPost()){
        $data = input('post.');
        if($data['rules']){
          $data['rules'] = implode(',', $data['rules']);
        }
        // check status switch
        $status = isset($_POST['status']);
        if ($status == true){
          $data['status'] = 1;
        }else{
          $data['status'] = 0;
        }


        $add = db('manage_auth_group') -> insert($data);
        if($add){
          $this -> success('添加用戶組成功', 'lst');
        }else{
          $this -> error('添加用戶組失敗');
        }
        return;
      }


      //get methods
      $auth_rule = new \app\admin\model\ManageAuthRule();
      $auth_rule_list = $auth_rule -> authRuleTree();
      $this -> assign('auth_rule_list', $auth_rule_list);
      return $this -> fetch('add');
    }


    //del group
    public function del(){
      $del = db('manage_auth_group') -> delete(input('id'));
      if($del){
        $this -> success('刪除用戶組成功', 'lst');
      }else{
        $this -> error('刪除用戶組失敗');
      }
    }

}
