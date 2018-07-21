<?php
$arr = [
  0=>['id'=>1,'name'=>'父1','father'=>0],
  1=>['id'=>2,'name'=>'父2','father'=>0],
  2=>['id'=>3,'name'=>'父3','father'=>0],
  3=>['id'=>4,'name'=>'儿1-1','father'=>1],
  4=>['id'=>5,'name'=>'儿1-2','father'=>1],
  5=>['id'=>6,'name'=>'儿1-3','father'=>1],
  6=>['id'=>7,'name'=>'儿2-1','father'=>2],
  7=>['id'=>8,'name'=>'儿2-1','father'=>2],
  8=>['id'=>9,'name'=>'儿3-1','father'=>3],
  9=>['id'=>10,'name'=>'儿3-1-1','father'=>9],
  10=>['id'=>11,'name'=>'儿1-1-1','father'=>4],
  11=>['id'=>12,'name'=>'儿2-1-1','father'=>7],
];
function digui($arr,$id=0,$step=0){
	static $tree=array();
	foreach($arr as $key=>$val){
		if($val['father'] == $id){
			$flg = str_repeat('--', $step);
			$val['name'] = $flg.$val['name'];
			$tree[] = $val;
			digui($arr,$val['id'],$step+1);
		}
	}
	return $tree;
}
$tree = digui($arr,0,0);
foreach($tree as $val){
	echo 'id：'.$val['id'].'名称：'.$val['name'].'<br>';
}
	echo '<hr>';

//定义一个数组
$ar = [
	['id'=>1,'name'=>'PHP','father'=>0],
	['id'=>2,'name'=>'thinkphp','father'=>1],
	['id'=>3,'name'=>'laravel','father'=>1],
	['id'=>4,'name'=>'swoole','father'=>1],
	['id'=>6,'name'=>'linux','father'=>0],
	['id'=>7,'name'=>'docker','father'=>6],
	['id'=>5,'name'=>'easyswoole','father'=>4],
];
/**
 * 递归实现无限极分类
 * @param $ar 分类数据
 * @param $id 父类ID
 * @param $step 关联ID
 */
function wux($ar,$id=0,$step=0){
	//静态数组，避免递归调用时，多次声明导致数据覆盖
	static $tree = array();
	//遍历数组
	foreach($ar as $key=>$val){
		//判断是否相等
		if($id == $val['father']){
			//如果相等就执行，顶级分类不会进来
			$str = str_repeat('++',$step);
			//将++放到name前面，区分
			$val['name'] = $str.$val['name'];
			//赋值到数组里面
			$tree[] = $val;
			//递归再去调用一层，到这里进入第二层
			wux($ar,$val['id'],$step+1);
		}
	}
	//执行完毕返回数组
	return $tree;
}
$a = wux($ar);
foreach($a as $va){
	echo 'id：'.$va['id'].'分类：'.$va['name'].'父ID：'.$va['father'].'<br>';
}
echo '<hr>';

$a = serialize($ar);
print_r(unserialize($a));