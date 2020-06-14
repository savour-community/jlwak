<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;

class CostomerController extends AdminController {
    public function show_list(){
        $daohang = array(
            'title1' => '客户管理',
            'title2' => '客户列表',
            'act' => '添加',
            'act_link' => U('insert_record'),
        );
        $this -> assign('daohang', $daohang);
        $info = D('Costomer')->select();
        $this->assign('info', $info);
        $this->display();
    }

    public function insert_record(){
        $daohang = array(
            'title1' => '客户管理',
            'title2' => '添加客户',
            'act' => '返回',
            'act_link' => U('show_list'),
        );
        $this -> assign('daohang', $daohang);
        if(IS_POST){
            $costomer = D('Costomer');
            $shuju = $costomer ->create();
            $shuju['upd_time'] = time();
            $shuju['add_time'] = time();
            if($costomer->add($shuju)){
                $this -> success('添加成功','show_list',1);
            }else{
                $this -> error('添加失败','insert_record',1);
            }
        }else{
            $info = D('Costomer')->order('id')->select();
            $this->assign('info', $info);
            $this->display();
        }
    }

    public function del($id){
        $costomer = D('Costomer');
        if(IS_GET){
            $info = $costomer->where(array('id'=>'$id'))->delete($id);
            $this -> redirect('Costomer/show_list');
        }else{
            $this->display();
        }
    }

    public function upd_constomer()
    {
        $daohang = array
        (
            'title1' => '客户管理',
            'title2' => '修改客户',
            'act' => '返回',
            'act_link' => U('show_list'),
        );
        $this -> assign('daohang', $daohang);
        $id =I('get.id');
        if(IS_POST)
        {
            $costomer = D('Costomer');
            $shuju = $costomer -> create();
            $shuju['upd_time']  = time();
            if($costomer->save($shuju))
            {
                $this -> success('修改成功',U('show_list'),1);
            }
            else
            {
                $this -> error('修改失败',U('upd'),1);
            }
        }
        else
        {
            $info= D('Costomer')->find($id);
            $this -> assign('info', $info);
            $this->display();
        }
    }
}
