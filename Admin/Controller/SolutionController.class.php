<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;

class SolutionController extends AdminController {
    public function show_list(){
        $daohang = array(
            'title1' => '解决方案管理',
            'title2' => '解决方案列表',
            'act' => '添加',
            'act_link' => U('insert_record'),
        );
        $this -> assign('daohang', $daohang);
        $info = D('Solution')->select();
        $this->assign('info', $info);
        $this->display();
    }

    public function insert_record(){
        $daohang = array(
            'title1' => '解决方案管理',
            'title2' => '添加解决方案',
            'act' => '返回',
            'act_link' => U('show_list'),
        );
        $this -> assign('daohang', $daohang);
        if(IS_POST){
            $product = D('Solution');
            $shuju = $product ->create();
            $shuju['upd_time'] = time();
            $shuju['add_time'] = time();
            $shuju['sol_profile ']  =  strip_tags($_POST[sol_profile]);
            $this -> deal_img($shuju);
            if($product->add($shuju)){
                $this -> success('添加成功','show_list',1);
            }else{
                $this -> error('添加失败','insert_record',1);
            }
        }else{
            $info = D('Solution')->order('id')->select();
            $this->assign('info', $info);
            $this->display();
        }
    }

    public function del($id){
        $product = D('Solution');
        if(IS_GET){
            $info = $product->where(array('id'=>'$id'))->delete($id);
            $this -> redirect('Product/show_list');
        }else{
            $this->display();
        }
    }

    public function upd_solution()
    {
        $daohang = array
        (
            'title1' => '解决方案管理',
            'title2' => '修改解决方案',
            'act' => '返回',
            'act_link' => U('show_list'),
        );
        $this -> assign('daohang', $daohang);
        $id =I('get.id');
        if(IS_POST)
        {
            $product = D('Solution');
            $shuju = $product -> create();
            $shuju['upd_time']  = time();
            $shuju['sol_profile'] = $_POST[sol_profile];
            $this -> deal_img($shuju);
            if($product->save($shuju))
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
            $info= D('Solution')->find($id);
            $this -> assign('info', $info);
            $this->display();
        }
    }

    private function deal_img(&$data)
    {
        if(!empty($data['id']))
        {
            $old_info = D('Product')->find($data['id']);
            if($_FILES['sol_b_tx ']['error']===0)
            {
                if(!empty($old_info['sol_b_tx']))
                {
                    unlink($old_info['sol_b_tx']);
                }
                if(!empty($old_info['sol_s_tx']))
                {
                    unlink($old_info['sol_s_tx']);
                }
            }
        }
        $cfg = array
        (
            'rootPath' => './jlwakImg/',
        );
        $up = new \Think\Upload($cfg);
        $z = $up -> upload(array('pics'=>$_FILES['sol_b_tx']));
        $im = new \Think\Image();
        $yuanname = $up->rootPath.$z['pics']['savepath'].$z['pics']['savename'];
        $data['sol_b_tx'] =  $yuanname;
        $im -> open($yuanname);
        $im -> thumb(400,400,6);
        $bigname = $up->rootPath.$z['pics']['savepath'].'s_'.$z['pics']['savename'];
        $im -> save($bigname);
        $data['sol_s_tx'] = $bigname;
    }

}
