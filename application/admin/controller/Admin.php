<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\ManageInfo as ManageInfoModel;
//use app\admin\controller\Base;
class Admin extends Controller
{
  // admins list
  public function lst(){
    return $this -> fetch('lst');
  }

  // add an admin member
  public function add(){
    // check method is Post
    if (request() -> isPost()){
      $data = [
        'username' => input('admin_name'),
        'telephone' => input('admin_phone'),
        'password' => md5(input("admin_password")),
      ];

      $validate = \think\Loader::validate('ManageInfo');
      if(!$validate -> scene('add') -> check($data)){
        $this -> error($validate -> getError());
        die;
      }

      if(db('manage_info') -> insert($data)){
        return $this->success('添加管理員成功', 'lst');
      }else{
        return $this->error('添加管理員失敗');
      }
      return;

    }
    return $this -> fetch('add');
  }
}
