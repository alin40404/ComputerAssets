<?php

// include_once 'GB.inc';
class UserAction extends Action {
	
	/**
	 * --首页---
	 */
	public function index() {
		if ($_SESSION ['userName'] == null) {
			$this->redirect ( 'User/logOn' );
		}
		
		layout ( true );
		$title = "首页";
		$this->assign ( 'title', $title );
		$this->display ();
	}
	public function logOn() {
		if ($_SESSION ['userName'] != null) {
			$this->redirect ( 'User/index' );
		} else if ($_POST) {
			
			$User = D ( "User" ); // 实例化User对象
			$name = addslashes ( trim ( $_POST ["UserName"] ) );
			$password = md5 ( ($_POST ["Password"]) );
			$condition ["UserName"] = $name;
			$condition ["Password"] = $password;
			
			$result = $User->where ( $condition )->select ();
			if ($result == NULL) { // 登录验证数据
			                       // 验证没有通过 输出错误提示信息
				$error = '用户名或密码错误！';
				$this->assign ( 'UserName', $_POST ["UserName"] );
				// $this->assign ( 'password', $password );
				$this->assign ( 'error', $error );
			} else {
				// 验证通过 执行登录操作
				$_SESSION ['userName'] = $name;
				$remember = $_POST ['RememberMe'];
				if ($remember == true) {
					cookie ( 'userName', $name, 60 * 60 * 24 * 7 );
					cookie ( 'password', $_POST ["Password"], 60 * 60 * 24 * 7 );
				} else {
					// cookie ( 'userName', null );
					cookie ( 'password', null );
				}
				$this->redirect ( 'User/index', '', 3, '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">正在登录...' );
			}
		}
		
		layout ( true );
		$title = "登录";
		$this->assign ( 'title', $title );
		$this->display ();
	}
	public function LogOut() {
		$_SESSION ['userName'] = null;
		layout ( true );
		$this->redirect ( 'User/logOn' );
	}
	public function register() {
		if ($_SESSION ['userName'] != null) {
			$this->redirect ( 'User/index' );
		} else if ($_POST) {
			// $User->registerTime =date('Y-m-d h:i:s', time ());
			$_POST ['registerTime'] = date ( 'Y-m-d H:i:s', time () );
			$_POST ['updateTime'] = date ( 'Y-m-d H:i:s', time () );
			$User = D ( "User" );
			
			// $User->registerTime =date('Y-m-d h:i:s', time ());
			
			if (! $User->create ()) {
				$error = $User->getError ();
				$this->assign ( 'error', $error );
			} else {
				// echo '注册成功！';
				$User->add ();
				$name = $_POST ["UserName"];
				$_SESSION ['userName'] = $name;
				$this->redirect ( 'User/index' );
			}
		}
		layout ( true );
		$title = "注册";
		$this->assign ( 'title', $title );
		$this->display ();
		// echo '密码长度：'.strlen($_POST["Password"]);
	}
	public function EditPerInformation() {
		$User = D ( "User" );
		$userName = $_SESSION ['userName'];
		if ($userName == null) {
			$this->redirect ( 'User/logOn' );
		} else if ($_POST) {
			$email = $_POST ["Email"];
			$petName = $_POST ["PetName"];
			$phone = $_POST ["Phone"];
			// $data['userName']=$userName;
			// $data ['email'] = $email;
			// $data ['petname'] = $petName;
			// $data ['phone'] = $phone;
			// $updateTime=date('Y-m-d H:i :s',time());
			$data = array (
					'Email' => $email,
					'PetName' => $petName,
					'Phone' => $phone,
					// 'updateTime'=>'now()',
					'updateTime' => date ( 'Y-m-d H:i:s', time () ) 
			);
			$bool = $User->where ( 'userName="' . $userName . '"' )->save ( $data );
			// $model=new Model("User");
			// $sql="update `think_user` set
			// email='".$data['Email']."',petName='".$data['PetName']."',phone='".$data['Phone']."',updateTime=now()
			// where userName='$userName' ";
			// //$bool=$model->query($sql);
			// $bool =$model->execute($sql);
			if ($bool == false) {
				$error = "未修改！";
			} else {
				$error = "修改成功！";
			}
		}
		
		$data = $User->where ( 'userName="' . $userName . '"' )->find ();
		
		layout ( true );
		$title = "个人信息";
		$this->assign ( 'title', $title );
		$this->assign ( 'data', $data );
		$this->assign ( 'error', $error );
		$this->assign ( 'updateTime', $data ['updateTime'] );
		$this->display ();
	}
	public function ChangePassword() {
		$userName = $_SESSION ['userName'];
		if ($userName == null) {
			$this->redirect ( 'User/logOn' );
		} else if ($_POST) {
			$oldPassword = md5 ( $_POST ['OldPassword'] );
			// $oldPassword=($_POST['OldPassword']);
			$password = md5 ( $_POST ['password'] );
			$data = array (
					'Password' => $password 
			);
			$User = D ( "User" );
			$bool = $User->where ( 'userName="' . $userName . '" and Password="' . $oldPassword . '"' )->save ( $data );
			if ($bool == false) {
				$error = "原密码有误！";
				// $error = $User->getError ();
			} else {
				$error = "修改成功！";
			}
		}
		layout ( true );
		$title = "修改密码";
		$this->assign ( 'title', $title );
		$this->assign ( 'error', $error );
		$this->display ();
	}
	public function About() {
		layout ( true );
		$title = "关于我们";
		$this->assign ( 'title', $title );
		$this->display ();
	}
	
