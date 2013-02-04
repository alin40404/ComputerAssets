<?php

function readUrl($url='http://bj.gzwjj.gov.cn/wjj/retailTutorPrice!netPageInfo.action',$pattern1='/<tr class="td[6|7]?" onmouseover="this.className=\'tr_o\'" onmouseout="this.className=\'tr_[d|s]?\'">.*?<\\/tr>/esi',$pattern2=''){
	//$path='http://bj.gzwjj.gov.cn/wjj/retailTutorPrice!netPageInfo.action';
	if($url==null){
		return false;
	}

	$content=file_get_contents($url);

	//$preg='/<tr><td><table width="100%" border="1" class="table12" cellpadding="3" cellspacing="0" align=center>(.*?)<\\/tr><\\/table>/esi';
	#$preg='/<td><table[^>](.*?)>(.*?)<\\/table>/esi';
	
	#$pattern='/<tr class="td[6|7]?" onmouseover="this.className=\'tr_o\'" onmouseout="this.className=\'tr_[d|s]?\'">.*?<\\/tr>/esi';
	$matches=array();
	preg_match_all($pattern1, $content, $matches);
	//dump($matches);
	$array=array();
	$patt1='/<b>.*?<\\/b>/esi';
	#$patt3='/<td width=\'20%\' align="left" valign="middle">.*?<\\/td>/esi';
	$patt2='/<td[^>].*?>.*?<\\/td>/esi';
	
	$tempArr='';
	foreach($matches{0} as $key=>$value){
		//dump($value);
			
		//if(stristr('<b>', $value)==false){
	
		preg_match_all($patt2, $value,$temp);
		$t1= $temp{0};
		$count=count($t1);
	
	
		if($count<=1){
			$value1=$t1{0};
			$temp1=preg_replace('/<(\\/)?td.*?>/esi', '', $value1);
			$temp1=str_replace('<b>', '', $temp1);
			$tempArr=str_replace('</b>', '', $temp1);
			$array[$tempArr]=array();
		}else{
				
			$arr1=array();
			// 				$arr2=array();
			for ($i=0;$i<$count;$i++){
				$value1=$t1{$i};
				$temp1=preg_replace('/<(\\/)?td.*?>/esi', '', $value1);
				$arr1[]=trim($temp1);
	
				if($i%2==1){
					if($arr1[0]!='&nbsp;'&&$arr1[0]!='&nbsp;'){
						//$array[$arr1{0}]=trim($arr1{1});
						$array{$tempArr}[]=$arr1;
					}
					//dump($arr1);
					$arr1=null;
				}
				//dump($temp1);
					
			}
		}
		// 				dump($temp);
		//  				$temp=preg_replace('<().*', '', $temp);
		// 				if(is_array($temp)){
		// 					$array[$temp{0}]=$temp{1};
		// 				}else{
		// 					$array[]=$temp;
		// 				}
		// 				$keyTemp=$temp;
		// 				preg_match($patt3, $value,$temp);
	
		// 			}else{
		// 				preg_match($patt1, $value,$temp);
		// 				//$temp=preg_replace('<()?b>', '', $temp);
		// 				$temp=str_replace('<b>', '', $temp{0});
		// 				$temp=str_replace('</b>', '', $temp);
		// 				$array[]=$temp;
		// 			}
	}
	return $array;
}

	/**
	 * 
	 * @param string $url
	 * @param string 配备的正则表达式 $pattern
	 * @param string 配备字符串的正则表达式 $pattern1，默认一行中的每一列
	 * @param array 去掉的正则表达式数组 $pattern2
	 * @return boolean|array
	 */
	function readUrl1($url,$pattern,$pattern1='/<td[^>].*?>.*?<\\/td>/esi',$pattern2=array(0=>'/<(\\/)?td.*?>/esi',)){
		if($url==null){
			return false;
		}
		$content=file_get_contents($url);
		$matches=array();
		preg_match_all($pattern, $content, $matches);
		$array=array();
		#$patt='/<td[^>].*.*?<\\/td>/esi';
		
		//$tempArr='';
		foreach($matches{0} as $key=>$value){
		
			preg_match_all($pattern1, $value,$temp);
			//dump($temp);
	  //	foreach($temp as $kTemp=>$t1){
			$t1= $temp{0};
// 			dump($t1);
			foreach($t1 as $key1=>$value1){
				foreach($pattern2 as $key2=>$value2){
					//dump($value2);
				$value1=preg_replace($value2, '', $value1);
				
				}
				$t1{$key1}=trim($value1);
				
			}
			//dump($t1);
			$array[]=$t1;
		}
// 		}
		return $array;
	}
	

	
	function base62($x)
	{
		$show = '';
		while($x > 0) {
			$s = $x % 62;
			if ($s > 35) {
				$s = chr($s+61);
			} elseif ($s > 9 && $s <=35) {
				$s = chr($s + 55);
			}
			$show .= $s;
			$x = floor($x/62);
		//	dump('floor:'.$x);
		}
		return $show;
	}
	
	/**
	 -----------生成短网址算法-----------
	 * @param string $url
	 * @return string
	 */
	function urlShort($url)
	{
		$url = crc32($url);
		//dump('url:'.$url);
		$result = sprintf("%u", $url);
		//dump('url:'.$result);
		return base62($result);
	}
	
	/**
	 +++++++++++++++算几年后的工资++++++++++++++++++++
	 * @param double $startSalary 起薪
	 * @param double $increase 涨幅,单位%
	 * @param int $year 年数
	 * @return double 工资
	 */
	function salary($startSalary,$increase,$year){
		$sum=$startSalary;
		if($year<1){
			$year=1;
		}
		for($i=1;$i<=$year;$i++){
			$sum+=$sum*$increase;
		}
		
		return $sum;
	}
	