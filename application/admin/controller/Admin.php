<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\ManageInfo as ManageInfoModel;
//use app\admin\controller\Base;
class Admin extends Controller
{
  // admins list
  public function lst(){
    // get all admin
    // show 10 admins per page
    $admin_list = ManageInfoModel::paginate(10);
    $this -> assign('admin_list', $admin_list);
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
        'update_time' => date('Y-m-d H:i:s')
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

  // edit admin info
  public function edit(){
    return $this -> fetch('edit');
  }

  // delete admin
  public function del(){
    $id = input('id');
    $admin = db('manage_info') -> find($id);
    if($admin['is_delete'] == 0){
      // 更新数据表中的数据
      if (db('manage_info')->where('id',$id)->update(['is_delete' => 1])){
        $this -> success('刪除成功', 'lst');
      }else{
        $this -> error('刪除失敗', 'lst');
      }

    }else{
      $this -> error('刪除失敗', 'lst');
    }
  }

  public function recover(){
    $id = input('id');
    $admin = db('manage_info') -> find($id);
    if($admin['is_delete'] == 1){
      // 更新数据表中的数据
      if (db('manage_info')->where('id',$id)->update(['is_delete' => 0])){
        $this -> success('恢復成功', 'lst');
      }else{
        $this -> error('恢復失敗', 'lst');
      }

    }else{
      $this -> error('恢復失敗', 'lst');
    }
  }

}
