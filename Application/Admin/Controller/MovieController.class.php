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
class MovieController extends BaseController{
    public function movieList(){
        $Movie =  M('Movie'); 
        $res = $list = array();
        $p = empty($_REQUEST['p']) ? 1 : $_REQUEST['p'];
        $size = empty($_REQUEST['size']) ? 20 : $_REQUEST['size'];
        
        $where = " 1 = 1 ";
        $keywords = trim(I('keywords'));
        $keywords && $where.=" and title like '%$keywords%' ";
        $res = $Movie->where($where)->order('movie_id desc')->page("$p,$size")->select();
        $count = $Movie->where($where)->count();// 查询满足要求的总记录数
        $pager = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
        $page = $pager->show();//分页显示输出

        $MovieCat = new MovieCatLogic();
        $cats = $MovieCat->movie_cat_list('movie_cat',0,0,false);
		$allattrs = $this->getallattrs();
        if($res){
        	foreach ($res as $val){
        		$val['cat_name'] = $cats[$val['cat_id']]['cat_name'];     
				$val['channel'] = $allattrs[$val['channel']];
				$val['topic'] = $allattrs[$val['topic']];
				$val['label'] = $allattrs[$val['label']];	
				$val['gambit'] = $allattrs[$val['gambit']];	
        		$list[] = $val;
        	}
        }
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$page);// 赋值分页输出
        $this->display('movielist');
    }
    
    public function editmovie(){
        $MovieCat = new MovieCatLogic();
 		$act = I('GET.act','add');
        $info = array();
        $info['publish_time'] = time()+3600*24;
        if(I('GET.movie_id')){
           $movie_id = I('GET.movie_id');
           $info = D('movie')->where('movie_id='.$movie_id)->find();
        }
		
        $cats = $MovieCat->movie_cat_list('movie_cat',0,$info['cat_id']);
		$attrs = $this->getattrs();
		
        $this->assign('cat_select',$cats);
        $this->assign('act',$act);
		$this->assign('attrs',$attrs);
        $this->assign('info',$info);
        //$this->initEditor();
        $this->display();
    }
    
	protected function getattrs($pid=0){
		$attrs = D('movieattr')->where('show_in_nav=1 and parent_id='.$pid)->select();
		if(!empty($attrs)){
			foreach($attrs as $k=>$v){
				$attrs[$k]['child'] = $this->getattrs($v['id']);
			}
		}
		return $attrs;
	}
	protected function getallattrs(){
		$attrs = D('movieattr')->where('show_in_nav=1')->getField('id,cat_name');
		return $attrs;
	}
	
    public function movieHandle(){
        $data = I('post.');
        if($data['act'] == 'add'){
        	$data['authorid'] = session('admin_id');
			$data['createtime'] = time(); 
            $r = D('movie')->add($data);
        }
        
        if($data['act'] == 'edit'){
            $data['is_recommend'] = !empty($data['is_recommend'])?$data['is_recommend']:0;
			$data['is_hot'] = !empty($data['is_hot'])?$data['is_hot']:0;
			$data['index_show'] = !empty($data['index_show'])?$data['index_show']:0;
			$data['modifytime'] = time(); 
			
			$r = D('movie')->where('movie_id='.$data['movie_id'])->save($data);
        }
        
        if($data['act'] == 'del'){
        	$r = D('movie')->where('movie_id='.$data['movie_id'])->delete();
        	if($r) exit(json_encode(1));       	
        }
        $referurl = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : U('Admin/Movie/movieList');
        if($r){
            $this->success("操作成功",$referurl);
        }else{
            $this->error("操作失败",$referurl);
        }
    }
    
    /**
     * 初始化编辑器链接
     * @param $post_id post_id
     */
    private function initEditor()
    {
        $this->assign("URL_upload", U('Admin/Ueditor/imageUp',array('savepath'=>'movie')));
        $this->assign("URL_fileUp", U('Admin/Ueditor/fileUp',array('savepath'=>'movie')));
        $this->assign("URL_scrawlUp", U('Admin/Ueditor/scrawlUp',array('savepath'=>'movie')));
        $this->assign("URL_getRemoteImage", U('Admin/Ueditor/getRemoteImage',array('savepath'=>'movie')));
        $this->assign("URL_imageManager", U('Admin/Ueditor/imageManager',array('savepath'=>'movie')));
        $this->assign("URL_imageUp", U('Admin/Ueditor/imageUp',array('savepath'=>'movie')));
        $this->assign("URL_getMovie", U('Admin/Ueditor/getMovie',array('savepath'=>'movie')));
        $this->assign("URL_Home", "");
    }
    
    public function categoryList(){
        $MovieCat = new MovieCatLogic(); 
        $cat_list = $MovieCat->movie_cat_list('movie_cat',0, 0, false);
        $this->assign('cat_list',$cat_list);
        $this->display('categoryList');
    }
    
    public function editcategory(){
        $MovieCat = new MovieCatLogic();  
 		$act = I('GET.act','add');
        $this->assign('act',$act);
        $id = I('GET.id');
        $cat_info = array();
        if($id){
            $cat_info = D('movie_cat')->where('id='.$id)->find();
            $this->assign('cat_info',$cat_info);
        }
        $cats = $MovieCat->movie_cat_list('movie_cat',0,$cat_info['parent_id'],true);
        $this->assign('cat_select',$cats);
        $this->display();
    }
    
	
    public function categoryHandle(){
    	$data = I('post.');   
        if($data['act'] == 'add'){           
            $d = D('movie_cat')->add($data);
        }
        
        if($data['act'] == 'edit')
        {
        	if ($data['id'] == $data['parent_id']) 
			{
        		$this->error("所选分类的上级分类不能是当前分类",U('Admin/Movie/editcategory',array('id'=>$data['id'])));
        	}
        	$MovieCat = new MovieCatLogic();
        	$children = array_keys($MovieCat->movie_cat_list('movie_cat',$data['id'], 0, false)); // 获得当前分类的所有下级分类
        	if (in_array($data['parent_id'], $children))
        	{
        		$this->error("所选分类的上级分类不能是当前分类的子分类",U('Admin/Movie/editcategory',array('id'=>$data['id'])));
        	}
        	$d = D('movie_cat')->where("id=$data[id]")->save($data);
        }
        
        if($data['act'] == 'del'){      	
        	$res = D('movie_cat')->where('parent_id ='.$data['id'])->select(); 
        	if ($res)
        	{
        		exit(json_encode('还有子分类，不能删除'));
        	}
        	$res = D('movie')->where('cat_id ='.$data['id'])->select();       	      	
        	if ($res)
        	{
        		exit(json_encode('非空的分类不允许删除'));
        	}      	
        	$r = D('movie_cat')->where('id='.$data['id'])->delete();
        	if($r) exit(json_encode(1));
        }
        if($d){
        	$this->success("操作成功",U('Admin/Movie/categoryList'));
        }else{
        	$this->error("操作失败",U('Admin/Movie/categoryList'));
        }
    }
    
    
}