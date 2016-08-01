<?php
/**
 * tpshop
 * ============================================================================
 * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: 当燃      
 * Date: 2015-09-21
 */

namespace Admin\Controller;
use Admin\Logic\MovieCatLogic;
class MovieattrController extends BaseController{
    public function index(){
        $MovieCat = new MovieCatLogic(); 
        $attr_list = $MovieCat->movie_cat_list('movieattr',0, 0, false);
        $this->assign('attr_list',$attr_list);
        $this->display();
    }
    
    public function editmovieattr(){
        $MovieCat = new MovieCatLogic();  
 		$act = I('GET.act','add');
        $this->assign('act',$act);
        $id = I('GET.id');
        $attr_info = array();
        if($id){
            $attr_info = D('movieattr')->where('id='.$id)->find();
            $this->assign('attr_info',$attr_info);
        }
        $attrs = $MovieCat->movie_cat_list('movieattr',0,$attr_info['parent_id'],true);
        $this->assign('attr_select',$attrs);
        $this->display();
    }
    
	
    public function MovieattrHandle(){
    	$data = I('post.');   
        if($data['act'] == 'add'){           
            $d = D('movieattr')->add($data);
        }
        
        if($data['act'] == 'edit')
        {
        	if ($data['id'] == $data['parent_id']) 
			{
        		$this->error("所选分类的上级分类不能是当前分类",U('Admin/Movieattr/index',array('id'=>$data['id'])));
        	}
        	$MovieCat = new MovieCatLogic();
        	$children = array_keys($MovieCat->movie_cat_list('movieattr',$data['id'], 0, false)); // 获得当前分类的所有下级分类
        	if (in_array($data['parent_id'], $children))
        	{
        		$this->error("所选分类的上级分类不能是当前分类的子分类",U('Admin/Movieattr/index',array('id'=>$data['id'])));
        	}
        	$d = D('movieattr')->where("id=$data[id]")->save($data);
        }
        
        if($data['act'] == 'del'){      	
        	$res = D('movieattr')->where('parent_id ='.$data['id'])->select(); 
        	if ($res)
        	{
        		exit(json_encode('还有子分类，不能删除'));
        	}
        	/*
			$res = D('movie')->where('id ='.$data['id'])->select();       	      	
        	if ($res)
        	{
        		exit(json_encode('非空的分类不允许删除'));
        	}   
			*/
        	$r = D('movieattr')->where('id='.$data['id'])->delete();
        	if($r) exit(json_encode(1));
        }
        if($d){
        	$this->success("操作成功",U('Admin/Movieattr/index'));
        }else{
        	$this->error("操作失败",U('Admin/Movieattr/index'));
        }
    }
    
    
}