<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;

class ProductController extends AdminController {
    public function showlist(){
        $daohang = array(
            'title1' => '产品管理',
            'title2' => '产品列表',
            'act' => '添加',
            'act_link' => U('tianjia'),
        );
        $this -> assign('daohang', $daohang);
        $info = D('Product')->select();
        $this->assign('info', $info);
        $this->display();
    }

    public function tianjia(){
        $daohang = array(
            'title1' => '产品管理',
            'title2' => '添加产品',
            'act' => '返回',
            'act_link' => U('showlist'),
        );
        //assign给模板的变量信息，"普通模板和布局模板"都可以使用
        $this -> assign('daohang', $daohang);
        if(IS_POST){
            $product = D('Product');
            $shuju = $product ->create();
            $shuju['upd_time'] = time();
            $shuju['add_time'] = time();
            $shuju['product_profile']  =  strip_tags($_POST[product_profile]);
            $this -> deal_img($shuju);
            if($product->add($shuju)){
                $this -> success('添加成功','showlist',1);
            }else{
                $this -> error('添加失败','tianjia',1);
            }
        }else{
            $info = D('Product')->order('id')->select();
            $this->assign('info', $info);
            $this->display();
        }
    }

    public function del($id){
        $product = D('Product');
        if(IS_GET){
            $info = $product->where(array('id'=>'$id'))->delete($id);
            $this -> redirect('Product/showlist');
        }else{
            $this->display();
        }
    }

    public function upd_product()
    {
        $daohang = array
        (
            'title1' => '产品管理',
            'title2' => '修改产品信息',
            'act' => '返回',
            'act_link' => U('showlist'),
        );
        $this -> assign('daohang', $daohang);
        $id =I('get.id');
        if(IS_POST)
        {
            $product = D('Product');
            $shuju = $product -> create();
            $shuju['upd_time']  = time();
            $shuju['product_profile'] = $_POST[product_profile];
            $this -> deal_img($shuju);
            if($product->save($shuju))
            {
                $this -> success('修改成功',U('showlist'),1);
            }
            else
            {
                $this -> error('修改失败',U('upd'),1);
            }
        }
        else
        {
            $info= D('Product')->find($id);
            $this -> assign('info', $info);
            $this->display();
        }
    }

    private function deal_img(&$data)
    {
        if(!empty($data['id']))
        {
            $old_info = D('Product')->find($data['id']);
            if($_FILES['product_b_tx']['error']===0)
            {
                if(!empty($old_info['product_b_tx']))
                {
                    unlink($old_info['product_b_tx']);
                }
                if(!empty($old_info['product_s_tx']))
                {
                    unlink($old_info['product_s_tx']);
                }
            }
        }
        $cfg = array
        (
            'rootPath' => './jlwakImg/',
        );
        $up = new \Think\Upload($cfg);
        $z = $up -> upload(array('pics'=>$_FILES['product_b_tx']));
        $im = new \Think\Image();
        $yuanname = $up->rootPath.$z['pics']['savepath'].$z['pics']['savename'];
        $data['product_b_tx'] =  $yuanname;
        $im -> open($yuanname);
        $im -> thumb(400,400,6);
        $bigname = $up->rootPath.$z['pics']['savepath'].'s_'.$z['pics']['savename'];
        $im -> save($bigname);
        $data['product_s_tx'] = $bigname;
    }

}