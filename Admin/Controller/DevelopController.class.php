<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;

class DevelopController extends AdminController {
    public function show_list(){
        $daohang = array(
            'title1' => '发展流程管理',
            'title2' => '发展流程列表',
            'act' => '添加',
            'act_link' => U('insert_record'),
        );
        $this -> assign('daohang', $daohang);
        $info = D('Develop')->select();
        $this->assign('info', $info);
        $this->display();
    }

    public function insert_record(){
        $daohang = array(
            'title1' => '发展流程管理',
            'title2' => '添加发展流程',
            'act' => '返回',
            'act_link' => U('show_list'),
        );
        $this -> assign('daohang', $daohang);
        if(IS_POST){
            $develop = D('Develop');
            $shuju = $develop ->create();
            $shuju['upd_time'] = time();
            $shuju['add_time'] = time();
            if($develop->add($shuju)){
                $this -> success('添加成功','show_list',1);
            }else{
                $this -> error('添加失败','insert_record',1);
            }
        }else{
            $info = D('Develop')->order('id')->select();
            $this->assign('info', $info);
            $this->display();
        }
    }

    public function del($id){
        $develop = D('Develop');
        if(IS_GET){
            $info = $develop->where(array('id'=>'$id'))->delete($id);
            $this -> redirect('Develop/show_list');
        }else{
            $this->display();
        }
    }

    public function upd_develop()
    {
        $daohang = array
        (
            'title1' => '发展流程管理',
            'title2' => '修改发展流程',
            'act' => '返回',
            'act_link' => U('show_list'),
        );
        $this -> assign('daohang', $daohang);
        $id =I('get.id');
        if(IS_POST)
        {
            $develop = D('Develop');
            $shuju = $develop -> create();
            $shuju['upd_time']  = time();
            if($develop->save($shuju))
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
            $info= D('Develop')->find($id);
            $this -> assign('info', $info);
            $this->display();
        }
    }
}
