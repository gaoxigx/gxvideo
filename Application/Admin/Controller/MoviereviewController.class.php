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
class MoviereviewController extends BaseController{
    public function index(){
		$moviereview =  M('moviereview'); 
        $p = empty($_REQUEST['p']) ? 1 : $_REQUEST['p'];
        $size = empty($_REQUEST['size']) ? 20 : $_REQUEST['size'];
        
        $map = array();
        $member = trim(I('member'));
		$movie = trim(I('movie'));
		
		if($member != ''){
			$mem_map['nickname'] = array('like','%'.$member.'%');
			$userid = D('users')->where($mem_map)->getField('user_id',true);
			$userid = implode(',',$userid);
			$map['memberid'] = array('in',$userid);
		}
		if($movie != ''){
			$movie_map['title'] = array('like','%'.$movie.'%');
			$movieid = D('Movie')->where($movie_map)->getField('movie_id',true);
			$movieid = implode(',',$movieid);
			$map['movieid'] = array('in',$movieid);
		}
		
        $list = $moviereview->where($map)->order('createtime desc')->page("$p,$size")->select();
		$members = $this->members();
		$movies = $this->movies();
		foreach($list as $k=>$v){
			$list[$k]['member_name'] = $members[$v['memberid']]['nickname'];
			$list[$k]['replay_name'] = $members[$v['replayid']]['nickname'];
			$list[$k]['movie_name'] = $movies[$v['movieid']];
		}
		
		$count = $moviereview->where($map)->count();// 查询满足要求的总记录数
        $pager = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
        $page = $pager->show();//分页显示输出
		
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$page);// 赋值分页输出
        $this->display();
    }
    
    public function editmoviereview(){ 
 		$act = I('GET.act','add');
        $id = I('GET.id');
        $info = array();
        if($id){
            $info = D('moviereview')->where('id='.$id)->find();
            $this->assign('info',$info);
        }
		
		$this->initEditor();
		$members = $this->members();
		$movies = $this->movies();
		
		$this->assign('members',$members);
		$this->assign('movies',$movies);
		$this->assign('act',$act);
        $this->display();
    }
    
	protected function members(){
		$members = D('users')->order('user_id desc')->getField('user_id,email,nickname',true);
		return $members;
	}
	
	protected function movies(){
		$members = D('movie')->order('movie_id desc')->getField('movie_id,title',true);
		return $members;
	}
	
	/**
     * 初始化编辑器链接
     * @param $post_id post_id
     */
    private function initEditor()
    {
        $this->assign("URL_upload", U('Admin/Ueditor/imageUp',array('savepath'=>'moviereview')));
        $this->assign("URL_fileUp", U('Admin/Ueditor/fileUp',array('savepath'=>'moviereview')));
        $this->assign("URL_scrawlUp", U('Admin/Ueditor/scrawlUp',array('savepath'=>'moviereview')));
        $this->assign("URL_getRemoteImage", U('Admin/Ueditor/getRemoteImage',array('savepath'=>'moviereview')));
        $this->assign("URL_imageManager", U('Admin/Ueditor/imageManager',array('savepath'=>'moviereview')));
        $this->assign("URL_imageUp", U('Admin/Ueditor/imageUp',array('savepath'=>'moviereview')));
        $this->assign("URL_getMovie", U('Admin/Ueditor/getMovie',array('savepath'=>'moviereview')));
        $this->assign("URL_Home", "");
    }
	
    public function MoviereviewHandle(){
    	$data = I('post.');   
        if($data['act'] == 'add'){
			$data['ip_address'] = getIP();
			$data['createtime'] = time();
			$d = D('moviereview')->add($data);
        }
        
        if($data['act'] == 'edit'){
			$d = D('moviereview')->where("id=$data[id]")->save($data);
        }
        
        if($data['act'] == 'del'){      	
        	$res = D('moviereview')->where('replayid ='.$data['memberid'])->select(); 
        	if ($res)
        	{
        		exit(json_encode('还有回复信息，不能删除'));
        	}
			
        	$r = D('moviereview')->where('id='.$data['id'])->delete();
        	if($r) exit(json_encode(1));
        }
        if($d){
        	$this->success("操作成功",U('Admin/Moviereview/index'));
        }else{
        	$this->error("操作失败",U('Admin/Moviereview/index'));
        }
    }
	
    public function Changedata(){
		
	}
}