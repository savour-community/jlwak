<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;
class NewsController extends AdminController {
    public function show_list(){
        $daohang = array(
            'title1' => '新闻管理',
            'title2' => '新闻列表',
            'act' => '添加',
            'act_link' => U('tianjia'),
        );
        $this -> assign('daohang', $daohang);
        $info = D('News')->select();
        $this -> assign('info', $info);
        $this->display();
    }

    public function del($id){
        $news =  D('News');
        if(IS_GET){
            $shuju = $news->where(array('id'=>'$id'))->delete($id);
            $this -> redirect('News/show_list');
        }else{
            $this->display();   
        }
    }

    function tianjia()
    {
        $daohang = array
        (
            'title1' => '新闻管理',
            'title2' => '添加新闻',
            'act' => '返回',
            'act_link' => U('show_list'),
        );
        $this -> assign('daohang', $daohang);
        if(IS_POST)
        {
            $news =D('News');
            $shuju = $news -> create();
            $shuju['add_time'] = time();
            $shuju['upd_time'] = time();
            $shuju['content'] = strip_tags($_POST[content]);
            $this -> deal_news_img($shuju);
            if($news->add($shuju))
            {
                $this -> success('添加成功','show_list',1);
            }
            else
            {
                $this -> error('添加失败','tianjia',1);
            }
        }
        else
        {
            $info = D('News')->select();
            $this -> assign('info', $info);
            $this->display();
        }
    }

    public function upd_news()
    {
        $daohang = array(
            'title1' => '新闻管理',
            'title2' => '修改新闻',
            'act' => '返回',
            'act_link' => U('show_list'),
        );
        $this -> assign('daohang',$daohang);
        $id = I('get.id');
        if(IS_POST)
        {
            $news = D('News');
            $shuju = $news -> create();
            $shuju['upd_time']  = time();
            $shuju['content'] = strip_tags($_POST[content]);
            $this -> deal_news_img($shuju);
            if($news->save($shuju))
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
            $info= D('News')->find($id);
            $this -> assign('info', $info);
            $this->display();
        }
    }

    private function deal_news_img(&$data)
    {
        if(!empty($data['id']))
        {
            $old_info = D('News')->find($data['id']);
            if($_FILES['news_b_tx ']['error']===0)
            {
                if(!empty($old_info['news_b_tx ']))
                {
                    unlink($old_info['news_b_tx ']);
                }
                if(!empty($old_info['news_s_tx ']))
                {
                    unlink($old_info['news_s_tx ']);
                }
            }
        }
        $cfg = array
        (
            'rootPath' => './jlwakImg/',
        );
        $up = new \Think\Upload($cfg);
        $z = $up -> upload(array('pics'=>$_FILES['news_b_tx']));
        $im = new \Think\Image();
        $yuanname = $up->rootPath.$z['pics']['savepath'].$z['pics']['savename'];
        $data['news_b_tx'] =  $yuanname;
        $im -> open($yuanname);
        $im -> thumb(400,400,6);
        $bigname = $up->rootPath.$z['pics']['savepath'].'s_'.$z['pics']['savename'];
        $im -> save($bigname);
        $data['news_s_tx'] = $bigname;
    }
}