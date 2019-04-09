<?php
namespace app\admin\validate;
use think\Validate;
class ManageInfo extends Validate
{
    protected $rule = [
      'username' => 'require|max:25|unique:manage_info',
      'telephone' => 'require|max:11|min:11|number',
      'password' => 'require'
    ];

    protected $message = [
      'username.require' => '必須輸入管理員名稱',
      'username.max' => '管理員名稱不得超過25個字符',
      'password.require' => '必須輸入管理員密碼',
      'telephone.require' => '請輸入手機號碼',
      'telephone.max' => '手機號碼最多不能超過11個字節',
      'telephone.min' => '請輸入正確的手機號格式',
      'telephone.number' => '請輸入正確的手機號格式'
    ];

    protected $scene = [
      'add' => ['username' => 'require', 'password' => 'require', 'telephone'],
      'edit' => ['username' => 'require',]
    ];
}
