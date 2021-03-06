<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\ManageAuthRule as ManageAuthRuleModel;
class AuthRule extends Controller
{
    public function lst(){
      $auth_rule = new ManageAuthRuleModel();
      if(request() -> isPost()){
        $sorts = input('post.');

        foreach ($sorts as $k => $v){
          $auth_rule -> update(['id' => $k, 'sort' => $v ]);
        }
        $this -> success('更新排序成功', 'lst');
        return;
      }
      $auth_rule_list = $auth_rule -> authRuleTree();
      $this -> assign('auth_rule_list', $auth_rule_list);
      return $this -> fetch('lst');
    }


    public function add(){
      if (request() -> isPost()){
        $data = input('post.');
        $pre_level = db('manage_auth_rule') -> where('id', $data['pid']) -> field('level') -> find();
        if($pre_level){
          $data['level'] = $pre_level['level']+1;
        }

        $add = db('manage_auth_rule') -> insert($data);
        if($add){
          $this -> success("添加權限成功",'lst');
        }else{
          $this -> error("添加權限失敗");
        }

        return;
      }
      $auth_rule = new ManageAuthRuleModel();
      $auth_rule_list = $auth_rule -> authRuleTree();
      $this -> assign('auth_rule_list', $auth_rule_list);
      return $this -> fetch('add');
    }

    public function edit(){
      if(request() -> isPost()){
        $data = input('post.');
        $pre_level = db('manage_auth_rule') -> where('id', $data['pid']) -> field('level') -> find();
        if($pre_level){
          $data['level'] = $pre_level['level']+1;
        }else{
          $data['level'] = 0;
        }
        $save = db('manage_auth_rule') -> update($data);
        if($save!==false){
          $this -> success('修改權限成功', 'lst');
        }else{
          $this -> error('修改權限失敗');
        }
        return;
      }

      $auth_rule = new ManageAuthRuleModel();
      $auth_rule_list = $auth_rule -> authRuleTree();
      $auth_rule = $auth_rule -> find(input('id'));
      $this -> assign(
        array(
          'auth_rule_list' => $auth_rule_list,
          'auth_rule' => $auth_rule
        )
      );
      return $this -> fetch('edit');
    }


    public function del(){
      $auth_rule = new ManageAuthRuleModel();
      $authRuleIds = $auth_rule -> getchilrenid(input('id'));
      $authRuleIds[] = input('id');
      $del = ManageAuthRuleModel::destroy($authRuleIds);
      if($del){
        $this -> success('刪除權限成功');
      }else{
        $this -> error('刪除權限失敗');
      }
    }
}
