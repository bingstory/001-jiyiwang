<?php 
class Category{
	//组合一维数组
	Static Public function unlimitedForLevel($cate,$html = '--',$pid = 0,$level = 0){
		$arr = array();
        foreach($cate as $id=>$v){
             if($v['pid'] == $pid){ 
                $v['level'] = $level + 1;
                $v['html'] = str_repeat($html, $level);
                $arr[] = $v;
                $arr = array_merge($arr,self::unlimitedForLevel($cate,$html,$v['id'],$level + 1));
             }
        }
        return $arr;
	}

    //组合多为数组
	Static Public function unlimitedForLayer($cate, $pid = 0){
		$arr = array();
		foreach($cate as $id=>$v){
			if($v['pid'] == $pid){
				$v['child'] = self::unlimitedForLayer($cate,$v['id']);
				$arr[] = $v;
		} 
	}
	return $arr;
    }

    //根据子分类id，返回所有父级
    Static public function getParent($cate,$id){
    	$arr = array();
        foreach($cate as $v){  
        	if($v['id'] == $id){
        		 $arr[] = $v;
                 $arr = array_merge(self::getParent($cate,$v['pid']),$arr); 
        	}
        }
        return $arr;
    }

    //根据父级id，返回所有子分类id
    Static public function getChildId($cate,$pid){
    	$arr = array();
    	foreach ($cate as $id => $v) {
    		if($v['pid'] == $pid){ 
    			$arr[] = $v['id'];
    			$arr = array_merge($arr,self::getChildId($cate,$v['id'])); 
    		}
    	}
    	return $arr;
    }

     //根据父级id，返回所有子分类
    Static public function getChild($cate,$pid){
    	$arr = array();
    	foreach ($cate as $id => $v) {
    		if($v['pid'] == $pid){ 
    			$arr[] = $v;
    			$arr = array_merge($arr,self::getChildId($cate,$v['id'])); 
    		}
    	}
    	return $arr;
    }
}
 ?>