	public function Test2(){

		$array=array();
		//$array=readUrl();
		//dump($array);
		//header('');
		$url='http://bj.gzwjj.gov.cn/pricegather/priceGatherNew!otherPriceInfo.action?selectDate=2013-01-04&date=2013-1&typeNum=2&type=ajax&cp_id=0024&ti_id=0024';
		$pattern='/<tr height="22" bgcolor="#FFFFFF" align="left" class="tableItem1">.*?<\\/tr>/esi';
// 		$array=readUrl1($url, $pattern);
// 		dump($array);
		
// 		$url='http://bj.gzwjj.gov.cn/pricegather/priceGatherNew!otherPriceInfo.action?cp_id=0020&ti_id=0020&type=null&date=2013-01-08&et_id=4090aa853c1443f7013c1705d59303af';
// 		echo '-------------------','输出二','----------------';
// 		$array=readUrl1($url, $pattern);
// 		dump($array);
		
		$url='http://bj.gzwjj.gov.cn/pdprice/pcMerchandiseInfo!findMiByMcId.action?mc_id=0110';
		$pattern='/<tr bgcolor="#ffffff" height="22">.*?<\\/tr>/esi';
		
// 		echo '-------------------','输出3','----------------';
// 		$array=readUrl1($url, $pattern);
// 		//dump($array);
// 		echo '<br />';
// 		foreach($array{0} as $key=>$value){
// 			echo $value,' ';
// 		}
		$a=2;
		$b=3;
		if($a=0&&$b=5){
			$a++;
			$b++;
		}
		dump($a,$b);
		
		$c=$a?1:$a<$b?2:3;
		dump($c);
		
		if($a=0 and $b=5){
			$a++;
			$b++;
		}
		dump($a,$b);//0,3
		
		dump($a=0 && $b=5,$a);
		
		
		$str='abc hello world';
	 	echo strstr($str, 'hello');
		
		//$replace=preg_replace($preg, '1111', $content1);
		//preg_match($preg, $content1,$replace1);
		//$replace1= preg_grep($preg, $content1);
		//dump($replace);
// 		dump($replace1);
	}
	
	public function Test1() {
		$title = "测试1";
		
		$url='http://bj.gzwjj.gov.cn/pdprice/pcMerchandiseInfo!findMiByMcId.action?mc_id=0110';
		$pattern='/<tr bgcolor="#ffffff" height="22">.*?<\\/tr>/esi';
		
		echo '-------------------','输出3','----------------';
		$array=readUrl1($url, $pattern);
	foreach($array as $key=>$value){
		foreach ($value as $key1=>$value1){
			$array{$key}{$key1}=iconv('gbk', 'utf-8', $value1);
		}
		
		}
		
		//dump($array);
		
		$this->assign ( 'title', $title );
		
		$this->assign('array',$array);
		$this->display ();
		

		
	}
		
