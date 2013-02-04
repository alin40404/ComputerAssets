<?php
class ContentAction extends Action{
	
	private $promptInfor='';
	public function search(){
		if($_SESSION ['userName'] == null) {
			$this->redirect ( 'User/logOn' );
		}
		
		$appList= D("ApplicationName");
		$id=1;
		$list1=$appList->where('ApplicationList_ID='.$id)->order('Application_Name')->limit(100)->select();
		$id=2;
		$list2=$appList->where('ApplicationList_ID='.$id)->order('Application_Name')->limit(100)->select();
		$title="程序列表";
		$this->assign('list1',$list1);
		$this->assign('list2',$list2);
		$this->assign('title',$title);
		layout(true);
		$this->display();
		
		
	}
	
	public function applicationList(){
		$userName = $_SESSION ['userName'];
		if ($userName == null) {
			$this->redirect ( 'User/logOn' );
		}
		$appList= D("ApplicationName");
		import("ORG.Util.Page");
		$id=$_GET['id'];
		if($id!=2){
		$id=1;
		}else{
			$id=2;
		}
		$count=$appList->where('ApplicationList_ID='.$id)->count();
		$Page = new Page($count,15);// 实例化分页类 传入总记录数和每页显示癿记录数
		$Page->rollPage=10;
		$show = $Page->show();// 分页显示输出
		// 迕行分页数据查诟 注惲limit 方法癿参数要使用Page 类癿属性
		//$promptInfor=$_GET['promptInfor'];
		$list=$appList->where('ApplicationList_ID='.$id)->order('Application_Name')->limit($Page->firstRow.",".$Page->listRows)->select();
		$title="程序管理";
		$this->assign('title',$title);
		$this->assign('list',$list);
		$this->assign('page',$show);// 赋值分页输出
		$this->assign('p',$_GET['p']);
		$this->assign('id',$id);
		//$this->assign('promptInfor',$promptInfor);
		//$_GET['promptInfor']='';
		//$this->$promptInfor='';
		layout(true);
		$this->display();
	}
	
	public function customSearching(){
	
		layout(true);
		$title="自定义搜索";
		$this->assign('title',$title);
		$this->display();
	}
	
	public function searchPCReport(){
		layout(true);
		$title="搜索PC信息报告";
		$this->assign('title',$title);
		$this->display();
	}
	
	public function enquiryOnApp(){
	
		layout(true);
		$this->display();
	}
	
	/**
	 * ---删除ApplicationName---
	 * 
	 */
	public function deleteApplicationName(){
		$userName = $_SESSION ['userName'];
		if ($userName == null) {
			$this->redirect ( 'User/logOn' );
		}
		$number=$_GET['number'];
		$p=$_GET['p'];
 		//dump($_GET);
		$appList= D("ApplicationName");
		
		$id=$appList->where('ApplicationName_ID='.$number)->getField('ApplicationList_ID');
		
		$bool=$appList->where('ApplicationName_ID='.$number)->delete();
		if($bool==true){
			//$deleteInfor="删除成功！";
			$this->promptInfor="删除成功！";
		}else{
			//$deleteInfor="删除失败！";
			$this->promptInfor="删除失败！";
		}
// 		dump($this->promptInfor);
	
		$url="Content/applicationList";
		$params="id=".$id."&p=".$p;
		$params=array(
				'id'=>$id,
				'p'=>$p,
		);
		$this->redirect($url,$params);

	}
	/**
	 * ---修改ApplicationName---
	 */
	public function editApplicationList(){
		$userName = $_SESSION ['userName'];
		if ($userName == null) {
			$this->redirect ( 'User/logOn' );
		}
		$id=$_GET['id'];
		$p=$_GET['p'];
		$number=$_GET['number'];
		$content=$_GET['content'];
		if($p==false){
			$p=0;
		}
// 		dump($_GET);
		$appList= D("ApplicationName");
		//import("ORG.Util.Page");
		$data=array(
				'Application_Name'=>$content,
				);
		$bool=$appList->where('ApplicationName_ID='.$number)->setField($data);
		if($bool==true){
			$error='修改成功！';
			$this->promptInfor='修改成功！';
		}else{
			$error='修改失败！';
			$this->promptInfor='修改失败！';
		}
		//$_GET['promptInfor']=($this->promptInfor);
 		$url="Content/applicationList";
		$params="?id=".$id."&p=".$p;
		$params=array(
				'id'=>$id,
				'p'=>$p,
				);
 		$this->redirect($url,$params);
	}
	/**
	 * --增加ApplicationName----
	 */
	public function addApplicationList(){
		$userName = $_SESSION ['userName'];
		if ($userName == null) {
			$this->redirect ( 'User/logOn' );
		}
		dump($_GET);
		$id=$_GET['id'];
		$p=$_GET['p'];
		$number=$_GET['number'];
		$content=$_GET['content'];
		$appList= D("ApplicationName");
		
		$id=($id!=2?1:$id);
		
		$data=array(
				'Application_Name'=>$content,
				'ApplicationList_ID'=>$id,
		);
		$bool=$appList->add($data);
		
		//dump($bool);
		if($bool==true){
			$error='增加成功！';
			$this->promptInfor='增加成功！';
		}else{
			$error='增加失败！';
			$this->promptInfor='增加失败！';
		}
		//$_GET['promptInfor']=($this->promptInfor);
// 		$url="Content/applicationList/";
// 		$params="?id=".$id."&p=".$p;
// 		$this->redirect($url.$params);
		dump($error);
	}
	
}