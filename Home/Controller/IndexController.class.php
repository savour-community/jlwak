<?php
namespace Home\Controller;
use Tools\HomeController;

class IndexController extends HomeController{
    public function index()
    {
        $product =  D('Product') ->field('id, product_name, product_profile, product_b_tx, left(from_unixtime(add_time),16) add_time')
            ->order('id desc')->limit(8)->select();
        $this -> assign('product', $product);

        $solution =  D('Solution') ->field('id, sol_name, sol_profile, sol_b_tx, left(from_unixtime(add_time),16) add_time')
            ->order('id desc')->limit(3)->select();
        $this -> assign('solution', $solution);

        $news =  D('News') ->field('id, title, excerpt, content, news_b_tx, view, author, left(from_unixtime(add_time),16) add_time')
            ->order('id desc')->limit(4)->select();
        $this -> assign('news', $news);

        $costomer = D('Costomer') ->field('id, name, left(from_unixtime(add_time),16) add_time')
            ->order('id desc')->select();
        $this -> assign('costomer', $costomer);

        $this->display();
    }

    public function product(){
        $product =  D('Product') ->field('id, product_name, product_profile, product_b_tx, left(from_unixtime(add_time),16) add_time')
            ->order('id')->select();
        $this -> assign('product', $product);
        $this->display();
    }

    public function solution(){
        $solution =  D('Solution') ->field('id, sol_name, sol_profile, sol_b_tx, left(from_unixtime(add_time),16) add_time')
            ->order('id')->select();
        $this -> assign('solution', $solution);
        $this->display();
    }

    public function news_list(){
        $info =  D('News') ->field('id, title, excerpt, content, news_b_tx, view, author, left(from_unixtime(add_time),16) add_time')
            ->order('id desc')->select();
        $this -> assign('info', $info);
        $this->display();
    }

    public function news_detail(){
        $id = I('get.id');
        $info =  D('News')->field('id, title, excerpt, content, left(from_unixtime(add_time),16) add_time')
            ->where(array('id'=>$id))
            ->select();
        $info_news = $info[0];
        $this -> assign('info_news', $info_news);
        $this->display();
    }


    public function join_us(){
        $this->display();
    }

}