	public function Test() {
		if ($_POST) {
			echo ($_POST ['element']);
			dump ( $_POST ['element'] );
			return;
		}
		
		echo date ( 'Y-n-d H:i:s', 1245455 ), '<br />';
		echo date ( 'Y-n-d H:i:s', 1245455 ), '<br />';
		echo date ( 'Y-n-j H:i:s', time () - 60 * 60 * 24 ), '<br />';
		// $b=null;
		// $b ? print "true" : print "false";
		// $b ? echo "true" : echo "false";
		echo date ( 'Y-n-d H:i:s', strtotime ( '-1 day' ) ), '<br />';
		echo strrev ( "alin.chen" ), '<br />';
		$str = 'testdsaf';
		for($i = 1; $i <= strlen ( $str ); $i ++) {
			echo substr ( $str, - $i, 1 );
		}
		// echo "<br />",substr($str, -1,1);
		
		$this->display ();
		
		$ch = '中文乱码问题的解决方法';
		$str = mb_substr ( $ch, 0, 7, 'utf-8' );
		$str1 = mb_strcut ( $ch, 0, 7, 'utf-8' );
		echo '<br />', $ch, '<br />', $str, '<br />', $str1, mb_strlen ( $ch, 'utf-8' ), strlen ( $ch ), '<br />', $ch {11};
		echo '<br />', $_SERVER ['REMOTE_ADDR'], '<br />', $_SERVER ['SERVER_ADDR'];
		echo '<br />', getenv ( 'REMOTE_ADDR' ), '<br />', getenv ( 'SERVER_ADDR' ), '<br />', gethostbyname ( 'http://localhost:8001' );
		echo '<br />', gethostbyname ( 'http://www.baidu.com' ), '<br />', gethostbyname ( '127.0.0.1' );
		// echo '<br />',getenv($varname);
		// dump($_SERVER);
		// echo file_get_contents('http://www.baidu.com/');
		// $open=fopen('http://www.google.com/', 'rb');
		// $contents=stream_get_contents($open);
		// fclose($open);
		// echo $contents;
		$show = <<<SHOW
mysql username is alin;
SHOW;
		echo '<br />', $show;
		// error_reporting(0);
		$subject = "fe.esf-d@s-23d.com";
		// $preg='/^([a-z0-9]+[_-.]?)+[a-z0-9]+@([a-z0-9]+[_-.]?)+[a-z0-9]+\.[a-z]{2,4}$/i';
		$preg = '/^[a-z0-9-_.]+@[a-z0-9-.]+\.[a-z]{2,4}$/i';
		echo '<br />ddd--', preg_match ( $preg, $subject );
		$ereg = '^[a-z0-9_.-]+@[a-z0-9.-]+\.[a-z]{2,4}$';
		// if(eregi($ereg, $subject))
		echo '<br />dd23--', eregi ( $ereg, $subject ), '<br />';
		// echo $_SERVER['SCRIPT_FILENAME']."?".$_SERVER['QUERY_STRING'];
		$script_name = basename ( __file__ );
		
		$str = __FILE__;
		dump ( split ( '[\]', $str ) );
		dump ( explode ( '\\', $str ) );
		dump ( $script_name );
		print_r ( $script_name );
		$users = array (
				'username' => 'alin' 
		);
		$users [] = 'john';
		dump ( $users );
		// array_add($users,'john');
		array_push ( $users, 'john' );
		dump ( $users );
		
		$con = mysql_connect ( 'localhost', 'alin', '40404chen' );
		$db = mysql_select_db ( 'account', $con );
		$query = 'select * from think_user';
		$result = mysql_query ( $query );
		echo '-------------------------mysql-------------------------';
		$arr=mysql_fetch_row($result);
		dump($arr);
		$arr=mysql_fetch_assoc($result);
		dump($arr);
		$arr = mysql_fetch_array ( $result );
		dump($arr);
		echo '-------------------------mysql-------------------------<br />';
		//dump(mysql_num_rows($result));
		
		echo '<select name="username" value="">';
		while ( $arr = mysql_fetch_array ( $result ) ) {
			// dump($arr);
			echo '<option value="', $arr {'UserName'}, '">', $arr {'UserName'}, '</option>';
		}
		echo '</select>';
		// echo mysql_num_rows($result);
		
		mysql_close ( $con );
		
		$arr = explode ( '\\', $str );
		$str3 = implode ( '\\', $arr );
		echo $str3 [0], $str3 {0};
		echo substr ( $str3, 0, 1 );
		$str4 = "http://www.sina.com.cn/abc/de/f.asdg.php?id=1";
		$arr = (parse_url ( $str4 ));
		dump ( $arr );
		$file = basename ( $arr ['path'] );
		$ext = explode ( '.', $file );
		$index = count ( $ext );
		echo $ext {$index - 1};
		dump ( __FILE__ );
		dump ( basename ( __FILE__ ) );
		dump ( dirname ( __FILE__ ) );
		dump ( 8 % (- 2) );
		
		echo '----------------------------------------------------------';
		if (get_magic_quotes_gpc () == 0) {
			echo '关闭', addslashes ( $str );
		} else {
			dump ( '打开' . ($str) );
		}
		ECHO '+++++++++++++++++++++++++++++++++ $_SERVER ++++++++++++++++++++++++++++++++++++++';
		dump ( $_SERVER );
		
		eCho '+++++++++++++++++++++++++++++++++  $_SERVER{\'REQUEST_URI\'}   ++++++++++++++++++++++++++++++++++++++++++++';
		dump ( $_SERVER {'REQUEST_URI'} );
		echo '++++++++++++++++++++++ $_GET ++++++++++++++++++++++';
		dump ( $_GET );
		echo '++++++++++++++++++++++ $_POST ++++++++++++++++++++++';
		dump ( $_POST );
		echo '++++++++++++++++++++++ $_ENV ++++++++++++++++++++++';
		dump ( $_ENV );
		echo '++++++++++++++++++++++ $_REQUEST ++++++++++++++++++++++';
		dump ( $_REQUEST );
		echo '++++++++++++++++++++++ $_COOKIE ++++++++++++++++++++++';
		dump ( $_COOKIE );
		echo '++++++++++++++++++++++ $_SESSION ++++++++++++++++++++++';
		dump ( $_SESSION );
		echo '++++++++++++++++++++++ $_FILES ++++++++++++++++++++++';
		dump ( $_FILES );
		
		echo print (array (
				"srtrrrr" 
		)) ;
		$a = 10;
		$b = 2;
		$c = 5;
		
		dump ( max ( array (
				$a,
				$b,
				$c 
		) ) );
		echo $_SERVER ['HTTP_REFERER'];
		$value = array (
				'name' => 'alin',
				'age' => 21,
				'pit' => 'alin.chen' 
		)
		;
		$v = serialize ( $value );
		$V = unserialize ( $v );
		// echo $v,'<br />';
		dump ( $v );
		dump ( $V );
		$str='open_door';
		$str1=str_replace( '_', ' ',$str);
		dump($str1);
		$toupper=ucwords($str1);
		$toupper=str_replace(' ', '', $toupper);
		var_dump($toupper);
		
	function set_ucwords($words){
	$temp=str_replace('_',' ',$words);
	$temp=ucwords($temp);
	$temp=str_replace(' ','',$temp);
	return $temp;
}
echo '+++++++++++++++++++++++++++++++++++++++++++++++++';
		dump(set_ucwords($str));
// 		echo error_reporting(2047);
dump($_SERVER['HTTP_REFERER']);

$script="以下内容不显示：<script language='javascript'>alert('cc');</script>";
// dump(htmlspecialchars($script));
// dump(htmlspecialchars($script));

$string= preg_replace("/<script[^>].*?>.*?<\\/script>/si", "替换内容", $script);

// dump(htmlspecialchars($string));
dump($string);

// dump(htmlentities($string));
	function strreverse($string){
		$len=strlen($string);
		$strrev='';
		for($i=$len-1;$i>=0;$i--){
			$strrev.=$string{$i};
		}
		return $strrev;
	}
	$string='addweeewwwerfrg4tththwweeee';
	dump($string);
dump(strreverse($string));
$dir='dir/upload.image.jpg';
$temp=substr($dir, strrpos($dir, '.'));
dump($temp);
dump(array_pop(explode('.', $dir)));
$tempArr=pathinfo($dir);
dump($tempArr{'extension'});
  $temp=strrev(strstr(strrev($dir), '.'));
	dump($temp);
	//ereg_replace($pattern, $replacement, $string);
	$date='08/26/2003';
	print ereg_replace("([0-9]+)/([0-9]+)/([0-9]+)","\\2/\\1/\\3",$date);
	echo '<br />';
	print preg_replace('/([0-9]+)\\/([0-9]+)\\/([0-9]+)/','\\3-\\1-\\2', $date);
	
	$arr=array(
			1=>'asd',
			2=>'dfe',
			3=>'deef',
			'afd'=>'dfef',
			332=>'faslai',
			'alin'=>'anenww',
			);
	dump($arr);
// 	sort($arr);   ---索引从0开始
// 	dump($arr);   
// 	asort($arr);   --按字典顺序排序
// 	dump($arr);
// 	arsort($arr);   --按字典倒序排序
// 	dump($arr);
// 	ksort($arr);   --数组索引按字典顺序排序
// 	dump($arr);
	$savepath='./session_save_dir/';
	session_save_path($savepath);
	//$preg='/^[a-z0-9_.-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i';
	
// 	$lifetime=24*3600;
// 	session_set_cookie_params($lifetime);
// 	session_start();

	dump(__FILE__);
	dump(basename(__FILE__));
	
// 	$path='http://www.baidu.com';
// 	$handle=fopen($path,'r');
// 	$content=stream_get_contents($handle);	
// 	fclose($handle);
// 	echo $content;

	dump (1=='php');
}


	public function Show(){
		echo urlShort("http://php10000.com");
		$s=2800;
		$incr=0.1;
		$year=3;
		$sum=salary($s, $incr, $year);
		dump($sum);
		dump($_REQUEST);
		dump($_POST);
		dump($_GET);
		$array[2]='google';
		$array[0]='baidu';
		$array[1]='soso';
		dump($array);
	}

}





